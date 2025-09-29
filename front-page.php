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
        <div class="container px-[16px] lg:px-[56px]">
            <div class="max-w-full lg:max-w-[1328px] mx-auto">
                <!-- Header -->
                <div class="mb-16 max-w-full lg:max-w-[1052px]">
                    <div class="mb-6">
                        <span class="text-button-label font-medium font-graphik uppercase text-white tracking-[0.02em]">
                            / <?php esc_html_e( 'OUR SERVICES', 'maju' ); ?>
                        </span>
                    </div>
                    <h2 class="text-desktop-h1-mobile lg:text-desktop-h1 font-normal font-graphik text-white leading-[40px] lg:leading-[68px] tracking-[-0.02em] lg:tracking-[-0.04em]">
                        <?php esc_html_e( 'We blend creativity, technology, and strategy to deliver impactful digital solutions tailored to your needs', 'maju' ); ?>
                    </h2>
                </div>
                
                <!-- Services List -->
                <div class="flex flex-col space-y-0">

                    <!-- Service 1 -->
                    <div class="grid grid-cols-[auto_1fr] lg:flex lg:items-center border-t border-gray-600 list-items gap-y-4">

                        <!-- Number -->
                        <div class="list w-auto lg:w-[200px] flex-shrink-0">
                            <span class="text-text-xl-regular font-normal font-neue-montreal text-grayscale-400 leading-[30px] tracking-[0.02em]">
                                (01)
                            </span>
                        </div>
                        <!-- Content -->
                        <div class="list col-span-1 flex flex-col lg:flex-row lg:items-center lg:gap-12 lg:w-auto">
                            <h3 class="text-desktop-h4-mobile lg:text-desktop-h4 font-normal font-graphik leading-[30px] lg:leading-[36px] tracking-[-0.02em] mb-2 lg:mb-0 lg:w-[364px]">
                                <?php esc_html_e( 'UI/UX Design', 'maju' ); ?>
                            </h3>
                            <p class="text-text-lg-regular font-normal font-neue-montreal leading-[26px] tracking-[0.035em] lg:w-[414px]">
                                <?php esc_html_e( 'Design seamless and intuitive digital experiences with user-focused interfaces that enhance interaction, improve usability, and elevate your brand\'s digital presence', 'maju' ); ?>
                            </p>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="grid grid-cols-[auto_1fr] lg:flex lg:items-center border-t border-gray-600 list-items gap-y-4">
                        <!-- Number -->
                        <div class="list w-auto lg:w-[200px] flex-shrink-0">
                            <span class="text-text-xl-regular font-normal font-neue-montreal leading-[30px] tracking-[0.02em]">
                                (02)
                            </span>
                        </div>
                        <!-- Content -->
                        <div class="list col-span-1 flex flex-col lg:flex-row lg:items-center lg:gap-12 lg:w-auto">
                            <h3 class="text-desktop-h4-mobile lg:text-desktop-h4 font-normal font-graphik leading-[30px] lg:leading-[36px] tracking-[-0.02em] mb-2 lg:mb-0 lg:w-[364px]">
                                <?php esc_html_e( 'Brand Identity', 'maju' ); ?>
                            </h3>
                            <p class="text-text-lg-regular font-normal font-neue-montreal leading-[26px] tracking-[0.035em] lg:w-[414px]">
                                <?php esc_html_e( 'Craft a strong brand identity with our expertise in creating visuals and strategic elements that resonate with your audience and boost your market presence.', 'maju' ); ?>
                            </p>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="grid grid-cols-[auto_1fr] lg:flex lg:items-center border-t border-gray-600 list-items gap-y-4">
                        <!-- Number -->
                        <div class="list w-auto lg:w-[200px] flex-shrink-0">
                            <span class="text-text-xl-regular font-normal font-neue-montreal leading-[30px] tracking-[0.02em]">
                                (03)
                            </span>
                        </div>
                        <!-- Content -->
                        <div class="list col-span-1 flex flex-col lg:flex-row lg:items-center lg:gap-12 lg:w-auto">
                            <h3 class="text-desktop-h4-mobile lg:text-desktop-h4 font-normal font-graphik leading-[30px] lg:leading-[36px] tracking-[-0.02em] mb-2 lg:mb-0 lg:w-[364px]">
                                <?php esc_html_e( 'Web Development', 'maju' ); ?>
                            </h3>
                            <p class="text-text-lg-regular font-normal font-neue-montreal leading-[26px] tracking-[0.035em] lg:w-[414px]">
                                <?php esc_html_e( 'Develop fast, responsive, and reliable websites with clean structures and optimized features that support your business objectives and create lasting impressions', 'maju' ); ?>
                            </p>
                        </div>
                    </div>

                    <!-- Service 4 -->
                    <div class="grid grid-cols-[auto_1fr] lg:flex lg:items-center border-t border-gray-600 list-items gap-y-4">
                        <!-- Number -->
                        <div class="list w-auto lg:w-[200px] flex-shrink-0">
                            <span class="text-text-xl-regular font-normal font-neue-montreal leading-[30px] tracking-[0.02em]">
                                (04)
                            </span>
                        </div>
                        <!-- Content -->
                        <div class="list col-span-1 flex flex-col lg:flex-row lg:items-center lg:gap-12 lg:w-auto">
                            <h3 class="text-desktop-h4-mobile lg:text-desktop-h4 font-normal font-graphik leading-[30px] lg:leading-[36px] tracking-[-0.02em] mb-2 lg:mb-0 lg:w-[364px]">
                                <?php esc_html_e( 'Social Media Design', 'maju' ); ?>
                            </h3>
                            <p class="text-text-lg-regular font-normal font-neue-montreal leading-[26px] tracking-[0.035em] lg:w-[414px]">
                                <?php esc_html_e( 'Create eye-catching social media visuals with consistent branding and engaging layouts that boost audience interest, interaction, and online visibility', 'maju' ); ?>
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio-section py-10 lg:py-20 bg-white relative overflow-hidden">
        <!-- Background decoration -->
        <div class="absolute -top-[50px] right-0 lg:w-[666px] lg:h-[177px] pointer-events-none">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bg-portfolio.png' ); ?>" 
                 alt="<?php esc_attr_e( 'Portfolio background decoration', 'maju' ); ?>" 
                 class="w-full h-full object-contain">
        </div>
        
        <div class="container mx-auto px-0">
            <div class="mx-auto py-10 lg:py-20 px-[16px] lg:px-[56px]">
                <div class="grid lg:grid-cols-3 lg:gap-16 items-center">
                    <!-- Left: Text Content -->
                    <div class="portfolio-content col-span-2">
                        <!-- Part 1: Section Label -->
                        <div class="mb-6">
                            <span class="text-portfolio-label font-medium font-graphik uppercase text-grayscale-500 leading-[16px] tracking-[0.02em]">
                                / <?php esc_html_e( 'SELECTED WORK', 'maju' ); ?>
                            </span>
                        </div>
                        
                        <!-- Part 2: Main Headline -->
                        <div class="portfolio-headline">
                            <h2 class="text-portfolio-headline-mobile lg:text-portfolio-headline font-normal font-graphik leading-[40px] lg:leading-[68px] tracking-[-0.02em] lg:tracking-[-0.04em]">
                                <span class="text-grayscale-900"><?php esc_html_e( 'We create amazing things', 'maju' ); ?></span>
                                <span class="text-grayscale-900 lg:text-grayscale-500"><?php esc_html_e( 'with amazing peoples', 'maju' ); ?></span>
                            </h2>
                        </div>
                    </div>
                    
                    <!-- Right: Portfolio Image -->
                    <div class="hidden lg:inline-flex portfolio-image-wrapper col-span-1">
                        <div class="portfolio-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/portfolio.png' ); ?>" 
                                 alt="<?php esc_attr_e( 'Selected Portfolio Work', 'maju' ); ?>" 
                                 class="lg:w-[244px] lg:h-[167px] object-cover shadow-lg">
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
        <div class="portfolio-detail-overlay">
            <div class="container mx-auto px-0">
                <div class="mx-auto px-[16px] lg:px-[56px]">
                    <div class="flex flex-col justify-between h-[820px] lg:h-[880px]">
                        <!-- Left: Text Content -->
                        <div class="portfolio-detail-content flex flex-col-reverse lg:flex-row justify-between">
                            <!-- Part 1: Tag -->
                            <div class="mb-4 mt-0 lg:mt-12">
                                <span class="text-portfolio-detail-tag font-medium font-neue-montreal text-grayscale-50 leading-[26px] tracking-[0.035em] block w-[233px]">
                                    <?php esc_html_e( 'Branding, UI/UX Design & Web Development', 'maju' ); ?>
                                </span>
                            </div>

                            <!-- Counter - Top Right -->
                            <div class="mb-4 mt-8 lg:mt-12">
                                <span class="text-portfolio-detail-counter font-medium font-neue-montreal text-grayscale-50 leading-[26px] tracking-[0.035em] text-right">
                                    <?php esc_html_e( '01 ⎯ 04', 'maju' ); ?>
                                </span>
                            </div>
                            
                        </div>
                        
                        <!-- Right: Images and Button -->
                        <div class="portfolio-detail-images flex flex-col lg:flex-row justify-between">
                            <!-- Part 2: Client Name -->
                            <div class="flex flex-col">
                                <div class="flex flex-row mb-6">
                                    <h3 class="text-portfolio-detail-client font-medium font-neue-montreal text-grayscale-50 leading-[32px] tracking-[0.02em]">
                                        <?php esc_html_e( 'Maju properties', 'maju' ); ?>
                                    </h3>
                                </div>
                                
                                <!-- Part 3: Main Title -->
                                <div class="flex flex-row mb-8">
                                    <h2 class="text-portfolio-detail-title-mobile lg:text-portfolio-detail-title font-normal font-graphik text-white leading-[40px] lg:leading-[68px] tracking-[-0.02em] lg:tracking-[-0.04em] lg:w-[648px]">
                                        <?php esc_html_e( 'Passionate real estate agency on the beautiful island of Lombok', 'maju' ); ?>
                                    </h2>
                                </div>
                            </div>

                            <!-- Small Image -->
                            <div class="portfolio-detail-pop-image hidden lg:inline-flex">
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/portfolio-pop.png' ); ?>" 
                                     alt="<?php esc_attr_e( 'Portfolio Pop Image', 'maju' ); ?>" 
                                     class="lg:w-[388px] lg:h-[268px] object-cover rounded-lg">
                                
                                <!-- Button - Top Left of small image -->
                                <div class="absolute -top-24 -left-36 z-20">
                                    <button class="portfolio-detail-button bg-white w-[114px] h-[114px] text-grayscale-900 p-0 m-0 rounded-full text-portfolio-detail-button font-normal font-neue-montreal uppercase leading-[18px] tracking-[0.035em] hover:bg-grayscale-50 transition-colors duration-300">
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
    <section class="about-section py-10 lg:py-20 bg-grayscale-50">
        <div class="container mx-auto px-0">
            <div class="mx-auto px-[16px] lg:px-[56px]">
                <div class="max-w-[1440px] mx-auto">
                    <!-- Part 1: Section Label -->
                    <div class="mb-6">
                        <span class="text-about-label font-medium font-graphik uppercase text-grayscale-500 leading-[16px] tracking-[0.02em]">
                            / <?php esc_html_e( 'ABOUT MAJU', 'maju' ); ?>
                        </span>
                    </div>
                    
                    <!-- Part 2: Main Title -->
                    <div class="mb-12">
                        <h2 class="text-about-title-mobile lg:text-about-title font-normal font-graphik leading-[40px] lg:leading-[68px] tracking-[-0.02em] lg:tracking-[-0.04em] w-[343px] lg:w-[1052px]">
                            <span class="text-grayscale-900"><?php esc_html_e( 'Based in Bali Indonesia, Maju is a digital creative agency at the forefront of innovation,', 'maju' ); ?></span>
                            <span class="text-grayscale-500"><?php esc_html_e( 'specializing in the design of digital solutions integrating artificial intelligence (AI)', 'maju' ); ?></span>
                        </h2>
                    </div>
                    
                    <!-- Part 3 & 4: Two Column Content -->
                    <div class="grid grid-cols-1 lg:grid-cols-[1fr_2fr] gap-16 mb-12">

                        <!-- Left Column -->
                        <div class="about-left-column">
                            <p class="text-about-text-mobile lg:text-about-text font-normal font-neue-montreal text-grayscale-600 leading-[24px] lg:leading-[32px] tracking-[0.02em] w-[198px] lg:w-[274px]">
                                <?php esc_html_e( 'Creating in Indonesia, delivering globally.', 'maju' ); ?>
                            </p>
                        </div>
                        
                        <!-- Right Column -->
                        <div class="about-right-column">
                            <p class="text-about-text-mobile lg:text-about-text font-normal font-neue-montreal text-grayscale-600 leading-[24px] lg:leading-[32px] tracking-[0.02em] w-[343px] lg:w-[624px]">
                                <?php esc_html_e( 'Innovation is at the heart of everything we do. We are constantly pushing the limits of technology and creativity to offer tailor-made solutions. Whether through design, storytelling or strategy, we place the human at the center of each project.', 'maju' ); ?>
                            </p>

                            <!-- Part 5: Button -->
                            <div class="about-button-wrapper hidden lg:inline-flex mt-16">
                                <!-- Go to Top Button -->
                                <button class="arrow-btn bg-grayscale-900 text-white p-3" aria-label="Arrow Button">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 11L11 1M11 1L3.5 1M11 1L11 8.5" 
                                            stroke="currentColor" 
                                            stroke-width="1.5" 
                                            stroke-linecap="round" 
                                            stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                
                                <button class="read-more-btn" aria-label="<?php esc_attr_e( 'Read More About Us', 'maju' ); ?>">
                                    <?php esc_html_e( 'READ MORE ABOUT US', 'maju' ); ?>
                                </button>
                            </div>
                        </div>
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
        <div class="container mx-auto px-0">
            <div class="mx-auto px-[16px] lg:px-[56px]">
                <div class="max-w-[1440px] mx-auto">
                    <!-- Section Header -->
                    <div class="section-header mb-16">
                        <p class="section-label text-gray-300 text-xs font-medium tracking-wider uppercase mb-4">/ why work with us</p>
                        
                        <!-- Main Title for desktop -->
                        <h2 class="hidden lg:block text-white text-6xl font-normal leading-tight tracking-tight max-w-[1080px]">
                            <span class="text-white">
                                Our work is all about taking bold, imaginative ideas and
                            </span>
                            <span class="text-gray-400">
                                turning them into real, usable results that people can interact with and benefit from
                            </span>
                        </h2>

                        <!-- Main Title for mobile -->
                        <h2 class="block lg:hidden text-white text-3xl font-normal leading-[40px] tracking-tight max-w-[317px]">
                            <span class="text-white">
                                We bring imaginative concepts to
                            </span>
                            <span class="text-gray-400">
                                life through tangible results
                            </span>
                        </h2>
                    </div>

                    <!-- Features Grid -->
                    <div class="features-grid grid grid-cols-1 md:grid-cols-2 gap-8 mb-16 lg:ml-[230px]">
                        <!-- Feature 1 -->
                        <div class="feature-item flex flex-row gap-6">
                            <div class="feature-number text-gray-400 tracking-wide">01</div>
                            <div class="feature-content">
                                <h3 class="feature-title text-white tracking-wide mb-3">AI-driven solutions</h3>
                                <p class="feature-description text-gray-400 tracking-wide">
                                    Harnessing the power of AI to create smarter, data-driven marketing and web strategies
                                </p>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="feature-item flex flex-row gap-6">
                            <div class="feature-number text-gray-400 tracking-wide">02</div>
                            <div class="feature-content">
                                <h3 class="feature-title text-white tracking-wide mb-3">Results-focused approach</h3>
                                <p class="feature-description text-gray-400 tracking-wide">
                                    Optimized for engagement, conversions, and long-term business growth
                                </p>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div class="feature-item flex flex-row gap-6">
                            <div class="feature-number text-gray-400 tracking-wide">03</div>
                            <div class="feature-content">
                                <h3 class="feature-title text-white tracking-wide mb-3">Personalized strategies</h3>
                                <p class="feature-description text-gray-400 tracking-wide">
                                    Tailored digital solutions that align with your brand's unique goals and audience
                                </p>
                            </div>
                        </div>

                        <!-- Feature 4 -->
                        <div class="feature-item flex flex-row gap-6">
                            <div class="feature-number text-gray-400 tracking-wide">04</div>
                            <div class="feature-content">
                                <h3 class="feature-title text-white tracking-wide mb-3">Innovative and Future-ready</h3>
                                <p class="feature-description text-gray-400 tracking-wide">
                                    Staying ahead of trends to keep your brand competitive in the digital landscape
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="action-buttons flex flex-row items-center gap-0 justify-start lg:ml-[280px]">
                        <!-- Go to Top Button -->
                        <button class="arrow-btn" aria-label="<?php esc_attr_e( 'Arrow Button', 'maju' ); ?>">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gototop.svg' ); ?>" 
                                alt="Go to top" 
                                class="gototop-icon">
                        </button>
                        
                        <button class="work-together-btn" aria-label="<?php esc_attr_e( 'Let\'s Work Together', 'maju' ); ?>">
                            <?php esc_html_e( 'LET\'S WORK TOGETHER', 'maju' ); ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stories Section -->
    <section class="stories-section bg-black py-20">
        <div class="container mx-auto px-0">
            <div class="mx-auto px-[16px] lg:px-[56px]">
                <div class="max-w-[1440px] mx-auto">
                    <!-- Section Header -->
                    <div class="section-header mb-16">
                        <p class="section-label text-gray-300 text-xs font-medium tracking-wider uppercase mb-4">/ stories</p>
                        
                        <!-- Main Title -->
                        <h2 class="main-title text-white text-3xl lg:text-6xl font-normal leading-[40px] lg:leading-tight tracking-tight max-w-[317px] lg:max-w-4xl">
                            Thoughts, stories, and lessons from the design trenches
                        </h2>
                    </div>

                    <!-- Stories Grid -->
                    <div class="stories-grid flex lg:flex-row gap-6 justify-start lg:justify-center overflow-x-auto scrollbar-hide">
                        <!-- Column 1 -->
                        <div class="flex-shrink-0 w-[220px] h-[334px] lg:w-[609px] lg:h-[424px] flex flex-col">
                            <div class="overflow-hidden rounded-lg w-full h-[75%] lg:h-full relative">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/post1.png" alt="Story 1" class="w-full h-full object-cover">
                                <!-- Gradient + text only on desktop -->
                                <div class="hidden lg:block absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                                <div class="hidden lg:block absolute bottom-0 left-0 right-0 p-6">
                                    <div class="text-gray-300 text-xs font-medium tracking-wider uppercase mb-3">UI/UX</div>
                                    <h3 class="text-white text-2xl font-normal leading-8 tracking-wide">
                                        Lorem ipsum dolor sit amet is simply dummy text for professional
                                    </h3>
                                </div>
                            </div>
                            <!-- Mobile text (below image) -->
                            <div class="lg:hidden mt-3">
                                <div class="text-gray-300 text-xs font-medium tracking-wider uppercase mb-1">UI/UX</div>
                                <h3 class="text-white text-base font-normal leading-6 tracking-wide">
                                    Lorem ipsum dolor sit amet is simply dummy text for professional
                                </h3>
                            </div>
                        </div>

                        <!-- Column 2 -->
                        <div class="flex-shrink-0 w-[220px] h-[334px] lg:w-[327.5px] lg:h-[424px] flex flex-col">
                            <div class="overflow-hidden rounded-lg w-full h-[75%]">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/post2.png" alt="Story 2" class="w-full h-full object-cover">
                            </div>
                            <div class="mt-3">
                                <div class="text-gray-300 text-xs font-medium tracking-wider uppercase mb-1">UI/UX</div>
                                <h3 class="text-white text-base lg:text-lg font-normal leading-6 lg:leading-7 tracking-wide">
                                    Lorem ipsum dolor sit amet is simply dummy text for professional
                                </h3>
                            </div>
                        </div>

                        <!-- Column 3 -->
                        <div class="flex-shrink-0 w-[220px] h-[334px] lg:w-[327.5px] lg:h-[424px] flex flex-col">
                            <div class="overflow-hidden rounded-lg w-full h-[75%]">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/post3.png" alt="Story 3" class="w-full h-full object-cover">
                            </div>
                            <div class="mt-3">
                                <div class="text-gray-300 text-xs font-medium tracking-wider uppercase mb-1">UI/UX</div>
                                <h3 class="text-white text-base lg:text-lg font-normal leading-6 lg:leading-7 tracking-wide">
                                    Lorem ipsum dolor sit amet is simply dummy text for professional
                                </h3>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
