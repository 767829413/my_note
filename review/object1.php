<?php
	header("content-type:text/html;charset=utf-8");

	class Cat {
		public $name= "小猫";
		public $age= 3;
		protected $food = '沙丁鱼';
		private $lover = "大花狗";
		protected $grade;

		public function __construct($name,$age,$food,$lover){
			$this->name = $name;
			$this->age = $age;
			$this->food = $food;
			$this->lover = $lover;
//			$this->grade = $grade;
		}

	//以遍历的形式显示属性信息
		public function element(){
			foreach($this as $key => $val){
				echo "<br/>$key====$val";
			}
		}
		public function setGrade($grade){
			$this->grade = $grade;
		}
		public function cat_Sort(&$arr){
			for($i = 1;$i <count($arr);$i++){
				$in_num = $arr[$i]->grade;
				$object = $arr[$i];
				$dw_num = $i-1;
				while($dw_num >= 0 && $in_num < $arr[$dw_num]->grade){
					$arr[$dw_num+1] = $arr[$dw_num];
					$dw_num--;
				}
				if($dw_num != $i){
					$arr[$dw_num+1] = $object;
				}else{
					return "";
				}
			}
		}

		public function test($arr){
			echo "<pre>";
			echo $arr[0]->grade;
			echo $arr[1]->grade;
			echo $arr[2]->grade;
		}

	}
//	$cat = new Cat();
	
	//在类的外部只能显示public属性
//	foreach($cat as $key => $val){
//		echo "<br/>$key====$val";
//	}
//	$cat->element();

	//布置冒泡排序【排序一群小猫（年龄，名字，考试成绩）对小猫的成绩进行排序】
	$cat1 = new Cat("aa",1,'小鱼','小狗');
	$cat1->setGrade(10);
	$cat2 = new Cat("bb",1,'小鱼','小狗');
	$cat2->setGrade(11);
	$cat3 = new Cat("cc",1,'小鱼','小狗');
	$cat3->setGrade(2);
	//将对象放到一个数组中去
	$cat_arr = array($cat1,$cat2,$cat3);
	echo "<pre>";
	var_dump($cat_arr);
	$cat1->cat_Sort($cat_arr);
	echo "<br/>--------<br/>";
	var_dump($cat_arr);
//	$cat1->test($cat_arr);


?>