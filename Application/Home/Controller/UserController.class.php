<?php
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller {

	public function index(){
        $this->display();
    }


    public function operation()
    {
    	
    	$oper = $_POST['oper'];
    	unset($_POST['oper']);

    	$User = M('User');
    	if($oper=='edit'){
    		$rs = $User->save($_POST);
    		//print_r($rs);
    	}else if($oper == 'add'){
    		unset($_POST['id']);
    		if( $User->create() ){
    			print_r($_POST);
    			//$User->add();
    		}else{
    			echo '<script>alert("'.$User->getError().'")</script>';
    		}
    	}else if($oper == 'del'){
    		$User->delete($_POST['id']);
    	}
	    
           	
    }

    public function items()
    {
    	
		$User = M('User');
		echo json_encode($User->field('username,password,realname,note')->select());
    }
    
    public function login(){
    	$this->display();
    }
    
    public function register(){
    	$this->display();
    }

}