<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>if - else</title>
</head>
<body>
	<?php 

	$a = 10;
	$b = 5;

	if ($a == $b) {
		echo "Переменные равны";
	} else {
		echo "Переменные не равны";
	}

	echo "<br><hr>";

	$c = "Солнце";
	$d = "Плохое";

	if ($c == "Солнце" || $d == "Хорошее") {
		echo "Я иду гулять<br><hr>";
	} else {
		echo "Я сижу дома<br><hr>";
	}

	$e = "";
	if (empty($e)) {
		echo "Переменная пустая<br><hr>";
	} else {
		echo "Переменная не пустая<br><hr>";
	}


	$f = "";
	if (isset($f)) {
		echo "Переменная существует<br><hr>";
	} else {
		echo "Переменная не существует<br><hr>";
	}

	$g = 3;
	$h = 3;
	if ($g == $h) {
		$k = 3;
		if ($k == $h) {
			echo "k = h<br><hr>";
		} else {
			echo "k != h<br><hr>";
		}
	} else {
		echo "g != h<br><hr>";
	}


	?>
</body>
</html>