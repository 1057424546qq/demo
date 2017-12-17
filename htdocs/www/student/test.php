<?php
	$arr = array('html','css','js','php');
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
			for($i=0;$i<count($arr);$i++){
				print "<li>".$arr[$i]."</li>";
			}	
		?>
	</ul>
</body>
</html>