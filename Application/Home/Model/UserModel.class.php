<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model
{
	protected $_validate = array(
		array('username','require','验证码必须！'), //默认情况下用正则进行验证     
		array('username','','帐号名称已经存在！',1,'unique',3), // 在新增的时候验证name字段是否唯一     
	);
}