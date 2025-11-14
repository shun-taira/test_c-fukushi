<?php
// setup
function theme_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');
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
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;500;700&family=Oswald:wght@400;500;700&display=swap', array(), null);
  wp_enqueue_style('normalize-style', get_template_directory_uri() . '/assets/css/destyle.css', array(), '1.1.0', 'all');
  wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/js/swiper/swiper-bundle.min.css', array(), '1.1.0', 'all');
  wp_enqueue_style('scroll-hind-style', get_template_directory_uri() . '/assets/js/scroll-hint/scroll-hint.css', array(), '1.1.0', 'all');
  wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/common.css', array(), '1.1.1', 'all');
  wp_enqueue_script('swiper-script', get_template_directory_uri() . '/assets/js/swiper/swiper-bundle.min.js', array(), '1.1.0', false);
  wp_enqueue_script('scroll-hint-script', get_template_directory_uri() . '/assets/js/scroll-hint/scroll-hint.min.js', array(), '1.1.0', true);
  wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/common.js', array(), '1.1.0', true);
  wp_enqueue_script('yubin-script', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), '1.1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_scripts_styles');

// ダミー画像の宣言
global $dammy_image_id;
$dammy_image_id = 301;

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

// メニュー
//　プライマリーメニューPC追加
function mytheme_register_menus()
{
  register_nav_menus(
    array(
      'primary-pc-menu' => esc_html__('Primary PC Menu', 'mytheme'),
      'primary-sp-menu' => esc_html__('Primary SP Menu', 'mytheme'),
      'primary-sp-link' => esc_html__('Primary SP Link', 'mytheme'),
      'footer-pc1-menu' => esc_html__('Footer PC1 Menu', 'mytheme'),
      'footer-pc2-menu' => esc_html__('Footer PC2 Menu', 'mytheme'),
      'footer-pc3-menu' => esc_html__('Footer PC3 Menu', 'mytheme'),
      'footer-pc4-menu' => esc_html__('Footer PC4 Menu', 'mytheme'),
      'footer-pc5-menu' => esc_html__('Footer PC5 Menu', 'mytheme'),
      'footer-pc6-menu' => esc_html__('Footer PC6 Menu', 'mytheme'),
      'footer-sp-menu' => esc_html__('Footer SP Menu', 'mytheme'),
      'sitemap-menu' => esc_html__('Sitemap Menu', 'mytheme'),
    )
  );
}
add_action('after_setup_theme', 'mytheme_register_menus');


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

  $wp_customize->add_setting('blog_header_image', array(
    'default' => '',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'blog_header_image', array(
    'label' => 'ブログヘッダー画像',
    'section' => 'site_settings',
    'settings' => 'blog_header_image',
  )));

  $wp_customize->add_setting('column_header_image', array(
    'default' => '',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'column_header_image', array(
    'label' => '葬儀コラムヘッダー画像',
    'section' => 'site_settings',
    'settings' => 'column_header_image',
  )));

  $wp_customize->add_setting('news_header_image', array(
    'default' => '',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'news_header_image', array(
    'label' => 'インフォメーションヘッダー画像',
    'section' => 'site_settings',
    'settings' => 'news_header_image',
  )));

  // SNSセクションの追加
  $wp_customize->add_section('sns_settings', array(
    'title'    => 'SNS',
    'priority' => 120,
  ));

  // Twitter URLの追加
  $wp_customize->add_setting('twitter_url', array(
    'default'   => '#',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('twitter_url', array(
    'label'    => 'Twitter URL',
    'section'  => 'sns_settings',
    'settings' => 'twitter_url',
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
  $logo_setting = $wp_customize->get_setting('custom_logo');

  // ロゴの設定項目の位置を取得
  $logo_setting_position = $wp_customize->get_control('custom_logo')->section;

  // SPロゴの設定項目を追加
  $wp_customize->add_setting('sp_logo_setting');

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'sp_logo_control', array(
    'label' => 'SPロゴ',
    'section' => $logo_setting_position, // ロゴの設定項目の位置に追加
    'settings' => 'sp_logo_setting',
    'priority' => 8, // ロゴの設定項目の次に表示
  )));
}
add_action('customize_register', 'site_customizer_settings');

// SP LINKに画像を追加
function my_wp_nav_menu_objects($items, $args)
{
  if (function_exists('get_field')) {
    foreach ($items as &$item) {
      $image = get_field('sp-menu-img', $item);
      $size = 'medium'; // (thumbnail, medium, large, full or custom size)
      if ($image) {
        $item_title = $item->title;
        $item->title = wp_get_attachment_image($image, $size, false, array('alt' => $item_title));
        $item->title .= '<span class="list-background" style="background-color:' . get_field('sp-menu-bgcolor', $item) . '"></span>';
      }
    }
    return $items;
  }
}
add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

class custom_walker_nav_menu extends Walker_Nav_Menu
{

  function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
  {
    $children_menu_title = get_field('children-menu-title', $item);

    if ($children_menu_title && in_array('menu-item-has-children', $item->classes)) {
      $output .= '<li ';
      $output .= $this->get_item_classes($item);
      $output .= '>';
      $output .= '<a href="' . $item->url . '">';
      $output .= $args->link_before . $item->title . $args->link_after;
      $output .= '</a>';
      $output .= '<div class="header-nav-child"><div class="header-nav-child-container"><a href="' . $item->url . '" class="children-menu-title">' . $children_menu_title . '</a>';
    } else {
      $output .= '<li ';
      $output .= $this->get_item_classes($item);
      $output .= '>';
      $output .= '<a href="' . $item->url . '">';
      $output .= $args->link_before . $item->title . $args->link_after;
      $output .= '</a></li>';
    }
  }

  function end_lvl(&$output, $depth = 0, $args = array())
  {
    $output .= '</ul></div></div>';
  }

  // クラスを出力するためのヘルパーメソッド
  private function get_item_classes($item)
  {
    $classes = empty($item->classes) ? array() : (array) $item->classes;
    $classes[] = 'menu-item';
    $classes[] = 'menu-item-' . $item->ID;
    return 'class="' . esc_attr(implode(' ', $classes)) . '"';
  }
}

// 制作時はアップロードの圧縮をなしにする。
function disable_image_compression($quality)
{
  return 100; // 圧縮品質を 100 に設定
}
// add_filter('jpeg_quality', 'disable_image_compression');

// カスタム投稿ページの場合もbody_classを付与する
function add_custom_post_type_class($classes)
{
  if (is_singular('plan')) {
    global $post;
    $classes[] = 'plan-' . $post->post_name;
  }
  return $classes;
}
add_filter('body_class', 'add_custom_post_type_class');

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}

