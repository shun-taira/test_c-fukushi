<?php
/*
Template Name: contact
*/

get_header();
$freedial_number = get_theme_mod('freedial_number');
?>
<?php get_template_part('template-parts/component-header'); ?>
<?php get_template_part('template-parts/header/breadcrumb'); ?>

<section>
</section>

<section>
  <div class="contact-display">
    <div class="display-block">
      <div class="display-wrap">
        <div class="display-head">
          <span class="display-cap">
            お葬式の相談窓口
          </span>
          <h2 class="display__h">
            自由なお葬式<span class="inline_pc">　</span><br class="display_sp">LINE公式アカウント
          </h2>
        </div>
        <div class="display-body">
          <p class="display__p">
            LINEで簡単！気軽にお葬式、仏事に関することをご相談できます！
          </p>
          <ul class="display-list">
            <li class="display-item"><i class="bi bi-check-square-fill"></i>葬儀の相談をしてみたいけど、電話はかけにくい</li>
            <li class="display-item"><i class="bi bi-check-square-fill"></i>空いた時間に自分のペースで相談したい</li>
            <li class="display-item"><i class="bi bi-check-square-fill"></i>もしもの時に備えて、式場の見学・費用・お葬式の流れを知りたい</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="contact-method">
    <div class="method-block">
      <div class="method-head">
        <h2 class="method__h">
          LINE友達追加方法
        </h2>
        <div class="method-body">
          <div class="method-content">
            <h3 class="method__h-sub">
              ①ボタンから登録
            </h3>
            <p class="method__p">
              このページをスマートフォンにて閲覧している方は、以下のボタンをタップしてください。<br>
              ※あらかじめLINEアプリがインストールされている端末に限ります。
            </p>
            <div class="method__link">
              <a href="https://lin.ee/Cjaz96l" class="link_line-btn" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/line-btn.png" class="line__img-btn">
              </a>
            </div>
          </div>
          <div class="method-content">
            <h3 class="method__h-sub">
              ②QRコードから登録
            </h3>
            <p class="method__p">
              LINEアプリで「その他」→「友だち追加」→「QRコード」を選択し、以下のQRコードを読み取ってください。
            </p>
            <div class="method__link">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/line-qr.png" class="line__img">
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<section>

</section>
<div class="contact-flow">
  <div class="flow-block">
    <div class="flow-head">
      <h2 class="flow__h">
        LINEで葬儀の無料相談のやり方
      </h2>
    </div>
    <div class="flow-body">
      <div class="flow-content">
        <div class="flow-inner">
          <div class="flow-start">
            <div class="flow-img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/line-top.png" class="flow__img">
            </div>
          </div>
          <div class="flow-end">
            <h3 class="flow__h-sub">
              <span class="flow-cap">
                Step
              </span>
              01
            </h3>
            <p class="flow__p">
              上部の「友だち追加はコチラから」のボタンをタップ又はスマホでQRコードを読み取り、表示された画面の「追加」ボタンをタップします。
            </p>
          </div>
        </div>
      </div>
      <div class="flow-content">
        <div class="flow-inner">
          <div class="flow-start">
            <div class="flow-img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/line-chat-2.jpg" class="flow__img">
            </div>
          </div>
          <div class="flow-end">
            <h3 class="flow__h-sub">
              <span class="flow-cap">
                Step
              </span>
              02
            </h3>
            <p class="flow__p">
              トーク画面でファミそうのスタッフに質問や相談などしていただけます。<br>
              お気軽にご入力ください。
            </p>
          </div>
        </div>
      </div>
      <div class="flow-content">
        <div class="flow-inner">
          <div class="flow-start">
            <div class="flow-img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/line-tap.jpg" class="flow__img">
            </div>
          </div>
          <div class="flow-end">
            <h3 class="flow__h-sub">
              <span class="flow-cap">
                Step
              </span>
              03
            </h3>
            <p class="flow__p">
              電話でのお問い合わせやお急ぎの場合は「プロフィール」画面の電話番号をタップしていただくとお電話いただけます。
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section>
  <div class="contact-line">
    <div class="line-block">
      <?php get_template_part('template-parts/component-line'); ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>