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

    <section class="hero">
        <div class="container">
            <h1>Welcome to <?php echo $site_title; ?></h1>
            <p>Your trusted partner for innovative solutions in Vietnam, maybe idk</p>
        </div>
    </section>

    <section class="features">
        <div class="container">
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
                <div class="feature-item">
                    <h3><?php echo $feature['title']; ?></h3>
                    <p><?php echo $feature['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- GSAP Scroll Demo Section -->
    <section class="scroll-demo">
        <div class="container">
            <h2 class="reveal-text">GSAP Scroll Animation Demo</h2>
            
            <div class="scroll-item">
                <h3>Fade In từ bên trái</h3>
                <p>Element này sẽ slide vào từ bên trái khi scroll đến</p>
            </div>
            
            <div class="scroll-item">
                <h3>Fade In từ bên phải</h3>
                <p>Element này sẽ slide vào từ bên phải</p>
            </div>
            
            <div class="floating-element"></div>
            
            <div class="scroll-item">
                <h3>Scale Animation</h3>
                <p>Text này sẽ scale up khi xuất hiện</p>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> <?php echo $site_title; ?>. All rights reserved.</p>
        </div>
    </footer>
    
    <!-- JavaScript Files -->
    <script src="assets/js/animations.js"></script>
</body>
</html>