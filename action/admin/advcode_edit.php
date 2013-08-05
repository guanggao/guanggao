<?php

$adverts = $db->findAll("select * from un_advert where status=1");
$id = get("id");


$row = $db->find("select * from un_advcode where id='$id'");


if(empty($row)) {

	jumpurl(createUrl('admin','advcode_list',array(),array('errormsg'=>'没有发现该广告活动')));
	exit;
}
include TPL_ADMIN."/advcode_edit.tpl.php";

?>