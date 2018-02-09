<?php

/**************php中错误处理与异常处理的机制***************
--如果没有错误处理机制会怎样?
************
	//$fp=fopen("aaa.txt","r");
	//echo "ok";
************
--上面的代码没有处理可能出现的错误,应当采用下面的方法保证程序的健壮性

	//1.判断文件是否存在
	//2.绝对路径与相对路径 
	if(!file_exists("aaa.txt")){
		echo "文件不存在";
		exit();
	}else{
		$fp=fopen("aaa.txt","r");
		echo "文件打开了";
		//....关闭文件
		fclose($fp);

	}
//解释一下绝对路径与相对路径



--------------------------------------------------------*/

/********************三种处理方法*******************/

//php处理错误的三种方式:
/***********************************************************
<1>.使用简单的 die() 语句;

使用方法如下:

(1)die 语句使用方式1:
	if(!file_exists("aaa.txt")){
		die("文件不存在");
	}else{
		echo "打开文件";
	}
	echo "ok";

(2)die 语句使用方式2:
	file_exists("aaa.txt") or die("文件不存在???");
	echo "ok";

------------------------------------------------------------



<2>.用户自定义错误函数(处理器:来处理系统上的错误)

在php中对错误有不同的级别区分:

	//写一段代码
	$i=60
	$i+=45;
	echo "ok";
	echo "i=".$i;
	//自定义的错误函数必须放在可能错误的代码段前面
	function my_error($errorlevel,$errormessage){
		//size=后面是单引号
		echo "<font size='6' color='red'>$errorlevel</font><br/>";
		echo "使用错误";
		exit();
	}

//	set_error_handler("my_error",E_WARNING);

	$fp=fopen("aa.txt","r");
	echo "ok";

------------------------------------------------------------


<3>.错误触发器(来处理逻辑上的错误)

需求:有一段代码,接受一个年龄,如果年龄大于120,就认为这是一个错误


--快速入门案例
	//传统方法 
	//有一段代码,接受一个年龄,如果年龄大于120,就认为这是一个错误
	if($age>120){
		echo "age不对";
		exit();
	}
	
	//输入一个薪水,如果薪水小于10000,我认为也是错误
	if($saraly<10000){
		echo "薪水不对";
		exit();
	}

	
	//现在可以使用自定义错误触发器
	
	//自定义错误函数
	function my_error($erra,$errb){
		echo "错误号:".$erra."<br/>";
	}
	function my_error1($erra,$errb){
		echo "出大事了,错误号:".$erra;
		exit();
	}

	//指定E_USER_WARNING错误级别的函数

	set_error_handler('my_error',E_USER_WARNING);
	set_error_handler('my_error1',E_USER_ERROR);

	$age=900;
	if($age>120){
		//调用触发器时候,同时指定错误级别
//		trigger_error("输入年龄过大1",E_USER_WARNING);
		trigger_error("输入年龄过大1",E_USER_ERROR);
//		exit();
		
	}
	echo "继续玩下去";

**********************************************************/


/**********************php错误日志保存*********************

基本方法: error_log函数(方法)

	function my_error($erra,$errb){
		$error_info="错误号:".$erra."--".$errb;
		echo $error_info;
		//保存错误信息
		//\r\n 表示向文件输入一个回车换行
		//<br/> 表示向网页输出一个回车换行
		error_log($error_info."\r\n",3,"G:/MrFangWEB/Error_log/myerror.txt");
	}
	function my_error1($erra,$errb){
		echo "出大事了,错误号:".$erra;
		exit();
	}

	//指定E_USER_WARNING错误级别的函数

	set_error_handler('my_error',E_USER_WARNING);
//	set_error_handler('my_error1',E_USER_ERROR);

	$age=900;
	if($age>120){
		//调用触发器时候,同时指定错误级别
		trigger_error("不要把年龄输入开玩笑",E_USER_WARNING);
//		trigger_error("输入年龄过大1",E_USER_ERROR);
//		exit();
		
	}
	echo "继续玩下去";

-----------------------------------------------------------

现在我们要把时间保存下来:

	echo time();	

	//输出当前时间 
	//默认时区是UTC,和我们中国相差8小时, 
	//设置	1:页面设置	2. 在php.ini设置
	date_default_timezone_set("PRC");
	//格式
	echo date("Y-m-d G:i:s");

	function my_error($erra,$errb){
		$error_info="错误号:".$erra."--".$errb;
		echo $error_info;
		//保存错误信息
		//\r\n 表示向文件输入一个回车换行
		//<br/> 表示向网页输出一个回车换行
		date_default_timezone_set("PRC");
		error_log("时间是".date("Y-m-d G:i:s")."--".$error_info."\r\n",3,"G:/MrFangWEB/Error_log/myerror.txt");
	}

	set_error_handler('my_error',E_USER_WARNING);


	$age=900;
	if($age>120){
		//调用触发器时候,同时指定错误级别
		trigger_error("不要把年龄输入开玩笑",E_USER_WARNING);		
	}
	echo "继续玩下去";


**********************************************************/



/**********************php异常处理*************************

1.基本语法:
	
	try{
		//可能出现错误或是异常的代码
	}catch(Exception e){
		//对异常处理
		//1.自己处理一下
		//2.自己不处理,将其抛出
	}

	
**********************************************************/	

