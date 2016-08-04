<?php
	//интерфейс содержит только методы
	interface IntFace {
		function test1(); //методы интерфейса без тела
		function test2();
		function test3();
	}
	interface IntFace1 {
		function test4(); //снова переопределить
		function test5();
		function test6();
	}
	//интерфейс реализуется а не наследуется
	class ParentEx implements IntFace, IntFace1 {
		function test1(){
			return 1;
		}
		function test2(){
			return 2;
		}
		function test3(){
			return 3;
		}
		function test4(){
			return 4;
		}
		function test5(){
			return 5;
		}
		function test6(){
			return 6;
		}
	}
	class Ex extends ParentEx{

	}

	$object = new Ex();
	echo $object->test1();

?>