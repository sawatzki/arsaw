<?php
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__) . $ds . '..' . $ds . '..') . $ds;

require_once "{$base_dir}BaseModel.php";

class Login extends BaseModel
{
    public $data;

    public function checkUser($data){
        $this->data = $data;

        $query = "SELECT login AS logged FROM users WHERE login = '$data[login]' AND password = '$data[password]'";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $data = $stmt->fetch();

        return $data;
    }

    public function registerUser($data){

        $this->data = $data;
        $now = date("Y-m-d H:i:s");

        $query = "INSERT INTO users (login, password, role, created) VALUES ('$data[login]', '$data[password]', 'User', '$now')";

        if($stmt = $this->conn->exec($query)){
            return true;
        }else{
            return false;
        }

        return $data;
    }
}