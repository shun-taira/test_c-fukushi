<?php

/*
Template Name: flow
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
    <div class="flow-sougi">
      <div class="wrap-flow-sougi container-fluid pt-14 pt-md-30">
        <h1 class="h5 flow-sougi__h mb-20 mb-md-30 py-4 px-8 rounded">
          <i class="bi bi-flower3"></i>
          ご逝去
        </h1>
        <dl class="flow-sougi-list row">
          <dt class="col-24 col-lg-6">
            <div class="flow-sougi__dt py-4 px-10 h6">
              ご逝去
              <i class="flow-sougi-ya bi bi-caret-down-fill d-none d-lg-block"></i>
            </div>
          </dt>
          <dd class="col-24 col-lg-18 flow-sougi__dd mb-36 mb-lg-20 mt-6">
            <p class="m-0">
              大切な人とのお別れは突然訪れるものです。<br>
              大変お辛いと思いますが、同時にお葬式の準備も始めなければなりません。<br>
              少し落ち着きましたら、お電話ください。
            </p>
            <div class="bs-callout bs-callout-danger">
              <span class="font-weight-bold">遺族が行うこと</span><br>
              <ul>
                <li>親しい親族や親しい人へ逝去の連絡をする</li>
                <li>死亡診断書を医師に書いてもらう</li>
                <li>故人さまのご安置場所（搬送先）を決める</li>
              </ul>
            </div>
            <i class="flow-sougi-ya bi bi-caret-down-fill d-block d-lg-none"></i>
          </dd>
          <dt class="col-24 col-lg-6">
            <div class="flow-sougi__dt py-4 px-10 h6">
              ご安置
              <i class="flow-sougi-ya bi bi-caret-down-fill d-none d-lg-block"></i>
            </div>
          </dt>
          <dd class="col-24 col-lg-18 flow-sougi__dd mb-36 mb-lg-20 mt-6">
            <p class="m-0">
              院などでお亡くなりになられた場合、
              お葬式までの間、ご遺体をすぐに移動しご安置しなければなりません。<br>
              ご安置場所はご自宅か葬儀場のどちらかが一般的です。
            </p>
            <div class="bs-callout bs-callout-danger">
              <span class="font-weight-bold">遺族が行うこと</span><br>
              <ul>
                <li>喪主や世話役などの役割を決める</li>
                <li>菩提寺※があればお坊さんに連絡し、お葬式のお勤めを依頼する<br>※菩提寺とは、檀家となっている寺院のことです。</li>
              </ul>
            </div>
            <i class="flow-sougi-ya bi bi-caret-down-fill d-block d-lg-none"></i>
          </dd>
        </dl>
      </div>
    </div>
  </section>

  <section>
    <div class="flow-sougi">
      <div class="wrap-flow-sougi container-fluid pt-14 pt-md-30">
        <h1 class="h5 flow-sougi__h mb-20 mb-md-30 py-4 px-8 rounded">
          <i class="bi bi-flower3"></i>
          通夜式
        </h1>
        <dl class="flow-sougi-list row">
          <dt class="col-24 col-lg-6">
            <div class="flow-sougi__dt py-4 px-10 h6">
              お通夜
              <i class="flow-sougi-ya bi bi-caret-down-fill d-none d-lg-block"></i>
            </div>
          </dt>
          <dd class="col-24 col-lg-18 flow-sougi__dd mb-36 mb-lg-20 mt-6">
            <p class="m-0">
              告別式の前日に行う儀式で、家族や親しい人と共に故人さまと過ごす最後の夜となります。<br>
              当社では通常夕方頃から行います。
            </p>
            <div class="bs-callout bs-callout-danger">
              <span class="font-weight-bold">遺族が行うこと</span><br>
              <ul>
                <li>通夜開始の1時間前には会場に到着する</li>
                <li>参列者に対して喪主は御礼を伝える</li>
                <li>弔電・香典の確認を行う</li>
              </ul>
            </div>
            <i class="flow-sougi-ya bi bi-caret-down-fill d-block d-lg-none"></i>
          </dd>
        </dl>
      </div>
    </div>
  </section>

  <section>
    <div class="flow-sougi">
      <div class="wrap-flow-sougi container-fluid pt-14 pt-md-30">
        <h1 class="h5 flow-sougi__h mb-20 mb-md-30 py-4 px-8 rounded">
          <i class="bi bi-flower3"></i>
          葬儀・告別式
        </h1>
        <dl class="flow-sougi-list row">
          <dt class="col-24 col-lg-6">
            <div class="flow-sougi__dt py-4 px-10 h6">
              葬儀・告別式
              <i class="flow-sougi-ya bi bi-caret-down-fill d-none d-lg-block"></i>
            </div>
          </dt>
          <dd class="col-24 col-lg-18 flow-sougi__dd mb-36 mb-lg-20 mt-6">
            <p class="m-0">
              会葬者を迎えて故人さまをみんなで送る儀式で、いわゆる「お葬式」です。<br>
              故人さまと最後のお別れをし、故人さまの周りにお花を添えて棺を閉じご出棺、そのまま火葬場へと向かいます。
            </p>
            <div class="bs-callout bs-callout-danger">
              <span class="font-weight-bold">遺族が行うこと</span><br>
              <ul>
                <li>開式30分前にはご参列の方は会場に到着する</li>
                <li>弔電・香典の確認を行う</li>
              </ul>
            </div>
            <i class="flow-sougi-ya bi bi-caret-down-fill d-block d-lg-none"></i>
          </dd>
          <dt class="col-24 col-lg-6">
            <div class="flow-sougi__dt py-4 px-10 h6">
              火葬
              <i class="flow-sougi-ya bi bi-caret-down-fill d-none d-lg-block"></i>
            </div>
          </dt>
          <dd class="col-24 col-lg-18 flow-sougi__dd mb-36 mb-lg-20 mt-6">
            <p class="m-0">
              火葬場にて火葬を行います。<br>
              通常火葬終了まで1時間程度かかり、その後、故人さまのお骨を骨壺に入れて、葬儀は終了となります。<br>
              骨壺は四十九日法要までの間はご自宅にお持ちいただくことになります。
            </p>
            <div class="bs-callout bs-callout-danger">
              <span class="font-weight-bold">遺族が行うこと</span><br>
              <ul>
                <li>埋葬許可証を受け取り大切に保管する。（納骨の際に必要です）</li>
                <li>精進落し（食事会）を行う（地域や状況により行わない場合もあります）</li>
              </ul>
            </div>
            <i class="flow-sougi-ya bi bi-caret-down-fill d-block d-lg-none"></i>
          </dd>
          <dd class="col-24 flow-sougi__dd-add mb-16 mb-md-34 mt-0">
            <div class="card border-primary">
              <div class="card-body">
                <p class="m-0 text-center font-weight-bold">
                  以上で葬儀は終了となります
                </p>
              </div>
            </div>
          </dd>
        </dl>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/content', 'add-footer'); ?>

</main><!-- #main -->

<?php
get_footer();
