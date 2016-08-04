<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Insert</title>
</head>
<body>
	<?php
			
			include("include.php");
			$title = $_POST['title'];
			$text = $_POST['text'];
			$date = $_POST['date'];

			if (isset($_POST['ok'])) {
				$querry = mysql_query("INSERT INTO articles (title,text,date) VALUES ('$title', '$text', '$date')");
				echo "Статья успешно добавлена";
			}
		?>
</body>
</html>