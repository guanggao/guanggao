<?php
define('TPL_FRONT', ROOTDIR.'/tpl/front');
define('TPL_ADMIN',  ROOTDIR.'/tpl/admin');

include ROOTDIR."/common/function.php";
include ROOTDIR."/common/dbexecute.php";
include ROOTDIR."/config/config.php";
include ROOTDIR."/config/router.php";
include ROOTDIR."/class/mysql.class.php";


$db =  mysql::getHandle($db_config);

if(!$db) {
	exit("db not connection!");
}
$params = parseUrl($rewrite_config);

if(!empty($params))
	foreach($params as $k => $param)
{
	$_GET[$k] = $param;
}
