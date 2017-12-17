<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<h2><?php echo ($title); ?></h2>
		<?php echo ($arr["id"]); ?>.<?php echo ($arr["name"]); ?>.<?php echo ($arr["num"]); ?>
		<ul>
			<?php if(is_array($list)): foreach($list as $key=>$v): ?><li>
				<?php echo ($v["name"]); ?>
			</li><?php endforeach; endif; ?>
			<div><?php echo ($show); ?></div>
		</ul>
	</body>
</html>