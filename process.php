<?php
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $username = stripcslashes($username);
  $password = stripcslashes($password);
  $username = mysql_real_escape_string($username);
  $password = mysql_real_escape_string($password);
  
  $conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
  $db = new PDO($conn_string, $username, $password);
?>