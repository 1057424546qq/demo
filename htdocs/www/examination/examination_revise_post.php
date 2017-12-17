<?php
	session_start();
	$id = $_POST['id'];
//	print_r($_SERVER);
//	print_r($ip);
	$link = mysqli_connect('127.0.0.1', 'root', 'root', 'test');
	
	$name = $_POST['name'];
	$price = $_POST['price'];
	$num = $_POST['num'];
	$author = $_POST['author'];
	$publish_name = $_POST['publish_name'];
	$publish_date = $_POST['publish_date'];
	
	$cover = time().rand(1, 999).'.jpg';
	$new_file = $_SERVER['DOCUMENT_ROOT'].'/examination/img/'.$cover;
	move_uploaded_file($_FILES['cover']['tmp_name'], $new_file);
	
	if($_FILES['cover']['size']==0){
		$query = "update book set name='$name',price='$price',num='$num',author='$author',publish_name='$publish_name',publish_date='$publish_date'  where id='$id' limit 1";
	}else{
	$query = "update book set name='$name',price='$price',num='$num',author='$author',publish_name='$publish_name',publish_date='$publish_date',cover='$cover'  where id='$id' limit 1";}
	$result = mysqli_query($link, $query);
	if($result){
		echo '<script>alert("修改成功，请确定！");location.replace("'.$_SESSION['ip'].'")</script>';
	}	
?>