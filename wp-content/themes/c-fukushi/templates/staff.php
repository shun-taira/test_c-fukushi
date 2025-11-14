<?php
/*
Template Name: staff
*/

get_header();
$ceo_name = get_field('ceo_name');
$ceo_image_id = get_field('ceo_image');
$ceo_title = get_field('ceo_title');
$ceo_comment = get_field('ceo_comment');
?>

<?php get_template_part('template-parts/component-header'); ?>
<?php get_template_part('template-parts/header/breadcrumb'); ?>

<section>
  <div class="staff">
    <div class="staff-block">
      <p class="staff__p">
        お客様1人ひとりのご要望にお応えできるよう、一之江セレモニーホールでは<br class="display_pc">
        <span class="staff__p_red">厚生労働省認定葬祭ディレクター技能審査1級資格</span>を、<br class="display_pc">
        担当スタッフ全員が保有しております。<br class="display_pc">常に葬儀のプロフェッショナルであり続ける事を心掛け、<br class="display_pc">
        最適なご葬儀プランをご提案いたします。
      </p>
      <section>
        <h2 class="staff__h heading_01">
          挨拶
        </h2>
        <div class="staff-ceo-block">
          <div class="staff-ceo-start">
            <?php echo wp_get_attachment_image($ceo_image_id, 'medium', false, array('class' => 'staff-ceo__img')); ?>
          </div>
          <div class="staff-ceo-end">
            <h3 class="staff-ceo__h">
              <?php echo $ceo_title; ?>
            </h3>
            <p class="staff-ceo__p">
              <?php echo $ceo_comment; ?>
            </p>
            <span class="staff-ceo__p-cap"><?php echo $ceo_name; ?></span>
          </div>
        </div>
      </section>
      <section>
        <h2 class="staff-intro__h heading_01">
          スタッフ紹介
        </h2>
        <div id="staff-swiper" class="staffs-block swiper-container">
          <ul class="staff-list swiper-wrapper">
            <?php
            if (have_rows('staff_list')) :
              $member_count = 0;
              while (have_rows('staff_list')) : the_row();
                // スタッフ変数受け取り
                if (get_sub_field('staff_image')) {
                  $staff_image = get_sub_field('staff_image');
                } else {
                  $staff_image = $dammy_image_id;
                }
                $staff_name = get_sub_field('staff_name');
                $staff_qualification = get_sub_field('staff_qualification');
                $staff_comment = get_sub_field('staff_comment');
            ?>
                <li class="staff-item swiper-slide">
                  <div class="staff-content" id="member_<?php echo $member_count; ?>">
                    <div class="content-left">
                      <div class="content-left-block">
                        <img src="<?php echo wp_get_attachment_image_url($staff_image, 'thumbnail'); ?>" alt="<?php echo $staff_name; ?>" class="content__img">
                      </div>
                      <h3 class="content__h"><?php echo $staff_name; ?></h3>
                    </div>
                    <div class="content-right">
                      <p class="content__p"><?php echo $staff_comment; ?></p>
                      <p class="content__p-sub">
                        <span class="content__p-sub_bold">◆保有資格◆</span>
                        <?php echo $staff_qualification; ?>
                      </p>
                    </div>
                  </div>
                </li>
            <?php
                $member_count++;
              endwhile;
            endif;
            ?>
          </ul>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </section>
      <section>
        <h2 class="staff-if__h heading_02">
          もしもの時に備えて
        </h2>
        <p class="staff-if__p">
          大切な方を亡くされたばかりのご遺族様にとって、葬儀の準備は肉体的にも精神的にも大きな負担となります。<br>また葬儀は人生の中で何度も経験するものではないため、多くの方が疑問や不安を感じるのも無理はありません。<br>こうした疑問や不安を「安心」に変えていただくために、一之江セレモニーホールの無料事前相談をご利用ください。
        </p>
        <div class="staff-if-block">
          <span class="staff-if__h-cap">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/staff-if.svg" class="staff-if-cap__img">
          </span>
          <ul class="staff-if-list">
            <li class="staff-if-item">
              <div class="staff-if-item-block block_02">
                <div class="block_02-block">
                  <h3 class="block_02__h">
                    <span class="block_02__h-num">
                      <span class="block_02__h-cap">メリット</span>1
                    </span>
                    葬儀費用が明確になる
                  </h3>
                  <p class="block_02__p">
                    無料事前相談を活用いただくことで、ご希望に沿った葬儀に必要となる金額が明確になるため、葬儀費用の不安が解消されます。しっかりとご希望や予算を伺ったうえで詳細な見積書を作成し、一つひとつの項目について丁寧にご説明させていただいております。
                  </p>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/staff-if-1.jpg" class="block_02__img">
                </div>
              </div>
            </li>
            <li class="staff-if-item">
              <div class="staff-if-item-block block_02">
                <div class="block_02-block">
                  <h3 class="block_02__h">
                    <span class="block_02__h-num">
                      <span class="block_02__h-cap">メリット</span>2
                    </span>
                    式場の雰囲気やスタッフの<br>対応を確認できる
                  </h3>
                  <p class="block_02__p">
                    事前相談で当ホールに足を運んでいただいた際には、各式場をご見学いただけます。写真だけでは伝わりにくい式場の広さや雰囲気を体感することで、実際の葬儀をより具体的にイメージしやすくなります。また事前相談では、葬儀に携わるスタッフがお話を伺いますので、担当者の人柄なども感じていただけるかと存じます。
                  </p>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/staff-if-2.jpg" class="block_02__img">
                </div>
              </div>
            </li>
            <li class="staff-if-item">
              <div class="staff-if-item-block block_02">
                <div class="block_02-block">
                  <h3 class="block_02__h">
                    <span class="block_02__h-num">
                      <span class="block_02__h-cap">メリット</span>3
                    </span>
                    大切な方に相応しい<br>葬儀が実現できる
                  </h3>
                  <p class="block_02__p">
                    ご逝去から通夜・葬儀までの時間は想像以上に少ないため、短い時間で多くのことを決めなければなりません。しかし事前相談では、時間を気にすることなくゆっくりとお話を伺えますので、お客様のご希望に沿ったご葬儀をかたちすることも可能です。また葬儀当日までプランの変更もできますので、大切な方に相応しい葬儀内容をじっくりとご検討いただけます。
                  </p>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/staff-if-3.jpg" class="block_02__img">
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </div>
</section>

<?php
get_footer();
?>