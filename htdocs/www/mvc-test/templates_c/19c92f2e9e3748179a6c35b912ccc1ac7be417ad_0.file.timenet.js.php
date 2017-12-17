<?php
/* Smarty version 3.1.30, created on 2017-09-19 08:39:33
  from "/Applications/MAMP/htdocs/smarty/templates/timenet.js" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c0bba54c36b8_31150676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19c92f2e9e3748179a6c35b912ccc1ac7be417ad' => 
    array (
      0 => '/Applications/MAMP/htdocs/smarty/templates/timenet.js',
      1 => 1502934172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c0bba54c36b8_31150676 (Smarty_Internal_Template $_smarty_tpl) {
?>
// 轮播图
var pic=document.getElementById('tulevel');
//console.log(pic);
var left_pic=document.getElementById('left_pic');
//console.log(left_pic);
var right_pic=document.getElementById('right_pic');
//console.log(right_pic);
var all_pic=document.getElementsByClassName('all_pic')[0].children;
//console.log(all_pic);
var circular=document.getElementsByClassName('circular')[0].children;
//console.log(circular);
var dis_mod=document.getElementsByClassName('dis_mod');
//console.log(dis_mod);
var mytime=setInterval(runpic,4000);

var f= 0;
var Run=true;
	function runpic(){
		
		if(Run){
			f++;
		}
		if(f>=all_pic.length){
			f=0;
		}
		if(f<0){
			f=all_pic.length-1;
		}

//console.log(all_pic.length);
		for(var i=0;i<all_pic.length;i++){
			all_pic[i].style.opacity=0;
			dis_mod[i].style.opacity=0;
			circular[i].style.backgroundColor = 'rgba(100,100,100,.4)';
		}
		all_pic[f].style.opacity=1;
		dis_mod[f].style.opacity=1;
		dis_mod[f].style.transition="all 2s"
		circular[f].style.backgroundColor = '#fff';
		circular[f].style.transition = 'all .4s';
		// console.log(n);
		
	}

	pic.onmouseover=function(){
		Run=false;
		clearInterval(mytime);
	}
	pic.onmouseleave=function(){
		Run=true;
		mytime=setInterval(runpic,4000);
	}

	for(var j=0;j<circular.length;j++){
		circular[j].num=j;
		//console.log(circular[j].num);
		circular[j].onmouseover=function(){
			f=this.num;
			runpic();

		}
	}

	left_pic.onclick=function(){
		f--;
		runpic();
	}
	right_pic.onclick=function(){
		f++;
		runpic();
	}


//全球新片+热播剧集
var left_go=document.getElementsByClassName('left_go')[0];

var right_go=document.getElementsByClassName('right_go')[0];

var af=document.getElementById('af');

var al=document.getElementById('al');

var select_one=document.getElementById('select_one');
var select_two=document.getElementById('select_two');

var vanish=document.getElementById('vanish');
var vanish_two=document.getElementById('vanish_two');

var vanishh=document.getElementById('vanishh');
var vanishh_two=document.getElementById('vanishh_two');


run();
function run(){
		right_go.onclick=function(){
		right_go.style.opacity=0;
		left_go.style.opacity=1;
		vanish.style.transform ='translateX(980px)';
		vanish.style.transition ='all.5s linear';
		vanish_two.style.transform ='translateX(-980px)';
		vanish_two.style.transition ='all.5s linear';
		vanishh.style.transform ='translateX(980px)';
		vanishh.style.transition ='all .5s linear';
		vanishh_two.style.transform ='translateX(-980px)';
		vanishh_two.style.transition ='all .5s linear';
	}
		left_go.onclick=function(){
		right_go.style.opacity=1;
		left_go.style.opacity=0;
		vanish.style.transform ='translateX(0px)';
		vanish.style.transition ='all.5s linear';
		vanish_two.style.transform ='translateX(980px)';
		vanish_two.style.transition ='all.5s linear';
		vanishh.style.transform ='translateX(0px)';
		vanishh.style.transition ='all .5s linear';
		vanishh_two.style.transform ='translateX(980px)';
		vanishh_two.style.transition ='all .5s linear';
	}
 }


af.onclick=function(){
		select_one.style.opacity =1;
		af.style.color = "#000";
		select_two.style.opacity = 0;
		al.style.color = "#656565";
		 run();
}
al.onclick=function(){
		select_two.style.opacity = 1;
		al.style.color = "#000";
		select_one.style.opacity= 0;
		af.style.color = "#656565";
		run();
}
	// 热播剧集
var left_god=document.getElementsByClassName('left_go')[1];
//console.log(left_god);
var right_god=document.getElementsByClassName('right_go')[1];
//console.log(right_god);
var myli=document.getElementsByClassName('hottv')[0];
//console.log(myli);
right_god.onclick = function(){
	myli.style.transform='translateX(-964px)';
	myli.style.transition='all .5s linear';
	right_god.style.opacity=0;
	left_god.style.opacity=1;
}
left_god.onclick = function(){
	myli.style.transform='translateX(0px)';
	myli.style.transition='all .5s linear';
	right_god.style.opacity=1;
	left_god.style.opacity=0;
}
//热门电影  热门电视  热门人物
var dy=document.getElementById('dy');
var ds=document.getElementById('ds');
var rr=document.getElementById('rr');
var mov=document.getElementById('mov');
var tv=document.getElementById('tv');
var pop=document.getElementById('pop');
var left_godg=document.getElementsByClassName('left_go')[2];
var right_godg=document.getElementsByClassName('right_go')[2];
var hot_play=document.getElementById('top_mov');
var hot_pl=document.getElementById("top_tv");
var hot_p=document.getElementById("top_p");


function runn(){
		left_godg.onclick = function(){
			right_godg.style.opacity=1;
			left_godg.style.opacity=0;
			hot_play.style.transform='translateX(0px)';
			hot_play.style.transition='all .5s linear';
			hot_pl.style.transform='translateX(0px)';
			hot_pl.style.transition='all .5s linear';
			hot_p.style.transform='translateX(0px)';
			hot_p.style.transition='all .5s linear';
			
		}
		right_godg.onclick = function(){
			right_godg.style.opacity=0;
			left_godg.style.opacity=1;
			hot_play.style.transform='translateX(-964px)';
			hot_play.style.transition='all .5s linear';
			hot_pl.style.transform='translateX(-964px)';
			hot_pl.style.transition='all .5s linear';
			hot_p.style.transform='translateX(-964px)';
			hot_p.style.transition='all .5s linear';
			
		}
}
runn();
dy.onclick = function(){
		mov.style.zIndex = 20;
		pop.style.zIndex = 0;
		tv.style.zIndex = 0;

		mov.style.opacity =1;
		dy.style.color = "#000";
		dy.style.fontWeight =700;
		tv.style.opacity = 0;
		ds.style.color = "#656565";
		ds.style.fontWeight =400;
		pop.style.opacity = 0;
		rr.style.color = "#656565";
		rr.style.fontWeight =400;
		
		 runn();
}
ds.onclick=function(){
		tv.style.opacity = 1;
		ds.style.color = "#000";
		ds.style.fontWeight =700;
		mov.style.opacity = 0;
		dy.style.color = "#656565";
		dy.style.fontWeight =400;
		pop.style.opacity = 0;
		rr.style.color = "#656565";
		rr.style.fontWeight =400;
		tv.style.zIndex = 20;
		mov.style.zIndex = 0;
		pop.style.zIndex = 0;
		runn();
}
rr.onclick=function(){
		pop.style.opacity = 1;
		rr.style.color = "#000";
		rr.style.fontWeight =700;
		mov.style.opacity =0;
		dy.style.color = "#656565";
		dy.style.fontWeight =400;
		tv.style.opacity = 0;
		ds.style.color = "#656565";
		ds.style.fontWeight =400;
		
		pop.style.zIndex = 20;
		mov.style.zIndex = 0;
		tv.style.zIndex = 0;
		runn();
}
// 邮箱地址
var ca = document.getElementsByClassName('ca')[0];
// console.log(ca);
ca.onblur = function(){
	ca.value = '邮箱地址';
}
ca.onfocus = function(){
	ca.value = '';
}

// 头部导航条内的搜索栏
var mfico = document.getElementsByClassName('mfico')[0];
var mfico_inp = document.getElementsByClassName('mfico_inp')[0];
var header_center = document.getElementsByClassName('header_center')[0];
//console.log(mfico_inp);
var n=true;
mfico.onclick = function(){
	if(n){
		mfico.style.backgroundPosition = "-94px -45px";
		mfico_inp.style.display="block";
		header_center.style.display="none";
		n=false;
	}else{
		mfico.style.backgroundPosition = "-75px -45px";
		mfico_inp.style.display="none";
		header_center.style.display="block";
	}
}
var text_s = document.getElementsByClassName("text_s")[0];
var button_s = document.getElementsByClassName("button_s")[0];
var mf = document.getElementsByClassName("mf")[0];
text_s.onfocus=function(){
	this.value='';
	button_s.style.backgroundColor="#1e7dd7";
	mf.style.backgroundPosition = "-75px -45px";
}
text_s.onblur=function(){
	this.value='搜索电影、影人、影院、商品';
	button_s.style.backgroundColor="#fff";
	mf.style.backgroundPosition = "-115px -45px";
}
var t_c =document.getElementsByClassName('alc')[0];
//console.log(t_c);
var mylis=document.getElementsByClassName('mm')[0].children;
// console.log(mylis[0].innerHTML);
var search_show =document.getElementsByClassName('search_show')[0]; 
var search_selcet =document.getElementsByClassName('search_selcet')[0]; 
//console.log(search_selcet);

search_selcet.onmouseover=function(){
	for(var k=0;k<mylis.length;k++){
			mylis[k].onclick=function(){
			t_c.innerHTML=this.innerHTML;
			search_show.style.display = 'none';
		 }	
	}
		search_show.style.display = 'block';
}
// search_selcet.onmouseleave=function(){
// 	if(n){
// 		// for(var i=0;i<mylis.length;i++){
// 		// 	mylis[i].onclick=function(){
// 		// 	t_c.innerHTML=this.innerHTML;
// 			search_show.style.display = 'none';
// 		 // }	
// 		 n=false;
// 	}
	 
// 		else{
// 			search_show.style.display = 'none';
// 		}	
	 	
// }	

<?php }
}
