<?php
class Method extends Db{
    public function ListMethod(){
        $sql = "SELECT * FROM phuongthuc";
        return $this->select($sql);
    }
}
?>