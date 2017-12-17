<?php
return array(
	//'配置项'=>'配置值'
	//数据库信息
	'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'autohome',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'URL_MODEL'             =>  2,
	//配置项
	'MODULE_ALLOW_LIST'    =>    array('Home','Admin','User'),
    'DEFAULT_MODULE'       =>    'Home',
);