<?php

/*
Template Name: home
*/

get_header();
?>

<main id="primary" class="site-main">

  <section>
    <div class="hero">
      <div class="wrap-hero">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner">

            <div class="carousel-item active">
              <img src="<?php echo get_template_directory_uri(); ?>/images/pc/mv01.jpg" alt="" class="d-none d-sm-block w-100 hero-carousel__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/sp/mv01.jpg" alt="" class="d-block d-sm-none w-100 hero-carousel__img">
            </div>
            <div class="carousel-item">
              <img src="<?php echo get_template_directory_uri(); ?>/images/pc/mv02.jpg" alt="" class="d-none d-sm-block w-100 hero-carousel__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/sp/mv02.jpg" alt="" class="d-block d-sm-none w-100 hero-carousel__img">
            </div>
            <?php /*
						<div class="carousel-item">
							<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/04/AdobeStock_164113958-1536x1017.jpeg" alt="" class="d-block w-100 hero-carousel__img">
							<div class="carousel-caption">
								<h1 class="h1 hero__h text-center">
									安らかな旅立ちを<br>真心こめてサポート<br class="d-block d-md-none">いたします。
								</h1>
								<div class="card d-inline-block border-0">
									<div class="card-body hero-body">
										<p class="hero__p h5 text-center m-0">
											ご家族の「その時」に寄り添い、<br>24時間・年中無休で対応いたします。
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<img src="<?php echo site_url(); ?>/wp-content/uploads/2022/04/AdobeStock_164113958-1536x1017.jpeg" alt="" class="d-block w-100 hero-carousel__img">
							<div class="carousel-caption">
								<h1 class="h1 hero__h text-center">
									安らかな旅立ちを<br>真心こめてサポート<br class="d-block d-md-none">いたします。
								</h1>
								<div class="card d-inline-block border-0">
									<div class="card-body hero-body">
										<p class="hero__p h5 text-center m-0">
											ご家族の「その時」に寄り添い、<br>24時間・年中無休で対応いたします。
										</p>
									</div>
								</div>
							</div>
						</div>
            */ ?>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>
      </div>
  </section>

  <section>
    <div class="help">
      <div class="wrap-help py-16 pt-md-30 pt-lg-50 container-fluid">
        <div class="help-content jumbotron jumbotron-fluid">
          <div class="container text-center">
            <h1 class="h3 help__h text-center mb-10 mb-md-14">
              お葬式をもっと自由に
            </h1>
            <p class="h6 font-weight-bold help__p text-left text-md-center mb-20">
              形式にとらわれない希望通りのご葬儀を実現いたします。<br class="d-none d-md-block">
              価格を抑えた直葬プランから火葬式、家族葬など宗教宗派問わず承ります。<br class="d-none d-md-block">
              ご安置料無料、式場使用料無料などお得な特典もご用意しております。<br class="d-none d-md-block">
              1日1件貸切なので気兼ねなくゆっくりとお別れをして頂けます。<br class="d-none d-md-block">
              また、バリアフリー設計でご高齢のご親族様も安心です。<br class="d-none d-md-block">
              『ペット同伴でご葬儀可能』
            </p>
            <div class="card d-inline-block border-primary">
              <div class="card-body text-center">
                <h2 class="card-title text-center h6">
                  ご葬儀に関するご依頼・<br class="d-block d-md-none">お見積もり・ご相談はこちらから
                </h2>
                <!-- <p class="card-text text-center">
									生前のご相談、お急ぎの相談など<br>各サービスについても<br>お気軽にお問い合わせください。
								</p> -->
                <?php
                $freedial_number = get_theme_mod('freedial_number');
                ?>
                <div class="help-tel d-inline-block">
                  <a href="tel:<?php echo $freedial_number ? $freedial_number : ''; ?>" class="d-inline-block">
                    <p class="mb-0 site-nav-tel__p mb-4 text-center">
                      24時間365日受付 / 携帯からもOK
                    </p>
                    <div class="d-flex align-items-center justify-content-center">
                      <span class="mr-4">
                        <img class="img-fluid site-nav-tel__icon-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/header/ico_tel.svg">
                      </span>
                      <span itemprop="telephone" class="site-nav-tel__number">
                        <?php echo $freedial_number ? $freedial_number : ''; ?>
                      </span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="plan">
      <div class="wrap-plan container-fluid py-16 py-md-30 py-lg-50">
        <h1 class="h3 plan__h text-center mb-16 mb-md-30">
          葬儀プラン一覧
        </h1>
        <div class="row justify-content-center">
          <div class="col-24 col-lg-11 mb-10 mb-lg-20">
            <div class="card plan-content rounded-0 border-primary">
              <a class="d-block" href="<?php echo home_url(); ?>/plan/#kiku">
                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ph_kiku.jpg" class="img-fluid plan__img w-100">
              </a>
              <div class="card-body">
                <h2 class="h2 card-title text-center">
                  直葬プラン 菊
                </h2>
                <p class="font-weight-bold text-center">
                  1～5名程度におすすめ<br>費用88,000円（税込）
                </p>
                <h3 class="h5 text-center card-title-sub font-weight-bold">
                  式をせずに費用を最小限に
                </h3>
                <p class="card-text">
                  直葬とは式を行わず、火葬日に火葬場に集合して火葬を行うことを言います。<br>
                  ご搬送→ご安置→ご出棺→ご火葬
                  <br>
                  ・火葬場料金は火葬場にてご精算となります。<br>
                  ・ご出棺当日までご面会いただけません。<br>
                  ・火葬場集合となるためご出棺時のお立合いはできません。
                </p>
                <a href="<?php echo home_url(); ?>/plan/#kiku" class="btn btn-primary d-block">
                  詳しくみる
                </a>
              </div>
            </div>
          </div>
          <div class="col-24 col-lg-11 mb-10 mb-lg-20">
            <div class="card plan-content rounded-0 border-primary">
              <a class="d-block" href="<?php echo home_url(); ?>/plan/#ume">
                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ph_ume.jpg" class="img-fluid plan__img w-100">
              </a>
              <div class="card-body">
                <h2 class="h2 card-title text-center">
                  火葬式プラン 梅
                </h2>
                <p class="font-weight-bold text-center">
                  1～10名程度におすすめ<br>費用220,000円（税込）
                </p>
                <h3 class="h5 font-weight-bold text-center">
                  式をせずお別れを
                </h3>
                <p class="card-text">
                  火葬式とはホールでゆっくりお別れをして、ご納棺式・お焼香・お花入れなどを行い送り出す儀式のことを言います。<br>
                  ご搬送→ご安置→お別れ→ご出棺→ご火葬
                  <br>
                  ・火葬場料金は火葬場にてご精算となります。<br>
                  ・納棺式料金はコースに含まれておりません。
                </p>
                <a href="<?php echo home_url(); ?>/plan/#ume" class="btn btn-primary d-block">
                  詳しくみる
                </a>
              </div>
            </div>
          </div>
          <div class="col-24 col-lg-11 mb-10 mb-lg-20">
            <div class="card plan-content rounded-0 border-primary">
              <a class="d-block" href="<?php echo home_url(); ?>/plan/#tsubaki">
                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ph_tsubaki.jpg" class="img-fluid plan__img w-100">
              </a>
              <div class="card-body">
                <h2 class="h2 card-title text-center">
                  1日葬プラン 椿
                </h2>
                <p class="font-weight-bold text-center">
                  5名程度～におすすめ<br>費用462,000円（税込）
                </p>
                <h3 class="h5 font-weight-bold text-center">
                  お通夜をせず告別式のみを一日で
                </h3>
                <p class="card-text">
                  1日葬とはお通夜を行わず1日で行う葬儀・告別式のことを言います。
                  また通例として故人を偲んで行う精進落としまでのことを言います。<br>
                  ご搬送→ご安置→納棺式→告別式→お別れ→ご出棺→ご火葬
                  <br>
                  ・火葬場料金は火葬場にてご精算となります。
                </p>
                <a href="<?php echo home_url(); ?>/plan/#tsubaki" class="btn btn-primary d-block">
                  詳しくみる
                </a>
              </div>
            </div>
          </div>
          <div class="col-24 col-lg-11 mb-10 mb-lg-20">
            <div class="card plan-content rounded-0 border-primary">
              <a class="d-block" href="<?php echo home_url(); ?>/plan/#sakura">
                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ph_sakura.jpg" class="img-fluid plan__img w-100">
              </a>
              <div class="card-body">
                <h2 class="h2 card-title text-center">
                  2日葬プラン 桜
                </h2>
                <p class="font-weight-bold text-center">
                  10名程度～におすすめ<br>費用605,000円（税込）
                </p>
                <h3 class="h5 font-weight-bold text-center">
                  通夜・告別式を少人数で
                </h3>
                <p class="card-text">
                  2日葬とはお通夜・葬儀・告別式を2日間で行う儀式のことを言います。
                  通夜とは、夜を通して灯をともし、お線香を絶やさず見守ることで魔物を寄せ付けないとも言われております。<br>
                  ご搬送→ご安置→納棺式→お通夜→告別式→お別れ→ご出棺→ご火葬
                  <br>
                  ・火葬場料金は火葬場にてご精算となります。
                </p>
                <a href="<?php echo home_url(); ?>/plan/#sakura" class="btn btn-primary d-block">
                  詳しくみる
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="service">
      <div class="wrap-service container-fluid py-4 py-md-30 mb-md-0 mb-lg-30">
        <h1 class="h3 service__title text-center mb-16 mb-md-30">
          お葬式場のご案内
        </h1>
        <div class="row">
          <div class="col-24 col-lg-12">
            <div class="card text-white rounded-0 service-content">
              <img class="img-fluid service__img w-100" src="<?php echo get_template_directory_uri(); ?>/images/hall/hall-oyama.jpg" class="im-fluid service__img">
              <a href="<?php echo home_url(); ?>/hall/">
                <div class="card-img-overlay">
                  <h2 class="card-title service__h h3">自社式場</h2>
                </div>
              </a>
            </div>
            <?php /*
            <p class="service__p mt-10">
              ○○エリアを中心にお住まいの近くにある式場をご紹介します。
            </p>
          */ ?>
          </div>
          <div class="col-24 col-lg-12">
            <div class="card text-white rounded-0 service-content">
              <img class="img-fluid service__img w-100" src="<?php echo site_url(); ?>/wp-content/uploads/2022/02/pasted-image-0-8.png" alt="" class="im-fluid service__img">
              <a href="<?php echo home_url(); ?>/relation/">
                <div class="card-img-overlay">
                  <h2 class="card-title service__h h3">関連する葬儀場</h2>
                </div>
              </a>
            </div>
            <?php /*
            <p class="service__p mt-10">
              供花・供物ご注文はこちらから。会館にダイレクトオーダーできますのでスピーディーなお届けが可能です。
            </p>
            */ ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="gmb">
      <div class="wrap-gmb pb-24 pb-md-40 pb-lg-50">
        <!-- Reviews_widget -->
        <div id="API_PLACE_REVIEWS" data-place-details='{"place_id":"ChIJlUytxT6PGGAR-JXbPFIm1zQ","fields":"{name%2Crating%2Creviews%2Cuser_ratings_total%2Curl%2Cplace_id}"}'></div>
        <script async src="https://cdn.machikomi.review/place/details.js"></script>
      </div>
    </div>
  </section>

  <section>
    <div class="reasons">
      <div class="wrap-reasons container-fluid py-4 py-md-30 mb-md-0 mb-lg-30">
        <h1 class="h3 reasons__title text-center mb-16 mb-md-30">
          自由なお葬式が選ばれる7つの理由
        </h1>
        <div class="row justify-content-center">
          <div class="col-sm-24 col-md-12 col-lg-6">
            <div class="card-body border border-secondary rounded-sm mb-10  d-flex align-items-center">
              <span class="card-num font-weight-bold h2 pr-6">1.</span>
              <div>
                <h2 class="h5 card-title">
                  明朗会計
                </h2>
              </div>
            </div>
          </div>
          <div class="col-sm-24 col-md-12 col-lg-6">
            <div class="card-body border border-secondary rounded-sm mb-10  d-flex align-items-center">
              <span class="card-num font-weight-bold h2 pr-6">2.</span>
              <div>
                <h2 class="h5 card-title">
                  駅近家族葬式場
                </h2>
              </div>
            </div>
          </div>
          <div class="col-sm-24 col-md-12 col-lg-6">
            <div class="card-body border border-secondary rounded-sm mb-10  d-flex align-items-center">
              <span class="card-num font-weight-bold h2 pr-6">3.</span>
              <div>
                <h2 class="h5 card-title">
                  お得な会員制度
                </h2>
              </div>
            </div>
          </div>
          <div class="col-sm-24 col-md-12 col-lg-6">
            <div class="card-body border border-secondary rounded-sm mb-10  d-flex align-items-center">
              <span class="card-num font-weight-bold h2 pr-6">4.</span>
              <div>
                <h2 class="h5 card-title">
                  安心の安置室<br class="d-none d-md-block">完備
                </h2>
              </div>
            </div>
          </div>
          <div class="col-sm-24 col-md-12 col-lg-6">
            <div class="card-body border border-secondary rounded-sm mb-10  d-flex align-items-center">
              <span class="card-num font-weight-bold h2 pr-6">5.</span>
              <div>
                <h2 class="h5 card-title">
                  厚生労働省認定
                </h2>
                <p class="card-text">葬祭ディレクター、技能審査認定者が在籍</p>
              </div>
            </div>
          </div>
          <div class="col-sm-24 col-md-12 col-lg-6">
            <div class="card-body border border-secondary rounded-sm mb-10  d-flex align-items-center">
              <span class="card-num font-weight-bold h2 pr-6">6.</span>
              <div>
                <h2 class="h5 card-title">
                  事前相談可能<br>お客様相談室<br class="d-none d-md-block">設置
                </h2>
              </div>
            </div>
          </div>
          <div class="col-sm-24 col-md-12 col-lg-6">
            <div class="card-body border border-secondary rounded-sm mb-10  d-flex align-items-center">
              <span class="card-num font-weight-bold h2 pr-6">7.</span>
              <div>
                <h2 class="h5 card-title">
                  夜通し付き添い可
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section>
    <div class="blog">
      <div class="wrap-blog container-fluid py-30 py-md-30 mb-lg-30">
        <h1 class="h3 blog__title text-center mb-16 mb-md-30">
          葬儀コラム
        </h1>
        <div class="row">
          <?php
          $sticky = get_option('sticky_posts');
          if ($sticky) {
            $sticky_args = array(
              'post_type' => 'post',
              'posts_per_page' => 4, // 先頭固定表示も含めて4つに制限
              'orderby' => 'date',
              'order' => 'DESC',
              'post__in' => $sticky,
              'ignore_sticky_posts' => 1
            );
            $sticky_query = new WP_Query($sticky_args);
          }
          // 通常の投稿を取得
          $non_sticky_args = array(
            'post_type' => 'post',
            'posts_per_page' => 4 - $sticky_query->post_count, // 残りの数を取得
            'orderby' => 'date',
            'order' => 'DESC',
            'post__not_in' => $sticky,
            'ignore_sticky_posts' => 1
          );
          $non_sticky_query = new WP_Query($non_sticky_args);

          // 先頭固定表示の投稿を表示
          if ($sticky && $sticky_query->have_posts()) :
            while ($sticky_query->have_posts()) : $sticky_query->the_post();
          ?>
              <div class="col-24 col-md-12">
                <div class="card mb-4 border-0">
                  <div class="card-body">
                    <a class="card-link" href="<?php the_permalink(); ?>">
                      <?php
                      if (has_post_thumbnail()) {
                        the_post_thumbnail('medium', array('class' => 'card-img img-fluid'));
                      } else {
                        echo '<img src="' . get_template_directory_uri() . '/images/no-image.png" class="card-img img-fluid" alt="">';
                      }
                      ?>
                    </a>
                    <h2 class="h5 mt-10 card-title"><?php the_title(); ?></h2>
                    <div class="card-meta">
                      <time class="card-meta__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                      <span class="card-meta__category">
                        <?php
                        //  投稿のカテゴリーを取得してリンクで表示
                        $categories = get_the_category();
                        //  ループで表示
                        foreach ($categories as $category) {
                          echo '<a class="mr-4 mb-2 btn btn-sm btn-outline-primary" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                        }
                        ?>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            <?php
            endwhile;
          endif;

          if ($non_sticky_query->have_posts()) :
            ?>
            <?php
            while ($non_sticky_query->have_posts()) : $non_sticky_query->the_post();
              //  先頭固定表示がある場合は表
            ?>
              <div class="col-24 col-md-12">
                <div class="card mb-4 border-0">
                  <div class="card-body">
                    <a class="card-link" href="<?php the_permalink(); ?>">
                      <?php
                      if (has_post_thumbnail()) {
                        the_post_thumbnail('medium', array('class' => 'card-img img-fluid'));
                      } else {
                        echo '<img src="' . get_template_directory_uri() . '/images/no-image.png" class="card-img img-fluid" alt="">';
                      }
                      ?>
                    </a>
                    <h2 class="h5 mt-10 card-title"><?php the_title(); ?></h2>
                    <div class="card-meta">
                      <time class="card-meta__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                      <span class="card-meta__category">
                        <?php
                        //  投稿のカテゴリーを取得してリンクで表示
                        $categories = get_the_category();
                        //  ループで表示
                        foreach ($categories as $category) {
                          echo '<a class="mr-4 mb-2 btn btn-sm btn-outline-primary" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                        }
                        ?>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            <?php
            endwhile;
            ?>
          <?php
          endif;
          wp_reset_postdata();
          ?>
        </div>
        <a href="<?php echo home_url(); ?>/blog/column/" class="mt-20 btn btn-lg btn-primary mx-auto w-75 d-block">葬儀コラムをもっと見る</a>
      </div>
    </div>
  </section>
</main><!-- #main -->

<?php
get_footer();
