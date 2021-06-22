<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
include('./connec/connection.php');
$json_data = array();
@$getdata = json_decode($contentdata);
$getsearch =$_GET['userid']; 

/* $sql = "SELECT * FROM room JOIN user ON room.memid = user.userid join meter1 on meter1.ID_meter1 = room.meter "; */
/* $sql = "SELECT * FROM  user WHERE username = '$getsearch' "; */
$sql = "SELECT room.room, meter1.volt, meter1.current, meter1.power,meter1.bath,room.datecash, room.statusroom , user.firstname, user.lastname FROM room JOIN meter1 ON room.meter = meter1.id_meter JOIN user ON room.memid = user.userid WHERE room.memid = '$getsearch'";
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
