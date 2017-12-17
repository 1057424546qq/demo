<?php
/* Smarty version 3.1.30, created on 2017-09-19 08:39:33
  from "/Applications/MAMP/htdocs/smarty/templates/timenet.css" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c0bba5442097_70217529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6499453df6744be176a2b1d461eb6777df49572' => 
    array (
      0 => '/Applications/MAMP/htdocs/smarty/templates/timenet.css',
      1 => 1505802774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c0bba5442097_70217529 (Smarty_Internal_Template $_smarty_tpl) {
?>
*{
	margin:0;
	padding:0;
}
ul{
	list-style: none;
}
a{
	text-decoration: none;
}
body{
	overflow-x: hidden;
	background: #f1f1f1;
}
.top_header{
	position: fixed;
	top:0;
	width: 100%;
	z-index: 200;
}
.header{
	background-color: #192332;
	height: 60px;
	min-width: 1092px;
	padding:0 88px 0 29px;
	font-size: 14px;
	position: relative;
	margin:auto;
	cursor: pointer;
}
.header_left{
	float: left;
}
.header_nav{
	overflow: hidden;
}
.header_nav li{
	float: left;
	position: relative;
}
.header_nav li a{
	color:#c8c8c8;
	margin-right: 30px;
	line-height: 60px;
	font-size: 14px;
	position: relative;
}
.header_nav li:hover a{
	font-weight: 700;
	color:#fff;
}
.delta{
	width: 0;
	height: 0;
	border-bottom: 5px solid #fff;
	border-right: 7px solid transparent;
	border-left: 7px solid transparent;
	position: absolute;
	left:50%;
	bottom:-23px;
	margin-left: -7px;
}
.new{
	position: absolute;
	right: -26px;
	top:-9px;
	width: 28px;
	height: 14px;
	background: url(http://static1.mtime.cn/20170731144154/images/2014/head.png) no-repeat -165px -28px;

}
.header_center{
	width: 117px;
	height: 36px;
	position: absolute;
	left:45%;
	top:24%;
}
.timenet_logo{
	display: block;
	background: url(http://static1.mtime.cn/20170731144154/images/2014/head.png) no-repeat 0 -315px;
	width: 117px;
	height: 36px;
}
.header_car{
	background-color: #e83729;
	width: 62px;
	height: 62px;
	position: absolute;
	top:0;
	right: 20px;
}
.car{
	position: absolute;
	left:18px;
	top:21px;
	background: url(http://static1.mtime.cn/20170731144154/images/2014/head.png) no-repeat 0 -45px;
	width: 26px;
	height: 20px;
}
.goods{
	width: 350px;
	border:1px solid #f5f5f5;
	border-top:3px solid #e83729;
	background: #fff;
	position: absolute;
	top:60px;
	right:0;
	box-shadow: 0 3px 5px rgba(0,0,0,.25);
	display: none;
}
.tips{
	text-align: center;
	color: #999;
	padding:100px 0;
}
.header_car:hover .goods{
	display: block;
}
.head_tool{
	height: 60px;
	float: right;
	padding:0 18px;
	position: relative;
}
.line{
	height: 60px;
	width: 0px;
	position: absolute;
	left: 0;
	top:0;
	border-left:1px solid #141c28;
	border-right:1px solid #303947;
	overflow: hidden;
}
.loginvsenroll{
	position: relative;
	padding:25px 17px;
}
.loginvsenroll a{
	color:#c8c8c8;
}
.loginvsenroll a:hover{
	color:#fff;
}
.loginvsenroll span{
	display: inline-block;
	width: 0;
	height: 16px;
	border-left: 1px solid #303947;
	margin:-1px 23px;
}
.login{
	color:#fff;
}
.lode{
	display: block;
	color:#fff;
	margin-top: 19px;
	text-align: center;
}
.del{
	position: absolute;
	bottom:0px;
	display: none;
}

.code{
	position: absolute;
	right: -20px;
	top:60px;
	display: none;
}

.show:hover > a >.del,.show:hover > .code{
	display: block;
}
.code:hover{ 
	display: block; 
}
.phoneico{
	display: inline-block;
	background: url(http://static1.mtime.cn/20170731144154/images/2014/head.png) no-repeat -54px -45px;
	width: 13px;
	height: 20px;
	position: relative;
	top:5px;
	margin-right: 5px;
}
.angle{
	display: inline-block;
	background:url(http://static1.mtime.cn/20170731144154/images/2014/head.png) no-repeat -140px 0px; ;
	width: 7px;
	height: 4px;
	position: absolute;
	right: 6px;
	top:50%;
}
.mangnifier{
	display: inline-block;
	height: 60px;
	line-height: 60px;
}
.mfico{
	display: inline-block;
	background: url(http://static1.mtime.cn/20170731144154/images/2014/head.png) no-repeat -75px -45px;
	width: 16px;
	height: 16px;
	opacity:.8;
	position: absolute;
	top:23px;
	right:16px;
}
.mfico_inp{
	width: 484px;	
	position: absolute;
	right:50px;
	top:0;
	padding-top: 10px;
}
.topsearch{
	height: 38px;
	background-color: #fff;
	margin:auto;
	border:1px solid #e0e0e0;
	border-radius: 20px;
	box-shadow: 0 0 3px #fff;
	z-index: 10;
}
.search_sha{
	height: 39px;
	box-shadow: 0 3px 5px rgba(0,0,0,.1);
	padding-left:100px;
	position: relative;
	z-index: 10;
}
.search_selcet{
	width: 100px;
	height: 38px;
	line-height: 38px;
	text-align: center;
	position: absolute;
	top:0;
	left:0;
	color:#999;
}
.search_selcet i{
	background: url(http://static1.mtime.cn/20170731144154/images/2014/head.png) no-repeat -152px 0;
	width: 11px;
	height: 7px;
	cursor: pointer;
	position: absolute;
	top:15px;
	margin-left: 1px;
}
.search_selcet em{
	color: #dbdbdb;
	width: 1px;
	height: 14px;
	margin:0 0 0 26px;
	cursor: pointer;
	font-style: normal;
}
.search_selcet:hover +.search_show,.search_show:hover{
	display: block;
}
.search_show{
	background: #fff;
	width: 88px;
	position: absolute;
	left:0;
	top:41px;
	overflow: hidden;
	border:1px solid #ccc;
	box-shadow: 0 3px 5px rgba(0,0,0,.1);
	border-radius: 6px;
	display: none;
}
.it_m{
	text-align: center;
	line-height: 24px;
	border-top:1px solid #eee;
	cursor: pointer;
	border-bottom: 1px solid #eee;
	font-size: 14px;
	padding:5px 0 6px;
	color:#333;
}
.ahl{
	color:#267dd7;
	background: #e5f2fc;
}
.it_m:hover{
	color:#267dd7;
	background: #e5f2fc;
}
.text_s{
	display: inline-block;
	vertical-align: top;
	color:#a5a5a5;
	outline: none;
    width: 80%;
    line-height: 21px;
    padding: 9px 0;
    font-size: 13px;
    border:none;
   margin-left:-14px;
}
.button_s{
	display: block;
	width: 54px;
	height: 32px;
	position: absolute;
	right: 3px;
	top:3px;
	border-radius: 20px;
	cursor:pointer;
	background-color: #fff;
}
.button_s i{
	background: url(http://static1.mtime.cn/20170731144154/images/2014/head.png) no-repeat -115px -45px;
	width: 19px;
	height: 19px;
	position: absolute;
	left:50%;
	top:50%;
	margin:-10px 0 0 -10px;
}


/*轮播图*/
.pic1{
	opacity: 1;
}
.pic2,.pic3,.pic4{
	opacity: 0;
}

