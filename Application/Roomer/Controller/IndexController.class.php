<?php
namespace Roomer\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->checkSession();
        $this->display();
    }
    //验证码生成
    public function verify_c(){
        $Verify = new \Think\Verify();
        $Verify->fontSize = 18;
        $Verify->length   = 4;
        $Verify->useNoise = false;
        $Verify->codeSet = '0123456789ABC';
        $Verify->imageW = 130;
        $Verify->imageH = 50;
        //$Verify->expire = 600;
        $Verify->entry();
    }
    public function info(){
        $this->checkSession();
        $r_name = $_SESSION['roomer_name'];
        $last_login_time=$_SESSION['last_login_time'];
        $employe=M('roomer')->where("roomer_name='$r_name'")->find();
        $this->assign("r_name",$employe["roomer_name"]);
        $this->assign('last_login_time',$last_login_time);
        $this->display();
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