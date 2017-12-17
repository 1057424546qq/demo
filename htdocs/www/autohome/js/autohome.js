//
//
window.onload = function(){
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
	slideImg('myimg1','#ccc','#EA3C1F');
	slideImg('myimg','#fafafa','#EA3C1F');
	slideImg('myimg3','#fafafa','#EA3C1F')
	
	function slideImg(id,color_old,color_new){
			console.log(id);
			var myimg = document.getElementById(id);
			
			var myli = myimg.getElementsByClassName("img_list")[0].children;
			var mycircle = myimg.getElementsByClassName("img_circle")[0].children;
			var img_left= myimg.getElementsByClassName("img_left")[0];
			var img_right= myimg.getElementsByClassName("img_right")[0];

			var isRun=true;
			var n=0;
			var mytime=setInterval(runImg,4000);

			function runImg(){
				if(isRun){
					n++;
				}
				if(n>=myli.length){
					n=0;
				}
				if(n<0){
					n=myli.length-1;
				}
				
				for(var i=0;i<myli.length;i++){
					myli[i].style.opacity=0;
					mycircle[i].style.backgroundColor = color_old;
				}
				myli[n].style.opacity=1;
				mycircle[n].style.backgroundColor = color_new;
			}

			myimg.onmouseover=function(){
				isRun=false;
				clearInterval(mytime);
			}
			myimg.onmouseleave=function(){
				isRun=true;
				mytime=setInterval(runImg,4000);
			}

			for(var i=0;i<mycircle.length;i++){
				mycircle[i].num=i;
				mycircle[i].onmouseover=function(){
					n=this.num;
					runImg();
				}
			}

//			img_left.onclick=function(){
//				n--;
//				runImg();
//			}
//			img_right.onclick=function(){
//				n++;
//				runImg();
//			}
	}
	


}
