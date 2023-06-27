<?php
/* Template Name: Sugitoyumeland */
get_header();
?>
<!--contents-->
<div id="contents" class="clearfix">
<div id="kaisou_main" class="clearfix">
<div class="kaisou_main_left"> 
<!--各ページ文字画像切り替えの場合分け-->
<img src="<?php bloginfo('template_directory'); ?>/images/km_tenpo.gif" width="40" height="170" />
<!--各ページ文字画像切り替えの場合分け　ここまで--> 
</div>
<!--kaisou_main_right START-->
<div class="kaisou_main_right">
<?php the_title('<h4>' , '</h4>'); ?>
<div class="letter"> 
<!--letter START-->
<div id="tenpo">
<p class="font30_tenpo">お客様のお客様に因るお客様の為のお店</p>
<div class="tenpowrapper">
<div class="slideShow">
<div class="mainView">
<ul>
<li class="sp_first"><a href="#0"><img src="<?php bloginfo('template_directory'); ?>/images/tenpo/sugito/00.jpg" alt="杉戸夢らんど3Dパース"></a></li>
<li><a href="#1"><img src="<?php bloginfo('template_directory'); ?>/images/tenpo/sugito/02.jpg" alt="杉戸夢らんど主通路"></a></li>
<li><a href="#2"><img src="<?php bloginfo('template_directory'); ?>/images/tenpo/sugito/03.jpg" alt="杉戸夢らんど5円スロット"></a></li>
</ul>
</div>
<div class="thumbNail">
<ul>
<li><img src="<?php bloginfo('template_directory'); ?>/images/tenpo/sugito/00.jpg" alt="杉戸夢らんど3Dパース"></li>
<li><img src="<?php bloginfo('template_directory'); ?>/images/tenpo/sugito/02.jpg" alt="杉戸夢らんど主通路"></li>
<li><img src="<?php bloginfo('template_directory'); ?>/images/tenpo/sugito/03.jpg" alt="杉戸夢らんど5円スロット"></li>
</ul>
</div>
</div>
<table summary="杉戸夢らんど店舗情報" width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<th scope="row">住　所</th>
<td>埼玉県北葛飾郡杉戸町大字下高野2372</td>
</tr>
<tr>
<th scope="row">電　話</th>
<td>0480-33-8888</td>
</tr>
<tr>
<th scope="row">営業時間</th>
<td>10:00～22:30</td>
</tr>
<tr>
<th scope="row">遊技料金</th>
<td>パチンコ：[4][1]<br />
パチスロ：[20][5]</td>
</tr>
<tr>
<th scope="row">台　数</th>
<td>パチンコ 336台<br />
スロット 192台</td>
</tr>
<tr>
<th scope="row">駐車場</th>
<td>412台</td>
</tr>
<tr>
<th scope="row">P-world</th>
<td><a href="http://www.p-world.co.jp/saitama/sugito-yumeland.htm" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/p-world_sugito.jpg" width="300" height="60" alt="P-world杉戸夢らんど" /></a></td>
</tr>
<tr>
<th scope="row">facebook</th>
<td><a href="https://www.facebook.com/taiheiyumeland" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/tenpo_facebook.gif" width="300" height="60" alt="夢らんどグループFacebookページ" /></a></td>
</tr>
<tr>
<th scope="row">店舗紹介カタログ</th>
<td><a href="<?php bloginfo('template_directory'); ?>/images/tenpo/sugito/sasi_o.jpg" rel="lightbox"><img src="<?php bloginfo('template_directory'); ?>/images/tenpo/sugito/sasi.jpg" width="400" height="566" /></a></td>
</tr>
</table>
<p><br class="img_bottom30" /></p>
<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3225.836703592363!2d139.718458!3d36.048691!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x409b2e01c1c2470a!2z5p2J5oi45aSi44KJ44KT44Gp!5e0!3m2!1sja!2sjp!4v1406694730759" width="100%" height="500" frameborder="0" style="border:0"></iframe>
</div>
</div>
<p><br class="img_bottom30" /></p>
<ul class="tenpobutton clearfix">
<li><a href="<?php echo home_url() ; ?>/tenpo/#superyumeland">スーパー夢らんど</a> </li>
<li><a href="<?php echo home_url() ; ?>/tenpo/kasukabeyumeland/">かすかべ夢らんど</a></li>
<li><a href="<?php echo home_url() ; ?>/tenpo/uchimakiyumeland/">内牧夢らんど</a></li>
<li><a href="<?php echo home_url() ; ?>/tenpo/hirakatayumeland/">平方夢らんど</a></li>
<!--<li><a href="<?php echo home_url() ; ?>/tenpo/hiraiyumeland/">平井夢らんど</a></li>-->
</ul>
</div>


</div>
<!--letter END--> 
</div>
<!--kaisou_main_right END--> 
</div>
<!--kaisou_main END-->
<?php get_sidebar('tenpo');?>
</div>
<!--contents END-->
<?php get_footer(); ?>
</div>
<!--container END-->
<?php wp_footer(); ?>
</body></html>