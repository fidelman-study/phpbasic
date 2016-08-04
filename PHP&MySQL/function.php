<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>function</title>
</head>
<body>
	<?php
		date_default_timezone_set('America/Los_Angeles');
		echo date('Y-M-d');
		echo "<br>";

		echo rand(20,100);
		echo "<br>";

		$a = 4;
		unset($a);
		echo $a;
		echo "<br>";
		function square($n){
			$n*=$n;
			return $n;
		}
		echo square(2);
		echo "<br>";

		$b = $_GET['b'];
		if ($b == 2) {
			echo "Все работает";
		} else {
			echo "Не работает";
		}
		echo "<br>";

	?>
</body>
</html>