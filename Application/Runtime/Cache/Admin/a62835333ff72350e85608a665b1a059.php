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
<title>成都守望者科技</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="/Public/Style/assets1/global/fonts/2.css" rel="stylesheet" type="text/css">
<link href="/Public/Style/assets1/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="/Public/Style/assets1/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="/Public/Style/assets1/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/Public/Style/assets1/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">   
<link href="/Public/Style/assets1/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="/Public/Style/assets1/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="/Public/Style/assets1/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN DATE PAGINATOR PLUGIN USE FOR DATETIME-->
<link href="/Public/Style/assets1/global/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css"/>
<!-- END DATE PAGINATOR PLUGIN -->

<!-- BEGIN PAGE LEVEL STYLES USE FOR SLIDER -->
<link href="/Public/Style/assets1/global/plugins/ion.rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css"/>
<link href="/Public/Style/assets1/global/plugins/ion.rangeslider/css/ion.rangeSlider.Metronic.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN THEME STYLES -->
<link href="/Public/Style/assets1/global/css/components.css" rel="stylesheet" type="text/css"/>
<link href="/Public/Style/assets1/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="/Public/Style/assets1/admin/layout2/css/layout.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="/Public/Style/assets1/admin/layout2/css/themes/default.css" rel="stylesheet" type="text/css"/>
<link href="/Public/Style/assets1/admin/layout2/css/custom.css" rel="stylesheet" type="text/css"/>
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
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner container">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
			<img src="/Public/Style/assets1/admin/layout2/img/logo-default.png" alt="logo" style="width: 94px; height: 16px;" class="logo-default"/>
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
						<!-- <i class="icon-bell"></i>--><span class="glyphicon glyphicon-bell">
											</span>
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
						<!-- <i class="icon-envelope-open"></i>--><span class="glyphicon glyphicon-envelope">
											</span>
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
										<img src="/Public/Style/assets1/admin/layout2/img/avatar2.jpg" alt=""/>
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
										<img src="/Public/Style/assets1/admin/layout2/img/avatar3.jpg" alt=""/>
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
										<img src="/Public/Style/assets1/admin/layout2/img/avatar1.jpg" alt=""/>
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
										<img src="/Public/Style/assets1/admin/layout2/img/avatar2.jpg" alt=""/>
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
										<img src="/Public/Style/assets1/admin/layout2/img/avatar3.jpg" alt=""/>
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
						<!--<i class="fa fa-qrcode fa-6"></i> --> <span class="glyphicon glyphicon-qrcode"></span>
						<span class="badge badge-success">
						扫 </span>
						</a>
						<ul class="dropdown-menu">
						
						<li>
								<p>
									 扫一扫激活摄像头
								</p>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 250px;">
									<li>
										<a href="#qrcode" data-toggle="modal" class="btn btn-sm green"><button type="button" class="btn green">猛戳生成二维码</button></a>
										
									</li>
									<li style="text-align:center;"><a href="#">摄像头激活二维码:
										<br/><br/>
										<div id="qrcode_div"></div>
									</a></li>
								</ul>
						
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
						<img alt="" class="img-circle hide1" src="/Public/Style/assets1/admin/layout2/img/avatar4.jpg"/>
						<span class="username username-hide-on-mobile" id="username_display">
						 </span>
						<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="extra_profile.html">
								<i class="icon-user"></i> 个人信息 </a>
							</li>
							<li>
								<a href="inbox.html">
								<i class="icon-envelope-open"></i> 我的消息 <span class="badge badge-danger">
								3 </span>
								</a>
							</li>
							
							<li class="divider">
							</li>
							<li>
								<a href="extra_lock.html">
								<i class="icon-lock"></i> 登录锁定 </a>
							</li>
							<li>
								<a href="javascript:;" id="logout_btn">
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
<div class="clearfix">
</div>
<div class="container">
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar-wrapper">
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<div class="page-sidebar navbar-collapse collapse">
				<!-- BEGIN SIDEBAR MENU -->
				<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-auto-scroll="true" data-slide-speed="200">
					<!-- <li class="start ">
						<a href="index.html">
						<i class="icon-home"></i>
						<span class="title">首页</span>
						</a>
					</li> -->
					
					<li class="active open">
						<a href="table_managed.html">
						<i class="icon-home"></i>
						<span class="title">我的设备</span>
						<span class="selected"></span>
						<span class="arrow open"></span>
						</a>
						<!--  <ul class="sub-menu">
							
							<li>
								<a href="table_editable.html">
								我的设备</a>
							</li>
							<li class="active">
								<a href="table_managed.html">
								我的设备1</a>
							</li>
							
							
						</ul>-->
					</li>
				</ul>
				<!-- END SIDEBAR MENU -->
			</div>
		</div>
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
				
				
				<div id="stack1" class="modal fade" tabindex="-1" data-width="400">
					<div class="modal-dialog">
						<div class="modal-content" style="width:820px">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">播放</h4>
							</div>
							<div class="modal-body">
								<div id="player"></div>
								<br/>
								<div id="time_slider" title="788">
									<input id="range_5" type="text" name="range_5" value=""/>
								</div>
								<br/>
								<div id="datepaginator_sample_4" style="width:788px;"></div>
							</div>
							<div class="modal-footer">
								<button type="button" data-dismiss="modal" class="btn red">关闭</button>
							</div>
						</div>
					</div>
				</div>
				<div id="stack2" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Stack Two</h4>
							</div>
							<div class="modal-body">
								
							</div>
							<div class="modal-footer">
								<button type="button" data-dismiss="modal" class="btn">Close</button>
								<button type="button" class="btn yellow">Ok</button>
							</div>
						</div>
					</div>
				</div>
				
				<div id="qrcode" class="modal fade" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">二维码信息</h4>
							</div>
							<div class="modal-body" id="qrcode_modal_body" style="width:650px;height:248px">
									<div class="form-group">
										<label class="col-md-2 control-label">WIFI帐号</label>
										<div class="col-md-9">
											<div class="input-inline input-medium">
												<div class="input-group">
													<span class="input-group-addon white" style="">
													<i class="fa fa-user"></i>
													</span>
													<input type="email" id="wifi_account" name="wifi_account" class="form-control" placeholder="WIFI帐号">
												</div>
											</div>
										</div>
									</div>
									
									<div class="form-group">
											<label class="col-md-2 control-label">WIFI密码</label>
											<div class="col-md-9">
												<div class="input-inline input-medium">
													<div class="input-group">
														<span class="input-group-addon white" style="">
														<i class="fa fa-lock"></i>
														</span>
														<input type="password" id="wifi_password" name="wifi_password" class="form-control" placeholder="WIFI密码">
														
													</div>
												</div>
											</div>
									</div>
									<br/>
									<br/>
									<div style="text-align:center;" class="col-md-9">
										<br/>
										<div class="row">猛扫二维码激活摄像头</div>
										<div class="row" id="qrcode_display" style="border: 1px dashed; width: 128px; height: 128px; margin-left: 152px;"></div>
									</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn green" id="create_qrcode">生成</button>
								<button type="button" class="btn red" data-dismiss="modal">关闭</button>
							</div>
						</div>
					</div>
				</div>
				
				
				
				<div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											</div>
											<div class="modal-body">
							
							
							
							<div class="row">
					<div class="col-md-12">
						<div class="portlet box blue-hoki" id="form_wizard_1">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-gift"></i> 添加设备 - <span class="step-title">
									第&nbsp;1&nbsp;步 </span>
								</div>
								<div class="tools hidden-xs">
									<a href="javascript:;" class="collapse">
									</a>
									<a href="javascript:;" class="reload">
									</a>
								</div>
							</div>
							<div class="portlet-body form">
								<form action="#" class="form-horizontal" id="submit_form" method="POST">
									<div class="form-wizard">
										<div class="form-body">
											<ul class="nav nav-pills nav-justified steps">
												<li>
													<a href="#tab1" data-toggle="tab" class="step">
													<span class="number">
													1 </span>
													<span class="desc">
													<i class="fa fa-check"></i> 生成二维码 </span>
													</a>
												</li>
												<li>
													<a href="#tab2" data-toggle="tab" class="step">
													<span class="number">
													2 </span>
													<span class="desc">
													<i class="fa fa-check"></i> 扫描二维码 </span>
													</a>
												</li>
												<li>
													<a href="#tab3" data-toggle="tab" class="step active">
													<span class="number">
													3 </span>
													<span class="desc">
													<i class="fa fa-check"></i> 添加完成 </span>
													</a>
												</li>
												<!-- 
												<li>
													<a href="#tab4" data-toggle="tab" class="step">
													<span class="number">
													4 </span>
													<span class="desc">
													<i class="fa fa-check"></i> 添加完成 </span>
													</a>
												</li> -->
											</ul>
											<div id="bar" class="progress progress-striped" role="progressbar">
												<div class="progress-bar progress-bar-success">
												</div>
											</div>
											<div class="tab-content">
												<div class="alert alert-danger display-none">
													<button class="close" data-dismiss="alert"></button>
													You have some form errors. Please check below.
												</div>
												<div class="alert alert-success display-none">
													<button class="close" data-dismiss="alert"></button>
													Your form validation is successful!
												</div>
												<div class="tab-pane active" id="tab1" style="text-align:center;">
													<div class="form-group">
														<!--  <label class="col-md-2 control-label">WIFI帐号</label>-->
														<div class="col-md-9">
															<div class="input-inline input-medium">
																<div class="input-group">
																	<span class="input-group-addon white" style="">
																	<i class="fa fa-user fa-blue"></i>
																	</span>
																	<input type="text" id="wifi_account_step" name="wifi_account" class="form-control" placeholder="输入WIFI帐号">
																</div>
															</div>
														</div>
													</div>
													
													<div class="form-group">
															<!--  <label class="col-md-2 control-label">WIFI密码</label>-->
															<div class="col-md-9">
																<div class="input-inline input-medium">
																	<div class="input-group">
																		<span class="input-group-addon white" style="">
																		<i class="fa fa-lock fa-blue"></i>
																		</span>
																		<input type="password" id="wifi_password_step" name="wifi_password" class="form-control" placeholder="输入WIFI密码">
																		
																	</div>
																</div>
															</div>
													</div>
												</div>
												<div class="tab-pane" id="tab2" style="text-align:center;">
													<div id="qrcode_step_title"><h4>扫码激活摄像头</h4></div>
													<div id="qrcode_step" ></div>
												</div>
												<div class="tab-pane" id="tab3">
													
												</div>
												<div class="tab-pane" id="tab4">
													<h3 class="block">Confirm your account</h3>
													<div class="form-group">
														<label class="control-label col-md-3">Payment Options:</label>
														<div class="col-md-4">
															<p class="form-control-static" data-display="payment">
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-actions">
											<div class="row">
												<div class="col-md-offset-4 col-md-9">
													<a href="javascript:;" class="btn default button-previous">
													<i class="m-icon-swapleft"></i> 返回 </a>
													<a href="javascript:;" class="btn blue button-next">
													继续 <i class="m-icon-swapright m-icon-white"></i>
													</a>
													<a href="javascript:;" class="btn green button-submit">
													完成 <i class="m-icon-swapright m-icon-white"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- END PAGE CONTENT-->
							
							
							
							
							<!-- add end----------------------------- -->
											</div>
											<div class="modal-footer">
												<button type="button" class="btn red" data-dismiss="modal">关闭</button>
											</div>
										</div>
										<!-- /.modal-content -->
									</div>
									<!-- /.modal-dialog -->
								</div>
				
				<!-- /.modal -->
				<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
				<!-- BEGIN STYLE CUSTOMIZER -->
				<div class="theme-panel">
					<div class="toggler tooltips" data-container="body" data-placement="left" data-html="true" data-original-title="Click to open advance theme customizer panel">
						<i class="icon-settings"></i>
					</div>
					<div class="toggler-close">
						<i class="icon-close"></i>
					</div>
					<div class="theme-options">
						<div class="theme-option theme-colors clearfix">
							<span>
							THEME COLOR </span>
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
							Layout </span>
							<select class="layout-option form-control input-small">
								<option value="fluid" selected="selected">Fluid</option>
								<option value="boxed">Boxed</option>
							</select>
						</div>
						<div class="theme-option">
							<span>
							Header </span>
							<select class="page-header-option form-control input-small">
								<option value="fixed" selected="selected">Fixed</option>
								<option value="default">Default</option>
							</select>
						</div>
						<div class="theme-option">
							<span>
							Sidebar Mode</span>
							<select class="sidebar-option form-control input-small">
								<option value="fixed">Fixed</option>
								<option value="default" selected="selected">Default</option>
							</select>
						</div>
						<div class="theme-option">
							<span>
							Sidebar Style</span>
							<select class="sidebar-style-option form-control input-small">
								<option value="default" selected="selected">Default</option>
								<option value="compact">Compact</option>
							</select>
						</div>
						<div class="theme-option">
							<span>
							Sidebar Menu </span>
							<select class="sidebar-menu-option form-control input-small">
								<option value="accordion" selected="selected">Accordion</option>
								<option value="hover">Hover</option>
							</select>
						</div>
						<div class="theme-option">
							<span>
							Sidebar Position </span>
							<select class="sidebar-pos-option form-control input-small">
								<option value="left" selected="selected">Left</option>
								<option value="right">Right</option>
							</select>
						</div>
						<div class="theme-option">
							<span>
							Footer </span>
							<select class="page-footer-option form-control input-small">
								<option value="fixed">Fixed</option>
								<option value="default" selected="selected">Default</option>
							</select>
						</div>
						
					</div>
				</div>
				<!-- END STYLE CUSTOMIZER -->
				<!-- BEGIN PAGE HEADER-->
				<h3 class="page-title">
				我的设备 <small>智能摄像头列表</small>
				</h3>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="index.html">首页</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">我的设备</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">摄像头列表</a>
						</li>
					</ul>
					<div class="page-toolbar">
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
				<div class="row">
					<div class="col-md-12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box blue-hoki">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-globe"></i>摄像头列表
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
								<div class="table-toolbar">
									<div class="row">
										<div class="col-md-6">
											<div class="btn-group">
												<a href="#basic" data-toggle="modal">
												<button id="sample_editable_1_new" class="btn green">
												添加 <i class="fa fa-plus"></i>
												</button></a>
											</div>
										</div>
										<!-- 
										<div class="col-md-6">
											<div class="btn-group pull-right">
												<button class="btn dropdown-toggle" data-toggle="dropdown">选项 <i class="fa fa-angle-down"></i>
												</button>
												<ul class="dropdown-menu pull-right">
													<li>
														<a href="#">
														打印 </a>
													</li>
													<li>
														<a href="#">
														保存为PDF </a>
													</li>
													<li>
														<a href="#">
														导出为Excel </a>
													</li>
												</ul>
											</div>
										</div>  -->
									</div>
								</div> 
								<table class="table table-striped table-bordered table-hover" id="sample_1">
								<thead>
								<tr>
									<th class="table-checkbox">
										<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>
									</th>
									<th>
										 名称
									</th>
									<th>
										 注册时间
									</th>
									<th>
										 状态
									</th>
									<th>
										 操作
									</th>
								</tr>
								</thead>
								<tbody>
								<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
									<td>
										<input type="checkbox" class="checkboxes" value="1"/>
									</td>
									<td>
										 <?php echo ($vo["equipmentName"]); ?>
									</td>
									<td>
										<?php echo ($vo["activeDate"]); ?>
									</td>
									<td>
										<!-- '<span class="label label-sm label-success">监控中 </span>' : '<span class="label label-sm label-warning">未连接</span>' -->
										<?php if(($vo["status"] == 't')): ?><span class="label label-sm label-success">监控中 </span>
										<?php else: ?> 
											<span class="label label-sm label-warning">未连接</span><?php endif; ?>
										 
									</td>
									
									<td>
										
										<a href="#stack1" id="btn_play_rtmp" class="btn btn-sm blue" data-toggle="modal" title="实时录像播放" style="margin-right:1px">
										<i class="fa fa-play"></i></a>
										<div class="btn-group dropup">
											<button type="button" class="btn btn-sm green dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cogs"></i></button>
											<div class="dropdown-menu hold-on-click dropdown-checkboxes" role="menu">
												<label><input id="video_ctl" type="checkbox">开启视频采集</label>
												<label><input id="voice_ctl" type="checkbox" checked>开启音频采集</label>
												<label><input id="led_ctl" type="checkbox">开启LED</label>
											</div>
										</div>
										
										
										<a href="#stack1" class="btn btn-sm blue" title="实时监控播放" data-toggle="modal" id="btn_play_rtmp_<?php echo ($vo["SN"]); ?>"><i class="fa fa-play"></i></a>
										<div class="btn-group dropup" style="position: absolute;">
										<button type="button" class="btn btn-sm green dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cogs"></i></button>
										<div class="dropdown-menu hold-on-click dropdown-checkboxes" role="menu" style="position: relative;">
											<label><input id="video_ctl_<?php echo ($vo["SN"]); ?>" type="checkbox" checked>开启视频采集</label>
											<label><input id="voice_ctl_<?php echo ($vo["SN"]); ?>" type="checkbox" checked>开启音频采集</label>
											<label><input id="led_ctl_<?php echo ($vo["SN"]); ?>" type="checkbox" checked>开启LED</label>
										</div></div>
										
									</td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
								<!-- 
								<tr class="odd gradeX" style="display:none;">
									<td>
										<input type="checkbox" class="checkboxes" value="1"/>
									</td>
									<td>
										 test_camera
									</td>
									<td>
										豪瑞新界
									</td>
									<td>
										 <span class="label label-sm label-success">
										监控中 </span>
									</td>
									
									<td>
										<a href="#stack1" id="btn_play_rtmp" class="btn btn-sm blue" data-toggle="modal" title="实时录像播放" style="margin-right:1px">
										<i class="fa fa-play"></i></a>
										<div class="btn-group dropup">
											<button type="button" class="btn btn-sm green dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cogs"></i></button>
											<div class="dropdown-menu hold-on-click dropdown-checkboxes" role="menu">
												<label><input id="video_ctl" type="checkbox">开启视频采集</label>
												<label><input id="voice_ctl" type="checkbox" checked>开启音频采集</label>
												<label><input id="led_ctl" type="checkbox">开启LED</label>
											</div>
										</div>
									</td>
								</tr>
								  -->
								</tbody>
								</table>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET-->
						<div>
					</div>
				</div>
				
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
			 2014 &copy; 成都守望者科技有限公司. ALL Rights Reserved.
		</div>
		<div class="scroll-to-top">
			<i class="icon-arrow-up"></i>
		</div>
	</div>
	<!-- END FOOTER -->
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="/Public/Style/assets1/global/plugins/respond.min.js"></script>
<script src="/Public/Style/assets1/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="/Public/Style/assets1/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="/Public/Style/assets1/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/Public/Style/assets1/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="/Public/Style/assets1/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/Public/Style/assets1/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="/Public/Style/assets1/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/Public/Style/assets1/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/Public/Style/assets1/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="/Public/Style/assets1/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="/Public/Style/assets1/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->


