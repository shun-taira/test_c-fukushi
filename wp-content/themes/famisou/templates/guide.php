<?php
/*
Template Name: guide
*/

get_header();
$freedial_number = get_theme_mod('freedial_number');
?>
<?php get_template_part('template-parts/component-header'); ?>
<?php get_template_part('template-parts/header/breadcrumb'); ?>

<section>
  <div class="guide">
    <div class="guide-block">
      <?php get_template_part('template-parts/component-guide-nav'); ?>
      <?php /*
      <p class="guide__p">
        身近な方のご葬儀に立ち会うのは初めてという方がほとんどですので、<br class="display_pc">
        分からないことばかりで不安に感じるのも無理はありません。<br>
        もしもの時に慌てる事のないよう、お客様から多く寄せられたお悩みを<br class="display_pc">
        まとめましたので、不安解消にお役立てください。</p>
        */ ?>
      <ul class="guide-list">
        <li class="guide-item">
          <a href="#pre" class="guide-link color_pre">
            <span class="guide-link-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-icon-01.svg" class="guide-link-icon__img">
            </span>
            <span class="guide-link-title">
              お葬式までに<br><span class="title_emp">何を準備</span>すればよい？
            </span>
            <span class="guide-link-ya"></span>
          </a>
        </li>
        <li class="guide-item">
          <a href="#if" class="guide-link color_if">
            <span class="guide-link-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-icon-02.svg" class="guide-link-icon__img">
            </span>
            <span class="guide-link-title">
              <span class="title_emp">もしもの時</span>は<br>どうすればよい？
            </span>
            <span class="guide-link-ya"></span>
          </a>
        </li>
        <li class="guide-item">
          <a href="#plan" class="guide-link color_plan">
            <span class="guide-link-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-icon-03.svg" class="guide-link-icon__img">
            </span>
            <span class="guide-link-title">
              自分に合った<br><span class="title_emp">葬儀プラン</span>の選び方は？
            </span>
            <span class="guide-link-ya"></span>
          </a>
        </li>
        <li class="guide-item">
          <a href="#price" class="guide-link color_price">
            <span class="guide-link-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-icon-04.svg" class="guide-link-icon__img">
            </span>
            <span class="guide-link-title">
              <span class="title_emp">お葬式の費用</span>って<br>どのくらい？
            </span>
            <span class="guide-link-ya"></span>
          </a>
        </li>
        <li class="guide-item">
          <a href="#about" class="guide-link color_about">
            <span class="guide-link-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-icon-05.svg" class="guide-link-icon__img">
            </span>
            <span class="guide-link-title">
              お葬式について<span class="title_emp">知りたい</span><br><span class="title_emp">相談したい</span>時は？
            </span>
            <span class="guide-link-ya"></span>
          </a>
        </li>
        <li class="guide-item">
          <a href="<?php echo home_url(); ?>/faq" class="guide-link color_faq">
            <span class="guide-link-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-icon-06.svg" class="guide-link-icon__img">
            </span>
            <span class="guide-link-title">
              よくある質問
            </span>
            <span class="guide-link-ya"></span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</section>

