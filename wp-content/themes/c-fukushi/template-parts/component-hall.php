<div class="component-hall">
  <div class="hall-head">
    <h1 class="hall__h">家族葬専門の中央福祉葬祭<br class="display_sp"><span class="space_pc">　</span>1日1組貸切直営斎場
    </h1>
    <?php /* 
    <h2 class="hall__h-sub">
      板橋区・荒川区に<span class="size_lg">2</span>ホール
    </h2>
      */ ?>
  </div>
  <div class="hall-body">
    <?php
    // 固定ページ、homeのページIDを取得
    $home_id = get_option('page_on_front');
    $selected_posts = get_field('select_hall', $home_id);

    if (is_array($selected_posts) && !empty($selected_posts)) {
      $selected_pages = $selected_posts;
    } else {
      $selected_pages = -1;
    }

    $args = array(
      'post_type' => 'page',
      'post__in' => $selected_pages,
      'order' => 'DESC',
      'posts_per_page' => -1,
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) {
    ?>
      <ul class="hall-list">
        <?php while ($query->have_posts()) {
          $query->the_post();
          $color_set = "color_" . get_field('plan_color');;
        ?>
          <li class="hall-item">
            <div class="hall-item-img-wrap">
              <a href="<?php the_permalink(); ?>" class="hall-item__link">
                <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail('large', array('class' => 'hall-item__img'));
                }
                ?>
              </a>
            </div>
            <h2 class="hall-item__h">
              <?php the_title(); ?>
            </h2>
            <p class="hall-item__p">
              <?php the_field('hall_description_component'); ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="hall-item-btn__link">
              詳しく見る
            </a>
          </li>
        <?php } ?>
      </ul>
    <?php
      wp_reset_postdata();
    } else {
      echo '<p>会館がありません。</p>';
    }
    ?>
  </div>
</div>