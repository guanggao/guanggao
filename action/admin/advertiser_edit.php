<?php

$id = get('id');
$row = $db->find("select * from un_advertiser where id='$id'");

if(empty($row)) {

	jumpurl(createUrl('admin','advertiser_list',array(),array('errormsg'=>'没有发现该广告主')));
	exit;
}

include TPL_ADMIN."/advertiser_edit.tpl.php";

?>