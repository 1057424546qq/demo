<?php
/* Smarty version 3.1.30, created on 2017-10-18 15:18:02
  from "/Applications/MAMP/htdocs/mvc/templates/add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e7548a460f39_51256273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'beb0f7259af3b2cd18c5994549236f0dff822661' => 
    array (
      0 => '/Applications/MAMP/htdocs/mvc/templates/add.html',
      1 => 1508332654,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e7548a460f39_51256273 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
  <title>Document</title>
  <style>
  #mydiv img{
  	width: 50px;
  }
  </style>
</head>
<body>
<div id="form-div">
        <form id="myForm" method="post" enctype="multipart/form-data" action="index.php?act=upload">
          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
          <table class="table table-hover table-striped">
              <tr><th>项目</th><th>值</th></tr>
              <tr><th>商品</th><td><input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['title'];?>
"></td></tr>
              <tr><th>描述</th><td><textarea name="des"><?php echo $_smarty_tpl->tpl_vars['list']->value['des'];?>
</textarea></td></tr>
              <tr><th>链接</th><td><input type="url" name="url" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"></td></tr>
              <tr><th>价格</th><td><input type="text" name="price" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['price'];?>
"></td></tr>
              <tr><th>排序</th><td><input type="text" name="ord" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['ord'];?>
"></td></tr>
              <tr><th>封面</th>
                <td>
                  <div id="mydiv1">
                    <img src="" class="header">
                  </div>
                  <input type="file" name="pic" id="myimg1" value="<?php echo $_smarty_tpl->tpl_vars['list']->value['pic'];?>
">
                </td>
              </tr>
            <tr><td></td><td>
            <input type="submit" value="提交" class="btn btn-success btn-sm" />
            <input type="button" value="返回" class="btn btn-success btn-sm" onclick="history.go(-1)">
            </td></tr>
          </table>

        </form>
      </div>

</body>
</html><?php }
}
