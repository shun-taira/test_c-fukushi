<?php
/*
Template Name: first
*/

get_header();
$freedial_number = get_theme_mod('freedial_number');
?>
<?php get_template_part('template-parts/component-header'); ?>
<?php get_template_part('template-parts/header/breadcrumb'); ?>

<section>
  <div class="first-title">
    <div class="title-block">
      <p class="title__p">
        はじめてのご葬儀は不慣れなことも多いため、不安を感じるのも無理はありません。<br>
        しかし葬儀の流れや必要な準備について、少しだけでも理解しておけば、もしもの時も慌てずに済みます。<br>
        この機会に、基本的なポイントだけでも押さえておきましょう。
      </p>
    </div>
    <div class="list-block">
      <div class="list-wrap">
        <h2 class="list__h">
          <i class="bi bi-list-task"></i>目次
        </h2>
        <ol class="list-list">
          <li><a href="#first1">喪主様にご用意いただくもの</a></li>
          <li><a href="#first2">事前に準備しておきたいこと</a></li>
          <li><a href="#first3">もしもの時の流れ</a></li>
          <li><a href="#first4">葬儀プランの選び方</a></li>
          <li><a href="#first5">葬儀の流れ</a></li>
          <li><a href="#first6">葬儀の事前相談</a></li>
        </ol>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="first-asap-prepare" id="first1">
    <div class="prepare-block">
      <div class="prepare-head">
        <h2 class="prepare__h">
          喪主様にご用意いただくもの
        </h2>
        <p class="prepare__p">
          大切な方のご葬儀を滞りなく営むために、まずは死亡診断書（死体検案書）・遺影用のお写真・印鑑の3つをご用意ください。
        </p>
      </div>
      <div class="prepare-body">
        <ul class="prepare-list">
          <li class="prepare-item">
            <div class="item-content">
              <div class="item-start">
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quick-prepare-0.jpg" class="item__img">
                </div>
              </div>
              <div class="item-end">
                <h3 class="item__h">
                  死亡診断書
                </h3>
                <p class="item__p">
                  祭亡くなった日時や原因などが記載された死亡診断書（死体検案書）は、役所に提出する死亡届と左右一対になっているのが一般的です。死亡届は、死後7日以内に所定の役所へ提出するよう法律で定められています。
                </p>
              </div>
            </div>
          </li>
          <li class="prepare-item">
            <div class="item-content">
              <div class="item-start">
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quick-prepare-1.jpg" class="item__img">
                </div>
              </div>
              <div class="item-end">
                <h3 class="item__h">
                  遺影用のお写真
                </h3>
                <p class="item__p">
                  ご葬儀で祭壇に飾る遺影は、故人様を偲び、追悼するための大切な役割を果たします。<br>
                  中央福祉葬祭では、故人様に相応しい遺影をお作りいたします。お顔が大きくはっきり写った、故人様らしい表情の写真をご用意ください。
                </p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
</section>

