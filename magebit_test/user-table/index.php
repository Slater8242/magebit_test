<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // page given in URL parameter, default page is 1
    $page=isset($_GET["page"]) ? $_GET["page"] : 1;
    // number of records per page
    $record_per_page = 10;
    //  calculate for the query LIMIT clause
    $record_num = ($record_per_page * $page) - $record_per_page;
    //display the users if there are any
    if ($num>0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>Email</th>";
                echo "<th>Date & Time</th>";
            echo "</tr>";

            while ($row= $stmt->fetch(PDO::FETCH_ASSOC)){

                extract($row);

                echo "<tr>";
                    echo "<td>{$id}</td>";
                    echo "<td>{$email}</td>";
                    echo "<td>{$time}</td>";
                    echo "<td>";
                        echo "<a delete-id='{$id}'>Delete</a>";
                    echo "</td>";
                echo "</tr>";
            }
        echo "</table>";
        // paging buttons will be here
    }else{
        echo "No user found";
    }

    // include database and object files
    include "../database/dbConnection.php";
    include "users.php";

    //instantiate database and objects
    $database = new dbConnection();
    $db = $database->connect();

    $users = new users($db);

    // query users
    $stmt = $users->readAll($record_num,$record_per_page);
    $num = $stmt->rowCount();
?>
    
</body>
</html>