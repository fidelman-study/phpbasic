<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>math</title>
</head>
<body>
	<?php
		echo abs(-6);
		echo "<br>";

		echo round(3.2);
		echo "<br>";

		echo ceil(6.1); //round up
		echo "<br>";

		echo floor(6.1); //round down
		echo "<br>";

		echo sin(45);
		echo "<br>";
		echo cos(45);
		echo "<br>";
		echo tan(45);
		echo "<br>";

		echo sqrt(100);
		echo "<br>";

		echo pow(10,2);
		echo "<br>";

		echo rand(1,50);
		echo "<br>";

		$arrayName = array(5 ,6,7,8,9 );
		echo min($arrayName);
		echo "<br>";
		echo max($arrayName);
		echo "<br>";

		
	?>
</body>
</html>