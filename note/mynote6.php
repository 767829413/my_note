<?php
/*-------------php面向对象编程--------------------*/
//----提出问题!!张老太养猫问题!!!!!!!!!!!!!----导引-----
//----------------用现有知识完成案例!!!!!!!!!!!!!-----------
	//--第一只猫--
/*	$cat1_name="小白";
	$cat1_age=3;
	$cat1_color="white";
	//--第二只猫--
	$cat2_name="小花";
	$cat2_age=100;
	$cat2_color="gray";*/
//---对以上案例我们能不能把属于同一类变量统一管理起来呢??-------->>>>对此,引入了新的数据类型-----(对象)----!!!!!!!!
//---------快速体验案例-----------------
/*	class Cat{	//这是一个类(复合数据类型 /本质和int等没有区别)!!!!!!!!!
		public $name;
		public $color;
		public $age;
	}
		//创建一致猫
		$cat1=new Cat();	//$cat1 对象	(通过一个cat类创建了一个cat对象)
			$cat1->name="小白";
			$cat1->age=3;
			$cat1->color="white";
		$cat2=new Cat();
			$cat2->name="小花";
			$cat2->age=100;
			$cat2->color="gray";


	//--如果我们要找到一只猫,只要找到$cat1,那么改变量所有相关属性都通通找到了!!
	$findCatName="小花";
	if($cat2->name==$findCatName){
		echo $cat2->name."||".$cat2->color."||".$cat2->age;*/
//	}
	
//-------1.创建一个对象==2.实例化一个对象==3.把类实例化----


//------------定义一个人类(模板)---------------------
/*	class Person{
		public $height;
		public $age;
		public $weight;
		//.......
	}
	//实例化的一种--------------
	$person1=new Person();
		$person1->height=180;
		$person1->weight=180;
		$person1->age=18;
	$person2=new Person();
		$person2->height=175;
		$person2->weight=65;
		$person2->age=23;*/
/*******************类与对象的联系*************************/
//1.类是抽象的,概念的,代表一类事物,例如:猫类,人类.植物类等等;
//2.对象是实际的,具体的,所代表的也是一个具体的事物;
//3.类是对象的模板,而对象是类的一个个体实例;

/**-------------------------------------------------------**/
//--**类-------------成员属性****************
/*		class Person{
			//成员属性(可以是基本类型(int/float/string)也可以是复合类型(类,数组))
		public $height;
		public $age;
		public $weight;
		//.......
	}
		$person1=new Person();
		$person1->height=180;
		$person1->weight=180;
		$person1->age=18;
	$person2=new Person();
		$person2->height=175;
		$person2->weight=65;
		$person2->age=23;*/

//--成员属性的说明:
/*
成员属性是从某个事物提取出来的,它可以是基本数据类型(整数,小数,布尔,字符串),也可以是复合数据类型(数组,对象)
*/
//--**对象----------如何创建对象****************

//	$对象名=new 类名();
//	$对象名=new 类名;

//--**对象----------如何访问对象属性****************

//	$对象名->属性名;
/*	class Dog{				//创建一个---类
		public $name;		//public(关键字)后面详细讲解
		public $age;
	}	
	//创建一个对象
	$dog1= new Dog;
		$dog1->name="旺财";//给某个对象赋值
	$dog2= new Dog();
	//访问某个对象的某个属性 $对象名->属性名;在php中$dog1.name不可以访问,这是java的
	echo $dog1->name;*/
//-------上述演示怎样访问一个成员属性--------------
//文件名取名规范!!!!!!
/*如果一个文件,专门用于定义类,则命名规范应当这样:
类名.class.php(没有对类的操作)*/
/*	class Person{
		public $name;
		public $age;
	}
	$a=new Person();
	$a->name="小明";
	$a->age=20;
	//把$a变量(对象)赋给$b
//	$b=$a;
	$b=20;
	$a=$b;
//	$b->age=890;
//	echo $a->name."<br/>";
//	echo $b->name."<br/>";
//	echo $a->age."<br/>";
//	echo $b->age."<br/>";*/

//---分析对象在内存中存在的形式-----------------
/*	$a=78;
	//$b=$a;
	$b= &$a;
	$b=$b+8;
	echo $b."\n".$a;*/
//----------再次案例说明----------
/*	class Person{
		public $age;
		public $name;
	}
	$p1=new Person();
	$p1->age=890;
	$p1->name="韩顺平";	
	$a="abvd";	//基本数据类型
	$arr=array(1,90,900);	//传值
	//函数接受对象的时候,传递的是地址(!!!!!!!)
	function test($x,$y,$z){
		$x->age=920;
		$y="好的";
		$z[0]=88;
		test1($x);		//整个函数调用完毕还是哈哈
	}
	function test1($x){
		$x->age=666;

	}

	test($p1,$a,$arr);
	echo "age=".$p1->age."<br/>";
	echo '$a='.$a."<br/>";
	echo '$arr[0]='.$arr[0]."<br/>";*/
//--如果给一个对象传递一个对象,实际上传递的是一个地址!!!!!!!!--
//如果给函数传递的是基本数据类型(整数,小数,字符串,布尔),究竟传递的是什么??
/*	$a=90;
	$b=90.8;
	$c=true;
	$d="hello";

	function test(&$a,&$b,&$c,&$d){
		$a=78;
		$b=89.6;
		$c=false;
		$d="beijing";
	}
	test($a,$b,$c,$d);
	echo $a.'||'.$b.'||'."&nbsp;".$c."&nbsp;".'||'.$d;*/
