<?php
include("./connec/connection.php");
$volt = $_GET['v'];
$current = $_GET['i'];
$power = $_GET['p'];
//$e = $_GET['e'];
$bath = $_GET['b'];
//$FT = $_GET['FT'];
date_default_timezone_set('asia/bangkok');
$date = date("Y-m-d\TH:i:sP");
$sql = "INSERT INTO meter2 (volt,current,power,bath,date)
VALUES ('$volt','$current','$power','$bath','$date')";

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();

?>