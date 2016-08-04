<?php
$host = 'localhost';
$user = 'root';
$password = 'n831yhfh';
$db = 'new_db';

$connection = mysql_connect($host, $user, $password);
mysql_set_charset('utf8',$connection);
mysql_select_db($db, $connection);

if (!$connection || !mysql_select_db($db, $connection)) {
	exit(mysql_error());
}
?>