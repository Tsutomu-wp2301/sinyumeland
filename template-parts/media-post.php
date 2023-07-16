<!-- PC版　メディア情報一覧用テンプレート -->
<div class="flashnews clearfix">
    <div class="left">
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(); ?>
      </a>
    </div>
  <div class="right p-text--left">
    <span class="title">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </span>
    <span class="content">
      <?php echo '　'.mb_substr(strip_tags($post-> post_content),0,50)?>
      <br>
      <?php echo '<a class="more" href="'. get_permalink() . '">（さらに...）</a>'; ?>
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