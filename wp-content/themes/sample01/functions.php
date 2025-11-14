<?php

// setup
function theme_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
  add_theme_support('wp-block-styles');
  // add_theme_support( 'automatic-feed-links' );
  add_theme_support('title-tag');
  add_post_type_support('page', 'excerpt');
  add_theme_support('post-formats', array(
    'aside',
    'image',
    'video',
    'quote',
    'link',
    'gallery',
    'status',
    'audio',
  ));
}
add_action('after_setup_theme', 'theme_setup');

// ファイルのエンキュー
function theme_scripts_styles()
{
  // wp_enqueue_style('normalize-style', get_template_directory_uri() . '/css/reset.css', array(), '1.1.0', 'all');
  wp_enqueue_style('slick-style', get_template_directory_uri() . '/js/slick/slick.css', array(), '1.1.2', 'all');
  wp_enqueue_style('slick-theme-style', get_template_directory_uri() . '/js/slick/slick-theme.css', array(), '1.1.2', 'all');
  wp_enqueue_style('theme-style', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.1.3', 'all');
  // jquery
  if (!is_admin()) {
    wp_enqueue_script('jquery', array(), '1.0.0', false);
  }
  wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '1.0.0', true);
  wp_enqueue_script('slick-script', get_template_directory_uri() . '/js/slick/slick.min.js', array(), '1.0.0', false);
  wp_enqueue_script('theme-script', get_template_directory_uri() . '/js/common.js', array(), '1.0.1', true);
}
add_action('wp_enqueue_scripts', 'theme_scripts_styles');

// メニュー
//　プライマリーメニューPC追加
function mytheme_register_menus()
{
  register_nav_menus(
    array(
      'menu-1' => esc_html__('header menu', 'mytheme'),
      'menu-2' => esc_html__('header menu mobile', 'mytheme'),
      'menu-3' => esc_html__('footer menu', 'mytheme'),

    )
  );
}
add_action('after_setup_theme', 'mytheme_register_menus');

// body_classにスラッグ付与
function pagename_class($classes = '')
{
  if (is_page()) {
    $page = get_page(get_the_ID());
    $classes[] = $page->post_name;
  }
  return $classes;
}

add_filter('body_class', 'pagename_class');

//自動更新を無効にする
add_filter('automatic_updater_disabled', '__return_true');

