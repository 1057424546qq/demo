<?php
/* Smarty version 3.1.30, created on 2017-09-18 08:16:21
  from "/Applications/MAMP/htdocs/smarty/templates/2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bf64b5ef8bc5_54851576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c543dfd7519ca995ffa790ee30fae239681bb12c' => 
    array (
      0 => '/Applications/MAMP/htdocs/smarty/templates/2.html',
      1 => 1505715379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59bf64b5ef8bc5_54851576 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<table class="table">
		<tr>
			<th>编码</th>
			<th>书名</th>
			<th>价格</th>
			<th>封面</th>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</td>
			<td>
				<img src="
				<?php if (empty($_smarty_tpl->tpl_vars['v']->value['cover'])) {?>/book/img/cover.png<?php } else { ?>/book/upload/<?php echo $_smarty_tpl->tpl_vars['v']->value['cover'];
}?>" height="100px" width="100px">
			</td>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	
		</tr>
	</table>
</body>
</html><?php }
}
