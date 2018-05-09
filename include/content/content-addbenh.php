<?php
if(!isset($_SESSION['kangcode_user'])){
    header('Location:index.php?page=login');
}
?>
<div class="container-fluid" style="margin-top:35px">
    <div class="col-sm-12 box-huongdan">
    <em>Hướng dẫn</em>
    <p> Bước 1: Nhập tên loại bệnh vào ô nhập bệnh</p>
    <p> Bước 2: Nhấn vào nút kiểm tra để xác định loại bệnh vừa nhập đã có hay chưa </p>
    <p> Bước 3: Nếu dữ liệu trùng hoặc có thể trùng sẽ không thể THÊM LOẠI BỆNH, hãy thử tên khác</p>
    <p> Bước 4: Tên hợp lệ (Sau khi kiểm tra) , nút THÊM BỆNH sẽ hiển thị, khi đó tiến hành nhấn vào nút để thêm</p>
    </div>
    <div class="col-sm-12 box-alert">
    </div>
    <div class="col-sm-12">
    <div class="row">
    <div class="col-sm-6">
    <?php
    $obj = new Db();
    $sql = "SELECT * FROM loaibenh ORDER BY id DESC";
    $rows = $obj->select($sql);
    ?>
    <table id="table_id" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên Loại Bệnh</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($rows as $row){ ?>
        <tr>
            <td style="width:10%;"><?php echo $row['id']; ?></td>
            <td><?php echo $row['tenbenh']; ?></td>
            <td style="width:15%;text-align:center;"><span><a style="color:red;font-size:18px;" onclick="return confirm('Có chắc chắn xóa chứ ?')" class="delete-loaibenh" data-id="<?php echo $row['id']; ?>"><i class="fa fa-times"></a></span></i></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
    </div>
    <div class="col-sm-6">
    <form>
    <label>Tên Loại Bệnh</label>
    <input class="form-control tenbenh" type="text" />
    <br>
    <div class="state-check-loaibenh">
    <span>Trạng thái</span> : <span class="state-message-loaibenh"><span class="orange-message"> Chưa thực hiện kiểm tra tên loại bệnh</span></span>
    </div>
    <br>
    <div class="button-zone-addbenh">
    <button class="btn btn-warning kiemtra-addbenh">Kiểm tra</button>&nbsp<button class="btn btn-primary submit-addbenh" disabled>Thêm bệnh</button>
    </div>
    </form>
    </div>
    </div></div>
</div>