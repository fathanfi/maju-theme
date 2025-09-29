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
    <footer id="footer" class="footer-section bg-lime-green text-black pt-14 pb-4 lg:pt-20 lg:pb-16 relative overflow-hidden">
        <!-- Background Image -->
        <div class="footer-bg-image"></div>
        <div class="container mx-auto px-0 relative z-10">
            <!-- Main Content Area -->
            <div class="mx-auto px-[16px] lg:px-[56px]">
                <!-- Part 1: Main Headline -->
                <div class="mb-16">
                    <h2 class="text-footer-headline-mobile lg:text-footer-headline font-medium font-graphik text-black leading-[54px] lg:leading-[144px] tracking-[-0.04em] max-w-[317px] lg:max-w-full">
                        <?php esc_html_e( 'Let\'s create cool stuff together!', 'maju' ); ?>
                    </h2>
                </div>
                
                <!-- Part 2: Buttons -->
                <div class="flex flex-row items-center gap-0 justify-start mb-40">
                    <!-- Go to Top Button -->
                    <button class="arrow-btn bg-white" aria-label="<?php esc_attr_e( 'Arrow Button', 'maju' ); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gototop.svg' ); ?>" 
                            alt="Go to top" 
                            class="gototop-icon">
                    </button>
                    
                    <button class="get-in-touch-btn" aria-label="<?php esc_attr_e( 'Get In Touch', 'maju' ); ?>">
                        <?php esc_html_e( 'GET IN TOUCH', 'maju' ); ?>
                    </button>
                </div>
                
                <!-- Part 3-6: Footer Content -->
                <div class="grid grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Left: Logo and Description -->
                    <div class="flex flex-col lg:flex-row items-start lg:items-end gap-0 lg:gap-8">
                        <div class="w-[77px] h-[48px] lg:w-[95px] lg:h-[64px] mb-4 lg:mb-0">
                            <?php
                            $dark_logo = maju_get_dark_logo();
                            if ( $dark_logo ) {
                                echo '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">';
                                echo '<img src="' . esc_url( $dark_logo['url'] ) . '" alt="' . esc_attr( $dark_logo['alt'] ) . '" class="w-[77px] h-[48px] lg:w-[95px] lg:h-[64px]">';
                                echo '</a>';
                            } else {
                                echo '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">';
                                echo '<span class="text-2xl font-bold">m.</span>';
                                echo '</a>';
                            }
                            ?>
                        </div>
                        <p class="text-footer-text-mobile lg:text-footer-text font-normal font-neue-montreal text-black leading-[24px] lg:leading-[30px] tracking-[0.02em] max-w-[197px]">
                            <?php esc_html_e( 'AI powered creative and digital agency', 'maju' ); ?>
                        </p>
                    </div>
                    
                    <!-- Middle: Navigation Links -->
                    <div class="flex flex-col justify-end max-w-[276px]">
                        <a href="<?php echo esc_url( get_privacy_policy_url() ); ?>" class="text-footer-text-mobile lg:text-footer-text text-left font-normal font-neue-montreal text-black leading-[24px] lg:leading-[30px] tracking-[0.02em] hover:text-gray-700 transition-colors duration-300 lg:mb-2">
                            <?php esc_html_e( 'Privacy policy', 'maju' ); ?>
                        </a>
                        <a href="#" class="text-footer-text-mobile lg:text-footer-text font-normal font-neue-montreal text-black text-left leading-[24px] lg:leading-[30px] tracking-[0.02em] hover:text-gray-700 transition-colors duration-300">
                            <?php esc_html_e( 'Terms & conditions', 'maju' ); ?>
                        </a>
                    </div>
                    
                    <!-- Right: Copyright (full width on mobile) -->
                    <div class="col-span-2 lg:col-span-1 text-right flex lg:justify-end justify-start items-start lg:items-end">
                        <p class="text-footer-text-mobile lg:text-footer-text font-normal font-neue-montreal text-black leading-[24px] lg:leading-[30px] tracking-[0.02em]">
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
