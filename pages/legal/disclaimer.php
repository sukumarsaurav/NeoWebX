<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../includes/config.php';

// Page specific content
$pageTitle = "Disclaimer | NeoWebX";
$pageDescription = "Read our website disclaimer to understand the limitations of liability and the terms of use for our website and services.";
$serviceName = "Disclaimer";
$serviceSlug = "disclaimer";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'website disclaimer, terms of use, liability, legal notice, website terms'
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
                        <h1>Website <span class="highlight">Disclaimer</span></h1>
                        <p class="lead">Important information about the use of our website and services</p>
                    </div>
                    <div class="hero-image" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                        <div class="image-glow"></div>
                        <img src="/assets/images/legal/disclaimer.svg" alt="Website Disclaimer" class="floating-image">
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
                        <h2>General Information</h2>
                        <p>The information provided on this website is for general informational purposes only. While we strive to keep the information up to date and correct, we make no representations or warranties of any kind, express or implied, about the completeness, accuracy, reliability, suitability, or availability of the website or the information, products, services, or related graphics contained on the website.</p>
                    </div>

                    <div class="legal-section">
                        <h2>No Professional Advice</h2>
                        <p>The content on this website is not intended to be a substitute for professional advice. All content, including text, graphics, images, and information, is for general information purposes only. You should not rely on this information as a substitute for professional advice.</p>
                    </div>

                    <div class="legal-section">
                        <h2>Limitation of Liability</h2>
                        <p>In no event will we be liable for any loss or damage including without limitation, indirect or consequential loss or damage, or any loss or damage whatsoever arising from loss of data or profits arising out of, or in connection with, the use of this website.</p>
                    </div>

                    <div class="legal-section">
                        <h2>External Links</h2>
                        <p>Through this website, you are able to link to other websites which are not under our control. We have no control over the nature, content, and availability of those sites. The inclusion of any links does not necessarily imply a recommendation or endorse the views expressed within them.</p>
                    </div>

                    <div class="legal-section">
                        <h2>Website Availability</h2>
                        <p>Every effort is made to keep the website up and running smoothly. However, we take no responsibility for, and will not be liable for, the website being temporarily unavailable due to technical issues beyond our control.</p>
                    </div>

                    <div class="legal-section">
                        <h2>Intellectual Property</h2>
                        <p>All content, including but not limited to text, graphics, logos, images, and software, is the property of NeoWebX or its content suppliers and is protected by international copyright laws. The compilation of all content on this site is the exclusive property of NeoWebX.</p>
                    </div>

                    <div class="legal-section">
                        <h2>Changes to Disclaimer</h2>
                        <p>We reserve the right to modify this disclaimer at any time. Changes will be effective immediately upon posting to the website. Your continued use of the website following any changes indicates your acceptance of the modified disclaimer.</p>
                    </div>

                    <div class="legal-section">
                        <h2>Contact Us</h2>
                        <p>If you have any questions about this Disclaimer, please contact us at:</p>
                        <ul class="contact-info">
                            <li>Email: legal@neowebx.com</li>
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
