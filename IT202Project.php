<html>
<head></head>
<body>
	<form method="POST"/>
		<input type="text" name="username"/>
		<input type="password" name="password"/>
		<input type="submit" value="Submit for login"/>
	</form>
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
			$stmt = $db->prepare("select id, username, password from `Users` where username = :username LIMIT 1");
			$stmt->execute(array(":username"=>$user));

			$results = $stmt->fetch(PDO::FETCH_ASSOC);

			if($results && count($results) > 0){
				if(password_verify($pass, $results['password'])){
					echo "Welcome, " . $results["username"];
					echo "[" . $results["id"] . "]";
					$user = array("id"=> $results['id'],
								"name"=> $results['username']
								);
					$_SESSION['user'] = $user;
					echo var_export($user, true);
					echo var_export($_SESSION, true);
					header("Location: samplelandingpage.php");
					
				}
				else{
					echo "Please enter correct Password";
				}
			}
			else{
					echo "Please enter correct Username";
			}
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}
?>

