<?php
	session_start();
	if(empty($_SESSION['admin'])){
		die ('<script>alert("请登录！");location.replace("/dl/denglu.php")</script>');
	}
?>