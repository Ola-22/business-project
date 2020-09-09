<?php
function business_theme_setup() {
    // load_theme_textdomain( 'theme-two', get_template_directory() . '/languages' );
    add_theme_support('title-tag');
    add_theme_support('custom-logo', [
        'height' => 50.42,
        'width'  => 107,
    ]);
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
    add_theme_support( 'customize-selective-refresh-widgets' );

    register_nav_menu( 'primary', 'Primary Menu' );
    register_nav_menu( 'social', 'Social Menu' );
    
}
add_action('after_setup_theme', 'business_theme_setup');


function business_enqueue_scripts() {

    wp_enqueue_style(
        'bootstrap',
        get_theme_file_uri( '/assets/css/bootstrap.min.css' ),
        [],
        '',
        'all'
    );
    wp_enqueue_style(
        'all',
        get_theme_file_uri( '/assets/css/all.min.css' ),
        [],
        '',
        'all'
    );
    wp_enqueue_style(
        'jquery',
        get_theme_file_uri( '/assets/css/jquery.flipster.nav.css' ),
        [],
        '',
        'all'
    );
    wp_enqueue_style(
        'jq',
        get_theme_file_uri( '/assets/css/jquery.flipster.css' ),
        [],
        '',
        'all'
    );
    wp_enqueue_style(
        'main',
        get_theme_file_uri( '/assets/css/main.css' ),
        [],
        '',
        'all'
    );
    wp_enqueue_script(
        'jquery',
        get_theme_file_uri( '/assets/js/jquery-3.5.1.min.js' ),
        [],
        '',
        'all'
    );
    wp_enqueue_script(
        'popper',
        get_theme_file_uri( '/assets/js/popper.min.js' ),
        [],
        '',
        'all'
    );
    wp_enqueue_script(
        'bootstrapjs',
        get_theme_file_uri( '/assets/js/bootstrap.min.js' ),
        [],
        '',
        'all'
    );
    wp_enqueue_script(
        'mainjs',
        get_theme_file_uri( '/assets/js/all.min.js' ),
        [],
        '',
        'all'
    );
        wp_enqueue_script(
        'flipsterjs',
        get_theme_file_uri( '/assets/js/jquery.flipster.min.js' ),
        [],
        '',
        'all'
    );
            wp_enqueue_script(
        'main',
        get_theme_file_uri( '/assets/js/main.js' ),
        [],
        '',
        'all'
    );

}

add_action('wp_enqueue_scripts', 'business_enqueue_scripts');