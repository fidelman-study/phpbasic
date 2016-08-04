<?php
	function division ($a,$b) {
		if ($b != 0) {
			return $a/$b;
		} else {
			throw new Exception("Error");
			
		}
	}
	try {
		echo division(10,0);     //весь код страницы сюда
	} catch (Exception $error) {
		echo $error -> getMessage();   //здесь отрабаптываются вохможные ошибки; getMessage() - возвращает значени в Exception("Error")
	} //header(Location: error.php) перенаправить в файл

?>