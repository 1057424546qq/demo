
<!DOCTYPE html>
<html>

<!-- Head -->
<head>

	<title>登录表单</title>

	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //Meta-Tags -->
		<link href="cjk/bootstrap.css" rel="stylesheet">
    		<script src="cjk/jquery.js"></script>
   		<script src="cjk/bootstrap.js"></script>
    		<script src="cjk/flexible.js"></script>
    		<link rel="stylesheet" type="text/css" href="css/houtai.css"/>
    		<link rel="stylesheet" href="http://at.alicdn.com/t/font_425735_avialfnmnh0ssjor.css" />
    <script src="js/houtai.js"></script>
	<!-- Style --> 
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		<style type="text/css">
		.nav1{
    			width: 100%;
    			height: 120px;
    			background-image: linear-gradient(#020c6d,#0058b2);
    			box-shadow: 0px 5px 10px rgba(50,50,50,0.5);
    			border: 1px solid #004eaa;
    			z-index: 1;
    			position: absolute;
    			top: 0;
    			color: white;
    			font-size: 16px;
    			line-height: 120px;
    		}
		.nav1_left{
    			display: inline-block;
    			margin-left: 100px;
    			position: absolute;
    			left: 100px;
    			line-height: 120px;
    		}
    		
		</style>


</head>
<!-- //Head -->

<!-- Body -->
<body style="background:url(img/jiguang.jpg) no-repeat center center ;">
	<div class="banner">
       		<!--背景层-->
       		<div class="color">
	       					<input type="color" name="" id="mycolor" value="#000000" /><br />
	       					<div class="color_btn"><input type="button" name="" id="f" value="取消" />
	       					<input type="button" name="" id="t" value="确定" /></div>
	       	</div>
       		<div class="bj">
       			<div class="title">
       				<div class="title_left">
       					<b>后台管理系统</b>
       					<span>后台管理</span>
       				</div>
       				<div class="title_right">
	       				<span>管理员：<i>请登录<b class="iconfont icon-jiantouxia"></b>
	       					<ul class="list-group user">
	       					<li class="list-group-item">个人信息</li>
	       					<li class="list-group-item">切换账户</li>
	       					<li class="list-group-item">退出</li>
	       				</ul>
	       				</i>
	       				
	       				</span>
	       				
	       				<span class="skin_box">
	       					<b class="iconfont icon-skin" title="换肤"></b>
	       				<ul class="list-group skin">
	       					<li class="list-group-item" value="1">黑色（默认）</li>
	       					<li class="list-group-item"value="2">蓝色</li>
	       					<li class="list-group-item"value="3">红色</li>
	       					<li class="list-group-item"value="4">紫色</li>
	       					<li class="list-group-item"value="5">自定义</li>
	       				</ul>
	       				
	       				</span>
       				</div>
       				
       			</div>
       			
       		</div>
       			
       		
       		<div class="banner_con">
       			
       		</div>
       </div>
        <!--左部-->
        <div class="left" >
        		
        </div>
        <!--内容区域-->
        <div class="container w3layouts agileits">

		<form action="shop_login_post.php" method="post">
			<div class="login w3layouts agileits">
			<h2>登 录</h2>
			
				<input type="text" name="user_name" placeholder="用户名" required="">
				<input type="password" name="user_pwd" placeholder="密码" required="">
			
			
			<div class="send-button w3layouts agileits" >
				<form >
					<input type="submit" value="登 录" style="margin-top:20px ;">
				</form>
			</div>
			
			
			<div class="clear"></div>
		</form>
	</div>

		<div class="clear"></div>

	</div>

	<div class="footer w3layouts agileits">
		<p>Copyright &copy; More Templates</p>
	</div>
        <!--底部-->
        <div class="foot bj">
       		<!--背景层-->
       		
        </div>
	

	

</body>
<!-- //Body -->

</html>