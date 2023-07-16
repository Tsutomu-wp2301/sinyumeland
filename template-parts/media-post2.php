<!-- PC版　メディア情報一覧用テンプレート -->
<div class="p-content--flex">
  <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail(); ?>
  </a>
  <div class="p-content__text--flex">
    <div class="p-title">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </div>
    <div class="p-content">
      <?php echo '　'.mb_substr(strip_tags($post-> post_content),0,150)?>
      <br>
      <?php echo '<a class="more" href="'. get_permalink() . '">（さらに...）</a>'; ?>
    </div>
  </div>
</div>
<div class="p-date--wrapper">
  <span class="date">
    <?php
      $d_year = get_the_time('Y');
      $d_month = get_the_time('m');
      $d_day = get_the_time('d');
      $d_youbi = get_the_time('D');
      echo $d_year."年".$d_month."月".$d_day."日(".$d_youbi.")";
    ?>　
    <span class="p-kokate">
      <?php
      echo get_the_category_list( ' ／ ' );
      ?>
    </span>
  </span>
</div>