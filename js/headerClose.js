// JavaScript
$(document).ready(function() {
  var navMenu = $('.p-header--navMenu');
  var headerFlex = $('.p-header-flex');

  $(window).scroll(function() {
    var scrollPos = $(this).scrollTop();

    // スクロール量が一定値を超えたら要素に.hiddenクラスを追加
    if (scrollPos > 350) {
      navMenu.addClass('hidden');
      headerFlex.addClass('hidden');
    } else {
      navMenu.removeClass('hidden');
      headerFlex.removeClass('hidden');
    }
  });
});

