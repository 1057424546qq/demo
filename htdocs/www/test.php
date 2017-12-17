<?php
	$link = mysqli_connect('127.0.0.1', 'root', 'root', 'shop');
	mysqli_query($link, "set names utf8");
	$query = "select id,title from shop ";
	$result = mysqli_query($link, $query);
	$list = mysqli_fetch_all($result,MYSQLI_ASSOC);
	echo json_encode($list);
?>