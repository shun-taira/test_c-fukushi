<?php
get_header();
?>
<section>
  <div class="component-header">
    <div class="component-header-block">
      <h1 class="component-header__h">葬儀コラム</h1>
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
            <div class="item-sec">
              <h2 class="item__h"><?php the_title(); ?></h2>
            </div>
          </div>
          <?php
          if (has_post_thumbnail()) {
          ?>
            <div class="single-thumbnail">
              <?php
              the_post_thumbnail('large', array('class' => 'single-thumbnail__img'));
              ?>
            </div>
          <?php
          }
          ?>
          <div class="single-content">
            <?php the_content(); ?>
          </div>
          <div class="single-sns">
            <?php
            get_template_part('template-parts/component', 'sns-share');
            ?>
          </div>
          <nav>
            <div class="single-link-block">
              <?php
              $prev_post = get_previous_post(true);
              $next_post = get_next_post(true);
              ?>
              <div class="single-link-left">
                <?php if ($prev_post) : ?>
                  <i class="bi bi-chevron-left"></i>
                  <a class="single-link" href="<?php echo get_permalink($prev_post->ID) ?>">
                    <?php echo get_the_title($prev_post->ID) ?>
                  </a>
                <?php endif; ?>
              </div>
              <div class="single-link-center">
                <?php
                $cat = get_the_category();
                $cat_id = $cat[0]->cat_ID;
                $link = get_category_link($cat_id);
                ?>
                <a href="<?php echo $link; ?>" class="single-link">
                  コラム一覧
                </a>
              </div>
              <div class="single-link-right">
                <?php if ($next_post) : ?>
                  <a class="single-link" href="<?php echo get_permalink($next_post->ID) ?>">
                    <?php echo get_the_title($next_post->ID) ?>
                  </a>
                  <i class="bi bi-chevron-right"></i>
                <?php endif; ?>
              </div>
            </div>
          </nav>
        <?php endwhile; ?>
      <?php else : ?>
        <p>記事がありません</p>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php
get_footer();
?>