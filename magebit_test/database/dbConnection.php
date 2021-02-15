<?php

class dbConnection {
    // DB login property    
    private $host="localhost";
    private $user="root";
    private $password="";
    private $dbName="magebit_task";
    private $charset="utf8mb4";
    // DB connection function
    public function connect(){        
        try {
            $dbh =("mysql:host=".$this->host.";dbname=".$this->dbName.";=charset".$this->charset);
            $pdo = new PDO($dbh,$this->user,$this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed : ".$e->getMessage();
        }
    }
}