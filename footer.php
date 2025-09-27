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
                <div class="footer-widgets">
                    <?php
                    if ( is_active_sidebar( 'footer-1' ) ) {
                        dynamic_sidebar( 'footer-1' );
                    }
                    ?>
                </div>
                
                <div class="site-info">
                    <p class="copyright">
                        <?php
                        printf(
                            /* translators: 1: Current year, 2: Site name */
                            esc_html__( '&copy; %1$s %2$s. All rights reserved.', 'maju' ),
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
