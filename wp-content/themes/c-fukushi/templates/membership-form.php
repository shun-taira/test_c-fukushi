<?php
/*
Template Name: membership form
*/
header('Cache-Control:no-cache');
get_header();
$freedial_number = get_theme_mod('freedial_number');
?>
<?php get_template_part('template-parts/component-header'); ?>
<?php get_template_part('template-parts/header/breadcrumb'); ?>

<section>
  <div class="membership-form">
    <div class="form-block">
      <div class="form-body">
        <div class="form-wrap">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
</section>

<section>
  <div class="membership-line">
    <div class="line-block">
      <?php get_template_part('template-parts/component-line'); ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>