<?php



$rows = $db->findAll("select * from un_advert");


function getAdvertiserByid($id) {

  	global $db;
	$row = $db->find("select * from un_advertiser where id= '$id'");	
	return $row;
}
function getCateByid($id) {

  	global $db;
	$row = $db->find("select * from un_category where id= '$id'");	
	return $row;
}
include TPL_ADMIN."/advert_list.tpl.php";

?>