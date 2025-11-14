<?php
/*
Template Name: hall-item
*/

get_header();
?>

<?php get_template_part('template-parts/header/breadcrumb'); ?>

<section>
  <div class="hall-item-display">
    <div class="display-block">
      <div class="display-head">
        <div class="display-start">
          <div class="display-cap">
            <?php the_field('hall_caption') ?>
          </div>
          <h1 class="display__h">
            自由なお葬式
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
    </div>
  </div>
</section>

<section>
  <div class="hall-item-overview">
    <div class="overview-block">
      <div class="overview-head">
        <h2 class="overview__h">
          概要
        </h2>
      </div>
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
      <div class="overview-map">
        <iframe src="<?php the_field('hall_map') ?>" class="ovewrview-ifame" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="hall-item-equipment">
    <div class="equipment-block">
      <div class="equipment-head">
        <h2 class="equipment__h">
          設備
        </h2>
      </div>
      <div class="equipment-body">
        <?php
        // リピートフィールドhall_photosをループさせてswiperを表示
        if (have_rows('hall_photos')): ?>
          <div id="equipment-swiper" class="swiper">
            <ul class="equipment-list swiper-wrapper">
              <?php while (have_rows('hall_photos')): the_row();
              ?>
                <li class="equipment-item swiper-slide">
                  <?php
                  echo wp_get_attachment_image(get_sub_field('hall_photo'), 'hall-carousel', false, array('class' => 'equipment-slide__img'));
                  ?>
                  <div class="equipment-slider-title"><?php echo get_sub_field('hall_photo_title') ?></div>
                </li>
              <?php endwhile; ?>
            </ul>
            <div class="swiper-control">
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-next"></div>

            </div>
          </div>
        <?php endif; ?>
      </div>
      <div class="equipment-equipment">
        <h3 class="equipment-equipment__h">
          式場の設備
        </h3>
        <div class="equipment-equipment-table-wrap">
          <?php
          // リピートフィールドhall_overviewsのループ
          if (have_rows('hall_equipments')): ?>
            <table class="overview-table">
              <tr class="overview-tr">
                <?php while (have_rows('hall_equipments')): the_row();
                ?>
                  <th class="overview-th">
                    <?php the_sub_field('hall_equipment_th'); ?>
                  </th>
                  <td class="overview-td">
                    <?php the_sub_field('hall_equipment_td'); ?>
                  </td>
                  <?php

                  if (get_row_index() % 3 == 0) {
                  ?>
              </tr>
              <tr class="overview-tr">
              <?php
                  }
              ?>
            <?php endwhile; ?>
              </tr>
            </table>
          <?php endif; ?>
        </div>
      </div>
      <div class="equipment-equipment">
        <h3 class="equipment-equipment__h">
          周辺環境
        </h3>
        <div class="equipment-equipment-table-wrap">
          <?php
          // リピートフィールドhall_overviewsのループ
          if (have_rows('hall_environments')): ?>
            <table class="overview-table">
              <tr class="overview-tr">
                <?php while (have_rows('hall_environments')): the_row();
                ?>
                  <th class="overview-th">
                    <?php the_sub_field('hall_environment_th'); ?>
                  </th>
                  <td class="overview-td">
                    <?php the_sub_field('hall_environment_td'); ?>
                  </td>
                  <?php

                  if (get_row_index() % 3 == 0) {
                  ?>
              </tr>
              <tr class="overview-tr">
              <?php
                  }
              ?>
            <?php endwhile; ?>
              </tr>
            </table>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="hall-item-ban-tel">
    <div class="tel-block">
      <?php get_template_part('template-parts/component-banner-tel'); ?>
    </div>
  </div>
</section>

<section>
  <div class="hall-item-description">
    <div class="description-block">
      <div class="description-head">
        <h2 class="description__h">
          自由なお葬式　<?php the_title(); ?>　の特徴
        </h2>
      </div>
      <div class="description-body">
        <div class="description-img-wrap">
          <?php
          echo wp_get_attachment_image(get_post_thumbnail_id(), 'full', false, array('class' => 'description__img'));
          ?>
        </div>
        <div class="description-text-wrap">
          <h3 class="description__h">
            <?php the_field('hall_title') ?>
          </h3>
          <p class="description__p">
            <?php the_field('hall_description') ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="hall-item-hall">
    <div class="hall-block">
      <?php get_template_part('template-parts/component-hall'); ?>
    </div>
  </div>
</section>

<section>
  <div class="hall-item-relation">
    <div class="relation-block">
      <?php get_template_part('template-parts/component-relation'); ?>
    </div>
  </div>
</section>

<section>
  <div class="hall-item-plan">
    <div class="plan-block">
      <?php get_template_part('template-parts/component-plan'); ?>
    </div>
  </div>
</section>

<section>
  <div class="hall-item-meo">
    <div class="meo-block">
      <?php get_template_part('template-parts/component-meo'); ?>
    </div>
  </div>
</section>

<section>
  <div class="hall-item-faq">
    <div class="faq-block">
      <?php get_template_part('template-parts/component-faq'); ?>
    </div>
  </div>
</section>

<section>
  <div class="hall-item-line">
    <div class="line-block">
      <?php get_template_part('template-parts/component-line'); ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>