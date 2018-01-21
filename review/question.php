<?php
	header("content-type:text/html;charset=utf-8");
	echo "<pre>";
	class A{
		public $name;
		protected $age;
		private $sex;

		function __construct($name,$age,$sex){
			$this->name = $name;
			$this->age = $age;
			$this->sex = $sex;
		}
	}
	$a = new A("test",11,"man");
	$arr_a = array($a);
	var_dump($arr_a);
	$arr = array("a","b","c","d");
	$arr_object = (object)$arr;
	var_dump($arr_object);
	$aa = 111;
	$aa_obj = (object)$aa;
	var_dump($aa_obj);
	echo $aa_obj->scalar;

?>