// JavaScript Document
function keisan(){
var jprice = document.form1.goods1.value;
var jtime = document.form1.goods2.value;
var jday = document.form1.goods3.value;
var onem = jprice * jtime * jday * 4;
var threem = jprice * jtime * jday * 4 * 3;
var sixm = jprice * jtime * jday * 4 * 6;
var twelvem = jprice * jtime * jday * 4 * 12;
document.form1.onem_total.value = onem;
document.form1.threem_total.value = threem;
document.form1.sixm_total.value = sixm;
document.form1.twelvem_total.value = twelvem;
}