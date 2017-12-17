$(".send-msg").click(function(){
	var Reg = /^1[3|4|5|7|8][0-9]\d{4,8}$/;
	var val = $(".pNum").val()
	if(val.length==''){
		$("#error1").show();
		$("#error1").html("注册手机号不能为空!");
	    return false;
	}else if(Reg.test(val)){
		$("#error1").hide();
		  var time = 30;
		  function timeCountDown(){
			   if(time==0){
				   clearInterval(timer);
				   $('.send-msg').html("发送验证码");
				   return true;
			   }
			   $('.send-msg').html(time+"S后再次发送");
			   time--;
			   return false;
	    }
		  timeCountDown();
		  var timer = setInterval(timeCountDown,1000);
  	}
})
$(".pNum").blur(function(){
	if($(".pNum").val().length==''){
	    $("#error1").css("display","block");
	    $("#error1").html("注册手机号不能为空！");
	    return false;
	 }else if(!$(".pNum").val().match(/^1[3|4|5|7|8][0-9]\d{4,8}$/)){
	 		$("#error1").show();
	 		$("#error1").html("注册手机号码格式错误！");
	    	return false;
	 	}else{
	 		$("#error1").hide();
	        $("i.oko").show();
	        return true;
	 	}
})
$(".yz").blur(function(){
	if($(".yz").val().length<6){
	 	$("#error2").show();
	 	return false;
 }else{
	 	$("#error2").hide();
	    return true;
 }	
}) 
$("#pwd").focus(function(){
	$("#pd").hide();
	$(".suggestion").show();
	if($("#pwd").val().length!=0){
		$("i.eye").show();
		if((/^[a-z0-9_-]{5,18}$/).test($("#pwd").val())){
			$(".safe-level").hide();
			$("#pd").hide();
			$(".suggestion").hide();
			$("i.eye").hide();
			$(".tok").show();

        return true;
    }
	}
}) 
$("#pwd").keyup(function(){
	if($("#pwd").val()!=''){
		$("i.eye").show();
    }else{
    	$("i.eye").hide();
    }

})
var Is = 1;
$("i.eye").click(function(){
	$(".suggestion").hide();
	$("#pd").show();
	if(Is == 1){
		$("i.eye").css("background-position","-25px -93px");
		$("#pwd").prop('type','password');
		Is = 0;
		return false;
	}
	if(Is == 0){
		$("i.eye").css("background-position","-50px -93px");
		$("#pwd").prop('type','text');
		Is = 1;
	}
})
$("#pwd").blur(function(){
	var password=$("#pwd").val();
	var password1=/^[0-9]{6,10}/;
	if(password.length==0){
	    $(".tishi-msg").show();
	    return false;
	}else if(!password1.test(password)){
	        $(".tishi-msg").show();
	         return false;
	     }else{
	         $(".tishi-msg").hide();
	     }
})