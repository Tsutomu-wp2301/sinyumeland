<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="ja" lang="ja" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta name=”viewport” content=“width=device-width, initial-scale=1”>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;charset=<?php bloginfo('charset'); ?>" />
		<title>
			<?php wp_title( '|', true,'right' ); ?>
			<?php bloginfo('name'); ?>
		</title>
		<meta http-equiv="imagetoolbar" content="no" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="content-script-type" content="text/javascript" />
		<meta http-equiv="content-style-type" content="text/css" />
		<meta name="copyright" content="(c)YUMELANDGROUP. All rights reserved." />
		<meta name="viewport" content="width=1100,user-scalable=yes,minimal-ui" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta property="og:title" content="パチンコ･スロット【夢らんど】グループ" />
		<meta property="og:description" content="夢らんどは関東（埼玉･東京）に5店舗展開するパチンコホール企業。店舗・採用・メディア情報、企業情報を掲載した夢らんどグループ（太平グループ）公式ウェブサイトです。" />
		<meta property="og:url" content="<?php echo home_url() ; ?>" />
		<meta property="og:image" content="<?php echo home_url() ; ?>/wp/wp-content/themes/yumelandgroup01/images/ogp.jpg" />
		<meta property="og:site_name" content="パチンコ･スロット 夢らんどグループ" />
		<meta property="og:type" content="website" />
		<meta property="fb:app_id" content="157738174306243" />
		<meta name="google-site-verification" content="tdqbpj-Vsh_RawX152dA9-kUga8D790bhD0sDrwIZhE" />
		<meta name="msvalidate.01" content="74D1060725398C6B8EDB55AB3B154D76" />
		<link rev="made" href="mailto:info&#64;yumelandgroup.com" />
		<link rel="alternate" hreflang="ja" href="<?php echo home_url() ; ?>">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>)" />
		<link rel="stylesheet" href="//fonts.googleapis.com/earlyaccess/notosansjapanese.css">
		<link rel="stylesheet" href="
		<?php 
			echo get_stylesheet_uri(); echo '?' . filemtime( get_stylesheet_directory() . '/style.css');
		 ?>
		 " type="text/css">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png" sizes="180x180">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/font-awesome-animation.min.css" type="text/css" />
		<!--確認用CSS-->
		<!--<link href="style.css" rel="stylesheet" type="text/css" />-->
		<?php wp_head(); ?>
		<script type="application/ld+json">
			{
					"@context":"http://schema.org",
					"@type":"website",
					"name":"パチンコ・スロットの夢らんどグループ",
					"inLanguage":"jp",
					"publisher": {
					"@type": "Organization",
					"name": "株式会社太平",
					"logo": {
							"@type": "ImageObject",
							"url": "https://yumelandgroup.com/wp/wp-content/themes/yumelandgroup01/images/h1logo.png"
					}},
					"copyrightYear":"2020-12-04T00:00:00+0000",
			"headline":"ページのタイトル",
					"description":"夢らんどは関東（埼玉･東京）に5店舗展開するパチンコホール企業。店舗・採用・メディア情報、企業情報を掲載した夢らんどグループ（太平グループ）公式ウェブサイトです。",
			"url":"https://yumelandgroup.com/"
			}
		</script>
	</head>
	<body <?php body_class(); ?>>
		<!-- タブレット・スマホ用マークアップ -->
		<div class = "tabsp-layout">
			<header role="banner">
				<div id="nav_sp">
					<div id="toggle">
							<div> <span></span> <span></span> <span></span> <span>MENU</span> </div>
					</div>
					<div id="global">
						<ul>
							<li><a href="<?php echo home_url(); ?>"><i class="fa fa-home fa-2x"></i> トップページに戻る</a></li>
							<li><a href="<?php echo home_url() ; ?>/tenpo"><i class="fa fa-building"></i> 店舗情報</a></li>
							<li><a href="<?php echo home_url() ; ?>/category/media"><i class="fa fa-newspaper-o"></i> 最新情報</a></li>
							<li><a href="<?php echo home_url() ; ?>/p-world"><i class="fa fa-diamond"></i> 機種情報</a></li>
							<li><a href="<?php echo home_url() ; ?>/company"><i class="fa fa-building-o"></i> 企業情報</a></li>
							<li><a href="https://www.youtube.com/user/yumelandgroup" target="_blank"><i class="fa fa-file-video-o"></i> 動画</a></li>
							<li><a href="<?php echo home_url() ; ?>/category/news"><i class="fa fa-newspaper-o"></i> 夢らんどニュース</a></li>
							<li><a href="<?php echo home_url() ; ?>/saiyou"><i class="fa fa-users"></i> 採用情報</a></li>
							<li><a href="https://www.facebook.com/taiheiyumeland/" target=""><i class="fa fa-facebook-official"></i> Facebook</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>


		<!-- PC版のレイアウト -->
		<div class="p-pc--layout">
			<div class="p-logo--yumeland">
				<a href="#" class="c-rollover">
					<figure class="cube">
						<img src="<?php bloginfo('template_directory'); ?>/images/h1logo.png" alt="パチンコ･スロット夢らんど" width="100" height="100" class="front" />
						<img src="<?php bloginfo('template_directory'); ?>/images/h1logo.png" width="100" height="100" class="back" alt="パチンコ･スロット夢らんど" />
					</figure>
				</a>
			</div>
			<p class="pagetop"><a href="#">▲</a></p>
			<!--container-->
			<div id="container"> 
				<!--ヘッダーテンプレートの呼び出し-->
				<?php 
					// get_template_part( 'template-parts/header', 'menu' ); 
				?>
				<?php 
					 get_template_part( 'template-parts/header', 'menu2' ); 
				?>

				<!--slide-->
				<div id="bx_slide">
					<ul class="bxslider">
						<li><img src="<?php bloginfo('template_directory'); ?>/images/slide/slide01.png" alt="" width="100%" /></li>
						<li><img src="<?php bloginfo('template_directory'); ?>/images/slide/slide02.png" alt="" width="100%" /></li>
						<li><img src="<?php bloginfo('template_directory'); ?>/images/slide/slide07.png" alt="" width="100%" /></li>
						<li><img src="<?php bloginfo('template_directory'); ?>/images/slide/slide08.png" alt="" width="100%" /></li>
						<li><img src="<?php bloginfo('template_directory'); ?>/images/slide/slide09.png" alt="" width="100%" /></li>
						<li><img src="<?php bloginfo('template_directory'); ?>/images/slide/slide10.png" alt="" width="100%" /></li>
						<li><img src="<?php bloginfo('template_directory'); ?>/images/slide/slide22.png" alt="" width="100%" /></li>
					</ul>
				</div><!--slide END--> 
			</div>
		</div>
		<?php wp_head(); ?>