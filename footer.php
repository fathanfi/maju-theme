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

    <!-- Footer Section -->
    <footer id="footer" class="footer-section bg-lime-green text-black py-20">
        <div class="container mx-auto px-0">
            <!-- Main Content Area -->
            <div class="mx-auto px-[56px]">
                <!-- Part 1: Main Headline -->
                <div class="mb-16">
                    <h2 class="text-footer-headline font-medium font-graphik text-black leading-[144px] tracking-[-0.04em]">
                        <?php esc_html_e( 'Let\'s create cool stuff together!', 'maju' ); ?>
                    </h2>
                </div>
                
                <!-- Part 2: Buttons -->
                <div class="flex items-center gap-6 mb-20">
                    <!-- Go to Top Button -->
                    <button id="go-to-top" class="flex items-center justify-center w-12 h-12 bg-white rounded-full hover:bg-gray-100 transition-colors duration-300">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 14L12 9L17 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    
                    <!-- Get in Touch Button -->
                    <button class="flex items-center gap-3 bg-white px-6 py-3 rounded-full hover:bg-gray-100 transition-colors duration-300">
                        <span class="text-footer-button font-medium font-graphik text-black uppercase tracking-[0.02em]">
                            <?php esc_html_e( 'GET IN TOUCH', 'maju' ); ?>
                        </span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 17L17 7M17 7H7M17 7V17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                
                <!-- Part 3-6: Footer Content -->
                <div class="grid grid-cols-3 gap-8">
                    <!-- Left: Logo and Description -->
                    <div class="flex flex-col">
                        <div class="mb-4">
                            <?php
                            $dark_logo = maju_get_dark_logo();
                            if ( $dark_logo ) {
                                echo '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">';
                                echo '<img src="' . esc_url( $dark_logo['url'] ) . '" alt="' . esc_attr( $dark_logo['alt'] ) . '" class="h-8 w-auto">';
                                echo '</a>';
                            } else {
                                echo '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">';
                                echo '<span class="text-2xl font-bold">m.</span>';
                                echo '</a>';
                            }
                            ?>
                        </div>
                        <p class="text-footer-text font-normal font-neue-montreal text-black leading-[30px] tracking-[0.02em]">
                            <?php esc_html_e( 'AI powered creative and digital agency', 'maju' ); ?>
                        </p>
                    </div>
                    
                    <!-- Middle: Navigation Links -->
                    <div class="flex flex-col text-right">
                        <a href="<?php echo esc_url( get_privacy_policy_url() ); ?>" class="text-footer-text font-normal font-neue-montreal text-black leading-[30px] tracking-[0.02em] hover:text-gray-700 transition-colors duration-300 mb-2">
                            <?php esc_html_e( 'Privacy policy', 'maju' ); ?>
                        </a>
                        <a href="#" class="text-footer-text font-normal font-neue-montreal text-black leading-[30px] tracking-[0.02em] hover:text-gray-700 transition-colors duration-300">
                            <?php esc_html_e( 'Terms & conditions', 'maju' ); ?>
                        </a>
                    </div>
                    
                    <!-- Right: Copyright -->
                    <div class="text-right">
                        <p class="text-footer-text font-normal font-neue-montreal text-black leading-[30px] tracking-[0.02em]">
                            <?php echo '©' . date('Y') . ' Maju agency. All right reserved'; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
