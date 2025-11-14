<!DOCTYPE html>
<html lang="ja">

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
    })(window, document, 'script', 'dataLayer', 'GTM-5QB2JTWZ');
  </script>
  <!-- End Google Tag Manager -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5QB2JTWZ"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header class="header">
    <?php get_template_part('template-parts/header/header-bar'); ?>
    <?php get_template_part('template-parts/header/header-menu-sp'); ?>
    <?php get_template_part('template-parts/header/header-fixnav-sp'); ?>
    <?php // get_template_part('template-parts/header/header-content-sp');
    ?>
    <?php get_template_part('template-parts/header/header-fixnav'); ?>
    <?php get_template_part('template-parts/header/header-content'); ?>
    <?php get_template_part('template-parts/header/header-nav'); ?>
  </header>
  <main>