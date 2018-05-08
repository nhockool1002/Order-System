<?php
include ("../config/config.php");
include ROOT."/include/functions.php";
spl_autoload_register("loadClass");
$obj = new Db();
if(isset($_GET['tenbacsi'])){
    $tenbacsi = $_GET['tenbacsi'];
    $count = strlen($tenbacsi);
    if($count <= 3){
       echo "2";
    }
    else{
        $sql = "SELECT * FROM bacsi WHERE tenbacsi LIKE '%$tenbacsi%'";
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