//********>>>>---------------------------------
//-------在默认的情况下传递的是值,若是希望传入地址则 function 函数名(&$变量名)---------------------
//在php中,给一个函数传递的是数组,则默认情况下是传递值(相当于拷贝了新的数组),如果希望传入地址则应当同上基本数据类型,function 函数名(&$变量名)----
//	$a1=array(1,3,900);
//	$a2=array(56,90,100);

//	$arr=array($a1,$a2);
//	$a1=array(1,3,900);
//	$a2=array(56,90,100);
//	var_dump($arr);
//	foreach($arr as $key=>$val){
//		echo $key."=>".$val;
//	}
//先创建一个变量给数组再在数组外给变量赋值是不对的!!!!!!!!!!!!
/*	$arr=array($a);
	$a=2;
	echo $arr[0];*/
//--**类-------------成员方法(函数)****************
//--------函数与成员方法的联系:当我们把一个函数写到某一个类中,则该函数可以称为成员方法.
/*	class Person{
		public $age;
		public $name;
		public function speak(){
			echo "我是一个好人".'<br/>';
		}
		public function jisuan($a=1000){
			$temp=0;
			for($i=1;$i<=$a;$i++){
				$temp+=$i;
			}
			return $temp;	//return究竟到什么地方去? 谁调用就返回给谁
		}
		public function jisuan1($n){
			$temp=0;
			for($i=1;$i<=$n;$i++){
				$temp+=$i;
			}
			return $temp;
		} 
		public function add($a,$b){
			return $a+$b;
		}
		public function findMax($arr){
			$max=$arr[0];
			$down=0;
			for($i=1;$i<count($arr);$i++){
				if($max<$arr[$i]){
					$max=$arr[$i];
					$down=$i;
				}
			}
			$max=$arr[$down];
			return $max;
		}
		public function
	}
//------如何使用成员方法(函数)--------------
//----调用成员方法与调用普通函数的机制仍然不变
	$p1= new Person;	//1.创建一个对象
	$p1->speak();		//通过对象访问或调用成员方法
	$arr=array(0,100,2);
	echo '计算结果是='.$p1->jisuan().'<br/>';
	echo '计算结果是='.$p1->jisuan1(100000).'<br/>';
	echo '计算结果是='.$p1->add(1,1).'<br/>';
	echo "最大的数是=".$p1->findMax($arr)."<br/>";*/
/******************************************************
	访问修饰符号	function 函数名(参数列表){
		//函数体;
		//return 语句
	}
******************************************************/ 
//--------------成员方法的细节问题----------------------------
//我们在实际开发中,通常是这样来使用类的:
/************************************************************
OOP------------oriented object programming 
Person.class.php


Exercise01.php
************************************************************/
/*	require_once('Person.class.php');	//调用Person.class.php中类
	$p1= new Person;	//1.创建一个对象
	$p1->speak();		//通过对象访问或调用成员方法
	$arr=array(0,100,2);
	echo '计算结果是='.$p1->jisuan().'<br/>';
	echo '计算结果是='.$p1->jisuan1(100000).'<br/>';
	echo '计算结果是='.$p1->add(1,1).'<br/>';
	echo "最大的数是=".$p1->findMax($arr)."<br/>";
	$n=$_REQUEST['layer'];
	$p1->printImg($n);*/


/****************************************************************
1.成员方法的参数列表可以是多个,而且数据类型可以是任意类型;
2.方法可以没有返回值;*/
//--先设计类(|1.定属性2.定成员方法|方法与属性要根据需求设计),再根据类创建方法---------
//$this->类变量,可以再方法中直接使用,而不会造成使用类变量再函数中被认为是一个新变量
/****************************************************************/
/*----------------构造方法--------------------------------------*/
/*------再创建对象的时候就完成属性的初始化---------------------
---定义一个类的时候同时定义一个构造方法--------------------*/
//--------------快速入门案例----------------------
/*	class Person{
		public $name;
		public $age;
		public function __construct(){	//构造方法php5以上
			echo "我是构造方法*******php5";
		}
//		public function Person(){	//构造方法php4
//			echo "我是构造方法-------php4";
//		}
	}

	$p1=new Person();*/
/*
1.构造方法没有返回值
2.自动被调用
3.在php5中,一个类可以有两种形式的构造方法function __construct()和function 类名(),当两个同时存在时,优先调用function __construct()----
请优先使用构造方法function __construct()
4.一个类只有一个构造方法!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
*/
/*		class Person{
		public $name;
		public $age;
		public function __construct($a,$b){	//构造方法php5以上
			$this->name=$a;
			$this->age=$b;

			echo "我是构造方法*******php5"."<br/>";
		}
	}

	$p1=new Person("牛鼻",99);
	echo $p1->name."||||".$p1->age;*/
//-------------什么是this----------------------------
//在创建对象时,每一个对象都有的一个在对区中的地址,this就是把不同对象在堆区中的地址传递给相应的对象
//<1>.--this本质可以理解为对象的地址;
//<2>.--哪个对象使用到this,就是哪个对象的地址;
//<3>.--$this不能在类外部使用;
//---------$this->属性名:
/***********案例**************************/
/*	class Person{
		public $name;
		public $age;
		public function __construct($a,$b){
			$this->name=$a;
			$this->age=$b;
		}
		public function showInf(){
			echo "<br/>".'name='.$this->name."<br/>".'age='.$this->age;
		}
	}
//	$p3=new Preson();	//创建了自定义构造方法后,这样创建对象会报致命错误!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	$p1=new Person("小傻逼",6666);
	$p1->showInf();
//	echo $this->name;	//!!!!!!不可以这样,会报致命错误!!!!!!!!!!!
	$p2=new Person("孙悟空",99999);
	$p2->showInf();*/
