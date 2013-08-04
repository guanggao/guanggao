<?php 
$mail = get('email');
$sql = "select count(*) as num  from `un_users` where `email`='$mail'";
$row = $db->find($sql);

if (empty($row['num'])){
	echo  1;
}else{
	echo 0;
}
?>