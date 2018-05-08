<div class="container-fluid" style="margin-top:35px">
    <div class="col-sm-12 box-huongdan">
    <em>Hướng dẫn</em>
    <p> Bước 1: Nhập tên bác sĩ vào ô nhập tên bác sĩ</p>
    <p> Bước 2: Nhấn vào nút kiểm tra để xác định tên vừa nhập đã có hay chưa </p>
    <p> Bước 3: Nếu dữ liệu trùng hoặc có thể trùng sẽ không thể THÊM BÁC SĨ, hãy thử tên khác</p>
    <p> Bước 4: Tên hợp lệ (Sau khi kiểm tra) , nút THÊM BÁC SĨ sẽ hiển thị, khi đó tiến hành nhấn vào nút để thêm</p>
    </div>
    <div class="col-sm-12 box-alert">
    </div>
    <div class="col-sm-12">
    <div class="row">
    <div class="col-sm-6">
    <?php
    $obj = new Db();
    $sql = "SELECT * FROM bacsi ORDER BY id DESC";
    $rows = $obj->select($sql);
    ?>
    <table id="table_id" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên Bác sĩ</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($rows as $row){ ?>
        <tr>
            <td style="width:10%;"><?php echo $row['id']; ?></td>
            <td><?php echo $row['tenbacsi']; ?></td>
            <td style="width:15%;text-align:center;"><span><a style="color:red;font-size:18px;" onclick="return confirm('Có chắc chắn xóa chứ ?')" class="delete-bacsi" data-id="<?php echo $row['id']; ?>"><i class="fa fa-times"></a></span></i></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
    </div>
    <div class="col-sm-6">
    <form>
    <label>Tên Bác Sĩ</label>
    <input class="form-control tenbacsi" type="text" />
    <br>
    <div class="state-check-bacsi">
    <span>Trạng thái</span> : <span class="state-message-bacsi"><span class="orange-message"> Chưa thực hiện kiểm tra tên bác sĩ</span></span>
    </div>
    <br>
    <div class="button-zone-addbacsi">
    <button class="btn btn-warning kiemtra-addbacsi">Kiểm tra</button>&nbsp<button class="btn btn-primary submit-addbacsi" disabled>Thêm bác sĩ</button>
    </div>
    </form>
    </div>
    </div></div>
</div>