/*************************************************************
!!!!!!!!不能在类定义的外部使用,只能在类定义的方法中使用!!!!!!
*************************************************************/
/************************************************************
-------构造方法的注意事项-------------------------------------------
1.如果一个类没有自定义构造函数,就会自动创建一个默认构造函数;
2.一旦自定义了一个构造函数,默认的构造函数就会被覆盖,这时在创建对象的时候就要使用自己自定义的构造函数!!!!;
3.一个类只能有一个构造函数(不可以重载);
************************************************************/
/************************************************************
-----------类的构造方法小结------------------------------
<1>.php4中构造方法名和类名相同,php5中构造方法是function __construct()建议使用php5中构造方法;
<2>.构造方法没有返回值;
<3>.构造方法的主要作用是完成对象的初始化,并不是创建对象本身;
<4>.在创建对象后,系统自动调用该类的构造方法;
<5>.一个类有且只有一个构造方法,在php5中虽然php4的构造方法也能使用和共存,但是实际上只是能使用一个,且优先使用php5的构造方法;
<6>.如果没有给类自定义构造方法,则该类使用系统默认的构造方法;
<7>.如果给类自定义了构造方法,则该类的默认构造方法会被覆盖;
<8>.构造方法的默认访问修饰符是public;
*************************************************************/
/*------------------------------------------------------------
**************************************************************
//////////////////////////////////////////////////////////////
*************************************************************/


/*******************析构方法*********************************/
//--析构方法主要作用:释放资源(比如释放数据库的链接,或者是图片资源...销毁某个对象)
//--------快速入门案例-----------------------

/*	class Person{
		public $name;
		public $age;
	//	public $conn;
		

		//-----构造函数(方法)演示-----
		public function __construct($name,$age){
			$this->name=$name;
			$this->age=$age;
			//打开一个链接数据库的资源
		}
		//-----析构(方法)函数演示------
		function __destruct(){	
			echo $this->name."销毁资源"."<br/>";
		}

	}
	
	$p1= new Person("牛鼻",24);
	$p1=null;
	$p4=$p1;	//
//	$p1=null;
	$p2= new Person("煞笔",20);
	$p3= new Person("哈哈",26);*/
	
//-------运行上述代码可以得出:
//1.析构函数(方法)会自动被调用;
//2.析构函数(方法)主要用于销毁资源;
//3.析构方法调用顺序是先创建的对象后被销毁(栈的先入后出问题);
//4.----析构方法什么时候被调用:
/*		<1>.当程序(进程结束)退出时
		<2>.当一个对象成为垃圾对象的时候,该对象的析构方法(函数)也会被
		<3>.所谓垃圾对象,就是指没有任何变量再引用它
		<4>.一旦一个对象成为垃圾对象,析构方法就会立即调用
		
------垃圾对象:在php中当一个对象没有任何引用指向它的时候,就会成为一个垃圾对象,php将会启用垃圾回收器将该对象销毁,从而回收该对象占用的内存
*/
/***************************************************************
----析构方法小结-----------
1.php5才加入的析构方法function __destruct();
2.析构方法没有返回值,没有参数列表;
3.主要作用是用来释放资源的操作,不会销毁对象本身(对象本身是由系统销毁的);
4.再销毁对象前,系统会调用该类的析构方法;
5.一个类最多只能有一个析构方法,不创建析构方法是不会被调用的;
***************************************************************/
/*------------------------------------------------------------------*/
/*------------------------------------------------------------------*/



/*****************静态变量(类变量)和静态方法(类方法)*****************







------------------------------静态变量------------------------------
***提出问题:有一群小孩堆雪人,不时有新的小孩加入,请问如何直到现在有多少小孩再玩?运用面向过程的思想去编写程序,解决问题.

1.使用全局变量(不是面向对象)
---什么是全局变量?
---在程序中都可以使用的变量称为全局变量*/
	
/*	global $a;	//定义了一个全局变量
	$a=9;	//给全局变量$a赋值
	function test1(){
		global $a;
		$a=90;	//
	}
	test1();	//调用了函数
	echo $a;*/
//解决问题:
/*	global $global_a;	//全局变量定义和赋值要分开,不然会报错
	$global_a=0;
	class Child{
		public $name;
		function __construct($name){
			$this->name=$name;
		}
		public function join_Game(){
			//声明一下使用全局变量
			global $global_a;
			$global_a+=1;
			echo $this->name."加入堆雪人游戏<br/>";

		}
	}
	//创建加入游戏的小孩
	$child1=new Child("李明");
	echo $child1->join_Game();
	$child2=new Child("韩梅梅");
	echo $child2->join_Game();
	$child3=new Child("马冬梅");
	echo $child3->join_Game();
	$child4=new Child("王宝强");
	echo $child4->join_Game();
	$child5=new Child("黄渤");
	echo $child5->join_Game();
	echo "当前堆雪人游戏共有小孩=".$global_a."位<br/>";*/

	
//2.使用静态变量
//----------------------静态变量基本用法------------------
//-------------------------案例解析-----------------------
/*	class Child{
		public static $a=0;	//这里定义并初始化一个静态变量 $a
		public $name;
		function __construct($name){
			$this->name=$name;
		}
		public function join_Game(){
			self::$a+=1;	//-Child::$a------------self::$a 这句话表示:引用(使用)静态变量 $a----
			echo $this->name."加入堆雪人游戏<br/>";

		}
	}
	$child1=new Child("李明");
	echo $child1->join_Game();
	$child2=new Child("韩梅梅");
	echo $child2->join_Game();
	$child3=new Child("马冬梅");
	echo $child3->join_Game();
	$child4=new Child("王宝强");
	echo $child4->join_Game();
	$child5=new Child("黄渤");
	echo $child5->join_Game();
	echo "当前堆雪人游戏共有小孩=".Child::$a."位<br/>";*/