// カスタマイズメニュー追加
function site_customizer_settings($wp_customize)
{
  // フリーダイヤルセクションの追加
  $wp_customize->add_section('site_settings', array(
    'title'    => 'サイト追加設定',
    'priority' => 120,
  ));

  // フリーダイヤルの追加
  $wp_customize->add_setting('freedial_number', array(
    'default'   => '',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('freedial_number', array(
    'label'    => 'フリーダイヤル',
    'section'  => 'site_settings',
    'settings' => 'freedial_number',
    'type'     => 'text',
  ));

  // faxの追加
  $wp_customize->add_setting('fax_number', array(
    'default'   => '',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('fax_number', array(
    'label'    => 'FAX番号',
    'section'  => 'site_settings',
    'settings' => 'fax_number',
    'type'     => 'text',
  ));

  // $wp_customize->add_setting('blog_header_image', array(
  //   'default' => '',
  //   'transport' => 'refresh',
  // ));

  // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'blog_header_image', array(
  //   'label' => 'ブログヘッダー画像',
  //   'section' => 'site_settings',
  //   'settings' => 'blog_header_image',
  // )));

  $wp_customize->add_setting('column_header_image', array(
    'default' => '',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'column_header_image', array(
    'label' => 'コラムヘッダー画像',
    'section' => 'site_settings',
    'settings' => 'column_header_image',
  )));


  // $wp_customize->add_setting('news_header_image', array(
  //   'default' => '',
  //   'transport' => 'refresh',
  // ));

  // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'news_header_image', array(
  //   'label' => 'インフォメーションヘッダー画像',
  //   'section' => 'site_settings',
  //   'settings' => 'news_header_image',
  // )));

  // SNSセクションの追加
  $wp_customize->add_section('sns_settings', array(
    'title'    => 'SNS',
    'priority' => 120,
  ));

  // X URLの追加
  $wp_customize->add_setting('x_url', array(
    'default'   => '#',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('x_url', array(
    'label'    => 'X URL',
    'section'  => 'sns_settings',
    'settings' => 'x_url',
    'type'     => 'url',
  ));

  // Facebook URLの追加
  $wp_customize->add_setting('facebook_url', array(
    'default'   => '#',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('facebook_url', array(
    'label'    => 'Facebook URL',
    'section'  => 'sns_settings',
    'settings' => 'facebook_url',
    'type'     => 'url',
  ));

  // LINE URLの追加
  $wp_customize->add_setting('line_url', array(
    'default'   => '#',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('line_url', array(
    'label'    => 'LINE URL',
    'section'  => 'sns_settings',
    'settings' => 'line_url',
    'type'     => 'url',
  ));

  // Instagram URLの追加
  $wp_customize->add_setting('instagram_url', array(
    'default'   => '#',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('instagram_url', array(
    'label'    => 'Instagram URL',
    'section'  => 'sns_settings',
    'settings' => 'instagram_url',
    'type'     => 'url',
  ));

  // ロゴの設定項目を取得
  // $logo_setting = $wp_customize->get_setting('custom_logo');

  // // ロゴの設定項目の位置を取得
  // $logo_setting_position = $wp_customize->get_control('custom_logo')->section;

  // // SPロゴの設定項目を追加
  // $wp_customize->add_setting('sp_logo_setting');

  // $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sp_logo_control', array(
  //   'label' => 'SPロゴ',
  //   'section' => $logo_setting_position, // ロゴの設定項目の位置に追加
  //   'settings' => 'sp_logo_setting',
  //   'priority' => 8, // ロゴの設定項目の次に表示
  // )));
}
add_action('customize_register', 'site_customizer_settings');

// ログイン画面のロゴを変更
function my_login_logo()
{
?>
  <style type="text/css">
    #login h1 a,
    .login h1 a {
      background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/screenshot.png');
      background-size: cover;
      width: 320px;
      background-repeat: no-repeat;
      background-position: center -52px, center;
      padding-bottom: 30px;
    }
  </style>
<?php }
add_action('login_enqueue_scripts', 'my_login_logo');

// pagination
// ペーネーション
function bootstrap_pagination()
{
  $args = array(
    // listにclass付与

    'type' => 'list',
    'prev_text'          => '&laquo;',
    'next_text'          => '&raquo;',
  );
  $paginate = paginate_links($args);
  echo '<nav class="archive-nav w-100" aria-label="Page navigation">' . $paginate . '</nav>';
}

function modify_category_query($query)
{
  if ($query->is_category() && $query->is_main_query() && !is_admin()) {
    $sticky_posts = get_option('sticky_posts');

    if (!empty($sticky_posts)) {
      // 固定表示された投稿を最初に表示するためのorderbyパラメータを追加
      $query->set('ignore_sticky_posts', 1);
      $query->set('orderby', 'menu_order date');
      $query->set('order', 'DESC');

      // menu_orderを固定表示された投稿に対して設定する
      add_filter('posts_orderby', 'include_sticky_posts_first', 10, 2);
    }
  }
}
add_action('pre_get_posts', 'modify_category_query');

function include_sticky_posts_first($orderby, $query)
{
  global $wpdb;

  if ($query->is_category() && $query->is_main_query() && !is_admin()) {
    $sticky_posts = get_option('sticky_posts');

    if (!empty($sticky_posts)) {
      $sticky_posts_in = implode(',', array_map('absint', $sticky_posts));
      $orderby = "FIELD({$wpdb->posts}.ID, $sticky_posts_in) DESC, " . $orderby;
    }
  }

  return $orderby;
}

// スライダー ショートコード 
add_shortcode('gallrey-slick', 'func_gallrey_slick');
function func_gallrey_slick($atts)
{
  $acf_cate = $atts['cat'];
  // 8桁の乱数
  $slick_id = 'slick_' . substr(str_shuffle('1234567890abcdefghijklmnopqrstuvwxyz'), 0, 8);
  $acf_pageid = $atts['id'];
  $html = '';

  if (have_rows('gallery_cate', $acf_pageid)) :
    while (have_rows('gallery_cate', $acf_pageid)) : the_row();
      if (get_sub_field('gallery_title', $acf_pageid) == $acf_cate) :
        if (have_rows('gallery_item', $acf_pageid)) :
          $html .= '<ul class=" list-unstyled mt-10 mt-md-20" id=' . $slick_id . '>';
          while (have_rows('gallery_item', $acf_pageid)) : the_row();
            $html .= '<li class="d-flex flex-column justify-content-center px-4">';
            $image = get_sub_field('gallery_image', $acf_pageid);
            $size = 'large'; // (thumbnail, medium, large, full or custom size)
            $image_url = wp_get_attachment_image_src($image, $size)[0];
            $html .= '<img src="' . $image_url . '" class="img-fluid" style="height:200px;object-fit:cover;">';
            $html .= '<h3 class="h6 mt-10 text-center">' . get_sub_field('gallery_name', $acf_pageid) . '</h3>';
            $html .= '</li>';
          endwhile;
          $html .= "</ul>";
          $html .= '<script>jQuery(function($){$("#' . $slick_id . '").slick({infinite: false, slidesToShow: 3, slidesToScroll: 1, infinite: true, autoplay: true, autoplaySpeed: 3000, speed: 1000, arrows: true, dots: true, swipe: true, responsive: [{breakpoint: 961, settings: {slidesToShow: 3}}, {breakpoint: 769, settings: {slidesToShow: 2}}, {breakpoint: 641, settings: {slidesToShow: 2}}, {breakpoint: 481, settings: {slidesToShow: 1}}]});})</script>';
        endif;
      endif;
    endwhile;
  else :
    $html .= '<p>そのスライダーはありません</p>';
  endif;

  return $html;
}
