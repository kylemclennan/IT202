<?php
	echo "<pre>" . var_export($_GET, true) . "</pre>";

	if(isset($_GET['name'])){
		echo "<br>Hello, " . $_GET['name'] . "<br>";
	}
	if(isset($_GET['number'])){
		$number = $_GET['number'];
		echo "<br>" . $number . " should be a number ...";
		echo "<br>but it might not be<br>";
	}
	$var1 = "a";
	$var2 = "b";
	echo $var1 . " " . $var2;
	echo "<br>";
	echo "When I passed multiple same-named parameters with different valuse it only took the latest one I used.";
	echo "<br>";
	echo "When I passed a parameter value with a special character it still displayed the special character.";
	//TODO
	//handle addition of 2 or more parameters with proper numbering
	//concatenate 2 or more parameters values and echo them
	//try passing multiple same-named parameters with different values
	//try passing a parameter value with special characters
	//web.njit.edu/km653/IT202/handleRequestData.php?parameter1=a&p2=b
?>
