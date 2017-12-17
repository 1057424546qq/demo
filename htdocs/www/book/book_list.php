<?php
include('db.php');
$size = 2;
if(empty($_GET['page'])){
	$page = 1;
}else{
	$page = $_GET['page'];
}

$sql = "select count(*) as n from book";
$result = mysqli_query($db,$sql);
$n = mysqli_fetch_assoc($result);
$page_tot = ceil($n['n']/$size);
$pre_page = $page - 1;
if($pre_page<1){
	$pre_page = 1;
}
$next_page = $page + 1;
if($next_page>$page_tot){
	$next_page = $page_tot;
}

$start = ($page-1)*$size;
$sql = "select * from book limit $start,$size";
$result = mysqli_query($db,$sql);
$list = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/me.css">
  <style>
  .header{
  	width: 30px;
  }
  </style>
  <title>Document</title>
</head>
<body>
<ol class="breadcrumb">
    <li><a href="#">Home</a></li>
    <li><a href="#">图书管理</a></li>
    <li class="active">图书列表</li>
</ol>

<div class="container">
<table class="table table-hover table-striped">
  <tr>
       <th>封面</th>
       <th>图书</th>
       <th>价格</th>
       <th>库存</th>
       <th>作者</th>
       <th>出版社</th>
       <th>出版时间</th>
       <th>操作 
<a href="book_form.php" class="glyphicon glyphicon-plus"></a></th>
</tr>
<?php
foreach($list as $v){
?>
  <tr>
      <td><img class="header" src="<?php echo $v['cover']==''?'img/cover.jpg':'upload/'.$v['cover'];?>"></td>
      <td><?php echo $v['name']; ?></td>
      <td><?php echo $v['price']; ?></td>
      <td><?php echo $v['num']; ?></td>
      <td><?php echo $v['author']; ?></td>
      <td><?php echo $v['publish_name']; ?></td>
      <td><?php echo $v['publish_date']; ?></td>
      <td>
<a href="book_form.php?id=<?php echo $v['id'];?>"><span class="glyphicon glyphicon-edit"></span></a>

<a href="book_del.php?id=<?php echo $v['id'];?>" onclick="return confirm('你确定删除吗?')"><span class="glyphicon glyphicon-remove"></span></a>
  </td></tr>
<?php
}
?>

</table>

<ul class="pagination">
<li><a href="book_list.php?page=<?php echo $pre_page; ?>">&laquo;</a></li>

<?php
for($i=1;$i<=$page_tot;$i++){
?>
<li <?php echo $i==$page ? 'class="active"':''; ?>>
<a href="book_list.php?page=<?php echo $i;?>"><?php echo $i;?></a></li>
<?php } ?>



<li><a href="book_list.php?page=<?php echo $next_page;?>">&raquo;</a></li>
</ul>
</div>

</body>
</html>