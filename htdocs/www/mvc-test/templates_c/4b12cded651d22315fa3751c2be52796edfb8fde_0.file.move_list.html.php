<?php
/* Smarty version 3.1.30, created on 2017-09-19 05:47:42
  from "/Applications/MAMP/htdocs/smarty/templates/move_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c0935e255ac5_57996901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b12cded651d22315fa3751c2be52796edfb8fde' => 
    array (
      0 => '/Applications/MAMP/htdocs/smarty/templates/move_list.html',
      1 => 1505792858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c0935e255ac5_57996901 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <title>move列表</title>
   <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

  	<ol class="breadcrumb">
		<li><a href="index_list.php">电影列表</a></li>
		<li><a href="http://localhost/smarty/move_form.php">增加电影</a></li>
	</ol>
	<table class="table table-hover">
		<tr>
			<th>图片</th>
			<th>影片名</th>
			<th>索引</th>
			<th>影片管理</th>	
			<!-- <th>分类:<select>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['li']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</select></th>	 -->		
		</tr>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
  			<tr>
				<td><img src="/timenet/upload/<?php echo $_smarty_tpl->tpl_vars['v']->value['cover'];?>
" style="width: 50px;height: 50px;"></td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
</td>
				<td>
					<a href="move_form.php"><span class="glyphicon glyphicon-edit"></span></a>
		  			<a onclick="return confirm('确定删除？')"  href="#"><span class="glyphicon glyphicon-remove"></span></a>
				</td>
			</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</table>

<!-- 
	<ul class="pagination">
		<li><a href="move_list.php?page=<?php echo '<?php ';?>echo $pre_page; <?php echo '?>';?>">&laquo;</a></li>



		<?php echo '<?php
		';?>for($i=1;$i<=$page_tot;$i++){
		<?php echo '?>';?>
		<li <?php echo '<?php ';?>echo $i==$page ? 'class="active"':''; <?php echo '?>';?>>
		<a href="move_list.php?page=<?php echo '<?php ';?>echo $i;<?php echo '?>';?>"><?php echo '<?php ';?>echo $i;<?php echo '?>';?></a></li>
		<?php echo '<?php ';?>} <?php echo '?>';?>



		<li><a href="move_list.php?page=<?php echo '<?php ';?>echo $next_page;<?php echo '?>';?>">&raquo;</a></li>
</ul> -->
  </body>
</html><?php }
}
