<?php
/************************* 
  テーマURLショートコード
*************************/

// サイトURLを返すショートコード [homeurl]
function shortcode_home_url() {
    return esc_url( home_url() );
}
add_shortcode('homeurl', 'shortcode_home_url');

// 親テーマURLを返すショートコード [tempurl]
function shortcode_parent_theme_url() {
return esc_url( get_template_directory_uri() );
}
add_shortcode('tempurl', 'shortcode_parent_theme_url');

// 子テーマ（もしくは現在のテーマ）URLを返すショートコード [childurl]
function shortcode_child_theme_url() {
return esc_url( get_stylesheet_directory_uri() );
}
add_shortcode('childurl', 'shortcode_child_theme_url');

// phpファイル用_ショートコード [homeurl] のショートハンド関数
function homeurl() {
echo do_shortcode('[homeurl]');
}

// phpファイル用_ショートコード [tempurl] のショートハンド関数
function tempurl() {
echo do_shortcode('[tempurl]');
}

// phpファイル用_ショートコード [childurl] のショートハンド関数
function childurl() {
echo do_shortcode('[childurl]');
}

/* css と js をenqueue で読み込み */
function website_template_assets() {

    // CSS
    wp_enqueue_style(
        'website-template-common',
        get_template_directory_uri() . '/css/common.css',
        array(),
        filemtime(get_template_directory() . '/css/common.css')
    );

    // Slick CSS
    wp_enqueue_style(
        'slick',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css',
        array(),
        '1.8.1'
    );

    // jQuery
    wp_enqueue_script(
        'jquery'
    );

    // Slick JS
    wp_enqueue_script(
        'slick',
        'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js',
        array('jquery'),
        '1.8.1',
        true
    );

    // Isotope
    wp_enqueue_script(
        'isotope',
        'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js',
        array('jquery'),
        '3.0.6',
        true
    );

    // 自作JS
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/js/common.js',
        array('jquery', 'slick', 'isotope'),
        filemtime(get_template_directory() . '/js/common.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'website_template_assets');