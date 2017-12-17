<?php

$title = "金砖国家领导人第九次会晤举行";
$send_date = "2017年09月04日";
$content = "　　新华社厦门9月4日电（记者李忠发、许雪毅）金砖国家领导人第九次会晤4日在厦门国际会议中心举行。国家主席习近平主持会晤。南非总统祖马、巴西总统特梅尔、俄罗斯总统普京、印度总理莫迪出席。五国领导人围绕“深化金砖伙伴关系，开辟更加光明未来”的主题，就当前国际形势、全球经济治理、金砖合作、国际和地区热点问题等深入交换看法，回顾金砖合作10年历程，重申开放包容、合作共赢的金砖精神，达成一系列共识，为金砖合作未来发展规划了蓝图、指明了方向。";
$color = '#b2b2b2';
// $arr = array("title"=>"$title","send_date"=>"$send_date","content"=>"$content");
 $arr['title'] = "$title";
 $arr['send_date'] = "时间：$send_date";
 $arr['content'] = "$content";
 $arr['bgcolor'] = "$color";

// print_r($arr);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style type="text/css">
    #content{
        width:500px;
        border: 1px solid #ccc;
        
    }
  </style>
</head>
<body>
<div id="content">
	
    
    		<h1><?php echo $arr['title']?></h1>
		<span><?php echo $arr['send_date']?></span>
		<div><?php echo $arr['content']?></div>
   		
   		<p>标题：<input type="text" value="<?php echo $arr['title']?>"/></p>
   		<p>时间：<input type="text" value="<?php echo $arr['send_date']?>"/></p>
   		<div>内容：<textarea rows="30" cols="40" style="overflow: hidden;resize: none;"><?php echo $arr['content']?>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam alias odio quod inventore aliquid ipsam pariatur rem error amet sit debitis eveniet ipsum quasi. Eius dolorem obcaecati doloremque maxime distinctio.</textarea></div>
</div>
	<script type="text/javascript">
		var con = document.getElementById('content');
		con.onclick = function(){
			this.style.backgroundColor = '<?php echo $arr['bgcolor'] ?>';
		}
	</script>
</body>
</html>