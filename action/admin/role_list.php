<?php

$rows = $db->findAll("select * from un_role");
include TPL_ADMIN."/role_list.tpl.php";
?>