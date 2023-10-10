<?php 
include 'DB.php';

class Model{

    public function getStudenData(){
        $sql = 'SELECT * FROM tbl_student';
        $stmt = DB::prepare($sql);
        $stmt->execute();
        $stmt->fetchAll();
    }
}

?>