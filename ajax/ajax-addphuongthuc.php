<?php
include ("../config/config.php");
include ROOT."/include/functions.php";
spl_autoload_register("loadClass");
$obj = new Db();
if(isset($_GET['tenphuongthuc'])){
    $tenphuongthuc = $_GET['tenphuongthuc'];
    $sql = "INSERT INTO `phuongthuc`(`tenphuongthuc`) VALUES ('$tenphuongthuc')";
    $obj->select($sql);
    echo "1";
}
?>