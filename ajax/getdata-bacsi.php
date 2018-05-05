<?php
include ("../config/config.php");
include ROOT."/include/functions.php";
spl_autoload_register("loadClass");
$obj = new Db();
$json = array();
$sql = "SELECT * FROM bacsi";
$rows = $obj->select($sql);
foreach($rows as $row){
    $json[] = $row;
}
echo json_encode($json);
?>