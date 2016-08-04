<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>file_2</title>
</head>
<body>
	<a href="file_1.php">Главная</a>
	<table border="1">
		<thead>
			<th>Имя</th>
			<th>E-mail</th>
			<th>IP</th>
			<th>Реферальная страница</th>
			<th>Браузер</th>
		</thead>
		<tbody>
			<?php
				//rename("text.txt", "text2.txt"); Переименовать
				//copy("text.txt", "text_copy.txt"); Копировать
				//unlink("text.txt"); удалить
			
				/* Просто текст
				$a = fopen("info.txt", "r");
				$b = fread($a, filesize("info.txt"));
				fclose($a);
				print_r($b); 
				*/

				//file_get_contents("info.txt"); вывод сожержимого файла

				//file_put_contents("info.txt","text") перезапись

				$path = "info.txt";
				$array_string = file($path); //как массив
				for ($i=0; $i < count($array_string); $i+=5) { 
					echo "<tr>";
						echo "<td>".$array_string[$i]."</td>";
						echo "<td>".$array_string[$i+1]."</td>";
						echo "<td>".$array_string[$i+2]."</td>";
						echo "<td>".$array_string[$i+3]."</td>";
						echo "<td>".$array_string[$i+4]."</td>";
					echo "</tr>";
				}

			?>
		</tbody>
	</table>
</body>
</html>