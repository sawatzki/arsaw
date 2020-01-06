<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__) . $ds . '..' . $ds . '..') . $ds;

require_once "{$base_dir}BaseModel.php";

class Login extends BaseModel
{
    public $data;

    public function getUser($data){
        $this->data = $data;

        $query = "SELECT * FROM users WHERE login = '$data[login]'";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetch();

        return $data;
    }
}