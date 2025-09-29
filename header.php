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
                $white_logo = maju_get_white_logo();
                if ( $white_logo ) {
                    ?>
                    <div class="custom-logo-wrapper">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <img src="<?php echo esc_url( $white_logo['url'] ); ?>" 
                                 alt="<?php echo esc_attr( $white_logo['alt'] ); ?>" 
                                 class="custom-logo">
                        </a>
                    </div>
                    <?php
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
                <div class="nav-menu">
                    <!-- Column 1: Image -->
                    <div class="nav-column nav-image-column justify-start">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/menu-image.png' ); ?>" 
                             alt="Menu Image" 
                             class="nav-image">
                    </div>
                    
                    <!-- Column 2: Navigation -->
                    <div class="nav-column nav-links-column">
                        <h3 class="nav-column-title px-[56px]">NAVIGATION</h3>
                        <div class="nav-menu-links">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'primary',
                                'menu_id'        => 'primary-menu',
                                'menu_class'     => 'nav-menu-links',
                                'container'      => false,
                                'fallback_cb'    => 'maju_fallback_menu',
                            ) );
                            ?>
                        </div>
                    </div>
                    
                    <!-- Column 3: About & Contact -->
                    <div class="nav-column nav-info-column">
                        <h3 class="nav-column-title">ABOUT</h3>
                        <p class="nav-about-text">
                            <?php esc_html_e( 'Based in Bali Indonesia, Maju is a digital creative agency at the forefront of innovation, specializing in the design of digital solutions integrating artificial intelligence (AI)', 'maju' ); ?>
                        </p>
                        
                        <h3 class="nav-column-title nav-contact-title">CONTACT</h3>
                        <div class="nav-contact-items">
                            <div class="nav-contact-item">
                                <strong><?php esc_html_e( 'A:', 'maju' ); ?></strong> <?php esc_html_e( 'Kuta, South Lombok', 'maju' ); ?>
                            </div>
                            <div class="nav-contact-item">
                                <strong><?php esc_html_e( 'E:', 'maju' ); ?></strong> <?php esc_html_e( 'info@maju.agency', 'maju' ); ?>
                            </div>
                            <div class="nav-contact-item">
                                <strong><?php esc_html_e( 'P:', 'maju' ); ?></strong> <?php esc_html_e( '+62 (0) 818 0304 2211', 'maju' ); ?>
                            </div>
                            <div class="nav-contact-item">
                                <strong><?php esc_html_e( 'H:', 'maju' ); ?></strong> <?php esc_html_e( 'Mon-Fri from 8am-5pm.', 'maju' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="header-actions">
                <button class="arrow-btn" aria-label="<?php esc_attr_e( 'Arrow Button', 'maju' ); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gototop.svg' ); ?>" 
                         alt="Go to top" 
                         class="gototop-icon">
                </button>
                
                <button class="contact-btn" aria-label="<?php esc_attr_e( 'Contact Us', 'maju' ); ?>">
                    <?php esc_html_e( 'CONTACT', 'maju' ); ?>
                </button>
                
                <div class="language-selector">
                    <button class="lang-toggle" aria-label="<?php esc_attr_e( 'Select Language', 'maju' ); ?>" id="lang-toggle">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/globe.svg' ); ?>" 
                             alt="Language" 
                             class="globe-icon">
                        <span class="lang-code" id="current-lang">EN</span>
                    </button>
                    <div class="lang-dropdown" id="lang-dropdown" style="display: none;">
                        <button class="lang-option" data-lang="en">🇺🇸 English</button>
                        <button class="lang-option" data-lang="id">🇮🇩 Bahasa Indonesia</button>
                    </div>
                </div>
                
                <button class="hidden lg:inline-flex menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="sr-only"><?php esc_html_e( 'Primary Menu', 'maju' ); ?></span>
                    <div class="hamburger-icon">
                        <span></span>
                        <span></span>
                    </div>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/close.svg' ); ?>" 
                         alt="Close" 
                         class="close-icon hidden">
                </button>
            </div>
        </div>
    </header>


    <div id="content" class="site-content">
