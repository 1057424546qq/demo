<?php
	$link = mysqli_connect('127.0.0.1','root','root','test');
	$id = $_GET['id'];
	$sql = "delete from book where id=$id limit 1";
	$result = mysqli_query($link,$sql);
	if($result){
		echo '<script>location.replace("examination.php")</script>';
	}
?>