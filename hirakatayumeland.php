<?php
/* Template Name: Hirakatayumeland */
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
<p class="font30_tenpo">全台計数機スマートシステム導入！5円スロット開始！</p>
<div class="tenpowrapper">
<div class="slideShow">
<div class="mainView">
<ul>
<li class="sp_first"><a href="#1"><img src="<?php bloginfo('template_directory'); ?>/images/tenpo/hirakata/00.jpg" alt="平方夢らんど3Dパース"></a> </li>
<li><a href="#2"><img src="<?php bloginfo('template_directory'); ?>/images/tenpo/hirakata/01.jpg" alt="平方夢らんど店内"></a> </li>
<li><a href="#3"><img src="<?php bloginfo('template_directory'); ?>/images/tenpo/hirakata/02.jpg" alt="平方夢らんど外観"></a> </li>
<li><a href="#4"><img src="<?php bloginfo('template_directory'); ?>/images/tenpo/hirakata/03.jpg" alt="平方夢らんど新規会員募集看板"></a> </li>
</ul>
</div>
<div class="thumbNail">
<ul>
<li><img src="<?php bloginfo('template_directory'); ?>/images/tenpo/hirakata/00.jpg" alt="平方夢らんど3Dパース"></li>
<li><img src="<?php bloginfo('template_directory'); ?>/images/tenpo/hirakata/01.jpg" alt="平方夢らんど店内"></li>
<li><img src="<?php bloginfo('template_directory'); ?>/images/tenpo/hirakata/02.jpg" alt="平方夢らんど外観"></li>
<li><img src="<?php bloginfo('template_directory'); ?>/images/tenpo/hirakata/03.jpg" alt="平方夢らんど新規会員募集看板"></li>
</ul>
</div>
</div>
<table summary="平方夢らんど店舗情報" width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<th scope="row">住　所</th>
<td>埼玉県越谷市平方1636-13</td>
</tr>
<tr>
<th scope="row">電　話</th>
<td>048-977-5055</td>
</tr>
<tr>
<th scope="row">営業時間</th>
<td>10:00～22:45</td>
</tr>
<tr>
<th scope="row">遊技料金</th>
<td>
パチンコ：[4][1]<br />
パチスロ：[20][5]
</td>
</tr>
<tr>
<th scope="row">台　数</th>
<td>パチンコ 264台<br />
スロット 117台</td>
</tr>
<tr>
<th scope="row">駐車場</th>
<td>240台</td>
</tr>
<tr>
<th scope="row">P-world</th>
<td><a href="http://www.p-world.co.jp/saitama/h-yumeland.htm" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/p-world_hirakata.jpg" width="300" height="60" alt="P-world平方夢らんど" /></a></td>
</tr>
<tr>
<th scope="row">facebook</th>
<td><a href="https://www.facebook.com/taiheiyumeland" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/tenpo_facebook.gif" width="300" height="60" alt="夢らんどグループFacebookページ" /></a></td>
</tr>
<tr>
<th scope="row">店舗紹介カタログ</th>
<td><a href="<?php bloginfo('template_directory'); ?>/images/tenpo/hirakata/sasi_o.jpg" rel="lightbox"><img src="<?php bloginfo('template_directory'); ?>/images/tenpo/hirakata/sasi.jpg" alt="平方夢らんど店舗紹介カタログ" width="400" height="576" /></a></td>
</tr>
<tr>
<th scope="row">アクセス方法</th>
<td>東京草加方面から国道4号バイパスを越谷春日部方面に向かって野田岩槻線の平方交差点を左折して約500ｍ先の右側です。 </td>
</tr>
</table>
<p><br class="img_bottom30" /></p>
<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3230.13710253556!2d139.78377405183988!3d35.943615910815055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc9b5df91a67395bf!2z5bmz5pa55aSi44KJ44KT44Gp!5e0!3m2!1sja!2sjp!4v1406694103920" width="100%" height="500" frameborder="0" style="border:0"></iframe>
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