<section>
  <div class="first-prepare" id="first2">
    <div class="prepare-block">
      <div class="prepare-head">
        <h3 class="prepare__h">
          事前に準備しておきたいこと
        </h3>
        <p class="prepare__p">
          ご逝去から通夜・葬儀までの期間は、おおむね2日から3日ほどが一般的とされています。<br>
          大切なお身内を亡くされたご遺族様は、深い悲しみの中であっても、短い時間で葬儀の準備を進めることとなりますので、心身ともに大きな負担がかかります。もしもの時の負担を軽減できるよう、事前に準備しておける事柄をまとめました。
        </p>
      </div>
      <div class="prepare-body">
        <ul class="prepare-list">
          <!-- item1 -->
          <li class="prepare-item">
            <div class="item-content">
              <div class="item-start">
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first-prepare1.jpg" class="item__img">
                </div>
              </div>
              <div class="item-end">
                <h4 class="item__h">
                  ① 喪主を選ぶ
                </h4>
                <p class="item__p">
                  喪主は、遺族や親族を代表して葬儀全体を取り仕切る重要な役割で、滞りなく葬儀を営むうえで不可欠な存在です。<br>
                  喪主選びの基準について特に決まりはありませんが、故人様の配偶者や長男など、近親者が務めるケースが多くを占めます。<br>
                  葬儀を主導する立場となる喪主を事前に決めておくことで、葬儀の準備を円滑に進めることが可能となります。
                </p>
              </div>
            </div>
          </li>
          <!-- item2 -->
          <li class="prepare-item">
            <div class="item-content">
              <div class="item-start">
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first-prepare2.jpg" class="item__img">
                </div>
              </div>
              <div class="item-end">
                <h4 class="item__h">
                  ② 葬儀の予算・内容
                </h4>
                <p class="item__p">
                  葬儀に対する考え方は1人ひとり異なるため、関係者全員の意見を短時間でまとめるのは、かなり難しいでしょう。<br>
                  とはいえ、葬儀までに残された時間には限りがあるため、ご逝去当日、もしくは翌日におこなわれる葬儀社との打ち合わせまでに、詳細な葬儀内容を決める必要があります。<br>
                  しかし、あらかじめ親族内で葬儀の形式や規模などについて意見を取りまとめておくと、実際にご葬儀に慌てることはありません。
                  また大まかな予算を決めておくだけで、葬儀社から最適なプランを提案してもらうことも可能です。<br>
                  特に予算については、ご遺族様の生活に影響する部分となりますので、事前にしっかりと確認しておきましょう。
                </p>
              </div>
            </div>
          </li>
          <!-- item3 -->
          <li class="prepare-item">
            <div class="item-content">
              <div class="item-start">
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first-prepare3.jpg" class="item__img">
                </div>
              </div>
              <div class="item-end">
                <h4 class="item__h">
                  ③ ご安置場所
                </h4>
                <p class="item__p">
                  近年では病院や高齢者施設などで亡くなる方が多くなっています。その場合、故人様を早めに安置場所まで搬送するよう求められることもあります。<br>
                  ご自宅に故人様をご安置できる場合は問題ありませんが、住宅事情や周辺環境などで自宅でのご安置が難しい方は、葬儀社などの安置施設を利用するケースが多いようです。<br>
                  現在では、ほとんどの葬儀社で安置施設を用意しているものの、ご安置後の面会や付き添い安置の可否などといった条件は葬儀社ごとに異なります。
                  後悔のない葬儀にするためには、希望に合った安置施設の確保も大切な要素となりますので、葬儀社を選ぶ際の条件に加えておくことをおすすめします。
                </p>
              </div>
            </div>
          </li>
          <!-- item4 -->
          <li class="prepare-item">
            <div class="item-content">
              <div class="item-start">
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first-prepare4.jpg" class="item__img">
                </div>
              </div>
              <div class="item-end">
                <h4 class="item__h">
                  ④ 宗旨宗派の確認
                </h4>
                <p class="item__p">
                  葬儀は故人様をご供養するための厳粛な宗教儀式ですので、信仰している宗派の作法に則って執り行う必要があります。<br>
                  そのため、通夜式や葬儀・告別式でのお勤めは、菩提寺に依頼するのが一般的です。<br>
                  菩提寺に家のお墓がある、あるいは普段から仏事について相談できる寺院があれば、葬儀を営むにあたっても困ることはないでしょう。<br>
                  しかし近年では、親世代と子供・孫世代が離れた場所で暮らしているケースも多く、家の宗派を把握していない方が少なくないようです。<br>
                  家の宗派を確認する手段としては、仏壇やお墓を確認する、親族に尋ねるなどの方法がありますが、思いのほか時間がかかる可能性もあります。<br>
                  もしもの時に慌てないよう、あらかじめ家の宗派を確認しておきましょう。
                </p>
              </div>
            </div>
          </li>
          <!-- item5 -->
          <li class="prepare-item">
            <div class="item-content">
              <div class="item-start">
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first-prepare5.jpg" class="item__img">
                </div>
              </div>
              <div class="item-end">
                <h4 class="item__h">
                  ⑤ 遺影用の写真選び
                </h4>
                <p class="item__p">
                  通夜式や葬儀・告別式で祭壇に飾られる遺影は、故人様を偲び追悼するうえで、非常に大きな役割を果たします。<br>
                  そのため葬儀を営むにあたって、通常は葬儀社から遺影用の写真の用意を求められます。<br>
                  画像の加工技術が進歩した現在では、背景や服装などの自然な修正も可能ですし、かつてのように真正面を向いた写真でなくとも問題ありません。<br>
                  むしろ最近では、生前の故人様のお姿が思い起こされるような、自然な表情の写真を用いるケースが多くなっています。<br>
                  とはいえ限られた時間の中で、故人様らしい表情の写真を選ぶときに迷われる場合もありますので、あらかじめ何枚かピックアップしておくと安心です。
                </p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="first-flow" id="first3">
    <div class="flow-block">
      <div class="flow-head">
        <h2 class="flow__h">
          もしもの時の流れ
        </h2>
        <p class="flow__p">
          もしもの時は、24時間365日対応 安置室完備の中央福祉葬祭までお電話ください。ご希望の場所まで最短1時間ほどでお迎えにあがります。
        </p>
      </div>
      <div class="flow-body js-scrollable">
        <ul class="flow-list">
          <!-- item1 -->
          <li class="flow-item">
            <div class="item-title-wrap">
              <h3 class="item__h">
                ①お電話
              </h3>
            </div>
            <div class="item-img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first-flow1.jpg" class="item__img">
            </div>
            <div class="item-text-wrap">
              <p class="item__p">
                まずは中央福祉葬祭までご連絡ください。専門スタッフが24時間365日、いつでも対応いたします。<br>
                <a href="tel:<?php echo $freedial_number; ?>"><?php echo $freedial_number; ?></a>
              </p>
            </div>
          </li>
          <!-- item2 -->
          <li class="flow-item">
            <div class="item-title">
              <h3 class="item__h">
                ②お迎え
              </h3>
            </div>
            <div class="item-img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first-flow2.jpg" class="item__img">
            </div>
            <div class="item-text-wrap">
              <p class="item__p">
                ご希望の場所まで最短1時間ほどでお迎えにあがります。その後は、故人様をご安置場所までお連れします。
              </p>
            </div>
          </li>
          <!-- item3 -->
          <li class="flow-item">
            <div class="item-title">
              <h3 class="item__h">
                ③ご安置
              </h3>
            </div>
            <div class="item-img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first-flow3.jpg" class="item__img">
            </div>
            <div class="item-text-wrap">
              <p class="item__p">
                通夜・葬儀までのあいだ、故人様をご安置いたします。ご自宅でのご安置が難しい場合は、当社の安置施設をご利用ください。
              </p>
            </div>
          </li>
          <!-- item4 -->
          <li class="flow-item">
            <div class="item-title">
              <h3 class="item__h">
                ④お打ち合わせ
              </h3>
            </div>
            <div class="item-img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first-flow4.jpg" class="item__img">
            </div>
            <div class="item-text-wrap">
              <p class="item__p">
                ご葬儀の内容や日程について、打ち合わせをおこないます。ご要望やご予算に最適な葬儀プランを、ご提案いたします。
              </p>
            </div>
          </li>
          <!-- item5 -->
          <li class="flow-item">
            <div class="item-title">
              <h3 class="item__h">
                ⑤お葬式
              </h3>
            </div>
            <div class="item-img-wrap">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first-flow5.jpg" class="item__img">
            </div>
            <div class="item-text-wrap">
              <p class="item__p">
                事前に伺った内容に沿って、通夜・葬儀を執り行います。安心してお過ごしいただけるよう、誠心誠意サポートさせていただきます。
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="first-plan" id="first4">
    <div class="plan-block">
      <div class="plan-head">
        <h2 class="plan__h">
          葬儀プランの選び方
        </h2>
        <p class="plan__p">
          中央福祉葬祭では、多種多様なニーズのお応えできるよう、さまざまな葬儀プランをご用意しております。<br>
          お客様の状況やご要望・ご予算、想定される参列者数などを伺ったうえで、最適なプランをご提案いたします。<br>
          葬儀プラン選びの目安にしていただけるよう、各プランの特徴をまとめました。
        </p>
      </div>
      <div class="plan-body js-scrollable">
        <?php
        $home_id = get_option('page_on_front');
        $selected_posts = get_field('select_plan_list', $home_id);
        if (is_array($selected_posts) && !empty($selected_posts)) {
        ?>
          <ul class="plan-etc-list">
            <?php
            foreach ($selected_posts as $selected_post) {
              $color_set = "color_" . get_field('plan_color', $selected_post);
            ?>
              <li class="plan-etc-item">
                <div class="plan-etc-wrap <?php echo $color_set; ?>">
                  <div class="plan-etc-item-img"><a href="<?php echo get_the_permalink($selected_post); ?>" class="plan-etc-item-link">
                      <?php
                      if (has_post_thumbnail($selected_post)) {
                        echo get_the_post_thumbnail($selected_post, 'medium', array('class' => 'plan-etc-item__img'));
                      }
                      ?>
                    </a>
                  </div>
                  <div class="plan-etc-item-title">
                    <h4 class="plan-etc-item__h">
                      <a href="<?php echo get_the_permalink($selected_post); ?>">
                        <spna class="plan-etc-item-cap">川口市・蕨市</spna>
                        <?php echo get_the_title($selected_post); ?>
                      </a>
                    </h4>
                  </div>
                  <div class="plan-etc-item-price">
                    <span>
                      <span class="plan-etc-item-price-cap">会員価格</span>
                      <?php echo number_format(get_field('plan_members_price', $selected_post)); ?><span class="plan-etc-item-price-small">円</span>
                    </span>
                    <span class="plan-etc-item-price-tax">
                      (税込価格 <span class="size_lg"><?php echo number_format(get_field('plan_members_tax_price', $selected_post)); ?></span>円)
                    </span>
                  </div>
                  <div class="plan-etc-item-count">
                    <span>
                      <span class="size_lg"><?php echo get_field('plan_member_count', $selected_post); ?></span><br>におすすめ
                    </span>
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
</section>

<section>
  <div class="first-list" id="first5">
    <div class="list-block">
      <div class="list-head">
        <h2 class="list__h">
          葬儀の流れ
        </h2>
        <p class="list__p">
          ほとんどの方にとって、大切な方のご葬儀を営むのは初めての経験となりますので、気がかりなことも多く落ち着かないことでしょう。<br>
          しかし葬儀の全体像をおおまかに把握しておくだけでも、万が一の時の不安は少しだけ和らぎます。<br>
          近年では葬儀も多様化していますが、一般的には以下のような流れで進みます。
        </p>
      </div>
      <div class="list-body js-scrollable">
        <div class="list-list-wrap">
          <div class="list-bar-fst">
            ご逝去日
          </div>
          <div class="list-bar-sec">
            通夜当日
          </div>
          <div class="list-bar-trd">
            葬儀当日
          </div>
          <ul class="list-list">
            <!-- item 1 -->
            <li class="list-item">
              <div class="item-content">
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first-list1.png" class="item__img">
                </div>
                <h3 class="item__h">お迎え</h3>
              </div>
            </li>
            <!-- item 2 -->
            <li class="list-item">
              <div class="item-content">
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first-list2.png" class="item__img">
                </div>
                <h3 class="item__h">ご安置</h3>
              </div>
            </li>
            <!-- item 3 -->
            <li class="list-item">
              <div class="item-content">
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first-list3.png" class="item__img">
                </div>
                <h3 class="item__h">打ち合わせ</h3>
              </div>
            </li>
            <!-- item 4 -->
            <li class="list-item">
              <div class="item-content">
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first-list4.png" class="item__img">
                </div>
                <h3 class="item__h">納棺</h3>
              </div>
            </li>
            <!-- item 5 -->
            <li class="list-item">
              <div class="item-content">
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first-list5.png" class="item__img">
                </div>
                <h3 class="item__h">通夜式</h3>
              </div>
            </li>
            <!-- item 6 -->
            <li class="list-item">
              <div class="item-content">
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first-list6.png" class="item__img">
                </div>
                <h3 class="item__h">告別式</h3>
              </div>

            </li>
            <!-- item 7 -->
            <li class="list-item">
              <div class="item-content">
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first-list7.png" class="item__img">
                </div>
                <h3 class="item__h">出棺</h3>
              </div>
            </li>
            <!-- item 8 -->
            <li class="list-item">
              <div class="item-content">
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first-list8.png" class="item__img">
                </div>
                <h3 class="item__h">火葬</h3>
              </div>
            </li>
            <!-- item 9 -->
            <li class="list-item">
              <div class="item-content">
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first-list9.png" class="item__img">
                </div>
                <h3 class="item__h">収骨</h3>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
</section>

<section>
  <div class="first-consult" id="first6">
    <div class="consult-block">
      <div class="consult-head">
        <h2 class="consult__h">
          葬儀の事前相談
        </h2>
      </div>
      <div class="consult-body">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first-consult.jpg" class="consult__img">
        <p class="consult__p">
          中央福祉葬祭では、葬儀の事前相談を承っておりますので、どうぞお気軽にお問い合わせください。<br>
          身近な方の葬儀は、誰にとっても不慣れなものですので、分からないことばかりで不安に感じるのも当然でしょう。<br>
          しかし葬儀の事前相談では、どんな些細な疑問にも、経験豊富なスタッフが1つひとつ丁寧にお応えいたしますので、不安の解消に役立ちます。
          また中央福祉葬祭では、もっと気軽に相談していただけるよう、LINE公式アカウントを開設いたしました。<br>
          LINE公式アカウントを友だち登録していただくだけで、トーク画面から直接ご質問いただけます。
        </p>
        <a href="<?php echo home_url(); ?>/contact" class="consult__link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-ban-line.svg" alt="LINEで相談" class="consult-line__img">
        </a>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="first-line">
    <div class="line-block">
      <?php get_template_part('template-parts/component-line'); ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>