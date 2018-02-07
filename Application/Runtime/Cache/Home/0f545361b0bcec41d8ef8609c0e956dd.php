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
                    <li ><a href="<?php echo U('index/index');?>">首页</a></li>
                    <li><a href="#">酒店介绍</a>
                        <ul>
                            <li class="selected"><a href="<?php echo U('index/environment');?>">客房环境</a></li>
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
                <span class="page-title">客房环境</span>
                <span class="page-desc">用心打造服务 服务决定质量</span>			</div>
        </div>
        <!--subheader -->

        <!--one third -->
        <div class="subheader">
                <span class="page-desc">入住时间 <?php echo ($startDate); ?></span>
                <span class="page-desc">退房时间 <?php echo ($endDate); ?></span>
        </div>
        <div class="two-third last">
            <div class="post-item post-thumb-hor">
                <div class="image-place">
                    <img src="<?php echo ($standardSingle_picture); ?>" alt="image" />					</div>
                <div class="post-content">
                    <h2 class="post-title">标准单人房</h2>
                    <p class="post-excerpt"><?php echo ($standardSingle_description); ?></p>
                    <ul class="post-content-detail">
                        <li>
                            <span>库存量</span>
                            <?php echo ($sum_StandardSingle); ?>						</li>
                        <li>
                            <span>店面价</span>
                            <strong class="price">￥<?php echo ($standardSinglePrice); ?></strong>							</li>
                    </ul>
                </div>
                <div class="post-meta">
                    <span class="icon-place">经济</span>
                    <span class="offer-type">便捷</span>
                    <a class="read-more" href="<?php echo U('yuding/index?type=StandardSingle');?>">预订</a>					</div>
            </div>
            <!--post item -->

            <div class="post-item post-thumb-hor">
                <div class="image-place">
                    <img src="<?php echo ($luxuriousSingle_picture); ?>" alt="image" />					</div>
                <div class="post-content">
                    <h2 class="post-title">豪华单人房</h2>
                    <p class="post-excerpt"><?php echo ($luxuriousSingle_description); ?></p>
                    <ul class="post-content-detail">
                        <li>
                            <span>库存量</span>
                          	<?php echo ($sum_LuxuriousSingle); ?>				</li>
                        <li>
                            <span>店面价</span>
                            <strong class="price">￥<?php echo ($luxuriousSinglePrice); ?></strong>							</li>
                    </ul>
                </div>
                <div class="post-meta">
                    <span class="icon-place">舒适</span>
                    <span class="offer-type">宽敞</span>
                    <a class="read-more" href="<?php echo U('yuding/index?type=LuxuriousSingle');?>">预订</a>					</div>
            </div>
            <!--post item -->

            <div class="post-item post-thumb-hor">
                <div class="image-place">
                    <img src="<?php echo ($standardDouble_picture); ?>" alt="image" />					</div>
                <div class="post-content">
                    <h2 class="post-title">标准双人房</h2>
                    <p class="post-excerpt"><?php echo ($standardDouble_description); ?></p>
                    <ul class="post-content-detail">
                        <li>
                            <span>库存量</span>
                            <?php echo ($sum_StandardDouble); ?>							</li>
                        <li>
                            <span>店面价</span>
                            <strong class="price">￥<?php echo ($standardDoublePrice); ?></strong>							</li>
                    </ul>
                </div>
                <div class="post-meta">
                    <span class="icon-place">电梯直达</span>
                    <span class="offer-type">温馨安静</span>
                    <a class="read-more" href="<?php echo U('yuding/index?type=StandardDouble');?>">预订</a>					</div>
            </div>
            <!--post item -->

            <div class="post-item post-thumb-hor">
                <div class="image-place">
                    <img src="<?php echo ($luxuriousDouble_picture); ?>" alt="image" />					</div>
                <div class="post-content">
                    <h2 class="post-title">豪华双人房</h2>
                    <p class="post-excerpt"><?php echo ($luxuriousDouble_description); ?></p>
                    <ul class="post-content-detail">
                        <li>
                            <span>库存量</span>
                            <?php echo ($sum_LuxuriousDouble); ?>						</li>
                        <li>
                            <span>店面价</span>
                            <strong class="price">￥<?php echo ($luxuriousDoublePrice); ?></strong>							</li>
                    </ul>
                </div>
                <!--post item -->
                <div class="post-meta">
                    <span class="icon-place">mora咖啡</span>
                    <span class="offer-type">商务设施</span>
                    <a class="read-more" href="<?php echo U('yuding/index?type=LuxuriousDouble');?>">预订</a>					</div>
            </div>
            <!--post item -->

        </div>
        <!--two third -->

        <br class="clear" />
    </div>
    <!--content -->

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
                <li class="glyph-briefcase">Phone : 12345678910</li>
                <li class="glyph-envelope">Email : zsq535838548@qq.com.com</li>
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
<!--wrapper -->
</body>
</html>