<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Change</title>
	<style>
		.form div input {
			margin-top: 20px;
			height: 20px;
			width: 400px;
		}
		#change, #delete {
			width: 100px;
		}
	</style>
</head>
<body>
	<h1 align="center">Изменение формы</h1>
	<form method='post' class="form">
		<div align="center";>
			<input type="text" name="first_name" placeholder="Введите имя" value="<?php echo $_GET['first_name']?>">
			<br>
			<input type="text" name="second_name" placeholder="Введите фамилию" value="<?php echo $_GET['second_name']?>">
			<br>
			<input type="text" name="third_name" placeholder="Введите отчество" value="<?php echo $_GET['third_name']?>">
			<br>
			<input type="text" name="street" placeholder="Введите улицу" value="<?php echo $_GET['street']?>">
			<br>
			<input type="text" name="house" placeholder="Введите номер дома" value="<?php echo $_GET['house']?>">
			<br>
			<input type="text" name="flat" placeholder="Введите номер квартиры" value="<?php echo $_GET['flat']?>">
			<br>
			<input type="text" name="tel" placeholder="Введите номер телефона" value="<?php echo $_GET['tel']?>">
			<br>
			<span>
				<input type="submit" name="change?" value="Изменить" id="change">
			</span>
			<span>
				<input type="submit" name="delete?" value="Удалить" id="delete">
			</span>
		</div>
		<?php

			function connect2bd($old_first_name="",
								$old_second_name="",
								$old_third_name=""){
				$MySQLi = new mysqli("localhost","root","n831yhfh","php_lessons");
				$MySQLi->set_charset("utf8");
				return $MySQLi;
			}

			function checkUser($id=""){
				$new = trim(stripslashes($_POST['first_name']));
				$new .= trim(stripslashes($_POST['second_name']));
				$new .= trim(stripslashes($_POST['third_name']));

				$MySQL = connect2bd();
				$result = $MySQL->query("
					SELECT *
					FROM project
					WHERE id<>'$id'
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

			function changeUser($id="",
								$first_name="",
								$second_name="",
								$third_name="",
								$street="",
								$house="",
								$flat="",
								$tel=""
								) {
				$MySQL = connect2bd();
				$MySQL->query("
					UPDATE project
					SET 
					first_name='$first_name',
					second_name='$second_name', 
					third_name='$third_name', 
					street='$street', 
					house='$house', 
					flat='$flat', 
					tel='$tel'
					WHERE 
					id='$id'
				");
			}

			function delete($id=""){
				$MySQL = connect2bd();
				$MySQL->query("
					DELETE
					FROM project
					WHERE id='$id'
				");
			}
			if (isset($_POST['change?'])) {
				if (!empty($_POST['first_name']) &&
					!empty($_POST['second_name']) &&
					!empty($_POST['third_name']) &&
					!empty($_POST['street']) &&
					!empty($_POST['house']) &&
					!empty($_POST['flat']) &&
					!empty($_POST['tel']) 
					) {
						if (!checkUser($_GET['id'])) {
							changeUser(
								$_GET['id'],
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
							echo "Данные принадлежат другому человеку!";
						}
				} else {
					echo "Поля пусты";
				}
			}
			if (isset($_POST['delete?'])) {
				delete($_GET['id']);
				echo '<META HTTP-EQUIV="Refresh" content="0; URL=MySQL_project_1.php">';
			}

		?>
</body>
</html>