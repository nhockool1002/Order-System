<?php
include ("../config/config.php");
include ROOT."/include/functions.php";
spl_autoload_register("loadClass");
$obj = new Db();
if(isset($_GET['tenbenh'])){
    $tenbenh = $_GET['tenbenh'];
    $sql = "INSERT INTO `loaibenh`(`tenbenh`) VALUES ('$tenbenh')";
    $obj->select($sql);
    echo 1;
}
?>