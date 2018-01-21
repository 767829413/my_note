<?php
/* $a=90;
   $b=2;
   if($a%$b==0){
	   echo '能整除';
   }else{
	   echo '不能整除';
   }
   */
/*	$a=90;
	$a++; //等加入$a=$a+1
	echo '<br/>'.$a;
	$b=90;
	$b--;
	echo '<br/>'.$b;
	*/
/*	$a=10;
	$b=$a++;//等价于$b=$a; $a=$a+1;--一样类似于++
	echo $b;
	echo '<br/>'.$a;
	*/
/*	$a=10;
	$b=++$a;  //等价于$b=$a+1; $a=$a+1;--一样类似于++
	echo $b;
	echo '<br/>'.$a;
	*/
/*	$a=100;
	$a-=100; //$a=$a-100 +,*,/,% 类似
	echo $a;
	*/
/*	$a=2;
	$b=2.0;
	$c='2';
	if($a===$c){	//==只要值相等就是true,===要值和类型都相等
		echo '$a等于$c';
	}else{
		echo '$a不等于$c';
	}
	if($a!=$b){	//只要值不相等就行,类型不管
		echo '$a!=$b';
	}else{
		echo '$a=$b';
	}
	if($a!==$b){	//值不相等或类型不同都是ture
		echo '$a!==$b';
	}else{
		echo '$a=$b';
	}
	*/
/*	$a=10;
	$b=10;
	if($a==$b){
	echo "ok1";
	}
	$b++;
	if($a<$b){
	echo "<br/>ok2";
	}
	if($a<=$b){
	echo "<br/>ok3";
	}
	*/
/*	$a=40;
	$b=40.0;
	$c="40";
	var_dump($a,$b,$c);
	if($a==$b){
	echo "<br/>a值等于b值";
	}
	else{
	echo "<br/>a值不等于b值";
	}
	if($a===$b){
	echo "<br/>a完全等于b";
	}
	else{
	echo "<br/>a不完全等于b";
	}
	if($a>$b){
	echo "<br/>a值大于b值";
	}
	else{
	echo "<br/>a值小于或等于b值";
	}
	*/
	//特别推介
/*	$a=1;
	if($a){
	echo "Hello MyPHP!!";
	}
	*/
/*	$a=10;   // 逻辑的运算符
	$b=10;
	if($a==$b||$a>66){
	echo "<br/>a等于b或a大于6";
	}
	$b--;
	if($a>$b&&$a>9){
	echo "<br/>a大于b且a大于9";
	}
	if(!($a<$b)){
	echo "<br/>a小于b的取反为真";
	}
	*/
	//1
/*	$a=8;
	$b=8;
	if($a++>7||$b++>8){	//a++进行比较时,先让a与所给值进行比较,然后再+1而++a是先让a+1,然后再将a+1的值与所给值进行比较
	//当执行'或'(||)时,前面条件满足了,||后面就不执行运算了,直接输出true
	echo 'a加加大于8或b加加大于8';
	}
	echo '<br/>a='.$a.'<br>b='.$b; 
	//2
	$a=6;
	$b=6;
	if(++$a>6 && ++$b>6){
		////当执行'或'(||)时,前面条件不满足了,||后面就还要执行运算
	echo '<br/>加加a大于6且加加b大于6';
	}
	echo '<br/>a='.$a.'<br>b='.$b;
	//当执行'与'(&&)时,前面条件满足时&&后面条件也要执行!!
	//3
	$a=5;
	$b=5;
	if($a++>4 && $b++>5){
	echo '<br/>加加a大于4且加加b大于5';
	}else{
	echo '<br/>加加a大于4但加加b小于或等于5';
	}
	echo '<br/>a='.$a.'<br>b='.$b;
	//4
	$a=11;
	$b=11;
	if(++$a>11 && ++$b>11){
	echo '<br/>加加a大于11且加加b大于11';
	}
	echo '<br/>a='.$a.'<br>b='.$b;
	//当执行'与'(&&)时,前面条件不满足时&&后面条件不执行!!!!!!!
	//5
	$a=8;
	$b=8;
	if($a++>8 && $b++>8){
	echo '<br/>a加加大于8且b加加大于8';
	}else{
	echo "<br/>a加加小于或等于8且b加加小于或等于8";
	}
	echo '<br/>a='.$a.'<br>b='.$b;
	*/
	//
