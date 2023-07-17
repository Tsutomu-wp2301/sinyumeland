	<?php get_header(); ?>
		<div class="p-pc--layout">
			<div class = "p-introduction--wrapper"><!-- ３つのポイントを紹介 -->
				<ul class="p-introduction p-introduction--flex">
					<li class="p-introduction__tenpo">
						<a href="<?php echo esc_url( home_url() ) . '/page-tenpo'; ?>">
							<img src="<?php echo get_template_directory_uri(); ?>'/images/slide143.jpg'"  alt="店舗一覧"><span class="image-overlay">店舗一覧</span>
						</a>
					</li>
					<li class="p-introduction__recruit">
						<a href="<?php echo esc_url( home_url() ) . '/page-tenpo'; ?>">
							<img src="<?php echo get_template_directory_uri(); ?>'/images/slide108.jpg'"  alt="採用情報"><span class="image-overlay">採用について</span>
						</a>
					</li>
					<li class="p-introduction__company">
						<a href="<?php echo esc_url( home_url() ) . '/page-tenpo'; ?>">
							<img src="<?php echo get_template_directory_uri(); ?>'/images/slide124.jpg'"  alt="企業情報"><span class="image-overlay">企業について</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="p-pc--layout">
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
					<div class="h2-flex">
						<h2 class="title-home">営 業 情 報</h2>
					</div>
					<article id="tenkyu_list">
						<ul class="content">
							<?php
								query_posts(
								Array(
									'category_name' => 'tenkyu',
									'post_type' => 'post',
									'orderby' => 'date',
									'order' => 'DESC',
									'posts_per_page' => '2'
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
								<div class="p-tenkyu--honbun">
									<?php the_content(); ?>
								</div>
							</li>
							<?php endwhile; endif; wp_reset_query(); ?>
						</ul>
					</article>
					<br class="clearfix" />
					<!-- <h3><img src="<?php bloginfo('template_directory'); ?>/images/ameba_midashi.png" alt="夢らんど各店メディア掲載情報" width="324" height="40" /></h3> -->
					<div class="h2-flex">
						<h2 class= "title-home">メディア掲載情報</h2>
					</div>
					<article id="ameba_pick">
						<?php
							query_posts(
							Array(
								'category_name' => 'media',/* メディア情報 */
								'post_type' => 'post',
								'orderby' => 'date',
								'order' => 'DESC',
								'posts_per_page' => '6'
								)
							);
							if (have_posts()) : while (have_posts()) : the_post();
						?>
						<?php get_template_part('template-parts/media','post2')?>
						<div class="img_bottom20"></div>
						<?php endwhile; endif; wp_reset_query(); ?>
					</article>
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
										'category_name' => 'media',
										'post_type' => 'post',
										'orderby' => 'date',
										'order' => 'DESC',
										'posts_per_page' => '5'
										)
									);
									if (have_posts()) : while (have_posts()) : the_post();
								?>
								<div>
									<span>
										<?php
											$d_year = get_the_time('Y');
											$d_month = get_the_time('m');
											$d_day = get_the_time('d');
											$d_youbi = get_the_time('D');
											echo $d_year."年".$d_month."月".$d_day."日(".$d_youbi.")";
										?>
									</span>　<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</div>
								<?php endwhile; endif; wp_reset_query(); ?>
							</li>
							<!--スーパー-->
							<li class="hide">
								<?php
									query_posts(
									Array(
										'category_name' => 'super',
										'post_type' => 'post',
										'orderby' => 'date',
										'order' => 'DESC',
										'posts_per_page' => '5'
										)
									);
									if (have_posts()) : while (have_posts()) : the_post();
								?>
								<?php get_template_part('template-parts/media','posttitle')?>
								<?php endwhile; endif; wp_reset_query(); ?>
							</li>
							<!--かすかべ-->
							<li class="hide">
								<?php
									query_posts(
									Array(
										'category_name' => 'kasukabe',
										'post_type' => 'post',
										'orderby' => 'date',
										'order' => 'DESC',
										'posts_per_page' => '5'
										)
									);
									if (have_posts()) : while (have_posts()) : the_post();
								?>
								<?php get_template_part('template-parts/media','posttitle')?>
								<?php endwhile; endif; wp_reset_query(); ?>
							</li>
							<!--平方-->
							<li class="hide">
								<?php
									query_posts(
									Array(
										'category_name' => 'hirakata',
										'post_type' => 'post',
										'orderby' => 'date',
										'order' => 'DESC',
										'posts_per_page' => '5'
										)
									);
									if (have_posts()) : while (have_posts()) : the_post();
								?>
								<?php get_template_part('template-parts/media','posttitle')?>
								<?php endwhile; endif; wp_reset_query(); ?>
							</li>
							<!--内牧-->
							<li class="hide">
								<?php
									query_posts(
									Array(
										'category_name' => 'uchimaki',
										'post_type' => 'post',
										'orderby' => 'date',
										'order' => 'DESC',
										'posts_per_page' => '5'
										)
									);
									if (have_posts()) : while (have_posts()) : the_post();
								?>
								<?php get_template_part('template-parts/media','posttitle')?>
								<?php endwhile; endif; wp_reset_query(); ?>
							</li>
						</ul>
						<p class="text_right"><i class="fa fa-external-link-square white"></i><a href="<?php echo home_url() ; ?>/category/media/">&gt;&gt;メディア掲載情報一覧</a></p>
					</div>
					<div class="h2-flex">
						<h2 class= "title-home">夢らんどニュース</h2>
					</div>
					<article id="tenkyu_list">
						<!-- <p class="info"><strong>夢らんど</strong>ニュース</p> -->
						<ul class="content">
							<?php
								query_posts(
								Array(
									'category_name' => 'news',/* ニュース */
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
								<div class="title p-news--title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</div>
								<div class="p-news--flex clearfix">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail(); ?>
									</a>
									<p class="p-news--text">
										<?php echo nl2br(mb_substr(strip_tags($post-> post_content),0,200).'<a class="more" href="'. get_permalink()) . '">（さらに...）</a>'; ?>
									</p>
								</div>
							</li>
							<?php endwhile; endif; wp_reset_query(); ?>
						</ul>
					</article>
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
			</div><!--contents END--> 
		</div>


		<!-- スマホ、タブレット用コンテンツ -->
		<div class = "tabsp-layout">
			<?php xo_slider( 16 ); ?>
			<div id="marquee"><!-- 店休・イベント情報 -->
				<?php query_posts(
					Array(
						'category_name' => 'tenkyu',
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
			<div class="p-content--sp">
				<main class="p-main--sp">
					<div class="h2-flex">
						<h2 class= "title-home">メディア掲載情報</h2>
					</div>
					<article id="ameba_pick">
						<?php
							query_posts(
							Array(
								'category_name' => 'media',/* メディア情報 */
								'post_type' => 'post',
								'orderby' => 'date',
								'order' => 'DESC',
								'posts_per_page' => '6'
								)
							);
							if (have_posts()) : while (have_posts()) : the_post();
						?>
						<?php get_template_part('template-parts/media','post2')?>
						<div class="img_bottom20"></div>
						<?php endwhile; endif; wp_reset_query(); ?>
					</article>
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
										'category_name' => 'media',
										'post_type' => 'post',
										'orderby' => 'date',
										'order' => 'DESC',
										'posts_per_page' => '5'
										)
									);
									if (have_posts()) : while (have_posts()) : the_post();
								?>
								<div>
									<span>
										<?php
											$d_year = get_the_time('Y');
											$d_month = get_the_time('m');
											$d_day = get_the_time('d');
											$d_youbi = get_the_time('D');
											echo $d_year."年".$d_month."月".$d_day."日(".$d_youbi.")";
										?>
									</span>　<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</div>
								<?php endwhile; endif; wp_reset_query(); ?>
							</li>
							<!--スーパー-->
							<li class="hide">
								<?php
									query_posts(
									Array(
										'category_name' => 'super',
										'post_type' => 'post',
										'orderby' => 'date',
										'order' => 'DESC',
										'posts_per_page' => '5'
										)
									);
									if (have_posts()) : while (have_posts()) : the_post();
								?>
								<?php get_template_part('template-parts/media','posttitle')?>
								<?php endwhile; endif; wp_reset_query(); ?>
							</li>
							<!--かすかべ-->
							<li class="hide">
								<?php
									query_posts(
									Array(
										'category_name' => 'kasukabe',
										'post_type' => 'post',
										'orderby' => 'date',
										'order' => 'DESC',
										'posts_per_page' => '5'
										)
									);
									if (have_posts()) : while (have_posts()) : the_post();
								?>
								<?php get_template_part('template-parts/media','posttitle')?>
								<?php endwhile; endif; wp_reset_query(); ?>
							</li>
							<!--平方-->
							<li class="hide">
								<?php
									query_posts(
									Array(
										'category_name' => 'hirakata',
										'post_type' => 'post',
										'orderby' => 'date',
										'order' => 'DESC',
										'posts_per_page' => '5'
										)
									);
									if (have_posts()) : while (have_posts()) : the_post();
								?>
								<?php get_template_part('template-parts/media','posttitle')?>
								<?php endwhile; endif; wp_reset_query(); ?>
							</li>
							<!--内牧-->
							<li class="hide">
								<?php
									query_posts(
									Array(
										'category_name' => 'uchimaki',
										'post_type' => 'post',
										'orderby' => 'date',
										'order' => 'DESC',
										'posts_per_page' => '5'
										)
									);
									if (have_posts()) : while (have_posts()) : the_post();
								?>
								<?php get_template_part('template-parts/media','posttitle')?>
								<?php endwhile; endif; wp_reset_query(); ?>
							</li>
						</ul>
						<p class="text_right"><i class="fa fa-external-link-square white"></i><a href="<?php echo home_url() ; ?>/category/media/">&gt;&gt;メディア掲載情報一覧</a></p>
					</div>
					<div class="h2-flex">
						<h2 class= "title-home">夢らんどニュース</h2>
					</div>
					<article id="tenkyu_list">
						<ul class="content">
							<?php
								query_posts(
								Array(
									'category_name' => 'news',/* ニュース */
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
								<div class="title p-news--title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</div>
								<div class="p-news--flex clearfix">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail(); ?>
									</a>
									<p class="p-news--text">
										<?php echo nl2br(mb_substr(strip_tags($post-> post_content),0,200).'<a class="more" href="'. get_permalink()) . '">（さらに...）</a>'; ?>
									</p>
								</div>
							</li>
							<?php endwhile; endif; wp_reset_query(); ?>
						</ul>
					</article>
					<p class="text_right"><i class="fa fa-external-link-square white"></i><a href="<?php echo home_url() ; ?>/category/news/">&gt;&gt;夢らんどニュース一覧</a></p>
					<div class="img_bottom30"></div>
				</main>
			</div>
			<div id="footer"><!-- SPタブレット用pフッター -->
				<div id="fnavi" class="clearfix">
					<ul class="c-footer-flex">
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
				<div class="p-footer__wrapper">
					<div class="p-footer__logo__flex">
						<div class="p-footer__logo">
							<img src="http://sinyumeland.local/wp-content/themes/yumelandgroup01/images/h2logo.png" alt="夢らんどグループ" width="100%">
						</div>
						<div id="footer_link" class="clearfix p-footer__link__wrapper__flex">
							<ul class="p-footer__link p-footer__link__flex">
								<li>
									<a href="http://taihei-g.co.jp/" target="_blank" class="glance">株式会社　太平</a>
								</li>
								<li>
									<a href="http://www.hotel-landl.com/" target="_blank" class="glance">ホテルエルアンドエル 大宮・草加</a>
								</li>
								<li>
									<a href="http://www.taihei-g.co.jp/golf/" target="_blank" class="glance">太平ゴルフセンター</a>
								</li>
							</ul>
							<ul class="p-footer__link p-footer__link__flex">
								<li>
									<a href="http://www.taiheikotsu.co.jp/" target="_blank" class="glance">太平交通株式会社</a>
								</li>
							</ul>
							<ul class="p-footer__link p-footer__link__flex">
								<li>
									<a href="http://www.taiheihome.co.jp/" target="_blank" class="glance">太平ホーム株式会社</a>
								</li>
							</ul>
							<ul class="p-footer__link p-footer__link__flex">
								<li>
									<a href="http://www.taiheibiru.co.jp/" target="_blank" class="glance">太平ビル管理株式会社</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div><!-- SPタブレット用フッターEND -->
		</div>
		<?php get_footer(); ?>
	</body>
</html>