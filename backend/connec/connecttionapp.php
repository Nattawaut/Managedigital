<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATH, OPTIONS');
header('Access-Control-Allow-Headers: token, Con-Type');
header('Access-Control-Max-Age:86400');
header('Content-Length:0');
header('Content-Type:text/plain');
header("Content-type: application/json;charset=utf-8");
$con= mysqli_connect("localhost","root","","projectmeter") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' "); 
?>
