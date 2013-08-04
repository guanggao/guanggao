<?php
$id = get("id");
$advid = get("advid");
$name = get("name");
$logo = get("logo");
$cate = (int) get("cate");
$type = get("type");
$info = get("info");
$price = get("price");
$viewprice = get("viewprice");
$expire = get("expire");
$isaudit = get("isaudit");
$expire = get("expire");
$iscommend = get("iscommend");
$status = get("status");

if(empty($name) || empty($advid)) {

	jumpurl(createUrl('admin','advert_add',array(),array('errormsg'=>'参数错误')));
	exit;

}
$row = $db->find("select * from un_advert where id='$id'");
if(empty($row)) {

	jumpurl(createUrl('admin','advertiser_list',array(),array('errormsg'=>'没有发现广告')));
	exit;
}  else {

	$mrow = array();

	$mrow['advid'] = $advid;
	$mrow['name'] = $name;
	$mrow['logo'] = $logo;
	$mrow['cate'] = $cate;
	$mrow['type'] = $type;
	$mrow['info'] = $info;
	$mrow['viewprice'] = $viewprice;
	$mrow['price'] = $price;
	$mrow['expire'] = $expire;
	$mrow['isaudit'] = $isaudit;
	$mrow['iscommend'] = $iscommend;
	$mrow['status'] = $status;
	$mrow['updatetime'] = date('Y-m-d H:i:s');

	updateByRow($mrow, 'un_advert', "id='$id'");
	jumpurl(createUrl('admin','advert_list',array(),array('correctmsg'=>'修改广告成功')));
}
?>