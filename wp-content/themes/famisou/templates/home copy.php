<?php
/*
Template Name: home
*/

get_header();
$freedial_number = get_theme_mod('freedial_number');
?>
<section>
  <div class="hero">
    <div class="hero-block_pc">
      <?php if (have_rows('top-slider-list')) { ?>
        <div id="top-hero-swpier" class="hero-slider swiper-container">
          <ul class="hero-list swiper-wrapper">
            <?php
            while (have_rows('top-slider-list')) {
              the_row();
              $image_pc_id = get_sub_field('top-slider-img_pc');
              // $image_pc_idから画像URLの取得
              $image_pc_url = wp_get_attachment_image_src($image_pc_id, 'medium');
            ?>
              <li class="hero-item swiper-slide">
                <?php if (get_sub_field('top-slider-url')) { ?>
                  <a href="<?php the_sub_field('top-slider-url'); ?>" class="hero-item-link">
                    <div class="hero-item-back" style="background-image: url('<?php echo $image_pc_url[0]; ?>')"></div>
                  <?php } ?>
                  <?php
                  echo wp_get_attachment_image($image_pc_id, 'full', false, array('class' => 'hero-slider__img hero-slider__img_pc'));
                  $image_sp_id = get_sub_field('top-slider-img_sp');
                  echo wp_get_attachment_image($image_sp_id, 'medium', false, array('class' => 'hero-slider__img hero-slider__img_sp'));
                  ?>
                  <?php if (get_sub_field('top-slider-url')) { ?>
                  </a>
                <?php } ?>
              </li>
            <?php } ?>
          </ul>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        <?php } ?>
        </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/component-hall'); ?>
<?php get_template_part('template-parts/component-plan'); ?>
<?php get_template_part('template-parts/component-quick'); ?>

<section>
  <div class="reason">
    <div class="reason-block">
      <h1 class="reason__h">選ばれる<span class="reason__h_red">理由</span></h1>
      <ul class="reason-list">
        <li class="reason-item">
          <div class="reason-item-block">
            <span class="reason-item-count">01</span>
            <a href="<?php echo home_url(); ?>/reason/#1" class="reason-link">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-reason-1.jpg" class="reason-item__img">
            </a>
            <h2 class="reason-item__h">様々な要望に応える<br><span class="reason-item__h_red">葬儀会館</span></h2>
          </div>
        </li>
        <li class="reason-item">
          <div class="reason-item-block">
            <span class="reason-item-count">02</span>
            <a href="<?php echo home_url(); ?>/reason/#2" class="reason-link">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-reason-2.jpg" class="reason-item__img">
            </a>
            <h2 class="reason-item__h"><span class="reason-item__h_red">スタッフ全員が資格</span>を有する<br>プロフェッショナル</h2>
          </div>
        </li>
        <li class="reason-item">
          <div class="reason-item-block">
            <span class="reason-item-count">03</span>
            <a href="<?php echo home_url(); ?>/reason/#3" class="reason-link">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-reason-3.jpg" class="reason-item__img">
            </a>
            <h2 class="reason-item__h"><span class="reason-item__h_red">24時間365</span>日受け入れ可能な<br><span class="reason-item__h_red">安置室完備</span></h2>
          </div>
        </li>
        <li class="reason-item">
          <div class="reason-item-block">
            <span class="reason-item-count">04</span>
            <a href="<?php echo home_url(); ?>/reason/#4" class="reason-link">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-reason-4.jpg" class="reason-item__img">
            </a>
            <h2 class="reason-item__h">全館<span class="reason-item__h_red">バリアフリー</span>設計により<br>お身体の不自由な方にも安心</h2>
          </div>
        </li>
        <li class="reason-item">
          <div class="reason-item-block">
            <span class="reason-item-count">05</span>
            <a href="<?php echo home_url(); ?>/reason/#5" class="reason-link">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-reason-5.jpg" class="reason-item__img">
            </a>
            <h2 class="reason-item__h">提携先でも使える<br><span class="reason-item__h_red">お得な会員制度</span></h2>
          </div>
        </li>
        <li class="reason-item">
          <div class="reason-item-block">
            <span class="reason-item-count">06</span>
            <a href="<?php echo home_url(); ?>/reason/#1" class="reason-link">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-reason-6.jpg" class="reason-item__img">
            </a>
            <h2 class="reason-item__h"><span class="reason-item__h_red">JECIA</span>から最上級評価<br><span class="reason-item__h_red">「5つ星」</span>の認定</h2>
          </div>
        </li>
      </ul>
      <div class="reason-btn">
        <a href="<?php echo home_url(); ?>/reason" class="reason-link">詳しくみる</a>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/component-staff'); ?>
