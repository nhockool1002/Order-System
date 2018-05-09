<?php
if(isset($_SESSION['kangcode_user'])){
    unset($_SESSION['kangcode_user']);
    header('Location:index.php?page=login');
}
?>