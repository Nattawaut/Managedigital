
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UI Protopyte</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/stylesheet/style.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header  navbar navbar-expand navbar-dark navbar-dark">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a href="" class="nav-link ">
            เว็บแอพพลิเคชั่นจัดการมิเตอร์ไฟฟ้า
          </a>
        </li>
      </ul>
    </nav>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-navy elevation-4">
      <a class="brand-link bg-dark ">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-d">Admin</span>
      </a>
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="admin_page.php" target="_bank" class="d-block">Admin</a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
            <li class="nav-item menu-open">
              <a href="#" class="nav-link">
                <i class="fa fa-user"></i>
                <p>
                  จัดการข้อมูลหอพัก
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="indexadmin.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>กรอกข้อมูลเจ้าของหอพัก</p>
                    </a>
                </li>
                <li class="nav-item">
                  <a href="Editad.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>ข้อมูลเจ้าของหอพัก</p>
                    </a>
                </li>
                <li class="nav-item">
                  <a href="Addmm.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>สัญญาหอพัก</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="table.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>ข้อมูลผู้เช่าหอพัก</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="room.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>ข้อมูลการใช้ไฟแต่ละห้อง</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="far fa-file-alt"></i>
                <p>
                  รายงานการใช้ไฟ
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.html" onclick="return confirm('ยืนยันการออกจากระบบ')" class="nav-link">
                <i class="fas fa-sign-out-alt"></i>
                <p>ออกจากระบบ</p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>ข้อมูลผู้เช่าหอพัก</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">DataTable with default features</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>หมายเลขห้อง</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล(s)</th>
                        <th>เบอร์โทร</th>
                        <th>สถานะการชำระเงิน</th>
                        <th>สถานะการตัดไฟ</th>
                        <th>วันที่ชำระเงิน</th>
                        <th>จัดการข้อมูล</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>R001</td>
                        <td>นายสาที
                        </td>
                        <td>เมืองมา</td>
                        <td>0845216587</td>
                        <td style="color: green;">ชำระแล้ว</td>
                        <td style="color: green;">จ่ายไฟ</td>
                        <td>22/3/2564</td>
                        <td>
                          <a href="#ViewEmployeeModal" class="btn btn-info btn-xs" data-toggle="modal"><i
                            class="fas fa-eye" data-toggle="tooltip" title="View"></i></a>
                          <!--แก้ไขข้อมูล-->
                          <a href="#editEmployeeModal" class="btn btn-warning btn-xs" data-toggle="modal"><i
                              class=" fas fa-pencil-alt" data-toggle="tooltip" title="Edit"></i></a>
                              
                          <!--ลบข้อมูล-->
                          <a href="#deleteEmployeeModal" class="btn btn-danger btn-xs"  onclick="deleted()"><i
                              class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>R002</td>
                        <td>นายพิภพ</td>
                        <td>งบน้อย-</td>
                        <td>0865412371</td>
                        <td style="color: red;">ค้างชำระ</td>
                        <td style="color: green;">จ่ายไฟ</td>
                        <td></td>
                        <td>
                          <a href="#ViewEmployeeModal" class="btn btn-info btn-xs" data-toggle="modal"><i
                            class="fas fa-eye" data-toggle="tooltip" title="View"></i></a>
                          <!--แก้ไขข้อมูล-->
                          <a href="#editEmployeeModal" class="btn btn-warning btn-xs" data-toggle="modal" onclick="s"><i
                              class=" fas fa-pencil-alt" data-toggle="tooltip" title="Edit"></i></a>
                          <!--ลบข้อมูล-->
                          <a href="#deleteEmployeeModal" class="btn btn-danger btn-xs" data-toggle="modal"><i
                              class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>R003</td>
                        <td>นายมีนา</td>
                        <td>มาดี</td>
                        <td>0895412515</td>
                        <td style="color: green;">ชำระแล้ว</td>
                        <td style="color: green;">จ่ายไฟ</td>
                        <td>22/3/2564</td>
                        <td>
                          <a href="#ViewEmployeeModal" class="btn btn-info btn-xs" data-toggle="modal"><i
                            class="fas fa-eye" data-toggle="tooltip" title="View"></i></a>
                          <!--แก้ไขข้อมูล-->
                          <a href="#editEmployeeModal" class="btn btn-warning btn-xs" data-toggle="modal"><i
                              class=" fas fa-pencil-alt" data-toggle="tooltip" title="Edit"></i></a>
                          <!--ลบข้อมูล-->
                          <a href="#deleteEmployeeModal" class="btn btn-danger btn-xs" data-toggle="modal"><i
                              class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>R004</td>
                        <td>นางสาวกรกนก</td>
                        <td>ยกชู</td>
                        <td>0845136251</td>
                        <td style="color: red;">ค้างชำระ</td>
                        <td style="color: red;">ตัดไฟ</td>
                        <td></td>
                        <td>
                          <a href="#ViewEmployeeModal" class="btn btn-info btn-xs" data-toggle="modal"><i
                            class="fas fa-eye" data-toggle="tooltip" title="View"></i></a>
                          <!--แก้ไขข้อมูล-->
                          <a href="#editEmployeeModal" class="btn btn-warning btn-xs" data-toggle="modal"><i
                              class=" fas fa-pencil-alt" data-toggle="tooltip" title="Edit"></i></a>
                          <!--ลบข้อมูล-->
                          <a href="#deleteEmployeeModal" class="btn btn-danger btn-xs" data-toggle="modal"><i
                              class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>R005</td>
                        <td>นานเลิศ</td>
                        <td>งานมี</td>
                        <td>0954215425</td>
                        <td style="color: green;">ชำระแล้ว</td>
                        <td style="color: green;">จ่ายไฟ</td>
                        <td>22/3/2564</td>
                        <td>
                          <a href="#ViewEmployeeModal" class="btn btn-info btn-xs" data-toggle="modal"><i
                            class="fas fa-eye" data-toggle="tooltip" title="View"></i></a>
                          <!--แก้ไขข้อมูล-->
                          <a href="#editEmployeeModal" class="btn btn-warning btn-xs" data-toggle="modal"><i
                              class=" fas fa-pencil-alt" data-toggle="tooltip" title="Edit"></i></a>
                          <!--ลบข้อมูล-->
                          <a href="#deleteEmployeeModal" class="btn btn-danger btn-xs" data-toggle="modal"><i
                              class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>R006</td>
                        <td>นางกันยา</td>
                        <td>ยน</td>
                        <td>08512511111</td>
                        <td style="color: red;">ค้างชำระ</td>
                        <td style="color: red;">ตัดไฟ</td>
                        <td></td>
                        <td>
                          <a href="#ViewEmployeeModal" class="btn btn-info btn-xs" data-toggle="modal"><i
                            class="fas fa-eye" data-toggle="tooltip" title="View"></i></a>
                          <!--แก้ไขข้อมูล-->
                          <a href="#editEmployeeModal" class="btn btn-warning btn-xs" data-toggle="modal"><i
                              class=" fas fa-pencil-alt" data-toggle="tooltip" title="Edit"></i></a>
                          <!--ลบข้อมูล-->
                          <a href="#deleteEmployeeModal" class="btn btn-danger btn-xs" data-toggle="modal"><i
                              class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>R007</td>
                        <td>นายศรศักดิ์</td>
                        <td>สมยอม</td>
                        <td>0854326187</td>
                        <td style="color: green;">ชำระแล้ว</td>
                        <td style="color: green;">จ่ายไฟ</td>
                        <td>22/3/2564</td>
                        <td>
                          <a href="#ViewEmployeeModal" class="btn btn-info btn-xs" data-toggle="modal"><i
                            class="fas fa-eye" data-toggle="tooltip" title="View"></i></a>
                          <!--แก้ไขข้อมูล-->
                          <a href="#editEmployeeModal" class="btn btn-warning btn-xs" data-toggle="modal"><i
                              class=" fas fa-pencil-alt" data-toggle="tooltip" title="Edit"></i></a>
                          <!--ลบข้อมูล-->
                          <a href="#deleteEmployeeModal" class="btn btn-danger btn-xs" data-toggle="modal"><i
                              class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>R008</td>
                        <td>นางสาวกัลยา</td>
                        <td>มานี</td>
                        <td>0953264187</td>
                        
                        <td style="color: red;">ค้างชำระ</td>
                        <td style="color: red;">ตัดไฟ</td>
                        <td></td>
                        <td>
                          <a href="#ViewEmployeeModal" class="btn btn-info btn-xs" data-toggle="modal"><i
                            class="fas fa-eye" data-toggle="tooltip" title="View"></i></a>
                          <!--แก้ไขข้อมูล-->
                          <a href="#editEmployeeModal" class="btn btn-warning btn-xs" data-toggle="modal"><i
                              class=" fas fa-pencil-alt" data-toggle="tooltip" title="Edit"></i></a>
                          <!--ลบข้อมูล-->
                          <a href="#deleteEmployeeModal" class="btn btn-danger btn-xs" data-toggle="modal"><i
                              class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>R009</td>
                        <td>ยานนนที</td>
                        <td>มีนา</td>
                        <td>0895213456</td>
                        <td style="color: green;">ชำระแล้ว</td>
                        <td style="color: green;">จ่ายไฟ</td>
                        <td>22/3/2564</td>
                        <td>
                          <a href="#ViewEmployeeModal" class="btn btn-info btn-xs" data-toggle="modal"><i
                            class="fas fa-eye" data-toggle="tooltip" title="View"></i></a>
                          <!--แก้ไขข้อมูล-->
                          <a href="#editEmployeeModal" class="btn btn-warning btn-xs" data-toggle="modal"><i
                              class=" fas fa-pencil-alt" data-toggle="tooltip" title="Edit"></i></a>
                          <!--ลบข้อมูล-->
                          <a href="#deleteEmployeeModal" class="btn btn-danger btn-xs" data-toggle="modal"><i
                              class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>R0010</td>
                        <td>นางสาววริศรา</td>
                        <td>มานาน</td>
                        <td>0894211515</td>
                        <td style="color: red;">ค้างชำระ</td>
                        <td style="color: red;">ตัดไฟ</td>
                        <td></td>
                        <td>
                          <a href="#ViewEmployeeModal" class="btn btn-info btn-xs" data-toggle="modal"><i
                            class="fas fa-eye" data-toggle="tooltip" title="View"></i></a>
                          <!--แก้ไขข้อมูล-->
                          <a href="#editEmployeeModal" class="btn btn-warning btn-xs" data-toggle="modal"><i
                              class=" fas fa-pencil-alt" data-toggle="tooltip" title="Edit"></i></a>
                          <!--ลบข้อมูล-->
                          <a href="#deleteEmployeeModal" class="btn btn-danger btn-xs" data-toggle="modal"><i
                              class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>R0011</td>
                        <td>นาวสาวสราพร</td>
                        <td>งอนงาม</td>
                        <td>089525145</td>
                        <td style="color: green;">ชำระแล้ว</td>
                        <td style="color: green;">จ่ายไฟ</td>
                        <td>22/3/2564</td>
                        <td>
                          <a href="#ViewEmployeeModal" class="btn btn-info btn-xs" data-toggle="modal"><i
                            class="fas fa-eye" data-toggle="tooltip" title="View"></i></a>
                          <!--แก้ไขข้อมูล-->
                          <a href="#editEmployeeModal" class="btn btn-warning btn-xs" data-toggle="modal"><i
                              class=" fas fa-pencil-alt" data-toggle="tooltip" title="Edit"></i></a>
                          <!--ลบข้อมูล-->
                          <a href="#deleteEmployeeModal" class="btn btn-danger btn-xs" data-toggle="modal"><i
                              class="fas fa-trash-alt" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
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
                      <input type="text" id="TextInput" class="form-control"   disabled value="R001" >
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
          <!-- Edit Modal HTML -->
          <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form>
                  <div class="modal-header">
                    <h4 class="modal-title">แก้ไขข้อมูลผู้เช่า</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label>หมายเลขห้อง</label>
                      <input type="text" class="form-control" value="R002">
                    </div>
                    <div class="form-group">
                      <label>ชื่อ</label>
                      <input type="text" class="form-control" value="นายพิภพ">
                    </div>
                    <div class="form-group">
                      <label>นามสกุล</label>
                      <input type="text" class="form-control" value="งบน้อย">
                    </div>
                    <div class="form-group">
                      <label>เบอร์โทร</label>
                      <input type="text" class="form-control" value="0865412371">
                    </div>
                    <div class="form-group">
                      <label>ที่อยู่</label>
                      <textarea class="form-control">235 หมู่ 1 ต.บ้านดู่ อ.เมือง จ.เชียงราย</textarea>
                    </div>
                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" class="form-control" placeholder="R001" disabled>
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" value="r002123">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="ยกเลิก">
                    <input type="button" class="btn btn-info" value="บันทึก" onclick="edit()">
                  </div>
                  
                </form>
                
              </div>
            </div>
          </div>
          <!-- Delete Modal HTML -->
          <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form>
                  <div class="modal-header">
                    <h4 class="modal-title">ลบข้อมูลผู้เช่า</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <p>คุณต้องการลบข้อมูลผู้เช่า</p>
                  </div>
                  <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="ยกเลิก">
                    <input type="submit" class="btn btn-danger"  value="ยืนยัน">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.1.0-rc
      </div>
      <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <script>
    $(document).ready(function () {
      // Activate tooltip
      $('[data-toggle="tooltip"]').tooltip();

      // Select/Deselect checkboxes
      var checkbox = $('table tbody input[type="checkbox"]');
      $("#selectAll").click(function () {
        if (this.checked) {
          checkbox.each(function () {
            this.checked = true;
          });
        } else {
          checkbox.each(function () {
            this.checked = false;
          });
        }
      });
      checkbox.click(function () {
        if (!this.checked) {
          $("#selectAll").prop("checked", false);
        }
      });
    });
  </script>
  <!-- jQuery -->
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="assets/plugins/jszip/jszip.min.js"></script>
  <script src="assets/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="assets/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": true,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  <script src="test.js"></script>
  <script>
    function edit(){
      swal({
      position: 'margin-top',
  icon: 'success',
  title: 'บันทึกข้อมูลสำเร็จ',
  button: true,
  timer: 1500
  });
    }
  </script>
  <script>
    function deleted() {
     swal({
      title: "ลบรายการนี้หรือไม่",
  text: "เมื่อรายการนี้ถูกลบ คุณไม่สามารถกู้คืนได้",
  icon: "warning",
  buttons:["ยกเลิก","ยืนยันการลบ"],
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("การลบสำเร็จ", {
      icon: "success",
    });
  }
});
 
   }
   </script>
</body>

</html>