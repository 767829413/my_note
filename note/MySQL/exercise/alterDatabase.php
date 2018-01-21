<?php
	//获取数据库名
	$dbname=isset($_REQUEST['dbname']) ? $_REQUEST['dbname'] : '';
	if(!$dbname){
		exit('数据库名没有输入');
	}
	//1.连接数据库
	$link = mysql_connect("www.mrfang.com","root","6217512");
	if(!$link){
		exit('连接失败,请检查用户名密码以及主机名');
	}
	//2.设置编码
	mysql_query('set names utf8');
	//3.准备SQL语句
	$sql = "show charset;";
	//4.发送SQL语句到服务器
	$res = mysql_query($sql);
	//设置一个接受的空数组
	$accept=array();
	while($accept[] = mysql_fetch_assoc($res)){
	}


	
?>
<!DOCYTYPE html>
<html>
<head>
 <meta charset='utf-8'/>
 <title>提交数据库名</title>
</head>
<body>
 <form action='okAlter.php' method='post'>
	字符集:<select name='charset'>
	<?php foreach($accept as $key => $val){ ?>
	<option value='<?php echo $val['Charset']; ?>'><?php echo $val['Charset']; ?></option>
	<?php }; ?>
	</select>
	校对集:<select name='collate'>
	<?php foreach($accept as $key => $val){ ?>
	<option value='<?php echo $val['Default collation']; ?>'><?php echo $val['Default collation']; ?></option>
	<?php }; ?>
	<input type='hidden' name='dbname' value='<?php echo $dbname; ?>'>
	<input type='submit' value='确认'/>
 
 </form>
</body>
</html>
