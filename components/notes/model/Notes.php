<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "../as/BaseModel.php";

class Notes extends BaseModel
{
    public function index(){
        $data = null;

        $query = "SELECT * FROM notes";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll();

        return $data;
    }

    public function delete($id){
        $data = null;

        $query = "DELETE FROM notes WHERE id = '$id'";

        if($stmt = $this->conn->exec($query)){
            return "deleted";
        }else{
            return "not deleted";
        }
    }
}
