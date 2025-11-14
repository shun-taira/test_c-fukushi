<?php
$logo_image = get_theme_mod('sp_logo_setting');
?>
<div class="footer-copy-sp">
  <a href="<?php echo home_url(); ?>" class="footer-copy-sp__link">
    <?php if ($logo_image) : ?>
      <img src="<?php echo esc_url($logo_image); ?>" class="footer-copy-sp__img" width="200" height="auto" alt="<?php echo $logo_alt; ?>">
    <?php endif; ?>
  </a>
  <!-- <p class="footer-copy-sp__text">
    <a class="footer-link" href="https://maps.app.goo.gl/pbgPnTtJPj1RmC3D6" target="_blank" rel="noopener">
      茨城県下妻市長塚2-1（国道125号線沿い）
    </a>
    <br>
    TEL0296(44)0011（代）　24時間年中無休
  </p>
  <p class="footer-copy-sp__text">
    茨城県下妻市、八千代町、つくば市、筑西市の斎場・葬儀式場はプリエールふるさわへ
  </p> -->
</div>