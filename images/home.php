<?php get_header(); ?>

<div id="contents--tabsp">
<div class="sp_slider">
<ul class="slides">

<!--<li class="slide">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
   <?php if(has_post_thumbnail()) :?>
      <?php the_post_thumbnail('640_thumbnail'); ?>
   <?php endif; ?>
<?php endwhile; endif; ?>
</li>-->

<?php
$now = date('Y-m-d H:i:s', strtotime('+9hour'));
if ($now >= '2019-03-01 00:00:00' && $now < '2030-01-01 00:00:00'): ?>
<li class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slide124.jpg"/></li>
<li class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slide132.jpg"/></li>
<li class="slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slide00.jpg"/></li>
<?php endif; ?>

</ul>
</div>
</div>
<main role="main">
<div id="marquee">

<?php query_posts(
	Array(
		'cat' => '11',
		'post_type' => 'post',
		'orderby' => 'date',
		'order' => 'DESC',
		'posts_per_page' => '1'
		)
	);
	if (have_posts()) : while (have_posts()) : the_post();
?>
<p>
<!--<?php
	$d_year = get_the_time('Y');
	$d_month = get_the_time('m');
	$d_day = get_the_time('d');
	$d_youbi = get_the_time('D');
	echo $d_year."年".$d_month."月".$d_day."日(".$d_youbi.")";
?>-->
<?php echo mb_substr(strip_tags($post-> post_content),0,200); ?>
</p>
<?php endwhile; endif; wp_reset_query(); ?>

</div>
<div id="gnavi">
<ul class="clearfix">
<li><a href="<?php echo home_url() ; ?>/tenpo"><img src="<?php echo get_template_directory_uri(); ?>/images/g01.jpg" alt="店舗情報"></a></li>
<li><a href="<?php echo home_url() ; ?>/category/media"><img src="<?php echo get_template_directory_uri(); ?>/images/g02.jpg" alt="最新情報"></a></li>
<li><a href="<?php echo home_url() ; ?>/p-world"><img src="<?php echo get_template_directory_uri(); ?>/images/g03.jpg" alt="機種情報"></a></li>
<li><a href="<?php echo home_url() ; ?>/company"><img src="<?php echo get_template_directory_uri(); ?>/images/g04.jpg" alt="企業情報"></a></li>
</ul>
<ul class="clearfix">
<li><a href="https://www.youtube.com/user/yumelandgroup" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/g05.jpg" alt="動画"></a></li>
<li><a href="<?php echo home_url() ; ?>/category/news"><img src="<?php echo get_template_directory_uri(); ?>/images/g06.jpg" alt="夢らんどニュース"></a></li>
<li><a href="<?php echo home_url() ; ?>/saiyou"><img src="<?php echo get_template_directory_uri(); ?>/images/g07.jpg" alt="採用情報"></a></li>
<li><a href="https://www.facebook.com/taiheiyumeland/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/g08.jpg" alt="Facebook"></a></li>
</ul>
</div>

<!--<div id="line">
<ul>
<li><a href="https://line.me/ti/p/%40ybi1984c"><img src="<?php echo get_template_directory_uri(); ?>/images/line_super.jpg" alt="LINEでもスーパー夢らんど" width="100%"></a></li>
<li class="buttonn"><a href="https://line.me/ti/p/%40ybi1984c"><img src="<?php echo get_template_directory_uri(); ?>/images/line_super_button.png" alt="LINEでもスーパー夢らんど" width="100%"></a></li>
</ul>
</div>-->

<div id="news">
<div class="news_title"><img src="<?php echo get_template_directory_uri(); ?>/images/news.jpg" width="100%" alt="最新情報" /></div>
<dl>

<?php
	query_posts(
	Array(
		'cat' => '2,12',
		'post_type' => 'post',
		'orderby' => 'date',
		'order' => 'DESC',
		'posts_per_page' => '6'
		)
	);
	if (have_posts()) : while (have_posts()) : the_post();
?>
<dt style="background-image: url(<?php 
echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)"></dt>
<dd><span class="data"><?php the_time('Y-m-d'); ?></span><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4></dd>
<?php endwhile; endif; wp_reset_query(); ?>
</dl>
</div>

	
<div id="grandopen">
<ul>
<li><a href="https://www.p-world.co.jp/tokyo/hiraiyumeland.htm"><img src="<?php echo get_template_directory_uri(); ?>/images/20191218hirai.jpg" alt="平井夢らんどグランドオープン" width="100%"></a></li>
</ul>
</div>
	
<div class="p-world_banner">
<ul>
<li><a href="<?php echo home_url() ; ?>/p-world"><img src="<?php echo get_template_directory_uri(); ?>/images/p-world_02.jpg" width="100%" alt="機種情報"></a></li>
</ul>
</div>

<div id="banner">
<ul>
<li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/images/banner01.jpg" alt="夢evolution"></a></li>
</ul>
</div>
</main>
<a href="#" id="page-top"><i class="fa fa-arrow-up"></i></a>

<?php get_footer(); ?>