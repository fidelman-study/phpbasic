<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array</title>
</head>
<body>
	<?php
		$forest = array('Дуб', 'Клен', 'Береза', 'Елка');
		print_r($forest);
		echo "<br><hr>";
		$forest[] = "Сосна";
		print_r($forest);
		echo "<br><hr>";
		$country = array('RU'=>'Russia', 'LV'=>'Latvia');
		print_r($country);
		echo "<br><hr>";
		echo $country['LV'];
		echo "<br><hr>";
		$world = array('country' => array('RU' => 'Russia', 'US' => 'USA', 'DE' => 'Germany' ),
				 'city' => array('RU' => 'Moscow', 'US' => 'Washington', 'DE' => 'Berlin' ));
		print_r($world);
		echo "<br><hr>";
		echo $world['country']['US'];
		echo "<br><hr>";
		foreach ($world as $key1 => $value1) {
			foreach ($world[$key1] as $key2 => $value2) {
				echo $world[$key1][$key2];
				echo "<br>";
			}
		}
			
	?>
</body>
</html>