<section id="pre">
  <div class="pre">
    <div class="pre-block">
      <h2 class="pre__h">
        <span class="icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-icon-01.svg" class="icon__img">
        </span>
        <span class="title">
          お葬式までに<span class="title_emp">何を準備</span>すればよい？
        </span>
      </h2>
      <div class="pre-list-block">
        <p class="pre__p">
          ご逝去から葬儀までは2日から3日ほどが一般的ですので、<br class="display_pc">
          喪主様・ご遺族様は短い期間にさまざまなことを決めなければなりません。<br>
          しかし基本的な部分だけでも事前に準備しておけば、いざという時の負担は大幅に軽減されます。</p>
        <ul class="pre-list">
          <li class="pre-item">
            <div class="item-block">
              <div class="item-start">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-01.jpg" class="pre__img">
              </div>
              <div class="item-end">
                <h3 class="pre-item__h">
                  <span class="title_emp">①</span>喪主を決めておく
                </h3>
                <p class="pre-item__p">
                  葬儀全体を取り仕切る喪主を、あらかじめ話し合って決めておくことで、葬儀の準備もスムーズに進みます。とはいえ、喪主が担う役割は想像以上に多いので、ご親族様で分担されることをおすすめします。</p>
              </div>
            </div>
          </li>
          <li class="pre-item">
            <div class="item-block">
              <div class="item-start">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-02.jpg" class="pre__img">
              </div>
              <div class="item-end">
                <h3 class="pre-item__h">
                  <span class="title_emp">②</span>葬儀内容について話し合う
                </h3>
                <p class="pre-item__p">
                  葬儀社との打ち合わせでは、葬儀の規模や予算などについてご遺族様の希望を伺いながら、具体的な葬儀内容ついて決めていきます。<br>
                  打ち合わせを円滑に進めるためには、ご遺族様の中で、ある程度まで意見をまとめていただく必要があります。<br>
                  しかし、もしもの時を迎えてからでは、すぐに意見をまとめるのは難しいでしょう。後悔のないご葬儀にするために、できればご親族様も交えて、あらかじめ葬儀について話し合っておくことをおすすめします。</p>
              </div>
            </div>
          </li>
          <li class="pre-item">
            <div class="item-block">
              <div class="item-start">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-03.jpg" class="pre__img">
              </div>
              <div class="item-end">
                <h3 class="pre-item__h">
                  <span class="title_emp">③</span>家の宗派を確認しておく
                </h3>
                <p class="pre-item__p">
                  日本における葬儀の9割ほどは仏式でおこなわれますが、家の宗派をご存じない方も少なくないようです。<br>
                  葬儀日程を決めるためには、菩提寺の都合を確認する必要がありますし、宗派ごとに葬具も異なりますので、法事などの際に確認しておきましょう。</p>
              </div>
            </div>
          </li>
          <li class="pre-item">
            <div class="item-block">
              <div class="item-start">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-04.jpg" class="pre__img">
              </div>
              <div class="item-end">
                <h3 class="pre-item__h">
                  <span class="title_emp">④</span>遺影に使用する写真を選んでおく
                </h3>
                <p class="pre-item__p">
                  祭壇に飾る遺影用の写真を、あらかじめ選んでおけば、いざという時に慌てずに済みます。<br>
                  現在では写真加工の技術も進んでいますので、背景や服装などは修正できますが、故人様のお顔がはっきりと写ったものを用意しておいたほうが安心です。</p>
              </div>
            </div>
          </li>
          <li class="pre-item">
            <div class="item-block">
              <div class="item-start">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-05.jpg" class="pre__img">
              </div>
              <div class="item-end">
                <h3 class="pre-item__h">
                  <span class="title_emp">⑤</span>印鑑を用意しておく
                </h3>
                <p class="pre-item__p">
                  葬儀社が代行することも多い「死亡届」の提出や「火葬許可証」の申請には、届出人（喪主様）の印鑑が必要となります。<br>
                  お預かりする印鑑は、市販の三文判で構いませんが、シャチハタなどのインク浸透印は不可となります。</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="if">
  <div class="if">
    <div class="if-block">
      <h2 class="if__h">
        <span class="icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-icon-02.svg" class="icon__img">
        </span>
        <span class="title">
          <span class="title_emp">もしもの時は</span>どうすればよい？
        </span>
      </h2>
      <div class="if-list-block">
        <p class="if__p">
          もしもの時は、慌てず一之江セレモニーホールへご連絡ください。<br>
          安心していただけるよう、全力でサポートいたします。<br>
          もしもの時に参考にしていただけるよう、大まかな流れをまとめました。
        </p>
        <div class="if-list-wrap js-scrollable">
          <ul class="if-ya-list">
            <li class="if-ya-item grow_123">
              葬儀前
            </li>
            <li class="if-ya-item grow_4">
              通夜当日
            </li>
            <li class="if-ya-item grow_5">
              葬儀当日
            </li>
          </ul>
          <ul class="if-list">
            <li class="if-item">
              <div class="item-block">
                <h3 class="item__h">
                  1. お電話
                </h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-06.jpg" class="if__img">
                <p class="item__p">
                  まずは24時間365日対応の一之江セレモニーホールにご連絡ください。</p>
              </div>
            </li>
            <li class="if-item">
              <div class="item-block">
                <h3 class="item__h">
                  2. お迎え安置
                </h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-07.jpg" class="if__img">
                <p class="item__p">
                  ご希望の場所まで担当者がお迎えにあがります。ご自宅へのご安置が難しい場合は、一之江セレモニーホールの霊安室をご利用ください。</p>
              </div>
            </li>
            <li class="if-item">
              <div class="item-block">
                <h3 class="item__h">
                  3. 打ち合わせ
                </h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-08.jpg" class="if__img">
                <p class="item__p">
                  葬儀についてのご希望やご予算、大まかな参列者数などを伺いながら、葬儀日程や式場など今後について打ち合わせます。</p>
              </div>
            </li>
            <li class="if-item">
              <div class="item-block">
                <h3 class="item__h">
                  4. 通夜式
                </h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-09.jpg" class="if__img">
                <p class="item__p">
                  生前に故人様とご縁のあった方々を招き、故人様との最後の夜を過ごします。通夜式終了後は、故人様に付き添って宿泊いただくことも可能です。</p>
              </div>
            </li>
            <li class="if-item">
              <div class="item-block">
                <h3 class="item__h">
                  5. 葬儀告別式
                </h3>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-10.jpg" class="if__img">
                <p class="item__p">
                  故人様に最後のお別れを告げる大切な儀式です。僧侶による読経・会葬者の焼香後に、故人様の冥福を祈りながら別れを惜しみます。</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="plan">
  <div class="plan">
    <div class="plan-block">
      <h2 class="plan__h">
        <span class="icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-icon-03.svg" class="icon__img">
        </span>
        <span class="title">
          自分に合った<span class="title_emp">葬儀プラン</span>の選び方は？
        </span>
      </h2>
      <div class="plan-list-block">
        <p class="plan__p">
          近年では、葬儀のかたちも多様化しているため、葬儀プラン選びに迷われる方も多いようです。<br>
          ご自身に最適な葬儀プラン選びの目安にしていただけるよう、各プランの特徴をまとめました。</p>
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
          'order' => 'ASC',
          'posts_per_page' => -1,
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) {
        ?>
          <ul class="plan-list">
            <?php while ($query->have_posts()) {
              $query->the_post();
              $color_set = "color_" . get_field('plan_color');;
            ?>
              <li class="plan-item">
                <div class="item-block">
                  <div class="item-start">
                    <?php the_field('plan_recommend', false, false); ?>
                  </div>
                  <a href="<?php the_permalink(); ?>" class="item-end item-link <?php echo $color_set; ?>">
                    <h3 class="plan-item__h">
                      <div>
                        <?php the_title(); ?><span class="title_small">プラン</span>
                      </div>
                    </h3>
                    <div class="info-block">
                      <div class="info-price-wrap">
                        <div class="info-price">
                          <div class="info-price-member">
                            <dl class="info-price-members-list">
                              <dt class="info-price-members-title">
                                会員価格
                              </dt>
                              <dd class="info-price-members-price">
                                <?php echo number_format(get_field('plan_members_price')); ?>
                                <span class="info-price-members-unit">
                                  <span class="info-price-members-tax">(税込)</span>
                                  円
                                </span>
                              </dd>
                            </dl>
                          </div>
                          <div class="info-price-general">
                            <dl class="info-price-general-list">
                              <dt class="info-price-general-title">
                                一般価格
                              </dt>
                              <dd class="info-price-general-price">
                                <span class="info-price-general-tax">税込</span>
                                <?php echo number_format(get_field('plan_general_price')); ?>
                                <span class="info-price-general-unit">円</span>
                              </dd>
                            </dl>
                          </div>
                        </div>
                      </div>
                      <div class="info-image-wrap">
                        <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('medium', array('class' => 'item__img'));
                        }
                        ?>
                      </div>
                    </div>
                  </a>
                </div>
              </li>
            <?php } ?>
          </ul>
        <?php
          wp_reset_postdata();
        } else {
          echo '<p>プランがありません。</p>';
        }
        ?>
      </div>
    </div>
  </div>