/****************************************************************
------------------------------静态变量定义:--------------------------是所在类的所有对象共享的变量,任何一个该类的对象区访问它时,取得的都是相同的值,同样任何一个该类的对象区修改它时,修改的也是同一个变量!!!!!!!!!!!!!!!!!



-------------------------静态变量的基本用法-----------------------
<1>.在类中定义静态变量,基本语法:
	[访问修饰符] static $静态变量名;
<2>.如何访问静态变量:
	{a}:在类中访问 有两种方法 self::$静态变量名 或者 类名::$静态变量
	{b}:在类外访问	有一种方法	类名::$静态变量名
<3>.静态变量存在的方式,将地址存放在对象所对应的堆区空间,本身存在静态(全局)区;
****************************************************************/
/*	class Person{
		public static $a=90;
	}
	echo Person::$a;*/

/*	class Person{
		public static $a=90;
		public function __construct(){
			$this->a=45;
		}
	}
	echo Person::$a;*/

/*	class Person{
		public static $a=900;
		public function __construct(){
			//$this->a=45;
			Person::$a=15;
		}
	}
	$p1=new Person();
	echo Person::$a;*/
//	echo $p1->a;	//这样访问会被报错(java可以)
//	echo self::$a;	//访问会出错

/************************静态方法************************************
----------定义:静态方法也叫类方法,静态方法是属于所有对象实例的,其形式如下:

	访问修饰符 static 方法名(){	}

--注意:静态方法(类方法)中不能不能访问非静态变量(类变量).

在类外部:	类名::静态方法(类方法)名 或者	对象名->静态方法(类方法)名
在类内部:	self::静态方法(类方法)名 或者	类名::静态方法(类方法)名

需求:当我们需要去操作静态变量的时候,我们可以考虑静态方法

----案例:统计所有学生交的学费:
*********************************************************************/
/*
	class StudyMoney{
		public $name;
		public static $all=0;
		//创建构造函数
		public function __construct($name){
			$this->name=$name;
		}
		//入学
		public static function enterSchool($money){
			
			self::$all+=$money;

		}

		public static function jisuan(){	//静态方法不能调用非静态变量(成员属性)
			echo $this->name;
		//	echo StudyMoney::$all;
		}

		//获取总学费
		public static function getFee(){
			return StudyMoney::$all;
		}
	}
	$s1=new StudyMoney("张三");
	$s1->enterSchool(1200);	//通过对象名调用静态方法;
//	StudyMoney::enterSchool($money);	//通过类名调用静态方法;
	$s2=new StudyMoney("李四");
	$s2->enterSchool(3200);

	echo	"当前的总学费为".StudyMoney::getFee();

*/
//	StudyMoney::jisuan();
//	$s2->jisuan();	//


/*****************************************************************
----在我们编程过程中,我们往往使用静态方法来操作静态变量.
为什么静态方法不能操作非静态变量;
解释:因为静态方法是属于整个类的,而成员变量(非静态变量)是属于单个对象的
,在静态方法调用非静态变量时,就无法区分该变量的所有者是谁

-------------------------------------------------------------------
------------------------静态方法的特点---------------------------
1.静态方法操作静态变量;
2.静态方法不能操作非静态变量;
3.普通成员方法既可以操作非静态变量,也可以操作静态变量;
-------------------------------------------------------------------
--------------------------静态变量小结----------------------------
-------当你的变量是需要所有变量共享的时候,请选择静态变量---------
------------------静态变量和普通变量的区别----------------------
1.加上static称为类变量或静态变量,否则称为实例变量;
2.类变量是与类相关的,公共的属性;
3.实例变量是属于,每个对象个体的属性;
4.类变量可以通过 类名::类变量名 直接访问(内部还可以用self::类变量名)
********************************************************************
--------------------------静态变量小结----------------------------
-------希望一个方法只操作静态变量就选择静态方法------------------
1.静态方法属于与类相关的,公共的;
2.实例方法属于每个对象个体的方法;
3.静态方法可以通过 类名::静态方法名() 或 对象实例->静态方法名();
*****************************************************************/



/************************面向对象的三大特征**************************/
//----------------1.封装性---2.继承性---3.多态性---------------------
/********************************************************************/

//---------------------------抽象------------------------------------
/*******************************************************************
---简单理解-------------------------------------
我们在前面去定义一个类的时候,实际上就是把一类事物的共有的属性和行为提取出来,形成一个物理模型(模版),这种研究问题的方法称之为__抽象;
----------------------------------------------------------------------	
	


************例如银行账号具有的共性拿出来研究**********************
	class Account{
		public $blance;		//有余额
		public $no;			//有账户
		public function input(){	//能存钱
		}
		public function out(){		//能取钱
		}
	}

********************************************************************/


