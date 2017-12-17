
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<form action="" method="post">
			上传文件：<input type="file" name="upfile" /><br />
			<input type="submit"  value="上传" />
		</form>
		<?php
		print_r($_FILES['upfile']);
		?>
	</body>
</html>
