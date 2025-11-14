<?php
get_header();
?>

<?php get_template_part('template-parts/header/breadcrumb'); ?>

<section>
  <div class="single-relation-display">
    <div class="display-block">
      <div class="display-head">
        <div class="display-start">
          <?php
          $terms = get_the_terms($post->ID, 'kaikan-type');
          if ($terms) {
            foreach ($terms as $term) {
              echo '<span class="display-cap" style="background-color: ' . get_field('tag_kaikan_color', $term) . '">' . $term->name . '</span>';
            }
          }
          ?>
          <h1 class="display__h">
            <span class="sizes_lg"><?php the_title(); ?></span>
          </h1>
          <p class="display__p">
            <?php the_field('hall_access') ?>
          </p>
        </div>
        <div class="display-end display_pc">
          <div class="display-line-wrap">
            <a href="<?php echo home_url(); ?>/contact" class="display__link">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-ban-line.svg" alt="LINEで相談" class="display-line__img">
            </a>
          </div>
        </div>
      </div>
      <div class="display-body">
        <div id="hall-swiper" class="swiper">
          <?php
          // リピートフィールドhall_imagesのループ
          if (have_rows('hall_images')): ?>
            <ul class="display-list swiper-wrapper">
              <?php while (have_rows('hall_images')): the_row();
              ?>
                <li class="display-item swiper-slide">
                  <?php
                  echo wp_get_attachment_image(get_sub_field('hall_image'), 'hall-slider', false, array('class' => 'display-slide__img'));
                  ?>
                </li>
              <?php endwhile; ?>
            </ul>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          <?php endif; ?>
        </div>
      </div>
      <div class="display-icon">
        <?php
        // acfフィールドkaikan_iconはカスタムタクソノミーkaikan-iconのタームIDを配列で取得
        $icon_terms = get_field('kaikan_icon');
        if ($icon_terms) {
        ?>
          <ul class="display-icon-list">
            <?php
            foreach ($icon_terms as $icon_term) {
            ?>
              <li class="display-icon-item">
                <?php
                $icon_image_id = get_field('tag_kaikan_img', 'kaikan-icon_' . $icon_term);
                echo wp_get_attachment_image($icon_image_id, 'full', false, array('class' => 'display-icon__img'));
                ?>
                <span class="display-icon-title"><?php echo get_term($icon_term)->name; ?></span>
              </li>
            <?php
            }
            ?>
          </ul>
        <?php
        }
        ?>

      </div>
    </div>
  </div>
</section>

<section>
  <div class="single-relation-ban-tel">
    <div class="tel-block">
      <?php get_template_part('template-parts/component-banner-tel'); ?>
    </div>
  </div>
</section>

<section>
  <div class="single-relation-overview">
    <div class="overview-block">
      <div class="overview-body">
        <?php
        // リピートフィールドhall_overviewsのループ
        if (have_rows('hall_overviews')): ?>
          <table class="overview-table">
            <?php while (have_rows('hall_overviews')): the_row();
            ?>
              <tr class="overview-tr">
                <th class="overview-th">
                  <?php the_sub_field('hall_overview_th'); ?>
                </th>
                <td class="overview-td">
                  <?php the_sub_field('hall_overview_td'); ?>
                </td>
              </tr>
            <?php endwhile; ?>
          </table>
        <?php endif; ?>
      </div>
      <div class="overview-head">
        <h2 class="overview__h">
          アクセス
        </h2>
      </div>
      <div class="overview-map">
        <iframe src="<?php the_field('kaikan_map') ?>" class="ovewrview-ifame" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="single-relation-plan">
    <div class="plan-block">
      <?php get_template_part('template-parts/component-plan'); ?>
    </div>
  </div>
</section>

<section>
  <div class="single-relation-hall">
    <div class="hall-block">
      <?php get_template_part('template-parts/component-hall'); ?>
    </div>
  </div>
</section>

<section>
  <div class="single-relation-relation">
    <div class="relation-block">
      <?php get_template_part('template-parts/component-relation'); ?>
    </div>
  </div>
</section>

<section>
  <div class="single-relation-line">
    <div class="line-block">
      <?php get_template_part('template-parts/component-line'); ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>