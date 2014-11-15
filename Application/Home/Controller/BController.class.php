<?php
namespace Home\Controller;
use Think\Controller;
class BController extends Controller {
	public function __construct(){
		parent::__construct();
		$this->checkSessionExist();
	}

	public function checkSessionExist(){
		if( empty(session('user')) && ACTION_NAME != 'login' && ACTION_NAME != 'login_validate' && ACTION_NAME!='index'){
			// echo __ACTION__;
			// echo __SELF__;
			// echo CONTROLLER_NAME;
			// echo ACTION_NAME;
			 $this->error('当前用户未登录或登录超时，请重新登录',U('Index/login'));
			//$this->display('index/notlogin');
			//exit;
		}
	}
}
