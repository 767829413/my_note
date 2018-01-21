<?php
	header("content-type:text/html;charset=utf-8");
	require_once("object2.php");
	echo "<pre>";
	//对象的反序列化
	
	//1.将序列化的字符串读入

	$cat_obj_str = file_get_contents("G:/PHPLog/test.log");
	var_dump($cat_obj_str);
	//2.将取出的字符串进行反序列化
	
	$cat_obj = unserialize($cat_obj_str);
	var_dump($cat_obj);
	//如果我们希望正确操作反序列化对象，则需要引入该对象的类定义
	echo "<br/> name = " . $cat_obj->name;

//序列化与反序列化的细节讨论
/*************************************
1.序列化的作用在哪些方面
	》》对象序列化利于对象的保存和传输。
	》》可以让多个文件共享一个对象，而且我们将序列化后的对象保存到文件，还可以达到在不同时间操作该对象。

2. serialize() 函数会检查类中是否存在一个魔术方法 __sleep()。如果存在，该方法会先被调用，然后才执行序列化操作。此功能可以用于清理对象，并返回一个包含对象中所有应被序列化的变量名称的数组。如果该方法未返回任何内容，则 NULL 被序列化，并产生一个 E_NOTICE 级别的错误。
代码说明：__serialize.php

3. unserialize() 会检查是否存在一个 __wakeup() 方法。如果存在，则会先调用 __wakeup 方法，预先准备对象需要的资源。

__wakeup() 经常用在反序列化操作中，例如重新建立数据库连接，或执行其它初始化操作。
代码说明：__serialize.php


?>