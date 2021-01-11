<?php
require "database/emailValidation.php";
$validation= new emailValidation();
$validation->validation();


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE HTML>
<html>

<head>
</head>

<body>

    <h1>Testing</h1>
    <form method="post">
        email: <input type="text" name="email" <?php if (!$validation->checkemail($validation->email) || $validation->columbia($validation->email)) { ?>>
        <input type="submit" name="submit" value="submit"   disabled <?php } ?>>
        <span><?php echo $validation->emailMessage ?></span>
    </form>

    <?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>

</html>