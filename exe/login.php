<?php 
ob_start();
session_start();
include ("../config/config.php");
include ROOT."/include/functions.php";
spl_autoload_register("loadClass");
$obj = new Db();
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM nguoidung WHERE `user` = :username AND `password` = :password";
    $arr[':username'] = $username;
    $arr[':password'] = $password;
    $rows = $obj->select($sql, $arr);
    $_SESSION['kangcode_user_id'];
    $num =  $obj->getRowCount();
    if($num == 1){
        $_SESSION['kangcode_user'] = $username;
        foreach($rows as $row){
            $_SESSION['kangcode_user_id'] = $row['id'];
        }
        header('Location:../index.php');
    }else{
        $_SESSION['flash_err_message'] = true;
        header('Location:../index.php?page=login');
    }

}
?>