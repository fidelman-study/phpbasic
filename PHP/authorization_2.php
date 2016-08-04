<?php
	function auth($login="", $password=""){
		$base_user = file("authorization_base.txt");
		for ($i=0; $i < count($base_user); $i++) { 
			$info = explode(";", $base_user[$i]);
			if ($info[0] == $login && $info[1] == $password) {
				return true;
				break;
			} 
		}
		return false;
	}
?>