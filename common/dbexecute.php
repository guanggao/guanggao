<?php 
function bindValues($sql, $params)
{
	if(! empty($params))
		foreach($params as $name => $value) {
		if($name[0] !== ':')
			$name = ':' . $name;
		$sql = bindValue($sql ,$name ,$value);
	}
	return $sql;

}


function bindValue($sql, $name, $value)
{
	$value=addslashes($value);
	return $sql = str_replace($name ,"'" . $value . "'" ,$sql);

}
function createByRow($row, $table)
{
	global $db;
	$PARAM_PREFIX = ':dbbind';
	$fields = array();
	$values = array();
	$placeholders = array();
	$i = 200;
	foreach($row as $name => $value) {
		$fields[] = $name;
		$placeholders[] = $PARAM_PREFIX . $i;
		$values[$PARAM_PREFIX . $i] = $value;
		$i ++;
	}

	$sql = "INSERT INTO {$table} (" . implode(', ' ,$fields) . ') VALUES (' . implode(', ' ,$placeholders) . ')';

	$sql = bindValues($sql ,$values);
	$db->query($sql);
	return $sql;

}
function updateByRow($row, $table, $where='')
{

	global $db;
	$PARAM_PREFIX = ':dbbind';
	$fields = array();
	$values = array();
	$i = 200;
	foreach($row as $name => $value) {
		$fields[] = $name . '=' .$PARAM_PREFIX . $i;
		$values[$PARAM_PREFIX . $i] = $value;
		$i++;

	}
	$where = empty($where) ? '': 'where '.$where;
	$sql = "UPDATE {$table} SET " . implode(', ' ,$fields) ." ".$where;
	$sql = bindValues($sql ,$values);

	$db->query($sql);

}