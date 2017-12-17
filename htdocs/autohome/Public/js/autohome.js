//
//
$(document).ready(function(){
	
	var _height = $('.container').height();
	$('.festival-container').height(_height+10);
	$('.nav-list-brand').hover(function(){
		$('.nav-list-pop li').css('display','block');
	},function(){
		$('.nav-list-pop li').css('display','none');
	});
	$('.nav-list-pop').hover(function(){
		$('.nav-list-pop li').css('display','block');
	},function(){
		$('.nav-list-pop li').css('display','none');
	});
	$('#nav_brand1 dd a').hover(function(){
		$(this).css('color','#ff4200');
	},function(){
		$(this).css('color','#000000');
	});
	$('.nav-list-pop-close').click(function(){
		$('.nav-list-pop li').css('display','none');
	});
	
	//轮播图 #ea3c1f
	
	
	
	
	
	var _line = parseInt($(window).height()/4);
//	console.log(_line);
	$(window).scroll(function(){
		if($(window).scrollTop()>=744){
			$('#floatnav-r-double11').css('display','block');
		}else{
			$('#floatnav-r-double11').css('display','none');
		};
		var _scr = $(window).scrollTop();
		var _a = $('#floatnav-r-double11 ul li a ');
		
		_a.eq(0).addClass('active');
		$('.scroll_a').each(function(){
						var _target=parseInt($(this).offset().top-$(window).scrollTop()-_line);
						var _i=$(this).index();
//						console.log(_i);
//						console.log(_target);
						if (_target<=0) {
							_a.removeClass('active');
							_a.eq(_i-1).addClass('active');
						}
						//如果到达页面底部，给左侧导航最后一个加active
						else if($(document).height()==$(window).scrollTop()+$(window).height()){
							_a.removeClass('active');
							_a.eq(_a.length-1).addClass('active');
						}
					});

			});
			var $li_a = $('#floatnav-r-double11 ul li');
			$li_a.click(function(){
				$(this).addClass('active').siblings().removeClass('active');
				var _i=$(this).index();
				console.log(_i);
				$('html').animate({
					scrollTop:$('.scroll_a').eq(_i+1).offset().top-_line
				},500);
					
			});
	
	//倒计时
	
	var inttime = parseInt(86400*2);//总倒计时间
//	timer(inttime);
	$(function(){
		timer(inttime);
	});
	function timer(inttime){
		window.setInterval(function(){
			var day = 0, h = 0, m = 0, s = 0;//默认值
			if(inttime>0){
				day = Math.floor(inttime / (60*60*24));
				h = Math.floor(inttime / (60*60))-(day*24);
				m = Math.floor(inttime/60)-(day*24*60)-(h*60);
				s = Math.floor(inttime)-(day*24*60*60)-(h * 60 * 60) - (m * 60);
				
			}
			if(day<=9)day = '0'+day;
			if(h<=9)h = '0'+h;
			if(m<=9)m = '0'+m;
			if(s<=9)s = '0'+s;
			$('#stageDay').html(day);
			$('#stageHour').html(h);
			$('#stageMinute').html(m);
			$('#stageSecond').html(s);
			inttime--;
		},1000)
	}
	
	//input
	$('.search-text').focus(function(){
		$('.search-text').val('');
	})
	$('.search-text').blur(function(){
		$('.search-text').val('请输入关键字');
	})
	

});
