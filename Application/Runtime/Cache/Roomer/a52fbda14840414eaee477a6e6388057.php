<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>酒店后台店长系统</title>
    <link rel="stylesheet" href="/hotel/Public/css/pintuer.css">
    <link rel="stylesheet" href="/hotel/Public/css/admin.css">
    <script src="/hotel/Public/js/jquery.js"></script>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
    <div class="logo margin-big-left fadein-top">
        <h1><img src="/hotel/Public/images/tb.jpg" class="radius-circle rotate-hover" height="50" alt="" />酒店后台店长系统</h1>
    </div>
    <div class="head-l"> <a class="button button-little bg-red" href="<?php echo U('login/logout');?>" onclick="return confirm('确认退出？')"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
    <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
    <h2><span class="icon-user"></span>用户管理</h2>
    <ul style="">
        <li><a href="<?php echo U('usermanager/index');?>" target="right"><span class="icon-caret-right"></span>查询用户</a></li>
        <li><a href="<?php echo U('usermanager/check_orders');?>" target="right"><span class="icon-caret-right"></span>房间订单</a></li>
    </ul>
    <h2><span class="icon-user"></span>员工管理</h2>
    <ul style="">
        <li><a href="<?php echo U('employemanager/index');?>" target="right"><span class="icon-caret-right"></span>信息管理</a></li>
        <li><a href="<?php echo U('employemanager/log');?>" target="right"><span class="icon-caret-right"></span>员工操作日志</a></li>
    </ul>
    <h2><span class="icon-user"></span>客房管理</h2>
    <ul style="">
        <li><a href="<?php echo U('roommanager/roomcategories');?>" target="right"><span class="icon-caret-right"></span>客房类型管理</a></li>
        <li><a href="<?php echo U('roommanager/index');?>" target="right"><span class="icon-caret-right"></span>客房房价管理</a></li>
        <li><a href="<?php echo U('roommanager/allroom');?>" target="right"><span class="icon-caret-right"></span>房间管理</a></li>
        <li><a href="<?php echo U('roommanager/room_show');?>" target="right"><span class="icon-caret-right"></span>宣传管理</a></li>
    <!--    <li><a href="<?php echo U('roommanager/check_emptyroom');?>" target="right"><span class="icon-caret-right"></span>空房统计</a></li>-->
    </ul>
    <h2><span class="icon-user"></span>收益管理</h2>
    <ul style="">
        <li><a href="<?php echo U('profit/pie');?>" target="right"><span class="icon-caret-right"></span>收益比较分析</a></li>
        <li><a href="<?php echo U('profit/index');?>" target="right"><span class="icon-caret-right"></span>近12月以来房间收益</a></li>
        <li><a href="<?php echo U('profit/analysis');?>" target="right"><span class="icon-caret-right"></span>客户分析</a></li>
    </ul>
    <h2><span class="icon-user"></span>商品管理</h2>
    <ul style="">
        <li><a href="<?php echo U('production/index');?>" target="right"><span class="icon-caret-right"></span>商品管理</a></li>
        <li><a href="<?php echo U('production/check_orders');?>" target="right"><span class="icon-caret-right"></span>商品订单</a></li>
    </ul>
    <h2><span class="icon-user"></span>安全中心</h2>
    <ul style="">
        <li><a href="<?php echo U('self/index');?>" target="right"><span class="icon-caret-right"></span>修改密码</a></li>
        <li><a href="<?php echo U('self/dbsave');?>" target="right"><span class="icon-caret-right"></span>备份系统</a></li>
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