<?php
$instagram_url = get_theme_mod('instagram_url');
$facebook_url = get_theme_mod('facebook_url');
$twitter_url = get_theme_mod('twitter_url');
?>

<ul class="sns-links">
  <?php if (!empty($twitter_url)) : ?>
    <li class="sns-links-item">
      <a class="icon_hover" href="<?php echo esc_url($twitter_url); ?>" target="_blank" rel="noopener noreferrer">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sns/twitter.svg" alt="twitter" class="sns-links__img">
      </a>
    </li>
  <?php endif; ?>

  <?php if (!empty($facebook_url)) : ?>
    <li class="sns-links-item">
      <a class="icon_hover" href="<?php echo esc_url($facebook_url); ?>" target="_blank" rel="noopener noreferrer">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sns/facebook.svg" alt="facebook" class="sns-links__img">
      </a>
    </li>
  <?php endif; ?>

  <?php if (!empty($instagram_url)) : ?>
    <li class="sns-links-item">
      <a class="icon_hover" href="<?php echo esc_url($instagram_url); ?>" target="_blank" rel="noopener noreferrer">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sns/instagram.svg" alt="instagram" class="sns-links__img">
      </a>
    </li>
  <?php endif; ?>

</ul>