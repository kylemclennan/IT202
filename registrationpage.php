  
<?php
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<html>
<head>
<h1> Registration</h1>
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
	$('#register_form').submit(function(event){
		if(this.password.value.length == 0 || this.confirm.value.length == 0){
			alert("Please enter a password and confirm it");
			return false;
		}
		let isOk = this.password.value == this.confirm.value;
		if(!isOk){
			alert("Password and Confirm password don't match");
		}
		return isOk;
	});
});
</script>
</head>
<body>
  <p> Welcome to the registration page</p>
  <p> Please enter your username in the first box</p>
  <p> Please enter your password in the second box</p>
  <p> Please re- enter your password in the third box</p>
	<form id="register_form" method="POST"/>
		<input type="text" name="username"/>
		<input type="password" name="password"/>
		<input type="password" name="confirm"/>
		<input type="submit" value="Register"/>
	</form>
<button onclick="myFunction()">Back To Login</button>
<script>
function myFunction() {
  location.replace("https://web.njit.edu/~km653/IT202/IT202Project.php")
  }
</script>
</body>
</html>
<?php
	if(isset($_POST['username']) 
		&& isset($_POST['password'])
		&& isset($_POST['confirm'])){
			
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$confirm = $_POST['confirm'];
		if($pass != $confirm){
				echo "Passwords don't match";
				exit();
		}
		try{
			$hash = password_hash($pass, PASSWORD_BCRYPT);
			require("config.php");
			$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
			$db = new PDO($conn_string, $username, $password);
			$stmt = $db->prepare("INSERT into `login` (`username`, `password`) VALUES(:username, :password)");
			$result = $stmt->execute(
				array(":username"=>$user,
					":password"=>$hash
				)
			);
			print_r($stmt->errorInfo());
			
			echo var_export($result, true);
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}
?>