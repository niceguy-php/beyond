<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model
{
	//protected $tablePrefix = '';
	//protected $tableName = 'SetUser';
	protected $trueTableName ="SetUser";
	// protected $_validate = array(
	// 	array('username','require','验证码必须！'), //默认情况下用正则进行验证     
	// 	array('username','','帐号名称已经存在！',1,'unique',3), // 在新增的时候验证name字段是否唯一     
	// );
	protected $_auto = array (          
			//array('status',1),  // 新增的时候把status字段设置为1         
			array('password','md5',3,'function') , // 对password字段在新增和编辑的时候使md5函数处理         
//			array('registerTime','',1,date('Y-m-d H:i:s') )// 对update_time字段在更新的时候写入当前时间戳     
	);
	
	protected $_validate = array(
			array('userName','require','请输入用户名！'), //默认情况下用正则进行验证
			array('userName','','帐号名称已经存在！',0,'unique'),// 在新增的时候验证name字段是否唯一
			array('password','require','请输入密码！'), //默认情况下用正则进行验证
			array('rpassword','require','请输入确认密码！'), //默认情况下用正则进行验证
			array('rpassword','password','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
			//array('password','checkPwd','密码格式不正确',0,'function'), // 自定义函数验证密码格式
	);
	
	
}