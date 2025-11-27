<?php
/**
 * Title: Psychic News Magazine Slider - Editorial Layout
 * Slug: psychic-news/magazine-slider-editorial
 * Categories: featured
 * Description: Professional magazine slider following editorial design spec with centered 800px wrapper
 */

register_block_pattern(
    'psychic-news/magazine-slider-editorial',
    array(
        'title'       => 'Psychic News Magazine Slider - Editorial',
        'categories'  => array( 'featured' ),
        'description' => 'Editorial magazine slider with centered layout',
        'content'     => '
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

<!-- wp:html -->
<div class="pn-slider-editorial-wrapper">
    <div class="pn-slider-editorial-container" id="pn-magazine-slider-editorial">
        
        <!-- Slide 1 -->
        <div class="pn-slide-editorial pn-slide-active">
            <div class="pn-slide-content-wrapper">
                
                <!-- Cream Block + Small Cover (LEFT) -->
                <div class="pn-left-section">
                    <div class="pn-cream-block"></div>
                    <div class="pn-small-cover-wrapper">
                        <img src="https://via.placeholder.com/135x191/9d4edd/FFFFFF?text=Issue+4254" alt="Issue 4254" class="pn-small-cover-img" />
                    </div>
                </div>
                
                <!-- Large Image + Typography (RIGHT) -->
                <div class="pn-right-section">
                    <img src="https://via.placeholder.com/360x540/e0aaff/FFFFFF?text=Winter" alt="Winter Scene" class="pn-large-image-img" />
                    
                    <!-- Typography Overlay INSIDE Large Image -->
                    <div class="pn-text-on-image">
                        <div class="pn-magazine-name">PSYCHIC NEWS</div>
                        <h3 class="pn-issue-title">Winter Issue</h3>
                        <div class="pn-year-bg">2025</div>
                        <a href="#" class="pn-view-btn">VIEW ISSUE</a>
                    </div>
                </div>
                
            </div>
        </div>
        
        <!-- Slide 2 -->
        <div class="pn-slide-editorial">
            <div class="pn-slide-content-wrapper">
                
                <!-- Cream Block + Small Cover (LEFT) -->
                <div class="pn-left-section">
                    <div class="pn-cream-block"></div>
                    <div class="pn-small-cover-wrapper">
                        <img src="https://via.placeholder.com/135x191/9d4edd/FFFFFF?text=Issue+4253" alt="Issue 4253" class="pn-small-cover-img" />
                    </div>
                </div>
                
                <!-- Large Image + Typography (RIGHT) -->
                <div class="pn-right-section">
                    <img src="https://via.placeholder.com/360x540/c77dff/FFFFFF?text=Autumn" alt="Autumn Scene" class="pn-large-image-img" />
                    
                    <!-- Typography Overlay INSIDE Large Image -->
                    <div class="pn-text-on-image">
                        <div class="pn-magazine-name">PSYCHIC NEWS</div>
                        <h3 class="pn-issue-title">Autumn Issue</h3>
                        <div class="pn-year-bg">2024</div>
                        <a href="#" class="pn-view-btn">VIEW ISSUE</a>
                    </div>
                </div>
                
            </div>
        </div>
        
        <!-- Slide 3 -->
        <div class="pn-slide-editorial">
            <div class="pn-slide-content-wrapper">
                
                <!-- Cream Block + Small Cover (LEFT) -->
                <div class="pn-left-section">
                    <div class="pn-cream-block"></div>
                    <div class="pn-small-cover-wrapper">
                        <img src="https://via.placeholder.com/135x191/9d4edd/FFFFFF?text=Issue+4252" alt="Issue 4252" class="pn-small-cover-img" />
                    </div>
                </div>
                
                <!-- Large Image + Typography (RIGHT) -->
                <div class="pn-right-section">
                    <img src="https://via.placeholder.com/360x540/e0b1ff/FFFFFF?text=Summer" alt="Summer Scene" class="pn-large-image-img" />
                    
                    <!-- Typography Overlay INSIDE Large Image -->
                    <div class="pn-text-on-image">
                        <div class="pn-magazine-name">PSYCHIC NEWS</div>
                        <h3 class="pn-issue-title">Summer Issue</h3>
                        <div class="pn-year-bg">2024</div>
                        <a href="#" class="pn-view-btn">VIEW ISSUE</a>
                    </div>
                </div>
                
            </div>
        </div>
        
        <!-- Vertical Line Indicators (Right Side) -->
        <div class="pn-lines-vertical-editorial"></div>
        
    </div>
</div>

<style>
/* ===================================================================
   PSYCHIC NEWS MAGAZINE SLIDER - EDITORIAL LAYOUT SPEC
   =================================================================== */

/* 1. SLIDESHOW CONTAINER */
.pn-slider-editorial-wrapper {
    width: 100vw;
    position: relative;
    left: 50%;
    right: 50%;
    margin-left: -50vw;
    margin-right: -50vw;
    overflow: hidden;
}

.pn-slider-editorial-container {
    width: 100%;
    min-height: 645px;
    height: 70vh;
    background: #f5f5f5;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
}

/* Each Slide */
.pn-slide-editorial {
    display: none;
    width: 100%;
    height: 100%;
}

.pn-slide-editorial.pn-slide-active {
    display: flex;
    align-items: center;
    justify-content: center;
    animation: pnFadeIn 0.6s ease-out;
}

@keyframes pnFadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

/* 2. ACTIVE SLIDE WRAPPER - 800px Centered */
.pn-slide-content-wrapper {
    max-width: 800px;
    width: 100%;
    position: relative;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0;
}

/* 3. LEFT SECTION - Cream Block + Small Cover */
.pn-left-section {
    position: relative;
    width: 390px;
    height: 330px;
    flex-shrink: 0;
    z-index: 1;
}

/* Cream Background Block */
.pn-cream-block {
    position: absolute;
    top: 0;
    left: 0;
    width: 390px;
    height: 330px;
    background: #F8E1B8;
    z-index: 1;
}

/* Small Magazine Cover on Top of Cream Block */
.pn-small-cover-wrapper {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -60%);
    z-index: 3;
}

.pn-small-cover-img {
    width: 135px;
    height: 191px;
    display: block;
    box-shadow: 0 18px 40px rgba(0, 0, 0, 0.18);
    border-radius: 0;
    transition: transform 0.3s ease;
}

.pn-small-cover-img:hover {
    transform: translateY(-4px) scale(1.02);
}

/* 4. RIGHT SECTION - Large Image + Typography */
.pn-right-section {
    position: relative;
    width: 360px;
    height: 540px;
    flex-shrink: 0;
    margin-left: 25px; /* Gap between cream block and large image */
    z-index: 2;
}

.pn-large-image-img {
    width: 360px;
    height: 540px;
    display: block;
    object-fit: cover;
    border-radius: 8px;
}

/* 5. TYPOGRAPHY OVERLAY - INSIDE Large Image (Vertically Centered) */
.pn-text-on-image {
    position: absolute;
    left: 40px;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
}

/* Magazine Name (Small Line Above Title) */
.pn-magazine-name {
    font-family: "Inconsolata", "Courier New", monospace;
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.25em;
    color: #000000;
    margin: 0 0 12px 0;
    text-shadow: 0 1px 3px rgba(255,255,255,0.8);
}

/* Issue Title (Main Heading) */
.pn-issue-title {
    font-family: "Montserrat", "Arial", sans-serif;
    font-size: 48px;
    font-weight: 700;
    text-transform: capitalize;
    color: #111111;
    margin: 0 0 8px 0;
    line-height: 1.1;
    letter-spacing: -1px;
    text-shadow: 0 2px 8px rgba(255,255,255,0.9);
    position: relative;
    z-index: 2;
}

/* Large Year - Below Title (Not Overlapping) */
.pn-year-bg {
    font-family: "Montserrat", "Arial", sans-serif;
    font-size: 72px;
    font-weight: 300;
    color: rgba(0, 0, 0, 0.12);
    line-height: 1;
    letter-spacing: -2px;
    margin: 0 0 24px 0;
    position: relative;
    z-index: 1;
}

/* 6. CTA BUTTON - Part of Text Group */
.pn-view-btn {
    display: inline-block;
    margin-top: 0;
    padding: 12px 36px;
    background: rgba(139,111,71,0.92);
    color: #FFFFFF !important;
    text-decoration: none;
    font-family: "Arial", sans-serif;
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1.2px;
    border-radius: 999px;
    border: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 16px rgba(139,111,71,0.35);
}

.pn-view-btn:hover {
    background: rgba(101,67,33,1);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(139,111,71,0.5);
    color: #FFFFFF !important;
}

/* 7. HORIZONTAL LINE INDICATORS - Right Side */
.pn-lines-vertical-editorial {
    position: absolute;
    right: 40px;
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    gap: 16px;
    z-index: 100;
}

.pn-line-vertical-ed {
    width: 50px;
    height: 3px;
    background: rgba(139,111,71,0.35);
    cursor: pointer;
    transition: all 0.3s ease;
    border-radius: 2px;
}

.pn-line-vertical-ed:hover {
    background: rgba(139,111,71,0.6);
    width: 55px;
}

.pn-line-vertical-ed.pn-line-active {
    background: rgba(139,111,71,0.85);
    width: 70px;
    height: 3px;
}

/* ===================================================================
   RESPONSIVE BEHAVIOUR
   =================================================================== */

/* Screens wider than 1905px - Keep sizes fixed, add whitespace */
@media (min-width: 1906px) {
    .pn-slider-editorial-container {
        height: 70vh;
    }
    
    /* All element sizes remain at spec values */
}

/* Tablets - Scale down proportionally */
@media (max-width: 1200px) {
    .pn-slide-content-wrapper {
        max-width: 640px;
        transform: scale(0.8);
    }
}

@media (max-width: 1024px) {
    .pn-slide-content-wrapper {
        max-width: 560px;
        transform: scale(0.7);
    }
    
    .pn-lines-vertical-editorial {
        right: 25px;
    }
}

/* Mobile - Stack vertically */
@media (max-width: 768px) {
    .pn-slider-editorial-container {
        min-height: auto;
        height: auto;
        padding: 40px 20px;
    }
    
    .pn-slide-content-wrapper {
        flex-direction: column;
        gap: 30px;
        transform: none;
        max-width: 100%;
    }
    
    /* Left Section - Cream Block + Cover */
    .pn-left-section {
        width: 100%;
        max-width: 390px;
        height: 330px;
        margin: 0 auto;
    }
    
    .pn-cream-block {
        width: 100%;
        height: 330px;
    }
    
    /* Right Section - Large Image */
    .pn-right-section {
        width: 100%;
        max-width: 360px;
        height: 540px;
        margin: 0 auto;
    }
    
    .pn-large-image-img {
        width: 100%;
        height: 540px;
    }
    
    /* Typography stays centered inside image */
    .pn-text-on-image {
        left: 30px;
        right: 30px;
        top: 50%;
        transform: translateY(-50%);
    }
    
    .pn-issue-title {
        font-size: 40px;
        margin-bottom: 6px;
    }
    
    .pn-year-bg {
        font-size: 60px;
        margin-bottom: 20px;
    }
    
    .pn-view-btn {
        padding: 11px 32px;
        font-size: 12px;
    }
    
    /* Lines stay horizontal at bottom */
    .pn-lines-vertical-editorial {
        position: relative;
        right: auto;
        top: auto;
        transform: none;
        flex-direction: row;
        justify-content: center;
        margin-top: 30px;
        gap: 15px;
    }
    
    .pn-line-vertical-ed {
        width: 50px;
        height: 3px;
    }
    
    .pn-line-vertical-ed:hover {
        width: 55px;
        height: 3px;
    }
    
    .pn-line-vertical-ed.pn-line-active {
        width: 70px;
        height: 4px;
    }
}

@media (max-width: 480px) {
    .pn-slider-editorial-container {
        padding: 30px 15px;
    }
    
    .pn-left-section {
        max-width: 320px;
        height: 270px;
    }
    
    .pn-cream-block {
        height: 270px;
    }
    
    .pn-small-cover-img {
        width: 115px;
        height: 163px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.16);
    }
    
    .pn-right-section {
        max-width: 300px;
        height: 450px;
    }
    
    .pn-large-image-img {
        height: 450px;
        border-radius: 6px;
    }
    
    .pn-text-on-image {
        left: 25px;
        right: 25px;
        top: 50%;
        transform: translateY(-50%);
    }
    
    .pn-magazine-name {
        font-size: 11px;
        letter-spacing: 0.2em;
    }
    
    .pn-issue-title {
        font-size: 32px;
        letter-spacing: -0.5px;
        margin-bottom: 6px;
    }
    
    .pn-year-bg {
        font-size: 50px;
        margin-bottom: 18px;
    }
    
    .pn-view-btn {
        padding: 10px 28px;
        font-size: 11px;
    }
}

