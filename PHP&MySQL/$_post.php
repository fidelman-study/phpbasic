<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>$_POST</title>
</head>
<body>
	<form method="post">
		<input type="text" name="text" placeholder="Введите заголовок">
		<input type="submit" name="button" value="Output">
		<br>
		<?php
			if (isset($_POST['button'])) {
				$a = $_POST['text'];
				echo $a;
			}
		?>
	</form>
</body>
</html>