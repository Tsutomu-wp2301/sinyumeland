<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="ja" lang="ja" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns="http://www.w3.org/1999/xhtml">
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
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png" sizes="180x180">
	<!--確認用CSS-->
	<!--<link href="style.css" rel="stylesheet" type="text/css" />-->
	<?php
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js', array(), '1.8.3');
		wp_enqueue_script('bxslider','/wp-content/themes/yumelandgroup01/js/bxslider/jquery.bxslider.js',array('jquery'), NULL );
		wp_enqueue_script('glance','/wp-content/themes/yumelandgroup01/js/glance/jquery.glance.js',array('jquery'), NULL );
		wp_enqueue_script('audio','/wp-content/themes/yumelandgroup01/js/audiojs/audio.min.js',array('jquery'), NULL );
		wp_enqueue_script('main','/wp-content/themes/yumelandgroup01/js/main.js',array('jquery'), NULL );
		wp_enqueue_script('agent','/wp-content/themes/yumelandgroup01/js/agent.js',array('jquery'), NULL );
	?>
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
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&appId=157738174306243&version=v2.0";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<p class="pagetop"><a href="#">▲</a></p>
	<!--container-->
	<div id="container"> 
		<!--header.php-->
		<div id="header">
			<div id="right_bk"></div>
			<div id="header_in" class="clearfix"><h1 class="flip fade"><a href="<?php echo home_url() ; ?>" class="rollover"><figure class="cube"><img src="<?php bloginfo('template_directory'); ?>/images/h1logo.png" alt="パチンコ･スロット夢らんど" width="140" height="140" class="front" /><img src="<?php bloginfo('template_directory'); ?>/images/h1logo.png" width="140" height="140" class="back" alt="パチンコ･スロット夢らんど" /></figure></a></h1>
				<div class="hright">
					<div class="hright_top clearfix">
						<h2><img src="<?php bloginfo('template_directory'); ?>/images/h2logo.png" alt="夢らんど" width="100%" /></h2>
						<div class="catch">
							<img src="<?php bloginfo('template_directory'); ?>/images/catch.jpg" alt="一人でも多くの人に「喜び」「幸せ」が提供できること、それが私たちの願いです。" width="328" height="28" />
						</div>
						<div class="sub_wrap">
							<div class="sub clearfix">
								<ul>
									<li><a href="<?php echo home_url() ; ?>/sitemap/">サイトマップ</a></li>
									<li><a href="<?php echo home_url() ; ?>/privacy/">プライバシー</a></li>
									<li><a href="<?php echo home_url() ; ?>/inquiry/">お問合せ</a></li>
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
									<div class="timeZ"><em class="playedZ">00:00</em>/<strong class="durationZ">00:00</strong></div>
									<div class="error-messageZ"></div>
								</div><!-- audiojsZ--END -->
							</div><!-- nack5--end -->
						</div><!-- sub_wrap--END -->
					</div><!-- hright_top clearfix -->
					<div id="gnavi">
						<ul>
							<li class="gnavi01"><a href="<?php echo home_url() ; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/gloval_nav_01_off.jpg" alt="パチンコ･スロット夢らんど" width="107" height="40" /></a> </li>
							<li class="gnavi02"><a href="<?php echo home_url() ; ?>/tenpo/"><img src="<?php bloginfo('template_directory'); ?>/images/gloval_nav_02_off.jpg" alt="夢らんどグループ店舗情報" width="107" height="40" /></a>
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
							<li class="gnavi04"><a href="<?php echo home_url() ; ?>/category/media/"><img src="<?php bloginfo('template_directory'); ?>/images/gloval_nav_04_off.jpg" alt="夢らんど各店メディア掲載情報" width="107" height="40" /></a>
								<ul>
								<li><a href="<?php echo home_url() ; ?>/category/media/super/">スーパー夢らんど</a></li>
								<li><a href="<?php echo home_url() ; ?>/category/media/kasukabe/">かすかべ夢らんど</a></li>
								<li><a href="<?php echo home_url() ; ?>/category/media/uchimaki/">内牧夢らんど</a></li>
								<li><a href="<?php echo home_url() ; ?>/category/media/hirakata/">平方夢らんど</a></li>
								<!--<li><a href="<?php echo home_url() ; ?>/category/media/hirai/">平井夢らんど</a></li>-->
								</ul>
							</li>
							<li class="gnavi05"><a href="<?php echo home_url() ; ?>/first_guide/"><img src="<?php bloginfo('template_directory'); ?>/images/gloval_nav_05_off.jpg" alt="パチンコ/スロット初心者ガイド" width="107" height="40" /></a> </li>
							<li class="gnavi06"><a href="<?php echo home_url() ; ?>/saiyou/"><img src="<?php bloginfo('template_directory'); ?>/images/gloval_nav_06_off.jpg" alt="夢らんどグループ採用情報" width="107" height="40" /></a>
								<ul>
									<li><a href="https://taihei-g-job.jp/list/ds_8000507102/" target="_blank">採用情報専用サイト</a></li>
								</ul>
							</li>
							<li class="gnavi07"><a href="<?php echo home_url() ; ?>/company/"><img src="<?php bloginfo('template_directory'); ?>/images/gloval_nav_07_off.jpg" alt="夢らんどグループ企業情報" width="107" height="40" /></a> </li>
							<li class="gnavi08"><a href="<?php echo home_url() ; ?>/qanda/"><img src="<?php bloginfo('template_directory'); ?>/images/gloval_nav_08_off.jpg" alt="よくある質問" width="107" height="40" /></a> </li>
						</ul>
					</div><!-- gnavi--END -->
				</div><!-- hright--end -->
			</div>
		</div><!--header.php END--> 
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
		<!--point3-->
		<div id="point3" class="clearfix">
			<ul>
				<li class="first">
					<div class="point3_img">
						<div class="point3_imgz">
							<img src="<?php bloginfo('template_directory'); ?>/images/point3_02_01.jpg" alt="夢らんどグループ採用情報" width="312" height="95" />
						</div>
						<div id="youtubep01">
							<iframe width="312" height="240" src="https://www.youtube.com/embed/aC9-Qsoqd70?autoplay=1&amp;loop=1&amp;playlist=aC9-Qsoqd70&amp;rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
						</div>
					</div>
					<div class="point3_img2">
						<a href="<?php echo home_url() ; ?>/tenpo/"><span></span><img src="<?php bloginfo('template_directory'); ?>/images/point3_1.jpg" alt="夢らんど各店舗情報" width="300" height="41" /></a>
					</div>
				</li>
				<li>
					<div class="point3_img">
						<img src="<?php bloginfo('template_directory'); ?>/images/point3_01_01.jpg" alt="夢らんどグループ採用情報" width="312" height="95" />
					</div>
					<div class="point3_img2">
						<a href="<?php echo home_url() ; ?>/saiyou/"><span></span><img src="<?php bloginfo('template_directory'); ?>/images/point3_2.jpg" alt="採用情報" width="300" height="41" /></a>
					</div>
				</li>
				<li>
					<div class="point3_img">
						<img src="<?php bloginfo('template_directory'); ?>/images/point3_03_01.jpg" alt="夢らんどグループ企業情報" width="312" height="95" />
					</div>
					<div class="point3_img2">
						<a href="<?php echo home_url() ; ?>/company/"><span></span><img src="<?php bloginfo('template_directory'); ?>/images/point3_3.jpg" alt="企業情報" width="300" height="41" /></a>
					</div>
				</li>
			</ul>
		</div><!--point3 END-->
		<!--
		<div id="bannnerz_waku">
			<div class="bannnerz">
				<a href="https://yumelandgroup.com/20210115-2/"><img src="<?php bloginfo('template_directory'); ?>/images/uirusutaisaku.jpg" alt="ウイルス対策に関する感染予防・拡散対策の実施" width="100%" /></a>
			</div>
		</div>
		-->
		<!--contents-->
		<div id="contents" class="clearfix">
			<div id="main">
				<div id="tenkyu_list">
					<p class="info">営業情報</p>
					<ul class="content">
						<?php
							query_posts(
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
						<li>
						<div class="time">
						<!--<?php
							$d_year = get_the_time('Y');
							$d_month = get_the_time('m');
							$d_day = get_the_time('d');
							$d_youbi = get_the_time('D');
							echo $d_year."年".$d_month."月".$d_day."日(".$d_youbi.")";
						?>-->
						</div>
						<div class="honbun">
						<?php the_content(); ?>
						</div>
						</li>
						<?php endwhile; endif; wp_reset_query(); ?>
					</ul>
				</div>
				<br class="clearfix" />
				<h3><img src="<?php bloginfo('template_directory'); ?>/images/ameba_midashi.png" alt="夢らんど各店メディア掲載情報" width="324" height="40" /></h3>
				<div id="ameba_pick">
					<?php
						query_posts(
						Array(
							'cat' => '2',
							'post_type' => 'post',
							'orderby' => 'date',
							'order' => 'DESC',
							'posts_per_page' => '6'
							)
						);
						if (have_posts()) : while (have_posts()) : the_post();
					?>
					<div class="flashnews clearfix">
						<div class="left">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
							</a>
						</div>
						<div class="right"><span class="title"><a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
							</a></span><span class="content">
							<?php echo nl2br(mb_substr(strip_tags($post-> post_content),0,50).'<a class="more" href="'. get_permalink()) . '">（さらに...）</a>'; ?>
							</span>
						</div>
						<span class="data">
							<?php
								$d_year = get_the_time('Y');
								$d_month = get_the_time('m');
								$d_day = get_the_time('d');
								$d_youbi = get_the_time('D');
								echo $d_year."年".$d_month."月".$d_day."日(".$d_youbi.")";
							?>　
							<span class="kokate">
								<?php
								echo get_the_category_list( ' ／ ' );
								?>
							</span>
						</span>
					</div>
					<div class="img_bottom20"></div>
					<?php endwhile; endif; wp_reset_query(); ?>
				</div>
				<div id="ameba_list">
					<ul class="tab">
						<li class="select first">すべて</li>
						<li>スーパー</li>
						<li>春日部</li>
						<li>平方</li>
						<li class="end">内牧</li>
						<!--<li>岩槻</li>-->
						<!--<li>杉戸</li>-->
						<!--<li class="end">平井</li>-->
					</ul>
					<ul class="content">
						<!--すべて-->
						<li>
							<?php
								query_posts(
								Array(
									'cat' => '2',
									'post_type' => 'post',
									'orderby' => 'date',
									'order' => 'DESC',
									'posts_per_page' => '5'
									)
								);
								if (have_posts()) : while (have_posts()) : the_post();
							?>
							<div> <span>
							<?php
								$d_year = get_the_time('Y');
								$d_month = get_the_time('m');
								$d_day = get_the_time('d');
								$d_youbi = get_the_time('D');
								echo $d_year."年".$d_month."月".$d_day."日(".$d_youbi.")";
							?>
							</span>　<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
							</a> </div>
							<?php endwhile; endif; wp_reset_query(); ?>
						</li>
						<!--スーパー-->
						<li class="hide">
							<?php
								query_posts(
								Array(
									'cat' => '6',
									'post_type' => 'post',
									'orderby' => 'date',
									'order' => 'DESC',
									'posts_per_page' => '5'
									)
								);
								if (have_posts()) : while (have_posts()) : the_post();
							?>
							<div> <span>
							<?php
								$d_year = get_the_time('Y');
								$d_month = get_the_time('m');
								$d_day = get_the_time('d');
								$d_youbi = get_the_time('D');
								echo $d_year."年".$d_month."月".$d_day."日(".$d_youbi.")";
							?>
							</span>　<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
							</a> </div>
							<?php endwhile; endif; wp_reset_query(); ?>
						</li>
						<!--かすかべ-->
						<li class="hide">
							<?php
								query_posts(
								Array(
									'cat' => '5',
									'post_type' => 'post',
									'orderby' => 'date',
									'order' => 'DESC',
									'posts_per_page' => '5'
									)
								);
								if (have_posts()) : while (have_posts()) : the_post();
							?>
							<div> <span>
							<?php
								$d_year = get_the_time('Y');
								$d_month = get_the_time('m');
								$d_day = get_the_time('d');
								$d_youbi = get_the_time('D');
								echo $d_year."年".$d_month."月".$d_day."日(".$d_youbi.")";
							?>
							</span>　<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
							</a> </div>
							<?php endwhile; endif; wp_reset_query(); ?>
						</li>
						<!--平方-->
						<li class="hide">
							<?php
								query_posts(
								Array(
									'cat' => '8',
									'post_type' => 'post',
									'orderby' => 'date',
									'order' => 'DESC',
									'posts_per_page' => '5'
									)
								);
								if (have_posts()) : while (have_posts()) : the_post();
							?>
							<div> <span>
							<?php
								$d_year = get_the_time('Y');
								$d_month = get_the_time('m');
								$d_day = get_the_time('d');
								$d_youbi = get_the_time('D');
								echo $d_year."年".$d_month."月".$d_day."日(".$d_youbi.")";
							?>
							</span>　<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
							</a> </div>
							<?php endwhile; endif; wp_reset_query(); ?>
						</li>
						<!--内牧-->
						<li class="hide">
							<?php
								query_posts(
								Array(
									'cat' => '3',
									'post_type' => 'post',
									'orderby' => 'date',
									'order' => 'DESC',
									'posts_per_page' => '5'
									)
								);
								if (have_posts()) : while (have_posts()) : the_post();
							?>
							<div> <span>
							<?php
								$d_year = get_the_time('Y');
								$d_month = get_the_time('m');
								$d_day = get_the_time('d');
								$d_youbi = get_the_time('D');
								echo $d_year."年".$d_month."月".$d_day."日(".$d_youbi.")";
							?>
							</span>　<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
							</a> </div>
							<?php endwhile; endif; wp_reset_query(); ?>
						</li>
						<!--平井-->
						<!--<li class="hide">
							<?php
								query_posts(
								Array(
									'cat' => '57',
									'post_type' => 'post',
									'orderby' => 'date',
									'order' => 'DESC',
									'posts_per_page' => '5'
									)
								);
								if (have_posts()) : while (have_posts()) : the_post();
							?>
							<div> <span>
							<?php
								$d_year = get_the_time('Y');
								$d_month = get_the_time('m');
								$d_day = get_the_time('d');
								$d_youbi = get_the_time('D');
								echo $d_year."年".$d_month."月".$d_day."日(".$d_youbi.")";
							?>
							</span>　<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
							</a> </div>
							<?php endwhile; endif; wp_reset_query(); ?>
						</li>-->
					</ul>
					<p class="text_right"><i class="fa fa-external-link-square white"></i><a href="<?php echo home_url() ; ?>/category/media/">&gt;&gt;メディア掲載情報一覧</a></p>
				</div>
				<div id="tenkyu_list">
					<p class="info"><strong>夢らんど</strong>ニュース</p>
					<ul class="content">
						<?php
							query_posts(
							Array(
								'cat' => '12',
								'post_type' => 'post',
								'orderby' => 'date',
								'order' => 'DESC',
								'posts_per_page' => '3'
								)
							);
							if (have_posts()) : while (have_posts()) : the_post();
						?>
						<li>
							<div class="time">
								<?php
									$d_year = get_the_time('Y');
									$d_month = get_the_time('m');
									$d_day = get_the_time('d');
									$d_youbi = get_the_time('D');
									echo $d_year."年".$d_month."月".$d_day."日(".$d_youbi.")";
								?>
							</div>
							<div class="title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</div>
							<div class="honbun clearfix"><a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
								</a>
								<?php echo nl2br(mb_substr(strip_tags($post-> post_content),0,100).'<a class="more" href="'. get_permalink()) . '">（さらに...）</a>'; ?>
							</div>
						</li>
						<?php endwhile; endif; wp_reset_query(); ?>
					</ul>
				</div>
				<p class="text_right"><i class="fa fa-external-link-square white"></i><a href="<?php echo home_url() ; ?>/category/news/">&gt;&gt;夢らんどニュース一覧</a></p>
				<div class="img_bottom30"></div>
					
				<!--<div id="rss" class="clearfix">
				<p class="infos">アメーバブログ</p>
				<?php echo do_shortcode( '[showrss]' ); ?> </div>-->

				<!--<div id="top_biglink">
				<ul>
				<li class="concept"><a href="<?php echo home_url() ; ?>/concept/"><span class="button_concept"><img src="<?php bloginfo('template_directory'); ?>/images/top_arrow.png" alt="コンセプト" width="33" height="33" /></span><span class="kiran"></span></a> </li>
				<li class="qanda"><a href="<?php echo home_url() ; ?>/qanda/"><span class="button_qanda"><img src="<?php bloginfo('template_directory'); ?>/images/top_arrow.png" alt="よくある質問" width="33" height="33" /></span><span class="kiran"></span></a> </li>
				</ul>
				</div>-->

			</div>
			<div id="side">
				<div class="p-world_sidelink">
					<ul class="glance">
						<li><img src="<?php bloginfo('template_directory'); ?>/images/p-world.jpg" width="300" height="50" alt="P-world夢らんど新台情報" /></li>
						<li><a href="https://www.p-world.co.jp/saitama/super-yumeland.htm" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/p-world_super.jpg" width="300" height="60" alt="P-worldスーパー夢らんど新台情報" /></a></li>
						<li><a href="https://www.p-world.co.jp/saitama/kasukabe-yumeland.htm" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/p-world_kasukabe.jpg" width="300" height="60" alt="P-worldかすかべ夢らんど新台情報" /></a></li>
						<li><a href="https://www.p-world.co.jp/saitama/uchimaki-yumeland.htm" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/p-world_uchimaki.jpg" width="300" height="60" alt="P-world内牧夢らんど新台情報" /></a></li>
						<li><a href="https://www.p-world.co.jp/saitama/h-yumeland.htm" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/p-world_hirakata.jpg" width="300" height="60" alt="P-world平方夢らんど新台情報" /></a></li>
						<!--<li><a href="https://www.p-world.co.jp/tokyo/hiraiyumeland.htm" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/p-world_hirai.jpg" width="300" height="60" alt="P-world平井夢らんど新台情報" /></a></li>-->
					</ul>
				</div>

				<!--<div class="top_first"><a href="<?php echo home_url() ; ?>/first_guide/"><span class="button_first"><img src="<?php bloginfo('template_directory'); ?>/images/top_arrow.png" alt="パチンコ/スロット初心者ガイド" width="33" height="33" /></span></a> </div>-->
				<!--<div class="top_media"><a href="<?php echo home_url() ; ?>/category/media/"><span class="button_media"><img src="<?php bloginfo('template_directory'); ?>/images/top_arrow.png" alt="夢らんどメディア情報へ" width="33" height="33" /></span></a> </div>-->

				<div class="top_facebook">
					<a href="https://www.facebook.com/taiheiyumeland" target="_blank">
						<span class="button_facebook"><img src="<?php bloginfo('template_directory'); ?>/images/top_arrow.png" alt="夢らんどFacebookへ" width="33" height="33" /></span>
						<div class="fb-like-box" data-href="https://www.facebook.com/taiheiyumeland" data-colorscheme="light" data-show-faces="false" data-header="true" data-stream="true" data-show-border="true"></div>
					</a>
				</div>
				<div id="banner">
					<ul class="glance">
						<li><a href="https://www.youtube.com/user/yumelandgroup/videos" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/youtube.jpg" width="300" height="51" alt="YOUTUBE夢らんどチャンネル" /></a></li>
						<li><a href="<?php echo home_url() ; ?>/category/news/volunteer/"><img src="<?php bloginfo('template_directory'); ?>/images/volunteer.jpg" width="300" height="130" alt="夢らんどの社会貢献活動" /></a></li>
					</ul>
				</div>
				<div id="banner_arubaito">
					<div class="button"><a href="<?php echo home_url() ; ?>/saiyou/" class="glance"><img src="<?php bloginfo('template_directory'); ?>/images/banner_arubaito_button.png" width="104" height="83" alt="今すぐ夢らんど採用募集要項を確認" /></a></div>
				</div>
			</div>
		</div><!--contents END--> 
		<!--footerall-->
		<div id="footer">
			<div id="fnavi" class="clearfix">
				<ul>
					<li><a href="<?php echo home_url() ; ?>" title="夢らんど">ホーム</a> ｜　</li>
					<li><a href="<?php echo home_url() ; ?>/tenpo/">店舗一覧</a> ｜　</li>
					<li><a href="<?php echo home_url() ; ?>/concept/">コンセプト</a> ｜　</li>
					<li><a href="<?php echo home_url() ; ?>/first_guide/">初心者ガイド</a> ｜　</li>
					<li><a href="<?php echo home_url() ; ?>/category/media/">メディア情報</a> ｜　</li>
					<li><a href="<?php echo home_url() ; ?>/saiyou/">採用情報</a> ｜　</li>
					<li><a href="<?php echo home_url() ; ?>/company/">企業情報</a> ｜　</li>
					<li><a href="<?php echo home_url() ; ?>/qanda/">Q&amp;A</a> ｜　</li>
					<li><a href="<?php echo home_url() ; ?>/sitemap/">サイトマップ</a> ｜　</li>
					<li><a href="<?php echo home_url() ; ?>/privacy/">プライバシーポリシー</a> ｜　</li>
					<li><a href="<?php echo home_url() ; ?>/inquiry/">お問合せ</a>
				</ul>
			</div>
			<div id="footer_in" class="clearfix">
				<div id="flogo"><a href="<?php echo home_url() ; ?>"><img src="<?php bloginfo('template_directory'); ?>/images/flogo.png" alt="パチンコ･スロット夢らんど" width="192" height="94" /></a></div>
			</div>
			<div id="footer_link" class="clearfix">
				<ul class="glance">
					<li>
						<a href="http://taihei-g.co.jp/" target="_blank" class="glance"><img src="<?php bloginfo('template_directory'); ?>/images/flink01.gif" width="150" height="28" alt="埼玉県杉戸町の太平グループ 総合事業商社" /></a>
					</li>
					<li>
						<a href="http://www.hotel-landl.com/" target="_blank" class="glance"><img src="<?php bloginfo('template_directory'); ?>/images/flink02.gif" alt="ラブホテルエルアンドエル大宮店・草加店" width="150" height="28" /></a>
					</li>
					<li>
						<a href="http://www.taihei-g.co.jp/golf/" target="_blank" class="glance"><img src="<?php bloginfo('template_directory'); ?>/images/flink03.gif" alt="野田太平ゴルフセンター" width="150" height="28" /></a>
					</li>
					<li>
						<a href="http://www.taiheikotsu.co.jp/" target="_blank" class="glance"><img src="<?php bloginfo('template_directory'); ?>/images/flink04.gif" alt="杉戸町・宮代町のタクシー送迎太平交通株式会社" width="150" height="28" /></a>
					</li>
					<li>
						<a href="http://www.taiheihome.co.jp/" target="_blank" class="glance"><img src="<?php bloginfo('template_directory'); ?>/images/flink05.gif" alt="いつかは夢の家づくり太平ホーム株式会社" width="150" height="28" /></a>
					</li>
					<li>
						<a href="http://www.taiheibiru.co.jp/" target="_blank" class="glance"><img src="<?php bloginfo('template_directory'); ?>/images/flink06.gif" alt="太平ビル管理株式会社" width="150" height="28" /></a>
					</li>
				</ul>
			</div>
		</div><!-- footer--END -->
		<div id="footer2">
			<div id="footer_img_default"> 
				<!--<div id="footer_img"></div>--> 
			</div>
			<div id="copy">Copyright © Yumeland Group All Rights Reserved.</div>
			<img src="//cnt.fout.jp/16628/cnt?id=16628&url=&rurl=&segid=1027817&bc=1" width="1" height="1" style="display:none"/>
			<?php wp_footer(); ?>
		</div><!-- footer-2--END -->
		<!--footerall END--> 
	</div><!--container END-->
</body>
</html>