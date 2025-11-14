<?php get_header(); ?>
  <title>お料理・返礼品【中央福祉葬祭公式HP】</title>
  <meta name="description" content="">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/item_list.css">
  <?php wp_head(); ?>
</head>
<body>
  <?php get_template_part('parts/header-content'); ?>
  <main>
    <div class="p_title">
      <div class="base_width">
        <h1 class="f_mincho">お料理・返礼品</h1>
      </div>
    </div>
    <div class="breadcrumbs">
      <div class="base_width">
        <ol>
          <li><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
          <li>お料理・返礼品</li>
        </ol>
      </div>
    </div>
    <section id="food">
      <div class="base_width">
        <h2 class="sct_title f_mincho">お料理</h2>
        <h3 class="f_mincho">通夜料理</h3>
        <ul class="item_list">
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/food/food_1.jpg" alt="">
            <h4></h4>
            <h5></h5>
            <p>
            </p>
          </li>
        </ul>
      </div>
    </section>
    <section id="henreihin">
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
    </section>
  </main>
  <?php get_footer(); ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  <?php wp_footer(); ?>
</body>