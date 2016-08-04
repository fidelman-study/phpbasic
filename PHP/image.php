<?php
	header("Content-Type: image/gif"); //указываем что содержание типа изображение
	$img = imagecreatetruecolor(600, 480); // создаем холст
	//$img = imagecreatefrompng(ссылка); //фон
	//$size = getimagesize(ссылка на файл); получить размеры изображения $size[0]-ширина $size[1]-высота

	imageantialias($img, true); //сглаживание
	$red = imagecolorallocate($img, "255", "0", "0"); //imagecreate(,) можно назначить цвет
	$green = imagecolorallocate($img, "0", "255", "0");
	$blue = imagecolorallocate($img, "0", "0", "255");
	$white = imagecolorallocate($img, "255", "255", "255");
	$black = imagecolorallocate($img, "0", "0", "0");

	imageline($img, 20, 20, 200, 200, $red); //координаты от холста
	imageellipse($img, 20, 20, 40, 40, $green);
	imagerectangle($img, 20, 20, 200, 200, $blue);
	imagefilledrectangle($img, 20, 20, 100, 100, $blue);

	$points = array(20,20,30,25,50,75);
	$num_points = count($points)/2;
	imagefilledpolygon($img, $points, $num_points, $white);

	imagearc($img, 300, 300, 200, 200, 0, 270, $blue); //два последних в градусах по часовой стрелке
	imagefilledarc($img, 200, 400, 200, 200, 0, 20,  $green, IMG_ARC_PIE); //как пирог
	imagefilledarc($img, 400, 100, 200, 200, 0, 20,  $green, IMG_ARC_CHORD); //как треугольник

	imagestring($img, 5, 100, 400, "width=".imagesx($img)." height=".imagesy($img), $white); //шрифт от 1 до 5

	//imagettftext($img, 30, 0, 500, 0, $white, "Arial", "text") //угол против часовой// нужно подключать шрифты
	imagesetpixel($img, 500, 10, $white);
	imagegif($img); //вывод

?>