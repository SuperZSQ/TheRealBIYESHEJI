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

    <!--[if lt IE 9]>
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
                    <li ><a href="<?php echo U('index/index');?>">首页</a></li>
                    <li><a href="#">酒店介绍</a>
                        <ul>
                            <li><a href="<?php echo U('index/environment');?>">客房环境</a></li>
                            <li class="selected"><a href="<?php echo U('index/hyquanyi');?>">特色介绍</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo ($url); ?>"><div id="tip"><?php echo ($tip); ?></div></a><a href="<?php echo ($url1); ?>"><div id="tip1"><?php echo ($tip1); ?></div></a></li>
                </ul>
            </div>
        </header>
        <!--end header -->


        <div class="subheader">
            <div class="left">
                <span class="page-title">特色介绍</span>
                <span class="page-desc">海悦特色 唯有海悦</span>			</div>
        </div>
        <!--subheader -->



        <!--one third -->

        <div class="two-third last">

            <div class="post-item post-thumb-hor">
                <div class="image-place">
                    <img src="/hotel/Public/images/hotel.jpg" alt="image" />					</div>
                <div class="post-content">
                    <h2 class="post-title">地理位置</h2>
                    <p class="post-excerpt">距离国际会展中心仅8分钟车程，广州塔（小蛮腰）和珠江公园近在咫尺。
                        <br/>环境优越，旺中带静。，交通便利，是您商务旅行的理想下榻之所。</p>

                </div>
                <div class="post-meta">
                </div>
            </div>
            <!--post item -->

            <div class="post-item post-thumb-hor">
                <div class="image-place">
                    <img src="/hotel/Public/images/qt.jpg" alt="image" />					</div>
                <div class="post-content">
                    <h2 class="post-title">支付方式随您选</h2>
                    <p class="post-excerpt">在线支付  &nbsp; &nbsp; &nbsp;入住当晚20点前可以随意取消订单  &nbsp;为您保留一整晚<br/>
                        到店付  &nbsp; &nbsp;   &nbsp;为您保留客房到当晚18点</p>

                </div>
                <div class="post-meta">
                </div>
            </div>
            <!--post item -->

            <div class="post-item post-thumb-hor">
                <div class="image-place">
                    <img src="/hotel/Public/images/zd.jpg" alt="image" />					</div>
                <div class="post-content">
                    <h2 class="post-title">酒店交通</h2>
                    <p class="post-excerpt">
                        <table><tr><td width="19%">广州火车东站</td><td width="25%">距离酒店约4公里</td><td>乘出租车约5分钟，约15元；乘坐公交车43路至石牌村站（坐5站），下车后步行约5分钟即可到达酒店
                </td></tr><td width="16%">天河客运站</td><td width="20%">距离酒店约6公里</td><td>乘出租车约10分钟，约20元；乘地铁3号线至岗顶站D出口，步行约15分钟即可到达酒店
                </td></tr></table>
                    </p>

                </div>
                <div class="post-meta">
                </div>
            </div>
            <!--post item -->

            <div class="post-item post-thumb-hor">
                <div class="image-place">
                    <img src="/hotel/Public/images/xxs.jpg" alt="image" />					</div>
                <div class="post-content">
                    <h2 class="post-title">周边设施</h2>
                    <p class="post-excerpt">
                    <table><tr>
                    <td width="19%">购物</td><td width="25%">石牌步行街</td><td>冼村步行街</td><td>天河城</td><td>正佳广场</td></tr>
                    <td width="16%">景点</td><td width="20%">海心沙公园</td><td>广州塔</td><td>博物馆</td><td>珠江公园</td></tr>
                    <td width="16%">地铁站</td><td width="20%">体育西路站</td><td>花城大道站</td><td>珠江新城站</td></tr>
                </table>
                    </p>

                </div>

                <!--post item -->


                <div class="post-meta">
                </div>
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
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>