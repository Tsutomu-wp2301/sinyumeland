<?php
/* Template Name: Sitemap */
get_header();
?>
<!--contents-->

<div id="contents" class="clearfix">
<div id="kaisou_main" class="clearfix">
<div class="kaisou_main_left"> 
<!--各ページ文字画像切り替えの場合分け--> 
<img src="<?php bloginfo('template_directory'); ?>/images/km_sitemap.gif" width="40" height="170" /> 
<!--各ページ文字画像切り替えの場合分け　ここまで--> 
</div>
<!--kaisou_main_right START-->
<div class="kaisou_main_right">
<?php the_title('<h4>' , '</h4>'); ?>
<div class="letter"> 
<!--letter START-->
<div id="sitemap" class="clearfix">
<div class="box_first">
<ul>
<li class="title"><a href="<?php echo home_url() ; ?>/tenpo/">店舗一覧</a></li>
<li><a href="<?php echo home_url() ; ?>/tenpo/#superyumeland">スーパー夢らんど</a></li>
<li><a href="<?php echo home_url() ; ?>/tenpo/kasukabeyumeland/">かすかべ夢らんど</a></li>
<li><a href="<?php echo home_url() ; ?>/tenpo/uchimakiyumeland/">内牧夢らんど</a></li>
<li><a href="<?php echo home_url() ; ?>/tenpo/hirakatayumeland/">平方夢らんど</a></li>
<!--<li><a href="<?php echo home_url() ; ?>/tenpo/hiraiyumeland/">平井夢らんど</a></li>-->
<li class="title"><a href="<?php echo home_url() ; ?>/category/media/">メディア情報</a></li>
<li><a href="<?php echo home_url() ; ?>/category/media/super/">スーパー夢らんど</a></li>
<li><a href="<?php echo home_url() ; ?>/category/media/kasukabe/">かすかべ夢らんど</a></li>
<li><a href="<?php echo home_url() ; ?>/category/media/uchimaki/">内牧夢らんど</a></li>
<li><a href="<?php echo home_url() ; ?>/category/media/hirakata/">平方夢らんど</a></li>
<li><a href="<?php echo home_url() ; ?>/category/media/hirai/">平井夢らんど</a></li>
</ul>
</div>
<div class="box">
<ul>
<li class="title"><a href="<?php echo home_url() ; ?>/saiyou/">採用情報</a></li>
<li><a href="<?php echo home_url() ; ?>/saiyou/saiyou1/">新卒採用</a></li>
<li><a href="https://taihei-g-job.jp/list/ds_8000507102/" target="_blank">採用情報専用サイト</a></li>
<li class="title"><a href="<?php echo home_url() ; ?>/concept/">コンセプト</a></li>
<li><a href="<?php echo home_url() ; ?>/concept/evolution2014/">夢EVOLUTION2014</a></li>
<li><a href="<?php echo home_url() ; ?>/concept/innovation2013/">夢INNOVATION2013</a></li>
<li><a href="<?php echo home_url() ; ?>/concept/goudou/">全店舗合同の折り込み広告</a></li>
<li class="title"><a href="<?php echo home_url() ; ?>/first_guide/">初心者ガイド</a></li>
<li><a href="#">パチンコ編</a></li>
<li><a href="#">スロット編</a></li>
</ul>
</div>
<div class="box">
<ul>
<li class="title"><a href="<?php echo home_url() ; ?>/company/">企業情報</a></li>
<li class="title"><a href="<?php echo home_url() ; ?>/qanda/">Q&amp;A</a></li>
<li class="title"><a href="<?php echo home_url() ; ?>/privacy/">プライバシーポリシー</a></li>
<li class="title"><a href="<?php echo home_url() ; ?>/inquiry/">お問合せ</a></li>
</ul>
</div>
</div>
</div>
<!--letter END--> 
</div>
<!--kaisou_main_right END--> 
</div>
<!--kaisou_main END-->
<?php get_sidebar('sitemap');?>
</div>
<!--contents END-->
<?php get_footer(); ?>
</div>
<!--container END-->
<?php wp_footer(); ?>
</body></html>