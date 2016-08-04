<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data</title>
</head>
<body>
	<h1 align='center'>Данные о жителях района</h1>
	<h4 align='center'><a href="MySQL_project_2.php">Добавить</a></h4>
	<table border='1' align='center'>
		<thead>
			<th>Имя</th>
			<th>Фамилия</th>
			<th>Отчество</th>
			<th>Улица</th>
			<th>Дом</th>
			<th>Квартира</th>
			<th>Телефон</th>
			<th>Изменить</th>
		</thead>
		<tbody>
			<?php
			function connect2bd(){
				$mySQLi = new mysqli("localhost", "root", "n831yhfh", "php_lessons");
				$mySQLi->set_charset("utf8");
				return $mySQLi;
			}

			$MySQL = connect2bd();
			$result = $MySQL->query("
				SELECT *
				FROM project
			");
			$row = $result->fetch_array();
			if ($result->num_rows > 0)  {
				do {
					echo "
					<tr>
						<td>".$row['first_name']."</td>
						<td>".$row['second_name']."</td>
						<td>".$row['third_name']."</td>
						<td>".$row['street']."</td>
						<td>".$row['house']."</td>
						<td>".$row['flat']."</td>
						<td>".$row['tel']."</td>
						<td><a href='MySQL_project_3.php?
						first_name=".$row['first_name']."&
						second_name=".$row['second_name']."&
						third_name=".$row['third_name']."&
						street=".$row['street']."&
						house=".$row['house']."&
						flat=".$row['flat']."&
						tel=".$row['tel']."&
						id=".$row['id']."
						'>Изменить</a></td>
					</tr>
					";
				} while($row = $result->fetch_array());
				
			}
			?>
			



		</tbody>
	</table>
</body>
</html>