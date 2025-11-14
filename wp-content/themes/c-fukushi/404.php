<?php
/*
Template Name: request
*/

get_header();
$freedial_number = get_theme_mod('freedial_number');
?>
<section>
  <div class="component-header">
    <div class="component-header-block">
      <h1 class="component-header__h">404 Not Found</h1>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/header/breadcrumb'); ?>

<section>
  <div class="page-404">
    <div class="page-404-block">
      <h1 class="page-404__h">お探しのページが<br class="display_sp">見つかりませんでした</h1>
      <p class="page-404__p">
        URLが正しく入力されているかどうか、<br>もう一度ご確認ください。
      </p>
      <a href="<?php echo home_url(); ?>" class="page-404__link">トップページへ戻る</a>
    </div>
  </div>
</section>

<?php
get_footer();
?>