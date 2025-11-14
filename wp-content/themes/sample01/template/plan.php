<?php

/*
Template Name: plan
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
    <div class="plan">
      <div class="wrap-plan container-fluid py-14 py-md-30">
        <ul class="nav plan-tab">
          <li class="nav-item">
            <a href="#kiku" class="list-group-item nav-link active" data-toggle="list">直葬プラン 菊</a>
          </li>
          <li class="nav-item">
            <a href="#ume" class="list-group-item nav-link" data-toggle="list">火葬式プラン 梅</a>
          </li>
          <li class="nav-item">
            <a href="#tsubaki" class="list-group-item nav-link" data-toggle="list">1日葬プラン 椿
            </a>
          </li>
          <li class="nav-item">
            <a href="#sakura" class="list-group-item nav-link" data-toggle="list">2日葬プラン 桜
            </a>
          </li>
        </ul>
        <div class="plan-content tab-content mt-20">
          <div id="kiku" class="tab-pane active fade show">
            <section>
              <h2 class="h3 plan-content__h text-center mb-16 mb-md-30">
                式をせずに費用を最小限に
              </h2>
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-24 col-lg-12 order-2 order-lg-1">
                      <h3 class="h2 plan-content__h-sub mt-10 mt-lg-0">
                        直葬プラン 菊
                      </h3>
                      <h4 class="h6 alert alert-secondary">
                        1～5名程度におすすめ
                      </h4>
                      <p class="plan-content__p">
                        直葬とは式を行わず、火葬日に火葬場に集合して火葬を行うことを言います。
                      </p>
                      <ul class="list-inline">
                        <li class="list-inline-item h4"><span class="badge badge-primary">ご搬送</span><i class="h6 bi bi-caret-right-fill"></i></li>
                        <li class="list-inline-item h4"><span class="badge badge-primary">ご安置</span><i class="h6 bi bi-caret-right-fill"></i></li>
                        <li class="list-inline-item h4"><span class="badge badge-primary">ご出棺</span><i class="h6 bi bi-caret-right-fill"></i></li>
                        <li class="list-inline-item h4"><span class="badge badge-primary">ご火葬</span></li>
                      </ul>
                      <ul>
                        <li>火葬場料金は火葬場にてご精算となります。</li>
                        <li>ご出棺当日までご面会いただけません。</li>
                        <li>火葬場集合となるためご出棺時のお立合いはできません。</li>
                      </ul>
                      <dl class="plan-content__dl">
                        <dt class="h4">プラン価格</dt>
                        <dd class="h1">88,000円<span class="plan-content__dl-price h4">（税込）</span></dd>
                      </dl>
                    </div>
                    <div class="col-24 col-lg-12 order-1 order-lg-2">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ph_kiku.jpg" alt="" class="img-fluid plan-content__img">
                    </div>
                  </div>
                  <div class="plan-icon text-center">
                    <h3 class="h4 d-inline-block plan_content__h-icon text-center mt-10 mt-md-30 b-16 mb-md-30">
                      基本プラン提供内容
                    </h3>
                  </div>
                  <ul class="plan-content__list list-group list-group-flush">
                    <li class="plan-content__list-item list-group-item">
                      <div class="row">
                        <div class="col-24">
                          <ul class="list-unstyled d-flex align-items-center plan-list__list flex-wrap list-icon">
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico01.png" alt="" class="img-fluid plan-icon__img">
                              </span>寝棺 6.25</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico02.png" alt="" class="img-fluid plan-icon__img">
                              </span>役所代行</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico03.png" alt="" class="img-fluid plan-icon__img">
                              </span>搬送用シーツ
                              棺布団</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico04.png" alt="" class="img-fluid plan-icon__img">
                              </span>清め塩</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico05.png" alt="" class="img-fluid plan-icon__img">
                              </span>霊柩車</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico06.png" alt="" class="img-fluid plan-icon__img">
                              </span>寝台車（10kmまで）</li>
                          </ul>
                        </div>
                    </li>
                  </ul>
                </div>
              </div>
            </section>
          </div>
          <div id="ume" class="tab-pane fade">
            <section>
              <h2 class="h3 plan-content__h text-center mb-16 mb-md-30">
                式をせずお別れを
              </h2>
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-24 col-lg-12 order-2 order-lg-1">
                      <h3 class="h2 plan-content__h-sub mt-10 mt-lg-0">
                        火葬式プラン 梅
                      </h3>
                      <h4 class="h6 alert alert-secondary">
                        1～10名程度におすすめ
                      </h4>
                      <p class="plan-content__p">
                        火葬式とはホールでゆっくりお別れをして、ご納棺式・お焼香・お花入れなどを行い送り出す儀式のことを言います。
                      </p>
                      <ul class="list-inline">
                        <li class="list-inline-item h4"><span class="badge badge-primary">ご搬送</span><i class="h6 bi bi-caret-right-fill"></i></li>
                        <li class="list-inline-item h4"><span class="badge badge-primary">ご安置</span><i class="h6 bi bi-caret-right-fill"></i></li>
                        <li class="list-inline-item h4"><span class="badge badge-primary">お別れ</span><i class="h6 bi bi-caret-right-fill"></i></li>
                        <li class="list-inline-item h4"><span class="badge badge-primary">ご出棺</span><i class="h6 bi bi-caret-right-fill"></i></li>
                        <li class="list-inline-item h4"><span class="badge badge-primary">ご火葬</span></li>
                      </ul>
                      <ul>
                        <li>火葬場料金は火葬場にてご精算となります。</li>
                        <li>納棺式料金はコースに含まれておりません。</li>>
                      </ul>
                      <dl class="plan-content__dl">
                        <dt class="h4">プラン価格</dt>
                        <dd class="h2">220,000円<span class="plan-content__dl-price h4">（税込）</span></dd>
                      </dl>
                    </div>
                    <div class="col-24 col-lg-12 order-1 order-lg-2">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ph_ume.jpg" alt="" class="img-fluid plan-content__img">
                    </div>
                  </div>
                  <div class="plan-icon text-center">
                    <h3 class="h4 d-inline-block plan_content__h-icon text-center mt-10 mt-md-30 b-16 mb-md-30">
                      基本プラン提供内容
                    </h3>
                  </div>
                  <ul class="plan-content__list list-group list-group-flush">
                    <li class="plan-content__list-item list-group-item">
                      <div class="row">
                        <div class="col-24">
                          <ul class="list-unstyled d-flex align-items-center plan-list__list flex-wrap list-icon">
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico01.png" alt="" class="img-fluid plan-icon__img">
                              </span>寝棺 6.25</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico02.png" alt="" class="img-fluid plan-icon__img">
                              </span>役所代行</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico03.png" alt="" class="img-fluid plan-icon__img">
                              </span>搬送用シーツ
                              棺布団</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico04.png" alt="" class="img-fluid plan-icon__img">
                              </span>清め塩</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico05.png" alt="" class="img-fluid plan-icon__img">
                              </span>霊柩車</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico06.png" alt="" class="img-fluid plan-icon__img">
                              </span>寝台車（10kmまで）</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico07.png" alt="" class="img-fluid plan-icon__img">
                              </span>送り花（花束）</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico10.png" alt="" class="img-fluid plan-icon__img">
                              </span>基本セット</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico11.png" alt="" class="img-fluid plan-icon__img">
                              </span>門標（ホール内）</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico12.png" alt="" class="img-fluid plan-icon__img">
                              </span>焼香セット 受付設備</li>
                          </ul>
                        </div>
                    </li>
                  </ul>
                </div>
              </div>
            </section>
          </div>
          <div id="tsubaki" class="tab-pane fade">
            <section>
              <h2 class="h3 plan-content__h text-center mb-16 mb-md-30">
                お通夜をせず告別式のみを一日で
              </h2>
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-24 col-lg-12 order-2 order-lg-1">
                      <h3 class="h2 plan-content__h-sub mt-10 mt-lg-0">
                        1日葬プラン 椿
                      </h3>
                      <h4 class="h6 alert alert-secondary">
                        5名程度～におすすめ
                      </h4>
                      <p class="plan-content__p">
                        1日葬とはお通夜を行わず1日で行う葬儀・告別式のことを言います。<br>
                        また通例として故人を偲んで行う精進落としまでのことを言います。
                      </p>
                      <ul class="list-inline">
                        <li class="list-inline-item h4"><span class="badge badge-primary">ご搬送</span><i class="h6 bi bi-caret-right-fill"></i></li>
                        <li class="list-inline-item h4"><span class="badge badge-primary">ご安置</span><i class="h6 bi bi-caret-right-fill"></i></li>
                        <li class="list-inline-item h4"><span class="badge badge-primary">納棺式</span><i class="h6 bi bi-caret-right-fill"></i></li>
                        <li class="list-inline-item h4"><span class="badge badge-primary">告別式</span><i class="h6 bi bi-caret-right-fill"></i></li>
                        <li class="list-inline-item h4"><span class="badge badge-primary">お別れ</span><i class="h6 bi bi-caret-right-fill"></i></li>
                        <li class="list-inline-item h4"><span class="badge badge-primary">ご出棺</span><i class="h6 bi bi-caret-right-fill"></i></li>
                        <li class="list-inline-item h4"><span class="badge badge-primary">ご火葬</span></li>
                      </ul>
                      <ul>
                        <li>火葬場料金は火葬場にてご精算となります。</li>
                      </ul>
                      <dl class="plan-content__dl">
                        <dt class="h4">プラン価格</dt>
                        <dd class="h2">462,000円<span class="plan-content__dl-price h4">（税込）</span></dd>
                      </dl>
                    </div>
                    <div class="col-24 col-lg-12 order-1 order-lg-2">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ph_tsubaki.jpg" alt="" class="img-fluid plan-content__img">
                    </div>
                  </div>
                  <div class="plan-icon text-center">
                    <h3 class="h4 d-inline-block plan_content__h-icon text-center mt-10 mt-md-30 b-16 mb-md-30">
                      選べる祭壇
                    </h3>
                  </div>
                  <ul class="plan-content__list list-group list-group-flush">
                    <li class="plan-content__list-item list-group-item">
                      <div class="row">
                        <div class="col-24 col-md-5">
                          <h4 class="h5 plan-list__h d-flex align-items-center justify-content-center">
                            町屋<br>ホール
                          </h4>
                        </div>
                        <div class="col-24 col-md-19">
                          <ul class="list-unstyled d-flex plan-list__list flex-wrap list-hall">
                            <li><img src="<?php echo get_template_directory_uri(); ?>/images/plan/ph_sakura.jpg" alt="" class="img-fluid plan-hall__img"></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/images/plan/ph_machiya01.jpg" alt="" class="img-fluid plan-hall__img"></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/images/plan/ph_tsubaki.jpg" alt="" class="img-fluid plan-hall__img"></li>
                          </ul>
                        </div>
                    </li>
                    <li class="plan-content__list-item list-group-item">
                      <div class="row">
                        <div class="col-24 col-md-5">
                          <h4 class="h5 plan-list__h d-flex align-items-center justify-content-center">
                            大山駅前<br>ホール
                          </h4>
                        </div>
                        <div class="col-24 col-md-19">
                          <ul class="list-unstyled d-flex plan-list__list flex-wrap list-hall">
                            <li><img src="<?php echo get_template_directory_uri(); ?>/images/plan/ph_ooyama01.jpg" alt="" class="img-fluid plan-hall__img">祭壇S</li>
                          </ul>
                        </div>
                    </li>
                  </ul>
                  <div class="plan-icon text-center">
                    <h3 class="h4 d-inline-block plan_content__h-icon text-center mt-10 mt-md-30 b-16 mb-md-30">
                      基本プラン提供内容
                    </h3>
                  </div>
                  <ul class="plan-content__list list-group list-group-flush">
                    <li class="plan-content__list-item list-group-item">
                      <div class="row">
                        <div class="col-24">
                          <ul class="list-unstyled d-flex align-items-center plan-list__list flex-wrap list-icon">
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico01.png" alt="" class="img-fluid plan-icon__img">
                              </span>寝棺 6.25</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico02.png" alt="" class="img-fluid plan-icon__img">
                              </span>役所代行</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico03.png" alt="" class="img-fluid plan-icon__img">
                              </span>搬送用シーツ
                              棺布団</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico04.png" alt="" class="img-fluid plan-icon__img">
                              </span>清め塩</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico05.png" alt="" class="img-fluid plan-icon__img">
                              </span>霊柩車</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico06.png" alt="" class="img-fluid plan-icon__img">
                              </span>寝台車（10kmまで）</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico07.png" alt="" class="img-fluid plan-icon__img">
                              </span>送り花（花束）</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico08.png" alt="" class="img-fluid plan-icon__img">
                              </span>棺掛け</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico09.png" alt="" class="img-fluid plan-icon__img">
                              </span>打ち敷</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico10.png" alt="" class="img-fluid plan-icon__img">
                              </span>基本セット</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico11.png" alt="" class="img-fluid plan-icon__img">
                              </span>門標（ホール内）</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico12.png" alt="" class="img-fluid plan-icon__img">
                              </span>焼香セット 受付設備</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico15.png" alt="" class="img-fluid plan-icon__img">
                              </span>納棺式（お化粧付き）</li>
                          </ul>
                        </div>
                    </li>
                  </ul>
                </div>
              </div>
            </section>

          </div>
          <div id="sakura" class="tab-pane fade">
            <section>
              <h2 class="h3 plan-content__h text-center mb-16 mb-md-30">
                通夜・告別式を少人数で
              </h2>
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-24 col-lg-12 order-2 order-lg-1">
                      <h3 class="h2 plan-content__h-sub mt-10 mt-lg-0">
                        2日葬プラン 桜
                      </h3>
                      <h4 class="h6 alert alert-secondary">
                        10名程度～におすすめ
                      </h4>
                      <p class="plan-content__p">
                        2日葬とはお通夜・葬儀・告別式を2日間で行う儀式のことを言います。<br>
                        通夜とは、夜を通して灯をともし、お線香を絶やさず見守ることで魔物を寄せ付けないとも言われております。
                      </p>
                      <ul class="list-inline">
                        <li class="list-inline-item h4"><span class="badge badge-primary">ご搬送</span><i class="h6 bi bi-caret-right-fill"></i></li>
                        <li class="list-inline-item h4"><span class="badge badge-primary">ご安置</span><i class="h6 bi bi-caret-right-fill"></i></li>
                        <li class="list-inline-item h4"><span class="badge badge-primary">納棺式</span><i class="h6 bi bi-caret-right-fill"></i></li>
                        <li class="list-inline-item h4"><span class="badge badge-primary">お通夜</span><i class="h6 bi bi-caret-right-fill"></i></li>
                        <li class="list-inline-item h4"><span class="badge badge-primary">告別式</span><i class="h6 bi bi-caret-right-fill"></i></li>
                        <li class="list-inline-item h4"><span class="badge badge-primary">お別れ</span><i class="h6 bi bi-caret-right-fill"></i></li>
                        <li class="list-inline-item h4"><span class="badge badge-primary">ご出棺</span><i class="h6 bi bi-caret-right-fill"></i></li>
                        <li class="list-inline-item h4"><span class="badge badge-primary">ご火葬</span></li>
                      </ul>
                      <ul>
                        <li>火葬場料金は火葬場にてご精算となります。</li>
                      </ul>
                      <dl class="plan-content__dl">
                        <dt class="h4">プラン価格</dt>
                        <dd class="h2">605,000円<span class="plan-content__dl-price h4">（税込）</span></dd>
                      </dl>
                    </div>
                    <div class="col-24 col-lg-12 order-1 order-lg-2">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ph_sakura.jpg" alt="" class="img-fluid plan-content__img">
                    </div>
                  </div>
                  <div class="plan-icon text-center">
                    <h3 class="h4 d-inline-block plan_content__h-icon text-center mt-10 mt-md-30 b-16 mb-md-30">
                      選べる祭壇
                    </h3>
                  </div>
                  <ul class="plan-content__list list-group list-group-flush">
                    <li class="plan-content__list-item list-group-item">
                      <div class="row">
                        <div class="col-24 col-md-5">
                          <h4 class="h5 plan-list__h d-flex align-items-center justify-content-center">
                            町屋<br>ホール
                          </h4>
                        </div>
                        <div class="col-24 col-md-19">
                          <ul class="list-unstyled d-flex plan-list__list flex-wrap list-hall">
                            <li><img src="<?php echo get_template_directory_uri(); ?>/images/plan/ph_sakura.jpg" alt="" class="img-fluid plan-hall__img"></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/images/plan/ph_machiya01.jpg" alt="" class="img-fluid plan-hall__img"></li>
                            <li><img src="<?php echo get_template_directory_uri(); ?>/images/plan/ph_tsubaki.jpg" alt="" class="img-fluid plan-hall__img"></li>
                            <li class="d-flex align-items-center"><i class="h3 bi bi-plus-lg"></i>
                              <div><img src="<?php echo get_template_directory_uri(); ?>/images/plan/ph_machiya03.jpg" alt="" class="img-fluid plan-hall__img">供花1対<br>（70,000円相当）</div>
                            </li>
                          </ul>
                        </div>
                    </li>
                    <li class="plan-content__list-item list-group-item">
                      <div class="row">
                        <div class="col-24 col-md-5">
                          <h4 class="h5 plan-list__h d-flex align-items-center justify-content-center">
                            大山駅前<br>ホール
                          </h4>
                        </div>
                        <div class="col-24 col-md-19">
                          <ul class="list-unstyled d-flex plan-list__list flex-wrap list-hall">
                            <li><img src="<?php echo get_template_directory_uri(); ?>/images/plan/ohyama-saidan-m.jpg" alt="" class="img-fluid plan-hall__img">祭壇M</li>
                          </ul>
                        </div>
                    </li>
                  </ul>
                  <div class="plan-icon text-center">
                    <h3 class="h4 d-inline-block plan_content__h-icon text-center mt-10 mt-md-30 b-16 mb-md-30">
                      基本プラン提供内容
                    </h3>
                  </div>
                  <ul class="plan-content__list list-group list-group-flush">
                    <li class="plan-content__list-item list-group-item">
                      <div class="row">
                        <div class="col-24">
                          <ul class="list-unstyled d-flex align-items-center plan-list__list flex-wrap list-icon">
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico01.png" alt="" class="img-fluid plan-icon__img">
                              </span>寝棺 6.25</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico02.png" alt="" class="img-fluid plan-icon__img">
                              </span>役所代行</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico03.png" alt="" class="img-fluid plan-icon__img">
                              </span>搬送用シーツ
                              棺布団</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico04.png" alt="" class="img-fluid plan-icon__img">
                              </span>清め塩</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico05.png" alt="" class="img-fluid plan-icon__img">
                              </span>霊柩車</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico06.png" alt="" class="img-fluid plan-icon__img">
                              </span>寝台車（10kmまで）</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico07.png" alt="" class="img-fluid plan-icon__img">
                              </span>送り花（花束）</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico08.png" alt="" class="img-fluid plan-icon__img">
                              </span>棺掛け</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico09.png" alt="" class="img-fluid plan-icon__img">
                              </span>打ち敷</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico10.png" alt="" class="img-fluid plan-icon__img">
                              </span>基本セット</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico11.png" alt="" class="img-fluid plan-icon__img">
                              </span>門標（ホール内）</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico12.png" alt="" class="img-fluid plan-icon__img">
                              </span>焼香セット 受付設備</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico13.png" alt="" class="img-fluid plan-icon__img">
                              </span>遺影3点セット</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico14.png" alt="" class="img-fluid plan-icon__img">
                              </span>後飾り段</li>
                            <li><span class="plan-list__list-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ico15.png" alt="" class="img-fluid plan-icon__img">
                              </span>納棺式（お化粧付き）</li>
                          </ul>
                        </div>
                    </li>
                  </ul>
                </div>
              </div>
            </section>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="help">
      <div class="wrap-help py-16 pt-md-30 pt-lg-50 container-fluid">
        <div class="help-content jumbotron jumbotron-fluid">
          <div class="container text-center">
            <h1 class="h3 help__h text-center mb-10 mb-md-14">
              自由葬とは？
            </h1>
            <p class="h6 font-weight-bold help__p text-left text-md-center mb-20">
              特定の儀礼方式や作法のない自由なスタイルの挙式です。<br class="d-none d-md-block">
              従来、日本における葬儀のほとんどが<br class="d-none d-md-block">
              仏教をはじめとする何らかの宗教儀礼により執り行われてきましたが、<br class="d-none d-md-block">
              伝統的な葬儀の慣習にとらわれない新しいご葬儀の形も受け入れられつつあります。<br class="d-none d-md-block">
              自由葬には確立したスタイルはありません。<br class="d-none d-md-block">
              式の内容をしっかりと組み立てることが必要になります。
            </p>
            <h1 class="h3 help__h text-center mb-10 mb-md-14">
              メリット
            </h1>
            <div class="row mb-20 justify-content-md-center">
              <div class="col-24 col-md-12 col-lg-8">
                <div class="card mb-10">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ph_merit01.jpg" class="card-img-top">
                  <div class="card-body">
                    <h2 class="h7 card-title text-center">葬儀内容を<br class="d-none d-md-block">自由に決められる</h2>
                  </div>
                </div>
              </div>
              <div class="col-24 col-md-12 col-lg-8">
                <div class="card mb-10">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ph_merit02.jpg" class="card-img-top">
                  <div class="card-body">
                    <h2 class="h7 card-title text-center">より深く故人の<br class="d-none d-md-block">人生のあゆみを紹介できる</h2>
                  </div>
                </div>
              </div>
              <div class="col-24 col-md-12 col-lg-8">
                <div class="card mb-10">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/plan/ph_merit03.jpg" class="card-img-top">
                  <div class="card-body">
                    <h2 class="h7 card-title text-center"> 寺院や教会等、司祭者に<br class="d-none d-md-block">関する費用負担が不要</h2>
                  </div>
                </div>
              </div>
            </div>
            <h1 class="h3 help__h text-center mb-10 mb-md-14">
              自由葬で実現できること
            </h1>
            <p class="h6 font-weight-bold help__p text-left text-md-center mb-20">
              そんなことできるの⁉をカタチにします。<br class="d-none d-md-block">
              私たちのおもてなしは、故人や遺族の皆様が本当に望む葬儀を実現することです。<br class="d-none d-md-block">
              多種多様なご要望にとことん向き合い、最高品質なサービスをご提供します。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/content', 'add-footer'); ?>

</main><!-- #main -->

<?php
get_footer();
