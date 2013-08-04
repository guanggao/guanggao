<?php

$advid = get("advid");
$name = get("name");
$group = get("group");
$cate = get("cate");
$type = get("type");
$info = get("info");
$price = get("price");
$viewprice = get("viewprice");
$isaudit = get("isaudit");
$iscommend = get("iscommend");


if(empty($name) || empty($advid)) {

	jumpurl(createUrl('admin','adscode_add',array(),array('errormsg'=>'参数错误')));
	exit;

}

$mrow = array();

$mrow['advid'] = $advid;
$mrow['name'] = $name;
$mrow['group'] = $group;
$mrow['cate'] = $cate;
$mrow['type'] = $type;
$mrow['info'] = $info;
$mrow['viewprice'] = $viewprice;
$mrow['price'] = $price;
$mrow['expire'] = $expire;
$mrow['isaudit'] = $isaudit;
$mrow['iscommend'] = $iscommend;
$mrow['createtime'] = date('Y-m-d H:i:s');

createByRow($mrow, 'un_adscode');
jumpurl(createUrl('admin','adscode_list',array(),array('correctmsg'=>'添加权限组成功')));

?>