<?php
	class Dog {
		public $name;
		public $age;
		public $like;

		public function __construct($name,$age,$like){
			$this->setValue($name,$age,$like);
		}
		private function setValue($name,$age,$like){
			$this->name = $name;
			$this->age = $age;
			$this->like = $like;
		}
	}
?>