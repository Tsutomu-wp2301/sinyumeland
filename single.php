<?php get_header(); ?>
<!--contents-->
<div id="contents" class="clearfix">
<div id="kaisou_main" class="clearfix">
<div class="kaisou_main_left"><img src="<?php bloginfo('template_directory'); ?>/images/km_information.gif" alt="メディア情報" width="40" height="170" /></div>
<!--kaisou_main_right START-->
<div class="kaisou_main_right">
<h4>
<?php
	$cat = get_the_category();
foreach ($cat as $val) {
    if ($val->category_parent == 0) {
        $cat_parent = $val;
    } else {
        $cat_sub = $val;
    }
}
 $cat_name = $cat_sub->name;
	echo $cat_name;
?>
</h4>
<!--letter START-->
<div class="letter">
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<h5 class="h_yume"><?php the_title(); ?></h5>
<div class="expression clearfix">
<p><span class="bold">投稿日：</span><?php the_time('Y年m月d日'); ?></p>
</div>
<div class="post_in"><?php the_content(); ?></div>
<?php endwhile; ?>
<div id="navigation" class="clearfix">
<?php if ( function_exists( 'page_navi' ) ) { page_navi(); } ?>
</div>
<?php else : ?>
<div class="post_in">記事はありません</div>
<?php endif; ?>
</div>
<!--letter END--> 

<div class="p-world_banner">
<ul>
<?php if(in_category('6')): ?>
<li><a href="http://www.p-world.co.jp/saitama/super-yumeland.htm"><img src="<?php echo get_template_directory_uri(); ?>/images/p-world_03.jpg" width="100%" alt="p-worldスーパー夢らんど"></a></li>
<?php elseif(in_category('5')): ?>
<li><a href="http://www.p-world.co.jp/saitama/kasukabe-yumeland.htm"><img src="<?php echo get_template_directory_uri(); ?>/images/p-world_04.jpg" width="100%" alt="p-worldかすかべ夢らんど"></a></li>
<?php elseif(in_category('8')): ?>
<li><a href="http://www.p-world.co.jp/saitama/h-yumeland.htm"><img src="<?php echo get_template_directory_uri(); ?>/images/p-world_08.jpg" width="100%" alt="p-world平方夢らんど"></a></li>
<?php elseif(in_category('3')): ?>
<li><a href="http://www.p-world.co.jp/saitama/uchimaki-yumeland.htm"><img src="<?php echo get_template_directory_uri(); ?>/images/p-world_05.jpg" width="100%" alt="p-world内牧夢らんど"></a></li>
<?php elseif(in_category('57')): ?>
<li><a href="https://www.p-world.co.jp/tokyo/hiraiyumeland.htm"><img src="<?php echo get_template_directory_uri(); ?>/images/p-world_10.jpg" width="100%" alt="p-world平井夢らんど"></a></li>
<?php endif; ?>
</ul>
</div>

</div>
<!--kaisou_main_right END--> 
</div>
<!--kaisou_main END-->
<?php get_sidebar(); ?>
</div>
<!--contents END-->
<?php get_footer(); ?>
</div>
<!--container END-->
<?php wp_footer(); ?>
</body></html>