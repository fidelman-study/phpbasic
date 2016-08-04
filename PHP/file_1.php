<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>file_1</title>
</head>
<body>
	<div>
		<a href="file_2.php">Посмотреть информацию</a>
	</div>
	<form method="post">
		<label>Имя:<input type="text" name="name"></label>
		<label>E-mail:<input tyle="text" name="email"></label>
		<?php
			if (isset($_SERVER['http_referer'])) {
				$print = $_SERVER['http_referer'];
			} else {
				$print = "Нет реферальной страницы";
			}
		?>
		<div>
			<input type="hidden" value="<?php echo $_SERVER['REMOTE_ADDR'];?>" name="ip">
			<input type="hidden" value="<?php echo $print;?>" name="http-referer">
			<input type="hidden" value="<?php echo $_SERVER['HTTP_USER_AGENT'];?>" name="http-user-agent">
		</div>
		<input type="submit" value="Записать" name="send-info">
	</form>
	<?php
		if (isset($_POST['send-info'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$ip = $_POST['ip'];
			$http_referer = $_POST['http-referer'];
			$http_user_agent = $_POST['http-user-agent'];
			$message = $name. "\r\n";
			$message .= $email. "\r\n";
			$message .= $ip. "\r\n";
			$message .= $http_referer. "\r\n";
			$message .= $http_user_agent. "\r\n";

			$a = fopen("/Users/aaa/sites/Study/PHP/info.txt", "a+");
			fwrite($a, $message);
			fclose($a);

			echo "Вы были записаны";

		}
	?>
</body>
</html>