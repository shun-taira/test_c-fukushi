<?php
/*
Template Name: faq
*/

get_header();
$freedial_number = get_theme_mod('freedial_number');
?>
<?php get_template_part('template-parts/component-header'); ?>
<?php get_template_part('template-parts/header/breadcrumb'); ?>

<section>
  <div class="faq-faq">
    <div class="faq-block">
      <?php get_template_part('template-parts/component-faq-page'); ?>
    </div>
  </div>
</section>

<section>
  <div class="faq-line">
    <div class="line-block">
      <?php get_template_part('template-parts/component-line'); ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>