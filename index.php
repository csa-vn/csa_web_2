<?php
// Configuration and utilities
$site_title = "CSAVietnamCo.";
$nav_items = [
    'About' => '#about',
    'Portfolio' => '#portfolio',
    'Clients' => '#clients',
    'Blog' => '#blog',
    'HR' => '#hr'
];

// Start the page
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo $site_title; ?> - Creative Solutions Agency</title>
        <meta name="description" content="CSAVietnamCo. is a leading creative agency providing innovative design, marketing, and digital solutions for brands looking to elevate their presence.">
        
        <!-- Add favicon -->
        <link rel="icon" href="/assets/images/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon">
        
        <!-- CSS files -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
            crossorigin="anonymous"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
        
        <!-- Custom Fonts -->
        <link rel="stylesheet" href="assets/fonts/fonts.css" />
        <link rel="stylesheet" href="assets/fonts/font-utilities.css" />
        
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body>
        <!-- Header transparent -->
        <header class="header">
            <div class="logo">
                <a href="#home"><?php echo $site_title; ?></a>
            </div>
            <nav class="navigation">
                <ul>
                    <?php foreach($nav_items as $name => $url): ?>
                        <?php if($name == 'HR'): ?>
                            <li class="dropdown">
                                <a href="<?php echo $url; ?>"><?php echo $name; ?> <span class="dropdown-arrow">▼</span></a>
                            </li>
                        <?php else: ?>
                            <li><a href="<?php echo $url; ?>"><?php echo $name; ?></a></li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </nav>
            <div class="mobile-menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </header>

        <!-- Hero Carousel Section -->
        <section class="hero-carousel" id="home">
            <div class="carousel-container">
                <div class="carousel-wrapper">
                    <!-- Slide 1 -->
                    <div class="carousel-slide">
                        <div class="carousel-bg" style="background-image: url('assets/images/pexels-fauxels-3183183.jpg');"></div>
                        <div class="carousel-overlay"></div>
                        <div class="container">
                            <div class="row align-items-center h-100">
                                <div class="col-lg-8 col-md-10">
                                    <div class="carousel-content">
                                        <h1 class="carousel-title text-light">Elevate Your Brand with Creative Solutions</h1>
                                        <p class="carousel-subtitle text-light">We craft digital experiences that drive growth and transform businesses through strategic design and innovation.</p>
                                        <div class="carousel-cta">
                                            <a href="#contact" class="btn btn-primary">Start Your Project</a>
                                            <a href="#portfolio" class="btn btn-outline">View Our Work</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-slide">
                        <div class="carousel-bg" style="background-image: url('assets/images/pexels-fauxels-3184423.jpg');"></div>
                        <div class="carousel-overlay"></div>
                        <div class="container">
                            <div class="row align-items-center h-100">
                                <div class="col-lg-8 col-md-10">
                                    <div class="carousel-content">
                                        <h1 class="carousel-title text-light">Transform Ideas Into Digital Reality</h1>
                                        <p class="carousel-subtitle text-light">From concept to execution, we deliver innovative digital solutions that exceed expectations and drive measurable results.</p>
                                        <div class="carousel-cta">
                                            <a href="#services" class="btn btn-primary">Our Services</a>
                                            <a href="#about" class="btn btn-outline">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-slide">
                        <div class="carousel-bg" style="background-image: url('assets/images/pexels-pixabay-45853.jpg');"></div>
                        <div class="carousel-overlay"></div>
                        <div class="container">
                            <div class="row align-items-center h-100">
                                <div class="col-lg-8 col-md-10">
                                    <div class="carousel-content">
                                        <h1 class="carousel-title text-light">Your Success Is Our Mission</h1>
                                        <p class="carousel-subtitle text-light">Partner with us to unlock your brand's potential and achieve extraordinary growth in the digital landscape.</p>
                                        <div class="carousel-cta">
                                            <a href="#portfolio" class="btn btn-primary">See Results</a>
                                            <a href="#clients" class="btn btn-outline">Our Clients</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <div class="carousel-controls">
                    <button class="carousel-btn carousel-prev" aria-label="Previous slide">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="carousel-btn carousel-next" aria-label="Next slide">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </section>

        <!-- About section -->
        <section id="about" class="section-padding pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-header">
                            <span class="section-subtitle">About Us</span>
                            <h2 class="section-title split">We Turn Creative Ideas Into Remarkable Results</h2>
                        </div>
                        <div class="about-content">
                            <p class="split">Founded in 2018, CSAVietnamCo. has grown from a small design studio to a full-service creative agency. We believe in the power of strategic thinking combined with exceptional execution to deliver results that exceed expectations.</p>
                            <p class="split">Our team of specialists work closely with clients to understand their unique challenges and create tailored solutions that drive real business growth.</p>
                            
                            <div class="company-stats">
                                <div class="stat-item">
                                    <span class="stat-number">100+</span>
                                    <span class="stat-text">Projects Completed</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-number">45+</span>
                                    <span class="stat-text">Happy Clients</span>
                                </div>
                                <div class="stat-item">
                                    <span class="stat-number">7+</span>
                                    <span class="stat-text">Years Experience</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-image">
                            <img src="assets/images/pexels-fauxels-3183183.jpg" alt="Our team at work" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Portfolio section -->
        <section id="portfolio" class="section-padding pb-5">
            <div class="container">
                <div class="section-header text-center">
                    <span class="section-subtitle font-inter font-medium">Our Work</span>
                    <h2 class="section-title split font-poppins font-semibold">Featured Projects</h2>
                    <p class="section-desc font-opensans font-normal">Browse our recent work to see how we've helped businesses achieve their goals</p>
                </div>
                
                <div class="portfolio-filter">
                    <ul>
                        <li data-filter="*" class="active font-sourcesans font-medium">All</li>
                        <li data-filter=".branding" class="font-sourcesans font-medium">Branding</li>
                        <li data-filter=".web" class="font-sourcesans font-medium">Web Design</li>
                        <li data-filter=".marketing" class="font-sourcesans font-medium">Marketing</li>
                        <li data-filter=".ux" class="font-sourcesans font-medium">UX/UI</li>
                    </ul>
                </div>
                
                <div class="row portfolio-grid">
                    <!-- Portfolio Item 1 -->
                    <div class="col-lg-4 col-md-6 portfolio-item branding">
                        <div class="portfolio-card">
                            <div class="portfolio-image">
                                <img src="/assets/images/portfolio-1.jpg" alt="Project Title" class="img-fluid">
                                <div class="portfolio-overlay">
                                    <a href="#" class="portfolio-link"><i class="fas fa-link"></i></a>
                                    <a href="/assets/images/portfolio-1.jpg" class="portfolio-zoom"><i class="fas fa-search"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-content">
                                <h3>Brand Refresh for Tech Startup</h3>
                                <p>Branding, Visual Identity</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Portfolio Item 2 -->
                    <div class="col-lg-4 col-md-6 portfolio-item web">
                        <div class="portfolio-card">
                            <div class="portfolio-image">
                                <img src="/assets/images/portfolio-2.jpg" alt="Project Title" class="img-fluid">
                                <div class="portfolio-overlay">
                                    <a href="#" class="portfolio-link"><i class="fas fa-link"></i></a>
                                    <a href="/assets/images/portfolio-2.jpg" class="portfolio-zoom"><i class="fas fa-search"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-content">
                                <h3>E-commerce Website Redesign</h3>
                                <p>Web Design, Development</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Portfolio Item 3 -->
                    <div class="col-lg-4 col-md-6 portfolio-item marketing">
                        <div class="portfolio-card">
                            <div class="portfolio-image">
                                <img src="/assets/images/portfolio-3.jpg" alt="Project Title" class="img-fluid">
                                <div class="portfolio-overlay">
                                    <a href="#" class="portfolio-link"><i class="fas fa-link"></i></a>
                                    <a href="/assets/images/portfolio-3.jpg" class="portfolio-zoom"><i class="fas fa-search"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-content">
                                <h3>Social Media Campaign</h3>
                                <p>Digital Marketing, Content Creation</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Portfolio Item 4 -->
                    <div class="col-lg-4 col-md-6 portfolio-item ux">
                        <div class="portfolio-card">
                            <div class="portfolio-image">
                                <img src="/assets/images/portfolio-4.jpg" alt="Project Title" class="img-fluid">
                                <div class="portfolio-overlay">
                                    <a href="#" class="portfolio-link"><i class="fas fa-link"></i></a>
                                    <a href="/assets/images/portfolio-4.jpg" class="portfolio-zoom"><i class="fas fa-search"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-content">
                                <h3>Mobile App Design</h3>
                                <p>UX/UI Design, Prototyping</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Portfolio Item 5 -->
                    <div class="col-lg-4 col-md-6 portfolio-item branding">
                        <div class="portfolio-card">
                            <div class="portfolio-image">
                                <img src="/assets/images/portfolio-5.jpg" alt="Project Title" class="img-fluid">
                                <div class="portfolio-overlay">
                                    <a href="#" class="portfolio-link"><i class="fas fa-link"></i></a>
                                    <a href="/assets/images/portfolio-5.jpg" class="portfolio-zoom"><i class="fas fa-search"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-content">
                                <h3>Product Packaging Design</h3>
                                <p>Branding, Packaging</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Portfolio Item 6 -->
                    <div class="col-lg-4 col-md-6 portfolio-item web marketing">
                        <div class="portfolio-card">
                            <div class="portfolio-image">
                                <img src="/assets/images/portfolio-6.jpg" alt="Project Title" class="img-fluid">
                                <div class="portfolio-overlay">
                                    <a href="#" class="portfolio-link"><i class="fas fa-link"></i></a>
                                    <a href="/assets/images/portfolio-6.jpg" class="portfolio-zoom"><i class="fas fa-search"></i></a>
                                </div>
                            </div>
                            <div class="portfolio-content">
                                <h3>SEO Campaign for Restaurant</h3>
                                <p>SEO, Content Strategy</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-5">
                    <a href="#" class="btn btn-outline-primary">View All Projects</a>
                </div>
            </div>
        </section>
        
        <!-- Clients & Testimonials section -->
        <section id="clients" class="section-padding bg-light pb-5">
            <div class="container">
                <div class="section-header text-center">
                    <span class="section-subtitle">Our Clients</span>
                    <h2 class="section-title split">Trusted by Brands</h2>
                </div>
                
                <div class="clients-logo">
                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="client-item">
                                <img src="/assets/images/client-1.png" alt="Client Logo" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="client-item">
                                <img src="/assets/images/client-2.png" alt="Client Logo" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="client-item">
                                <img src="/assets/images/client-3.png" alt="Client Logo" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="client-item">
                                <img src="/assets/images/client-4.png" alt="Client Logo" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="client-item">
                                <img src="/assets/images/client-5.png" alt="Client Logo" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="client-item">
                                <img src="/assets/images/client-6.png" alt="Client Logo" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="testimonials-section">
                    <div class="section-header text-center">
                        <h3>What Our Clients Say</h3>
                    </div>
                    
                    <div class="testimonials-slider">
                        <div class="row">
                            <!-- Testimonial 1 -->
                            <div class="col-lg-4">
                                <div class="testimonial-card">
                                    <div class="testimonial-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="testimonial-content">
                                        <p>"CSAVietnamCo. transformed our online presence with a stunning website that perfectly captures our brand essence. Their team was professional, responsive, and delivered beyond our expectations."</p>
                                    </div>
                                    <div class="testimonial-author">
                                        <div class="author-image">
                                            <img src="/assets/images/testimonial-1.jpg" alt="Client" class="img-fluid">
                                        </div>
                                        <div class="author-info">
                                            <h4>Sarah Johnson</h4>
                                            <p>CEO, TechStart Inc.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Testimonial 2 -->
                            <div class="col-lg-4">
                                <div class="testimonial-card">
                                    <div class="testimonial-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="testimonial-content">
                                        <p>"Working with CSAVietnamCo. on our rebranding was a game-changer. Their strategic approach and creative execution helped us stand out in a competitive market and attract new customers."</p>
                                    </div>
                                    <div class="testimonial-author">
                                        <div class="author-image">
                                            <img src="/assets/images/testimonial-2.jpg" alt="Client" class="img-fluid">
                                        </div>
                                        <div class="author-info">
                                            <h4>Michael Wong</h4>
                                            <p>Marketing Director, LuxHome</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Testimonial 3 -->
                            <div class="col-lg-4">
                                <div class="testimonial-card">
                                    <div class="testimonial-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="testimonial-content">
                                        <p>"The digital marketing campaign developed by CSAVietnamCo. exceeded our ROI targets by 200%. Their data-driven approach and creative content strategy significantly boosted our online visibility."</p>
                                    </div>
                                    <div class="testimonial-author">
                                        <div class="author-image">
                                            <img src="/assets/images/testimonial-3.jpg" alt="Client" class="img-fluid">
                                        </div>
                                        <div class="author-info">
                                            <h4>Lisa Nguyen</h4>
                                            <p>Founder, GreenEats</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Blog section -->
        <section id="blog" class="section-padding pb-5">
            <div class="container">
                <div class="section-header text-center">
                    <span class="section-subtitle">Our Blog</span>
                    <h2 class="section-title split">Latest Insights</h2>
                    <p class="section-desc">Stay updated with industry trends and creative insights</p>
                </div>
                
                <div class="row">
                    <!-- Blog post 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-image">
                                <img src="/assets/images/blog-1.jpg" alt="Blog Post" class="img-fluid">
                                <div class="blog-date">
                                    <span>24</span>
                                    <span>Jun</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span><i class="fas fa-user"></i> By Admin</span>
                                    <span><i class="fas fa-tag"></i> Design</span>
                                </div>
                                <h3 class="blog-title"><a href="#">The Future of Web Design: Trends to Watch in 2023</a></h3>
                                <p class="blog-excerpt">Explore the cutting-edge design trends that are shaping the digital landscape and how they can benefit your business.</p>
                                <a href="#" class="blog-readmore">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Blog post 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-image">
                                <img src="/assets/images/blog-2.jpg" alt="Blog Post" class="img-fluid">
                                <div class="blog-date">
                                    <span>18</span>
                                    <span>Jun</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span><i class="fas fa-user"></i> By Admin</span>
                                    <span><i class="fas fa-tag"></i> Marketing</span>
                                </div>
                                <h3 class="blog-title"><a href="#">How to Create a Successful Content Strategy</a></h3>
                                <p class="blog-excerpt">Learn the key components of an effective content strategy that drives engagement and converts prospects into customers.</p>
                                <a href="#" class="blog-readmore">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Blog post 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <div class="blog-image">
                                <img src="/assets/images/blog-3.jpg" alt="Blog Post" class="img-fluid">
                                <div class="blog-date">
                                    <span>10</span>
                                    <span>Jun</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span><i class="fas fa-user"></i> By Admin</span>
                                    <span><i class="fas fa-tag"></i> Branding</span>
                                </div>
                                <h3 class="blog-title"><a href="#">The Psychology of Color in Brand Identity</a></h3>
                                <p class="blog-excerpt">Discover how color choices influence consumer perception and how to leverage color psychology in your branding strategy.</p>
                                <a href="#" class="blog-readmore">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-5">
                    <a href="#" class="btn btn-outline-primary">View All Posts</a>
                </div>
            </div>
        </section>
        
        <!-- HR / Careers section -->
        <section class="section-padding pb-5">
            <div class="container">
                <!-- <div class="section-header text-center">
                    <span class="section-subtitle">Join Our Team</span>
                    <h2 class="section-title split">Careers at CSAVietnamCo.</h2>
                    <p class="section-desc">We're always looking for talented individuals to join our growing team</p>
                </div> -->
                
                <div class="row">
                    <div class="careers-content">
                            <div class="careers-header">
                                <h3 class="careers-title">Why Work With Us?</h3>
                                <p class="careers-description split">Join a team of passionate creatives and digital experts in an environment that fosters innovation, professional growth, and work-life balance.</p>
                            </div>
                            
                            <div class="benefits-grid">
                                <div class="benefit-card">
                                    <div class="benefit-icon-wrapper">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div class="benefit-content">
                                        <h4 class="benefit-title">Career Growth</h4>
                                        <p class="benefit-description">Continuous learning opportunities and clear career advancement paths.</p>
                                    </div>
                                </div>
                                
                                <div class="benefit-card">
                                    <div class="benefit-icon-wrapper">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="benefit-content">
                                        <h4 class="benefit-title">Collaborative Culture</h4>
                                        <p class="benefit-description">Work with diverse, talented professionals in a supportive environment.</p>
                                    </div>
                                </div>
                                
                                <div class="benefit-card">
                                    <div class="benefit-icon-wrapper">
                                        <i class="fas fa-medal"></i>
                                    </div>
                                    <div class="benefit-content">
                                        <h4 class="benefit-title">Competitive Benefits</h4>
                                        <p class="benefit-description">Competitive salary, health insurance, and performance bonuses.</p>
                                    </div>
                                </div>
                                
                                <div class="benefit-card">
                                    <div class="benefit-icon-wrapper">
                                        <i class="fas fa-balance-scale"></i>
                                    </div>
                                    <div class="benefit-content">
                                        <h4 class="benefit-title">Work-Life Balance</h4>
                                        <p class="benefit-description">Flexible working hours and remote work options available.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    <div class="current-openings pt-5" id="hr">
                            <h3>Current Openings</h3>
                            <div class="job-card-wrapper">
                                <div class="card job-card-custom h-100">
                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex justify-content-between align-items-start mb-3">
                                            <h5 class="card-title mb-0">Senior UI/UX Designer</h5>
                                            <span class="badge bg-primary rounded-pill job-type-badge">Full-time</span>
                                        </div>
                                        <p class="card-text text-muted mb-3 flex-grow-1">We're looking for an experienced UI/UX Designer to create exceptional user experiences for our clients.</p>
                                        <div class="d-flex justify-content-between align-items-center mt-auto">
                                            <div class="job-meta text-muted small">
                                                <span class="me-3"><i class="fas fa-map-marker-alt me-1 text-danger"></i> Ho Chi Minh City</span>
                                                <span><i class="fas fa-clock me-1 text-primary"></i> Full-time</span>
                                            </div>
                                            <a href="#" class="btn btn-outline-primary btn-sm">Apply Now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card job-card-custom h-100 mt-4"> <div class="card-body d-flex flex-column">
                                        <div class="d-flex justify-content-between align-items-start mb-3">
                                            <h5 class="card-title mb-0">Digital Marketing Specialist</h5>
                                            <span class="badge bg-primary rounded-pill job-type-badge">Full-time</span>
                                        </div>
                                        <p class="card-text text-muted mb-3 flex-grow-1">Join our marketing team to develop and implement effective digital marketing strategies for our clients.</p>
                                        <div class="d-flex justify-content-between align-items-center mt-auto">
                                            <div class="job-meta text-muted small">
                                                <span class="me-3"><i class="fas fa-map-marker-alt me-1 text-danger"></i> Ho Chi Minh City</span>
                                                <span><i class="fas fa-clock me-1 text-primary"></i> Full-time</span>
                                            </div>
                                            <a href="#" class="btn btn-outline-primary btn-sm">Apply Now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="card job-card-custom h-100 mt-4"> <div class="card-body d-flex flex-column">
                                        <div class="d-flex justify-content-between align-items-start mb-3">
                                            <h5 class="card-title mb-0">Front-end Developer</h5>
                                            <span class="badge bg-warning text-dark rounded-pill job-type-badge">Part-time</span> </div>
                                        <p class="card-text text-muted mb-3 flex-grow-1">We're seeking a talented Front-end Developer with expertise in HTML, CSS, and JavaScript frameworks.</p>
                                        <div class="d-flex justify-content-between align-items-center mt-auto">
                                            <div class="job-meta text-muted small">
                                                <span class="me-3"><i class="fas fa-map-marker-alt me-1 text-danger"></i> Ho Chi Minh City</span>
                                                <span><i class="fas fa-clock me-1 text-primary"></i> Part-time</span>
                                            </div>
                                            <a href="#" class="btn btn-outline-primary btn-sm">Apply Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer">
            <div class="footer-container">
                <div>
                    <div class="footer-logo">
                        <h2>CSA<br />Vietnam<br />Co.</h2>
                    </div>
                    <div class="footer-copyright">© <?php echo date('Y'); ?>, <?php echo $site_title; ?></div>
                </div>

                <div class="footer-links">
                    <div>
                        <a href="#">FAQ</a>
                        <a href="#">Help</a>
                        <a href="#about">About Us</a>
                        <a href="#inspiration">Inspirations</a>
                    </div>
                    <div>
                        <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                        <a href="#"><i class="fab fa-tiktok"></i> TikTok</a>
                        <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
                        <a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
                    </div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Cookie Policy</a>
                        <a href="#">Terms of Use</a>
                    </div>
                </div>

                <div class="newsletter">
                    <h2>Join our newsletter</h2>
                    <p>Stay updated with our latest news and special offers!</p>

                    <form class="newsletter-form">
                        <input type="email" placeholder="Your email" required />
                        <button type="submit">Subscribe</button>
                    </form>

                    <p class="newsletter-privacy">
                        By subscribing you agree to with our
                        <a href="#">Privacy Policy</a> and provide consent to
                        receive updates from our company.
                    </p>
                </div>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollToPlugin.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/SplitText.min.js"></script>
        <script src="assets/js/script.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
            crossorigin="anonymous"
        ></script>
    </body>
</html>