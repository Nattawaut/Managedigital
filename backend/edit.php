<?php
	include('conn.php');
	$id=$_GET['id'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
    $tel =$_POST["tel"];
	$email =$_POST["email"];
	$Username =$_POST["Username"];
	$Password = MD5($_POST["Password"]);
	mysqli_query($conn,"update `user` set firstname='$firstname',lastname='$lastname',tel='$tel',email='$email',Username='$Username',Password='$Password'
    where userid='$id'");
	header('location:index.php');
?>