<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "../as/BaseModel.php";

class Model extends BaseModel
{
    public function index(){
        $data = null;

        $query = "SELECT * FROM notes";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();

        return $data;
    }

    public function read($id){
        $data = null;

        $query = "SELECT * FROM notes WHERE id = '$id'";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetch();

        return $data;
    }
}
