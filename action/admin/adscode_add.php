<?php

$adverts = $db->findAll("select * from un_advert where status=1");

include TPL_ADMIN."/adscode_add.tpl.php";

?>