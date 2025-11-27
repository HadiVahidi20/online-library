<?php
/**
 * Title: Psychic Specialist Banner Slider
 * Slug: psychic-news/specialist-banner-slider
 * Categories: featured
 * Description: Professional banner slider showcasing psychic specialists with cream/brown color scheme
 */

register_block_pattern(
    'psychic-news/specialist-banner-slider',
    array(
        'title'       => 'Psychic Specialist Banner Slider',
        'categories'  => array( 'featured' ),
        'description' => 'Banner slider for psychic specialists with auto-play and responsive design',
        'content'     => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"60px","bottom":"60px","left":"20px","right":"20px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"black","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-black-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px">

<!-- wp:html -->
<div class="pn-specialist-slider-wrapper">
    
    <!-- Title Section -->
    <div class="pn-specialist-title-section">
        <h2 class="pn-specialist-main-title">Are you looking for a Psychic specialist?</h2>
    </div>
    
    <!-- Slider Container -->
    <div class="pn-specialist-slider-container" id="pn-specialist-banner-slider">
        
        <!-- Slide 1 - Elizabeth Francis -->
        <div class="pn-specialist-slide pn-specialist-slide-active">
            <a href="https://www.elizabethfrancis.co.uk/" target="_blank" rel="noopener noreferrer" class="pn-specialist-banner-link">
                <img src="https://xed9fotu2z.wpdns.site/wp-content/uploads/2025/11/Elizabeth-Francis8.jpg" alt="Elizabeth Francis - Psychic, Medium, Tarot" class="pn-specialist-banner-img" loading="eager" />
            </a>
        </div>
        
        <!-- Slide 2 - Psychic Art Spiritual Visions -->
        <div class="pn-specialist-slide">
            <a href="https://psychicartspiritualvisions.com/" target="_blank" rel="noopener noreferrer" class="pn-specialist-banner-link">
                <img src="https://xed9fotu2z.wpdns.site/wp-content/uploads/2025/11/my-soul-enslaved4.jpg" alt="Psychic Art Spiritual Visions" class="pn-specialist-banner-img" loading="lazy" />
            </a>
        </div>
        
        <!-- Slide 3 - Divine Light -->
        <div class="pn-specialist-slide">
            <a href="http://en.divinelight.org.gr/" target="_blank" rel="noopener noreferrer" class="pn-specialist-banner-link">
                <img src="https://xed9fotu2z.wpdns.site/wp-content/uploads/2025/11/DivineLight-2020.jpg" alt="Divine Light" class="pn-specialist-banner-img" loading="lazy" />
            </a>
        </div>
        
        <!-- Line Indicators (Bottom) -->
        <div class="pn-specialist-lines-horizontal"></div>
        
    </div>
</div>

<style>
/* ===================================================================
   PSYCHIC SPECIALIST BANNER SLIDER
   Cream/Brown Color Scheme - Dark Theme
   =================================================================== */

/* 1. MAIN WRAPPER */
.pn-specialist-slider-wrapper {
    width: 100%;
    max-width: 1400px;
    margin: 0 auto;
    position: relative;
}

/* 2. TITLE SECTION */
.pn-specialist-title-section {
    text-align: center;
    margin-bottom: 50px;
}

.pn-specialist-main-title {
    font-family: "Montserrat", "Arial", sans-serif;
    font-size: 32px;
    font-weight: 600;
    color: #F8E1B8;
    text-transform: capitalize;
    margin: 0;
    padding: 0 20px;
    line-height: 1.4;
    letter-spacing: 0.5px;
}

/* 3. SLIDER CONTAINER */
.pn-specialist-slider-container {
    width: 100%;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 400px;
    overflow: hidden;
}

/* 4. SLIDE STRUCTURE */
.pn-specialist-slide {
    display: none;
    width: 100%;
    align-items: center;
    justify-content: center;
}

.pn-specialist-slide.pn-specialist-slide-active {
    display: flex;
    animation: pnSpecialistFadeIn 0.8s ease-out;
}

@keyframes pnSpecialistFadeIn {
    from { 
        opacity: 0;
        transform: scale(0.98);
    }
    to { 
        opacity: 1;
        transform: scale(1);
    }
}

/* 5. BANNER LINK & IMAGE */
.pn-specialist-banner-link {
    display: block;
    max-width: 100%;
    transition: transform 0.3s ease, opacity 0.3s ease;
    cursor: pointer;
}

.pn-specialist-banner-link:hover {
    transform: scale(1.02);
    opacity: 0.95;
}

.pn-specialist-banner-link:focus {
    outline: 3px solid #F8E1B8;
    outline-offset: 5px;
}

.pn-specialist-banner-img {
    display: block;
    width: auto;
    height: 350px;
    max-width: 100%;
    margin: 0 auto;
    border-radius: 8px;
    box-shadow: 0 8px 30px rgba(248, 225, 184, 0.15);
    transition: box-shadow 0.3s ease;
}

.pn-specialist-banner-link:hover .pn-specialist-banner-img {
    box-shadow: 0 12px 40px rgba(248, 225, 184, 0.25);
}

/* 6. LINE INDICATORS (HORIZONTAL AT BOTTOM) */
.pn-specialist-lines-horizontal {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    flex-direction: row;
    gap: 15px;
    z-index: 10;
}

.pn-specialist-line {
    width: 50px;
    height: 3px;
    background: rgba(248, 225, 184, 0.4);
    cursor: pointer;
    transition: all 0.3s ease;
    border-radius: 2px;
}

.pn-specialist-line:hover {
    background: rgba(248, 225, 184, 0.7);
    width: 55px;
    height: 4px;
}

.pn-specialist-line.pn-specialist-line-active {
    background: #F8E1B8;
    width: 70px;
    height: 4px;
}

.pn-specialist-line:focus {
    outline: 2px solid #F8E1B8;
    outline-offset: 3px;
}

/* 7. RESPONSIVE DESIGN */

/* Tablet (768px - 1024px) */
@media (max-width: 1024px) {
    .pn-specialist-main-title {
        font-size: 28px;
        margin-bottom: 40px;
    }
    
    .pn-specialist-slider-container {
        min-height: 330px;
    }
    
    .pn-specialist-banner-img {
        height: 280px;
        border-radius: 6px;
    }
    
    .pn-specialist-lines-horizontal {
        bottom: 15px;
        gap: 12px;
    }
    
    .pn-specialist-line {
        width: 40px;
        height: 3px;
    }
    
    .pn-specialist-line:hover {
        width: 45px;
    }
    
    .pn-specialist-line.pn-specialist-line-active {
        width: 55px;
    }
}

/* Mobile (< 768px) */
@media (max-width: 768px) {
    .pn-specialist-title-section {
        margin-bottom: 35px;
    }
    
    .pn-specialist-main-title {
        font-size: 22px;
        padding: 0 15px;
        letter-spacing: 0.3px;
    }
    
    .pn-specialist-slider-container {
        min-height: 250px;
        padding: 0 10px;
    }
    
    .pn-specialist-banner-img {
        height: 200px;
        border-radius: 5px;
        box-shadow: 0 6px 20px rgba(248, 225, 184, 0.12);
    }
    
    .pn-specialist-banner-link:hover .pn-specialist-banner-img {
        box-shadow: 0 8px 25px rgba(248, 225, 184, 0.2);
    }
    
    .pn-specialist-lines-horizontal {
        bottom: 10px;
        gap: 10px;
    }
    
    .pn-specialist-line {
        width: 35px;
        height: 3px;
    }
    
    .pn-specialist-line:hover {
        width: 38px;
    }
    
    .pn-specialist-line.pn-specialist-line-active {
        width: 45px;
        height: 3px;
    }
}

/* Small Mobile (< 480px) */
@media (max-width: 480px) {
    .pn-specialist-main-title {
        font-size: 19px;
        line-height: 1.3;
    }
    
    .pn-specialist-slider-container {
        min-height: 220px;
    }
    
    .pn-specialist-banner-img {
        height: 170px;
    }
    
    .pn-specialist-lines-horizontal {
        gap: 8px;
    }
    
    .pn-specialist-line {
        width: 30px;
        height: 2px;
    }
    
    .pn-specialist-line:hover {
        width: 33px;
        height: 3px;
    }
    
    .pn-specialist-line.pn-specialist-line-active {
        width: 40px;
        height: 3px;
    }
}

/* Very Small Screens */
@media (max-width: 360px) {
    .pn-specialist-main-title {
        font-size: 17px;
    }
    
    .pn-specialist-banner-img {
        height: 150px;
    }
}

/* 8. ACCESSIBILITY */
@media (prefers-reduced-motion: reduce) {
    .pn-specialist-slide.pn-specialist-slide-active,
    * {
        animation: none !important;
        transition: none !important;
    }
}

/* Focus states for keyboard navigation */
.pn-specialist-banner-link:focus-visible {
    outline: 3px solid #F8E1B8;
    outline-offset: 5px;
    border-radius: 8px;
}
</style>

<script>
(function() {
    'use strict';
    
    function initPNSpecialistSlider() {
        // Find the slider container
        const container = document.getElementById("pn-specialist-banner-slider");
        
        // Exit if container not found or already initialized
        if (!container) {
            console.warn('Specialist slider container not found');
            return;
        }
        
        if (container.dataset.initialized === "true") {
            console.log('Specialist slider already initialized');
            return;
        }
        
        // Mark as initialized
        container.dataset.initialized = "true";
        console.log('Initializing specialist slider...');
        
        const slides = container.querySelectorAll(".pn-specialist-slide");
        const linesContainer = container.querySelector(".pn-specialist-lines-horizontal");
        
        if (!slides.length) {
            console.error('No slides found!');
            return;
        }
        
        if (!linesContainer) {
            console.error('Lines container not found!');
            return;
        }
        
        let currentIndex = 0;
        let autoplayTimer = null;
        
        // Create line indicators
        slides.forEach((slide, i) => {
            const line = document.createElement("span");
            line.classList.add("pn-specialist-line");
            if (i === 0) line.classList.add("pn-specialist-line-active");
            
            line.addEventListener("click", function() {
                stopAutoplay();
                goToSlide(i);
                startAutoplay();
            });
            
            line.setAttribute("role", "button");
            line.setAttribute("aria-label", "Go to specialist " + (i + 1));
            line.setAttribute("tabindex", "0");
            
            linesContainer.appendChild(line);
        });
        
        const lines = linesContainer.querySelectorAll(".pn-specialist-line");
        console.log('Created ' + lines.length + ' line indicators');
        
        function showSlide(index) {
            // Remove active class from all
            slides.forEach(function(s) {
                s.classList.remove("pn-specialist-slide-active");
            });
            lines.forEach(function(l) {
                l.classList.remove("pn-specialist-line-active");
            });
            
            // Add active class to current
            slides[index].classList.add("pn-specialist-slide-active");
            lines[index].classList.add("pn-specialist-line-active");
            currentIndex = index;
        }
        
        function goToSlide(index) {
            if (index < 0) index = slides.length - 1;
            if (index >= slides.length) index = 0;
            showSlide(index);
        }
        
        function nextSlide() {
            goToSlide(currentIndex + 1);
        }
        
        function prevSlide() {
            goToSlide(currentIndex - 1);
        }
        
        function startAutoplay() {
            stopAutoplay();
            autoplayTimer = setInterval(nextSlide, 5000);
        }
        
        function stopAutoplay() {
            if (autoplayTimer) {
                clearInterval(autoplayTimer);
                autoplayTimer = null;
            }
        }
        
        // Touch swipe support
        let touchStartX = 0;
        let touchEndX = 0;
        
        container.addEventListener("touchstart", function(e) {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });
        
        container.addEventListener("touchend", function(e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, { passive: true });
        
        function handleSwipe() {
            if (touchEndX < touchStartX - 60) {
                // Swipe left - next slide
                stopAutoplay();
                nextSlide();
                startAutoplay();
            }
            if (touchEndX > touchStartX + 60) {
                // Swipe right - previous slide
                stopAutoplay();
                prevSlide();
                startAutoplay();
            }
        }
        
        // Keyboard navigation for line indicators
        lines.forEach(function(line, index) {
            line.addEventListener("keydown", function(e) {
                if (e.key === "Enter" || e.key === " ") {
                    e.preventDefault();
                    stopAutoplay();
                    goToSlide(index);
                    startAutoplay();
                }
            });
        });
        
        // Pause on hover
        container.addEventListener("mouseenter", stopAutoplay);
        container.addEventListener("mouseleave", startAutoplay);
        
        // Pause when tab is hidden
        document.addEventListener("visibilitychange", function() {
            if (document.hidden) {
                stopAutoplay();
            } else {
                startAutoplay();
            }
        });
        
        // Start autoplay
        startAutoplay();
        console.log('Specialist slider initialized successfully!');
    }
    
    // Multiple initialization attempts for compatibility
    
    // Method 1: DOMContentLoaded
    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(initPNSpecialistSlider, 100);
        });
    } else {
        // DOM already loaded
        setTimeout(initPNSpecialistSlider, 100);
    }
    
    // Method 2: WordPress domReady
    if (window.wp && window.wp.domReady) {
        window.wp.domReady(function() {
            setTimeout(initPNSpecialistSlider, 200);
        });
    }
    
    // Method 3: Window load (fallback)
    window.addEventListener("load", function() {
        setTimeout(initPNSpecialistSlider, 300);
    });
    
})();
</script>
<!-- /wp:html -->

</div>
<!-- /wp:group -->
',
    )
);
