<?php

$name = get("name");
$url = get("url");
$linkman = get("linkman");
$contact = get("contact");
$address = get("address");
$info = get("info");


if(empty($name)) {

	jumpurl(createUrl('admin','advertiser_add',array(),array('errormsg'=>'参数错误')));
	exit;

}

$row = array();

$row['name'] = $name;
$row['url'] = $url;
$row['linkman'] = $linkman;
$row['contact'] = $contact;
$row['address'] = $address;
$row['info'] = $info;
$row['createtime'] = date('Y-m-d H:i:s');

createByRow($row, 'un_advertiser');
jumpurl(createUrl('admin','advertiser_list',array(),array('correctmsg'=>'添加成功')));

?>