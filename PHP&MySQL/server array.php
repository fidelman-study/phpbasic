<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Server</title>
</head>
<body>
	<?php
		$ip = $_SERVER['HTTP_USER_AGENT'];
		echo $ip;
		echo "<br>";

	?>
</body>
</html>