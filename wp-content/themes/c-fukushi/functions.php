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
  wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/common.min.css', array(), '1.1.2', 'all');
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

// contact form7バリデーションにフリガナを追加

add_filter('wpcf7_validate_text', 'wpcf7_validate_kana', 11, 2);
add_filter('wpcf7_validate_text*', 'wpcf7_validate_kana', 11, 2);
function wpcf7_validate_kana($result, $tag)
{
  $tag = new WPCF7_Shortcode($tag);
  $name = $tag->name;
  $value = isset($_POST[$name]) ? trim(wp_unslash(strtr((string) $_POST[$name], "\n", " "))) : "";

  if ($name === "your-furigana") {

    if ($value !== "" && (!preg_match("/^[ァ-ヾぁ-んー　]+$/u", $value)) && (!preg_match("/^[ぁ-ゞー]+$/u", $value))) {
      $result->invalidate($tag, "全角カタカナまたはひらがなで入力してください。");
    }
  }
  // your-tel
  // if ($name === "your-tel") {
  //   if (!preg_match("/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/", $value)) {
  //     $result->invalidate($tag, "半角数字とハイフンのみで入力してください。");
  //   }
  // }
  return $result;
}

// スラッグがmembershipの場合、スクリプトをエンキューする
function request_enqueue_script()
{
  if (is_page('membership') || is_page('form-entry')) {
    wp_enqueue_script('contact-script', get_template_directory_uri() . '/assets/js/contact-form7.js', array(), '1.0.0', true);
  }
}
add_action('wp_enqueue_scripts', 'request_enqueue_script');

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
?>


<?php
//Schema_共通部分
add_action('wp_head', function() {
  if (is_page(array('first', 'plan', 'chokuso'))) {
    ?>
    <script type="application/ld+json">
    <?php
    $json_common = <<<JSON
	{
  "@context": "https://schema.org",
  "@graph": [
	{
      "@type": "ItemList",
      "@id": "https://staging.c-fukushi.co.jp/plan/#halllist",
      "name": "ご利用可能な斎場・葬儀場",
      "description": "中央福祉葬祭が対応可能な提携斎場、セレモニーホールの一覧です。",
      "itemListElement": [
        {
          "@type": "LocalBusiness",
          "name": "中央福祉会館",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "西新井宿603-3",
            "addressLocality": "川口市",
            "addressRegion": "埼玉県",
            "postalCode": "333-0833"
          },
          "url": "https://staging.c-fukushi.co.jp/hall/chuou-fukushi/"
        },
        {
          "@type": "LocalBusiness",
          "name": "小さな蕨会館",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "北町3丁目4-25",
            "addressLocality": "蕨市",
            "addressRegion": "埼玉県",
            "postalCode": "335-0001"
          },
          "url": "https://staging.c-fukushi.co.jp/hall/warabi/"
        },
        {
          "@type": "LocalBusiness",
          "name": "川口市めぐりの森",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "大字新井宿430-1",
            "addressLocality": "川口市",
            "addressRegion": "埼玉県",
            "postalCode": "333-0826"
          },
          "url": "https://staging.c-fukushi.co.jp/relation/川口市めぐりの森/"
        },
        {
          "@type": "LocalBusiness",
          "name": "戸田葬祭場", 
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "舟渡4丁目15-1",
            "addressLocality": "板橋区",
            "addressRegion": "東京都",
            "postalCode": "174-0041"
          },
          "url": "https://staging.c-fukushi.co.jp/relation/戸田葬祭場-光の間（3階）/"
        },
        {
          "@type": "LocalBusiness",
          "name": "谷塚斎場", 
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "瀬崎4-6-36",
            "addressLocality": "草加市",
            "addressRegion": "埼玉県",
            "postalCode": "340-0022"
          },
          "url": "https://staging.c-fukushi.co.jp/relation/谷塚斎場%e3%80%80北館/"
        },
        {
          "@type": "LocalBusiness",
          "name": "大宮聖苑",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "染谷2丁目350番地1",
            "addressLocality": "さいたま市見沼区",
            "addressRegion": "埼玉県",
            "postalCode": "337-0026"
          },
          "url": "https://staging.c-fukushi.co.jp/relation/大宮聖苑/"
        },
        {
          "@type": "LocalBusiness",
          "name": "浦和斎場",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "大字下大久保1523番地1",
            "addressLocality": "さいたま市桜区",
            "addressRegion": "埼玉県",
            "postalCode": "338-0825"
          },
          "url": "https://staging.c-fukushi.co.jp/relation/浦和斎場/"
        }
      ]
    },
	{
      "@type": "ItemList",
      "@id": "https://staging.c-fukushi.co.jp/plan/#planlist",
      "name": "葬儀プラン一覧",
      "description": "中央福祉葬祭が提供する、火葬式、一日葬、家族葬、二日葬の各プランとその価格を一覧表示しています。",
      "itemListElement": [
        {
          "@type": "Product",
          "name": "直送おまかせプラン",
          "offers": {
            "@type": "Offer",
            "price": "79000",
            "priceCurrency": "JPY",
            "url": "https://staging.c-fukushi.co.jp/plan/chokuso/"
          }
        },
        {
          "@type": "Product",
          "name": "火葬式プラン",
          "offers": {
            "@type": "Offer",
            "price": "154000",
            "priceCurrency": "JPY",
            "url": "https://staging.c-fukushi.co.jp/plan/kasou/"
          }
        },
        {
          "@type": "Product",
          "name": "シンプル一日プラン",
          "offers": {
            "@type": "Offer",
            "price": "198000",
            "priceCurrency": "JPY",
            "url": "https://staging.c-fukushi.co.jp/plan/ichinichi/"
          }
        },
        {
          "@type": "Product",
          "name": "家族葬一日プラン",
          "offers": {
            "@type": "Offer",
            "price": "298000",
            "priceCurrency": "JPY",
            "url": "https://staging.c-fukushi.co.jp/plan/ichinichi-hana/"
          }
        },
        {
          "@type": "Product",
          "name": "家族葬二日プラン",
          "offers": {
            "@type": "Offer",
            "price": "598000",
            "priceCurrency": "JPY",
            "url": "https://staging.c-fukushi.co.jp/plan/futsuka/"
          }
        }
      ]
    }
	]
    }
