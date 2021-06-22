<?php
session_start();


date_default_timezone_set('Asia/Bangkok');
include('./connec/connection.php');
$query = mysqli_query($con, "SELECT * FROM room JOIN user ON room.memid = user.userid");
if(isset($_REQUEST['id'])){
    $room = $_REQUEST['id'];
    $query = mysqli_query($con, "SELECT * FROM room JOIN user ON room.memid = user.userid where room.room = '$room'");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container"> <br>
        <form action="" method="post" id="myForm">
            <div class="card">
                <!-- <div class="card-header">
                    รายระเอียดการชำเงินของวันที่ <?php echo $ddd . " เดือน " . $mouththai . " ปี " . $yyy ?>
                </div> -->
                <div class="card-body">
                    <?php ob_start(); ?>
                    <table class="table" style="border: 1px solid gray; width:100%;">
                        <thead style="border-bottom: 1px solid gray;text-align:center;">
                            <tr>
                                <th style="border-bottom: 1px solid gray; border-right:1px solid gray;background-color:gray;color:white; ">เลขที่ใบเสร็จ</th>
                                <th style="border-bottom: 1px solid gray; border-right:1px solid gray;background-color:gray;color:white; ">รหัสสมาชิก</th>
                                <th style="border-bottom: 1px solid gray; border-right:1px solid gray;background-color:gray;color:white; ">ชื่อ-สกุล</th>
                                <th style="border-bottom: 1px solid gray; border-right:1px solid gray;background-color:gray;color:white; ">ประเภทการชำระเงิน</th>
                                <th style="border-bottom: 1px solid gray; border-right:1px solid gray;background-color:gray;color:white; ">สาย</th>
                                <th style="border-bottom: 1px solid gray; border-right:1px solid gray;background-color:gray;color:white; ">จำนวนเงิน</th>
                                <th style="border-bottom: 1px solid gray; border-right:1px solid gray;background-color:gray;color:white; ">วันเวลาที่ออกใบเสร็จ</th>
                                <th style="border-bottom: 1px solid gray;background-color:gray;color:white; ">ผู้รับเงิน</th>
                            </tr>
                        </thead>
                        <?php
                while ($row = mysqli_fetch_array($query)) {
                ?>
                                <tr>
                                    <td><?php echo $row['room']; ?></td>
                                    <td><?php echo $row['firstname']; ?>&nbsp;<?php echo $row['lastname']; ?></td>
                                    <td><?php echo $row['tel']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php if ($row['statuscash'] == 1) {
                          echo "ชำระเงินแล้ว";
                        } else {
                          echo "ค้างชำระ";
                        } ?></td>
                                    <td><?php echo $row['datecash']; ?></td>
                                    <td>
                                        <a href="table.php?userid=<?php echo $row['room']; ?>" onclick="window.print()"
                                            class="btn btn-info"><i class="fas fa-file-invoice"></i></a>
                                        <!--ดูข้อมูล-->
                                        <!--   <button type="button" class="btn btn-primary btn-xs viewtbtn" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">
                      <i class="fas fa-eye" data-toggle="tooltip" title="View"></i></button> -->
                                        <!--แก้ไขข้อมูล-->
                                        <!--  <a href="editmem.php?id=<?php echo $row['userid']; ?>" class="btn btn-warning btn-xs" target="_blank">
                            <i class="fas fa-pencil-alt"></i>
                          </a> -->
                                        <!--ส่งแจ้งเตือนชำระเงิน-->
                                        <!--  <a href="table.php?room=<?php echo $row["room"]; ?>&firstname=<?php echo $row["firstname"]; ?>&lastname=<?php echo $row["lastname"]; ?>&tel=<?php echo $row["tel"]; ?>&email=<?php echo $row["email"]; ?>" class="btn btn-xs btn-success">
                        <i class="far fa-paper-plane"></i></a> -->
                                        <!--ลบข้อมูล-->
                                        <!-- <a href="deletemem.php?id=<?php echo $row['userid']; ?>" class="btn btn-danger btn-xs"><i class="far fa-trash-alt"></i> -->
                                    </td>
                                </tr>
                                <?php
                }
                ?>
                    </table>
                </div>
        </form>
    </div>
    </div>
</body>

<script>
    function myreset() {
        document.getElementById("myForm").reset();
    }

    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();
    if (dd < 10) {
        dd = '0' + dd
    }
    if (mm < 10) {
        mm = '0' + mm
    }
    today = yyyy + '-' + mm + '-' + dd;
    document.getElementById("datestart").setAttribute("max", today);
    document.getElementById("dateend").setAttribute("max", today);

    function testdate() {
        var setdatestert = document.getElementById("datestart").value;
        console.log(setdatestert);
        document.getElementById("dateend").setAttribute("Min", setdatestert);
    }
</script>

</html>