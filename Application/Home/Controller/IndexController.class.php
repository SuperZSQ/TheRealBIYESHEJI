<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller
{
    public function index()
    {

        //$count = M("employe")->where("")->count();

        $this->nick();
        $this->display();
    }

    //目测判断登陆状态
    public function nick(){
        $user_nickname = $_SESSION['user_nickname'];
        //判断isset值是否存在
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

    public function hyquanyi()
    {
        $this->nick();
        $this->display();
    }

    public function environment()
    {
        $this->nick();
        $standardSingle =  M('room')->where("room_category='标准单人房'")->field("room_price")->select();
        $standardDouble =  M('room')->where("room_category='标准双人房'")->field("room_price")->select();
        $luxuriousSingle = M('room')->where("room_category='豪华单人房'")->field("room_price")->select();
        $luxuriousDouble = M('room')->where("room_category='豪华双人房'")->field("room_price")->select();
        $standardSinglePrice = $standardSingle[0]['room_price'];
        $standardDoublePrice = $standardDouble[0]['room_price'];
        $luxuriousSinglePrice = $luxuriousSingle[0]['room_price'];
        $luxuriousDoublePrice = $luxuriousDouble[0]['room_price'];
        $this->assign('standardSinglePrice', $standardSinglePrice);
        $this->assign('standardDoublePrice', $standardDoublePrice);
        $this->assign('luxuriousSinglePrice', $luxuriousSinglePrice);
        $this->assign('luxuriousDoublePrice', $luxuriousDoublePrice);


        $starttime= $_POST['startDate'];//入住时间
        $endtime = $_POST['endDate']; // 退房时间
        $this->assign('startDate', $starttime);
        $this->assign('endDate', $endtime);

        //$type = $_POST['category'];
        $roomId_count_StandardSingle = M('room')->where("room_category='标准单人房'")->field('room_id')->count();//数组长度
        $roomId_StandardSingle = M('room')->where("room_category='标准单人房'")->field('room_id')->select();//数组内容

        $roomId_count_StandardDouble = M('room')->where("room_category='标准双人房'")->field('room_id')->count();//数组长度
        $roomId_StandardDouble = M('room')->where("room_category='标准双人房'")->field('room_id')->select();//数组内容

        $roomId_count_LuxuriousSingle = M('room')->where("room_category='豪华单人房'")->field('room_id')->count();//数组长度
        $roomId_LuxuriousSingle = M('room')->where("room_category='豪华单人房'")->field('room_id')->select();//数组内容

        $roomId_count_LuxuriousDouble = M('room')->where("room_category='豪华双人房'")->field('room_id')->count();//数组长度
        $roomId_LuxuriousDouble = M('room')->where("room_category='豪华双人房'")->field('room_id')->select();//数组内容

        $sum_StandardSingle = 0;
        $sum_StandardDouble = 0;
        $sum_LuxuriousSingle = 0;
        $sum_LuxuriousDouble = 0;

        for ($i = 0; $i <= $roomId_count_StandardSingle; $i++) {//循环输出数组内容 标准单人房
            $rid = $roomId_StandardSingle[$i]['room_id'];
            $room_order = M('room_order');
            $a = $room_order->where("room_id='$rid'and starttime<='$starttime'and endtime>'$starttime' and starttime<'$endtime' and endtime>='$endtime'and order_status='到店付'")->select();//内包含
            $a1 = $room_order->where("room_id='$rid'and starttime<='$starttime'and endtime>'$starttime' and starttime<'$endtime' and endtime>='$endtime'and order_status='已支付'")->select();//内包含

            $b = $room_order->where("room_id='$rid'and starttime<='$starttime'and endtime>'$starttime' and  endtime<='$endtime'and order_status='到店付'")->select();//右半包含
            $b1 = $room_order->where("room_id='$rid'and starttime<='$starttime'and endtime>'$starttime' and  endtime<='$endtime'and order_status='已支付'")->select();//右半包含

            $c = $room_order->where("room_id='$rid'and starttime>='$starttime'and  starttime<'$endtime' and endtime>='$endtime'and order_status='到店付'")->select();//左半包含
            $c1 = $room_order->where("room_id='$rid'and starttime>='$starttime'and  starttime<'$endtime' and endtime>='$endtime'and order_status='已支付'")->select();//左半包含

            $d = $room_order->where("room_id='$rid'and starttime>='$starttime' and endtime<='$endtime'and order_status='到店付'")->select();//全包含
            $d1 = $room_order->where("room_id='$rid'and starttime>='$starttime' and endtime<='$endtime'and order_status='已支付'")->select();//全包含
            $t = $roomId_count_StandardSingle;//该类型的房间数量
            if ($rid != $roomId_StandardSingle[$t]['room_id']) {
                if (empty($a) && empty($a1) && empty($b) && empty($b1) && empty($c) && empty($c1) && empty($d) && empty($d1)) {
                    $sum_StandardSingle+=1;
                } else {
                    continue;
                }
            } else {
                break;
            }
        }

        for ($i = 0; $i <= $roomId_count_StandardDouble; $i++) {//循环输出数组内容 标准双人房
            $rid = $roomId_StandardDouble[$i]['room_id'];
            $room_order = M('room_order');
            $a = $room_order->where("room_id='$rid'and starttime<='$starttime'and endtime>'$starttime' and starttime<'$endtime' and endtime>='$endtime'and order_status='到店付'")->select();//内包含
            $a1 = $room_order->where("room_id='$rid'and starttime<='$starttime'and endtime>'$starttime' and starttime<'$endtime' and endtime>='$endtime'and order_status='已支付'")->select();//内包含

            $b = $room_order->where("room_id='$rid'and starttime<='$starttime'and endtime>'$starttime' and  endtime<='$endtime'and order_status='到店付'")->select();//右半包含
            $b1 = $room_order->where("room_id='$rid'and starttime<='$starttime'and endtime>'$starttime' and  endtime<='$endtime'and order_status='已支付'")->select();//右半包含

            $c = $room_order->where("room_id='$rid'and starttime>='$starttime'and  starttime<'$endtime' and endtime>='$endtime'and order_status='到店付'")->select();//左半包含
            $c1 = $room_order->where("room_id='$rid'and starttime>='$starttime'and  starttime<'$endtime' and endtime>='$endtime'and order_status='已支付'")->select();//左半包含

            $d = $room_order->where("room_id='$rid'and starttime>='$starttime' and endtime<='$endtime'and order_status='到店付'")->select();//全包含
            $d1 = $room_order->where("room_id='$rid'and starttime>='$starttime' and endtime<='$endtime'and order_status='已支付'")->select();//全包含
            $t = $roomId_count_StandardDouble;//该类型的房间数量
            if ($rid != $roomId_StandardDouble[$t]['room_id']) {
                if (empty($a) && empty($a1) && empty($b) && empty($b1) && empty($c) && empty($c1) && empty($d) && empty($d1)) {
                    $sum_StandardDouble+=1;
                } else {
                    continue;
                }
            } else {
                break;
            }
        }

        for ($i = 0; $i <= $roomId_count_LuxuriousSingle; $i++) {//循环输出数组内容 豪华单人房
            $rid = $roomId_LuxuriousSingle[$i]['room_id'];
            $room_order = M('room_order');
            $a = $room_order->where("room_id='$rid'and starttime<='$starttime'and endtime>'$starttime' and starttime<'$endtime' and endtime>='$endtime'and order_status='到店付'")->select();//内包含
            $a1 = $room_order->where("room_id='$rid'and starttime<='$starttime'and endtime>'$starttime' and starttime<'$endtime' and endtime>='$endtime'and order_status='已支付'")->select();//内包含

            $b = $room_order->where("room_id='$rid'and starttime<='$starttime'and endtime>'$starttime' and  endtime<='$endtime'and order_status='到店付'")->select();//右半包含
            $b1 = $room_order->where("room_id='$rid'and starttime<='$starttime'and endtime>'$starttime' and  endtime<='$endtime'and order_status='已支付'")->select();//右半包含

            $c = $room_order->where("room_id='$rid'and starttime>='$starttime'and  starttime<'$endtime' and endtime>='$endtime'and order_status='到店付'")->select();//左半包含
            $c1 = $room_order->where("room_id='$rid'and starttime>='$starttime'and  starttime<'$endtime' and endtime>='$endtime'and order_status='已支付'")->select();//左半包含

            $d = $room_order->where("room_id='$rid'and starttime>='$starttime' and endtime<='$endtime'and order_status='到店付'")->select();//全包含
            $d1 = $room_order->where("room_id='$rid'and starttime>='$starttime' and endtime<='$endtime'and order_status='已支付'")->select();//全包含
            $t = $roomId_count_LuxuriousSingle;//该类型的房间数量
            if ($rid != $roomId_LuxuriousSingle[$t]['room_id']) {
                if (empty($a) && empty($a1) && empty($b) && empty($b1) && empty($c) && empty($c1) && empty($d) && empty($d1)) {
                    $sum_LuxuriousSingle+=1;
                } else {
                    continue;
                }
            } else {
                break;
            }
        }

        for ($i = 0; $i <= $roomId_count_LuxuriousDouble; $i++) {//循环输出数组内容 豪华双人房
            $rid = $roomId_LuxuriousDouble[$i]['room_id'];
            $room_order = M('room_order');
            $a = $room_order->where("room_id='$rid'and starttime<='$starttime'and endtime>'$starttime' and starttime<'$endtime' and endtime>='$endtime'and order_status='到店付'")->select();//内包含
            $a1 = $room_order->where("room_id='$rid'and starttime<='$starttime'and endtime>'$starttime' and starttime<'$endtime' and endtime>='$endtime'and order_status='已支付'")->select();//内包含

            $b = $room_order->where("room_id='$rid'and starttime<='$starttime'and endtime>'$starttime' and  endtime<='$endtime'and order_status='到店付'")->select();//右半包含
            $b1 = $room_order->where("room_id='$rid'and starttime<='$starttime'and endtime>'$starttime' and  endtime<='$endtime'and order_status='已支付'")->select();//右半包含

            $c = $room_order->where("room_id='$rid'and starttime>='$starttime'and  starttime<'$endtime' and endtime>='$endtime'and order_status='到店付'")->select();//左半包含
            $c1 = $room_order->where("room_id='$rid'and starttime>='$starttime'and  starttime<'$endtime' and endtime>='$endtime'and order_status='已支付'")->select();//左半包含

            $d = $room_order->where("room_id='$rid'and starttime>='$starttime' and endtime<='$endtime'and order_status='到店付'")->select();//全包含
            $d1 = $room_order->where("room_id='$rid'and starttime>='$starttime' and endtime<='$endtime'and order_status='已支付'")->select();//全包含
            $t = $roomId_count_LuxuriousDouble;//该类型的房间数量
            if ($rid != $roomId_LuxuriousDouble[$t]['room_id']) {
                if (empty($a) && empty($a1) && empty($b) && empty($b1) && empty($c) && empty($c1) && empty($d) && empty($d1)) {
                    $sum_LuxuriousDouble+=1;
                } else {
                    continue;
                }
            } else {
                break;
            }
        }

        $this->assign("sum_StandardSingle",$sum_StandardSingle);
        $this->assign("sum_StandardDouble",$sum_StandardDouble);
        $this->assign("sum_LuxuriousSingle",$sum_LuxuriousSingle);
        $this->assign("sum_LuxuriousDouble",$sum_LuxuriousDouble);




        //房间介绍
        $show=M('room_show');
        $standardSingle=$show->where("room_category='标准单人房'")->field("room_description")->select();
        $standardDouble=$show->where("room_category='标准双人房'")->field("room_description")->select();
        $luxuriousSingle=$show->where("room_category='豪华单人房'")->field("room_description")->select();
        $luxuriousDouble=$show->where("room_category='豪华双人房'")->field("room_description")->select();
        $standardSingleD=$standardSingle[0]['room_description'];
        $standardDoubleD=$standardDouble[0]['room_description'];
        $luxuriousSingleD=$luxuriousSingle[0]['room_description'];
        $luxuriousDoubleD=$luxuriousDouble[0]['room_description'];
        $this->assign('standardSingle_description',$standardSingleD);
        $this->assign('standardDouble_description',$standardDoubleD);
        $this->assign('luxuriousSingle_description',$luxuriousSingleD);
        $this->assign('luxuriousDouble_description',$luxuriousDoubleD);

        //房间路径
        $standardSingle=$show->where("room_category='标准单人房'")->field("room_pictures")->select();
        $standardDouble=$show->where("room_category='标准双人房'")->field("room_pictures")->select();
        $luxuriousSingle=$show->where("room_category='豪华单人房'")->field("room_pictures")->select();
        $luxuriousDouble=$show->where("room_category='豪华双人房'")->field("room_pictures")->select();
        $standardSingleP=$standardSingle[0]['room_pictures'];
        $standardDoubleP=$standardDouble[0]['room_pictures'];
        $luxuriousSingleP=$luxuriousSingle[0]['room_pictures'];
        $luxuriousDoubleP=$luxuriousDouble[0]['room_pictures'];
        $this->assign('standardSingle_picture',$standardSingleP);
        $this->assign('standardDouble_picture',$standardDoubleP);
        $this->assign('luxuriousSingle_picture',$luxuriousSingleP);
        $this->assign('luxuriousDouble_picture',$luxuriousDoubleP);



        $this->display();
    }
    public function description(){
        $this->display();
    }

}