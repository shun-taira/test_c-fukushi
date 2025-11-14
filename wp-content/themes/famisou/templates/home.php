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
                  <?php } ?>
                  <div class="hero-item-back" style="background-image: url('<?php echo $image_pc_url[0]; ?>')"></div>
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

<section>
  <div class="ban">
    <div class="ban-block">
      <div class="ban-wrap">
        <a href="<?php echo home_url(); ?>/urgency" class="ban__link link_quick">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ban-home-quick.svg" class="ban__img display_pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ban-home-quick_sp.svg" class="ban__img display_sp">
        </a>
      </div>
      <div class="ban-wrap">
        <a href="<?php echo home_url(); ?>/line" class="ban__link link_line">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ban-home-line.svg" class="ban__img display_pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ban-home-line_sp.svg" class="ban__img display_sp">
        </a>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="display">
    <div class="display-block">
      <div class="display-head">
        <span class="display-caption">
          1日1組貸切
        </span>
        <h1 class="display__h">
          家族葬専用ホール
        </h1>
      </div>
      <div class="display-body">
        <p class="display__p">
          東京都 板橋区・荒川区に2式場を展開している1日1件貸切の家族葬専門式場は<br class="display_pc">
          バリアフリー設計で、ご高齢のご親族様も安心な施設設備が特徴。<br>
          ペット同伴でのご葬儀も可能です。<br>
          家族葬・一日葬・直葬(火葬式)はもちろん、従来の慣習にとらわれない<br class="display_pc">
          自由設計のご葬儀も承ります。 <br>
          24時365日ご利用可能な安置室も完備しておりますので、急な場合でもご安心ください。
        </p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="hall">
    <div class="hall-block">
      <?php get_template_part('template-parts/component-hall'); ?>
    </div>
  </div>
</section>

<section>
  <div class="relation">
    <div class="relation-block">
      <?php get_template_part('template-parts/component-relation'); ?>
    </div>
  </div>
</section>

<section>
  <div class="plan">
    <div class="plan-block">
      <?php get_template_part('template-parts/component-plan'); ?>
    </div>
  </div>
</section>

<section>
  <div class="reasons">
    <div class="reasons-block">
      <?php get_template_part('template-parts/component-reasons'); ?>
    </div>
  </div>
</section>

<section>
  <div class="meo">
    <div class="meo-block">
      <?php get_template_part('template-parts/component-meo'); ?>
    </div>
  </div>
</section>

<section>
  <div class="faq">
    <div class="faq-block">
      <?php get_template_part('template-parts/component-faq'); ?>
    </div>
  </div>
</section>

<section>
  <div class="archive">
    <div class="archive-block">
      <?php get_template_part('template-parts/component-archive'); ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>