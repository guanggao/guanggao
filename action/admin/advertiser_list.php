<?php



$rows = $db->findAll("select * from un_advertiser");




include TPL_ADMIN."/advertiser_list.tpl.php";

?>