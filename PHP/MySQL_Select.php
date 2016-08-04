<?php
	function connect2db(){

		$mySQLi = new mysqli("localhost", "root", "n831yhfh", "php_lessons"); //подключаемся к БД
		return $mySQLi;
	}
	function showUsers(){
		$mySQLi = connect2db();
		//проверка на наличии ошибки
		if ($mySQLi) {
				$result = $mySQLi->query("
					SELECT *
					FROM users 
					WHERE desription 
					LIKE '%n%'
					ORDER BY id DESC
				"); 
				//%n% кончает и начинается на 'n'
	
	
				//вариант через класс, в другой папке через переменные
				/*
				$rows = $result->fetch_assoc(); //получение данных
				print_r($rows)."<br>";
				$rows = $result->fetch_assoc(); //при повторном вызове выбирается следующая строка
				print_r($rows)."<br>";
				*/
				$rows = $result->fetch_assoc();
				if ($result->num_rows > 0)  {
					do {
						echo "<p>"
						."Name: <b>".$rows['full_name']."</b><br>"
						."Login: <b>".$rows['login']."</b><br>"
						."Password: <b>".$rows['password']."</b><br>"
						."eMail: <b>".$rows['email']."</b><br>"
						."Registration date: <b>".$rows['date']."</b><br>"
						."Description: <b>".$rows['desription']."</b><br>"
						."</p><hr>";
					} while ($rows = $result->fetch_assoc());
				} else {
					echo "Запрос пустой";
				}
		} else {
			echo $mySQLi->connect_error;
		}
	}
	function createNewUser($full_name="", $login="",$password="", $email="", $desription=""){
		$MySQLi = connect2db();
		$result = $MySQLi->query("
			SELECT login
			FROM users
			WHERE login='$login'
			");
		if ($result->num_rows == 0) {
			date_default_timezone_set('Asia/Yekaterinburg');
			$date = date("Y-m-d");
			$MySQLi->query("
				INSERT INTO users
				(full_name, login, password, email, desription, date)
				VALUES ('$full_name','$login','$password','$email','$desription','$date')
			");
		}
		
	}

	function deleteUser($login="") {
		$MySQLi = connect2db();
		//DELETE FORM users - очистить таблицу
		$MySQLi->query("
			DELETE 
			FROM users
			WHERE login='$login'
			");
	}

	function changeUser($full_name="", $login="",$password="", $email="", $desription="") {
		$MySQLi = connect2db();
		$result = $MySQLi->query("
			SELECT login
			FROM users
			WHERE login='$login'
			");
		if ($result->num_rows != 0) {
			$MySQLi->query("
			UPDATE users
			SET full_name='$full_name',login='$login',password='$password',email='$email',desription='$desription'
			WHERE login='$login'
			");
		}
	}
	createNewUser("Andrew", "and123", "qwerty5","fi93@mail.ru","My name is Andrew");
	deleteUser('and1234');
	changeUser("Andrew", "and123", "qwerty55","fi93@mail.ru","My name is Andrew");
	showUsers();
	




?>