<?php
$servername = "sql1.njit.edu";
$username = "km653";
$password = "60bnMpPYF";
$table = "";


$conn_string = "mysql:host=$servername; dbname=$username; charset=utf8mb4";
$db = new PDO($conn_string, $username, $password);


$type = $_POST['assign'];
$name2 = $_POST['nameLog'];
$password2 = $_POST['passLog'];
$email = $_POST['emailLog'];

$stmt = $db->query("SELECT * from patrons WHERE name = '$name2'");
$result = $stmt->fetch();




if($type == "option"){

  if ($result['name'] == $name2 && $result['password'] == $password2)
  {
    header("Location: landing.php");
  }
?>
