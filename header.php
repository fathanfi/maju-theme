<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package Maju
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'maju' ); ?></a>

<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
        <div class="header-container">
            <div class="site-branding">
                <?php
                if ( has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    ?>
                    <h1 class="site-title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            m.
                        </a>
                    </h1>
                    <?php
                }
                ?>
            </div>

            <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'maju' ); ?>">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="sr-only"><?php esc_html_e( 'Primary Menu', 'maju' ); ?></span>
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
                
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'nav-menu',
                    'container'      => false,
                    'fallback_cb'    => 'maju_fallback_menu',
                ) );
                ?>
            </nav>

            <div class="header-actions">
                <button class="arrow-btn" aria-label="<?php esc_attr_e( 'Arrow Button', 'maju' ); ?>">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 17L17 7M17 7H7M17 7V17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                
                <button class="contact-btn" aria-label="<?php esc_attr_e( 'Contact Us', 'maju' ); ?>">
                    <?php esc_html_e( 'CONTACT', 'maju' ); ?>
                </button>
                
                <div class="language-selector">
                    <button class="lang-toggle" aria-label="<?php esc_attr_e( 'Select Language', 'maju' ); ?>">
                        <span class="globe-icon" aria-hidden="true">🌐</span>
                        <span class="lang-code">EN</span>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div id="content" class="site-content">
