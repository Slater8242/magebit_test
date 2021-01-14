<?php
require "dbconnection.php";
require "userData.php";

class getusers extends dbconnection{

    private $conn;
    public function __construct($dbConn){
        $this->conn = $dbConn;
    }
    
    public function getUsers(){

        
        // $stmt=$this->connect()->prepare($test);
        // $stmt->execute();
        // while ($row = $stmt->fetch()) {
        //     $data[]= new userData($row); 
        // }
        // if (!empty($data)) {
        //     return $data;
        // }else{
        //     return null;
        // }
    }

    // public $sql = "SELECT * FROM subscribers";
    // public $result=$this->connect()->query($sql);
    // public function getUsers(){
    //     $sql = "SELECT * FROM subscribers";
    //     $result=$this->connect()->query($sql);
    //     $resultCheck = mysqli_num_rows($result);
    //     if ($resultCheck>0) {
    //         while ($row= mysqli_fetch_assoc($result)) {
    //             echo $row["email"];
    //         }
    //     }
        
        // $resultArray=array();
        // while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
        //     $resultArray[]=$row;
        // }
        // return $resultArray;
    

    // public function getUsers(){
    //     $result=$this->connect()->query($this->sql);
    //     $numRows=$result->num_rows;
    //     if ($numRows >0) {
    //         while ($row=$result->fetch_assoc()) {
    //             $data[]=$row;
    //         }
    //         return $data;
    //     }
    // }

}