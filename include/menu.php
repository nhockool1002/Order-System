<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">HỆ THỐNG ĐẶT HẸN</a><span class="label label-danger">v1.0</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active" style="margin-left:10px;">
        <a class="nav-link btn btn-success" href="index.php?page=nhapdulieu"> Nhập dữ liệu<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle btn btn-success" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left:10px">
          Thêm trường
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php?page=themloaibenh">Thêm loại bệnh</a>
          <a class="dropdown-item" href="index.php?page=thembacsi">Thêm bác sĩ</a>
          <a class="dropdown-item" href="index.php?page=themnguonden">Thêm nguốn đến</a>
          <a class="dropdown-item" href="index.php?page=themphuongthuc">Thêm phương thức</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Thêm người dùng</a>
        </div>
      </li>
      <li class="nav-item">
      <?php if(isset($_SESSION['kangcode_user'])){ ?>
        <a class="nav-link btn btn-warning" href="index.php?page=logout" style="margin-left:10px">Thoát</a>
      <?php }else{ ?>     
        <a class="nav-link btn btn-danger" href="index.php?page=login" style="margin-left:10px">Đăng nhập</a>
      <?php } ?>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-danger my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>