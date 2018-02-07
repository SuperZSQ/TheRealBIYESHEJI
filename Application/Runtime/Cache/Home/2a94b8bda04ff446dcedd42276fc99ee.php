<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>龙峰酒店官网</title>
    <link rel="icon" type="image/x-icon" href="/hotel/Public/images/favicon.ico">


    <!-- Mobile Specific
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="/hotel/Public/css/style.css" />
    <link rel="stylesheet" href="/hotel/Public/css/responsive.css" />
    <link rel="stylesheet" href="/hotel/Public/css/smoothness/jquery.ui_ssk.css" type="text/css" />
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
    <!--<script type="text/javascript" src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=AIzaSyB3tShW1hLlV2lYW8_sCVln6TLF2bWvgU8"></script>-->
    <script type="text/javascript" src="/hotel/Public/js/jquery.googlemaps.1.01.min.js"></script>
    <script type="text/javascript" src="/hotel/Public/js/theme.js"></script>
</head>

<body class="home">
<div id="slider-wrap">
    <div class="camera_wrap" id="camera-wrap">
        <div data-src="/hotel/Public/images/uploads/1280x800/st-basil-two.jpg">

            <div class="camera_caption moveFromBottom camera_text_center">
                <div class="caption_slider h2">
                    欢迎莅临龙峰酒店！
                </div>
            </div>

        </div>

        <div data-src="/hotel/Public/images/uploads/1280x800/moscow-two.jpg">

            <div class="camera_caption fadeIn camera_text_center">
                <div class="caption_slider h2">
                    欢迎莅临龙峰酒店！
                </div>
            </div>

        </div>


    </div><!--camera-wrap -->
</div>

<div id="wrapper">
    <div id="container">

        <!--start header -->
        <header id="header">
            <div id="logo">
                <a href="<?php echo U('index/index');?>"><strong>龙峰</strong>酒店</a>
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
                    <li><a href="<?php echo ($url); ?>"><div id="tip"><?php echo ($tip); ?></div></a>
                    <a href="<?php echo ($url1); ?>" onclick="return confirm('确认退出？')"><div id="tip1"><?php echo ($tip1); ?></div></a></li>
                </ul>
            </div>
        </header>
        <!--end header -->

        <!--start content -->
        <div class="main_bg">
            <div class="wrap">
                <div class="online_reservation">
                    <div class="b_room">
                        <div class="booking_room">
                            <h4>在线预定房间</h4>
                            <p>  可以搜索在线预定龙峰酒店</p>
                        </div>
                        <div class="reservation">
                            <form action="<?php echo U('index/environment');?>" method="post">
                                <ul>
                                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                    <li  class="span1_of_1">
                                        <h5>入住日期</h5>
                                        <div class="book_date">

                                            <input class="date" id="startDate" type="text" name="startDate" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">


                                        </div>
                                    </li>
                                    <li  class="span1_of_1">
                                        <h5>退房日期</h5>
                                        <div class="book_date">
                                            <input class="date" id="endDate" name="endDate" type="text" value="DD/MM/YY" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
                                        </div>
                                    </li>
                                    <li class="span1_of_3">
                                        <div class="date_btn">
                                            <input class="left" type="submit" value="搜索房间" />

                                        </div>
                                    </li>
                                    <div class="clear"></div>
                                </ul>
                            </form>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <!--flight search -->


                <!--hotel search -->


                <!--travel search -->
            </div>
        </div>
        <!--searchmodule -->


        <!--newsletter -->

        <div class="hr"><hr /></div>

        <div class="one-third">
            <h3 class="icon32 icon-tick thin">会员权利</h3>
            <p>预付到付双选择 房间随时订</p>
        </div>

        <div class="one-third">
            <h3 class="icon32 icon-tick thin">方便快捷</h3>
            <p>网上轻松订 一证快捷住</p>
        </div>

        <div class="one-third last">
            <h3 class="icon32 icon-tick thin">实惠价格</h3>
            <p>官方渠道 质量价格双保障</p>
        </div>

        <div class="hr"><hr /></div>

        <!--newsection -->
        <div class="section-title">
            <span class="h3">酒店环境</span>
           <a class="right" href="<?php echo U('index/description');?>">更多</a>
        </div>

        <div class="one-five">
            <div class="post-item">
                <div class="image-place">
                    <img src="/hotel/Public/images/11.jpg" alt="image" />
                </div>
                <div class="post-content">
                    <h4 class="post-title">一路相伴的龙峰</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="one-five">
        <div class="post-item">
            <div class="image-place">
                <img src="/hotel/Public/images/22.jpg" alt="image" />
            </div>
            <div class="post-content">
                <h4 class="post-title">最自己 NO OUT</h4>
            </div>
        </div>
    </div>



    <div class="one-five">
        <div class="post-item">
            <div class="image-place">
                <img src="/hotel/Public/images/33.jpg" alt="image" />
            </div>
            <div class="post-content">
                <h4 class="post-title">感受时尚轻奢的生活方式</h4>
            </div>
        </div>
    </div>

    <br class="clear" />


    <!--action-box -->


    <br class="clear" />
    </section>
    <!--end content -->

</div>
<!--container -->

<!--start footer -->
<footer id="footer">
    <div class="wrap">
        <div class="one-fourth">
            <div class="theme-logo"><strong>龙峰</strong>酒店</div>
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
                <li class="glyph-home">广东省珠海市香洲区<br>北理工篮球场</li>
                <li class="glyph-briefcase">Phone : 12345678990</li>
                <li class="glyph-envelope">Email : zsq535838548@qq.com</li>
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

<section id="subfooter">
    <div class="wrap">
        <div class="left">
            Copyright &copy; davan
        </div>



        <br class="clear" />
    </div>
</section>
<!--subfooter -->

</div>
</body>
<script type="text/javascript" src="/hotel/Public/js/moment.min_ssk.js"></script>
<script type="text/javascript" src="/hotel/Public/js/stay_ssk.js"></script>
</html>