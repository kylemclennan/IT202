<?php
  $username = $POST['username'];
  $password = $POST['password'];
  
  $username = stripcslashes($username);
  $password = stripcslashes($password);
  $username = mysql_real_escape_string($username);
  $password = mysql_real_escape_string($password);
?>