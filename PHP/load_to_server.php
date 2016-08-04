<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		if (isset($_POST['send-reqest'])) {
			if ($_FILES['load']['error'] == 0) {
				move_uploaded_file($_FILES['load']['tmp_name'],$_FILES['load']['name']);
			}
		}
	?>
	<form method="post" enctype="multipart/form-data">
		<input type="file" name="load">
		<input type="submit" name="send-reqest" value="Загрузить">
	</form>
</body>
</html>