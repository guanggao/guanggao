<?php



$rows = $db->findAll("select * from un_advert");




include TPL_ADMIN."/advert_list.tpl.php";

?>