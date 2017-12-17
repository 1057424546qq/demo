<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>列表页</title>
		<link rel="stylesheet" type="text/css" href="/Public/Css/bootstrap.css" />
	</head>
	<body>
		<div class="container">
		<table class="table table-hover">
			<tr>
				<th>ID</th>
				<th>标题</th>
				<th>副标题</th>
				<th>价格</th>
				<th>操作<a href="/Shop/shop_add">增加</a></th>
			</tr>
			<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
				
				<td><?php echo ($v["id"]); ?></td>
				<td><?php echo ($v["title"]); ?></td>
				<td><?php echo ($v["des"]); ?></td>
				<td><?php echo ($v["price"]); ?></td>
				<td><a href="/Shop/shop_edit/id/<?php echo ($v["id"]); ?>">修改</a></td>
				<td><a href="/Shop/shop_del/id/<?php echo ($v["id"]); ?>" onclick="return confirm('确认删除吗？')">删除</a></td>
				
			</tr><?php endforeach; endif; ?>
			
		</table>
		
			<ul class="pagination" style="cursor: pointer;">
				<li><?php echo ($show); ?></li>
			</ul>
		
		</div>
	</body>
</html>