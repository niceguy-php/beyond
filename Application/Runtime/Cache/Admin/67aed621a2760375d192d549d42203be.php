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
<title>设备管理</title>
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
<link rel="stylesheet" type="text/css" href="/Public/Style/assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="/Public/Style/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
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
				<a href="index.html"><img src="/Public/Style/assets/img/bianlogo_long.jpg"  alt="logo" style="height: 75px; border-bottom-width: 12px; margin-bottom: 20px; margin-top: 0px;" class="logo-default"></a>
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
				<h1>设备 <small>杀虫灯列表</small></h1>
			</div>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PAGE TOOLBAR -->
			<div class="page-toolbar">
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
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="createLamp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title bold green">新建设备</h4>
						</div>
						<div class="modal-body">
							 <form class="form-horizontal" role="form">
								<div class="form-body">
									<div class="form-group">
										<label class="col-md-3 control-label">设备名称</label>
										<div class="col-md-6">
											<input type="text" class="form-control" id="deviceName_add" name="deviceName" placeholder="名称">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">设备编码(SN码)</label>
										<div class="col-md-6">
											<input type="text" class="form-control" id="SetSn_add" name="SetSn" placeholder="设备编码(SN码)">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">用途</label>
										<div class="col-md-6">
											<input type="text" class="form-control" id="comment_add" name="comment" placeholder="用途">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">位置</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="Location" id="Location_add" placeholder="位置">
										</div>
									</div>
									<?php if($_SESSION['user']['roles']== 'admin' ): ?><div class="form-group">
											<label class="col-md-3 control-label">所属用户</label>
											<div class="col-md-6">
												<select id="UserId_add" name="UserId" class="form-control select2me">
													<option value="<?php echo ($admin["ID"]); ?>">比昂科技内部设备</option>
													<?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["ID"]); ?>"><?php echo ($vo["realname"]); ?>(<?php echo ($vo["userName"]); ?>)</option><?php endforeach; endif; else: echo "" ;endif; ?>
												</select>
											</div>
										</div>
									<?php else: ?>
									 <input type="hidden" id="UserId_add" name="UserId" value="<?php echo ($_SESSION['user']['ID']); ?>"><?php endif; ?>
									
								</div>
								
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" id="saveBtn" class="btn green">保存</button>
							<button type="button" id="saveCloseBtn" class="btn default" data-dismiss="modal">关闭</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			
			
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="editLamp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title bold green">编辑设备</h4>
						</div>
						<div class="modal-body">
							 <form class="form-horizontal" role="form">
								<div class="form-body">
									<div class="form-group">
										<label class="col-md-3 control-label">设备名称</label>
										<div class="col-md-6">
											<input type="text" class="form-control" id="deviceName_edit" name="deviceName" placeholder="名称">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">设备编码(SN码)</label>
										<div class="col-md-6">
											<input type="text" class="form-control" id="SetSn_edit" name="SetSn" placeholder="设备编码(SN码)">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">用途</label>
										<div class="col-md-6">
											<input type="text" class="form-control" id="comment_edit" name="comment" placeholder="用途">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-md-3 control-label">位置</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="Location" id="Location_edit" placeholder="位置">
										</div>
									</div>
									<?php if($_SESSION['user']['roles']== 'admin' ): ?><div class="form-group">
											<label class="col-md-3 control-label">所属用户</label>
											<div class="col-md-6">
												<select id="UserId_edit" name="UserId" class="form-control select2me">
													<option value="<?php echo ($admin["ID"]); ?>">比昂科技内部设备</option>
													
													<?php if(is_array($users)): $i = 0; $__LIST__ = $users;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["ID"]); ?>"><?php echo ($vo["realname"]); ?>(<?php echo ($vo["userName"]); ?>)</option><?php endforeach; endif; else: echo "" ;endif; ?>
												</select>
											</div>
										</div>
									<?php else: ?>
									 <input type="hidden" id="UserId_edit" name="UserId" value="<?php echo ($_SESSION['user']['ID']); ?>"><?php endif; ?>
									
								</div>
								
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" id="updateBtn" class="btn green">保存</button>
							<button type="button" id="updateCloseBtn" class="btn default" data-dismiss="modal">关闭</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			
			
			<!-- BEGIN PAGE CONTENT INNER -->
			
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-list font-green-sharp"></i>
								<span class="caption-subject font-green-sharp bold uppercase">杀虫灯列表</span>
							</div>
							
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="javascript:;" class="reload">
								</a>
							</div>
							
							<div class="actions btn-set">
								<button onclick="$('#createLamp').modal('show');" class="btn green-haze btn-circle"><i class="fa fa-plus"></i> 添加</button>
								<button id="editDevice" class="btn btn-circle btn-primary"><i class="fa fa-edit"></i> 编辑</button>
								<button id="deleteDevice" class="btn btn-circle btn-danger"><i class="fa fa-bank"></i> 删除</button>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-bordered table-hover" id="sample_2">
							<thead>
							<tr>
								<th class="table-checkbox">
									<input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes"/>
								</th>
								<th style="width:50px;">编码</th>
								<th>名称</th>
								<th>用途</th>
								<th>所在位置</th>
								<th>拥有者</th>
								<th>设备状态</th>
								<th>灯状态</th>
								<th style="width:80px;">最近开关时间</th>
								<th>电量</th>
								<th>充电状态</th>
								<th>总放电数</th>
								<th>总杀虫数</th>
								<th>详情</th>
							</tr>
							</thead>
							<tbody>
							<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $userid = $vo["UserId"]; ?>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="<?php echo ($vo["SetId"]); ?>"/>
								</td>
								<!-- <td><?php echo ($vo["SetId"]); ?></td>-->
								<td><?php echo ($vo["SetSn"]); ?></td>
								<td><?php echo ($vo["deviceName"]); ?></td>
								<td><?php echo ($vo["comment"]); ?></td>
								<td><?php echo ($vo["Location"]); ?></td>
								
								<td>
									<?php echo ($users[$vo['UserId']]['realname']); ?>
								</td>
								
								<td>
									<?php if($vo["deviceStatus"] == 1): ?><span class="label label-sm label-success">工作中 </span>
									<?php elseif($vo["deviceStatus"] == 0): ?>
										<span class="label label-sm label-warning">未连接 </span>
									<?php else: ?>
										<span class="label label-sm label-danger">已故障</span><?php endif; ?>
								</td>
								<td>
									<?php if($vo["lampStatus"] == 1): ?>开启
									<?php else: ?>
										关闭<?php endif; ?>
								</td>
								<td><?php echo ($vo["lampChangeStatusTime"]); ?></td>
								<td><?php echo ($vo["power"]); ?>%</td>
								<td>
									<?php if($vo["lampStatus"] == 1): ?>充电中
									<?php else: ?>
										满电量<?php endif; ?>
								</td>
								<td><?php echo ($vo["electricShockCount"]); ?></td>
								<td><?php echo ($vo["bugCount"]); ?></td>
								<td>
									<a href="/index.php/Admin/device/report/sn/<?php echo ($vo["SetSn"]); ?>">[报表]</a>
									<a href="/index.php/Admin/device/historyData/sn/<?php echo ($vo["SetSn"]); ?>">[历史数据]</a>
									<a style="display:none;" href="warn_info.html">报警信息</a>
									<a href="/index.php/Admin/device/compareAnalysis/sn/<?php echo ($vo["SetSn"]); ?>">[对比分析]</a>
								</td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
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
<script type="text/javascript" src="/Public/Style/assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="/Public/Style/assets/global/plugins/datatables/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="/Public/Style/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/Public/Style/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/Public/Style/assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="/Public/Style/assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="/Public/Style/assets/admin/pages/scripts/table-managed.js"></script>
<script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
   Layout.init(); // init current layout
   Demo.init(); // init demo features
   TableManaged.init();
   
   $("#saveBtn,#updateBtn").on("click",function(){
	   var oper = (this.id == 'updateBtn') ? 'edit' : 'add';
	   var postData = {
			   			'UserId':$("#UserId_"+oper).val(),
			   			'Location':$("#Location_"+oper).val(),
			   			'comment':$("#comment_"+oper).val(),
			   			'SetSn':$("#SetSn_"+oper).val(),
			   			'deviceName':$("#deviceName_"+oper).val()
			   		  }
	   if(oper == 'edit'){
		   postData.SetId = $(".checked > input").eq(0).val();
	   }
	   $.ajax({
		   type: "POST",
		   url: "/index.php/admin/device/"+oper,
		   data: postData,
		   success: function(msg){
			   if( parseInt(msg) > 0 ){
				  window.location.reload();
			   }else{
				   alert(msg);
			   }
		   }
		});
   });
   
   $("#editDevice").on("click",function(event){
	   
	   var selectedNum = $(".checked > input").length;
	   if( selectedNum == 0 ){
	   	   alert('请选择要编辑的设备！');
	   		event.stopPropagation();
	   	   return ;
   	   }else if(selectedNum > 1){
   		   alert('只能编辑一个设备！');
   			event.stopPropagation();
   		   return ;
   	   }
	   var deviceId = $(".checked > input").eq(0).val();
	   $.ajax({
		   type: "POST",
		   url: "/index.php/admin/device/item",
		   data: {'SetId':deviceId},
		   success: function(lampObj){
			   $("#UserId_edit").val(lampObj.UserId);
	   		   $("#Location_edit").val(lampObj.Location);
	   		   $("#comment_edit").val(lampObj.comment);
	   		   $("#SetSn_edit").val(lampObj.SetSn);
	   		   $("#deviceName_edit").val(lampObj.deviceName);
			   if(typeof lampObj != 'object'){
				   alert('网络异常，请稍后重试！');
			   }
			   $('#editLamp').modal('show');
		   }
		});
	   
   });
   
   $("#deleteDevice").on("click",function(){
	   var idArray = [];
	   $(".checked > input").each(function(i){
		   if(this.value != "on"){
			idArray.push(this.value);			   
		   }
	   });
	   if (idArray.length == 0){
		   alert('请选择要删除的设备');
		   return;
	   }
	   if(!confirm("确定要删除选择的设备")){
		   return ;
	   }
	   var postData = {'ids' : idArray.toString()} ;
	   
	   $.ajax({
		   type: "POST",
		   url: "/index.php/admin/device/delete",
		   data: postData,
		   success: function(msg){
			   if( parseInt(msg) > 0 ){
				  window.location.reload();
			   }else{
				   alert('操作失败，请稍后重试！');
			   }
		   }
		});
   });
   
});
</script>
</body>
<!-- END BODY -->
</html>