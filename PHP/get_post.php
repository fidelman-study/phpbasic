<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>get_post</title>
</head>
<body>
	<form method="post">
		<input type="text"  placeholder="OK" name="login">
		<input type="password" name="password">
		<select name="select">
			<option value="v1">1</option>
			<option value="v2">2</option>
		</select>
		<input type="radio" value="r1" name="radio-btn">
		<input type="radio" value="r2" name="radio-btn">
		<input type="radio" value="r3" name="radio-btn">
		<input type="radio" value="r4" name="radio-btn">
		<input type="checkbox" name="check-bx[]" value="c1">
		<input type="checkbox" name="check-bx[]" value="c2">
		<input type="checkbox" name="check-bx[]" value="c3">
		<input type="submit" value="Ok" name="Ok">
		<textarea name="textarea" rows="1" cols="20"> </textarea>
		<?php
			if (isset($_POST['Ok'])) {
				echo "Hello";
			}
		?>
	</form>
	<form action="post.php" method="post">
		<input type="text" name="login" placeholder="name">
		<input type="password" name="password" placeholder="password">
		<input type="submit" name="login?" value="login">
	</form>
	<form action="get.php" method="get">
		<input type="text" name="login" placeholder="name">
		<input type="submit" name="login?" value="login">
	</form>
</body>
</html>