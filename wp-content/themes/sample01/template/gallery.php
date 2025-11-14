<?php

/*
Template Name: gallery
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
    <div class="gallery">
      <div class="wrap-gallery container-fluid py-14 py-md-30">
        <div class="gallery-content mb-10 mb-md-20">
          <?php
          if (have_rows('gallery_cate')) :
            $s = 0;
            while (have_rows('gallery_cate')) : the_row();
          ?>
              <div class="gallery-content mb-10 mb-md-20" id="list-<?php echo $s; ?>">
                <div class="alert alert-primary" role="alert">
                  <h3 class="h6 gallery-content__h m-0"><?php the_sub_field('gallery_title'); ?></h3>
                </div>
                <ul class="row gallery_content-list list-unstyled">
                  <?php
                  if (have_rows('gallery_item')) :
                    $i = 0;
                    $slick_array = array();
                    while (have_rows('gallery_item')) : the_row();
                  ?>
                      <li class="col-24 col-md-12 col-lg-8 card rounded-0 border-0">
                        <div class="card-header border-0">
                          <div class="block-gallery__img" data-num="<?php echo $i; ?>" data-open="modal" data-target="#galleryModal-<?php echo $s; ?>">
                            <?php
                            $image = get_sub_field('gallery_image');
                            $size = 'full'; // (thumbnail, medium, large, full or custom size)
                            echo wp_get_attachment_image($image, $size, false, array("class" => "img-fluid gallery__img"));
                            $image_url = wp_get_attachment_image_src($image, "full")[0];
                            array_push($slick_array, array("image_url" => $image_url, "title" => get_sub_field('gallery_name'), "text" => get_sub_field('gallery_text'), "content" => get_sub_field('gallery_content')));
                            ?>
                          </div>
                        </div>
                        <div class="card-body">
                          <h5 class="h6 mb-0">
                            <?php the_sub_field('gallery_name'); ?>
                          </h5>
                          <p>
                            <?php the_sub_field('gallery_text'); ?>
                          </p>
                        </div>
                      </li>
                    <?php
                      $i++;
                    endwhile;
                    ?>
                    <!-- Modal -->
                    <div class="modal fade" id="galleryModal-<?php echo $s; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content  rounded-0">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <ul class="list-unstyled" id="modal-slick-<?php echo $s; ?>">
                              <?php
                              foreach ($slick_array as $value) {
                              ?>
                                <li class="modal-slick-item">

                                  <img src="<?php echo $value["image_url"] ?>" alt="" class="img-fluid">
                                  <p class="mt-4">
                                    <?php echo $value["content"] ?>
                                  </p>

                                </li>
                              <?php
                              }
                              ?>
                            </ul>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary text-white" data-dismiss="modal">閉じる</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <script>
                      jQuery(window).on('load', function() {
                        jQuery('div[data-open="modal"]').click(function() {
                          const target = jQuery(this).data('target')
                          const num = jQuery(this).data('num')
                          jQuery(target).modal();
                          modalSlick(1, target);
                          removeSlick(target);
                        });

                        function removeSlick(target) {
                          jQuery(target).on('hidden.bs.modal', function(e) {
                            console.log('eee');
                            jQuery('#modal-slick-<?php echo $s; ?>').slick('unslick');
                          });
                        }

                        function modalSlick(num, target) {
                          console.log(num);
                          jQuery(target).on('shown.bs.modal', function(e) {
                            jQuery('#modal-slick-<?php echo $s; ?>').slick({
                              infinite: true,
                              centerMode: true,
                              centerPadding: 0,
                              swipe: true,
                              autoplaySpeed: 3000,
                              speed: 1000,
                              arrows: true,
                              dots: true,
                              initialSlide: num,
                              slidesToShow: 1,
                              slidesToScroll: 1
                              // centerPadding: '180px',
                            });
                          });
                        }
                      });
                    </script>
                  <?php
                  else :
                  endif;
                  ?>
                </ul>
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
