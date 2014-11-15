<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends BController {
	
    public function index(){
    	//if( !empty( session('user') ) ){
    		$this->assign('homeNavStatus','active');
       	 	$this->display();
    	//}
    }
    
    public function login(){
    	$this->display();
    }

    public function login_validate(){
        //var_dump(session('user'));
        if(session('user')){
            $this->display('cameraList');
        }else{
        
            $User = M('User');
            $user_finded = $User->where(array('username'=>$_POST['username'],'password'=>$_POST['password']))->find();
            //print_r($user_finded);
            //exit;
        	if($user_finded['username']){
        		//$this->success('登陆成功','cameraList');
                //session('[start]');    
        		// $_SESSION['user'] = $user_finded['username'];
                session_start();
                session( 'user',$user_finded['username'] );
                $this->display('cameraList');
        	}else{
        		$this->error('用户名或密码错误','login');
        		//$this->display('login');
        	}
        }
    	
    }

    public function logout(){
        session('[destroy]');
        //$_SESSION['user'] = null;
        $this->display('login');
    }

    public function cameraList(){
	   $this->display();
    }

    public function fields(){
        
        $Camera = M('Camera');
        echo json_encode($Camera->field('id,name,ip,location,username,password')->select());
        
    }

    public function viewone(){
    
        
        $camera_id = base64_decode($_GET['id']);

        $Camera = M('Camera');
        
        $camera_fields = $Camera->where(array('id'=>$camera_id))->field('name,ip,location,username,password')->find();

        //print_r($camera_fields);

        $rtsp_request_url = 'rtsp://'.$camera_fields['ip'].':554/user='.$camera_fields['username'].
        '&password='.$camera_fields['password'].'&channel=1&stream=0.sdp?real_stream--rtp-caching=100';
        //rtsp://192.168.2.10:554/user=admin&amp;password=123456&amp;channel=1&amp;stream=0.sdp?real_stream--rtp-caching=100

        $description_text = $camera_fields['name'].'('.$camera_fields['ip'].')'.'——'.$camera_fields['location'];
        //echo $description_text;
        //echo $rtsp_request_url;

        $this->assign('description_text',$description_text);
        $this->assign('rtsp_url',$rtsp_request_url);
        $this->display();
        
    }
    
    public function user_lists(){
    	$this->redirect('user/lists');
    }

}