/****************************封装************************************
-----封装就是把抽象出来的数据和对数据的操作封装在一起,数据被保护在内部,程序的其它部分只有通过授权的操作(成员方法)才能对数据进行操作.




*********************************************************************/
//入门案例:实现人的工资与年龄是隐私的:
/*
	class Person{
		public $name;
		private $age;
		private $salary;
		
		function __construct($name,$age,$salary){
			$this->name=$name;
			$this->age=$age;
			$this->salary=$salary;
		}
	}

	//创建一个人对象
	$people=new Person("唐僧",22,9000);

	//看看唐僧的薪水

	echo $people->name;
	echo $people->age;
*/
/**************封装___访问控制修饰符********************************







---php中有三种访问控制修饰符来控制___方法 和 ___变量(属性)的访问权限

	public:		表示全局,类内部,外部和子类均可以访问;
	protected:	表示受保护的,只有本类内部或子类中可以访问;
	private:	表示私有的,只有本类内部可以使用;

1.	上面三个访问修饰符可以对 属性 和 方法 进行修饰; 
2.	一个方法没有访问修饰符,默认下是的访问修饰符是public;
3.	成员属性(变量)一定要指定访问修饰符  (var在php4中使用,和public类似,不推荐使用)
4.	php中,成员方法相互调用需要在调用的成员函数前加$this->
5.采用魔术方法访问protected 或 private 修饰的变量
	__set();	__get();---------不推荐使用
6.protected 或 private 修饰的变量一般采用public function {set方法作用名}()与public function {get方法作用名}()方法进行设置与获得(显示);

7.------------不推荐使用__set();	__get();---------不推荐使用---;

8.可以直接写一个方法来操作与获取protected 或 private 修饰的变量;




********************************************************************/
//-------------举例分别说明--------------------------------

/*	class Person{
		public $name;
		protected $age;
		private $salary;
		//下面的函数就证明了在本类中可以使用 public protected 和private 修饰的变量
		function __construct($name,$age,$salary){
			$this->name=$name;
			$this->age=$age;
			$this->salary=$salary;
		}
		//我们可以通过方法来访问protected 或 private 修饰的变量
//		function showInfo($user,$key){		//可以访问到就被称为使用
		protected function showInfo(){
			echo "这是名字".$this->name."<br/>";
			echo "这是年龄".$this->age."<br/>";
			echo "这是薪水".$this->salary."<br/>";
//			if($user=="我是你爸爸" && $key==123456){
//				return '唐僧薪水是'.$this->salary;
//			}else{
//				return "sorry,所在用户组没有权限";
//			}
		}
		//可以通过创造一个函数修改protected 或 private 修饰的变量
		function modifyInfo($age){
			if($age>0 && $age<200){
				$this->age=$age;
				return "当前年龄为".$this->age;
			}else{
				return "年龄范围不对";
			}
		}
		function test1(){
			$this->test2();
		}
		protected function test2(){
			echo "test891";			
		}
	}

	//创建一个人对象
	$people=new Person("唐僧",22,9000);
	

//	echo $people->name;	//全局可访问
//	echo $people->age;	//不可访问
//	echo $people->salary;	//不可访问
//	echo $people->showInfo("我是你爸爸",123456);
//	echo $people->showInfo();
//	echo $people->modifyInfo(100);
	$people->test1();*/


	
//--我们现在就想访问protected 变量 或 private 变量
//通常是把一个函数做成公开的(提供一个public function 函数名()),来显示rotected 变量 或 private 变量

//--封装性与三种访问修饰符的状态密切相关,结合起来才体现出封装性
//!!三种访问修饰符不但可以作用于成员属性也可以作用于成员方法!!
/******魔术方法:__set()与__get()****************/
/*
	class A{
		private $n1;
		private $n2;
		private $n3;

		public function setN1($n1){
			$this->n1=$n1;
		}
		public function getN1(){
			return $this->n1;
		}
		//使用__set 方法来管理所有的属性
		public function __set($pro_name,$pro_value){
			$this->$pro_name=$pro_value;
		}
		//使用__get 方法来获取所有的属性值
		public function __get($pro_name){
			if(isset($pro_name)){
				return $this->$pro_name;
			}else{
				return null;
			}
		}
	}
	$a=new A();
//	$a->setN1(10);
//	echo $a->getN1();
	$a->n1="hello";
	echo $a->n1;
	$a->n2="hi";
	echo "<br/>".$a->n2;*/

//魔术方法__set与__get的缺点:------!!!!!不推荐使用!!!!!!!!--------
//1.将需要protected或private的成员变量,转换成了类似的公开变量
//2.一个__get设置所有protected或private修饰的变量,无法体现所需的变化


/***************************继承************************************

为什么需要继承(继承的必要性)

继承可以解决代码服用问题,当多个类存在相同属性(变量)和方法时,可以从这些类中抽象出一个父类,在父类中定义这些相同属性(变量)和方法,所有的子类就不需要重新定义了.




********************************************************************/

//------应用场景 开发一套学生管理系统(Pupil,Graduate)
/*	
	class Pupil{
		public $name;
		protected $age;
		protected $grade;

		public function showInfo(){
			echo $this->name."-and-".$this->age;
		}
		public function testing(){
			echo "小学生考试..ing";
		}
	}
	
	class Graduate{
		public $name;
		protected $age;
		protected $grade;

		public function showInfo(){
			echo $this->name."-and-".$this->age;
		}
		public function testing(){
			echo "研究生考试..ing";
		}
	}
*/
//---从上面的代码可以看出,代码的复用性不高,同时也会让管理代码的成本增高
//----------解决之道(继承):

//--------------快速入门案例-------用继承改写上述代码---------------
/*
	//这是父类
	class Student{
		public $name;
		protected $age;
		protected $grade;
		protected $address;
		
		
		public function showInfo(){
			echo $this->name."-and-".'<br/>';
		}
	}
	//子类1
	class Pupil extends Student{
		public function testing(){
			echo "小学生考试..ing<br/>";
		}
	}
	//子类2
	class Graduate extends Student{
		public function testing(){
			echo "研究生考试..ing<br/>";
		}
	}

	//创建一个小学生
	$stu1=new Pupil();
	$stu1->name="小明";
	$stu1->testing();
	$stu1->showInfo();
	//创建一个研究生
	$stu2=new Graduate();
	$stu2->name="大明";
	$stu2->testing();
	$stu2->showInfo();

*/

