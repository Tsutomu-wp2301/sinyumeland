<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="ja" lang="ja" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;charset=<?php bloginfo('charset'); ?>" />
<title>
<?php wp_title( '|', true,'right' ); ?>
<?php bloginfo('name'); ?>
</title>
<meta http-equiv="imagetoolbar" content="no" />
<meta http-equiv="content-script-type" content="text/javascript" />
<meta http-equiv="content-style-type" content="text/css" />
<meta name="copyright" content="(c)YUMELANDGROUP. All rights reserved." />
<meta name="viewport" content="width=1100,user-scalable=yes,minimal-ui" />
<meta name="apple-mobile-web-app-capable" content="yes" />

<?php if(is_single()) { ?>
<?php while (have_posts()) : the_post(); ?>
<meta property="og:title" content="<?php the_title(); ?> | <?php bloginfo('name'); ?>" />
<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
<meta property="og:url" content="<?php echo clean_url(get_permalink()); ?>" />
<meta property="og:image" content="<?php post_ogp($post->ID); ?>" />
<?php endwhile; ?>
<?php } else { ?>
<meta property="og:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>" />
<meta property="og:description" content="<?php bloginfo('description'); ?>" />
<meta property="og:url" content="<?php echo get_bloginfo('url') . $_SERVER['REQUEST_URI']; ?>" />
<meta property="og:image" content="<?php echo get_bloginfo('template_directory') . '/images/ogp.jpg'; ?>" />
<?php } ?>

<meta property="og:site_name" content="<?php bloginfo('name'); ?> | <?php bloginfo('description'); ?>" />
<meta property="og:type" content="blog" />
<meta property="fb:app_id" content="157738174306243" />
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png" sizes="180x180">
<link rev="made" href="mailto:info&#64;yumelandgroup.com" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>)" />
<link rel="stylesheet" href="//fonts.googleapis.com/earlyaccess/notosansjapanese.css">
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
<!--確認用CSS-->
<!--<link href="style.css" rel="stylesheet" type="text/css" />-->
<?php
wp_deregister_script('jquery');
wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', array(), '1.9.1');
wp_enqueue_script('audio','/wp-content/themes/yumelandgroup01/js/audiojs/audio.min.js',array('jquery'), NULL );
wp_enqueue_script('glance','/wp-content/themes/yumelandgroup01/js/glance/jquery.glance.js',array('jquery'), NULL );
wp_enqueue_script('lightbox','/wp-content/themes/yumelandgroup01/js/lightbox/lightbox.js',array('jquery'), NULL );
/*wp_enqueue_script('parallax','/wp-content/themes/yumelandgroup01/js/parallax/jquery.parallax-1.1.3.js',array('jquery'), NULL );*/
wp_enqueue_script('slidehirom','/wp-content/themes/yumelandgroup01/js/hiromslide/hiromslide.js',array('jquery'), NULL );
wp_enqueue_script('main','/wp-content/themes/yumelandgroup01/js/main.js',array('jquery'), NULL );
wp_enqueue_script('simu','/wp-content/themes/yumelandgroup01/js/simu.js',array('jquery'), NULL );
?>



