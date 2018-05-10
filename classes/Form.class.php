<?php
    class Form extends Db{
        public function CheckCode($masokham){
            $sql = "SELECT * FROM bangnhap WHERE masokham = '$masokham'";
            $count = $this->select($sql);
            echo $this->getRowCount();
        }
    }
?>