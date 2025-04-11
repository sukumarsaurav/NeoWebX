<?php
define('BASEPATH', true);
require_once 'includes/config.php';

// Initialize session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set variables for header
$pageTitle = 'NeoWebX - Complete Technology Partner for Modern Businesses';
$pageDescription = 'Transform your business with expert web design, app development, AI solutions, and digital marketing services tailored for growth-focused companies.';

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'web design, app development, AI services, digital marketing, custom websites, mobile apps, chatbots, SEO, business automation'
];

// Include header
include_once 'components/header.php';
?>

<!-- Hero Section with Animated Elements -->
<section class="hero-section">
    <div class="hero-background"></div>
    <div class="hero-blob-1"></div>
    <div class="hero-blob-2"></div>
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content" data-aos="fade-right">
                <h1>Transforming <span class="highlight">Ideas</span> into <span class="highlight">Digital Success</span> Stories</h1>
                <p class="lead">Your end-to-end technology partner for innovative solutions that drive measurable business growth and digital transformation.</p>
                <div class="hero-buttons">
                    <a href="/pages/contact.php" class="btn btn-primary">Start Your Project</a>
                    <a href="/pages/portfolio.php" class="btn btn-outline">View Our Work</a>
                </div>
            </div>
            <div class="hero-image" data-aos="fade-left">
                <div class="image-glow"></div>
                <img src="assets/svg/google-ads.svg" alt="NeoWebX Digital Transformation" class="floating-image">
                <div class="decoration-circle-1"></div>
                <div class="decoration-circle-2"></div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="overview-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Why Choose NeoWebX</h2>
            <p class="section-lead">We combine technical excellence with strategic thinking to deliver solutions that drive real business results.</p>
        </div>
        
        <div class="overview-grid">
            <div class="overview-card primary-card" data-aos="fade-right">
                <div class="card-decoration"></div>
                <h3>Our Approach</h3>
                <p>We're not just developers or designers – we're strategic partners invested in your success. Our collaborative approach ensures that every solution is:</p>
                <ul class="process-list">
                    <li><strong>Business-focused</strong> – Aligned with your strategic objectives</li>
                    <li><strong>Data-driven</strong> – Based on analytics and user insights</li>
                    <li><strong>Future-proof</strong> – Built with scalability and evolution in mind</li>
                    <li><strong>User-centered</strong> – Designed for optimal user experience</li>
                </ul>
            </div>
            
            <div class="overview-card secondary-card" data-aos="fade-left">
                <div class="card-decoration"></div>
                <h3>Our Difference</h3>
                <p>What sets us apart from other technology partners:</p>
                <ul class="process-list">
                    <li><strong>AI Integration</strong> – Cutting-edge AI capabilities across all services</li>
                    <li><strong>Full-Stack Expertise</strong> – End-to-end solutions under one roof</li>
                    <li><strong>Startup Mindset</strong> – Agile, innovative, and growth-focused</li>
                    <li><strong>Industry Knowledge</strong> – Specialized experience across key sectors</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Main Services Section -->
