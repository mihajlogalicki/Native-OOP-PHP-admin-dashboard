<?php

class Category {

    private $conn;
    private $table_name = 'categories';
    private $name;
    private $description;
    private $id;

    public function __construct($db){
        $this->conn = $db;
    }

    public function read(){
        $query = 
        "SELECT
         * 
         FROM 
         " . $this->table_name . "
         ORDER BY name";

         $stmt = $this->conn->prepare($query);
         $stmt->execute();
         return $stmt;
    }

    public function readName(){
        $query = "SELECT id, name FROM " . $this->table_name . " WHERE id = ? LIMIT 1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $stmt;
    }
}

?>