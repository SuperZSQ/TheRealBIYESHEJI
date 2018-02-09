<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/30
 * Time: 13:20
 */

namespace Home\Controller;
use Think\Controller;

class YudingController extends Controller{
    public static $room_type =  array(
        "StandardSingle"=>"标准单人房",
        "StandardDouble"=>"标准双人房",
        "LuxuriousSingle"=>"豪华单人房",
        "LuxuriousDouble"=>"豪华双人房",
    );
    public function index(){
        $this->nick();
        $user_nickname = $_SESSION['user_nickname'];
        $type = self::$room_type[$_GET['type']];
        $price=M('room')->where("room_category='$type'")->field('room_price')->select();
        $this->assign("price",$price[0]{'room_price'});
        $this->assign("type",$type);
        if(isset($user_nickname)){
            $this->display();
        }else {
            $this->redirect('login/index');
        }
    }

    public function advance(){
        $user_nickname = $_SESSION['user_nickname'];//

        $user_status=M('user')->where("user_nickname='$user_nickname'")->field('user_status')->select()[0]['user_status'];
        $price = $_POST['price'];
        $type=$_POST['type'];//房间类型
        $verify = I('param.verify','');
        $starttime=$_POST['startDate'];//入住时间
        $endtime=$_POST['endDate'];//退房时间
        $a =strtotime($_POST['startDate']);
        $b=strtotime($_POST['endDate']);
        $test=$b-$a;
        $days= floor($test/(3600*24));//锁住预定时间段为1
        $roomIdnum=M('room')->where("room_category='$type'")->field('room_id')->select()[0]['room_id'];//指定输出
        $roomId_count=M('room')->where("room_category='$type'")->field('room_id')->count();//数组长度
        $roomId=M('room')->where("room_category='$type'")->field('room_id')->select();//数组内容
        $user_IDcard=$_POST['user_IDcard'];

        //用户身份证信息校验是否有订单
        $record_StandardSingle1=M('room_order')->where("user_idcard='$user_IDcard' and starttime='$starttime' and endtime='$endtime' and order_status='已支付' and category='标准单人房'")->count();
        $record_StandardSingle2=M('room_order')->where("user_idcard='$user_IDcard' and starttime='$starttime' and endtime='$endtime' and order_status='到店付' and category='标准单人房'")->count();
        $record_StandardDouble1=M('room_order')->where("user_idcard='$user_IDcard' and starttime='$starttime' and endtime='$endtime' and order_status='已支付' and category='标准双人房' ")->count();
        $record_StandardDouble2=M('room_order')->where("user_idcard='$user_IDcard' and starttime='$starttime' and endtime='$endtime' and order_status='到店付' and category='标准双人房'")->count();
        $record_LuxuriousSingle1=M('room_order')->where("user_idcard='$user_IDcard' and starttime='$starttime' and endtime='$endtime' and order_status='已支付' and category='豪华单人房'")->count();
        $record_LuxuriousSingle2=M('room_order')->where("user_idcard='$user_IDcard' and starttime='$starttime' and endtime='$endtime' and order_status='到店付' and category='豪华单人房'")->count();
        $record_LuxuriousDouble1=M('room_order')->where("user_idcard='$user_IDcard' and starttime='$starttime' and endtime='$endtime' and order_status='已支付' and category='豪华双人房'")->count();
        $record_LuxuriousDouble2=M('room_order')->where("user_idcard='$user_IDcard' and starttime='$starttime' and endtime='$endtime' and order_status='到店付' and category='豪华双人房'")->count();

        $data['order_time']=date("y-m-d:H:i:s");
        $data['user_id']=$_SESSION['user_id'];
        $data['category']=$_POST['type'];
        $data['user_name'] = $_POST['name'];
        $data['user_mobile']=$_POST['phone'];
        $data['user_idcard']=$_POST['user_IDcard'];
        $data['starttime'] = $_POST['startDate'];
        $data['endtime']=$_POST['endDate'];
        $data['instatus']='待入住';
        $data['price']=$price*$days;
        $paymethod=$_POST['paymethod'];
        if($paymethod=='onlinepay'){
            $data['order_status']='已支付';
        }else if($paymethod=='facepay'){
            $data['order_status']='到店付';
        }else{
            $this->error('请选择支付方式');
        }

        $name=$_POST['name'];
        $phone=$_POST['phone'];
        /*
        if(!preg_match("/^[\u4E00-\u9FA5\uF900-\uFA2D]*$/",$name)){
            $this->error("姓名格式不正确");
        }*/
        if(!preg_match("/^1[3,5,8]\d{9}$/",$phone)){
            $this->error("手机格式不正确");
        }
        if(!preg_match("/^[1-6][0-9]{5}([1]\d{3}|(([2][0])([01]\d)))(([0][1-9])|([1][0-2]))((([0][1-9])|([12][0-9]))|([3][01]))\d{3}[\dxX]$/",$user_IDcard)){
            $this->error("身份证号格式不正确");
        }

        if(!check_verify($verify)){
            $this->error("亲，验证码输错了哦！");
        }else if($user_status=='待激活'){
            $this->error('服务器繁忙，请稍后重试！');
        }else if($user_status=='黑名单'&&$paymethod=='facepay'){
            $this->error("抱歉，系统暂支持在线支付订单");
        }
        if(empty($record_StandardSingle1)&&empty($record_StandardSingle2)&&empty($record_StandardDouble1)&&empty($record_StandardDouble2)&&empty($record_LuxuriousSingle1)&&empty($record_LuxuriousSingle2)&&empty($record_LuxuriousDouble1)&&empty($record_LuxuriousDouble2)) {
            if (!empty($data['user_name']) && !empty($data['user_mobile']) && !empty($data['user_idcard'])) {//用js进行审核
                for ($i = 0; $i <= $roomId_count; $i++) {//循环输出数组内容
                    $rid = $roomId[$i]['room_id'];
                    $room_order = M('room_order');
                    $a = $room_order->where("room_id='$rid'and starttime<='$starttime'and endtime>'$starttime' and starttime<'$endtime' and endtime>='$endtime'and order_status='到店付'")->select();//内包含
                    $a1 = $room_order->where("room_id='$rid'and starttime<='$starttime'and endtime>'$starttime' and starttime<'$endtime' and endtime>='$endtime'and order_status='已支付'")->select();//内包含

                    $b = $room_order->where("room_id='$rid'and starttime<='$starttime'and endtime>'$starttime' and  endtime<='$endtime'and order_status='到店付'")->select();//右半包含
                    $b1 = $room_order->where("room_id='$rid'and starttime<='$starttime'and endtime>'$starttime' and  endtime<='$endtime'and order_status='已支付'")->select();//右半包含

                    $c = $room_order->where("room_id='$rid'and starttime>='$starttime'and  starttime<'$endtime' and endtime>='$endtime'and order_status='到店付'")->select();//左半包含
                    $c1 = $room_order->where("room_id='$rid'and starttime>='$starttime'and  starttime<'$endtime' and endtime>='$endtime'and order_status='已支付'")->select();//左半包含

                    $d = $room_order->where("room_id='$rid'and starttime>='$starttime' and endtime<='$endtime'and order_status='到店付'")->select();//全包含
                    $d1 = $room_order->where("room_id='$rid'and starttime>='$starttime' and endtime<='$endtime'and order_status='已支付'")->select();//全包含

                    $t = $roomId_count;//该类型的房间数量

                    if ($rid != $roomId[$t]['room_id']) {
                        //  if(!empty($a)||!empty($a1)||!empty($b)||!empty($b1)){//为空 证明无订单 即该时间段无用户入住该房间
                        if (empty($a) && empty($a1) && empty($b) && empty($b1) && empty($c) && empty($c1) && empty($d) && empty($d1)) {
                            M()->startTrans();//开启事务
                            $data['room_id'] = $rid;
                            $flag = M('room_order')->lock(true)->add($data);//记录生成订单
                            if ($flag) {
                                M()->commit();//事务提交
                                $this->success('预订成功，欢迎入住', U('center/index'));;
                                break;
                            } else {
                                M()->rollback();//回滚
                                $this->error('预定失败，请重新预定！');
                            }
                        } else {
                            continue;
                        }
                    } else {
                        $this->error("该房型的房间该时间段已被订满了，请更改房型重试！");
                    }
                }
            } else {
                $this->error('预定失败，资料请填写完整！');
            }
        }else{
            $this->error('你已经有该时间段的订单，请查看个人订单！');
        }

    }


    //验证码生成
    public function verify_c(){
        $Verify = new \Think\Verify();
        $Verify->fontSize = 18;
        $Verify->length   = 4;
        $Verify->useNoise = false;
        $Verify->codeSet = '0123456789';
        $Verify->imageW = 130;
        $Verify->imageH = 50;
        $Verify->entry();
    }
    public function nick(){
        $user_nickname = $_SESSION['user_nickname'];
        if(isset($user_nickname)){
            $url=U('center/index');
            $url1=U('login/logout');
            $tip=$user_nickname;
            $tip1="注销";
        }
        else{
            $url=U('login/index');
            $url1="#";
            $tip="登录|注册";
            $tip1="";
        }
        $this->assign("url",$url);
        $this->assign("tip",$tip);
        $this->assign("url1",$url1);
        $this->assign("tip1",$tip1);
    }
}



