<?php
$rewrite_config = array(
		//首页
		'/'=>array('app'=>'front','action'=>'index'),

		//管理后台
		'/admin/?'=>array('app'=>'admin','action'=>'index'),
		'/admin/header/?'=>array('app'=>'admin','action'=>'header'),
		'/admin/menu/?'=>array('app'=>'admin','action'=>'menu'),
		'/admin/main/?'=>array('app'=>'admin','action'=>'main'),
		//用户
		'/admin/user_list/?'=>array('app'=>'admin','action'=>'user_list'),
		'/admin/user_edit/?'=>array('app'=>'admin','action'=>'user_edit'),
		'/admin/user_edit_post/?'=>array('app'=>'admin','action'=>'user_edit_post'),
		//权限
		'/admin/role_list/?'=>array('app'=>'admin','action'=>'role_list'),
		'/admin/role_add/?'=>array('app'=>'admin','action'=>'role_add'),
		'/admin/role_add_post/?'=>array('app'=>'admin','action'=>'role_add_post'),
		'/admin/role_edit/?'=>array('app'=>'admin','action'=>'role_edit'),
		'/admin/role_edit_post/?'=>array('app'=>'admin','action'=>'role_edit_post'),
		//广告主
		'/admin/advertiser_list/?'=>array('app'=>'admin','action'=>'advertiser_list'),
		'/admin/advertiser_add/?'=>array('app'=>'admin','action'=>'advertiser_add'),
		'/admin/advertiser_add_post/?'=>array('app'=>'admin','action'=>'advertiser_add_post'),
		'/admin/advertiser_edit/?'=>array('app'=>'admin','action'=>'advertiser_edit'),
		//广告
		'/admin/advert_list/?'=>array('app'=>'admin','action'=>'advert_list'),
		'/admin/advert_add/?'=>array('app'=>'admin','action'=>'advert_add'),
		'/admin/advert_add_post/?'=>array('app'=>'admin','action'=>'advert_add_post'),
		'/admin/advert_edit/?'=>array('app'=>'admin','action'=>'advert_edit'),
		//广告活动
		'/admin/adscode_list/?'=>array('app'=>'admin','action'=>'adscode_list'),
		'/admin/adscode_add/?'=>array('app'=>'admin','action'=>'adscode_add'),
		'/admin/adscode_add_post/?'=>array('app'=>'admin','action'=>'adscode_add_post'),
		'/admin/adscode_edit/?'=>array('app'=>'admin','action'=>'adscode_edit'),
		//管理员
		'/admin/admin_list/?'=>array('app'=>'admin','action'=>'admin_list'),
		'/admin/admin_edit/?'=>array('app'=>'admin','action'=>'admin_edit'),
		'/admin/admin_edit_post/?'=>array('app'=>'admin','action'=>'admin_edit_post'),
		//网站主管理
		
);


//不需要登陆action
$nologin_action = array('login', 'reg');

$role_model = array('user'=>'网站主模块','role'=>'权限模块', 'admin'=>'管理员模块','del'=>'删除模块');
$ads_types = array(1=>'CPC',2=>'CPA',3=>'CPS',4=>'CPM');