<?php
namespace Admin\Controller;
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
        $e_name = $_SESSION['employe_name'];
        $last_login_time=$_SESSION['last_login_time'];
        $employe=M('employe')->where("employe_name='$e_name'")->find();
        $this->assign("e_name",$employe["employe_name"]);
        $this->assign('last_login_time',$last_login_time);
        $this->display();
    }
    public function checkSession(){
        $employe_id = $_SESSION['employe_id'];
        if(isset($employe_id)){
            $this->assign('employe_id',$employe_id);
        }else{
            $this->error("需先登录,方可进行查询！",U('Login/index'));
        }
    }
}