<section>
  <div class="add-hero">
    <div class="wrap-add-hero">
      <div class="jumbotron mb-0 d-flex align-items-center jumbotron-fluid add-hero-content" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
        <div class="container mx-auto">
          <h1 class="h2 add-hero__h"><?php the_title(); ?></h1>
          <div class="add-hero__p">
            <?php the_excerpt() ?>
          </div>
        </div>
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