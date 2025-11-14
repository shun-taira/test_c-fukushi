<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NCZWBW8R');
  </script>
  <!-- End Google Tag Manager -->

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
</head>

<body <?php body_class(); ?>>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCZWBW8R" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?php
  $logo_image_id = get_theme_mod('custom_logo');
  $logo_image = wp_get_attachment_image_src($logo_image_id, 'medium');
  $logo_alt = get_bloginfo('name');
  $freedial_number = get_theme_mod('freedial_number');
  ?>

  <header class="site-header">

    <div class="site-header-bar">
      <div class="wrap-site-header-bar container-fluid">
        <div class="row">
          <div class="col-15">
            <h1 class="site-header-bar__head mb-0">
              <?php
              $description = get_bloginfo('description');
              if ($description) {
                echo $description;
              }
              ?>
            </h1>
          </div>
          <div class="col-9">
            <ul class="list-inline site-header-bar__head mb-0 text-right">
              <li class="list-inline-item"><a href="<?php echo home_url(); ?>/faq">よくある質問</a></li>
              <li class="list-inline-item"><a href="<?php echo home_url(); ?>/company">会社概要</a></li>
              <li class="list-inline-item"><a href="<?php echo home_url(); ?>/privacy">個人情報保護方針</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="site-header-nav">
      <div class="wrap-site-header-nav container-fluid py-4 py-md-10 py-md-4">
        <div class="row align-items-center row-site-header-nav">

          <div class="site-nav-brand col-16 col-sm-6 col-md-6 col-lg-5 col-xl-6">
            <a href="<?php echo home_url(); ?>" class="site-nav__logo d-block">
              <?php if ($logo_image) : ?>
                <img src="<?php echo esc_url($logo_image[0]); ?>" class="img-fluid site-nav__logo-img" width="180" height="auto" alt="<?php echo $logo_alt; ?>">
              <?php endif; ?>
            </a>
          </div>
          <div class="site-nav-content d-flex align-items-center justify-content-end col-sm-18 col-md-18 col-lg-19 col-xl-18">
            <?php /*
            <div class="site-nav-sns d-none d-lg-block pl-6">
              <div class="d-inline-block">
                <p class="mb-4 site-nav-sns__p text-center">
                  SNSは24時間対応
                </p>
                <?php get_template_part('template-parts/content', 'sns'); ?>
              </div>
            </div>
            */ ?>
            <div class="site-nav-anchi d-none d-lg-block pl-6">
              <a href="<?php echo home_url(); ?>/hall#anchi" class="anchi--block btn btn-primary btn-sm font-weight-bold">
                安置室<br>完備
              </a>
            </div>
            <?php
            $freedial_number = get_theme_mod('freedial_number');
            ?>
            <div class="site-nav-tel d-none d-md-block pl-6">
              <a href="tel:0120-000-000" class="d-inline-block">
                <p class="mb-0 site-nav-tel__p mb-4 text-center">
                  24時間365日受付 / 携帯からもOK
                </p>
                <div class="d-flex align-items-center">
                  <span class="mr-4">
                    <img class="img-fluid site-nav-tel__icon-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/header/ico_tel.svg">
                  </span>
                  <span itemprop="telephone" class="site-nav-tel__number">
                    <?php echo $freedial_number ? $freedial_number : ''; ?>
                  </span>
                </div>
              </a>
            </div>
            <div class="site-nav-contact d-none d-md-block pl-6">
              <div class="d-flex justify-content-end">
                <div class="mr-4">
                  <?php /*
                  <a href="<?php echo home_url(); ?>/contact/" class="text-left w-100 my-2 btn btn-info site-nav-contact__a">
                    <i class="bi bi-envelope"></i>
                    メールでご相談
                  </a>
                  <a href="<?php echo home_url(); ?>/request/" class="text-left w-100 my-2 btn btn-success site-nav-contact__a">
                    <i class="bi bi-file-text"></i>
                    無料資料請求
                  </a>
                  */ ?>
                </div>
                <a href="<?php echo home_url(); ?>/contact/" class="w-100 d-flex align-items-center justify-content-center site-nav-contact__a">
                  <img alt="LINEで簡単相談" class="img-fluid site-nav-contact__img rounded" src="<?php echo get_stylesheet_directory_uri(); ?>/images/ban-line.svg">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-header-menu p-0 py-md-2 py-lg-4 mt-0 mt-lg-4">
      <div class="wrap-site-header-menu container-fluid">
        <nav id="site-navigation" class="main-navigation navbar navbar-expand-md navbar-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span></span><span></span><span></span>
          </button>
          <div class="resoponsive-block collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            wp_nav_menu(
              // pc menu
              array(
                'theme_location' => 'menu-1',
              )
            );
            wp_nav_menu(
              // mobile menu
              array(
                'theme_location' => 'menu-2',
              )
            );
            ?>
          </div>
        </nav><!-- #site-navigation -->
      </div>
    </div>

  </header>