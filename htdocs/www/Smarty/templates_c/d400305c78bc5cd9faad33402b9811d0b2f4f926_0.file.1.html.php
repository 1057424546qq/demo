<?php
/* Smarty version 3.1.30, created on 2017-09-18 14:12:28
  from "/Applications/MAMP/htdocs/Smarty/templates/1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bf63cc499a66_99843986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd400305c78bc5cd9faad33402b9811d0b2f4f926' => 
    array (
      0 => '/Applications/MAMP/htdocs/Smarty/templates/1.html',
      1 => 1505715142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59bf63cc499a66_99843986 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	</head>
	<body>
		<h1><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</h1>
		<p>id：<input type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
" /></p>
		<p>姓名：<input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['name'];?>
" /></p>
		<p>性别:
			男<input type="radio" name="sex" <?php if ($_smarty_tpl->tpl_vars['arr']->value['sex'] == 1) {?>checked<?php }?> value="1" />
			女<input type="radio" name="sex" <?php if ($_smarty_tpl->tpl_vars['arr']->value['sex'] == 2) {?>checked<?php }?> value="2" />
		</p>
		<p>年龄：<input type="text" name="age" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['age'];?>
" /></p>
		
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
			<li><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
:<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 ￥<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
 <img src="<?php if ($_smarty_tpl->tpl_vars['v']->value['cover'] == '') {?>/book/upload/<?php echo $_smarty_tpl->tpl_vars['v']->value['cover'];
} else { ?>/book/img/cover.jpg<?php }?>"  style="width: 100px;" /> </li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</ul>
		
		
	</body>
</html>
<?php }
}
