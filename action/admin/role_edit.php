<?php

$id = get("id");
$row = $db->find("select * from un_role where id='$id'");
if(empty($row)) {

	jumpurl(createUrl('admin','role_list',array(),array('errormsg'=>'没有发现该权限组')));
	exit;
}
include TPL_ADMIN."/role_edit.tpl.php";
?>
