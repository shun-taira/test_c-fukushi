<?php
$freedial_number = get_theme_mod('freedial_number');
?>

<footer>
  <div class="site-footer">

    <div class="site-footer-img" style="background-image:url('<?php echo site_url(); ?>/wp-content/uploads/2022/02/1650863_s-1-e1644811146511.jpg')"></div>

    <div class="footer-ban" id="footer-ban">
      <div class="wrap-footer-ban container-fluid py-4 py-md-6">
        <div class="d-flex align-items-center justify-content-center">
          <div class="footer-ban-tel mr-4 d-flex align-items-center">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer/footer-ban-img01.png" class="d-none d-lg-inline-block img-fluid mr-4 footer-ban__img">
            <p class="d-none d-lg-block mb-0 footer-ban-img__p">
              お急ぎの方、葬儀についてお困りの方、<br>どんな小さなことでもお気軽に<br>ご相談・お問い合わせください。
            </p>
            <a href="tel:<?php echo $freedial_number ? $freedial_number : '#'; ?>" class="d-inline-block">
              <p class="footer-ban-tel__p mb-0 mb-md-2">
                24時間365日受付 / 相談無料
              </p>
              <div class="d-flex align-items-center">
                <span class="mr-4">
                  <img class="img-fluid footer-ban-tel__icon-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/header/ico_tel-w.svg">
                </span>
                <span itemprop="telephone" class="footer-ban-tel__number">
                  <?php echo $freedial_number ? $freedial_number : ''; ?>
                </span>
              </div>
            </a>
          </div>
          <div class="footer-ban-contact text-right ml-4">
            <div class="d-flex flex-column flex-sm-row block-footer-ban-contact ">
              <?php /*
              <a href="<?php echo home_url(); ?>/contact/" class="d-flex align-items-center mx-2 btn btn-info footer-ban-contact__a rounded-sm mb-2 mb-sm-0">
                <i class="bi bi-envelope"></i>
                メールでご相談
              </a>
              */ ?>
              <a href="<?php echo home_url(); ?>/contact/" class="w-100 d-flex align-items-center mx-2 footer-ban-contact__a">
                <img class="img-fluid footer-ban-contact__img rounded" src="<?php echo get_stylesheet_directory_uri(); ?>/images/ban-line.svg">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="button-top">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z" />
      </svg>
    </div>

    <div class="wrap-site-footer container-fluid d-none d-md-block">
      <div class="site-footer__nav py-8 py-md-20">
        <?php
        wp_nav_menu(
          // pc menu
          array(
            'theme_location' => 'menu-3',
          )
        );
        ?>
      </div>
    </div>
  </div>
  <div class="site-footer-copy py-10 px-2">
    <small>
      Copyright &copy; <?php echo date('Y'); ?> 自由なお葬式 All Rights Reserved.</small>
  </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>