<?php

$name = get("name");
$role = get("role");


if(empty($name) || empty($role)) {

	jumpurl(createUrl('admin','role_add',array(),array('errormsg'=>'参数错误')));
	exit;

}

$mrow = array();

$mrow['name'] = $name;
$mrow['action'] = implode(",", $role);

createByRow($mrow, 'un_role');
jumpurl(createUrl('admin','role_list',array(),array('correctmsg'=>'添加权限组成功')));
?>