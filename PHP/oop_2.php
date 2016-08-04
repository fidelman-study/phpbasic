<?php
	//только один класс в файле
	class CounterMachine { 
		protected $width;
		protected $height;

		public function sum($a, $b) {
			return $a + $b;
		}

		public function showInfo() {
			echo $this->width."<br>";
			echo $this->height."<br>";
		}
	
		public function __construct($w, $h) { //вместо __construct(приоритет больше) можно имя класса
			$this -> width = $w;
			$this -> height = $h;
		}
	}
	//наследование
	class PC extends CounterMachine { 
		private $type;
		private $os;
		private $software = array();

		function __construct($w, $h,$t,$os, $sw){
			parent::__construct($w, $h); //данные из родительского конструкторв
			$this->type = $t;
			$this->os = $os;
			$this->software = $this->parsePrograms($sw);
		}

		private function parsePrograms($string){
			$programs = explode(";",$string);
			for ($i=0; $i < count($programs); $i++) { 
				$info = explode("|", $programs[$i]);
				$this->software[$info[0]] = $info[1];
			}
			return $this->software;
		}


		public function showInfo() {
			parent::showInfo();
			echo "<br><pre>";
				print_r($this->software);
			echo "</pre>";
		}

	}
	$computer = new CounterMachine(300, 200);
	$computer = new PC(300,200,"laptop","Mac OS","n1|NotePad++;n2|Sublime");
	$computer -> showInfo();
	echo $computer->sum(3,2);
	echo "<br>";

?>