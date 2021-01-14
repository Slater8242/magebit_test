<?php

class User {
    /* Properties */
    private $conn;

    /* Get database access */
    public function __construct($dbConn) {
        $this->conn = $dbConn;
    }

    // public function getAllUsers(){
    //     return "SELECT * FROM subscribers";
    // }
    
    // public function getAscSubscribers(){
    //     return "SELECT * FROM subscribers ORDER BY email ASC";
    // }

    /* List all users */
    public function getUsers($sql) {
        // return $this->conn->query("SELECT * FROM subscribers")->fetchAll();
        $stmt=$this->conn->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            $data[]= new userData($row); 
        }
        if (!empty($data)) {
            return $data;
        }else{
            return null;
        }
    }

}
