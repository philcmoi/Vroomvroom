<?php
	$dbhost = "localhost"; // host name
	$dbuser = "root";  // username
	$dbpass = "";  // password
	$db = "philippe";  // database name
	$con = mysqli_connect($dbhost, $dbuser, $dbpass , $db) or die($con);
// 	mysqli_set_charset($con, "utf8");
?>