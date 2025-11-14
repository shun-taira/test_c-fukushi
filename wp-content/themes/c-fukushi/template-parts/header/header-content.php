<?php
$logo_image_id = get_theme_mod('custom_logo');
$logo_image = wp_get_attachment_image_src($logo_image_id, 'medium');
$logo_alt = get_bloginfo('name');
$freedial_number = get_theme_mod('freedial_number');
?>
<div class="header-content">
  <div class="header-content-block">
    <div class="header-content__logo">
      <a href="<?php echo home_url(); ?>" class="header-content__link">
        <?php if ($logo_image) : ?>
          <img src="<?php echo esc_url($logo_image[0]); ?>" class="header-content__img" width="180" height="auto" alt="中央福祉葬祭">
        <?php endif; ?>
      </a>
    </div>
    <div class="header-content__info">
      <div class="header-content__sns">
        <div class="sns_wrap">
          <p class="sns-comment">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-sns-comment.svg" class="sns-comment_img">
          </p>
          <?php
          get_template_part('template-parts/header/header-sns');
          ?>
        </div>
      </div>
      <div class="header-content__square">
        <a href="<?php echo home_url(); ?>/chuou-fukushi/#anchi" class="title-square-link">
          <span class="square_block">
            安置室<br>完備
          </span>
        </a>
      </div>
      <div class="header-content__dial">
        <p class="header-content__dial-time">ご依頼・ご相談無料 <span class="dial-time_strong">24</span>時間<span class="dial-time_strong">365</span>日対応中</p>
        <a class="header-content__dial-number" href="tel:<?php echo $freedial_number; ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-freedial.svg" class="dial-number_freedial">
          <?php echo $freedial_number; ?>
        </a>
      </div>
      <div class="header-content__square">
        <a href="<?php echo home_url(); ?>/contact" class="title-link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ban-line.svg" class="square_img">
        </a>
      </div>
      <div class="header-content__square color_red">
        <a href="<?php echo home_url(); ?>/urgency" class="title-link">
          <span class="square_block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-attention.png" class="square_icon">
            お急ぎの方へ
          </span>
        </a>
      </div>
    </div>
  </div>

</div>
</div>
</div>