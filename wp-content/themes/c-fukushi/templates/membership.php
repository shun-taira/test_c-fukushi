<?php
/*
Template Name: membership
*/
header('Cache-Control:no-cache');
get_header();
$freedial_number = get_theme_mod('freedial_number');
?>
<?php get_template_part('template-parts/component-header'); ?>
<?php get_template_part('template-parts/header/breadcrumb'); ?>

<section>
  <div class="membership-prepare">
    <div class="prepare-block">
      <div class="prepare-head">
        <h2 class="prepare__h">
          福祉の会について
        </h2>
        <p class="prepare__p">
          中央福祉葬祭では、年会費無料・入会金1,000円のみでご利用いただけるお得な会員制度【福祉の会】をご用意しております。会員様ならびにご家族様は、会員価格にて各種ご葬儀プランをご利用いただけるほか、さまざまな会員特典が受けられます。<br>
          福祉の会へのご入会はいつでも承っておりますので、どうぞお気軽にお問い合わせください。
      </div>
      <div class="prepare-body">
        <div class="prepare-price-wrap">
          <dl class="prepare-price-list">
            <dt class="prepare-price-title">
              入会金
            </dt>
            <dd class="prepare-price-description">
              <span class="size_lg">
                1,000
              </span>
              円
            </dd>
          </dl>
          <dl class="prepare-price-list">
            <dt class="prepare-price-title">
              月会費
            </dt>
            <dd class="prepare-price-description">
              <span class="color_dark">
                無料
              </span>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="membership-service">
    <div class="service-block">
      <div class="service-head">
        <h2 class="service__h">
          会員サービス
        </h2>
      </div>
      <div class="service-body">
        <ul class="service-list">
          <!-- item-1 -->
          <li class="service-item">
            <div class="item-wrap">
              <div class="item-content">
                <span class="item-num">01</span>
                <div class="item-title-wrap">
                  <h3 class="item__h">
                    ご葬儀費用<br>各種プラン割引<br><span class="size_lg">55,000</span>円〜
                  </h3>
                </div>
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/membership-service1.png" class="item__img">
                </div>
              </div>
            </div>
          </li>
          <!-- item-2 -->
          <li class="service-item">
            <div class="item-wrap">
              <div class="item-content">
                <span class="item-num">02</span>
                <div class="item-title-wrap">
                  <h3 class="item__h">
                    式場利用料<br><span class="size_lg">55,000</span>円割引
                  </h3>
                </div>
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/membership-service2.png" class="item__img">
                </div>
              </div>
            </div>
          </li>
          <!-- item-3 -->
          <li class="service-item">
            <div class="item-wrap">
              <div class="item-content">
                <span class="item-num">03</span>
                <div class="item-title-wrap">
                  <h3 class="item__h">
                    仏壇仏具<br>会員割引<span class="size_lg">10</span>%～
                  </h3>
                </div>
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/membership-service3.png" class="item__img">
                </div>
              </div>
            </div>
          </li>
          <!-- item-4 -->
          <li class="service-item">
            <div class="item-wrap">
              <div class="item-content">
                <span class="item-num">04</span>
                <div class="item-title-wrap">
                  <h3 class="item__h">
                    会員の<br>ご家族の方なら<br><span class="size_primary">どなたでも利用可能</span>
                  </h3>
                </div>
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/membership-service4.png" class="item__img">
                </div>
              </div>
            </div>
          </li>
          <!-- item-5 -->
          <li class="service-item">
            <div class="item-wrap">
              <div class="item-content">
                <span class="item-num">05</span>
                <div class="item-title-wrap">
                  <h3 class="item__h">
                    会員ならではの<br class="display_sp">ご葬儀後の<br><span class="size_primary">アフターケア</span>が充実
                  </h3>
                </div>
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/membership-service5.png" class="item__img">
                </div>
              </div>
            </div>
          </li>
          <!-- item-6 -->
          <li class="service-item">
            <div class="item-wrap">
              <div class="item-content">
                <span class="item-num">06</span>
                <div class="item-title-wrap">
                  <h3 class="item__h">
                    <span class="size_primary">永久会員</span><br>として<br class="display_sp">ご利用いただけます
                  </h3>
                </div>
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/membership-service6.png" class="item__img">
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="membership-form">
    <div class="form-block">
      <div class="form-head">
        <h2 class="form__h">
          福祉の会ご入会
        </h2>
        <p class="form__p">
          福祉の会への入会は随時受け付けております。当方にて確認後、一週間程度で会員証を郵送いたします。
        </p>
      </div>
      <div class="form-body">
        <div class="form-wrap">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
</section>

<section>
  <div class="membership-line">
    <div class="line-block">
      <?php get_template_part('template-parts/component-line'); ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>