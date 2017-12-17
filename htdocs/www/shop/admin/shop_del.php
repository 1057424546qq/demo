<?php
	include('validate.php');
	$id = $_GET['id'];
//	print_r($_SERVER);
	$ip = $_SERVER['HTTP_REFERER'];
//	print_r($ip);
	$link = mysqli_connect('127.0.0.1','root','root','shop');
	
	$pic = $_GET['pic'];
	$sql = "delete from shop where id=$id limit 1";
	
	$result = mysqli_query($link,$sql);
	
	if($result){
		unlink($_SERVER['DOCUMENT_ROOT'].'/shop/admin/img'.$pic);
		echo "<script>location.replace('$ip')</script>";
	}
?>