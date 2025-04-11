<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../includes/config.php';

// Page specific content
$pageTitle = "Accessibility Statement | NeoWebX";
$pageDescription = "Our commitment to making our website accessible to all users, including those with disabilities. Learn about our accessibility features and standards.";
$serviceName = "Accessibility Statement";
$serviceSlug = "accessibility";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'website accessibility, WCAG, ADA compliance, accessible website, disability access'
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
                        <h1>Accessibility <span class="highlight">Statement</span></h1>
                        <p class="lead">Our commitment to making our website accessible to everyone</p>
                    </div>
                    <div class="hero-image" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                        <div class="image-glow"></div>
                        <img src="/assets/images/legal/accessibility.svg" alt="Accessibility Statement" class="floating-image">
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
                        <h2>Our Commitment</h2>
                        <p>NeoWebX is committed to ensuring digital accessibility for people with disabilities. We are continually improving the user experience for everyone and applying the relevant accessibility standards to ensure we provide equal access to all users.</p>
                    </div>

                    <div class="legal-section">
                        <h2>Accessibility Standards</h2>
                        <p>We aim to conform to the Web Content Accessibility Guidelines (WCAG) 2.1 Level AA standards. These guidelines explain how to make web content more accessible for people with disabilities, and user-friendly for everyone.</p>
                    </div>

                    <div class="legal-section">
                        <h2>Accessibility Features</h2>
                        <div class="accessibility-features">
                            <div class="feature-card" data-aos="fade-up">
                                <h3>Keyboard Navigation</h3>
                                <p>Our website can be navigated using only a keyboard, making it accessible to users who cannot use a mouse.</p>
                            </div>
                            <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                                <h3>Screen Reader Compatibility</h3>
                                <p>Our website is compatible with popular screen readers, allowing visually impaired users to access our content.</p>
                            </div>
                            <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                                <h3>Text Alternatives</h3>
                                <p>We provide text alternatives for non-text content, ensuring that all users can understand our content.</p>
                            </div>
                            <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                                <h3>Color Contrast</h3>
                                <p>We maintain sufficient color contrast ratios to ensure text is readable for users with visual impairments.</p>
                            </div>
                        </div>
                    </div>

                    <div class="legal-section">
                        <h2>Ongoing Efforts</h2>
                        <p>We are continuously working to improve the accessibility of our website. Our efforts include:</p>
                        <ul>
                            <li>Regular accessibility audits and testing</li>
                            <li>Staff training on accessibility best practices</li>
                            <li>Implementation of accessibility improvements</li>
                            <li>Regular review of accessibility standards and guidelines</li>
                        </ul>
                    </div>

                    <div class="legal-section">
                        <h2>Feedback and Support</h2>
                        <p>We welcome your feedback on the accessibility of our website. If you encounter any accessibility barriers or have suggestions for improvement, please contact us:</p>
                        <ul class="contact-info">
                            <li>Email: accessibility@neowebx.com</li>
                            <li>Phone: +1 (555) 123-4567</li>
                            <li>Address: 123 Tech Street, Silicon Valley, CA 94025</li>
                        </ul>
                    </div>

                    <div class="legal-section">
                        <h2>Third-Party Content</h2>
                        <p>While we strive to ensure accessibility across our website, some third-party content or features may not be fully accessible. We encourage users to report any accessibility issues they encounter with third-party content.</p>
                    </div>

                    <div class="legal-section">
                        <h2>Accessibility Resources</h2>
                        <p>For more information about web accessibility and legal requirements, visit:</p>
                        <ul class="resources-list">
                            <li><a href="https://www.w3.org/WAI/" target="_blank" rel="noopener">W3C Web Accessibility Initiative</a></li>
                            <li><a href="https://www.ada.gov/" target="_blank" rel="noopener">ADA.gov</a></li>
                            <li><a href="https://www.section508.gov/" target="_blank" rel="noopener">Section508.gov</a></li>
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
