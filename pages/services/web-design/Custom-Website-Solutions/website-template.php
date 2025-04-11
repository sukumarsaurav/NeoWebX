<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';

// Page specific content
$pageTitle = "Ready-Made Website Templates | NeoWebX";
$pageDescription = "Choose from our premium collection of industry-specific website templates. Purchase instantly and customize as needed to get your business online faster with professional quality.";
$serviceName = "Ready-Made Website Templates";
$serviceSlug = "website-templates";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'website templates, ready-made websites, industry templates, website themes, quick website launch, customizable templates, professional website design, affordable websites, template store'
];

require_once '../../../../components/header.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="blob-1"></div>
    <div class="blob-2"></div>
    <div class="circle-1"></div>
    <div class="circle-2"></div>
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content" data-aos="fade-right">
                <span class="service-category">Custom Website Solutions</span>
                <h1>Ready-Made Website  <span class="highlight">Templates</span></h1>
                <p class="lead">Launch your professional website in days, not weeks. Our premium ready-made templates are designed for your industry and fully customizable to your brand.</p>
                <div class="hero-buttons">
                    <a href="https://store.neowebx.com" class="btn btn-primary">Browse Template Store</a>
                    <a href="/pages/contact.php" class="btn btn-outline">Request Customization</a>
                </div>
                <div class="tech-stack">
                    <span>Built With:</span>
                    <img src="/assets/images/tech/html5.png" alt="HTML5" title="HTML5">
                    <img src="/assets/images/tech/css3.png" alt="CSS3" title="CSS3">
                    <img src="/assets/images/tech/javascript.png" alt="JavaScript" title="JavaScript">
                    <img src="/assets/images/tech/bootstrap.png" alt="Bootstrap" title="Bootstrap">
                    <img src="/assets/images/tech/wordpress.png" alt="WordPress" title="WordPress">
                </div>
            </div>
            <div class="hero-image" data-aos="fade-left">
                <img src="/assets/images/services/website-templates.svg" alt="<?php echo $serviceName; ?>" class="floating-image">
            </div>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="overview-section">
    <div class="container">
        <div class="section-header">
            <div class="overview-header" data-aos="fade-up">
                <h2>Professional Templates for Every Industry</h2>
                <p class="section-lead">Skip the design wait and launch your website in days with our professionally designed, industry-specific templates.</p>
            </div>
        </div>
        
        <div class="overview-cards">
            <div class="overview-card primary-card" data-aos="fade-up">
                <div class="card-icon">
                    <i class="fas fa-bolt"></i>
                </div>
                <h3>Instant Website Solution</h3>
                <p>Our ready-to-launch templates provide a complete website foundation, allowing you to go live within days instead of waiting weeks for custom design and development.</p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Purchase and download instantly</li>
                    <li><i class="fas fa-check-circle"></i> Launch-ready designs</li>
                    <li><i class="fas fa-check-circle"></i> Industry-optimized layouts</li>
                </ul>
            </div>
            
            <div class="overview-card secondary-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-icon">
                    <i class="fas fa-sliders-h"></i>
                </div>
                <h3>Customization Options</h3>
                <p>While our templates look great out of the box, we offer various levels of customization to ensure your website perfectly represents your brand and meets your specific needs.</p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> DIY customization tools</li>
                    <li><i class="fas fa-check-circle"></i> Professional customization services</li>
                    <li><i class="fas fa-check-circle"></i> Branding integration</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Template Categories Section -->
