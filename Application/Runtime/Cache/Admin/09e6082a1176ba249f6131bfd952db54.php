<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.2.0
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
<title>统计报表 </title>
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
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="/Public/Style/assets/global/plugins/clockface/css/clockface.css"/>
<link rel="stylesheet" type="text/css" href="/Public/Style/assets/global/plugins/bootstrap-datepicker/css/datepicker3.css"/>
<link rel="stylesheet" type="text/css" href="/Public/Style/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css"/>
<link rel="stylesheet" type="text/css" href="/Public/Style/assets/global/plugins/bootstrap-colorpicker/css/colorpicker.css"/>
<link rel="stylesheet" type="text/css" href="/Public/Style/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css"/>
<link rel="stylesheet" type="text/css" href="/Public/Style/assets/global/plugins/bootstrap-datetimepicker/css/datetimepicker.css"/>
<!-- END PAGE LEVEL STYLES -->


<!-- BEGIN THEME STYLES -->
<link href="/Public/Style/assets/global/css/components.css" rel="stylesheet" type="text/css">
<link href="/Public/Style/assets/global/css/plugins.css" rel="stylesheet" type="text/css">
<link href="/Public/Style/assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css">
<link href="/Public/Style/assets/admin/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
<link href="/Public/Style/assets/admin/layout3/css/custom.css" rel="stylesheet" type="text/css">
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body>
<!-- BEGIN HEADER -->
<div class="page-header">
	<!-- BEGIN HEADER TOP -->
	<div class="page-header-top">
		<div class="container">
			<!-- BEGIN LOGO -->
			<div class="page-logo">
				<a href="index.html"><img src="/Public/Style/assets/img/bianlogo_short.jpg" alt="logo" style="height: 75px; border-bottom-width: 12px; margin-bottom: 20px; margin-top: 0px;" class="logo-default"></a>
			</div>
			<!-- END LOGO -->
			
			
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler"></a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->
					<li class="dropdown dropdown-extended dropdown-dark dropdown-notification" id="header_notification_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-bell"></i>
						<span class="badge badge-default">7</span>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3>你有 <strong>2 个</strong> 告警</h3>
								<a href="#">查看所有</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
									<li>
										<a href="#">
										<span class="time">刚刚</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										有农作物被盗 </span>
										</a>
									</li>
									<li>
										<a href="#">
										<span class="time">3 分钟前</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										编号为xxx的放电设备故障 </span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN TODO DROPDOWN -->
					<li class="dropdown dropdown-extended dropdown-dark dropdown-tasks" id="header_task_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="icon-calendar"></i>
						<span class="badge badge-default">3</span>
						</a>
						<ul class="dropdown-menu extended tasks">
							<li class="external">
								<h3>有 <strong>1 个</strong> 任务</h3>
								<a href="#">查看所有</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
									<li>
										<a href="#">
										<span class="task">
										<span class="desc">设备故障排查 </span>
										<span class="percent">0%</span>
										</span>
										<span class="progress">
										<span style="width: 0%;" class="progress-bar progress-bar-success" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">40% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="#">
										<span class="task">
										<span class="desc">设备故障排查 </span>
										<span class="percent">0%</span>
										</span>
										<span class="progress">
										<span style="width: 0%;" class="progress-bar progress-bar-success" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">40% Complete</span></span>
										</span>
										</a>
									</li>
									<li>
										<a href="#">
										<span class="task">
										<span class="desc">设备故障排查 </span>
										<span class="percent">0%</span>
										</span>
										<span class="progress">
										<span style="width: 0%;" class="progress-bar progress-bar-success" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">40% Complete</span></span>
										</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- END TODO DROPDOWN -->
					<li class="droddown dropdown-separator">
						<span class="separator"></span>
					</li>
					<!-- BEGIN INBOX DROPDOWN -->
					<li class="dropdown dropdown-extended dropdown-dark dropdown-inbox hide" id="header_inbox_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<span class="circle">3</span>
						<span class="corner"></span>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3>You have <strong>7 New</strong> Messages</h3>
								<a href="#">view all</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="/Public/Style/assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Lisa Wong </span>
										<span class="time">Just Now </span>
										</span>
										<span class="message">
										Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="/Public/Style/assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Richard Doe </span>
										<span class="time">16 mins </span>
										</span>
										<span class="message">
										Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="/Public/Style/assets/admin/layout3/img/avatar1.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Bob Nilson </span>
										<span class="time">2 hrs </span>
										</span>
										<span class="message">
										Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="/Public/Style/assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Lisa Wong </span>
										<span class="time">40 mins </span>
										</span>
										<span class="message">
										Vivamus sed auctor 40% nibh congue nibh... </span>
										</a>
									</li>
									<li>
										<a href="inbox.html?a=view">
										<span class="photo">
										<img src="/Public/Style/assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Richard Doe </span>
										<span class="time">46 mins </span>
										</span>
										<span class="message">
										Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- END INBOX DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<img alt="" class="img-circle" src="/Public/Style/assets/admin/layout3/img/avatar9.jpg">
						<span class="username username-hide-mobile"><?php echo ($_SESSION['user']['userName']); ?>(<?php echo ($_SESSION['user']['realname']); ?>)</span>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="#modifyPassword" data-toggle="modal">
								<i class="icon-lock"></i> 修改密码 </a>
							</li>
							<li>
								<a href="/index.php/Admin/user/logout">
								<i class="icon-key"></i> 注销</a>
							</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
	</div>

	<!-- END HEADER TOP -->
	
	<!-- BEGIN HEADER MENU -->
	<div class="page-header-menu">
		<div class="container">
			<!-- BEGIN HEADER SEARCH BOX -->
			<form class="search-form" action="extra_search.html" method="GET">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search" name="query">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
				</div>
			</form>
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN MEGA MENU -->
			<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
			<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
			<div class="hor-menu ">
				<ul class="nav navbar-nav">
					<li class="<?php echo ($homeNavStatus); ?>">
						<a href="/index.php/Admin/index/index">首页</a>
					</li>
					
					<li class="<?php echo ($deviceNavStatus); ?>">
						<a href="/index.php/Admin/device/lists">设备管理</a>
					</li>
					<?php if($_SESSION['user']['roles']== 'admin'): ?><li class="<?php echo ($userNavStatus); ?>">
							<a href="/index.php/Admin/user/lists">用户管理</a>
						</li><?php endif; ?>

					<li class="<?php echo ($historyNavStatus); ?>">
						<a href="/index.php/Admin/device/historyData">历史数据</a>
					</li>
					<li class="<?php echo ($analysisNavStatus); ?>">
						<a href="/index.php/Admin/device/compareAnalysis">对比分析</a>
					</li>
					
					<li class="menu-dropdown classic-menu-dropdown hide">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
						Extra <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu pull-left">
							<li class=" dropdown-submenu">
								<a href=":;">
								<i class="icon-briefcase"></i>
								Data Tables </a>
								<ul class="dropdown-menu">
									<li class=" ">
										<a href="table_basic.html">
										Basic Datatables </a>
									</li>
									<li class=" ">
										<a href="table_responsive.html">
										Responsive Datatables </a>
									</li>
									<li class=" ">
										<a href="table_managed.html">
										Managed Datatables </a>
									</li>
									<li class=" ">
										<a href="table_editable.html">
										Editable Datatables </a>
									</li>
									<li class=" ">
										<a href="table_advanced.html">
										Advanced Datatables </a>
									</li>
									<li class=" ">
										<a href="table_ajax.html">
										Ajax Datatables </a>
									</li>
								</ul>
							</li>
							<li class=" dropdown-submenu">
								<a href=":;">
								<i class="icon-wallet"></i>
								Portlets </a>
								<ul class="dropdown-menu">
									<li class=" ">
										<a href="portlet_general.html">
										General Portlets </a>
									</li>
									<li class=" ">
										<a href="portlet_general2.html">
										New Portlets #1 <span class="badge badge-roundless badge-danger">new</span>
										</a>
									</li>
									<li class=" ">
										<a href="portlet_general3.html">
										New Portlets #2 <span class="badge badge-roundless badge-danger">new</span>
										</a>
									</li>
									<li class=" ">
										<a href="portlet_ajax.html">
										Ajax Portlets </a>
									</li>
									<li class=" ">
										<a href="portlet_draggable.html">
										Draggable Portlets </a>
									</li>
								</ul>
							</li>
							<li class=" dropdown-submenu">
								<a href=":;">
								<i class="icon-pointer"></i>
								Maps </a>
								<ul class="dropdown-menu">
									<li class=" ">
										<a href="maps_google.html">
										Google Maps </a>
									</li>
									<li class=" ">
										<a href="maps_vector.html">
										Vector Maps </a>
									</li>
								</ul>
							</li>
							<li class=" ">
								<a href="charts.html">
								<i class="icon-bar-chart"></i>
								Visual Charts </a>
							</li>
							<li class="divider">
							</li>
							<li class=" dropdown-submenu">
								<a href=":;">
								<i class="icon-puzzle"></i>
								Multi Level </a>
								<ul class="dropdown-menu">
									<li class=" ">
										<a href="#">
										<i class="icon-settings"></i>
										Item 1 </a>
									</li>
									<li class=" ">
										<a href="#">
										<i class="icon-user"></i>
										Item 2 </a>
									</li>
									<li class=" ">
										<a href="#">
										<i class="icon-globe"></i>
										Item 3 </a>
									</li>
									<li class=" dropdown-submenu">
										<a href="#">
										<i class="icon-folder"></i>
										Sub Items </a>
										<ul class="dropdown-menu">
											<li class=" ">
												<a href="#">
												Item 1 </a>
											</li>
											<li class=" ">
												<a href="#">
												Item 2 </a>
											</li>
											<li class=" ">
												<a href="#">
												Item 3 </a>
											</li>
											<li class=" ">
												<a href="#">
												Item 4 </a>
											</li>
										</ul>
									</li>
									<li class=" ">
										<a href="#">
										<i class="icon-share"></i>
										Item 4 </a>
									</li>
									<li class=" ">
										<a href="#">
										<i class="icon-bar-chart"></i>
										Item 5 </a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					
					<!-- begin: mega menu with custom content -->
					<li class="menu-dropdown mega-menu-dropdown mega-menu-full hide">
						<a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">
						Mega Menu <i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li>
								<div class="mega-menu-content">
									<div class="row">
										<div class="col-md-6">
											<div id="accordion" class="panel-group">
												<div class="panel panel-success">
													<div class="panel-heading">
														<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
														Mega Menu Info #1 </a>
														</h4>
													</div>
													<div id="collapseOne" class="panel-collapse in">
														<div class="panel-body">
															<p>
																 Metronic Mega Menu Works for fixed and responsive layout and has the facility to include (almost) any Bootstrap elements and jquery plugins.
															</p>
															<p>
																 Duis mollis, est non commodo luctus, nisi erat mattis consectetur purus sit amet porttitor ligula. nisi erat mattis consectetur purus
															</p>
														</div>
													</div>
												</div>
												<div class="panel panel-danger">
													<div class="panel-heading">
														<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
														Mega Menu Info #2 </a>
														</h4>
													</div>
													<div id="collapseTwo" class="panel-collapse collapse">
														<div class="panel-body">
															<p>
																 Metronic Mega Menu Works for fixed and responsive layout and has the facility to include (almost) any Bootstrap elements and jquery plugins.
															</p>
															<p>
																 Duis mollis, est non commodo luctus, nisi erat mattis consectetur purus sit amet porttitor ligula. nisi erat mattis consectetur purus
															</p>
														</div>
													</div>
												</div>
												<div class="panel panel-info">
													<div class="panel-heading">
														<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
														Mega Menu Info #3 </a>
														</h4>
													</div>
													<div id="collapseThree" class="panel-collapse collapse">
														<div class="panel-body">
															<p>
																 Metronic Mega Menu Works for fixed and responsive layout and has the facility to include (almost) any Bootstrap elements and jquery plugins.
															</p>
															<p>
																 Duis mollis, est non commodo luctus, nisi erat mattis consectetur purus sit amet porttitor ligula. nisi erat mattis consectetur purus
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="portlet light">
												<div class="portlet-title">
													<div class="caption">
														<i class="fa fa-cogs font-red-sunglo"></i>
														<span class="caption-subject font-red-sunglo bold uppercase">Notes</span>
														<span class="caption-helper">notes samples...</span>
													</div>
													<div class="tools">
														<a href="javascript:;" class="collapse">
														</a>
														<a href="#portlet-config" data-toggle="modal" class="config">
														</a>
														<a href="javascript:;" class="reload">
														</a>
														<a href="javascript:;" class="remove">
														</a>
													</div>
												</div>
												<div class="portlet-body">
													<div class="note note-success">
														<h4 class="block">Success! Some Header Goes Here</h4>
														<p>
															 Duis mollis, est non commodo luctus, nisi erat mattis consectetur purus sit amet porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</li>
					<!-- end: mega menu with custom content -->
				</ul>
			</div>
			<!-- END MEGA MENU -->
		</div>
	</div>
	<!-- END HEADER MENU -->
