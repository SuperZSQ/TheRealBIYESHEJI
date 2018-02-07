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
                <span class="page-title">酒店介绍</span>
                <span class="page-desc">海悦由来</span>
            </div>
        </div>
        <!--subheader -->


        <div id="content">
            <div class="two-third">
                <div class="post-item post-blog">
                    <!--<div class="image-place">
                        <img src="/hotel/Public/images/uploads/620x220/temple-kyoto.jpg" alt="image" />
                    </div>-->
                    <div class="post-content">
                       <center><h1> 海悦酒店</h1></center><br/>
                        <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;海悦酒店是接待外宾、华侨、港澳台胞和国内会晤、旅游散客及团体的三星级酒店。酒店外观宏伟，气势豪华，环境优雅。
                            拥有双人房、大床房；风格迥异的宴会厅和包房，是休闲、度假旅游、会议的理想场所。<br/>
                               <div align="center"> <img src="/hotel/Public/images/jieshao1.jpg" alt="image" /></div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;海悦酒店，紧贴大都市酒店设计理念，采用潮流设计，简约时尚的设计风格、干净舒适的房间、便捷的服务流程、领先互联网的预定方式为您带来触手可及的都市时尚。<br/>
                            <div align="center"> <img src="/hotel/Public/images/33.jpg" alt="image" /></div>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;海悦巧妙运用智能科技和空间布局，集高速WIFI、集成插座、音乐和智能电视、微信互动、休闲桌椅于一体，让客人尽享休闲办公、轻松会友的乐趣。<br/>
                            <div align="center"> <img src="/hotel/Public/images/jieshao2.jpg" alt="image" /></div>
                    </h2></div>
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