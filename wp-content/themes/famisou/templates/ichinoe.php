<?php
/*
Template Name: ichinoe
*/

get_header();
?>

<?php get_template_part('template-parts/component-header'); ?>
<?php get_template_part('template-parts/header/breadcrumb'); ?>

<section>
  <div class="ichinoe-header">
    <div class="ichinoe-header-block">
      <h2 class="ichinoe-header__h">
        一之江セレモニーホールのご案内
      </h2>

      <?php get_template_part('template-parts/component-hall-slider'); ?>

      <section>
        <div class="ichinoe-info-block">
          <h3 class="ichinoe-info__h">
            一之江セレモニーホール施設情報
          </h3>
          <div class="ichinoe-info-wrap">
            <div class="ichinoe-info-start">
              <table class="table-info">
                <tr class="table-info-tr">
                  <th>会館名称</th>
                  <td>一之江セレモニーホール</td>
                </tr>
                <tr class="table-info-tr">
                  <th>所在地</th>
                  <td>〒134-0015 東京都江戸川区西瑞江5丁目1−5</td>
                </tr>
                <tr class="table-info-tr">
                  <th>電話番号</th>
                  <td>0120-53-4443</td>
                </tr>
                <tr class="table-info-tr">
                  <th>対応人数</th>
                  <td>数名の家族葬から大規模な社葬まで対応</td>
                </tr>
                <tr class="table-info-tr">
                  <th>駐車場</th>
                  <td>あり（駐車枠番号は受付にてお聞きください。）</td>
                </tr>
                <tr class="table-info-tr">
                  <th>宗教宗派</th>
                  <td>全宗派対応</td>
                </tr>
              </table>
              <table class="table-info table_vertical">
                <tr class="table-info-tr">
                  <th>アクセス</th>
                  <td>
                    <table class="table-info-inner">
                      <tr class="table-info-inner-tr">
                        <th>お電車でのご来館</th>
                        <td>都営地下鉄新宿線「一之江駅」より徒歩5分となります。</td>
                      </tr>
                      <tr class="table-info-inner-tr">
                        <th>バスでのご来館</th>
                        <td>「環七 都立葛西工業高校バス停」前となります。</td>
                      </tr>
                      <tr class="table-info-inner-tr">
                        <th>お車でのご来館</th>
                        <td>一之江セレモニーホールは、環七通りに面しております。</td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
            <div class="ichinoe-info-end">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.803343712133!2d139.87877907675554!3d35.68184397258698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601887bbf38094a9%3A0x8030b837c8495026!2z5LiA5LmL5rGf44K744Os44Oi44OL44O844Ob44O844Or!5e0!3m2!1sja!2sjp!4v1705555822961!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <ul class="ichinoe-info-list">
            <li class="ichinoe-info-item">駐車場あり</li>
            <li class="ichinoe-info-item">好アクセス</li>
            <li class="ichinoe-info-item">親族控室</li>
            <li class="ichinoe-info-item">ご宿泊可能</li>
            <li class="ichinoe-info-item">シャワーあり</li>
            <li class="ichinoe-info-item">ドリンク無料</li>
            <li class="ichinoe-info-item">安置室完備</li>
            <li class="ichinoe-info-item">バリアフリー</li>
          </ul>
      </section>
    </div>
  </div>
</section>

<section>
  <div class="ichinoe-park">
    <div class="ichinoe-park-block">
      <h2 class="ichinoe-park__h heading_01">
        駐車場のご案内
      </h2>
      <div class="ichinoe-park-wrap">
        <div class="ichinoe-park-start">
          <img class="ichinoe-park-text__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/plan-map-text.svg" alt="一之江セレモニーホール周辺 1~17、ローソン裏コインパーキング 12~26にお車を止めてください。">
        </div>
        <div class="ichinoe-park-end js-scrollable">
          <img class="ichinoe-park__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/plan-map.svg" alt="駐車場画像">
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="ichinoe-features">
    <div class="ichinoe-features-block">
      <h2 class="ichinoe-features__h heading_01">
        一之江セレモニーホールの特徴
      </h2>
      <?php get_template_part('template-parts/component-ichinoe'); ?>
    </div>
</section>

<?php get_template_part('template-parts/component-list'); ?>
<?php get_template_part('template-parts/component-plan'); ?>
<?php get_template_part('template-parts/component-voice'); ?>
<?php get_template_part('template-parts/component-banner'); ?>
<?php get_template_part('template-parts/component-staff'); ?>

<?php
get_footer();
?>