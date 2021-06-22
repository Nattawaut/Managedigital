<?php
header('Content-Type: application/json');
include('./connec/connection.php');
$sqlQuery = "";
$check = "SELECT MAX(power) AS mpw ,DATE_FORMAT(date,'%Y-%m-%d') As MyDate FROM meter1 GROUP BY MyDate";
$result = mysqli_query($con, $check) or die(mysqli_error($con));
// $num = mysqli_num_rows($result);
$data = array();
foreach ($result as $row) {
    $data[] = $row;
}
mysqli_close($con);
echo json_encode($data);
