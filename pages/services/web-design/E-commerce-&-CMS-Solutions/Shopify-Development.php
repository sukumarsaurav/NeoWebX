<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';

// Page specific content
$pageTitle = "Professional Shopify Development & Design Services | NeoWebX";
$pageDescription = "Expert Shopify development and design services for businesses of all sizes. Custom Shopify store creation, theme development, app integration, and optimization.";
$serviceName = "Shopify Development";
$serviceSlug = "shopify-development";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'shopify development, shopify design, shopify store, shopify theme development, shopify app integration, custom shopify, shopify experts, ecommerce website'
];

require_once '../../../../components/header.php';
?>

        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-background"></div>
            <div class="hero-blob-1"></div>
            <div class="hero-blob-2"></div>
            
            <div class="container">
                <div class="hero-grid">
                    <div class="hero-content" data-aos="fade-right" data-aos-duration="1000">
                        <h1>Shopify <span class="highlight">Development</span></h1>
                        <p class="lead">High-converting e-commerce stores on the world's leading commerce platform</p>
                        <div class="hero-buttons">
                            <a href="/pages/contact.php" class="btn btn-primary">Start Your Shopify Project</a>
                            <a href="/portfolio" class="btn btn-outline">View Our Work</a>
                        </div>
                    </div>
                    <div class="hero-image" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                        <div class="image-glow"></div>
                        <img src="/assets/images/services/shopify-development.svg" alt="Shopify Development" class="floating-image">
                        <div class="decoration-circle-1"></div>
                        <div class="decoration-circle-2"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Overview Section -->
        <section class="overview-section">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Custom Shopify Store Development</h2>
                    <p class="section-lead">Building high-performance e-commerce experiences that drive revenue</p>
                </div>
                
                <div class="overview-grid">
                    <div class="overview-card primary-card" data-aos="fade-right" data-aos-duration="800">
                        <div class="card-decoration"></div>
                        <h3>Why Choose Shopify?</h3>
                        <p>Shopify has emerged as the leading e-commerce platform for businesses of all sizes, powering over 1.7 million merchants in more than 175 countries. Its robust infrastructure, security, and scalability make it the platform of choice for both startups and established brands looking to grow their online presence.</p>
                        <p>Unlike self-hosted platforms, Shopify handles all the technical complexities of running an e-commerce store—server maintenance, security patches, PCI compliance, and more—allowing you to focus on growing your business. With built-in payment processing, unlimited product support, and 99.99% uptime, Shopify provides a rock-solid foundation for your online store.</p>
                    </div>
                    
                    <div class="overview-card secondary-card" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                        <div class="card-decoration"></div>
                        <h3>Our Shopify Expertise</h3>
                        <p>As certified Shopify Partners, we bring deep platform knowledge and e-commerce best practices to every project. Our team specializes in creating custom Shopify experiences that go beyond templates to deliver unique, brand-aligned stores that convert visitors into customers.</p>
                        <p>From sleek, minimalist boutique stores to complex multi-currency shops with custom checkout flows, we've built Shopify solutions for diverse business models across various industries. We focus not just on aesthetics, but on creating optimized shopping experiences that maximize conversions while making inventory and order management effortless for your team.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section">
            <div class="container">
                <div class="section-header">
                    <div class="services-header" data-aos="fade-up">
                        <h2>Our Shopify Development Services</h2>
                        <p class="lead">Comprehensive solutions for your Shopify success</p>
                    </div>
                </div>
                
                <div class="services-grid">
                    <div class="service-item" data-aos="fade-up">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <h3>Custom Shopify Store Design</h3>
                            <p>Brand-focused, conversion-optimized Shopify stores that deliver exceptional shopping experiences.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Custom visual design</li>
                                <li><i class="fas fa-check"></i> Responsive layouts</li>
                                <li><i class="fas fa-check"></i> UX optimization</li>
                                <li><i class="fas fa-check"></i> Performance tuning</li>
                                <li><i class="fas fa-check"></i> Brand consistency</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-paint-brush"></i>
                            </div>
                            <h3>Shopify Theme Development</h3>
                            <p>Custom-built Shopify themes that deliver unique shopping experiences tailored to your business needs.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Custom theme creation</li>
                                <li><i class="fas fa-check"></i> Theme customization</li>
                                <li><i class="fas fa-check"></i> Liquid programming</li>
                                <li><i class="fas fa-check"></i> Section-based design</li>
                                <li><i class="fas fa-check"></i> Theme optimization</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-puzzle-piece"></i>
                            </div>
                            <h3>Shopify App Development & Integration</h3>
                            <p>Custom functionality and seamless integration of third-party services to enhance your Shopify store.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Custom app development</li>
                                <li><i class="fas fa-check"></i> Third-party integrations</li>
                                <li><i class="fas fa-check"></i> API development</li>
                                <li><i class="fas fa-check"></i> Shopify Plus scripts</li>
                                <li><i class="fas fa-check"></i> Workflow automation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Implementation Process Section -->
        <section class="process-section">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Our Shopify Development Process</h2>
                    <p class="section-lead">A methodical approach to creating successful Shopify stores</p>
                </div>
                
                <div class="process-timeline">
                    <!-- Timeline Line -->
                    <div class="timeline-line"></div>
                    
                    <div class="process-grid">
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800">
                            <div class="process-number">1</div>
                            <div class="process-card">
                                <h3>Discovery & Strategy</h3>
                                <p>We analyze your business goals, products, and target audience to develop a strategic plan for your Shopify store.</p>
                                <ul class="process-list">
                                    <li>Business needs assessment</li>
                                    <li>Competitor analysis</li>
                                    <li>Product catalog planning</li>
                                    <li>User experience strategy</li>
                                    <li>Conversion optimization planning</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                            <div class="process-number">2</div>
                            <div class="process-card">
                                <h3>Design & Prototyping</h3>
                                <p>We create visually stunning designs that reflect your brand identity and optimize the customer journey.</p>
                                <ul class="process-list">
                                    <li>Store wireframing</li>
                                    <li>UI/UX design</li>
                                    <li>Responsive layouts</li>
                                    <li>Product page optimization</li>
                                    <li>Checkout flow design</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="process-number">3</div>
                            <div class="process-card">
                                <h3>Development & Implementation</h3>
                                <p>Our Shopify developers build your store with clean code, custom functionality, and performance optimization.</p>
                                <ul class="process-list">
                                    <li>Theme development</li>
                                    <li>Custom functionality</li>
                                    <li>App integration</li>
                                    <li>Payment gateway setup</li>
                                    <li>Product import</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                            <div class="process-number">4</div>
                            <div class="process-card">
                                <h3>Testing & Launch</h3>
                                <p>We rigorously test your Shopify store and optimize it for performance, search engines, and conversions.</p>
                                <ul class="process-list">
                                    <li>Cross-device testing</li>
                                    <li>Payment processing testing</li>
                                    <li>Speed optimization</li>
                                    <li>SEO implementation</li>
                                    <li>Analytics setup</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technologies Section -->
        <section class="platforms-section">
            <div class="container">
                <div class="section-header">
                    <div class="platforms-header" data-aos="fade-up">
                        <h2>Shopify Tools & Integrations</h2>
                        <p class="lead">Powerful capabilities we implement to enhance your Shopify store</p>
                    </div>
                </div>
                
                <div class="platforms-grid">
                    <div class="platform-item" data-aos="fade-up">
                        <div class="platform-card">
                            <h3>Shopify Frameworks</h3>
                            <ul>
                                <li>Shopify Core</li>
                                <li>Shopify Plus</li>
                                <li>Shopify POS</li>
                                <li>Shopify Markets</li>
                                <li>Liquid templating</li>
                                <li>Online Store 2.0</li>
                                <li>Dawn theme framework</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="platform-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="platform-card">
                            <h3>Essential Integrations</h3>
                            <ul>
                                <li>Klavio</li>
                                <li>ReCharge</li>
                                <li>Yotpo</li>
                                <li>Afterpay/Klarna</li>
                                <li>Avalara</li>
                                <li>ShipStation</li>
                                <li>Judge.me/Stamped.io</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="platform-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="platform-card">
                            <h3>Marketing & Analytics</h3>
                            <ul>
                                <li>Google Analytics</li>
                                <li>Facebook Pixel</li>
                                <li>Privy</li>
                                <li>Hotjar</li>
                                <li>Lucky Orange</li>
                                <li>Loyalty Lion</li>
                                <li>Omnisend</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="benefits-section">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Benefits of Shopify Development</h2>
                    <p class="section-lead">Why businesses choose Shopify for their e-commerce needs</p>
                </div>
                
                <div class="benefits-grid">
                    <div class="benefit-card-wrapper primary-benefit" data-aos="fade-right" data-aos-duration="800">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <h3>Rapid Time to Market</h3>
                            <p>Launch your e-commerce store quickly with Shopify's intuitive platform and our expert development approach.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge">Launch stores 2-3x faster than custom e-commerce builds</span>
                                <span class="stat-badge">50% faster implementation than most other platforms</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="benefit-card-wrapper secondary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                        <div class="benefit-card">
                            <div class="benefit-icon secondary-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h3>Reliability & Security</h3>
                            <p>Enjoy enterprise-grade infrastructure, security, and compliance without the maintenance headaches.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge secondary-badge">99.99% uptime guarantee</span>
                                <span class="stat-badge secondary-badge">PCI-DSS compliant by default</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="benefit-card-wrapper tertiary-benefit" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                        <div class="benefit-card">
                            <div class="benefit-icon tertiary-icon">
                                <i class="fas fa-expand-arrows-alt"></i>
                            </div>
                            <h3>Scalability</h3>
                            <p>Grow your business without technical limitations on products, traffic, or sales volume.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge tertiary-badge">Handles 10,000+ orders per minute during peak sales</span>
                                <span class="stat-badge tertiary-badge">Unlimited products and bandwidth</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="benefit-card-wrapper quaternary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">
                        <div class="benefit-card">
                            <div class="benefit-icon quaternary-icon">
                                <i class="fas fa-magic"></i>
                            </div>
                            <h3>Ecosystem & Flexibility</h3>
                            <p>Access thousands of apps and integrations to extend your store's functionality as your business evolves.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge quaternary-badge">6,000+ apps in the Shopify App Store</span>
                                <span class="stat-badge quaternary-badge">Integrates with most business systems</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2>Ready to Build Your Shopify Store?</h2>
                    <p class="lead">Let's create a powerful, conversion-focused online store that drives growth for your business.</p>
                    <a href="/pages/contact.php" class="cta-btn animate-pulse-slow">
                        Start Your Shopify Project
                    </a>
                </div>
            </div>
        </section>

        <!-- FAQ Section -->
        <section class="faq-section">
            <div class="container">
                <div class="section-header">
                    <div class="faq-header">
                        <h2>Frequently Asked Questions</h2>
                        <p class="lead">Common questions about Shopify development</p>
                    </div>
                </div>
                <div class="faq-container">
                    <div class="faq-item active">
                        <div class="faq-question">
                            <h3>Is Shopify right for my business?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Shopify is an excellent choice for many types of e-commerce businesses, but the best fit depends on your specific needs:</p>
                            <ul>
                                <li><strong>Ideal for:</strong> Retail brands, direct-to-consumer businesses, dropshipping operations, subscription businesses, boutique stores, and even large enterprise retailers through Shopify Plus.</li>
                                <li><strong>Business stage:</strong> Shopify works well for both startups and established businesses. New ventures benefit from the quick setup and low technical overhead, while established brands appreciate the scalability and robust features.</li>
                                <li><strong>Product types:</strong> The platform excels with physical products but also handles digital products, services, and subscriptions with appropriate apps and customization.</li>
                                <li><strong>Technical expertise:</strong> Shopify is designed to be user-friendly for non-technical users while offering advanced capabilities for developers to extend and customize.</li>
                            </ul>
                            <p>Shopify might not be the perfect fit if you need extremely complex customizations that fall outside their API capabilities, or if you have very specific hosting requirements. During our consultation, we'll evaluate your business needs and recommend the most appropriate e-commerce solution, whether that's Shopify or an alternative platform.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What's the difference between using a Shopify theme and custom development?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>The choice between using a pre-built Shopify theme versus custom development depends on your business needs and growth goals:</p>
                            <ul>
                                <li><strong>Pre-built Themes:</strong> These offer a cost-effective starting point with professional designs and basic functionality. They're ideal for businesses with standard product offerings and limited customization needs. However, they often limit your ability to stand out from competitors who may use the same theme.</li>
                                <li><strong>Theme Customization:</strong> This middle-ground approach starts with a premium theme but customizes specific aspects like layout, functionality, or branding elements. It balances uniqueness with cost-effectiveness but may still impose some limitations on advanced functionality.</li>
                                <li><strong>Custom Development:</strong> A fully custom Shopify store is built from the ground up to match your exact business requirements and user experience goals. This approach offers unlimited design flexibility, optimized user journeys, and unique functionality that sets your brand apart.</li>
                            </ul>
                            <p>Custom development provides several key advantages:</p>
                            <ul>
                                <li><strong>Brand Differentiation:</strong> A unique design and shopping experience that reinforces your brand identity and sets you apart from competitors.</li>
                                <li><strong>Conversion Optimization:</strong> User flows designed specifically around your products and customer needs, leading to higher conversion rates.</li>
                                <li><strong>Performance:</strong> Clean, optimized code without the bloat often found in multipurpose themes, resulting in faster loading times.</li>
                                <li><strong>Future-Proofing:</strong> A solid foundation built with scalability in mind, making future enhancements easier to implement.</li>
                            </ul>
                            <p>We can help you determine the right approach based on your business goals, timeline, and budget during our initial consultation.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What ongoing support do you provide after launching my Shopify store?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>We provide comprehensive post-launch support to ensure your Shopify store continues to perform optimally and evolve with your business needs:</p>
                            <ul>
                                <li><strong>Training & Documentation:</strong> We provide thorough training sessions for your team on managing your Shopify store, along with custom documentation specific to your implementation.</li>
                                <li><strong>Technical Support:</strong> Our support plans include ongoing technical assistance for addressing issues, making minor adjustments, and answering questions about your store's operation.</li>
                                <li><strong>Maintenance:</strong> We offer proactive maintenance services to keep your store updated, secure, and performant, including theme updates, app compatibility checks, and regular store health assessments.</li>
                                <li><strong>Performance Monitoring:</strong> Ongoing monitoring of your store's speed, conversion points, and user experience to identify optimization opportunities.</li>
                                <li><strong>Growth & Enhancement:</strong> As your business evolves, we provide strategic guidance and implementation services for new features, integrations, or redesigns to support your growing needs.</li>
                            </ul>
                            <p>Our support model is designed to be a true partnership where we serve as an extension of your team, providing both reactive support for immediate needs and proactive recommendations for continuous improvement. We offer various support plan levels to match different business needs and budgets, each with defined response times and service inclusions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
include_once '../../../../components/footer.php';
?>

    <!-- JavaScript libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="/assets/js/services.js"></script>
</body>
</html>
