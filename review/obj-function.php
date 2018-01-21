<?php
	header("content_type:text/html;charset=utf-8");
/***************类与对象的相关函数*************************
	在面向对象编程中，有一系列的函数可以来对类与对象以及成员方法进行操作。
	重点讲解5个函数，其他函数自己研究
************************************************************/
	class Big_Cat{
	
	}
	class Cat extends Big_Cat{
		public $name = "小花猫";

		public function sayHello(){
			echo "<br/>小花猫说hello";	
		}
	}
	//判断某个类是否存在
	if(class_exists('Cat')){
		$cat = new Cat();
		//调用方法判断是否存在
		if(method_exists($cat,"sayHello")){
			$cat->sayHello();
		}else{
			exit("方法不存在");
		}
		//调用属性时判断属性是否存在
		if(property_exists($cat,"name")){
			echo "<br/>猫的名字是：".$cat->name;
		}else{
			exit("没有该属性");
		}
		//返回类的名称
		echo "<br/>类的名称是".get_class($cat);
		//返回父类的名称（如果没有的话返回--false）
		echo "<br/>父类的名称是".get_parent_class($cat);
		echo "<pre>";
		var_dump(get_parent_class($cat));
	}else{
		exit("类不存在");
	}


?>