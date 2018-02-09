<?php
/**
 * Created by PhpStorm.
 * User: ternence
 * Date: 2016/11/19
 * Time: 00:17
 */

namespace Roomer\Controller;
use Think\Controller;

class ProfitController extends Controller
{
    public function index(){
        $this->checkSession();
        $this->month_stat_past_year();
        $this->display();
    }
    public  function  month_stat_past_year(){
        $this->checkSession();
        $thisyear = date('Y');
        $thismonth = date('m');
        $thismonth = (int)$thismonth;
        $monthArray[0]=$thismonth;
        $yearArray[0]=$thisyear;

        //统计近十二个月来各个房间的收益
        $LuxurySingle[0] = M('room_order')->where("category='豪华单人房' AND year(starttime)='$thisyear' AND month(starttime) = '$thismonth' AND order_status='已支付' ")->sum(price);
        $LuxuryDouble[0] = M('room_order')->where("category='豪华双人房' AND year(starttime)='$thisyear' AND month(starttime) = '$thismonth' AND order_status='已支付' ")->sum(price);
        $StandardSingle[0] = M('room_order')->where("category='标准单人房' AND year(starttime)='$thisyear' AND month(starttime) = '$thismonth' AND order_status='已支付' ")->sum(price);
        $StandardDouble[0] = M('room_order')->where("category='标准双人房' AND year(starttime)='$thisyear' AND month(starttime) = '$thismonth' AND order_status='已支付' ")->sum(price);

        for($i=1;$i<12;$i++){
            $monthArray[$i]=--$thismonth;
            $yearArray[$i]=$thisyear;
            if($thismonth<1) {
                $thisyear=$thisyear-1;
                $thismonth=12+$thismonth;
                $monthArray[$i] =$thismonth;
                $yearArray[$i]=$thisyear;
            }
            $LuxurySingle[$i] = M('room_order')->where("category='豪华单人房' AND year(starttime)='$thisyear' AND month(starttime) = '$thismonth' AND order_status='已支付' ")->sum(price);
            $LuxuryDouble[$i] = M('room_order')->where("category='豪华双人房' AND year(starttime)='$thisyear' AND month(starttime) = '$thismonth' AND order_status='已支付' ")->sum(price);
            $StandardSingle[$i] = M('room_order')->where("category='标准单人房' AND year(starttime)='$thisyear' AND month(starttime) = '$thismonth' AND order_status='已支付' ")->sum(price);
            $StandardDouble[$i] = M('room_order')->where("category='标准双人房' AND year(starttime)='$thisyear' AND month(starttime) = '$thismonth' AND order_status='已支付' ")->sum(price);
        }

            for($i=0;$i<12;$i++){
            if ($LuxurySingle[$i]=='')
                $LuxurySingle[$i]=0;
            if ($LuxuryDouble[$i]=='')
                $LuxuryDouble[$i]=0;
            if ($StandardSingle[$i]=='')
                $StandardSingle[$i]=0;
            if ($StandardDouble[$i]=='')
                $StandardDouble[$i]=0;
        }
        $limit = (int)max(max($LuxurySingle),max($LuxuryDouble),max($StandardSingle),max($StandardDouble));
        $size = (int)(strlen(round($limit)));
        $a = pow(10, $size);
        $pre = floor($a/20);
        $this->assign('LuxurySingle',$LuxurySingle);
        $this->assign('LuxuryDouble',$LuxuryDouble);
        $this->assign('StandardSingle',$StandardSingle);
        $this->assign('StandardDouble',$StandardDouble);
        $this->assign('yearArray',$yearArray);
        $this->assign('monthArray',$monthArray);
        $this->assign('limit',$a);
        $this->assign('pre',$pre);
    }

