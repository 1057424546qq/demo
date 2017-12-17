// 关闭
	$('.guanbi').click(function(){
		$('.nav').css('display','none');
	})
	$('.net').hover(function(){
		$('.ng-sn-site-nav').css('display','block');
	},function(){
		$('.ng-sn-site-nav').css('display','none');
	})
// 输入框
	var keyword=document.getElementsByClassName('search-keyword')[0];
	var arr=['海外购自营纸尿裤满399减100','冰箱洗衣机 最高减1500','三只松鼠','索尼美颜相机','抽奖赢空调'];
	var ininp = true;
	var p= -1;
	var runInp=setInterval(runFont,4000);
		function runFont(){
			if(ininp){
				p++;
			}
			if(p==arr.length){
				p=0;
			}
			keyword.placeholder = arr[p];
			}
			keyword.onfocus=function(){
				ininp = false;
				clearInterval(runInp);
				keyword.placeholder=' ';
			}
			keyword.onblur = function(){
				ininp = true;
				runInp = setInterval(runFont,4000);
		}
// 轮播图
	slideImg('myimg');
	function slideImg(id){
		var myimg = document.getElementById(id);
		var myli = myimg.getElementsByClassName('img_list')[0].children;
		var mycircle = myimg.getElementsByClassName('img_circle')[0].children;
		console.log(mycircle);
		var img_left = myimg.getElementsByClassName('img_left')[0];
		var img_right = myimg.getElementsByClassName('img_right')[0];
		var isRun = true;
		var n = 0;
		var mytime = setInterval(runImg,2000);
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
				myli[i].style.display = 'none';
				mycircle[i].className = 'page-item';
			}
			myli[n].style.display = 'block';
			mycircle[n].className = 'page-item active';
		}
		myimg.onmouseover = function(){
			isRun = false;
			clearInterval(mytime);
		}
		myimg.onmouseleave = function(){
			isRun = true;
			mytime = setInterval(runImg,2000);
		}
		for(var i=0;i<mycircle.length;i++){
			mycircle[i].num = i;
			mycircle[i].onmouseover = function(){
				n = this.num;
				runImg();
			}
		}
		img_left.onclick = function(){
			n--;
			runImg();
		}
		img_right.onclick = function(){
			n++;
			runImg();
		}
	}
//选项卡
 $(".tab-nav ul li").mouseover(function(){
        var index=$(".tab-nav ul li").index(this);
        $(this).addClass("current").siblings().removeClass("current");
        $(".tab-content").eq(index).addClass("one").siblings().removeClass("one");
    })


	