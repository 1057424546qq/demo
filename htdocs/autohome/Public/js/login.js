$(".login-tab ul li").click(function(){
	var index = $(".login-tab ul li").index(this);
	$(this).addClass("active").siblings().removeClass("active");
	$(".show").addClass("non");
	$(".show").eq(index).removeClass("non");
})
$("#yanz").blur(function() {
    $.post("/Admin/Admin/check_verify", {
        code : $("#yanz").val()
        }, function(data) {
        	console.log(data);
        if (data == true) {
        	   	$('span.e').html('验证码输入正确');
           $('.ee').val('true');
        }else if(data == false){
        		$('span.e').html('');
        		$('.ee').val('flase');
        }
    });
});