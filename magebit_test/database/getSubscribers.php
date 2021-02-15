<?php

class getSubscribers extends dbConnection{

    public function getAllSubscribers(){
        $sql = "SELECT * FROM subscribers";
        $result=$this->connect()->query($sql);
        $numRows=$result->num_rows;
        if ($numRows >0) {
            while ($row=$result->fetch_assoc()) {
                $data[]=$row;
            }
            return $data;
        }
    }

    protected function getAscSubscribers(){
        $sql = "SELECT * FROM subscribers ORDER BY email ASC";
        $result=$this->connect()->query($sql);
    }
}