$(document).ready(function(){
	
	$('.shop_nav_box ul li').mouseenter(function(){
		$('.shop_nav_box ul li').each(function(n,v){
			$('.shop_nav_box ul li').eq(n).css('background','#333333');
		});
		$(this).css('background','#181818');
	});
	
	$('.show li img').hover(function(){
		$(this).css({
		'transform':'translateX(-20px)',
		'transition':'all .5s'});
	},function(){
		$(this).css('transform','translateX(0px)');
	});
	
	
	
});