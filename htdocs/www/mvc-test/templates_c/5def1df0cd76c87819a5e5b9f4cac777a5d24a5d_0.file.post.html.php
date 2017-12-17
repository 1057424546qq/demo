<?php
/* Smarty version 3.1.30, created on 2017-10-18 09:33:37
  from "/Applications/MAMP/htdocs/mvc/templates/post.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e703d144c8f0_36869796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5def1df0cd76c87819a5e5b9f4cac777a5d24a5d' => 
    array (
      0 => '/Applications/MAMP/htdocs/mvc/templates/post.html',
      1 => 1508311366,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e703d144c8f0_36869796 (Smarty_Internal_Template $_smarty_tpl) {
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
          <input type="hidden" name="id">
          <table class="table table-hover table-striped">
              <tr><th>项目</th><th>值</th></tr>
              <tr><th>商品</th><td><input type="text" name="title" value=""></td></tr>
              <tr><th>描述</th><td><textarea name="des"></textarea>{}</td></tr>
              <tr><th>链接</th><td><input type="url" name="url" value=""></td></tr>
              <tr><th>价格</th><td><input type="text" name="price" value=""></td></tr>
              <tr><th>排序</th><td><input type="text" name="ord" value=""></td></tr>
              <tr><th>封面</th>
                <td>
                  <div id="mydiv1">
                    <img src="" class="header">
                  </div>
                  <input type="file" name="pic" id="myimg1">
                </td>
              </tr>
            <tr><td></td><td>
            <input type="submit" value="提交" class="btn btn-success btn-sm" />
            <input type="button" value="返回" class="btn btn-success btn-sm" @click="back">
            </td></tr>
          </table>

        </form>
      </div>

</body>
</html><?php }
}
