<?php
namespace Admin\Controller;
use Think\Controller;
class DeviceController extends BController {

	public function index()
	{
		$this->display();

    }

    public function lists(){
     	//web_http();
     	$device = D('Device');
     	if(session('user')['roles'] == 'admin'){
     		$list = $device->select();
     	}else{
     		$list = $device->where( array('UserId'=>session('user')['ID']) )->select();
     	}
     	
     	//print_r(session('user'));exit;
     	$User = D('User');
     	$users = $User->where(array('roles'=>'user'))->getField('ID,userName,realname');
     	$admin = $User->where(array('roles'=>'admin'))->getField('ID,userName,realname');
     	
//      	print_r($users);exit;
     	$this->assign('deviceNavStatus','active');
     	$this->assign('admin',$admin[1]);
     	$this->assign('list',$list);
     	$this->assign('users',$users);
     	$this->display();
     }
     
     public function add(){
    	$device = D('Device');
    	if($device->create()){
    		
    		$device->RegisterTime = date('Y-m-d H:i:s');
    		$rs = $device->add();
    		if($rs){
    			$this->ajaxReturn($rs);
    		}
    	}else{
    		//header("Content-type: text/html; charset=utf-8");
    		echo $device->getError();
    	}
     }
     
     
     public function item(){
     	
     	$device = D('Device');
     	$rs = $device->where($_POST)->find();
    	if($rs){
    		$this->ajaxReturn($rs);
    	}
     	
     }
     
     public function edit(){
     	$device = D('Device');
    	if($device->create()){
    		$rs = $device->save();
    		if($rs){
    			$this->ajaxReturn($rs);
    		}
    	}else{
    		echo $device->getError();
    	}
     }
     
     public function update(){
     	
     }
     
     public function delete(){
     	$ids = $_POST['ids'];
     	$device = D('Device');
     	$rs = $device->delete($ids);
     	if($rs){
     		$this->ajaxReturn($rs);
     	}
     }
     
     public function historyData(){
     	$sn = $_POST['sn'];
     	
     	$Model = M();
     	
     	if(session('user')['roles'] == 'admin'){
     	
     		
     		$yearData = $Model->query('SELECT SUM(m.electricShockCount) as electricShockCount,SUM(m.bugCount) as bugCount,m.deviceName,LEFT(monthchar,4) as year,m.deviceSN FROM monthstatistics m GROUP BY LEFT(monthchar,4)');
     		$monthData = $Model->query('SELECT SUM(m.electricShockCount) as electricShockCount,SUM(m.bugCount) as bugCount,m.deviceName,LEFT(monthchar,7) as monthchar,m.deviceSN FROM monthstatistics m GROUP BY LEFT(monthchar,7)');
     		$dayData = $Model->query('SELECT SUM(m.electricShockCount) as electricShockCount,SUM(m.bugCount) as bugCount,m.deviceName,m.daychar,m.deviceSN FROM daystatistics m GROUP BY m.daychar');
     	
     	}else{
     		if($sn){//where条件加sn和userid
     			$yearData = $Model->query("SELECT SUM(m.electricShockCount) as electricShockCount,SUM(m.bugCount) as bugCount,m.deviceName,LEFT(monthchar,4) as year,m.deviceSN FROM monthstatistics m WHERE deviceSN='%s' GROUP BY LEFT(monthchar,4)",array($sn));
     			$monthData = $Model->query("SELECT SUM(m.electricShockCount) as electricShockCount,SUM(m.bugCount) as bugCount,m.deviceName,LEFT(monthchar,7) as monthchar,m.deviceSN FROM monthstatistics m WHERE deviceSN='%s' GROUP BY LEFT(monthchar,7)",array($sn));
     			$dayData = $Model->query("SELECT SUM(m.electricShockCount) as electricShockCount,SUM(m.bugCount) as bugCount,m.deviceName,m.daychar,m.deviceSN FROM daystatistics m WHERE deviceSN='%s' GROUP BY m.daychar",array($sn));
     		}else{//where条件加userid
     			$yearData = $Model->query("SELECT SUM(m.electricShockCount) as electricShockCount,SUM(m.bugCount) as bugCount,m.deviceName,LEFT(monthchar,4) as year,m.deviceSN FROM monthstatistics m WHERE deviceSN='%s' GROUP BY LEFT(monthchar,4)",array($sn));
     			$monthData = $Model->query("SELECT SUM(m.electricShockCount) as electricShockCount,SUM(m.bugCount) as bugCount,m.deviceName,LEFT(monthchar,7) as monthchar,m.deviceSN FROM monthstatistics m WHERE deviceSN='%s' GROUP BY LEFT(monthchar,7)",array($sn));
     			$dayData = $Model->query("SELECT SUM(m.electricShockCount) as electricShockCount,SUM(m.bugCount) as bugCount,m.deviceName,m.daychar,m.deviceSN FROM daystatistics m WHERE deviceSN='%s' GROUP BY m.daychar",array($sn));
     		}
     		
     	}
     	
     	//print_r($dayData);
//      	print_r($yearData);

//      	print_r($monthData);
//      	exit;
		$lampData = $Model->query('SELECT * FROM devicelampinfo');
		
		$User = D('User');
		$users = $User->getField('ID,userName,realname');
		
		$electricShockData = $Model->query('SELECT i.ID,i.KeyStatus as voltage ,i.LogTime, i.SetName as deviceName, i.SetSN as deviceSN FROM info i');
		
		$this->assign('electricShockData',$electricShockData);
		$this->assign('users',$users);
		$this->assign('historyNavStatus','active');
     	$this->assign('yearData',$yearData);
     	$this->assign('monthData',$monthData);
     	$this->assign('dayData',$dayData);
     	$this->assign('lampData',$lampData);
     	$this->display();
     }
     
     public function report(){
     	$this->display();
     }
     
	 public function compareAnalysis(){
	 	$this->assign('analysisNavStatus','active');
	 	$this->display();
     }
     
    public function get(){
    	
    	$url = C('ENGINE_URI');
		
		// 参数数组
//     	$param = arra
    }
}