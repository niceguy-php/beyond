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
  <title>成都守望者科技</title>

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
      <div class="container" style="width:100%">
      	<div class="container">
      		<ul class="breadcrumb">
            <li><a href="index.html">首页</a></li>
            <li class="active">联系我们</li>
        	</ul>
        </div>
        
        <div class="row">
          <!-- BEGIN CONTENT -->
          <div class="col-lg-12">
            <div class="content-page">
              <div class="row">
                <div class="col-lg-12">
                  <div id="map" class="gmaps margin-bottom-40" style="height:400px; width: 100%;margin-right: auto; margin-left: auto; width: 90%;"></div>
                </div>
                
                <!-- 
                <div class="col-md-9 col-sm-9">
                  <h2>联系我们</h2>
                  <p>这是一段简介这是一段简介这是一段简介这是一段简介这是一段简介这是一段简介这是一段简介这是一段简介这是一段简介这是一段简介这是一段简介这是一段简介这是一段简介</p>
                  
                  <form action="#" role="form">
                    <div class="form-group">
                      <label for="contacts-name">昵称</label>
                      <input type="text" class="form-control" id="contacts-name">
                    </div>
                    <div class="form-group">
                      <label for="contacts-email">邮箱</label>
                      <input type="email" class="form-control" id="contacts-email">
                    </div>
                    <div class="form-group">
                      <label for="contacts-message">消息</label>
                      <textarea class="form-control" rows="5" id="contacts-message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="icon-ok"></i> 发送</button>
                    <button type="button" class="btn btn-default">取消</button>
                  </form>
                </div>

                <div class="col-md-3 col-sm-3 sidebar2">
                  <h2>联系方式</h2>
                  <address>
                               成都守望者科技有限公司<br/>
		                 四川省成都市金牛区，<br/>
                               西安中路8号，豪瑞新界A座4楼<br/>
                    <abbr title="Phone">电话:</abbr>  028-87525832 
                  </address>
                  <address>
                    <strong>邮箱</strong><br>
                    <a href="mailto:watchmen@watchmen.cn">watchmen@watchmen.cn</a><br>
                  </address>

                  <h2 class="padding-top-30">关于我们</h2>
                  <p>成都守望者科技有限公司前身为守望者联盟，是一家专注于移动互联网智能设备研发及服务的IT企业。“极简致用、完美精致”是守望科技的产品设计理念。“用户至上，产品为本”是守望科技的产品开发准则。“准确的数据，严密的逻辑，规范的民主，负责的独裁。”是公司决策及行事规范。</p>
                                 <h3>战略领域</h3>
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check"></i> 移动互联网解决方案</li>
                    <li><i class="fa fa-check"></i> IT在线教育平台 </li>
                    <li><i class="fa fa-check"></i> 互联网智能设备</li>
                  </ul>        
                </div>
              </div> -->
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
      </div>
    </div>

     <!-- BEGIN FOOTER -->
    	
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

    <!-- END FOOTER -->

    <!-- BEGIN COPYRIGHT -->
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
    <!-- END COPYRIGHT -->

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
<!--    <script src="http://maps.google.com/maps/api/js?sensor=true" type="text/javascript"></script>
      <script src="/Public/Style/assets/global/plugins/gmaps/gmaps.js" type="text/javascript"></script>
    <script src="/Public/Style/assets/frontend/pages/scripts/contact-us.js" type="text/javascript"></script>
-->
    <script src="/Public/Style/assets/frontend/layout/scripts/layout.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.4"></script>
    <script type="text/javascript">
       //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("map");//在百度地图容器中创建一个地图
        var point = new BMap.Point(104.054832,30.672962);//定义一个中心点坐标
        map.centerAndZoom(point,18);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
        var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
        map.addControl(ctrl_nav);
                //向地图中添加缩略图控件
        var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
        map.addControl(ctrl_ove);
                //向地图中添加比例尺控件
        var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
        map.addControl(ctrl_sca);
    }
    
    //标注点数组
    var markerArr = [{title:"成都守望者科技有限公司",content:"微信推广、门户建站、APP开发<br/><br/>地址：成都市金牛区，西安中路8号，豪瑞新界A座4楼<br/>服务热线: 028-87525832",point:"104.054832|30.672962",isOpen:1,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
 ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
            var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
            var iw = createInfoWindow(i);
            var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
            marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });

            (function(){
            var index = i;
            var _iw = createInfoWindow(i);
            var _marker = marker;
            _marker.addEventListener("click",function(){
                this.openInfoWindow(_iw);
                });
                _iw.addEventListener("open",function(){
                _marker.getLabel().hide();
                })
                _iw.addEventListener("close",function(){
                _marker.getLabel().show();
                })
            label.addEventListener("click",function(){
                _marker.openInfoWindow(_iw);
                })
            if(!!json.isOpen){
            label.hide();
            _marker.openInfoWindow(_iw);
            }
            })()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://localhost/Public/Style/assets/img/map_location.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initUniform();
            ContactUs.init();
            Layout.initFixHeaderWithPreHeader();
            //Layout.initTwitter();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>