<?php



$rows = $db->findAll("select * from un_advcode");




include TPL_ADMIN."/advcode_list.tpl.php";

?>