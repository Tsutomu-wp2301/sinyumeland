<?php
/* Template Name: Simu */
get_header();
?>
<!--contents-->
<div id="contents" class="clearfix">
<div id="kaisou_main" class="clearfix">
<div class="kaisou_main_left"> 
<!--各ページ文字画像切り替えの場合分け--> 
<img src="<?php bloginfo('template_directory'); ?>/images/km_saiyou.gif" width="40" height="170" /> 
<!--各ページ文字画像切り替えの場合分け　ここまで--> 
</div>
<!--kaisou_main_right START-->
<div class="kaisou_main_right">
<?php the_title('<h4>' , '</h4>'); ?>
<div class="letter"> 
<!--letter START-->
<div id="saiyou">
<div id="simu">
<form action="<?php bloginfo('template_directory'); ?>/js/simu.js" name="form1">
<p>夢らんどグループでは働きたい時間や日数・曜日等、貴方の希望に対応致します。<br />
毎月の収入はいくらになるか...。そんな悩みを15秒で解決!!<br />
同時期に入社したライバルたちに差を付け、先輩を追い越す為にも、どんどんスキルを磨いて行きましょう!!</p>
<p>※簡易シミュレーションになります。詳しくは各店舗までお問合せ下さい。</p>
<p class="whiteBline">時給を選択してください。</p>
<div class="simbox">
<select name="goods1">
<option value="1100">1100円</option>
<option value="1150">1150円</option>
<option value="1250"selected="">1250円</option>
<option value="1300">1300円</option>
<option value="1350">1350円</option>
<option value="1375">1375円</option>
<option value="1400">1400円</option>
<option value="1450">1450円</option>
<option value="1500">1500円</option>
<option value="1550">1550円</option>
<option value="1600">1600円</option>
<option value="1625">1625円</option>
</select>
</div>
<p class="whiteBline">1日の労働時間は何時間ですか？</p>
<div class="simbox">
<select name="goods2">
<option value="3">3時間</option>
<option value="4">4時間</option>
<option value="5">5時間</option>
<option value="6">6時間</option>
<option value="7.5" selected="">7.5時間</option>
</select>
</div>
<p class="whiteBline">1週間の労働日数は？</p>
<div class="simbox">
<select name="goods3">
<option value="1">1日</option>
<option value="2">2日</option>
<option value="3">3日</option>
<option value="4">4日</option>
<option selected="" value="5">5日</option>
</select>
</div>
<div class="button"><input type="button" value="給与計算をする" onClick="keisan()"></div>
<div class="keka">
<p class="jwaku">1ヶ月の給与目安 ：
<input name="onem_total" type="text" class="modern">
円　</p>
<p class="jwaku">3ヶ月の給与目安 ：
<input name="threem_total" type="text" class="modern">
円　</p>
<p class="jwaku">6ヶ月の給与目安 ：
<input name="sixm_total" type="text" class="modern">
円　</p>
<p class="jwaku">12ヶ月の給与目安：
<input name="twelvem_total" type="text" class="modern">
円　</p>
</div>
</form>
<table border="0" summary="時給" width="100%" cellspacing="1" cellpadding="0">
<tbody>
<tr>
<th scope="row" width="30%">夢らんど各店、太平プレイランド関宿店</th>
<td width="70%">1,100円～1,250円<br />
※22時以降　1,375円～1,563円<br />
※研修期間1ヶ月→時給1,000円</td>
</tr>
<tr>
<th scope="row">スーパー夢らんど</th>
<td>1,250円～1,300円<br />
※22時以降　1,562円～1,625円<br />
※研修期間1ヶ月→時給1,100円</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<!--letter END--> 
</div>
<!--kaisou_main_right END--> 
</div>
<!--kaisou_main END-->
<?php get_sidebar('saiyou');?>
</div>
<!--contents END-->
<?php get_footer(); ?>
</div>
<!--container END-->
<?php wp_footer(); ?>
</body></html>