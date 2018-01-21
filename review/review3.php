<?php
	header("content-type:text/html;charset=utf-8");
/*	class Cat{
		public $n;
		function __construct(){
			$this->n = 9;
		}
		function printNight(){
			$a = $this->n;
			for($i = 1;$i <= $a;$i++){
				for($j=1;$j <= $i;$j++){
					echo "&nbsp;".$j."*".$i."=".$j*$i."&nbsp;";
				}
			echo "<br/>";
			}
		}
		function calculate($oper,$num1,$num2){
			if(is_nan($num1) || is_nan($num1) || !$oper){
				die('输入错误');
			}
			switch($oper){
				case "+":
					$res = $num1+$num2;
					break;
				case "-":
					$res = $num1-$num2;
					break;					
				default:
					break;
			}
			return $res;
		}
	}
	$cat1 = new Cat();
	$cat1->printNight();
	echo $cat1->calculate('-',400,200);*/

/*	class Person{
		public $name;
		public $age;
		public $sex;
		public $salary;
		public $working;
		
		function __construct($a,$b,$c,$d,$e){
			$this->name = $a;	 // "李明";
			$this->age = $b;	 // 22;
			$this->sex = $c;	 //"男";
			$this->salary = $d;	 //9000;
			$this->working = $e; //"电气工程师";
		}
	}
	$p = new Person("王五",38,"男",10000,"劫匪");
	print_r($p);
	echo "<br/>";
	foreach($p as $k => $v){
		echo $k.":-->".$v."<br/>";
	}
	*/

/*	class CatMi{
		function __construct(){
			echo "hello world";
		}
	}
	$c = new CatMi();
	*/
//	include_once('review2.php');
//	var_dump($a);

/*	class Dog{
		public $name;
		function __construct($name){
			$this->name = $name;
		}
		function __destruct(){
			echo "hello,old man?".$this->name.'<br/>';
		}
	}

	$dog1 = new Dog('one');
	$dog1 = new Dog('two');
	$dog1 = new Dog('three');
	$dog1 = new Dog('four');
//	$a = $dog1;
//	$dog1 = "";
//	$dog1 = null;
//	$dog2 = new Dog('two');
//	$dog3 = new Dog('three');
//	unset($dog3);
//	$dog4 = new Dog('four');
//	$dog5 = new Dog('five');

	echo "---------------";
*/
/*
	class Test{
		public $a; 
		protected $b; 
		private $c;
		
		function __construct(){
			$this->a = 10; 
			$this->b = 100;
			$this->c = 1000;
		}
		public function ok1(){
			echo "ok1";
		}
		protected function ok2(){
			echo "ok2";
		}
		private function ok3(){
			echo "ok3";
		}
		//魔术方法的方法名与形参都是定好的
		public function __get($p){
			if(!property_exists($this,$p)){
				exit('输入有误');
			}elseif($p == "b"){
				return $this->b;
			}elseif($p == "c"){
				return $this->c;
			}
		}
		public function __set($name,$val){
			if(!property_exists($this,$name)){
				exit('输入有误');
			}elseif($name == 'b'){
				$this->b = $val;
			}elseif($name == 'c'){
				$this->c = $val;
			}
		}
		function __clone(){
			$this->b = "CTM";
		}
		function __call($name){
			if(property_exists($name,$arr)){
				return $this->$name($arr);
			}
		}
	}
	$t1 = new Test();
//	$a = $t1;
//	$a = clone $t1;
//	var_dump($t1,$a);
	
//	if($a == $t1){
//		echo "相等";
//	}
//	if($a === $t1){
//		echo "全等";
//	}
	$t1->ok1();
	$t1->ok2();
	$t1->ok3();

*/
/*	require_once('./config.php');
	spl_autoload_register('fy_autoload');
//	function __autoload($class_name){
	function fy_autoload($class_name){
		global $class_map;
		require $class_map[$class_name];
	}
	$p = new Pig();
	$d = new Dog();
*/
/*	class Play_Cs{
		public static $number=0;
		public $name;
		function __construct($name){
			echo "欢迎".$this->name = $name."同学加入游戏<br/>";
		}
		function my_count(){
			self::$number++;
			echo "当前游戏人数".self::$number."<br/>";
		}
	}
	$a1 = new Play_Cs('李明');
	$a1->my_count();
	$a2 = new Play_Cs('玛丽');
	$a2->my_count();
	$a3 = new Play_Cs('杰瑞');
	$a3->my_count();
	$a4 = new Play_Cs('阿迷');
	$a4->my_count();
	$a5 = new Play_Cs('傻吊');
	$a5->my_count();
	
	echo "-------".Play_Cs::$number;
*/

