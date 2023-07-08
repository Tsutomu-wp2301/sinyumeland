
// ヘッダーメニューホバー時にopenクラスをつけ外しする

$(document).ready(function() {
  $('.p-menu-item').on('mouseenter', function() {
    $(this).addClass('open');
  }).on('mouseleave', function() {
    $(this).removeClass('open');
  });
});