<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="/Public/Style/assets1/global/plugins/select2/select2.min.js"></script>
<!-- <script type="text/javascript" src="/Public/Style/assets1/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>-->
<script type="text/javascript" src="/Public/Style/assets1/global/plugins/datatables/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="/Public/Style/assets1/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="/Public/Style/assets1/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="/Public/Style/assets1/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script type="text/javascript" src="/Public/Style/assets1/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->


<!-- BEGIN DATE PAGINATOR PLUGIN -->
<!--  <script src="/Public/Style/assets1/global/plugins/moment.min.js" type="text/javascript"></script>-->
<script src="/Public/Style/assets1/global/plugins/moment-with-locales.js" type="text/javascript"></script>
<script src="/Public/Style/assets1/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="/Public/Style/assets1/global/plugins/bootstrap-datepaginator/bootstrap-datepaginator.js" type="text/javascript"></script>
<!-- END DATE PAGINATOR PLUGIN -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/Public/Style/assets1/global/plugins/ion.rangeslider/js/ion-rangeSlider/ion.rangeSlider.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<script src="/Public/Style/assets1/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/Public/Style/assets1/admin/layout2/scripts/layout.js" type="text/javascript"></script>
<script src="/Public/Style/assets1/admin/layout2/scripts/demo.js" type="text/javascript"></script>
<script src="/Public/Style/assets1/admin/pages/scripts/table-managed.js"></script>
<script src="/Public/Style/assets1/admin/pages/scripts/form-wizard.js"></script>

