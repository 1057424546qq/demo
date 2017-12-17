$(".inp").blur(function(){
	alert(1);
	$(".place").html("请输入手机号");
})
$(".inp").focus(function(){
	$(".place").html("");
})