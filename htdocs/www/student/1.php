<?php
//	$arr = array("HTML","CSS","JS");
//$arr[] = "HTML";
//$arr[] = "CSS";
//$arr[] = "JSS";
//$arr = array(	
//		array("baidu"=>"http://www.baidu.com","taobao"=>"http://www.taobao.com","sougou"=>"http://www.sougou.com"),
//		array("baidu"=>"百度","taobao"=>"淘宝","sougou"=>"搜狗")
//	);
$arr[]= array("http://www.baidu.com","百度","百度一下，你就知道");
$arr[]=	array("http://www.taobao.com","淘宝","淘你喜欢");
$arr[]=	array("http://www.sougou.com","搜狗","搜狗一下你就知道");

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
	<select name="">
		
		<?php 
			foreach($arr as $v){
		?>
			<option value="<?php echo $v[2];?>"><?php echo $v[1];?></option>
		<?php		
			}	
		?>
	</select>
	<ul>
		
		<!--<li><a target="_blank" href="<?php echo $arr[0]['baidu']?>" > <?php echo $arr[1]['baidu']?></a></li>
		<li><a target="_blank" href="<?php echo $arr[0]['taobao']?>"> <?php echo $arr[1]['taobao']?></a></li>
		<li><a target="_blank" href="<?php echo $arr[0]['sougou']?>"> <?php echo $arr[1]['sougou']?></a></li>	-->
	</ul>
</body>
</html>