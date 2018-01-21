<?php
	header("content-type:text/html;charset=utf-8");
	class School{
		public $name;
		public $address;

		public function __construct($name,$address){
			$this->name = $name;
			$this->address = $address;
		}
	}
	
	class Student{
		public $name;
		public $age;
		public $school;

		public function __construct($name,$age,$school){
			$this->name = $name;
			$this->age = $age;
			$this->school = $school;
		}
		public function show(){
			echo "showtime";
		}
		public function __sleep(){
			return array("name","age","school");
		}
		public function __wakeup(){
			$this->show();
		}
	}

?>