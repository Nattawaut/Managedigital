<?php
$menu = "Formmember"; ?>
<?php include("./component/header.php");
      include("./connec/connection.php"); 
?></br>
<section class="content"></br>
    <div class="col-md-12">
        <!-- general form elements disabled -->
        <div class="row justify-content-sm-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-edit"></i>
                        กรอกข้อมูลผู้เช่าหอพัก
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form class="form" id="savemember" name="savemember" method="post" action="savemember.php">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label for="date" class="col-form-label">วันที่เข้าพัก:</label>
                                        <input type="date" name="date" id="date" class="form-control" min="<?php echo date('d-m-Y', $current_time); ?>" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label for="firstname" class="col-form-label">ชื่อ:</label>
                                        <input type="firstname" name="firstname" class="form-control" id="firstname" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname" class="col-form-label">นามสกุล:</label>
                                        <input type="lastname" name="lastname" class="form-control" id="lastname" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="tel" class="col-form-label">เบอร์โทร:</label>
                                        <input type="tel" name="tel" class="form-control" id="tel" placeholder="" maxlength="10" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email" class=" col-form-label">หมายเลขห้อง:</label>
                                        <select name="roomno" class="form-select">
                                        <option>เลือกหมายเลขห้อง</option>
                                        <?php
                                            $queryss = mysqli_query($con, "SELECT * FROM room WHERE room != ''");
                                            while ($row = mysqli_fetch_array($queryss)) {
                                            ?>
                                                <option value="<?php echo $row['room'] ?>"><?php echo $row['room'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email" class=" col-form-label">อีเมลล์:</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="Username" class="col-form-label">ชื่อผู้ใช้งาน:</label>
                                        <input type="Username" name="Username" class="form-control" id="Username" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="tel" class="col-form-label">รหัสผ่าน:</label>
                                        <input type="Password" name="Password" class="form-control" id="Password" placeholder="" required></br>
                                    </div>
                                </div>
                                <div class="col-sm-6">

                                </div>
                                <div class="col-sm-6">
                                <button type="btn" name="submit" class="btn btn-primary  float-right" >บันทึก</button>
                                <a href="formmember.php" class="btn btn-danger float-right mr-2">ยกเลิก</a>
                                
                                </div>
</section>
<!-- /.content -->
<?php include('./component/footer.php'); ?>