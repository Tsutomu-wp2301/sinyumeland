// JavaScript Document

jQuery(function(){
  AjaxZip3.JSONDATA = "https://ajaxzip3.googlecode.com/svn/trunk/ajaxzip3/zipdata";
  jQuery('#zip').keyup(function(event){
    AjaxZip3.zip2addr(this,'','pref','addr');
  })
})