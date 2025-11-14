<?php
/*
Template Name: plan
*/

get_header();
?>

<?php get_template_part('template-parts/component-header'); ?>
<?php get_template_part('template-parts/header/breadcrumb'); ?>

<div class="plan">
  <div class="plan-block">
    <?php get_template_part('template-parts/component-plan'); ?>
  </div>
</div>

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
  <div class="ban">
    <div class="ban-block">
      <?php get_template_part('template-parts/component-banner-tel'); ?>
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
  <div class="meo">
    <div class="meo-block">
      <?php get_template_part('template-parts/component-meo'); ?>
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

<section>
  <div class="line">
    <div class="line-block">
      <?php get_template_part('template-parts/component-line'); ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>