<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="/public/css/css.css" type="text/css" rel="stylesheet" />
<link href="/public/css/main.css" type="text/css" rel="stylesheet" />
<link href="/public/cjk/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="/public/css/xcCOnfirm.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="http://at.alicdn.com/t/font_455632_g5jmd49otuoywrk9.css" />
<link rel="shortcut icon" href="/Public/img/main/favicon.ico" />
<script type="text/javascript" src="/public/cjk/vue.js"></script>
<script type="text/javascript" src="/public/cjk/jquery.js"></script>
<script type="text/javascript" src="/Public/js/xcConfirm.js"></script>
<style>
body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF; float:left}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{color: #000; height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(/Public/img/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url(/Public/img/main/add.jpg) no-repeat -3px 7px #548fc9; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF; float:right}
#search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
#main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
#main-tab th{text-align: center; font-size:12px; background:url(/Public/img/main/list_bg.jpg) repeat-x; height:32px; line-height:32px;}
#main-tab td{ font-size:12px; line-height:40px;}
#main-tab td a{ font-size:12px; color:#548fc9;}
#main-tab td a:hover{color:#565656; text-decoration:underline;}
.bordertop{ border-top:1px solid #ebebeb}
.borderright{ border-right:1px solid #ebebeb}
.borderbottom{ border-bottom:1px solid #ebebeb}
.borderleft{ border-left:1px solid #ebebeb}
.gray{ color:#dbdbdb;}
td.fenye{ padding:10px 0 0 0; text-align:right;}
.bggray{ background:#f9f9f9}

</style>
<style>
.switch{
    width: 95px;
    margin: 0;
    margin-bottom: 10px;
}
.btn_fath{
  margin-top: 10px;
  position: relative;
  border-radius: 20px;
}

.btn1{
  float: left;
}

.btn2{
  float: right;
}
.btnSwitch{
	padding: 0;
  height: 35px;
  width: 40px;
  border:none;
  color: #fff;
  line-height: 35px;
  font-size: 15px;
  text-align: center;
  z-index: 1;
}

.move{
  z-index: 100;
  width: 35px;
  border-radius: 50%;
  height: 35px;
  position: absolute;
  cursor: pointer;
  border: 1px solid #828282;
  background-color: #f1eff0;
  box-shadow: 1px 2px 2px 1px #fff inset,0 0 5px 1px #999;
}
.on .move{
  left: 60px;
}
.on.btn_fath{
  background-color: #5281cd;
}
.off.btn_fath{
  background-color: #828282;
}
.edit span{margin-right: 5px;}
.del span{margin-right: 5px;}
</style>

</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：管理员列表</td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
  		<tr>
   		 <td width="90%" align="left" valign="middle">
	         <form method="post" action="">
	         <span>管理员：</span>
	         <input type="text" name="" value="" class="text-word">
	         <input name="" type="button" value="查询" class="text-but">
	         </form>
         </td>
  		  <td width="10%" align="center" valign="middle" style="text-align:right; width:150px;"><a href="main_info.html" target="mainFrame" onFocus="this.blur()" class="add">新增管理员</a></td>
  		</tr>
	</table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
        <th align="center" valign="middle" class="borderright">编号</th>
        <th align="center" valign="middle" class="borderright">管理帐号</th>
        <th align="center" valign="middle" class="borderright">权限</th>
        <th align="center" valign="middle" class="borderright">锁定状态</th>
        <th align="center" valign="middle" class="borderright">最后登录</th>
        <th align="center" valign="middle">操作</th>
      </tr>
      <tr v-for="(v,k) in list" onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom" >{{k+1}}</td>
        <td align="center" valign="middle" class="borderright borderbottom">{{v.user}}</td>
        <td align="center" valign="middle" class="borderright borderbottom level" >{{v.level}}</td>
        <td align="center" valign="middle" class="borderright borderbottom locking"> 
        	<div class="switch" >
			<div id="btn6" class="btn_fath clearfix" :class="[v.locking==0?'on':'off']" onclick="toogle(this)">
			    <div class="move" :data-state="[v.locking==0?'on':'off']"></div>
			    <div class="btnSwitch btn1">ON</div>
			    <div class="btnSwitch btn2 ">OFF</div>
			</div>
		</div>	  
        </td>
        <td align="center" valign="middle" class="borderright borderbottom">{{v.last_time}}</td>
        <td align="center" valign="middle" class="borderbottom">
        	<a :href="'main_edit/id/'+v.id" target="mainFrame"  :data-id="v.id" onFocus="this.blur()" class="edit">
        		<button id="btnEdit" type="button" class="btn btn-warning"> 
			<span class="iconfont icon-xiugai" aria-hidden="true"></span>修改 
			</button>
        	</a>
        	
        	<span class="gray">&nbsp;|&nbsp;</span>
        	<a href="javascript:;" target="mainFrame" onclick="return confirm('确定删除吗？')" @click="del" :data-id="v.id"  class="del">
        		<button id="btnDel" type="button"  class="btn btn-danger" data-toggle="modal" data-target="#DeleteForm" onclick=""> 
				<span class="iconfont icon-shanchu" aria-hidden="true"></span>删除 
			</button>
        	</a>
        
        </td>
      </tr>
      
    </table>
    
    </td>
    </tr>
  <tr>
    <td align="left" valign="top" class="fenye">11 条数据 1/1 页&nbsp;&nbsp;<a href="#" target="mainFrame" onFocus="this.blur()">首页</a>&nbsp;&nbsp;<a href="#" target="mainFrame" onFocus="this.blur()">上一页</a>&nbsp;&nbsp;<a href="#" target="mainFrame" onFocus="this.blur()">下一页</a>&nbsp;&nbsp;<a href="#" target="mainFrame" onFocus="this.blur()">尾页</a></td>
  </tr>
</table>

<!--js-->

<!--vue-->
<script type="text/javascript">
	 var app = new Vue({
	 	el:'#main-tab',
	 	data:{
	 		list:'',
	 		level:['信息录入员','一般管理员','超级管理员'],
	 		locking:['未锁定','已锁定'],
	 		super_user:''
	 	},
	 	methods:{
	 		
	 		del:function(e){
	 			$id = e.target.dataset.id;
	 			$.get('/admin/admin/main_del',{id:$id},function(data){
	 				if(data==1){
	 					alert('删除成功！');
	 					location.replace('main_list.html');
	 				}else{
	 					alert('删除失败！');
	 					location.replace('main_list.html');
	 				}
	 			})
	 		}
	 		
	 	},
	 	mounted:function(){
	 		var _this = this;
	 		$.get('/admin/admin/user_list',function(data){
	 			data = JSON.parse(data);
	 			_this.list = data.list;
	 			
	 		})
	 		
	 	}
	 })
</script>

<script type="text/javascript">  
function toogle(th){
	var t = th;
	var txt=  "请输入操作口令：";
//	$('.inputBox')
	window.wxc.xcConfirm(txt, window.wxc.xcConfirm.typeEnum.input,{
			onOk:function(v){
				$.get('user_list',function(data){
					data = JSON.parse(data);
//					console.log(data.super_user[0]['super_user']);
					console.log(v);
					if(v==data.super_user[0]['super_user']){
						alert("口令正确！");
						aa(t);
						return false;
					}else{
						alert("口令错误！");
						return false;
						
					}
				})
			}
		});
function aa(t){
	var ele = $(t).children(".move"); 
	if(ele.attr("data-state") == "on"){
	    ele.animate({left: "0"}, 300, function(){  
	      ele.attr("data-state", "off");   
	    }); 
	    $.get('zt',{locking:1},function(data){
	    		console.log(data);
	    });
	    $(t).removeClass("on").addClass("off");  
	}else if(ele.attr("data-state") == "off"){
	    ele.animate({left: '60px'}, 300, function(){  
	      $(this).attr("data-state", "on");  
	    });  
	    $.get('zt',{locking:0},function(data){
	    
	    		console.log(data);
	    });
	    $(t).removeClass("off").addClass("on");  
	  }
	
}
						
	    
}  
</script>

</body>
</html>