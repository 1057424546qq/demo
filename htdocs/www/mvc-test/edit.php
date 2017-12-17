<?php
include('libs/Smarty.class.php');
$smarty = new Smarty;
include('DB.class.php');
$play = new db('shop');
if($_GET['id']!="-1"){
	$id = $_GET['id'];
	$list = $play -> find('*',"id=$id",'','1');
	$smarty->assign('list',$list);
	$smarty->assign('id',$id);

	$smarty -> display('add.html');
}else{
	$id = $_GET['id'];
	$list['title']=' ';
	$list['des']=' ';
	$list['url']=' ';
	$list['price']=' ';
	$list['ord']=' ';
	$list['pic']=' ';
	$smarty->assign('id',$id);
	$smarty->assign('list',$list);
	$smarty -> display('add.html');
}
?>