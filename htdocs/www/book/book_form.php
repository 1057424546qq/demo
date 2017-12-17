<?php
if(!empty($_GET['id'])){
	include('db.php');
	$id = $_GET['id'];
	$sql = "select * from book where id='$id' limit 1";
	$result = mysqli_query($db,$sql);
	$arr = mysqli_fetch_assoc($result);
}	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Document</title>
  <style>
  .header{
  	width: 50px;
  }
  </style>
  <link rel="stylesheet" type="text/css" href="css/me.css">
</head>
<body>

<ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">图书管理</a></li>
    <li class="active">增加图书</li>
</ol>

<div class="container">
<form method="post" enctype="multipart/form-data" action="book_form_post.php">
<?php
if(empty($arr)){
?>
<table class="table table-hover table-striped">
  <tr><th>项目</th><th>值</th></tr>
  <tr><th>图书</th><td><input type="text" name="name" value=""></td></tr>
  <tr><th>价格</th><td><input type="text" name="price"></td></tr>
  <tr><th>库存</th><td><input type="text" name="num" value=""></td></tr>
  <tr><th>作者</th><td><input type="text" name="author" value=""></td></tr>
  <tr><th>出版社</th><td><input type="text" name="publish_name" value=""></td></tr>
  <tr><th>出版时间</th><td><input type="text" name="publish_date" value=""></td></tr>
  <tr><th>封面</th><td><input type="file" name="cover"></td></th></tr>
  <tr><td></td><td>
  <button class="btn btn-success btn-sm">提交</button>
  <button class="btn btn-success btn-sm" onclick="history.go(-1)">返回</button>
  </td></tr>
</table>
<?php
}else{
?>
<input type="hidden" name="id" value="<?php echo $arr['id']; ?>" />
<input type="hidden" name="cover2" value="<?php echo $arr['cover']; ?>" />
<table class="table table-hover table-striped">
  <tr><th>项目</th><th>值</th></tr>
  <tr><th>图书</th><td><input type="text" name="name" value="<?php echo $arr['name']; ?>"></td></tr>
  <tr><th>价格</th><td><input type="text" name="price" value="<?php echo $arr['price']; ?>"></td></tr>
  <tr><th>库存</th><td><input type="text" name="num" value="<?php echo $arr['num']; ?>"></td></tr>
  <tr><th>作者</th><td><input type="text" name="author" value="<?php echo $arr['author']; ?>"></td></tr>
  <tr><th>出版社</th><td><input type="text" name="publish_name" value="<?php echo $arr['publish_name']; ?>"></td></tr>
  <tr><th>出版时间</th><td><input type="text" name="publish_date" value="<?php echo $arr['publish_date']; ?>"></td></tr>
  <tr><th>封面</th><td>
  	<img src="<?php echo $arr['cover']==''? 'img/cover.jpg':'upload/'.$arr['cover']; ?>" class="header" />
  	<input type="file" name="cover"></td></th></tr>
  <tr><td></td><td>
  <button class="btn btn-success btn-sm">提交</button>
  <button class="btn btn-success btn-sm" onclick="history.go(-1)">返回</button>
  </td></tr>
</table>

<?php
}
?>

</form>
</div>
</body>
</html>