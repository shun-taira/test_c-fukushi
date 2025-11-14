<section>
  <?php
  // カスタム投稿publicの件数を取得
  $args = array(
    'post_type' => 'public',
    'posts_per_page' => -1,
  );
  $query = new WP_Query($args);
  $count = $query->found_posts;
  wp_reset_postdata();
  ?>
  <div class="component-list">
    <div class="list-block">
      <h1 class="list__h">提携葬儀場ご案内</h1>
      <?php /*
      <h2 class="list__h-sub">東京・千葉に<span class="list__h_red"><?php echo $count; ?></span>ホール</h2>
      <div class="list-map-block">
        <div class="list-map-tab">
          <ul class="tab-list">
            <li class="tab-item active">東京</li>
            <li class="tab-item">千葉</li>
          </ul>
        </div>
        <div class="list-map-map">
          <iframe src="https://www.google.com/maps/d/u/3/embed?mid=1v-deytQwJYxPqByEIUq08_PSb1_QZKs&ehbc=2E312F&noprof=1" width="100%" height="390"></iframe>
        </div>
      </div>
      */ ?>
      <div class="list-search-block">
        <h2 class="list__h-sub">地域名をクリックすると斎場が表示されます。</h2>
        <div class="list-search-definition">
          <?php
          // カスタムタクソノミーcategory-hall-addressのタームを取得
          $terms = get_terms('category-hall-address', array('hide_empty' => false));
          // 第一階層をdtに、第二階層をddに出力
          if (!empty($terms)) {
            echo '<dl class="list-search-definition">';
            foreach ($terms as $term) {
              if ($term->parent == 0) {
                // この$term->nameに含まれるカスタム投稿publicの件数を取得
                $args = array(
                  'post_type' => 'public',
                  'posts_per_page' => -1,
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'category-hall-address',
                      'field' => 'slug',
                      'terms' => $term->slug,
                      'include_children' => false,
                    ),
                  ),
                );

                $query = new WP_Query($args);
                $count = $query->found_posts;
                wp_reset_postdata();

                echo '<dt class="list-search-term">' . $term->name . 'に<span class="list-search-term_red">' . $count . '</span>ホール</dt>';
                echo '<dd class="list-search-description">';
                // タクソノミー一覧
                $term_children = get_term_children($term->term_id, 'category-hall-address');
                if (!empty($term_children)) {
                  echo '<dl class="list-search-list">';
                  foreach ($term_children as $child) {
                    $child_term = get_term_by('id', $child, 'category-hall-address');
                    if ($child_term->name != '東京２３区' && $child_term->name != '東京２３区以外') {
                      echo '<dl class="list-search-list-definition">';
                      echo '<dt class="list-search-list-term">' . $child_term->name . '</dt>';
                      // ddに含まれるカスタム投稿publicのリンクリストを出力
                      $args = array(
                        'post_type' => 'public',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                          array(
                            'taxonomy' => 'category-hall-address',
                            'field' => 'slug',
                            'terms' => $child_term->slug,
                            'include_children' => false,
                          ),
                        ),
                      );
                      $query = new WP_Query($args);
                      if ($query->have_posts()) {
                        echo '<dd class="list-search-list-description">';
                        while ($query->have_posts()) {
                          $query->the_post();
                          $link = get_permalink();
                          echo '<a href="' . esc_url($link) . '" class="list-search-list-link">';
                          echo get_the_title();
                          echo '</a>';
                        }
                        echo '</dd>';
                        echo '</dl>';
                      }
                      wp_reset_postdata();
                    }
                  }
                  echo '</dl>';
                }
                echo '</dd>';
              }
            }
            echo '</dl>';
          }

          ?>
        </div>
      </div>
    </div>
  </div>

</section>