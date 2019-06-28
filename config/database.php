<?php

class Database {

    private $host = "localhost";
    private $username = "root";
    private $db_name = "webshop";
    private $password = "";
    public $conn;

    public function getConnection(){
        try {
           $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db_name, $this->username, $this->password);
        } catch (PDOException $ex) {
            echo "Connection error" . $ex->getMessage();
        }
        return $this->conn;
    }
}

?>