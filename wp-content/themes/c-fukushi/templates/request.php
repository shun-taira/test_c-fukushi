<?php
/*
Template Name: request
*/

get_header();
$freedial_number = get_theme_mod('freedial_number');
?>
<?php get_template_part('template-parts/component-header'); ?>
<?php get_template_part('template-parts/header/breadcrumb'); ?>

<section>
  <div class="request">
    <div class="request-block">

      <?php get_template_part('template-parts/component-request'); ?>

      <div class="request-banner">
        <a href="<?php echo home_url(); ?>/ensemble" class="ban-link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-ban-ensemble.png" alt="アンサンブル倶楽部 お葬式・家族葬が最大10万円割引" class=" request-ban__img display_pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-ban-ensemble-sp.png" alt="アンサンブル倶楽部 お葬式・家族葬が最大10万円割引" class="request-ban__img display_sp">
        </a>
      </div>
      <div class="request-tel">
        <h3 class="request-tel__h">お電話の方はこちら</h3>
        <div class="request-tel-block">
          <div class="request-tel-start">
            <span class="request-tel__h-sub">
              相談無料<br class="display_pc">通話無料
            </span>
          </div>
          <div class="request-tel-end">
            <a href="tel:<?php echo $freedial_number; ?>" class="request-tel-freedial__link">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-freedial.svg" class="request-tel-freedial__img">
              <?php echo $freedial_number; ?>
            </a>
          </div>
        </div>
      </div>
      <section>
        <div class="request-page">
          <div class="request-page-block">
            <h4 class="wwpcf7__h">
              フォームからの資料請求・お問い合わせ
            </h4>
            <?php the_content(); ?>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/component-quick'); ?>
<?php get_template_part('template-parts/component-plan'); ?>

<?php
get_footer();
?>