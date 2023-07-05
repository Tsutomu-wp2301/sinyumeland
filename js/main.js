// JavaScript Document
//main.js


//ページ内スクロール

//ボタン側→.btn_scroll
//コンテンツ側→con_scroll

$(function() {
	$(".btn_scroll").click(function () {
		var i = $(".btn_scroll").index(this)
		var p = $(".con_scroll").eq(i).offset().top;
		$('html,body').animate({ scrollTop: p }, 'fast');
		return false;
	});
});

//to_ top
$(document).ready(function() {
	var pagetop = $('.pagetop');
	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
			pagetop.fadeIn();
		} else {
			pagetop.fadeOut();
		}
	});
	pagetop.click(function () {
		$('body, html').animate({ scrollTop: 0 }, 500);
		return false;
	});
});

	/*Q&Aアコーディオン*/
$(function(){
        $("#qanda dt").on("click", function() {
            $(this).next().slideToggle();
            $(this).toggleClass("active");//追加部分
        });
});


/*parallax*/
/*jQuery(document).ready(function(){
	$('#footer_img').parallax("50%", 0.2);
});*/

//navi
$(function(){
	$('#gnavi a img').hover(
		function(){$(this).fadeTo(400, 0.5);},
		function(){$(this).fadeTo(400, 1.0);}
	);
});

/*プルダウン*/
$(function(){
	$('#gnavi ul li').hover(
		function(){$(this).children('ul').show();},
		function(){$(this).children('ul').hide();}
	);
});


//slide
$(function() {
	$('.bxslider').bxSlider({
		mode: 'fade',
		controls: false,
		auto: true,
		pager: false,
		speed: 1000,
		touchEnabled: false,
	});
});

//ameba
$(function() {
	$('#ameba_list .tab li').hover(function() {
		var index = $('.tab li').index(this);
		$(this).css("cursor","pointer");
		$('#ameba_list .content li').css('display','none');
		$('#ameba_list .content li').eq(index).css('display','block');
		$('#ameba_list .tab li').removeClass('select');
		$(this).addClass('select')
	});
});

//top_banner
//
$(function() {
	$('#top_biglink li.concept').hover(function() {
		$('#top_biglink li a span.button_concept').stop().animate({ left: 190 }, 150);
	}, function() {
	$('#top_biglink li a span.button_concept').stop().animate({ left: 180 }, 150);
	});
});

//Q&A
$(function() {
	$('#top_biglink li.qanda').hover(function() {
		$('#top_biglink li a span.button_qanda').stop().animate({ left: 110 }, 150);
	}, function() {
	$('#top_biglink li a span.button_qanda').stop().animate({ left: 100 }, 150);
	});
});
//forst
$(function() {
	$('#side .top_first').hover(function() {
		$('#side .top_first a span.button_first').stop().animate({ left: 130 }, 150);
	}, function() {
	$('#side .top_first a span.button_first').stop().animate({ left: 120 }, 150);
	});
});
//media
$(function() {
	$('#side .top_media').hover(function() {
		$('#side .top_media a span.button_media').stop().animate({ left: 140 }, 150);
	}, function() {
	$('#side .top_media a span.button_media').stop().animate({ left: 130 }, 150);
	});
});
	
//facebook
$(function() {
	$('#side .top_facebook').hover(function() {
		$('#side .top_facebook a span.button_facebook').stop().animate({ left: 210 }, 150);
	}, function() {
	$('#side .top_facebook a span.button_facebook').stop().animate({ left: 200 }, 150);
	});
});	
	

/*audiojs*/	
audiojs.events.ready(function() {
	var audios = document.getElementsByTagName('audio');
	var a1 = audiojs.create(audios[0], {
		css: false,
		createPlayer: {
		markup: false,
		playPauseClass: 'play-pauseZ',
		scrubberClass: 'scrubberZ',
		progressClass: 'progressZ',
		loaderClass: 'loadedZ',
		timeClass: 'timeZ',
		durationClass: 'durationZ',
		playedClass: 'playedZ',
		errorMessageClass: 'error-messageZ',
		playingClass: 'playingZ',
		loadingClass: 'loadingZ',
		errorClass: 'errorZ'
	}
});

	var a2 = audiojs.create(audios[1]);
	});
	
	

