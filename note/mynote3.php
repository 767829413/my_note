<html>
<head>
<title>function</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<?php
//函数讲解
//提出问题:输入两个数,再输入一个运算符(+,-,*,/),得到结果
//1--不考虑函数的调用--
/*	$i=66;
	$n=66;
	$oper="/";
//$res存放运算结果
	$res=0;
	switch($oper){
		case "+":
			$res=$i+$n;
			break;
		case "-":
			$res=$i-$n;
			break;
		case "*":
			$res=$i*$n;
			break;
		case "/":
			$res=$i/$n;
			break;
		case "%":
			$res=$i%$n;
			break;
		default:
			echo "over";
			break;
	}
	echo "res=$res";*/
/*分析:如果别的页面也需要这样的功能,则代码的复用性不好,
从而提出------------函数----------*/
//2.---直接调用函数解决问题----

//引入所需的函数(php文件)
//	require 'funcs.php';  //把funcs.php 内容引进来
//	$i=99;
//	$n=66;
//	$oper="%";
//计算结果可以调用函数进行解决
//	$res=jiSuan($i,$n,$oper);
//	$res=jiSuan(3,4,'*');
//	echo "计算结果是=".$res;
//	echo jiSuan($i,$n,$oper);
//---函数的定义--解决方法--------
/*---为了完成某一功能的程序指令(语句)的集合,称为函数*/
//---函数细节与运行原理-----函数也可以成为方法!!二者一个意思---
//---自定义函数------
//---自定义函数的基本语法结构-----
//--------参数列表是用来接收数据---
/*	functio 函数名(参数列表, 号隔开){
		//函数体;(完成某一个功能的指令集合----这个必须有)
		return 语句;(主要用处是返回一个结果--按需要求,可有可无)
	}
------函数的调用-----php页面相互调用的知识点
提出:a.php 页面要使用到 b.php中定义的函数,我们可以使用
如下指令:---1.require 2.require_once 3.include 4.include_once
<1>.-----require的用法------
<?php
	require '要引入的文件名'; //第一种引入php文件名(路径)

	$filePath='abc';		//第二种引入变量或其它文件中变量	
	require $filePath;

	require '要引入的文件名(路径)';	//第三种引入其它文件(路径)
?>*/
//举例1--------------	
//	require 'note3.php';	//这里就是所谓的函数->怎样理解函数的调用
//	abc();
//1.php执行时.一旦遇到函数的调用,就会开辟一个新栈,执行调用函数的代码,执行完毕后,返回继续执行后续代码
//	echo '<br/>hello-hello!';
//举例2--------------
//---通过变量引入---
/*	$fileName="note3.php";
	require $fileName;
	abc();
	echo '<br/>haha-haha!';*/
//举例3--------------
//---通过路径引入与第一种类似,多了()---
/*	require ('note3.php');
	abc();
	echo '<br/>呵呵呵-yoyo!';*/
//第一种方法使用较多!!
//---require与require_once的qubie
//--require遇到就包含文件,require_once会判断是否已经包含过了,如果包含过了,就不再包含文件,1.节省了资源 2.可以避免重复定义错误.
//---举例说明----
//	require "note3.1.php";
//	require "note3.1.php";
//	require "note3.php";
//	require "note3.php";
//	require_once "note3.1.php";
//	abc();
//	abc();
//	echo "<br/>";
//先判断再引入,如果发现note3.1.php已经引入了,就不再引入
//	require_once "note3.php";
//	abc();
//总结:在一个php文件中,函数名不能相同
//---include()与include_once()的细节---
//共同的作用与功能都是可以把一个php页面,包含到另外一个页面
//--------------基本用法--------------
/*	<?php
		include ('被包含的文件');

		include '被包含的文件';

		include $filePath;
	?>*/
//-----区别-----include遇到就包含文件,include_once会判断是否已经包含过了,如果包含过了,就不再包含文件,1.节省了资源 2.可以避免重复定义错误.
//-----证明案例----------
/*	include 'note3.1.php';
	include_once 'note3.1.php';
	include_once 'note3.1.php';
//	echo '!!!!!!!!!!';*/
//-------include与require的区别(include_once与require_once的区别)------
//相同:都是引入别的php页面
//不同点:include出现了错误还会继续向下执行,require出现错会终止程序.
//-----案例1-1------
/*	require 'note36.1.php';
//	include 'note36.1.php';

	echo '我说你是不是傻';*/
