<?php
/*
Template Name: quick
*/

get_header();
$freedial_number = get_theme_mod('freedial_number');
?>
<?php get_template_part('template-parts/component-header'); ?>
<?php get_template_part('template-parts/header/breadcrumb'); ?>

<section>
  <div class="quick-hero">
    <div class="hero-block show_pc">
      <h2 class="hero__h">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/qucik-hero-text.svg" class="hero__img" alt="ご危篤・ご逝去でお急ぎの方 24時間365日いつでも対応いたします。深夜・早朝でも大丈夫です。">
      </h2>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/qucik-hero-woman.png" class="hero-woman__img">
    </div>
    <div class="hero-block show_sp">
      <h2 class="hero__h">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/qucik-hero-text_sp.svg" class="hero__img" alt="ご危篤・ご逝去でお急ぎの方 24時間365日いつでも対応いたします。深夜・早朝でも大丈夫です。">
      </h2>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/qucik-hero-woman.png" class="hero-woman__img">
    </div>
    <div class="hero-sub-block show_sp">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/qucik-hero-text-sub_sp.svg" class="hero__img" alt="お電話で伺うこと ①依頼主：名前、電話番号 ②故人様：名前、住所 ③お迎え場所：病院、施設等の住所、電話番号">
    </div>
  </div>
</section>

<section>
  <div class="quick-display">
    <div class="display-block">
      <div class="display-head">
        <h2 class="display__h">
          ご危篤・ご逝去でお急ぎの方へ
        </h2>
        <p class="display__p">
          もしものときは、24時間年中無休対応<br>
          【 中央福祉葬祭<span class="size_lg">(<a class="display__link" href="tel:<?php echo $freedial_number; ?>"><?php echo $freedial_number; ?></a>)</span>】までお電話ください。<br>
          「はじめてのお葬式でわからない」、「いくらくらいかかるのか予算が不安」など、<br class="display_pc">ご相談に応じて丁寧に対応させていただきます。<br><br>受付電話は<span class="color_red">24時間・年中無休</span>で対応いたします。<br>急なことでも安心してお電話ください。<br>また、こちらのページでご依頼の流れをご案内します。<br>お電話をかける前にご覧になって下さい。
        </p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="quick-prepare">
    <div class="prepare-block">
      <div class="prepare-head">
        <h2 class="prepare__h">
          すぐにご用意いただきたいもの
        </h2>
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
          <li class="prepare-item">
            <div class="item-content">
              <div class="item-start">
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quick-prepare-2.jpg" class="item__img">
                </div>
              </div>
              <div class="item-end">
                <h3 class="item__h">
                  印鑑
                </h3>
                <p class="item__p">
                  死亡届の提出、ならびに火葬許可証の申請は、弊社が無料で代行いたします。<br>
                  その際に届出人様の印鑑が必要となりますので、市販の三文判などをご用意ください。<br>
                  ＊インク浸透印は不可
                </p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
</section>

<section>
  <div class="quick-flow">
    <div class="flow-block">
      <div class="flow-head">
        <h2 class="flow__h">
          ご依頼の流れ
        </h2>
      </div>
      <div class="flow-body">
        <ul class="flow-list">
          <li class="flow-item">
            <div class="item-content">
              <div class="item-start">
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quick-flow-1.jpg" class="item__img">
                </div>
              </div>
              <div class="item-end">
                <h3 class="item__h">
                  ①お電話
                </h3>
                <p class="item__p">
                  まずは中央福祉葬祭までご連絡ください。<br>
                  専門スタッフが24時間365日、いつでも対応いたします。<br>
                  <span class="color_red">「<a class="flow__link" href="tel:<?php echo $freedial_number; ?>"><?php echo $freedial_number; ?></a>」</span><br>＊病院から紹介された葬儀社を断っても失礼には当たりません<br>
                  <br>
                  ■お電話で伺うこと<br>
                  ①お電話いただいている方のお名前と連絡先電話番号<br>
                  ②故人様のお名前<br>
                  ③お迎えに伺う場所（ご自宅、病院、警察署など）
                </p>
              </div>
            </div>
          </li>
          <li class="flow-item">
            <div class="item-content">
              <div class="item-start">
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quick-flow-2.jpg" class="item__img">
                </div>
              </div>
              <div class="item-end">
                <h3 class="item__h">
                  ②迅速にお迎えにあがります
                </h3>
                <p class="item__p">
                  ご希望の場所まで最短1時間ほどでお迎えにあがります。その後は、故人様をご安置場所までお連れします。<br>
                  ご自宅でのご安置が難しい場合は、当社の安置施設をご利用ください。
                </p>
              </div>
            </div>
          </li>
          <li class="flow-item">
            <div class="item-content">
              <div class="item-start">
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quick-flow-3.jpg" class="item__img">
                </div>
              </div>
              <div class="item-end">
                <h3 class="item__h">
                  ③ご葬儀の打ち合わせ
                </h3>
                <p class="item__p">
                  ご葬儀の内容や日程について、打ち合わせをおこないます。ご要望やご予算を伺ったうえで詳細な見積もりを作成し、最適な葬儀プランをご提案いたします。
                </p>
              </div>
            </div>
          </li>
          <?php /* 
          <li class="flow-item">
            <div class="item-content">
              <div class="item-start">
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quick-flow-4.jpg" class="item__img">
                </div>
              </div>
              <div class="item-end">
                <h3 class="item__h">
                  ④ご葬儀の依頼完了です
                </h3>
                <p class="item__p">
                  死亡確認から数時間ほどで「死お打ち合わせが終わり、ご依頼完了となります。<br>
                  お打ち合わせの内容を基にして葬儀を進めさせていただきます。診断書」が発行されます。「死亡診断書」は、役所に提出する「死亡届」と1対になっていますので、受け取り後は大切に保管します。
                </p>
              </div>
            </div>
          </li>
          <li class="flow-item">
            <div class="item-content">
              <div class="item-start">
                <div class="item-img-wrap">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quick-flow-5.jpg" class="item__img">
                </div>
              </div>
              <div class="item-end">
                <h3 class="item__h">
                  ⑤お見積もり
                </h3>
                <p class="item__p">
                  ご葬儀の内容により、費用が異なります。お見積もりをご提示いたしますので、ご納得いただけるまでご相談ください。<br>
                  ご葬儀の内容により、費用が異なります。お見積もりをご提示いたしますので、ご納得いただけるまでご相談ください。
                </p>
              </div>
            </div>
          </li>
           */ ?>
        </ul>
      </div>
    </div>
  </div>
</section>


<section>
  <div class="quick-line">
    <div class="line-block">
      <?php get_template_part('template-parts/component-line'); ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>