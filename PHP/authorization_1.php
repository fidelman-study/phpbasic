<?php
	session_start();
	include_once ("authorization_2.php");
	//if (auth("midik", "1234")) {
	//	echo "GOOD!";
	//}

	if (isset($_GET['login']) && isset($_GET['password'])) {
		if (auth($_GET['login'], $_GET['password'])) {
			
			$_SESSION['user'] = $_GET['login'];
			echo "GOOD!";
		} else {
			echo "no";
		}
	} else {
		if (isset($_GET['out'])) {
			unset($_SESSION['user']);
		} else {
			echo "hi";
		}
	}
	

?>