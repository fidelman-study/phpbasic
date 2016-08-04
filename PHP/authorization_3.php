<?php
	session_start();
	if (isset($_SESSION['user'])) {
		echo "hello";
	} else {
		echo "no";
	}

?>