<?php
$logo_image = get_theme_mod('sp_logo_setting');
?>
<div class="header-fixnav-sp">
  <div class="header-fixnav-sp-block">
    <div class="header-fixnav-sp__logo">
      <a href="<?php echo home_url(); ?>" class="header-fixnav-sp__link">
        <?php if ($logo_image) : ?>
          <img src="<?php echo esc_url($logo_image); ?>" class="header-fixnav-sp__img" width="150" height="auto" alt="<?php echo $logo_alt; ?>">
        <?php endif; ?>
      </a>
    </div>
    <div class="header-fixnav-sp__nav">
      <div class="header-content-sp__square">
        <a href="<?php echo home_url(); ?>/flow/#anchi">
          <span class="square_block">
            安置室<br>完備
          </span>
        </a>
      </div>
    </div>
  </div>
</div>