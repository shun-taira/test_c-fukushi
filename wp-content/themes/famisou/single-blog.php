<?php
get_header();
?>
<section>
  <div class="component-header">
    <div class="component-header-block">
      <h1 class="component-header__h">お知らせ</h1>
    </div>
  </div>
</section>
<?php get_template_part('template-parts/header/breadcrumb'); ?>
<div class="single">
  <div class="single-block">
    <div class="single-start">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
      ?>
          <div class="item-block">
            <div class="item-fst">
              <time class="item-datetime" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年n月j日'); ?></time>
              <?php
              $terms = get_the_terms($post->ID, 'category-blog');
              if ($terms) {
                foreach ($terms as $term) {
                  echo '<span class="item-category">' . $term->name . '</span>';
                }
              }
              ?>
            </div>
            <div class="item-sec">
              <h2 class="item__h"><?php the_title(); ?></h2>
            </div>
          </div>
          <div class="single-content">
            <?php the_content(); ?>
          </div>
          <nav>
            <div class="single-link-block">
              <?php
              $taxonomy_slug = 'category-blog';
              $prev_post = get_previous_post(false, '', $taxonomy_slug);
              $next_post = get_next_post(false, '', $taxonomy_slug);
              ?>
              <div class="single-link-left">
                <?php if ($prev_post) : ?>
                  <a class="single-link" href="<?php echo get_permalink($prev_post->ID) ?>">
                    <?php echo get_the_title($prev_post->ID) ?>
                  </a>
                <?php endif; ?>
              </div>
              <div class="single-link-center">
                <a href="<?php echo get_post_type_archive_link('blog'); ?>" class="single-link">
                  記事一覧へ
                </a>
              </div>
              <div class="single-link-right">
                <?php if ($next_post) : ?>
                  <a class="single-link" href="<?php echo get_permalink($next_post->ID) ?>">
                    <?php echo get_the_title($next_post->ID) ?>
                  </a>
                <?php endif; ?>
              </div>
            </div>
          </nav>
        <?php endwhile; ?>
      <?php else : ?>
        <p>記事がありません</p>
      <?php endif; ?>
    </div>
    <div class="single-end">
      <nav>
        <?php
        $args = array(
          'post_type' => 'blog',
          'posts_per_page' => 5,
          'orderby' => 'date',
          'order' => 'DESC'
        );
        $the_query = new WP_Query($args);
        ?>
        <div class="archive-aside-block">
          <h2 class="archive-aside__h">最新の記事</h2>
          <?php if ($the_query->have_posts()) : ?>
            <ul class="archive-aside-list">
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li class="archive-aside-item">
                  <a href="<?php the_permalink(); ?>" class="archive-aside__link">
                    <?php the_title(); ?>
                  </a>
                </li>
              <?php endwhile; ?>
            </ul>
          <?php else : ?>
            <p class="paragraph_01">まだ記事がありません</p>
          <?php endif; ?>
        </div>
        <?php wp_reset_postdata(); ?>
        <div class="archive-aside-block">
          <h2 class="archive-aside__h">月別アーカイブ</h2>
          <ul class="archive-aside-list">
            <?php
            $args = array(
              'post_type' => 'blog',
              'type' => 'monthly',
              'limit' => '12',
              'format' => 'html',
              'before' => '',
              'after' => '',
              'show_post_count' => false,
              'echo' => 1,
              'order' => 'DESC',
              'post_status' => 'publish',
            );
            wp_get_archives($args);
            ?>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</div>
<?php
get_footer();
?>