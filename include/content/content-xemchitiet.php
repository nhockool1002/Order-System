<?php
if(!isset($_SESSION['kangcode_user'])){
    header('Location:index.php?page=login');
}
?>
<div class="col-sm-6 offset-sm-3" style="margin-top:12px;">
<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM bangnhap WHERE id = '$id'";
    $obb = new Db();
    $rows = $obb->select($sql);
    foreach($rows as $row)
    {
?>
<div class="box-label-chitiet">
<p><label><span class="contant-left">Họ tên :</span></label><span class="contant-right"><?php echo $row['hoten']; ?></span><br></p>
<p><label><span class="contant-left">Điện thoại :</span></label><span class="contant-right"><?php echo $row['dienthoai']; ?></span><br></p>
<p><label><span class="contant-left">Mã số khám :</span></label><span class="contant-right"><?php echo $row['masokham']; ?></span><br></p>
<p><label><span class="contant-left">Thời gian đăng ký :</span></label><span class="contant-right"><?php echo $row['thoigiandangky']; ?></span><br></p>
<p><label><span class="contant-left">Thời gian đặt hẹn :</span></label><span class="contant-right"><?php echo $row['thoigiandathen']; ?></span><br></p>
<p><label><span class="contant-left">Thời gian đến khám :</span></label><span class="contant-right"><?php echo $row['thoigiandenkham']; ?></span><br></p>
<p><label><span class="contant-left">Loại bệnh :</span></label><span class="contant-right"><?php echo $row['id_loaibenh']; ?></span><br></p>
<p><label><span class="contant-left">Bác sĩ :</span></label><span class="contant-right"><?php echo $row['id_bacsi']; ?></span><br></p>
<p><label><span class="contant-left">Người dùng :</span></label><span class="contant-right"><?php echo $row['id_nguoidung']; ?></span><br></p>
<p><label><span class="contant-left">Nguồn đến :</span></label><span class="contant-right"><?php echo $row['id_nguonden']; ?></span><br></p>
<p><label><span class="contant-left">Phương thức :</span></label><span class="contant-right"><?php echo $row['id_phuongthuc']; ?></span><br></p>
<p><label><span class="contant-left">Trang thái :</span></label><span class="contant-right"><?php echo $row['id_trangthai']; ?></span><br></p>
<p><label><span class="contant-left">Chi phí :</span></label><span class="contant-right"><?php echo $row['chiphi']; ?></span><br></p>
<p><label><span class="contant-left">Chatlog :</span></label><span class="contant-log"><?php echo $row['chat']; ?></span><br></p>
</div>
<?php
    }
}
?>

</div>
