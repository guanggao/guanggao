<?php



$rows = $db->findAll("select * from un_ads");




include TPL_ADMIN."/advert_list.tpl.php";

?>