<section class="services-section">
    <div class="container">
        <div class="section-header">
            <div class="services-header" data-aos="fade-up">
                <h2>Industry-Specific Template Categories</h2>
                <p class="section-lead">Professionally designed templates for your specific industry</p>
            </div>
        </div>
        
        <div class="services-grid">
            <div class="service-item" data-aos="fade-up">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>Real Estate</h3>
                    <p>Property listing features, virtual tours, agent profiles, and mortgage calculators.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Property search filters</li>
                        <li><i class="fas fa-check"></i> Map integration</li>
                        <li><i class="fas fa-check"></i> Lead capture forms</li>
                        <li><i class="fas fa-check"></i> Agent/listing management</li>
                    </ul>
                    <a href="https://store.neowebx.com/real-estate" class="learn-more">View Templates</a>
                </div>
            </div>

            <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3>Jobs & Recruiters</h3>
                    <p>Job board functionality, applicant tracking, company profiles, and resume uploads.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Job posting system</li>
                        <li><i class="fas fa-check"></i> Resume database</li>
                        <li><i class="fas fa-check"></i> Application tracking</li>
                        <li><i class="fas fa-check"></i> Employer/candidate portals</li>
                    </ul>
                    <a href="https://store.neowebx.com/jobs-recruiters" class="learn-more">View Templates</a>
                </div>
            </div>

            <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Matrimonial</h3>
                    <p>Profile creation, matching algorithms, secure messaging, and preference settings.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Profile creation</li>
                        <li><i class="fas fa-check"></i> Match suggestions</li>
                        <li><i class="fas fa-check"></i> Private messaging</li>
                        <li><i class="fas fa-check"></i> Verification systems</li>
                    </ul>
                    <a href="https://store.neowebx.com/matrimonial" class="learn-more">View Templates</a>
                </div>
            </div>

            <div class="service-item" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Medical & Doctors</h3>
                    <p>Appointment scheduling, patient portals, doctor profiles, and health resources.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Online booking</li>
                        <li><i class="fas fa-check"></i> Doctor directories</li>
                        <li><i class="fas fa-check"></i> Service information</li>
                        <li><i class="fas fa-check"></i> Patient resources</li>
                    </ul>
                    <a href="https://store.neowebx.com/medical-doctors" class="learn-more">View Templates</a>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>B2B</h3>
                    <p>Corporate design, service showcases, client portals, and lead generation features.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Service/product catalogs</li>
                        <li><i class="fas fa-check"></i> Case studies section</li>
                        <li><i class="fas fa-check"></i> Quote request systems</li>
                        <li><i class="fas fa-check"></i> Client testimonials</li>
                    </ul>
                    <a href="https://store.neowebx.com/b2b" class="learn-more">View Templates</a>
                </div>
            </div>

            <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>E-commerce</h3>
                    <p>Product catalogs, shopping carts, payment gateways, and inventory management.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Product management</li>
                        <li><i class="fas fa-check"></i> Secure checkout</li>
                        <li><i class="fas fa-check"></i> Customer accounts</li>
                        <li><i class="fas fa-check"></i> Order tracking</li>
                    </ul>
                    <a href="https://store.neowebx.com/ecommerce" class="learn-more">View Templates</a>
                </div>
            </div>

            <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <h3>Banking & Finance</h3>
                    <p>Secure interfaces, loan calculators, financial resources, and service information.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Financial calculators</li>
                        <li><i class="fas fa-check"></i> Service descriptions</li>
                        <li><i class="fas fa-check"></i> Enhanced security</li>
                        <li><i class="fas fa-check"></i> Resource centers</li>
                    </ul>
                    <a href="https://store.neowebx.com/banking-finance" class="learn-more">View Templates</a>
                </div>
            </div>

            <div class="service-item" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-spa"></i>
                    </div>
                    <h3>Health & Beauty</h3>
                    <p>Service showcases, booking systems, galleries, and client testimonials.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Service menus</li>
                        <li><i class="fas fa-check"></i> Online booking</li>
                        <li><i class="fas fa-check"></i> Before/after galleries</li>
                        <li><i class="fas fa-check"></i> Client reviews</li>
                    </ul>
                    <a href="https://store.neowebx.com/health-beauty" class="learn-more">View Templates</a>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>Food & Beverage</h3>
                    <p>Menus, online ordering, reservation systems, and location information.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Digital menus</li>
                        <li><i class="fas fa-check"></i> Online ordering</li>
                        <li><i class="fas fa-check"></i> Table reservations</li>
                        <li><i class="fas fa-check"></i> Location details</li>
                    </ul>
                    <a href="https://store.neowebx.com/food-beverage" class="learn-more">View Templates</a>
                </div>
            </div>

            <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>School & Education</h3>
                    <p>Course catalogs, student portals, faculty profiles, and resource libraries.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Course information</li>
                        <li><i class="fas fa-check"></i> Faculty directory</li>
                        <li><i class="fas fa-check"></i> Event calendars</li>
                        <li><i class="fas fa-check"></i> Application forms</li>
                    </ul>
                    <a href="https://store.neowebx.com/education" class="learn-more">View Templates</a>
                </div>
            </div>

            <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <h3>Tours & Travel</h3>
                    <p>Tour listings, booking systems, destination guides, and travel resources.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Trip planners</li>
                        <li><i class="fas fa-check"></i> Tour catalogs</li>
                        <li><i class="fas fa-check"></i> Booking engines</li>
                        <li><i class="fas fa-check"></i> Travel guides</li>
                    </ul>
                    <a href="https://store.neowebx.com/travel" class="learn-more">View Templates</a>
                </div>
            </div>

            <div class="service-item" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <h3>B2C</h3>
                    <p>Product displays, service information, contact forms, and customer testimonials.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Service showcases</li>
                        <li><i class="fas fa-check"></i> Inquiry forms</li>
                        <li><i class="fas fa-check"></i> Client portfolios</li>
                        <li><i class="fas fa-check"></i> Testimonial sections</li>
                    </ul>
                    <a href="https://store.neowebx.com/b2c" class="learn-more">View Templates</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works Process -->
