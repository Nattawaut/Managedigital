<?php
include("api.php");
include('./connec/connection.php');
//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
$date = $_POST["date"];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$tel = $_POST["tel"];
$email = $_POST["email"];
$roomno = $_POST["roomno"];
$Username = $_POST["Username"];
$Password = MD5($_POST["Password"]);
$check = "SELECT * FROM user WHERE firstname = '$firstname'";
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
//เพิ่มเข้าไปในฐานข้อมูล
if ($error == "success") {
	$sql = "INSERT INTO user (date,firstname,lastname,tel,email,Username,Password)
			VALUES('$date', '$firstname', '$lastname','$tel','$email','$Username','$Password')";
	$result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));
	$sqla = "UPDATE room set statusroom = '1' where room = '$roomno'";


	if ($result3 = mysqli_query($con, $sqla) or die("Error in query: $sqla " . mysqli_error($con))) {
		$result2 = "SELECT * FROM user ORDER BY `user`.`userid` DESC LIMIT 1";

		$resultaa = mysqli_query($con, $result2) or die(mysqli_error($con));
		$row =  mysqli_fetch_array($resultaa);
		$userid = $row['userid'];
		$sqlz = "UPDATE room set memid = '$userid' where room = '$roomno' ";
		$result3 = mysqli_query($con, $sqlz) or die("Error in query: $sqlz " . mysqli_error($con));

		$line = new Line_Notify('');
                        $line->setToken('zzvOuUq6wCrgZXXGJ5wEFQVg1ZvzWHqW4PFVo2TvVVP');
                        $line->addMsg('ยืนยันการชำระเงิน');
                        $line->addMsg("เลขที่ใบเสร็จ : $firstname");
                        $line->addMsg("เลขที่มิเตอร์ $lastname");
                        $line->addMsg("ชื่อ-นามสกุล : $tel");
                        $line->addMsg("จำนวนเงินที่ชำระ : $email");
                        // $_SESSION["Success"] = "Success";

                        if ($line->sendNotify()) {
                            echo '<script>
                            swal({
                                position: "top-end",
                                icon: "success",
                                type: "success",
                                title: "รับชำระเงินสำเร็จ",
                                showConfirmButton: true,
                            })
                        </script>';
                        } else {
                            echo "<pre>";
                            print_r($line->getError());
                            echo "</pre>";
                        }
	}
	echo "<script>";
	echo "alert('บันทึกข้อมูลแล้ว');";
	echo "window.history.back();";
	echo "</script>";
	mysqli_close($con);
	header("Formmember.php");
}
