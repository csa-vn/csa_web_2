<?php
// Configuration and utilities
$site_title = "CSA Vietnam Co., Ltd";
$nav_items = [
    'About' => '#',
    'Inspiration' => '#',
    'Shop' => '#',
    'HR' => '#'
];

// Start the page
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo $site_title; ?></title>
        <!-- Other CSS files -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body>
        <!-- Header transparent -->
        <header class="header">
            <div class="logo">
                <a href="#">CSAVietnamCo.</a>
            </div>
            <nav class="navigation">
                <ul>
                    <?php foreach($nav_items as $name => $url): ?>
                        <li><a href="<?php echo $url; ?>"><?php echo $name; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </header>

        <!-- Hero section -->
        <section class="hero"></section>

        <div class="container m-5 p-5">
            <div class="row">
                <div class="col-md-6 text-bold">
                    <h2>Elevate Your Living</h2>
                    <h2>Space with Unmatched</h2>
                    <h2>Comfort & Style</h2>
                </div>
                <div class="col-md-6">
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing
                        elit. Dolor quam cupiditate vero vitae doloribus sequi
                        qui commodi dolore accusantium eveniet, maiores
                        voluptatibus laudantium, incidunt ratione enim sunt.
                        Non, voluptas temporibus.
                    </p>
                </div>
            </div>
        </div>

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
                        <a href="#">About Us</a>
                        <a href="#">Inspirations</a>
                    </div>
                    <div>
                        <a href="#">Instagram</a>
                        <a href="#">TikTok</a>
                        <a href="#">Threads</a>
                        <a href="#">Facebook</a>
                    </div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Cookie Policy</a>
                        <a href="#">Terms of Use</a>
                    </div>
                </div>

                <div class="newsletter">
                    <h2>Join our newsletter</h2>
                    <p>We will also send you our discount coupons!</p>

                    <form class="newsletter-form">
                        <input type="email" placeholder="Your email" />
                        <button type="submit">Subscribe</button>
                    </form>

                    <p class="newsletter-privacy">
                        By subscribing you agree to with our
                        <a href="#">Privacy Policy</a> and provide consent to
                        receive updates from our company. hello world
                    </p>
                </div>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="assets/js/script.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"
        ></script>
    </body>
</html>