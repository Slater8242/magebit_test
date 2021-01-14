<?php
  include "database2/userData.php";
  include "database2/dbconnection.php";
  include "database2/user.php";
  $dbConn = new dbconnection();
  $user = new User($dbConn->connect());

  if(isset($_GET["order"])){
    $order = $_GET["order"];
  }else{
    $order = "email";
  }
  if(isset($_GET["sort"])){
    $sort = $_GET["sort"];
  }else{
    $sort = "ASC";
  }
  $sort == 'DESC' ? $sort = 'ASC' : $sort = 'DESC';
  $list = $user->getUsers("SELECT * FROM subscribers ORDER BY ".$order." ".$sort."");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Db Table</title>
  <style>
    tr,th,td{
      border: 1px solid black;
    }
  </style>
</head>
<body>
  <form action="" method="get">
    <input type="submit" name="default" value="default">
    <input type="submit" name="email" value="Email Sorting">
    <input type="submit" name="date" value="Date Sorting">
    <table>
    <?php
      echo '<tr>
        <th>Id</th>
        <th><a href=?order=email&&sort='.$sort.'>Email</a></th>
        <th><a href=?order=time&&sort='.$sort.'>Date</a></th>
      </tr>';
      
        
          if (isset($_GET["default"])) {
            foreach ($list as $data) {
              echo "<tr><td>".$data->getUserId()."</td>";
              echo "<td>".$data->getUserEmail()."</td>";
              echo "<td>".$data->getUserTime()."</td></tr>";
            }
          }elseif (isset($_GET["email"])) {
            foreach ($asc_name as $data) {
              echo "<tr><td>".$data->getUserId()."</td>";
              echo "<td>".$data->getUserEmail()."</td>";
              echo "<td>".$data->getUserTime()."</td></tr>";
            }
          }elseif (isset($_GET["date"])) {
            foreach ($asc_date as $data) {
              echo "<tr><td>".$data->getUserId()."</td>";
              echo "<td>".$data->getUserEmail()."</td>";
              echo "<td>".$data->getUserTime()."</td></tr>";
            }
          }
        ?>
      
    </table>
  </form>
    
    
</body>
</html>