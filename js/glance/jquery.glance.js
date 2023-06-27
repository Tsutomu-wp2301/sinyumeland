/*
	glance
*/

(function($){$(document).ready(function(){
	$('a.glance,.glance a').css({background:''}).mouseover(function(){
		$(this).children().stop().css({opacity:0.5}).animate({opacity:1},500);
	});
});})(jQuery);
