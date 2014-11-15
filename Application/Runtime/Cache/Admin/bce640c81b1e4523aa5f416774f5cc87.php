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
	<link href="/Public/Style/assets/global/fonts/2.css" rel="stylesheet" type="text/css">
<link href="/Public/Style/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="/Public/Style/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="/Public/Style/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/Public/Style/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">   
<link href="/Public/Style/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="/Public/Style/assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
<link href="/Public/Style/assets/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL SCRIPTS -->
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
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
	<a href="http://camera.cn">
	<img src="/Public/Style/assets/admin/layout2/img/logo-big.png" width="148" height="21" alt="成都守望者科技"/>
	</a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
	<!-- BEGIN LOGIN FORM -->
	<form class="login-form" action="/index.php/Admin/user/login_check" method="post">
		<h3 class="form-title">输入登录信息</h3>
		
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
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" id="username" placeholder="输入账号" name="username"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">密码</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="password" placeholder="输入密码" name="password"/>
			</div>
		</div>
		<div class="form-actions">
			<label class="checkbox">
			<input type="checkbox" name="remember" value="1"/> 记住密码 </label>
			<button type="submit" class="btn blue pull-right">
			登录 <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
		<!-- 
		<div class="login-options">
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
		</div> -->
		<div class="forget-password" style="margin-top:0px;">
			<h4>忘记密码 ?</h4>
			<p>
				 点击 <a href="javascript:;" id="forget-password">
				这里 </a>
				来重置密码
			</p>
		</div>
		<div class="create-account">
			<p>
				 还没有守望者账号 ?&nbsp; <a href="javascript:;" id="register-btn">
				马上注册 </a>
			</p>
		</div>
	</form>
	<!-- END LOGIN FORM -->
	<!-- BEGIN FORGOT PASSWORD FORM -->
	<form class="forget-form" action="index.html" method="post">
		<h3>忘记密码 ?</h3>
		<p>
			 输入你的邮箱地址，重置密码
		</p>
		<div class="form-group">
			<div class="input-icon">
				<i class="fa fa-envelope"></i>
				<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="输入邮箱" name="email"/>
			</div>
		</div>
		<div class="form-actions">
			<button type="button" id="back-btn" class="btn">
			<i class="m-icon-swapleft"></i> 返回登录 </button>
			<button type="submit" class="btn blue pull-right">
			找回密码 <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
	</form>
	<!-- END FORGOT PASSWORD FORM -->
	<!-- BEGIN REGISTRATION FORM -->
	<form class="register-form" action="/index.php/Admin/user/do_register" method="post">
		<h3>注册新用户</h3>
		<p>
			 输入注册信息
		</p>
		<!--  
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Full Name</label>
			<div class="input-icon">
				<i class="fa fa-font"></i>
				<input class="form-control placeholder-no-fix" type="text" placeholder="Full Name" name="fullname"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Email</label>
			<div class="input-icon">
				<i class="fa fa-envelope"></i>
				<input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">Address</label>
			<div class="input-icon">
				<i class="fa fa-check"></i>
				<input class="form-control placeholder-no-fix" type="text" placeholder="Address" name="address"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">City/Town</label>
			<div class="input-icon">
				<i class="fa fa-location-arrow"></i>
				<input class="form-control placeholder-no-fix" type="text" placeholder="City/Town" name="city"/>
			</div>
		</div>
		<p>
			 Enter your account details below:
		</p>-->
		<!--  <div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">邮箱</label>
			<div class="input-icon">
				<i class="fa fa-envelope"></i>
				<input class="form-control placeholder-no-fix" id="reg_email" type="text" placeholder="输入邮箱" name="email"/>
			</div>
		</div>-->
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">帐号</label>
			<div class="input-icon">
				<i class="fa fa-user"></i>
				<input class="form-control placeholder-no-fix" id="reg_username" type="text" autocomplete="off" placeholder="输入账号" name="userName"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">密码</label>
			<div class="input-icon">
				<i class="fa fa-lock"></i>
				<input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="reg_password" placeholder="输入密码" name="password"/>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label visible-ie8 visible-ie9">确认密码</label>
			<div class="controls">
				<div class="input-icon">
					<i class="fa fa-check"></i>
					<input class="form-control placeholder-no-fix" id="reg_repassword" type="password" autocomplete="off" placeholder="确认密码" name="repassword"/>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label>
			<input type="checkbox" name="tnc"/> 我同意 <a href="#">
			用户注册协议 </a>
			</label>
			<div id="register_tnc_error">
			</div>
		</div>
		<div class="form-actions">
			<button id="register-back-btn" type="button" class="btn">
			<i class="m-icon-swapleft"></i> 返回登陆 </button>
			<button type="submit" id="register_btn_t" class="btn blue pull-right">
			注册 <i class="m-icon-swapright m-icon-white"></i>
			</button>
		</div>
	</form>
	<!-- END REGISTRATION FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
	 2014 &copy; 成都守望者科技有限公司. ALL Rights Reserved.
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
<script src="/Public/Style/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/Public/Style/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="/Public/Style/assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/Style/assets/global/plugins/select2/select2.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/Public/Style/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/Public/Style/assets/admin/layout2/scripts/layout.js" type="text/javascript"></script>
<script src="/Public/Style/assets/admin/layout2/scripts/demo.js" type="text/javascript"></script>
<script src="/Public/Style/assets/admin/pages/scripts/login-soft.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
  Login.init();
       // init background slide images
       $.backstretch([
        "/Public/Style/assets/admin/pages/media/bg/2.jpg",
        "/Public/Style/assets/admin/pages/media/bg/3.jpg",
        "/Public/Style/assets/admin/pages/media/bg/4.jpg",
        "/Public/Style/assets/admin/pages/media/bg/1.jpg"
        ], {
          fade: 1000,
          duration: 8000
    }
    );
       
      // var block =  function(){ Metronic.blockUI({message:'登录认证中...',boxed: true});}
   $("#login_btn").click(function() {
	        //block();
			var ip = '';
			var name=$("#username").val();
	    	var password= $("#password").val();
	    	//alert(name+'=='+password);

			$.ajax({
				url : ip+"/user",
				type : "POST",
				cache : false,
				async : false,
				dataType : "json",
			    data :{"login":"true","username":name,"password":password},
				success : function(data, textStatus) {
					if(data.result == 'login_success'){
						$.cookie("username",name,{expires:10});
						$.cookie("password",password,{expires:10});
						alert("登录成功!!!");
						window.location.href = 'table_managed.html';
					}else{
						alert(data.result);
					}
					 
				}
			   
			});
			
			
	});

	 
	   //注册
	$("#register_btn").click(function() {
			var email = $("#reg_email").val();
	    	var password = $("#reg_password").val();
	    	var repassword = $("#reg_repassword").val();
	    	var username = $("#reg_username").val();

	    	//alert(username+password+email+repassword);
			$.ajax({
				url : "/user",
				type : "POST",
				cache : false,
				async : false,
				//dataType : "json",
				data :{"register":"true","username":username,"password":password,"repassword":repassword,"email":email},
				success : function(data, textStatus) {
					if(data.result == 'register_success'){
						$.cookie("username",username,{expires:10});
						$.cookie("username",password,{expires:10});
						alert("注册成功!!!");
						window.location.href = "table_managed.html";
					}else{
						alert(data.result);
					}
					 
				}
			});
	});
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>