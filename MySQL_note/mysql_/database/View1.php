<?php require_once('DataInfo.php'); ?>
<!DOCYTYPE html>
<html>
<head>
 <meta charset='utf-8'/>
 <title>创建数据库</title>
</head>
<body>
<a href='View3.php'><b>添加数据库</b></a>
<table border='1' width='300px'>
<tr>
<th>数据库名</th>
<th>操作</th>
</tr>
<?php foreach($acc as $kel => $val){ ?>
<tr>
<td><a href="/MrFangWEB/mysql/table/TableInfo.php?dbname=<?php echo $val['Database']; ?>"><?php echo $val['Database']; ?></a></td>
<td>
<form action="operation.php" method="post">
<select name="choice">
<option value="modify">修改</option>
<option value="drop">删除</option>
</select>
<input type="hidden" name="dbname" value="<?php echo $val['Database']; ?>"/>
<input type="submit" value="确认"/>
</form>
</td>
</tr>
<?php }; ?>
</table>
</body>
</html>
<?php mysql_close($link); ?>