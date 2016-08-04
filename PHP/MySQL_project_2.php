<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add</title>
	<style>
		.form div input {
			margin-top: 20px;
			height: 20px;
			width: 400px;
		}
		#add, #way {
			width: 100px;
		}
	</style>
</head>
<body>
	<h1 align="center">Форма заполнения</h1>
	<form method='post' class="form">
		<div align="center";>
			<input type="text" name="first_name" placeholder="Введите имя" id="first_name">
			<br>
			<input type="text" name="second_name" placeholder="Введите фамилию" id="second_name">
			<br>
			<input type="text" name="third_name" placeholder="Введите отчество" id="third_name">
			<br>
			<input type="text" name="street" placeholder="Введите улицу" id="street">
			<br>
			<input type="text" name="house" placeholder="Введите номер дома" id="house">
			<br>
			<input type="text" name="flat" placeholder="Введите номер квартиры" id="flat">
			<br>
			<input type="text" name="tel" placeholder="Введите номер телефона" id="tel">
			<br>
			<input type="submit" name="add?" value="Добавить" id="add">
		</div>
		<?php
			function connect2bd() {
				$MySQLi = new mysqli("localhost","root","n831yhfh","php_lessons");
				$MySQLi->set_charset("utf8");
				return $MySQLi;
			}
			function checkUser() {
				$new = trim(stripslashes($_POST['first_name']));
				$new .= trim(stripslashes($_POST['second_name']));
				$new .= trim(stripslashes($_POST['third_name']));

				$MySQL = connect2bd();
				$result = $MySQL->query("
					SELECT first_name, second_name, third_name
					FROM project
				");
				$rows = $result->fetch_assoc();
					if ($result->num_rows > 1) {
						do {
							$old = $rows['first_name'];
							$old .= $rows['second_name'];
							$old .= $rows['third_name'];
		
							if ($old == $new) {
								return true;
							}
						} while ($rows = $result->fetch_assoc());
				} else {
					$old = $rows['first_name'];
					$old .= $rows['second_name'];
					$old .= $rows['third_name'];
					if ($old == $new) {
						return true;
					}
				}
				return false;
			}
			function createUser($first_name="",
								$second_name="",
								$third_name="",
								$street="",
								$house="",
								$flat="",
								$tel=""
			){
				$MySQL = connect2bd();
				$MySQL->query("
					INSERT INTO project
					(first_name, second_name, third_name, street, house, flat, tel)
					VALUES ('$first_name', '$second_name', '$third_name', '$street', '$house', '$flat', '$tel')
				");
			}

			if (isset($_POST['add?'])) {
				if (!empty($_POST['first_name']) &&
					!empty($_POST['second_name']) &&
					!empty($_POST['third_name']) &&
					!empty($_POST['street']) &&
					!empty($_POST['house']) &&
					!empty($_POST['flat']) &&
					!empty($_POST['tel']) 
					) {
						if (!checkUser()) {
							createUser(
									$_POST['first_name'],
									$_POST['second_name'],
									$_POST['third_name'],
									$_POST['street'],
									$_POST['house'],
									$_POST['flat'],
									$_POST['tel']
							);
							echo '<META HTTP-EQUIV="Refresh" content="0; URL=MySQL_project_1.php">';
						} else {
							echo "Вы уже есть в базе";
						}
				} else {
					echo "Заполните форму!";
				}
			}
			
		?>





	</form>
</body>
</html>