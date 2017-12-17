<?php

	session_start();
	$id = $_POST['id'];
//print_r($_FILES);
	$link = mysqli_connect('127.0.0.1','root','root','test');
	$name = $_POST['name'];
	$price = $_POST['price'];
	$num = $_POST['num'];
	$author = $_POST['author'];
	$publish_name = $_POST['publish_name'];
	$publish_date = $_POST['publish_date'];
//	$cover = $_POST['cover'];
	
	//修改
	if(!empty($_POST['id'])){
		$id=$_POST['id'];
		$cover = $_POST['cover2'];
		if($cover==''){
			$cover = time().rand(1, 9999).'.jpg';
		}
		$new_file = $_SERVER['DOCUMENT_ROOT'].'/examination/img/'.$cover;
		$re = move_uploaded_file($_FILES['cover']['tmp_name'], $new_file);
		$sql = '';
		if($re){
			$sql_cover = ",cover='$cover'";
		}
		$sql = "update book set name='$name',price='$price',num='$num',author='$author',publish_name='$publish_name',publish_date='$publish_date' $sql_cover where id='$id' limit 1";
}else{
//Add
	$cover = time().rand(1,9999).'.jpg';
	$newFile = $_SERVER['DOCUMENT_ROOT'].'/book/upload/'.$cover;
	$re = move_uploaded_file($_FILES['cover']['tmp_name'],$newFile);
	$sql_cover = '';
	if($re){
		$sql_cover = ",cover='$cover'";
	}
	$sql = "insert into book set name='$name',price='$price',num='$num',author='$author',publish_name='$publish_name',publish_date='$publish_date' $sql_cover";
}

$result = mysqli_query($link,$sql);
	
	
	
//	if(empty($_POST['id'])){
//		if($_FILES['cover']['size']==0){
//				$query = "update book set name='$name',price='$price',num='$num',author='$author',publish_name='$publish_name',publish_date='$publish_date'  where id='$id' limit 1";
//			}else{
//			$query = "update book set name='$name',price='$price',num='$num',author='$author',publish_name='$publish_name',publish_date='$publish_date',cover='$cover'  where id='$id' limit 1";};
//	}else{
//	$query = "insert into book set name='$name',price='$price',num='$num',author='$author',publish_name='$publish_name',publish_date='$publish_date',cover='$cover'";
//	}
	
	
	
	
	
	
	if($result){
		echo '<script>alert("操作成功，请确定！");location.replace("examination.php")</script>';
	}else{
		echo '<script>alert("操作失败，请确定！");location.replace("examination.php")</script>';
	}
?>