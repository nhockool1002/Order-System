<?php
include ("../config/config.php");
include ROOT."/include/functions.php";
spl_autoload_register("loadClass");

$trang = $_GET['trang'];


// $mysqli = new mysqli('localhost', 'root', '', 'dathen');

// if (mysqli_connect_errno()) {
//   echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
//   exit;
// }
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
$limit = 14;

$total_page = ceil($total / $limit);

if ($current_page > $total_page){
    $current_page = $total_page;
}
else if ($current_page < 1){
    $current_page = 1;
}

$start = ($current_page - 1) * $limit;

$obj = new Db();
$page = isset($_GET['p'])? $_GET['p'] : '' ;
if($page=='view'){
    if(isset($_GET['trang'])){
        $current_page = $_GET['trang'];
        echo $current_page;
    }
    $sql = "SELECT bangnhap.id as id, `hoten`, `dienthoai`, `masokham`, `thoigiandangky`, `thoigiandathen`, `thoigiandenkham`, `chiphi`, `id_trangthai`, `chat`, `deleted`,tenbacsi as tenbacsi, tenbenh as tenloaibenh, user as tennguoidung, tennguonden as tennguonden, tenphuongthuc as tenphuongthuc FROM bangnhap INNER JOIN bacsi ON bangnhap.id_bacsi = bacsi.id INNER JOIN loaibenh ON bangnhap.id_loaibenh = loaibenh.id INNER JOIN nguoidung ON bangnhap.id_nguoidung = nguoidung.id INNER JOIN nguonden ON bangnhap.id_nguonden = nguonden.id INNER JOIN phuongthuc ON bangnhap.id_phuongthuc = phuongthuc.id INNER JOIN trangthai on bangnhap.id_trangthai = trangthai.id WHERE bangnhap.deleted != '1'  ORDER BY bangnhap.id DESC LIMIT $start, $limit";
    $rows = $obj->select($sql);
   foreach($rows as $row){
        ?>
       <tr>
            <td id="details-td"><div><a href="index.php?page=xemchitiet&id=<?php echo $row['id'] ?>" class="btn btn-black"><i class="fa fa-arrow-circle-o-down"></i></a></div></td>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['hoten'] ?></td>
            <td><?php echo $row['dienthoai'] ?></td>
            <td><?php echo $row['masokham'] ?></td>
            <td><?php echo $row['thoigiandangky'] ?></td>
            <td><?php echo $row['thoigiandathen'] ?></td>
            <td><?php echo $row['thoigiandenkham'] ?></td>
            <td><?php echo $row['tenloaibenh'] ?></td>
            <td><?php echo $row['tenbacsi'] ?></td>
            <td><?php echo $row['tennguoidung'] ?></td>
            <td><?php echo $row['tennguonden'] ?></td>
            <td><?php echo $row['tenphuongthuc'] ?></td>
            <td><?php if($row['chiphi'] == NULL){echo $row['chiphi'];}else echo $row['chiphi']; ?></td>
            <td id="<?php if($row['id_trangthai'] == 1){
                echo "blackmassage";
            }else if($row['id_trangthai'] == 2){
                echo "bluemassage";
            }else if($row['id_trangthai'] == 3){
                echo "orangemassage";
            }else echo "greymassage"; ?>"><?php if($row['id_trangthai'] == 1){
                echo "<p class='black-messsage'>Chưa xác định</p>";
            }else if($row['id_trangthai'] == 2){
                echo "<p class='black-messsage'>Đang chờ</p>";
            }else if($row['id_trangthai'] == 3){
                echo "<p class='black-messsage'>Đã đến</p>";
            }else echo "<p class='black-messsage'>Dời lịch</p>"; ?></td>
        </tr>
        <?php
    }
} else{

    // Basic example of PHP script to handle with jQuery-Tabledit plug-in.
    // Note that is just an example. Should take precautions such as filtering the input data.

    header('Content-Type: application/json');

    $input = filter_input_array(INPUT_POST);



    if ($input['action'] == 'edit') {
        $obj = new Db();
        $sql = "UPDATE `bangnhap` 
                SET `hoten`= :hoten, 
                    `dienthoai` = :dienthoai,
                    `masokham` = :masokham,
                    `thoigiandathen` = :thoigiandathen,
                    `thoigiandenkham` = :thoigiandenkham,
                    `id_loaibenh` = :loaibenh,
                    `id_bacsi` = :bacsi,
                    `id_nguonden` = :nguonden,
                    `id_phuongthuc` = :phuongthuc,
                    `chiphi` = :chiphi,
                    `id_trangthai` = :trangthai
                WHERE `id` = :id";
        $arr[":id"] = $input['id'];
        $arr[":trangthai"] = $input['trangthai'];
        $arr[":chiphi"] = $input['chiphi'];
        $arr[":phuongthuc"] = $input['phuongthuc'];
        $arr[":nguonden"] = $input['nguonden'];
        $arr[":bacsi"] = $input['bacsi'];
        $arr[":loaibenh"] = $input['loaibenh'];
        if($input['thoigiandathen'] == ""){
            $arr[":thoigiandathen"] = NULL;
        }else{
            $arr[":thoigiandathen"] = $input['thoigiandathen'];
        }
        if($input['thoigiandenkham'] == ""){
            $arr[":thoigiandenkham"] = NULL;
        }else{
            $arr[":thoigiandenkham"] = $input['thoigiandenkham'];
        }
        $arr[":masokham"] = $input['masokham'];
        $arr[":dienthoai"] = $input['dienthoai'];
        $arr[":hoten"] = $input['hoten'];
        $obj->select($sql, $arr);
    } else if ($input['action'] == 'delete') {
        $obj = new Db();
        $namy = "UPDATE bangnhap SET deleted=1 WHERE id='" . $input['id'] . "'";
        $obj->select($namy);
    } else if ($input['action'] == 'restore') {
        
    }

    mysqli_close($mysqli);

    echo json_encode($input);
    
}
?>