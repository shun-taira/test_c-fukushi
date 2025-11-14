<div class="header-nav">
  <div class="header-nav-block">
    <nav class="header-nav-nav">
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'primary-pc-menu',
          'container'      => '',
          'menu_class'     => 'header-nav-menu',
          'walker'  => new custom_walker_nav_menu
        )
      );
      ?>
    </nav>
  </div>
</div>
