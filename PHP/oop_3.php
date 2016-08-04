<?php
	//абстрактный класс-класс, экземпляр которого
	//создать нельзя
	abstract class Auto {
		protected $type;
		protected $maxSpeed;
		protected $color;
		protected $x;
		protected $y;

		public function getCoords() {
			return "(".$this->x."; ".$this->y.")";
		}

		public function move($cordX, $cordY) {
			$this->x = $cordX;
			$this->y = $cordY;
			return $this->getCoords();
		}

		public function __construct(
				$cordX=0, 
				$cordY=0, 
				$type="car", 
				$maxSpeed="300km/h",
				$color="#ff0000"
			) {
			$this->x = $cordX;
			$this->y = $cordY;
			$this->type = $type;
			$this->maxSpeed = $maxSpeed;
			$this->color = $color;
			
		}
		public function showAuto(){
			return "<div style='color: "
			.$this->color."'>".$this->x
			."; ".$this->y."<br>"
			.$this->type."; ".$this->maxSpeed."</div>";
		}

		abstract function setType($type); //абстрактный метод необходимо переопределить
	}
	
	class Car extends Auto {
		public function setType($type) {
			$this->type = $type;
		}
	}

	class Truck extends Auto{
		private $capacity;
		public function showAuto(){
			return "<div style='color: "
			.$this->color."'>".$this->x
			."; ".$this->y."<br>"
			.$this->type."; ".$this->maxSpeed."; ".$this->capacity."</div>";
		}
		public function __construct(
				$cordX, 
				$cordY, 
				$type, 
				$maxSpeed,
				$color,
				$capacity
			) {
			parent::__construct($cordX,$cordY,$type, $maxSpeed,$color);
			$this->capacity = $capacity;
			
		}
		public function setType($type) {
			$this->type = $type;
		}
	}
	echo "<h1>Class 'Car'</h1>";
	$variable = "Car";
	echo "<hr>";
	$car = new $variable(200,30,"car","220km/h","#0000ff");
	echo $car->getCoords();
	$car->move(50,200);
	echo $car->getCoords();
	echo $car->showAuto();
	//Проверка на существование
	if (method_exists($car, "setType")) {
		echo "Method exists<br>";
	}

	if (property_exists("Car", "color")) {
		echo "Property exists<br>";
	}
	if (class_exists("Car")) {
		echo "Class exists";
	}

	echo "<hr>";
	$car = new Truck(100,200,"truck","120km/h","#ff00ff","30T");
	echo $car->showAuto();
	echo "<hr>";
	




?>