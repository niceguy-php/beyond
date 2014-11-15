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
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>文件上传</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="/Public/Style/assets/global/fonts/2.css" rel="stylesheet" type="text/css">
<link href="/Public/Style/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="/Public/Style/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="/Public/Style/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/Public/Style/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">   
<link href="/Public/Style/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="/Public/Style/assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css" rel="stylesheet"/>
<link href="/Public/Style/assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet"/>
<link href="/Public/Style/assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="/Public/Style/assets/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="/Public/Style/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="/Public/Style/assets/admin/layout2/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="/Public/Style/assets/admin/layout2/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="/Public/Style/assets/admin/layout2/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-boxed page-header-fixed page-container-bg-solid page-sidebar-closed-hide-logo ">

<!-- BEGIN HEADER -->
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner container">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
			<img src="/Public/Style/assets/admin/layout2/img/logo-default.png" style="width:94px;height:16px;" alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN PAGE ACTIONS -->
		<!-- DOC: Remove "hide" class to enable the page header actions -->
		<div class="page-actions hide">
			<div class="btn-group">
				<button type="button" class="btn btn-circle red-pink dropdown-toggle" data-toggle="dropdown">
				<i class="icon-bar-chart"></i>&nbsp;<span class="hidden-sm hidden-xs">New&nbsp;</span>&nbsp;<i class="fa fa-angle-down"></i>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li>
						<a href="#">
						<i class="icon-user"></i> New User </a>
					</li>
					<li>
						<a href="#">
						<i class="icon-present"></i> New Event <span class="badge badge-success">4</span>
						</a>
					</li>
					<li>
						<a href="#">
						<i class="icon-basket"></i> New order </a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="#">
						<i class="icon-flag"></i> Pending Orders <span class="badge badge-danger">4</span>
						</a>
					</li>
					<li>
						<a href="#">
						<i class="icon-users"></i> Pending Users <span class="badge badge-warning">12</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="btn-group">
				<button type="button" class="btn btn-circle green-haze dropdown-toggle" data-toggle="dropdown">
				<i class="icon-bell"></i>&nbsp;<span class="hidden-sm hidden-xs">Post&nbsp;</span>&nbsp;<i class="fa fa-angle-down"></i>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li>
						<a href="#">
						<i class="icon-docs"></i> New Post </a>
					</li>
					<li>
						<a href="#">
						<i class="icon-tag"></i> New Comment </a>
					</li>
					<li>
						<a href="#">
						<i class="icon-share"></i> Share </a>
					</li>
					<li class="divider">
					</li>
					<li>
						<a href="#">
						<i class="icon-flag"></i> Comments <span class="badge badge-success">4</span>
						</a>
					</li>
					<li>
						<a href="#">
						<i class="icon-users"></i> Feedbacks <span class="badge badge-danger">2</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- END PAGE ACTIONS -->
		<!-- BEGIN PAGE TOP -->
		<div class="page-top">
			<!-- BEGIN HEADER SEARCH BOX -->
			<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
			<form class="search-form search-form-expanded" action="extra_search.html" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search..." name="query">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
				</div>
			</form>
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->
					<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-bell"></i>
						<span class="badge badge-danger">
						7 </span>
						</a>
						<ul class="dropdown-menu">
							<li>
								<p>
									 You have 14 new notifications
								</p>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 250px;">
									<li>
										<a href="#">
										<span class="label label-sm label-icon label-success">
										<i class="fa fa-plus"></i>
										</span>
										New user registered. <span class="time">
										Just now </span>
										</a>
									</li>
									<li>
										<a href="#">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Server #12 overloaded. <span class="time">
										15 mins </span>
										</a>
									</li>
									<li>
										<a href="#">
										<span class="label label-sm label-icon label-warning">
										<i class="fa fa-bell-o"></i>
										</span>
										Server #2 not responding. <span class="time">
										22 mins </span>
										</a>
									</li>
									<li>
										<a href="#">
										<span class="label label-sm label-icon label-info">
										<i class="fa fa-bullhorn"></i>
										</span>
										Application error. <span class="time">
										40 mins </span>
										</a>
									</li>
									<li>
										<a href="#">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Database overloaded 68%. <span class="time">
										2 hrs </span>
										</a>
									</li>
									<li>
										<a href="#">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										2 user IP blocked. <span class="time">
										5 hrs </span>
										</a>
									</li>
									<li>
										<a href="#">
										<span class="label label-sm label-icon label-warning">
										<i class="fa fa-bell-o"></i>
										</span>
										Storage Server #4 not responding. <span class="time">
										45 mins </span>
										</a>
									</li>
									<li>
										<a href="#">
										<span class="label label-sm label-icon label-info">
										<i class="fa fa-bullhorn"></i>
										</span>
										System Error. <span class="time">
										55 mins </span>
										</a>
									</li>
									<li>
										<a href="#">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Database overloaded 68%. <span class="time">
										2 hrs </span>
										</a>
									</li>
								</ul>
							</li>
							<li class="external">
								<a href="#">
								See all notifications <i class="icon-arrow-right"></i>
								</a>
							</li>
						</ul>
					</li>
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN INBOX DROPDOWN -->
					<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-envelope-open"></i>
						<span class="badge badge-primary">
						4 </span>
						</a>
						<ul class="dropdown-menu">
							<li>
								<p>
									 You have 12 new messages
								</p>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 250px;">
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="/Public/Style/assets/admin/layout2/img/avatar2.jpg" alt=""/>
										</span>
										<span class="subject">
										<span class="from">
										Lisa Wong </span>
										<span class="time">
										Just Now </span>
										</span>
										<span class="message">
										Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="/Public/Style/assets/admin/layout2/img/avatar3.jpg" alt=""/>
										</span>
										<span class="subject">
										<span class="from">
										Richard Doe </span>
										<span class="time">
										16 mins </span>
										</span>
										<span class="message">
										Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="/Public/Style/assets/admin/layout2/img/avatar1.jpg" alt=""/>
										</span>
										<span class="subject">
										<span class="from">
										Bob Nilson </span>
										<span class="time">
										2 hrs </span>
										</span>
										<span class="message">
										Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="/Public/Style/assets/admin/layout2/img/avatar2.jpg" alt=""/>
										</span>
										<span class="subject">
										<span class="from">
										Lisa Wong </span>
										<span class="time">
										40 mins </span>
										</span>
										<span class="message">
										Vivamus sed auctor 40% nibh congue nibh... </span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="/Public/Style/assets/admin/layout2/img/avatar3.jpg" alt=""/>
										</span>
										<span class="subject">
										<span class="from">
										Richard Doe </span>
										<span class="time">
										46 mins </span>
										</span>
										<span class="message">
										Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
								</ul>
							</li>
							<li class="external">
								<a href="inbox.html">
								See all messages <i class="icon-arrow-right"></i>
								</a>
							</li>
						</ul>
					</li>
					<!-- END INBOX DROPDOWN -->
					<!-- BEGIN TODO DROPDOWN -->
					<li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-calendar"></i>
						<span class="badge badge-success">
						3 </span>
						</a>
						<ul class="dropdown-menu extended tasks">
							<li>
								<p>
									 You have 12 pending tasks
								</p>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 250px;">
									<li>
										<a href="page_todo.html">
										<span class="task">
										<span class="desc">
										New release v1.2 </span>
										<span class="percent">
										30% </span>
										</span>
										<div class="progress">
											<div style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
												<div class="sr-only">
													 40% Complete
												</div>
											</div>
										</div>
										</a>
									</li>
									<li>
										<a href="page_todo.html">
										<span class="task">
										<span class="desc">
										Application deployment </span>
										<span class="percent">
										65% </span>
										</span>
										<div class="progress progress-striped">
											<div style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
												<div class="sr-only">
													 65% Complete
												</div>
											</div>
										</div>
										</a>
									</li>
									<li>
										<a href="page_todo.html">
										<span class="task">
										<span class="desc">
										Mobile app release </span>
										<span class="percent">
										98% </span>
										</span>
										<div class="progress">
											<div style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
												<div class="sr-only">
													 98% Complete
												</div>
											</div>
										</div>
										</a>
									</li>
									<li>
										<a href="page_todo.html">
										<span class="task">
										<span class="desc">
										Database migration </span>
										<span class="percent">
										10% </span>
										</span>
										<div class="progress progress-striped">
											<div style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
												<div class="sr-only">
													 10% Complete
												</div>
											</div>
										</div>
										</a>
									</li>
									<li>
										<a href="page_todo.html">
										<span class="task">
										<span class="desc">
										Web server upgrade </span>
										<span class="percent">
										58% </span>
										</span>
										<div class="progress progress-striped">
											<div style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
												<div class="sr-only">
													 58% Complete
												</div>
											</div>
										</div>
										</a>
									</li>
									<li>
										<a href="page_todo.html">
										<span class="task">
										<span class="desc">
										Mobile development </span>
										<span class="percent">
										85% </span>
										</span>
										<div class="progress progress-striped">
											<div style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
												<div class="sr-only">
													 85% Complete
												</div>
											</div>
										</div>
										</a>
									</li>
									<li>
										<a href="page_todo.html">
										<span class="task">
										<span class="desc">
										New UI release </span>
										<span class="percent">
										18% </span>
										</span>
										<div class="progress progress-striped">
											<div style="width: 18%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
												<div class="sr-only">
													 18% Complete
												</div>
											</div>
										</div>
										</a>
									</li>
								</ul>
							</li>
							<li class="external">
								<a href="page_todo.html">
								See all tasks <i class="icon-arrow-right"></i>
								</a>
							</li>
						</ul>
					</li>
					<!-- END TODO DROPDOWN -->
					<!-- BEGIN QUICK SIDEBAR TOGGLER -->
					<li class="dropdown dropdown-quick-sidebar-toggler hide">
						<a href="javascript:;" class="dropdown-toggle">
						<i class="icon-logout"></i>
						</a>
					</li>
					<!-- END QUICK SIDEBAR TOGGLER -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown dropdown-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" class="img-circle" src="/Public/Style/assets/admin/layout2/img/avatar4.jpg"/>
						<span class="username username-hide-on-mobile">
						
						<?php echo $_SESSION['user']['username'];?> 
						
						</span>
						<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
						<!-- 
							<li>
								<a href="extra_profile.html">
								<i class="icon-user"></i> My Profile </a>
							</li>
							<li>
								<a href="page_calendar.html">
								<i class="icon-calendar"></i> My Calendar </a>
							</li>
							<li>
								<a href="inbox.html">
								<i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
								3 </span>
								</a>
							</li>
							<li>
								<a href="page_todo.html">
								<i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
								7 </span>
								</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="extra_lock.html">
								<i class="icon-lock"></i> Lock Screen </a>
							</li>-->
							<li>
								<a href="/index.php/Admin/user/logout">
								<i class="icon-key"></i> 注销 </a>
							</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- END HEADER -->

