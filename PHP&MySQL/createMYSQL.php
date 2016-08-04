<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MySQL</title>
	<?php
		
	?>
</head>
<body>
	<p>
		<?php
			
			include("include.php");
			$querry = mysql_query("SELECT title,text,date FROM articles WHERE id='2'");  // * - запрос на все элементы
			$row = mysql_fetch_array($querry);
	
			echo $row['title'];
			echo "<br>";
			echo $row['text'];
			echo "<br>";
			echo $row['date'];
			echo "<br>";
			echo "<hr>";

			$querry = mysql_query("SELECT * FROM articles ORDER BY id DESC LIMIT 2"); //ASC - возростание DESC - убывание RAND(); - рандомно
			$row = mysql_fetch_array($querry);
			
			do {
				echo $row['title'];
				echo "<br>";
				echo $row['text'];
				echo "<br>";
				echo $row['date'];
				echo "<br>";
			} while($row = mysql_fetch_array($querry))
		?>
	</p>
	<form method="post" action="insert.php">
		Название статьи: <br>
		<input type="text" name="title"> <br>
		Текст статьи: <br>
		<textarea name="text" cols="40" rows="10"></textarea> <br>
		Дата публикации: <br>
		<input type="text" name="date"> <br>
		<input type="submit" name="ok" value="Добавить">
	</form>
</body>
</html>