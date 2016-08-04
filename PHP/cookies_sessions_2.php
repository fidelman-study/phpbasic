<?php
	if (isset($_COOKIE['user_login_2'])) {
		echo $_COOKIE['user_login_2'];
	} else {
		echo "Cookie Undefined"; //проверка глобальности массива
	}
	echo "<br>";
	
?>