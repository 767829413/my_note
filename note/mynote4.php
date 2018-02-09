<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
</head>
<?php
//----------数组----------------------
//提出问题,不使用数组解决问题时:
/*	$a=3;
	$b=5;
	$c=1;
	$d=3.4;
	$e=2;
	$f=50;
	$oper="allWeight";
	switch($oper){
		case 'allWeight':
			$g=$a+$b+$c+$d+$e+$f;
			break;
		case 'average':
			$g=($a+$b+$c+$d+$e+$f)/6;
			break;
		default:
			echo "今晚吃鸡,大吉大利";
	}
	echo $g.'Kg';*/
//上述问题只是养了了六只鸡,如果养了6000只呢?60k只呢???这样提出了--数组(array)---的应用,来统一的的管理一组数
//----可以存放多个数据的数据结构-----array
//---快速体验案例---使用数组解决上述养鸡问题-----
/*	$hens[1]=3;
	$hens[2]=5;
	$hens[3]=1;
	$hens[4]=3.4;
	$hens[5]=2;
	$hens[6]=50;
	$hens[7]=30;
	$allWeight=0;
//遍历整个数组-----for(){}循环
//有时为了知道某个数组共有多少个元素,可以使用系统函数 count
	echo "共有".count($hens)."只鸡"."<br/>";
	for($i=1;$i<=count($hens);$i++){
		echo "第".$i."只鸡体重=".$hens[$i]."kg"."<br/>";
		$allWeight+=$hens[$i];
	}
	echo "所有鸡的总体重=".$allWeight."kg"."<br/>";
	echo "所有鸡的平均体重=".($allWeight/count($hens))."kg";*/
//----上述案例重点说明数组的基本使用,细节在后面说明----
/*--------数组的创建------------
在php中,数组就是关键字和值的集合(key and value).我们创建数组的方法y有以下几种:
<1>创建数组的第一种方式:
$array[0]=123;	//123-->表示$array[0]对应的值***$array-->表示数组名
$array[1]=90;	//[0]-->关键字(下标)***$array[0]-->数组的一个元素
$array[2]=8;	//----->数组在内存中,类似楼层与楼层中的房间---
				//在php数组中,每个元素存放的值可以是任意数据类型
*/
//-----举例说明----
/*	$arr[0]=123;
	$arr[1]='hello';
	$arr[2]=45.6;
	$arr[3]=true;
	$arr[4]=null;	//即使放入了一个null,任然要占用一个空间;
	echo '数组大小'.count($arr)."<br/>";
//---遍历数组---
	for($i=0;$i<count($arr);$i++){
		echo $arr[$i]."<br/>";
	}*/
//---创建数组的第二种方式--
/*------基本语法------
	$数组名=array(value1,value2......);*/
//-------举例说明--------
/*	$cd=array(1,90,'hello',true,89,5,null);
	echo '总数'.count($cd).'<br/>';
	for($i=0;$i<count($cd);$i++){	//遍历数组
		echo $cd[$i].'<br/>';
	}*/
//---创建数组的第三种方式(关键字可以指定,默认情况下,元素下标是从0开始)--
/*----基本语法-------
<1>.	$数组名["关键字"]="元素"
<2>.	$数组名=array("关键字"=>"元素")*/
//-----案例演示(自己指定关键字)-----
/*
//	$arr['car1']='奥迪';
	$arr[0]='奥迪';
//	$arr['car2']='宝马';
	$arr[1]='宝马';
//	$arr['car3']='奔驰';
	$arr[2]='奔驰';
//	$arr['car4']='别克';
	$arr[3]='别克';
//---无法采用for(){}遍历数组,因为关键字(下标)已将改变了,无法在内存中找到数组关键字(下标)所对应的元素所在空间----
	foreach($arr as $nb=>$sb){	//---适用范围更广泛!!!---
		echo $nb."=>".$sb."<br/>";
	}*/	
	
	

/*	$fruit=array("apple"=>"red","banana"=>"yellow","strawberry"=>"pink");
	echo count($fruit);
	foreach($fruit as $nb=>$sb){	//---适用范围更广泛!!!---
		echo $nb."=>".$sb."<br/>";
	}*/
//----注意!!!-----------
//	$arr=array(5=>"logo",567,90);
	//我要访问567这个值
//	echo $arr[6];
//1.如果我们创建一个数组的时候,没有给某个元素指定下标(关键字),php会自动用目前最大的那个下标值(int),加上一作为该元素的下标(关键字)
//2.如果我们让某个元素的下标(关键字)一样,则会覆盖原来的值,案例如下
/*	$arr=array(5=>"logo",567,90);
	//我要访问567这个值
	$arr["5"]="yes";	//替换某个元素的值
	echo $arr[5]."<br/>";	
	echo $arr[6]."<br/>";*/	
