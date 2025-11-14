<section>
  <div class="component-header">
    <div class="component-header-block">
      <h1 class="component-header__h"><?php the_title(); ?></h1>
      <?php if (has_excerpt()) { ?>
        <div class="component-header__description"><?php the_excerpt(); ?></div>
      <?php } ?>
    </div>
  </div>
</section>