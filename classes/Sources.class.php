<?php
    class Sources extends Db{
        public function ListSources(){
            $sql = "SELECT * FROM nguonden";
            return $this->select($sql);
        }
    }
?>