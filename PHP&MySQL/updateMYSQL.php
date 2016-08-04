<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Update</title>
</head>
<body>
	<?php
			
			include("include.php");

			$querry = mysql_query("UPDATE articles SET title='Новое название', text='Новый текст', date='2015-03-10' WHERE id='3'");
		?>
</body>
</html>