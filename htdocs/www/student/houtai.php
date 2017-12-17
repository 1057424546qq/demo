<?php
	include('include.php');	
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>学生管理系统后台</title>
  <script type="text/javascript" src="https://cdn.bootcss.com/Chart.js/2.6.0/Chart.js"></script>
</head>
	<frameset rows="14%,*" frameborder="0" framespacing="0" cols="*">
		<frame src="banner.html" noresize="noresize" name="topFrame" scrolling="no"></frame>
		<frameset cols="15%,*">
			<frame src="asider.html" noresize="noresize" name="leftFrame"></frame>
			<frame src="http://localhost/student_list.php" noresize="noresize" name="rightFrame"></frame>
		</frameset>
	</frameset>
</html>