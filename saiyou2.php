<?php
/* Template Name: Saiyou2 */
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
<div class="img_bottom30"><img src="<?php bloginfo('template_directory'); ?>/images/saiyou/saiyou2_img01.png" alt="中途採用-夢らんどは「人とのかかわり」を大切にする企業です。皆様のご応募心よりお待ちしております。" width="620" height="196" /></div>
<h5 class="h_yume">職　種</h5>
<p><span class="whiteB">店舗運営職</span></p>
<p><br class="img_bottom30" /></p>
<h5 class="h_yume">業務内容</h5>
<p>ホールでの接客業務、カウンター業務、パチンコ台やスロット台の清掃からスタートしていただき、<br />
正社員登用後は、店内装飾のデザイン、景品の仕入・在庫管理、売上管理、広報・宣伝、人材教育、 <br />
採用業務、集客戦略などの幅広い仕事をお任せします。 <br />
当社では、お客様とのかかわりを大切にした地域密着の店舗運営を行っています。 <br />
キャリアアップの環境も整っていて、将来店長として1つの店舗を運営することも目指せます。</p>
<p><br class="img_bottom30" /></p>
<h5 class="h_yume">採用データ</h5>
<p><span class="whiteBline">雇用形態</span><strong>契約社員<br />
</strong>※見習い期間（3ヶ月）終了後から、希望により正社員登用もあります。</p>
<p><span class="whiteBline">給　　与</span> 236,600円（見習期間3ヶ月）<br />
251,000円（見習期間終了後）</p>
<p><span class="whiteBline">諸 手 当</span> 通勤手当(全額)・時間外手当・調整手当・深夜勤務手当・精皆勤手当など</p>
<p><span class="whiteBline">昇給賞与</span> 昇給年1回(4月)・賞与年2回(7月・12月) </p>
<p><span class="whiteBline">勤務時間</span> 交替制<br />
早番　 9：00～17：30<br />
遅番　16：00～24：00</p>
<p><span class="whiteBline">休日休暇</span> 隔週週休2 日制（月6～7日休み）<br />
年末年始休暇、夏季休暇、ＧＷ休暇（それぞれ5日ずつ）、 特別休暇、育児休業、介護休業、有給休暇(初年度10日、以降年1日ずつ追加) </p>
<p><span class="whiteBline">勤 務 地</span> スーパー夢らんど、夢らんど各店、太平プレイランド関宿店のいずれか</p>
<p><span class="whiteBline">福利厚生</span> 社会保険完備、団体保険、退職金制度、慶弔見舞金、再雇用制度、 永年勤続表彰など </p>
<p><span class="whiteBline">応募書類</span> 履歴書(写真貼付)</p>
<p><span class="whiteBline">選考試験</span> 面接試験</p>
<p><span class="whiteBline">選考場所<br />
</span> スーパー夢らんど、夢らんど各店、太平プレイランド関宿店のいずれか</p>
<p><span class="whiteBline">応募方法<br />
</span> 下記の応募フォームエントリーをお願いします。（受付完了後～）<br />
※エントリーの際に、ご希望の勤務店舗をお選びください。<br />
※電話からのご応募もOKです。</p>
<p><br class="img_bottom30" /></p>
<h5 class="h_yume">お問合せ・エントリー</h5>
<table summary="夢らんどグループお問合せ・エントリー" width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<th scope="row">お問合せ先</th>
<td>埼玉県北葛飾郡杉戸町杉戸2-7-3<br />
株式会社　太　平<br />
人事部人事課<br />
TEL.0480-32-9388</td>
</tr>
<tr>
<th scope="row">交通機関</th>
<td>東武伊勢崎線「東武動物公園駅」東口徒歩10分</td>
</tr>
<tr>
<th scope="row">採用情報サイト</th>
<td><a href="http://taihei-g.co.jp/blog/" target="_blank">http://taihei-g.co.jp/recruit/</a></td>
</tr>
<tr>
<th scope="row">E-mail</th>
<td>
<address>
<a href="mailto:jinji&#64;taihei-g.co.jp">jinji&#64;taihei-g.co.jp</a><br />
</address>
</td>
</tr>
</table>
<p><br class="img_bottom30" /></p>
<p><a href="<?php echo home_url() ; ?>/saiyou/entry/" onclick="window.open('<?php echo home_url() ; ?>/saiyou/entry/','win1','width=750,height=750,resizable=yes,left=0px,top=0px,scrollbars=yes');return false;" onkeypress="" title="夢らんど採用エントリーはこちら"><img src="<?php bloginfo('template_directory'); ?>/images/saiyou/kani_main.png" width="620" height="70" /></a></p>
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