<?php
include ("../config/config.php");
include ROOT."/include/functions.php";
spl_autoload_register("loadClass");
$obj = new Db();
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM `bacsi` WHERE `id` = :id";
    $arr[':id'] = $id;
    $obj->select($sql, $arr);
    echo "1";
}
?>