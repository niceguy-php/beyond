<?php
namespace Admin\Controller;
use Think\Controller;

class SystemController extends Controller {
	
    public function index(){
    	if( !empty( session('user') ) ){
    		$this->assign('active','home');
       	 	$this->display();
    	}
    }
    
    public function upload(){
    	$this->display();
    }
    
    

    
    
}