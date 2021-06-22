<?php
$menu = "settelect";
?>
<?php include("./component/header.php"); ?>
<!-- Content Header (Page header) -->
<?php
include('./connec/connection.php');
$query = mysqli_query($con, "select * from `user`");
?></br></br>
<!-- Main content -->
<section class="content">
<div class="container">
        <div class="row justify-content-sm-center">
            <div class="col">
                <div class="card">
                <div class="card-header">
                        <i class="fas fa-edit"></i>
                        ตั้งค่าการใช้ไฟ
                    </div>
                    <!-- form start -->
                    <form class="form" id="savemember" name="savemember" method="post" action="savemember.php">
                        <div class="card-body">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="firstname" class="col-sm-2 col-form-label">ชื่อ</label>
                                <div class="col-sm-10">
                                    <input type="firstname" name="firstname" class="form-control" id="firstname" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lastname" class="col-sm-2 col-form-label">นามสกุล</label>
                                <div class="col-sm-10">
                                    <input type="lastname" name="lastname" class="form-control" id="lastname" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">หมายเลขห้อง</label>
                                <div class="col-sm-10">
                                    <select name="Username" class="form-select">
                                        <option value="">เลือกหมายเลขห้อง</option>
                                        <option value="R001">R001</option>
                                        <option value="R002">R002</option>
                                        <option value="R003">R003</option>
                                        <option value="R004">R004</option>
                                        <option value="R005">R005</option>
                                        <option value="R006">R006</option>
                                        <option value="R007">R007</option>
                                        <option value="R008">R008</option>
                                        <option value="R009">R009</option>
                                        <option value="R010">R0010</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tel" class="col-sm-2 col-form-label">เบอร์โทร</label>
                                <div class="col-sm-10">
                                    <input type="tel" name="tel" class="form-control" id="tel" maxlength="10" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">อีเมลล์</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="firstname" class="col-sm-2 col-form-label">อัตราค่าไฟ</label>
                                <div class="col-sm-10">
                                    <input type="firstname" name="firstname" class="form-control" id="firstname" placeholder="7" disabled style="text-align:  center;">
                                </div>
                            </div>
                            <button type="btn" name="submit" class="btn btn-primary float-right">บันทึก</button>
                            </div>
                        </div>
                    </form>
                </div>
              <!-- /.card -->
</section>
</body>

</html>