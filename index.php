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
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            color: #333;
        }
        /* Your existing CSS remains the same */
        .container {
            width: 80%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        header {
            background-color: #0056b3;
            color: #fff;
            padding: 20px 0;
            background-image: url('https://m.yodycdn.com/blog/hinh-nen-thien-nhien-4k-syody-vn-11-8472f148-baf1-4e8f-a35f-6960a7bc23a2.jpg');
            background-size: cover; /* Optional: This makes the background image cover the entire element */
            background-position: center; /* Optional: This centers the background image */
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
        }
        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
        }
        nav ul li {
            margin-right: 20px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        .hero {
            background-color: #f4f4f4;
            padding: 50px 0;
            text-align: center;
        }
        .hero h1 {
            margin-bottom: 20px;
        }
        .features {
            padding: 50px 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        .feature-item {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
    </style>
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
            <p>Your trusted partner for innovative solutions in Vietnam, maybe</p>
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

    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> <?php echo $site_title; ?>. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>/data/website_csa