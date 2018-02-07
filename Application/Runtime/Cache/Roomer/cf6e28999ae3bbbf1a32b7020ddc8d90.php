<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>网站信息</title>
    <link rel="stylesheet" href="/hotel/Public/css/pintuer.css">
    <link rel="stylesheet" href="/hotel/Public/css/admin.css">
    <script src="/hotel/Public/js/jquery.js"></script>
    <script src="/hotel/Public/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 欢迎页</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="">
            <div class="form-group">
                   <center> <h1><font color="blue"><?php echo ($r_name); ?></font>店长,您好!海悦因你付出而辉煌！</h1></center>
            </div>
            <div class="form-group">
                <center><p>上次登录时间：<font color="red"><h3><?php echo ($last_login_time); ?></h3></font></p>
                    <p>请妥善保管您的账户和密码，离开本系统切记退出系统。</p>
                           <p>请定时更改密码，避免不安全因素。</p>


                </center>

            </div>
        </form>
    </div>
</div>
</body></html>