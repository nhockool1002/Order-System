<div class="" style="margin-top:12px;padding-left:10px;padding-right:10px">
    <div class="particles-form">
    <div id="particles-js"> 
        <h1>Đăng nhập hệ thống</h1>
        <div class="form-login">
            <form method="POST" action="exe/login.php">
                <label>Username</label>
                <input class="form-control" type="text" name="username" placeholder="Nhập Username" required />
                <label>Password</label>
                <input class="form-control" type="password" name="password" placeholder="Nhập Password" required />
                <button type="submit" name="submit" class="btn btn-warning">Đăng nhập</button>
            </form>
            <?php if(isset($_SESSION['flash_err_message'])) { ?>
            <div class="err-message-login">
                <p>Đăng nhập không thành công vui lòng kiểm tra lại Username/Password</p>
                <?php unset($_SESSION['flash_err_message']); ?>
            </div>
            <?php } ?>
        </div>
    </div> 
    </div>
</div>