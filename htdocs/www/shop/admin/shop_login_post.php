<?php

	session_start();
	$user_name = $_POST['user_name'];
	$user_pwd = $_POST['user_pwd'];
	
	$link = mysqli_connect('127.0.0.1', 'root', 'root','shop');
	mysqli_query($link,"set names utf8" );
	$result = mysqli_query($link, "select count(*) as n from admin where user_name='$user_name' and user_pwd='$user_pwd'");
	
	$n = mysqli_fetch_assoc($result);
	
	if($n['n']==1){
		$_SESSION['admin'] = $user_name;
		echo '<script>alert("登录成功！");location.replace("shop_list.php")</script>';
	}else{
		$_SESSION['admin'] = null;
		echo '<script>alert("登录失败，请重试！");location.replace("shop_login.php")</script>';
	};
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	
</body>
</html>