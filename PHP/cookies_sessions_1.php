<?php
	setcookie("cookie_name","value_cookie",time()+(1000*60*60*24*30*12));
	setcookie("cookie_name2","value_cookie22",time()+(1000*60*60*24*30*12));
	setcookie("user_login","andrei",time()+(1000*60*60*24*30*12));
	setcookie("user_login_2","andrei",time()+(1000*60*60*24*30*12));
	echo $_COOKIE['cookie_name'];
	echo "<br>";
	echo $_COOKIE['cookie_name2'];
	echo "<br>";

	
	if (isset($_COOKIE['user_login'])) {
		echo $_COOKIE['user_login'];
	} else {
		echo "Cookie Undefined";
	}
	echo "<br>";



?>