<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	if (isset($_POST['login?'])) {
		$db = array('andrey1' => '123', 'mik'=>'23','lol'=>'145');
		$user = trim($_POST['login']);
		$password = trim($_POST['password']);
		if (!empty($user) && !empty($password)) {
			foreach ($db as $key => $value) {
				if ($key == $user && $value == $password) {
					$result = "Вы вошли как: <b>".$user."</b>";
					break;
				}
			}
			if (isset($result)) {
				echo $result;
			}
			else {
			 	echo "Error";
			}
		} else {
			echo "Error";
		}

	}
?>
</body>
</html>
