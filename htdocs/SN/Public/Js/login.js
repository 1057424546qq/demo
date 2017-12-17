$(".login-tab ul li").click(function(){
	var index = $(".login-tab ul li").index(this);
	$(this).addClass("active").siblings().removeClass("active");
	$(".show").addClass("non");
	$(".show").eq(index).removeClass("non");
})
$("#user_name").focus(function(){
	$("#user_name").val("");
	$("#user_name").css("color","#333");
})
$("#user_name").blur(function(){
	if($("#user_name").val()==''){
		$("#user_name").val("用户名/手机/邮箱/门店会员卡号");
		$("#user_name").css("color","#ccc");
	}else{
		return false;
	}
})
$("#password").focus(function(){
	$("#password").val("");
	$("#password").css("color","#333");
})
$("#password").blur(function(){
	if($("#password").val()==''){
		$("#password").val("密码");
		$("#password").css("color","#ccc");
	}else{
		return false;
	}
})