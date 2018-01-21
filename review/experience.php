<?php
	header('content-type:text/html;charset=utf-8');

	class Cat{
	}
	class Dog extends Cat{
	}

	$cat1 = new Cat();
	$dog1 = new Dog();
	

	//用于判断对象是不是属于一个类
	if($cat1 instanceof Dog && $cat1 instanceof Cat){
		echo '<br/> $cat1 是 Cat 与Cat子类Dog 的对象实例';
	}elseif($cat1 instanceof Cat){
		echo '<br/> $cat1 是 Cat 的对象实例,不是 Dog 的对象实例';
	}
	if($dog1 instanceof Dog && $dog1 instanceof Cat){
		echo '<br/> $dog1 是 Cat 与Cat子类Dog 的对象实例';
	}
	
?>