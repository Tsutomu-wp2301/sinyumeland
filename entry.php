<?php
/* Template Name: Entry */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ja" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;charset=<?php bloginfo('charset'); ?>" />
<title>
<?php wp_title( '|', true,'right' ); ?>
<?php bloginfo('name'); ?>
</title>
<meta http-equiv="imagetoolbar" content="no" />
<meta http-equiv="content-script-type" content="text/javascript" />
<meta http-equiv="content-style-type" content="text/css" />
<meta name="copyright" content="(c)YUMELANDGROUP. All rights reserved." />
<meta name="viewport" content="width=1100, user-scalable=yes, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes" />
<link rev="made" href="mailto:info&#64;yumelandgroup.com" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>)" />
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
<!--確認用CSS-->
<link href="style.css" rel="stylesheet" type="text/css" />
<?php
wp_deregister_script('jquery');
wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', array(), '1.8.3');
wp_enqueue_script('ajaxzip3', 'https://ajaxzip3.googlecode.com/svn/trunk/ajaxzip3/ajaxzip3-https.js', array(), '1.1.1');
wp_enqueue_script('ajaxzip3_hiro', '/wp-content/themes/yumelandgroup01/js/ajaxzip3_hiro.js', array(), '1.1.1');
?>
<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div id="toi_contents">
<div id="toi_contents_header"><img src="<?php bloginfo('template_directory'); ?>/images/h2logo.png" width="250" height="25" alt="YUMELANDGROUP" /></div>
<div id="toi_kaisou_main" class="clearfix">
<div class="toi_kaisou_main_left"><img src="<?php bloginfo('template_directory'); ?>/images/km_saiyou.gif" alt="エントリーシート" width="40" height="170" /></div>
<div class="toi_kaisou_main_right">
<div class="toi_letter">
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<?php the_title('<h5 class="toi_h_yume">' , '</h5>'); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php else : ?>
記事はありません
<?php endif; ?>
</div>
</div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>