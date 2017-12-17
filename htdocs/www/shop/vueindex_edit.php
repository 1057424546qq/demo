<?
	include('admin/validate.php');
	$id = $_GET['id'];
	$sql = "select * from shop where id='$id'";
	$result = mysqli_query($link, $sql);
	$lab = mysqli_fetch_assoc($result);
	echo json_encode($lab);
?>