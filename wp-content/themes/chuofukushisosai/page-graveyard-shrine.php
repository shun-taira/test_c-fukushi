<?php get_header(); ?>
  <title>霊園・仏壇【中央福祉葬祭公式HP】</title>
  <meta name="description" content="">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/common.css?updated=<?php echo date('YmdHis') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/item_list.css?updated=<?php echo date('YmdHis') ?>">
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
        <h1 class="f_mincho">霊園・仏壇</h1>
      </div>
    </div>
    <div class="breadcrumbs">
      <div class="base_width">
        <ol>
          <li><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
          <li>霊園・仏壇</li>
        </ol>
      </div>
    </div>
    <section id="reien">
      <div class="base_width">
        <h2 class="sct_title f_mincho">霊園</h2>
        <h3>「福祉の会」は葬儀からお墓（合祀墓）までご支援いたします</h3>
        <p>
          霊園は関東各地域にてご案内いたします。
          葬儀・お墓の生前予約も承っております。ご相談・お見積りは無料です。<br>
          <a href="/form-entry/">お問い合わせフォーム</a>またはお電話（0120-594-294）にてお気軽にお問い合わせください。<br>
        </p>
      </div>
    </section>
    <section id="butsudan">
      <div class="base_width">
        <h2 class="sct_title f_mincho">仏壇</h2>
        <h3>
          本位牌　<span class="f_large">29,700</span>円(税込)～<br>
          仏壇　　<span class="f_large">59,400</span>円(税込)～
        </h3>
        <p class="stc">
          「福祉の会」にご入会いただきますと、さらにお得な会員割引価格にてご案内いたします。
        </p>
        <div class="second_width">
          <div class="fukushi_bunner_ctn">
            <p>会員入会で<span class="inline_block">葬儀や仏壇費用をお得に！</span></p>
            <a href="/fukushinokai/">
              <img class="fukushi_bunner pc_tab_only" src="<?php echo get_template_directory_uri(); ?>/img/fukushinokai_bunner.png" alt="「福祉の会」会員募集中">
              <img class="fukushi_bunner sp_only" src="<?php echo get_template_directory_uri(); ?>/img/fukushinokai_bunner_sp.png" alt="「福祉の会」会員募集中">
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  <?php wp_footer(); ?>
</body>
