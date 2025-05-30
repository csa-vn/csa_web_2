<?php
// Configuration and utilities
$site_title = "CSA Vietnam Co., Ltd";
$nav_items = [
    'Home' => 'index.php',
    'About Us' => 'about.php',
    'Services' => 'services.php',
    'Contact' => 'contact.php'
];

// Start the page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title; ?></title>
    <meta name="description" content="CSA Vietnam Co., Ltd - Your trusted partner for innovative solutions in Vietnam">
    <meta name="keywords" content="CSA Vietnam, consulting, quality assurance, innovative solutions, Vietnam">
    <meta name="author" content="CSA Vietnam">
    <link rel="canonical" href="https://csavietnam.com/">
    <link rel="stylesheet" href="assets/css/main.css">
    
    <!-- GSAP CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo"><?php echo $site_title; ?></div>
            <nav>
                <ul>
                    <?php foreach($nav_items as $name => $url): ?>
                        <li><a href="<?php echo $url; ?>"><?php echo $name; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Horizontal Scrolling Container -->
    <div class="container-horizontal">
        <!-- Panel 1: Hero -->
        <section class="panel" id="panel1">
            <div class="panel-content">
                <h1 class="reveal-text">Welcome to <?php echo $site_title; ?></h1>
                <p class="animate-element">Your trusted partner for innovative solutions in Vietnam</p>
                <div class="animate-element">
                    <button class="cta-button">Get Started</button>
                </div>
            </div>
        </section>

        <!-- Panel 2: About -->
        <section class="panel" id="panel2">
            <div class="panel-content">
                <h2 class="reveal-text">About Us</h2>
                <p class="animate-element">We are a leading consulting company in Vietnam with over 10 years of experience delivering innovative solutions to businesses of all sizes.</p>
                <div class="animate-element">
                    <img src="assets/images/about-image.jpg" alt="About CSA Vietnam" style="max-width: 500px;">
                </div>
            </div>
        </section>

        <!-- Panel 3: Services -->
        <section class="panel" id="panel3">
            <div class="panel-content">
                <h2 class="reveal-text">Our Services</h2>
                <div class="services-grid animate-element">
                    <?php
                    // Example of dynamically generated content
                    $features = [
                        [
                            'title' => 'Expert Consulting',
                            'description' => 'Professional consulting services tailored to your business needs.'
                        ],
                        [
                            'title' => 'Quality Assurance',
                            'description' => 'Rigorous testing and quality control processes.'
                        ],
                        [
                            'title' => 'Innovative Solutions',
                            'description' => 'Cutting-edge technology solutions for modern businesses.'
                        ]
                    ];
                    
                    foreach($features as $feature): ?>
                        <div class="service-item">
                            <h3><?php echo $feature['title']; ?></h3>
                            <p><?php echo $feature['description']; ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Panel 4: Team -->
        <section class="panel" id="panel4">
            <div class="panel-content">
                <h2 class="reveal-text">Our Team</h2>
                <p class="animate-element">Our team of experts is dedicated to delivering the highest quality services to our clients.</p>
                <div class="team-members animate-element">
                    <!-- Team member cards would go here -->
                    <div class="team-member">
                        <img src="assets/images/team1.jpg" alt="Team Member">
                        <h3>John Doe</h3>
                        <p>CEO & Founder</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Panel 5: Testimonials -->
        <section class="panel" id="panel5">
            <div class="panel-content">
                <h2 class="reveal-text">Client Testimonials</h2>
                <div class="testimonial animate-element">
                    <p>"CSA Vietnam has been an invaluable partner for our business. Their innovative solutions have helped us grow exponentially."</p>
                    <h4>- Jane Smith, CEO of Tech Solutions</h4>
                </div>
            </div>
        </section>

        <!-- Panel 6: Contact -->
        <section class="panel" id="panel6">
            <div class="panel-content">
                <h2 class="reveal-text">Contact Us</h2>
                <p class="animate-element">Reach out to us to learn more about how we can help your business succeed.</p>
                <div class="contact-info animate-element">
                    <p>Email: info@csavietnam.com</p>
                    <p>Phone: +84 123 456 789</p>
                    <p>Address: 123 Main Street, Ho Chi Minh City, Vietnam</p>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> <?php echo $site_title; ?>. All rights reserved.</p>
        </div>
    </footer>
    
    <!-- JavaScript Files -->
    <script src="assets/js/animations.js"></script>
</body>
</html>