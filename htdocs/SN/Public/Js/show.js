$(".beer-list li").mouseover(function(){
	var index = $(".beer-list li").index(this);
	$(".pro-main img").eq(index).addClass("two").siblings().removeClass("two");
})
$(".wrapp-box ul li").click(function(){
    var index=$(".wrapp-box ul li").index(this)-1;
    $(this).addClass("active").siblings().removeClass("active");
    $(".a_list").eq(index).addClass("qt").siblings().removeClass("qt");
})
var n = 0;
var li_num = $(".ha-list ul li").length;
var m = $('.cricle li ').length;
var ii = 0;
$(".r-arrow").click(function(){
    if(n<=0){
        n = li_num-12;
    }
    n--;
    $(".ha-list ul li").css({'transform':'translateX('+-770*n+'px)'});
    if(ii<2){
        ii++;
        $('.cricle li').eq(ii).addClass('page-dot').siblings().removeClass('page-dot');
    }else{
        ii=0;
        $('.cricle li').eq(ii).addClass('page-dot').siblings().removeClass('page-dot');
    }
    
})
$(".l-arrow").click(function(){
    if(n>=li_num-13){
        n = -1;
    }
    n++;
    $(".ha-list ul li").css({'transform':'translateX('+-770*n+'px)'});
    if(ii>-3){
        ii--;
        $('.cricle li ').eq(ii).addClass('page-dot').siblings().removeClass('page-dot');
    }else{
        ii = -1;
        $('.cricle li ').eq(ii).addClass('page-dot').siblings().removeClass('page-dot');
    }
})
$('.pages ul li ').click(function(){
    var _i = $(this).index();
    $(".ha-list ul li").css({'transform':'translateX('+-770*_i+'px)','transition':'all 0.5s'});
    $('.cricle li ').eq(_i).addClass('page-dot').siblings().removeClass('page-dot');
})
var oli_num = $(".titin-list ul li").length;
$(".pre").click(function(){
    if(n>=oli_num-8){
        n = -1 ;
    }
    n++;
    $(".titin-list ul li").css({'transform':'translateX('+-950*n+'px)','transition':'all 0.5s'});
})
$(".next").click(function(){
    if(n<=0){
        n = oli_num-7;
    }
    n--;
    $(".titin-list ul li").css({'transform':'translateX('+-950*n+'px)','transition':'all 0.5s'});
})
// 放大镜
$(function(){  
        $.fn.magnifying = function(){  
            var that = $(this),  
             $imgCon = that.find('.con-fangDaIMg'),//正常图片容器  
                $Img = $imgCon.find('img'),//正常图片，还有放大图片集合  
               $Drag = that.find('.magnifyingBegin'),//拖动滑动容器  
               $show = that.find('.magnifyingShow'),//放大镜显示区域  
            $showIMg = $show.find('img'),//放大镜图片  
            $ImgList = that.find('.con-FangDa-ImgList > li >img'),  
            multiple = $show.width()/$Drag.width();//倍数  
      
            $imgCon.mousemove(function(e){  
                $Drag.css('display','block');  
                $show.css('display','block');  
                //获取坐标     
                var iX = e.pageX - $(this).offset().left - $Drag.width()/2,  
                    iY = e.pageY - $(this).offset().top - $Drag.height()/2,   
                    MaxX = $imgCon.width()-$Drag.width(),  
                    MaxY = $imgCon.height()-$Drag.height();  
                /*下面部分，判断最大最小值 */
 
      
                iX = iX > 0 ? iX : 0;  
                iX = iX < MaxX ? iX : MaxX;  
                iY = iY > 0 ? iY : 0;  
                iY = iY < MaxY ? iY : MaxY;    
                $Drag.css({left:iX+'px',top:iY+'px'});            
                $showIMg.css({marginLeft:-multiple*iX+'px',marginTop:-multiple*iY+'px'});   
            });  
            $imgCon.mouseout(function(){  
                $Drag.css('display','none');  
                $show.css('display','none');   
            });  
      
            $ImgList.click(function(){  
                var NowSrc = $(this).attr('src');  
                $Img.attr('src',NowSrc); 
                $showIMg.attr('src',NowSrc);  
                console.log(NowSrc);
                $(this).parent().addClass('actives').siblings().removeClass('actives');  
            });   
        }  
        $("#fangdajing").magnifying();
    });