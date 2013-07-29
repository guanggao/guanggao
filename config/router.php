<?php
$rewrite_config = array(
		//首页
		'/'=>array('app'=>'front','action'=>'index'),

		//管理后台
		'/admin/?'=>array('app'=>'admin','action'=>'index'),
		'/admin/header/?'=>array('app'=>'admin','action'=>'header'),
		'/admin/menu/?'=>array('app'=>'admin','action'=>'menu'),
		'/admin/main/?'=>array('app'=>'admin','action'=>'main'),
		'/admin/user_list/?'=>array('app'=>'admin','action'=>'user_list'),
		'/admin/user_edit/?'=>array('app'=>'admin','action'=>'user_edit'),
		'/admin/user_edit_post/?'=>array('app'=>'admin','action'=>'user_edit_post'),

		//网站主管理
		
);


//不需要登陆action
$nologin_action = array('login', 'reg');

$role_model = array('user_list','user_edit', 'user_edit_post');