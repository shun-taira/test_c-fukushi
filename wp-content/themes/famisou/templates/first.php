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
  <div class="first-prepare">
    <div class="prepare-block">
      <div class="prepare-head">
        <p class="prepare__p">
          はじめてのご葬儀は不慣れなことも多いため、不安を感じるのも無理はありません。<br>
          しかし葬儀の流れや必要な準備について、少しだけでも理解しておけば、もしもの時も慌てずに済みます。<br>
          この機会に、基本的なポイントだけでも押さえておきましょう。
        </p>
      </div>
      <div class="prepare-body">
        <h3 class="prepare__h-sub">
          事前準備
        </h3>
        <p class="prepare__p-sub">
          ご逝去から通夜・葬儀までの期間は、おおむね2日から3日ほどが一般的とされています。<br>
          大切なお身内を亡くされたご遺族様は、深い悲しみの中であっても、短い時間で葬儀の準備を進めることとなりますので、心身ともに大きな負担がかかります。もしもの時の負担を軽減できるよう、事前に準備しておける事柄をまとめました。
        </p>
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
                  ② 葬儀の予算や内容を決める
                </h4>
                <p class="item__p">
                  葬儀に対する考え方は1人ひとり異なるため、関係者全員の意見を短時間でまとめるのは、かなり難しいでしょう。とはいえ、葬儀までに残された時間には限りがあるため、ご逝去当日、もしくは翌日におこなわれる葬儀社との打ち合わせまでに、詳細な葬儀内容を決める必要があります。しかし、あらかじめ親族内で話し合うなどして、葬儀の形式や規模などについて意見を取りまとめておけば、後になってトラブルになる心配はありません。<br>
                  また大まかな予算を決めておくだけで、葬儀社から最適なプランを提案してもらうことも可能です。特に予算については、ご遺族様の生活に影響する部分となりますので、事前にしっかりと確認しておきましょう。
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
                  ③ 安置場所を考えておく
                </h4>
                <p class="item__p">
                  近年では病院や高齢者施設などで亡くなる方も多くなっていますが、こうしたケースでは、故人様を早めに安置場所まで搬送するよう求められることも珍しくありません。<br>
                  ご自宅に故人様を安置できる場合は問題ありませんが、住宅事情や周辺環境などで自宅安置が難しい方は、葬儀社などの安置施設を利用するケースが多いようです。<br>
                  現在では、ほとんどの葬儀社で安置施設を用意しているものの、ご安置後の面会や付き添い安置の可否などといった条件は葬儀社ごとに異なります。<br>
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
                  葬儀は故人様をご供養するための厳粛な宗教儀式ですので、信仰している宗派の作法に則って執り行う必要があります。そのため、通夜式や葬儀・告別式でのお勤めは、菩提寺に依頼するのが一般的です。<br>
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
                  通夜式や葬儀・告別式で祭壇に飾られる遺影は、故人様を偲び追悼するうえで、非常に大きな役割を果たします。そのため葬儀を営むにあたって、通常は葬儀社から遺影用の写真の用意を求められます。画像の加工技術が進歩した現在では、背景や服装などの自然な修正も可能ですし、かつてのように真正面を向いた写真でなくとも問題ありません。<br>
                  むしろ最近では、生前の故人様のお姿が思い起こされるような、自然な表情の写真を用いるケースが多くなっています。<br>
                  とはいえ限られた時間の中で、故人様らしい表情の写真を選ぶのは至難の業ですので、あらかじめ何枚かピックアップしておくと安心です。<br>
                  遺影は葬儀が終わった後も手元に残るものですので、故人様を思い出しやすいよう、できるだけ最近撮影されたものが推奨されています。年齢を重ねるにつれ、写真を撮る機会も少なくなりがちですので、お盆やお正月などの機会にたくさん写真を撮っておくとよいでしょう。
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
  <div class="first-flow">
    <div class="flow-block">
      <div class="flow-head">
        <h2 class="flow__h">
          もしもの時の流れ
        </h2>
        <p class="flow__p">
          もしもの時は、24時間365日対応の家族葬専門 自由なお葬式までお電話ください。ご希望の場所まで最短1時間ほどでお迎えにあがります。<br>
          専門のスタッフが現在の状況を伺いますので、深夜・早朝でも遠慮なくご連絡ください。<br>
          ＊病院や施設などから葬儀社を紹介されることもありますが、断っても失礼には当たりません。<br>
          安心してご連絡いただけるよう、ご逝去からご葬儀までの大まかな流れを以下にまとめました。
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
                まずは家族葬専門 自由なお葬式までご連絡ください。専門スタッフが24時間365日、いつでも対応いたします。
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
  <div class="first-plan">
    <div class="plan-block">
      <div class="plan-head">
        <h2 class="plan__h">
          葬儀プランの選び方
        </h2>
        <p class="plan__p">
          家族葬専門 自由なお葬式では、多種多様なニーズのお応えできるよう、さまざまな葬儀プランをご用意しております。<br>
          お客様の状況やご要望・ご予算、想定される参列者数などを伺ったうえで、最適なプランをご提案いたします。<br>
          葬儀プラン選びの目安にしていただけるよう、各プランの特徴をまとめました。
        </p>
      </div>
      <div class="plan-body js-scrollable">
        <?php
        $home_id = get_option('page_on_front');
        $selected_posts = get_field('select_plan', $home_id);
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
                        <?php echo get_the_title($selected_post); ?>
                      </a>
                    </h4>
                  </div>
                  <div class="plan-etc-item-price">
                    <span><?php echo number_format(get_field('plan_general_price', $selected_post)); ?><span class="plan-etc-item-price-small">円</span>
                    </span>
                    <span class="plan-etc-item-price-tax">
                      (税込価格 <span class="size_lg"><?php echo number_format(get_field('plan_general_tax_price', $selected_post)); ?></span>円)
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
  <div class="first-consult">
    <div class="consult-block">
      <div class="consult-head">
        <h2 class="consult__h">
          葬儀の事前相談
        </h2>
      </div>
      <div class="consult-body">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/first-consult.jpg" class="consult__img">
        <p class="consult__p">
          家族葬専門 自由なお葬式では、葬儀の事前相談を承っておりますので、どうぞお気軽にお問い合わせください。身近な方の葬儀は、誰にとっても不慣れなものですので、分からないことばかりで不安に感じるのも当然でしょう。しかし葬儀の事前相談では、どんな些細な疑問にも、経験豊富なスタッフが1つひとつ丁寧にお応えいたしますので、不安の解消に役立ちます。<br>
          また家族葬専門 自由なお葬式では、もっと気軽に相談していただけるよう、LINE公式アカウントを開設いたしました。<br>
          家族葬専門 自由なお葬式のアカウントを友だち登録していただくだけで、トーク画面から直接ご質問いただけます。
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