#pic{
	margin: 0 auto;
	position: relative;
}
.all_pic{
	position: relative;
}
.all_pic li{
	width: 100%;
    height: 500px;
    margin-top: 60px;
    position: absolute;
}
#left_pic,#right_pic{
	background: url(http://static1.mtime.cn/library/20170727032811/images/allicon24.png) no-repeat 0 -290px;
    width: 49px;
    height: 104px;
    position: absolute;
    top: 285px;
    left: 50%;
    margin-top: -12px;
    z-index: 50;
    opacity: .8;
    cursor: pointer;
}
#left_pic{
	margin-left: -539px;
}
#right_pic{
	margin-left:490px;
	background-position: -49px -290px;
}
.circular{
	width: 280px;
    position: absolute;
    top: 494px;
    left: 58%;
    margin-left: 220px;
    text-align: right;
    z-index: 999;
}
.circular li{
	float: left;
	width: 12px;
	height: 12px;
	border:1px solid #333;
	border-radius: 50%;
	margin-right: 20px;
	background: rgba(100,100,100,.4);
}
#active{
	background: #fff;
}
.kbc{
	background: url(http://static1.mtime.cn/library/20170727032811/images/index_shadow.png) no-repeat 0 0;
    width: 1000px;
    height: 360px;
    position: absolute;
    left: 50%;
    top: 165px;
    margin-left: -511px;
    padding: 11px 11px 0;
    z-index: 20;
}
.i_box{
	height: 0;
	width: 1000px;
	position: relative;
	z-index: 3;
	margin:0 auto;
	top:105px;
}
.dis_mod{
	width: 1000px;
	height: 360px;
	position: absolute;
	left:0;
	top:65px;
}
#d_s{
	opacity: 1;
}
.dis_headvideo{
	position: absolute;
	left:0;
	top:0;
	display: block;
	width: 1000px;
	height: 360px;
	z-index: 5;
}
.dis_headvideo i{
	background: url(http://static1.mtime.cn/library/20170727032811/images/allicon24.png) no-repeat -119px -52px;
    width: 119px;
    height: 119px;
    position: absolute;
    left: 50%;
    top: 50%;
    margin-left: -60px;
    margin-top: -80px;
    opacity: .8;
}
.dis_videomod{
	width: 540px;
    position: absolute;
    left: 40px;
    top: 100px;
    color: #fff;
    text-shadow: 0 0 1px #000;
}
.dis_videomod h2{
	font-size: 36px;
}
.px14{
	margin-top:16px;
	font-size: 14px;
	line-height: 23px;
}
.px14 p a{
	color:#fff;
}
.textinfo{
	font-size: 16px;
	margin-top: 10px;
	line-height: 26px;
}
.mt15{
	margin-top:15px;
}
.icon-add{
	display: inline-block;
	width: 8px;
	height: 8px;
	border:1px solid #fff;
	border-left:2px solid #fff;
    margin-right: 5px;
}
/*全新影片*/
.dis_shadow{
	background: url(http://static1.mtime.cn/library/20170727032811/images/index_shadow.png) no-repeat 0 -360px;
    width: 1000px;
    padding: 0 11px;
    margin: 25px auto 0;
    position: relative;
    z-index: 20;
}
.dis_cont{
	background: #f1f1f1;
	width: 964px;
	padding:15px 18px;
}
.left_nav{
	font-size: 20px;
	
	padding:18px 0;
}
.left_nav a{
	color:#656565;
	cursor: pointer;
}
.left_nav a:hover{
	color:#000;
}
.left_nav b{
	color:#656565;
	margin:0 20px;
}
#af{
	font-weight: 700;
	color:#000;
}
.right_nav{
	float: right;
	margin-top:-40px; 
}
.right_nav a{
	width: 100px;
    height: 33px;
    display: block;
    position: relative;
    border: 1px solid #f1f1f1;
    border-bottom: 1px solid transparent;
    border-radius: 5px 5px 0 0;
    font-size: 14px;
    line-height: 33px;
    text-align: center;
    color: #333;
}
.right_nav a i{
	background: url(http://static1.mtime.cn/library/20170727032811/images/dis_icon24.png) no-repeat -50px -46px;
    width: 14px;
    height: 8px;
    position: relative;
    zoom: 1;
    overflow: hidden;
    display: inline-block;
    vertical-align: middle;
    margin-left: 5px;
    opacity: .8;
}
.it{
	float: left;
	width: 223px;
    height: 156px;
    overflow: hidden;
    padding: 3px;
    margin-right: 5px;
    background: #fff;
    border-right: 1px solid #d7d7d7;
    border-bottom: 1px solid #d7d7d7;
    margin:6px;
    position: relative;
}
#dd{
	width: 460px;
    height: 332px;
}
.dt{
	position: relative;
}
.dt img{
	display: block;
	width: 460px;
	height: 260px;
}
.dt_text{
	position: relative;
    padding-left: 135px;
    padding-top: 10px;
}
.yinying{
	background: url(http://static1.mtime.cn/library/20170727032811/images/dis_icon24.png) no-repeat -25px 0;
    position: absolute;
    left: 15px;
    top: 58px;
    width: 106px;
    height: 7px;
}
.yinying img{
	width: 100px;
	height: 150px;
	position: absolute;
	left:0;
	bottom:7px;
	border:3px solid #fff;
}
.wenzi h3 a{
	font-size: 18px;
	float: left;
	color:#333;
}
.wenzi span{
	background: #679c21;
	display: inline-block;
	position: relative;
	padding:4px 5px 4px;
	font-weight: 700;
	color:#fff;
	overflow:hidden;
	float: left;
}
.jj{
	font-size: 16px;
	color:#ff960f;
	margin-top: 27px;
	line-height: 4px;
}
.jj i{
	background: url(http://static1.mtime.cn/library/20170727032811/images/dis_icon24.png) no-repeat -135px 0;
    width: 18px;
    height: 18px;
    display: inline-block;
    position: relative;
    overflow: hidden;
    margin-right: 5px;
}
.itt a img{
	height: 125px;
	width: 223px;
}
.b_t{
	background: #fff;
	position: absolute;
	left:3px;
	bottom:0;
	padding:6px;
	width: 211px;
}
.b_t{
	transition: all .5s;
	transform: translateY(20px);
}

.itt:hover .b_t{
	transition: all .5s;
	transform: translateY(0px);
}
.fl{
	float: left;
}
.fl a{
	font-size: 14px;
	color:#333;
	line-height: 1.6em;
    font-weight: normal;
}
.fl a:hover{
	color:#08c;
}
.clearfix span{
	background: #679c21;
	display: inline-block;
	position: relative;
	padding:4px 5px 4px;
	font-size:14px;
	font-weight: 700;
	color:#fff;
	overflow:hidden;
}
.clearfix:after{
	content: ".";
    height: 0;
    visibility: hidden;
    display: block;
    clear: both;
}
.b_t p{
	color: #ff960f;
    margin-top: 6px;
    font-size: 12px;
}

.more a{
	display: block;
    height: 156px;
    line-height: 156px;
    font-size: 16px;
    color: #666;
    text-align: center;
}
.left_go{
    background: #f1f1f1;
    width: 24px;
    height: 43px;
    position: absolute;
    right: auto;
    left: -40px;
    top: 50%;
    margin-top: -27px;
    padding: 5px;
    opacity: 0;
    cursor: pointer;
}
.right_go{
    background: #f1f1f1;
    width: 24px;
    height: 43px;
    position: absolute;
    top: 50%;
    margin-top: -27px;
    right: -40px;
    padding: 5px;
    cursor: pointer;
}
.left_go i{
	background: url(http://static1.mtime.cn/library/20170727032811/images/dis_icon24.png) no-repeat 0 -25px;
	width: 24px;
	height: 43px;
	display: block;
	opacity: .5;
}
.right_go i{
	background: url(http://static1.mtime.cn/library/20170727032811/images/dis_icon24.png) no-repeat -25px -25px;
	width: 24px;
	height: 43px;
	display: block;
	opacity: .5;
}
.left_go i:hover{
	opacity: 1;
}
.right_go i:hover{
	opacity: 1;
}
.r_c{
	width: 470px;
    height: 334px;
    overflow: hidden;
    padding: 3px;
    margin-right: 5px;
    background-color: #fff;
    float: left;
}
.rc{
	width: 218px;
    overflow: hidden;
    margin-bottom: 15px;
    position: relative;
    padding: 3px;
    margin-left: 11px;
}
.day{
	background: #fff;
    width: 49px;
    height: 45px;
    position: absolute;
    left: 3px;
    top: 3px;
    box-shadow: 1px 1px 3px #ccc;
    z-index: 5;
    text-align: center;
    font-size: 20px;
    color: #646464;
    line-height: 30px;
}
.day i{
	background: #2db20d;
    display: block;
    height: 19px;
    color: #fff;
    line-height: 20px;
    overflow: hidden;
    font-size: 10px;
}
.dt{
	display: block;
    position: relative;
    width: 470px;
    height: 265px;
}
.d_t{
	position: relative;
    padding-left: 135px;
    padding-top: 10px;
}
.st{
	background: url(http://static1.mtime.cn/library/20170727032811/images/dis_icon24.png) no-repeat -25px 0;
    position: absolute;
    left: 15px;
    top: 58px;
    width: 106px;
    height: 7px;
}
.st img{
	position: absolute;
    left: 0;
    bottom: 4px;
    border: 3px solid #fff;
}
.cx h3{
	float: left;
}
.cx  a{
	font-size: 18px;
	color:#333;
}
.cx span{
	background: #679c21;
    display: inline-block;
    position: relative;
    zoom: 1;
    padding: 4px 5px 4px;
    font-size: 14px;
    line-height: 14px;
    font-weight: bold;
    color: #fff;
    vertical-align: bottom;
    overflow: hidden;
}
.jn{
	font-size: 16px;
    color: #ff960f;
    line-height: 1em;
    margin-top: 6px;
}
.jn i{
	background: url(http://static1.mtime.cn/library/20170727032811/images/dis_icon24.png) no-repeat -135px 0;
    width: 18px;
    height: 18px;
    display: inline-block;
    position: relative;
    zoom: 1;
    overflow: hidden;
    vertical-align: baseline;
    margin-right: 5px;
}
.cxf{
    width: 203px;
    height: 50px;
    padding: 56px 10px 0;
    position: absolute;
    left:-2px;
    bottom:25px;
}
.cxf h3 a{
	font-size: 14px;
	color:#fff;
}
.b_u p{
	position: absolute;
	top:-43px;
}
		/*热播剧集*/

.hot{
	position: relative;
	width: 964px;
	margin:auto;
	padding-top: 15px;
}

.dis_txt{
	font-size: 20px;
	color:#333;
	padding:18px 0;
	margin-top: 15px;
}
.dis_ms{
	float: right;
	position: relative;
	top:-49px;
	right:113px;
	z-index: 10;
}
.dis_ms a{
	width: 100px;
    height: 33px;
    display: block;
    position: absolute;
    z-index: 3;
    font-size: 14px;
    line-height: 33px;
    text-align: center;
    color: #333;
}
.dis_ms a i{
	background: url(http://static1.mtime.cn/library/20170727032811/images/dis_icon24.png) no-repeat -50px -46px;
    width: 14px;
    height: 8px;
    position: relative;
    zoom: 1;
    overflow: hidden;
    display: inline-block;
    vertical-align: middle;
    margin-left: 5px;
    opacity: .8;
}
.ht{
	width: 964px;
	margin:auto;
	overflow: hidden;
	position: relative;
}
.hottv{
	width: 3000px;
	position: relative;
}
.hottv li{
	background: #fff;
    width: 175px;
    height: 353px;
    float: left;
    display: inline;
    padding: 3px;
    border-right: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    margin-right: 13px;
    position: relative;
}
.txt{
	margin: 6px;
    line-height: 17px;
}
.txt a{
	font-size: 16px;
	color:#323232;
}
.m6{
	margin:6px;
}
.m6 span{
	background: #679c21;
    display: inline-block;
    position: relative;
    padding: 4px 5px 4px;
    font-size: 14px;
    line-height: 14px;
    font-weight: bold;
    color: #fff;
    vertical-align: bottom;
    overflow: hidden;
}
	/*热门电影  热门电视  热门人物*/
.pt{
	margin-top: 30px;
	padding-bottom:30px;
}
.dis_nav{
	width: 964px;
	font-size: 20px;
    line-height: 12px;
    color: #656565;
    padding: 18px 0;
    margin:auto;
    cursor: pointer;
}
.dis_nav a{
	color:#656565;
}
.dis_nav a:hover{
	color:#333;
}
.dis_nav a.on{
	font-weight: bold;
    color: #333;
}
.dis_nav b{
	margin:0 25px;
    font-weight: normal;
}
.topmovie{
	width: 964px;
	position: relative;
	margin:auto;
}
.hot_play{
	width: 964px;
	position: relative;
    overflow: hidden;
    opacity: 1;
}
.hot_pl{
	width: 964px;
	overflow: hidden;
	position: absolute;
	top:0; 
	opacity: 0;
}
.hot_p{
	width: 964px;
	overflow: hidden;
	position: absolute; 
	top:0;
	opacity: 0;
}
.topmovie_slide{
	width: 3000px;
	position: relative;
}
#top_pic{
	background: #fff;
    width: 175px;
    height: 353px;
    float: left;
    display: inline;
    padding: 3px;
    border-right: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    margin-right: 13px;
    position: relative;
}
#top_pic em{
	position: absolute;
    left: 3px;
    top: 3px;
    width: 30px;
    height: 27px;
    font-size: 22px;
    line-height: 27px;
    text-align: center;
    color: #fff;
    background: #666;
    z-index: 30;
}
#top_pic em#num_on{
    background: #ff6e00;
}
.m{
	margin:6px;
}
.db_perpoint{
	font-size: 14px;
    color: #d11438;
    margin-left: 15px;
}
.db_perpoint i{
	background: url(http://static1.mtime.cn/20170731144154/images/2014/allicon24.png) no-repeat -155px -33px;
    width: 17px;
    height: 15px;
    display: inline-block;
    position: relative;
    zoom: 1;
    vertical-align: middle;
    margin-right: 3px;
}
 h3 a{
 	z-index: 100;
 }
 h3 a:hover{
	color:#08c;
}
/*底部*/
.footer{
	background: #fff;
	position: relative;
}
.topline{
	margin-top: 30px;
	background: url(http://static1.mtime.cn/20170731144154/images/2014/foot.png) no-repeat center 0 #337fab;
    height: 4px;
    width: 100%;
    position: absolute;
    left: 0;
    top: 0;
    overflow: hidden;
}

.foot{
	width: 1000px;
	margin:auto;
	padding-top: 40px;
	font-size: 13px
}
.fotlog{
	width: 200px;
	float:left;
	min-height: 157px;
	margin-top: 40px;
	position: relative;
}
.logol{
	display: block;
	background: url(http://static1.mtime.cn/20170731144154/images/2014/foot.png) no-repeat -495px -9px;
    width: 1px;
    height: 157px;
    overflow: hidden;
    display: block;
    position: absolute;
    right: 10px;
    top: 0;
}
.tg{
	background: url(http://static1.mtime.cn/20170731144154/images/2014/head.png) no-repeat 0 0;
    width: 136px;
    height: 35px;
    display: block;
    padding-bottom: 10px;
}
.foot_list{
	float: left;
	font-size: 13px;
	margin-top: 10px;
}
.non{
	margin-left: 30px;
}
.foot_list li{
	padding:5px 0;
}
.foot_list li a{
	color:#333;
}
.foot_list li a:hover{
	color:#08c;
}
.bottom_center{
	width: 401px;
    float: left;
    position: relative;
    min-height: 157px;
    margin-top: 40px;
}
.bc{
	float: left;
	margin-left: 30px;
}
#bh{
	font-size: 13px;
}
.bc li{
	padding:7px 0;
	font-size: 16px;
}
.bc li a{
	color:#333;
}
.bc li a:hover{
	color:#08c;
}
.nono{
	margin-left: 33px;
}
.tp1 a,.tp2 a,.tp3 a{
	background: url(http://static1.mtime.cn/20170731144154/images/2014/foot.png) no-repeat -140px -9px;
    width: 30px;
    height: 30px;
    display: block;
    line-height: 0;
    font-size: 0;
}
.tp1 a{
	margin-top: 4px;
}
.tp2 a{
	background-position: -170px -9px;
	margin-top:-10px;
}
.tp3 a{
	background-position: -200px -9px;
	margin-top:-10px;
}
.three{
	width: 230px;
	float: left;
	min-height: 157px;
	margin-top: 40px;
}
.th{
	width: 172px;
	margin:auto;
}
.th span{
	float: right;
	margin-top: -15px;
	color: #7d7d7d;
}
.three a{
	display: block;
	margin:10px 0 5px 30px;
}
.inp{
	background: url(http://static1.mtime.cn/20170731144154/images/2014/foot.png) no-repeat -330px -35px;
    width: 163px;
    height: 25px;
    position: relative;
    padding-top: 1px;
	margin:auto;
}
.ca{
	background: transparent;
    width: 100px;
    text-align: center;
    margin-left: 15px;
    border: none;
    height: 22px;
    color:#a5a5a5;
}
.btn{
	background: url(http://static1.mtime.cn/20170731144154/images/2014/foot.png) no-repeat -330px -9px;
    width: 54px;
    height: 25px;
    position: absolute;
    right: -10px;
    top: -10px;
    text-align: center;
    color: #fff;
    font-family: 14px;
    line-height: 25px;
}
.four{
	float:right;
	margin-top: 40px;
}
.fh h2 b{
	font-size: 13px;
	font-weight: 400;
	color:#7d7d7d;
}
.four a{
	display: block;
	margin: 10px auto;
}
.four a i{
	background: url(http://static1.mtime.cn/20170731144154/images/2014/foot.png) no-repeat -795px -9px;
    width: 99px;
    height: 99px;
    margin: 0 auto;
    display: block;
}
.fb{
    color: #7e7e7f;
    text-align: center;
    padding: 30px 0 20px;
}
.fb p{
	margin-top: 10px;
	font-size: 13px;
}
.fb p a{
	font-size: 13px;
	color:#7e7e7f;
}
.fb p a:hover{
	color:#08c;
}
.flt{
	padding-top: 12px;
	text-align: center;
}
.ftp i{
	background: url(http://static1.mtime.cn/20170731144154/images/2014/allicon.gif) no-repeat 0 -122px;
    display:inline-block;
    width: 68px;
    height: 25px;
    vertical-align: middle;
    margin-right: 15px;
    z-index: 999;
}
.cdp i{
	background-position: -68px -122px;
}<?php }
}
