<?php
namespace Admin\Model;
use Think\Model;
class DeviceModel extends Model 
{    
	protected $trueTableName = 'MonitorSets';
	
	protected $_validate = array(
			array('deviceName','require','请输入设备名称！'), //默认情况下用正则进行验证
			array('deviceName','','设备名称已经存在！',0,'unique'),// 在新增的时候验证name字段是否唯一
			array('SetSn','require','请输入设备SN码！'), //默认情况下用正则进行验证
			array('SetSn','','设备SN码已经存在！',0,'unique'),// 在新增的时候验证name字段是否唯一
	);
	
}