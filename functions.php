<?php
/**
 * Maju Theme Functions
 *
 * @package Maju
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme setup function
 */
function maju_setup() {
    // Add theme support for various features
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'align-wide' );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'maju' ),
        'footer'  => esc_html__( 'Footer Menu', 'maju' ),
    ) );

    // Set content width
    if ( ! isset( $content_width ) ) {
        $content_width = 1200;
    }
}
add_action( 'after_setup_theme', 'maju_setup' );

/**
 * Enqueue scripts and styles
 */
function maju_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'maju-style', get_stylesheet_uri(), array(), '1.0.0' );
    
    // Enqueue Tailwind CSS (will be built from source)
    wp_enqueue_style( 'maju-tailwind', get_template_directory_uri() . '/assets/css/tailwind.css', array(), '1.0.0' );
    
    // Enqueue main JavaScript
    wp_enqueue_script( 'maju-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
    
    // Localize script for AJAX
    wp_localize_script( 'maju-script', 'maju_ajax', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'nonce'    => wp_create_nonce( 'maju_nonce' ),
    ) );

    // Enqueue comment reply script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'maju_scripts' );

/**
 * Register widget areas
 */
function maju_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'maju' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'maju' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'maju_widgets_init' );

/**
 * Custom excerpt length
 */
function maju_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'maju_excerpt_length', 999 );

/**
 * Custom excerpt more
 */
function maju_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'maju_excerpt_more' );

/**
 * Add custom body classes
 */
function maju_body_classes( $classes ) {
    // Add class for no sidebar
    if ( ! is_active_sidebar( 'sidebar-1' ) ) {
        $classes[] = 'no-sidebar';
    }
    
    return $classes;
}
add_filter( 'body_class', 'maju_body_classes' );

/**
 * Security: Sanitize and validate input
 */
function maju_sanitize_text( $input ) {
    return sanitize_text_field( $input );
}

function maju_sanitize_email( $input ) {
    return sanitize_email( $input );
}

function maju_sanitize_url( $input ) {
    return esc_url_raw( $input );
}

/**
 * Security: Check user capabilities
 */
function maju_check_capability( $capability = 'edit_posts' ) {
    return current_user_can( $capability );
}

/**
 * Performance: Optimize database queries
 */
function maju_optimize_queries() {
    // Remove unnecessary queries
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wp_shortlink_wp_head' );
}
add_action( 'init', 'maju_optimize_queries' );

/**
 * Error handling: Custom error handler
 */
function maju_error_handler( $errno, $errstr, $errfile, $errline ) {
    if ( ! ( error_reporting() & $errno ) ) {
        return false;
    }
    
    // Log error for debugging
    error_log( "Maju Theme Error: $errstr in $errfile on line $errline" );
    
    return true;
}
set_error_handler( 'maju_error_handler' );

/**
 * Theme activation hook
 */
function maju_theme_activation() {
    // Flush rewrite rules
    flush_rewrite_rules();
    
    // Set default options
    if ( ! get_option( 'maju_theme_options' ) ) {
        add_option( 'maju_theme_options', array(
            'primary_color'   => '#00ff88',
            'secondary_color' => '#ff0080',
            'font_family'     => 'Inter, sans-serif',
        ) );
    }
}
add_action( 'after_switch_theme', 'maju_theme_activation' );

/**
 * Theme deactivation hook
 */
function maju_theme_deactivation() {
    // Flush rewrite rules
    flush_rewrite_rules();
}
add_action( 'switch_theme', 'maju_theme_deactivation' );

/**
 * Fallback menu function
 */
function maju_fallback_menu() {
    echo '<ul class="nav-menu">';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'maju' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/about' ) ) . '">' . esc_html__( 'About', 'maju' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/services' ) ) . '">' . esc_html__( 'Services', 'maju' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/contact' ) ) . '">' . esc_html__( 'Contact', 'maju' ) . '</a></li>';
    echo '</ul>';
}
