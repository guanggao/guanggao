<?php
$id = get("id");
$advid = get("advid");
$name = get("name");
$type = get("type");

$size = get("size");
$content = get("content");
$status = get("status");

if(empty($name) || empty($advid)) {

	jumpurl(createUrl('admin','advcode_edit',array(),array('errormsg'=>'参数错误')));
	exit;

}
$row = $db->find("select * from un_advcode where id='$id'");
if(empty($row)) {

	jumpurl(createUrl('admin','advcode_list',array(),array('errormsg'=>'没有发现广告活动')));
	exit;
}  else {
	$mrow = array();

	$mrow['advid'] = $advid;
	$mrow['name'] = $name;
	$mrow['type'] = $type;
	$mrow['size'] = $size;
	$mrow['content'] = $content;
	$mrow['updatetime'] = date('Y-m-d H:i:s');
	$mrow['status'] = $status;

	updateByRow($mrow, 'un_advcode', "id='$id'");
	jumpurl(createUrl('admin','advcode_list',array(),array('correctmsg'=>'修改成功')));
}
?>