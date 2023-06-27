<?php get_header(); ?>
<!--contents-->
<div id="contents" class="clearfix">
<div id="kaisou_main" class="clearfix">
<div class="kaisou_main_left"><img src="<?php bloginfo('template_directory'); ?>/images/km_information.gif" width="40" height="170" /></div>
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

<!--<?php if(is_category('media')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/media_banner.jpg" width="100%" class="img_bottom30" alt="満天パチランド／パチFUN!／Nack5" />
<?php endif; ?>-->

<?php if(have_posts()):while(have_posts()):the_post(); ?>
<h5 class="h_yume"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
<div class="expression clearfix">
<p><span class="bold">投稿日：</span><?php the_time('Y年m月d日'); ?></p>
</div>

<div class="post_in clearfix"><a href="<?php the_permalink() ?>"><?php if(has_post_thumbnail()) { the_post_thumbnail(); } ?></a>
<?php echo mb_substr(strip_tags($post-> post_content),0,200).'<a class="more" href="'. get_permalink() . '"></br>（さらに...）</a>'; ?>
</div>

<?php endwhile; ?>
<div id="navigation" class="clearfix">
<?php if ( function_exists( 'page_navi' ) ) { page_navi(); } ?>
</div>
<?php else : ?>
<div class="post_in">記事はありません</div>
<?php endif; ?>
</div>
<!--letter END--> 
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