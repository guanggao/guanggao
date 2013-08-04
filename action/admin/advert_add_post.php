<?php

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
$iscommend = get("iscommend");


if(empty($name) || empty($advid)) {

	jumpurl(createUrl('admin','advert_add',array(),array('errormsg'=>'参数错误')));
	exit;

}

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
$mrow['createtime'] = date('Y-m-d H:i:s');

createByRow($mrow, 'un_advert');
jumpurl(createUrl('admin','advert_list',array(),array('correctmsg'=>'添加广告成功')));

?>