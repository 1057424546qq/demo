//
//
//
	$(document).ready(function(){
		 $iwidth = $('.title span i').innerWidth();
		 $width = $('.title span i').offset().left;
		 
		
		 	
		 	$bj = '#333';
		 	$span = '#333';
		 	$font = '#fff';
		 	$span_hover = '#444';
		
		 
		
		 
		 $('.skin_box b').click(function(){
		 	$('.skin').css('display','block');
		 });
		 
		 $('.skin li').click(function(){
		 	 var li = $(this).val();
		 	 if(li==1){
		 	 	 localStorage.$bj = '#333';
				 localStorage.$span = '#333';
				 localStorage.$font = '#fff';
				 localStorage.$span_hover = '#444';
		 	 }
		 	 if(li==2){
		 	 	localStorage.$bj = '#2e2cff';
				localStorage.$font = '#fff';
				localStorage.$span_hover = '#2927fc';
		 	 }
		 	 if(li==3){
		 	 	localStorage.$bj = '#fc273e';
				localStorage.$font = '#fff';
				localStorage.$span_hover = '#fc2752';
		 	 }
		 	 if(li==4){
		 	 	localStorage.$bj = '#a800fc';
				localStorage.$font = '#fff';
				localStorage.$span_hover = '#b52cf9';
		 	 }
		 	 if(li==5){
		 	 	$('.color').css({'display':'block','z-index':'100'});
		 	 	$('body').css('background','rgba(50,50,50,0.3)');
		 	 	$('#f').click(function(){
		 	 		$('body').css('background','');
		 	 		$('.color').css('display','none');
		 	 	});
		 	 	$('#t').click(function(){
		 	 		$('body').css('background','');
		 	 		$('.color').css('display','none');
		 	 		localStorage.$bj = $('#mycolor').val();
					localStorage.$span_hover = $('#mycolor').val();
					parent.location.reload();
		 	 	});
				localStorage.$font = '#fff';
		 	 }
			$('.skin').css('display','none');
			mycolor();
		});
		
		function mycolor(){
			
			$('.container').css({'background':localStorage.$bj,'opacity':'0.5'})
			
			$('.bj').css('background',localStorage.$bj);
			
			$('.skin_box').hover(function(){
				$(this).css('background',localStorage.$span_hover);
			},function(){
				$(this).css('background','');
			});
		//顶部 浮动效果
		$('.title span i').mouseenter(function(){
			$('.user').css({'display':'block','width':$iwidth,'left':$width});
			$(this).css('background',localStorage.$span_hover);
		});
		$('.title span i').mouseleave(function(){
			$('.user').css('display','none');
			$dis = $('.user').css('display');
			if($dis=='none'){
				$('.title span i').css('background','');
			}	
		});
		$('.user').hover(function(){
			$(this).css({'display':'block'});
		},function(){
			$(this).css('display','none');
		});
		$('.user li').hover(function(){
			$('.user li').each(function(n,v){
				$('.user li').eq(n).css('background',localStorage.$font);
			});
			$(this).css({'background':localStorage.$span_hover,'color':localStorage.$font});
			
		},function(){
			$(this).css({'background':localStorage.$font,'color':'#111111'});
		});
		
		$('.skin li').hover(function(){
			$('.skin li').each(function(n,v){
				$('.skin li').eq(n).css('background',localStorage.$font);
			});
			$(this).css({'background':localStorage.$span_hover,'color':localStorage.$font});
			
		},function(){
			$(this).css({'background':localStorage.$font,'color':'#111111'});
		});
		
		
		}
		mycolor();
		
		
		
	});