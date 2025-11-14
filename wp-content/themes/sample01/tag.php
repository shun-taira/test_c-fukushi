<?php
get_header();
?>

<?php
$column_header_image_url = get_theme_mod('column_header_image');
?>
<main id="primary" class="site-main">
  <section>
    <div class="add-hero">
      <div class="wrap-add-hero">
        <div class="jumbotron mb-0 d-flex align-items-center jumbotron-fluid add-hero-content" style="background-image: url('<?php echo $column_header_image_url; ?>')">
          <div class="container mx-auto">
            <h1 class="h2 add-hero__h">タグ：
              <?php
              single_tag_title();
              ?>
            </h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="posts">
      <div class="wrap-posts container-fluid py-14 py-md-30">
        <div class="block-posts mx-auto">
          <?php
          // ループ
          if (have_posts()) :
          ?>
            <div class="row">
              <?php
              while (have_posts()) : the_post();
              ?>
                <div class="col-24 col-md-12">
                  <div class="card mb-4 border-0">
                    <div class="card-body">
                      <a class="card-link" href="<?php the_permalink(); ?>">
                        <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('medium', array('class' => 'card-img img-fluid'));
                        } else {
                          echo '<img src="' . get_template_directory_uri() . '/images/no-image.png" class="card-img img-fluid" alt="">';
                        }
                        ?>
                      </a>
                      <h2 class="h5 mt-10 card-title"><?php the_title(); ?></h2>
                      <div class="card-meta">
                        <time class="card-meta__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
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
                      </div>
                    </div>
                  </div>
                </div>
              <?php
              endwhile;
              ?>
            </div>
          <?php
          endif;
          ?>
          <div class="pagination mt-10">
            <?php bootstrap_pagination(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('template-parts/content', 'add-footer'); ?>

</main><!-- #main -->

<?php
get_footer();
