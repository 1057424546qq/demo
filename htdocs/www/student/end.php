<?php
	session_start();
	$_SESSION['admin'] = '';
	$_SESSION['admin'] = null;
	
	unset($_SESSION['admin']);
	
	die("<script>window.top.location.replace('/dl/denglu.php')</script>");
?>