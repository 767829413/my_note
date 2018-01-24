<?php
	//引入getDOM.class.php文件
	require_once('../getDOM/getDOM.class.php');
	//接受用户提交的单词
	$type = $_REQUEST["type"];
	$read = new getDOM("../model/word.xml");
	//判断用户需求
//查询单词(用switch比较好)
	if($type == "query") {
		//接收查询的单词
		$query_word = isset($_REQUEST["engword"]) ? $_REQUEST["engword"] : false;
		if(!$query_word) {
			exit("请输入正确单词<br/><a href='../index.php'>返回主界面</a>");
		}
		$read->searchWord($query_word);
//添加单词		
	}elseif($type == "insert") {	
		//接收用户数据
		$en_word = isset($_REQUEST["engword"]) ? $_REQUEST["engword"] : false;
		$ch_word = isset($_REQUEST["chword"]) ? $_REQUEST["chword"] : false;
		//添加到xml文件
		if(!$en_word || !$ch_word) {
			exit("词条编辑不严谨<br/><a href='../index.php'>返回主界面</a>");
		}
		$read->insertWord($en_word,$ch_word);
//删除单词
	}elseif($type == "delete") {
	//接收删除的单词
		$delete_word = isset($_REQUEST["engword"]) ? $_REQUEST["engword"] : false;
		if(!$delete_word) {
			exit("请输入正确单词<br/><a href='../index.php'>返回主界面</a>");
		}
		$read->deleteWord($delete_word);
//更新单词
	}elseif($type == "update") {
		//接收用户数据
		$en_word = isset($_REQUEST["engword"]) ? $_REQUEST["engword"] : false;
		$ch_word = isset($_REQUEST["chword"]) ? $_REQUEST["chword"] : false;
		//添加到xml文件
		if(!$en_word || !$ch_word) {
			exit("词条编辑不严谨<br/><a href='../index.php'>返回主界面</a>");
		}
		$read->updateWord($en_word,$ch_word);

	}


?>