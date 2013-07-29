<?php

$errormsg = get('errormsg');
$correctmsg = get('correctmsg');

$rows = $db->findAll("select * from un_users");




include TPL_ADMIN."/user.tpl.php";

?>