/*******************************************************************
---从上面的代码我们可以看出:所谓继承就是一个子类通过 extends 父类
把父类的(public/protected)属性和(public/protected)方法继承下来,但是不能继承父类的private 属性和方法.

继承的语法:

	class 类名 extends 父类名{
		//在写子类本身所需要的属性和方法
	}


*******************************************************************/







/************************继承的细节**********************************


1.子类只能继承父类的由public 或 protected 修饰属性 或方法,不能继承父类中private修饰的属性或方法;

2.一个类只能继承一个父类(直接继承),如果希望继承多个类的属性和方法,则使用多层继承;

3.当我们创建子类对象的时候,默认情况下不会自动调用父类的构造方法;

4.如果在子类中需要访问其父类的方法(构造方法/成员方法等)--方法的访问修饰符必须是public或protected,则可以使用 父类名::方法名(或者parent(parent必须小写)::方法名)来完成;
	php4.1-----类名::方法名();	4.2php----parent::方法名()

5.如果子类(派生类)中方法和父类(或基类)方法相同(public与protected所修饰的),我们称为方法重写/方法覆盖;--------[多态中详细解说]

********************************************************************/

/*
	class A{
		public $a;
		protected $b;
		private	$c;

		public function __construct(){
			$this->a=100;
			$this->b="CTM";
			$this->c=250;
		}
		public function test1(){
			echo "test1";
		}
		protected function test2(){
			echo "test2";
		}
		private function test3(){
			echo "test3";
		}
	}

	class SubClass extends A{
		public function Get(){
			echo $this->b;
			echo $this->c;
		}
		public function Get_test(){
			$this->test2();
			$this->test3();
		}
	}
	$sub1=new SubClass();
	echo $sub1->a;	//public和protected修饰的属性可以从父类继承下来
//	$sub1->Get();	//private修饰的属性,子类不能从父类继承下来

	$sub1->test1();		//public和protected修饰的方法可以从父类继承下来
//	$sub1->Get_test();	//private修饰的方法,子类不能从父类继承下来
*/
/*******************************************************************
*******************************************************************/
//---php中是子类只能继承一个父类(直接继承),若是要子类继承多个父类可以用以下的方法捣腾:
//------多层继承---------
/*
	class A{
		public $a=100;
	}
	class B extends A{
		public $b="hello";
	}
	class C extends B{
	}

	$c1=new C();
	echo $c1->a."|||||".$c1->b;	//同时继承了A与B的属性 
*/

//----创建子类对象的时候,默认情况下不会自动调用父类的构造方法---
/* 
	class A{
		public function __construct($n1){
			$this->n1=$n1;
			echo "A构造方法";
		}
	}
	class B extends A{
		function __construct(){
			echo "B构造方法";
//			A::__construct(400);
			parent::__construct(100);
			//显式的调用父类的方法,利用父类的构造方法,初始化父类的元素
		}
	}

	$b=new B();

*/



//
/********************方法重载(overload)**********************/
/************************************************************
概念:函数名一样,通过函数的参数个数,或者参数类型不同,来达到调用同一个函数名可以区分不同的函数

************************************************************/
/*
	class A{
		public function test1($a){
			echo "接受一个参数";
			echo "<br/>接受到参数是";
			var_dump($a);
		}
		public function test2($a){
			echo "<br/>接受两个参数";
		}
		//这里提供一个__call,	__call 当一个对象调用某个方法,而该方法不存在时,则系统会自动调用__call;
		function __call($method,$p){
			var_dump($p);
			if($method=="test"){
				if(count($p)==1){
					$this->test1($p);
				}elseif(count($p)==2){
					$this->test2($p);
				}
			}
		}
	}

	
	$a=new A();
	$a->test(1);
	$a->test(1,2);
*/
//上面的这中用法是不对的,但是概念是对的,php5方法重载的实现与其它语言不同
//php5中如何使用魔术函数来实现方法重载
/***********************************************************
1.php5 默认情况下不直接支持方法重载;
2.php5 中可以用__call魔术方法,模拟一个方法重载的效果
3.
************************************************************/
/************************************************************
魔术变量:__LINE__	__FILE__	__DIR__		__CLASS__	
	__FUNCTION__

************************************************************/
/*

echo __LINE__."<br/>";
echo __FILE__."<br/>";
echo __DIR__."<br/>";
echo __CLASS__."<br/>";
	class A{
		function __construct(){
			echo "类名是:".__CLASS__."<br/>";
			echo "函数(方法)名是:".__FUNCTION__."<br/>";
		}
	}
	$a=new A();
*/



/*******************方法的重写/方法的覆盖--(override)*******/

//简单定义:方法重写就是说当子类的一个方法与其父类的某个方法的名称,参数个数一样,那么我们就说子类的这个方法重写了父类的那个方法.

//1.问题:当一个父类知道所有子类都具备的一个方法,但是父类此时无法确定该方法究竟如何写,可以让子类区覆盖这个方法:
//-----用法如下----------
/*
	class Animal{
		public $name;
		protected $price;
		private function cry($val){
			echo "不知道animal怎么叫";
		}
	}
	class Dog extends Animal{
		//覆盖(逻辑上覆盖)
		public function cry(){	//在实现覆盖时,访问修饰符可以不一样,但是有一个前提,必须满足:子类的访问范围大于或等于父类的访问范围;
			echo "小狗汪汪叫...";
//			parent::cry($name);
		}
	} 
	class Pig extends Animal{ 
		//覆盖...
		function cry(){
			echo "小猪哼哼叫....";
		}
	}
	//创建一只狗
	$dog1=new Dog();
	$dog1->cry();
	//创建一只猪
//	$pig1=new Pig();
//	$pig1->cry();

*/
/********(override)方法重写/方法覆盖的细节讨论***************
1.要实现重写,要求 子类的方法名一样(php5.6.32),(php5.6.32)以下版本必须方法名参数列表个数一致;不要求参数名称一样.

2.如果子类需要访问父类的某个方法(public或protected修饰),则可以使用parent::方法名 或 父类名::方法名

3.子类的访问权限要大于等于 父类的访问权限(青出于蓝胜于蓝)

************************************************************/





