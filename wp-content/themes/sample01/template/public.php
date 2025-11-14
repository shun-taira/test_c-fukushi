<?php

/*
Template Name: public
*/

get_header();
?>

<main id="primary" class="site-main">

  <?php
  while (have_posts()) :
    the_post();

    get_template_part('template-parts/content', 'add-hero');

  ?>
    <section>
      <div class="public">

        <div class="wrap-public container-fluid pt-14 pt-md-30 py-14 py-md-30">
          <h1 class="h5 public__h mb-20 mb-md-30 py-4 px-8 rounded">
            <i class="bi bi-flower3"></i>
            関連斎場を探す
          </h1>
          <div class="public-card">
            <?php
            // カスタムタクソノミー category-hall-address のタームを取得
            $terms = get_terms('category-hall-address', array('hide_empty' => false));
            if (!empty($terms)) {
              foreach ($terms as $term) {
                if ($term->parent == 0) {
                  // この $term->name に含まれるカスタム投稿 public の件数と投稿を取得
                  $args = array(
                    'post_type' => 'relation',
                    'posts_per_page' => -1,
                    'tax_query' => array(
                      array(
                        'taxonomy' => 'category-hall-address',
                        'field' => 'slug',
                        'terms' => $term->slug,
                        'include_children' => false,
                      ),
                    ),
                  );
                  $query = new WP_Query($args);
                  $count = $query->found_posts;

                  echo '<div class="card mb-20">';
                  echo '<div class="card-header"><i class="bi bi-grid-3x3-gap-fill mr-2"></i>' . $term->name . '</div>';
                  echo '<ul class="list-group list-group-flush">';

                  if ($query->have_posts()) {
                    while ($query->have_posts()) {
                      $query->the_post();
                      $address = get_field('kaikan_address');
                      echo '<li class="list-group-item">';
                      echo '<a href="' . esc_url(get_permalink()) . '" class="list-search-link">';
                      echo get_the_title();
                      echo '</a>';
                      echo '<span class="ml-10">' . $address . '</span>';
                      echo '</li>';
                    }
                  }
                  wp_reset_postdata();
                  echo '</ul>';
                  echo '</div>';
                }
              }
            }
            ?>
          </div>
        </div>
      </div>
    </section>

  <?php

  endwhile; // End of the loop.
  ?>

  <?php get_template_part('template-parts/content', 'add-footer'); ?>

</main><!-- #main -->

<?php
get_footer();
