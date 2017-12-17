<?php
include('db.php');
$name = $_POST['name'];
$price = $_POST['price'];
$num = $_POST['num'];
$author = $_POST['author'];
$publish_name = $_POST['publish_name'];
$publish_date = $_POST['publish_date'];

// Edit
if(!empty($_POST['id'])){
	$id = $_POST['id'];
	$cover = $_POST['cover2'];
	if($cover==''){
		$cover = time().rand(1,9999).'.jpg';
	}
	$newFile = $_SERVER['DOCUMENT_ROOT'].'/book/upload/'.$cover;
	$re = move_uploaded_file($_FILES['cover']['tmp_name'],$newFile);
	$sql_cover = '';
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

$result = mysqli_query($db,$sql);
if($result){
	echo '<script>alert("操作成功!");location.replace("book_list.php")</script>';
}else{
	echo '<script>alert("操作失败!")</script>';
}
?>