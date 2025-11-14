<?php
// サムネイル画像があれば変数に格納
$is_img_url = "false";
if (has_post_thumbnail()) {
  $thumbnail_id = get_post_thumbnail_id();
  $thumbnail_img = wp_get_attachment_image_src($thumbnail_id, 'full');
  $thumbnail_img_url = $thumbnail_img[0];
  $is_img_url = "true";
}
if (!isset($thumbnail_img_url)) {
    $thumbnail_img_url = ''; 
}
?>

<section>
  <div class="component-header" data-isurl="<?php echo $is_img_url; ?>" style="background-image: url('<?php echo  $thumbnail_img_url; ?>')">
    <div class="component-header-block">
      <h1 class="component-header__h"><?php echo replace_space_to_br(get_the_title()); ?></h1>
      <?php if (has_excerpt()) { ?>
        <div class="component-header__description"><?php the_excerpt(); ?></div>
      <?php } ?>
    </div>
  </div>
</section>