<?php get_header(); ?>
  <title>お知らせ一覧【中央福祉葬祭公式HP】</title>
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/common.css?updated=<?php echo date('YmdHis') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/news.css?updated=<?php echo date('YmdHis') ?>">
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
        <h1 class="f_mincho">お知らせ一覧</h1>
      </div>
    </div>
    <div class="breadcrumbs gray">
      <div class="base_width">
        <ol>
          <li><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
          <li>お知らせ一覧</li>
        </ol>
      </div>
    </div>
    <section id="news">
      <div class="base_width">
        <div class="second_width">
          <ol class="event_list">
            <?php
            function chk($v) {
              $r = true;
              if(!isset($v)) {
                $r = false;
              } else if ($v==null || $v=='') {
                $r = false;
              }
              return $r;
            }
            function end_chk($v) {
              $r = true;
              if(!isset($v)) {
                $r = false;
              } else if ($v==null || $v=='') {
                $r = false;
              } else if ($v < date("Ymd")) {
                $r = false;
              }
              return $r;
            }
            $page_list = get_posts('numberposts=-1&order=DESC&post_type=news');
            $counter = 0;
            foreach ($page_list as $page_item) {
            ?>
              <li id="news_<?php echo $page_item->ID; ?>">
                <div class="news_info">
                  <p class="post_date"><?php echo get_the_date('Y/m/d', $page_item->ID); ?></p>
                  <?php
                  $categories = get_the_category($page_item->ID);
                  if (!empty($categories)) {
                      $category_name = $categories[0]->name;
                  ?>
                    <div class="category"><?php echo $category_name; ?></div>
                  <?php
                  }
                  ?>
                </div>
                <h2 class="news_title"><?php echo get_the_title($page_item->ID); ?></h2>
                <p class="news_atc"><?php echo get_field('news_article', $page_item->ID); ?></p>
                <?php
                if(chk(get_the_post_thumbnail_url($page_item->ID))) {
                  echo '<a href="'.get_the_post_thumbnail_url($page_item->ID).'" target="_blank">';
                    echo '<img src="'.get_the_post_thumbnail_url($page_item->ID).'" alt="お知らせイメージ">';
                  echo '</a>';
                }
                ?>
              </li>
            <?php
              $counter++;
            }
            ?>
          </ol>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  <?php wp_footer(); ?>
</body>

