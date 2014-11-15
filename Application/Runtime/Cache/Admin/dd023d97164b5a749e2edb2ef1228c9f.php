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
<title>比昂科技管理员登录</title>
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
<link href="/Public/Style/assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
<link href="/Public/Style/assets/admin/pages/css/login.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
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
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed rgb(247, 222, 222) -->
<body class="login" style="background-color:rgb(194, 232, 199)!important;">
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="index.html">
	<img src="/Public/Style/assets/img/bianlogo_short.jpg" alt="logo" style="width:400px" alt=""/>
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content" style="width:400px;">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="/index.php/Admin/user/doLogin" method="post">
		<h4 class="form-title">输入登录信息</h4>
		<?php if(empty($error_msg)): ?><div class="alert alert-danger display-hide">
			<?php else: ?> 
			<div class="alert alert-danger"><?php endif; ?>
		
			<button class="close" data-close="alert"></button>
			<span>
			<?php if(empty($error_msg)): ?>请输入用户名和密码！<?php else: ?> <?php echo ($error_msg); endif; ?>
			 </span>
		</div>
		<div class="form-group">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">帐号</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="输入帐号" name="username"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">密码</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="输入密码" name="password"/>
			</div>
		</div>
		<div class="form-actions">
			<label class="checkbox">
			<input type="checkbox" name="remember" value="1"/> 记住密码 </label>
			<button type="submit" class="btn green pull-right">
			登录 <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
		<div class="login-options hide">
			<h4>Or login with</h4>
			<ul class="social-icons">
				<li>
					<a class="facebook" data-original-title="facebook" href="#">
					</a>
				</li>
				<li>
					<a class="twitter" data-original-title="Twitter" href="#">
					</a>
				</li>
				<li>
					<a class="googleplus" data-original-title="Goole Plus" href="#">
					</a>
				</li>
				<li>
					<a class="linkedin" data-original-title="Linkedin" href="#">
					</a>
				</li>
			</ul>
		</div>
		
		<div class="create-account">
			<p>
				 还没有帐号 ?&nbsp; <a href="javascript:;" id="register-btn">
				创建账号 </a>
			</p>
		</div>
		
		<div class="forget-password">
			<h4>忘记密码 ?</h4>
			<p>
				 点击 <a href="javascript:;" id="forget-password">
				这里 </a>
				重置密码.
			</p>
		</div>
	</form>
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
	<form class="forget-form" action="index.html" method="post">
		<h3>忘记密码 ?</h3>
		<p>
			 输入手机号找回密码.
		</p>
		<div class="form-group">
			<div class="input-icon">
				<i class="fa fa-mobile"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="手机号码" name="phone"/>
			</div>
		</div>
		<div class="form-actions">
			<button type="button" id="back-btn" class="btn">
			<i class="m-icon-swapleft"></i> 返回登录 </button>
			<button type="submit" class="btn green pull-right">
			发送新密码至手机 <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
	</form>
	<!-- END FORGOT PASSWORD FORM -->
	<!-- BEGIN REGISTRATION FORM -->
	<form class="register-form" action="/index.php/Admin/user/doRegister" method="post">
		<h3>注册</h3>
		<p>
			 输入个人信息
		</p>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">姓名</label>
			<div class="input-icon">
				<i class="fa fa-font"></i>
				<input class="form-control placeholder-no-fix" type="text" placeholder="姓名" name="realname"/>
			</div>
		</div>
	
		<div class="form-group hide">
			<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
			<label class="control-label visible-ie8 visible-ie9">邮箱</label>
			<div class="input-icon">
				<i class="fa fa-envelope"></i>
				<!--  <input class="form-control placeholder-no-fix" type="text" placeholder="邮箱" name="email"/>-->
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">地址</label>
			<div class="input-icon">
				<i class="fa fa-location-arrow"></i>
				<input class="form-control placeholder-no-fix" type="text" placeholder="地址" name="address"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">电话</label>
			<div class="input-icon">
				<i class="fa fa-mobile"></i>
				<input class="form-control placeholder-no-fix" type="text" placeholder="电话" name="phone"/>
			</div>
		</div>
		<!--  
		<div class="form-group hide">
			<label class="control-label visible-ie8 visible-ie9">Country</label>
			<select name="country" id="select2_sample4" class="select2 form-control">
				<option value=""></option>
				
			</select>
		</div>-->
		<p>
			 输入登录账号信息
		</p>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">帐号</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="帐号" name="userName"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">密码</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="密码" name="password"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">确认密码</label>
			<div class="controls">
				<div class="input-icon">
					<i class="fa fa-check"></i>
					<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="确认密码" name="rpassword"/>
				</div>
			</div>
		</div>
		<div class="form-group hide">
			<label>
			<input type="checkbox" name="tnc"/> 同意 <a href="#">
			用户注册 </a>
			<a href="#">
			协议 </a>
			</label>
			<div id="register_tnc_error">
			</div>
		</div>
		<div class="form-actions">
			<button id="register-back-btn" type="button" class="btn">
			<i class="m-icon-swapleft"></i> 返回登录 </button>
			<button type="submit" id="register-submit-btn" class="btn green pull-right">
			注册 <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
	</form>
	<!-- END REGISTRATION FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 2014 &copy; 成都比昂科技有限公司. All Rights Reserved.
</div>
<!-- END COPYRIGHT -->
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
<script src="/Public/Style/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/Style/assets/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/Public/Style/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/Public/Style/assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="/Public/Style/assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="/Public/Style/assets/admin/pages/scripts/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
  Login.init();
  $('#login_btn').on('click',function(){
	  window.location.href="bian_managed.html";
  });
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>