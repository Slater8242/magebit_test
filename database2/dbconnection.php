<?php

class dbconnection {
    // DB login property
    private $host;
    private $user;
    private $password;
    private $dbName;
    // DB connection function
    public function connect(){
        $this->host="localhost";
        $this->user="root";
        $this->password="";
        $this->dbName="magebit_task";
        $this->charset="utf8mb4";
        
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