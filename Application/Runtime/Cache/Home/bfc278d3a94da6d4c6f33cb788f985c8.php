<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.3.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest (the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>公司介绍</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="/Public/Style/assets/global/fonts/3.css" rel="stylesheet" type="text/css">
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="/Public/Style/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/Public/Style/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="/Public/Style/assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="/Public/Style/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="/Public/Style/assets/global/css/components.css" rel="stylesheet">
  <link href="/Public/Style/assets/frontend/layout/css/style.css" rel="stylesheet">
  <link href="/Public/Style/assets/frontend/layout/css/style-responsive.css" rel="stylesheet">
  <link href="/Public/Style/assets/frontend/layout/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="/Public/Style/assets/frontend/layout/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">
    
   <!-- BEGIN HEADER -->
	<!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <!-- <li><i class="fa fa-phone green"></i><span><font color="green">028-87525832</font></span></li> -->
                        <li><i class="fa fa-envelope-o green"></i><span><font color="green">camera@watchmen.cn</font></span></li>
                        <li><a title="客服2" href="tencent://message/?uin=362528717&amp;&amp;Site=sc.admin5.com&amp;&amp;Menu=yes"><i class="fa fa-qq topbar-info-icon top-2"></i><span><font color="green">QQ咨询</font></span></a></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a target="_blank" href="http://camera.cn/index.php/Admin/user/login2">登录</a></li>
                        <!--  <li><a href="http://192.168.2.121/c/t/a/login.html">登录1</a></li>-->
                        <li><a href="/index.php/Home/user/register">注册</a></li>
                        <li><a href="/index.php/Home/index/faq">帮助中心</a></li>
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="/index.php/Home/Index/index"><img src="/Public/Home/img/logo.jpg" width="152px" height="41px" alt="成都守望者科技" style="margin-top: 0px;"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation pull-right font-transform-inherit">
          <ul>
          <li style="width:84px;padding-left: 0px;padding-right: 0px;text-align:center;" <?php echo $open=='home' ? 'class="open"' : '';?>><a style="padding-bottom: 10px;" href="/index.php/Home/Index/index" >首页</a></li>
	      <li style="width:84px;padding-left: 0px;padding-right: 0px;text-align:center; "<?php echo $open=='productinfo' ? 'class="open"' : '';?>><a style="padding-bottom: 10px;" href="/index.php/Home/Index/productinfo">产品介绍</a></li>
	      <li style="width:84px;padding-left: 0px;padding-right: 0px;text-align:center;"<?php echo $open=='examples' ? 'class="open"' : '';?>><a style="padding-bottom: 10px;" href="/index.php/Home/Index/examples">直播演示</a></li>
	      <li style="width:84px;padding-left: 0px;padding-right: 0px;text-align:center;" ><a style="padding-bottom: 10px;" target="_blank" href="http://camera.cn/index.php/Admin/user/login2" >我的设备</a></li>
	      <!--  <li><a href="http://192.168.2.121/c/t/a/login.html">我的设备1</a></li>-->
	      <li style="width:84px;padding-left: 0px;padding-right: 0px;text-align:center;"  <?php echo $open=='company' ? 'class="open"' : '';?>><a style="padding-bottom: 10px;" href="/index.php/Home/Index/company">公司介绍</a></li>
	      <li style="width:84px;padding-left: 0px;padding-right: 0px;text-align:center;"  <?php echo $open=='contacts' ? 'class="open"' : '';?>><a style="padding-bottom: 10px;" href="/index.php/Home/Index/contacts">联系我们</a></li>
	                
	        <!--  
	        <li <?php echo $open=='home' ? 'class="open"' : '';?>><a href="/index.php/Home/Index/index" <?php echo $open=='home' ? 'style="color:white;"' : '';?>>首页</a></li>
	      <li <?php echo $open=='productinfo' ? 'class="open"' : '';?>><a href="/index.php/Home/Index/productinfo" <?php echo $open=='productinfo' ? 'style="color:white;"' : '';?>>产品介绍</a></li>
	      <li <?php echo $open=='examples' ? 'class="open"' : '';?>><a href="/index.php/Home/Index/examples" <?php echo $open=='examples' ? 'style="color:white;"' : '';?>>直播演示</a></li>
	      <li><a target="_blank" href="http://camera.cn/index.php/Admin/user/login2" <?php echo $open=='home' ? 'style="color:white;"' : '';?>>我的设备</a></li>
	      <li <?php echo $open=='contacts' ? 'class="open"' : '';?>><a href="/index.php/Home/Index/contacts" <?php echo $open=='contacts' ? 'style="color:white;"' : '';?>>联系我们</a></li>
	        -->
	                
	        <!--        
	        
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="/index.php/Home/Index/index">
                          首页
              </a>
            </li>
            <li class="dropdown dropdown-megamenu">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="/index.php/Home/Index/productinfo">
                         产品介绍
              </a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="/index.php/Home/Index/examples">
                          直播演示
              </a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="/index.php/Home/user/login">
                          我的设备 
              </a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="/index.php/Home/Index/contacts">
                	联系我们 
              </a>
            </li>
 --> 
            <!-- BEGIN TOP SEARCH -->
            <li class="menu-search">
              <span class="sep"></span>
              <i class="fa fa-search search-btn"></i>
              <div class="search-box">
                <form action="#">
                  <div class="input-group">
                    <input type="text" placeholder="Search" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit">搜索</button>
                    </span>
                  </div>
                </form>
              </div> 
            </li>
            <!-- END TOP SEARCH -->
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->
    

	<!-- END HEADER -->

    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">首页</a></li>
            <li class="active">公司介绍</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-9">
            <h4>公司介绍</h4>
            <div class="content-page">
              <!-- BEGIN CAROUSEL -->            
              <div class="front-carousel margin-bottom-20">
                <div id="myCarousel" class="carousel slide">
                  <!-- Carousel items -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="/Public/Style/assets/img/company1.jpg" alt="">
                    </div>
                  <div class="item">
                    <img src="/Public/Style/assets/img/company2.jpg" alt="">
                  </div>
                  <div class="item">
                      <img src="/Public/Style/assets/img/company3.jpg" alt="">
                    </div>
                  <div class="item">
                    <img src="/Public/Style/assets/img/company4.jpg" alt="">
                  </div>
                </div>
                <!-- Carousel nav -->
                 <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>                
            </div>
            <!-- END CAROUSEL --> 

                    <!-- BEGIN INFO BLOCK -->               
                    <h3>公司简介</h3>
                    <p>成都守望者科技有限公司前身为守望者联盟，是一家专注于移动互联网智能设备研发及服务的IT企业。
                    “守望者”源于著名影视与文艺巨作《Watchmen》，象征着梦想与坚持。“极简致用、完美精致”是守望科技的产品设计理念。
                    “用户至上，产品为本”是守望科技的产品开发准则。“准确的数据，严密的逻辑，规范的民主，负责的独裁。”
                                    是公司决策及行事规范。公司目前主要产品集中在移动互联网解决方案及移动互联智能设备领域。
                                    作为创业公司，目前已获得相关的投资，正式进入高速发展期。</p> 
                    <!-- BEGIN LISTS -->
                    <div class="row front-lists-v1">
                        <div class="col-md-6">
                            <ul class="list-unstyled margin-bottom-20">
                                <li><i class="fa fa-check"></i> <b>企业文化</b>
                                    <br><br/>
                                    <div style="color:green"><b>公司使命</b></div>
                                    <div>通过互联网产品及服务提升用户生活品质。</div>
                                    <br/>
                                    <div style="color:green"><b>开发准则</b></div>
                                    <div>用户至上，产品为本。</div>
                                    <br/>
                                    <div style="color:green"><b>行事规范</b></div>
                                    <div>准确的数据，严密的逻辑，规范的民主，负责的独裁。</div>
                                    <br/>
                                    <div style="color:green"><b>价值观</b></div>
                                    <div>协作 正直 创新 快捷。</div>
                                    </li>
                                <!-- <li><i class="fa fa-check"></i> Consectetur adipiscing </li>
                                <li><i class="fa fa-check"></i> Deserunt fpicia</li> -->
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-check"></i><b>企业战略发展</b></li>
                                <br/>
                                <div><a href="http://watchmen.org.cn" target="_blank">互联网解决方案</a></div><br/>
                                <div><a href="#">互联网智能产品</a></div><br/>
                                <div><a href="http://watchmen.cn" target="_blank">IT在线教育平台</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END LISTS -->
                    <!-- END INFO BLOCK -->
					
                   
            </div>
          </div>

          <div class="col-md-3 col-sm-3 sidebar2">
            <h3 class="padding-top-30">联系我们</h3>
           	<address>
             <strong>成都守望者科技有限公司</strong><br>
                        四川省 成都市 金牛区<br>
                        西安中路8号 豪瑞新界 A座4楼<br>
            </address>
			
			
                    <h3>关注我们</h3>
                    <div>
                         <img src="/Public/Style/assets/img/getqrcode.jpg" alt="扫一扫，马上有惊喜" title="扫一扫，马上有惊喜" style="width:180px">
                    </div>
                    <div class="margin-bottom-30"></div>


                    <h3>公司邮箱</h3>
                    <div>
                         <a href="mailto:watchmen@watchmen.cn">camera@watchmen.cn</a>
                    </div>

                    <div class="margin-bottom-30"></div>

                    <h3>联系电话</h3>
                    <div>
                         028-87525832 
                    </div>
                    
                    <div class="margin-bottom-30"></div>
                    <h3>应聘联系</h3>
                   
                    <div>
                        简历发送：
                        <a href="mailto:#">hr@watchmen.cn</a>
                    </div>
			
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- BEGIN SIDEBAR & CONTENT -->
      </div>
    </div>

    <!-- BEGIN HEADER -->
	
<!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer" style="background: none repeat scroll 0 0 #27303f;">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>关于我们</h2>
            <p>成都守望者科技有限公司前身为守望者联盟，是一家专注于移动互联网智能设备研发及服务的IT企业。“极简致用、完美精致”是守望科技的产品设计理念。“用户至上，产品为本”是守望科技的产品开发准则。“准确的数据，严密的逻辑，规范的民主，负责的独裁。”是公司决策及行事规范。</p>

          </div>
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>联系我们</h2>
            <address class="margin-bottom-40">
              成都守望者科技有限公司 <br/>
四川省成都市金牛区，<br/>
西安中路8号，豪瑞新界A座4楼<br/>
              电话: 028-87525832 <br>
              邮箱: <a href="mailto:watchmen@watchmen.cn">watchmen@watchmen.cn</a><br>
            </address>

          </div>
          <!-- END BOTTOM CONTACTS -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-3 col-sm-3">
                <h2>战略领域</h2>
                <dl class="dl-horizontal f-twitter">
                    <dt><i class="fa fa-tablet"></i></dt>
                    
                        <a href="http://watchmen.org.cn">移动互联网解决方案</a>
                        
                   
                </dl>                    
                <dl class="dl-horizontal f-twitter">
                    <dt><i class="fa fa-book"></i></dt>
                    
                        <a href="http://watchmen.cn" target="_blank">IT在线教育平台</a>
                        
                    
                </dl>                    
                <dl class="dl-horizontal f-twitter">
                    <dt><i class="fa fa-video-camera"></i></dt>
                    
                        <a href="#">互联网智能设备</a>
                </dl>                                        
            </div> 

            <div class="col-md-3 col-sm-3">
                <!-- BEGIN TWITTER BLOCK -->                                                    
                <h2>关注我们</h2>
                <img src="/Public/Style/assets/img/getqrcode.jpg" alt="扫一扫，马上有惊喜" title="扫一扫，马上有惊喜" style="width:120px">                      
                <!-- END TWITTER BLOCK -->                                                                        
            </div>
          <!-- END TWITTER BLOCK -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

	<!-- END HEADER -->
	
	<!-- BEGIN HEADER -->
	<!-- BEGIN COPYRIGHT -->
<!-- 
<div class="copyright" style="background: none repeat scroll 0 0 white;">
    <div class="container">
        <div class="row">
            <div style="text-align: center;">
                <p>
                    <span class="margin-right-10"><font color="black">2014 © 成都守望者科技有限公司. ALL Rights Reserved.</font></span> 
                </p>
            </div>
        </div>
    </div>
</div>
</body>
 -->
<!-- END COPYRIGHT -->


<!-- BEGIN FOOTER -->
    <div class="footer" style="background: none repeat scroll 0 0 black;>
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-12 col-sm-6 padding-top-10" style="text-align: center;">
            <font color="white">2014 © 成都守望者科技有限公司. ALL Rights Reserved.</font>
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <!-- <div class="col-md-6 col-sm-6">
            <ul class="social-footer list-unstyled list-inline pull-right">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
              <li><a href="#"><i class="fa fa-github"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-dropbox"></i></a></li>
            </ul>  
          </div> -->
          <!-- END PAYMENTS -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->
	<!-- END HEADER -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="/Public/Style/assets/global/plugins/respond.min.js"></script>
    <![endif]--> 
    <script src="/Public/Style/assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script src="/Public/Style/assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="/Public/Style/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script src="/Public/Style/assets/frontend/layout/scripts/back-to-top.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="/Public/Style/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="/Public/Style/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>

    <script src="/Public/Style/assets/frontend/layout/scripts/layout.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initUniform();
            Layout.initTwitter();
            Layout.initFixHeaderWithPreHeader();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>