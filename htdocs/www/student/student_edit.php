<?php
	$id = $_GET['id'];
//	print_r($id);
	$link = mysqli_connect('127.0.0.1', 'root','root','school');
	$sql = "select * from student where id=$id limit 1";
	$result = mysqli_query($link, $sql);
	$list = mysqli_fetch_assoc($result);
	
//	print_r($list['id']);	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Document</title>
  <!--<link rel="stylesheet" type="text/css" href="me.css">-->
</head>
<body>
<ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">学生管理</a></li>
    <li class="active">修改信息</li>
</ol>

<form method="post" action="edit.php" style="width: 30%;">
<table class="table table-hover" style="width: 65%;">
  <tr><th>项目</th><th>值</th></tr>
  <tr><th><input type="hidden" name="id" value="<?php echo $list['id']?>" /></th></tr>
  <tr><th>姓名</th><td><input type="text" name="name" value="<?php echo $list['name']?>"></td></tr>
  <tr><th>性别</th><td>
  <input type="radio" name="sex" value="1" <?php echo $list['sex']==1?'checked':'';?> >男
  <input type="radio" name="sex" value="2"<?php echo $list['sex']==2?'checked':'';?>>女
  </td></tr>
  <tr><th>年龄</th><td><input type="text" name="age"value="<?php echo $list['age']?>"></td></tr>
  <tr><th>成绩</th><td><input type="text" name="score"value="<?php echo $list['score']?>"></td></tr>

  <tr><td></td><td>
  <button class="btn btn-success btn-sm">提交</button>
  <button class="btn btn-success btn-sm" onclick="history.go(-1)">返回</button>
  </td></tr>
</table>
</form>

</body>
</html>