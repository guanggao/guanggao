<?php
$id = get("id");
$row = $db->find("select * from un_users where id='$id'");
if(empty($row)) {

	header("Location: ".createUrl('admin','user',array(),array('errormsg'=>'没有发现该用户')));
	exit;
}
include TPL_ADMIN."/user_modify.tpl.php";
?>