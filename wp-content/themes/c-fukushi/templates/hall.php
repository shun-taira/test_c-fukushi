<?php
/*
Template Name: hall
*/

get_header();
?>

<?php get_template_part('template-parts/component-header'); ?>
<?php get_template_part('template-parts/header/breadcrumb'); ?>

<section>
  <div class="hall-hall">
    <div class="hall-block">
      <?php get_template_part('template-parts/component-hall'); ?>
    </div>
  </div>
</section>

<section>
  <div class="hall-relation">
    <div class="relation-block">
      <?php get_template_part('template-parts/component-relation-page'); ?>
    </div>
  </div>
</section>

<section>
  <div class="hall-plan">
    <div class="plan-block">
      <?php get_template_part('template-parts/component-plan'); ?>
    </div>
  </div>
</section>

<section>
  <div class="hall-ban-tel">
    <div class="tel-block">
      <?php get_template_part('template-parts/component-banner-tel'); ?>
    </div>
  </div>
</section>

<section>
  <div class="hall-meo">
    <div class="meo-block">
      <?php get_template_part('template-parts/component-meo'); ?>
    </div>
  </div>
</section>

<section>
  <div class="hall-line">
    <div class="line-block">
      <?php get_template_part('template-parts/component-line'); ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>