// JavaScript Document

$(function(){
        $("#qanda dt").on("click", function() {
            $(this).next().slideToggle();
            $(this).toggleClass("active");
        });
});