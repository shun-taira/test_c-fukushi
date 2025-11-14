<?php
$x_url = get_theme_mod('x_url');
$facebook_url = get_theme_mod('facebook_url');
$line_url = get_theme_mod('line_url');
$instagram_url = get_theme_mod('instagram_url');
?>
<ul class="site-nav-sns__list list-unstyled mb-0 mx-auto d-flex justify-content-center align-items-center">
  <?php if (!empty($x_url)) : ?>
    <li>
      <a class="d-block px-2" href="<?php echo esc_url($x_url); ?>" target="_blank" rel="noopener">
        <img class="img-fluid site-nav-sns__icon-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/header/header-sns-x.svg" alt="twitter">
      </a>
    </li>
  <?php endif; ?>
  <?php if (!empty($facebook_url)) : ?>
    <li>
      <a class="d-block px-2" href="<?php echo esc_url($facebook_url); ?>" target="_blank" rel="noopener">
        <img class="img-fluid site-nav-sns__icon-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/header/header-sns-facebook.svg" alt="facebook">
      </a>
    </li>
  <?php endif; ?>
  <?php if (!empty($line_url)) : ?>
    <li>
      <a class="d-block px-2" href="<?php echo esc_url($line_url); ?>" target="_blank" rel="noopener">
        <img class="img-fluid site-nav-sns__icon-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/header/header-sns-line.svg" alt="LINE">
      </a>
    </li>
  <?php endif; ?>
  <?php if (!empty($instagram_url)) : ?>
    <li>
      <a class="d-block px-2" href="<?php echo esc_url($instagram_url); ?>" target="_blank" rel="noopener">
        <img class="img-fluid site-nav-sns__icon-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/header/header-sns-instagram.svg" alt="instagram">
      </a>
    </li>
  <?php endif; ?>
</ul>