//---------小结:我们应当使用哪个???------
//1.我们做项目开发的时候,基本上使用的是require_once;
//2.注意!!我们的require_once/require(其他都是)应当放在php页面的最前面!!!!!!!!!否则会造成致命错误
//3.include是在php文件执行时才会被引入,require是先引用在执行,所以include引入文件出错时php文件还会继续执行,而require却会在以引入文件出错时直接终止php文件运行,详细见上面案例1-1
//	require_once 'note3.php';
/*	abc();
	echo '我说你是不是傻';
	require_once 'note3.php';*/
//*********对函数的理解***********
//如何理解函数的调用过程
//在调用函数时,建立起一个入口栈,将所需的参数通过入口栈传递给函数开辟对的新栈,然后运行变量传递的参数
//1.按照函数的规则,只要看到函数,则php则会开辟一个新栈
//2.各个栈间的变量是相互独立的(空间独立)
//3.return用于返回一个具体的结果
//-----案例1-------
/*	function abc($n){
		if($n>4){
			abc(--$n);
		}
		echo '$n='.$n.'<br/>';
	}
	abc(7);*/
//-----案例2-------
/*	function abc($n){
		if($n>2){
			abc(--$n);
		}else{
			echo '$n='.$n.'<br/>';
		}
	}
	abc(4);*/
//小结:----函数自己调用自己,称为递归调用---
//-----函数深入使用讨论-----
//---*--函数的基本结构-----
//	function 函数名(参数列表){
		//函数体;
		//return 语句
//	}
/*
----1.参数列表可以是多个参数
----2.参数列表的数据类型可以是任意php支持的数据类型(array/integer/float/boolean/string/object/null/资源类型)
----3.函数名开头的字母是以下划线(_)或者A_Z或者a_z.不要用数字或者特殊字符开头
----4.函数名不区分大小写
----5.一个自定义函数的变量是局部的,函数外不生效(见案例4.0)
----6.使用global全局变量的时候,可以使用在函数外的变量(见案例4.1)
----7.如果在函数中我们不希望某个变量,或者希望彻底的不使用某个变量,则可以使用 unset(变量名),将该变量彻底删除(为了防止全局变量的混乱,可以使用 unset($Var)删除一个变量).(见案例4.2)
----8.函数默认值问题:在php函数中,我们可以给某些参数,赋一个默认的值(见案例4.3)
----9.PHP传递变量的时候,默认是值传递,如果需要引用(地址)传递,可以使用&(地址符) 变量名;(php默认是值传递,如果需要引用(地址)传递则要使用 &变量名).(见案例4.4)
*/
//-----案例4.0-------
/*	function abc(){
		$a=45;
		echo "a=$a";
	}
	abc();
	echo "aaa=$a";*/
//上述案例会报错的
//在php中有三种提示
/*----notice:注意
------waring:警告
------error:错误*/
//-----案例4.1-------
/*	$a=12;
	function abc(){
		global $a;	//表示在function abc()范围内,使用函数外面的$a;
		$a+=45;
	}
	abc();
	echo "a=$a";*/
/*	$a=12;
	function abc($a){
		$a+=45;
	}
	abc($a);	
//	abc(12);
	echo $a;*/
//-----案例4.2-------
/*	$a=12;
	function abc($a){
		unset($a);	//不在function abc() 范围内,就不在使用$a,后面重新定义;
		$a=45;
	}
	abc($a);
	echo $a;*/
//-----案例4.3-------
/*		function abc($b,$a=2){
			$res=$a+$b;
			return $res;
		}
		$e=70;
		echo abc($e).'||';
		echo abc($e,90);*/
//-----案例4.4-------	
/*	$a=213;
	function abc(&$b){
		$b=314;
	}
	abc($a);
	echo $a;*/
?>
</html>