<?php
@ini_set( 'upload_max_size' , '500M' );
@ini_set( 'post_max_size', '500M');
@ini_set( 'max_execution_time', '300' );

//カテゴリーをページに追加する
add_action('init', 'add_categories_for_pages');
function add_categories_for_pages()
{
    register_taxonomy_for_object_type('category', 'page');
}
add_action('pre_get_posts', 'nobita_merge_page_categories_at_category_archive');
function nobita_merge_page_categories_at_category_archive($query)
{
    if ($query->is_category== true && $query->is_main_query()) {
        $query->set('post_type', array( 'post', 'page', 'nav_menu_item'));
    }
}

/* 特定カテゴリーの個別投稿のテンプレートを指定 */
function my_template_include($template) {
    if (is_page() && in_category('studio_detail')) {
        $template = dirname(__FILE__) . '/page-studio-detail.php';
    }
    return $template;
}
add_filter('template_include', 'my_template_include', 999);

// カスタム投稿タイプを追加する
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'news', [ // 投稿タイプ名の定義
        'labels' => [
            'name'          => 'お知らせ', // 管理画面上で表示する投稿タイプ名
            'singular_name' => 'お知らせ',    // カスタム投稿の識別名
        ],
        'public'        => true,  // 投稿タイプをpublicにするか
        'has_archive'   => true, // アーカイブ機能ON/OFF
        'menu_position' => 4,     // 管理画面上での配置場所
        'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
        'hierarchical' => true, // 親ページをサポートする
        'taxonomies' => array('category') // カテゴリのサポートを追加
    ]);
}


//クエリ登録（WP上で独自のクエリを扱う時に必要）
// function add_query_vars_filter( $vars ){
//     $vars[] = "gallery-page";
//     return $vars;
//   }
//   add_filter( 'query_vars', 'add_query_vars_filter' );


// アイキャッチ画像設定
function setup_theme() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'setup_theme');

// カスタムカラムを追加するフック
function custom_post_type_columns($columns) {
    // タイトルの次にアイキャッチ画像カラムを追加
    $new_columns = array();
    foreach ($columns as $key => $value) {
        $new_columns[$key] = $value;
        if ($key === 'title') {
            $new_columns['thumbnail'] = 'アイキャッチ画像';
        }
    }
    return $new_columns;
}
add_filter('manage_news_posts_columns', 'custom_post_type_columns');

// カスタムカラムの内容を出力するフック
function custom_post_type_column_content($column, $post_id) {
    if ($column === 'thumbnail') {
        echo get_the_post_thumbnail($post_id, 'thumbnail');
    }
}
add_action('manage_news_posts_custom_column', 'custom_post_type_column_content', 10, 2);

