<?php
include('./connec/connection.php');
	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
	$room = $_POST["room"];
	$name_dormitory=$_POST['name_dormitory'];
	$name=$_POST['name'];
	$lastname =$_POST["lastname"];
	$id_card =$_POST["id_card"];
	$tel =$_POST["tel"];
	$address = ($_POST["address"]);
	$contract = ($_POST["contract"]);
	$check = "SELECT * FROM dormitory WHERE name_dormitory = '$name_dormitory'";
	$result = mysqli_query($con, $check) or die(mysqli_error($con));
	$num = mysqli_num_rows($result);
	$error = "success";
if ($num >= 1) {
	$error = "error";
	echo "<script>";
	echo "alert(' ข้อมูลซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
	echo "window.history.back();";
	echo "</script>";
}
	//เพิ่มข้อมูลผู้ใช้
	if ($error == "success") {
	$sql = "INSERT INTO dormitory ( name_dormitory,name,lastname,id_card,tel,address,contract)
			 VALUES( '$name_dormitory', '$name','$lastname','$id_card','$tel','$address','$contract')";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
		//เพิ่มห้องพัก
	$sql2 = "INSERT INTO room(room)
			 VALUES('$room')";
	$result2 = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error($con));

	echo "<script>";
	echo "alert('บันทึกข้อมูลแล้ว');";
	echo "window.history.back();";
	echo "</script>";
	mysqli_close($con);
	header("Formadmin.php");
}