/*	class Food{
		public $name;
		public $age;
		static public $cake = 1000;
		function __construct($name,$age){
			$this->name = $name;
			$this->age = $age;
		}*/
/*		function eat_Cake($day){
			if($this->name == '唐僧'){
				self::$cake = self::$cake - 3*$day;
			}elseif($this->name == '孙悟空'){
				self::$cake = self::$cake - 5*$day;
			}elseif($this->name == '沙悟净'){
				self::$cake = self::$cake - 9*$day;
			}elseif($this->name == '猪八戒'){
				self::$cake = self::$cake - 30*$day;
			}
		}*/
/*		function eat_Cake($day){
			for($i=1;$i<=$day;$i++){
				self::$cake = self::$cake-(3+5+9+30);
			}
			$res = self::$cake;
			return $res;
		}
		function show_Cake(){
			echo self::$cake;
		}
		function eat_End(){
			$n=0;
			while(12){
				$n++;
				if(self::$cake > 0){
					self::$cake = self::$cake-3;
				}else{
					$flag = true;
					echo "唐僧不能吃了";
					break;
				}
				if(self::$cake > 0){
					self::$cake = self::$cake-5;
				}else{
					$flag = true;
					echo "孙悟空不能吃了";
					break;
				}
				if(self::$cake > 0){
					self::$cake = self::$cake-9;
				}else{
					$flag = true;
					echo "沙悟净不能吃了";
					break;
				}
				if(self::$cake > 0){
					self::$cake = self::$cake-30;
				}else{
					$flag = true;
					echo "猪八戒不能吃了";
					break;
				}
			}
			return $n;
		}
	}
	$f1 = new Food("唐僧",28);

	$f2 = new Food("孙悟空",2800);

	$f3 = new Food("沙悟净",998);

	$f4 = new Food("猪八戒",1008);

	echo $f1->eat_End();
	
	$f4->eat_Cake(2);

//	$f1->show_Cake();
	echo "<br/>";
*/	
/*	class Cat{
		static public $a = 1001;
		 public $b = 999;
		static function test(){
			echo self::$a;
			echo $this->$a;
			echo "你好啊";
		}
		function test1(){
			self::test();
			echo "<br/>测试一下";
		}
	}

	$c = new Cat();
	
	Cat::test();

	$c->test1();
	*/

/***********************************************************************/
//抽象的过程---银行账号-->work2.php

//--------------------------------------------------------------------
//封装入门小案例
/*	class A{
		public $name;
		protected $job;
		private $salary;

		public function __construct($name,$job,$salary){
			$this->name = $name;
			$this->job = $job;
			$this->salary = $salary;
		}
		public function getName(){
			echo "name = ".$this->name.'<br/>';
		}
//		protected function getJob(){
//			return $this->job;
//		}
//		private function getSalary(){
//			return $this->salary;
//		}
		//在类内部使用protected 的属性与方法
		public function test(){
			echo 'job = '.$this->job."<br/>";
			echo $this->getJob()."<br/>";
		}
		public function test1(){
			echo 'salary = '.$this->salary."<br/>";
			echo $this->getSalary()."<br/>";
		}

		function __set($name,$val){
			if(property_exists($this,$name)){
				$this->$name = $val;
			}else{
				echo "属性不存在<br/>";
			}
		}
		function __get($name){
			if(property_exists($this,$name)){
				return $this->$name;
			}else{
				echo "属性不存在<br/>";
			}
		}

		function setJob($job){
			if(!is_string($job)){
				die('输入有错误');
			}else{
				return $this->job = $job;
			}
		}
		function setSalary($salary){
			if(!is_numeric($salary)){
				die('输入有错误');
			}else{
				$this->salary = $salary;
			}
		}
		function getJob(){
			return $this->job;
		}
		function getSalary(){
			return $this->salary;
		}
		function getInfo(){
			echo $this->getJob();
			echo $this->getSalary();
		}
		function setInfo($job,$salary){
			$this->setJob($job);
			$this->setSalary($salary);
		}
	}
	$p1 = new A('大牛','煞笔',999);
	//public 可以在外部直接访问
//	echo 'name = '.$p1->name."<br/>";
//	$p1->getName();
	//protected 不可以在类的外部访问
//	$p1->job = 966666;
//	echo 'job = '.$p1->job."<br/>";
//	$p1->getJob();

//	$p1->test();
	//private 不可以在类的外部访问
//	$p1->salary = 00000.66666;
//	echo 'salary = '.$p1->salary."<br/>";
//	$p1->getSalary();
	
//	$p1->test1();
	
	$p1->setInfo('驾驶员',99999);
	$p1->getInfo();
*/

