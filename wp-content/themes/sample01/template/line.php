<?php

/*
Template Name: line
*/

get_header();
?>

<main id="primary" class="site-main">

  <?php
  while (have_posts()) :
    the_post();

    get_template_part('template-parts/content', 'add-hero');

  endwhile; // End of the loop.
  ?>

  <section>
    <div class="line pb-16 pb-md-30 pb-lg-50">
      <div class="wrap-line container-fluid pt-14 pt-md-30">
        <h1 class="h3 line-title text-center mb-10 mb-md-14">
          LINE公式アカウントを開設しました
        </h1>
        <p class="h6 line__p">
          葬儀に関するお問い合わせをもっと気軽にしていただきたく、<br class="d-none d-md-block">LINE公式アカウントを開設いたしました。<br>
          公式アカウントを「友だち追加」していただけますと、<br class="d-none d-md-block">トークから葬儀に関するご相談やご質問が気軽に送信いただけます。
        </p>
        <div class="row align-items-center justify-content-center">
          <div class="col-24 col-md-8">
            <a class="line__link d-block text-center" href="https://lin.ee/Cjaz96l" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/line/line-qr.png" class="line__img img-fluid">
              <span class="link__cap d-block d-md-none text-center">↑スマホの方はQRをタップ。</span>
            </a>
          </div>
          <p class="col-24 col-md-10 h5 line-add__p font-weight-bold mt-10 mt-md-0">
            こちらのQRコードをスマホで読み取り
            <span class="text-danger">「友達追加」</span>をお願いします！
          </p>
        </div>
        <section>
          <div class="pt-14 pt-md-30">
            <h2 class="h5 line__h mb-20 mb-md-30 py-4 px-8 rounded">
              <i class="bi bi-flower3"></i>
              LINEで葬儀の無料相談のやり方
            </h2>
            <ul class="line-list list-unstyled">
              <li class="line-item">
                <div class="card">
                  <div class="row no-gutters align-items-center">
                    <div class="col-md-8 p-8 text-center">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/line/line-top.png" class="line-list__img img-fluid">
                    </div>
                    <div class="col-md-16 p-8">
                      <div class="card-body">
                        <h3 class="h5 line-list__h font-weight-bold">
                          スマホでQRコードを読み取り、<br class="d-none d-md-block">表示された画面で「追加」ボタンを<br class="d-none d-md-block">タップします。
                        </h3>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="line-item-icon">
                  <i class="bi bi-caret-down-fill"></i>
                </div>
              </li>
              <li class="line-item">
                <div class="card">
                  <div class="row no-gutters align-items-center">
                    <div class="col-md-8 p-8 text-center">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/line/line-chat-2.jpg" class="line-list__img img-fluid">
                    </div>
                    <div class="col-md-16 p-8">
                      <div class="card-body">
                        <h3 class="h5 line-list__h font-weight-bold">
                          トーク画面で<br class="d-none d-md-block">
                          ファミそうのスタッフに<br class="d-none d-md-block">質問や相談などしていただけます。<br class="d-none d-md-block">お気軽にご入力ください。
                        </h3>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="line-item-icon">
                  <i class="bi bi-caret-down-fill"></i>
                </div>
              </li>
              <li class="line-item">
                <div class="card">
                  <div class="row no-gutters align-items-center">
                    <div class="col-md-8 p-8 text-center">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/line/line-friend.jpg" class="line-list__img img-fluid">
                    </div>
                    <div class="col-md-16 p-8">
                      <div class="card-body">
                        <h3 class="h5 line-list__h font-weight-bold">
                          電話でのお問い合わせやお急ぎの場合は<br class="d-none d-md-block">「プロフィール」画面の電話番号を<br class="d-none d-md-block">タップしていただくとお電話いただけます。
                        </h3>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/content', 'add-footer'); ?>

</main><!-- #main -->

<?php
get_footer();
