<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>酒店服务台中心系统</title>
    <link rel="stylesheet" href="/hotel/Public/css/pintuer.css">
    <link rel="stylesheet" href="/hotel/Public/css/admin.css">
    <script src="/hotel/Public/js/jquery.js"></script>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
    <div class="logo margin-big-left fadein-top">
        <h1><img src="/hotel/Public/images/tb.jpg" class="radius-circle rotate-hover" height="50" alt="" />酒店服务台系统</h1>
    </div>
    <div class="head-l"> <a class="button button-little bg-red" href="<?php echo U('login/logout');?>" onclick="return confirm('确认退出？')"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
    <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
    <h2><span class="icon-user"></span>订单管理</h2>
    <ul style="display:block">
        <li><a href="<?php echo U('roomorder/index');?>" target="right"><span class="icon-caret-right"></span>入住办理</a></li>
        <li><a href="<?php echo U('roomorder/replace');?>" target="right"><span class="icon-caret-right"></span>入住改签</a></li>
        <li><a href="<?php echo U('roomorder/endstay');?>" target="right"><span class="icon-caret-right"></span>退房办理</a></li>
        <li><a href="<?php echo U('roomorder/storepay');?>" target="right"><span class="icon-caret-right"></span>临时客户入住办理</a></li>
    </ul>
    <h2><span class="icon-user"></span>房间管理</h2>
    <ul style="display:block"><!--
        <li><a href="<?php echo U('room/index');?>" target="right"><span class="icon-caret-right"></span>查询空房</a></li>-->
        <li><a href="<?php echo U('room/notice');?>" target="right"><span class="icon-caret-right"></span>到期退房</a></li>
    </ul>
    <h2><span class="icon-user"></span>商品售卖</h2>
    <ul style="">
        <li><a href="<?php echo U('productionorder/index');?>" target="right"><span class="icon-caret-right"></span>售卖</a></li>
    </ul>
    <h2><span class="icon-user"></span>个人中心</h2>
    <ul style="">
        <li><a href="<?php echo U('self/index');?>" target="right"><span class="icon-caret-right"></span>修改密码</a></li>
        <li><a href="<?php echo U('self/log');?>" target="right"><span class="icon-caret-right"></span>今日操作日志</a></li>
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
    <li><a href="<?php echo U('index/info');?>" target="right" class="icon-home"> 首页</a></li>
    <li><a href="##" id="a_leader_txt">欢迎页</a></li>
</ul>
<div class="admin">
    <iframe scrolling="auto" rameborder="0" src="<?php echo U('index/info');?>" name="right" width="100%" height="100%"></iframe>
</div>
</div>
</body>
</html>