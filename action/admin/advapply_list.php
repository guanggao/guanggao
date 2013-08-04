<?php


$status = 0;
$rows = $db->findAll("select * from un_advapply where status=$status");




include TPL_ADMIN."/advapply_list.tpl.php";

?>