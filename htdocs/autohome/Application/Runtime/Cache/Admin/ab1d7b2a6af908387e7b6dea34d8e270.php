<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="/public/css/css.css" type="text/css" rel="stylesheet" />
<link href="/public/css/main.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="/Public/img/main/favicon.ico" />
<script type="text/javascript" src="/public/cjk/jquery.js"></script>
<script type="text/javascript" src="/public/cjk/vue.js"></script>
<style>
body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(/Public/img/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url(/Public/img/main/add.jpg) no-repeat 0px 6px; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF}
#search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
#main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
#main-tab th{ font-size:12px; background:url(/Public/img/main/list_bg.jpg) repeat-x; height:32px; line-height:32px;}
#main-tab td{ font-size:12px; line-height:40px;}
#main-tab td a{ font-size:12px; color:#548fc9;}
#main-tab td a:hover{color:#565656; text-decoration:underline;}
.bordertop{ border-top:1px solid #ebebeb}
.borderright{ border-right:1px solid #ebebeb}
.borderbottom{ border-bottom:1px solid #ebebeb}
.borderleft{ border-left:1px solid #ebebeb}
.gray{ color:#dbdbdb;}
td.fenye{ padding:10px 0 0 0; text-align:right;}
.bggray{ background:#f9f9f9; font-size:14px; font-weight:bold; padding:10px 10px 10px 0; width:120px;}
.main-for{ padding:10px;}
.main-for input.text-word{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; padding:0 10px;}
.main-for select{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666;}
.main-for input.text-but{ width:100px; height:40px; line-height:30px; border: 1px solid #cdcdcd; background:#e6e6e6; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#969696; float:left; margin:0 10px 0 0; display:inline; cursor:pointer; font-size:14px; font-weight:bold;}
#addinfo a{ font-size:14px; font-weight:bold; background:url(/Public/img/main/addinfoblack.jpg) no-repeat 0 1px; padding:0px 0 0px 20px; line-height:45px;}
#addinfo a:hover{ background:url(/Public/img/main/addinfoblue.jpg) no-repeat 0 1px;}
</style>
</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：信息管理&nbsp;&nbsp;>&nbsp;&nbsp;添加用户</td>
  </tr>
  <tr>
    <td align="left" valign="top" id="addinfo">
    <a href="javascript:;" target="mainFrame" onFocus="this.blur()" class="add">新增管理员</a>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <form method="post" action="/admin/admin/info" id="app">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">用户名（工号）：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="text" name="user" value="" class="text-word user">
        	<span style="margin-left: 20px; display: none;">请输入6-20位字母、数字的用户名。用户名可以使用工号！</span>
        </td>
        </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">用户密码：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="text" name="pwd" value="" class="text-word pwd">
        	<span style="margin-left: 20px; display: none;">请输入6-20位字母、数字的密码。</span>
        </td>
        </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">确认密码：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="text" name="" value="" class="text-word pwd1">
        	<span style="margin-left: 20px; display: none;">请输入6-20位字母、数字的密码。</span>
        </td>
      </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">用户权限：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
	        <select name="level" id="level">
			    <option value="0" >&nbsp;&nbsp;信息录入员</option>
			    <option value="1" >&nbsp;&nbsp;一般管理员</option>
			    <option value="2" >&nbsp;&nbsp;超级管理员</option>
	        </select>
	        <span style="margin-left: 20px;display: none;">tip: 用户权限需通过领导同意方可选择对应的权限</span>
        </td>
      </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">用户状态：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
	        <select name="locking" id="locking">
			    <option value="1" >&nbsp;&nbsp;锁定</option>
			    <option value="0" >&nbsp;&nbsp;不锁定</option>
	        </select>
	        <span style="margin-left: 20px;display: none;">tip: 锁定状态为不可删除状态。</span>
        </td>
      </tr>
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">&nbsp;</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input name="" type="submit" value="提交" class="text-but">
        <input name="" type="reset" onclick="history.go(-1)" value="返回" class="text-but"></td>
        </tr>
    </table>
    </form>
    </td>
    </tr>
</table>
<script type="text/javascript">
	$('.user').focus(function(){
		$(this).siblings('span').show();
		if($(this).val()!=''){
			val($(this));
		}else{
			$(this).siblings('span').html('请输入6-20位字母、数字的用户名。用户名可以使用工号！').css('color','#000000');
		}
		
	});
	$('.user').blur(function(){
		if($(this).val()!=''){
			if(!val($(this))){
				return false;
			}
			$.post('/admin/admin/user',{user:$('.user').val()},function(data){
				if(data==1){
					$('.user').siblings('span').html('用户名已存在，请从新输入！').css('color','#ff0000');
				}else{
					$('.user').siblings('span').html('用户名可以注册！').css('color','#0088cc');
				}
			})
		}else if($(this).val()==''){
			$(this).siblings('span').html('请输入6-20位字母、数字的用户名。用户名可以使用工号！').css('color','#000000');
		}
	})
	$('.pwd').focus(function(){
		$(this).siblings('span').show();
		if($(this).val()!=''){
			val($(this));
		}else{
			$(this).siblings('span').html('请输入6-20位字母、数字的密码。').css('color','#000000');
		}
	})
	$('.pwd').blur(function(){
		if($(this).val()!=''){
			val($(this));
		}else{
			$(this).siblings('span').html('请输入6-20位字母、数字的密码。').css('color','#000000');
		}
	})
	$('.pwd1').focus(function(){
		$(this).siblings('span').show();
	})
	$('.pwd1').blur(function(){
		var pwd = $('.pwd').val();
		var pwd1 = $('.pwd1').val();
		if($(this).val()!=''){
			val1(pwd,pwd1);
		}else{
			$(this).siblings('span').html('请输入6-20位字母、数字的密码。').css('color','#000000');
		}
	})
	
	function val1(pwd,pwd1){
		console.log(pwd);
		console.log(pwd1);
		if(pwd == pwd1){
			$('.pwd1').siblings('span').html('密码相同！').css('color','#0088cc');
		}else{
			$('.pwd1').siblings('span').html('密码不一致，请从新输入！').css('color','#ff0000');
		}
	}

	function val(t){
		var user = /^[a-zA-Z0-9_-]{6,16}$/;
		if(user.test(t.val())){
			t.siblings('span').html('正确！').css('color','#0088CC');
			return true;
		}else{
			t.siblings('span').html('输入有误，请核对后再次输入！').css('color','#FF0000');
			return false;
		}
	}
	$('#level').click(function(){
		$(this).siblings('span').show();
	})
	$('#locking').click(function(){
		$(this).siblings('span').show();
	})
</script>

<!--vue-->
<!--<script type="text/javascript">
	var app = new Vue({
		el:'#app',
		data:{
			user:''
		},
		methods:{
			
		}
	});
</script>-->
</body>
</html>