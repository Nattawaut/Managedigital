<?php
include('./connec/connection.php');
print_r($_REQUEST);
$id = $_GET['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$tel = $_POST["tel"];
$email = $_POST["email"];
$Username = $_POST["Username"];
$datecash = $_POST["datecash"];
$statusmember = $_POST["statusmember"];
$Password = MD5($_POST["Password"]);
$sqla = "UPDATE room set statuscash = '$statusmember' , datecash ='$datecash' where room = '$Username'";
$sqlmember = "UPDATE user set firstname='$firstname',lastname='$lastname',tel='$tel',email='$email',Username='$Username',Password='$Password' where userid='$id'";
mysqli_query($con, $sqla);
mysqli_query($con, $sqlmember);
header('location:Formmember.php');
