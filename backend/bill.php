<?php $menu = "bill"; ?>
<?php include("./component/header.php");
      include("api.php") ?>
<?php include('./connec/connection.php');
/* $query = mysqli_query($con, "SELECT * FROM room JOIN user ON room.memid = user.userid"); */
$query = mysqli_query($con, "SELECT * FROM room JOIN user ON room.memid = user.userid ");
?></br></br>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header bg-navy">
        <h3 class="card-title">ข้อมูลผู้เช่า</h3>
      </div>
      <br>
      <div class="card-body p-1">
        <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-md-12">
            <table id="user" class="table table-bordered table-striped dataTable" role="grid" style="width:100%" aria-describedby="example1_info">
              <thead>
                <tr role="row" class="info">
                  <th>หมายเลขห้อง</th>
                  <th>ชื่อ-นามสกุล</th>
                  <th>เบอร์โทร</th>
                  <th>อีเมลล์</th>
                  <th>สถานะการชำระเงิน</th>
                  <!--<th>สถานะการตัดไฟ</th> -->
                  <th>วันที่ชำระเงิน</th>
                  <th>จัดการข้อมูล</th>
                </tr>
              </thead>
              <tbody>
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
                 <!--    <a href="showpdf.php?mydeat=<?php echo $datethai ?> " class="btn btn-info"><i class="fas fa-file-invoice"></i></a> -->
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
              </tbody>
            </table>
          </div>
        </div>
        <?php
        if (isset($_REQUEST['room'])) {
          $send1 = $_REQUEST['room'];
          $send2 = $_REQUEST['firstname'];
          $send3 = $_REQUEST['lastname'];
          $send4 = $_REQUEST[''];
          $line = new Line_Notify('');
          $line->setToken('zzvOuUq6wCrgZXXGJ5wEFQVg1ZvzWHqW4PFVo2TvVVP');
          $line->addMsg('แจ้งเตือนค้างชำระเงิน');
          $line->addMsg("เลขที่ใบบิล : $send1");
          $line->addMsg("ชื่อ-นามสกุล :$send2 $send3");
          $line->addMsg("วันที่จัดเก็บ $send2");
          $line->addMsg("จำนวนเงินที่ชำระ : $send4");
          // $_SESSION["Success"] = "Success";
          if ($line->sendNotify()) {
            echo '<script>
                   swal({
                   position: "top-end",
                   icon: "success",
                   type: "success",
                   title: "ส่งการแจ้งเตือนสำเร็จ",
                  showConfirmButton: true,
              })
                            </script>';
          } else {
            echo "<pre>";
            print_r($line->getError());
            echo "</pre>";
          }
        }
        ?>
      </div>
    </div>
    <!-- /.col -->
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ข้อมูลผู้เช่า</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">หมายเลขห้อง:</label>
              <input type="text" class="form-control" name="txt_id" id="show_meter-id" readonly />
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">ชื่อ-นามสกุล</label>
              <input type="text" class="form-control" name="txt_name" id="show_name" readonly />
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">เบอร์โทร:</label>
              <input type="text" class="form-control" name="text_date" id="show_date" readonly />
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">อีเมลล์:</label>
              <input type="text" class="form-control" name="txt_befor" id="show_before" readonly />
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">สถานะการชำระเงิน:</label>
              <input type="text" class="form-control" name="txt_after" id="txt_status" readonly>
            </div>
            <!--  <div class="form-group">
                  <label for="message-text" class="col-form-label">สถานะการตัดไฟ:</label>
                  <input type="text" class="form-control" name="dateaa"  id="txt_e"  readonly />
                </div> -->
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php include('./component/footer.php'); ?>
<script>
  $(function() {
    $("#user").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  $(document).on('click', '.viewtbtn', function() {
    $('#exampleModal1').modal('show');
    $sr = $(this).closest('tr');
    var data = $sr.children("td").map(function() {
      return $(this).text();
    }).get();
    console.log(data);
    $('#show_meter-id').val(data[0])
    $('#show_name').val(data[1])
    $('#show_date').val(data[2])
    $('#show_before').val(data[3])
    $('#txt_status').val(data[4])
    $('#txt_e').val(data[5])
    $('#txt_a').val(data[6])
    var value = document.getElementById("show_before").value;
    document.getElementById("show_after").setAttribute("min", value);
    $('#show_after').attr("placeholder", value)
  });
</script>
</body>

</html>