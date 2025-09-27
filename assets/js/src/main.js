/**
 * Maju Theme JavaScript
 * Main JavaScript file for the theme
 */

// Debug logging function
function debugLog(message, data = null) {
    console.log(`[MAJU DEBUG] ${message}`, data || '');
}

// Initialize Alpine.js
window.Alpine = Alpine;
Alpine.start();

// Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', function() {
    debugLog('DOM Content Loaded - Initializing mobile menu');
    
    const menuToggle = document.querySelector('.menu-toggle');
    const navigation = document.querySelector('.main-navigation');
    const body = document.body;
    
    if (debugLog('Elements found:', {
        menuToggle: !!menuToggle,
        navigation: !!navigation,
        body: !!body
    }), menuToggle && navigation) {
        
        debugLog('Adding click event listener to menu toggle');
        menuToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            debugLog('Menu toggle clicked');
            
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            debugLog('Current expanded state:', isExpanded);
            
            this.setAttribute('aria-expanded', !isExpanded);
            navigation.classList.toggle('mobile-menu-open');
            body.classList.toggle('menu-open', !isExpanded);
            
            debugLog('Menu state after toggle:', {
                ariaExpanded: this.getAttribute('aria-expanded'),
                hasClass: navigation.classList.contains('mobile-menu-open'),
                bodyHasClass: body.classList.contains('menu-open')
            });
        });
        
        // Close menu when clicking on navigation links
        const menuLinks = navigation.querySelectorAll('.nav-menu-links a');
        debugLog('Found menu links:', menuLinks.length);
        menuLinks.forEach(link => {
            link.addEventListener('click', function() {
                debugLog('Menu link clicked, closing menu');
                menuToggle.setAttribute('aria-expanded', 'false');
                navigation.classList.remove('mobile-menu-open');
                body.classList.remove('menu-open');
            });
        });
        
        // Close menu with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                debugLog('Escape key pressed, closing menu');
                menuToggle.setAttribute('aria-expanded', 'false');
                navigation.classList.remove('mobile-menu-open');
                body.classList.remove('menu-open');
            }
        });
    } else {
        debugLog('ERROR: Menu elements not found!', {
            menuToggle: menuToggle,
            navigation: navigation
        });
    }
});

// Language Selector
document.addEventListener('DOMContentLoaded', function() {
    debugLog('Initializing language selector');
    
    const langToggle = document.getElementById('lang-toggle');
    const langDropdown = document.getElementById('lang-dropdown');
    const currentLang = document.getElementById('current-lang');
    
    if (debugLog('Language selector elements:', {
        langToggle: !!langToggle,
        langDropdown: !!langDropdown,
        currentLang: !!currentLang
    }), langToggle && langDropdown && currentLang) {
        
        debugLog('Adding language selector event listeners');
        
        // Toggle dropdown
        langToggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            debugLog('Language toggle clicked');
            
            const isVisible = langDropdown.style.display !== 'none';
            debugLog('Current dropdown visibility:', isVisible);
            
            langDropdown.style.display = isVisible ? 'none' : 'block';
            debugLog('Dropdown visibility after toggle:', langDropdown.style.display);
        });
        
        // Language option selection
        const langOptions = document.querySelectorAll('.lang-option');
        debugLog('Found language options:', langOptions.length);
        langOptions.forEach(option => {
            option.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                const selectedLang = this.dataset.lang;
                const langText = this.textContent;
                
                debugLog('Language option clicked:', {
                    selectedLang: selectedLang,
                    langText: langText
                });
                
                // Update current language display
                if (selectedLang === 'en') {
                    currentLang.textContent = 'EN';
                } else if (selectedLang === 'id') {
                    currentLang.textContent = 'ID';
                }
                
                // Hide dropdown
                langDropdown.style.display = 'none';
                
                // Show notification
                alert(`Language changed to ${langText}`);
                debugLog('Language updated to:', currentLang.textContent);
            });
        });
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            if (!langToggle.contains(event.target) && !langDropdown.contains(event.target)) {
                langDropdown.style.display = 'none';
                debugLog('Language dropdown closed (clicked outside)');
            }
        });
    } else {
        debugLog('ERROR: Language selector elements not found!', {
            langToggle: langToggle,
            langDropdown: langDropdown,
            currentLang: currentLang
        });
    }
});

