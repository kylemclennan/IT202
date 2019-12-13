<?php
session_start();
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<html>
<head></head>
<body>
<h2>User Login</h2>
<p>Please enter your username with a password, if you do not have an account please click on the registration button</p>

	<form method="POST"/>
		<input type="text" name="username"/>
		<input type="password" name="password"/>
		<input type="submit" value="Login"/>
	</form>

<button onclick="myFunction()">Registration</button>
<script>
function myFunction() {
  location.replace("https://web.njit.edu/~km653/IT202/registrationpage.php")
}
</script>
</body>
</html>
<?php
	if(isset($_POST['username']) && isset($_POST['password'])){
		$user = $_POST['username'];
		$pass = $_POST['password'];
		try{
			require("config.php");
			$conn_string = "mysql:host=$host;dbname=$database;charset=utf8mb4";
			$db = new PDO($conn_string, $username, $password);
			$stmt = $db->prepare("select id, username, password from `login` where username = :username LIMIT 1");
			$stmt->execute(array(":username"=>$user));
			$results = $stmt->fetch(PDO::FETCH_ASSOC);
			if($results && count($results) > 0){
				if(password_verify($pass, $results['password'])){
					echo "Welcome, " . $results["username"];
					echo "[" . $results["id"] . "]";
					$user = array("id"=> $results['id'],
								"name"=> $results['username']
								);
					$sql = "select value from `System_Properties` where `key` = :key";
					$stmt = $db->prepare($sql);
					$r = $stmt->execute(array(":key"=>"admins"));
					$result = $stmt->fetch(PDO::FETCH_ASSOC);
					$user["isAdmin"] = false;
					echo var_export($result, true);
					if($result){
						if(strpos($result['value'], ($user["id"]."")) !== false){
							$user["isAdmin"] = true;
						}
					}
					else{
						echo $stmt->errorInfo();
					}
					
					$_SESSION['user'] = $user;
					echo var_export($user, true);
					echo var_export($_SESSION, true);
					header("Location: https://web.njit.edu/~km653/IT202/quiztwo.php");
					
				}
				else{
					echo "Invalid password";
				}
			}
			else{
					echo "Invalid username";
			}
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}
?>
