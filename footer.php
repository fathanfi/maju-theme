<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package Maju
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="footer-container">
            <div class="footer-content">
                <!-- Left Section: Logo and Tagline -->
                <div class="footer-left">
                    <div class="footer-logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="footer-logo-link">
                            m.
                        </a>
                    </div>
                    <p class="footer-tagline">
                        <?php esc_html_e( 'AI powered creative and digital agency', 'maju' ); ?>
                    </p>
                </div>

                <!-- Center Section: Legal Links -->
                <div class="footer-center">
                    <nav class="footer-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'maju' ); ?>">
                        <ul class="footer-menu">
                            <li>
                                <a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>" class="footer-link">
                                    <?php esc_html_e( 'Privacy policy', 'maju' ); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url( home_url( '/terms-conditions' ) ); ?>" class="footer-link">
                                    <?php esc_html_e( 'Terms & conditions', 'maju' ); ?>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Right Section: Copyright -->
                <div class="footer-right">
                    <p class="footer-copyright">
                        <?php
                        printf(
                            /* translators: 1: Current year, 2: Site name */
                            esc_html__( '©%1$s %2$s agency. All right reserved', 'maju' ),
                            date( 'Y' ),
                            get_bloginfo( 'name' )
                        );
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
