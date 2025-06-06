document.addEventListener("DOMContentLoaded", function () {
    // ====== HEADER SCROLL EFFECT ====== 
    const header = document.querySelector('.header');
    const headerLinks = document.querySelectorAll("header a, header .dropdown-toggle, .header a");

    window.addEventListener("scroll", function () {
        // Keep header always transparent, only adjust text visibility if needed
        if (window.scrollY > 100) {
            header.classList.add('scrolled');
            // Keep all text white even when scrolled
            headerLinks.forEach((link) => {
                link.style.color = "#fff";
                link.style.textShadow = "0 2px 4px rgba(0,0,0,0.5)";
            });
        } else {
            header.classList.remove('scrolled');
            headerLinks.forEach((link) => {
                link.style.color = "#fff";
                link.style.textShadow = "0 2px 4px rgba(0,0,0,0.5)";
            });
        }
    });

    // ====== MOBILE NAVIGATION ======
    const mobileMenuToggle = document.querySelector(".mobile-menu-toggle");
    const navigation = document.querySelector(".navigation");

    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener("click", function () {
            this.classList.toggle("active");
            navigation.classList.toggle("active");
        });
    }

    // ====== HERO CAROUSEL CLASS ======
    class HeroCarousel {
        constructor() {
            this.carousel = document.querySelector('.carousel-wrapper');
            this.slides = document.querySelectorAll('.carousel-slide');
            this.prevBtn = document.querySelector('.carousel-prev');
            this.nextBtn = document.querySelector('.carousel-next');
            
            this.currentSlide = 0;
            this.totalSlides = this.slides.length;
            this.autoPlayInterval = 7000; // 7 seconds per slide
            this.autoPlay = null;
            this.isTransitioning = false;
            
            this.init();
        }

        init() {
            if (!this.carousel || this.totalSlides === 0) return;
            
            // Hide indicators
            this.hideIndicators();
            
            // Setup event listeners
            this.setupEventListeners();
            
            // Start automatic sliding
            this.startAutoPlay();
            
            // Show first slide content
            this.showSlideContent(0);
        }

        hideIndicators() {
            const indicatorElements = document.querySelectorAll('.carousel-indicators, .carousel-progress, .indicator, .progress-bar, .progress-container, .carousel-pagination');
            indicatorElements.forEach(element => {
                element.style.display = 'none';
                element.style.visibility = 'hidden';
            });
        }

        setupEventListeners() {
            if (this.prevBtn) {
                this.prevBtn.addEventListener('click', () => {
                    if (!this.isTransitioning) {
                        this.prevSlide();
                        this.resetAutoPlay();
                    }
                });
            }

            if (this.nextBtn) {
                this.nextBtn.addEventListener('click', () => {
                    if (!this.isTransitioning) {
                        this.nextSlide();
                        this.resetAutoPlay();
                    }
                });
            }

            // Pause on hover
            if (this.carousel) {
                this.carousel.addEventListener('mouseenter', () => {
                    this.stopAutoPlay();
                });

                this.carousel.addEventListener('mouseleave', () => {
                    this.startAutoPlay();
                });
            }

            // Keyboard navigation
            document.addEventListener('keydown', (e) => {
                if (!this.isTransitioning) {
                    if (e.key === 'ArrowLeft') {
                        this.prevSlide();
                        this.resetAutoPlay();
                    } else if (e.key === 'ArrowRight') {
                        this.nextSlide();
                        this.resetAutoPlay();
                    }
                }
            });

            // Touch events for mobile
            this.setupTouchEvents();
        }

        setupTouchEvents() {
            let startX = 0;
            let endX = 0;

            if (this.carousel) {
                this.carousel.addEventListener('touchstart', (e) => {
                    startX = e.touches[0].clientX;
                }, { passive: true });

                this.carousel.addEventListener('touchend', (e) => {
                    endX = e.changedTouches[0].clientX;
                    this.handleSwipe(startX, endX);
                }, { passive: true });
            }
        }

        handleSwipe(startX, endX) {
            const threshold = 50;
            const diff = startX - endX;

            if (Math.abs(diff) > threshold && !this.isTransitioning) {
                if (diff > 0) {
                    this.nextSlide();
                } else {
                    this.prevSlide();
                }
                this.resetAutoPlay();
            }
        }

        slideToPosition(slideIndex) {
            if (this.isTransitioning) return;
            
            this.isTransitioning = true;
            
            // Calculate transform percentage
            const translateX = -(slideIndex * 33.333); // Each slide is 33.333% wide
            
            // Apply transform
            this.carousel.style.transform = `translateX(${translateX}%)`;
            
            // Update current slide
            this.currentSlide = slideIndex;
            
            // Hide all slide content
            this.hideAllSlideContent();
            
            // Show current slide content with delay
            setTimeout(() => {
                this.showSlideContent(slideIndex);
            }, 500);
            
            // Reset transition flag
            setTimeout(() => {
                this.isTransitioning = false;
            }, 4000); // Match CSS transition duration
        }

        hideAllSlideContent() {
            this.slides.forEach(slide => {
                const content = slide.querySelector('.carousel-content');
                if (content) {
                    content.style.opacity = '0';
                }
            });
        }

        showSlideContent(index) {
            const slide = this.slides[index];
            if (!slide) return;

            const content = slide.querySelector('.carousel-content');
            if (content) {
                content.style.opacity = '1';
            }

            // GSAP animations if available
            if (typeof gsap !== 'undefined') {
                const title = slide.querySelector('.carousel-title');
                const subtitle = slide.querySelector('.carousel-subtitle');
                const cta = slide.querySelector('.carousel-cta');

                // Animate elements
                gsap.fromTo(title, 
                    { opacity: 0, y: 50 },
                    { opacity: 1, y: 0, duration: 1, delay: 0.3, ease: "power3.out" }
                );
                
                gsap.fromTo(subtitle, 
                    { opacity: 0, y: 30 },
                    { opacity: 1, y: 0, duration: 1, delay: 0.6, ease: "power3.out" }
                );
                
                gsap.fromTo(cta, 
                    { opacity: 0, y: 20 },
                    { opacity: 1, y: 0, duration: 1, delay: 0.9, ease: "power3.out" }
                );
            }
        }

        nextSlide() {
            const nextIndex = (this.currentSlide + 1) % this.totalSlides;
            this.slideToPosition(nextIndex);
        }

        prevSlide() {
            const prevIndex = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
            this.slideToPosition(prevIndex);
        }

        startAutoPlay() {
            this.stopAutoPlay();
            
            this.autoPlay = setInterval(() => {
                this.nextSlide();
            }, this.autoPlayInterval);
        }

        stopAutoPlay() {
            if (this.autoPlay) {
                clearInterval(this.autoPlay);
                this.autoPlay = null;
            }
        }

        resetAutoPlay() {
            this.stopAutoPlay();
            setTimeout(() => {
                this.startAutoPlay();
            }, 1000);
        }
    }

    // Initialize Hero Carousel
    const heroCarousel = new HeroCarousel();

    // ====== GSAP ANIMATIONS ======
    // Register GSAP plugins
    if (typeof gsap !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger, ScrollToPlugin, SplitText);

        // Wait for fonts to load before initializing animations
        document.fonts.ready.then(() => {
            console.log("Fonts loaded, initializing animations");

            // Header animation
            gsap.from(".header", {
                y: -50,
                opacity: 0,
                duration: 1,
                ease: "power3.out",
            });

            // SplitText animations
            const splitElements = document.querySelectorAll(".split");

            splitElements.forEach((element) => {
                let splitTextTrigger = ScrollTrigger.create({
                    trigger: element,
                    start: "top 80%",
                    onEnter: function () {
                        const mySplitText = new SplitText(element, {
                            type: "words,chars",
                            charsClass: "char",
                            wordsClass: "word",
                        });

                        // Store reference for carousel animations
                        element._splitText = mySplitText;

                        gsap.set(mySplitText.chars, {
                            opacity: 0,
                            y: 30,
                        });

                        gsap.to(mySplitText.chars, {
                            opacity: 1,
                            y: 0,
                            scale: 1,
                            duration: 1.2,
                            stagger: 0.05,
                            ease: "back.out(1.5)",
                        });

                        splitTextTrigger.kill();
                    },
                });
            });

            // Section animations
            gsap.utils.toArray(".section-header").forEach((section) => {
                gsap.from(section, {
                    y: 50,
                    opacity: 0,
                    duration: 1,
                    scrollTrigger: {
                        trigger: section,
                        start: "top 80%",
                    },
                });
            });

            // Portfolio animations
            gsap.utils.toArray(".portfolio-card").forEach((card, index) => {
                gsap.from(card, {
                    scale: 0.8,
                    opacity: 0,
                    duration: 0.8,
                    scrollTrigger: {
                        trigger: card,
                        start: "top 85%",
                    },
                });
            });

            // Testimonial animations
            gsap.utils.toArray(".testimonial-card").forEach((card, index) => {
                gsap.from(card, {
                    x: index % 2 === 0 ? -50 : 50,
                    opacity: 0,
                    duration: 0.8,
                    scrollTrigger: {
                        trigger: card,
                        start: "top 85%",
                    },
                });
            });

            // Carousel control animations
            gsap.from(".carousel-controls", {
                x: -50,
                opacity: 0,
                duration: 1,
                delay: 1,
                ease: "power3.out",
            });
        });
    }

    // ====== SMOOTH SCROLL NAVIGATION ======
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();

            const targetId = this.getAttribute("href");
            if (targetId !== "#") {
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    // Đóng mobile menu nếu đang mở
                    if (navigation && navigation.classList.contains("active")) {
                        navigation.classList.remove("active");
                        if (mobileMenuToggle) mobileMenuToggle.classList.remove("active");
                    }

                    // Smooth scroll đến phần tử
                    gsap.to(window, {
                        duration: 1,
                        scrollTo: {
                            y: targetElement,
                            offsetY: 80,
                        },
                        ease: "power3.inOut",
                    });
                }
            }
        });
    });

    // Portfolio filter (nếu có filter)
    const filterButtons = document.querySelectorAll(".portfolio-filter li");
    const portfolioItems = document.querySelectorAll(".portfolio-item");

    if (filterButtons.length > 0) {
        filterButtons.forEach((button) => {
            button.addEventListener("click", function () {
                // Remove active class from all buttons
                filterButtons.forEach((btn) => btn.classList.remove("active"));
                // Add active class to clicked button
                this.classList.add("active");

                const filterValue = this.getAttribute("data-filter");

                portfolioItems.forEach((item) => {
                    if (filterValue === "*") {
                        item.style.display = "block";
                        setTimeout(() => {
                            item.style.transform = "scale(1)";
                            item.style.opacity = "1";
                        }, 100);
                    } else if (item.classList.contains(filterValue.substring(1))) {
                        item.style.display = "block";
                        setTimeout(() => {
                            item.style.transform = "scale(1)";
                            item.style.opacity = "1";
                        }, 100);
                    } else {
                        item.style.transform = "scale(0.8)";
                        item.style.opacity = "0";
                        setTimeout(() => {
                            item.style.display = "none";
                        }, 300);
                    }
                });
            });
        });
    }

    // Form handling
    const contactForm = document.getElementById("contactForm");
    if (contactForm) {
        contactForm.addEventListener("submit", function (e) {
            e.preventDefault();
            // Here you would normally send the form data to your server
            alert("Thank you for your message! We will get back to you soon.");
            contactForm.reset();
        });
    }

    const newsletterForm = document.querySelector(".newsletter-form");
    if (newsletterForm) {
        newsletterForm.addEventListener("submit", function (e) {
            e.preventDefault();
            // Here you would normally send the form data to your server
            alert("Thank you for subscribing to our newsletter!");
            newsletterForm.reset();
        });
    }

    // Console log để xác nhận script đã tải
    console.log("Animation script with Hero Carousel loaded and initialized");
});
