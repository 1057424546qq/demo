<?php
/* Smarty version 3.1.30, created on 2017-10-18 06:03:49
  from "/Applications/MAMP/htdocs/mvc/login.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e6d2a5cb8389_39562653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c470e256ba4e29d2ac2df836a420d856568a6c2f' => 
    array (
      0 => '/Applications/MAMP/htdocs/mvc/login.php',
      1 => 1508299368,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e6d2a5cb8389_39562653 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
	<link rel="stylesheet" href="http://at.alicdn.com/t/font_394005_v6u917lx5744pldi.css">
	<style>
		*{
			margin:0;
			padding:0;
		}
		body{
			width: 100%;
			height:815px;
			background:url(9.jpeg) no-repeat;
			-webkit-background-size: 100% 100%;
			background-size: 100% 100%;
			position: relative;
			overflow-y: hidden;
		}
		.txt{
			padding:200px 0 0 30%;
		}
		.txt>h1{
			font-family: HanziPenSC-W5;
			text-shadow: 0px 0px 5px rgba(100,100,100,.5);
		}
		.box{
			width: 420px;
			height: 400px;
			border:2px solid rgba(250,250,250,.4);
			box-shadow: 0px 0px 30px rgba(200,200,200,.5);
			position: absolute;
			top:35%;
			left:35%;
		}
		.top{
			margin:20px 0 0 36px;
			font-weight: 700;
			font-size: 18px;
		}
		.fied{
			margin:20px 0 0 36px;
			position: relative;
		}
		.fied label{
			color: #606060;
			display: block;
			width: 40px;
			height: 40px;
			line-height: 40px;
			background: #55a3f0;
			text-align: center;
			position: absolute;
			left:1px;
			top:1px;
			outline: 0;

		}
		.iconfont{
			font-size: 22px;
			font-family: iconfont!important;
		}
		.inp{
			background-color: #caecf8;
			color:#9b9b9b;
			width: 292px;
			font-size: 14px;
			line-height: 18px;
			height: 18px;
			padding:11px 8px 11px 50px;
			border:1px solid #ddd;
			outline: 0;
			z-index: 999;
		}
		.two{
			margin-top: 32px;
		}
		.sub{
			margin:35px 0 0 36px;
		}
		.submit{
			width: 350px;
			height: 42px;
			line-height: 42px;
			background-color: #4188e7;
			border:none;
			font-size: 20px;
			color:rgba(250,250,250,.8);
			font-weight: 700;
			letter-spacing: 20px;
		}
		.foot{
			margin-top: 34px;
			float: right;
		}
		.foot>ul{
			list-style: none;
			margin-right: 22px;
		}
		.foot>ul>li{
			display: inline-block;
		}
		.foot>ul>li>a{
			text-decoration: none;
			color:#4793ec;
			margin:10px;
		}
	</style>
</head>
<body>
	<div class="txt"><h1>创意灯具</h1></div>
	<div class="box">
		<div class="top"><p>欢迎登录</p></div>
		 <form method="post" action="index.php?act=login_do.php">
		<div class="fied">
			<label for="inp1">
				<i class="iconfont icon-yonghu"></i>
			</label>
			<input type="text" id="inp1" class="inp" name="user_name"  onfocus="this.placeholder=''" onblur="this.placeholder='用户名'" placeholder='用户名'>
		</div>
		<div class="fied two">
			<label for="inp2">
				<i class="iconfont icon-suo"></i>
			</label>
			<input type="password" id="inp2" class="inp" name="user_pwd" onfocus="this.placeholder=''" onblur="this.placeholder='用户密码'" placeholder='用户密码'>
		</div>
		<div class="sub">
			<input type="submit" class="submit" value="登录"></button>
		</div>
		
		</form>
		<div class="foot">
			<ul>
				<li><a href="#">忘记密码</a></li>
				<li><a href="#">忘记会员名</a></li>
				<li><a href="">免费注册</a></li>
			</ul>
		</div>
	</div>
</body>
</html><?php }
}
