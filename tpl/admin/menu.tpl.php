<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MiniKan  Control Panel</title>
<style type="text/css">
/* common */
*{ word-wrap:break-word; outline:none; }
body{ width:159px; background:#F2F9FD url(/styles/images/bg_repx_h.gif) right top no-repeat; color:#666; font:12px "Lucida Grande", Verdana, Lucida, Helvetica, Arial, "ÀŒÃÂ" ,sans-serif; }
body, ul{ margin:0; padding:0; }
a{ color:#2366A8; text-decoration:none; }
	a:hover { text-decoration:underline; }
.menu{ position:relative; z-index:20; }
	.menu ul{ position:absolute; top:10px; right:-1px !important; right:-2px; list-style:none; width:150px; background:#F2F9FD url(/styles/images/bg_repx_h.gif) right -20px no-repeat; }
		.menu li{ margin:3px 0; *margin:1px 0; height:auto !important; height:24px; overflow:hidden; font-size:14px; font-weight:700; }
		.menu li a{ display:block; margin-right:2px; padding:3px 0 2px 30px; *padding:4px 0 2px 30px; border:1px solid #F2F9FD; background:url(/styles/images/bg_repno.gif) no-repeat 10px -40px; color:#666; }
			.menu li a:hover{ text-decoration:none; margin-right:0; border:1px solid #B5CFD9; border-right:1px solid #FFF; background:#FFF; }
		.menu li a.tabon{ text-decoration:none; margin-right:0; border:1px solid #B5CFD9; border-right:1px solid #FFF; background:#FFF url(/styles/images/bg_repy.gif) repeat-y; color:#2366A8; }
.footer{ position:absolute; z-index:10; right:13px; bottom:0; padding:5px 0; line-height:150%; background:url(/styles/images/bg_repx.gif) 0 -199px repeat-x; font-family:Arial, sans-serif; font-size:10px; -webkit-text-size-adjust: none; }
</style>
</head>
<body>
<div class="menu">
	<ul id="leftmenu">
<<<<<<< HEAD
		<li><a href="<?php echo createUrl('admin','main');?>" target="main" class="tabon">首页</a></li>
		<li><a href="<?php echo createUrl('admin','user_list');?>" target="main" class="tabon">网站主管理</a></li>
		<li><a href="<?php echo createUrl('admin','advertiser_list');?>" target="main" class="tabon">广告主管理</a></li>
		<li><a href="<?php echo createUrl('admin','advert_list');?>" target="main" class="tabon">广告管理</a></li>
		<li><a href="<?php echo createUrl('admin','advcode_list');?>" target="main" class="tabon">广告活动管理</a></li>
		<li><a href="<?php echo createUrl('admin','advapply_list');?>" target="main" class="tabon">广告申请管理</a></li>
		<li><a href="<?php echo createUrl('admin','role_list');?>" target="main" class="tabon">权限管理</a></li>
=======
		<li><a href="<?php echo createUrl('admin','main');?>" target="main" >首页</a></li>
		<li><a href="<?php echo createUrl('admin','user_list');?>" target="main" >网站主管理</a></li>
		<li><a href="<?php echo createUrl('admin','advertiser_list');?>" target="main" >广告主管理</a></li>
		<li><a href="<?php echo createUrl('admin','advert_list');?>" target="main" >广告管理</a></li>
		<li><a href="<?php echo createUrl('admin','role_list');?>" target="main" >权限管理</a></li>
>>>>>>> 5ce7f060a8a72fd21682c33fe9b4f35ea68bceb6
	</ul>
</div>

<!-- {Mini-Crud-Menu} -->
<div class="footer">Powered by Mini <br />&copy; 2001 - 2011 <a href="#" target="_blank">Mini</a> Inc.</div>
<script type="text/javascript">
	function cleartabon() {
		if(lastmenu) {
			lastmenu.className = '';
		}
		for(var i = 0; i < menus.length; i++) {
			var menu = menus[i];
			if(menu.className == 'tabon') {
				lastmenu = menu;
			}
		}
	}
	var menus = document.getElementById('leftmenu').getElementsByTagName('a');
	var lastmenu = '';
	for(var i = 0; i < menus.length; i++) {
		var menu = menus[i];
		menu.onclick = function() {
			setTimeout('cleartabon()', 1);
			this.className = 'tabon';
			this.blur();
		}
	}

	cleartabon();
</script>
