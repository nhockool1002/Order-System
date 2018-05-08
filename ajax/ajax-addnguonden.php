<?php
include ("../config/config.php");
include ROOT."/include/functions.php";
spl_autoload_register("loadClass");
$obj = new Db();
if(isset($_GET['tennguonden'])){
    $tennguonden = $_GET['tennguonden'];
    $sql = "INSERT INTO `nguonden`(`tennguonden`) VALUES ('$tennguonden')";
    $obj->select($sql);
    echo "1";
}
?>