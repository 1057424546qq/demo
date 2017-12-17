<?php
/* Smarty version 3.1.30, created on 2017-09-18 09:15:18
  from "/Applications/MAMP/htdocs/smarty/templates/1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bf7286d30663_26279434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1dbbd27b52cd0cdc6f8dad8bcfdf43e6f2c1693' => 
    array (
      0 => '/Applications/MAMP/htdocs/smarty/templates/1.html',
      1 => 1505718916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59bf7286d30663_26279434 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
	<h1><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</h1>




	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
">
	<p>姓名:<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['name'];?>
"></p>
	<p>性别:


		<input type="radio" name="sex" <?php if ($_smarty_tpl->tpl_vars['arr']->value['sex'] == 1) {?>checked<?php }?> value="1" >男
		<input type="radio" name="sex" <?php if ($_smarty_tpl->tpl_vars['arr']->value['sex'] == 2) {?>checked<?php }?> value="2">女
	</p>
	<p>年龄:<input type="text" name="age" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['age'];?>
"></p>
	<p>分类:<select name="pid" id="">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['city_list']->value, 'c');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
</option>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</select></p>



	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
		<li>
			<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
:<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 ¥<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
 
			<img src="/book/upload/<?php echo $_smarty_tpl->tpl_vars['v']->value['cover'];?>
" height="100px">
		</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ul>

</body>
</html><?php }
}
