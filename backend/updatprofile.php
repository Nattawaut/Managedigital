<?php
include('./connec/connection.php');
	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
	$name_dormitory=$_POST['name_dormitory'];
	$room = ($_POST["room"]);
	$name=$_POST['name'];
	$lastname =$_POST["lastname"];
	$id_card =$_POST["id_card"];
	$tel =$_POST["tel"];
	$address = ($_POST["address"]);
	$contract = ($_POST["contract"]);
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO dormitory ( name_dormitory,name,lastname,id_card,tel,address,contract,room)
			 VALUES( '$name_dormitory', '$name','$lastname','$id_card','$tel','$address','$contract','$room')";
	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));
	//ปิดการเชื่อมต่อ database
	mysqli_close($con);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Register Succesfuly');";
	echo "window.location = 'Formadmin.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to register again');";
	echo "</script>";
}
?>