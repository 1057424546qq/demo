<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户登录</title>
	<link rel="stylesheet" href="/Public/css/login.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>
<body>
	<div class="header">
		<div class="hd clearfix">
			<a href="" class="logo"><img src="https://x.autoimg.cn/account//images/logo.jpg" alt="" /></a>
			<a href="autohome.html" class="ghome">返回首页</a>
		</div>	
	</div>	
	<div class="banana">
		<div class="login-c">
			<a href="" class="single-link"></a>
			<div class="login-form">
				<div class="login-tab">
					<ul class="login-way clearfix">
						<li class="item active"><a href="javascript:;" class="login-tab-item">扫码登陆<i></i><span class="bottom-line"></span></a></li>
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
								<input type="text" value="用户名/手机/邮箱/门店会员卡号" id="user_name">
								<i class="icon username-icon"></i>
							</div>
						</div>
						<div class="form-box">
							<div class="input-box pwd">
								<input type="text" value="密码" id="password">
								<i class="icon password-icon"></i>
							</div>
						</div>
						<div class="login-help clearfix">
							<a href="" class="info-login"><i class="phone-icon"></i>短信验证码登录</a>
							<a href="" class="forget-pwd">忘记密码?</a>
						</div>
						<div class="tujiao"><a href="" class="submit">登 录</a></div>
					</div>
				</div>
				<div class="free-reg">
					<a href="">免费注册 有惊喜 ></a>
				</div>
				<div class="bind-login">
					<span class="title">使用以下账号登录</span>
					<div class="common clearfix">
						<a href="" class="v-qq"><i></i>QQ</a>
						<a href="" class="wx"><i></i>微信</a>
						<a href="" class="yfb"><i></i>易付宝</a>
						<a href="" class="hy">门店会员卡</a>
					</div>
				</div>
			</div>
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