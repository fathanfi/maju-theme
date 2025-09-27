<?php
/**
 * The front page template file
 *
 * This is the template that displays the homepage.
 *
 * @package Maju
 * @since 1.0.0
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header(); ?>

<main id="main" class="site-main" role="main">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-background">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-bg.png' ); ?>" 
                 alt="<?php esc_attr_e( 'Neon-lit urban background', 'maju' ); ?>" 
                 class="hero-background-image">
        </div>
        <!-- Blurred overlay that merges with services section -->
        <div class="hero-blurred-overlay"></div>
        
        <div class="hero-content">
            <div class="hero-title">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-text.png' ); ?>" 
                     alt="<?php esc_attr_e( 'MAJU Logo', 'maju' ); ?>" 
                     class="hero-logo-image">
            </div>
            <p class="hero-subtitle">
                <?php esc_html_e( 'AI powered creative and digital agency', 'maju' ); ?>
            </p>
        </div>
    </section>

    
    <!-- Services Section -->
    <section class="services-section py-20 bg-grayscale-900 relative">
        <!-- Gradient transition to hero section -->
        <div class="services-gradient-transition"></div>
        <div class="container px-[56px]">
            <div class="max-w-[1328px] mx-auto">
                <!-- Header -->
                <div class="mb-16 max-w-[1052px]">
                    <div class="mb-6">
                        <span class="text-button-label font-medium font-graphik uppercase text-white tracking-[0.02em]">
                            / <?php esc_html_e( 'OUR SERVICES', 'maju' ); ?>
                        </span>
                    </div>
                    <h2 class="text-desktop-h1 font-normal font-graphik text-white leading-[68px] tracking-[-0.04em]">
                        <?php esc_html_e( 'We blend creativity, technology, and strategy to deliver impactful digital solutions tailored to your needs', 'maju' ); ?>
                    </h2>
                </div>
                
                <!-- Services List -->
                <div class="space-y-0">
                    <!-- Service 1 -->
                    <div class="flex items-center border-t border-gray-600 list-items">
                        <div class="list w-[200px] flex-shrink-0">
                            <span class="text-text-xl-regular font-normal font-neue-montreal text-grayscale-400 leading-[30px] tracking-[0.02em]">
                                (01)
                            </span>
                        </div>
                        <div class="list w-[364px] flex-shrink-0 mr-12">
                            <h3 class="text-desktop-h4 font-normal font-graphik leading-[36px] tracking-[-0.02em]">
                                <?php esc_html_e( 'UI/UX Design', 'maju' ); ?>
                            </h3>
                        </div>
                        <div class="list w-[414px] flex-1">
                            <p class="text-text-lg-regular font-normal font-neue-montreal leading-[26px] tracking-[0.035em]">
                                <?php esc_html_e( 'Design seamless and intuitive digital experiences with user-focused interfaces that enhance interaction, improve usability, and elevate your brand\'s digital presence', 'maju' ); ?>
                            </p>
                        </div>
                    </div>
                    
                    <!-- Service 2 -->
                    <div class="flex items-center border-t border-gray-600 list-items">
                        <div class="list w-[200px] flex-shrink-0">
                            <span class="text-text-xl-regular font-normal font-neue-montreal leading-[30px] tracking-[0.02em]">
                                (02)
                            </span>
                        </div>
                        <div class="list w-[364px] flex-shrink-0 mr-12">
                            <h3 class="text-desktop-h4 font-normal font-graphik leading-[36px] tracking-[-0.02em]">
                                <?php esc_html_e( 'Brand Identity', 'maju' ); ?>
                            </h3>
                        </div>
                        <div class="list w-[414px] flex-1">
                            <p class="text-text-lg-regular font-normal font-neue-montreal leading-[26px] tracking-[0.035em]">
                                <?php esc_html_e( 'Craft a strong brand identity with our expertise in creating visuals and strategic elements that resonate with your audience and boost your market presence.', 'maju' ); ?>
                            </p>
                        </div>
                    </div>
                    
                    <!-- Service 3 -->
                    <div class="flex items-center border-t border-gray-600 list-items">
                        <div class="list w-[200px] flex-shrink-0">
                            <span class="text-text-xl-regular font-normal font-neue-montreal leading-[30px] tracking-[0.02em]">
                                (03)
                            </span>
                        </div>
                        <div class="list w-[364px] flex-shrink-0 mr-12">
                            <h3 class="text-desktop-h4 font-normal font-graphik leading-[36px] tracking-[-0.02em]">
                                <?php esc_html_e( 'Web Development', 'maju' ); ?>
                            </h3>
                        </div>
                        <div class="list w-[414px] flex-1">
                            <p class="text-text-lg-regular font-normal font-neue-montreal leading-[26px] tracking-[0.035em]">
                                <?php esc_html_e( 'Develop fast, responsive, and reliable websites with clean structures and optimized features that support your business objectives and create lasting impressions', 'maju' ); ?>
                            </p>
                        </div>
                    </div>
                    
                    <!-- Service 4 -->
                    <div class="flex items-center border-t border-gray-600 list-items">
                        <div class="list w-[200px] flex-shrink-0">
                            <span class="text-text-xl-regular font-normal font-neue-montreal leading-[30px] tracking-[0.02em]">
                                (04)
                            </span>
                        </div>
                        <div class="list w-[364px] flex-shrink-0 mr-12">
                            <h3 class="text-desktop-h4 font-normal font-graphik leading-[36px] tracking-[-0.02em]">
                                <?php esc_html_e( 'Social Media Design', 'maju' ); ?>
                            </h3>
                        </div>
                        <div class="list w-[414px] flex-1">
                            <p class="text-text-lg-regular font-normal font-neue-montreal leading-[26px] tracking-[0.035em]">
                                <?php esc_html_e( 'Create eye-catching social media visuals with consistent branding and engaging layouts that boost audience interest, interaction, and online visibility', 'maju' ); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
