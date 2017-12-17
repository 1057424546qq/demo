<?php
	$link = mysqli_connect('127.0.0.1','root','root','school');
	$id = $_GET['id'];
//	print_r($id)
	$sql = "delete from student where id=$id limit 1";
	$result = mysqli_query($link, $sql);
	if($result){
		echo '<script>location.replace("http://localhost/student_list.php")</script>';
	}
?>