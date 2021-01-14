<?php

class userData{
    // Initializing properties
    private $email,$id,$time;
    // Database row
    public function __construct($dbRow){
        $this->id = $dbRow["id"];
        $this->email = $dbRow["email"];
        $this->time = $dbRow["time"];
    }
    // Function to return email
    public function getUserEmail(){
        return $this->email;
    }
    // Function to return id
    public function getUserId(){
        return $this->id;
    }
    // Function to return time
    public function getUserTime(){
        return $this->time;
    }
}