<?php

$adverts = $db->findAll("select * from un_advert where status=1");

include TPL_ADMIN."/advcode_add.tpl.php";

?>