/************************************************************

多态体现在当子类没有覆盖父类的方法,则$dog1->cry() 调用的是父类的方法,当子类覆盖了父类的方法,则调用自己的cry方法


************************************************************/


/**********抽象类***接口***final***类常量*******************/

/*--------------------抽象类-----------------------------*/

//--为什么要涉及抽象类这个技术----------------------------
/*
1.在实际开发中,我们可能有这样一种类,这个类它是其它类的父类,但是它本身不需要实例化.主要用途是用于让子类来继承它,这样可以达到代码复用,同时利于项目设计者(架构师)来设计类.
*/
/***********************************************************
基本用法:

	abstract class 类名{
		abstract 访问修饰符 function 函数名(参数列表);
	}


***********************************************************/
//---------------------快速入门案例------------------------
/*	
	abstract class Animal{
//	class Animal{	//一旦一个类包含了abstract方法,则必须声明为abstract抽象类,否则会报fatal error.
		public $name="asd";
		protected $age;
		//这个方法没有方法体,主要是为了让继承类去实现.
		abstract public function cry();
		public function get_Name(){
			return $this->name;
		}
	}
	class Cat extends Animal{
		public function cry(){
			echo '喵喵..';
		}
	}
	//创建一个子类实例
	$cat1=new Cat();
	$cat1->cry();
	echo $cat1->get_Name();

*/
/******************使用的注意事项***************************
1.基本语法:
	abstract class 类名{
		访问符 $属性名(变量);		
		abstract 访问符 function 方法名(参数列表);
	}
2.用abstract 关键字来修饰一个类时,则该类是抽象类,绝对不要实例化;

3.用abstract 关键字来修饰一个方法时,该方法就是抽象方法,同时该方法就不能实现了(抽象方法不能实现即不能有方法体);

3.抽象类可以没有抽象方法;同时还可以有实现了的方法见上述案例

4.如果一个类中只要有抽象(abstract)方法,则必须声明为(abstract)抽象类;
	abstract class A{
		abstract function test();
	}
	echo "hello";

5.如果某一个类继承了某个抽象类.则要求该继承类实现全部从抽象类
继承的抽象方法,或者该继承类声明自己也是一个抽象类,案例如下:
	abstract class A{
		abstract function test();
		abstract function test1();
	}
	//B类要么声明自己是抽象类(abstract) 或者 实现从A类继承的抽象方法
//	abstract class B extends A{
	class B extends A{
		function test(){
			echo "我实现了A::test()方法";
		}
		function test1(){
			echo "我实现了A::test1()方法";
		}
	}
	echo "123";
************************************************************/

	


/********************接口***********************************/
//---为什么需要接口----------------------------------------
/*
概念:	接口就是给出一些没有实现的方法,封装到一起,到某个类要使用的时候,再根据具体情况把这些方法写出来.
*/
//----------------快速入门案例------------------------------
/******************************************
类与类的关系一般是继承,类与接口的关系一般是实现******************************************/
/*
	//使用程序模拟现实情况
	//定义一些规范(方法或属性)
	interface iUsb{
		public function start();
		public function stop();
	}

	//编写手机类,让它去实现接口
	//1.当一个类实现了 某个接口,则要求该类实现这个接口的所有方法;
	class Phone implements iUsb{
		public function start(){
			echo "手机开始工作了<br/>";
		}
		public function stop(){
			echo "手机停止工作了<br/>";
		}
	}
	class Camera implements iUsb{
		public function start(){
			echo "相机开始工作了<br/>";
		}
		public function stop(){
			echo "相机停止工作了<br/>";
		}
	}
	$p1=new Phone();
	$p1->start();
	$p1->stop();
	$c1=new Camera();
	$c1->start();
	$c1->stop();
*/