    public function pie(){
        $thismonth = date('m');
        $LuxurySingle = M('room_order')->where("category='豪华单人房'   AND order_status='已支付'  AND month(starttime) = '$thismonth'")->sum(price);
        $LuxuryDouble = M('room_order')->where("category='豪华双人房'   AND order_status='已支付'  AND month(starttime) = '$thismonth'")->sum(price);
        $StandardSingle = M('room_order')->where("category='标准单人房' AND order_status='已支付'  AND month(starttime) = '$thismonth'")->sum(price);
        $StandardDouble = M('room_order')->where("category='标准双人房' AND order_status='已支付'  AND month(starttime) = '$thismonth' ")->sum(price);
        $this->assign('LuxurySingle',$LuxurySingle);
        $this->assign('LuxuryDouble',$LuxuryDouble);
        $this->assign('StandardSingle',$StandardSingle);
        $this->assign('StandardDouble',$StandardDouble);
        $this->display();
    }
    public function analysis(){
        $this->checkSession();
        $this->writeMsg();
        $this->read();
        $this->display();

    }
    public function writeMsg(){
        $this->checkSession();
        $id=M('user')->field('user_IDcard')->select();
        $output = "";
        foreach($id as $i){
            $output.=$i['user_idcard']."\n";
        }
        file_put_contents('analysis.txt',$output);
    }
    public function read(){
        $this->checkSession();
        $handle = fopen('analysis.txt','r');
        while (!feof($handle)){
            $m[]=trim(fgets($handle,4096));
        }
        $m = array_filter($m);
        foreach ($m as $i){
            if (strlen($i)==18){
                $info[] = mb_substr($i,8,9,'utf-8');
                $provinces[]=mb_substr($i,0,2,'utf-8');
            }else if (strlen($i)==15){
                $info[] = mb_substr($i,6,9,'utf-8');
                $provinces[]=mb_substr($i,0,2,'utf-8');
            }else{
                return;
            }
        }
        $fifthMan=$fifthWoman=$sixMan=$sixWoman=$sevenhMan=$sevenWoman=$eightMan=$eightWoman=
            $nineMan=$nineWoman=$zeroMan=$zeroWoman=0;
        //判断不同群体的人类
        foreach ($info as $a){
            //50年代
            switch (true) {
                case ($a[0] == '5' && $this->isOdd($a[8]) == '男'):
                    $fifthMan++;
                    break;
                case ($a[0] == '5' && $this->isOdd($a[8]) == '女'):
                    $fifthWoman++;
                    break;
                case ($a[0] == '6' && $this->isOdd($a[8]) == '男'):
                    $sixMan++;
                    break;
                case ($a[0] == '6' && $this->isOdd($a[8]) == '女'):
                    $sixWoman++;
                    break;
                case ($a[0] == '7' && $this->isOdd($a[8]) == '男'):
                    $sevenhMan++;
                    break;
                case ($a[0] == '7' && $this->isOdd($a[8]) == '女'):
                    $sevenWoman++;
                    break;
                case ($a[0] == '8' && $this->isOdd($a[8]) == '男'):
                    $eightMan++;
                    break;
                case ($a[0] == '8' && $this->isOdd($a[8]) == '女'):
                    $eightWoman++;
                    break;
                case ($a[0] == '9' && $this->isOdd($a[8]) == '男'):
                    $nineMan++;
                    break;
                case ($a[0] == '9' && $this->isOdd($a[8]) == '女'):
                    $nineWoman++;
                    break;
                case ($a[0] == '0' && $this->isOdd($a[8]) == '男'):
                    $zeroMan++;
                    break;
                case ($a[0] == '0' && $this->isOdd($a[8]) == '女'):
                    $zeroWoman++;
                    break;
                }
            }
            $result[]=0;
            foreach ($provinces as $province){
                $key = $this->analysis_by_province($province);
                $result[$key]+=1;
            }

        $total = $fifthMan+$fifthWoman+$sixMan+$sixWoman+$sevenhMan+$sevenWoman+$eightMan+$eightWoman+$nineMan+$nineWoman+$zeroMan+$zeroWoman;
            $this->assign("fifthMan",$fifthMan/$total);
            $this->assign("fifthWoman",$fifthWoman/$total);
        
            $this->assign("sixMan",$sixMan/$total);
            $this->assign("sixWoman",$sixWoman/$total);
        
            $this->assign("sevenMan",$sevenhMan/$total);
            $this->assign("sevenWoman",$sevenWoman/$total);
        
            $this->assign("eightMan",$eightMan/$total);
            $this->assign("eightWoman",$eightWoman/$total);
        
            $this->assign("nineMan",$nineMan/$total);
            $this->assign("nineWoman",$nineWoman/$total);
        
            $this->assign("zeroMan",$zeroMan/$total);
            $this->assign("zeroWoman",$zeroWoman/$total);
            $this->assign('result',$result);
    }
    //判断男女
    public  function isOdd($a){
        if ($a%2!=0){
            return '男';
        }else if ($a%2==0){
            return '女';
        }else{
            return;
        }
    }
    public function analysis_by_province($a){
        $province = array(
            //华北
            '11'=>"北京", "13"=>'河北',
            '12'=>'天津', "14"=>'山西',
            "15"=>'内蒙古',

            "21"=>'辽宁', "22"=>'吉林',
            '23'=>'黑龙江',

            "31"=>'上海', "32"=>'江苏',
            '33'=>'浙江', "34"=>'安徽',
            "35"=>'福建', "36"=>'江西',
            '37'=>'山东',

            "41"=>'河南', "42"=>'湖北',
            '43=>"湖南', '44'=>"广东",
            "45"=>'广西', "46"=>'海南',

            "50"=>'重庆', "51"=>'四川',
            '52'=>'贵州', "53"=>'云南',
            "54"=>'西藏',

            "61"=>'陕西', "62"=>'甘肃',
            '63'=>'青海', "64"=>'宁夏',
            "65"=>'新疆',

            "71"=>'台湾', "81"=>'香港',
            '82'=>'澳门',
        );
        return $province[$a];
    }
    public function checkSession(){
        $roomer_id = $_SESSION['roomer_id'];
        if(isset($roomer_id)){
            $this->assign('roomer_id',$roomer_id);
        }else{
            $this->error("需先登录,方可进行查询！",U('Login/index'));
        }
    }
}