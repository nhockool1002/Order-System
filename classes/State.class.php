<?php
    class State extends Db{
        public function ListState(){
            $sql = "SELECT * FROM trangthai";
            return $this->select($sql);
        }
    }
?>