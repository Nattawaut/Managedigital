<?php
include('./connec/connection.php');
$ID = $_SESSION['UserID'];
$User = $_SESSION['User'];
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-blue elevation-4">
  <!-- Brand Logo -->
  <a class="brand-link " style="background-color: #3c8dbc;">
    <span class="brand-text" style="color: white;font-size: 16px;">เว็บแอพพลิเคชั่นจัดการมิเตอร์ไฟฟ้า</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar ">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="assets/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info" style="color: white;">
        <?php echo $User; ?>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <!-- nav-compact -->
      <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="Formadmin.php" class="nav-link 
          <?php if ($menu == "Formadmin") {
            echo "active";
          } ?> ">
            <i class="fas fa-building" style="width: 20px; font-size: 20px;"></i>
            <p>กรอกข้อมูลหอพัก</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="Formmember.php" class="nav-link 
          <?php if ($menu == "Formmember") {
            echo "active";
          } ?>">
            <i class="fas fa-user-friends"></i>
            <p>กรอกข้อมูลผู้เช่าหอพัก</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="Manage_room.php" class="nav-link 
          <?php if ($menu == "Manage_room") {
            echo "active";
          } ?> ">
            <i class="fas fa-user-edit"></i>
            <p>จัดการข้อมูลห้องพัก</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="table.php" class="nav-link 
          <?php if ($menu == "table") {
            echo "active";
          } ?>">
            <i class="nav-icon fas fa-list-alt"></i>
            <p>รายชื่อผู้เช่า</p>
          </a>
        </li>
<!-- 
        <li class="nav-item">
          <a href="room.php" class="nav-link 
          <?php if ($menu == "room.php") {
            echo "active";
          } ?>">
            <i class="nav-icon fas fa-list-alt"></i>
            <p>ข้อมูลการใช้ไฟแต่ละห้อง</p>
          </a>
        </li> -->
        <li class="nav-item">
          <a href="bill.php" class="nav-link 
          <?php if ($menu == "bill") {
            echo "active";
          } ?>">
            <i class="nav-icon far fa-file-alt"></i>
            <p>รานงานข้อมูลการใช้ไฟ</p>
          </a>
        </li>
        <div class="user-panel mt-2 pb-3 mb-2 d-flex">
        </div>
        <li class="nav-item">
          <a href="logout.php" class="nav-link text-danger">
            <i class="nav-icon fas fa-power-off"></i>
            <p>ออกจากระบบ</p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>