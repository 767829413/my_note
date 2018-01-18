<?php
	require_once('_Data.class.php');
	$d = new _Data();
	if($_REQUEST['choice']=="delete"){
		$d->DeleteDT();
		$a = "display:none";	
	}elseif($_REQUEST['choice']=="modify"){
		$dbname=$_REQUEST['dbname'];
		$tbname=$_REQUEST['tbname'];
		$id = $_REQUEST['id'];

		if(!$tbname || !$dbname){
			exit('输入出错');
		}
		//1.连接数据库
		$link = mysql_connect("www.mrfang.com","root","6217512");
		if(!$link){
			exit('连接失败,请检查用户名密码以及主机名');
		}
		//2.设置编码
		mysql_select_db($dbname);
		mysql_query("set names utf8");
		//3.准备SQL语句
		$sql1 = "select * from $tbname where id=$id;";
		//4.发送SQL语句到服务器
		$res = mysql_query($sql1);
		$acc = array();
		while($row = mysql_fetch_assoc($res)){
			$acc[] = $row;
		}
	}
?>
<!DOCYTYPE html>
<html>
<head>
 <meta charset='utf-8'/>
 <title></title>
</head>
<body>
 <form style="<?php echo $a; ?>" action='View2.php' method='post'>
 <?php foreach($acc as $key => $val){ ?>  
	姓名:<input type='text' name='name' value="<?php echo $val['name']; ?>"/><br/>
	年龄:<input type='text' name='age' value="<?php echo $val['age']; ?>"/><br/>
	性别:<input type='radio' name='sex' value="男" <?php if($val['sex']=='男'){ echo "checked='checked'";} ?> />男
		 <input type='radio' name='sex' value="女" <?php if($val['sex']=='女'){ echo "checked='checked'";} ?> />女<br/>
<?php }; ?>
	<input type='hidden' name='dbname' value='<?php echo $dbname; ?>'>
	<input type='hidden' name='tbname' value='<?php echo $tbname; ?>'>
	<input type='hidden' name='id' value='<?php echo $id; ?>'>
	<input type='submit' value='确认'/> 
 </form>
</body>
</html>
