<?php

class dbConnection {
    // DB login property
    private $host;
    private $user;
    private $password;
    private $dbName;
    // DB connection function
    protected function connect(){
        $this->host="localhost";
        $this->user="root";
        $this->password="";
        $this->dbName="magebit_task";
        $conn = new mysqli($this->host,$this->user,$this->password,$this->dbName);
        return $conn;
    }
    
}