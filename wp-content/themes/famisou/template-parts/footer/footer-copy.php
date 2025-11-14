<?php
$logo_image_id = get_theme_mod('custom_logo');
$logo_image = wp_get_attachment_image_src($logo_image_id, 'thumbnail');
$logo_alt = get_bloginfo('name');
?>
<div class="footer-copy">
  <div class="footer-copy-block">
    <div class="footer-copy-inner">
      <?php /*
      <div class="footer-copy-logo">
        <a href="<?php echo home_url(); ?>" class="footer-copy__link">
          <?php if ($logo_image) : ?>
            <img src="<?php echo esc_url($logo_image[0]); ?>" class="header-copy__img" width="180" height="auto" alt="<?php echo $logo_alt; ?>">
            <?php endif; ?>
          </a>
        </div>
          */ ?>
      <div class="footer-copy-address">
        <p class="footer-copy__text">
          Copyright &copy; 2024 自由なお葬式 All Rights Reserved.
        </p>
      </div>
    </div>
  </div>
</div>