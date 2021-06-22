<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
include('./connec/connection.php');
require_once("./connec/connection.php");
$json_data = array();
@$getdata = json_decode($contentdata);
$getsearch =$_GET['userid']; 
$firstname =$_GET['firstname']; 
$lastname =$_GET['lastname'];
$tel =$_GET['tel'];
$img =$_GET['img'];
$email = $_GET['email'];
$Password = MD5($_GET["Password"]);
/* $locate_img ="C:\xampp\htdocs\Meterdigital\backend\img"; */
$sql = "UPDATE user SET firstname ='$firstname' ,  tel ='$tel' , lastname='$lastname' , email='$email', Password='$Password' WHERE userid ='$getsearch'";
if(mysqli_query($con, $sql)){
  echo "เพิ่มข้อมูลสำเร็จ";
} else {
  echo "เพิ่มข้อมูลไม่สำเร็จ $sql. " . mysqli_error($con);
}

// แปลง array เป็นรูปแบบ json string  
if(isset($json_data)){  
    $json= json_encode($json_data);    
    if(isset($_GET['callback']) && $_GET['callback']!=""){    
    echo $_GET['callback']."(".$json.");";        
    }else{    
    echo $json;    
    }    
}
?>