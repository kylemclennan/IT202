<?php
//helper
function getName(){
	if(isset($_GET['name'])){
		echo "<p>Hello, " . $_GET['name'] . "</p>";
	}
}
?>
<html>
<head>
<script>
function validate(){
	var form = document.forms[0];
	var password = form.password.value;
	car conf = form.confirm.value;
	console.log(password)
	console.log(conf);
	if (password == conf){
		return true;
	}

	alert("Passwords don't match");
	return false;
</script>
</head>
<body><?php getName();?>
<form method="POST" action="#" onsubmit="return validate();">
<input name="name" type="text" placeholder="Enter your name"/>
<input type="password" name="password"/>
<input type="password" name="confirm"/>

<input type="submit" value="Try it"/>
</form>
</body>
</html>
<?php
if(isset($_GET)){
	echo "<br><pre>" . var_export($_GET, true) . "</pre><br>";
}
