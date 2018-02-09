<!DOCYTYPE html>
<html>
<head>
 <meta charset='utf-8'/>
 <title></title>
</head>
<body>		
<form style="display:inline" action='View3.php' method="post">
<input type="hidden" name="dbname" value="<?php echo $dbname ?>"/>
<input type="hidden" name="tbname" value="<?php echo $tbname ?>"/>
<input type="submit" value="添加数据"/>
</form>
<form style="display:inline" action='View5.php' method="post">
<input type="hidden" name="dbname" value="<?php echo $dbname ?>"/>
<input type="hidden" name="tbname" value="<?php echo $tbname ?>"/>
<input type="submit" value="清空数据"/>
</form>
<table border='1' width='300px'>
<tr>
<th>id号</th>
<th>姓名</th>
<th>年龄</th>
<th>性别</th>
<th>操作</th>
</tr>
<?php foreach($acc as $key => $val){ ?>
<tr>
<td><?php echo $val["id"]; ?></td>
<td><?php echo $val["name"]; ?></td>
<td><?php echo $val["age"]; ?></td>
<td><?php echo $val["sex"]; ?></td>
<td>
<form action="operation.php" method="post">
<select name="choice">
<option value="modify">修改</option>
<option value="delete">删除</option>
</select>
<input type="hidden" name="dbname" value="<?php echo $dbname ?>"/>
<input type="hidden" name="tbname" value="<?php echo $tbname ?>"/>
<input type="hidden" name="id" value="<?php echo $val["id"]; ?>"/>
<input type="submit" value="确认"/>
</form>
</td>
</tr>
<?php }; ?>
<tr>
<td colspan="5">
<a href="http://www.mrfang.com/MrFangWEB/mysql/data/DataInfo.php?page=1">首页</a>
<a href="http://www.mrfang.com/MrFangWEB/mysql/data/DataInfo.php?page=<?php echo $page <= 1 ? $page : $page-1; ?>">上一页</a>
<a href="http://www.mrfang.com/MrFangWEB/mysql/data/DataInfo.php?page=<?php echo $page == $pagemax ? $page : $page+1; ?>">下一页</a>
<a href="http://www.mrfang.com/MrFangWEB/mysql/data/DataInfo.php?page=<?php echo $pagemax; ?>">末页</a>
</td>
</tr>
</table>
</body>
</html>
