<?php
// 	$dbhost = "localhost"; // host name
// 	$dbuser = "u909244959_jUwI2";  // username
// 	$dbpass = "l@99339RWFH5465";  // password
// 	$db = "u909244959_A4ttH";  // database name

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db ="philippe";
	
$con = mysqli_connect($dbhost, $dbuser, $dbpass , $db) or die($con);
	
// 	mysqli_set_charset($con, "utf8");
?>