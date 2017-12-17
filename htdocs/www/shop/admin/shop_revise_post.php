<?php
include ('validate.php');
//	print_r($_SESSION['ip']);
	$ip = $_SESSION['ip'];
//	print_r($ip);
	$_SESSION['nip'] = $_SERVER['HTTP_REFERER'];
	$new_ip = $_SESSION['nip'];
	$id = $_POST['id'];
//	print_r($id);

	
	$title = $_POST['title'];
	$pid = $_POST['pid'];
	$des = $_POST['des'];
	$price = $_POST['price'];
	$url = $_POST['url'];
//	print_r($pid);
//	print_r($score);

//	print_r($_FILES);
	//图片上传	
	if(!empty($_POST['id'])){
		$id=$_POST['id'];
		$pic = $_POST['img2'];
		if($pic==''){
			do{$pic = time().rand(1, 9999).'.jpg';}while(file_exists($_SERVER['DOCUMENT_ROOT'].'/shop/admin/img/'.$pic));
		}else{
			$pic = time().rand(1, 9999).'.jpg';
		}
		
		$new_files = $_SERVER['DOCUMENT_ROOT'].'/shop/admin/img/'.$pic;
		$re = move_uploaded_file($_FILES['new_img']['tmp_name'], $new_files);
		$sql = '';
		if($re){
			$sql_cover = ",pic='$pic'";
		}
		$sql = "update shop set title='$title',sort_id='$pid',des='$des',price='$price',url='$url' $sql_cover where id='$id'  limit 1";
}else{
//Add
	$pic = time().rand(1,9999).'.jpg';
	$newFile = $_SERVER['DOCUMENT_ROOT'].'/shop/admin/img/'.$pic;
	$re = move_uploaded_file($_FILES['pic']['tmp_name'],$newFile);
	$sql_cover = '';
	if($re){
		$sql_cover = ",pic='$pic'";
	}
	$sql = "insert into shop set title='$title',sort_id='$pid',des='$des',price='$price',url='$url' $sql_cover";
}
	$result = mysqli_query($link,$sql);
	if($result){
		echo "<script>alert('操作成功，请确定！');location.replace('$ip')</script>";
	}else{
		echo "<script>alert('操作失败，请确定！');location.replace('$new_ip')</script>";
		
	};

//	print_r($list);
	
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Document</title>
</head>
<body>
	
</body>
</html>