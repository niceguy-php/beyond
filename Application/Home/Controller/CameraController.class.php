<?php
namespace Home\Controller;
use Think\Controller;
class CameraController extends BController {

	public function index()
	{
		$this->display();
    }

    public function group()
    {
    	$this->display();
    }

    public function operation()
    {
    	
    	$oper = $_POST['oper'];
    	unset($_POST['oper']);

    	$Camera = M('Camera');
    	if($oper=='edit'){
    		$rs = $Camera->save($_POST);
    		//print_r($rs);
    	}else if($oper == 'add'){
    		unset($_POST['id']);
    		if( $Camera->create() ){
    			$Camera->add();
    		}
    	}else if($oper == 'del'){
    		$Camera->delete($_POST['id']);
    	}
	    
           	
    }

    public function items()
    {
    	
    	$Camera = M('Camera');

    	echo json_encode($Camera->select());
    	
    }

}