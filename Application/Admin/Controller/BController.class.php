<?php
namespace Admin\Controller;
use Think\Controller;
class BController extends Controller {
	public function __construct(){
		parent::__construct();
		$this->checkSessionExist();
		$this->checkPermission();
	}
	
	private $permission = array(
								'user'=>array(
												'Device'=>array(
																'allow'=>array(),
																'deny'=>array()
																),
											 	'User'=>array(
											 				'allow'=>array(),
											 				'deny'=>array('add','edit','delete','lists','item')
											 				),
											 ),
								'admin'=>array()
								);
	
	
	public function checkPermission(){
		$roles = session('user')['roles'];
		if($roles == 'user'){
			if( in_array(ACTION_NAME, $this->permission[$roles][CONTROLLER_NAME]['deny']) ){
				$this->error('没有权限访问！',U('index/index'));
			}
		}
	}
	
	public function checkSessionExist(){
		$allow_action = array('login','doLogin','register','doRegister');
		if( empty(session('user')) && !in_array(ACTION_NAME, $allow_action) ){
			 //echo __ACTION__;
			 //echo __SELF__;
			// echo CONTROLLER_NAME;
			// echo ACTION_NAME;
			 $this->error('当前用户未登录或登录超时，请重新登录',U('user/login'));
			//$this->display('index/notlogin');
			//exit;
			
		}
	}
	
}