/***************接口使用的基本语法**************************


	interface 接口名{
		//属性;
		//方法;
	}

1.接口中的方法都不能有方法体(接口中的方法都不能不能实现);

******************如何去实现接口*************************
---(类单一继承,接口可以同时实现去实现多个接口)---
	class 类名 implements 接口名1,接口名2..{
		
	}
接口的作用是: 声明一些方法,供着其它的类来实现

小结:接口可以理解为更加抽象的抽象类,抽象类里的方法可以有方法体,接口里的所有方法都没有方法体,接口实现了程序设计的多态和-->高内聚低耦合<--的设计思想.  


******************深入讨论接口(interface)******************

什么时候在什么情况下可以考虑使用接口:
1.定规范;
2.定下规范,让别的程序员来实现;
3.当多个类之间没有继承关系(平级的关系),这些类都要去实现某个功能,只是实现的方式的方式不一样;


--------------------接口的细节-----------------------------
1.不能去实例化一个接口;
	interface iUsb{
	}
	$a=new iUsb();--->错误!!!!!!!!!!!!!

2.接口中的所有方法(函数)都不能有方法体!!!!!!!!!!;

3.一个类可以实现多个接口
	语法: 
		inteface iAbc{
		}
		inteface iDef{
		}
		class 类名 implements iAbc,iDef{
		}

4.接口中可以有属性,但要求必须是常量,并且默认修饰符是public;

	interface iUsb{
		//public $a=90;//报错!!!!!
		const A=100;	//常量前面加访问修饰符不对!!!
		//define("A",100);//报错!!! 

	}
	
	echo "ok|ok|oko".iUsb::A;
	
	class B implements iUsb{
		function __construct(){
			echo iUsb::A;
		}
	}
	$b=new B();


5.接口的方法都是public,(默认也是public)不能是protected 或 private

interface iUsb{
		//public $a=90;//报错!!!!!
		const A=100;	//常量前面加访问修饰符不对!!!
		//define("A",100);//报错!!! 
//		protected function test();	//报错
//		private function test();	//报错
		public function test();
		function test2();
	}
	
	echo "ok|ok|oko".iUsb::A;

6.一个接口不能继承其它的类,但是可以继承别的接口(一个接口可以继承另外多个接口)
{类与类之间是继承--类与接口之间是实现--接口与接口之间是继承(接口之间是多重继承)}

	interface iUsb2{
		public function a();
	}

	interface iUsb3{
		public function b();
	}


	interface iUsb extends iUsb2,iUsb3{
		function test();
	}
	

	class C1 implements iUsb{
		function test(){
		}
		function a(){
		}
		function b(){
		}
	}

	echo "ok|ok|oko";

7.一个类可以同时继承另一个类,和实现一个接口

	interface iUsb2{
		public function a();
	}

	interface iUsb3{
		public function b();
	}


	interface iUsb extends iUsb2,iUsb3{
		function test();
	}
	
	class C2 {
		public function test1(){
			echo "test1";
		}
	}
	class C1 extends C2 implements iUsb{
		function test(){
		}
		function a(){
		}
		function b(){
		}
	}

	echo "ok|ok|oko";
************************************************************/
/*-----------------------------------------------------------------

	从上面看出:
1.一个接口可以继承多个其它接口;
2.当一个类去实现了某些接口,则必须把所有接口的方法都实现;
3.一个类可以同时实现一个接口和继承另一个类;
-----------------------------------------------------------------*/

/******************实现接口VS继承类*******************************




	class Monkey{
		public $name;
		public $age;
		public function climbing(){
			echo "爬树技能<br/>";
		}
	}

	interface iBirdAble{
		public function fly();
	}
	interface iFishAble{
		public function swimming();
	}
	class LittleMonkey extends Monkey implements iBirdAble,iFishAble{
		public function fly(){
			echo "猴子会飞了...<br/>";
		}
		public function swimming(){
			echo "猴子会游泳了...<br/>";
		}
	}


	$littleMonkey=new LittleMonkey();
	$littleMonkey->climbing();
	$littleMonkey->fly();
	$littleMonkey->swimming();

<1>.---可以认为 实现接口是对单一继承的补充;
<2>.---可以在不破坏层级关系的前提下,对某个类功能进行扩展;


*******************************************************************/
//---------------------------------------------------------------
//---------------------------------------------------------------
//---------------------------------------------------------------
//---------------------------------------------------------------

/***************************final**********************************/
/*------------------------------------------------------------------
<-------------->final关键字
1.如果我们希望某个类不被其它类继承(可能因为安全考虑..),可以使用final

	final class A{	//加了final就不能让B继承A了
	
	}
	
	class B extends A{	//这里会报错
	
	}

	echo "ok";

2.如果我们希望某个方法,比如计算个人所得税的方法,不被子类改写,可以使用final来修饰我们的方法
	class A{	
		final public function getRate($salary){
			return $salary*0.08;
		}
	}
	
	class B extends A{	

		//不能去覆盖父类的getRate()方法;
		public function getRate($salary){
			return $salary*0.01;
		}
	}
	$b=new B();
	echo $b->getRate(100);

3.final 关键字不能去修饰属性,如果修饰会报错(特别说明)
	
	class A{	
		final public $a=100;
		public function getRate($salary){
			return $salary*0.08;
		}
	}
	
	class B extends A{	

		//不能去覆盖父类的getRate()方法;
		public function getRate($salary){
			return $salary*0.01;
		}
	}
	$b=new B();
	echo $b->getRate(100);
------------------------------------------------------------------*/

/*	class Abc1{
		final public function test(){
			echo "hello,girls";
		}
	}
	class Abc2 extends Abc1{
		public function test2(){
			echo "hi,boys";
		}
	}
	$x=new Abc2();
	$x->test2();
	echo '<br/>';
	$x->test();*/

	
/*************************const(常量)*******************************

---------const 关键字的讲解:
基本用法:
	class 类名{
		const 常量名=赋初值;
	}

	interface 接口名{
		const 常量名=赋初值;
	}

----------------常量都是public修饰的------------------------------

使用:
	类名::常量名;(self::常量名)
	接口名::常量名
----案例-----	
	class A{
		const RATE=0.08;
//		const RATE;	//常量在定义的时候必须赋初值,否则会报错
//		public const RATE=0.08;	//const 关键字前面不可以加访问修饰符(默认公开)
		public function payTax($val){
//			RATE=0.01;	//会报错!!!!常量不能修改
			return $val*A::RATE;	//这里可以的
			return $val*self::RATE;	//这里也可以
		}
	}
	$a=new A();
	echo $a->payTax(2000);

----注意事项----
1.常量名字母一般都是大写eg:TAX_RATE;
2.在定义常量时,必须赋初值eg:const TAX_RATE=10(初值);
3.const 关键字前面不能用public/protected/private修饰(本身是公开的);
4.访问常量:
	内部访问:	类名::常量名;	或者	self::常量名;
	外部访问	类名::常量名(接口名::常量名)	
5.常量值定义的时候就初始化,以后不能修改;
6.常量可以被子类继承;
7.常量是属于一个类的,而不是某个对象的;
*******************************************************************/







?>