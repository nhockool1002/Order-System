<?php
ob_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
session_start();
include ("config/config.php");
include ROOT."/include/functions.php";
spl_autoload_register("loadClass");
$db= new Db();
?>