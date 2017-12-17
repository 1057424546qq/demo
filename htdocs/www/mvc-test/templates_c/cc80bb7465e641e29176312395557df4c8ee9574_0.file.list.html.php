<?php
/* Smarty version 3.1.30, created on 2017-10-18 11:33:22
  from "/Applications/MAMP/htdocs/mvc/templates/list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e71fe2401688_19794487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc80bb7465e641e29176312395557df4c8ee9574' => 
    array (
      0 => '/Applications/MAMP/htdocs/mvc/templates/list.html',
      1 => 1508319197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e71fe2401688_19794487 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <title>goods列表</title>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
    	.oul>li{
    		float: left;
    		padding:20px;
    		margin-left: 20px;
    		list-style: none;
    	}
    	.oul>li>a{
    		text-decoration: none;
    	}
    	p{
    		margin:0
    	}    
        #page{    
            height:40px;    
            padding:20px 0px;    
        }    
        #page a{    
            display:block;    
            float:left;    
            margin-right:10px;    
            padding:2px 12px;    
            height:30px;    
            border:1px #cccccc solid;    
            background:#fff;    
            text-decoration:none;    
            color:#808080;    
            font-size:12px;    
            line-height:24px;    
        }    
        #page a:hover{    
            color:#077ee3;    
            border:1px #077ee3 solid;    
        }    
        #page a.cur{    
            border:none;    
            background:#077ee3;    
            color:#fff;    
        }    
        #page p{    
            float:left;    
            padding:2px 12px;    
            font-size:12px;    
            height:30px;    
            line-height:24px;    
            color:#bbb;    
            border:1px #ccc solid;    
            background:#fcfcfc;    
            margin-right:8px;    

        }    
        #page p.pageRemark{    
            border-style:none;    
            background:none;    
            margin-right:0px;    
            padding:4px 0px;    
            color:#666;    
        }    
        #page p.pageRemark b{    
            color:red;    
        }    
        #page p.pageEllipsis{    
            border-style:none;    
            background:none;    
            padding:4px 0px;    
            color:#808080;    
        }    
    </style>
  </head>
  <body>
<div class="container">
	<table class="table table-hover">
		<tr>
			<th>图片</th>
			<th>商品</th>
			<th>描述</th>				
			<th>链接</th>				
			<th>价格</th>				
			<th>操作</th>
			<th><a href="index.php?act=edit&id=-1"><span class="glyphicon glyphicon-plus"></span></a></th>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>	
  			<tr>
				<td><img src="img/<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
"  style="width: 50px;height: 50px;"></td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['des'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</td>
				<td>
					<a class="edit" href="index.php?act=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><span class="glyphicon glyphicon-edit"></span></a>
		  			<a onclick="return confirm('确定删除？')" href="index.php?act=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><span class="glyphicon glyphicon-remove"></span></a>

				</td>
			</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</table>
	<div><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
  </body>
  </html><?php }
}
