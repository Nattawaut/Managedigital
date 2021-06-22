<?php session_start(); 
include('./connec/connection.php');
  $ID = $_SESSION['UserID'];
  $User = $_SESSION['User'];
?>
 <nav class="main-header  navbar navbar-expand navbar-dark navbar-dark" style="background-color: #3c8dbc;">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link ">
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
         <?php echo $User; ?>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a  class="dropdown-item">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="assets/dist/img/avatar5.png" alt="User profile picture">
                </div>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                   
                  </li>
                </ul>
                <a href="#" class="btn btn-primary btn-block"><b>ข้อมูลส่วนตัว</b></a>
                <a href="#" class="btn btn-primary btn-block" href="../logout.php" ><b>ออกจากระบบ</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- Message End -->
          </a>
        
    </ul>
  </nav>
 <!--  http://fordev22.com/ -->
  <!-- /.navbar -->