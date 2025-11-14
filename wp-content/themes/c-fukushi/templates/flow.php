<?php
/*
Template Name: flow
*/

get_header();
$freedial_number = get_theme_mod('freedial_number');
?>
<?php get_template_part('template-parts/component-header'); ?>
<?php get_template_part('template-parts/header/breadcrumb'); ?>

<section>
  <div class="flow-flow">
    <div class="flow-block">
      <div class="flow-title-head">
        <h2 class="flow-title__h">
          知っておきたい葬儀の流れ
        </h2>
        <p class="flow-title__p">
          日常生活の中で、できるだけ考えたくないことかもしれませんが、どのような人生にも終焉は訪れます。誰もがいつかは遺族になり、告別式の参列者になることも避けられません。悲しみに打ちひしがれ、心も動転するような場面で、遺族や親しい人たちを支えるために、しきたりや作法があるともいえます。最近は死を忌むべきことと考えるより、人生を全うすることとして、自らの葬儀の演出を前もって指示しておいたり、希望しておくことも広まってきました。<br>いざというとき慌てないために、基本的な葬儀の流れ、会葬のマナーは心得ておきましょう。
        </p>
      </div>
      <section>
        <?php get_template_part('template-parts/component-flow-page'); ?>
      </section>
    </div>
  </div>
</section>

<section>
  <div class="flow-line">
    <div class="line-block">
      <?php get_template_part('template-parts/component-line'); ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>