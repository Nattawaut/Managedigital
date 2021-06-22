<?php $menu = "Manage_room"; ?>
<?php include("api.php");
include("./component/header.php");
include('./connec/connection.php');
$query = mysqli_query($con, "SELECT * from room left join user on room.memid = user.userid");
?>
<?php
if (isset($_REQUEST['saveroom'])) {
    // print_r($_REQUEST);
    $roomno = $_REQUEST['txt_roomno'];
    $check = "SELECT * FROM room WHERE room = '$roomno'";
    $result = mysqli_query($con, $check) or die(mysqli_error($con));
    $num = mysqli_num_rows($result);
    $error = "success";
    if ($num >= 1) {
        $error = "error";
        echo "<script>";
        echo "alert(' ข้อมูลซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
        header('location:Manage_room.php');
        echo "</script>";
    }
    if ($error == "success") {
        $sql = "INSERT INTO room (room, statusroom, statuscash)
		VALUES('$roomno','0','0')";
        $result = mysqli_query($con, $sql) or die("Error in query: $sql " . mysqli_error($con));
    }
}

if (isset($_REQUEST['searchstatus'])) {
    $search = $_REQUEST['valuesearch'];
    if ($search != "all") {
        $check = $_REQUEST['valuesearch'];
       /*  print_r($_REQUEST); */
        $query = mysqli_query($con, "SELECT * from room left join user on room.memid = user.userid where statusroom = '$check'");
    }
}
?>
</br>
<!-- Main content -->
<section class="content">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <form action="" method="post">
                        <!--  <form class="form" id="savemember" name="savemember" method="post" action="savemember.php"> -->
                        <div class="row" style="padding-left: 1em;">
                            <div class="col-5">
                                <div class="form-group">
                                    <label for="">หมายเลขห้อง :</label>
                                    <input type="text" class="form-control" name="sroomno" placeholder="หมายเลขห้อง">
                                </div>
                            </div>
                            <div class="col-5">
                                <label for="">สถานะห้อง :</label>
                                <select name="valuesearch" id="" class="form-select">
                                    <option value="all">ทั้งหมด</option>
                                    <option value="0">ห้องว่าง</option>
                                    <option value="1">ห้องไม่ว่าง</option>
                                </select>
                            </div>
                            <div class="col-2" style="padding-top: 2em;">
                                <div class="form-group">
                                    <input type="submit" name="searchstatus" class="btn btn-primary"  name="clicktoseatch" value="ค้นหา">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-2 col-xs-12">
                    <div class=" " style="padding-top:2em; ">
                        <div class="col-lg-6 col-md-6 col-xs-12 ">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                เพิ่มห้อง
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มห้องพัก</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">หมายเลขห้อง:</label>
                            <input type="text" class="form-control" name="txt_roomno" placeholder="หมายเลขห้อง">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                        <input type="submit" name="saveroom" class="btn btn-primary" value="บันทึก">
                    </div>
                </form>
            </div>
            
        </div>

    </div>
    <div class="card-body">
        <div class="row">
            <?php
            while ($row = mysqli_fetch_array($query)) {
            ?>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <p>หมายเลขห้อง <?php echo $row['room'] ?></p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                   
                                        <div class="card-body">
                                            <?php if ($row['statusroom'] == 0) { ?>
                                                <img src="./img/r002.png" class="img-fluid " alt="..." style="" <?php echo $row['room'] ?>>
                                            <?php } else { ?>
                                                <img src="./img/r001.png" class="img-fluid mx-auto" alt="..." style="" <?php echo $row['room'] ?>>
                                            <?php  } ?>
                                        </div>
                                   
                                </div>
                                <div class="col-7">
                                    <div class="row text-center">
                                        <p>สถานะการชำระเงิน</p>
                                    </div>
                                    <div class="row text-center">
                                        <?php if ($row['statuscash'] == 0) {
                                            echo '<p style=color:#dc3545;>ค้างชำระ</p>';
                                        } else {
                                            echo '<p style=color:#198754;>ชำระเงินแล้ว</p>';
                                        } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="row justift-content-end">
                                <a class="btn btn-success" href="detailroom.php?id=<?php echo $row['room']; ?>">ดูรายละเอียดเพิ่มเติม</a>

                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    </div>
                                    </div>
</section>
<?php include('./component/footer.php'); ?>