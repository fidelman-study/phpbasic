<?php

	$stirng = "";

	$user_name_base = "midik";
	$password_name_base = "password123";
	$user = "midik";
	$password = "password123";
	/*
	if ($user == $user_name_base && $password == $password_name_base) {
		$stirng = "ok";
	}
	*/

	$stirng = ($user == $user_name_base && $password == $password_name_base) ? "ok" : "";


	if ($stirng == "ok") {
		echo "Good!";
	} else {
		echo "Bad!";
	}

	echo "<br>";

	$a = 10;
	$b = 5;
	$c = 4;
	$result = ($a > $b)
	?(
		($b > $c)
		? "a>b and b>c"
		:"a>b and b<c"
	)
	:(
		($b > $c)
		?"a<b and b>c"
		:"a<b and b<c"
	);
	echo $result;

?>