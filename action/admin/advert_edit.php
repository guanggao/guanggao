<?php
$id = get("id");


$row = $db->find("select * from un_advert where id='$id'");


if(empty($row)) {

	jumpurl(createUrl('admin','advert_list',array(),array('errormsg'=>'没有发现该广告')));
	exit;
}
$ads_cates = $db->findAll("select * from un_category ");
$advertisers = $db->findAll("select * from un_advertiser");

include TPL_ADMIN."/advert_edit.tpl.php";

?>

