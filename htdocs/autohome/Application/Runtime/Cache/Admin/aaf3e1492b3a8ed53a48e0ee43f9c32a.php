<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>左侧导航menu</title>
<link href="/Public/css/css.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="/Public/js/sdmenu.js"></script>
<script type="text/javascript">
	// <![CDATA[
	var myMenu;
	window.onload = function() {
		myMenu = new SDMenu("my_menu");
		myMenu.init();
	};
	// ]]>
</script>
<style type=text/css>
html{ SCROLLBAR-FACE-COLOR: #538ec6; SCROLLBAR-HIGHLIGHT-COLOR: #dce5f0; SCROLLBAR-SHADOW-COLOR: #2c6daa; SCROLLBAR-3DLIGHT-COLOR: #dce5f0; SCROLLBAR-ARROW-COLOR: #2c6daa;  SCROLLBAR-TRACK-COLOR: #dce5f0;  SCROLLBAR-DARKSHADOW-COLOR: #dce5f0; overflow-x:hidden;}
body{overflow-x:hidden; background:url(/Public/img/main/leftbg.jpg) left top repeat-y #f2f0f5; width:194px;}
</style>
</head>
<body onselectstart="return false;" ondragstart="return false;" oncontextmenu="return false;">
<div id="left-top">
	<div><img src="/Public/img/main/member.gif" width="44" height="44" /></div>
    <span>用户：admin<br>角色：超级管理员</span>
</div>
    <div style="float: left" id="my_menu" class="sdmenu">
      <div class="collapsed">
        <span>项目管理</span>
        <a href="main.html" target="mainFrame" onFocus="this.blur()">后台首页</a>
        <a href="car_list.html" target="mainFrame" onFocus="this.blur()">列表页管理</a>
        <a href="car_data.html" target="mainFrame" onFocus="this.blur()">列表详细页</a>
        <a href="car_ad.html" target="mainFrame" onFocus="this.blur()">广告位管理</a>
      </div>
      <div>
        <span>订单管理</span>
		<a href="order_list.html" target="mainFrame" onFocus="this.blur()">订单列表</a>
        <a href="order_list_no.html" target="mainFrame" onFocus="this.blur()">未发货订单</a>
        <a href="order_list_re.html" target="mainFrame" onFocus="this.blur()">已发货订单</a>
        <a href="order_list_ok.html" target="mainFrame" onFocus="this.blur()">已完成订单</a>
      </div>
      <div>
        <span>信息管理</span>
		<a href="main_list.html" target="mainFrame" onFocus="this.blur()">管理员列表</a>
        <a href="main_info.html" target="mainFrame" onFocus="this.blur()">新增管理员</a>
        <a href="main_data.html" target="mainFrame" onFocus="this.blur()">个人资料</a>
        <a href="main_pwd.html" target="mainFrame" onFocus="this.blur()">修改密码</a>
        
      </div>
      
    </div>
</body>
</html>