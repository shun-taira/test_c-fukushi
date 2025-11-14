  <?php
if ($args) {
  $image_src = wp_get_attachment_image_src($args, 'full');
}
  ?>
<div class="page-header" style="background-image: url('<?php echo $image_src[0]; ?>')">
  <div class="page-header-block">
    <h1 class="page-header__h">
      <?php the_title(); ?>
    </h1>
  </div>
</div>