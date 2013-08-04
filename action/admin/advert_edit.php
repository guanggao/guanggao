<?php
$id = get("id");


$row = $db->find("select * from un_advert where id='$id'");


if(empty($row)) {

	jumpurl(createUrl('admin','advert_list',array(),array('errormsg'=>'没有发现该广告')));
	exit;
}
$ads_cates = $db->findAll("select * from un_category where type=1 and pid=0 and status=1");
$advertisers = $db->findAll("select * from un_advertiser where status=1");

include TPL_ADMIN."/advert_edit.tpl.php";

?>

