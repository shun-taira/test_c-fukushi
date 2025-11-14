<?php
$freedial_number = get_theme_mod('freedial_number');
?>
<div class="footer-fixban-sp">
  <ul class="footer-fixban-sp-list">
    <li class="footer-fixban-sp-item">
      <a href="tel:<?php echo $freedial_number; ?>" class="footer-fixban-sp__link-tel">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-fixban-sp-tel.png" alt="電話をかける" class="footer-fixban-sp__img">
      </a>
    </li>
    <li class="footer-fixban-sp-item">
      <a href="<?php echo home_url(); ?>/contact" class="footer-fixban-sp__link-line">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-fixban-sp-line.png" alt="LINEで簡単相談" class="footer-fixban-sp__img">
      </a>
    </li>
  </ul>
</div>