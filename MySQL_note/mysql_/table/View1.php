<!DOCYTYPE html>
<html>
<head>
 <meta charset='utf-8'/>
 <title></title>
</head>
<body>
<a href="View3.php?dbname=<?php echo $dbname; ?>"><b>添加表</b></a>
<table border='1' width='300px'>
<tr>
<th>表名</th>
<th>操作</th>
</tr>
<?php foreach($acc as $kel => $val): ?>
<tr> 
<td><form action="/MrFangWEB/mysql/data/DataInfo.php" method="post">
<input type="hidden" name="tbname" value="<?php echo $val["Tables_in_$dbname"]; ?>"/>
<input type="hidden" name="dbname" value="<?php echo $dbname; ?>"/>
<input type="submit" value="<?php echo $val["Tables_in_$dbname"]; ?>"/>
</form></td>
<td>
<form action="operation.php" method="post">
<select name="choice">
<option value="modify">修改</option>
<option value="drop">删除</option>
</select>
<input type="hidden" name="tbname" value="<?php echo $val["Tables_in_$dbname"]; ?>"/>
<input type="hidden" name="dbname" value="<?php echo $dbname; ?>"/>
<input type="submit" value="确认"/>
</form>
</td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>
<?php mysql_close($link); ?>
