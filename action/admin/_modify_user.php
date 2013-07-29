<?php
$id = get("id");
$password = get("password");
$status = get("status");
$lockinfo = get("lockinfo");

$row = $db->find("select * from un_users where id='$id'");
if(empty($row)) {

	jumpurl(createUrl('admin','user',array(),array('errormsg'=>'没有发现该用户')));
	exit;
} else {

	$mrow = array();
	$mrow['password'] = $password;
	$mrow['status'] = $status;
	$mrow['lockinfo'] = $lockinfo;
	
	updateByRow($mrow, "un_users", "id='$id'");

	jumpurl(createUrl('admin','user',array(),array('correctmsg'=>'添加成功')));
	exit;
}

?>