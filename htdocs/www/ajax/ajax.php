<?php
	$link = mysqli_connect('127.0.0.1', 'root', 'root', 'test');
	$result = mysqli_query($link, "select id,name from book");
	$list = mysqli_fetch_all($result,MYSQLI_ASSOC);
	
	echo json_encode($list); 

?>
