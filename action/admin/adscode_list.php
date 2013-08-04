<?php



$rows = $db->findAll("select * from un_adscode");




include TPL_ADMIN."/adscode_list.tpl.php";

?>