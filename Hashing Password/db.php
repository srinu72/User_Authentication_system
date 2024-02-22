<?php  
$sname = "localhost";
$uname = "root";
$password = "sri@123###12";
$db_name = "ua";
$conn = mysqli_connect($sname, $uname, $password, $db_name);
if (!$conn) {
	echo "Connection failed!";
	exit();
}