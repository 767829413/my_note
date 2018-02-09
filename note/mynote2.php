<?php
//九九乘法表------精简前
/*	for($k=1;$k<=9;$k++){
		for($a=0;$a<$k;$a++){
			$c=$a+1;
			$d=$k*$c;
			echo $c.'*'.$k.'='.$d;
			echo '&nbsp;';
			}
		echo '<br/>';
	}/*
//九九乘法表------精简后
/*	for($i=1;$i<=9;$i++){
		for($a=1;$a<=$i;$a++){
			$c=$a*$i;
			echo $a.'*'.$i.'='.$c;
			echo '&nbsp;&nbsp;&nbsp;&nbsp;';
		}
		echo '<br/>';
	}*/
//渔夫打鱼
/*	$a=4;
	$n=(($a+1)*3+3)*2;
	echo '我打了'.$n.'条鱼';*/
//猴子摘桃
/*	$b=1;
	for($a=1;$a<=9;$a++){
		$b=($b+1)*2;
	}
	echo '猴子一共摘了'.$b.'个桃子';*/
//1+2+3+4+...+n=?
/*	$n=3;
	$d=($n+1)*$n/2;
	echo '所求和='.$d;*/
//猜拳游戏哈哈哈
//	echo rand(0,2);
/*	$val=$_REQUEST['val'];
	 switch($val){
		case "qt":
			if(rand(0,2)==2){
				$b='呵呵!!你输了';
			}elseif(rand(0,2)==1){
				$b='不错哟,你赢了';
			}else{
				$b='平局啊!少年';
			}
			break;
		case "jd":
			if(rand(0,2)==0){
				$b='呵呵!!你输了';
			}elseif(rand(0,2)==2){
				$b='不错哟,你赢了';
			}else{
				$b='平局啊!少年';
			}
			break;
		case "bu":
			if(rand(0,2)==1){
				$b='呵呵!!你输了';
			}elseif(rand(0,2)==0){
				$b='不错哟,你赢了';
			}else{
				$b='平局啊!少年';
			}
			break;
		default:
			echo '输入错误,不要开玩笑';
	 }
	echo $b;*/
//简易把门程序-----
/*	$user=$_REQUEST['user'];
	$word=$_REQUEST['password'];
	if($user=="767829413" && $word==6217512){
		echo '欢迎您!!!';
	}else{
		echo '账号名或密码错误请重新输入';
	}*/
//---break案例1----用于跳出当前循环
/*	for($i=1;$i<=10;$i++){
			echo '$i='.$i.'<br/>';
		if($i==5){
			break;
		}
	}
	echo "okok";*/
//---break案例2----//break n--n是多少就跳出多少层
/*	$i=0;
	while(++$i){	//$i++  结果是$i=1
		switch($i){
			case 5:
				echo 'quit at five!';
				break;	//break 3 会在此处报致命错误
			case 10:
				echo '<br/>'.'quit at ten!';
				break 2;
			default:
				break;
		}
	}
	echo '<br/>'.'$i='.$i;*/
//总结1.break语句默认跳出一层(break 1) 2.break语句后面带的数字不能超过实际的循环层数,否则会在报致命错误fatal error
//---continue----用于结束本次循环剩余代码,从新开始新的一次循环(如果条件为真,就继续执行),continue 后面也可以带数字,表示从第几层循环开始
//快速入门
/*	 for($i=1;$i<=13;$i++){
		if($i==10){
			continue;
		}
		echo '<br/>'.'$i='.$i;
	 }
	 echo 'GTNM';*/
//案例2
/*	for($i=1;$i<=2;$i++){
		for($j=1;$j<4;$j++){
			if($j==2){
				continue;
			}
		echo '$i='.$i.'&nbsp;'.'$j='.$j.'&nbsp;';
		}
		echo '<br/>';
	}*/
//案例3
/*	for($i=1;$i<=2;$i++){
		for($j=1;$j<4;$j++){
			if($j==2){
				continue 2;
			}
			echo '$i='.$i.'&nbsp;'.'$j='.$j.'&nbsp;';
		}
		echo '<br/>';
	}*/
//---go to 语句
//基本概念:将程序跳转到指定的地方去执行
/*---------
	goto 标签:

	标签:
	语句;*/
//快速入门案例--
/*	goto a;
		echo 'aa';
	a:
		echo "bb";*/
//--案例1---
/*	for($i=0,$j=50;$i<100;$i++){
		while($j--){
			if($j==17){
				goto end;
			}	
//		echo "i=$i"."j=$j".'<br/>';
		}
	}
	echo "i=$i";
	end:
		echo "j=17"."i=$i";*/
//------常量------------ 
/*说明:所谓常量,可以理解为特殊的变量.具体体现在:
1.定义常量前面不需要$;
2.常量一旦定义不可修改;
3.常量定义的时候必须赋初值;
4.常量可以通过define 或者 const 函数定义
5.常量的名称,我们一般是全部大写,然后用下划线间隔
6.什么是时候需要使用常量:在程序中我们不希望某个值变化,则需要考虑使用常量,
比如:圆周率,税率....
常量与变量的区别---
1.常量前面没有美元符哈$;
2.常量用define()函数定义,而不是通过赋值语句;
3.常量可以不用理会变量的作用域而在任何地方定义和访问;
4.常量一旦定义就不能被重新定义或者取消定义;
5.常量的值是标量[基本数据类型](string,integer,float,boolean).
*/
//---快速人门案例---
//第一种方法:
/*	define("NB_FY",6.6);
	echo NB_FY;
//第二种方法:php5.3以上支持.
	const NB_A=6.666;
	echo '<br/>'.NB_A;*/
?>
