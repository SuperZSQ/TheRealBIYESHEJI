<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/30
 * Time: 13:20
 */

namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller
{
    public function index()
    {
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
    //用户登录
    public function login(){

        if (IS_POST) {
            $e_id = $_POST['e_id'];//提取用户名
            $e_password = md5($_POST['e_password']); // 提取密码并进行加密
            //$e_password = $_POST['e_password']; // 提取密码并进行加密
            // 检查验证码
        /*    $verify = I('param.verify','');
            if(!check_verify($verify)){
                $this->error("亲，验证码输错了哦！",$this->site_url,1);
            }else*/


            //账号匹配
            if ($employe = M('employe')->where("employe_id='$e_id' AND employe_password='$e_password'")->find()) {
                // 写入原来登陆信息
                /*$user_id = $user['user_id'];//提取用户id*/
                /*  $last['login_time'] = $user['login_time']+1;//登录次数加1
                 $_SESSION['last_login_time'] = $user['last_login_time'];//提取该用户上次登录时间
                 $last['last_login_time'] = date("Y-m-d h:i:s");//记录当前登录时间
                 M('user')->where("user_id=$user_id")->save($last);//修改数据库*/
                $_SESSION['last_login_time'] = $employe['last_login_time'];//提取该用户上次登录时间
                $last['last_login_time'] = date("Y-m-d H:i:s");//记录当前登录时间
                M('employe')->where("employe_id=$e_id")->save($last);//修改数据库
                $e_id = $employe['employe_id'];//提取用户id
                $e_name=$employe['employe_name'];
                $_SESSION['employe_id']=$e_id;
                $_SESSION['employe_name']=$e_name;

                $this->redirect('Index/index');
            }else{
                $this->error('登陆失败，工号或密码错误！');
            }
        }else{
            $this->error('网页出错');
        }
    }


    // 退出
    public function logout(){
        session(null);
        $this->redirect('login/index');
    }
}