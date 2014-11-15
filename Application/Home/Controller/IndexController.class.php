<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){
    	$this->assign('open','home');
        $this->display();
    }

    public function fields(){
        
        $Camera = M('Camera');
        echo json_encode($Camera->field('id,name,ip,location,username,password')->select());
        
    }

    public function contacts(){
    	$this->assign('open','contacts');
    	$this->display();
    }
    
    public function examples(){
    	$this->assign('open','examples');
    	$this->display();
    }
    
    public function productinfo(){
    	$this->assign('open','productinfo');
    	$this->display();
    }
    
    /**
     * FAQ 疑问解答
     */
    public function faq(){
    	$this->display();
    }
    
	public function company(){
		$this->assign('open','company');
    	$this->display();
    }

}