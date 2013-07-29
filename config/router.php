<?php
$rewrite_config = array(
		//首页
		'/'=>array('app'=>'front','action'=>'index'),

		//管理后台
		'/admin/?'=>array('app'=>'admin','action'=>'index'),
		'/admin/header/?'=>array('app'=>'admin','action'=>'header'),
		'/admin/menu/?'=>array('app'=>'admin','action'=>'menu'),
		'/admin/main/?'=>array('app'=>'admin','action'=>'main'),
		'/admin/user/?'=>array('app'=>'admin','action'=>'user'),
		'/admin/user_modify/?'=>array('app'=>'admin','action'=>'user_modify'),
		'/admin/_modify_user/?'=>array('app'=>'admin','action'=>'_modify_user'),

		//网站主管理
		
);


//不需要登陆action
$nologin_action = array('login', 'reg', 'code');