<div class="clearfix">
</div>
<div class="container">
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		
		<!-- BEGIN SIDEBAR -->
		<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
	<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
	<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
	<div class="page-sidebar navbar-collapse collapse">
		<!-- BEGIN SIDEBAR MENU -->
		<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-auto-scroll="true" data-slide-speed="200">
			<li <?php echo $active=='home'?'class="start active "':'';?>>
				<a href="/index.php/Admin/index/index">
				<i class="icon-home"></i>
				<span class="title">首页</span>
				<span class="selected"></span>
				</a>
			</li>
			<li <?php echo $active=='user'?'class="start active "':'';?>>
				<a href="/index.php/Admin/user/lists">
				<i class="icon-user"></i>
				<span class="title">用户</span>
				<span class="arrow "></span>
				</a>
				<!-- 
				<ul class="sub-menu">
					<li>
						<a href="ecommerce_index.html">
						<i class="icon-home"></i>
						首页</a>
					</li>
					<li>
						<a href="ecommerce_orders.html">
						<i class="icon-basket"></i>
						Orders</a>
					</li>
					<li>
						<a href="ecommerce_orders_view.html">
						<i class="icon-tag"></i>
						Order View</a>
					</li>
					<li>
						<a href="ecommerce_products.html">
						<i class="icon-handbag"></i>
						Products</a>
					</li>
					<li>
						<a href="ecommerce_products_edit.html">
						<i class="icon-pencil"></i>
						Product Edit</a>
					</li>
				</ul> -->
			</li>
			<!-- 
				<li>
				<a href="javascript:;">
				<i class="icon-rocket"></i>
				<span class="title">Page Layouts</span>
				<span class="arrow "></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="layout_fontawesome_icons.html">
						<span class="badge badge-roundless badge-danger">new</span>Layout with Fontawesome Icons</a>
					</li>
					<li>
						<a href="layout_glyphicons.html">
						Layout with Glyphicon</a>
					</li>
					<li>
						<a href="layout_full_height_content.html">
						<span class="badge badge-roundless badge-warning">new</span>Full Height Content</a>
					</li>
					<li>
						<a href="layout_sidebar_reversed.html">
						<span class="badge badge-roundless badge-warning">new</span>Right Sidebar Page</a>
					</li>
					<li>
						<a href="layout_sidebar_fixed.html">
						Sidebar Fixed Page</a>
					</li>
					<li>
						<a href="layout_sidebar_closed.html">
						Sidebar Closed Page</a>
					</li>
					<li>
						<a href="layout_ajax.html">
						Content Loading via Ajax</a>
					</li>
					<li>
						<a href="layout_disabled_menu.html">
						Disabled Menu Links</a>
					</li>
					<li>
						<a href="layout_blank_page.html">
						Blank Page</a>
					</li>
					<li>
						<a href="layout_fluid_page.html">
						Fluid Page</a>
					</li>
					<li>
						<a href="layout_language_bar.html">
						Language Switch Bar</a>
					</li>
				</ul>
			</li>
			<!-- BEGIN FRONTEND THEME LINKS -->
			<li <?php echo $active=='camera'?'class="start active "':'';?>>
				<a href="/index.php/Admin/camera/lists">
				<i class="icon-camcorder"></i>
				<span class="title">
				摄像头 </span>
				<span class="arrow">
				</span>
				</a>
				<!-- 
				<ul class="sub-menu">
					<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Complete eCommerce Frontend Theme For Metronic Admin">
						<a href="http://keenthemes.com/preview/metronic/theme/templates/frontend/shop-index.html" target="_blank">
						<span class="title">
						eCommerce Frontend </span>
						</a>
					</li>
					<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Complete Corporate Frontend Theme For Metronic Admin">
						<a href="http://keenthemes.com/preview/metronic/theme/templates/frontend/" target="_blank">
						<span class="title">
						Corporate Frontend </span>
						</a>
					</li>
					<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="Complete One Page Parallax Frontend Theme For Metronic Admin">
						<a href="http://keenthemes.com/preview/metronic/theme/templates/frontend/onepage-index.html" target="_blank">
						<span class="title">
						One Page Parallax Frontend </span>
						</a>
					</li>
				</ul> -->
			</li>
			
			
			<li <?php echo $active=='system'?'class="start active "':'';?>>
				<a href="/index.php/Admin/camera/lists">
				<i class="icon-settings"></i>
				<span class="title">
				系统 </span>
				<span class="arrow">
				</span>
				</a>
				<ul class="sub-menu">
					<li class="tooltips" data-container="body" data-placement="right" data-html="true" data-original-title="上传产品相关的宣传图片">
						<a href="/index.php/Admin/system/upload">
						<span class="title">
						产品宣传图片管理</span>
						</a>
					</li>
				</ul> 
			</li>
			
			<!-- END FRONTEND THEME LINKS -->
		</ul>
		<!-- END SIDEBAR MENU -->
	</div>
