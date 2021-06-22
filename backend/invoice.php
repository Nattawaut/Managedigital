<?php
include('server.php');
session_start();
// SECTION ******************************************************************************

if (isset($_REQUEST['report_id'])) {
  try {
    $receipt_id = $_REQUEST['report_id'];
    $select_stmt = $db->prepare("SELECT * FROM invoice left JOIN meter ON invoice.id_meter = meter.id_meter join receipt on invoice.invoice_id = receipt.invoice_id left JOIN users ON meter.id=users.id WHERE receipt_id = :receipt_id");
    $select_stmt->bindParam(':receipt_id', $receipt_id);
    $select_stmt->execute();
    $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
    extract($row);
    $newDate = date("d-m-Y", strtotime($indate));
    $newDate_vo = date("d-m-Y", strtotime($indate_vo));
  } catch (PDOException $e) {
    $e->getMessage();
  }
}
function DateThai($newDate)
{
  $strYear = date("Y", strtotime($newDate)) + 543;
  $strMonth = date("n", strtotime($newDate));
  $strDay = date("j", strtotime($newDate));
  $strMonthCut = array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤษจิกายน", "ธันวาคม");
  $strMonthThai = $strMonthCut[$strMonth];
  return "$strDay $strMonthThai $strYear";
}
if ($newDate != null) {
  $strYear = date("Y", strtotime($newDate)) + 543;
  $strMonth = date("n", strtotime($newDate));
  $strDay = date("j", strtotime($newDate));
  $strMonthCut = array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤษจิกายน", "ธันวาคม");
  $strMonthThai = $strMonthCut[$strMonth];
  $dateThai = $strDay . " " . $strMonthThai . " " . $strYear;
}
if ($newDate_vo != null) {
  $strYear = date("Y", strtotime($newDate_vo)) + 543;
  $strMonth = date("n", strtotime($newDate_vo));
  $strDay = date("j", strtotime($newDate_vo));
  $strMonthCut = array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤษจิกายน", "ธันวาคม");
  $strMonthThai = $strMonthCut[$strMonth];
  $dateThai_vo = $strDay . " " . $strMonthThai . " " . $strYear;
}
$unit_before = $unit - $unit_process;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.admin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100;300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b03752537c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style type=" text/css">
    </style>

    <style>
      @media print {
        .noPrint {
          display: none;
        }

      }
    </style>
  </head>

<body class="hold-transition sidebar-mini" style="font-family: 'Sarabun', sans-serif;">
  <div class="wrapper">


    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header text-end">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0" id=""></h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <div class="container">
        <div class="card pt-3">
          <div class="card-body">
            <div style="max-width:1140px;width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;">
              <img src="image/logo.png" class="img-circle elevation-1" alt="User Image" width="70px" height="70px">
              <div style="text-align:center; ">
                <h4><b>ใบเสร็จชำระเงินค่าน้ำประปาบ้านทุ่งรวงทอง</b> </h4>
                <h5>หมู่ที่ 15 ตำบลป่าแดด อำเภอ แม่สรวย จังหวัด เชียงราย </h5>
              </div>
              <div style="position: relative;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-direction: column;
                flex-direction: column;
                min-width: 0;
                word-wrap: break-word;
                background-color: white;
                background-clip: border-box;
                border: 1px solid rgba(0,0,0,.125);
                border-radius: .25rem;
                margin-top: 1rem !important;">
                <div style="padding: .75rem 1.25rem; margin-bottom: 0; background-color: rgba(0,0,0,.03); ">
                  <div style=" -ms-flex: 0 0 50%; flex: 0 0 50%; max-width: 50%;">
                    <h5 class="float-left col-6" style="float: left "> <b>เลขที่ใบเสร็จ</b> : <?php echo $receipt_id ?></h5>
                  </div>
                </div>
                <div style="padding: .50rem 1.25rem; margin-bottom: 1; background-color: rgba(0,0,0,.03); ">
                </div>
                <div style="padding: .50rem 1.25rem; margin-bottom: 1; background-color: rgba(0,0,0,.03); ">
                  <h5 class="float-right col-5" style="float: left !important;">ชื่อ-นามสกุล : <?php echo $username ?></h5>
                  <h5 class="float-right col-3" style="float: right !important;">รหัสมิเตอร์น้ำ : <?php echo $id_meter ?></h5>
                  <h5 class="float-right col-4" style="float: center !important;">ที่อยู่(บ้านเลขที่) : <?php echo $housenumber ?> </h5>
                </div>
                <div style="padding: .50rem 1.25rem; margin-bottom: 1; background-color: rgba(0,0,0,.03); "> </div>

                <div style="padding: .50rem 1.25rem; margin-bottom: 1; background-color: rgba(0,0,0,.03);">
                  <h5 class="float-right col-5" style="float: left !important;">วันที่เก็บ : <?php echo $dateThai_vo ?></h5>
                  <h5 class="float-right col-7" style="float: left !important;">วันที่รับชำระ : <?php echo $dateThai ?></h5>
                  <h5 class="float-right col-5" style="float: left !important;">จำนวนหน่วยบันทึกครั้งก่อน : </h5>
                  <h5 class="float-right col-6" style="float: left !important;"><?php echo $unit_before ?> ลูกบาศก์เมตร </h5>
                  <h5 class="float-right col-5" style="float: left !important;">จำนวนหน่วยบันทึกครั้งนี้ :</h5>
                  <h5 class="float-right col-6" style="float: left !important;"><?php echo $unit ?> ลูกบาศก์เมตร</h5>
                  <h5 class="float-right col-5" style="float: left !important;">หน่วยน้ำที่ใช้ :</h5>
                  <h5 class="float-right col-6" style="float: left !important;"> <?php echo $unit_process ?> ลูกบาศก์เมตร</h5>
                </div>

                <div style="padding: .50rem 1.25rem; margin-bottom: 1; background-color: rgba(0,0,0,.03); ">

                </div>

                <div style="padding: .50rem 1.25rem; margin-bottom: 1; background-color: rgba(0,0,0,.03); ">
                  <h5 class="float-right col-6" style="float: left !important;">จำนวณเงิน : <?php echo $totalcost ?> บาท</h5>
                </div>

                <div style="padding: .50rem 1.25rem; margin-bottom: 1; background-color: rgba(0,0,0,.03); ">
                </div>

              </div>
              <div class="footer ">

              </div>
              <div class="footer mt-4 justify-content-center">
                <input type="button" class="btn btn-primary btn-block noPrint" value="Print" onclick="window.print()" />
              </div>
              <div class="footer mt-4">

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- table -->
  <!-- /.content-wrapper -->
  </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Main Footer -->

  </div>
  <!-- ./wrapper -->


  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="javascrip.js"></script>

</body>

</body>

</html>