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
          【 ファミそう株式会社<span class="size_lg">(<a class="display__link" href="tel:<?php echo $freedial_number; ?>"><?php echo $freedial_number; ?></a>)</span>】までお電話ください。<br>
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
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/quick-prepare-1.jpg" class="item__img">
                </div>
              </div>
              <div class="item-end">
                <h3 class="item__h">
                  お写真
                </h3>
                <p class="item__p">
                  祭壇にお飾りするお写真をご用意ください。<br>葬儀後もご自宅に残るお写真ですので、出来る限り写りの良いお写真をお選びください。
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
                  死亡診断書を役所へ提出する手続きのために必要です。<br>死亡診断書の提出手続きは弊社で代行いたします。<br>※シャチハタはご利用になれません。
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
                  ①まずお電話ください
                </h3>
                <p class="item__p">
                  ご葬儀受付は、年中無休・24時間体制でもしもの時にも安心してご利用できます。有線電話・携帯電話の関係なくつながります。<br>
                  まずは<span class="color_red">「<a class="flow__link" href="tel:<?php echo $freedial_number; ?>"><?php echo $freedial_number; ?></a>」</span>までお電話ください。
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
                  ②最短30分でお迎えに伺います
                </h3>
                <p class="item__p">
                  安置室をご希望の場合、病院・ご自宅までお迎えに上がります。<br>
                  ・ご自宅で亡くなられた場合：当社係員が直ちにお伺いします。<br>
                  ・病院で亡くなられた場合：病院に寝台車でお迎えにあがり、ご自宅あるいは葬儀式場へご移送いたします。<br>
                  病院等、ご自宅以外でお亡くなりになった場合、指定場所まで寝台車でまいり、ご遺体をご自宅あるいは葬儀式場へご移送いたします。
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
                  ③お打ち合わせをさせていただきます
                </h3>
                <p class="item__p">
                  ご遺族のご意向に沿ってご相談・打ち合わせをさせていただきます。<br>
                  ・喪主の確認<br>
                  ・世話役の依頼（ご遺族を助けて通夜・葬儀・告別式を滞りなく進行するために依頼します）<br>
                  ・ご寺院様への連絡<br>
                  ・故人様の遺志やご遺族の要望の確認<br>
                  ・葬儀の型式（仏式、神式、キリスト教、無宗教形式など）の確認<br>
                  ・通夜・葬儀・告別式の日時・場所の決定、火葬場の手配<br>
                  ・式典内容・進行の打ち合わせ・確認<br>
                  ・葬儀式場・祭壇・車両・使用品など打ち合わせた内容についてのお見積り書の確認
                </p>
              </div>
            </div>
          </li>
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