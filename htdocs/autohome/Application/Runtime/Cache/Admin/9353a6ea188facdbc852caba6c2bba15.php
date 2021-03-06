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
#main-tab td{ font-size:12px; line-height:20px;}
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
    <td width="99%" align="left" valign="top">您的位置：商品列表</td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="search">
  		<tr>
   		 <td width="90%" align="left" valign="middle">
	         <form method="post" action="">
	         <span>商品名称：</span>
	         <input type="text" name="" value="" class="text-word">
	         <input name="" type="button" value="查询" class="text-but">
	         </form>
         </td>
  		  <td width="10%" align="center" valign="middle" style="text-align:right; width:150px;"><a href="car_info.html" target="mainFrame" onFocus="this.blur()" class="add">新增商品</a></td>
  		</tr>
	</table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      <tr>
        <th align="center" valign="middle" class="borderright">序号</th>
        <th align="center" valign="middle" class="borderright">图片</th>
        <th align="center" valign="middle" class="borderright">标题</th>
        <th align="center" valign="middle" class="borderright">简介</th>
        <th align="center" valign="middle" class="borderright">活动</th>
        <th align="center" valign="middle" class="borderright">价格</th>
        <th align="center" valign="middle" class="borderright">销量</th>
        <th align="center" valign="middle" class="borderright">链接</th>
        <th align="center" valign="middle">操作</th>
      </tr>
      
      <tr v-for="(v,k) in list" onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="center" valign="middle" class="borderright borderbottom" >{{k+1}}</td>
        <td align="center" valign="middle" class="borderright borderbottom"><img :src="'/public/img/upload/'+v.img" alt="" style="width: 100px;"/></td>
        <td align="" valign="middle" class="borderright borderbottom" style="width: 300px;">{{v.title}}</td>
        <td align="" valign="middle" class="borderright borderbottom" style="width: 300px;">{{v.des}}</td>
        <td align="center" valign="middle" class="borderright borderbottom">{{v.active}}</td>
        <td align="center" valign="middle" class="borderright borderbottom">{{v.price}}</td>
        <td align="center" valign="middle" class="borderright borderbottom">{{v.sales}}</td>
        <td align="center" valign="middle" class="borderright borderbottom locking"><a target="_blank" :href="v.url">链接</a></td>
        <td align="center" valign="middle" class="borderbottom">
        	<a :href="'car_edit/id/'+v.id" target="mainFrame"  :data-id="v.id" onFocus="this.blur()" class="edit">
        		<button id="btnEdit" type="button" class="btn btn-warning"> 
			<span class="iconfont icon-xiugai" aria-hidden="true"></span>修改 
			</button>
        	</a>
        	
        	<span class="gray">&nbsp;|&nbsp;</span>
        	<a :href="'car_del/id/'+v.id" target="mainFrame" onclick="return confirm('确定删除吗？')"  :data-id="v.id"  class="del">
        		<button id="btnDel" type="button"  class="btn btn-danger" data-toggle="modal" data-target="#DeleteForm" onclick=""> 
				<span class="iconfont icon-shanchu" aria-hidden="true"></span>删除 
			</button>
        	</a>
        
        </td>
      </tr>
      
    </table></td>
    </tr>
  <tr>
    <td align="left" valign="top" class="fenye">11 条数据 1/1 页&nbsp;&nbsp;<a href="#" target="mainFrame" onFocus="this.blur()">首页</a>&nbsp;&nbsp;<a href="#" target="mainFrame" onFocus="this.blur()">上一页</a>&nbsp;&nbsp;<a href="#" target="mainFrame" onFocus="this.blur()">下一页</a>&nbsp;&nbsp;<a href="#" target="mainFrame" onFocus="this.blur()">尾页</a></td>
  </tr>
</table>

<!--js-->

<!--vue-->
<script type="text/javascript">
	var car_list = new Vue({
		el:'#main-tab',
		data:{
			list:''
		},
		methods:{},
		mounted:function(){
			var _this = this;
			$.get('user_list',function(data){
				data = JSON.parse(data);
				_this.list = data.car_list;
			})
			
		}
	})
</script>



</body>
</html>