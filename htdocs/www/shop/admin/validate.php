<?php
	session_start();
	$link = mysqli_connect('127.0.0.1', 'root', 'root','shop');
	mysqli_query($link,"set names utf8" );
	
	function mylist($link,$sql){
		$result = mysqli_query($link, $sql);
		while($row = mysqli_fetch_assoc($result)){
			$list[] = $row;
		};
		return $list;
	};
	
	if(empty($_SESSION['admin'])){
		die ('<script>alert("请登录！");location.replace("shop_login.php")</script>');
	};
