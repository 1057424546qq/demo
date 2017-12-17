<?php
/* Smarty version 3.1.30, created on 2017-09-19 05:55:16
  from "/Applications/MAMP/htdocs/smarty/templates/move_form.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c09524827376_89165676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02e3df48b39318ad189cf2ad833a06d803a6f6e1' => 
    array (
      0 => '/Applications/MAMP/htdocs/smarty/templates/move_form.html',
      1 => 1505793279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c09524827376_89165676 (Smarty_Internal_Template $_smarty_tpl) {
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
  <title>Document</title>
  <style>
  #mydiv img{
  	width: 50px;
  }
  </style>
</head>
<body>


<ol class="breadcrumb">
    <li><a href="http://localhost/timenet/move_list.html">电影列表</a></li>
    <li class="active">增加电影</li>
</ol>
<div class="container">
<form method="post" enctype="multipart/form-data" action="move_form_post.php">
<!-- 增加电影 -->


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['link']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
if ($_smarty_tpl->tpl_vars['arr']->value == '') {?>
<table class="table table-hover table-striped">
  <tr><th>项目</th><th>值</th></tr>
  <tr><th>分类:</th><td><select name="" id="">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v');
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

  </select></td></tr>
  <tr><th>名字</th>
      <td><input type="text" name="title" value=""></td>
  </tr>
  
  <tr><th>封面</th>
      <td><input type="file" name="cover" class="photo"></td></th>
  </tr>
  <tr><td></td>
      <td>
          <button class="btn btn-success btn-sm">提交</button>
          <button class="btn btn-success btn-sm" onclick="history.go(-1)">返回</button>
      </td>
  </tr>
</table>
<?php }?>


<!-- 修改电影 -->
<?php if ($_smarty_tpl->tpl_vars['arr']->value != '') {?>
<input type="hidden" name="id" value="<?php echo '<?php ';?>echo $arr['id']; <?php echo '?>';?>" />
<input type="hidden" name="cover2" value="<?php echo '<?php ';?>echo $arr['cover']; <?php echo '?>';?>" />
<table class="table table-hover table-striped">
  <tr><th>项目</th><th>值</th></tr>
  <tr><th>分类:</th><td><select name="" id="">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v');
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

  </select></td></tr>

  <tr><th>名字</th>
      <td><input type="text" name="title" value="<?php echo '<?php ';?>echo $arr['title']; <?php echo '?>';?>"></td>
  </tr>
  <tr><th>分类</th>
      <td><input type="text" name="title" value=""></td>
  </tr>
  <tr><th>封面</th>
      <td>
        <div id="mydiv">
            <img src="<?php echo '<?php ';?>echo $arr['cover']==''? 'img/cover.jpg':'upload/'.$arr['cover']; <?php echo '?>';?>" class="cover" />
          </div>
        <input type="file" name="cover" class="cover">
      </td>
  </tr>
  <tr><td></td>
      <td>
          <button class="btn btn-success btn-sm">提交</button>
          <button class="btn btn-success btn-sm" onclick="history.go(-1)">返回</button>
      </td>
  </tr>
</table>
<?php }?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</form>
</div>


<?php echo '<script'; ?>
>

var photo=document.getElementsByClassName("photo");
console.log(photo);

var mydiv = document.getElementById("mydiv");

photo.onchange = function(){

        var reader = new FileReader();

        //文件读取完成后,事件触发[event]

        reader.onload = function(){

                var img_html = document.createElement('img');

                img_html.src = event.target.result; //图片的base64编码[string]

                console.log(event.target.result);

                mydiv.appendChild(img_html);

        }

        reader.readAsDataURL(this.files[0]); //读取文件对象[obj]
}
<?php echo '</script'; ?>
>



</body>
</html><?php }
}
