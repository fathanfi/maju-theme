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
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-bg.jpg' ); ?>" 
                 alt="<?php esc_attr_e( 'Neon-lit urban background', 'maju' ); ?>" 
                 class="hero-background-image">
        </div>
        <div class="hero-overlay"></div>
        
        <div class="hero-content">
            <h1 class="hero-title">
                <span class="text-gradient">MAJU</span>
            </h1>
            <p class="hero-subtitle">
                <?php esc_html_e( 'AI powered creative and digital agency', 'maju' ); ?>
            </p>
            
            <div class="hero-actions">
                <button class="btn btn-primary btn-lg" aria-label="<?php esc_attr_e( 'Get Started', 'maju' ); ?>">
                    <?php esc_html_e( 'Get Started', 'maju' ); ?>
                </button>
                <button class="btn btn-outline btn-lg" aria-label="<?php esc_attr_e( 'Learn More', 'maju' ); ?>">
                    <?php esc_html_e( 'Learn More', 'maju' ); ?>
                </button>
            </div>
        </div>
        
        <!-- Scroll indicator -->
        <div class="scroll-indicator">
            <div class="scroll-arrow" aria-hidden="true">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 14L12 9L17 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-bold text-dark-900 mb-8">
                    <?php esc_html_e( 'About Maju', 'maju' ); ?>
                </h2>
                <p class="text-xl text-dark-600 mb-12 leading-relaxed">
                    <?php esc_html_e( 'We are a cutting-edge creative and digital agency powered by artificial intelligence. Our mission is to transform ideas into extraordinary digital experiences that captivate, engage, and inspire.', 'maju' ); ?>
                </p>
                
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.75 17L9 20L12 19L15 20L14.25 17M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-dark-900 mb-4">
                            <?php esc_html_e( 'AI-Powered', 'maju' ); ?>
                        </h3>
                        <p class="text-dark-600">
                            <?php esc_html_e( 'Leveraging cutting-edge AI technology to deliver innovative solutions and exceptional results.', 'maju' ); ?>
                        </p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 2L3 14H12L11 22L21 10H12L13 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-dark-900 mb-4">
                            <?php esc_html_e( 'Creative Excellence', 'maju' ); ?>
                        </h3>
                        <p class="text-dark-600">
                            <?php esc_html_e( 'Combining artistic vision with technical expertise to create stunning digital experiences.', 'maju' ); ?>
                        </p>
                    </div>
                    
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-dark-900 mb-4">
                            <?php esc_html_e( 'Digital Innovation', 'maju' ); ?>
                        </h3>
                        <p class="text-dark-600">
                            <?php esc_html_e( 'Pushing the boundaries of digital technology to create tomorrow\'s solutions today.', 'maju' ); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section py-20 bg-dark-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-dark-900 mb-8">
                    <?php esc_html_e( 'Our Services', 'maju' ); ?>
                </h2>
                <p class="text-xl text-dark-600">
                    <?php esc_html_e( 'Comprehensive digital solutions tailored to your unique needs and goals.', 'maju' ); ?>
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="service-card">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-dark-900 mb-4">
                        <?php esc_html_e( 'Web Development', 'maju' ); ?>
                    </h3>
                    <p class="text-dark-600 mb-6">
                        <?php esc_html_e( 'Custom websites and web applications built with modern technologies and best practices.', 'maju' ); ?>
                    </p>
                    <a href="#" class="text-neon-green hover:text-neon-green/80 font-medium">
                        <?php esc_html_e( 'Learn More', 'maju' ); ?> →
                    </a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.75 17L9 20L12 19L15 20L14.25 17M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-dark-900 mb-4">
                        <?php esc_html_e( 'AI Solutions', 'maju' ); ?>
                    </h3>
                    <p class="text-dark-600 mb-6">
                        <?php esc_html_e( 'Intelligent automation and AI-powered tools to streamline your business processes.', 'maju' ); ?>
                    </p>
                    <a href="#" class="text-neon-green hover:text-neon-green/80 font-medium">
                        <?php esc_html_e( 'Learn More', 'maju' ); ?> →
                    </a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 2L3 14H12L11 22L21 10H12L13 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-dark-900 mb-4">
                        <?php esc_html_e( 'Brand Design', 'maju' ); ?>
                    </h3>
                    <p class="text-dark-600 mb-6">
                        <?php esc_html_e( 'Creative branding and visual identity design that makes your brand stand out.', 'maju' ); ?>
                    </p>
                    <a href="#" class="text-neon-green hover:text-neon-green/80 font-medium">
                        <?php esc_html_e( 'Learn More', 'maju' ); ?> →
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section py-20 bg-gradient-neon">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-8">
                    <?php esc_html_e( 'Ready to Transform Your Digital Presence?', 'maju' ); ?>
                </h2>
                <p class="text-xl text-white/90 mb-12">
                    <?php esc_html_e( 'Let\'s work together to create something extraordinary. Get in touch with our team today.', 'maju' ); ?>
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="btn btn-primary btn-lg bg-white text-dark-900 hover:bg-white/90">
                        <?php esc_html_e( 'Start Your Project', 'maju' ); ?>
                    </button>
                    <button class="btn btn-outline btn-lg border-white text-white hover:bg-white hover:text-dark-900">
                        <?php esc_html_e( 'Schedule a Call', 'maju' ); ?>
                    </button>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
