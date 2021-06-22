<?php
require_once('./connec/connecpdo.php');
$select_room = $db->prepare("select * from room left join user on room.memid = user.userid");
$select_room->execute();
if (isset($_REQUEST['clicktoseatch'])) {
    print_r($_REQUEST);
}
if (isset($_REQUEST['saveroom'])) {
    print_r($_REQUEST);
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include('./component/linkstyle.php'); ?>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-5">
                                    <div class="form-group">
                                        <label for="">หมายเลขห้อง :</label>
                                        <input type="text" class="form-control" name="sroomno" placeholder="หมายเลขห้อง">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <label for="">สถานะห้อง :</label>
                                    <select name="valuesearch" id="" class="form-select">
                                        <option value="all">ทั้งหมด</option>
                                        <option value="0">ห้องว่าง</option>
                                        <option value="1">ห้องไม่ว่าง</option>
                                    </select>
                                </div>
                                <div class="col-2 mt-4">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" name="clicktoseatch" value="ค้าหา">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="row justify-content-end mt-4">
                            <div class="col-lg-6 col-md-6 col-xs-12 float-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Launch demo modal
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <?php
                while ($row = $select_room->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                <p>หมายเลขห้อง <?php echo $row['room'] ?></p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="card">
                                            <div class="card-body">
                                                <?php if ($row['statusroom'] == 0) { ?>
                                                    <img src="../img/r002.png" class="img-fluid " alt="..." style="" <?php echo $row['room'] ?>>
                                                <?php } else { ?>
                                                    <img src="../img/r001.png" class="img-fluid mx-auto" alt="..." style="" <?php echo $row['room'] ?>>
                                                <?php  } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="row text-center">
                                            <p>สถานะการชำระเงิน</p>
                                        </div>
                                        <div class="row">
                                            <?php if ($row['statuscash'] == 0) {
                                                echo '<p style=color:#dc3545;>ค้างชำระ</p>';
                                            } else {
                                                echo '<p style=color:#198754;>ชำระเงินแล้ว</p>';
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row justift-content-end">
                                    <a class="btn btn-success" href="detailroom.php?id=<?php echo $row["room"]; ?>">ดูรายละเอียดเพิ่มเติม</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
<?php include('./component/linkscrip.php'); ?>

</html>