<?php 
// Requiring DB file to be connected to DB and sendin queries
require('dbConnection.php');

class subscribers extends dbConnection{
    // function inserting data into DB
    public function insertSubscribers(){
        if (isset($_POST["emailSubmit"])) {
            $email=$_POST["emailText"];
            $sql = "INSERT INTO subscribers (email) VALUES ('$email');";
            $result = $this->connect()->query($sql);
        }
    }
}
