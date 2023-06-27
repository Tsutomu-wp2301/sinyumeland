<?php
/* Template Name: Concept */
get_header();
?>
<!--contents-->
<div id="contents" class="clearfix">
<div id="kaisou_main" class="clearfix">
<div class="kaisou_main_left"> 
<!--各ページ文字画像切り替えの場合分け-->
<img src="<?php bloginfo('template_directory'); ?>/images/km_concept.gif" width="40" height="170" />
<!--各ページ文字画像切り替えの場合分け　ここまで--> 
</div>
<!--kaisou_main_right START-->
<div class="kaisou_main_right">
<?php the_title('<h4>' , '</h4>'); ?>
<div class="letter"> 
<!--letter START-->
<div id="concept">
<img src="<?php bloginfo('template_directory'); ?>/images/concept_img01.jpg" alt="1.2.3.ダー！元気で明るきゃ何でもできる！！" width="620" height="200" class="img_bottom30" /></p>
<h5 class="h_yume">夢EVOLUTION2014</h5>
<p><a href="<?php echo home_url() ; ?>/concept/evolution2014/"><img src="<?php bloginfo('template_directory'); ?>/images/concept_img03.jpg" alt="夢EVOLUTION" width="620" height="439" class="img_bottom20" /></a></p>
<p>エボリューション（evolution）とは、「発展」「進展」「進化」「展開」などを意味する。</p>
<div class="center">
<p class="button02"><a href="<?php echo home_url() ; ?>/concept/evolution2014/">EVOLUTION2014</a></p>
</div>
<p><br class="img_bottom30" /></p>
<h5 class="h_yume">夢INNOVATION2013</h5>
<p><a href="<?php echo home_url() ; ?>/concept/innovation2013/"><img src="<?php bloginfo('template_directory'); ?>/images/concept_img02.jpg" alt="夢INNOVATION" width="620" height="439" class="img_bottom20" /></a></p>
<p>イノベーション（innovation）とは、物事の「新結合」「新機軸」「新しい切り口」「新しい捉え方」「新しい活用法」（を創造する行為）のこと。</p>
<div class="center">
<p class="button02"><a href="<?php echo home_url() ; ?>/concept/innovation2013/">INNOVATION2013</a> </p>
</div>
</div>

</div>
<!--letter END--> 
</div>
<!--kaisou_main_right END--> 
</div>
<!--kaisou_main END-->
<?php if(is_page('concept')): ?>
<?php get_sidebar('concept');?>
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