JSON;
    echo $json_common;
    ?>
    </script>
    <?php
  }
});
?>
<?php
// schema_top
add_action('wp_head', function() {
  if (is_page('/') || is_front_page()) {
    ?>
    <script type="application/ld+json">
    <?php
    $json_common = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "ProfessionalService", 
      "@id": "https://staging.c-fukushi.co.jp/#localbusiness",
      "name": "家族葬の中央福祉葬祭",
      "image": "https://staging.c-fukushi.co.jp/wp-content/uploads/2024/09/screenshot.png",
      "url": "https://staging.c-fukushi.co.jp/",
      "telephone": "0120-594-294",
      "priceRange": "¥79,000〜",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "西新井宿603-3",
        "addressLocality": "川口市",
        "addressRegion": "埼玉県",
        "postalCode": "333-0833",
        "addressCountry": "JP"
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"
        ],
        "opens": "00:00",
        "closes": "23:59"
      },
      "areaServed": [
        {"@type": "Place", "name": "埼玉県川口市"},
        {"@type": "Place", "name": "さいたま市"},
        {"@type": "Place", "name": "蕨市"}
      ],
      "sameAs": [
        "https://lin.ee/6m53CrY",
        "https://www.google.com/maps/place/%E6%9C%89%E9%99%90%E4%BC%9A%E7%A4%BE%E4%B8%AD%E5%A4%AE%E7%A6%8F%E7%A5%89%E8%91%AC%E7%A5%AD"
      ]
    },
    {
      "@type": "Service",
      "@id": "https://staging.c-fukushi.co.jp/#funeralservice",
      "name": "葬儀・家族葬サービス",
      "description": "直葬・一日葬・家族葬・一般葬など、地域密着で対応する葬儀サービス。",
      "serviceType": ["葬儀","家族葬","直葬","一日葬","一般葬"],
      "provider": {
        "@id": "https://staging.c-fukushi.co.jp/#localbusiness"
      },
      "areaServed": ["川口市","さいたま市","蕨市"],
      "availableChannel": {
        "@type": "ServiceChannel",
        "serviceUrl": "https://staging.c-fukushi.co.jp/",
        "availableLanguage": ["ja"]
      }
    },
    {
      "@type": "ItemList",
      "@id": "https://staging.c-fukushi.co.jp/plan/#halllist",
      "name": "ご利用可能な斎場・葬儀場",
      "description": "中央福祉葬祭が対応可能な提携斎場、セレモニーホールの一覧です。",
      "itemListElement": [
        {
          "@type": "LocalBusiness",
          "name": "中央福祉会館",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "西新井宿603-3",
            "addressLocality": "川口市",
            "addressRegion": "埼玉県",
            "postalCode": "333-0833"
          },
          "url": "https://staging.c-fukushi.co.jp/hall/chuou-fukushi/"
        },
        {
          "@type": "LocalBusiness",
          "name": "小さな蕨会館",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "北町3丁目4-25",
            "addressLocality": "蕨市",
            "addressRegion": "埼玉県",
            "postalCode": "335-0001"
          },
          "url": "https://staging.c-fukushi.co.jp/hall/warabi/"
        },
        {
          "@type": "LocalBusiness",
          "name": "川口市めぐりの森",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "大字新井宿430-1",
            "addressLocality": "川口市",
            "addressRegion": "埼玉県",
            "postalCode": "333-0826"
          },
          "url": "https://staging.c-fukushi.co.jp/relation/川口市めぐりの森/"
        },
        {
          "@type": "LocalBusiness",
          "name": "戸田葬祭場",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "舟渡4丁目15-1",
            "addressLocality": "板橋区",
            "addressRegion": "東京都",
            "postalCode": "174-0041"
          },
          "url": "https://staging.c-fukushi.co.jp/relation/戸田葬祭場-光の間（3階）/"
        },
        {
          "@type": "LocalBusiness",
          "name": "谷塚斎場",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "瀬崎4-6-36",
            "addressLocality": "草加市",
            "addressRegion": "埼玉県",
            "postalCode": "340-0022"
          },
          "url": "https://staging.c-fukushi.co.jp/relation/谷塚斎場%e3%80%80北館/"
        },
        {
          "@type": "LocalBusiness",
          "name": "大宮聖苑",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "染谷2丁目350番地1",
            "addressLocality": "さいたま市見沼区",
            "addressRegion": "埼玉県",
            "postalCode": "337-0026"
          },
          "url": "https://staging.c-fukushi.co.jp/relation/大宮聖苑/"
        },
        {
          "@type": "LocalBusiness",
          "name": "浦和斎場",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "大字下大久保1523番地1",
            "addressLocality": "さいたま市桜区",
            "addressRegion": "埼玉県",
            "postalCode": "338-0825"
          },
          "url": "https://staging.c-fukushi.co.jp/relation/浦和斎場/"
        }
      ]
    },
	{
      "@type": "ItemList",
      "@id": "https://staging.c-fukushi.co.jp/plan/#planlist",
      "name": "葬儀プラン一覧",
      "description": "中央福祉葬祭が提供する、火葬式、一日葬、家族葬、二日葬の各プランとその価格を一覧表示しています。",
      "itemListElement": [
        {
          "@type": "Product",
          "name": "直送おまかせプラン",
          "offers": {
            "@type": "Offer",
            "price": "79000",
            "priceCurrency": "JPY",
            "url": "https://staging.c-fukushi.co.jp/plan/chokuso/"
          }
        },
        {
          "@type": "Product",
          "name": "火葬式プラン",
          "offers": {
            "@type": "Offer",
            "price": "154000",
            "priceCurrency": "JPY",
            "url": "https://staging.c-fukushi.co.jp/plan/kasou/"
          }
        },
        {
          "@type": "Product",
          "name": "シンプル一日プラン",
          "offers": {
            "@type": "Offer",
            "price": "198000",
            "priceCurrency": "JPY",
            "url": "https://staging.c-fukushi.co.jp/plan/ichinichi/"
          }
        },
        {
          "@type": "Product",
          "name": "家族葬一日プラン",
          "offers": {
            "@type": "Offer",
            "price": "298000",
            "priceCurrency": "JPY",
            "url": "https://staging.c-fukushi.co.jp/plan/ichinichi-hana/"
          }
        },
        {
          "@type": "Product",
          "name": "家族葬二日プラン",
          "offers": {
            "@type": "Offer",
            "price": "598000",
            "priceCurrency": "JPY",
            "url": "https://staging.c-fukushi.co.jp/plan/futsuka/"
          }
        }
      ]
    }
  ]
}
JSON;

    echo $json_common;
    ?>
    </script>
    <?php
  }
});
?>

