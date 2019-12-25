<?php
class Database{

    private $host = "localhost";
    private $user = "userName";
    private $db = "dbName";
    private $password = "password";
    protected $conn = "";

    public function __construct()
    {
        try {
         $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->password);
        }catch (PDOException $e){
            echo "Keine DB-Verbindung: " . $e->getMessage();
        }
    }

}