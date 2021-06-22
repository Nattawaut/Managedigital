<?php
include('./connec/connection.php'); 
$userid = $_REQUEST["id"];
$sql = "DELETE FROM user WHERE userid = '$userid'";
$sqlsqtroom = "UPDATE room SET statusroom = '0' WHERE memid = '$userid'";
$resultroom = mysqli_query($con, $sqlsqtroom) or die ("Error in query: $sqlsqtroom " . mysqli_error($con));
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('ลบข้อมูลแล้ว');";
	echo "window.location.href = 'table.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('ยืนยันการลบ');";
	echo "</script>";
}
