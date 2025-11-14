<div class="component-guide-nav">
  <?php
  $page_slug = get_post_field('post_name', get_post());
  $page_slug = 'page-' . $page_slug
  ?>
  <div class="guide-nav <?php echo $page_slug; ?>">
    <ul class="nav-list">
      <li class="nav-item nav--guide">
        <a href="<?php echo home_url(); ?>/guide" class="item-block nav-link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-nav-03.jpg" class="nav-link__img">
          <span class="link-title">
            初めての方へ
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-nav-ya.svg" class="link-ya__img">
          </span>
        </a>
      </li>
      <li class="nav-item nav--flow">
        <a href="<?php echo home_url(); ?>/flow" class="item-block nav-link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-nav-01.jpg" class="nav-link__img">
          <span class="link-title">
            お葬式の流れ
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-nav-ya.svg" class="link-ya__img">
          </span>
        </a>
      </li>
      <li class="nav-item nav--reasons">
        <a href="<?php echo home_url(); ?>/reasons" class="item-block nav-link">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-nav-02.jpg" class="nav-link__img">
          <span class="link-title">
            選ばれる理由
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-nav-ya.svg" class="link-ya__img">
          </span>
        </a>
      </li>
    </ul>
  </div>
</div>