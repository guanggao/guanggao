<?php 
$email = get('email');
$passwd = get('password');
$confirm_pwd = get('confirm_password');
$qq = get('qq');

if (empty($email)){
	$msg = '���䲻��Ϊ��';
	jumpurl('/site/reg?errormsg='.urlencode($msg));
}elseif($passwd != $confirm_pwd){
	$msg = '���벻һ��';
	jumpurl('/site/reg?errormsg='.urlencode($msg));
}


$row = array();
$row['email'] = $email;
$row['password'] = $passwd;
$row['regtime'] = date('Y-m-d H:i:s');
$row['regip'] = getClientIp();
$row['logintime'] = $row['regtime'];
$row['loginip'] = $row['regip'];
$row['loginnum'] = 1;

createByRow($row, 'un_users');
jumpurl('/site/home');
?>