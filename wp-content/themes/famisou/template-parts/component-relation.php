<div class="component-relation">
  <div class="relation-head">
    <h1 class="relation__h">
      板橋区・荒川区エリア <br class="display_sp">関連斎場を探す
    </h1>
  </div>
  <div class="relation-body">
    <?php
    $args = array(
      'post_type' => 'relation',
      // 'orderby' => 'rand',
    );

    $query = new WP_Query($args);
    if ($query->have_posts()) {
    ?>
      <ul class="relation-list">
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
      </ul>
    <?php } ?>
  </div>
</div>