<?php
	include_once("libs/Smarty.class.php");
	$smarty = new Smarty;
	
	//单独数据
	$num=100;
	$title = 'Smarty';
	$smarty->assign('title',$title);
	$smarty->assign('num',$num);
	
	//一维数据
	$arr['id']=1;
	$arr['name']='张三';
	$arr['sex']=2;
	$arr['age']=20;
	$smarty->assign('arr',$arr);
	
	$link = mysqli_connect('127.0.0.1', 'root', 'root',  'test');
	$result = mysqli_query($link, 'select * from book');
	$list = mysqli_fetch_all($result,MYSQLI_ASSOC);
	print_r($list);
	$smarty->assign('list',$list);
	
	
	$smarty->display("1.html");
?>