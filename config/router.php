<?php
$rewrite_config = array(
		//网站主前台
		'/'=>array('app'=>'front','action'=>'index'),
		'/site/reg'=>array('app'=>'front','action'=>'reg'),
		'/site/reg_post/?'=>array('app'=>'front','action'=>'reg_post'),
		'/site/login_post/?'=>array('app'=>'front','action'=>'login_post'),
		'/site/home/?'=>array('app'=>'front','action'=>'home'),
		'/site/profile/?'=>array('app'=>'front','action'=>'profile'),
		'/site/media/?'=>array('app'=>'front','action'=>'media'),
		'/site/apply/?'=>array('app'=>'front','action'=>'apply'),
		'/site/advert/?'=>array('app'=>'front','action'=>'advert'),
		'/site/report/?'=>array('app'=>'front','action'=>'report'),
		'/site/account/?'=>array('app'=>'front','action'=>'account'),
		'/site/check/?'=>array('app'=>'front','action'=>'check'),
		//管理后台
		'/admin/?'=>array('app'=>'admin','action'=>'index'),
		'/admin/header/?'=>array('app'=>'admin','action'=>'header'),
		'/admin/menu/?'=>array('app'=>'admin','action'=>'menu'),
		'/admin/main/?'=>array('app'=>'admin','action'=>'main'),
		//网站主管理
		'/admin/user_list/?'=>array('app'=>'admin','action'=>'user_list'),
		'/admin/user_edit/?'=>array('app'=>'admin','action'=>'user_edit'),
		'/admin/user_edit_post/?'=>array('app'=>'admin','action'=>'user_edit_post'),
		//网站
		'/admin/site_list/?'=>array('app'=>'admin','action'=>'site_list'),
		'/admin/site_edit/?'=>array('app'=>'admin','action'=>'site_edit'),
		'/admin/site_edit_post/?'=>array('app'=>'admin','action'=>'site_edit_post'),
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
		'/admin/advertiser_edit_post/?'=>array('app'=>'admin','action'=>'advertiser_edit_post'),
		//广告
		'/admin/advert_list/?'=>array('app'=>'admin','action'=>'advert_list'),
		'/admin/advert_add/?'=>array('app'=>'admin','action'=>'advert_add'),
		'/admin/advert_add_post/?'=>array('app'=>'admin','action'=>'advert_add_post'),
		'/admin/advert_edit/?'=>array('app'=>'admin','action'=>'advert_edit'),
		'/admin/advert_edit_post/?'=>array('app'=>'admin','action'=>'advert_edit_post'),
		//广告活动
		'/admin/advcode_list/?'=>array('app'=>'admin','action'=>'advcode_list'),
		'/admin/advcode_add/?'=>array('app'=>'admin','action'=>'advcode_add'),
		'/admin/advcode_add_post/?'=>array('app'=>'admin','action'=>'advcode_add_post'),
		'/admin/advcode_edit/?'=>array('app'=>'admin','action'=>'advcode_edit'),
		'/admin/advcode_edit_post/?'=>array('app'=>'admin','action'=>'advcode_edit_post'),
		//广告申请
		'/admin/advapply_list/?'=>array('app'=>'admin','action'=>'advapply_list'),
		'/admin/advapply_edit/?'=>array('app'=>'admin','action'=>'advapply_edit'),
		'/admin/advapply_edit_post/?'=>array('app'=>'admin','action'=>'advapply_edit_post'),
		//管理员
		'/admin/admin_list/?'=>array('app'=>'admin','action'=>'admin_list'),
		'/admin/admin_edit/?'=>array('app'=>'admin','action'=>'admin_edit'),
		'/admin/admin_edit_post/?'=>array('app'=>'admin','action'=>'admin_edit_post'),
		//新闻	
		'/admin/news/?'=>array('app'=>'admin','action'=>'news'),
);


//不需要登陆action
$nologin_action = array('login', 'reg');

$role_model = array('user'=>'网站主模块','role'=>'权限模块', 'admin'=>'管理员模块','del'=>'删除模块');
$ads_types = array(1=>'CPC',2=>'CPA',3=>'CPS',4=>'CPM');
$advcode_types = array(1=>'图片',2=>'文字');
$news_type = array(1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5');