/*	$e= false || true; //e为ture
	$f= false or true; //f为false or优先级低于=
	var_dump($e,$f);
	$g= false && true; //e为false
	$h= true and false; //f为ture and优先级低于=
	var_dump($g,$h);
	*/
	//**三元运算符:表达式1? 表达式2:表达式3;表达式1是ture则取表达式2的值,否则取表达式3的值----表达式可以是函数.
/*	$a="767829413"? "ok" : "no";
	$b="123456"? "ok" : "no";
	echo '$a='.$a.'<br/>$b='.$b;
	$c=90;
	$d=80;
	//$e=$c>$d? NB : CB;
	$e=$c<$d? (10-8) : "Hello world";
	$f=$c>$d? (10-8) : "Hello world";
	echo '<br/>$e='.$e.'<br/>$f='.$f;
	*/
//**字符串运算
/*	$a="My dear friend!!";
	$b="back my money!!";
	$c="I HATE YOU";
	$g=666;
	$b.=$a;
	$e=$a.$c;
	$k=$a.$g;
	var_dump($g);
	echo '$b='.$b.'<br/>$e='.$e.'<br/>$k='.$k;
	var_dump($g);
	*/
//类型运算符---instanceof用于确定一个php变量是否属于某一类class.
/*	class Dog{}
	class Cat{}
	//创建一个对象
	$cat1=new Cat;
	var_dump($cat1 instanceof Dog);
	//在实际开发中,我们可能需要去判断某个变量是否是某个(class)类型,不能判断基本数据类型,面向对象编程中使用
	if($cat1 instanceof Dog){
	echo "<br/>cat1是一只狗";
	}else{
	echo "<br/>cat1是一只猫";
	}
	$a=123;
	if($a instanceof Integer){
	echo '$a是整数';
	}
	*/
	//**运算符优先级
	//++和--都是对一个变量进行操作的
/*	$a=++3;
	echo $a;*/
/*	$a=3;
	//$b=++$a*3; //前++的优先级高于*
	$b=$a++*3;	//后++的优先级低于*
	echo $b;
	*/
//**php三大流程控制****
//1顺序控制 
/*	 $a=7;
	 echo "a=".$a;
	 echo "hello";
	 $a++;
	 echo "a=".$a;
	 echo "QaQ";
	 $a++;
	 echo "a=".$a;*/
	 //顺序控制是默认情况下不加任何控制,按顺序执行编写的代码!!!
//2分支控制--简单定义:有选择的来执行我们的代码
	//<1>单分支控制
	/*if(条件表达式){
		代码1!!!!!!;
		代码2!!!!!!;
		代码3!!!!!!;
		代码4!!!!!!;
			....;
		} 这里的条件表达式不管多复杂,都最后的的结果只会是 true 或者 false */
	//入门案例
/*	$age=19;
	if($age>18){
	echo "你的年龄大于18岁,要对自己的行为负责哦!!!";
	}
	*/
	//<2>双分支
	/*基本语法结构
	if(条件表达式1){
		//n多语句代码;
	}else{
		//n多语句代码;
	}*/
/*	$age=19;
	if($age>18){
	echo "你的年龄大于18岁,要对自己的行为负责哦!!!";
	}else{
	echo "少年你好棒棒哦!!??";
	}
	echo "<br/>程序结束咯!!";*/
//<3>多重分支
	/*基本语法结构
	if(条件表达式){
		//n多语句;
	}else if(条件表达式){
		//n多语句
	}else if(条件表达式){
		//n多语句;
	}
	.....//还能有更多的else if
	else{
		//****!!!(1)else if可以有一个也可以有多个 (2)else可以没有也可以有
		*/
//----入门案例---
//	$age=36;
//	if($age>18){
//	echo "你的年龄大于18岁,要对自己的行为负责哦!!!";
//	}else if(/*$age<=18 && $age>10*/$age>20){
//	echo "少年,犯错可是要去少管所哦!!??";
//	}else if($age<10 && $age>5){
//	echo "TM爸妈怎么管的!!!父母的责任!!";
//	}else{
//	echo "给幼儿一片干净的天地!!";
//	}
//	echo "<br/>程序结束咯!!";
//上面那段代码多行注释会导致下面的switch代码无法运行!!
//----SWITCH语句-----
//基本语法结构
//	switch(表达式){
//	case 常量1:
		//n多语句;
