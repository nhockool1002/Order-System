<?php
if(!isset($_SESSION['kangcode_user'])){
    header('Location:index.php?page=login');
}
?>

<div class="container-fluid nhapdulieu-box" style="margin-top:35px;">
<form method="POST" action="exe/nhapdulieu.php">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-6">
            <label>Họ tên</label>
            <input type="text" class="form-control" name="hoten" placeholder="@ Nhập họ tên" required />
            <label>Điện thoại</label>
            <input type="text" class="form-control" name="dienthoai" placeholder="@ Nhập số điện thoại" required />
            <br>
            <lavel>Mã số khám</lavel>
            <input type="text" class="form-control" name="masokham" placeholder="@ Nhập mã số khám" required />
            <label>Thời gian đặt hẹn</label>
            <input type="date" class="form-control" name="thoigiandathen" />
            <label>Thời gian đến khám</label>
            <input type="date" class="form-control" name="thoigiandenkham" />
            <br>
            <lavel>Chi phí</lavel>
            <input type="text" class="form-control" name="chiphi" placeholder="@ Nhập chi phí"/>
            </div>
            <div class="col-sm-6">
            <label>Loại Bệnh</label>
            <select class="form-control" name="loaibenh">
            <?php $loaibenh = new Diseases(); 
                $rows = $loaibenh->ListDiseases();
                foreach($rows as $row){
            ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['tenbenh']; ?></option></option>
                <?php } ?>
            </select>
            <label>Chọn bác sĩ</label>
            <select class="form-control" name="bacsi">
            <?php $bacsi = new Doctor(); 
                $rows = $bacsi->ListDoctor();
                foreach($rows as $row){
            ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['tenbacsi']; ?></option></option>
                <?php } ?>
            </select>
            <label>Nguồn đến</label>
            <select class="form-control" name="nguonden">
            <?php $nguonden = new Sources(); 
                $rows = $nguonden->ListSources();
                foreach($rows as $row){
            ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['tennguonden']; ?></option></option>
                <?php } ?>
            </select>
            <label>Phương thức</label>
            <select class="form-control" name="phuongthuc">
            <?php $phuongthuc = new Method(); 
                $rows = $phuongthuc->ListMethod();
                foreach($rows as $row){
            ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['tenphuongthuc']; ?></option></option>
                <?php } ?>
            </select>
            <label>Trạng thái</label>
            <select class="form-control" name="trangthai">
            <?php $trangthai = new State(); 
                $rows = $trangthai->ListState();
                foreach($rows as $row){
            ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row['trangthai']; ?></option></option>
                <?php } ?>
            </select>

            </div>
        </div>
        <div class="row">
        <div class="col-sm-12">
        <label>Chat</label>
        <textarea class="form-control" placeholder="@ Nhập đoạn chat với bệnh nhân" name="chat"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-sm-center">
        <div class="nhapdulieu-button-zone" style="width:100%;text-align:center;margin-top:35px;">
            <button type="submit" name="submit"  class="btn btn-success">NHẬP DỮ LIỆU</button>
        </div>
        </div>
        </div>
<?php $date = date("Y-m-d");?>
<input type="hidden" name="thoigiandangky" value="<?php echo $date; ?>" >
<input type="hidden" name="nguoidung" value="<?php echo $_SESSION['kangcode_user_id']; ?>">
</form>
</div>