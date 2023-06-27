<?php
/* Template Name: Evolution2014 */
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
<div id="concept">
<h5 class="h_yume">夢EVOLUTION2014</h5>
<p><img src="<?php bloginfo('template_directory'); ?>/images/concept_img03.jpg" alt="夢EVOLUTION2014" width="620" height="439" class="img_bottom30" /></p>
<p><iframe class="img_bottom30" width="100%" height="306" src="//www.youtube.com/embed/aC9-Qsoqd70?rel=0&loop=1&playlist=aC9-Qsoqd70&autoplay=1&start=1&modestbranding=1&showinfo=0&controls=0" frameborder="0" allowfullscreen></iframe></p>
<p>エボリューション（evolution）とは、「発展」「進展」「進化」「展開」などを意味する。</p>
</div>

</div>
<!--letter END--> 
</div>
<!--kaisou_main_right END--> 
</div>
<!--kaisou_main END-->
<?php get_sidebar('concept');?>
</div>
<!--contents END-->
<?php get_footer(); ?>
</div>
<!--container END-->
<?php wp_footer(); ?>
</body></html>