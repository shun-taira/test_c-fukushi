<?php
$logo_image_id = get_theme_mod('custom_logo');
$logo_image = wp_get_attachment_image_src($logo_image_id, 'medium');
$logo_alt = get_bloginfo('name');
?>
<div class="header-fixnav">
  <div class="header-fixnav-block">
    <div class="header-fixnav__logo">
      <a href="<?php echo home_url(); ?>" class="header-fixnav__link">
        <?php if ($logo_image) : ?>
          <img src="<?php echo esc_url($logo_image[0]); ?>" class="header-fixnav__img" width="auto" height="40" alt="中央福祉葬祭">
        <?php endif; ?>
      </a>
    </div>
    <nav class="header-fixnav-nav">
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'primary-pc-menu',
          'container'      => '',
          'menu_class'     => 'header-fixnav-menu',
          'walker'  => new custom_walker_nav_menu
        )
      );
      ?>
    </nav>
  </div>
</div>