//3.使用true作为数组元素关键字(下标)则,使用数组下标1也可以访问该元素,同理false作为下标时,0也可以访问.案例如下
/*	$arr[true]="hi";
	$arr[false]="hello";
	echo $arr[true]."<br/>";
	echo $arr[1]."<br/>";	//true等价于1
	echo $arr[false]."<br/>";
	echo $arr[0];*/			//false等价于0		
//4.在php中null<==>"";
//	$arr[null]="哈哈";
//	echo $arr[null]."<br/>";
//	echo $arr[""]."<br/>";
//	echo $arr[]."<br/>";	//会导致程序报错[]不等价null或""
//5.使用小数作为key(下标,关键字)值,php会自动截断小数部分:
/*	$arr[12.34]="hi";
	echo $arr[12.34]."<br/>";
	echo $arr[12];*/
//6.我们通常使用print_r() 或var_dump() 来显示这个数组情况
/*	$arr[0]=123;
	$arr[1]='hello';
	$arr[2]=45.6;
	$arr[3]=true;
	$arr[null]="爱爱";
	print_r($arr);
	echo "<br/>";
	var_dump($arr);	//返回数据类型,信息更全面*/
//7.访问数组的时候不要越界案例如下
/*	$arr=array(56,100,401);
	echo $arr[4];	//数组越界!!
	echo "hello";*/
//***********************
/*	$a=array(2,3);
	$a[2]=56;
	$a[4]=57;
	echo $a[2];
	echo $a[4];*/
//-----------我们的php数组可以动态增长!!!!!
//一维数组的引用--基本语法:
//	$数组名[键值];	//如果写的键值不存在,则会报:Notice: Undefined offset
//----一维数组引用的陷阱--------
/*	const bar="nn";
	$arr[bar]="hello";
	echo $arr[bar];*/
//上诉引用方法不可取!!!!!!!
//--------php数组相关函数说明---------
//<1>. count($数组名); 统计该数组共有多少元素.
//<2>. is_array($数组名);
//	$arr=array(12,56,45);
//	$arr=454;
//	echo is_array($arr);
//<3>. print_r() 与 var_dump() 可以显示数组(foreach()可以遍历数组);
//<4>. explode 对字符串进行分割
//	$str="北京 顺平 天津 宋江";
//	$str="北京&顺平&天津&宋江&林冲";
//	$arr=explode("&",$str);	//在实际开发中,涉及到字符串的拆分,可以考虑
//---------数组遍历的四个方法
//----如果数组的键值(关键字或下标)是自定义,且或是整型但无顺序的,或是字符串的,则不能用for() while() do_while()遍历数组
//	print_r($arr);
//	$colors=array("red","blue","green","yellow");
	//for while do while
//for
/*	for($i=0;$i<count($colors);$i++){
		echo $colors[$i]."<br/>";
	}*/
//while
/*	$i=0;	//循环控制变量
	while($i<count($colors)){	
//	while($i=0;$i<count($colors);$i++){	//会报错!!!!
		echo $colors[$i]."<br/>";
		$i++;
	}*/
//do while
/*	$i=0;
	do{		
		echo $colors[$i]."<br/>";
		$i++;
	}while($i<count($colors))*/
//foreach
/*	foreach($colors as $a => $b){
		echo $a."=>".$b."<br/>";
	}*/
/*	$colors=array("red","blue","green","yellow");
	echo $colors;*/  //直接显示出array,无多大意义
//<5>.unset()函数可以销毁某个元素也可以销毁某个变量,销毁数组的一个元素后,数组的关键字不会重新组合!!!!!!!!
/*	$arr[0]=123;
	$arr[1]=456;
	$arr[2]="hello";

	//比如现在我要删除 $arr[1];
	echo "**删除前***<br/>";
	echo $arr[1];
	unset($arr[1]);
	echo "<br/>**删除后***";
	echo $arr[1];
	print_r($arr);*/
//--------数组运算符详见php参考手册--数组+
/*	$a = array("a" => "apple","b" => "banana");
	
	$b = array("a" => "pear","b" => "strawberry","c" => "cherry");
	
	$c = $a + $b;	//右边$b数组的键和值加到$a相同的键-值对就不参与相加,不同的键-值对参与相加
	
	echo "\$a + \$b result <br/>";
	var_dump($c);
	echo "<br/>************<br/>";
	$c = $b + $a;
	echo "\$a + \$b result <br/>";
	var_dump($c);*/
//1.数组可以存放任意类型的数据
//2.数组不必事先指定,可以动态增长
//3.数组名可以理解为指向数组首地址的引用
//4.数组中元素以key=>value的形式存在
//5.如果没有给数组指定key,则取当前最大值的整数索引值,而新建的键名是该值加1
?>
</html>