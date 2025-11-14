<?php
/*
Template Name: archive
*/
get_header();
?>
<?php
$blog_header_image_url = get_theme_mod('blog_header_image');
?>

<section>
  <div class="component-header">
    <div class="component-header-block">
      <h1 class="component-header__h">
        <?php single_cat_title(); ?>
      </h1>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/header/breadcrumb'); ?>
<div class="archive">
  <div class="archive-block">
    <div class="archive-start">
      <?php if (have_posts()) : ?>
        <ul class="archive-list">
          <?php while (have_posts()) : the_post(); ?>
            <li class="archive-item">
              <div class="item-block">
                <div class="item-first">
                  <div class="item-image-wrap">
                    <a class="item-image-link" href="<?php echo the_permalink(); ?>">
                      <?php
                      if (has_post_thumbnail()) {
                        the_post_thumbnail('medium', array('class' => 'item-image'));
                      } else {
                      ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/no-image.png" class="item-image">
                      <?php
                      }
                      ?>
                    </a>
                  </div>
                </div>
                <div class="item-last">
                  <div class="item-info-wrap">
                    <time class="item-datetime" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年n月j日'); ?></time>
                    <?php
                    $terms = get_the_category();
                    if ($terms) {
                      foreach ($terms as $term) {
                        if ($term->slug !== 'column') {
                          echo '<a class="item-category" href="' . get_category_link($term->term_id) . '">' . $term->name . '</a>';
                        }
                      }
                    }
                    ?>
                  </div>
                  <a class="item-link" href="<?php echo the_permalink(); ?>">
                    <h2 class="item__h"><?php the_title(); ?></h2>
                  </a>
                </div>
              </div>
            </li>
          <?php endwhile; ?>
        </ul>
        <?php bootstrap_pagination();
        ?>
      <?php else : ?>
        <p class="paragraph_01">まだ記事がありません</p>
      <?php endif; ?>
    </div>
  </div>
</div>

<section>
  <div class="archive-line">
    <div class="line-block">
      <?php get_template_part('template-parts/component-line'); ?>
    </div>
  </div>
</section>

<?php
get_footer();
?>