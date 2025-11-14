<?php get_header(); ?>
  <title>中央福祉葬祭公式HP</title>
  <meta name="description" content="">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/common.css?updated=<?php echo date('YmdHis') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css?updated=<?php echo date('YmdHis') ?>">
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
    <div class="firstview_ctn">
      <img class="firstview" src="<?php echo get_template_directory_uri(); ?>/img/firstview.jpg" alt="">
    </div>
    <section id="concept">
      <div class="base_width">
        <h1 class="f_mincho js-animation">
          人生の終わりに迎える葬送の儀。<br>
          去りゆく人を悼む厳粛な時を、<br class="sp_only">真心こめてご提供いたします。
        </h1>
        <div class="concept_atc js-animation">
          <div class="concept_stc">
            <div class="director_ctn">
              <img class="director pc_tab_only" src="<?php echo get_template_directory_uri(); ?>/img/director.svg" alt="厚生労働省認定 葬祭ディレクター技能審査 一級葬祭ディレクター在籍">
              <img class="director sp_only" src="<?php echo get_template_directory_uri(); ?>/img/director_sp.svg" alt="厚生労働省認定 葬祭ディレクター技能審査 一級葬祭ディレクター在籍">
            </div>
            <p>
              誰もが人生の終わりに迎える大切な儀式を、真心込めてお手伝い致します。<br>
              急なご不幸でどうすればよいかわからない時、ぜひお気軽にご相談ください。<br>
              また、後悔しないための生前相談等も、お客様の立場に立って誠心誠意対応させていただきます。<br>
              厚生労働省認定の一級葬祭ディレクターが在籍しておりますので、葬儀、葬祭に関する疑問やお悩みがございましたら、何なりとご相談ください。
            </p>
          </div>
          <a href="/about/">
            <div class="main_btn">
              中央福祉葬祭について
            </div>
          </a>
        </div>
      </div>
    </section>
    <section id="news">
      <div class="base_width">
        <h1 class="sct_title f_mincho">お知らせ</h1>
        <div class="second_width">
          <ol>
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
            $page_list = get_posts('numberposts=-1&order=DESC&post_type=news');
            $counter = 0;
            foreach ($page_list as $page_item) {
            ?>
            <li>
              <div class="news_title">
                <div class="date"><?php echo get_the_date('Y/m/d', $page_item->ID); ?></div>
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
              <a href="/news#news_<?php echo $page_item->ID; ?>">
                <div class="atc"><?php echo get_the_title($page_item->ID); ?></div>
              </a>
            </li>
            <?php
              $counter++;
              if ($counter >= 6) {
                break;                // トップページには6つまで表示
              }
            }
            ?>
          </ol>
          <a href="/news/">
            <div class="main_btn">
              お知らせ一覧へ
            </div>
          </a>
        </div>
      </div>
    </section>
    <section id="plan">
      <div class="base_width">
        <h1 class="sct_title f_mincho">中央福祉葬祭の<span class="inline_block">葬儀プラン</span></h1>
        <div class="plan_normal">
          <h2 class="f_mincho">ゆっくりとお見送りができる<span class="inline_block">家族葬・一般葬プラン</span></h2>
          <div class="plan_ctn">
            <a href="/plan/#ichinichiso">
              <div class="plan_itm js-animation">
                <h3><span>一日葬</span>プラン</h3>
                <div class="plan_itm_b">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/plan_ichinichiso.jpg" alt="一日葬プラン">
                  <h4>会員価格</h4>
                  <p class="members_price f_mincho">198,000<span class="f_small">円～</span></p>
                  <p class="members_price_tax f_mincho">税込217,800円～</p>
                  <ol class="plan_flow">
                    <li>通夜</li>
                    <li class="contain">告別式</li>
                    <li class="contain">火葬</li>
                  </ol>
                </div>
              </div>
            </a>
            <a href="/plan/#hanasaidan">
              <div class="plan_itm js-animation">
                <h3><span>一日葬</span>(花祭壇)プラン</h3>
                <div class="plan_itm_b osusume">
                  <img class="osusume_icon" src="<?php echo get_template_directory_uri(); ?>/img/osusume.png" alt="おすすめプラン">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/plan_hanasaidan.jpg" alt="一日葬(花祭壇)プラン">
                  <h4>会員価格</h4>
                  <p class="members_price f_mincho">298,000<span class="f_small">円～</span></p>
                  <p class="members_price_tax f_mincho">税込327,800円～</p>
                  <ol class="plan_flow">
                    <li>通夜</li>
                    <li class="contain">告別式</li>
                    <li class="contain">火葬</li>
                  </ol>
                </div>
              </div>
            </a>
            <a href="/plan/#futsukaso">
              <div class="plan_itm js-animation">
                <h3><span>二日葬</span>プラン</h3>
                <div class="plan_itm_b">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/plan_futsukaso.jpg" alt="二日葬プラン">
                  <h4>会員価格</h4>
                  <p class="members_price f_mincho">598,000<span class="f_small">円～</span></p>
                  <p class="members_price_tax f_mincho">税込657,800円～</p>
                  <ol class="plan_flow">
                    <li class="contain">通夜</li>
                    <li class="contain">告別式</li>
                    <li class="contain">火葬</li>
                  </ol>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="plan_lp">
          <h2 class="f_mincho">火葬のみの低価格プラン</h2>
          <p>他社のお見積りをお持ちいただければご相談させていただきます。</p>
          <div class="plan_ctn">
            <a href="/plan/#chokuso">
              <div class="plan_itm js-animation">
                <h3><span>直送おまかせ</span>プラン</h3>
                <div class="plan_itm_b">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/plan_chokuso.jpg" alt="直送おまかせプラン">
                  <h4>会員価格</h4>
                  <p class="members_price f_mincho">79,000<span class="f_small">円～</span></p>
                  <p class="members_price_tax f_mincho">税込86,900円～</p>
                  <ol class="plan_flow">
                    <li>通夜</li>
                    <li>告別式</li>
                    <li class="contain">火葬</li>
                  </ol>
                </div>
              </div>
            </a>
            <a href="/plan/#kasosiki">
              <div class="plan_itm js-animation">
                <h3><span>火葬式</span>プラン</h3>
                <div class="plan_itm_b">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/plan_kasosiki.jpg" alt="火葬式プラン">
                  <h4>会員価格</h4>
                  <p class="members_price f_mincho">154,000<span class="f_small">円～</span></p>
                  <p class="members_price_tax f_mincho">税込169,400円～</p>
                  <ol class="plan_flow">
                    <li>通夜</li>
                    <li>告別式</li>
                    <li class="contain">火葬</li>
                  </ol>
                </div>
              </div>
            </a>
          </div>
          <p class="ayumino f_mincho">あゆみ野農協指定<span>川口市民葬祭事業</span></p>
        </div>
        <div class="second_width">
          <div class="fukushi_bunner_ctn">
            <p>会員入会で<span class="inline_block">ご葬儀費用がお得になります！</span></p>
            <a href="/fukushinokai/">
              <img class="fukushi_bunner pc_tab_only" src="<?php echo get_template_directory_uri(); ?>/img/fukushinokai_bunner.png" alt="「福祉の会」会員募集中">
              <img class="fukushi_bunner sp_only" src="<?php echo get_template_directory_uri(); ?>/img/fukushinokai_bunner_sp.png" alt="「福祉の会」会員募集中">
            </a>
          </div>
        </div>
      </div>
    </section>
    <section id="hall">
      <div class="wrap">
        <ul class="slideshow">
            <li class="content"></li>
            <li class="content"></li>
            <li class="content"></li>
            <li class="content"></li>
            <li class="content"></li>
            <li class="content"></li>
            <li class="content"></li>
            <li class="content"></li>
        </ul>
        <ul class="slideshow">
            <li class="content"></li>
            <li class="content"></li>
            <li class="content"></li>
            <li class="content"></li>
            <li class="content"></li>
            <li class="content"></li>
            <li class="content"></li>
            <li class="content"></li>
        </ul>
      </div>
      <div class="base_width">
        <h1 class="sct_title f_mincho">施設情報</h1>
        <div class="hall_atc">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d36586.212797359636!2d139.71727944195862!3d35.85403251020222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601894fbc1c743ef%3A0x1eb385d5af0dc49e!2z5pyJ6ZmQ5Lya56S-5Lit5aSu56aP56WJ6JGs56Wt!5e0!3m2!1sja!2sjp!4v1711692494638!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="hall_info">
            <h2>中央福祉会館</h2>
            <ul>
              <li>
                <h3>住所：</h3>
                <p>埼玉県川口市西新井宿603-3</p>
              </li>
              <li>
                <h3>電話番号：</h3>
                <p>048-281-3771</p>
              </li>
              <li>
                <h3>設備：</h3>
                <p>
                  式場内イス席30席・全室冷暖房完備・親族控え室・大型駐車場完備・お清め所・住職控え室・シャワー設備<br> 	 
                  霊安室も完備しております。<br>
                  （病院から直接お預かりもできます）
                </p>
              </li>
            </ul>
            <a href="/hall/">
              <div class="main_btn">
                施設・式場を見る
              </div>
            </a>
          </div>
        </div>
        <div class="kuchikomi">
          <?php
            echo do_shortcode('[trustindex no-registration=google]');
          ?>
        </div>
      </div>
    </section>
  </main>
  <?php get_footer(); ?>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  <?php wp_footer(); ?>
</body>