<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台页面头部</title>

<link href="/Public/css/css.css" type="text/css" rel="stylesheet" />
</head>
<body onselectstart="return false" oncontextmenu=return(false) style="overflow-x:hidden;">
<!--禁止网页另存为-->
<noscript><iframe scr="*.htm"></iframe></noscript>
<!--禁止网页另存为-->
<table width="100%" border="0" cellspacing="0" cellpadding="0" id="header">
  <tr>
    <td rowspan="2" align="left" valign="top" id="logo"><img src="/Public/img/main/logo.png" width="74" height="64"></td>
    <td align="left" valign="bottom">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="bottom" id="header-name">汽车之家~车商城</td>
        <td align="right" valign="top" id="header-right">
        	<a href="<?php echo U('login_quit');?>" onclick="return confirm('确定退出吗？')" target="topFrame" onFocus="this.blur()" class="admin-out">注销</a>
            <a href="car_index.html"  target="top" onFocus="this.blur()" class="admin-home">管理首页</a>
        	<a href="/Mycar/index" target="_blank" onFocus="this.blur()" class="admin-car_index">网站首页</a>       	
            <span>
<!-- 日历 -->
<SCRIPT type=text/javascript src="/Public/js/clock.js"></SCRIPT>

<SCRIPT type=text/javascript > showcal(); </SCRIPT>
            </span>
        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="bottom">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top" id="header-admin">后台管理系统</td>
        <td align="left" valign="bottom" id="header-menu">
        <a href="car_index.html" target="mainFrame" onFocus="this.blur()" id="menuon">后台首页</a>
        <a href="car_index.html" target="mainFrame" onFocus="this.blur()">项目管理</a>
        <a href="car_index.html" target="mainFrame" onFocus="this.blur()">会员管理</a>
        <a href="car_index.html" target="mainFrame" onFocus="this.blur()">留言管理</a>
        <a href="car_index.html" target="mainFrame" onFocus="this.blur()">站点维护</a>
        </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>