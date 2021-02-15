<?php

class users{
    // database connection and table name
    private $conn;
    private $table_name= "users";

    //object properties
    public $id;
    public $email;
    public $timestamp;
    
    public function __construct($db){
        $this->conn = $db;
    }

    function readAll($record_num,$record_per_page){
        $query = "SELECT * FROM ".$this->table_name." ORDER BY email ASC LIMIT {$record_num},{$record_per_page}";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

}