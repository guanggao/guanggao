<?php

$advertisers = $db->findAll("select * from un_advertiser where status=1");
$ads_cates = $db->findAll("select * from un_category where type=1 and pid=0 and status=1");

print_r($ads_cates);
include TPL_ADMIN."/advert_add.tpl.php";

?>