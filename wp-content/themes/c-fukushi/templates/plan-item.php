<?php
/*
Template Name: plan-item
*/

get_header();
// 固定ページ、homeのページIDを取得
$home_id = get_option('page_on_front');
$selected_posts = get_field('select_plan', $home_id);
$this_page_id = get_the_ID();
$this_color_set = "color_" . get_field('plan_color');
$plan_encourage = get_field('plan_encourage');
?>

<?php get_template_part('template-parts/header/breadcrumb'); ?>

<nav class="<?php echo $this_color_set; ?>">
  <?php
  if (is_array($selected_posts) && !empty($selected_posts)) {
  ?>
    <div class="plan-tab">
      <div class="plan-tab-block js-scrollable">
        <ul class="plan-tab-list">
          <?php
          foreach ($selected_posts as $selected_post) {
            $set_active = '';
            if ($selected_post == $this_page_id) {
              $set_active = 'active';
            }
          ?>
            <li class="plan-tab-item <?php echo $set_active; ?>"><a class="tab__link" href="<?php echo get_the_permalink($selected_post); ?>"><?php echo get_the_title($selected_post); ?></a></li>
          <?php
          }
          ?>
        </ul>
      </div>
    </div>
  <?php
  }
  ?>
</nav>

<section>
  <div class="plan">
    <div class="plan-block">
      <div class="plan-info <?php echo $this_color_set; ?> <?php echo $plan_encourage[0]; ?>">
        <div class="plan-info-left">
          <div class="plan-info-text-wrap">
            <div class="plan-info-text">
              <span class="info-cap"><?php the_field('plan_description'); ?></span>
              <span class="info-add">川口市・蕨市の</span>
              <h2 class="info__h"><?php the_title() ?></h2>
            </div>
          </div>
          <div class="plan-info-price-wrap">
            <div class="plan-info-price">
              <div class="item-price">
                <p class="item-price-general">
                  <span class="size_lg">
                    <span class="item-price-cap">会員価格</span>
                    <?php echo number_format(get_field('plan_members_price')); ?>
                  </span>
                  <span class="type_unit">
                    <span class="type_unit-tax">（税別）</span>円
                  </span>
                </p>
                <p class="item-price-general-tax">
                  （税込価格<span class="size_lg">
                    <?php echo number_format(get_field('plan_members_tax_price')); ?></span>
                  円）
                </p>
              </div>
            </div>
          </div>
          <div class="item-info">
            <div class="item-info-type">
              <?php
              $plan_type_choices = get_field_object('plan_type_detail')['choices'];
              $selected_plan_types = (array) get_field('plan_type_detail');
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
        <div class="plan-info-right ">
          <div class="info-img-wrap">
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail('medium', array('class' => 'info__img'));
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="plan-layout-change-wrap">

  <section>
    <div class="plan-display">
      <div class="display-block">
        <p class="display__p">
          <span class="display-text-1">
            中央福祉葬祭の会員制度
          </span>
          <span class="display-text-2">
            【福祉の会】ご入会で葬儀料金
          </span>
          <span class="display-text-3">
            <span class="color_red"><span class="size_lg">5.5</span>万円</span>
            割引
          </span>
        </p>
      </div>
    </div>
  </section>

  <section>
    <div class="plan-ban-member">
      <div class="member-block">
        <?php get_template_part('template-parts/component-banner-member'); ?>
      </div>
    </div>
  </section>

</div>
<section>
  <div class="plan-select">
    <div class="select-block">
      <div class="select-wrap">
        <div class="select-head">
          <h2 class="select__h">
            <span class="color_blue"><?php the_title(); ?></span>
            は<br class="display_sp">このような方に選ばれています
          </h2>
        </div>
        <div class="select-body">
          <?php
          if (have_rows('plan_select')) {
          ?>
            <ul class="select-list">
              <?php
              while (have_rows('plan_select')) {
                the_row();
                $plan_select_img_id = get_sub_field('plan_select_icon');
                $plan_select_title = get_sub_field('plan_select_text');
              ?>
                <li class="select-item">
                  <div class="item-block">
                    <div class="item-img-wrap">
                      <div class="item-img-inner">
                        <?php
                        echo wp_get_attachment_image($plan_select_img_id, 'medium', false, array('class' => 'item__img'));
                        ?>
                      </div>
                    </div>
                    <p class="item__p"><?php echo $plan_select_title; ?></p>
                  </div>
                </li>
              <?php
              }
              ?>
            </ul>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="plan-items">
    <div class="items-block">
      <div class="items-wrap">
        <div class="items-head">
          <h2 class="items__h"><span class="color_blue"><?php the_title(); ?></span>
            に含まれるもの</h2>
        </div>
        <div class="items-body">
          <?php
          $tag_items = get_field('plan_tag_item');
          if (isset($tag_items) && count($tag_items) != 0) {
          ?>
            <ul class="items-list">
              <?php
              foreach ($tag_items as $tag_item) {
                $term = get_term($tag_item, 'tag-plan-item');
                $term_name = $term->name;
                $term_description = $term->description;
                $term_img_id = get_field('tag_plan_img', $term);
                $term_img_url = wp_get_attachment_image_src($term_img_id, 'thumbnail')[0];
              ?>
                <li class="items-item">
                  <div class="items-content">
                    <img src="<?php echo $term_img_url; ?>" class="items__img">
                    <span class="items__span">
                      <?php echo replace_space_to_br($term_name); ?>
                    </span>
                  </div>
                </li>
              <?php
              }
              ?>
            </ul>
          <?php } else { ?>
            <p class="items-none">このプランに含まれるものはありません。</p>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="plan-ban-tel">
    <div class="tel-block">
      <?php get_template_part('template-parts/component-banner-tel'); ?>
    </div>
  </div>
</section>

<section>
  <div class="plan-list">
    <div class="list-block">
      <?php get_template_part('template-parts/component-list'); ?>
    </div>
  </div>
</section>

<section>
  <div class="plan-hall">
    <div class="hall-block">
      <?php get_template_part('template-parts/component-hall'); ?>
    </div>
  </div>
</section>

<section>
  <div class="plan-relation">
    <div class="relation-block">
      <?php get_template_part('template-parts/component-relation'); ?>
    </div>
  </div>
</section>

<section>
  <div class="plan-plan">
    <div class="plan-block">
      <?php get_template_part('template-parts/component-plan'); ?>
    </div>
  </div>
</section>

<section>
  <div class="plan-meo">
    <div class="meo-block">
      <?php get_template_part('template-parts/component-meo'); ?>
    </div>
  </div>
</section>

<section>
  <div class="plan-consult">
    <div class="consult-block">
      <?php get_template_part('template-parts/component-consult'); ?>
    </div>
  </div>
</section>

<section>
  <div class="plan-line">
    <div class="line-block">
      <?php get_template_part('template-parts/component-line'); ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>