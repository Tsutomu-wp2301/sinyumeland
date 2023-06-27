// JavaScript Document

$(document).ready(function(){
 var agent = navigator.userAgent;
 if (navigator.userAgent.indexOf('iPad') > 0) {
 $('.point3_imgz').css({display : 'block'});
	$('#youtubep01').css({display : 'none'});
 }else{
	$('.point3_imgz').css({display : 'none'}); 
	$('#youtubep01').css({display : 'block'}); 
 }
});

