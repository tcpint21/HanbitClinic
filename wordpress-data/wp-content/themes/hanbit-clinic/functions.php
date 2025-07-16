<?php
/**
 * 한빛 클리닉 테마 기능
 */

// 테마 설정
function hanbit_clinic_setup() {
    // 자동 피드 링크 지원
    add_theme_support('automatic-feed-links');

    // 제목 태그 지원
    add_theme_support('title-tag');

    // 포스트 썸네일 지원
    add_theme_support('post-thumbnails');

    // HTML5 마크업 지원
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // 메뉴 위치 등록
    register_nav_menus(array(
        'menu-1' => esc_html__('Primary', 'hanbit-clinic'),
    ));
}
add_action('after_setup_theme', 'hanbit_clinic_setup');

// 스타일시트와 스크립트 등록
function hanbit_clinic_scripts() {
    wp_enqueue_style('hanbit-clinic-style', get_stylesheet_uri());
    wp_enqueue_script('hanbit-clinic-main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'hanbit_clinic_scripts');

// 위젯 영역 등록
function hanbit_clinic_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'hanbit-clinic'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'hanbit-clinic'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'hanbit_clinic_widgets_init');

// 커스텀 로고 지원
function hanbit_clinic_custom_logo_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'hanbit_clinic_custom_logo_setup'); 