<div class="component-hall-slider">
  <?php if (get_field('plan_slider')) : ?>
    <div class="swiper hall-swiper" id="hall-swiper-main">
      <div class="swiper-wrapper">
        <?php while (the_repeater_field('plan_slider')) : ?>
          <div class="swiper-slide">
            <?php echo wp_get_attachment_image(get_sub_field('plan_slider_img'), 'medium', false, array('class' => 'hall-slider__img')); ?>
          </div>
        <?php endwhile; ?>
      </div>
      <?php /*
      <div class="swiper-button-next">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/swiper-next.svg">
      </div>
      <div class="swiper-button-prev">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/swiper-prev.svg">
      </div>
      */ ?>
    </div>
    <div id="hall-swiper-sub" class="swiper hall-swiper-sub">
      <div class="swiper-wrapper">
        <?php while (the_repeater_field('plan_slider')) : ?>
          <div class="swiper-slide">
            <?php echo wp_get_attachment_image(get_sub_field('plan_slider_img'), 'thumbnail-slider', false, array('class' => 'hall-slider-sub__img')); ?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  <?php endif; ?>
</div>

<script>
  // hall swiper
  const hallSwpier = document.getElementById('hall-swiper-main');
  if (hallSwpier) {
    var swiper = new Swiper('#hall-swiper-sub', {
      loop: true,
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
      // breakpoints: {
      //   640: {
      //     slidesPerView: 6,
      //   },
      // },
    });

    var swiper2 = new Swiper('#hall-swiper-main', {
      centeredSlides: true,
      slidesPerView: 1,
      loop: true,
      spaceBetween: 20,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: swiper,
      },
      // breakpoints: {
      //   640: {
      //     slidesPerView: 1.5,
      //   },
      // },
    });
  }
</script>