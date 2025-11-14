<?php

/*
Template Name: hall
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
    <div class="hall">
      <div class="wrap-hall container-fluid py-14 py-md-30">
        <ul class="nav hall-tab">
          <li class="nav-item">
            <a href="#ohyama" class="text-center d-block list-group-item nav-link active" data-toggle="list" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hall/hall-oyama.jpg')">
              <span class="nav-link-title">
                大山駅前
              </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#machiya" class="text-center d-block list-group-item nav-link" data-toggle="list" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hall/hall-machiya.jpg')">
              <span class="nav-link-title">
                町屋
              </span>
            </a>
          </li>
        </ul>
        <div class="hall-content tab-content mt-14 mt-md-30">
          <div id="ohyama" class="tab-pane active fade show">
            <section>
              <h2 class="h1 hall-content__h text-center mb-10 mb-md-24">
                大山駅前
              </h2>
              <p class="h6 hall-content__p mb-20">
                24時365日対応 安置室完備の《自由なお葬式 大山駅前》は東京都板橋区にある葬儀式場です。ご家族様を中心とした親しい方だけで見送る家族葬・一日葬・直葬（火葬式）はもちろん、従来の慣習にとらわれない自由設計のご葬儀も承ります。<br>
                館内はバリアフリー設計で多目的トイレも完備されておりますので、ご年配の方や車いすをご利用の方も安心してお過ごしいただけます。<br>
                仏式はもちろん、神葬祭（神道式の葬儀）やキリスト教での葬儀式・無宗教式など、宗旨宗派問わず対応可能で、宗教者様控室も完備しております。<br>
                なお20名様まで着席いただける式場には、心穏やかにお過ごしいただける和風の親族控室や、テレビ付きの浴室も併設されていますので、通夜式後の宿泊・付き添い安置の際も安心です。
              </p>
              <figure class="hall-content__figure text-center mb-20">
                <img src="<?php echo get_template_directory_uri(); ?>/images/hall/hall-oyama.jpg" alt="（大山駅前外観）" class="img-fluid hall-content__img">
              </figure>
              <h1 class="h5 hall-content__h-sub mb-10 mb-md-20 py-4 px-8 rounded">
                <i class="bi bi-flower3"></i>
                設備
              </h1>
              <div class="mb-40">
                <?php
                echo do_shortcode('[gallrey-slick cat="大山駅前" id="191"]');
                ?>
              </div>
              <h1 id="anchi" class="h5 hall-content__h-sub mb-10 mb-md-20 py-4 px-8 rounded">
                <i class="bi bi-flower3"></i>
                ご安置
              </h1>
              <div class="mb-40">
                <div class="row align-items-center">
                  <div class="col-24 col-md-10 col-lg-8">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/hall/ph02.jpg" class="img-fluid hall-content-anchi__img d-block mx-auto">
                  </div>
                  <div class="col-24 col-md-14 col-lg-16">
                    <p class="mt-14 mt-md-0">
                      病院などでお亡くなりになられた場合、<br>
                      お葬式までの間、ご遺体をすぐに移動しご安置しなければなりません。<br>
                      ご安置場所はご自宅か葬儀場のどちらかが一般的です。
                    </p>
                    <div class="card">
                      <div class="card-body">
                        <h2 class="h6 card-title font-weight-bold">遺族が行うこと</h2>
                        <ul>
                          <li>喪主や世話役などの役割を決める</li>
                          <li>
                            菩提寺※があればお坊さんに連絡し、お葬式のお勤めを依頼する<br>※菩提寺とは、檀家となっている寺院のことです。
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h1 class="h5 hall-content__h-sub mb-10 mb-md-20 py-4 px-8 rounded">
                <i class="bi bi-flower3"></i>
                概要
              </h1>
              <table class="hall-content__table table table-bordered mb-20">
                <tbody>
                  <tr>
                    <th scope="row" class="bg-light">
                      所在地
                    </th>
                    <td>
                      〒173-0014<br>東京都板橋区大山東町18-10
                    </td>
                  </tr>
                  <tr>
                    <th scope="row" class="bg-light">
                      電話
                    </th>
                    <td>
                      03-6806-7440
                    </td>
                  </tr>
                  <tr>
                    <th scope="row" class="bg-light">
                      駐車場
                    </th>
                    <td>
                      2台
                    </td>
                  </tr>
                  <tr>
                    <th scope="row" class="bg-light">
                      対応人数
                    </th>
                    <td>
                      20名
                    </td>
                  </tr>
                  <tr>
                    <th scope="row" class="bg-light">
                      宗教宗派
                    </th>
                    <td>
                      全宗派対応
                    </td>
                  </tr>
                  <tr>
                    <th scope="row" class="bg-light">
                      アクセス
                    </th>
                    <td>
                      東武東上線「大山駅」北口より徒歩3分<br>
                      都営地下鉄三田線「 板橋区役所前」より徒歩11分
                    </td>
                  </tr>
                  <th scope="row" class="bg-light">
                    施設概要
                  </th>
                  <td>
                    駅近・安置室完備・付き添い安置可・親族控室・寺院控室・TV付バス完備・多目的トイレ完備
                  </td>
                  </tr>
                </tbody>
              </table>
              <div class="hall-content__map embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.1203178434403!2d139.7016175125774!3d35.74784737245142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601892bbd225f72d%3A0x13eb2543eb29f44d!2z44CSMTczLTAwMTQg5p2x5Lqs6YO95p2_5qmL5Yy65aSn5bGx5p2x55S677yR77yY4oiS77yR77yQ!5e0!3m2!1sja!2sjp!4v1718684515953!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </section>
          </div>
          <div id="machiya" class="tab-pane fade show">
            <section>
              <h2 class="h1 hall-content__h text-center mb-10 mb-md-24">
                町屋
              </h2>
              <p class="h6 hall-content__p mb-20">
                24時365日対応 安置室完備の《自由なお葬式 町屋》は東京都荒川区にある葬儀式場です。ご家族様を中心とした親しい方だけで見送る家族葬・一日葬・直葬（火葬式）はもちろん、従来の慣習にとらわれない自由設計のご葬儀も承ります。<br>
                20名様までご着席いただけるコンパクトな式場に加え、60名様まで収容可能な中規模式場も備えておりますので、全館では120名様までの一般葬にも対応可能です。<br>
                また館内はバリアフリー設計で多目的トイレも完備されておりますので、ご年配の方や車いすをご利用の方も安心してお過ごしいただけます。<br>
                仏式はもちろん、神葬祭（神道式の葬儀）やキリスト教での葬儀式・無宗教式など、宗旨宗派問わず対応可能で、宗教者様控室も完備しております。<br>
                なお館内には、心穏やかにお過ごしいただける和風の親族控室や、テレビ付きの浴室も用意されていますので、通夜式後の宿泊・付き添い安置の際も安心です。
              </p>
              <figure class="hall-content__figure text-center mb-20">
                <img src="<?php echo get_template_directory_uri(); ?>/images/hall/hall-machiya.jpg" alt="（町屋外観）" class="img-fluid hall-content__img">
              </figure>
              <h1 class="h5 hall-content__h-sub mb-10 mb-md-20 py-4 px-8 rounded">
                <i class="bi bi-flower3"></i>
                設備
              </h1>
              <div class="mb-40">
                <?php
                echo do_shortcode('[gallrey-slick cat="町屋" id="191"]');
                ?>
              </div>
              <h1 class="h5 hall-content__h-sub mb-10 mb-md-20 py-4 px-8 rounded">
                <i class="bi bi-flower3"></i>
                ご安置
              </h1>
              <div class="mb-40">
                <div class="row align-items-center">
                  <div class="col-24 col-md-10 col-lg-8">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/hall/ph02.jpg" class="img-fluid hall-content-anchi__img d-block mx-auto">
                  </div>
                  <div class="col-24 col-md-14 col-lg-16">
                    <p class="mt-14 mt-md-0">
                      病院などでお亡くなりになられた場合、<br>
                      お葬式までの間、ご遺体をすぐに移動しご安置しなければなりません。<br>
                      ご安置場所はご自宅か葬儀場のどちらかが一般的です。
                    </p>
                    <div class="card">
                      <div class="card-body">
                        <h2 class="h6 card-title font-weight-bold">遺族が行うこと</h2>
                        <ul>
                          <li>喪主や世話役などの役割を決める</li>
                          <li>
                            菩提寺※があればお坊さんに連絡し、お葬式のお勤めを依頼する<br>※菩提寺とは、檀家となっている寺院のことです。
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h1 class="h5 hall-content__h-sub mb-10 mb-md-20 py-4 px-8 rounded">
                <i class="bi bi-flower3"></i>
                概要
              </h1>
              <table class="hall-content__table table table-bordered mb-20">
                <tbody>
                  <tr>
                    <th scope="row" class="bg-light">
                      所在地
                    </th>
                    <td>
                      〒116-0002<br>東京都荒川区荒川5丁目2-1
                    </td>
                  </tr>
                  <tr>
                    <th scope="row" class="bg-light">
                      電話
                    </th>
                    <td>
                      03-6806-7440
                    </td>
                  </tr>
                  <tr>
                    <th scope="row" class="bg-light">
                      駐車場
                    </th>
                    <td>
                      6台
                    </td>
                  </tr>
                  <tr>
                    <th scope="row" class="bg-light">
                      対応人数
                    </th>
                    <td>
                      3F60名・2F20名（全館120名）
                    </td>
                  </tr>
                  <tr>
                    <th scope="row" class="bg-light">
                      宗教宗派
                    </th>
                    <td>
                      全宗派対応
                    </td>
                  </tr>
                  <tr>
                    <th scope="row" class="bg-light">
                      アクセス
                    </th>
                    <td>
                      京成本線「新三河島駅」より徒歩3分<br>地下鉄千代田線「町屋駅」町屋3番出口より徒歩5分<br>JR常磐線「三河島駅」より徒歩7分<br>明治通り宮地陸橋交差点そば
                    </td>
                  </tr>
                  <th scope="row" class="bg-light">
                    施設概要
                  </th>
                  <td>
                    駅近・安置室完備・付き添い安置可・会食室・親族控室・寺院控室・TV付バス完備・多目的トイレ完備
                  </td>
                  </tr>
                </tbody>
              </table>
              <div class="hall-content__map embed-responsive embed-responsive-16by9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3238.5413682532!2d139.77379557579013!3d35.73749637256916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188e77114bffff%3A0x19c26c7527f6fe55!2z44CSMTE2LTAwMDIg5p2x5Lqs6YO96I2S5bed5Yy66I2S5bed77yV5LiB55uu77yS4oiS77yR!5e0!3m2!1sja!2sjp!4v1718687646670!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/content', 'add-footer'); ?>

</main><!-- #main -->

<?php
get_footer();
