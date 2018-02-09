<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/31
 * Time: 15:52
 */

/**
 * 验证码检查
 */
function check_verify($code, $id = ""){
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
}
function sendMail($time,$email,$url){
    vendor("PHPMailer.class#smtp");
    vendor("PHPMailer.PHPMailerAutoload");
    $mail = new PHPMailer;
// 使用SMTP方式发送
    $mail->IsSMTP();
//设置编码，否则发送中文乱码
    $mail->CharSet ="UTF-8";
//需要发送邮件的主机IP，以下为QQ主机服务器
    $mail->Host = "smtp.163.com";
// 启用SMTP验证功能
    $mail->SMTPAuth = true;
//发件人邮箱账号
    $mail->Username = "skyternence@163.com";
//发件人邮箱密码
    $mail->Password = "CHALACTER123";
//设置发送人信息(参数1：发送人邮箱，参数2：发送人名称)
    $mail->setFrom('skyternence@163.com', '龙峰酒店');
//收件人邮箱----注意如果是群发，改点for循环添加收件人邮箱
    $mail->addAddress($email, '尊敬的客户');
//邮件主题，即标题
    $mail->Subject = '密码重置';
//邮件内容
    $mail->Body = '您好，您在'.$time."的时候重置了密码，
    请您点击下方的链接确认(10分钟内有效)".$url;
//换行，每行超过多少字符自动换行
    $mail->WordWrap = 100;
//是否发送HTML
//$mail->isHTML(true);
//发送邮件
    return $mail->send();
}
function sendMail1($time,$email,$url){
    vendor("PHPMailer.class#smtp");
    vendor("PHPMailer.PHPMailerAutoload");
    $mail = new PHPMailer;
// 使用SMTP方式发送
    $mail->IsSMTP();
//设置编码，否则发送中文乱码
    $mail->CharSet ="UTF-8";
//需要发送邮件的主机IP，以下为QQ主机服务器
    $mail->Host = "smtp.163.com";
// 启用SMTP验证功能
    $mail->SMTPAuth = true;
//发件人邮箱账号
    $mail->Username = "skyternence@163.com";
//发件人邮箱密码
    $mail->Password = "CHALACTER123";
//设置发送人信息(参数1：发送人邮箱，参数2：发送人名称)
    $mail->setFrom('skyternence@163.com', '龙峰酒店');
//收件人邮箱----注意如果是群发，改点for循环添加收件人邮箱
    $mail->addAddress($email, '尊敬的客户');
//邮件主题，即标题
    $mail->Subject = '激活账户';
//邮件内容
    $mail->Body = '您好，您在'.$time."的时候注册了账户，
    请您点击下方的链接确认".$url;
//换行，每行超过多少字符自动换行
    $mail->WordWrap = 100;
//是否发送HTML
//$mail->isHTML(true);
//发送邮件
    return $mail->send();
}
?>