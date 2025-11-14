<?php get_header(); ?>
  <title>福祉の会【中央福祉葬祭公式HP】</title>
  <meta name="description" content="">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/common.css?updated=<?php echo date('YmdHis') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/fukushinokai.css?updated=<?php echo date('YmdHis') ?>">
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
        <h1 class="f_mincho">福祉の会について</h1>
      </div>
    </div>
    <div class="breadcrumbs gray">
      <div class="base_width">
        <ol>
          <li><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
          <li>福祉の会について</li>
        </ol>
      </div>
    </div>
    <section id="fukushinokai">
      <div class="base_width">
        <p>
          中央福祉葬祭では、残されたご家族にご負担が少なくなるよう、ご葬儀料金を見直し価格改定をいたしました。<br>
          福祉の会にご入会いただきますと、会員価格にて各種ご葬儀プランをご利用いただけます。<br>
          互助会などとは異なり、年会費・月会費は頂いておらず、入会費1000円のみでご葬儀費用の割引のほかさまざまなサービスをご利用いただけます。<br>
          ご葬儀に関する相談・事前見積り等も随時承りますので安心してご葬儀を迎えることができます。
        </p>
        <table>
          <tr>
            <th>入会金</th>
            <td><span class="f_large">1000</span>円</td>
          </tr>
          <tr>
            <th>月会費・年会費</th>
            <td><span class="f_large">無料</span></td>
          </tr>
        </table>
        <div class="triangle"></div>
        <h3>会員サービス</h3>
        <ul>
          <li class="js-animation">
            <h4>
              ご葬儀費用<br>
              各種プラン割引<br>
              <span class="f_large">55,000</span>円～
            </h4>
            <img src="<?php echo get_template_directory_uri(); ?>/img/fukushinokai_1.png" alt="ご葬儀費用各種プラン割引55,000円～">
          </li>
          <li class="js-animation">
            <h4 class="text_short">
              式場利用料<br>
              <span class="f_large">55,000</span>円割引
            </h4>
            <img src="<?php echo get_template_directory_uri(); ?>/img/fukushinokai_2.png" alt="式場利用料55,000円割引">
          </li>
          <li class="js-animation">
            <h4 class="text_short">
              仏壇仏具<br>
              会員割引
              <span class="f_large">10</span>%～
            </h4>
            <img src="<?php echo get_template_directory_uri(); ?>/img/fukushinokai_3.png" alt="仏壇仏具会員割引10%～">
          </li>
          <li class="js-animation">
            <h4>
              <span class="f_small">会員の</span><br>
              ご家族の方なら<br>
              どなたでも利用可能
            </h4>
            <img src="<?php echo get_template_directory_uri(); ?>/img/fukushinokai_4.png" alt="会員のご家族ならどなたでも利用可能">
          </li>
          <li class="js-animation">
            <h4 class="text_short">
              <span class="f_small">会員ならではのご葬儀後の</span><br>
              アフターケアが充実<br>
            </h4>
            <img src="<?php echo get_template_directory_uri(); ?>/img/fukushinokai_5.png" alt="会員ならではのアフターケアが充実">
          </li>
          <li class="js-animation">
            <h4 class="text_short">
              永久会員<br>
              <span class="f_small">としてご利用いただけます</span><br>
            </h4>
            <img src="<?php echo get_template_directory_uri(); ?>/img/fukushinokai_6.png" alt="永久会員としてご利用いただけます">
          </li>
        </ul>
        <a href="/join-entry/" class="join_btn f_mincho">
          <p>ご入会はこちら</p>
          <div></div>
        </a>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  <?php wp_footer(); ?>
</body>
