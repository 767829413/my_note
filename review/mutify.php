<?php
	header('content-type:text/html;charset=utf-8');
	//多态
	//创建animal
	class Animal {
		public $name;

		public function __construct($name){
			$this->name = $name;
		}
	}
	
	class Cat extends Animal {
		
		public function showInfo(){
			echo "(Cat)我是:".$this->name;
		}
	}

	class Dog extends Animal {
		public function showInfo(){
			echo "(Dog)我是:".$this->name;
		}
	}

	class Tigger extends Animal {
		public function showInfo(){
			echo "我是:".$this->name;
		}
	}

	//创建一个实物类
	class Food {
		public $name;
		public function __construct($name){
			$this->name = $name;
		}
	}

	class Fish extends Food {
		public function showInfo(){
			echo "(Fish)这个食物是:".$this->name;
		}
	}

	class Bone extends Food {
		public function showInfo(){
			echo "(Bone)这个食物是:".$this->name;
		}
	}

	class Meat extends Food {
		public function showInfo(){
			echo "这个食物是:".$this->name;
		}
	}
	//创建主人类
	class Master {
		//多态的体现------------在php中通过类型约束来达到更健壮
		public function feed(Animal $animal,Food $food){
			$animal->showInfo();
			echo '喜欢吃';
			$food->showInfo();
		}
	}

	//创建食物与动物
	$fish = new Fish('鱼肉');
	$bone = new Bone('一根骨头');
	$meat = new Meat('很多肉');

	$dog = new Dog('小狗');
	$cat = new Cat('小猫');
	$tigger = new Tigger('东北虎');

	//创建主人对象
	$master = new Master;
	$master->feed($dog,$bone);
	echo "<br/>";
	$master->feed($cat,$fish);
	echo "<br/>";
	$master->feed($tigger,$meat);
//	$master->feed($fish,$cat);
?>