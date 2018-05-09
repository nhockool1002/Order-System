<?php 
ob_start();
session_start();
include ("../config/config.php");
include ROOT."/include/functions.php";
spl_autoload_register("loadClass");
$obj = new Db();
if(isset($_POST['submit'])){
    $hoten = $_POST['hoten'];
    $dienthoai = $_POST['dienthoai'];
    $masokham = $_POST['masokham'];
    $thoigiandangky = $_POST['thoigiandangky'];
    $thoigiandathen = $_POST['thoigiandathen'];
    $thoigiandenkham = $_POST['thoigiandenkham'];
    $loaibenh = $_POST['loaibenh'];
    $bacsi = $_POST['bacsi'];
    $nguoidung = $_POST['nguoidung'];
    $nguonden = $_POST['nguonden'];
    $phuongthuc = $_POST['phuongthuc'];
    $chiphi = $_POST['chiphi'];
    $trangthai = $_POST['trangthai'];
    $chat = $_POST['chat'];


    // $sql = "INSERT INTO `bangnhap`(`hoten`, `dienthoai`, `masokham`, `thoigiandangky`, `thoigiandathen`, `thoigiandenkham`, `id_loaibenh`, `id_bacsi`, `id_nguoidung`, `id_nguonden`, `id_phuongthuc`, `id_trangthai`, `chiphi`, `chat`) 
    //         VALUES (
    //             '$hoten',
    //             '$dienthoai',
    //             '$masokham',
    //             '$thoigiandangky',
    //             '$thoigiandathen',
    //             '$thoigiandenkham',
    //             '$loaibenh',
    //             '$bacsi',
    //             '$nguoidung',
    //             '$nguonden',
    //             '$phuongthuc',
    //             '$trangthai',
    //             '$chiphi',
    //             '$chat')";
    $sql = "INSERT INTO `bangnhap`(`hoten`, `dienthoai`, `masokham`, `thoigiandangky`, `thoigiandathen`, `thoigiandenkham`, `id_loaibenh`, `id_bacsi`, `id_nguoidung`, `id_nguonden`, `id_phuongthuc`, `id_trangthai`, `chiphi`, `chat`) 
            VALUES (
                :hoten,
                :dienthoai,
                :masokham,
                :thoigiandangky,
                :thoigiandathen,
                :thoigiandenkham,
                :loaibenh,
                :bacsi,
                :nguoidung,
                :nguonden,
                :phuongthuc,
                :trangthai,
                :chiphi,
                :chat)";
    $arr[":hoten"] = $hoten;
    $arr[":dienthoai"] = $dienthoai;
    $arr[":masokham"] = $masokham;
    $arr["thoigiandangky"] = $thoigiandangky;
    $arr["thoigiandathen"] = $thoigiandathen;
    $arr["thoigiandenkham"] = $thoigiandenkham;
    $arr["loaibenh"] = $loaibenh;
    $arr["bacsi"] = $bacsi;
    $arr["nguoidung"] = $nguoidung;
    $arr["nguonden"] = $nguonden;
    $arr["phuongthuc"] = $phuongthuc;
    $arr["trangthai"] =  $trangthai;
    $arr["chiphi"] = $chiphi;
    $arr["chat"] = $chat;
    $obj->select($sql,$arr);
            }
?>