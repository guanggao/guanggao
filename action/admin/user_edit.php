<?php
$id = get("id");
$row = $db->find("select * from un_users where id='$id'");
if(empty($row)) {

	jumpurl(createUrl('admin','user_list',array(),array('errormsg'=>'没有发现该用户')));
	exit;
}
include TPL_ADMIN."/user_edit.tpl.php";
?>