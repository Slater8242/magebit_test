<!DOCTYPE html>
<html>
<head>
  <title>Column Sorting using PHP and MySQL - ItSolutionStuff.com</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
 
<div class="container">
  <h1>Column Sorting using PHP and MySQL - ItSolutionStuff.com</h1>
<?php
     
    $hostName = "localhost";
    $username = "root";
    $password = "";
    $dbname = "magebit_task";
 
    $mysqli = new mysqli($hostName, $username, $password, $dbname);
 
    $orderBy = !empty($_GET["orderby"]) ? $_GET["orderby"] : "name";
    $order = !empty($_GET["order"]) ? $_GET["order"] : "asc";
 
    $sql = "SELECT * FROM subscribers ORDER BY " . $orderBy . " " . $order;
  
    $res = $mysqli->query($sql);
  
    $nameOrder = "asc";
    $codeOrder = "asc";
  
    if($orderBy == "email" && $order == "asc") {
      $nameOrder = "desc";
    }
    if($orderBy == "time" && $order == "asc") {
      $codeOrder = "desc";
    }
?>
<table class="table table-bordered">
  <thead>
    <tr>
      <th><a href="?orderby=name&order=<?php echo $nameOrder; ?>">Name</a></th>
      <th><a href="?orderby=code&order=<?php echo $codeOrder; ?>">Code</a></th>
    </tr>
  </thead>
  <tbody>
  
    <?php
    while($row = mysqli_fetch_assoc($res)){
    ?>
      <tr>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['time']; ?></td>
      </tr>
    <?php
    }
    ?>
  
  </tbody>
</table>
  
</div>
  
</body>
</html>