// Contact Form 7のオートコンプリートをオンに。
add_filter('wpcf7_form_autocomplete', function ($autocomplete) {
  $autocomplete = 'on';
  return $autocomplete;
}, 10, 1);

// homeurl ショートコード 
add_shortcode('home_url', 'shortcode_surl');
function shortcode_surl()
{
  return home_url();
}

// siteurl ショートコード 
add_shortcode('site_url', 'shortcode_surl2');
function shortcode_surl2()
{
  return site_url();
}

// Contact Form 7のショートコード
add_action('wpcf7_init', 'custom_add_form_tag_homeurl');

function custom_add_form_tag_homeurl()
{
  wpcf7_add_form_tag('home_url', 'custom_homeurl_form_tag_handler');
}

function custom_homeurl_form_tag_handler($tag)
{
  return home_url();
}

// デフォルトブロックを適用
function my_theme_setup()
{
  //Default block styles を有効に
  add_theme_support('wp-block-styles');
}
add_action('after_setup_theme', 'my_theme_setup');

// pagination
// ペーネーション
function bootstrap_pagination()
{
  $args = array(
    'type' => 'list',
    'prev_text'          => '',
    'next_text'          => '',
  );
  $paginate = paginate_links($args);
  echo '<nav class="archive-nav" aria-label="Page navigation">' . $paginate . '</nav>';
}

// カスタム投稿アーカイブディスクリプション上書き
function overwrite_ssp_description($ssp_description)
{
  if (is_post_type_archive('blog')) {
    return "【お知らせ一覧】各種イベントや葬儀の事前相談会など、葬儀に関する不安や疑問解消に役立つ情報をお届けします。｜江戸川区のご葬儀・家族葬は一之江セレモニーホールにお任せください。";
  } elseif (is_post_type_archive('column')) {
    return "葬儀に関するマナーや豆知識から、仏壇・仏具やお墓、法事など、知っておきたい情報をコラム形式でお届けします。葬儀やご供養についての不安解消にお役立てください。｜江戸川区のご葬儀・家族葬は一之江セレモニーホールにお任せください。";
  }
  return $ssp_description;
}
add_filter('ssp_output_description', 'overwrite_ssp_description');

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

// サムネイルサイズの追加
add_image_size('thumbnail-slider', 146, 121, true);
add_image_size('slider', 918, 688, true);
add_image_size('flower', 400, 400, false);

// 不要な表示を削除
function redirect_category_and_tag_pages()
{
  if (is_category() || is_tag()) {
    wp_redirect(home_url(), 301);
    exit;
  }
  if (is_singular('post')) {
    wp_redirect(home_url(), 301);
    exit;
  }
  // タクソノミー　category-hall　の場合
  if (is_tax('category-hall') || is_tax('category-hall-address')) {
    wp_redirect(home_url(), 301);
    exit;
  }
}
// add_action('template_redirect', 'redirect_category_and_tag_pages');


// 電話番号バリデーション変更
add_filter('wpcf7_validate_tel', 'wpcf7_validate_tel_tel', 11, 2);
add_filter('wpcf7_validate_tel*', 'wpcf7_validate_tel_tel', 11, 2);
function wpcf7_validate_tel_tel($result, $tag)
{
  $tag = new WPCF7_Shortcode($tag);
  $name = $tag->name;
  $value = isset($_POST[$name]) ? trim(wp_unslash(strtr((string) $_POST[$name], "\n", " "))) : "";

  // your-tel
  if ($name === "your-tel") {
    if (!preg_match('/^0[0-9]{9,10}\z/', $value)) {
      $result->invalidate($tag, "正しい電話番号を入力してください。");
    }
  }
  return $result;
}

// スラッグがflowerの場合、スクリプトをエンキューする
function request_enqueue_script()
{
  if (is_page('flower')) {
    wp_enqueue_script('contact-script', get_template_directory_uri() . '/assets/js/contact-form7.js', array(), '1.0.0', true);
  }
}
// add_action('wp_enqueue_scripts', 'request_enqueue_script');

// 変数の文字列に半角または全角のスペースがある場合<br>に置換する関数
function replace_space_to_br($str)
{
  return str_replace(array(' ', '　'), '<br>', $str);
}

// サムネイルサイズの追加
add_image_size('hall-carousel', 468, 312, true);
add_image_size('hall-slider', 1164, 747, true);
add_image_size('top-slider_pc', 2160, 900, true);
add_image_size('top-slider_sp', 563, 849, true);
