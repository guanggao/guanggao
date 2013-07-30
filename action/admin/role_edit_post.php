<?php
$id = get("id");
$name = get("name");
$role = get("role");

if(empty($name) || empty($role)) {

	jumpurl(createUrl('admin','role_edit',array(),array('id'=>$id,'errormsg'=>'参数错误')));
	exit;

}
$row = $db->find("select * from un_role where id='$id'");
if(empty($row)) {

	jumpurl(createUrl('admin','user_role',array(),array('errormsg'=>'没有发现该权限组')));
	exit;
} else {

	$mrow = array();
	$mrow['name'] = $name;
	$mrow['action'] = implode(",", $role);
	
	updateByRow($mrow, "un_role", "id='$id'");

	jumpurl(createUrl('admin','role_list',array(),array('correctmsg'=>'修改成功')));
	exit;
}

?>