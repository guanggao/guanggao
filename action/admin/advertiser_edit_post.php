<?php
$id = get("id");
$name = get("name");
$url = get("url");
$linkman = get("linkman");
$contact = get("contact");
$address = get("address");
$info = get("info");
$status = get("status");


if(empty($name)) {

	jumpurl(createUrl('admin','advertiser_edit',array(),array('errormsg'=>'参数错误')));
	exit;

}
$row = $db->find("select * from un_advertiser where id='$id'");
if(empty($row)) {

	jumpurl(createUrl('admin','advertiser_list',array(),array('errormsg'=>'没有发现广告主')));
	exit;
}  else {
	$mrow = array();

	$mrow['name'] = $name;
	$mrow['url'] = $url;
	$mrow['linkman'] = $linkman;
	$mrow['contact'] = $contact;
	$mrow['address'] = $address;
	$mrow['info'] = $info;
	$mrow['status'] = $status;
	$mrow['createtime'] = date('Y-m-d H:i:s');
	$mrow['updatetime'] = date('Y-m-d H:i:s');

	updateByRow($mrow, "un_advertiser", "id='$id'");
	jumpurl(createUrl('admin','advertiser_list',array(),array('correctmsg'=>'修改成功')));
}
?>