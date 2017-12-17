<?php

include ('validate.php');
if (!empty($_GET['pid'])) {
	$pid = $_GET['pid'];
}

//	print_r($_SERVER);

if (!empty($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "select * from shop where id='$id' limit 1";
	$result = mysqli_query($link, $sql);
	$list = mysqli_fetch_assoc($result);
}

//	print_r($_SERVER);
$sql1 = "select * from search ";
$list1 = mylist($link, $sql1);
//跳转封装
$ip = $_SERVER['HTTP_REFERER'];
//	print_r($list1);
$_SESSION['ip'] = $ip;
//	print_r($_SESSION['ip']);
?>
<!DOCTYPE html>
<html lang="zh">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
		<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!--<link rel="stylesheet" type="text/css" href="me.css">-->
		<title>Document</title>
	</head>
	<body >
		<style type="text/css">
.shop_bn{
width: 100%;
background:url(../img/创意灯首页_03.png)no-repeat left center ;
background-color:#444444 ;
height: 110px;
}
.user{
float: right;
color: white;
font-size: 18px;
cursor: pointer;
margin-top: 80px;
}
.user a {
color: #FFFFFF;
}
		</style>
		<div style="background: #444444;">
			<div class="container">
				<div class="shop_bn">

					<div class="user">
						您好！<?php echo $_SESSION['admin']?>
						<a href="">
							退出
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="container" style="font-size: 18px;" >
			<ol class="breadcrumb">
				<li>
					<a  href="<?php echo $ip?>">
						管理首页
					</a>
				</li>
				<li class="active">
					操作页面
				</li>
			</ol>
			<div style="background: #FFFFFF; ">
				<form action="shop_revise_post.php" method="post" enctype="multipart/form-data">
					<?php
if(empty($id)){
?>
<!--增加-->
<table class="table table-hover" style="width: 100%;">
<div id="mydiv" style="height: 200px;"></div>
<tr><th><input type="hidden" name="id"  value="" /></th></tr>
<input type="hidden" name="img2" value="" />
<tr><th>素材图：</th><td><input type="file" name="pic" id="time_img" /></td></tr>
<tr><th>分类：</th><td>
<select name="pid">
<?php
$i = 0;
foreach($list1 as $v){
$i++;
?>
<option value="<?php echo $i?>"><?php echo $v['name']?></option>
<?php
}
					?>

					</select></td>
					</tr>
					<tr><th>标题：</th><td><input type="text" name="title" value=""/></td></tr>
					<tr><th>副标题：</th>
					<td>
					<textarea name="des" rows="3" cols="19"></textarea>

					</tr>
					<tr><th>单价：</th><td><input type="text" name="price" value=""/></td></tr>
					<tr><th>链接：</th><td><input type="text" name="url" value=""/></td></tr>
					<tr><td><input type="submit" value="提交"/></td><td><input type="button" onclick="history.go(-1)" value="返回"/></td></tr>
					</table>
					<?php
					}else{
				?>
<!--修改-->
<table class="table table-hover" style="width: 100%;">
<div id="mydiv" style="height: 200px;"><img style="height: 200px;" src="img/<?php echo $list['pic']?>" alt="" /></div>

<tr><th><input type="hidden" name="id"  value="<?php echo $id; ?>" /></th></tr>
<input type="hidden" name="img2" value="<?php echo $list['pic']; ?>" />

<tr><th>素材图：</th><td><input type="file" name="new_img" id="time_img" /></td></tr>
<tr><th>分类：</th><td>
<select name="pid">
<?php
$i = 0;
foreach($list1 as $v){
$i++;
?>
<option <?php echo $i == $pid ? 'selected' : ''; ?> value="<?php echo $i?>" ><?php echo $v['name']?></option>
<?php
}
					?>

					</select></td>
					</tr>

					<tr><th>标题：</th><td><input type="text" name="title" value="<?php echo $list['title']?>"/></td></tr>
					<tr><th>副标题：</th>
					<td>
					<textarea name="des" rows="3" cols="19"><?php echo $list['des']?><
					/textarea>

					</tr>
					<tr><th>单价：</th><td><input type="text" name="price" value="<?php echo $list['price']?>"/></td></tr>
					<tr><th>链接：</th><td><input type="text" name="url" value="<?php echo $list['url']?>"/></td></tr>
					<tr><td><input type="submit" value="提交"/></td><td><input type="button" onclick="history.go(-1)" value="返回"/></td></tr>
					</table>
					<?php
					}
					?>

				</form>
			</div>

		</div>
		<script type="text/javascript">
var time_img = document.getElementById('time_img');
var mydiv = document.getElementById('mydiv');

time_img.onchange = function(){

var reader = new FileReader();

reader.onload = function(){
var img_html = document.createElement('img');
img_html.src = event.target.result;
img_html.style.height = '200px';
mydiv.innerHTML = '';
mydiv.appendChild(img_html);
}
reader.readAsDataURL(this.files[0]);
}

		</script>
	</body>
</html>