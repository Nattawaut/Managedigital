<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
include('./connec/connection.php');
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
@$Username = $request->Username;
@$Password = $request->Password;
$Username =  $_POST['Username'];
$Password = md5($_POST['Password']);
$sql = "SELECT * FROM user WHERE Username = '$Username' AND Password = '$Password' ";


$result = mysqli_query($con, $sql);
$numrow = mysqli_num_rows($result);
if ($numrow > 0) {
    $arr = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $arr[] = $row;
    }

    echo json_encode($arr);
    //mysqli_close($con);
} else {
    echo json_encode(null);
}
