<?php
	
	include('validate.php');
	$link = mysqli_connect('127.0.0.1','root','root','shop');
	$search = '';
	if(!empty($_GET['pid'])){
		$pid = $_GET['pid'];
		$search = "&sort_id=$pid";
		$where = " where  sort_id='$pid' ";
		$p = $pid;
		$sql2 = "select * from search as n where id='$p'";
		$result2 = mysqli_query($link, $sql2);
		$list2 = mysqli_fetch_assoc($result2);
	}else{
		$pid = '';
		$where = '';
	};
	

	
	if(empty($_GET['page'])){
		$page = 1;
	}else{
		$page = $_GET['page'];
	}
	
	$size = 7;
	$start = ($page-1)*$size;
	
	$n = mysqli_query($link, "select count(*) as n from shop $where ");
	$n = mysqli_fetch_assoc($n);
	$n = $n['n'];
	$page_tot = ceil($n/$size);
	
	$pre_page = $page-1;
	if($pre_page<1){
		$pre_page=1;
	}
	$next_page = $page+1;
	if($next_page>$page_tot){
		$next_page=$page_tot;
	}
	
	$sql = "select * from shop $where limit  $start,$size ";
	$list = mylist($link, $sql);
	
	$sql1 = "select * from search";
	$list1 = mylist($link, $sql1);

//	print_r($list2);
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="stylesheet" href="../../cjk/bootstrap.css">
	<link rel="stylesheet" href="http://at.alicdn.com/t/font_425735_5jn1oxur4ab2csor.css">
  	<script src="../../cjk/jquery.js"></script>
  	<script src="../../cjk/bootstrap.js"></script>
  <!--<link rel="stylesheet" type="text/css" href="me.css">-->
	<title>Document</title>
	
</head>
<body>
	<style type="text/css">
		.shop_bn{
				width: 100%;
				background:url(../img/创意灯首页_03.png)no-repeat left center ;
				background-color:#444444 ;
				height: 110px;
			}
			.user{
				float: right;
				color: white;
				font-size: 18px;
				cursor: pointer;
				margin-top: 80px;
			}
			.user a {
				color: #FFFFFF;
			}
	</style>
	<div style="background: #444444;">
		<div class="container">
			<div class="shop_bn">
				
				<div class="user">您好！<?php echo $_SESSION['admin']?> 
					<a href="shop_quit.php">退出</a>
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="container" style="margin-top:20px ; font-size:18px ;">
        
		<!-- 下拉框-->
		<div class="dropdown" style="float: left;margin-bottom:20px ;">
  			<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <?php
    if(!empty($p)){
    		echo $list2['name'];
    }else{
    		echo "请选择分类";
    } 
    
    ?>
    		<span class="caret"></span>
  			</button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <?php 
    	foreach($list1 as $v){
    	?>
    	<li><a href="shop_list.php?pid=<?php echo $v['id']?>"><?php echo $v['name']?></a></li>
    	<?php	
    	}
    	?>
    <li role="separator" class="divider"></li>
    <li><a href="shop_list.php">全部显示</a></li>
  </ul>
</div>
		<div class="btn-group" role="group" aria-label="..." style="float: right;margin-bottom:20px ;">
  			<a href="javascript:void(0)"><button type="button" class="btn btn-default">添加商品</button></a>
		</div>	
	<table class="table table-hover" style="width: 100%;">
		<tr>
	       <th>序号</th>
	       <th>标题</th>
	       <th>副标题</th>
	       <th style="max-width: 300px;">链接</th>
	       <th>素材图</th>
	       <th>单价</th>
	       <th>操作</th>
	       
	  </tr>
	
<?php 
	$p = 0;
	foreach($list as $v){
		$p++;
?>
  <tr>
        <td><?php echo $p?></td>
        
        <td><?php echo $v['title']?></td>
        <td style="color: #666666;"><?php echo $v['des']?></td>
        <td><a href="<?php echo $v['url']?>">查看</a></td>
        <td><img style="height: 50px;text-align: center; " src="img/<?php echo $v['pic']?>" alt=""/></td>
        <td><?php echo $v['price']?></td>
		 <td> 
		 	<a href="shop_revise.php?id=<?php echo $v['id']; ?>&pid=<?php echo $v['sort_id'];?>"<span class="iconfont icon-xiugai"></span></a>
	 
		  	<a onclick="return confirm('确定删除吗？')" href="shop_del.php?id=<?php echo $v['id']; ?>&img=<?php echo $v['pic']?>" ><span class="iconfont icon-shanchu"></span></a>
  	   </td>
  </tr>
<?php	
}	
?> 
	<!--<tr><td><a href="examination_add.php">添加图书</a></td></tr>-->
</table>
	<ul class="pagination" style="position: absolute; bottom: 50px;">
    <li><a href="shop_list.php?page=<?php echo $pre_page ;?><?php echo $search?>">&laquo;</a></li>
   
    
    		<?php 
    		for($i=1;$i<=$page_tot;$i++){
    	?>
    		<li <?php echo $page==$i?'class="active"':'';?> ><a href="shop_list.php?page=<?php echo $i;?><?php echo $search?>"><?php echo $i;?></a></li>
    	<?php		
    		}
    	?>
   
   
    <li><a href="shop_list.php?page=<?php echo $next_page;?><?php echo $search?>">&raquo;</a></li>
</ul>
</div>
	</body>
</html>