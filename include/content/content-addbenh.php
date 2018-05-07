<div class="container-fluid" style="margin-top:35px">
    <div class="col-sm-12 box-huongdan">
    <em>Hướng dẫn</em>
    <p> Bước 1: Nhập tên loại bệnh vào ô nhập bệnh</p>
    <p> Bước 2: Nhấn vào nút kiểm tra để xác định loại bệnh vừa nhập đã có hay chưa </p>
    <p> Bước 3: Nếu dữ liệu trùng hoặc có thể trùng sẽ không thể THÊM LOẠI BỆNH, hãy thử tên khác</p>
    <p> Bước 4: Tên hợp lệ (Sau khi kiểm tra) , nút THÊM BỆNH sẽ hiển thị, khi đó tiến hành nhấn vào nút để thêm</p>
    </div>
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