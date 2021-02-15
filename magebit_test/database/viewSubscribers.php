<?php

class viewSubscribers extends getSubscribers{
    
    public function showSubscribers(){
        if (isset($_GET["default"])) {
            $datas = $this->getAllSubscribers();
            foreach($datas as $data){
                echo $data['id']."<br>";
                echo $data['email']."<br>";
            }
        }
    }

    public function showAscSubscribers(){
        if (isset($_GET["name"])) {
            $asc_query = $this->getAscSubscribers();
            foreach($asc_query as $data){
                echo "<table>";
                echo "<tr>";
                echo "<th>Id</th>";
                echo "<td>".$data['id']."</td>"."<n\>";
                echo "<th>Email</th>";
                echo "<td>".$data['email']."</td>"."<n\>";
                echo "</tr>";
                echo "</table>";
            }
        }
    }
}

      
        
        
      
    