<!-- jwplayer scripts start-->
<!--  <script type="text/javascript" src="http://192.168.2.231:8080/players/js/srs.page.js"></script>
<script type="text/javascript" src="http://192.168.2.231:8080/players/js/srs.log.js"></script>
<script type="text/javascript" src="http://192.168.2.231:8080/players/js/srs.player.js"></script>
<script type="text/javascript" src="http://192.168.2.231:8080/players/js/srs.publisher.js"></script>
<script type="text/javascript" src="http://192.168.2.231:8080/players/js/srs.utility.js"></script>
-->
<script type="text/javascript" src="/Public/Style/assets1/global/plugins/jwplayer/jwplayer.js" ></script>
<!-- 
<script type="text/javascript" src="http://192.168.2.121:8080/players/js/jwplayer.html5.js" ></script>
 -->
<script type='text/javascript'>jwplayer.key = 'N8zhkmYvvRwOhz4aTGkySoEri4x+9pQwR7GHIQ=='; </script>
<!-- jwplayer scripts end -->

<!-- jquery qrcode start-->
<script type="text/javascript" src="/Public/Style/assets1/global/plugins/jquery-qrcode/jquery.qrcode.js"></script>
<script type="text/javascript" src="/Public/Style/assets1/global/plugins/jquery-qrcode/qrcode.js"></script>
<!-- jquery qrcode end-->

