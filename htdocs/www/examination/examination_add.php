<?php
	session_start();
	$ip = $_SERVER['HTTP_REFERER'];
	$_SESSION['ip'] = $ip;
	$link = mysqli_connect('127.0.0.1', 'root', 'root', 'test');
	if(!empty($_GET['id'])){
		$id = $_GET['id'];
		$query = "select * from book where id='$id' limit 1";
		$result = mysqli_query($link, $query);
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
  <!--<link rel="stylesheet" type="text/css" href="me.css">-->
</head>
<body>
<ol class="breadcrumb">
    <li><a href="#">首页</a></li>
    <li><a href="#">图书管理</a></li>
    <li class="active">添加图书</li>
</ol>

<form method="post" action="examination_add_post.php" enctype="multipart/form-data" style="width: 50%;">
<?php
	if(!empty($arr)){	
?>

<table class="table table-hover" style="width: 65%;">
  <input type="hidden" name="id" value="<?php echo $arr['id']?>"></input>
  <input type="hidden" name="cover2" value="<?php echo $arr['cover']; ?>" />
  <tr><th>项目</th><th>值</th></tr>
  <tr><th>书名</th><td><input type="text" name="name" value="<?php echo $arr['name']?>"></td></tr>
  <tr><th>单价</th><td><input type="text" name="price"value="<?php echo $arr['price']?>"></td></tr>
  <tr><th>库存</th><td><input type="text" name="num"value="<?php echo $arr['num']?>"></td></tr>
  <tr><th>作者</th><td><input type="text" name="author"value="<?php echo $arr['author']?>"></td></tr>
  <tr><th>出版社</th><td><input type="text" name="publish_name"value="<?php echo $arr['publish_name']?>"></td></tr>
  <tr><th>日期</th><td><input type="text" name="publish_date"value="<?php echo $arr['publish_date']?>"></td></tr>
  <tr><th>封面</th><td> <input type="file" name="cover" ></input></td></tr>

  <tr><td></td><td><div id="mydiv"></div>
  <button class="btn btn-success btn-sm">提交</button>
  <button class="btn btn-success btn-sm" onclick="history.go(-1)">返回</button>
  </td></tr>
</table>
<?php
}else{
?>
<table class="table table-hover" style="width: 65%;">
  <input type="hidden" name="id" value=""></input>
  
  <tr><th>项目</th><th>值</th></tr>
  <tr><th>书名</th><td><input type="text" name="name" value=""></td></tr>
  <tr><th>单价</th><td><input type="text" name="price"value=""></td></tr>
  <tr><th>库存</th><td><input type="text" name="num"value=""></td></tr>
  <tr><th>作者</th><td><input type="text" name="author"value=""></td></tr>
  <tr><th>出版社</th><td><input type="text" name="publish_name"value=""></td></tr>
  <tr><th>日期</th><td><input type="text" name="publish_date"value=""></td></tr>
  <tr><th>封面</th><td> <input type="file" name="cover" ></input></td></tr>

  <tr><td></td><td><div id="mydiv"></div>
  <button class="btn btn-success btn-sm">提交</button>
  <button class="btn btn-success btn-sm" onclick="history.go(-1)">返回</button>
  </td></tr>
</table>

<?php
}
?>
</form>
	<script type="text/javascript">
		var mydiv = document.getElementById('mydiv');
		var photo = document.getElementById('photo');
		
		photo.onchange = function(){
			
			var reader = new FileReader();
			
			reader.onload = function(){
				
				var img_html = document.createElement('img');
				
				img_html.src = event.target.result;
				
				mydiv.innerHTML = '';
				
				mydiv.appendChild(img_html);
				
			}
			
			reader.readAsDataURL(this.files[0]);
			
		}
		
	</script>
</body>
</html>