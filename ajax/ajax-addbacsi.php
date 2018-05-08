<?php
include ("../config/config.php");
include ROOT."/include/functions.php";
spl_autoload_register("loadClass");
$obj = new Db();
if(isset($_GET['tenbacsi'])){
    $tenbacsi = $_GET['tenbacsi'];
    $sql = "INSERT INTO `bacsi`(`tenbacsi`) VALUES ('$tenbacsi')";
    $obj->select($sql);
    echo "1";
}
?>