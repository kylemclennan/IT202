<!doctype html>
<?php
#turn error reporting on
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require('config.php');
echo $host;
$connection_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
try{
	$db = new PDO($connection_string, $username, $password);
	echo "Should have connected";
}
catch(Exception $e){
	echo $e->getMessage();
	exit("It didn't work");
}/*
if(isset($_POST['submit'])){
  $mteverest=$_POST['mteverest'];
  $query ="INSERT INTO `qsn`(`qsn`) VALUES ('$mteverest')";
  try{
    $result = mysqli_query($conn, $query);
    if($result){
      if(mysqli_affected_rows($conn)>0){
        echo "submitted successfully";
      }
      else{
        echo "error in submission"
        }
    }
}*/
?>

<html>
<head>
<meta charset="uutf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
  <table align ="center">
  <tr>
    <td>What is 4424+4424?</td>
  </tr>
  <tr>
    <td></td>
    <td><input type="radio" name="math" value="8848">8848</td>
  </tr>
    <tr>
    <td></td>
    <td><input type="radio" name="math" value="9848">9848</td>
  </tr>
    <tr>
    <td></td>
    <td><input type="radio" name="math" value="10848">10848</td>
  </tr>
    <tr>
    <td></td>
    <td><input type="radio" name="math" value="11848">11848</td>
  </tr>
  <tr>
    <td><input type="submit" name="submit" value="submit"></td>
    <td><input type="submit" name="check" value="check result"></td>
  </table>
</form>
</body>
</html>