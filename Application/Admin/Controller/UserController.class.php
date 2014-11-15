<?php
namespace Admin\Controller;
use Think\Controller;

class UserController extends BController {

	public function index(){
        $this->display();
    }

    public function login(){
        $this->display();
    }
    
    public function doLogin(){
    	$username = $_POST['username'];
    	$password = md5($_POST['password']);
    	
    	$User = D('User');
    	$user_finded = $User->where(array('userName'=>$username,'password'=>$password))->find();
    	if(!empty($user_finded)){
    		$user_finded['password'] = $_POST['password'];
    		session('user',$user_finded);
    		//print_r(session('user'));exit();
    		if($user_finded['roles'] == 'admin'){
    			$this->redirect("index/index");
    		}else{
    			$this->redirect("device/lists");
    		}
    	}else{
    		$error_msg = '用户名或密码错误';
    		$this->assign('error_msg',$error_msg);
    		$this->display("login");
    	}
    	
    }
    
    public function doRegister(){
    	
    	$username = $_POST['userName'];
    	$password = $_POST['password'];
    	//print_r($_POST);exit;
    	$User = D('User');
    	if($User->create()){
    		$User->registerTime = date('Y-m-d H:i:s',time());
    		$User->roles = 'user';
    		$User->status = 1;
    		$rs = $User->add();
    		if($rs){
    			$_POST['ID'] = $rs;
    			session('user',$_POST);
    		//print_r(session('user'));exit;
    			$this->redirect("device/lists");
    		}
    	}else{
    		header("Content-type: text/html; charset=utf-8");
    		echo '<script>alert("'.$User->getError().'");history.back();</script>';
    	}
    }
    
    public function register(){
         $this->display();
    }

    public function logout(){
    	session('[destroy]');
        $this->display('login');
    }
    
    public function lists(){
    	if(session('user')['roles'] == 'admin'){
    		$User = D('User');
    		$userlist = $User->where(array('roles'=>'user'))->select();
    	//var_dump($userlist);exit;
    		$this->assign('list',$userlist);
    		$this->assign('userNavStatus','active');
    		
    		$this->display();
    	}
    }
    
    
    public function updatePasswd(){
    	
		$User = D('User');
		$userid = session('user')['ID'];
		$old_password =	$_POST['old_password'];
		$new_password = $_POST['new_password'];
		$new_repassword = $_POST['new_repassword'];
		
		if($old_password && $new_password && $new_repassword == $new_password){//修改自己的密码
			$rs = $User-> where( array( 'ID'=>$userid,'password'=>md5($old_password) ) )->setField( array('password'=>md5($new_password) ) );
			$this->ajaxReturn($rs);
		}else{
			if($new_repassword != $new_password){
				echo '两次输入的密码不一致';
			}else{
				echo '输入的旧密码不正确';
			}
		}
    }
    
    public function delete(){
    	
    	$User = D('User');
    	$userid = $_POST['ID'];
    	if($userid){
    		$rs = $User->delete($userid);
    		$this->ajaxReturn($rs);
    	}
    }
    
	public function item(){
		$User = D('User');
		$rs = $User->where($_POST)->find();
		if($rs){
			$this->ajaxReturn($rs);
		}
	}
	
	public function edit(){
		$User = D('User');
		if($_POST['password']=='********'){
			unset($_POST['password']);
			unset($_POST['rpassword']);
		}
		print_r($_POST);exit;
		if($User->create()){
			$rs = $User->save();
			if($rs){
				$this->ajaxReturn($rs);
			}
		}else{
			echo $User->getError();
		}
	}
    
	public function add(){
//     	print_r($_POST);exit;
    	$User = D('User');
    	if($User->create()){
    		
    		$User->registerTime = date('Y-m-d H:i:s');
    		$User->roles = 'user';
    		$rs = $User->add();
    		if($rs){
    			$this->ajaxReturn($rs);
    		}
    	}else{
    		echo $User->getError();
    	}
    }	
}