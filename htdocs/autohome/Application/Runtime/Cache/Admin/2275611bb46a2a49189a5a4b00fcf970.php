<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户登录</title>
	<link rel="icon" type="image/x-icon" href="/Public/Img/logo.ico" />
	<link rel="stylesheet" href="/Public/css/login.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
	<div class="header">
		<div class="hd clearfix">
			<span class="logo-txt">(后台版)</span>
			<a href="" class="logo"><img src="https://x.autoimg.cn/account//images/logo.jpg" alt="" /></a>
			<!--<a href="autohome.html" class="ghome">返回首页</a>-->
		</div>	
	</div>	
	<div class="banana">
		<div class="login-c">
			<a href="" class="single-link"></a>
			<form action="<?php echo U(login_post);?>" method="post" enctype="multipart/form-data">
				<div class="login-form">
				<div class="login-tab">
					<ul class="login-way clearfix">
						<li class="item"><a href="javascript:;" class="login-tab-item">帐号登录<i></i><span class="bottom-line"></span></a></li>
					</ul>
				</div>
				<div class="scan-login show">
					<div class="scan-box clearfix">
						<div class="qrcode">
							<img src="/Public/Img/qrLoginUuidGenerate.png" alt="">
						</div>
						<div class="phone-scan"></div>
					</div>
					<div class="scan-error">
						<div class="qrocde-exce">
							<div class="mask"></div>
							<p class="exception">二维码已失效</p>
							<a href="javascript:;" class="btn">点击刷新</a>
						</div>
					</div>
					<div class="success">
						<i></i>
						<p class="suc-txt">扫描成功</p>
						<p class="reset">请勿刷新页面，按手机提示操作！</p>
					</div>
					<p class="open-app">
						<i></i>打开
						<a href="javascript:;">汽车之家APP</a>扫码登录
					</p>
				</div>
				<div class="pc-login show non">
					<div class="user-login">
						<div class="form-box">
							<div class="input-box">
								<input type="text" placeholder="用户名/手机/邮箱/门店会员卡号" name="user" id="user_name">
								<i class="icon username-icon"></i>
							</div>
						</div>
						<div class="form-box">
							<div class="input-box pwd">
								<input type="text" placeholder="密码" name="pwd" id="password">
								<i class="icon password-icon"></i>
							</div>
						</div>
						<div class="form-box">
							<div class="input-box yanz">
								<input type="text" placeholder="请输入验证码" name="code" id="yanz">
								<i class="icon password-icon"></i>
								
							</div>
							<img onclick="this.src=this.src+'?'+Math.random()" src="<?php echo U('Admin/verify',array('id'=>'login','rand'=>time()));?>" style="margin: 0px 0px 0px 10px; width: 150px;float: left;" title="看不清?点击刷新">
							
								
							<!--<img src="<?php echo U('Admin/verify',array('id'=>'login','rand'=>time()));?>" data-origsrc="<?php echo U('Index/verify',array('id'=>'login'));?>" title="看不清?点击刷新" onclick='reload_code(this)' style="margin-left: 10px; width: 150px;float: left;"/>-->
						</div>
						<span class="e"></span><input type="hidden" class="ee e" name="ee"></input>
						<div class="login-help clearfix">
							<a href="" class="info-login"><i class="phone-icon"></i>短信验证码登录</a>
							<a href="" class="forget-pwd">忘记密码?</a>
						</div>
						<div class="tujiao"><a href=""><input type="submit"class="submit" value="登 录"/></a></div>
					</div>
				</div>
				
			</div>
		
				
			</form>
			</div>
	</div>
	
	<div  class="copyright">
		<div class="copyright-content"> 
			<span>© 2004-2017 www.autohome.com.cn All Rights Reserved. 汽车之家 版权所有 ·此页面有广告</span> 
		</div>
	</div>
	
	<script src="/Public/js/login.js"></script>	
</body>
</html>