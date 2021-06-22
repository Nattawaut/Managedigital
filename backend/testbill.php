<?php
session_start();
include('./connec/connection.php');
/* if (isset($_REQUEST['mydeat'])) {
    $year = $_REQUEST['mydeat'];
    $select_stmt = $db->prepare("SELECT DATE_FORMAT(indate_vo, '%m') As MyDate , SUM(invoice.unit_process) AS allunit, sum(invoice.totalcost_bef) as alltotal FROM invoice  WHERE DATE_FORMAT(indate_vo,'%Y') = :year GROUP BY MyDate");
    $select_stmt->bindParam(':year', $year);
    $select_stmt->execute();
}

 */
$query = mysqli_query($con, "SELECT * FROM room JOIN user ON room.memid = user.userid");
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.admin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100;300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b03752537c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style type=" text/css">
    </style>
    <style>
    @media print {
        .noPrint {
            display: none;

        }
    }
    </style>
    <style>
    .print-only {
        display: none
    }

    @media print {
        .print-only {
            display: block
        }
    }
    </style>
    <style>
    #chart-container {
        width: 50%;
        height: auto;
    }
    </style>
    <div class="print-only">
        <div class="body-message text-center">
            <h4><b>รายงานการใช้น้ำประจำปี <?php echo $yearthai; ?></b></h4>
            <label>บ้านทุ่งรวงทอง ต.ป่าแดด อ.แม่สรวย จ.เชียงราย</label>
        </div>
    </div>
</head>

<body class="hold-transition sidebar-mini" style="font-family: 'Sarabun', sans-serif;">
    <div class="wrapper">
        <?php include("./component/header.php"); ?>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="alert alert-info" role="alert">
                            <h1 class="m-0" id="">ข้อมูลการใช้น้ำและจำนวนเงินแยกตามเดือน</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <div class="card-body">
                <div class="card">
                    <form action="" method="post">
                        <div class="row ml-3 mt-3 pt-1 noPrint">
                            <div class="col-lg-2 col-md-3 col-xs-12 mr-4">
                                <div class="form-group">
                                    <div class="row noPrint">
                                        <button onclick="window.print()" class="btn btn-success my-2 my-sm-0"
                                            type="submit"> : ปริ้นรายงาน</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="card-body">
                        <input type="hidden" id="title" value="<?php echo $year ?>">
                        <div class="noPrint row pt-1 justify-content-center">
                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <div class="form-group justify-content-center">
                                    <label>ข้อมูลการใช้น้ำและจำนวนการชำระเงินปี</label>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-4 col-sm-12">
                                <!--  <h5><?php echo $yearthai; ?></h5> -->
                            </div>
                        </div>
                        <table id="myTable" class="table table-bordered table-striped dataTable text-center" role="grid"
                            aria-describedby="example1">
                            <thead>
                                <tr>
                                    <th scope="col">เดือน</th>
                                    <th scope="col">จำนวณหน่วยรวม(ลบ.ม.)</th>
                                    <th scope="col">จำนวนเงินทั้งหมด(บาท)</th>
                                    <th scope="col" class="noPrint">ข้อมูลการชำระเงิน</th>
                                    <!-- <th class="noPrint" scope="col">ส่งการแจ้งเตือน</th> -->
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
                                        <a href="table.php?userid=<?php echo $row['room']; ?>" onclick="window.print()"
                                            class="btn btn-info"> <i class="fas fa-file-invoice"></i></a>
                                            <a href="./showpdf.php?id=<?php echo $row['room']; ?>"  onclick="window.print()" class="btn btn-danger btn-xs"><i class="fas fa-file-invoice"></i>
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
            </div>
        </div>
    </div>
</body>


<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="javascrip.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[2];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            }
        }
    }
}
// $('.datepicker').datepicker({
//   format: 'dd/mm/yyyy'
// });
// $('.datepicker').datepicker({
//   format: 'yyyy-mm-dd'
// });
</script>
<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
$(document).ready(function() {
    showGraph();
    document.querySelectorAll('aside.main-sidebar')[0].style.height = "130vh"
});

function showGraph() {
    {
        var title = document.getElementById('title').value;
        console.log(title);
        $.post('data.php?year=' + title, function(data) {
            console.log(data);
            let name = [];
            let score = [];
            let scorea = [];

            for (let i in data) {
                name.push(data[i].datethai);
                score.push(data[i].alltotal);
                scorea.push(data[i].allunit);

            }

            let chartdata = {
                labels: name,
                datasets: [{
                    borderColor: '#46d5f1',
                    hoverBackgroundColor: '#CCCCCC',
                    hoverBorderColor: '#666666',
                    data: scorea,
                    label: 'จำนวนน้ำที่ใช้(ลูกบาศก์เซนติเมตร)',
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
                    ],
                    borderColor: '#46d5f1',
                    hoverBackgroundColor: '#CCCCCC',
                    hoverBorderColor: '#666666',
                    data1: score
                }]

            };

            let graphTarget = $('#graphCanvas');
            let barGraph = new Chart(graphTarget, {
                type: 'bar',
                data: chartdata,

                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                stepSize: 20
                            }
                        }]
                    }
                }
            })
        })
    }
}
</script>



</html>