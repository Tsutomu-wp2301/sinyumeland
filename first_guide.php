<?php
/* Template Name: First_guide */
get_header();
?>
<!--contents-->
<div id="contents" class="clearfix">
<div id="kaisou_main" class="clearfix">
<div class="kaisou_main_left"> 
<!--各ページ文字画像切り替えの場合分け-->
<img src="<?php bloginfo('template_directory'); ?>/images/km_first.gif" width="40" height="170" />
<!--各ページ文字画像切り替えの場合分け　ここまで--> 
</div>
<!--kaisou_main_right START-->
<div class="kaisou_main_right">
<?php the_title('<h4>' , '</h4>'); ?>
<div class="letter"> 
<!--letter START-->
<div id="first_guide">
<h5 class="h_yume">コンテンツ準備中</h5>
<p>いましばらくお待ちください。</p>
</div>

</div>
<!--letter END--> 
</div>
<!--kaisou_main_right END--> 
</div>
<!--kaisou_main END-->
<?php get_sidebar('first_guide');?>
</div>
<!--contents END-->
<?php get_footer(); ?>
</div>
<!--container END-->
<?php wp_footer(); ?>
</body></html>