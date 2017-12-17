
$(document).ready(function(){
	
	$('.nav-list-brand').hover(function(){
		$('.nav-list-pop li').css('display','block');
	},function(){
		$('.nav-list-pop li').css('display','none');
	});
	
	$('#btnSelectCity').click(function(){
		$('#btnSelectCity i').css('transform','rotate(180deg)');
		$('#lstSelectCity').css('display','block');
	});
	$('.selectcity-close').click(function(){
		$('#btnSelectCity i').css('transform','rotate(0deg)');
		$('#lstSelectCity').css('display','none');
	})
})
	
	
