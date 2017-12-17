<?php
/* Smarty version 3.1.30, created on 2017-09-19 05:40:33
  from "/Applications/MAMP/htdocs/smarty/move_form.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c091b17593a6_88619854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebb131988e4ca1139b0d68208253107cdc09178f' => 
    array (
      0 => '/Applications/MAMP/htdocs/smarty/move_form.php',
      1 => 1505792431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c091b17593a6_88619854 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php

';?>if(!empty($_GET['id'])){
	$db = mysqli_connect('127.0.0.1','root','root','timenet');
	$id = $_GET['id'];
	$sql = "select * from move where id='$id' limit 1";
	$result = mysqli_query($db,$sql);
	$arr = mysqli_fetch_assoc($result);
}	
<?php echo '?>';?>
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
    <li><a href="http://localhost/timenet/move_list.php">电影列表</a></li>
    <li class="active">增加电影</li>
</ol>
<div class="container">
<form method="post" enctype="multipart/form-data" action="move_form_post.php">
<!-- 增加电影 -->


<?php echo '<?php
';?>if(empty($arr)){
<?php echo '?>';?>
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


<!-- 修改电影 -->
<?php echo '<?php
';?>}else{
<?php echo '?>';?>

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

<?php echo '<?php
';?>}
<?php echo '?>';?>

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
