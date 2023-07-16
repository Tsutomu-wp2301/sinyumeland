// すクロール量によって回転する夢らんどロゴをフェードイン、フェードアウトさせるためのクラス名のつけ外し

$(document).ready(function() {
  var yumelandLogo = $('.p-logo--yumeland');

  $(window).scroll(function() {
    var scrollPos = $(this).scrollTop();

    if (scrollPos > 350) {
      yumelandLogo.addClass('show');
    } else {
      yumelandLogo.removeClass('show');
    }
  });
});

