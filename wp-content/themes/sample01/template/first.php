<?php

/*
Template Name: first
*/

get_header();
?>

<main id="primary" class="site-main">

  <?php
  while (have_posts()) :
    the_post();

    get_template_part('template-parts/content', 'add-hero');

  ?>
    <section>
      <div class="wrap-first container-fluid py-16 py-md-30 py-lg-50">
        <h1 class="h3 first-title text-center mb-10 mb-md-14">
          事前のご準備
        </h1>
        <section>
          <div class="first">
            <div class="wrap-first pt-14 pt-md-30">
              <h1 class="h5 first__h mb-20 mb-md-30 py-4 px-8 rounded">
                <i class="bi bi-flower3"></i>
                事前のご準備
              </h1>
              <div class="first-media media mt-30">
                <span class="media-img-wrap  mr-8">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/first/ico_pre01.svg" class="media-img img-fluid">
                </span>
                <div class="media-body">
                  <h2 class="h4 mt-0">参列者数の確認</h2>
                  <p>お通夜だけの方・お葬式だけの方など、だいたいの人数を事前に確認をしておくところから始めます。</p>
                </div>
              </div>
              <div class="first-media media mt-30">
                <span class="media-img-wrap  mr-8">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/first/ico_pre02.svg" class="media-img img-fluid">
                </span>
                <div class="media-body">
                  <h2 class="h4 mt-0">葬儀の内容</h2>
                  <p>希望に沿った葬儀を行うために、本人や喪主、親戚の方たちの意見も踏まえて検討しましょう。</p>
                </div>
              </div>
              <div class="first-media media mt-30">
                <span class="media-img-wrap  mr-8">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/first/ico_pre03.svg" class="media-img img-fluid">
                </span>
                <div class="media-body">
                  <h2 class="h4 mt-0">宗派の確認</h2>
                  <p>宗派によっては葬儀の際にご用意する物品や葬儀作法が異なります。</p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="wrap-first container-fluid pb-16 pb-md-30 pb-lg-50">
        <h1 class="h3 first-title text-center mb-10 mb-md-14">
          葬儀の流れ
        </h1>
        <section>
          <div class="flow-sougi">
            <div class="wrap-flow-sougi pt-14 pt-md-30">
              <h1 class="h5 flow-sougi__h mb-20 mb-md-30 py-4 px-8 rounded">
                <i class="bi bi-flower3"></i>
                ご逝去
              </h1>
              <dl class="flow-sougi-list row">
                <dt class="col-24 col-md-6">
                  <div class="flow-sougi__dt py-4 px-10 h6">
                    ご逝去
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/first/ph01.jpg" class="img-fluid flow-sougi__img d-block mx-auto">
                  <i class="flow-sougi-ya bi bi-caret-down-fill d-none d-md-block"></i>
                </dt>
                <dd class="col-24 col-md-18 flow-sougi__dd mb-0 mb-lg-20 mt-6 mt-md-0">
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
                  <i class="flow-sougi-ya bi bi-caret-down-fill d-block d-md-none"></i>
                </dd>
                <dt class="col-24 col-md-6">
                  <div class="flow-sougi__dt py-4 px-10 h6">
                    ご安置
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/hall/ph02.jpg" class="img-fluid flow-sougi__img d-block mx-auto">
                </dt>
                <dd class="col-24 col-md-18 flow-sougi__dd mb-0 mb-lg-20 mt-6 mt-md-0">
                  <p class="m-0">
                    病院などでお亡くなりになられた場合、
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
                </dd>
              </dl>
            </div>
          </div>
        </section>
        <section>
          <div class="flow-sougi">
            <div class="wrap-flow-sougi pt-14 pt-md-30">
              <h1 class="h5 flow-sougi__h mb-20 mb-md-30 py-4 px-8 rounded">
                <i class="bi bi-flower3"></i>
                通夜式
              </h1>
              <dl class="flow-sougi-list row">
                <dt class="col-24 col-md-6">
                  <div class="flow-sougi__dt py-4 px-10 h6">
                    お通夜
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/first/ph03.jpg" class="img-fluid flow-sougi__img d-block mx-auto">
                </dt>
                <dd class="col-24 col-md-18 flow-sougi__dd mb-0 mb-lg-20 mt-6 mt-md-0">
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
                </dd>
              </dl>
            </div>
          </div>
        </section>
        <section>
          <div class="flow-sougi">
            <div class="wrap-flow-sougi pt-14 pt-md-30">
              <h1 class="h5 flow-sougi__h mb-20 mb-md-30 py-4 px-8 rounded">
                <i class="bi bi-flower3"></i>
                葬儀・告別式
              </h1>
              <dl class="flow-sougi-list row">
                <dt class="col-24 col-md-6">
                  <div class="flow-sougi__dt py-4 px-10 h6">
                    葬儀・告別式
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/first/ph04.jpg" class="img-fluid flow-sougi__img d-block mx-auto">
                  <i class="flow-sougi-ya bi bi-caret-down-fill d-none d-md-block"></i>
                </dt>
                <dd class="col-24 col-md-18 flow-sougi__dd mb-0 mb-lg-20 mt-6 mt-md-0">
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
                  <i class="flow-sougi-ya bi bi-caret-down-fill d-block d-md-none"></i>
                </dd>
                <dt class="col-24 col-md-6">
                  <div class="flow-sougi__dt py-4 px-10 h6">
                    火葬
                  </div>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/first/ph05.jpg" class="img-fluid flow-sougi__img d-block mx-auto">
                </dt>
                <dd class="col-24 col-md-18 flow-sougi__dd mb-0 mb-lg-20 mt-6 mt-md-0">
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
      </div>
    </section>
  <?php
  endwhile; // End of the loop.
  ?>

  <?php get_template_part('template-parts/content', 'add-footer'); ?>

</main><!-- #main -->

<?php
get_footer();
