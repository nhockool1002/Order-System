<?php
class Doctor extends Db{
    public function ListDoctor(){
        $sql = "SELECT * FROM bacsi";
        return $this->select($sql);
    }
}
?>