<?php
$link = mysqli_connect('127.0.0.1','root','root','school');
	if(empty($_GET['page'])){
		$page = 1;
	}else{
		$page = $_GET['page'];
	};
	$size = 3;
	$start = ($page-1)*$size;
	
	//查询总条数
	$n = mysqli_query($link, "select count(*) as n from student");
	$n = mysqli_fetch_assoc($n);
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
//print_r($next_page);

$sql = "select * from student limit $start,$size";

$result = mysqli_query($link,$sql);
// mysqli_num_rows($result)($result)($result);
 // select count(*) as n from student 查询所有数据
$list = mysqli_fetch_all($result,MYSQLI_ASSOC);
//print_r($list['id']);
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
</head>
<body>
<ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">学生管理</a></li>
    <li class="active">学生列表</li>
</ol>
<table class="table table-hover" style="width: 70%;"> 
  <tr>
       <th>序号</th>
       <th>姓名</th>
       <th>年龄</th>
       <th>性别</th>
       <th>分数</th>
       <th>操作</th>
  </tr>
<?php
	$i=1;
foreach($list as $k=>$v){
//	print_r($v['id']);
?>

  <tr>
      <td><?php echo $i++ ?></td>
      <td><?php echo $v['name']; ?></td>
      <td><?php echo $v['age']; ?></td>
      <td><?php echo $v['sex']; ?></td>
      <td><?php echo $v['score']; ?></td>
      <td>
  <a href="student_edit.php?id=<?php echo $v['id']; ?>"<span class="glyphicon glyphicon-edit"></span></a>
  <a onclick="return confirm('确定删除吗？')" href="student_del.php?id=<?php echo $v['id']; ?>" ><span class="glyphicon glyphicon-remove"></span></a></td></tr>

<?php
}
?>
</table>

<ul class="pagination">
    <li><a href="student_list.php?page=<?php echo $pre_page ;?>">&laquo;</a></li>
   
    <?php 
    		for($i=1;$i<=$page_tot;$i++){
    	?>
    		<li <?php echo $page==$i?'class="active"':'';?> ><a href="student_list.php?page=<?php echo $i;?>"><?php echo $i;?></a></li>
    	<?php		
    		}
    	?>
   
    <li><a href="student_list.php?page=<?php echo $next_page;?>">&raquo;</a></li>
</ul>

</body>
</html>