<section class="process-section">
    <div class="container">
        <div class="section-header">
            <div class="process-header" data-aos="fade-up">
                <h2>How Our Template System Works</h2>
                <p class="section-lead">A streamlined process to get your website up and running quickly</p>
            </div>
        </div>
        
        <div class="process-timeline">
            <!-- Timeline Line -->
            <div class="timeline-line"></div>
            
            <div class="process-grid">
                <div class="process-card-wrapper" data-aos="fade-up">
                    <div class="process-number">1</div>
                    <div class="process-card">
                        <h3>Browse & Select</h3>
                        <p>Visit our template store and choose the design that best fits your industry and business needs.</p>
                        <ul class="process-list">
                            <li>Filter by industry category</li>
                            <li>View live demos of each template</li>
                            <li>Compare features and functionality</li>
                            <li>Select your ideal template</li>
                        </ul>
                    </div>
                </div>

                <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-number">2</div>
                    <div class="process-card">
                        <h3>Purchase & Download</h3>
                        <p>Complete your purchase securely online and get instant access to your template files.</p>
                        <ul class="process-list">
                            <li>Secure online payment</li>
                            <li>Instant template access</li>
                            <li>Download complete package</li>
                            <li>Access documentation</li>
                        </ul>
                    </div>
                </div>

                <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-number">3</div>
                    <div class="process-card">
                        <h3>Customize (Optional)</h3>
                        <p>Personalize your template with your branding, content, and specific functionality needs.</p>
                        <ul class="process-list">
                            <li>DIY customization with our tools</li>
                            <li>Request professional customization</li>
                            <li>Add your content and branding</li>
                            <li>Configure features and integrations</li>
                        </ul>
                    </div>
                </div>

                <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-number">4</div>
                    <div class="process-card">
                        <h3>Launch & Support</h3>
                        <p>Go live with your new website and access ongoing support and updates as needed.</p>
                        <ul class="process-list">
                            <li>Website deployment assistance</li>
                            <li>Technical support package</li>
                            <li>Template updates and maintenance</li>
                            <li>Optional ongoing services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Benefits of Ready-Made Templates</h2>
            <p class="section-lead">Why our template-based approach delivers exceptional value</p>
        </div>
        
        <div class="benefits-grid">
            <div class="benefit-card-wrapper primary-benefit" data-aos="fade-right" data-aos-duration="800">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Speed to Market</h3>
                    <p>Launch your website in days instead of weeks or months. Our ready-made templates eliminate design and development delays, getting your business online and generating leads faster.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge">80% faster launch</span>
                        <span class="stat-badge">Launch in days, not months</span>
                    </div>
                </div>
            </div>

            <div class="benefit-card-wrapper secondary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                <div class="benefit-card">
                    <div class="benefit-icon secondary-icon">
                        <i class="fas fa-coins"></i>
                    </div>
                    <h3>Cost-Effective</h3>
                    <p>Save significantly compared to custom website development. Our templates provide professional design and functionality at a fraction of the cost, with options to add customization as your budget allows.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge secondary-badge">70% cost savings</span>
                        <span class="stat-badge secondary-badge">Flexible pricing options</span>
                    </div>
                </div>
            </div>

            <div class="benefit-card-wrapper tertiary-benefit" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                <div class="benefit-card">
                    <div class="benefit-icon tertiary-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Industry-Optimized</h3>
                    <p>Our templates are designed specifically for your industry with features, layouts, and functionality tailored to your business type. You get a purpose-built website without the custom development costs.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge tertiary-badge">Industry-specific features</span>
                        <span class="stat-badge tertiary-badge">Purpose-built layouts</span>
                    </div>
                </div>
            </div>

            <div class="benefit-card-wrapper quaternary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">
                <div class="benefit-card">
                    <div class="benefit-icon quaternary-icon">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </div>
                    <h3>Scalable Solution</h3>
                    <p>Start with a template and grow as your business expands. Our templates are built with scalability in mind, allowing for additional features and customizations as your needs evolve.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge quaternary-badge">Future-ready platform</span>
                        <span class="stat-badge quaternary-badge">Expandable architecture</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technical Standards Section -->
