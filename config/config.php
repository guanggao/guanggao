<?php
$db_config = array(
		'host'=>'127.0.0.1',
		'user'=>'root',
		'pass'=>'',
		'dbname'=>'guanggao',
		'charset'=>'utf8'
);


$rewrite_config = array(
		//首页
		'/'=>array('action'=>'index'),

		//管理后台
		'/admin/?'=>array('app'=>'admin','action'=>'index'),
		'/admin/header/?'=>array('app'=>'admin','action'=>'header'),
		'/admin/menu/?'=>array('app'=>'admin','action'=>'menu'),
		'/admin/main/?'=>array('app'=>'admin','action'=>'main')，

		//网站主管理
		
);


//不需要登陆action
$nologin_action = array('login', 'reg', 'code');
