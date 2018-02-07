<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>TravelSite Theme</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <!-- Mobile Specific
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="/hotel/Public/css/style.css" />
    <link rel="stylesheet" href="/hotel/Public/css/responsive.css" />

    <!-- Java Script
    ================================================== -->
    <script type="text/javascript" src="/hotel/Public/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/jquery-ui-1.8.24.custom.min.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/jquery.mobile.customized.min.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/camera.min.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/selectnav.min.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/login.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/theme.js"></script>
</head>

<body class="blog">

<div id="slider-wrap">
    <div class="camera_overlayer"></div>
</div>

<div id="wrapper">
    <div id="container">

        <!--start header -->
        <header id="header">
            <div id="logo">
                <a href="<?php echo U('index/index');?>"><strong>海悦</strong>酒店</a>
            </div>
            <div id="navigation">
                <ul id="nav">
                    <li class="selected"><a href="<?php echo U('index/index');?>">首页</a></li>
                    <li><a href="#">酒店介绍</a>
                        <ul>
                            <li><a href="<?php echo U('index/environment');?>">客房环境</a></li>
                            <li><a href="<?php echo U('index/hyquanyi');?>">会员权益</a></li>
                        </ul>
                    </li>
                    </li>
                    <li><a href="<?php echo ($url); ?>"><div id="tip"><?php echo ($tip); ?></div></a><a href="<?php echo ($url1); ?>" onclick="return confirm('确认退出？')"><div id="tip1"><?php echo ($tip1); ?></div></a></li>
                </ul>
            </div>
        </header>
        <!--end header -->


        <div class="subheader">
            <div class="left">
                <span class="page-title">预定</span>
                <span class="page-desc">各种类型房间 满足各种需求</span>
            </div>
        </div>
        <!--subheader -->


        <div id="content">
            <div class="two-third">
                <div class="post-item post-blog">
                    <div class="image-place">
                        <img src="/hotel/Public/images/uploads/620x220/temple-kyoto.jpg" alt="image" />
                    </div>
                    <div class="post-date">
                        <span class="post-date-day">24</span>
                        <span class="post-date-month">Sep</span>
                    </div>
                    <div class="post-content">

                        <h2 class="post-title">预定房间情况</h2>
                        <div class="content_all">
                            <form action="<?php echo U('yuding/advance');?>" method="post">
                                <div class="content_left">
                                    <p>
                                    <p><b><label for="name">姓名：</label></b>
                                    <input type="text" id="name" name="name" maxlength="16" class="inputstyle2" placeholder="请输入你的姓名"/>
                                    </p>
                                    <p><b><label for="user_IDCard">身份证：</label></b>
                                        <input type="text" name="user_IDcard" id="user_IDcard" placeholder="请输入你的身份证号">
                                    </p>
                                    <p>
                                        <label for="startDate"><b>入住日期：</b></label><input type="text" readonly name="startDate"  id="startDate" class="date"  />
                                    </p>
                                    <P>
                                        <label for="endDate"><b>退房日期：</b></label><input type="text" readonly  name="endDate" id="endDate" class="date" />
                                    </p>
                                    <p>
                                        <label><b>类型：</b></label>
                                        <span class="content_span_left"  ><?php echo ($type); ?></span>
                                    </p>

                                </div>
                                <div class="content_right">
                                    <p><b><label for="phone">手机号：</label></b>
                                        <input type="text" name="phone" id="phone" placeholder="请输入你的联系方式">
                                    </p>
                                    <p><b>金额：</b>
                                        <span id="price_order_total" class="content_price" ><?php echo ($price); ?></span><span class="content_order">元</span>
                                    </p>
                                    <input type="hidden" name="price" value="<?php echo ($price); ?>">
                                    <p><b><label for="paymethod">支付方式：</label></b>
                                        <select id="paymethod" name="paymethod">
                                            <option value="NULL">选择支付方式</option>
                                            <option value="onlinepay">在线支付</option>
                                            <option value="facepay">到店付</option>
                                        </select>
                                    </p>
                                    <p><b><label>验证码:</label></b>
                                    <span id="order_verify">
                                    <input name="verify" height="50" class="inputstyle" type="text" placeholder="验 证 码">
                                    <img  class="left15" height="50" alt="验证码" src="<?php echo U('Home/yuding/verify_c',array());?>" title="点击刷新">
                                    </span>
                                    </p>
                                </div>
                                <input type="hidden" id="single_price" name="single_price" value="<?php echo ($price); ?>">
                                <input type="hidden" id="price" name="price_total" >
                                <input type="hidden" name="type" value="<?php echo ($type); ?>">
                                <div class="content_bottom">
                                    <input class="submit"  type="submit" onclick="return confirm('在线支付：保留整晚，最迟20点退房\u000d到 店 付 ： 保留到18点')"/>
                                </div>
                            </form> </div>
                    </div>
                    <!--comment-body -->

                    <!-- respond -->
                    </section>
                    <!--comment section -->
                </div>
                <!--post-thumb -->
            </div>
            <br class="clear" />
        </div>
        <!--content -->

    </div>
    <!--container -->

    <!--start footer -->
    <footer id="footer">
        <div class="wrap">
            <div class="one-fourth">
                <div class="theme-logo"><strong>海悦</strong>酒店</div>
                <p>全心全意打造高质量连锁酒店</p>
                <p>给您一个快捷舒适的居住环境</p>
            </div>

            <div class="one-fourth">
                <h3>便捷链接</h3>
                <ul>
                    <li><a href="<?php echo U('login/index');?>">成为会员</a></li>
                    <li><a href="<?php echo U('index/hyquanyi');?>">会员权益</a></li>
                    <li><a href="http://127.0.0.1:808/hotel/index.php?m=Admin&c=login&a=index">后台登录</a></li>
                </ul>
            </div>

            <div class="one-fourth">
                <h3>联系我们</h3>
                <ul>
                    <li class="glyph-home">广东省广州市天河区<br>高德置地东广场</li>
                    <li class="glyph-briefcase">Phone : 110120119</li>
                    <li class="glyph-envelope">Email : HY_Service@163.com</li>
                </ul>
            </div>
            <div class="one-fourth last">
                <h3></h3>
                <!-- Start of Flickr Badge -->
                <div id="flickr_badge_uber_wrapper">
                    <div id="flickr_badge_wrapper">
                    </div>
                </div>
                <!-- End of Flickr Badge -->
            </div>

            <br class="clear" />
        </div>
        <!--footer wrap -->
    </footer>
    <!--end footer -->

    <script type="text/javascript" src="/hotel/Public/js/moment.min_ssk.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/stay_ssk.js"></script>

    <script>
        // 验证码生成
        var captcha_img = $('#order_verify').find('img');
        var verifyimg = captcha_img.attr("src");
        captcha_img.attr('title', '点击刷新');
        captcha_img.click(function(){
            if( verifyimg.indexOf('?')>0){
                $(this).attr("src", verifyimg+'&random='+Math.random());
            }else{
                $(this).attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
            }
        });

    </script>
</div>
</body>
</html>