<?php

/*
Template Name: faq
*/

get_header();
?>

<main id="primary" class="site-main">

  <?php
  while (have_posts()) :
    the_post();

    get_template_part('template-parts/content', 'add-hero');

  endwhile; // End of the loop.
  ?>

  <section>
    <div class="faq">
      <div class="wrap-faq container-fluid py-14 py-md-30">
        <div class="card mb-10 mb-md-20 border-primary">
          <div class="py-4 py-8 card-header bg-primary text-white">
            <h2 class="h5 m-0 faq-menu__h">
              <i class="bi bi-flower2"></i>
              質問カテゴリー
            </h2>
          </div>
          <div class="card-body">
            <ul class="row m-0 list-unstyled faq-menu-list">
              <?php
              if (have_rows('faq_cate')) :
                $i = 0;
                while (have_rows('faq_cate')) : the_row();
              ?>
                  <li class="faq-menu-item col-24 col-md-12 col-lg-6"><a href="#list-<?php echo $i; ?>"><?php the_sub_field('faq_title'); ?></a></li>
              <?php
                  $i++;
                endwhile;
              else :
              endif;
              ?>
            </ul>
          </div>
        </div>
        <div class="faq-content-jizen mb-10 mb-md-20" id="list-0">
          <?php
          if (have_rows('faq_cate')) :
            $s = 0;
            while (have_rows('faq_cate')) : the_row();
          ?>
              <div class="faq-content-jizen mb-10 mb-md-20" id="list-<?php echo $s; ?>">
                <div class="alert alert-primary" role="alert">
                  <h3 class="h6 faq-content__h m-0"><?php the_sub_field('faq_title'); ?></h3>
                </div>
                <div class="accordion faq_content-accordion" id="accordion">
                  <?php
                  if (have_rows('faq_qa')) :
                    while (have_rows('faq_qa')) : the_row();
                  ?>
                      <div class="card">
                        <div class="card-header">
                          <h5 class="h6 mb-0">
                            <i class="bi bi-chevron-right"></i>
                            <?php the_sub_field('faq_q'); ?>
                          </h5>
                        </div>
                        <div class="collapse" aria-labelledby="headingTwo" data-parent="#accodion-seikyo">
                          <div class="card-body">
                            <?php the_sub_field('faq_a'); ?>
                          </div>
                        </div>
                      </div>
                  <?php
                    endwhile;
                  else :
                  endif;
                  ?>
                </div>
              </div>
          <?php
              $s++;
            endwhile;
          else :
          endif;
          ?>
        </div>
      </div>
  </section>

  <?php get_template_part('template-parts/content', 'add-footer'); ?>

</main><!-- #main -->

<?php
get_footer();
