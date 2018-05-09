<?php
class Diseases extends Db{
    public function ListDiseases(){
        $sql = "SELECT * FROM loaibenh";
        return $this->select($sql);
    }   
}
?>