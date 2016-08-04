<?php
	header("Content-Type: image/gif");

	$array_values = array(50,24,150,200,46,10,58,200,23,24,150);
	$width = count($array_values) > 24 ? 1200
	:(count($array_values) > 36 ? 1400 
		:(count($array_values) > 48) ? 1600 : 800);
	$img = imagecreatetruecolor($width, max($array_values) + 50);

	$blue = imagecolorallocate($img, 0, 0, 255);
	$red = imagecolorallocate($img, 255, 0, 0);
	$green = imagecolorallocate($img, 0, 255, 0);
	$white = imagecolorallocate($img, 255, 255, 255);
	$black = imagecolorallocate($img, 0, 0, 0);

	imagefilledrectangle($img, 0, 0, imagesx($img), imagesy($img), $white);

	$array_colors = array($green,$blue,$red);

	$x1 = 0;
	$y2 = imagesy($img);
	$color_index = 0;
	
	for ($i=0; $i < count($array_values); $i++) {
		$y2 =  imagesy($img)-$array_values[$i];
		imagefilledrectangle($img, $x1, imagesy($img), $x1+imagesx($img)/count($array_values), $y2, $array_colors[$color_index]);
		imagestring($img, 2, $x1 + 3, $y2 - 20, $array_values[$i], $black);
		$x1 += imagesx($img)/count($array_values);
		$color_index++;
		$color_index = $color_index > 2 ? 0 : $color_index;

		

	}



	imagegif($img);

?>