</div>
<!-- END HEADER -->
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>统计报表 <small><?php echo ($deviceInfo["name"]); ?>（<?php echo ($deviceInfo["sn"]); ?>）的统计信息</small></h1>
			</div>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PAGE TOOLBAR -->
			<div class="page-toolbar hide">
				<!-- BEGIN THEME PANEL -->
				<div class="btn-group btn-theme-panel">
					<a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
					<i class="icon-settings"></i>
					</a>
					<div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<h3>THEME COLORS</h3>
								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-12">
										<ul class="theme-colors">
											<li class="theme-color theme-color-default" data-theme="default">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Default</span>
											</li>
											<li class="theme-color theme-color-blue-hoki" data-theme="blue-hoki">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Blue Hoki</span>
											</li>
											<li class="theme-color theme-color-blue-steel" data-theme="blue-steel">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Blue Steel</span>
											</li>
											<li class="theme-color theme-color-yellow-orange" data-theme="yellow-orange">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Orange</span>
											</li>
											<li class="theme-color theme-color-yellow-crusta" data-theme="yellow-crusta">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Yellow Crusta</span>
											</li>
										</ul>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<ul class="theme-colors">
											<li class="theme-color theme-color-green-haze" data-theme="green-haze">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Green Haze</span>
											</li>
											<li class="theme-color theme-color-red-sunglo" data-theme="red-sunglo">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Red Sunglo</span>
											</li>
											<li class="theme-color theme-color-red-intense" data-theme="red-intense">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Red Intense</span>
											</li>
											<li class="theme-color theme-color-purple-plum" data-theme="purple-plum">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Purple Plum</span>
											</li>
											<li class="theme-color theme-color-purple-studio" data-theme="purple-studio">
												<span class="theme-color-view"></span>
												<span class="theme-color-name">Purple Studio</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12 seperator">
								<h3>LAYOUT</h3>
								<ul class="theme-settings">
									<li>
										 Layout
										<select class="theme-setting theme-setting-layout form-control input-sm input-small input-inline tooltips" data-original-title="Change layout type" data-container="body" data-placement="left">
											<option value="boxed" selected="selected">Boxed</option>
											<option value="fluid">Fluid</option>
										</select>
									</li>
									<li>
										 Top Menu Style
										<select class="theme-setting theme-setting-top-menu-style form-control input-sm input-small input-inline tooltips" data-original-title="Change top menu dropdowns style" data-container="body" data-placement="left">
											<option value="dark" selected="selected">Dark</option>
											<option value="light">Light</option>
										</select>
									</li>
									<li>
										 Top Menu Mode
										<select class="theme-setting theme-setting-top-menu-mode form-control input-sm input-small input-inline tooltips" data-original-title="Enable fixed(sticky) top menu" data-container="body" data-placement="left">
											<option value="fixed">Fixed</option>
											<option value="not-fixed" selected="selected">Not Fixed</option>
										</select>
									</li>
									<li>
										 Mega Menu Style
										<select class="theme-setting theme-setting-mega-menu-style form-control input-sm input-small input-inline tooltips" data-original-title="Change mega menu dropdowns style" data-container="body" data-placement="left">
											<option value="dark" selected="selected">Dark</option>
											<option value="light">Light</option>
										</select>
									</li>
									<li>
										 Mega Menu Mode
										<select class="theme-setting theme-setting-mega-menu-mode form-control input-sm input-small input-inline tooltips" data-original-title="Enable fixed(sticky) mega menu" data-container="body" data-placement="left">
											<option value="fixed" selected="selected">Fixed</option>
											<option value="not-fixed">Not Fixed</option>
										</select>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- END THEME PANEL -->
			</div>
			
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="modifyPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title bold green">修改密码</h4>
						</div>
						<div class="modal-body">
							 <form class="form-horizontal" role="form">
								<div class="form-body">
									<div class="form-group">
										<label class="col-md-3 control-label">旧密码</label>
										<div class="col-md-6">
											<input type="password" class="form-control" id="old_password" name="old_password" placeholder="旧密码">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">新密码</label>
										<div class="col-md-6">
											<input type="password" class="form-control" id="new_password" name="new_password" placeholder="新密码">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">确认密码</label>
										<div class="col-md-6">
											<input type="password" class="form-control" id="new_repassword" name="new_repassword" placeholder="确认密码">
										</div>
									</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" id="modifyPasswordBtn" class="btn green">修改</button>
							<button type="button" id="modifyPasswordCloseBtn" class="btn default" data-dismiss="modal">关闭</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			
			<script src="/Public/Style/assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
			<script>
			$("#modifyPasswordBtn").on('click',function(){
					var old_password = $.trim( $("#old_password").val() );
					var new_password = $.trim( $("#new_password").val() );
					var new_repassword = $.trim( $("#new_repassword").val() );
					var postData = {
									"old_password":old_password,
									"new_password":new_password,
									"new_repassword":new_repassword
									};
					if(old_password == '' || new_password == '' || new_repassword == ''){
						alert('输入的信息不能为空');
						return;
					}
					$.ajax({
					   type: "POST",
					   url: "/index.php/admin/user/updatePasswd",
					   data: postData,
					   success: function(msg){
						   if( parseInt(msg) > 0 ){
							   alert('修改密码成功');
							   window.location.reload();
						   }if(parseInt(msg) == 0){
							   alert('输入的旧密码不正确')
						   }else{
							   alert(msg);
						   }
					   }
					});
			});
			</script>
			<!-- END PAGE TOOLBAR -->
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
			
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb" style="display:none;">
				<li>
					<a href="#">首页</a><i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="charts.html">统计图表</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<!-- BEGIN CHART PORTLETS-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN BASIC CHART PORTLET-->
					<!-- BEGIN INTERACTIVE CHART PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-bar-chart-o font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">诱杀害虫数量实时信息统计图</span>
							</div>
							
							<div class="btn-group col-xs-offset-1 hide">
								<button type="button" class="btn default">选择指标</button>
								<button type="button" class="btn default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button>
								<div class="dropdown-menu hold-on-click dropdown-checkboxes" role="menu">
									<label><input type="checkbox">放电次数</label>
									<label><input type="checkbox" checked>杀虫数量</label>
								</div>
							</div>
							
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div id="realtime_stat" class="chart">
							</div>
						</div>
						
						<table class='table table-striped table-bordered table-hover dataTable no-footer'>
							<tr>
							<th style="width:300px;">时间段</th><th>最小值</th><th>最大值</th><th>平均值</th><th>总计</th>
							</tr>
							<tr>
							<td>2014/11/4 00:00~23:59(当天)</td><td>10</td><td>200</td><td>180</td><td>1620</td>
							</tr>
							<tr>
							<td>2014/10/01~2014/10/31(近30天)</td><td>5</td><td>250</td><td>192</td><td>5820</td>
							</tr>
						</table>
						
					</div>
					<!-- END INTERACTIVE CHART PORTLET-->
					
					<!-- BEGIN INTERACTIVE CHART PORTLET-->
					<div class="portlet light hide">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-bar-chart-o font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">2014年每个月杀死害虫统计对比图</span>
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div id="hight_chart_line_4" class="chart">
							</div>
						</div>
						
						<table class='table table-striped table-bordered table-hover dataTable no-footer'>
							<tr>
							<th style="width:300px;">时间段</th><th>最小值</th><th>最大值</th><th>平均值</th><th>总计</th>
							</tr>
							<tr>
							<td>2014/11/4 00:00~23:59(当天)</td><td>10</td><td>200</td><td>180</td><td>1620</td>
							</tr>
							<tr>
							<td>2014/10/01~2014/10/31(近30天)</td><td>5</td><td>250</td><td>192</td><td>5820</td>
							</tr>
						</table>
					</div>
					<!-- END INTERACTIVE CHART PORTLET-->
					
					
					<!-- BEGIN INTERACTIVE CHART PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-bar-chart-o font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">诱杀害虫按小时统计图</span>
							</div>
							
							<div class="btn-group col-xs-offset-1 hide">
								<button type="button" class="btn default">选择指标</button>
								<button type="button" class="btn default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button>
								<div class="dropdown-menu hold-on-click dropdown-checkboxes" role="menu">
									<label><input type="checkbox">放电次数</label>
									<label><input type="checkbox" checked>杀虫数量</label>
								</div>
							</div>
							
							<div class="form-group pull-left col-xs-offset-1 " style="margin-bottom:0px;">
										<label class="control-label col-md-3" style="padding:0;margin-top: 6px;">时间范围</label>
										<div class="col-md-3" style="padding:0">
											<div id="reportrange" class="btn default">
												<i class="fa fa-calendar"></i>
												&nbsp; <span>
												</span>
												<b class="fa fa-angle-down"></b>
											</div>
										</div>
									</div>
							
							<div class="tools">
								
								<a href="javascript:;" class="collapse" style="float:right;">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div id="hour_stat" class="chart">
							</div>
						</div>
						
						<table class='table table-striped table-bordered table-hover dataTable no-footer'>
							<tr>
							<th style="width:300px;">时间段</th><th>最小值</th><th>最大值</th><th>平均值</th><th>总计</th>
							</tr>
							<tr>
							<td>2014/11/4 00:00~23:59(当天)</td><td>10</td><td>200</td><td>180</td><td>1620</td>
							</tr>
							<tr>
							<td>2014/10/01~2014/10/31(近30天)</td><td>5</td><td>250</td><td>192</td><td>5820</td>
							</tr>
						</table>
					</div>
					<!-- END INTERACTIVE CHART PORTLET-->
					
					
					<!-- BEGIN INTERACTIVE CHART PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-bar-chart-o font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">2014年每天杀死害虫统计对比图</span>
							</div>
							
							<div class="btn-group col-xs-offset-1 hide">
								<button type="button" class="btn default">选择指标</button>
								<button type="button" class="btn default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button>
								<div class="dropdown-menu hold-on-click dropdown-checkboxes" role="menu">
									<label><input type="checkbox">放电次数</label>
									<label><input type="checkbox" checked>杀虫数量</label>
								</div>
							</div>
							
							<div class="btn-group col-xs-offset-1">
								<button type="button" class="btn default">选择月份</button>
								<button type="button" class="btn default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button>
								<div class="dropdown-menu hold-on-click dropdown-checkboxes" role="menu">
									<label><input type="checkbox" checked>一月</label>
									<label><input type="checkbox" checked>二月</label>
									<label><input type="checkbox">三月</label>
									<label><input type="checkbox">四月</label>
									<label><input type="checkbox">五月</label>
									<label><input type="checkbox">六月</label>
									<label><input type="checkbox">七月</label>
									<label><input type="checkbox">八月</label>
									<label><input type="checkbox">九月</label>
									<label><input type="checkbox">十月</label>
									<label><input type="checkbox">十一月</label>
									<label><input type="checkbox">十二月</label>
								</div>
							</div>
							
							
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div id="day_stat" class="chart">
							</div>
						</div>
						
						<table class='table table-striped table-bordered table-hover dataTable no-footer'>
							<tr>
							<th style="width:300px;">时间段</th><th>最小值</th><th>最大值</th><th>平均值</th><th>总计</th>
							</tr>
							<tr>
							<td>2014年1月</td><td>10</td><td>200</td><td>180</td><td>1620</td>
							</tr>
							<tr>
							<td>2013年1月~2013年12月(近12月)</td><td>5</td><td>250</td><td>192</td><td>5820</td>
							</tr>
						</table>
					</div>
					<!-- END INTERACTIVE CHART PORTLET-->
					
					
					
					<!-- BEGIN INTERACTIVE CHART PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-bar-chart-o font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">年杀死害虫统计对比</span>
							</div>
							
							<div class="btn-group col-xs-offset-1">
								<button type="button" class="btn default">选择指标</button>
								<button type="button" class="btn default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button>
								<div class="dropdown-menu hold-on-click dropdown-checkboxes" role="menu">
									<label><input type="checkbox">放电次数</label>
									<label><input type="checkbox" checked>杀虫数量</label>
								</div>
							</div>
							
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="javascript:;" class="reload">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div id="year_stat" class="chart">
							</div>
						</div>
						
						<table class='table table-striped table-bordered table-hover dataTable no-footer'>
							<tr>
							<th style="width:300px;">时间段</th><th>最小值</th><th>最大值</th><th>平均值</th><th>总计</th>
							</tr>
							<tr>
							<td>2014年</td><td>10</td><td>200</td><td>180</td><td>1620</td>
							</tr>
							<tr>
							<td>2011年~2014年(近3年)</td><td>5</td><td>250</td><td>192</td><td>5820</td>
							</tr>
						</table>
					</div>
					<!-- END INTERACTIVE CHART PORTLET-->
					
					
					<!-- BEGIN INTERACTIVE CHART PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-bar-chart-o font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">农作物的害虫数量和农药使用量统计</span>
							</div>
							<div class="btn-group col-xs-offset-1">
								<button type="button" class="btn default">选择指标</button>
								<button type="button" class="btn default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-angle-down"></i></button>
								<div class="dropdown-menu hold-on-click dropdown-checkboxes" role="menu">
									<label><input type="checkbox">放电次数</label>
									<label><input type="checkbox" checked>杀虫数量</label>
								</div>
							</div>
							<div class="form-group pull-left col-xs-offset-1 " style="margin-bottom:0px;">
										<label class="control-label col-md-3" style="padding:0;margin-top: 6px;">时间范围</label>
										<div class="col-md-3" style="padding:0">
											<div id="reportrange" class="btn default">
												<i class="fa fa-calendar"></i>
												&nbsp; <span>
												</span>
												<b class="fa fa-angle-down"></b>
											</div>
										</div>
									</div>
							
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div id="hight_chart_bar_1" class="chart">
							</div>
						</div>
					</div>
					<!-- END INTERACTIVE CHART PORTLET-->
			</div>
				
					
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
<!-- BEGIN FOOTER -->
<!-- BEGIN PRE-FOOTER -->
<div class="page-prefooter" style="background: none repeat scroll 0 0 #27303f;">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12 footer-block">
				<h2><a href="http://www.cdbeyond.com">公司首页</a></h2>
				<p>
					 成都比昂科技有限公司成立于2008年，坐落于美丽的天府之国 成都，
					 公司是一家集生产 加工 自主研发、销售为一体的省级以上国家重点龙头农业机械生产企业。
				</p>
			</div>
			
			<div class="col-md-3 col-sm-6 col-xs-12 footer-block">
				<h2><a href="http://www.cdbeyond.com/list_135_1.html">产品中心</a></h2>
				<p>
				打造一流的团队，研制一流的产品；<br/>
				打造中国绿色有机防控第一品牌！ <br/>
					以人为本，诚实守信、质量第一、创新发展！
				</p>
			</div>
			
			<div class="col-md-3 col-sm-6 col-xs-12 footer-block">
				<h2><a href="http://www.cdbeyond.com/list_114_1.html">应用实例</a></h2>
				<p>
				本着科技创新，绿色环保，护航农业的使命，
				为农业提供优秀的无公害防治产品，构建绿色防控体系。
				实现更绿色的农业生产模式，确保更安全的食品生产。
				</p>
			</div>
			
			<div class="col-md-3 col-sm-6 col-xs-12 footer-block">
				<h2><a href="http://www.cdbeyond.com/list_106_1.html">联系我们</a></h2>
				<address class="margin-bottom-40">
				电话: 028-87077178<br>
				 邮箱: <a href="mailto:542660118@qq.com">542660118@qq.com</a><br/>
				 传真：028-87074818 <br/>
				 地址：成都市金牛区蜀汉路235号元亨商贸楼
				</address>
			</div>
			
		</div>
	</div>
