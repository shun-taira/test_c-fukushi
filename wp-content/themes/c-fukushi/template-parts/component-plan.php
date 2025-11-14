<section>
  <div class="component-plan">
    <div class="plan-head">
      <h1 class="plan__h">家族葬の中央福祉葬祭<span class="size_lg"> <br class="display_sp">安心の葬儀プラン一覧</span></h1>
      <p class="plan__p">ゆっくりとお見送りができる<br class="display_sp">家族葬・一般葬プラン</p>
    </div>
    <div class="plan-body">
      <?php
      // 固定ページ、homeのページIDを取得
      $home_id = get_option('page_on_front');
      $selected_posts = get_field('select_plan', $home_id);

      if (is_array($selected_posts) && !empty($selected_posts)) {
        $selected_pages = $selected_posts;
      } else {
        $selected_pages = -1;
      }
      $args = array(
        'post_type' => 'page',
        'post__in' => $selected_pages,
        'orderby' => 'post__in',
      );
      $query = new WP_Query($args);
      if ($query->have_posts()) {
      ?>
        <div id="top-plan-swiper" class="plan-swiper swiper-container">
          <ul class="plan-list swiper-wrapper">
            <?php while ($query->have_posts()) {
              $query->the_post();
              $color_set = "color_" . get_field('plan_color');
              $plan_encourage = get_field('plan_encourage');
              if ($query->current_post == 3) {
            ?>
                <li class="plan-item-title display_pc">安心価格 火葬のみの低価格プラン
                </li>
              <?php } ?>
              <li class="plan-item swiper-slide <?php echo $color_set; ?> <?php
// $plan_encourage が配列であり、かつ要素を持っているかを確認する
if ( ! empty( $plan_encourage ) && is_array( $plan_encourage ) ) {
    // データがある場合のみ出力する
    echo $plan_encourage[0];
}
?>">
                <div class="plan-item-block">
                  <p class="item-caption"><?php the_field('plan_description'); ?></p>
                  <h2 class="item-title"><span class="size_sm">川口市・蕨市 </span><?php the_title(); ?></h2>
                  <div class="item-img-wrap">
                    <a href="<?php the_permalink(); ?>" class="item-link">
                      <?php
                      if (has_post_thumbnail()) {
                        the_post_thumbnail('medium', array('class' => 'item__img'));
                      }
                      ?>
                    </a>
                  </div>
                  <div class="item-price">
                    <p class="item-price-general">
                      <span class="size_lg">
                        <span class="add_cap">会員価格</span>
                        <?php echo number_format(get_field('plan_members_price')); ?>
                      </span>
                      <span class="type_unit">
                        <span class="type_unit-tax">（税別）</span>円
                      </span>
                    </p>
                    <p class="item-price-general-tax">
                      （税込 <span class="size_lg">
                        <?php echo number_format(get_field('plan_members_tax_price')); ?></span>
                      円）
                    </p>
                  </div>
                  <div class="item-info">
                    <div class="item-info-type">
                      <?php
                      $plan_type_choices = get_field_object('plan_type')['choices'];
                      $selected_plan_types = (array) get_field('plan_type');
                      if (!empty($plan_type_choices)) {
                        echo '<ul class="item-info-type-list">';
                        foreach ($plan_type_choices as $value => $label) {
                          $class = (in_array($value, $selected_plan_types)) ? 'item-selected' : '';
                          echo '<li class="item-info-type-item ' . $class . '">' . $label . '</li>';
                        }
                        echo '</ul>';
                      }
                      ?>
                    </div>
                  </div>
                </div>
              </li>
            <?php } ?>
          </ul>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      <?php
        wp_reset_postdata();
      } else {
        echo '<p>プランがありません。</p>';
      }
      ?>
    </div>
  </div>
</section>