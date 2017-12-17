<?php
include('db.php');
$id = $_GET['id'];
$sql = "delete from book where id='$id' limit 1";
$result = mysqli_query($db,$sql);
if($result){
	echo '<script>location.replace("book_list.php")</script>';
}else{
	echo '<script>alert("删除失败!");location.replace("book_list.php")</script>';
}
?>