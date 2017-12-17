<?php
include_once("libs/Smarty.class.php");
$smarty = new Smarty;

include('DB.class.php');
$shop = new db('shop');

$page = empty($_GET['page']) ? 1 : $_GET['page'];  
$url = "&page={page}"; 
$n = $shop->find('count(*) as n');
$n = $n['n'];
$size = 3;
$pageAll=ceil($n/$size); 
$start = ($page-1)*$size;

include('page.class.php');
$page = new page($n,$size,$page,$url,2);
$page = $page->myde_write();

$list = $shop->select('*','','',"$start,$size");


//分页
$smarty->assign('page',$page);
//查找
$smarty->assign('list',$list);

$smarty->display("list.html");
?> 
 