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

    <!-- Portfolio Section -->
    <section class="portfolio-section py-20 bg-white relative overflow-hidden">
        <!-- Background decoration -->
        <div class="absolute -top-[50px] right-0 w-[666px] h-[177px] pointer-events-none">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bg-portfolio.png' ); ?>" 
                 alt="<?php esc_attr_e( 'Portfolio background decoration', 'maju' ); ?>" 
                 class="w-full h-full object-contain">
        </div>
        
        <div class="container mx-auto px-0">
            <div class="mx-auto px-[56px]">
                <div class="grid grid-cols-2 gap-16 items-center">
                    <!-- Left: Text Content -->
                    <div class="portfolio-content">
                        <!-- Part 1: Section Label -->
                        <div class="mb-6">
                            <span class="text-portfolio-label font-medium font-graphik uppercase text-grayscale-500 leading-[16px] tracking-[0.02em]">
                                / <?php esc_html_e( 'SELECTED WORK', 'maju' ); ?>
                            </span>
                        </div>
                        
                        <!-- Part 2: Main Headline -->
                        <div class="portfolio-headline">
                            <h2 class="text-portfolio-headline font-normal font-graphik leading-[68px] tracking-[-0.04em]">
                                <span class="text-grayscale-900"><?php esc_html_e( 'We create amazing things', 'maju' ); ?></span><br>
                                <span class="text-grayscale-500"><?php esc_html_e( 'with amazing peoples', 'maju' ); ?></span>
                            </h2>
                        </div>
                    </div>
                    
                    <!-- Right: Portfolio Image -->
                    <div class="portfolio-image-wrapper">
                        <div class="portfolio-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/portfolio.png' ); ?>" 
                                 alt="<?php esc_attr_e( 'Selected Portfolio Work', 'maju' ); ?>" 
                                 class="w-[244px] h-[167px] object-cover rounded-lg shadow-lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Detail Section -->
    <section class="portfolio-detail-section relative overflow-hidden">
        <!-- Background Image -->
        <div class="portfolio-detail-bg absolute inset-0">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/portfolio-full.png' ); ?>" 
                 alt="<?php esc_attr_e( 'Portfolio Background', 'maju' ); ?>" 
                 class="w-full h-full object-cover">
        </div>
        
        <!-- Content Overlay -->
        <div class="portfolio-detail-overlay relative z-10 min-h-screen flex items-center">
            <div class="container mx-auto px-0">
                <div class="mx-auto px-[56px]">
                    <div class="grid grid-cols-2 gap-16 items-center min-h-screen">
                        <!-- Left: Text Content -->
                        <div class="portfolio-detail-content">
                            <!-- Part 1: Tag -->
                            <div class="mb-4">
                                <span class="text-portfolio-detail-tag font-medium font-neue-montreal text-grayscale-50 leading-[26px] tracking-[0.035em] block w-[233px]">
                                    <?php esc_html_e( 'Branding, UI/UX Design & Web Development', 'maju' ); ?>
                                </span>
                            </div>
                            
                            <!-- Part 2: Client Name -->
                            <div class="mb-6">
                                <h3 class="text-portfolio-detail-client font-medium font-neue-montreal text-grayscale-50 leading-[32px] tracking-[0.02em]">
                                    <?php esc_html_e( 'Maju properties', 'maju' ); ?>
                                </h3>
                            </div>
                            
                            <!-- Part 3: Main Title -->
                            <div class="mb-8">
                                <h2 class="text-portfolio-detail-title font-normal font-graphik text-white leading-[68px] tracking-[-0.04em] w-[648px]">
                                    <?php esc_html_e( 'Passionate real estate agency on the beautiful island of Lombok', 'maju' ); ?>
                                </h2>
                            </div>
                        </div>
                        
                        <!-- Right: Images and Button -->
                        <div class="portfolio-detail-images relative">
                            <!-- Counter - Top Right -->
                            <div class="absolute top-0 right-0 z-20">
                                <span class="text-portfolio-detail-counter font-medium font-neue-montreal text-grayscale-50 leading-[26px] tracking-[0.035em] text-right">
                                    <?php esc_html_e( '01 ⎯ 04', 'maju' ); ?>
                                </span>
                            </div>
                            
                            <!-- Small Image -->
                            <div class="portfolio-detail-pop-image relative">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/portfolio-pop.png' ); ?>" 
                                     alt="<?php esc_attr_e( 'Portfolio Pop Image', 'maju' ); ?>" 
                                     class="w-[388px] h-[268px] object-cover rounded-lg">
                                
                                <!-- Button - Top Left of small image -->
                                <div class="absolute top-4 left-4 z-20">
                                    <button class="portfolio-detail-button bg-white text-grayscale-900 px-6 py-3 rounded-full text-portfolio-detail-button font-normal font-neue-montreal uppercase leading-[18px] tracking-[0.035em] hover:bg-grayscale-50 transition-colors duration-300">
                                        <?php esc_html_e( '[ Read case ]', 'maju' ); ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section py-20 bg-grayscale-50">
        <div class="container mx-auto px-0">
            <div class="mx-auto px-[56px]">
                <div class="max-w-[1440px] mx-auto">
                    <!-- Part 1: Section Label -->
                    <div class="mb-6">
                        <span class="text-about-label font-medium font-graphik uppercase text-grayscale-500 leading-[16px] tracking-[0.02em]">
                            / <?php esc_html_e( 'ABOUT MAJU', 'maju' ); ?>
                        </span>
                    </div>
                    
                    <!-- Part 2: Main Title -->
                    <div class="mb-12">
                        <h2 class="text-about-title font-normal font-graphik leading-[68px] tracking-[-0.04em] w-[1052px]">
                            <span class="text-grayscale-900"><?php esc_html_e( 'Based in Bali Indonesia, Maju is a digital creative agency at the forefront of innovation,', 'maju' ); ?></span>
                            <span class="text-grayscale-500"><?php esc_html_e( 'specializing in the design of digital solutions integrating artificial intelligence (AI)', 'maju' ); ?></span>
                        </h2>
                    </div>
                    
                    <!-- Part 3 & 4: Two Column Content -->
                    <div class="grid grid-cols-2 gap-16 mb-12">
                        <!-- Left Column -->
                        <div class="about-left-column">
                            <p class="text-about-text font-normal font-neue-montreal text-grayscale-600 leading-[32px] tracking-[0.02em]">
                                <?php esc_html_e( 'Creating in Indonesia, delivering globally.', 'maju' ); ?>
                            </p>
                        </div>
                        
                        <!-- Right Column -->
                        <div class="about-right-column">
                            <p class="text-about-text font-normal font-neue-montreal text-grayscale-600 leading-[32px] tracking-[0.02em]">
                                <?php esc_html_e( 'Innovation is at the heart of everything we do. We are constantly pushing the limits of technology and creativity to offer tailor-made solutions. Whether through design, storytelling or strategy, we place the human at the center of each project.', 'maju' ); ?>
                            </p>
                        </div>
                    </div>
                    
                    <!-- Part 5: Button -->
                    <div class="about-button-wrapper">
                        <button class="about-button bg-grayscale-900 text-white px-8 py-4 rounded-full text-about-button font-medium font-graphik uppercase leading-[24px] tracking-[0.02em] hover:bg-grayscale-800 transition-colors duration-300 flex items-center gap-3">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17L17 7M17 7H7M17 7V17"></path>
                            </svg>
                            <?php esc_html_e( 'READ MORE ABOUT US', 'maju' ); ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section class="video-section relative overflow-hidden">
        <div class="video-container">
            <video 
                class="video-player w-full h-[900px] object-cover"
                autoplay 
                muted 
                loop 
                playsinline
                preload="metadata"
                poster="<?php echo esc_url( get_template_directory_uri() . '/assets/images/video-poster.jpg' ); ?>"
            >
                <source src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/video.mp4' ); ?>" type="video/mp4">
                <source src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/video.webm' ); ?>" type="video/webm">
                Your browser does not support the video tag.
            </video>
            
            <!-- Video Overlay for better UX -->
            <div class="video-overlay absolute inset-0 bg-black bg-opacity-20 pointer-events-none"></div>
        </div>
    </section>

    <!-- Work With Us Section -->
    <section class="work-with-us-section bg-black py-20">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="section-header mb-16">
                <p class="section-label text-gray-300 text-xs font-medium tracking-wider uppercase mb-4">/ why work with us</p>
                
                <!-- Main Title -->
                <h2 class="main-title text-white text-6xl font-normal leading-tight tracking-tight max-w-4xl">
                    <span class="text-white">Our work is all about taking bold, imaginative ideas and</span>
                    <span class="text-gray-400"> turning them into real, usable results that people can interact with and benefit from</span>
                </h2>
            </div>

            <!-- Features Grid -->
            <div class="features-grid grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                <!-- Feature 1 -->
                <div class="feature-item flex gap-6">
                    <div class="feature-number text-gray-400 text-xl font-normal leading-8 tracking-wide">01</div>
                    <div class="feature-content">
                        <h3 class="feature-title text-white text-xl font-medium leading-8 tracking-wide mb-3">AI-driven solutions</h3>
                        <p class="feature-description text-gray-400 text-lg font-normal leading-7 tracking-wide">
                            Harnessing the power of AI to create smarter, data-driven marketing and web strategies
                        </p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="feature-item flex gap-6">
                    <div class="feature-number text-gray-400 text-xl font-normal leading-8 tracking-wide">02</div>
                    <div class="feature-content">
                        <h3 class="feature-title text-white text-xl font-medium leading-8 tracking-wide mb-3">Results-focused approach</h3>
                        <p class="feature-description text-gray-400 text-lg font-normal leading-7 tracking-wide">
                            Optimized for engagement, conversions, and long-term business growth
                        </p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="feature-item flex gap-6">
                    <div class="feature-number text-gray-400 text-xl font-normal leading-8 tracking-wide">03</div>
                    <div class="feature-content">
                        <h3 class="feature-title text-white text-xl font-medium leading-8 tracking-wide mb-3">Personalized strategies</h3>
                        <p class="feature-description text-gray-400 text-lg font-normal leading-7 tracking-wide">
                            Tailored digital solutions that align with your brand's unique goals and audience
                        </p>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="feature-item flex gap-6">
                    <div class="feature-number text-gray-400 text-xl font-normal leading-8 tracking-wide">04</div>
                    <div class="feature-content">
                        <h3 class="feature-title text-white text-xl font-medium leading-8 tracking-wide mb-3">Innovative and Future-ready</h3>
                        <p class="feature-description text-gray-400 text-lg font-normal leading-7 tracking-wide">
                            Staying ahead of trends to keep your brand competitive in the digital landscape
                        </p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="action-buttons flex items-center gap-4 justify-center">
                <!-- Go to Top Button -->
                <button id="goToTopBtn" class="go-to-top-btn bg-lime-green text-black px-4 py-3 rounded-lg hover:bg-lime-green-600 transition-colors duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 14l3-3 3 3m0 0l3-3 3 3M7 14l-3-3 3-3m0 0l3 3-3 3"></path>
                    </svg>
                </button>

                <!-- Work Together Button -->
                <button class="work-together-btn bg-lime-green text-black px-8 py-4 rounded-lg font-medium text-base tracking-wide uppercase hover:bg-lime-green-600 transition-colors duration-300">
                    let's work together
                </button>
            </div>
        </div>
    </section>

    <!-- Stories Section -->
    <section class="stories-section bg-black py-20">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="section-header mb-16">
                <p class="section-label text-gray-300 text-xs font-medium tracking-wider uppercase mb-4">/ stories</p>
                
                <!-- Main Title -->
                <h2 class="main-title text-white text-6xl font-normal leading-tight tracking-tight max-w-4xl">
                    Thoughts, stories, and lessons from the design trenches
                </h2>
            </div>

            <!-- Stories Grid -->
            <div class="stories-grid grid grid-cols-1 lg:grid-cols-3 gap-2.5">
                <!-- Large Story Card (First) -->
                <div class="story-card story-card-large relative overflow-hidden rounded-lg">
                    <div class="story-image">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/post1.png' ); ?>" 
                             alt="Story 1" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="story-overlay absolute inset-0 bg-gradient-to-t from-black64 via-transparent to-transparent"></div>
                    <div class="story-content absolute bottom-0 left-0 right-0 p-11">
                        <div class="story-category text-gray-300 text-xs font-medium tracking-wider uppercase mb-3">UI/UX</div>
                        <h3 class="story-title text-white text-2xl font-normal leading-8 tracking-wide">
                            Lorem ipsum dolor sit amet is simply dummy text for professional
                        </h3>
                    </div>
                </div>

                <!-- Medium Story Card (Second) -->
                <div class="story-card story-card-medium relative overflow-hidden rounded-lg">
                    <div class="story-image">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/post2.png' ); ?>" 
                             alt="Story 2" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="story-overlay absolute inset-0 bg-gradient-to-t from-black64 via-transparent to-transparent"></div>
                    <div class="story-content absolute bottom-0 left-0 right-0 p-11">
                        <div class="story-category text-gray-300 text-xs font-medium tracking-wider uppercase mb-3">UI/UX</div>
                        <h3 class="story-title text-white text-2xl font-normal leading-8 tracking-wide">
                            Lorem ipsum dolor sit amet is simply dummy text for professional
                        </h3>
                    </div>
                </div>

                <!-- Medium Story Card (Third) -->
                <div class="story-card story-card-medium relative overflow-hidden rounded-lg">
                    <div class="story-image">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/post3.png' ); ?>" 
                             alt="Story 3" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="story-overlay absolute inset-0 bg-gradient-to-t from-black64 via-transparent to-transparent"></div>
                    <div class="story-content absolute bottom-0 left-0 right-0 p-11">
                        <div class="story-category text-gray-300 text-xs font-medium tracking-wider uppercase mb-3">UI/UX</div>
                        <h3 class="story-title text-white text-2xl font-normal leading-8 tracking-wide">
                            Lorem ipsum dolor sit amet is simply dummy text for professional
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
