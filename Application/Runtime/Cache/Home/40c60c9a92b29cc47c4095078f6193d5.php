<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>客户个人中心</title>
    <link rel="stylesheet" href="/hotel/Public/css/pintuer.css">
    <link rel="stylesheet" href="/hotel/Public/css/admin.css">
    <script src="/hotel/Public/js/jquery.js"></script>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
    <div class="logo margin-big-left fadein-top">
        <h1><img src="/hotel/Public/images/tb.jpg" class="radius-circle rotate-hover" height="50" alt="" />个人中心</h1>
    </div>
    <div class="head-l"><a class="button button-little bg-green" href="<?php echo U('index/index');?>" target="_blank"><span class="icon-home"></span> 酒店首页</a> <a class="button button-little bg-red" href="<?php echo U('login/logout');?>" onclick="return confirm('确认退出？')"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
    <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
    <h2><span class="icon-user"></span>基本设置</h2>
    <ul style="display:block">
        <li><a href="<?php echo U('center/user_info');?>" target="right"><span class="icon-caret-right"></span>我的资料</a></li>
        <li><a href="<?php echo U('center/pass');?>" target="right"><span class="icon-caret-right"></span>修改密码</a></li>
    </ul>
    <h2><span class="icon-user"></span>我的订单</h2>
    <ul style="display:block">
        <li><a href="<?php echo U('center/user_order');?>" target="right"><span class="icon-caret-right"></span>房间订单</a></li>
        <li><a href="<?php echo U('center/user_productionorder');?>" target="right"><span class="icon-caret-right"></span>商品订单</a></li>
    </ul>
</div>
<script type="text/javascript">
    $(function(){
        $(".leftnav h2").click(function(){
            $(this).next().slideToggle(200);
            $(this).toggleClass("on");
        })
        $(".leftnav ul li a").click(function(){
            $("#a_leader_txt").text($(this).text());
            $(".leftnav ul li a").removeClass("on");
            $(this).addClass("on");
        })
    });
</script>
<ul class="bread">
    <li><a href="<?php echo U('center/info');?>" target="right" class="icon-home"> 首页</a></li>
    <li><a href="##" id="a_leader_txt">欢迎页</a></li>
</ul>
<div class="admin">
    <iframe scrolling="auto" rameborder="0" src="<?php echo U('center/info');?>" name="right" width="100%" height="100%"></iframe>
</div>
</div>
</body>
</html>