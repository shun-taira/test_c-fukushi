<div class="component-archive">
  <div class="archive-head">
    <h1 class="archive__h">
      葬儀コラム
    </h1>
  </div>
  <div class="archive-body">
    <ul class="archive-list">
      <?php
      $sticky_query = null;
      $sticky = get_option('sticky_posts');
      if ($sticky) {
        $sticky_args = array(
          'post_type' => 'post',
          'posts_per_page' => 6, // 先頭固定表示も含めて4つに制限
          'orderby' => 'date',
          'order' => 'DESC',
          'post__in' => $sticky,
          'ignore_sticky_posts' => 1
        );
        $sticky_query = new WP_Query($sticky_args);
      }
      // 通常の投稿を取得
      $non_sticky_args = array(
        'post_type' => 'post',
        'posts_per_page' => 6 - ( $sticky_query->post_count ?? 0 ), // 残りの数を取得
        'orderby' => 'date',
        'order' => 'DESC',
        'post__not_in' => $sticky,
        'ignore_sticky_posts' => 1
      );
      $non_sticky_query = new WP_Query($non_sticky_args);

      // 先頭固定表示の投稿を表示
      if ($sticky && $sticky_query->have_posts()) :
        while ($sticky_query->have_posts()) : $sticky_query->the_post();
          $post_id = get_the_ID();
      ?>
          <li class="archive-item">
            <div class="item-block">
              <div class="item-first">
                <div class="item-image-wrap">
                  <a class="item-image-link" href="<?php echo the_permalink(); ?>">
                    <?php
                    if (has_post_thumbnail()) {
                      the_post_thumbnail('medium', array('class' => 'item-image'));
                    } else {
                    ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/no-image.png" class="a item-image">
                    <?php
                    }
                    ?>
                  </a>
                </div>
              </div>
              <div class="item-last">
                <div class="item-info-wrap">
                  <time class="item-datetime" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/n/j'); ?></time>
                  <?php
                  $terms = get_the_category();
                  if ($terms) {
                    foreach ($terms as $term) {
                      if ($term->slug !== 'column') {
                        echo '<a class="item-category" href="' . get_category_link($term->term_id) . '">' . $term->name . '</a>';
                      }
                    }
                  }
                  ?>
                </div>
                <a class="item-link" href="<?php echo the_permalink(); ?>">
                  <h2 class="item__h"><?php the_title(); ?></h2>
                </a>
              </div>
            </div>
          </li>
        <?php
        endwhile;
      endif;

      if ($non_sticky_query->have_posts()) :
        ?>
        <?php
        while ($non_sticky_query->have_posts()) : $non_sticky_query->the_post();
          $post_id = get_the_ID();
        ?>
          <li class="archive-item">
            <div class="item-block">
              <div class="item-first">
                <div class="item-image-wrap">
                  <a class="item-image-link" href="<?php echo the_permalink(); ?>">
                    <?php
                    if (has_post_thumbnail()) {
                      the_post_thumbnail('medium', array('class' => 'item-image'));
                    } else {
                    ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/no-image.png" class="a item-image">
                    <?php
                    }
                    ?>
                  </a>
                </div>
              </div>
              <div class="item-last">
                <div class="item-info-wrap">
                  <time class="item-datetime" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/n/j'); ?></time>
                  <?php
                  $terms = get_the_category();
                  if ($terms) {
                    foreach ($terms as $term) {
                      if ($term->slug !== 'column') {
                        echo '<a class="item-category" href="' . get_category_link($term->term_id) . '">' . $term->name . '</a>';
                      }
                    }
                  }
                  ?>
                </div>
                <a class="item-link" href="<?php echo the_permalink(); ?>">
                  <h2 class="item__h"><?php the_title(); ?></h2>
                </a>
              </div>
            </div>
          </li>
        <?php
        endwhile;
        ?>
      <?php
      else:
        echo '<p>まだコラムがありません。</p>';
      endif;
      wp_reset_postdata();
      ?>
    </ul>
  </div>
  <div class="archive-link">
    <a href="<?php echo home_url(); ?>/blog/column" class="archive__link">詳しく見る</a>
  </div>
</div>