<section class="services-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Our Comprehensive Services</h2>
            <p class="section-lead">End-to-end technology solutions tailored to your business needs</p>
        </div>
        
        <!-- Web Design Services -->
        <div class="service-category" data-aos="fade-up">
            <div class="category-header">
                <div class="category-icon"><i class="fas fa-laptop-code"></i></div>
                <h3>Web Design & Development</h3>
            </div>
            <div class="services-grid">
                <div class="service-card" data-aos="fade-up">
                    <div class="service-icon"><i class="fas fa-building"></i></div>
                    <h4>Business Websites</h4>
                    <p>Professional, conversion-focused websites that establish credibility and generate leads.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Responsive design</li>
                        <li><i class="fas fa-check"></i> SEO optimization</li>
                        <li><i class="fas fa-check"></i> Lead generation features</li>
                    </ul>
                    <a href="/pages/services/web-design/Custom-Website-Solutions/Business-Websites.php" class="learn-more">Learn More</a>
                </div>
                
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-icon"><i class="fas fa-shopping-cart"></i></div>
                    <h4>E-commerce Solutions</h4>
                    <p>Powerful online stores that deliver seamless shopping experiences and maximize conversions.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Shopify & WooCommerce</li>
                        <li><i class="fas fa-check"></i> Custom e-commerce</li>
                        <li><i class="fas fa-check"></i> Payment integration</li>
                    </ul>
                    <a href="/pages/services/web-design/E-commerce-&-CMS-Solutions/Custom-E-commerce-Solutions.php" class="learn-more">Learn More</a>
                </div>
                
                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-icon"><i class="fas fa-layer-group"></i></div>
                    <h4>UI/UX Design</h4>
                    <p>User-centric design that creates intuitive, engaging digital experiences that convert.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Wireframing & prototyping</li>
                        <li><i class="fas fa-check"></i> User research</li>
                        <li><i class="fas fa-check"></i> Interface design</li>
                    </ul>
                    <a href="/pages/services/web-design/UI-UX-&-Website-Enhancements/UI-UX-Design-&-Prototyping.php" class="learn-more">Learn More</a>
                </div>
            </div>
            <div class="category-cta">
                <a href="/pages/services/web-design.php" class="btn btn-outline">Explore All Web Design Services</a>
            </div>
        </div>
        
        <!-- App Development Services -->
        <div class="service-category" data-aos="fade-up">
            <div class="category-header">
                <div class="category-icon"><i class="fas fa-mobile-alt"></i></div>
                <h3>App Development</h3>
            </div>
            <div class="services-grid">
                <div class="service-card" data-aos="fade-up">
                    <div class="service-icon"><i class="fas fa-window-restore"></i></div>
                    <h4>Custom Web Applications</h4>
                    <p>Tailored web applications designed to automate processes and solve business challenges.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Scalable architecture</li>
                        <li><i class="fas fa-check"></i> Secure & reliable</li>
                        <li><i class="fas fa-check"></i> Custom functionality</li>
                    </ul>
                    <a href="/pages/services/app-development/Web-Application-Development/Custom-Web-Applications.php" class="learn-more">Learn More</a>
                </div>
                
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-icon"><i class="fas fa-mobile-alt"></i></div>
                    <h4>Mobile App Development</h4>
                    <p>Native and cross-platform mobile applications for iOS and Android that engage users on the go.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> iOS & Android apps</li>
                        <li><i class="fas fa-check"></i> React Native & Flutter</li>
                        <li><i class="fas fa-check"></i> App Store optimization</li>
                    </ul>
                    <a href="/pages/services/app-development/Mobile-App-Development/cross-platform-apps.php" class="learn-more">Learn More</a>
                </div>
                
                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-icon"><i class="fas fa-database"></i></div>
                    <h4>Backend Development</h4>
                    <p>Robust backend systems and APIs that power your digital products with reliability and performance.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> API development</li>
                        <li><i class="fas fa-check"></i> Database design</li>
                        <li><i class="fas fa-check"></i> Cloud infrastructure</li>
                    </ul>
                    <a href="/pages/services/app-development/Backend-&-Infrastructure/Backend-Development-APIs.php" class="learn-more">Learn More</a>
                </div>
            </div>
            <div class="category-cta">
                <a href="/pages/services/app-development.php" class="btn btn-outline">Explore All App Development Services</a>
            </div>
        </div>
        
        <!-- AI Services -->
        <div class="service-category" data-aos="fade-up">
            <div class="category-header">
                <div class="category-icon"><i class="fas fa-brain"></i></div>
                <h3>AI Services</h3>
            </div>
            <div class="services-grid">
                <div class="service-card" data-aos="fade-up">
                    <div class="service-icon"><i class="fas fa-comments"></i></div>
                    <h4>Conversational AI</h4>
                    <p>Intelligent chatbots and virtual assistants that enhance customer service and drive engagement.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> 24/7 customer support</li>
                        <li><i class="fas fa-check"></i> Natural language processing</li>
                        <li><i class="fas fa-check"></i> Multi-platform integration</li>
                    </ul>
                    <a href="/pages/services/ai-services/conversational-ai-solutions/chatbot-development-services.php" class="learn-more">Learn More</a>
                </div>
                
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-icon"><i class="fas fa-cogs"></i></div>
                    <h4>Business Automation</h4>
                    <p>AI-powered workflow and process automation that increases efficiency and reduces operational costs.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Document processing</li>
                        <li><i class="fas fa-check"></i> Workflow optimization</li>
                        <li><i class="fas fa-check"></i> Data extraction & analysis</li>
                    </ul>
                    <a href="/pages/services/ai-services/ai-powered-business-automation/ai-powered-workflow-automation.php" class="learn-more">Learn More</a>
                </div>
                
                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-icon"><i class="fas fa-chart-line"></i></div>
                    <h4>Machine Learning Solutions</h4>
                    <p>Custom AI models and algorithms that deliver predictive insights and intelligent features.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Predictive analytics</li>
                        <li><i class="fas fa-check"></i> Computer vision</li>
                        <li><i class="fas fa-check"></i> Recommendation engines</li>
                    </ul>
                    <a href="/pages/services/ai-services/machine-learning-ai-development/custom-ai-model-development-training.php" class="learn-more">Learn More</a>
                </div>
            </div>
            <div class="category-cta">
                <a href="/pages/services/ai-services.php" class="btn btn-outline">Explore All AI Services</a>
            </div>
        </div>
        
        <!-- Digital Marketing -->
        <div class="service-category" data-aos="fade-up">
            <div class="category-header">
                <div class="category-icon"><i class="fas fa-bullhorn"></i></div>
                <h3>Digital Marketing</h3>
            </div>
            <div class="services-grid">
                <div class="service-card" data-aos="fade-up">
                    <div class="service-icon"><i class="fas fa-search"></i></div>
                    <h4>SEO Services</h4>
                    <p>Comprehensive search engine optimization strategies that improve visibility and drive organic traffic.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Technical SEO</li>
                        <li><i class="fas fa-check"></i> Content optimization</li>
                        <li><i class="fas fa-check"></i> Local & e-commerce SEO</li>
                    </ul>
                    <a href="/pages/services/digital-marketing/seo/on-page-seo.php" class="learn-more">Learn More</a>
                </div>
                
                <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-icon"><i class="fas fa-share-alt"></i></div>
                    <h4>Social Media Marketing</h4>
                    <p>Strategic social media management and advertising that builds your brand and drives engagement.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Content strategy</li>
                        <li><i class="fas fa-check"></i> Paid advertising</li>
                        <li><i class="fas fa-check"></i> Community management</li>
                    </ul>
                    <a href="/pages/services/digital-marketing/social-media/social-media-management.php" class="learn-more">Learn More</a>
                </div>
                
                <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-icon"><i class="fas fa-envelope"></i></div>
                    <h4>Email Marketing</h4>
                    <p>Targeted email campaigns that nurture leads, drive conversions, and strengthen customer relationships.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Campaign strategy</li>
                        <li><i class="fas fa-check"></i> List management</li>
                        <li><i class="fas fa-check"></i> Performance analytics</li>
                    </ul>
                    <a href="/pages/services/digital-marketing/email-marketing/email-campaigns.php" class="learn-more">Learn More</a>
                </div>
            </div>
            <div class="category-cta">
                <a href="/pages/services/digital-marketing.php" class="btn btn-outline">Explore All Digital Marketing Services</a>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="process-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Our Proven Process</h2>
            <p class="section-lead">A systematic approach to delivering successful digital solutions</p>
        </div>
        
        <div class="process-timeline">
            <div class="timeline-line"></div>
            <div class="process-grid">
                <div class="process-card-wrapper" data-aos="fade-up">
                    <div class="process-number">1</div>
                    <div class="process-card">
                        <h3>Discovery & Strategy</h3>
                        <p>We begin by deeply understanding your business goals, audience, and challenges.</p>
                        <ul class="process-list">
                            <li>Business analysis</li>
                            <li>User research</li>
                            <li>Competitive landscape</li>
                            <li>Strategic planning</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-number">2</div>
                    <div class="process-card">
                        <h3>Design & Prototyping</h3>
                        <p>Converting strategy into visual concepts and interactive prototypes.</p>
                        <ul class="process-list">
                            <li>UI/UX design</li>
                            <li>Wireframing</li>
                            <li>Interactive prototyping</li>
                            <li>Client feedback loop</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-number">3</div>
                    <div class="process-card">
                        <h3>Development & Testing</h3>
                        <p>Building robust, scalable solutions with rigorous quality assurance.</p>
                        <ul class="process-list">
                            <li>Agile development</li>
                            <li>Responsive implementation</li>
                            <li>Comprehensive testing</li>
                            <li>Performance optimization</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-number">4</div>
                    <div class="process-card">
                        <h3>Launch & Growth</h3>
                        <p>Deploying your solution and implementing strategies for continuous improvement.</p>
                        <ul class="process-list">
                            <li>Seamless deployment</li>
                            <li>Analytics setup</li>
                            <li>Training & support</li>
                            <li>Ongoing optimization</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Industry Solutions Section -->
