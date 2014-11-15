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
<title>Metronic | Tiles</title>
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
<!-- BEGIN THEME STYLES -->
<link href="/Public/Style/assets/global/css/components.css" rel="stylesheet" type="text/css">
<link href="/Public/Style/assets/global/css/plugins.css" rel="stylesheet" type="text/css">
<link href="/Public/Style/assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css">
<link href="/Public/Style/assets/admin/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
<link href="/Public/Style/assets/admin/layout3/css/custom.css" rel="stylesheet" type="text/css">
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
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
				<a href="index.html"><img src="/Public/Style/assets/img/bianlogo_.png"  alt="logo" style="width: 300px; border-bottom-width: 12px; margin-bottom: 20px; margin-top: 0px;" class="logo-default"></a>
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
						<span class="username username-hide-mobile">管理员张三</span>
						</a>
						<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="#">
								<i class="icon-lock"></i> 修改密码 </a>
							</li>
							<li>
								<a href="login.html">
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
					<li class="active">
						<a href="/index.php/Admin/index/index">首页</a>
					</li>
					
					<li class="active">
						<a href="/index.php/Admin/device/lists">杀虫灯</a>
					</li>
					<li class="hide">
						<a href="#">历史数据</a>
					</li>
					<li >
						<a href="/index.php/Admin/device/compareAnalysis">对比分析</a>
					</li>
					
					<li class="menu-dropdown classic-menu-dropdown ">
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
				<h1>Tiles <small>windows 8 style tiles examples</small></h1>
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
			<!-- END PAGE TOOLBAR -->
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
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
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="#">Home</a><i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="ui_tiles.html">UI Components</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Tiles
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="tiles">
				<div class="tile double-down bg-blue-hoki">
					<div class="tile-body">
						<i class="fa fa-bell-o"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 Notifications
						</div>
						<div class="number">
							 6
						</div>
					</div>
				</div>
				<div class="tile bg-red-sunglo">
					<div class="tile-body">
						<i class="fa fa-calendar"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 Meetings
						</div>
						<div class="number">
							 12
						</div>
					</div>
				</div>
				<div class="tile double selected bg-green-turquoise">
					<div class="corner">
					</div>
					<div class="check">
					</div>
					<div class="tile-body">
						<h4>support@metronic.com</h4>
						<p>
							 Re: Metronic v1.2 - Project Update!
						</p>
						<p>
							 24 March 2013 12.30PM confirmed for the project plan update meeting...
						</p>
					</div>
					<div class="tile-object">
						<div class="name">
							<i class="fa fa-envelope"></i>
						</div>
						<div class="number">
							 14
						</div>
					</div>
				</div>
				<div class="tile selected bg-yellow-saffron">
					<div class="corner">
					</div>
					<div class="tile-body">
						<i class="fa fa-user"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 Members
						</div>
						<div class="number">
							 452
						</div>
					</div>
				</div>
				<div class="tile double bg-blue-madison">
					<div class="tile-body">
						<img src="/Public/Style/assets/admin/pages/media/profile/photo1.jpg" alt="">
						<h4>Announcements</h4>
						<p>
							 Easily style icon color, size, shadow, and anything that's possible with CSS.
						</p>
					</div>
					<div class="tile-object">
						<div class="name">
							 Bob Nilson
						</div>
						<div class="number">
							 24 Jan 2013
						</div>
					</div>
				</div>
				<div class="tile bg-purple-studio">
					<div class="tile-body">
						<i class="fa fa-shopping-cart"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 Orders
						</div>
						<div class="number">
							 121
						</div>
					</div>
				</div>
				<div class="tile image selected">
					<div class="tile-body">
						<img src="/Public/Style/assets/admin/pages/media/gallery/image2.jpg" alt="">
					</div>
					<div class="tile-object">
						<div class="name">
							 Media
						</div>
					</div>
				</div>
				<div class="tile bg-green-meadow">
					<div class="tile-body">
						<i class="fa fa-comments"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 Feedback
						</div>
						<div class="number">
							 12
						</div>
					</div>
				</div>
				<div class="tile double bg-grey-cascade">
					<div class="tile-body">
						<img src="/Public/Style/assets/admin/pages/media/profile/photo2.jpg" alt="" class="pull-right">
						<h3>@lisa_wong</h3>
						<p>
							 I really love this theme. I look forward to check the next release!
						</p>
					</div>
					<div class="tile-object">
						<div class="name">
							<i class="fa fa-twitter"></i>
						</div>
						<div class="number">
							 10:45PM, 23 Jan
						</div>
					</div>
				</div>
				<div class="tile bg-red-intense">
					<div class="tile-body">
						<i class="fa fa-coffee"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 Meetups
						</div>
						<div class="number">
							 12 Jan
						</div>
					</div>
				</div>
				<div class="tile bg-green">
					<div class="tile-body">
						<i class="fa fa-bar-chart-o"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 Reports
						</div>
						<div class="number">
						</div>
					</div>
				</div>
				<div class="tile bg-blue-steel">
					<div class="tile-body">
						<i class="fa fa-briefcase"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 Documents
						</div>
						<div class="number">
							 124
						</div>
					</div>
				</div>
				<div class="tile image double selected">
					<div class="tile-body">
						<img src="/Public/Style/assets/admin/pages/media/gallery/image4.jpg" alt="">
					</div>
					<div class="tile-object">
						<div class="name">
							 Gallery
						</div>
						<div class="number">
							 124
						</div>
					</div>
				</div>
				<div class="tile bg-yellow-lemon selected">
					<div class="corner">
					</div>
					<div class="check">
					</div>
					<div class="tile-body">
						<i class="fa fa-cogs"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 Settings
						</div>
					</div>
				</div>
				<div class="tile bg-red-sunglo">
					<div class="tile-body">
						<i class="fa fa-plane"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 Projects
						</div>
						<div class="number">
							 34
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
<!-- BEGIN PRE-FOOTER -->
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
<script src="/Public/Style/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/Public/Style/assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="/Public/Style/assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>