</div>
<!-- END PRE-FOOTER -->
<!-- BEGIN FOOTER -->
<div class="page-footer" style="background: none repeat scroll 0 0 black;">
	<div class="container text-center">
		 2014 &copy; 成都比昂科技有限公司. All Rights Reserved.
	</div>
</div>
<div class="scroll-to-top">
	<i class="icon-arrow-up"></i>
</div>
<!-- END FOOTER -->
<!-- BEGIN FOOTER -->
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
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
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/Public/Style/assets/global/plugins/flot/jquery.flot.min.js"></script>
<script src="/Public/Style/assets/global/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="/Public/Style/assets/global/plugins/flot/jquery.flot.pie.min.js"></script>
<script src="/Public/Style/assets/global/plugins/flot/jquery.flot.stack.min.js"></script>
<script src="/Public/Style/assets/global/plugins/flot/jquery.flot.crosshair.min.js"></script>
<script src="/Public/Style/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->



<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="/Public/Style/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="/Public/Style/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="/Public/Style/assets/global/plugins/clockface/js/clockface.js"></script>
<script type="text/javascript" src="/Public/Style/assets/global/plugins/bootstrap-daterangepicker/moment-with-langs.js"></script>
<script type="text/javascript" src="/Public/Style/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="/Public/Style/assets/global/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="/Public/Style/assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->


