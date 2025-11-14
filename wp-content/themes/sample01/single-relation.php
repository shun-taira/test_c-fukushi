<?php

get_header();
?>

<main id="primary" class="site-main">

  <?php
  while (have_posts()) :
    the_post();
  ?>
    <div class="breadcrumb">
      <div class="breadcrumb-block container-fluid">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if (function_exists('bcn_display')) {
            bcn_display();
          } ?>
        </div>
      </div>
    </div>
    <section>
      <div class="relation">
        <div class="wrap-relation container-fluid pt-14 pt-md-30 py-14 py-md-30">
          <h1 class="h3 relation__title text-center mb-16 mb-md-30">
            <?php the_title() ?>
          </h1>
          <h2 class="h5 relation__h mb-20 mb-md-30 py-4 px-8 rounded">
            <i class="bi bi-flower3"></i>
            施設情報
          </h2>
          <div class="row justify-content-center">
            <div class="col-24 col-md-18">
              <div id="carouselExampleIndicators" class="carousel slide carousel-fade mb-20" data-ride="carousel">
                <ol class="carousel-indicators">
                  <?php
                  if (have_rows('kaikan_galley')) :
                    $i = 0;
                    while (have_rows('kaikan_galley')) : the_row();
                  ?>
                      <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) echo 'active'; ?>"></li>
                  <?php
                      $i++;
                    endwhile;
                  endif;
                  ?>
                </ol>
                <div class="carousel-inner">
                  <?php
                  if (have_rows('kaikan_galley')) :
                    $i = 0;
                    while (have_rows('kaikan_galley')) : the_row();
                      // サブフィールドplan_slider_imgは画像idを返す
                      $image = get_sub_field('kaikan_image');
                      $size = 'large';
                      if ($image) :
                        $image_url = wp_get_attachment_image_url($image, $size);
                      endif;
                  ?>
                      <div class="carousel-item <?php if ($i == 0) echo 'active'; ?>">
                        <img src="<?php echo $image_url; ?>" class="d-block w-100">
                      </div>
                  <?php
                      $i++;
                    endwhile;
                  endif;
                  ?>
                  <!-- <div class="carousel-item active">
                    <img src="..." class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                  </div> -->
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              <div class="icon">
                <?php
                // kaikan_iconフィールドタイプはkaikan-iconタームIDを返す。
                $terms = get_field('kaikan_icon');
                if ($terms) :
                ?>
                  <ul class="list-unstyled d-flex justify-content-center">
                    <?php
                    foreach ($terms as $term) :
                      // タームIDからタームオブジェクトを取得
                      $term = get_term($term, 'kaikan-icon');
                      // ターム名を取得
                      $term_name = $term->name;
                      // get_field('tag_kaikan_img', $term)は画像IDを返す
                      // 画像idから画像URLを取得
                      $img_id = get_field('tag_kaikan_img', $term);
                      $img_url = wp_get_attachment_image_url($img_id, 'thumbnail');

                      echo '<li class="px-2 text-center"><img src="' . $img_url . '" class="img-fluid"><br><small>' . $term_name . '</small></li>';
                    endforeach;
                    ?>
                  </ul>
                <?php
                endif;
                ?>
              </div>
            </div>
            <div class="col-24 col-md-24">
              <table class="table">
                <tr class="table-tr">
                  <th>施設名称</th>
                  <td><?php the_title(); ?></td>
                </tr>
                <tr class="table-tr">
                  <th>アクセス</th>
                  <td><?php the_field('kaikan_access'); ?></td>
                </tr>
                <tr class="table-tr">
                  <th>住所</th>
                  <td><?php the_field('kaikan_address'); ?></td>
                </tr>
                <tr class="table-tr">
                  <th>最低利用者数</th>
                  <td><?php the_field('kaikan_count_min'); ?></td>
                </tr>
                </tr>
                <tr class="table-tr">
                  <th>最大収容人数</th>
                  <td><?php the_field('kaikan_count_max'); ?></td>
                </tr>
                <tr class="table-tr">
                  <th>公共交通機関アクセス</th>
                  <td><?php the_field('kaikan_access'); ?></td>
                </tr>
                <tr class="table-tr">
                  <th>駐車場数</th>
                  <td><?php the_field('kaikan_park'); ?></td>
                </tr>
                <tr class="table-tr">
                  <th>葬儀場・式場使用料金</th>
                  <td><?php the_field('kaikan_price'); ?></td>
                </tr>
                <tr class="table-tr">
                  <th>特徴</th>
                  <td>
                    <?php
                    if (have_rows('features')) :
                      while (have_rows('features')) : the_row();
                        echo get_sub_field('kaikan_features_text') . '<br>';
                      endwhile;
                    endif;
                    ?>
                  </td>
                </tr>
              </table>
            </div>
          </div>
          <h2 class="h5 relation__h mt-20 mt-md-30 mb-20 mb-md-30 py-4 px-8 rounded">
            <i class="bi bi-flower3"></i>
            アクセス
          </h2>
          <div class="relation-access-wrap">
            <div class="relation-access-map">
              <iframe src="<?php the_field('kaikan_map'); ?>" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <dl class="relation-access-text d-flex mt-10">
              <dt class="relation-access-term mr-10">最寄駅</dt>
              <dd class="public-description"><?php the_field('kaikan_moyori'); ?></dd>
            </dl>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="public">
        <div class="wrap-public container-fluid pt-14 pt-md-30 py-14 py-md-30">
          <h2 class="h5 public__h mb-20 mb-md-30 py-4 px-8 rounded">
            <i class="bi bi-flower3"></i>
            関連斎場を探す
          </h2>
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
                      $address = get_field('public_hall_address');
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