/*
	function A(){
		
		//调用方法
		//添加用户
		//需要addUser与uppdateUser都成功,才算成功
		$res1=addUser("shungping");
//		if($res1){
//			echo "添加成功";
//		}else{
//			echo "添加失败";
//		}
		//修改用户
		$res2=uppdateUser("xiaoming");
//		if($res2){
//			echo "修改成功";
//		}else{
//			echo "修改失败";
//		}
		//删除用户等等,代码


	if($res1 && $res2){
		echo "真的成功";
	}else{
		echo "失败";
	}
		
	}
	//添加方法
	function addUser($username){
		if($username=="shungping"){
			//添加成功
			return true;
		}else{
			//失败
			return false;
		}
	}
	//修改用户
	function uppdateUser($username){
		if($username=="xiaoming"){
			//修改成功
			return true;
		}else{
			//修改失败
			return false;
		}
	}

	A();
*/
/**********************************************************

通过上面的代码案例,可以看出传统的异常处理繁琐,扩展性差,代码繁杂!!

怎样可以有效的控制多条可能出现错误或是异常的代码???


**********************************************************/


/*********现在使用异常处理机制来解决这个问题*******/

// -----快速入门案例---------
/*
	try{
		echo "<br/>1111111111111111111111111111";
		addUser("shungping");
		echo "<br/>2222222222222222222222222222";
		updateUser("xxx");
		echo "<br/>3333333333333333333333333333";
	//catch 捕获	Exception 是异常类(php定义好的一个类)
	}catch(Exception $e){
		echo "失败信息=".$e->getMessage();
	}

	function addUser($username){
		if($username=="shungping"){
			//添加成功
		}else{
			//添加error	抛出异常可以理解成返回了一个异常信息
			throw new Exception("添加失败");
		}
	}

	function updateUser($username){
		if($username=="xiaomi"){
			//修改正常
		}else{
			throw new Exception("修改失败");
		}
	}

*/

/**************异常处理使用的注意事项**********************

1.通过上面的案例,我们可以看出,使用
	try{
	
	}catch(Exception $e){
		//对异常的处理
	}
这种方式.可以更有效的控制错误,所以在开发中大量的使用

-----------------------------------------------------------

2.当catch(捕获)到一个异常后,try{}块里的后续代码不会执行;



3.如果有一个异常发生,但是你没有catch(捕获),则会提示Ucatched
	Exception.
		function checkNum($val){
		if($val>100){
			throw new Exception("err_1:数据大于100");
		}elseif($val<20){
			throw new Exception("err_2:数据小于20");
		}
	}
	
	try{
		checkNum(15);
	}catch(Exception $e){
		//异常处理
		
		echo $e->getMessage()."<br/>"."错误位于第".$e->getLine()."行";
		
	}

-----------------------------------------------------------

4.当catch一个异常后,你可以处理,也可以不处理,不处理就可以:

	throw new Exception("信息");
代码:		
	//定义一个顶级异常处理器
	function my_exception($a){
	
		echo "哟呵,特么你想干嘛呢??".$a->getMessage();
	}
	
	//修改默认的顶级异常处理函数(器)
	set_exception_handler("my_exception");


	function a1($a){
		if($a>100){
			throw new Exception("$a>100");
		}
	}
	
	function a2($b){
	
		if($b=="hello"){
		
			throw new Exception("不要输入hello");
		}
	}


	try{
		a2("hello");
	}catch(Exception $e){
		//获取异常
		//echo $e->getMessage();	//--显示异常,不是处理
		//可以不处理,继续throw抛出,这时将会启动php默认的异常处理器,你也可以自己定义一个顶级异常处理.
		throw $e;
	}

-----------------------------------------------------------

5.可以自定义异常类

	class MyException extends Exception{
	
	}

6.	try{
		//代码...
	}catch(PDOException $e){
	
	}catch(Exception $e){
	
	}

**********************************************************/

/*****************异常的规则*******************************

1.需要进行异常处理的代码应该放入try 代码块中,以便捕获潜在的异常;

2.每个try 或 throw 代码块必须至少拥有一个对应的 catch 代码块;

3.使用多个 catch 代码块可以捕获不同种类的异常;


	//定义了一个异常

	class My_exception1 extends Exception{
	
	}

	class My_exception2 extends Exception{
	
	}

	function A(){
		throw new My_exception1("a");
	}

	function B(){
		throw new My_exception2("b");
	}


	function C(){
		try{
			A();	//抛出My_exception1
			B();	//抛出My_exception2
		}catch(My_exception1 $e1){
			echo $e1->getMessage();
		}catch(My_exception2 $e2){
			echo $e2->getMessage();
		}
	}


4.可以在 try 代码块内的catch 代码块中再次抛出(re-thrown)异常;

5.简而言之: 如果抛出异常,就必须捕获它,或者使用顶级异常处理器处理;

**********************************************************/


//思考
/*
	try{
		//$i=8/0;
		//$fp=fopen("aaa.txt","r");
	//	throw new Exception("0不能作为除数");
		
	}catch(Exception $e){
		echo "ok";
		echo $e->getMessage();
	}
*/
//上面的代码并不会执行"ok";,原因是	$i=8/0 ; 并没有抛出异常,所以可以得到,能不能 catch 异常取决于有没有真的抛出异常





?>