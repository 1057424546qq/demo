<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>增加页</title>
		<link rel="stylesheet" type="text/css" href="/Public/Css/bootstrap.css" />
	</head>
	<body>
		
		<div class="container">
			<form action="/Shop/shop_post" method="post">
			
			<table class="table table-hover">
				<tr>
					<th>标题:<input type="text" name="title"  value="" /></th>
				</tr>
				<tr>
					<th>价格:<input type="text" name="price"  value="" /></th>
				</tr>
				
			</table>
				<input class="btn btn-success" type="submit" value="提交"/>
				<input class="btn btn-info" type="button" value="返回" onclick="history.go(-1)"/>
			</form>
			
		</div>
		
	</body>
</html>