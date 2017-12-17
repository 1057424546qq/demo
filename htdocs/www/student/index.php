<?php
	include ('include.php');
?>

<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <title>学生后台管理系统</title>
    <link href="cjk/bootstrap.css" rel="stylesheet">
    <script src="cjk/jquery.js"></script>
    <script src="cjk/bootstrap.js"></script>
    <script src="cjk/flexible.js"></script>
    <script type="text/javascript" src="js/houtai.js"></script>
    <link rel="stylesheet" type="text/css" href="cjk/base.css"/>
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
    		.nav2{
    			background-image: linear-gradient(#020c6d,#0058b2);
    			box-shadow: 0px 5px 10px rgba(50,50,50,0.5);
    			position: relative;
    			width: 100%;
    			height: 100px;
    			bottom: 0;
    		}
    		.content{
    			margin-top:70px ;
    			width: 100%;
    			height: 720px;
    			line-height: 720px;
    			background: url(img/beijing.jpeg) no-repeat;	
    		}
    		.nav1_left{
    			display: inline-block;
    			margin-left: 100px;
    		}
    		.nav1_right{
    			float: right;
    			margin-right: 10%;
    			position: relative;
    		}
    		.nav1_right ul a li {
    			list-style: none;
    			margin: 0px 10px;
    			float: left;
    			cursor: pointer;
    			color: white;
    		}
    		.nav1_right ul span{
    			float: left;
    		}
    		.nav1_right ul a li:hover{
    			color: #CCCCCC;
    		}
    		.con_box{
    			width: 80%;
    			margin: 0 auto;
    			height: 300px;
    			line-height: 300px;
    			position: relative;
    			top: 30%;
    			
    		}
    		.con_box ul li {
    			width: 20%;
    			height: 300px;
    			float: left;
    			position: relative;
    			text-align: center;
    			transition:all 0.5s;
    			cursor: pointer;
    		}
    		.con_box ul li img{
    			position: absolute;
    			left: 23%;
    			top: 20%;
    			width: 120px;
    			height: 120px;
    		}
    		.con_box ul li p{
    			font-size: 20px;
    			color: white;
    			height: 40px;
    			line-height: 40px;
    			text-align: center;
    			width: 100%;
    			position: absolute;
    			top: 200px;
    			letter-spacing: 8px
    		}
    		.con_box ul li:hover{
    			transform: scale(1.4);
    			transition:all 0.5s; 
    			z-index: 1;			
    		}
    		.time{
    			position: fixed;
    			top: 35px;
    			right: 100px;
			color: #fff;
    		}
    		
    </style>
  </head>
  <body>
  	
        <!--nav-->
        <div class="nav1">
        		<div class="nav1_left">
        			<span>你好！欢迎访问<img src="pink.png" alt="" style="width: 40%; "/>网站后台管理系统！</span>
        			<span class="time"></span>
        		</div>
        		<div class="nav1_right">
        			<ul>
        				<li class="denglu">您好！<a href="#" style="color: #fff;font-weight: 700;"><?php echo $_SESSION['admin']?></a></li>
        			</ul>
        		</div>
        </div>
        <!--denglu-->
        <div class="denglu">
        		
        </div>
        <div class="content">
        		<div class="con_box">
        			<ul>
        				<a href="/houtai.php"><li>
        					<img src="img/renyuan.png" alt="" />
        					<p>员工信息</p>
        				</li></a>
        				<li>
        					<img src="img/wu.png" alt="" />
        					<p>员工管理</p>
        				</li>
        				<li>
        					<img src="img/wangluo.png" alt="" />
        					<p>网络</p>
        				</li>
        				<li>
        					<img src="img/jishiben.png" alt="" />
        					<p>历史记录</p>
        				</li>
        				<li>
        					<img src="img/shezhi.png" alt="" />
        					<p>设置</p>
        				</li>
        			</ul>
        		</div>
        </div>
        
        <div class="nav2">	
        </div>
  </body>
</html>