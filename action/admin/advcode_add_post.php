<?php
$advid = get("advid");
$name = get("name");
$type = get("type");
$width = get("width");
$height = get("height");
$content = get("content");


if(empty($name) || empty($advid)) {

	jumpurl(createUrl('admin','advcode_add',array(),array('errormsg'=>'参数错误')));
	exit;

}

$mrow = array();

$mrow['advid'] = $advid;
$mrow['name'] = $name;
$mrow['type'] = $type;
$mrow['size'] = $width.'X'.$height;
$mrow['content'] = $content;
$mrow['createtime'] = date('Y-m-d H:i:s');

createByRow($mrow, 'un_advcode');
jumpurl(createUrl('admin','advcode_list',array(),array('correctmsg'=>'添加成功')));

?>