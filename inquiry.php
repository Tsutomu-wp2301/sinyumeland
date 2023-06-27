<?php
/* Template Name: Inquiry */
get_header();
?>
<!--contents-->
<div id="contents" class="clearfix">
<div id="kaisou_main" class="clearfix">
<div class="kaisou_main_left"> 
<!--各ページ文字画像切り替えの場合分け-->
<img src="<?php bloginfo('template_directory'); ?>/images/km_inquiry.gif" width="40" height="170" />
<!--各ページ文字画像切り替えの場合分け　ここまで--> 
</div>
<!--kaisou_main_right START-->
<div class="kaisou_main_right">
<?php the_title('<h4>' , '</h4>'); ?>
<div class="letter"> 
<!--letter START-->



<div id="inquiry">
<h5 class="h_yume">お問合せをする前に・・・</h5>
<p>お客様から寄せられるよくあるお問い合わせとその回答をご紹介しています。 以下より、お問い合わせの多いご質問とその回答をご覧になれます。 この中に、お客様にあった解決方法が見つかるかもしれません。 お問い合わせをする前に、ぜひお試しください。</p>
<p class="button02"><a href="<?php echo home_url() ; ?>qanda/">Q&amp;A</a></p>
<h5 class="h_yume">お問合せ</h5>
<table border="0" summary="" width="100%" cellspacing="1" cellpadding="0">
<tbody>
<tr>
<th scope="row">お問合せ先</th>
<td>埼玉県北葛飾郡杉戸町杉戸2-7-3<br /> 株式会社　太　平 </td>
</tr>
</tbody>
</table>
</div>




</div>
<!--letter END--> 
</div>
<!--kaisou_main_right END--> 
</div>
<!--kaisou_main END-->

<?php if(is_page('inquiry')): ?>
<?php get_sidebar('inquiry');?>
<?php else: ?>
<?php get_sidebar(); ?>
<?php endif; ?>
</div>
<!--contents END-->
<?php get_footer(); ?>
</div>
<!--container END-->
<?php wp_footer(); ?>
</body></html>