<?php

/*
Template Name: urgency
*/

get_header();
$freedial_number = get_theme_mod('freedial_number');
?>

<main id="primary" class="site-main">

  <?php
  while (have_posts()) :
    the_post();
  ?>
    <section>
      <div class="add-hero">
        <div class="wrap-add-hero">
          <div class="jumbotron mb-0 d-flex align-items-center jumbotron-fluid add-hero-content">
            <img src="<?php echo get_template_directory_uri(); ?>/images/urgency/urgency-header-pc.jpg" class="add-hero-content-img img-fluid d-none d-md-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/urgency/urgency-header-sp.jpg" class="add-hero-content-img img-fluid d-block d-md-none">
          </div>
        </div>
      </div>
    </section>
    <div class="breadcrumb">
      <div class="breadcrumb-block container-fluid">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if (function_exists('bcn_display')) {
            bcn_display();
          } ?>
        </div>
      </div>
    </div>
    <section>
      <div class="wrap-urgency container-fluid py-16 py-md-30 py-lg-50">
        <h1 class="h3 urgency-title text-center mb-10 mb-md-14">
          ご危篤・ご逝去でお急ぎの方へ
        </h1>
        <p class="h6 urgency__p">もしものときは、24時間年中無休対応
          <br>【 ファミそう株式会社 (<a href="tel:<?php echo $freedial_number ? $freedial_number : '#'; ?>"><?php echo $freedial_number ? $freedial_number : ''; ?></a>) 】までお電話ください。
          <br><br>
          「はじめてのお葬式でわからない」、「いくらくらいかかるのか予算が不安」など、<br>ご相談に応じて丁寧に対応させていただきます。<br><br>
          受付電話は24時間・年中無休で対応いたします。<br>急なことでも安心してお電話ください。<br>
          また、こちらのページでご依頼の流れをご案内します。<br>お電話をかける前にご覧になって下さい。
        </p>
        <section>
          <div class="urgency">
            <div class="wrap-urgency pt-14 pt-md-30">
              <h1 class="h5 urgency__h mb-20 mb-md-30 py-4 px-8 rounded">
                <i class="bi bi-flower3"></i>
                すぐにご用意頂きたいもの
              </h1>
              <div class="urgency-media media mt-30">
                <span class="media-img-wrap  mr-8">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/urgency/iei.jpg" class="media-img img-fluid">
                </span>
                <div class="media-body">
                  <h2 class="h5 mt-0">お写真</h2>
                  <p>祭壇にお飾りするお写真をご用意ください。<br>
                    葬儀後もご自宅に残るお写真ですので、
                    出来る限り写りの良いお写真をお選びください。
                  </p>
                </div>
              </div>
              <div class="urgency-media media mt-30">
                <span class="media-img-wrap  mr-8">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/urgency/inkan.jpg" class="media-img img-fluid">
                </span>
                <div class="media-body">
                  <h2 class="h5 mt-0">印鑑</h2>
                  <p>死亡診断書を役所へ提出する手続きのために必要です。<br>
                    死亡診断書の提出手続きは弊社で代行いたします。<br>
                    ※シャチハタはご利用になれません。</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="urgency">
            <div class="wrap-urgency pt-14 pt-md-30">
              <h1 class="h6 urgency__h mb-20 mb-md-30 py-4 px-8 rounded">
                <i class="bi bi-flower3"></i>
                ご依頼の流れ
              </h1>
              <div class="urgency-media media mt-30">
                <span class="media-num-wrap mr-4">
                  01
                </span>
                <div class="media-body media-border pl-6">
                  <h2 class="h6 mt-0">まずお電話ください</h2>
                  <p>ご葬儀受付は、年中無休・24時間体制でもしもの時にも安心してご利用できます。<br>
                    有線電話・携帯電話の関係なくつながります。<br>
                    まずは「<a href="tel:<?php echo $freedial_number ? $freedial_number : '#'; ?>"><?php echo $freedial_number ? $freedial_number : ''; ?></a>」までお電話ください。
                  </p>
                </div>
              </div>
              <div class="urgency-media media mt-30">
                <span class="media-num-wrap mr-4">
                  02
                </span>
                <div class="media-body media-border pl-6">
                  <h2 class="h6 mt-0">最短30分でお迎えに伺います</h2>
                  <p>安置室をご希望の場合、病院・ご自宅までお迎えに上がります。<br>
                    ・ご自宅で亡くなられた場合：当社係員が直ちにお伺いします。<br>
                    ・病院で亡くなられた場合：病院に寝台車でお迎えにあがり、ご自宅あるいは葬儀式場へご移送いたします。<br>
                    病院等、ご自宅以外でお亡くなりになった場合、指定場所まで寝台車でまいり、ご遺体をご自宅あるいは葬儀式場へご移送いたします。
                  </p>
                </div>
              </div>
              <div class="urgency-media media mt-30">
                <span class="media-num-wrap mr-4">
                  03
                </span>
                <div class="media-body media-border pl-6">
                  <h2 class="h6 mt-0">お打ち合わせをさせていただきます</h2>
                  <p>ご遺族のご意向に沿ってご相談・打ち合わせをさせていただきます。<br>
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
              <div class="urgency-media media mt-30">
                <span class="media-num-wrap mr-4">
                  04
                </span>
                <div class="media-body media-border pl-6">
                  <h2 class="h6 mt-0">ご葬儀の依頼完了です</h2>
                  <p>お打ち合わせが終わり、ご依頼完了となります。<br>
                    お打ち合わせの内容を基にして葬儀を進めさせていただきます。
                  </p>
                </div>
              </div>
              <div class="urgency-media media mt-30">
                <span class="media-num-wrap mr-4">
                  05
                </span>
                <div class="media-body media-border pl-6">
                  <h2 class="h6 mt-0">葬儀当日</h2>
                  <p>大切な方とのお別れを、皆様の想いを伝えられる葬儀になれるように最後まで丁寧にサポートいたします。<br>
                    通夜・告別式・初七日法要・精進落としなどお客様のご負担を減らすよう、
                    葬儀後まで親身になってサポートいたします。
                  </p>
                </div>
              </div>
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
