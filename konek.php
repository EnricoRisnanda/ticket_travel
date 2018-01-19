<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'ukk';

$konek = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if (mysql_error()) {
	echo "Can't Connect to Database";
}
?>