<div class="component-relation">
  <div class="relation-head">
    <h1 class="relation__h">
      埼玉県・東京都エリア <br class="display_sp">関連斎場を探す
    </h1>
  </div>
  <div class="relation-body">
    <ul class="relation-list">
      <?php
      $args = array(
        'post_type' => 'relation',
        'post__in' => array(3066),
      );
      $query = new WP_Query($args);
      if ($query->have_posts()) {
      ?>
        <?php while ($query->have_posts()) {
          $query->the_post();
        ?>
          <li class="relation-item">
            <div class="item-block-img-wrap">
              <a href="<?php the_permalink(); ?>" class="item-block-link">
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail('medium', array('class' => 'item-block__img'));
                }
                ?>
              </a>
            </div>
            <h2 class="item-block__h">
              <?php the_title(); ?>
            </h2>
            <p class="item-block__p">
              <?php the_field('kaikan_description'); ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="item-block-btn-link">
              詳しく見る
            </a>
          </li>
        <?php } ?>
        <?php wp_reset_postdata(); ?>
      <?php } ?>
      <?php
      // 以下の順番、idを表示する。2382、2496、3065、3058、3061
      $args = array(
        'post_type' => 'relation',
        'post__in' => array(2382, 2496, 3085, 3058, 3061),
        'orderby' => 'post__in',
      );
      $query = new WP_Query($args);
      if ($query->have_posts()) {
      ?>
        <?php while ($query->have_posts()) {
          $query->the_post();
        ?>
          <li class="relation-item">
            <div class="item-block-img-wrap">
              <a href="<?php the_permalink(); ?>" class="item-block-link">
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail('medium', array('class' => 'item-block__img'));
                }
                ?>
              </a>
            </div>
            <h2 class="item-block__h">
              <?php the_title(); ?>
            </h2>
            <p class="item-block__p">
              <?php the_field('kaikan_description'); ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="item-block-btn-link">
              詳しく見る
            </a>
          </li>
        <?php } ?>
        <?php wp_reset_postdata(); ?>
      <?php } ?>
    </ul>
  </div>
  <div class="relation-link">
    <a href="<?php echo home_url(); ?>/hall" class="relation__link">斎場をもっとみる</a>
  </div>
</div>