<?php
//	print_r($_SERVER);
	$link = mysqli_connect('127.0.0.1', 'root', 'root', 'test');
	
	if(empty($_GET['page'])){
		$page = 1;
	}else{
		$page = $_GET['page'];
	};
	$size = 3;
	$start = ($page-1)*$size;
	
	$na = '';
	$where = '';
	$search = '';
	$price1 = '';
	$price2 = '';
	$change = 0;
	
	if(!empty($_GET['na'])){
		$na = $_GET['na'];
		$where = " where name like '%$na%' ";
		$search ="&na=$na";
	};
	
	if(isset($_GET['price1'])){
		$price1 = intval($_GET['price1']);
		if($price1!=0){
			if(empty($where)){
			$where = " where price>=$price1 ";
		}else{
			$where .= " and price>=$price1 ";
		}
		}else{
			$price1 = '';
		$search .="&price=$price1";
	}
			
	};// SELECT * FROM book WHERE name LIKE '%六%' AND price>='0' and price<='30' ORDER BY price DESC
	if(isset($_GET['price2'])){
		$price2 = $_GET['price2'];
		if($price2!=''){
			if(empty($where)){
			$where = " where price<=$price2 ";
		}else{
			$where .= " and price<=$price2 ";
		}
		$search .="&price=$price2";
		}
		
			
	};
	$order = '';
	if(isset($_GET['change'])){
		$change = $_GET['change'];
		$order = " order by ";
		switch($change){
			case 1:$order.=" price desc ";break;
			case 2:$order.=" price asc ";break;
			case 3:$order.=" publish_date desc ";break;
			case 4:$order.=" num desc ";break;
		}
		$search .="&change=$change";
	};
	//查询总条数
	$n = mysqli_query($link, "select count(*) as n from book $where" );
	$n = mysqli_fetch_assoc($n);
//	print_r($n);
	$n = $n['n'];
	//定义总页数
	$page_tot = ceil($n/$size);
	//print_r($page_tot);
	//定义上一页下一页
	$pre_page = $page-1;
	if($pre_page<1){
		$pre_page=1;
	}
	$next_page = $page+1;
	if($next_page>$page_tot){
		$next_page=$page_tot;
	}
	
	$query = "select * from book $where $order limit $start,$size";
	$result = mysqli_query($link, $query);
//	print_r($result);
	$list = mysqli_fetch_all($result,MYSQLI_ASSOC);
	
	
	print_r($search);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--<link rel="stylesheet" type="text/css" href="me.css">-->
  <title>Document</title>
  <style type="text/css">
  		input{
  			outline: none;
  		};
  </style>
</head>
<body >
	<ol class="breadcrumb">
    <li><a href="#">首页</a></li>
    <li><a href="#">图书管理</a></li>
    <li class="active">图书列表</li>
	</ol>
	<div class="container">	
		<form action="examination.php" style="margin-bottom: 10px;">
			图书名称：<input type="text" id="na" name="na" value="<?php echo $na ?>"  />
			价格区间：<input type="text" id="price1" name="price1" value="<?php echo $price1 ?>" style="width: 70px;"/>&nbsp;~&nbsp;
			<input type="text" name="price2" id="price2" value="<?php echo $price2 ?>" style="width: 70px;"/>
			排序：
			<select name="change" id="change">
				<option value="1" <?php echo $change==1?'selected':'';?> >价格最高</option>
				<option value="2" <?php echo $change==2?'selected':'';?>  >价格最低</option>
				<option value="3" <?php echo $change==3?'selected':'';?> >出版时间</option>
				<option value="4" <?php echo $change==4?'selected':'';?>  >库存排序</option>
			</select>
			<input type="submit"  value="搜索"/>
			<input type="button"  value="清空" onclick="location.replace('examination.php')"/>
		</form>
		
	</div>

	<table class="table table-hover" style="width: 70%;"> 
	  <tr>
	       <th>封面</th>
	       <th>书名</th>
	       <th>单价（元）</th>
	       <th>库存（本）</th>
	       <th>作者</th>
	       <th>出版社</th>
	       <th>日期</th>
	       <th>操作</th>
	       
	  </tr>
	
<?php 
	foreach($list as $k => $v){
?>
  <tr>
        <!--<td><?php echo $v['id']?></td>-->
        <td><img style="width: 50px; " src="img/<?php echo $v['cover']?>" alt=""/></td>
        <td><?php echo $v['name']?></td>
        <td>￥<?php echo $v['price']?></td>
        <td><?php echo $v['num']?></td>
        <td><?php echo $v['author']?></td>
        <td><?php echo $v['publish_name']?></td>
        <td><?php echo $v['publish_date']?></td>
		<td>
		  <a href="examination_add.php?id=<?php echo $v['id']; ?>"<span class="glyphicon glyphicon-edit"></span></a>
		  <a onclick="return confirm('确定删除吗？')" href="examination_del.php?id=<?php echo $v['id']; ?>" ><span class="glyphicon glyphicon-remove"></span></a>
  	   </td>
  </tr>
<?php	
}	
?> 
	<tr><td><a href="examination_add.php">添加图书</a></td></tr>
</table>

<ul class="pagination">
    <li><a href="examination.php?page=<?php echo $pre_page ;?><?php echo $search ?>">&laquo;</a></li>
   
    
    		<?php 
    		for($i=1;$i<=$page_tot;$i++){
    	?>
    		<li <?php echo $page==$i?'class="active"':'';?> ><a href="examination.php?page=<?php echo $i;?><?php echo $search ?>"><?php echo $i;?></a></li>
    	<?php		
    		}
    	?>
   
   
    <li><a href="examination.php?page=<?php echo $next_page;?><?php echo $search ?>">&raquo;</a></li>
</ul>
	<script type="text/javascript">
		var clear = document.getElementById('clear');
		var na = document.getElementById('na');
		var price1 = document.getElementById('price1');
		var price2 = document.getElementById('price2');
		var change = document.getElementById('change');
		
		clear.onclick = function(){
			na.value='';
			price1.value='';
			price2.value='';
			change.selectedIndex = 0;
		}
		
	</script>
</body>
</html>