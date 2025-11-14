<?php
$freedial_number = get_theme_mod('freedial_number');
?>
<div class="footer-fixban">
  <div class="footer-fixban-block">
    <div class="footer-fixban-staff">
      <div class="staff_wrap">
        <div class="staff_photo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-staff.png" class="staff_img">
        </div>
      </div>
    </div>
    <div class="footer-fixban-comment">
      <div class="staff_comment">
        <p class="staff_text">
          お急ぎの方、葬儀についてお困りの方、どんな小さなことでもお気軽にご相談・お問い合わせください。
        </p>
      </div>
    </div>
    <div class="footer-fixban-dial">
      <p class="footer-fixban_dial-time">ご依頼・ご相談無料<span class="dial-time_strong">24</span>時間<span class="dial-time_strong">365</span>日対応中</p>
      <a class="footer-fixban__dial-number" href="tel:<?php echo $freedial_number; ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-freedial.svg" class="dial-number_freedial">
        <?php echo $freedial_number; ?>
      </a>
    </div>
    <div class="footer-fixban-line">
      <a href="<?php echo home_url(); ?>/contact" class="footer-fixban__link">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ban-line.svg" alt="LINEで簡単相談" class="footer-fixban__img"></a>
    </div>
  </div>
</div>