<?php
/* Smarty version 3.1.30, created on 2017-09-19 08:43:26
  from "/Applications/MAMP/htdocs/smarty/templates/timenet.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c0bc8eecbbb0_83896271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd21b5d8da500d09369470555547e2da7b0fd91e' => 
    array (
      0 => '/Applications/MAMP/htdocs/smarty/templates/timenet.html',
      1 => 1505803403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c0bc8eecbbb0_83896271 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>timenet</title>
	<link rel="stylesheet" href="/smarty/templates/timenet.css">
</head>
<body>
	<!-- 顶部导航 -->
	<div class="top_header">
		<div class="header">

			<div class="header_left">
				<ul class="header_nav">
					<li><a href="#">首页</a></li>
					<li><a href="#">购票</a></li>
					<li><a href="#">正版商城</a></li>
					<li><a href="#">新闻</a></li>
					<li><a href="#">直播<b class="new"></b></a></li>
					<li><a href="#" style="color:#fff;font-weight: 700;">发现<i class="delta"></i></a></li>
					<li><a href="#">社区</a></li>
					<li><a href="#">会员</a></li>
				</ul>
			</div>

			<div class="header_center">
				<a href="#" class="timenet_logo"></a>
			</div>

			<div class="header_car">
				<i class="car"></i>
				<div class="goods">
					<p class="tips">您的购物车还是空的，赶紧选购哦。</p>
				</div>
			</div>

			<div class="head_tool">
				<i class="line"></i>
				<div class="loginvsenroll">
					<a href="#" class="login">登录</a>
					<span></span>
					<a href="#" class="enroll">注册</a>
				</div>
			</div>

			<div class="head_tool show">
				<i class="line"></i>
				<a href="#" class="lode">
					<i class="delta del"></i>
					<i class="phoneico"></i>
					<span class="downlode">App下载</span>
					<b class="angle"></b>
				</a>
				<div class="code">
					<a href="#"><img src="http://img31.mtime.cn/mg/2016/08/24/134023.34374055.jpg" alt="扫描二维码下载App"></a>
				</div>
			</div>
			
			<div class="head_tool">
				<a class="mangnifier">
					<i class="mfico"></i>
				</a>
				<div class="mfico_inp" style="display: none;">
					<div class="topsearch">
						<div class="search_sha">
							<div class="search_selcet">
								<b style="margin-right: 6px;" class="alc">全部</b>
								<i></i>
								<em>|</em>
							</div>
							<div class="search_show">
								<ul class="mm">
									<li class="it_m ahl">全部</li>
									<li class="it_m">电影</li>
									<li class="it_m">影人</li>
									<li class="it_m">影院</li>
									<li class="it_m">商品</li>
									<li class="it_m">新闻</li>
								</ul>
							</div>
							<input type="text" class="text_s" value="搜索电影、影人、影院、商品">
							<a href="#" class="button_s">
								<i class="mf"></i>
							</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
<!-- 	清除浮动 -->
	<div style="clear: both;"></div>

	<!-- 轮播图 -->
	<div id="tulevel" style="width: 100%;min-height: 500px;">
		<div id="pic">
			<ul class="all_pic">
				
			
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v');
$_smarty_tpl->tpl_vars['v']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->index++;
$__foreach_v_0_saved = $_smarty_tpl->tpl_vars['v'];
?>
					<li class="pic<?php echo $_smarty_tpl->tpl_vars['v']->index+1;?>
"><img src="/timenet/upload/<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
" alt=""></li>
					<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


			</ul>

			<span id="left_pic"></span>
			<span id="right_pic"></span>

			<ul class="circular">
				<li id="active"></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>

		<div class="kbc"></div>
		<div id="headimg" class="i_box">


		
		
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v');
$_smarty_tpl->tpl_vars['v']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->index++;
$__foreach_v_1_saved = $_smarty_tpl->tpl_vars['v'];
?>
						<div class="dis_mod pic<?php echo $_smarty_tpl->tpl_vars['v']->index+1;?>
" id="d_s">
						<a href="#" class="dis_headvideo"><i></i></a>
						<div class="dis_videomod" style="">
		    				<h2><?php echo $_smarty_tpl->tpl_vars['v']->value['move_name'];?>
</h2>
		    				<div class="px14">
						        <p>上映日期：<?php echo $_smarty_tpl->tpl_vars['v']->value['show_date'];?>
</p>
						        <p>导演：<a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['move_direct'];?>
</a></p>
						        <p>主演：<a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['move_role'];?>
</a> <a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['role'];?>
</a></p>
						    </div>
		    				<p class="textinfo"><?php echo $_smarty_tpl->tpl_vars['v']->value['move_content'];?>
</p>
		    				<p class="mt15"><span class="icon-add"></span>查看详情</p>
						</div>
            </div>
				<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



    	</div>
	</div>	

	<!-- 	清除浮动 -->
	<div style="clear: both;"></div>

	<!-- 全球新片 -->
	
	<div class="dis_shadow">
		<div class="dis_cont">

			<div class="daohang">
				<div class="left_nav">
					<a id="af">全球新片</a>
					<b>|</b>
					<a id="al">典藏佳作</a>
				</div>
				<div class="right_nav">
					<a href="#">电话查询<i></i></a>
				</div>
			</div>


			<span class="left_go"><i id="go"></i></span>
			<span class="right_go"><i id="go"></i></span>


			<!-- 第二层选项卡 -->
			<div style="width: 964px;overflow: hidden;opacity: 0;position: absolute;top:77px;" id="select_two">
				<ul style="width:3000px;" class="yincang">
				<!-- 第一层隐藏条 -->
				<div class="dpp" style="width: 977px; float: left;" id="vanishh">

				
					
						<li class="r_c">
							<span class="day">
								<i>8月</i>4
							</span>
							<a href="#" class="dt"><img src="/timenet/upload/<?php echo $_smarty_tpl->tpl_vars['l5']->value[0]['pic'];?>
" alt=""></a>
							<div class="d_t">
								<a href="#" class="st">
									<img src="/timenet/upload/<?php echo $_smarty_tpl->tpl_vars['l5']->value[1]['pic'];?>
" alt="">
								</a>
								<div class="cx">
									<h3><a href="#"><?php echo $_smarty_tpl->tpl_vars['l5']->value[0]['title'];?>
</a></h3>
									<span>7.8</span>
								</div>
								<div style="clear:both"></div>
								<p class="jn">
									<i></i>
									<?php echo $_smarty_tpl->tpl_vars['l5']->value[0]['name'];?>

								</p>
							</div>
						</li>
					
						
					
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['l1']->value, 'v');
$_smarty_tpl->tpl_vars['v']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->index++;
$__foreach_v_2_saved = $_smarty_tpl->tpl_vars['v'];
?>
						
								
								<li class="r_c rc" style="position: relative;">
									<span class="day">
										<i>8月</i>3
									</span>
									<a href="#"><img src="/timenet/upload/<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" alt="" style="z-index: 20; width: 223px;height: 334px;"></a>
									<div class="b_t  b_u">
										<div class="cx cxf">
											<h3 class="fl"><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></h3>
											<span>8.5</span>
										</div>
											<p><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</p>
									</div>	
							
								</li>

						<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					</div>
				
				<!-- 第二层隐藏条 -->

					<div class="dp" style="width: 977px; float: left;overflow: hidden;" id="vanishh_two">


						
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['l2']->value, 'v');
$_smarty_tpl->tpl_vars['v']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->index++;
$__foreach_v_3_saved = $_smarty_tpl->tpl_vars['v'];
?>
									<li class="r_c rc" style="position: relative;">
									<span class="day">
										<i>8月</i>1
									</span>
									<a href="#"><img src="/timenet/upload/<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" alt="" style="z-index: 20; width: 223px;height: 334px;"></a>
									<div class="b_t  b_u">
										<div class="cx cxf">
											<h3 class="fl"><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></h3>
											<span>8.5</span>
										</div>
											<p><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</p>
									</div>	
							
								</li>
							<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_3_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


						<li class="r_c  rc more" style="position: relative;">
								<a href="#">查看更多</a>
							</li>
					</div>
				</ul>
			</div>



		<!-- 第一层选项卡 -->
			<div style="min-width: 964px;overflow: hidden; opacity: 1;" id="select_one">
				<ul style="width: 3000px;" class="yincang">
				<!-- 第一层隐藏条 -->
				<div class="diyipan" style="width: 977px; float: left;" id="vanish">
					
					
						<li class="r_c">
							<a href="#" class="dt"><img src="/timenet/upload/<?php echo $_smarty_tpl->tpl_vars['l6']->value[0]['pic'];?>
" alt=""></a>
							<div class="d_t">
								<a href="#" class="st">
									<img src="/timenet/upload/<?php echo $_smarty_tpl->tpl_vars['l6']->value[1]['title'];?>
" alt="">
								</a>
								<div class="cx">
									<h3><a href="#"><?php echo $_smarty_tpl->tpl_vars['l6']->value[0]['title'];?>
</a></h3>
									<span>7.8</span>
								</div>
								<div style="clear:both"></div>
								<p class="jn">
									<i></i>
									<?php echo $_smarty_tpl->tpl_vars['l6']->value[0]['name'];?>

								</p>
							</div>
						</li>

					


						
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['l3']->value, 'v');
$_smarty_tpl->tpl_vars['v']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->index++;
$__foreach_v_4_saved = $_smarty_tpl->tpl_vars['v'];
?>
								
								<li class="it itt" style="position: relative;">
									<a href="#"><img src="/timenet/upload/<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" alt=""></a>
									<div class="b_t">
										<div class="clearfix">
											<h3 class="fl"><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></h3>
										</div>
											<p><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</p>
									</div>	
							
									</li>
								<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_4_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



					</div>

				<!-- 第二层隐藏条 -->

					<div class="diyipan" style="width: 977px; float: left;" id="vanish_two">

						
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['l4']->value, 'v');
$_smarty_tpl->tpl_vars['v']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->index++;
$__foreach_v_5_saved = $_smarty_tpl->tpl_vars['v'];
?>
								
								<li class="it itt" style="position: relative;">
									<a href="#"><img src="/timenet/upload/<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" alt=""></a>
									<div class="b_t">
										<div class="clearfix">
											<h3 class="fl"><a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></h3>
										</div>
											<p><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</p>
									</div>	
							
									</li>
								<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_5_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


							<li class="it itt more" style="position: relative;">
								<a href="#">查看更多</a>
							</li>
					</div>
				</ul>
				

			</div>

	
	</div>
</div>



		<!-- 热播剧集 -->

	<div class="hot">

		<div class="clf" style="width: 964px;margin:auto;">
			<h4 class="dis_txt">热播剧集</h4>
			<div class="dis_ms">
				<a href="#">电视查询<i></i></a>
			</div>
		</div>

		<span class="left_go"><i id="go"></i></span>
		<span class="right_go"><i id="go"></i></span>
		

		<div class="ht">
		<ul class="hottv">

		
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list1']->value, 'v');
$_smarty_tpl->tpl_vars['v']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->index++;
$__foreach_v_6_saved = $_smarty_tpl->tpl_vars['v'];
?>
				<li>
				<p style="position: relative;">
					<a href="#">
						<img src="/timenet/upload/<?php echo $_smarty_tpl->tpl_vars['v']->value['cover'];?>
" alt="" style="width: 175px;">
					</a>
				</p>
				<h3 class="txt">
					<a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
				</h3>
			</li>

			<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_6_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</ul>
	</div>
</div>



	<!-- 热门电影  热门电视  热门人物 -->
	<div class="pt">
		<div class="dis_nav">
			<a class="on" id="dy">热门电影</a>
			<b>|</b>
			<a id="ds">热门电视</a>
			<b>|</b>
			<a id="rr">热门人物</a>
		</div>

		<div class="topmovie">

			<span class="left_go"><i id="go"></i></span>
			<span class="right_go"><i id="go"></i></span>
		
		<!-- 热门电影层 -->
			 <div class="hot_play"  id="mov">
				<dl class="topmovie_slide" id="top_mov">

					
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list2']->value, 'v');
$_smarty_tpl->tpl_vars['v']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->index++;
$__foreach_v_7_saved = $_smarty_tpl->tpl_vars['v'];
?>
							
							<dd id="top_pic">
								<em id="num_on"></em>
								<p style="position: relative;">
									<a href="#">
										<img src="/timenet/upload/<?php echo $_smarty_tpl->tpl_vars['v']->value['cover'];?>
" alt="">
									</a>
								</p>
								<h3 class="txt">
									<a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
></a>
								</h3>
								<p class="m6">
									<span>7.8</span>
								</p>
							</dd>
						
							<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_7_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				</dl>
			</div>


			<!-- 热门电视层 -->
			<div class="hot_pl" id="tv">
				<dl class="topmovie_slide" id="top_tv">



				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list3']->value, 'v');
$_smarty_tpl->tpl_vars['v']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->index++;
$__foreach_v_8_saved = $_smarty_tpl->tpl_vars['v'];
?>
						<dd id="top_pic">
						<em id="num_on"></em>
						<p style="position: relative;">
							<a href="#">
								<img src="/timenet/upload/<?php echo $_smarty_tpl->tpl_vars['v']->value['cover'];?>
" alt="">
							</a>
						</p>
						<h3 class="txt">
							<a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
></a>
						</h3>
						<p class="m6">
							<span>7.8</span>
						</p>
					</dd>
					<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_8_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


				</dl>
			</div>


			<!-- 热门人物层 -->
			<div class="hot_p" id="pop">
				<dl class="topmovie_slide" id="top_p">


					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list4']->value, 'v');
$_smarty_tpl->tpl_vars['v']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->index++;
$__foreach_v_9_saved = $_smarty_tpl->tpl_vars['v'];
?>
					<dd id="top_pic">
						<em id="num_on"></em>
						<p style="position: relative;">
							<a href="#">
								<img src="/timenet/upload/<?php echo $_smarty_tpl->tpl_vars['v']->value['cover'];?>
" alt="">
							</a>
						</p>
						<h3 class="txt">
							<a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
></a>
						</h3>
						<p class="m">
							<span class="db_perpoint"><i></i><span>85%</span></span>
						</p>
					</dd>
					<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_9_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


				</dl>
			</div>

		</div>
	</div>


	<!-- 页面底部 -->

	<div class="bottom">
	<div class="footer">
		<span class="topline"></span>

		<div class="foot">

			<div class="fotlog">
				<a href="#" class="tg"></a>
				<ul class="foot_list">
					<li><a href="#">加入我们</a></li>
					<li><a href="#">站务论坛</a></li>
					<li><a href="#">社区准则</a></li>
					<li><a href="#">隐私政策</a></li>
				</ul>
				<ul class="foot_list non">
					<li><a href="#">联系我们</a></li>
					<li><a href="#">问题反馈</a></li>
					<li><a href="#">网站地图</a></li>
					<li><a href="#">English</a></li>
				</ul>
				<i class="logol"></i>
			</div>
			
			<div class="bottom_center">
				<ul class="bc">
					<li id="bh">栏目</li>
					<li><a href="#">新闻</a></li>
					<li><a href="#">影院</a></li>
					<li><a href="#">商城</a></li>
					<li><a href="#">社区</a></li>
				</ul>
				<ul class="bc nono">
					<li id="bh">推荐</li>
					<li><a href="#">观影指南</a></li>
					<li><a href="#">时光对话</a></li>
					<li><a href="#">特色榜单</a></li>
					<li><a href="#">全球识趣</a></li>
				</ul>
				<ul class="bc nono">
					<li id="bh" style="opacity: 0;">baise</li>
					<li><a href="#">电影票房</a></li>
					<li><a href="#">新片预告</a></li>
					<li><a href="#">电影猜猜猜</a></li>
					<li><a href="#">卡片大富翁</a></li>
				</ul>
				<ul class="bc nono" id="tb">
					<li id="bh">关于我们</li>
					<li class="tp1"><a href="#"></a></li>
					<li class="tp2"><a href="#"></a></li>
					<li class="tp3"><a href="#"></a></li>
				</ul>
				<i class="logol"></i>
			</div>
			<div class="three">
				<div class="th">	
					<h2 style="font-weight: 400;">时光周刊</h2>
					<span>第201期</span>
				</div>
				<a href="#"><img src="http://img5.mtime.cn/mg/2017/07/28/172207.37663014.jpg" alt="" style="width: 172px;"></a>	
				<div class="inp">
					<input type="text" class="ca" value="邮箱地址" style="outline: none;">
					<a href="#" class="btn">订阅</a>
				</div>
			</div>
			<div class="four">
				<div class="fh">
					<h2 style="font-weight: 400;">手机购票&nbsp;<b>实惠</b>&nbsp;<b>方便</b></h2>
				</div>
				<a href="#"><i></i></a>
				<span style="text-align: center;display: inline-block; margin-left: 10px;">扫描二维码 下载客户端</span>
			</div>	
		</div>

		<div style="clear: both;"></div>
	 	<div class="fb">
	 		<p>
				<span>北京动艺时光网络科技有限公司</span>
				&nbsp;&nbsp;
				<span>Copyright 2006-2017 Mtime.com Inc. All rights reserved.</span>
			</p>

			<p>
				<a href="#">京ICP证050715</a>
				&nbsp;&nbsp;
				<a href="#">网络视听许可证0108265号</a>
				&nbsp;&nbsp;
				<a href="#">网络文化经营许可证</a>
				&nbsp;&nbsp;
				<a>广播电视节目制作经营许可证（京）字第1435号</a>
				&nbsp;&nbsp;
				<span>京公网安备：110105000744号</span>
			</p>
			<div class="flt">
				<a href="#" class="ftp"><i></i></a>
				<a href="#" class="ftp cdp"><i></i></a>
			</div>	
					
		</div>
 	</div>
</div>

<?php echo '<script'; ?>
 type="text/javascript" src="timenet.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
