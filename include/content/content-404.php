<?php
if(!isset($_SESSION['kangcode_user'])){
    header('Location:index.php?page=login');
}
?>
<div class="container-fluid" style="margin-top:35px">
<div class='alert alert-danger text-sm-center'>Làm lìn  gì có địa chỉ này</div>
</div>