// Header Buttons
document.addEventListener('DOMContentLoaded', function() {
    debugLog('Initializing header buttons');
    
    // Arrow button (scroll to top)
    const arrowBtn = document.querySelector('.arrow-btn');
    if (arrowBtn) {
        debugLog('Arrow button found, adding click listener');
        arrowBtn.addEventListener('click', function() {
            debugLog('Arrow button clicked');
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    // Contact button
    const contactBtn = document.querySelector('.contact-btn');
    if (contactBtn) {
        debugLog('Contact button found, adding click listener');
        contactBtn.addEventListener('click', function() {
            debugLog('Contact button clicked');
            const contactSection = document.querySelector('#contact');
            if (contactSection) {
                contactSection.scrollIntoView({
                    behavior: 'smooth'
                });
            } else {
                alert('Contact section not found. This would typically scroll to a contact form.');
            }
        });
    }
});

// Smooth Scrolling for Anchor Links
document.addEventListener('DOMContentLoaded', function() {
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    debugLog('Found anchor links:', anchorLinks.length);
    
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                e.preventDefault();
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});

// Header Scroll Effect
document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.site-header');
    if (header) {
        let lastScrollTop = 0;
        
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
            
            lastScrollTop = scrollTop;
        }, { passive: true });
    }
});

// Form Handling with AJAX
document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('form[data-ajax="true"]');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            
            // Show loading state
            submitBtn.textContent = 'Sending...';
            submitBtn.disabled = true;
            
            // Simulate AJAX request (replace with actual AJAX call)
            setTimeout(() => {
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
                alert('Message sent successfully!');
                this.reset();
            }, 2000);
        });
    });
});

// Lazy Loading for Images
document.addEventListener('DOMContentLoaded', function() {
    const lazyImages = document.querySelectorAll('img[data-src]');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        lazyImages.forEach(img => imageObserver.observe(img));
    } else {
        // Fallback for browsers that don't support IntersectionObserver
        lazyImages.forEach(img => {
            img.src = img.dataset.src;
            img.classList.remove('lazy');
        });
    }
});

// Accessibility Improvements
document.addEventListener('DOMContentLoaded', function() {
    // Skip link functionality
    const skipLink = document.querySelector('.skip-link');
    if (skipLink) {
        skipLink.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.focus();
                target.scrollIntoView();
            }
        });
    }
    
    // Close modals with Escape key
    document.querySelectorAll('[role="dialog"]').forEach(modal => {
        modal.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                this.style.display = 'none';
            }
        });
    });
});

// Performance Optimizations
document.addEventListener('DOMContentLoaded', function() {
    // Debounce scroll events
    let scrollTimeout;
    window.addEventListener('scroll', function() {
        if (scrollTimeout) {
            clearTimeout(scrollTimeout);
        }
        scrollTimeout = setTimeout(() => {
            // Scroll event handling
        }, 10);
    }, { passive: true });
    
    // Throttle resize events
    let resizeTimeout;
    window.addEventListener('resize', function() {
        if (resizeTimeout) {
            clearTimeout(resizeTimeout);
        }
        resizeTimeout = setTimeout(() => {
            // Resize event handling
        }, 250);
    });
});

// Error Handling
window.addEventListener('error', function(e) {
    console.error('JavaScript error:', e.error);
});

window.addEventListener('unhandledrejection', function(e) {
    console.error('Unhandled promise rejection:', e.reason);
});

// Go to Top Button Functionality
document.addEventListener('DOMContentLoaded', function() {
    debugLog('Initializing go to top button');
    
    const goToTopBtn = document.getElementById('go-to-top');
    
    if (goToTopBtn) {
        debugLog('Go to top button found');
        
        goToTopBtn.addEventListener('click', function(e) {
            e.preventDefault();
            debugLog('Go to top button clicked');
            
            // Smooth scroll to top
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Show/hide button based on scroll position
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                goToTopBtn.style.opacity = '1';
                goToTopBtn.style.visibility = 'visible';
            } else {
                goToTopBtn.style.opacity = '0.7';
                goToTopBtn.style.visibility = 'visible';
            }
        });
    } else {
        debugLog('Go to top button not found');
    }
});

// Theme initialization complete
debugLog('MAJU Theme JavaScript loaded successfully');
