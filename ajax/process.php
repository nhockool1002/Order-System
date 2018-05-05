<?php
include ("../config/config.php");
include ROOT."/include/functions.php";
spl_autoload_register("loadClass");
$obj = new Db();
$page = isset($_GET['p'])? $_GET['p'] : '' ;
if($page=='view'){
    $sql = "SELECT bangnhap.id as id, `hoten`, `dienthoai`, `masokham`, `thoigiandangky`, `thoigiandathen`, `thoigiandenkham`, `chiphi`, `trangthai`, `chat`, `deleted`,tenbacsi as tenbacsi, tenbenh as tenloaibenh, user as tennguoidung, tennguonden as tennguonden, tenphuongthuc as tenphuongthuc FROM bangnhap INNER JOIN bacsi ON bangnhap.id_bacsi = bacsi.id INNER JOIN loaibenh ON bangnhap.id_loaibenh = loaibenh.id INNER JOIN nguoidung ON bangnhap.id_nguoidung = nguoidung.id INNER JOIN nguonden ON bangnhap.id_nguonden = nguonden.id INNER JOIN phuongthuc ON bangnhap.id_phuongthuc = phuongthuc.id WHERE bangnhap.deleted != '1'";
    $rows = $obj->select($sql);
   foreach($rows as $row){
        ?>
       <tr>
            <td></td>
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
            <td><?php echo $row['chiphi'] ?></td>
            <td><?php echo $row['trangthai'] ?></td>
        </tr>
        <?php
    }
} else{

    // Basic example of PHP script to handle with jQuery-Tabledit plug-in.
    // Note that is just an example. Should take precautions such as filtering the input data.

    header('Content-Type: application/json');

    $input = filter_input_array(INPUT_POST);



    if ($input['action'] == 'edit') {
        $mysqli->query("UPDATE tabledit SET name='" . $input['name'] . "', gender='" . $input['gender'] . "', email='" . $input['email'] . "', phone='" . $input['phone'] . "', address='" . $input['address'] . "' WHERE id='" . $input['id'] . "'");
    } else if ($input['action'] == 'delete') {
        $mysqli->query("UPDATE tabledit SET deleted=1 WHERE id='" . $input['id'] . "'");
    } else if ($input['action'] == 'restore') {
        $mysqli->query("UPDATE tabledit SET deleted=0 WHERE id='" . $input['id'] . "'");
    }

    mysqli_close($mysqli);

    echo json_encode($input);
    
}
?>