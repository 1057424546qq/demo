<?php
	$link = mysqli_connect('127.0.0.1', 'root', 'root', 'shop');
	$result = mysqli_query($link, "select * from shop where sort_id=1 limit 1; ");
	$result1 = mysqli_query($link, "select * from shop where sort_id=2 ; ");
	$result2 = mysqli_query($link, "select * from shop where sort_id=3 ; ");
	$result3 = mysqli_query($link, "select * from shop where sort_id=4 ; ");
	$list = mysqli_fetch_assoc($result);
	$list1 = mysqli_fetch_all($result1,MYSQLI_ASSOC);
	$list2 = mysqli_fetch_all($result2,MYSQLI_ASSOC);
	$list3 = mysqli_fetch_all($result3,MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <title></title>
    <link href="cjk/bootstrap.css" rel="stylesheet">
    <script src="cjk/jquery.js"></script>
    <script src="cjk/bootstrap.js"></script>
    <script src="cjk/flexible.js"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
    
  </head>
  <body>
        <div class="shop_bn"></div>
        <div class="shop_nav">
        	<div class="shop_nav_box">
        		<ul>
        			<li class="nav_frist">
        				<a href="">首页</a>
        			</li>
        			<li>
        				<a href="">所有商品</a>
        			</li>
        			<li>
        				<a href="">新品上架</a>
        			</li>
        			<li>
        				<a href="">艺术台灯</a>
        			</li>
        		</ul>
        	</div>
        	
        </div>
        <div class="banner">
        		
        		<span><?php echo $list['title']?></span>
        		<p><?php echo $list['des']?></p>
        		
	        	<div class="banner_img">
	        		<a href="<?php echo $list['url']?>"><img src="/shop/admin/img/<?php echo $list['pic']?>" alt=""  /></a>
	        	</div>
        </div>
     <div class="content clearfix">
        	<div class="content_box">
        		<!--show-->
        		<div class="show">
        			<?php 
        				foreach($list1 as $v){
        			?>
        				<li>
        				<div><span><?php echo $v['title']?></span><p><?php echo $v['des']?></p></div>
        				
        				<img src="/shop/admin/img/<?php echo $v['pic']?>" alt="" />
        				</li>
        			<?php		
        				}	
        			?>
        			
        		</div>
        		
        		<!--ad-->
        		<div class="ad_pre">
        			<?php 
        				foreach ($list2 as $k => $v) {
						$arr = explode("\n", $v['des']);
        				if($k%2==1){
        			?>
        				<div class="ad ad2">
		        			<div class="ad_font">
		        				<span><?php echo $v['title']?></span>
		        				
		        				<?php
		        				$i = 0;
		        					for($i=0;$i<count($arr);$i++){
		        				?>
		        					<p><i class="round"></i><?php echo $arr[$i]?></p>
		        				<?php		
		        					}
		        				?>
		        				<a target="_blank" href="<?php echo $v['url']?>"><b>点击进入</b></a>
		        			</div>
		        			<img src="/shop/admin/img/<?php echo $v['pic']?>"/>
        			</div>
        				
        			<?php
        				}else{
        			?>	
        				<div class="ad ad1">
	        			<div class="ad_font">
	        				<span><?php echo $v['title']?></span>
	        				<?php
	        				$i = 0;
	        					for($i=0;$i<count($arr);$i++){
	        				?>
	        					<p><i class="round"></i><?php echo $arr[$i]?></p>
	        				<?php		
	        					}
	        				?>
	        				
	        				<a target="_blank" href="<?php echo $v['url']?>"><b>点击进入</b></a>
	        			</div>
	        			<img src="/shop/admin/img/<?php echo $v['pic']?>"/>
        			</div>
        			<?php
						}		
        				}
        			?>

        	
        		</div>
        
        		<!--热卖-->
        		<div class="hot_shop">
        			<div class="hot_title">
        				<p>热卖单品</p>
        			</div>
        			<div class="hot_content">
        				<ul>
        					<?php 
        						foreach($list3 as $v){
        					?>
	        					<li>
	        						<div class="beijing"></div>
	        						<a href="<?php echo $v['url']?>">
	        							<img style="height: 260px;" src="/shop/admin/img/<?php echo $v['pic']?>" alt="" />
	        							<div class="hot_font">
	        								<p class="tit"><?php echo $v['title']?></p>
	        								<p class="grey_tit"><?php echo $v['des']?></p>
	        								<p class="price_tit"><?php echo $v['price']?></p>
	        							</div>
	        						</a>
	        					</li>
        					<?php		
        						}	
        					?>

        				</ul>
        				
        			</div>
        		</div>
        	</div>
     </div>
        <!---->
  
        <script src="js/index.js"></script>
  </body>
</html>