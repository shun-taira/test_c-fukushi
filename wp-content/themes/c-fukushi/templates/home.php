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
              $image_pc_url = wp_get_attachment_image_src($image_pc_id, 'full');
            ?>
              <li class="hero-item swiper-slide">
                <?php if (get_sub_field('top-slider-url')) { ?>
                  <a href="<?php the_sub_field('top-slider-url'); ?>" class="hero-item-link">
                  <?php } ?>
                  <div class="hero-item-back" style="background-image: url('<?php echo $image_pc_url[0]; ?>')"></div>
                  <?php
                  echo wp_get_attachment_image($image_pc_id, 'full', false, array('class' => 'hero-slider__img hero-slider__img_pc'));
                  $image_sp_id = get_sub_field('top-slider-img_sp');
                  echo wp_get_attachment_image($image_sp_id, 'full', false, array('class' => 'hero-slider__img hero-slider__img_sp'));
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
        <a href="<?php echo home_url(); ?>/contact" class="ban__link link_line">
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
          近くて安心の地元葬儀社
        </span>
        <h1 class="display__h">
          川口市・蕨市の葬儀・家族葬は<br class="display_sp">中央福祉葬祭へ
        </h1>
      </div>
      <div class="display-body">
        <span class="display_block">
          川口市民葬祭事業登録業者
        </span>
        <span class="display_block">
          JAさいたま葬祭指定式場
        </span>
        <p class="display__p">
          川口市・蕨市の地元葬儀社《中央福祉葬祭》は、<br class="display_pc">ご遺族様を中心とした少人数での家族葬はもちろん、<br class="display_pc">火葬のみで見送る直葬（火葬式）から、伝統的で格式高い一般葬まで幅広く対応いたします。<br>
          地元に密接した弊社では、地域の風習や葬送習慣なども熟知しております。<br>
          24時間365日ご利用可能な安置室もご用意しておりますので、<br class="display_pc">深夜・早朝でもご安心してご相談ください。
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