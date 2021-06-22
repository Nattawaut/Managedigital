<?php session_start(); 
include('./connec/connection.php');
  $ID = $_SESSION['UserID'];
  $User = $_SESSION['User'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="logout.php">
	<h1>Admin Page</h1>
	<h3> สวัสดี คุณ <?php echo $User; ?></h3>
	<input type="submit" value="ออกจากระบบ">
	</form>
</body>
</html>