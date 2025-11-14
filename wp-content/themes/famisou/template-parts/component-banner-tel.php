<?php
$freedial_number = get_theme_mod('freedial_number');
?>
<div class="component-banner">
  <div class="ban-body">
    <ul class="ban-list">
      <li class="ban-item">
        <a href="tel:<?php echo $freedial_number; ?>" class="ban-item-link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ban-tel.png" alt="24時間365日 通話・事前相談無料 <?php echo $freedial_number; ?>" class="ban-item__img display_pc">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ban-tel_sp.png" alt="24時間365日 通話・事前相談無料 <?php echo $freedial_number; ?>" class="ban-item__img display_sp">
        </a>
      </li>
    </ul>
  </div>
</div>