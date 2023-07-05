// JavaScript Document

//marquee
$(function(){
	$("#marquee").est({
		roopTiming: 1000,
		slideSpeed: 1000,
		slideDelay: 800,
		remainderSpeed: 1000,
		remainderDelay: 0,
		outSpeed:0
	});
});

(function($) {
    $(function() {
	var $header = $('#nav_sp');
        // Nav Toggle Button
        $('#toggle').click(function(){
            $header.toggleClass('open');
        });
    });
})(jQuery);

//スライドショー
	$('.sp_slider').glide({
		/*autoplay: false,*/
		autoplay: 3000,
		hoverpause: true,
		animationDuration: 1000,
		navigation: true,
		arrows: false,
		keyboard: true,
	});
	
	
//TOPに戻る
$(function(){
  var pageTop = $("#page-top");
  pageTop.click(function () {
    $('body, html').animate({ scrollTop: 0 }, 500);
    return false;
  });
  $(window).scroll(function () {
    if($(this).scrollTop() >= 200) {
      pageTop.css( "transform", "rotateY(0deg)" );
    } else {
      pageTop.css( "transform", "rotateY(270deg)" );
    }
  });
});

//PullToRefresh
PullToRefresh.init({
  mainElement: 'body',
  onRefresh: function(){ window.location.reload(); }
});

	//footable
	$(function() {
	$('table.footable').footable();
});

	


