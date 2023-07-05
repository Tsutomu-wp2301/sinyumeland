	<?php get_header(); ?>
		<div class="p-pc--layout">
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
							<li>
								<a href="https://www.youtube.com/user/yumelandgroup/videos" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/youtube.jpg" width="300" height="51" alt="YOUTUBE夢らんどチャンネル" />
								</a>
							</li>
							<li>
								<a href="<?php echo home_url() ; ?>/category/news/volunteer/"><img src="<?php bloginfo('template_directory'); ?>/images/volunteer.jpg" width="300" height="130" alt="夢らんどの社会貢献活動" />
								</a>
							</li>
						</ul>
					</div>
					<div id="banner_arubaito">
						<div class="button">
							<a href="<?php echo home_url() ; ?>/saiyou/" class="glance"><img src="<?php bloginfo('template_directory'); ?>/images/banner_arubaito_button.png" width="104" height="83" alt="今すぐ夢らんど採用募集要項を確認" />
							</a>
						</div>
					</div>
				</div>
			</div><!--contents END--> 
		</div>
		<div class = "tabsp-layout">
			<?php xo_slider( 16 ); ?>
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
				<div id="line">
					<ul>
						<!--<li><a href="https://yumelandgroup.com/20210115-2/"><img src="<?php echo get_template_directory_uri(); ?>/images/uirusutaisaku.jpg" alt="ウイルス対策に関する感染予防・拡散対策の実施" width="100%"></a></li>-->
						<!--<li><a href="https://line.me/ti/p/%40ybi1984c"><img src="<?php echo get_template_directory_uri(); ?>/images/line_super.jpg" alt="LINEでもスーパー夢らんど" width="100%"></a></li>
						<li class="buttonn"><a href="https://line.me/ti/p/%40ybi1984c"><img src="<?php echo get_template_directory_uri(); ?>/images/line_super_button.png" alt="LINEでもスーパー夢らんど" width="100%"></a></li>-->
					</ul>
				</div>
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
				<!-- </div> -->
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
			<div class="c-copy">Copyright © Yumeland Group All Rights Reserved.</div>
			<a href="#" id="page-top"><i class="fa fa-arrow-up"></i></a>
		</div>
		<?php get_footer(); ?>
	</body>
</html>