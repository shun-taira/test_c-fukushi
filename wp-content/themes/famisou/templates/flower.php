<?php
/*
Template Name: flower
*/

get_header();
$freedial_number = get_theme_mod('freedial_number');
$file_id = get_field('file_pdf');
if ($file_id) {
  $file_url = wp_get_attachment_url($file_id);
}
?>
<?php get_template_part('template-parts/component-header'); ?>
<?php get_template_part('template-parts/header/breadcrumb'); ?>

<section>
  <div class="flower-display">
    <div class="display-block">
      <div class="display-head">
        <h2 class="display__h">
          生花
        </h2>
        <p class="display__p">
          祭壇の両脇にお飾りする供花になります。<br>板橋区・荒川区の家族葬専門 自由なお葬式では、<br class="display_sp">ご予算に応じて各種取り揃えております。<br>※ 季節や地域によって、お花の内容や大きさが<br class="display_sp">写真と異なる場合がございます。<br class="display_sp">予めご了承くださいませ。
        </p>
      </div>
      <div class="display-body">
        <ul class="display-list">
          <li class="display-item">
            <div class="item-content">
              <div class="item-img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flower15000.jpg" class="item__img">
              </div>
              <div class="item-text-wrap">
                <h3 class="item__h">
                  生花（洋菊）1基
                </h3>
                <p class="item__p">
                  <span class="size_lg">16,500</span>円(税込)
                </p>
              </div>
            </div>
          </li>
          <li class="display-item">
            <div class="item-content">
              <div class="item-img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flower20000.jpg" class="item__img">
              </div>
              <div class="item-text-wrap">
                <h3 class="item__h">
                  生花（洋菊）1基
                </h3>
                <p class="item__p">
                  <span class="size_lg">22,000</span>円(税込)
                </p>
              </div>
            </div>
          </li>
          <li class="display-item">
            <div class="item-content">
              <div class="item-img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flower35000.jpg" class="item__img">
              </div>
              <div class="item-text-wrap">
                <h3 class="item__h">
                  生花（洋花）1基
                </h3>
                <p class="item__p">
                  <span class="size_lg">38,500</span>円(税込)
                </p>
              </div>
            </div>
          </li>
          <li class="display-item">
            <div class="item-content">
              <div class="item-img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flower50000.jpg" class="item__img">
              </div>
              <div class="item-text-wrap">
                <h3 class="item__h">
                  生花（洋花）1基
                </h3>
                <p class="item__p">
                  <span class="size_lg">55,000</span>円(税込)
                </p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="flower-display">
    <div class="display-block">
      <div class="display-head">
        <h2 class="display__h">
          供物
        </h2>
        <p class="display__p">
          祭壇の両脇にお飾りする供物になります。<br>板橋区・荒川区の家族葬専門 自由なお葬式では、<br class="display_sp">ご予算に応じて各種取り揃えております。<br>※ 季節や地域によって、お花の内容や大きさが<br class="display_sp">写真と異なる場合がございます。<br class="display_sp">予めご了承くださいませ。
        </p>
      </div>
      <div class="display-body">
        <ul class="display-list">
          <li class="display-item">
            <div class="item-content">
              <div class="item-img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kumotsu-kudamono-15000.jpg" class="item__img">
              </div>
              <div class="item-text-wrap">
                <h3 class="item__h">
                  供物(果物) 1基
                </h3>
                <p class="item__p">
                  <span class="size_lg">16,500</span>円(税込)
                </p>
              </div>
            </div>
          </li>
          <li class="display-item">
            <div class="item-content">
              <div class="item-img-wrap">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kumotsu-kanzume-15000.jpg" class="item__img">
              </div>
              <div class="item-text-wrap">
                <h3 class="item__h">
                  供物(缶詰) 1基
                </h3>
                <p class="item__p">
                  <span class="size_lg">16,500</span>円(税込)
                </p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="flower-order">
    <div class="order-block">
      <div class="order-head">
        <h2 class="order__h">
          ご注文方法はこちら
        </h2>
        <p class="order__p">
          下記ボタンよりFAX専用の申込み用紙をダウンロードして、必要事項をご記入の上、FAX送信ください。
        </p>
      </div>
      <div class="order-body">
        <div class="order-link-wrap">
          <a href="<?php echo esc_url($file_url); ?>" class="order__link" download="供花発注書.pdf">
            申し込み用紙をダウンロードする
          </a>
        </div>
        <div class="order-tel-wrap">
          <p class="order__tel">
            ご葬儀に関するご依頼・お見積もり・ご相談はこちらから
          </p>
          <span class="order-tel-cap">
            24時間365日受付 / 携帯からもOK
          </span>
          <div class="order__tel-num">
            <a href="tel:<?php echo esc_html($freedial_number); ?>" class="order__tel-link">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-freedial.svg" class="order-tel-freedial">
              <?php echo esc_html($freedial_number); ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="flower-line">
    <div class="line-block">
      <?php get_template_part('template-parts/component-line'); ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>