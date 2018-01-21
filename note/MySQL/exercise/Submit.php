<?php
	//获取所有数据库的信息
	//1.连接数据库
	$link = mysql_connect("www.mrfang.com","root","6217512");
	if(!$link){
		exit('连接失败,请检查用户名密码以及主机名');
	}
	//2.设置编码
	mysql_query('set names utf8');
	//3.准备SQL语句
	$sql1 = "show databases;";
	//4.发送SQL语句
	$res1 = mysql_query($sql1);
	if(!$res1){
		exit('发送失败,检查配置语句');
	}
	//5.解析结果集资源;
	//定义一个空变量(数组)存储循环数组
	$acc=array();
	while($row1 = mysql_fetch_assoc($res1)){
		$acc[]=$row1;	
	}
//	var_dump($acc);

?>
<!DOCYTYPE html>
<html>
<head>
 <meta charset='utf-8'/>
 <title>创建数据库</title>
</head>
<body>
<a href='CreateView.php'><b>添加数据库</b></a>
<table border='1' width='300px'>
<tr>
<th>数据库名</th>
<th>操作</th>
</tr>
<?php //for($i=0;$i<count($acc);$i++){ 
		foreach($acc as $kel => $val){
?>
<tr>
<td><?php echo $val['Database']; ?></td>
<td>
<a href='alterDatabase.php?dbname=<?php echo $val['Database']; ?>'>修改</a>
<a href='dropDatabase.php?dbname=<?php echo $val['Database']; ?>'>删除</a>
</td>
</tr>
<?php }; ?>
</table>
</body>
</html>