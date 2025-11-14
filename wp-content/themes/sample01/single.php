<?php
get_header();
?>

<main id="primary" class="site-main">

  <?php
  while (have_posts()) :
    the_post();
  ?>
    <div class="breadcrumb">
      <div class="breadcrumb-block container-fluid">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if (function_exists('bcn_display')) {
            bcn_display();
          } ?>
        </div>
      </div>
    </div>
    <div class="single">
      <div class="wrap-single container-fluid py-14 py-md-30">
        <div class="block-single mx-auto">
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header mb-20">
              <?php the_title('<h1 class="entry-title h3">', '</h1>'); ?>

              <div class="entry-meta">
                <time class="entry-meta__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                <span class="card-meta__category">
                  <?php
                  //  投稿のカテゴリーを取得してリンクで表示
                  $categories = get_the_category();
                  //  ループで表示
                  foreach ($categories as $category) {
                    echo '<a class="mr-4 mb-2 btn btn-sm btn-outline-primary" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                  }
                  ?>
                </span>
              </div><!-- .entry-meta -->
            </header><!-- .entry-header -->
            <div class="entry-content">
              <?php
              if (has_post_thumbnail()) {
              ?>
                <div class="entry-thumbnail mb-20">
                  <?php
                  the_post_thumbnail('full', array('class' => 'img-fluid mx-auto d-block'));
                  ?>
                </div>
              <?php
              }
              ?>
              <?php
              the_content();

              wp_link_pages(
                array(
                  'before' => '<div class="page-links">' . __('Pages:', 'yourtheme'),
                  'after'  => '</div>',
                )
              );
              ?>
            </div><!-- .entry-content -->
          </article><!-- #post-<?php the_ID(); ?> -->
        </div>
        <?php
        if (has_tag()) :
        ?>
          <div class="single-tags ">
            <dl class="tags-list d-flex">
              <dt class="tags-title text-nowrap">
                タグ：
              </dt>
              <dd class="tags-tags">
                <?php
                // タグ
                the_tags('<ul class="post-tags d-flex flex-wrap"><li class="mr-2">', '</li><li class="mr-2">', '</li></ul>');
                ?>
              </dd>
            </dl>
          </div>
        <?php
        endif;
        ?>
        <div class="single-sns">
          <?php
          // SNSシェアボタン
          get_template_part('template-parts/content', 'sns-share');
          ?>
        </div>
        <div class="single-pagination mt-20">
          <?php
          the_post_navigation(
            array(
              'prev_text' => '<span class="nav-subtitle">&laquo;</span> <span class="nav-title">%title</span>',
              'next_text' => '<span class="nav-title">%title</span> <span class="nav-subtitle">&raquo;</span>',
            )
          );
          ?>
        </div>
      </div>
    </div>
  <?php
  endwhile; // End of the loop.
  ?>

  <?php get_template_part('template-parts/content', 'add-footer'); ?>

</main><!-- #main -->

<?php
get_footer();
