<?php
get_header();
?>

<main id="primary" class="site-main">

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
    <div class="page">
      <div class="wrap-page container-fluid py-14 py-md-30">
        <div class="block-page mx-auto">
          <h2 class="h4 text-center">お探しのページが見つかりませんでした</h2>
          <p class="text-center">URLが正しく入力されているかどうか、もう一度ご確認ください。</p>
          <div class="text-center mt-10">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">トップページへ戻る</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/content', 'add-footer'); ?>

</main><!-- #main -->

<?php
get_footer();
