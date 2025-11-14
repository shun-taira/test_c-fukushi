<?php
/*
Template Name: formentry
*/
header('Cache-Control:no-cache');
get_header();
$freedial_number = get_theme_mod('freedial_number');
?>
<?php get_template_part('template-parts/component-header'); ?>
<?php get_template_part('template-parts/header/breadcrumb'); ?>

<section>
  <div class="formentry-form">
    <div class="form-block">
      <div class="form-head">
        <p class="form__p">
          ご葬儀に関すること、なんでもお気軽にお問い合わせください。<br>
          お急ぎの方はお電話でも随時受け付けております。<a href="tel:<?php echo $freedial_number; ?>"><?php echo $freedial_number; ?></a>(24時間365日受付)
        </p>
      </div>
      <div class="form-body">
        <div class="form-wrap">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="page-line">
    <div class="line-block">
      <?php get_template_part('template-parts/component-line'); ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>