//--------------------------------------------------------------
/***对象运算符****************************************/
//对象运算符的连用现象
//案例:通过一个学生对象来显示其班级信息
/*	class Student{
		public $name;
		private $school;

		public function __construct($name,$school){
			$this->name = $name;
			$this->school = $school;
		}
		public function getSchool(){
			return $this->school;
		}
		public function setSchool($school){
			$this->school = $school;
		}
	}

	class School{
		public $name;
		public $address;
		private $my_class;

		public function __construct($name,$address,$my_class){
			$this->name = $name;
			$this->address = $address;
			$this->my_class = $my_class;
		}
		public function getSchoolClass(){
			return $this->my_class;
		}
		public function setSchoolClass($my_class){
			$this->my_class = $my_class;
		}
	}

	class MyClass{
		protected $name;
		protected $stu_num;
		private $introduce;

		public function __construct($name,$stu_num,$introduce){
			$this->name = $name;
			$this->stu_num = $stu_num;
			$this->introduce = $introduce;
		}
		//GET
		public function getClassName(){
			return $this->name;
		}
		public function getClassStunum(){
			return $this->stu_num;
		}
		public function getClassInfo(){
			return $this->introduce;
		}
		//SET
		public function setClassName($name){
			return $this->name = $name;
		}
		public function setClassStunum($stu_num){
			return $this->stu_num = $stu_num;
		}
		public function setClassInfo($introduce){
			return $this->introduce = $introduce;
		}
	}
	//补全信息的思路慢慢来
	//1.创建班级对象
	$myClass = new MyClass("php自学班",1,'自学的人很牛!!!!');

	//2.创建学校对象
	$school = new School("互联网大学","电脑和宽带就是门口",$myClass);

	//3.创建学生对象
	$student = new Student("方园",$school);
	//获得学校信息

	echo '<br/>方园的学校名字是:-->'.$student->getSchool()->name = "互联网超级自学班";
	
	echo '<br/>方园的学校地址是:-->'.$student->getSchool()->address = "只要有网和设备随时学习";

	//通过$student 对象找到对应的班级信息
	//set信息
	$student->getSchool()->getSchoolClass()->setClassName("超级自学班");
	$student->getSchool()->getSchoolClass()->setClassStunum(1);
	$student->getSchool()->getSchoolClass()->setClassInfo("非常牛,非常强,努力超越");
	//get信息
	echo '<br/>方园的班级是:-->', $student->getSchool()->getSchoolClass()->getClassName();
	echo '<br/>方园的班级人数是:-->', $student->getSchool()->getSchoolClass()->getClassStunum();
	echo '<br/>方园的班级信息是:-->', $student->getSchool()->getSchoolClass()->getClassInfo();

*/	

	class Dog{
		private $arr = array();

		public function __set($name,$val){
			$this->arr[$name] = $val;

		}

		public function __get($name){
			if(!isset($this->arr[$name])){
				die("输入不存在");
			}
			return $this->arr[$name];
		}
	}
	$dog1 = new Dog();
	$dog1->age = 565;
	echo $dog1->age;



?>