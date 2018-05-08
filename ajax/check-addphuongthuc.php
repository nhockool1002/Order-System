<?php
include ("../config/config.php");
include ROOT."/include/functions.php";
spl_autoload_register("loadClass");
$obj = new Db();
if(isset($_GET['tenphuongthuc'])){
    $tenphuongthuc = $_GET['tenphuongthuc'];
    $count = strlen($tenphuongthuc);
    if($count <= 3){
       echo "2";
    }
    else{
        $sql = "SELECT * FROM phuongthuc WHERE tenphuongthuc LIKE '%$tenphuongthuc%'";
        $obj->select($sql);
        $count = $obj->getRowCount();
        if($count == 0)
        {
            echo "0";
        }
        if($count >= 1){
            echo "1";
        }
    }
    
}
?>