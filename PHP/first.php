<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP</title>
</head>
<body>
	<?php
		define(PI, 3.14159);
		echo "PI=".PI;
		echo "<br>";
		
		var_dump(PI);
		echo "<br>";

		function hello() {
			echo "Hello<br>";
		}
		hello();

		$array_string = array(
			"String #1",
			"String #2",
			"String #3",
			"String #4",
			"String #5",
			"String #6",
			"String #7",
			"String #8",
			);
		echo "<pre>";
		var_dump($array_string);
		echo "<pre>";
		echo "<br>";
	?>
</body>
</html>