</div>
<!-- END SIDEBAR -->
		<!-- END SIDEBAR -->
		
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Modal title</h4>
							</div>
							<div class="modal-body">
								 Widget settings form goes here
							</div>
							<div class="modal-footer">
								<button type="button" class="btn blue">Save changes</button>
								<button type="button" class="btn default" data-dismiss="modal">Close</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				
				<!-- BEGIN STYLE CUSTOMIZER -->
				<!-- BEGIN STYLE CUSTOMIZER -->
				<div class="theme-panel">
					<div class="toggler tooltips" data-container="body" data-placement="left" data-html="true" data-original-title="点击进入高级布局设置页面">
						<i class="icon-settings"></i>
					</div>
					<div class="toggler-close">
						<i class="icon-close"></i>
					</div>
					<div class="theme-options">
						<div class="theme-option theme-colors clearfix">
							<span>
							皮肤 </span>
							<ul>
								<li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default">
								</li>
								<li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
								</li>
								<li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
								</li>
								<li class="color-dark tooltips" data-style="dark" data-container="body" data-original-title="Dark">
								</li>
								<li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
								</li>
							</ul>
						</div>
						<div class="theme-option">
							<span>
							整体布局 </span>
							<select class="layout-option form-control input-small">
								<option value="fluid" selected="selected">Fluid</option>
								<option value="boxed">Boxed</option>
							</select>
						</div>
						<div class="theme-option">
							<span>
							页面顶部 </span>
							<select class="page-header-option form-control input-small">
								<option value="fixed" selected="selected">Fixed</option>
								<option value="default">Default</option>
							</select>
						</div>
						<div class="theme-option">
							<span>
							导航选项</span>
							<select class="sidebar-option form-control input-small">
								<option value="fixed">Fixed</option>
								<option value="default" selected="selected">Default</option>
							</select>
						</div>
						<div class="theme-option">
							<span>
							导航样式</span>
							<select class="sidebar-style-option form-control input-small">
								<option value="default" selected="selected">Default</option>
								<option value="compact">Compact</option>
							</select>
						</div>
						<div class="theme-option">
							<span>
							导航菜单 </span>
							<select class="sidebar-menu-option form-control input-small">
								<option value="accordion" selected="selected">Accordion</option>
								<option value="hover">Hover</option>
							</select>
						</div>
						<div class="theme-option">
							<span>
							导航位置 </span>
							<select class="sidebar-pos-option form-control input-small">
								<option value="left" selected="selected">Left</option>
								<option value="right">Right</option>
							</select>
						</div>
						<div class="theme-option">
							<span>
							页面底部 </span>
							<select class="page-footer-option form-control input-small">
								<option value="fixed">Fixed</option>
								<option value="default" selected="selected">Default</option>
							</select>
						</div>
						
					</div>
				</div>
				<!-- END STYLE CUSTOMIZER -->
				<!-- END STYLE CUSTOMIZER -->
				
				<!-- BEGIN PAGE HEADER-->
				<h3 class="page-title">
				产品传宣图片上传 <small>上传各种图片</small>
				</h3>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">系统</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">产品宣传图片上传</a>
						</li>
					</ul>
					<div class="page-toolbar hide">
						<div class="btn-group pull-right">
							<button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
							Actions <i class="fa fa-angle-down"></i>
							</button>
							<ul class="dropdown-menu pull-right" role="menu">
								<li>
									<a href="#">Action</a>
								</li>
								<li>
									<a href="#">Another action</a>
								</li>
								<li>
									<a href="#">Something else here</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Separated link</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="portlet light">
					<div class="portlet-body">
						<div class="row">
							<div class="col-md-12">
								<div class="note note-danger hide">
									<p>
										 支持多文件上传
									</p>
								</div>
								<form id="fileupload" action="/Public/Style/assets/global/plugins/jquery-file-upload/server/php/" method="POST" enctype="multipart/form-data">
									<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
									<div class="row fileupload-buttonbar">
										<div class="col-lg-7">
											<!-- The fileinput-button span is used to style the file input field as button -->
											<span class="btn green fileinput-button">
											<i class="fa fa-plus"></i>
											<span>
											添加文件... </span>
											<input type="file" name="files[]" multiple="">
											</span>
											<button type="submit" class="btn blue start">
											<i class="fa fa-upload"></i>
											<span>
											开始上传 </span>
											</button>
											<button type="reset" class="btn warning cancel">
											<i class="fa fa-ban-circle"></i>
											<span>
											取消 </span>
											</button>
											<button type="button" class="btn red delete">
											<i class="fa fa-trash"></i>
											<span>
											删除 </span>
											</button>
											<input type="checkbox" class="toggle">
											<!-- The global file processing state -->
											<span class="fileupload-process">
											</span>
										</div>
										<!-- The global progress information -->
										<div class="col-lg-5 fileupload-progress fade">
											<!-- The global progress bar -->
											<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
												<div class="progress-bar progress-bar-success" style="width:0%;">
												</div>
											</div>
											<!-- The extended global progress information -->
											<div class="progress-extended">
												 &nbsp;
											</div>
										</div>
									</div>
									<!-- The table listing the files available for upload/download -->
									<table role="presentation" class="table table-striped clearfix">
									<tbody class="files">
									</tbody>
									</table>
								</form>
								<div class="panel panel-success">
									<div class="panel-heading">
										<h3 class="panel-title">注意</h3>
									</div>
									<div class="panel-body">
										<ul>
											<li>
												 最大上传文件大小为 <strong>5 MB</strong> (default file size is unlimited).
											</li>
											<li>
												 支持文件上传的类型包括 (<strong>JPG, GIF, PNG</strong>)
											</li>
											<li>
												支持多文件上传
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
		</div>
		<!-- END CONTENT -->
		<!-- BEGIN QUICK SIDEBAR -->
		<!--Cooming Soon...-->
		<!-- END QUICK SIDEBAR -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="page-footer">
		<div class="page-footer-inner">
			 2014 &copy; Metronic by keenthemes.
		</div>
		<div class="scroll-to-top">
			<i class="icon-arrow-up"></i>
		</div>
	</div>
	<!-- END FOOTER -->