<section class="standards-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Technical Standards</h2>
            <p class="section-lead">Professional-grade templates built with modern best practices</p>
        </div>
        
        <div class="standards-grid">
            <div class="standard-item" data-aos="fade-up">
                <div class="standard-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3>Responsive Design</h3>
                <ul class="standard-list">
                    <li>Mobile-first approach</li>
                    <li>Optimized for all device sizes</li>
                    <li>Touch-friendly interfaces</li>
                    <li>Consistent experience across devices</li>
                </ul>
            </div>
            
            <div class="standard-item" data-aos="fade-up" data-aos-delay="100">
                <div class="standard-icon">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                <h3>Performance Optimized</h3>
                <ul class="standard-list">
                    <li>Fast loading speeds</li>
                    <li>Optimized code and assets</li>
                    <li>Efficient resource loading</li>
                    <li>Google Core Web Vitals compliant</li>
                </ul>
            </div>
            
            <div class="standard-item" data-aos="fade-up" data-aos-delay="200">
                <div class="standard-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h3>SEO Ready</h3>
                <ul class="standard-list">
                    <li>SEO-friendly code structure</li>
                    <li>Schema markup integration</li>
                    <li>Optimized page architecture</li>
                    <li>Semantic HTML implementation</li>
                </ul>
            </div>
            
            <div class="standard-item" data-aos="fade-up" data-aos-delay="300">
                <div class="standard-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Secure & Reliable</h3>
                <ul class="standard-list">
                    <li>Security best practices</li>
                    <li>Regular security updates</li>
                    <li>GDPR compliance features</li>
                    <li>Data protection measures</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Launch Your Website Quickly?</h2>
            <p class="lead">Browse our template store and find the perfect foundation for your online presence.</p>
            <a href="https://store.neowebx.com" class="cta-btn animate-pulse-slow">
                Explore Our Template Store
            </a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <div class="faq-header" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p class="section-lead">Common questions about our website templates</p>
            </div>
        </div>
        <div class="faq-container">
            <div class="faq-item active">
                <div class="faq-question">
                    <h3>What's included with my template purchase?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>Our template packages include everything you need to get your website up and running:</p>
                    <ul>
                        <li><strong>Complete Website Files:</strong> All HTML, CSS, JavaScript, and image files needed for your website</li>
                        <li><strong>Documentation:</strong> Comprehensive guides for installation and customization</li>
                        <li><strong>Basic Support:</strong> Email assistance for installation and setup questions</li>
                        <li><strong>Responsive Design:</strong> Mobile-friendly layouts that work on all devices</li>
                        <li><strong>Stock Images:</strong> Royalty-free placeholder images (which you can replace with your own)</li>
                        <li><strong>Sample Content:</strong> Placeholder text and formatting to guide your content creation</li>
                    </ul>
                    <p>Additionally, depending on the template package you choose, you may receive WordPress themes, plugins, or other CMS integrations to simplify your website management.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can I customize my template after purchase?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>Yes, our templates are designed to be customizable in several ways:</p>
                    <ul>
                        <li><strong>DIY Customization:</strong> If you have technical skills, you can modify the template files directly. Our documentation provides guidance for common customizations.</li>
                        <li><strong>Admin Panel Changes:</strong> For CMS-based templates (WordPress, etc.), many customizations can be made through the admin dashboard without coding.</li>
                        <li><strong>Professional Customization:</strong> We offer customization services if you need specific modifications beyond the base template. This is perfect if you need:
                            <ul>
                                <li>Custom functionality not included in the template</li>
                                <li>Unique design elements for your brand</li>
                                <li>Integration with third-party services or systems</li>
                                <li>Advanced features specific to your business needs</li>
                            </ul>
                        </li>
                    </ul>
                    <p>Our customization services are quoted based on your specific requirements. Contact us after purchase to discuss your customization needs and get a personalized quote.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Do I need to purchase hosting separately?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>Yes, our templates are sold independently from hosting services. You'll need to arrange website hosting separately to make your site live on the internet. This approach gives you the freedom to choose the hosting provider that best fits your needs and budget.</p>
                    <p>We recommend several hosting providers that work well with our templates, and our documentation includes setup instructions for popular hosting services. If you prefer, we can recommend hosting solutions based on your specific template and traffic expectations.</p>
                    <p>For your convenience, we also offer optional hosting services with special rates for template customers. These hosting packages include template installation and basic setup, so you can get online with minimal technical involvement.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can I use the template for multiple websites?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>Our standard license allows you to use a purchased template on a single website or domain. If you need to use the template for multiple websites, you have two options:</p>
                    <ul>
                        <li><strong>Purchase Additional Licenses:</strong> Each additional website requires its own license purchase. We offer discounts for multiple license purchases made at the same time.</li>
                        <li><strong>Extended License:</strong> For agencies or businesses creating multiple sites, we offer extended licensing options that may be more cost-effective than individual purchases.</li>
                    </ul>
                    <p>The license is tied to the domain where the template is installed, not to the person or company making the purchase. This means you can create websites for clients using our templates, but each client site needs its own license.</p>
                    <p>Please note that redistributing, reselling, or including our templates in website builders or similar services is not permitted under any of our licenses.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How long does it take to set up a template?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>The setup time varies depending on your technical experience and the amount of customization you plan to implement:</p>
                    <ul>
                        <li><strong>Basic Setup:</strong> If you're using the template largely as-is, just replacing text and images with your content, you can typically go live within 1-2 days.</li>
                        <li><strong>Moderate Customization:</strong> For websites requiring some layout adjustments, color scheme changes, and feature configurations, expect 3-5 days of setup time.</li>
                        <li><strong>Extensive Customization:</strong> If you're significantly modifying the template or integrating complex third-party systems, setup could take 1-2 weeks.</li>
                    </ul>
                    <p>For those without technical experience, we offer professional setup services that can typically complete your website within 3-5 business days, including basic content population based on materials you provide.</p>
                    <p>Our most technically straightforward templates feature one-click demo imports (for WordPress templates) that can set up your site structure in minutes, allowing you to focus immediately on content replacement rather than configuration.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../../../../components/footer.php';
?>
 <script src="/assets/js/services.js"></script>
</rewritten_file>
