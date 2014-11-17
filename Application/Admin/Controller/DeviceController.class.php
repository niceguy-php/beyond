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
     	$Model = M();
     	$current_day_sql = "SELECT MIN(h.bugCount) AS min,MAX(h.bugCount) AS max,CEIL(AVG(h.bugCount)) AS avg ,SUM(h.bugCount) AS sum,CONCAT(DATE_FORMAT(NOW(),'%Y-%m-%d'),' 00:00-23:59') AS timeRange FROM hourstatistics h WHERE LEFT(h.hourchar,10) = DATE_FORMAT(NOW(),'%Y-%m-%d')";
     	$last_month_sql = "select MIN(h.bugCount) AS min,MAX(h.bugCount) AS max,CEIL(AVG(h.bugCount)) AS avg ,SUM(h.bugCount) AS sum ,CONCAT(date_sub(date_sub(date_format(now(),'%y/%m/%d'),interval extract(day from now())-1 day),interval 1 month),'~',date_sub(date_sub(date_format(now(),'%y/%m/%d'),interval extract( day from now()) day),interval 0 month)) AS timeRange FROM hourstatistics h WHERE date_format(h.hourDate,'%Y-%m')=date_format(DATE_SUB(curdate(), INTERVAL 1 MONTH),'%Y-%m')";
     	$current_day_info = $Model->query($current_day_sql);
     	
     	
     	$this->assign('deviceInfo',$_GET);
     	$this->display();
     }
     
	 public function compareAnalysis(){
	 	$this->assign('analysisNavStatus','active');
	 	$this->display();
     }
     
     
     public function hourStatData(){
     	$Model = M();
     	$hourDataArray = $Model->query('SELECT h.bugCount,h.hourDate,h.electricShockCount FROM hourstatistics h ORDER BY hourDate ASC');
//      	$hourData = web_http(array('report_key'=>'hour_stat'),C('ENGINE_URI'));
//      	$hourDataArray = json_decode($hourData,true);
//      	var_dump($hourDataArray);exit;
//      	echo $hourData;exit;
     	$statData = array();
     	
     	foreach ($hourDataArray as $k=>$v){
     		$time = strtotime($v['hourDate'])*1000;
			$statData['bug'][] = array('x'=>$time,'y'=>intval($v['bugCount']));
			$statData['electric'][] = array('x'=>$time,'y'=>intval($v['electricShockCount']));	
     	}
     	
     	$statDataReturn[] = array('name'=>'诱杀害虫数','data'=>$statData['bug']);
     	$statDataReturn[] = array('name'=>'放电次数','data'=>$statData['electric']);
     	$this->ajaxReturn($statDataReturn);
     }
     
     public function dayStatData(){
     	$Model = M();
     	$dayData = $Model->query('SELECT SUM(d.bugCount) AS bugCount,SUM(d.electricShockCount) AS electricShockCount,d.dayDate,MONTH(d.dayDate) AS month,DAY(d.dayDate) AS day FROM daystatistics d GROUP BY daychar ORDER BY dayDate ASC ');
     	
     	$statData = array();
     	foreach ($dayData as $k=>$v){
     		
     		
     		$statData['bug'][$v['month']][] = array('x'=>$v['day']-1,'y'=>intval($v['bugCount']));
     		$statData['electric'][$v['month']][$v['day']] = array('x'=>$v['day']-1,'y'=>intval($v['electricShockCount']));
     		
     		//$statData[] = array('name'=>$v['month'].'月','data'=>array('x'=>$v['day'],'y'=>intval($v['bugCount'])));
     		//$dayBug[$v['month']][$v['day']] = $v['bugCount']; 
     		//$dayelEctricCount[$v['month']][$v['day']] = $v['electricShockCount'];
     		//$statData[] = array('name'=>$v['month'].'月','data'=>'');
     		//$statData['bug'][] = array('day'=>$v['day'],'bugCount'=>intval($v['bugCount']));
     		//$statData['electric'][] = array('x'=>$v['day'],'y'=>intval($v['electricShockCount']));
//      		$statData['bug'][] = array('x'=>$v['day'],'y'=>intval($v['bugCount']));
//      		$statData['electricShockCount'][] = array('x'=>$v['day'],'y'=>intval($v['electricShockCount']));
     	}
     	
     	$a = array();
     	foreach($statData['bug'] as $m=>$v){
			$a[] = array('name'=>$m.'月','data'=>$v);	     		
     	}
     	
     	$this->ajaxReturn($a);
     	
     }
     
     public function monthStatData(){
     	
     	$Model = M();
     	$dayData = $Model->query('SELECT SUM(m.electricShockCount) as electricShockCount,SUM(m.bugCount) as bugCount,m.deviceName,YEAR(m.monthDate) as year,MONTH(m.monthDate) as month,m.deviceSN,m.monthDate,m.monthchar FROM monthstatistics m GROUP BY monthchar ORDER BY monthDate ASC');
     	
     	$statData = array();
     	$monthMap = array('1'=>'一月','2'=>'二月','3'=>'三月','4'=>'四月','5'=>'五月','6'=>'六月','7'=>'七月','8'=>'八月','9'=>'九月','10'=>'十月','11'=>"十一月",'12'=>"十二月");
     	foreach ($dayData as $k=>$v){
     		
     		$statData['bug'][$v['year']][] = array('x'=>$v['month']-1,'y'=>intval($v['bugCount']));
     		$statData['electric'][$v['year']][] = array('x'=>$v['month']-1,'y'=>intval($v['electricShockCount']));
     		 
     	}
     	
     	foreach($statData['bug'] as $y=>$v){
     		$a[] = array('name'=>$y.'年统计','data'=>$v);
     	}
     	
     	$this->ajaxReturn($a);
     }
     
     
    public function get(){
    	
    	$url = C('ENGINE_URI');
    	$param = array('report_key'=>'current_day');
    	echo C('ENGINE_URI');
    	$ret = web_http($param,C('ENGINE_URI'));
    	var_dump($ret);
    	
		// 参数数组
//     	$param = arra
    }
}