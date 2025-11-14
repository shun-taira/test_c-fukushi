<div class="header-menu-sp">
  <div class="header-menu-sp-aside">
    <nav>
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'primary-sp-link',
          'container'      => '',
          'menu_class'     => 'header-menu-sp-list',
        )
      );
      ?>
    </nav>
  </div>
  <div class="header-menu-sp__menu">
    <nav>
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'primary-sp-menu',
          'container'      => '',
          'menu_class'     => 'header-menu-sp-list',
        )
      );
      ?>
    </nav>
  </div>
</div>