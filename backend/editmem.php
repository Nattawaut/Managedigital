<?php
include('./connec/connection.php');
$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM `user` WHERE userid='$id' ");
$sqla = "UPDATE room set statusroom = '1' ,statuscash = '1'  where room = '$roomno'";
$row = mysqli_fetch_array($query);
?>
<?php include("./component/header.php"); ?>
<!-- Main content -->
<section class="content">
    <form method="POST" action="updatemem.php?id=<?php echo $id; ?>">
        </br>
        <div class="container">
            <div class="row row-cols-4">
                <div class="col-1">ชื่อ</div>
                <div class="col-4"> <input type="text" value="<?php echo $row['firstname']; ?>" name="firstname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
            </div>
        </div></br>
        <div class="container">
            <div class="row row-cols-4">
                <div class="col-1">นามสกุล</div>
                <div class="col-4"><input type="text" value="<?php echo $row['lastname']; ?>" name="lastname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
            </div>
        </div></br>
        <div class="container">
            <div class="row row-cols-4">
                <div class="col-1">เบอร์โทร</div>
                <div class="col-4"><input type="text" value="<?php echo $row['tel']; ?>" name="tel" maxlength="10" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div>
            </div>
        </div></br>
        <div class="container">
            <div class="row row-cols-4">
                <div class="col-1">อีเมลล์</div>
                <div class="col-4"><input type="email" value="<?php echo $row['email']; ?>" name="email" class="form-control" id="exampleFormControlInput1" placeholder=""></div>
            </div>
        </div></br>
        <div class="container">
            <div class="row row-cols-4">
                <div class="col-1">ชื่อผู้ใช้งาน</div>
                <div class="col-4"><input type="Username" value="<?php echo $row['Username']; ?>" name="Username" class="form-control" id="exampleFormControlInput1" placeholder=""></div>
            </div>
        </div></br>
        <div class="container">
            <div class="row row-cols-4">
                <div class="col-1">รหัสผ่าน</div>
                <div class="col-4">
                    <input type="password" name="Password" id="Password" class="form-control" placeholder="Password">
                </div>
            </div>
        </div></br>
        <div class="container">
            <div class="row row-cols-4">
                <div class="col-1">สถานะการจ่ายเงิน</div>
                <div class="col-4">
                    <select name="statusmember" id="" class="form-select">
                        <option value="0">ค้างชำระ</option>
                        <option value="1">ชำระแล้ว</option>
                    </select>
                </div>
            </div>
        </div></br>
        <div class="container">
            <div class="row row-cols-4">
                <div class="col-1">วันที่ชำระ</div>
                <div class="col-4">
                <input type="date" name="datecash" id="datecash" class="form-control" min="<?php echo date('d-m-Y', $current_time); ?>">
               
                </div>
            </div>
        </div></br>
        <div class="container" style="padding-left: 20em;">
            <a href="table.php" class="btn btn-danger float-left mr-2">ยกเลิก</a>
            <button type="submit" name="submit" class="btn btn-primary">บันทึก</button>
        </div></br>
        </div>
    </form>
</section>
<!-- /.content -->
<?php include('./component/footer.php'); ?>