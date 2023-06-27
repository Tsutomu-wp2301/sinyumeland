<?php get_header(); ?>
<!--contents-->
<div id="contents" class="clearfix">
<div id="kaisou_main" class="clearfix">
<div class="kaisou_main_left"> 
<!--各ページ文字画像切り替えの場合分け-->
<?php if(is_page('concept')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_concept.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('innovation2013')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_concept.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('evolution2014')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_concept.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('goudou')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_concept.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('tenpo')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_tenpo.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('superyumeland')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_tenpo.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('kasukabeyumeland')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_tenpo.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('hirakatayumeland')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_tenpo.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('uchimakiyumeland')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_tenpo.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('iwatsukiyumeland')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_tenpo.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('sugitoyumeland')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_tenpo.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('playlandsekiyado')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_tenpo.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('qanda')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_qanda.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('company')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_company.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('first_guide')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_first.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('saiyou')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_saiyou.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('saiyou1')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_saiyou.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('saiyou2')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_saiyou.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('saiyou3')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_saiyou.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('saiyou4')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_saiyou.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('message1')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_saiyou.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('message2')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_saiyou.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('message3')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_saiyou.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('message4')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_saiyou.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('entry_send')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_saiyou.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('sitemap')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_sitemap.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('privacy')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_privacy.gif" width="40" height="170" />
<?php endif; ?>
<?php if(is_page('inquiry')): ?>
<img src="<?php bloginfo('template_directory'); ?>/images/km_inquiry.gif" width="40" height="170" />
<?php endif; ?>
<!--各ページ文字画像切り替えの場合分け　ここまで--> 
</div>
<!--kaisou_main_right START-->
<div class="kaisou_main_right">
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<?php the_title('<h4>' , '</h4>'); ?>
<div class="letter"> 
<!--letter START-->
<?php the_content(); ?>
<?php endwhile; ?>
<div id="navigation">
<?php if ( function_exists( 'page_navi' ) ) { page_navi(); } ?>
</div>
<?php else : ?>
記事はありません
<?php endif; ?>
</div>
<!--letter END--> 
</div>
<!--kaisou_main_right END--> 
</div>
<!--kaisou_main END-->
<?php if(is_page('concept')): ?>
<?php get_sidebar('concept');?>
<?php elseif(is_page('innovation2013')): ?>
<?php get_sidebar('concept');?>
<?php elseif(is_page('evolution2014')): ?>
<?php get_sidebar('concept');?>
<?php elseif(is_page('goudou')): ?>
<?php get_sidebar('concept');?>
<?php elseif(is_page('tenpo')): ?>
<?php get_sidebar('tenpo');?>
<?php elseif(is_page('superyumeland')): ?>
<?php get_sidebar('tenpo');?>
<?php elseif(is_page('kasukabeyumeland')): ?>
<?php get_sidebar('tenpo');?>
<?php elseif(is_page('hirakatayumeland')): ?>
<?php get_sidebar('tenpo');?>
<?php elseif(is_page('uchimakiyumeland')): ?>
<?php get_sidebar('tenpo');?>
<?php elseif(is_page('iwatsukiyumeland')): ?>
<?php get_sidebar('tenpo');?>
<?php elseif(is_page('sugitoyumeland')): ?>
<?php get_sidebar('tenpo');?>
<?php elseif(is_page('playlandsekiyado')): ?>
<?php get_sidebar('tenpo');?>
<?php elseif(is_page('first_guide')): ?>
<?php get_sidebar('first_guide');?>
<?php elseif(is_page('saiyou')): ?>
<?php get_sidebar('saiyou');?>
<?php elseif(is_page('saiyou1')): ?>
<?php get_sidebar('saiyou');?>
<?php elseif(is_page('saiyou2')): ?>
<?php get_sidebar('saiyou');?>
<?php elseif(is_page('saiyou3')): ?>
<?php get_sidebar('saiyou');?>
<?php elseif(is_page('saiyou4')): ?>
<?php get_sidebar('saiyou');?>
<?php elseif(is_page('message1')): ?>
<?php get_sidebar('saiyou');?>
<?php elseif(is_page('message2')): ?>
<?php get_sidebar('saiyou');?>
<?php elseif(is_page('message3')): ?>
<?php get_sidebar('saiyou');?>
<?php elseif(is_page('message4')): ?>
<?php get_sidebar('saiyou');?>
<?php elseif(is_page('entry_send')): ?>
<?php get_sidebar('saiyou');?>
<?php elseif(is_page('company')): ?>
<?php get_sidebar('company');?>
<?php elseif(is_page('qanda')): ?>
<?php get_sidebar('qanda');?>
<?php elseif(is_page('sitemap')): ?>
<?php get_sidebar('sitemap');?>
<?php elseif(is_page('privacy')): ?>
<?php get_sidebar('privacy');?>
<?php elseif(is_page('inquiry')): ?>
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