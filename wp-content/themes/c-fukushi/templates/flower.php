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
  <div class="flower-banner">
    <div class="banner-block">
      <div class="banner-head">
        <h2 class="banner__h">
          供花
        </h2>
      </div>
      <div class="banner-body">
        <a class="banner__link" href="https://biz.itowa71.com/95ccc9ab-1397-4853-9a39-72c77a5a7976/order-form/" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flower-btn.png" class="banner__img">
        </a>
      </div>
    </div>
  </div>
</section>

<section>
  <?php
  $flower_categories = get_field('flower_category');

  if ($flower_categories) {
    foreach ($flower_categories as $flower_category) {
      $category_title = $flower_category['flower_category_title'];
      $category_description = $flower_category['flower_category_description'];
  ?>
      <div class="flower-display">
        <div class="display-block">
          <div class="display-head">
            <h2 class="display__h">
              <?php echo $category_title; ?>
            </h2>
            <?php if ($category_description) { ?>
              <p class="display__p">
                <?php echo $category_description; ?>
              </p>
            <?php } ?>
          </div>
          <div class="display-body">
            <ul class="display-list">
              <?php
              $flower_products = $flower_category['flower_product'];

              foreach ($flower_products as $flower_product) {
                $product_image_id = $flower_product['flower_product_image'];
                $product_title = $flower_product['flower_product_title'];
                $product_price = $flower_product['flower_product_price'];
                $formatted_price = number_format($product_price);
                $product_image_url = wp_get_attachment_image_url($product_image_id, 'large');
              ?>
                <li class="display-item">
                  <div class="item-content">
                    <div class="item-img-wrap">
                      <img src="<?php echo esc_url($product_image_url); ?>" class="item__img">
                    </div>
                    <div class="item-text-wrap">
                      <h3 class="item__h">
                        <?php echo $product_title; ?>
                      </h3>
                      <p class="item__p">
                        <span class="size_lg"><?php echo $formatted_price; ?></span>円(税込)
                      </p>
                    </div>
                  </div>
                </li>
              <?php
              }
              ?>
            </ul>
          </div>
        </div>
      </div>
  <?php
    }
  } else {
    echo '<p">商品がありません。</p>';
  }
  ?>
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