<section class="industry-applications">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Industry-Specific Solutions</h2>
            <p class="section-lead">Specialized expertise across key business sectors</p>
        </div>
        
        <div class="industry-grid">
            <div class="industry-card" data-aos="fade-up">
                <div class="industry-icon"><i class="fas fa-heartbeat"></i></div>
                <h3>Healthcare</h3>
                <p>HIPAA-compliant websites, patient portals, telemedicine solutions, and healthcare marketing.</p>
                <a href="/pages/services/web-design/Industry-Specific-Website/Healthcare-Websites.php" class="learn-more">Learn More</a>
            </div>
            
            <div class="industry-card" data-aos="fade-up" data-aos-delay="100">
                <div class="industry-icon"><i class="fas fa-home"></i></div>
                <h3>Real Estate</h3>
                <p>Property listing platforms, virtual tours, agent websites, and real estate marketing.</p>
                <a href="/pages/services/web-design/Industry-Specific-Website/Real-Estate-Websites.php" class="learn-more">Learn More</a>
            </div>
            
            <div class="industry-card" data-aos="fade-up" data-aos-delay="200">
                <div class="industry-icon"><i class="fas fa-shopping-bag"></i></div>
                <h3>E-commerce & Retail</h3>
                <p>Online stores, inventory management, AI-powered recommendations, and e-commerce marketing.</p>
                <a href="/pages/services/ai-services/industry-specific-ai-solutions/ai-solutions-for-e-commerce-retail.php" class="learn-more">Learn More</a>
            </div>
            
            <div class="industry-card" data-aos="fade-up" data-aos-delay="300">
                <div class="industry-icon"><i class="fas fa-university"></i></div>
                <h3>Finance</h3>
                <p>Secure banking portals, financial tools, compliance solutions, and finance industry marketing.</p>
                <a href="/pages/services/web-design/Industry-Specific-Website/Finance-Websites.php" class="learn-more">Learn More</a>
            </div>
            
            <div class="industry-card" data-aos="fade-up" data-aos-delay="400">
                <div class="industry-icon"><i class="fas fa-graduation-cap"></i></div>
                <h3>Education</h3>
                <p>Learning management systems, educational websites, student portals, and e-learning platforms.</p>
                <a href="/pages/services/web-design/Industry-Specific-Website/Education-Websites.php" class="learn-more">Learn More</a>
            </div>
            
            <div class="industry-card" data-aos="fade-up" data-aos-delay="500">
                <div class="industry-icon"><i class="fas fa-gavel"></i></div>
                <h3>Legal</h3>
                <p>Professional law firm websites, client portals, case management, and legal marketing.</p>
                <a href="/pages/services/web-design/Industry-Specific-Website/Legal-Websites.php" class="learn-more">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Why Clients Choose Us</h2>
            <p class="section-lead">Measurable benefits that drive your business forward</p>
        </div>
        
        <div class="benefits-grid">
            <div class="primary-benefit" data-aos="fade-up">
                <div class="benefit-card">
                    <div class="benefit-icon primary-icon"><i class="fas fa-chart-line"></i></div>
                    <h3>Growth-Focused</h3>
                    <p>We focus on delivering solutions that drive measurable business growth with clear ROI. Our strategic approach ensures that every dollar spent contributes to your bottom line.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge">Avg. 40% Conversion Increase</span>
                        <span class="stat-badge">250% Traffic Growth</span>
                    </div>
                </div>
            </div>
            
            <div class="secondary-benefit" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-card">
                    <div class="benefit-icon secondary-icon"><i class="fas fa-users"></i></div>
                    <h3>Client-Centered</h3>
                    <p>Your goals are our priority. We maintain transparent communication and collaborative processes that ensure your vision is realized.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge secondary-badge">95% Client Satisfaction</span>
                        <span class="stat-badge secondary-badge">92% Retention Rate</span>
                    </div>
                </div>
            </div>
            
            <div class="tertiary-benefit" data-aos="fade-up" data-aos-delay="200">
                <div class="benefit-card">
                    <div class="benefit-icon tertiary-icon"><i class="fas fa-cogs"></i></div>
                    <h3>Technical Excellence</h3>
                    <p>Our team of experts brings deep technical knowledge and stays at the forefront of emerging technologies and best practices.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge tertiary-badge">50+ Certified Experts</span>
                        <span class="stat-badge tertiary-badge">100+ Technologies</span>
                    </div>
                </div>
            </div>
            
            <div class="quaternary-benefit" data-aos="fade-up" data-aos-delay="300">
                <div class="benefit-card">
                    <div class="benefit-icon quaternary-icon"><i class="fas fa-rocket"></i></div>
                    <h3>Innovation & Agility</h3>
                    <p>We embrace innovative approaches and maintain agile processes that allow us to adapt quickly to changing requirements and market conditions.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge quaternary-badge">2x Faster Delivery</span>
                        <span class="stat-badge quaternary-badge">Continuous Innovation</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section">
    <div class="container">
        <h2 data-aos="fade-up">Ready to Transform Your Digital Presence?</h2>
        <p class="lead" data-aos="fade-up" data-aos-delay="100">Let's discuss how our technology solutions can help you achieve your business goals.</p>
        <div class="cta-buttons" data-aos="fade-up" data-aos-delay="200">
            <a href="/pages/contact.php" class="cta-btn">Schedule a Free Consultation</a>
            <a href="/pages/services.php" class="btn-outline">Explore Our Services</a>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="testimonials-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Client Success Stories</h2>
            <p class="section-lead">Hear from businesses we've helped transform</p>
        </div>
        
        <div class="testimonials-carousel">
            <div class="testimonial-card" data-aos="fade-up">
                <div class="testimonial-content">
                    <p>"NeoWebX completely transformed our online presence. Their web design team created a stunning, conversion-focused website that has increased our leads by 75%. Their strategic approach and attention to detail were impressive."</p>
                    <div class="testimonial-author">
                        <div class="author-name">Jennifer Roberts</div>
                        <div class="author-title">Marketing Director, TechInnovate</div>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                <div class="testimonial-content">
                    <p>"The mobile app developed by NeoWebX has revolutionized how we connect with customers. Their development team delivered a feature-rich, user-friendly app on time and within budget. Our user engagement has increased by 150%."</p>
                    <div class="testimonial-author">
                        <div class="author-name">Michael Chen</div>
                        <div class="author-title">CEO, HealthConnect</div>
                    </div>
                </div>
            </div>
            
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-content">
                    <p>"The AI chatbot solution from NeoWebX has transformed our customer service. It handles 70% of inquiries automatically, reducing response times and allowing our team to focus on complex issues. The ROI has been exceptional."</p>
                    <div class="testimonial-author">
                        <div class="author-name">Sarah Johnson</div>
                        <div class="author-title">Customer Success Manager, RetailPlus</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="final-cta">
    <div class="container">
        <div class="cta-box" data-aos="fade-up">
            <h2>Let's Build Something Amazing Together</h2>
            <p>Ready to discuss your project? Our experts are here to help you define, design, and develop the perfect solution.</p>
            <a href="/pages/contact.php" class="primary-button">Contact Us Today</a>
        </div>
    </div>
</section>

<?php include_once 'components/footer.php'; ?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS
    AOS.init({
        duration: 800,
        easing: 'ease-out',
        once: true
    });
    
    // Add any additional JavaScript functionality here
});
</script> 