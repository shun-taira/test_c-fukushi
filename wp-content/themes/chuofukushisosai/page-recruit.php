<?php get_header(); ?>
  <title>採用情報【中央福祉葬祭公式HP】</title>
  <meta name="description" content="">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/common.css?updated=<?php echo date('YmdHis') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/recruit.css?updated=<?php echo date('YmdHis') ?>">
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-MGXMJ3V5');</script>
  <!-- End Google Tag Manager -->  
  <?php wp_head(); ?>
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MGXMJ3V5"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->  
  <?php get_template_part('parts/header-content'); ?>
  <main>
    <div class="p_title">
      <div class="base_width">
        <h1 class="f_mincho">採用情報</h1>
      </div>
    </div>
    <div class="breadcrumbs gray">
      <div class="base_width">
        <ol>
          <li><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
          <li>採用情報</li>
        </ol>
      </div>
    </div>
    <section id="requirements">
      <div class="base_width">
        <div class="second_width">
          <h2 class="sct_title f_mincho">募集要項</h2>
          <table>
            <tr>
              <th>仕事内容</th>
              <td>
                テストテストテストテストテストテストテストテスト
              </td>
            </tr>
            <tr>
              <th>必要な能力</th>
              <td>
              </td>
            </tr>
            <tr>
              <th>雇用形態</th>
              <td>
              </td>
            </tr>
            <tr>
              <th>給与</th>
              <td>
              </td>
            </tr>
            <tr>
              <th>就業時間</th>
              <td>
              </td>
            </tr>
            <tr>
              <th>勤務地</th>
              <td>
              </td>
            </tr>
            <tr>
              <th>休暇・休日</th>
              <td>
              </td>
            </tr>
            <tr>
              <th>福利厚生</th>
              <td>
              </td>
            </tr>
            <tr>
              <th>備考</th>
              <td>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  <?php wp_footer(); ?>
</body>