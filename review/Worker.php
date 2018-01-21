<?php
	header("content-type:text/html;charset=utf-8");
	echo "<pre>";
	
	class Worker{
		public function start(){
			echo "一个start方法<br/>";
		}
		public function step(){
			echo "这是step方法哟<br/>";
		}
		public function stop(){
			echo "最后是stop哟<br/>";
		}
	}
	
	//判断Worker是否存在
	if(!class_exists('Worker')){
		exit("Worker类不存在，无法继续执行");
	}
	//创建一个ReflectionClass 的对象实例【‘Worker’类】
	$reflection_worker = new ReflectionClass('Worker');
	//判断start是否存在
	if(!$reflection_worker->hasMethod('start')){
		exit("start方法不存在，无法存在");
	}
	//判断start方法是否是public的,首先创建一个方法对象$reflection_method_start
	$reflection_method_start = $reflection_worker->getMethod('start');
	if(!$reflection_method_start->isPublic()){
		exit("start方法不是一个public的");
	}
	//调用start方法
	$reflection_method_start->invoke($reflection_worker->newInstance());
	//下面的step与stop方法的判断与调用与start类似

/************************************/
	//判断step是否存在
	if(!$reflection_worker->hasMethod('step')){
		exit("step方法不存在，无法存在");
	}
	//判断step方法是否是public的,首先创建一个方法对象$reflection_method_step
	$reflection_method_step = $reflection_worker->getMethod('step');
	if(!$reflection_method_step->isPublic()){
		exit("step方法不是一个public的");
	}
	//调用step方法
	$reflection_method_step->invoke($reflection_worker->newInstance());

/************************************/
	//判断stop是否存在
	if(!$reflection_worker->hasMethod('stop')){
		exit("stop方法不存在，无法存在");
	}
	//判断stop方法是否是public的,首先创建一个方法对象$reflection_method_stop
	$reflection_method_stop = $reflection_worker->getMethod('stop');
	if(!$reflection_method_stop->isPublic()){
		exit("stop方法不是一个public的");
	}
	//调用stop方法
	$reflection_method_stop->invoke($reflection_worker->newInstance());

/************************************/
	//输出Worker的信息
	$arr_worker = $reflection_worker->getMethods();
	$arr_worker[3] = $reflection_worker->getName();
	var_dump($arr_worker);


?>