<?php
	if (preg_match("/^([\w\.\_]+)@([\w\.\_]+)\.([\w]{2,6})$/", "fi93@@mail.ru")) {
		echo "1";
	} else {
		echo "0";
	}
	echo "<br>";

	$ptn = "/[\d+]\.[\d+]/";
	$str = array(1,1.1,2,3.3,4,4.4,5.3);
	$matches=preg_grep($ptn, $str);
	print_r($matches);
	//регулярные выражения
?>