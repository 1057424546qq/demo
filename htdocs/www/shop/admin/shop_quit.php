<?php
	session_start();
	$_SESSION['admin'] = '';
	$_SESSION['admin'] = null;
	
	unset($_SESSION['admin']);
	
	die("<script>window.top.location.replace('/shop/admin/shop_login.php')</script>"); 
?>