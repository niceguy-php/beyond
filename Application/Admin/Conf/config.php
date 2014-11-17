<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'    => 'mysql',
	
	/*'DB_HOST'   => '192.168.2.200',
	'DB_NAME'   => 'MONITOR', // 数据库名
	'DB_USER'   => 'client', // 用户名
	'DB_PWD'    => 'watchmen', // 密码
	*/
	'DB_HOST'   => 'localhost',
	'DB_NAME'   => 'monitor', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => '', // 密码
	
		
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => '', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集
	
	//报表引擎配置
	'ENGINE_PROTOCOL'=>'http://',
	'ENGINE_IP'  => '192.168.2.225',
	'ENGINE_PORT'=>'7086',
	'ENGINE_PATH' => '/report',
	'ENGINE_URI' =>'http://192.168.2.225:7777/report',
		

	'DB_REPORT'=>array(
		'db_type'=>'mysql',
		'db_user'=>'root',
		'db_pwd'=>'watchmen',
		'db_host'=>'192.168.2.225',
		'db_port'=>'3306',
		'db_name'=>'watchmen',
		'DB_CHARSET'=> 'utf8', // 字符集
	),
		
	//SESSION配置
	//'SESSION_TYPE'=>'Db',
	'SESSION_AUTO_START' => true,
		
	//安全配置对xss进行过滤	
	'VAR_FILTERS'=>'htmlspecialchars',
		
);