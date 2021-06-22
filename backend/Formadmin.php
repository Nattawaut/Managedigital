<?php
$menu = "Formadmin"; ?>
<?php include("./component/header.php"); ?></br>
<section class="content"></br>
  <div class="col-md-12">
    <!-- general form elements disabled -->
    <div class="row justify-content-sm-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <i class="fas fa-edit"></i>
            กรอกข้อมูลหอพัก
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form class="form" id="savedor" name="savedor" method="post" action="savedor.php">
               <div class="row">
                <div class="col-sm-">
                  <!-- text input -->
                  <div class="form-group">
                    <label for="exampleInputEmail1">ชื่อหอพัก:</label>
                    <input type="name_dormitory" name="name_dormitory" class="form-control" id="name_dormitory" placeholder="" >
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputPassword1">ชื่อ:</label>
                    <input type="name" name="name" class="form-control" id="name" placeholder="" >
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputFile">นามสกุล:</label>
                    <input type="lastname" name="lastname" class="form-control" id="lastname" maxlength="10" placeholder="" >

                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputFile">หมายเลขประจำตัวประชาชน:</label>
                    <input type="id_card" name="id_card" class="form-control" id="id_card" maxlength="13" placeholder="" >
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputFile">เบอร์โทร:</label>
                    <input type="tel" name="tel" class="form-control" id="tel" maxlength="10" placeholder="" >
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputFile">ที่อยู่:</label>
                    <textarea class="form-control" type="address" name="address" placeholder="" id="address" style="height: 100px" ></textarea>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputFile">สัญญาหอพัก:</label>
                    <textarea class="form-control" type="contract" name="contract" placeholder="" id="contract" style="height: 100px" ></textarea></br>
                  </div>
                </div>
                <div class="col-sm-6">
               
              </div>
              <div class="col-sm-6">
              <button type="btn" name="submit" class="btn btn-primary  float-right" >บันทึก</button>
              <a href="formadmin.php" class="btn btn-danger float-right mr-2">ยกเลิก</a>
                
              </div>
               </div>
               
</section>
<!-- /.content -->
<?php include('./component/footer.php'); ?>