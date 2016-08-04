<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>function_string</title>
</head>
<body>
	<?php
		$a = array(
			"str1", 
			"str2", 
			"str3", 
			"str4", 
			"str5", 
			"str6", 
			);
		print_r($a);
		echo "<br>";

		$b = join("_", $a); //join = implode
		echo $b;			//create
		echo "<br>";

		$c = explode("_", $b); //separator
		print_r($c);
		echo "<br>";

		$x = "imgae.png";  //format
		$y = strstr($x, ".");
		echo $y;
		echo "<br>";

		$a = "1234567890";
		$b = substr($a, 3,-1); //cut, second - "+" cut - "-" stay from back; third - "+" stay - "-" cut from back
		echo $b;
		echo "<br>";

		$a = "\\<a href='#'>Text</a>\\"; 
		$a = htmlspecialchars($a); //recreate to string
		$a = stripslashes($a); //remove screening
		$a = addslashes($a); // add / before '
		echo $a;
		echo "<br>";

		if ("andrey" == trim(" andrey ")) {   //trim - delete spaces left and rigt; ltrim, rtrim;
			echo "true";
			echo "<br>";

		}

		$b = "Hello";
		$c = md5($b); //coding
		echo $c;


	?>
</body>
</html>