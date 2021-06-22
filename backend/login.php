<?php
session_start();
if (isset($_POST['Username'])) {
  include("./connec/connection.php");
  $Username = $_POST['Username'];
  $Password = md5($_POST['Password']);
  $sql = "SELECT * FROM Loginn Where Username='" . $Username . "' and Password='" . $Password . "' ";
  $result = mysqli_query($con, $sql);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $_SESSION["UserID"] = $row["ID"];
    $_SESSION["User"] = $row["Firstname"];
    if ($_SESSION[""] == "") {
      Header("Location:admin_page.php");
    }
  } else {
    echo "<script>";
    echo "alert(\" user หรือ  password ไม่ถูกต้อง\");";
    echo "window.history.back()";
    echo "</script>";
  }
} else {
  Header("Location:form.php");
}