<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<p class="pagetop"><a href="#">▲</a> </p>
<!--container-->
<div id="container">
<!--header.php-->
<div id="header_wrap">
<div id="header">
<div id="right_bk"></div>
<div id="header_in" class="clearfix">
<h1 class="flip fade"><a href="<?php echo home_url() ; ?>" class="rollover">
<figure class="cube"><img src="<?php bloginfo('template_directory'); ?>/images/h1logo.png" alt="パチンコ/スロットの夢らんど" width="140" height="140" class="front" /><img src="<?php bloginfo('template_directory'); ?>/images/h1logo.png" alt="パチンコ/スロットの夢らんど" width="140" height="140" class="back" /></figure>
</a> </h1>
<div class="hright">
<div class="hright_top clearfix">
<h2><img src="<?php bloginfo('template_directory'); ?>/images/h2logo.png" alt="夢らんど" width="100%" /></h2>
<div class="catch"><img src="<?php bloginfo('template_directory'); ?>/images/catch.jpg" alt="一人でも多くの人に「幸せ」「喜び」が提供できること、それが私たちの願いです。" width="328" height="28" /></div>
<div class="sub_wrap">
<div class="sub clearfix">
<ul>
<li><a href="<?php echo home_url() ; ?>/sitemap/">サイトマップ</a> </li>
<li><a href="<?php echo home_url() ; ?>/privacy/">プライバシー</a> </li>
<li><a href="<?php echo home_url() ; ?>/inquiry/">お問合せ</a> </li>
</ul>
</div>
<div class="nack5">
<div class="audiojsZ">
<audio src="<?php bloginfo('template_directory'); ?>/js/audiojs/yume.mp3" preload="auto"></audio>
<div class="play-pauseZ">
<p class="playZ"></p>
<p class="pauseZ"></p>
<p class="loadingZ"></p>
<p class="errorZ"></p>
</div>
<div class="scrubberZ">
<div class="progressZ"></div>
<div class="loadedZ"></div>
</div>
<div class="timeZ"> <em class="playedZ">00:00</em>/<strong class="durationZ">00:00</strong> </div>
<div class="error-messageZ"></div>
</div>
</div>
</div>
</div>
<div id="gnavi">
<ul>
<li class="gnavi01"><a href="<?php echo home_url() ; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/gloval_nav_01_off.jpg" alt="パチンコ/スロット夢らんど" width="107" height="40" /></a> </li>
<li class="gnavi02"><a href="<?php echo home_url() ; ?>/tenpo/"><img src="<?php bloginfo('template_directory'); ?>/images/gloval_nav_02_off.jpg" alt="夢らんど店舗情報" width="107" height="40" /></a>
<ul>
<li><a href="<?php echo home_url() ; ?>/tenpo/#superyumeland">スーパー夢らんど</a></li>
<li><a href="<?php echo home_url() ; ?>/tenpo/kasukabeyumeland/">かすかべ夢らんど</a></li>
<li><a href="<?php echo home_url() ; ?>/tenpo/uchimakiyumeland/">内牧夢らんど</a></li>
<li><a href="<?php echo home_url() ; ?>/tenpo/hirakatayumeland/">平方夢らんど</a></li>
<!--<li><a href="<?php echo home_url() ; ?>/tenpo/hiraiyumeland/">平井夢らんど</a></li>-->
</ul>
</li>
<li class="gnavi03"><a href="<?php echo home_url() ; ?>/concept/"><img src="<?php bloginfo('template_directory'); ?>/images/gloval_nav_03_off.jpg" alt="コンセプト" width="107" height="40" /></a>
<ul>
<li><a href="<?php echo home_url() ; ?>/concept/evolution2014/">夢EVOLUTION2014</a></li>
<li><a href="<?php echo home_url() ; ?>/concept/innovation2013/">夢INNOVATION2013</a></li>
<li><a href="<?php echo home_url() ; ?>/concept/goudou/">全店舗合同の折り込み広告</a></li>
</ul>
</li>
<li class="gnavi04"><a href="<?php echo home_url() ; ?>/category/media/"><img src="<?php bloginfo('template_directory'); ?>/images/gloval_nav_04_off.jpg" alt="夢らんどグループ各店メディア掲載情報" width="107" height="40" /></a>
<ul>
<li><a href="<?php echo home_url() ; ?>/category/media/super/">スーパー夢らんど</a></li>
<li><a href="<?php echo home_url() ; ?>/category/media/kasukabe/">かすかべ夢らんど</a></li>
<li><a href="<?php echo home_url() ; ?>/category/media/uchimaki/">内牧夢らんど</a></li>
<li><a href="<?php echo home_url() ; ?>/category/media/hirakata/">平方夢らんど</a></li>
<!--<li><a href="<?php echo home_url() ; ?>/category/media/hirai/">平井夢らんど</a></li>-->
</ul>
</li>
<li class="gnavi05"><a href="<?php echo home_url() ; ?>/first_guide/"><img src="<?php bloginfo('template_directory'); ?>/images/gloval_nav_05_off.jpg" alt="パチンコ/スロット初心者ガイド" width="107" height="40" /></a> </li>
<li class="gnavi06"><a href="<?php echo home_url() ; ?>/saiyou/"><img src="<?php bloginfo('template_directory'); ?>/images/gloval_nav_06_off.jpg" alt="夢らんど採用情報" width="107" height="40" /></a>
<ul>
<li><a href="https://taihei-g-job.jp/list/ds_8000507102/" target="_blank">採用情報専用サイト</a></li>
</ul>
</li>
<li class="gnavi07"><a href="<?php echo home_url() ; ?>/company/"><img src="<?php bloginfo('template_directory'); ?>/images/gloval_nav_07_off.jpg" alt="夢らんど会社情報" width="107" height="40" /></a> </li>
<li class="gnavi08"><a href="<?php echo home_url() ; ?>/qanda/"><img src="<?php bloginfo('template_directory'); ?>/images/gloval_nav_08_off.jpg" alt="よくある質問" width="107" height="40" /></a> </li>
</ul>
</div>
</div>
</div>
</div>
<div id="k_pan_title" class="clearfix">
<h3 class="pan">
<?php if(function_exists('bcn_display')){bcn_display();}?>
</h3>
<div class="title">
<?php if(is_single()): ?>
<?php $c = get_the_category();
$pid = $c[0]->parent;
if( $pid > 0 ) {
	do {
		$t = get_term_by( '', $pid, 'category' );
		$pid = $t->parent;
	} while( $pid > 0 );
	echo '<a href="' . get_category_link( $t->term_id ) . '">' . $t->name . '</a>';
}else{
	echo '<a href="' . get_category_link( $c[0]->term_id ) . '">' . $c[0]->name . '</a>';
} ?>
<?php elseif(is_category()): ?>
<?php $c = get_the_category();
$pid = $c[0]->parent;
if( $pid > 0 ) {
	do {
		$t = get_term_by( '', $pid, 'category' );
		$pid = $t->parent;
	} while( $pid > 0 );
	echo '<a href="' . get_category_link( $t->term_id ) . '">' . $t->name . '</a>';
}else{
	echo '<a href="' . get_category_link( $c[0]->term_id ) . '">' . $c[0]->name . '</a>';
} ?>
<?php elseif(is_archive()): ?>
<?php $c = get_the_category();
$pid = $c[0]->parent;
if( $pid > 0 ) {
	do {
		$t = get_term_by( '', $pid, 'category' );
		$pid = $t->parent;
	} while( $pid > 0 );
	echo '<a href="' . get_category_link( $t->term_id ) . '">' . $t->name . '</a>';
}else{
	echo '<a href="' . get_category_link( $c[0]->term_id ) . '">' . $c[0]->name . '</a>';
} ?>
<?php elseif(is_page()): ?>
<?php the_title(); ?>
<?php endif; ?>
</div>
</div>
</div>
<!--header.php END-->