</section>

<section id="price">
  <div class="price">
    <div class="price-block">
      <h2 class="price__h">
        <span class="icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-icon-04.svg" class="icon__img">
        </span>
        <span class="title">
          <span class="title_emp">お葬式の費用</span>ってどれくらい？
        </span>
      </h2>
      <div class="price-list-block">
        <p class="price__p">
          葬儀に必要となる費用は、参列者数や式場規模・葬儀内容によって異なりますが、<br class="display_pc">
          主に「葬儀一式費用」「飲食接待費」「宗教費」で構成されます。<br>
          このうち「葬儀一式費用」の目安となるのが、葬儀プランの金額です。<br>
          一之江セレモニーホールでは、参列者数やご予算に合わせてお選びいただけるよう、<br class="display_pc">
          さまざまなプランをご用意しております。</p>
        <div class="plan-etc-list-block js-scrollable">
          <?php
          if (is_array($selected_posts) && !empty($selected_posts)) {
          ?>
            <ul class="plan-etc-list">
              <?php
              foreach ($selected_posts as $selected_post) {
                $color_set = "color_" . get_field('plan_color', $selected_post);
              ?>
                <li class="plan-etc-item">
                  <div class="plan-etc-wrap <?php echo $color_set; ?>">
                    <div class="plan-etc-item-img">
                      <?php
                      if (has_post_thumbnail($selected_post)) {
                        echo get_the_post_thumbnail($selected_post, 'medium', array('class' => 'plan-etc-item__img'));
                      }
                      ?>
                    </div>
                    <div class="plan-etc-item-title">
                      <h4 class="plan-etc-item__h">
                        <?php echo get_the_title($selected_post); ?><span class="plan-etc-item__h-small">プラン</span>
                      </h4>
                    </div>
                    <div class="plan-etc-item-type">
                      <?php
                      $plan_type_choices = get_field_object('plan_type_detail', $selected_post)['choices'];
                      $selected_plan_types = (array) get_field('plan_type_detail', $selected_post);
                      if (!empty($plan_type_choices)) {
                        echo '<ul class="plan-etc-type-list">';
                        foreach ($plan_type_choices as $value => $label) {
                          $class = (in_array($value, $selected_plan_types)) ? 'item-selected' : '';
                          echo '<li class="plan-etc-type-item ' . $class . '">' . $label . '</li>';
                        }
                        echo '</ul>';
                      }
                      ?>
                    </div>
                    <div class="plan-etc-item-price">
                      <span>
                        <?php echo number_format(get_field('plan_members_price', $selected_post)); ?>
                        <span class="plan-etc-item-price-small">円</span>
                      </span>
                    </div>
                    <div class="plan-etc-item-btn">
                      <a href="<?php echo get_the_permalink($selected_post); ?>" class="plan-etc-item-link">
                        詳しく見る
                      </a>
                    </div>
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

<section id="about">
  <div class="about">
    <div class="about-block">
      <h2 class="about__h">
        <span class="icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-icon-05.svg" class="icon__img">
        </span>
        <span class="title">
          お葬式について<span class="title_emp">知りたい・相談したい</span>時は？
        </span>
      </h2>
      <div class="about-list-block">
        <p class="about__p">
          大切な方を亡くされたばかりのご遺族様にとって、葬儀の準備は肉体的にも精神的にも大きな負担となります。<br class="display_pc">
          また葬儀は人生の中で何度も経験するものではないため、多くの方が疑問や不安を感じるのも無理はありません。<br>
          こうした疑問や不安を「安心」に変えていただくために、<br class="display_pc">
          一之江セレモニーホールの無料事前相談をご利用ください。</p>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-11.jpg" class="about__img">
        <h3 class="about-list__h">
          事前相談のメリット
        </h3>
        <ul class="about-list">
          <li class="about-item">
            <div class="item-block">
              <div class="item-start">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-12.jpg" class="about-item__img">
              </div>
              <div class="item-end">
                <h4 class="about-item__h">
                  <span class="title_emp">①</span>葬儀費用が明確になる
                </h4>
                <p class="about-item__p">
                  無料事前相談を活用いただくことで、ご希望に沿った葬儀に必要となる金額が明確になるため、葬儀費用の不安が解消されます。しっかりとご希望や予算を伺ったうえで詳細な見積書を作成し、一つひとつの項目について丁寧にご説明させていただいております。
                </p>
              </div>
            </div>
          </li>
          <li class="about-item">
            <div class="item-block">
              <div class="item-start">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-13.jpg" class="about-item__img">
              </div>
              <div class="item-end">
                <h4 class="about-item__h">
                  <span class="title_emp">②</span>式場の雰囲気やスタッフの対応を確認できる
                </h4>
                <p class="about-item__p">
                  事前相談で当ホールに足を運んでいただいた際には、各式場をご見学いただけます。写真だけでは伝わりにくい式場の広さや雰囲気を体感することで、実際の葬儀をより具体的にイメージしやすくなります。また事前相談では、葬儀に携わるスタッフがお話を伺いますので、担当者の人柄なども感じていただけるかと存じます。
                </p>
              </div>
            </div>
          </li>
          <li class="about-item">
            <div class="item-block">
              <div class="item-start">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-14.jpg" class="about-item__img">
              </div>
              <div class="item-end">
                <h4 class="about-item__h">
                  <span class="title_emp">③</span>大切な方に相応しい葬儀が実現できる
                </h4>
                <p class="about-item__p">
                  ご逝去から通夜・葬儀までの時間は想像以上に少ないため、短い時間で多くのことを決めなければなりません。しかし事前相談では、時間を気にすることなくゆっくりとお話を伺えますので、お客様のご希望に沿ったご葬儀をかたちすることも可能です。また葬儀当日までプランの変更もできますので、大切な方に相応しい葬儀内容をじっくりとご検討いただけます。
                </p>
              </div>
            </div>
          </li>
        </ul>
        <div class="about-ban-block">
          <ul class="ban-list">
            <li class="ban-item">
              <a href="tel:<?php echo $freedial_number; ?>" class="ban-item-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-ban-tel.png" alt="24時間365日 通話・事前相談無料 <?php echo $freedial_number; ?>" class="ban-item__img display_pc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-ban-tel-sp.png" alt="24時間365日 通話・事前相談無料 <?php echo $freedial_number; ?>" class="ban-item__img display_sp">
              </a>
            </li>
            <li class="ban-item">
              <a href="<?php echo home_url(); ?>/request" class="ban-item-link">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-ban-request.png" alt="WEBでカンタン即日発送 無料資料請求はこちら 葬儀社とわからない封筒で送ります" class="ban-item__img display_pc">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-ban-request-sp.png" alt="WEBでカンタン即日発送 無料資料請求はこちら 葬儀社とわからない封筒で送ります" class="ban-item__img display_sp">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>