<!--<?php
	//接受来自jisuanqi.php(对应静态页面 浏览器发出)的数据
	//接受number1
	$num1=$_REQUEST['number1'];
	//接受number2
	$num2=$_REQUEST['number2'];
	//接受运算符
	$oper=$_REQUEST['oper'];
	//将结果进行赋值
	$a="未输入";
//	echo '接受到'.$num1.'||'.$num2.'||'.$oper;
	switch($oper){
		case "s1":
			$a=$num1+$num2;
//			echo '计算结果是'.$a;
			break;
		case "s2":
			$a=($num1+$num2)/2;
//			echo '计算结果是'.$a;
			break;
		case "s3":	//表达式1? 表达式2:表达式3;
			(($num1+$num2)/2)>$num2? 1:$a=0;
//			echo '计算结果是'.$a;
			break;
		case "s4":
			(($num1+$num2)/2)>$num2? 1:$a=0;
			$a=$num1-$a;
//			echo '计算结果是'.$a;
			break;
		case "s5":
			(($num1+$num2)/2)>$num2? 1:$a=0;
			$a=$num1-$a;
			$a=$num2*$a;
//			echo '计算结果是'.$a;
			break;
		case "s6":
			for($i=1;$i<=3;$i++){
				$num1+=$num2;
				$a=$num1;
		}			
//			echo '计算结果是'.$a;
			break;
		default:
			echo 'Sorry?Are you ok!!!';
	}
	echo '计算结果是'.$a;
?>-->
<?php
	$oper1=$_REQUEST['mouth'];
	$oper2=$_REQUEST['date'];
	$c="GTMD";
	switch($oper1){
		case "s1":
			$s=1;
			break;
		case "s2":
			$s=2;
			break;
		case "s3":
			$s=3;
			break;
		case "s4":
			$s=4;
			break;
		case "s5":
			$s=5;
			break;
		case "s6":
			$s=6;
			break;
		case "s7":
			$s=7;
			break;
		case "s8":
			$s=8;
			break;
		case "s9":
			$s=9;
			break;
		case "s10":
			$s=10;
			break;
		case "s11":
			$s=11;
			break;
		case "s12":
			$s=12;
			break;
		default:
			echo 'Sorry?Are you ok!!!';
	}
	switch($oper2){
		case "a1":
			$a=1;
			break;
		case "a2":
			$a=2;
			break;
		case "a3":
			$a=3;
			break;
		case "a4":
			$a=4;
			break;
		case "a5":
			$a=5;
			break;
		case "a6":
			$a=6;
			break;
		case "a7":
			$a=7;
			break;
		case "a8":
			$a=8;
			break;
		case "a9":
			$a=9;
			break;
		case "a10":
			$a=10;
			break;
		case "a11":
			$a=11;
			break;
		case "a12":
			$a=12;
			break;
		case "a13":
			$a=13;
			break;
		case "a14":
			$a=14;
			break;
		case "a15":
			$a=15;
			break;
		case "a16":
			$a=16;
			break;
		case "a17":
			$a=17;
			break;
		case "a18":
			$a=18;
			break;
		case "a19":
			$a=19;
			break;
		case "a20":
			$a=20;
			break;
		case "a21":
			$a=21;
			break;
		case "a22":
			$a=22;
			break;
		case "a23":
			$a=23;
			break;
		case "a24":
			$a=24;
			break;
		case "a25":
			$a=25;
			break;
		case "a26":
			$a=26;
			break;
		case "a27":
			$a=27;
			break;
		case "a28":
			$a=28;
			break;
		case "a29":
			$a=29;
			break;
		case "a30":
			$a=30;
			break;
		case "a31":
			$a=31;
			break;
		default:
			echo 'Sorry?Are you ok!!!';
	}
	if($s==1 && $a>=20){ 
			$c='水瓶座';
		}elseif($s==2 && $a<=18){
			$c='水瓶座';
		}
	if($s==2 && $a>=19){ 
			$c='双鱼座';
		}elseif($s==3 && $a<=20){
			$c='双鱼座';
		}
	if($s==3 && $a>=21){ 
			$c='白羊座';
		}elseif($s==4 && $a<=19){
			$c='白羊座';
		}
	if($s==4 && $a>=20){ 
			$c='金牛座';
		}elseif($s==5 && $a<=20){
			$c='金牛座';
		}
	if($s==5 && $a>=21){ 
			$c='双子座';
		}elseif($s==6 && $a<=20){
			$c='双子座';
		}
	if($s==6 && $a>=21){ 
			$c='巨蟹座';
		}elseif($s==7 && $a<=22){
			$c='巨蟹座';
		}
	if($s==7 && $a>=23){ 
			$c='狮子座';
		}elseif($s==8 && $a<=22){
			$c='狮子座';
		}
	if($s==8 && $a>=23){ 
			$c='处女座';
		}elseif($s==9 && $a<=22){
			$c='处女座';
		}
	if($s==9 && $a>=23){ 
			$c='天秤座';
		}elseif($s==10 && $a<=22){
			$c='天秤座';
		}
	if($s==10 && $a>=23){ 
			$c='天蝎座';
		}elseif($s==11 && $a<=21){
			$c='天蝎座';
		}
	if($s==11 && $a>=22){ 
			$c='射手座';
		}elseif($s==12 && $a<=21){
			$c='射手座';
		}
	if($s==12 && $a>=22){ 
			$c='摩羯座';
		}elseif($s==1 && $a<=19){
			$c='摩羯座';
		}
	echo '计算结果是'.$c;
?>
<br/><a href="http://www.mrfang.com/startok.php">返回计算页面</a>