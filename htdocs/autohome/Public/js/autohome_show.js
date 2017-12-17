$(document).ready(function(){
	//
	var count = $("#imageMenu li").length - 5; /* 显示 6 个 li标签内容 */
	var interval = $("#imageMenu li:first").width();
	var curIndex = 0;
	
	$('.scrollbutton').click(function(){
		if( $(this).hasClass('disabled') ) return false;
		
		if ($(this).hasClass('smallImgUp')) --curIndex;
		else ++curIndex;
		
		$('.scrollbutton').removeClass('disabled');
		if (curIndex == 0) $('.smallImgUp').addClass('disabled');
		if (curIndex == count-1) $('.smallImgDown').addClass('disabled');
		
		$("#imageMenu ul").stop(false, true).animate({"marginLeft" : -curIndex*interval + "px"}, 600);
	});
	
	// 解决 ie6 select框 问题
	$.fn.decorateIframe = function(options) {
        if ($.browser.msie && $.browser.version < 7) {
            var opts = $.extend({}, $.fn.decorateIframe.defaults, options);
            $(this).each(function() {
                var $myThis = $(this);
                //创建一个IFRAME
                var divIframe = $("<iframe />");
                divIframe.attr("id", opts.iframeId);
                divIframe.css("position", "absolute");
                divIframe.css("display", "none");
                divIframe.css("display", "block");
                divIframe.css("z-index", opts.iframeZIndex);
                divIframe.css("border");
                divIframe.css("top", "0");
                divIframe.css("left", "0");
                if (opts.width == 0) {
                    divIframe.css("width", $myThis.width() + parseInt($myThis.css("padding")) * 2 + "px");
                }
                if (opts.height == 0) {
                    divIframe.css("height", $myThis.height() + parseInt($myThis.css("padding")) * 2 + "px");
                }
                divIframe.css("filter", "mask(color=#fff)");
                $myThis.append(divIframe);
            });
        }
    }
    $.fn.decorateIframe.defaults = {
        iframeId: "decorateIframe1",
        iframeZIndex: -1,
        width: 0,
        height: 0
    }
    //放大镜视窗
    $("#bigView").decorateIframe();

    //点击到中图
    var midChangeHandler = null;
	
    $("#imageMenu li img").bind("click", function(){
		if ($(this).attr("id") != "onlickImg") {
			midChange($(this).attr("src").replace("small", "mid"));
			$("#imageMenu li").removeAttr("id");
			$(this).parent().attr("id", "onlickImg");
		}
	}).bind("mouseover", function(){
		if ($(this).attr("id") != "onlickImg") {
			window.clearTimeout(midChangeHandler);
			midChange($(this).attr("src").replace("small", "mid"));
			$(this).css({ "border": "3px solid #959595" });
		}
	}).bind("mouseout", function(){
		if($(this).attr("id") != "onlickImg"){
			$(this).removeAttr("style");
			midChangeHandler = window.setTimeout(function(){
				midChange($("#onlickImg img").attr("src").replace("small", "mid"));
			}, 1000);
		}
	});

    function midChange(src) {
        $("#midimg").attr("src", src).load(function() {
            changeViewImg();
        });
    }

    //大视窗看图
    function mouseover(e) {
        if ($("#winSelector").css("display") == "none") {
            $("#winSelector,#bigView").show();
        }

        $("#winSelector").css(fixedPosition(e));
        e.stopPropagation();
    }


    function mouseOut(e) {
        if ($("#winSelector").css("display") != "none") {
            $("#winSelector,#bigView").hide();
        }
        e.stopPropagation();
    }


    $("#midimg").mouseover(mouseover); //中图事件
    $("#midimg,#winSelector").mousemove(mouseover).mouseout(mouseOut); //选择器事件

    var $divWidth = $("#winSelector").width(); //选择器宽度
    var $divHeight = $("#winSelector").height(); //选择器高度
    var $imgWidth = $("#midimg").width(); //中图宽度
    var $imgHeight = $("#midimg").height(); //中图高度
    var $viewImgWidth = $viewImgHeight = $height = null; //IE加载后才能得到 大图宽度 大图高度 大图视窗高度

    function changeViewImg() {
        $("#bigView img").attr("src", $("#midimg").attr("src").replace("mid", "big"));
    }

    changeViewImg();

    $("#bigView").scrollLeft(0).scrollTop(0);
    function fixedPosition(e) {
        if (e == null) {
            return;
        }
        var $imgLeft = $("#midimg").offset().left; //中图左边距
        var $imgTop = $("#midimg").offset().top; //中图上边距
        X = e.pageX - $imgLeft - $divWidth / 2; //selector顶点坐标 X
        Y = e.pageY - $imgTop - $divHeight / 2; //selector顶点坐标 Y
        X = X < 0 ? 0 : X;
        Y = Y < 0 ? 0 : Y;
        X = X + $divWidth > $imgWidth ? $imgWidth - $divWidth : X;
        Y = Y + $divHeight > $imgHeight ? $imgHeight - $divHeight : Y;

        if ($viewImgWidth == null) {
            $viewImgWidth = $("#bigView img").outerWidth();
            $viewImgHeight = $("#bigView img").height();
            if ($viewImgWidth < 200 || $viewImgHeight < 200) {
                $viewImgWidth = $viewImgHeight = 800;
            }
            $height = $divHeight * $viewImgHeight / $imgHeight;
            $("#bigView").width($divWidth * $viewImgWidth / $imgWidth);
            $("#bigView").height($height);
        }

        var scrollX = X * $viewImgWidth / $imgWidth;
        var scrollY = Y * $viewImgHeight / $imgHeight;
        $("#bigView img").css({ "left": scrollX * -1, "top": scrollY * -1 });
        $("#bigView").css({ "top": 0, "left": $(".preview").offset().left + 185});

        return { left: X, top: Y };
    }
	//放大镜结束
	
	$('#selectcity .select-value').click(function(){
		$('#selectcity').css('z-index','15');
		$('.selectcity-list').show();
		event.stopPropagation(); 
	})
	$('.selectcity-tab-header ul li').click(function(){
		var _i = $(this).index();
		$(this).addClass('current').siblings().removeClass('current');
		$('.selectcity-tab-content div').eq(_i).show().siblings().hide();
		event.stopPropagation();
	})
	//省份选择
	$('#selectcity-tab-content-province ul li a').click(function(){
		$('.selectcity-tab-header ul li a.selectcity-tab-province').html($(this).html());
		$('.pro').html($(this).html());
		$('.selectcity-list').show();
		$('.selectcity-tab-header ul li').eq(1).addClass('current').siblings().removeClass('current');
		$('.selectcity-tab-content div').eq(1).show().siblings().hide();
		event.stopPropagation();
	})
	//城市选择
	$('#selectcity-tab-content-city ul li a').click(function(){
		$('.selectcity-tab-city').html($(this).html());
		$('.city').html($(this).html());
	})
	
	
	$('#detailTab li.tab-item').click(function(){
		var _i = $(this).index();
		var i = $('#detail-bottom-list').offset().top;
		$(this).addClass('current').siblings().removeClass('current');
		$('.tab-content ul li.tab-content-item').eq(_i).addClass('current').siblings().removeClass('current');
		if($(window).scrollTop()>=i){
			$(window).scrollTop(i);
		}
		$('#detail-cs-menu').css({'position':'absolute'})
		
	})
	$('.select-car .select-value').click(function(){
		$('.select-list').show();
		event.stopPropagation();
	})
	$('.select-car .select-list ul li').hover(function(){
		$(this).addClass('current').siblings().removeClass('current');
	})
	window.document.onclick = function(){
		$('.selectcity-list').hide();
		$('.select-list').hide();
	}
	//
	
	$('#paramConfUL li a').click(function(){
		var _i = $(this).parent().index();
		$('#detail-cs-menu ul li').eq(_i).addClass('current').siblings().removeClass('current');
		$("html, body").animate({
	      scrollTop: $($(this).attr("href")).offset().top-50 + "px"
	    }, {
	      duration: 500,
	      easing: "swing"
	    });
	    return false;
	})
	
	//悬停
	
	
	$(window).scroll(function(){
		var detTop = $('.detail-main').offset().top,
		    serTop = $('.detail-service').offset().top,
		    menTop = $('.detail-cs-tip').offset().top,
		    winTop = $(window).scrollTop();
		
		if(winTop>=detTop){	
			$('#detailTab').css({'position':'fixed'});
		}else if(winTop<detTop){
			$('#detailTab').css({'position':'absolute'});
		}
		if(winTop>=serTop){
			$('#detailService').css({'position':'fixed','top':'0'});
		}else if(winTop<serTop){
			$('#detailService').css({'position':'relative'});
		}
		if(winTop+24>=menTop){
			$('#detail-cs-menu').css({'position':'fixed','top':'60px'})
		}else if(winTop+24<menTop){
			$('#detail-cs-menu').css({'position':'absolute'})
		}
	})
	
})
