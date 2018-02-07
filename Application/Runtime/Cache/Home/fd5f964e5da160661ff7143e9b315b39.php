<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
    <script type="text/javascript" src="/hotel/Public/js/jquery-1.8.2.min.js"></script>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>重置密码</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">


    <!-- Mobile Specific
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="/hotel/Public/css/style.css" />
    <link rel="stylesheet" href="/hotel/Public/css/responsive.css" />
    <link rel="stylesheet" href="/hotel/Public/css/login2.css"  />
    <!-- Java Script
    ================================================== -->
    <script type="text/javascript" src="/hotel/Public/js/jquery-ui-1.8.24.custom.min.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/jquery.mobile.customized.min.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/camera.min.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/selectnav.min.js"></script>

    <script type="text/javascript" src="/hotel/Public/js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/login.js"></script>
    <!--
    <script type="text/javascript" src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=AIzaSyB3tShW1hLlV2lYW8_sCVln6TLF2bWvgU8"></script>-->
    <script type="text/javascript" src="/hotel/Public/js/jquery.googlemaps.1.01.min.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/theme.js"></script>

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
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
            <!--<div id="searchbox">
                <form action="#">
                    <input type="text" id="search" placeholder="Search" />
                    <button type="submit"></button>
                </form>
            </div>-->
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
                    <li><a href="<?php echo ($url); ?>"><div id="tip"><?php echo ($tip); ?></div></a><a href="<?php echo ($url1); ?>"><div id="tip1"><?php echo ($tip1); ?></div></a></li>
                </ul>
            </div>
        </header>
        <!--end header -->


        <div class="subheader">
            <div class="left">
                <span class="page-title">找回密码</span>
                <span class="page-desc">海悦伴你随行</span>			</div>
        </div>
        <!--subheader -->

        <!--start content -->
        <div class="login" style="margin-top:50px;">

            <div class="header">
                <div class="switch" id="switch" style="align:center"><a class="switch_btn_focus" id="switch_qlogin" href="javascript:void(0);" tabindex="7">重置密码</a>
                    <div class="switch_bottom" id="switch_bottom" style="position: absolute; width: 64px; left: 0px;"></div>
                </div>
            </div>


            <div class="web_qr_login" id="web_qr_login" style="display: block; height: 364px;">

                <!--登录-->
                <div class="web_login" id="web_login">


                    <div class="login-box">


                        <div class="login_form">
                            <form action="<?php echo U('login/reset_pw');?>"  method="post">
                                <input type="hidden" name="token" value="<?php echo ($token); ?>"/>
                                <div class="uinArea" id="uinArea">
                                    <label class="input-tips" for="u">密码：</label>
                                    <div class="inputOuter" id="uArea">
                                        <input type="password" id="pass" name="pass" class="inputstyle"/>
                                    </div>
                                </div>
                                <div class="uinArea" id="uinArea">
                                    <label class="input-tips" for="u">确认密码：</label>
                                    <div class="inputOuter" id="uArea">

                                        <input type="password" id="pass1" name="pass1" class="inputstyle"/>
                                    </div>
                                </div>

                                <div style="padding-left:50px;margin-top:115px;"><input type="submit" value="提 交" style="width:150px;" class="button_blue" onclick=""/></div>
                            </form>
                        </div>

                    </div>

                </div>
                <!--登录end-->
            </div>

            <!--注册-->
            <!--module-box -->

            <br class="clear" />
        </div>
        <!--end content -->

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

    <!--subfooter -->

    <script>
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
    </script>

</div>
</body>
</html>