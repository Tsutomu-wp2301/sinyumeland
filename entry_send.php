<?php
/* Template Name: Entry_send */
get_header();
?>
<!--contents-->
<div id="contents" class="clearfix">
<div id="kaisou_main" class="clearfix">
<div class="kaisou_main_left"> 
<!--各ページ文字画像切り替えの場合分け-->
<img src="<?php bloginfo('template_directory'); ?>/images/km_saiyou.gif" width="40" height="170" />
<!--各ページ文字画像切り替えの場合分け　ここまで--> 
</div>
<!--kaisou_main_right START-->
<div class="kaisou_main_right">
<?php the_title('<h4>' , '</h4>'); ?>
<div class="letter"> 
<!--letter START-->
<p>送信ありがとうございます。エントリー受け付けました。 後日、担当者からご連絡致します。 今しばらくお待ちください。</p>
<p>万が一、ご連絡が行かない場合にはお手数ですが、お電話にてご連絡ください。</p>
<h5 class="h_yume">お問合せ・エントリー</h5>
<table border="0" summary="夢らんどグループお問合せ・エントリー" width="100%" cellspacing="1" cellpadding="0">
<tbody>
<tr>
<th scope="row">お問合せ先</th>
<td>埼玉県北葛飾郡杉戸町杉戸2-7-3<br /> 株式会社　太　平<br /> 人事部人事課<br /> TEL.0480-32-9388</td>
</tr>
<tr>
<th scope="row">E-mail</th>
<td>
<address><a href="mailto:jinji@taihei-g.co.jp">jinji@taihei-g.co.jp</a></address>
</td>
</tr>
</tbody>
</table>

</div>
<!--letter END--> 
</div>
<!--kaisou_main_right END--> 
</div>
<!--kaisou_main END-->
<?php get_sidebar('saiyou');?>
</div>
<!--contents END-->
<?php get_footer(); ?>
</div>
<!--container END-->
<?php wp_footer(); ?>
</body></html>