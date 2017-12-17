$('.hw-list li').mouseover(function(){
	$(this).addClass("current").siblings().removeClass("current");
})
// 选项卡
$(".ht-list li").mouseover(function(){
	var index = $(".ht-list li").index(this);
	console.log(index);
	$(this).addClass("active").siblings().removeClass("active");
	$(".hw-box").eq(index).addClass("beer").siblings().removeClass("beer");
})
// 平移卡
var n = 0;
var li_num = $(".choose").length;
$(".right-arrows").click(function(){
	if(n<=0){
		n = li_num-15;
	}
	n--;
	$(".choose").css({'transform':'translateX('+-125*n+'px)'});
})
$(".left-arrows").click(function(){
	if(n>=li_num-11){
		n = -1;
	}
	n++;
	$(".choose").css({'transform':'translateX('+-125*n+'px)'});
})
// 下拉按钮
$(".expend-btn").click(function(){
	$(".item-btn").toggle();
	// $(".brands").css({'width':'1310px','display':'flex','flex-wrap':'wrap'});
})
