<?php
include("./connec/connection.php");
//$query = "SELECT * FROM user ORDER BY Con_number";
//$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?php
    include("./component/header.php")
    ?>
    </br>
    <div class="container">
      <div class="row">
            <h1>Hello Adin</h1>
            </div>
          </div>
          <?php
    include("./component/footer.php")
    ?>
        </div>
        
        </section>
        
      </div>
    </div>
  </div>            
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <script>
    $(function() {
      $(".user").DataTable();
      $('#user').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
  </script>
</body>
</html>