<section>
  <?php
  $staff_page = get_page_by_path('staff');
  $staff_page_id = $staff_page->ID;
  $staff_list = get_field('staff_list', $staff_page_id);
  $staff_list_array = array();
  foreach ($staff_list as $staff_list_item) {
    $staff_list_array[] = $staff_list_item;
  }
  $freedial_number = get_theme_mod('freedial_number');
  // shuffle($staff_list_array);
  ?>
  <div class="component-staff">
    <div class="staff-block">
      <h1 class="staff__h">
        葬儀に関することは<br class="display_sp">何でも聞いてください
      </h1>
      <div class="staff-list-block">
        <h2 class="staff__h-list">すぐにお答えいたします！</h2>
        <ul class="staff-list">
          <li class="staff-item">
            <div class="staff-item-block">
              費用について
            </div>
          </li>
          <li class="staff-item">
            <div class="staff-item-block">
              式場について
            </div>
          </li>
          <li class="staff-item">
            <div class="staff-item-block">
              いざという時
            </div>
          </li>
          <li class="staff-item">
            <div class="staff-item-block">
              搬送について
            </div>
          </li>
        </ul>
      </div>
      <div class="staff-member-block">
        <h2 class="staff__h-member">些細なことでもお気軽にご相談ください</h2>
        <?php if (!empty($staff_list_array)) { ?>
          <ul class="staff-member-list">
            <?php
            $member_count = 0;
            $limited_staff_list = array_slice($staff_list_array, 0, 4);
            foreach ($limited_staff_list as $staff_list_item) {
            ?>
              <li class="staff-member-item">
                <a href="<?php echo home_url(); ?>/staff/#member_<?php echo $member_count; ?>" class="staff-member-item-link">
                  <?php echo wp_get_attachment_image($staff_list_item['staff_image'], 'thumbnail', false, array('class' => 'staff-member-item__img')); ?>
                </a>
                <h3 class="staff-member-item__h"><?php echo $staff_list_item['staff_name']; ?></h3>
              </li>
            <?php
              $member_count++;
            }
            ?>
          </ul>
        <?php } ?>
      </div>
      <div class="staff-ban-block">
        <ul class="staff-ban-list">
          <li class="staff-ban-item">
            <a href="tel:<?php echo $freedial_number; ?>" class="staff-ban-link">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-staff-ban-tel.png" alt="深夜・早朝いつでもOK <?php echo $freedial_number; ?> お急ぎの方は最優先で対応" class="staff-ban-item__img">
            </a>
          </li>
          <li class="staff-ban-item">
            <a href="<?php echo home_url(); ?>/guide/#about" class="staff-ban-link">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home-staff-ban-request.jpg" alt="対面相談可能 無料事前相談" class="staff-ban-item__img">
            </a>
          </li>
        </ul>
      </div>
      </li>
      </ul>
    </div>
  </div>
  </div>
</section>