<?php get_template_part('template-parts/component-before'); ?>
<?php get_template_part('template-parts/component-voice'); ?>
<?php get_template_part('template-parts/component-list'); ?>

<section>
  <div class="archive">
    <div class="archive-block">
      <div class="archive-type-block">
        <div class="archive-type-parts">
          <div class="archive-head">
            <h1 class="archive__h">
              お知らせ
            </h1>
            <a href="<?php echo home_url(); ?>/blog" class="archive-head-link">お知らせ一覧を見る</a>
          </div>
          <div class="archive-body">
            <?php
            $args = array(
              'post_type' => 'blog',
              'posts_per_page' => 4,
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
            ?>
              <ul class="archive-list">
                <?php
                while ($query->have_posts()) {
                  $query->the_post();
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
                              echo '<span class="item-image color_gray">NO IMAGE</span>';
                            }
                            ?>
                          </a>
                        </div>
                        <div class="item-info-wrap">
                          <time class="item-datetime" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年n月j日'); ?></time>
                          <?php
                          $terms = get_the_terms($post->ID, 'category-blog');
                          if ($terms) {
                            foreach ($terms as $term) {
                              echo '<span class="item-category">' . $term->name . '</span>';
                            }
                          }
                          ?>
                        </div>
                      </div>
                      <div class="item-last">
                        <a class="item-link" href="<?php echo the_permalink(); ?>">
                          <h2 class="item__h"><?php the_title(); ?></h2>
                        </a>
                      </div>
                    </div>
                  </li>
                <?php
                }
                wp_reset_postdata();
                ?>
              </ul>
            <?php
            } else {
              echo '<p class="paragraph_01">まだお知らせがありません。</p>';
            }
            ?>
          </div>
        </div>
        <?php /*
        <div class="archive-type-parts">
          <div class="archive-head">
            <h1 class="archive__h">
              葬儀コラム
            </h1>
            <a href="<?php echo home_url(); ?>/column" class="archive-head-link">コラム一覧を見る</a>
          </div>
          <div class="archive-body">
            <?php
            $args = array(
              'post_type' => 'column',
              'posts_per_page' => 4,
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) {
            ?>
              <ul class="archive-list">
                <?php
                while ($query->have_posts()) {
                  $query->the_post();
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
                              echo '<span class="item-image color_gray">NO IMAGE</span>';
                            }
                            ?>
                          </a>
                        </div>
                        <div class="item-info-wrap">
                          <time class="item-datetime" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年n月j日'); ?></time>
                          <?php
                          $terms = get_the_terms($post->ID, 'category-blog');
                          if ($terms) {
                            foreach ($terms as $term) {
                              echo '<span class="item-category">' . $term->name . '</span>';
                            }
                          }
                          ?>
                        </div>
                      </div>
                      <div class="item-last">
                        <a class="item-link" href="<?php echo the_permalink(); ?>">
                          <h2 class="item__h"><?php the_title(); ?></h2>
                        </a>
                      </div>
                    </div>
                  </li>
                <?php
                }
                wp_reset_postdata();
                ?>
              </ul>
            <?php
            } else {
              echo '<p class="paragraph_01">まだコラムがありません。</p>';
            }
            ?>
          </div>
        </div>
        */ ?>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/component-banner'); ?>

<?php
get_footer();
?>