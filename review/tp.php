<?php
	header("content-type:text/html;charset=utf-8");
	// 经典的php反射实例应用-----thinkphp 控制器调度 
	
	class IndexAction{
		public function index(){
			echo "index<br/>";
		}
		public function test($year = 2018, $month = 1,$day = 3){
			echo $year."--------".$month."----------".$day."<br/>";
		}
		//前置处理
		public function _befor_index(){
			echo "<br/>前期处理。。。";
			echo "<br/>".__FUNCTION__."<br/>";
		}
		//后置处理
		public function _after_index(){
			echo "<br/>后期处理。。。";
			echo "<br/>".__FUNCTION__."<br/>";
		}
	}
	/*
		1.IndexAction中的方法和访问控制修饰符是不确定的，如果index方法是public的，可以执行_befor_index()，
		2.如果存在_befor_index()方法，并且是public的，执行该方法
		3.执行test方法
		4.再判断有没有_after_index()方法，如果是public的就执行该方法
	 */
	 if(!class_exists('IndexAction')){
		die("类不存在，无法执行");
	 }else{
		 //创建一个ReflectionClass 对象（'IndexAction' 类）
		$reflection_obj = new ReflectionClass('IndexAction');
		//判断是否有index方法
		if(!$reflection_obj->hasMethod('index')){
			die("该index方法没有创建，无法执行");
		}else{
			//创建index方法对象来判断方法的控制修饰符
			$reflection_method_index = $reflection_obj->getMethod("index");
			if(!$reflection_method_index->isPublic()){
				die("index不是一个public的，无法调用");
			}else{
				//判断是否有_befor_index()方法
				if(!$reflection_obj->hasMethod('_befor_index')){
					die("没有_befor_index()方法，无法执行");
				}else{
					$reflection_method_befor = $reflection_obj->getMethod("_befor_index");
					if(!$reflection_method_befor->isPublic()){
						die("该方法不是一个public方法，无法执行");
					}else{
						$reflection_method_befor->invoke($reflection_obj->newInstance());
					}					
				}
			}
			//调用test方法
		$reflection_obj->getMethod("test")->invoke($reflection_obj->newInstance(),2020,2,2);
		//判断是否有_after_index()方法
		if(!$reflection_obj->hasMethod("_after_index")){
			die("没有_after_index方法，无法执行");
		}else{
			$reflection_method_after = $reflection_obj->getMethod("_after_index");
			//判断_after_index（）方法是不是public的
			if(!$reflection_method_after->isPublic()){
				die("_after_index方法不是一个public的，无法执行");
			}else{
				$reflection_method_after->invoke($reflection_obj->newInstance());
			}
		}
		
		}
	}
?>