<script>

jQuery('#qrcode_div').qrcode({
	render	: ($.browser.msie && $.browser.version < 9 ? "table" : "canvas"),
	text	: "http://watchmen.cn",
	width       : 128,     //设置宽度  
	height      : 128
});	

var day_timestamp = 0;//
var current_timestamp = new Date().getTime();
var hours_24_msecond = 24*3600*1000;
var login_username = $.cookie('username');
var login_password = $.cookie('password');

function dragPlay(msecond,flag){
	//var msec = h*3600*1000;
	//alert(msecond);
	var timestamp = 0;
	if(day_timestamp!=0){
		timestamp = day_timestamp+msecond;
	}else{
		var y = (new Date()).getFullYear();
        var m = (new Date()).getMonth()+1;
        var d = (new Date()).getDate();
        var str = y+'/'+m+'/'+d+" 00:00:00";
        var ymd_stamp = Date.parse(new Date(str));
        timestamp = ymd_stamp + msecond;
	}
	//$('#player').html('');
  	 var div_container = $("<div/>");
     $(div_container).attr("id", "div_container");
     $("#player").append(div_container);
     
     var player = $("<div/>");
     $(player).attr("id", "player_id");
     $(div_container).append(player);
     
     var url = ""
	if(flag=='online'){
		var camera_srsip = '192.168.2.231',camera_srsport='1935',path='live',camera_sn = 'test';
		url = 'rtmp://'+camera_srsip+':'+camera_srsport+'/'+path+'/'+camera_sn+"?username="+login_username+"&password="+login_password;
	}else{
		url = "http://192.168.2.231:8080/live/test."+timestamp+".flv?username="+login_username+"&password="+login_password;
	}
    //alert(url);
    var conf = {
	           file: url,
	           //file:"test.1411296393884.flv",
	           width: 788,
	           height: 400,
	           autostart: true,
	           analytics: { enabled: false}
	       };
	_player = jwplayer('player_id').setup(conf);
}

