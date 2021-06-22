<?php
include('./connec/connection.php');
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id']; //SELECT * from room join user on room.memid = user.userid
    $queryss = mysqli_query($con, "SELECT * from room join user on room.memid = user.userid where room.room = '$id'");
    $row = mysqli_fetch_array($queryss);
}
?>
<?php include("./component/header.php") ?>
<!DOCTYPE html>
<html lang="en">
<?php include('./component/linkstyle.php'); ?>
<?php include('./component/link.php'); ?>

<body>
    <div class="container">
        <div class="card-body">
            <div class="card">

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="">หมายเลขห้อง :</label>
                                <input type="text" class="form-control" value="
                        <?php if ($row == "") {
                            echo "ไม่พบข้อมูล";
                        } else {
                            echo $row['room'];
                        } ?>" disabled>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="">ชื่อ :</label>
                                <input type="text" class="form-control" value="
                                    <?php if ($row == "") {
                                        echo "ไม่พบข้อมูล";
                                    } else {
                                        echo $row['firstname'];
                                    } ?>" disabled>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="">นามสกุล :</label>
                                <input type="text" class="form-control" value="
                                    <?php if ($row == "") {
                                        echo "ไม่พบข้อมูล";
                                    } else {
                                        echo $row['lastname'];
                                    } ?>" disabled>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="">เบอร์โทรศัพท์ :</label>
                                <input type="text" class="form-control" value="
                                    <?php if ($row == "") {
                                        echo "ไม่พบข้อมูล";
                                    } else {
                                        echo $row['tel'];
                                    } ?>" disabled>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="">วันที่เข้าพัก :</label>
                                <input type="text" class="form-control" value="
                                    <?php if ($row == "") {
                                        echo "ไม่พบข้อมูล";
                                    } else {
                                        echo $row['date'];
                                    } ?>" disabled>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xs-12">
                            <div class="form-group">
                                <label for="">สถานะการชำระเงิน :</label>
                                <input type="text" class="form-control" value="
                                    <?php if ($row['statuscash'] == 0) {
                                        echo  'ค้างชำระ';
                                    } else {
                                        echo "ชำระเงินแล้ว";
                                    } ?>" disabled>
                            </div>
                        </div>
                        <!--  <div class="row">
                            <div class="col-lg-4 col-md-6 col-xs-12">
                                <div class="form-group">
                                    <label for="">สถานะการชำระเงิน :</label>
                                    <div class="row">
                                        <?php if ($row['statuscash'] == 0) {
                                            echo '<p style=color:#dc3545;>ค้างชำระ</p>';
                                        } else {
                                            echo '<p style=color:#198754;>ชำระเงินแล้ว</p>';
                                        } ?>
                                    </div>
                                </div>
                            </div> -->
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-xs-12">
                                <div class="form-group"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div>
                            <canvas id="graphbar"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('./component/linkscrip.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <canvas id="myChart" width="400" height="400"></canvas>
    <script>
        $(document).ready(function() {
            showGraphbar();
        });

        function showGraphbar() {
            {
                $.post("data.php", function(data) {
                    console.log(data);
                    let name = [];
                    let value = [];

                    for (let i in data) {
                        name.push(data[i].MyDate);
                        value.push(data[i].mpw);
                    }

                    let chartdata1 = {
                        labels: name,
                        datasets: [{
                            maxBarThickness: 10,
                            minBarLength: 1,
                            label: 'ข้อมูลการใช้ไฟ',
                            data: value,
                            backgroundColor: [
                                'rgb(75, 192, 192)'
                            ],
                            hoverOffset: 5
                        }]
                    };
                    let graphTarget = $('#graphbar');
                    let barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata1,
                        options: {
                            scales: {
                                yAxes: [{
                                    display: true,
                                    ticks: {
                                        beginAtZero: true,
                                        stepSize: 5
                                    }
                                }]
                            }
                        }
                    })
                })
            }
        }
    </script>
</body>

</html>
<?php include("./component/footer.php") ?>