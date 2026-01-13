<?php
function linaje_alba_scripts() {
    // Styles
    // Styles - with filemtime for cache busting
    wp_enqueue_style( 'linaje-alba-style', get_stylesheet_uri(), array(), filemtime( get_stylesheet_directory() . '/style.css' ) );

    // Scripts
    // Load Lucide Icons from UNPKG as done in the HTML
    wp_enqueue_script( 'lucide-icons', 'https://unpkg.com/lucide@latest', array(), null, false );

    // Main JS
    wp_enqueue_script( 'linaje-alba-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'linaje_alba_scripts' );

function linaje_alba_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Register Navigation Menus
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'linaje-alba' ),
    ) );
}
add_action( 'after_setup_theme', 'linaje_alba_setup' );