jQuery(document).ready(function() {
	Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	Demo.init(); // init demo features
	 FormWizard.init();
	//UIDatepaginator.init();
	//TableManaged.init();
	//UIExtendedModals.init();
	//alert(login_username);
	if(login_username != null && login_username != 'null'){
		$('#username_display').html(login_username);
	}else{
		//window.location.href = "login.html";
		//return;
	}
	
	//视频播放的时间轴---------
	 $('#datepaginator_sample_4').datepaginator({
                onSelectedDateChanged: function(event, date) {
                	day_timestamp = moment(date)
                  //alert("Selected date: " + moment(date));
                }
      });
	 
	 $("#range_5").ionRangeSlider({
         min: 0,
         max: 24,
         type: 'single',
         step: 1,
         postfix: " : 00",
         prettify: false,
         hasGrid: true
     });
	 //------------------------
	 
	 //生成二维码
	 $('#create_qrcode').on("click",function(){
		 $.cookie("wifi_account",$('#wifi_account').val(),{expires:10});
		 $.cookie("wifi_password",$('#wifi_password').val(),{expires:10});
		 if($.cookie("wifi_account") && $.cookie("wifi_password") && $.cookie("username") && $.cookie("password")){
			 jQuery('#qrcode_div').html('');
			 jQuery('#qrcode_div').qrcode({
				render	: ($.browser.msie && $.browser.version < 9 ? "table" : "canvas"),
				text	: $.cookie("wifi_account")+','+$.cookie("wifi_password")+','+$.cookie("username")+','+$.cookie("password"),
				width       : 128,     //设置宽度  
				height      : 128
			});
			 jQuery('#qrcode_display').css('border','1px');
			jQuery('#qrcode_display').html('');
			jQuery('#qrcode_display').qrcode({
				render	: ($.browser.msie && $.browser.version < 9 ? "table" : "canvas"),
				text	: $.cookie("wifi_account")+','+$.cookie("wifi_password")+','+$.cookie("username")+','+$.cookie("password"),
				width       : 128,     //设置宽度  
				height      : 128
			});	
			//alert($.cookie("wifi_account")+'-'+$.cookie("wifi_password")+'-'+$.cookie("username")+'-'+$.cookie("password"))
			alert('生成成功！');
		 }else{
			 alert('请先配置二维码认证信息！');
		 }
		 
	 });
	 
	 $("#video_ctl").on("click",function(){
		 
		 var cmd = this.checked ? '0x01' : '0xf1';
		 var SN = 'test';
		 //alert(cmd);
		 $.ajax({
				url : "/srs",
				type : "POST",
				cache : false,
				async : true,
				dataType : "json",
				data :{"control":"true","username":"hanhuade","password":"123456","SN":SN,"cmd":cmd},
				success : function(data, textStatus) {
					
				}
		});
	 });
	
	$("#voice_ctl").on("click",function(){
		var cmd = this.checked ? '0X03' : '0xf3';
		 var SN = 'test';
		 //alert(cmd);
		$.ajax({
			url : "/srs",
			type : "POST",
			cache : false,
			async : true,
			dataType : "json",
			data :{"control":"true","username":"hanhuade","password":"123456","SN":SN,"cmd":cmd},
			success : function(data, textStatus) {
				
			}
	});
	 });
	 
	$("#led_ctl").on("click",function(){
		var cmd = this.checked ? '0x05' : '0xf5';
		var SN = 'test';
		//alert(cmd);
		$.ajax({
			url : "/srs",
			type : "POST",
			cache : false,
			async : true,
			dataType : "json",
			data :{"control":"true","username":"hanhuade","password":"123456","SN":SN,"cmd":cmd},
			success : function(data, textStatus) {
				
			}
		});
	 });
	 
	 
	$('#btn_play_rtmp').on("click",function(){
		 $('#player').html('');
	   	 var div_container = $("<div/>");
	        $(div_container).attr("id", "div_container");
	        $("#player").append(div_container);
	        
	        var player = $("<div/>");
	        $(player).attr("id", "player_id");
	        $(div_container).append(player);
	        
	        var conf = {
	            file: "http://192.168.2.121:8080/live/test.1411296393884.flv",
	            //file:"test.1411296393884.flv",
	            width: 788,
	            height: 400,
	            autostart: true,
	            analytics: { enabled: false}
	        };
	        _player = jwplayer('player_id').setup(conf);
	});
   
	
	/*Metronic.blockUI({message:'正在加载数据...',boxed: true});
	$.ajax({
		url : "/user",
		type : "POST",
		cache : false,
		async : true,
		dataType : "json",
		data :{"getlist":"true","username":login_username,"password":login_password},
		success : function(data, textStatus) {
			if(data.result == 'sucess'){
				var j = 1;
				for(var key in data.set_list){
					var camera_name = data.set_list[key].name;
					var camera_sn = data.set_list[key].SN;
					var camera_status = data.set_list[key].status;
					var camera_srsip = data.set_list[key].srsip;
					var camera_srsport = data.set_list[key].srsport;
					var path = data.set_list[key].path;
					var url = 'rtmp://'+camera_srsip+':'+camera_srsport+'/'+path+'/'+camera_sn+"?username="+login_username+"&password="+login_password;
					var camera_status_str = camera_status == 't' ? '<span class="label label-sm label-success">监控中 </span>' : '<span class="label label-sm label-warning">未连接</span>'
					var even_odd_status = (i%2==0) ? 'odd':'even';
					var trHTML = '<tr class="'+even_odd_status+'" role="row"><td><input type="checkbox" value="1" class="checkboxes"></td><td>'
					+camera_name+'</td><td>这是一个地址</td><td>'+camera_status_str+'</td>'
					+'<td>'
					+'<a href="#stack1" class="btn btn-sm blue" title="实时监控播放" data-toggle="modal" id="btn_play_rtmp_'
					+camera_sn+'"><i class="fa fa-play"></i></a>'
					+'<div class="btn-group dropup" style="position: absolute;">'
					+'<button type="button" class="btn btn-sm green dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cogs"></i></button>'
					+'<div class="dropdown-menu hold-on-click dropdown-checkboxes" role="menu" style="position: relative;">'
					+'	<label><input id="video_ctl_'+camera_sn+'" type="checkbox" checked>开启视频采集</label>'
					+'	<label><input id="voice_ctl_'+camera_sn+'" type="checkbox" checked>开启音频采集</label>'
					+'	<label><input id="led_ctl_'+camera_sn+'" type="checkbox" checked>开启LED</label>'
					+'</div></div>'
					//+'<a href="#stack1" id="btn_history_replay_'+camera_sn
					//+'" class="btn btn-sm green" data-toggle="modal" title="历史录像回放"><i class="fa fa-search-plus"></i></a>'
					+'</td></tr>';
					$('#sample_1').append(trHTML);
					
					
					 $("#video_ctl_"+camera_sn).bind("click",{camera_sn:camera_sn},function(event){
						 
						 var cmd = this.checked ? '0x01' : '0xf1';
						 var SN = event.data.camera_sn;
						 //alert(cmd);
						 $.ajax({
								url : "/srs",
								type : "POST",
								cache : false,
								async : true,
								dataType : "json",
								data :{"control":"true","username":login_username,"password":login_password,"SN":SN,"cmd":cmd},
								success : function(data, textStatus) {
									
								}
						});
					 });
					
					$("#voice_ctl_"+camera_sn).bind("click",{camera_sn:camera_sn},function(event){
						var cmd = this.checked ? '0X03' : '0xf3';
						var SN = event.data.camera_sn;
						 //alert(cmd);
						$.ajax({
							url : "/srs",
							type : "POST",
							cache : false,
							async : true,
							dataType : "json",
							data :{"control":"true","username":login_username,"password":login_password,"SN":SN,"cmd":cmd},
							success : function(data, textStatus) {
								
							}
						});
					 });
					 
					$("#led_ctl_"+camera_sn).bind("click",{camera_sn:camera_sn},function(event){
						var cmd = this.checked ? '0x05' : '0xf5';
						var SN = event.data.camera_sn;
						//alert(cmd);
						$.ajax({
							url : "/srs",
							type : "POST",
							cache : false,
							async : true,
							dataType : "json",
							data :{"control":"true","username":login_username,"password":login_password,"SN":SN,"cmd":cmd},
							success : function(data, textStatus) {
								
							}
						});
					 });
					
					
					$('#btn_play_rtmp_'+camera_sn).bind('click',{url:url},function(event){
						   $('#player').html('');
						   var div_container = $("<div/>");
					       $(div_container).attr("id", "div_container");
					       $("#player").append(div_container);
					       
					       var y = (new Date()).getFullYear();
			               var m = (new Date()).getMonth()+1;
			               var d = (new Date()).getDate();
			               var h = (new Date()).getHours();
			               var i = (new Date()).getMinutes();
			               i = i<10 ? '0'+i : i;
			               h = h<10 ? '0'+h : h;
			            		   
			               var str = y+'/'+m+'/'+d+" 00:00:00";
			               var ymd_stamp = Date.parse(new Date(str));
			               
					       var time_slider_width = $("#time_slider").attr('title');
					       var slider_pos_left_msecond = current_timestamp-ymd_stamp;
					       var slider_pos_left = slider_pos_left_msecond*time_slider_width/hours_24_msecond
					       console.log(slider_pos_left_msecond);
					       console.log(time_slider_width);
					       console.log(hours_24_msecond);
					       console.log(slider_pos_left);
					       
					       $("#time_slider").find('.irs-single').css('left',parseInt(slider_pos_left)-18.5+'px');
					       $("#time_slider").find('.irs-single').html( h+' : '+i )
					       $("#time_slider").find('.irs-slider').css('left',parseInt(slider_pos_left)+'px') ;
					       var player = $("<div/>");
					       $(player).attr("id", "player_id");
					       $(div_container).append(player);
					       var conf = {
					           file: event.data.url,
					           //file:"test.1411296393884.flv?time=12345646",
					           width: 788,
					           height: 400,
					           autostart: true,
					           analytics: { enabled: false}
					       };
					       _player = jwplayer('player_id').setup(conf);
					   });
					
				}//end for
				
				Metronic.init(); // init metronic core components
				Layout.init(); // init current layout
				Demo.init(); // init demo features
				TableManaged.init();
				Metronic.unblockUI();
				//TableAdvanced.init();
				//UIExtendedModals.init();
			}else{
				Metronic.unblockUI();
				alert('服务器网络异常，请稍后重试！');
			}
			
			 //alert(data.set_list[0].name);
		}
	});*/
	
	
	$("#logout_btn").on("click",function(){
		$.cookie('username',null);
		$.cookie('password',null)
		window.location.href = "login.html";
	});
	
});


</script>


</body>
<!-- END BODY -->
</html>