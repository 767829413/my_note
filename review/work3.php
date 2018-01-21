<?php
	class Master{
		private $name;
		private $age;
		private $dog;

		function __construct($name,$age,$dog){
			$this->name = $name;
			$this->age = $age;
			$this->dog = $dog;
		}

		public function setMasterName($name){
			$this->name = $name;
		}
		public function getMasterName(){
			return $this->name;
		}
		public function setMasterAge($age){
			$this->age = $age;
		}
		public function getMasterAge(){
			return $this->age;
		}
		public function setMasterDog($dog){
			$this->dog = $dog;
		}
		public function getMasterDog(){
			return $this->dog;
		}
	}

	class Dog{
		private $name;
		private $age;
		private $sex;
		private $master;

		function __construct($name,$age,$sex,$master){
			$this->name = $name;
			$this->age = $age;
			$this->sex = $sex;
			$this->master = $master;
		}

		public function setDogName($name){
			$this->name = $name;
		}
		public function getDogName(){
			return $this->name;
		}
		public function setDogAge($age){
			$this->age = $age;
		}
		public function getDogAge(){
			return $this->age;
		}
		public function setSex($sex){
			$this->sex = $sex;
		}
		public function getDogSex(){
			return $this->sex;
		}
		public function setDogMaster($master){
			$this->master = $master;
		}
		public function getDogMaster(){
			return $this->master;
		}
	}
	$d = new Dog("旺财",5,"公","小明");
	$m = new Master("小明",19,$d);
//	$d = new Dog("旺财",5,"公",$m);

	echo "<br/>狗信息通过主人的对象提供:";
	echo "<br/>这只狗的名字是:-->".$m->getMasterDog()->getDogName();
	echo "<br/>这只狗的年龄是:-->".$m->getMasterDog()->getDogAge();
	echo "<br/>这只狗的性别是:-->".$m->getMasterDog()->getDogSex();
	echo "<br/>这只狗的主人是:-->".$m->getMasterDog()->getDogMaster();

	echo "<br/>主人信息通过狗的对象提供:";
	echo "<br/>主人的名字是:-->".$d->getDogMaster()->getMasterName();
//	echo "<br/>主人的年龄是:-->".$d->getDogMaster()->getMasterAge();
//	echo "<br/>主人的狗是:-->".$d->getDogMaster()->getMasterDog();

?>