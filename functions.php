<?php
// スクリプトおよびスタイルの追加
function enqueue_theme_scripts() {
    // reset.css の読み込み
    wp_enqueue_style("resetcss", get_stylesheet_directory_uri() . "css/reset.css");
    // uikit.css の読み込み
    wp_enqueue_style("uikitcss", get_stylesheet_directory_uri() . "css/uikit.css");
    // uikit.min.css の読み込み
    wp_enqueue_style("uikitmincss", get_stylesheet_directory_uri() . "css/uikit.min.css");
    // style.css の読み込み
    wp_enqueue_style("main-style", get_stylesheet_uri());
    // jQuery の読み込み
    wp_enqueue_script("jquery");

    // スクリプトの読み込み
    wp_enqueue_script("action_script", get_theme_file_uri("js/script.js"), array(), null, true);
    // uikit.min.js の読み込み
    wp_enqueue_script("uikit_script", get_theme_file_uri("js/uikit.min.js"), array(), null, true);
    // uikit-icons.min.js の読み込み
    wp_enqueue_script("uikit_icons_script", get_theme_file_uri("js/uikit-icons.min.js"), array(), null, true);
}

add_action("wp_enqueue_scripts", "enqueue_theme_scripts");

// テーマサポートの追加
function mynote_setup() {
    // title タグの設定
    add_theme_support("title-tag");
    // アイキャッチ画像の有効化
    add_theme_support("post-thumbnails");
    set_post_thumbnail_size(800, 600, true); // ここでサイズを指定
    // ウィジェットの有効化
    add_theme_support("widgets");
    // グローバルメニューの有効化
    register_nav_menus(array(
        "global" => "Global Menu",
        "footer" => "Footer Menu"
    ));
}

add_action("after_setup_theme", "mynote_setup");

// ウィジェットの登録
function mynote_widgets_init() {
    // ウィジェットエリア 'Sidebar' を登録
    register_sidebar(array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'description'   => 'Sidebar Widget Area',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name' => 'Search Widget',
        'id' => 'search_widget',
        'description' => 'Search widget area',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}

// widgets_init にフック.
add_action('widgets_init', 'mynote_widgets_init');

?>