@media (max-width: 360px) {
    .pn-issue-title {
        font-size: 28px;
    }
    
    .pn-year-bg {
        font-size: 44px;
        margin-bottom: 16px;
    }
    
    .pn-small-cover-img {
        width: 100px;
        height: 142px;
    }
}

/* Accessibility */
.pn-line-vertical-ed:focus,
.pn-view-btn:focus {
    outline: 3px solid #8B6F47;
    outline-offset: 3px;
}

@media (prefers-reduced-motion: reduce) {
    .pn-slide-editorial.pn-slide-active,
    * {
        animation: none !important;
        transition: none !important;
    }
}
</style>

<script>
(function() {
    function initPNSliderEditorial() {
        const container = document.getElementById("pn-magazine-slider-editorial");
        if (!container || container.dataset.initialized) return;
        
        container.dataset.initialized = "true";
        
        const slides = container.querySelectorAll(".pn-slide-editorial");
        const linesContainer = container.querySelector(".pn-lines-vertical-editorial");
        
        let currentIndex = 0;
        let autoplayTimer;
        
        // Create vertical line indicators
        slides.forEach((_, i) => {
            const line = document.createElement("span");
            line.classList.add("pn-line-vertical-ed");
            if (i === 0) line.classList.add("pn-line-active");
            line.addEventListener("click", () => {
                stopAutoplay();
                goToSlide(i);
                startAutoplay();
            });
            line.setAttribute("role", "button");
            line.setAttribute("aria-label", `Go to slide ${i + 1}`);
            line.setAttribute("tabindex", "0");
            linesContainer.appendChild(line);
        });
        
        const lines = linesContainer.querySelectorAll(".pn-line-vertical-ed");
        
        function showSlide(index) {
            slides.forEach(s => s.classList.remove("pn-slide-active"));
            lines.forEach(l => l.classList.remove("pn-line-active"));
            slides[index].classList.add("pn-slide-active");
            lines[index].classList.add("pn-line-active");
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
            if (autoplayTimer) clearInterval(autoplayTimer);
        }
        
        // Touch swipe
        let touchStart = 0;
        container.addEventListener("touchstart", e => {
            touchStart = e.changedTouches[0].screenX;
        }, { passive: true });
        
        container.addEventListener("touchend", e => {
            const touchEnd = e.changedTouches[0].screenX;
            if (touchEnd < touchStart - 60) {
                stopAutoplay();
                nextSlide();
                startAutoplay();
            }
            if (touchEnd > touchStart + 60) {
                stopAutoplay();
                prevSlide();
                startAutoplay();
            }
        }, { passive: true });
        
        // Keyboard navigation for lines
        lines.forEach((line, index) => {
            line.addEventListener("keydown", e => {
                if (e.key === "Enter" || e.key === " ") {
                    e.preventDefault();
                    stopAutoplay();
                    goToSlide(index);
                    startAutoplay();
                }
            });
        });
        
        // Keyboard arrow navigation
        document.addEventListener("keydown", e => {
            if (e.key === "ArrowLeft") {
                stopAutoplay();
                prevSlide();
                startAutoplay();
            }
            if (e.key === "ArrowRight") {
                stopAutoplay();
                nextSlide();
                startAutoplay();
            }
        });
        
        // Pause/Resume on hover
        container.addEventListener("mouseenter", stopAutoplay);
        container.addEventListener("mouseleave", startAutoplay);
        
        // Visibility change
        document.addEventListener("visibilitychange", () => {
            if (document.hidden) {
                stopAutoplay();
            } else {
                startAutoplay();
            }
        });
        
        // Start autoplay
        startAutoplay();
    }
    
    // Initialize when DOM is ready
    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", initPNSliderEditorial);
    } else {
        initPNSliderEditorial();
    }
    
    // Re-initialize if needed (for dynamic content)
    if (window.wp && window.wp.domReady) {
        window.wp.domReady(initPNSliderEditorial);
    }
})();
</script>
<!-- /wp:html -->

</div>
<!-- /wp:group -->
',
    )
);