//		break;
//	case 常量2:
		//n多语句;
//		break;
//	defaultl:
	//n多语句;
//	break;
//	}
	//!!!注意:1.case 语句有一到多; 2.defual 语句可以没有(由代码的业务逻辑决定); 3.通常再case语句后要带上break语句,表示退出switch语句; 4常量的类型(int型; float型; 字符串型; 布尔型; )
//--快速入门案例---
/*$name="b";
	switch($name){
		case "a":
			echo "今天星期一,猴子穿新衣";
			break;//如果没有break,会继续向下执行代码直到碰到break才停止!!!
		case "b":
			echo "今天星期二,猴子当小二";
			break;
		case "c":
			echo "今天星期三,猴子爬雪山";
			break;
		default:
			echo "没有匹配日期";
	}
	echo "ok ok ok ok ok ok";
	*/
//练习1---字符串能自动转换为整数进行匹配
/*	$a="1";
	switch($a){
	case 1:
		echo '<br/>hello1';
		break;
	case 2:
		echo '<br/>hello2';
		break;
	default:
		echo '<br/>default';
	}*/
//练习2---float也可以进行switch语句的匹配
/*	$a=1.1;
	switch($a){
	case 1.1:
		echo '<br/>hello1rr';
		break;
	case 2:
		echo '<br/>hello2';
		break;
	default:
		echo '<br/>default';
	}*/
//练习3---1.可以使用布尔型; 2.当用布尔类型时会自动转换数据类型
/*	$a=true;
	switch($a){
//	case true:
	case false:
		echo '<br/>true1';
		break;
//	case 2:
	case 0:
		echo '<br/>hello2';
		break;
	default:
		echo '<br/>default';
	}*/
//练习4-----
/*	$a=2;
	switch($a){
	case true:
		echo '<br/>true1';
		break;
	case 2:
		echo '<br/>hello2';
		break;
	default:
		echo '<br/>default';
	}
	echo '跳出判断了,只会输出一个case所对应的代码';*/
//!!! 在php中switch可使用整数,小数,字符串,布尔型,null---php中非0为真!!!!!!
//总结1 如果匹配一个入口case,则一直执行,直至遇到break
/*	$i=10;
	switch($i){
		case 10:
			echo '<br/>10';
//			break;
		case 1.3:
			echo '<br/>11';
			break;
		case 1.4:
			echo '<br/>12';
			break;
	}
//总结2 default语句放置的位置对执行的结果没有影响!!!
//最终结论!!!是switch首先按照case语句顺序进行匹配,如果匹配不到,则执行default语句的内容,直至遇到break语句,才退出switch
	$i=11;
	switch($i){
		default:
			echo '<br/>hello';
			break;
		case 10:
			echo '<br/>10';
//			break;
		case 1.3:
			echo '<br/>11';
			break;
		case 1.4:
			echo '<br/>12';
			break;
	}
//总结3
	$i=11;
	switch($i){
		default:
			echo '<br/>hello';
//			break;
		case 10:
			echo '<br/>10';
//			break;
		case 1.3:
			echo '<br/>11';
			break;
		case 1.4:
			echo '<br/>12';
			break;
	}*/
//if语句与switch语句的区别和适用场景.
//韩老师回答:if往往对某一个区域或范围的判断,而switch是对一个点的判断,所以我们可以这样选择::
//当我们的分支就是几个点的时候(比如判断坦克的方向),就应该使用switch,如果你的分支是几个区域或者范围的判断,则考虑使用if.
//------循环控制----
/*FOR循环基本语法结构----------
	for(循环初值;循环条件;步长){
		//n多语句;
	}*/
/*	for($a=0;$a>10;$a++){
		echo '<br/>你好北京';
	}
		echo '<br/>over';
		*/
/*WHILE循环基本语法结构----------
	//---基本语法结构----
	while(循环条件){
	//循环体语句;
	}*/
//---入门小案例----
/*	$a=0;	//循环控制变量
	while($a<10){
		$a++;
		echo '<br/>hello,beijing!!';
	}
	echo '<br/>print is over';*/