<?php
//Schema_first
add_action('wp_head', function() {
  if (is_page('first')) { 
    ?>
<script type="application/ld+json">
<?php
$json = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      // 葬儀の流れをHowToとしてマークアップ
      "@type": "HowTo",
      "@id": "https://staging.c-fukushi.co.jp/first/#howto",
      "name": "ご逝去からご葬儀までの手順",
      "description": "ご逝去された直後からご葬儀を終えるまでの一般的な流れと、ご遺族様が行うべき手順を解説します。",
      "step": [
        {
          "@type": "HowToStep",
          "name": "もしもの時、まず何をすべき？",
          "text": "まずは中央福祉葬祭へご連絡ください（24時間365日受付）。その後、病院で死亡診断書を受け取り、寝台車でご遺体を安置場所へ搬送します。"
        },
        {
          "@type": "HowToStep",
          "name": "ご安置",
          "text": "ご遺体を搬送し、ご自宅や斎場の安置室にご安置します。ドライアイスの処置などを行い、枕飾りを設置します。"
        },
        {
          "@type": "HowToStep",
          "name": "お打ち合わせ",
          "text": "故人様の情報、喪主様、葬儀の形式、宗派、参列者人数、ご予算など、詳細について葬儀社の担当者と打ち合わせを行い、葬儀のプランを決定します。"
        },
        {
          "@type": "HowToStep",
          "name": "納棺",
          "text": "故人様のお身体を清め（湯灌・清拭）、お化粧や身だしなみを整え、愛用の品などを副葬品として納めます。"
        },
        {
          "@type": "HowToStep",
          "name": "通夜・告別式",
          "text": "参列者を迎え、読経、焼香を行い、告別式を経て故人様と最後のお別れをします。（一日葬や直葬の場合は省略される場合があります。）"
        },
        {
          "@type": "HowToStep",
          "name": "ご出棺・火葬",
          "text": "柩を霊柩車で火葬場まで搬送します。火葬後、収骨し、自宅に戻ります。"
        }
      ]
    },
    {
      // よくあるご質問をFAQPageとしてマークアップ
      "@type": "FAQPage",
      "@id": "https://staging.c-fukushi.co.jp/first/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Q. 費用はどのくらいかかりますか？",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A. 故人様の状況やご希望される葬儀の形式により変動します。シンプル一日葬の198,000円から、様々なプランをご用意しています。"
          }
        },
        {
          "@type": "Question",
          "name": "Q. 葬儀に関する知識が全くありません。それでも大丈夫ですか？",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A. はい、ご安心ください。担当スタッフが24時間体制で、一から丁寧にご説明し、全てサポートいたします。"
          }
        },
        {
          "@type": "Question",
          "name": "Q. 病院で亡くなりました。まず何をすれば良いですか？",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A. まずはすぐに中央福祉葬祭（0120-594-294）にご連絡ください。寝台車の手配から、ご安置場所の手配まで、迅速に対応いたします。"
          }
        },
        {
          "@type": "Question",
          "name": "Q. 斎場（葬儀を行う場所）は選べますか？",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A. はい、お客様のご要望に応じて、ご希望の斎場や寺院、または当社の提携ホールなど、最適な場所をご提案いたします。"
          }
        }
      ]
    }
  ]
}
JSON;
echo $json;
?>
</script>
<?php
  }
});
?>
<?php
//Schema_plan
add_action('wp_head', function() {
  if (is_page('plan')) { 
    ?>
<script type="application/ld+json">
<?php
$json = <<<JSON
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "ItemList",
      "@id": "https://staging.c-fukushi.co.jp/plan/#planlist",
      "name": "葬儀プラン一覧",
      "description": "中央福祉葬祭が提供する、火葬式、一日葬、家族葬、二日葬の各プランとその価格を一覧表示しています。",
      "itemListElement": [
        {
          "@type": "Product",
          "name": "直送おまかせプラン",
          "offers": {
            "@type": "Offer",
            "price": "79000",
            "priceCurrency": "JPY",
            "url": "https://staging.c-fukushi.co.jp/plan/chokuso/"
          }
        },
        {
          "@type": "Product",
          "name": "火葬式プラン",
          "offers": {
            "@type": "Offer",
            "price": "154000",
            "priceCurrency": "JPY",
            "url": "https://staging.c-fukushi.co.jp/plan/kasou/"
          }
        },
        {
          "@type": "Product",
          "name": "シンプル一日プラン",
          "offers": {
            "@type": "Offer",
            "price": "198000",
            "priceCurrency": "JPY",
            "url": "https://staging.c-fukushi.co.jp/plan/ichinichi/"
          }
        },
        {
          "@type": "Product",
          "name": "家族葬一日プラン",
          "offers": {
            "@type": "Offer",
            "price": "298000",
            "priceCurrency": "JPY",
            "url": "https://staging.c-fukushi.co.jp/plan/ichinichi-hana/"
          }
        },
        {
          "@type": "Product",
          "name": "家族葬二日プラン",
          "offers": {
            "@type": "Offer",
            "price": "598000",
            "priceCurrency": "JPY",
            "url": "https://staging.c-fukushi.co.jp/plan/futsuka/"
          }
        }
      ]
    },
    {
      "@type": "ItemList",
      "@id": "https://staging.c-fukushi.co.jp/plan/#halllist",
      "name": "ご利用可能な斎場・葬儀場",
      "description": "中央福祉葬祭が対応可能な提携斎場、セレモニーホールの一覧です。",
      "itemListElement": [
        {
          "@type": "LocalBusiness",
          "name": "中央福祉会館",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "西新井宿603-3",
            "addressLocality": "川口市",
            "addressRegion": "埼玉県",
            "postalCode": "333-0833"
          },
          "url": "https://staging.c-fukushi.co.jp/hall/chuou-fukushi/"
        },
        {
          "@type": "LocalBusiness",
          "name": "小さな蕨会館",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "北町3丁目4-25",
            "addressLocality": "蕨市",
            "addressRegion": "埼玉県",
            "postalCode": "335-0001"
          },
          "url": "https://staging.c-fukushi.co.jp/hall/warabi/"
        },
        {
          "@type": "LocalBusiness",
          "name": "川口市めぐりの森",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "大字新井宿430-1",
            "addressLocality": "川口市",
            "addressRegion": "埼玉県",
            "postalCode": "333-0826"
          },
          "url": "https://staging.c-fukushi.co.jp/relation/川口市めぐりの森/"
        },
        {
          "@type": "LocalBusiness",
          "name": "戸田葬祭場", 
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "舟渡4丁目15-1",
            "addressLocality": "板橋区",
            "addressRegion": "東京都",
            "postalCode": "174-0041"
          },
          "url": "https://staging.c-fukushi.co.jp/relation/戸田葬祭場-光の間（3階）/"
        },
        {
          "@type": "LocalBusiness",
          "name": "谷塚斎場", 
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "瀬崎4-6-36",
            "addressLocality": "草加市",
            "addressRegion": "埼玉県",
            "postalCode": "340-0022"
          },
          "url": "https://staging.c-fukushi.co.jp/relation/谷塚斎場%e3%80%80北館/"
        },
        {
          "@type": "LocalBusiness",
          "name": "大宮聖苑",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "染谷2丁目350番地1",
            "addressLocality": "さいたま市見沼区",
            "addressRegion": "埼玉県",
            "postalCode": "337-0026"
          },
          "url": "https://staging.c-fukushi.co.jp/relation/大宮聖苑/"
        },
        {
          "@type": "LocalBusiness",
          "name": "浦和斎場",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "大字下大久保1523番地1",
            "addressLocality": "さいたま市桜区",
            "addressRegion": "埼玉県",
            "postalCode": "338-0825"
          },
          "url": "https://staging.c-fukushi.co.jp/relation/浦和斎場/"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "@id": "https://staging.c-fukushi.co.jp/plan/#faq",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Q. 深夜・早朝でも対応可能ですか？",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A. はい、24時間365日、いつでも対応可能です。深夜・早朝を問わず、すぐにお電話ください。"
          }
        },
        {
          "@type": "Question",
          "name": "Q. どの地域まで対応してもらえますか？",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A. 川口市・蕨市を中心に、さいたま市、戸田市、東京都板橋区、北区、練馬区など、近隣の地域に対応しています。ご不安な場合は、まずはお電話でお尋ねください。"
          }
        },
        {
          "@type": "Question",
          "name": "Q. 相談だけでも無料ですか？",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A. はい、事前相談は無料です。専門スタッフが親身になってお伺いします。電話、LINE、対面など、ご都合の良い方法でご相談ください。"
          }
        },
        {
          "@type": "Question",
          "name": "Q. 生活保護を受給しているのですが、葬儀はできますか？",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A. はい、可能です。生活保護受給者の方には、自己負担0円で葬儀を行える「福祉葬」をご案内できます。手続きについてもサポートいたしますのでご安心ください。"
          }
        }
      ]
    }
  ]
}
JSON;
echo $json;
?>
</script>
<?php
  }
});
?>