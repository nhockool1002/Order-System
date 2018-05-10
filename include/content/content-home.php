<?php
if(!isset($_SESSION['kangcode_user'])){
    header('Location:index.php?page=login');
}
?>
<div class="container-fluid" style="margin-top:35px">
        <table id="tabledit" class="table table-bordered table-striped table-content">
            <thead>
                <tr>
                    <th>Chi tiết</th>
                    <th>ID</th>
                    <th>Họ tên</th>
                    <th>Điện thoại</th>
                    <th>Mã số khám</th>
                    <th>Thời gian đăng ký</th>
                    <th>Thời gian đặt hẹn</th>
                    <th>Thời gian đến khám</th>
                    <th>Loại bệnh tật</th>
                    <th>Đặt hẹn Bác sĩ</th>
                    <th>Nhân viên tư vấn</th>
                    <th>Nguồn đến</th>
                    <th>Phương thức tư vấn</th>
                    <th>Chi phí</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
        <div class="pagination">
        <?php
        /* PHÂN TRANG */
$pgn = new Db();
$total_sql = "SELECT * FROM bangnhap";
$pgn->select($total_sql);
$total = $pgn->getRowCount();

if(isset($_GET['trang'])){
    $current_page = $_GET['trang'];
}
else{
    $current_page = 1;
}
$limit = 10;

$total_page = ceil($total / $limit);

if ($current_page > $total_page){
    $current_page = $total_page;
}
else if ($current_page < 1){
    $current_page = 1;
}

$start = ($current_page - 1) * $limit;

        if ($current_page > 1 && $total_page > 1){
            echo '<a href="index.php?p&trang='.($current_page-1).'">Prev</a>  ';
        }
         
        // Lặp khoảng giữa
        for ($i = 1; $i <= $total_page; $i++){
            // Nếu là trang hiện tại thì hiển thị thẻ span
            // ngược lại hiển thị thẻ a
            if ($i == $current_page){
                echo '<span>'.$i.'</span>  ';
            }
            else{
                echo '<a href="index.php?p&trang='.$i.'">'.$i.'</a>  ';
            }
        }
         
        // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
        if ($current_page < $total_page && $total_page > 1){
            echo '<a href="index.php?p&trang='.($current_page+1).'">Next</a>  ';
        }
        ?>
        </div>
    </div>