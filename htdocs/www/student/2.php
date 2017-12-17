<?php
	$arr[] = array("id"=>1,"title"=>"习近平主持会议");
	$arr[] = array("id"=>2,"title"=>"江欣欣");
	$arr[] = array("id"=>3,"title"=>"海峰");
	$arr[] = array("id"=>4,"title"=>"王肖飞");
//	print_r($arr);
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
	<ul>
		<?php 
			foreach($arr as $v){
		?>
				<li>
					<a target="_blank" href="3.php?id=<?php echo $v['id']?>"><?php echo $v['title']?></a>
				</li>
		<?php
			}	
		?>
		
	</ul>
</body>
</html>