<?php
	//public = var свойство доступно везде
	//protected - используется только внутри класса и доступен для наследников
	//private - используется только внутри класса 
	class PC { 
		var $CPU = 2.2; //свойства класса которые подходят для объекта класса
		public $RAM = 8000;
		public $OS = "Windows 7";
		public $typeCase = "tower";
		private $price = "200$"; //нельзя переопределять

		const PI = 3.1415; // объявление константы

		public static $E = 2.7; //статистические - для которых не надо задавать экземпляр класса

		//если public function то можно public
		public function __destruct(){//удаление unset или автоматически когда перестаем пользоваться классом
			echo "Object delete!";
		}
		public function __toString(){  //для вывода объекта
			return $this->showDescription();
		}
		public function __clone(){//при клонировании
			echo "<h1>Object is cloned!</h1>";
		}
		public function __construct($argCPU, $argRAM, $argOS, $argTC) { //контструктор для аргументов при
			$this->CPU = $argCPU;										//создании объектов
			$this->RAM = $argRAM;
			$this->OS = $argOS;   //свойства = аргумента
			$this->typeCase = $argTC;
			echo self::PI."<br>"; //вывод контанты
		}


		public function showInfo() { //метод
			echo "1) CPU: " . $this->CPU ."<br>";
			echo "2) RAM: " . $this->RAM ."<br>";
			echo "3) typeCase: " . $this->typeCase ."<br>";
			echo $this->showDescription(); //вызов другого метода
		}

		public function showDescription() { //метод

			return "OS: ".$this->OS."; Memory: ".$this->RAM."; CPU: ".$this->CPU;
		}

		public function getPrivate() { //метод вывода приватного свойства
			return $this->price;
		}
	}






	$pc = new PC("2.5","2000", "MAC OS", "desktop"); //создание объекта с аргументами для свойств; cloce- клонировать объект
	
	echo $pc -> RAM;
	echo "<br>";
	echo $pc -> typeCase; //вывод свойства (класс - свойство(метод))
	echo "<br>";
	$pc -> showInfo(); //вызов метода
	echo "<br>";
	echo $pc; //вывод объекта
	echo "<br>";
	//unset($pc); // удаление объекта
	echo "<br>";
	echo $pc->getPrivate();
	echo "<br>";
	echo "Const - ".$pc::PI;
	echo "<br>";
	echo PC::$E; //вызов статической переменной
	echo "<br>";


?>