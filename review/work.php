<?php
	class Pig{
		public $name;
		public $age;
		public $weight;
		
		function __construct($a,$b,$c){
			$this->name = $a;
			$this->age = $b;
			$this->weight = $c;
		}
		function subWeight(){
			$w = isset($_REQUEST['number']) ? $_REQUEST['number'] : 0;
			$oper = isset($_REQUEST['choise']) ? $_REQUEST['choise'] : null;
			switch($oper){
				case null:
					$res = $this->weight;
					break;
				case "add":
					$res = $this->weight + $w;
					break;
				case "sub":
					$res = $this->weight - $w;
					break;
				default:
					break;
			}
			return $res;
		}
	}

	

	//先判断是否有猪的体重文件
	if(file_get_contents("G:/MrFangWEB/review/pigweight.txt")){
		//从这个文件中,读取这个体重,然后再创建一只猪
		$weight = file_get_contents("G:/MrFangWEB/review/pigweight.txt");
		$p = new Pig('猪八戒',999,$weight);
	}else{
		$p = new Pig('猪八戒',999,888);
	}
	echo "猪的名字是:-->".$p->name;
	echo "<br/>猪的年龄是:-->".$p->age;
	
	//将猪的体重保存在文件中
	file_put_contents('G:/MrFangWEB/review/pigweight.txt',$p->subWeight());
	echo "<br/>猪的体重是:-->".$p->subWeight();

	
	

?>
<form avtion="#" method="post">
输入:<input type="text" name="number" />
<input type="radio" name="choise" value="add"/>增加体重
<input type="radio" name="choise" value="sub"/>减少体重
<input type="submit" value="提交修改"/>

</form>