<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/Public/Style/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/Public/Style/assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="/Public/Style/assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="/Public/Style/assets/admin/pages/scripts/charts.js"></script>
<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
   Charts.init();
   Charts.initCharts();
   Charts.initPieCharts();
   Charts.initBarCharts();
});
</script>


<style type="text/css">
	${demo.css}
</style>
<script src="/Public/Style/assets/hightcharts/js/highcharts.js"></script>
<script src="/Public/Style/assets/hightcharts/js/modules/exporting.js"></script>
<script type="text/javascript">
$(function () {
	
	
	 var realTimeData;
		$.ajax({
			   type: "GET",
			   async :false,  
			   url: "/index.php/admin/device/realTimeStatData",
			   success: function(data){
				   realTimeData = data;
			   }
		});
		
		var dayBugData;
		$.ajax({
			   type: "GET",
			   async :false,  
			   url: "/index.php/admin/device/dayStatData",
			   success: function(data){
				   dayBugData = data;
			   }
		});
		console.log(yearBugData);
		
		var yearBugData;
		$.ajax({
			   type: "GET",
			   async :false,  
			   url: "/index.php/admin/device/monthStatData",
			   success: function(data){
				   yearBugData = data;
			   }
		});
	
    $('#day_stat').highcharts({
    	chart: {
            type: 'spline'
        },
        title: {
            text: '2014年每天杀死害虫统计对比图'
        },
        subtitle: {
            text: '比昂科技'
        },
        xAxis: {
        	categories: ['1', '2', '3', '4', '5', '6','7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20' ,'21' ,'22', '23' ,'24', '25', '26' ,'27', '28', '29' ,'30', '31']
	        ,
	        labels: {
	            formatter: function () {
	                return this.value + '日';
	            }
	        }
        },
        yAxis: {
            title: {
                text: '杀死害虫数量 （只）'
            },
            labels: {
                formatter: function () {
                    return this.value + '';
                }
            },
            min: 0
        },
        tooltip: {
            crosshairs: true,
            shared: true
        },
        plotOptions: {
            spline: {
                marker: {
                    radius: 4,
                    lineColor: '#666666',
                    lineWidth: 1
                }
            }
        },
        series: dayBugData
        /*[{
            name: '一月',
            data: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12,13, 14, 15, 16, 17, 18, 19, 20, 19, 18, 17, 16, 15, 14, 13, 12, 14]

        }, {
            name: '二月',
            data: [11, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32,33, 34, 35, 36, 37, 38, 39, 40, 39, 38, 37, 36, 35, 34, 33, 32, 34]
        }/*, {
            name: '三月',
            data: [31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42,43, 44, 45, 46, 47, 48, 49, 50, 49, 48, 47, 46, 45, 44, 43, 42, 44]
        }, {
            name: '四月',
            data:[17, 6, 9, 5, 12, 2, 2, 6, 3, 13, 1, 96,7, 69, 9, 15, 12, 21, 22, 26, 23, 13, 19, 96,7, 69, 9, 15, 12, 81]
        }, {
            name: '五月',
            data:[27, 169, 19, 115, 112, 121, 122, 126, 123, 113, 119, 196,71, 169, 19, 115, 112,121, 122, 126, 123, 113, 119, 196,17, 169, 19, 115, 112, 171]
        }, {
            name: '六月',
            data:[37, 269, 29, 215, 212, 221, 222, 226, 223, 213, 219, 296,27, 269, 29, 215, 212, 221, 222, 226, 223, 213, 219, 296,27, 269, 29, 215, 212, 241]
        }, {
            name: '七月',
            data:[47, 369, 39, 315, 312, 321, 322, 326, 323, 313, 319, 396,37, 369, 39, 315, 312, 321, 322, 236, 323, 133, 139, 396,73, 369, 39, 135, 123, 131]
        }, {
            name: '八月',
            data:[57, 69, 49, 145, 142, 241, 242, 246, 243, 143, 149, 496,47, 469, 49, 415, 412, 421, 422,426, 243, 143, 149, 496,74, 469, 49, 145, 142, 261]
        }, {
            name: '九月',
            data:[67, 69, 9, 155, 152, 251, 252, 256, 253, 153, 159, 596,57, 569, 59, 155, 152, 251, 252, 256, 253, 153, 159, 596,57, 69, 59, 155, 152, 551]
        }, {
            name: '十月',
            data:[677, 69, 69, 65, 62, 261, 62, 62, 263, 63, 169, 66,76, 69, 69, 165, 62, 261, 262, 66, 263, 163, 169, 66,67, 669, 69, 165, 62, 361]
        }, {
            name: '十一月',
            data:[87, 679, 79, 75, 712, 271, 272, 76, 273, 713, 179, 796,77, 679, 79, 17, 172, 271, 72, 276, 73, 173, 179, 76,77, 69, 79, 175, 172, 217]
        }, {
            name: '十二月',
            data:[779, 679, 97, 175, 172, 17, 272, 76, 273, 37, 179, 67,77, 679, 79, 75, 712, 271, 72, 726, 723, 37, 179, 976,77, 76, 79, 75, 712, 71]
        }*/
        
        
        //]
      
    });
    
    var hour_stat;
   
    Highcharts.setOptions({ global: { useUTC: false } });
    hour_stat = $('#hour_stat').highcharts({
    	chart: {
            type: 'spline',
            //renderTo: "hour_stat",
           // events: { load: request }
        },
        title: {
            text: '诱杀害虫按小时统计图'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            type: 'datetime',
            /*labels: {
                overflow: 'justify'
            }*/
        	labels: {
                formatter: function () {
                    return Highcharts.dateFormat('%H:%M(%m-%d)', this.value) + '';
                }
            }
        },
        yAxis: {
            title: {
                text: '杀虫数量\放电次数'
            },
            min: 0,
            minorGridLineWidth: 0,
            gridLineWidth: 0,
            alternateGridColor: null,
            
        },
        legend: {
        	layout: 'vertical', 
        	align: 'right', 
        	verticalAlign: 'middle', 
        	borderWidth: 0
        },
        tooltip: {
        	formatter: function() {
                return '<b>' + Highcharts.dateFormat('%Y-%m-%d %H:%M', this.x) + '</b><br/>' +
                this.series.name +' : '+
                this.y+' 只';
              }
           // valueSuffix: ' 只'
        },
        plotOptions: {
            spline: {
                lineWidth: 2,
                states: {
                    hover: {
                        lineWidth: 3
                    }
                },
                marker: {
                    enabled: true
                },
                pointInterval: 3600000, // one hour
                pointStart: Date.UTC(2014, 9, 6, 0, 0, 0)
            }
        },
        series: realTimeData,
        navigation: {
            menuItemStyle: {
                fontSize: '10px'
            }
        }
    });
    
    
    $('#year_stat').highcharts({
        title: {
            text: '月杀死害虫数量统计对比图',
            x: -20 //center
        },
        subtitle: {
            text: '',
            x: -20
        },
        xAxis: {
            /*categories: ['一月', '二月', '三月', '四月', '五月', '六月',
                '七月', '八月', '九月', '十月', '十一月', '十二月']*/
        categories: ['1', '2', '3', '4', '5', '6',
                     '7', '8', '9', '10', '11', '12'],
            labels: {
	            formatter: function () {
	                return this.value + '月';
	            }
	        }
        },
        yAxis: {
            title: {
                text: '杀死害虫数量（只）'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            crosshairs: true,
            shared: true
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: yearBugData
        	/*[{
            name: '2011年统计',
            data: [39, 42, 57, 85, 119, 152, 17, 166, 142, 103, 66, 48]
        }, {
            name: '2012年统计',
            data: [70, 69, 95, 145, 182, 215, 252, 265, 233, 183, 139, 96]
        }, {
            name: '2013年统计',
            data: [2, 8, 57, 113, 17, 22, 248, 241, 201, 141, 86, 25]
        }, {
            name: '2014年统计',
            data: [9, 6, 35, 84, 135, 17, 186, 179, 143, 9, 39, 10]
        }]*/
    });
    
    Highcharts.setOptions({
        global: {
            useUTC: false
        }
    });

	
    //动态展示
    $('#realtime_stat').highcharts({
        chart: {
            type: 'spline',
            animation: Highcharts.svg, // don't animate in old IE
            marginRight: 10,
            events: {
                load: function () {
                    // set up the updating of the chart each second
                   var series = this.series[0];
                    setInterval(function () {
                        var x = (new Date()).getTime(), // current time
                            y = Math.random()*100;
                        series.addPoint([x, y], true, true);
                    }, 1800*1000);
                    
                    var series1 = this.series[1];
                    setInterval(function () {
                        var x = (new Date()).getTime(), // current time
                            y = Math.random()*100;
                        series1.addPoint([x, y], true, true);
                    }, 1800*1000);
                }
            }
        },
        title: {
            text: '诱杀害虫数量实时信息统计图'
        },
        xAxis: {
            type: 'datetime',
            tickPixelInterval: 150,
            plotLines: [{
            	color:'red',
            	dashStyle:'solid', 
                value: 2,
                width: 1,
               // color: '#808080'
            }],
            labels: {
                formatter: function () {
                    return Highcharts.dateFormat('%H:%M(%m-%d)', this.value) + '';
                }
            }
        },
        yAxis: {
            title: {
                text: '诱杀害虫数量（只）'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
        //valueSuffix: '°C'
            formatter: function () {
            	if(this.series.name == '诱杀害虫数'){
            		return '<b>' + this.series.name + '</b><br/>' +
                    Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) + '<br/>杀死' +
                    Highcharts.numberFormat(this.y, 0)+'只';
            	}else{
            		return '<b>' + this.series.name + '</b><br/>' +
                    Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) + '<br/>放电' +
                    Highcharts.numberFormat(this.y, 0)+'次';
            	}
                
            }
        },
        /*plotOptions: { line: { dataLabels: { enabled: true }, enableMouseTracking: true } },*/
       legend: {
        	layout: 'vertical', 
        	align: 'right', 
        	verticalAlign: 'top', 
        	borderWidth: 0
        },
        exporting: {
            enabled: false
        },
        series:realTimeData
        /*,
        series:[
                {name: '诱杀害虫数',data:[
                                     	 {"x":1415955080,"y":12},
                                     	 {"x":1415956867,"y":14},
                                     	 {"x":1416045565,"y":16}
                                     	 ]
        		},
                {name: '放电次数',data:[
                                    {"x":1415955080,"y":12},
                                    {"x":1415956867,"y":121},
                                    {"x":1416045565,"y":100}
                                    ]
        		}
        		]
        /*series: [{
            name: '诱杀害虫数',
            data: (function () {
                // generate an array of random data
                
                var data = [],
                    time = (new Date()).getTime(),
                    i;

                for (i = -19; i <= 0; i += 1) {
                    data.push({
                        x: time + i * 1800*1000,
                        y: Math.random()*100
                    });
                }
                return data;
            }())
        },{
            name: '放电次数',
            data: (function () {
                // generate an array of random data
                var data = [],
                    time = (new Date()).getTime(),
                    i;

                for (i = -19; i <= 0; i += 1) {
                    data.push({
                        x: time + i * 1800*1000,
                        y: Math.random()*100
                    });
                }
                return data;
            }())
        }]*/
    });
    
    
    $('#hight_chart_bar_1').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: '农作物的害虫数量和农药使用量统计'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
                '水稻',
                '蚕豆',
                '小麦',
                '玉米',
                '高粱',
                '黑米',
                '南瓜',
                '西红柿',
                '茄子',
                '辣椒',
                '白菜',
                '豌豆'
            ]
        },
        yAxis: {
            min: 0,
            title: {
                text: '农药量 (毫升) / 杀死害虫数(只)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name} :  </td>' +
                '<td style="padding:0"><b>{point.y}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: '使用农药量',
            data: [49, 71, 106, 129, 144, 176, 135, 148, 216, 194, 95, 54]

        }, {
            name: '杀死害虫量',
            data: [42, 33, 34, 39, 52, 75, 57, 60, 47, 39, 46, 51]

        }]
    });
    
   
    
    $('#reportrange,#reportrange1').daterangepicker({
    	//moment.locale('zh-cn');
		
        opens: (Metronic.isRTL() ? 'left' : 'right'),
        startDate: moment().subtract('days', 29),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2014',
        dateLimit: {
            days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
            '今天': [moment(), moment()],
            '昨天': [moment().subtract('days', 1), moment().subtract('days', 1)],
            '上一周': [moment().subtract('days', 6), moment()],
            '上一个月': [moment().subtract('days', 29), moment()],
            '当月': [moment().startOf('month'), moment().endOf('month')],
            '下一个月': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
        },
        buttonClasses: ['btn'],
        applyClass: 'green',
        cancelClass: 'default',
        format: 'MM/DD/YYYY',
        separator: ' to ',
        locale: {
            applyLabel: '应用',
            fromLabel: '从',
            toLabel: '至',
            customRangeLabel: '自定义',
            daysOfWeek: ['周天', '周一', '周二', '周三', '周四', '周五', '周六'],
            monthNames:['一月', '二月', '三月', '四月', '五月', '六月','七月', '八月', '九月', '十月', '十一月', '十二月'],
            firstDay: 1
        }
    },
    function (start, end) {
        $('#reportrange span,#reportrange1 span').html(start.format('YYYY/M/D') + ' - ' + end.format('YYYY/M/D'));
    }
);
    $('#reportrange span').html(moment().format('YYYY/M/D') + ' - ' + moment().format('YYYY/M/D'));
    $('#reportrange1 span').html(moment().format('YYYY/M/D') + ' - ' + moment().format('YYYY/M/D'));
    
    
});

</script>


<!-- END PAGE LEVEL SCRIPTS -->
</body>
<!-- END BODY -->
</html>