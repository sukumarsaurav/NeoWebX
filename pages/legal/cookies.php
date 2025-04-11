<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../includes/config.php';

// Page specific content
$pageTitle = "Cookie Policy | NeoWebX";
$pageDescription = "Learn about how we use cookies and similar technologies on our website to enhance your browsing experience and provide personalized services.";
$serviceName = "Cookie Policy";
$serviceSlug = "cookies";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'cookie policy, website cookies, privacy, data protection, GDPR, CCPA, website tracking'
];

require_once '../../components/header.php';
?>

        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-background"></div>
            <div class="hero-blob-1"></div>
            <div class="hero-blob-2"></div>
            
            <div class="container">
                <div class="hero-grid">
                    <div class="hero-content" data-aos="fade-right" data-aos-duration="1000">
                        <h1>Cookie <span class="highlight">Policy</span></h1>
                        <p class="lead">Understanding how we use cookies to enhance your experience</p>
                    </div>
                    <div class="hero-image" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                        <div class="image-glow"></div>
                        <img src="/assets/images/legal/cookies.svg" alt="Cookie Policy" class="floating-image">
                        <div class="decoration-circle-1"></div>
                        <div class="decoration-circle-2"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content Section -->
        <section class="legal-content-section">
            <div class="container">
                <div class="legal-content" data-aos="fade-up">
                    <div class="last-updated">
                        <p>Last Updated: <?php echo date('F d, Y'); ?></p>
                    </div>

                    <div class="legal-section">
                        <h2>What Are Cookies?</h2>
                        <p>Cookies are small text files that are placed on your computer or mobile device when you visit our website. They help us provide you with a better experience and allow certain features to work properly.</p>
                    </div>

                    <div class="legal-section">
                        <h2>How We Use Cookies</h2>
                        <p>We use cookies for various purposes, including:</p>
                        <ul>
                            <li>Essential cookies for website functionality</li>
                            <li>Analytics cookies to understand how visitors use our site</li>
                            <li>Preference cookies to remember your settings</li>
                            <li>Marketing cookies to deliver relevant content</li>
                        </ul>
                    </div>

                    <div class="legal-section">
                        <h2>Types of Cookies We Use</h2>
                        <div class="cookie-types">
                            <div class="cookie-type-card" data-aos="fade-up">
                                <h3>Essential Cookies</h3>
                                <p>These cookies are necessary for the website to function properly. They enable basic functions like page navigation and access to secure areas of the website.</p>
                            </div>
                            <div class="cookie-type-card" data-aos="fade-up" data-aos-delay="100">
                                <h3>Analytics Cookies</h3>
                                <p>These cookies help us understand how visitors interact with our website by collecting and reporting information anonymously.</p>
                            </div>
                            <div class="cookie-type-card" data-aos="fade-up" data-aos-delay="200">
                                <h3>Preference Cookies</h3>
                                <p>These cookies enable the website to remember information that changes the way the website behaves or looks, like your preferred language.</p>
                            </div>
                            <div class="cookie-type-card" data-aos="fade-up" data-aos-delay="300">
                                <h3>Marketing Cookies</h3>
                                <p>These cookies are used to track visitors across websites to display relevant advertisements.</p>
                            </div>
                        </div>
                    </div>

                    <div class="legal-section">
                        <h2>Managing Your Cookie Preferences</h2>
                        <p>You can control and/or delete cookies as you wish. You can delete all cookies that are already on your computer and you can set most browsers to prevent them from being placed. If you do this, however, you may have to manually adjust some preferences every time you visit a site and some services and functionalities may not work.</p>
                    </div>

                    <div class="legal-section">
                        <h2>Third-Party Cookies</h2>
                        <p>Some cookies are placed by third-party services that appear on our pages. We use trusted third-party services that track this information on our behalf.</p>
                    </div>

                    <div class="legal-section">
                        <h2>Contact Us</h2>
                        <p>If you have any questions about our Cookie Policy, please contact us at:</p>
                        <ul class="contact-info">
                            <li>Email: privacy@neowebx.com</li>
                            <li>Phone: +1 (555) 123-4567</li>
                            <li>Address: 123 Tech Street, Silicon Valley, CA 94025</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

<?php
require_once '../../../components/footer.php';
?>

    <!-- JavaScript libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="/assets/js/main.js"></script>
</body>
</html>
