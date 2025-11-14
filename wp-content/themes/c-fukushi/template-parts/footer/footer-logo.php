<?php
$logo_image_id = get_theme_mod('custom_logo');
$logo_image = wp_get_attachment_image_src($logo_image_id, 'thumbnail');
$logo_alt = get_bloginfo('name');
?>
<div class="footer-logo">
  <div class="footer-logo-block">
    <div class="footer-logo-inner">
      <a href="<?php echo home_url(); ?>" class="footer-logo__link">
        <?php if ($logo_image) : ?>
          <img src="<?php echo esc_url($logo_image[0]); ?>" class="footer-logo__img" width="180" height="auto" alt="<?php echo $logo_alt; ?>">
        <?php endif; ?>
      </a>
    </div>
  </div>
</div>