</div>
<!-- The blueimp Gallery widget -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
	<div class="slides">
	</div>
	<h3 class="title"></h3>
	<a class="prev">
	‹ </a>
	<a class="next">
	› </a>
	<a class="close white">
	</a>
	<a class="play-pause">
	</a>
	<ol class="indicator">
	</ol>
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger label label-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
            <div class="progress-bar progress-bar-success" style="width:0%;"></div>
            </div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn blue start" disabled>
                    <i class="fa fa-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn red cancel">
                    <i class="fa fa-ban"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
            <tr class="template-download fade">
                <td>
                    <span class="preview">
                        {% if (file.thumbnailUrl) { %}
                            <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                        {% } %}
                    </span>
                </td>
                <td>
                    <p class="name">
                        {% if (file.url) { %}
                            <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                        {% } else { %}
                            <span>{%=file.name%}</span>
                        {% } %}
                    </p>
                    {% if (file.error) { %}
                        <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                    {% } %}
                </td>
                <td>
                    <span class="size">{%=o.formatFileSize(file.size)%}</span>
                </td>
                <td>
                    {% if (file.deleteUrl) { %}
                        <button class="btn red delete btn-sm" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                            <i class="fa fa-trash-o"></i>
                            <span>Delete</span>
                        </button>
                        <input type="checkbox" name="delete" value="1" class="toggle">
                    {% } else { %}
                        <button class="btn yellow cancel btn-sm">
                            <i class="fa fa-ban"></i>
                            <span>Cancel</span>
                        </button>
                    {% } %}
                </td>
            </tr>
        {% } %}
    </script>
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="/Public/Style/assets/global/plugins/respond.min.js"></script>
<script src="/Public/Style/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="/Public/Style/assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="/Public/Style/assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/Public/Style/assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="/Public/Style/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/Public/Style/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/Public/Style/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/Public/Style/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/Public/Style/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="/Public/Style/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/Public/Style/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/Public/Style/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<!-- END PAGE LEVEL PLUGINS-->
<!-- BEGIN:File Upload Plugin JS files-->
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="/Public/Style/assets/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="/Public/Style/assets/global/plugins/jquery-file-upload/js/vendor/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="/Public/Style/assets/global/plugins/jquery-file-upload/js/vendor/load-image.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="/Public/Style/assets/global/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js"></script>
<!-- blueimp Gallery script -->
<script src="/Public/Style/assets/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="/Public/Style/assets/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="/Public/Style/assets/global/plugins/jquery-file-upload/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="/Public/Style/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="/Public/Style/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="/Public/Style/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="/Public/Style/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="/Public/Style/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="/Public/Style/assets/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
    <script src="/Public/Style/assets/global/plugins/jquery-file-upload/js/cors/jquery.xdr-transport.js"></script>
    <![endif]-->
<!-- END:File Upload Plugin JS files-->
<script src="/Public/Style/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/Public/Style/assets/admin/layout2/scripts/layout.js" type="text/javascript"></script>
<script src="/Public/Style/assets/admin/layout2/scripts/demo.js" type="text/javascript"></script>
<script src="/Public/Style/assets/admin/pages/scripts/form-fileupload.js"></script>
<script>
        jQuery(document).ready(function() {
        // initiate layout and plugins
        Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
        FormFileUpload.init();
        });
    </script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>