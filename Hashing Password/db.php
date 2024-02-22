<?php  
$sname = "localhost";
$uname = "root";
$password = "your password";
$db_name = "ua";
$conn = mysqli_connect($sname, $uname, $password, $db_name);
if (!$conn) {
	echo "Connection failed!";
	exit();
}
