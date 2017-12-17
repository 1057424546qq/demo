
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

	<!-- Style --> <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
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
<body>
	<div class="nav1">
        		<div class="nav1_left">
        			<span><img src="../pink.png" alt="" style="width: 75%; "/>网站后台管理系统！</span>
        		</div>
    </div>
	<h1></h1><br />
	<h1></h1>

	<div class="container w3layouts agileits">

		<form action="http://localhost/dl/login.php" method="post">
			<div class="login w3layouts agileits">
			<h2>登 录</h2>
			
				<input type="text" name="user_name" placeholder="用户名" required="">
				<input type="password" name="user_pwd" placeholder="密码" required="">
			
			<ul class="tick w3layouts agileits">
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>记住我</label>
				</li>
			</ul>
			<div class="send-button w3layouts agileits">
				<form >
					<input type="submit" value="登 录">
				</form>
			</div>
			<a href="#">记住密码?</a>
			<div class="social-icons w3layouts agileits">
				<p>- 其他方式登录 -</p>
				<ul>
					<li class="qq"><a href="#">
					<span class="icons w3layouts agileits"></span>
					<span class="text w3layouts agileits">QQ</span></a></li>
					<li class="weixin w3ls"><a href="#">
					<span class="icons w3layouts"></span>
					<span class="text w3layouts agileits">微信</span></a></li>
					<li class="weibo aits"><a href="#">
					<span class="icons agileits"></span>
					<span class="text w3layouts agileits">微博</span></a></li>
					<div class="clear"> </div>
				</ul>
			</div>
			<div class="clear"></div>
		</form>
	</div>

		<div class="clear"></div>

	</div>

	<div class="footer w3layouts agileits">
		<p>Copyright &copy; More Templates</p>
	</div>

</body>
<!-- //Body -->

</html>