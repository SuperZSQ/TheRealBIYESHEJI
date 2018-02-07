<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <style>
        #code
        {
            font-family:Arial;
            font-style:italic;
            font-weight:bold;
            border:0;
            font-size:18px;
            letter-spacing:4px;
            color:black;
            background-color:white;
        }
    </style>
    <script type = "text/javascript" src = "/hotel/Public/js/checkCode.js">
    </script>
    <meta charset="utf-8">
    <title>海悦酒店服务台系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link rel="stylesheet" href="/hotel/Public/css/reset_login.css">
    <link rel="stylesheet" href="/hotel/Public/css/supersized_login.css">
    <link rel="stylesheet" href="/hotel/Public/css/style_login.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <![endif]-->

</head>

<body>

<div class="page-container">
    <h1>海悦酒店前台系统</h1>
    <form action="<?php echo U('login/login');?>" method="post">
        <input type="text" name="e_id" id="e_id" class="e_id" placeholder="工号">
        <input type="password" name="e_password" id="e_password" class="password" placeholder="密码">
      <!--  <p  id="captcha-container">
            <input name="verify" height="50" class="inputstyle" type="text">
            <img  class="left15" height="45" alt="验证码" src="<?php echo U('Admin/login/verify_c',array());?>" title="点击刷新">
        </p>-->
        <button type="submit" id="sumbit">登录</button></td>

    </form>


   <!-- <script>
        // 验证码生成
        var captcha_img = $('#captcha-container').find('img')
        var verifyimg = captcha_img.attr("src");
        captcha_img.attr('title', '点击刷新');
        captcha_img.click(function(){
            if( verifyimg.indexOf('?')>0){
                $(this).attr("src", verifyimg+'&random='+Math.random());
            }else{
                $(this).attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
            }
        });
    </script>-->
    <!-- Javascript -->
    <script src="/hotel/Public/js/jquery-1.8.2.min.js"></script>
    <script src="/hotel/Public/js/supersized.3.2.7.min.js"></script>
    <script src="/hotel/Public/js/supersized-init.js"></script>
    <script src="/hotel/Public/js/scripts.js"></script>
    <script type="text/javascript" src ="/hotel/Public/js/checkCode.js"></script></div>

</body>
</html>