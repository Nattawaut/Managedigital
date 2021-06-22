<?php
$menu = "Tdomitory";
?>
<?php include("./component/header.php"); ?>
<!-- Content Header (Page header) -->
<?php
include('./connec/connection.php');
$query = mysqli_query($con, "select * from `dormitory`");
?></br></br>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-navy">
                <h3 class="card-title">ตารางข้อมูลผู้เช่า</h3>
            </div>
            <br>
            <div class="card-body p-1">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-12">
                        <table id="dormitory" class="table table-bordered table-striped dataTable" role="grid" style="width:100%" aria-describedby="example1_info">
                            <thead>
                                <tr role="row" class="info">
                                    <th>ชื่อ</th>
                                    <th>นามสกุล</th>
                                    <th>เบอร์โทร</th>
                                    <th>อีเมลล์</th>
                                    <th>Username</th>
                                    <th>จัดการข้อมูล</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['ad_id']; ?></td>
                                        <td><?php echo $row['name_dormitory']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['lastname']; ?></td>
                                        <td><?php echo $row['tel']; ?></td>
                                        <td>
                                        <!--ดูข้อมูล
                                            <a class="btn btn-info btn-xs editbtn" target="_blank">
                                                <i class="fas fa-eye"></i>
                                            </a>-->
                                            <a href="#ViewEmployeeModal" class="btn btn-info btn-xs" data-toggle="modal"><i
                            class="fas fa-eye" data-toggle="tooltip" title="View"></i></a>
                                            <!--แก้ไขข้อมูล-->
                                          
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
     <!-- View Modal HTML -->
     <div id="ViewEmployeeModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form>
                  <div class="modal-header">
                    <h4 class="modal-title">ข้อมูลผู้เช่า</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label>หมายเลขห้อง</label>
                      <input type="text" id="'firstname" class="form-control" >
                    </div>
                    <div class="form-group">
                      <label>ชื่อ</label>
                      <input type="text" id="TextInput" class="form-control" disabled  value="นายสาที">
                    </div>
                    <div class="form-group">
                      <label>นามสกุล</label>
                      <input type="text" id="TextInput" class="form-control" disabled  value="เมืองมา" >
                    </div>
                    <div class="form-group">
                      <label>เบอร์โทร</label>
                      <input type="text" id="TextInput" class="form-control" disabled  value="0845216587">
                    </div>
                    <div class="form-group">
                      <label>ที่อยู่</label>
                      <textarea class="form-control" disabled > 235 หมู่ 1 ต.บ้านดู่ อ.เมือง จ.เชียงราย </textarea>
                    </div>
                    <div class="form-group">
                      <label>สถานะการชำระเงิน</label>
                      <input type="text" id="TextInput" disabled  class="form-control" value="ชำระแล้ว">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
</section>
<?php include('./component/footer.php'); ?>
<script>
$(function() {
    $("#dormitory").DataTable({
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
</body>

</html>