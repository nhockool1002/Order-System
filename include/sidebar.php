<div class="sidebar-zone-div">
                <div class="sidebar-top-image" style="width:100%;height:180px">
                    <img src="images/sidebartopimages.jpg" style="width:100%"; />
                </div>
                <div class="sidebar-username-information">
                <?php if(isset($_SESSION['kangcode_user'])){?>
                    <p>Tài khoản: <span><?php echo $_SESSION['kangcode_user']; ?></span><span class="option-user"><i class="fa fa-cog"></i></span></p>
                <?php }else{ ?>
                    <p>Chưa đăng nhập</p>
                <?php } ?>
                </div>
                <!-- <div class="sidebar-show-option-user" style="display:none;">
                    <p><a href="#"><i class="fa fa-cog"></i> Xem thông tin</a></p>
                    <p><a href="#"><i class="fa fa-cog"></i> Đổi mật khẩu</a></p>
                </div> -->
                <!-- <div class="sidebar-left-menu">
                    <p><a href="#"><i class="fa fa-home"></i> Trang chủ</a></p>
                    <p><a href="#"><i class="fa fa-user"></i> Profile</a></p>
                    <p><a href="#"><i class="fa fa-comment"></i> Emtpy</a><span class="sidebar-menu-option"><a href="#"><i class="fa fa-plus"></i></a></span></p>
                    <p><a href="#"><i class="fa fa-database"></i> Emtpy</a><span class="sidebar-menu-option"><a href="#"><i class="fa fa-plus"></i></a></span></p>
                    <p><a href="#"><i class="fa fa-picture-o"></i> Emtpy</a><span class="sidebar-menu-option"><a href="#"><i class="fa fa-plus"></i></a></span></p>
                </div> -->
</div>