<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mail</title>
</head>
<body>
	<?php
		$header = "From: Andrew <fi93@mail.ru>" . "\r\n";
		$header .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
		if (mail('fi93@mail.ru', 'PHP', 'I\'ve send the message')) {
			echo "Сообщение отпарвлено";
		} else {
			echo "Ошибка";
		}
	?>
</body>
</html>