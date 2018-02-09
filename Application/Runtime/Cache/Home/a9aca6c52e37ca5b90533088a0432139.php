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
    <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 个人信息</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="">
            <div class="form-group">
                <center> <h1>欢迎来到龙峰酒店</h1></center>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>账户：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <?php echo ($user_nickname); ?>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>姓名：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <?php echo ($user_name); ?>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>身份证：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <?php echo ($user_idcard); ?>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>手机号：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <?php echo ($user_mobile); ?>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>邮箱地址：</label>
                </div>
                <div class="field">
                    <label style="line-height:33px;">
                        <?php echo ($user_email); ?>
                    </label>
                </div>
            </div>
            <div class="form-group">
               <!-- <div class="label">
                </div>
                <button class="button bg-main icon-check-square-o" type="submit"> 修改</button>
            </div>-->
        </form>
    </div>
</div>
</body></html>