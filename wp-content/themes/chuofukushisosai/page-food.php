<?php get_header(); ?>
  <title>お料理【中央福祉葬祭公式HP】</title>
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
        <h1 class="f_mincho">お料理</h1>
      </div>
    </div>
    <div class="breadcrumbs gray">
      <div class="base_width">
        <ol>
          <li><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
          <li>お料理</li>
        </ol>
      </div>
    </div>
    <section id="food">
      <div class="base_width">
        <h2 class="sct_title f_mincho">お料理</h2>
        <h3 class="f_mincho">会席重</h3>
        <p class="p_h3">
          吟味した旬の素材を繊細な味付けで生かし、こまやかな四季折々の風趣を盛り込んだ松花堂。<br>
          大切なおもてなしにふさわしい品格のあるお料理です。
        </p>
        <ul class="item_list">
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/food/ka_koto.jpg" alt="琴">
            <h4>琴(こと)</h4>
            <h5>6,300円（税込）</h5>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/food/ka_hagi.jpg" alt="萩">
            <h4>萩(はぎ)</h4>
            <h5>5,250円（税込）</h5>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/food/ka_mine.jpg" alt="嶺">
            <h4>嶺(みね)</h4>
            <h5>4,200円（税込）</h5>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/food/ka_ryo.jpg" alt="陵">
            <h4>陵(りょう)</h4>
            <h5>3,150円（税込）</h5>
          </li>
        </ul>
        <h3 class="f_mincho">単品料理</h3>
        <p class="p_h3">
          和・洋取り揃えた本格的な単品料理。親しい方との不意の集まりの席、お料理を囲み故人との思い出を語り合いたいものです。
        </p>
        <ul class="item_list">
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/food/ta_sashimi.jpg" alt="刺身盛り合せ">
            <h4>刺身盛り合せ</h4>
            <h5>8,400円（税込）</h5>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/food/ta_sushi.jpg" alt="巻き寿司とにぎり寿司">
            <h4>巻き寿司</h4>
            <h5>5,250円（税込）</h5>
            <h4>にぎり寿司</h4>
            <h5>6,300円（税込）</h5>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/food/ta_o_sa.jpg" alt="サンドイッチとオードブルとフルーツの盛り合せ">
            <h4>サンドイッチ</h4>
            <h5>4,725円（税込）</h5>
            <h4>オードブルとフルーツの盛り合せ</h4>
            <h5>7,350円（税込）</h5>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/food/ta_o_tu.jpg" alt="おにぎりと漬物の盛り合せ">
            <h4>おにぎり</h4>
            <h5>3,465円（税込）</h5>
            <h4>漬物の盛り合せ</h4>
            <h5>3,045円（税込）</h5>
          </li>
        </ul>
        <h3 class="f_mincho">セット料理</h3>
        <p class="p_h3">
          大勢のお集まりや突然のおもてなしに。心地良い美味しさが奏でる心和むひととき。バラエティ豊かなお料理をセットいたしました。
        </p>
        <ul class="item_list">
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/food/se_kikyo.jpg" alt="桔梗">
            <h4>桔梗(ききょう)</h4>
            <h5>26,250円（税込）</h5>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/food/se_nadeshiko.jpg" alt="撫子">
            <h4>撫子(なでしこ)</h4>
            <h5>21,000円（税込）</h5>
          </li>
        </ul>
      </div>
    </section>
    <!-- <section id="henreihin">
      <div class="base_width">
        <h2 class="sct_title f_mincho">返礼品</h2>
        <div>
          <ul class="item_list">
            <li>
              <img src="<?php echo get_template_directory_uri(); ?>/img/henreihin/henreihin_1.jpg" alt="">
              <h4></h4>
              <h5></h5>
              <p>
              </p>
            </li>
          </ul>
        </div>
      </div>
    </section> -->
  </main>
  <?php get_footer(); ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  <?php wp_footer(); ?>
</body>