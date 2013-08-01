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

		'/admin/role_list/?'=>array('app'=>'admin','action'=>'role_list'),
		'/admin/role_add/?'=>array('app'=>'admin','action'=>'role_add'),
		'/admin/role_add_post/?'=>array('app'=>'admin','action'=>'role_add_post'),
		'/admin/role_edit/?'=>array('app'=>'admin','action'=>'role_edit'),
		'/admin/role_edit_post/?'=>array('app'=>'admin','action'=>'role_edit_post'),

		'/admin/admin_list/?'=>array('app'=>'admin','action'=>'admin_list'),
		'/admin/admin_edit/?'=>array('app'=>'admin','action'=>'admin_edit'),
		'/admin/admin_edit_post/?'=>array('app'=>'admin','action'=>'admin_edit_post'),
		//网站主管理
		
);


//不需要登陆action
$nologin_action = array('login', 'reg');

$role_model = array('user'=>'网站主模块','role'=>'权限模块', 'admin'=>'管理员模块','del'=>'删除模块');