/*DO WHILE循环基本语法结构----------
	//---基本语法结构----
	do{
		//循环体;
	}while(循环条件);*/
//---快速入门案例---
/*	$a=0;	//循环控制变量
	do{		//$a=0不放入循环体中是因为++的优先级小于=!!
		$a++;  //$a+多少由程序员自己控制步长
		echo '<br/>hello!china!';
	}while($a<10);
	echo '<br/>over';*/
//打印一半金字塔
/*	$a=0;
	$b='*';
	do{
		echo '<br/>'.$b;
		$a++;
		$b.='*';
	}while($a<5);*/
/*	for($a=0;$a<5;$a++){
		$b.='*';
		echo '<br/>'.$b;
	}*/
/*	for($a=0;$a<5;$a++){
		for($b=0;$b<=$a;$b++){
			echo '*';
		}
		echo '<br/>';
	}*/
//打印完整实心金字塔
/*	$n=10;
	for($a=1;$a<=$n;$a++){
		for($k=1;$k<=$n-$a;$k++){
			echo "&nbsp;";
		}
		for($b=1;$b<=($a-1)*2+1;$b++){
			echo '*';
		}
		echo '<br/>';
	}*/
/*	$n=20;
	for($a=1;$a<=$n;$a++){
		for($f=1;$f<=$n-$a;$f++){
			echo '&nbsp;';
		}
		for($k=1;$k<=$a*2-1;$k++){
			echo '*';
		}
		echo '<br/>';
	}*/
/*	$n=20;
	for($a=1;$a<=$n;$a++){
		for($k=1;$k<=$n-$a;$k++){
			echo '&nbsp;';
		}
		for($g=1;$g<=$a*2-1;$g++){
			echo '*';
		}
		echo '<br/>';
	}*/
//打印空心金字塔
/*	$n=50;
	for($a=1;$a<=$n;$a++){	//控制层数
		for($b=1;$b<=$n-$a;$b++){	//前面空格数
			echo '&nbsp;&nbsp;';	
		}
		if($a==1){	//金字塔主体
				echo '*';
		}
		if($a>1 && $a<$n){
			echo '*';
			for($d=1;$d<=$a*2-3;$d++){
				echo '&nbsp;&nbsp;';
			}
			echo '*';
		}
		if($a==$n){	//金字塔主体
			for($c=1;$c<=$a*2-1;$c++){
				echo '*';
			}
		}
		echo '<br/>';
	}*/	
//打印实心的菱形
/*
//菱形上	
	$n=20;
	for($a=1;$a<$n;$a++){
		for($k=1;$k<=$n-$a;$k++){
			echo '&nbsp;';
		}
		for($g=1;$g<=$a*2-1;$g++){
			echo '*';
		}
	echo '<br/>';
	}
//菱形下
	echo '<br/>';
	for($a=1;$a<=$n;$a++){
		for($l=1;$l<=$a-1;$l++){
			echo '&nbsp;';
		}
		for($m=1;$m<=($n-$a)*2+1;$m++){
			echo '*';
		}
		echo '<br/>';
	}*/
//打印空心的菱形
/*	$n=18;
	$b=1;
	$e=1;
	for($a=1;$a<=$n-1;$a++){
		for($f=1;$f<=$n-$a;$f++){
			echo '&nbsp;';
		}
		if($b<$a){
			echo '*';
		}
		if($b<$a){
			for($c=1;$c<=($a-1)*2-1;$c++){
				echo '&nbsp;';
			}
		}
		if($e<=$a){
			echo '*';
		}
		echo '<br/>';
	}
//菱形下
	for($a=1;$a<=$n;$a++){
			for($l=1;$l<=$a-1;$l++){
				echo '&nbsp;';
		}
			if($a<$n){
			echo '*';
			}
			for($l=1;$l<=$n*2-$a*2-1;$l++){
				echo '&nbsp;';
			}
			if($a<$n){
			echo '*';
			}
			if($a<$n){
				echo '<br/>';
			}
			if($a==$n){
				echo '*';
			}
			
		}*/
//	$变量=$_REQUEST['接受值']; 总结:我们在正常使用时,应当保证接收数据时与$_REQUEST['参数'] 要和提交数据的页面所给的html元素名字要一致,如果不一致,则会出现一个notice提示,同时接受的数据就是 null或""等价.
?>	



