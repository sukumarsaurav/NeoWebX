<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';

// Page specific content
$pageTitle = "Website Modernization & Redesign Services | NeoWebX";
$pageDescription = "Transform your outdated website into a modern, responsive, and high-performing digital experience. Our website modernization services breathe new life into legacy websites.";
$serviceName = "Modernizing Old Websites";
$serviceSlug = "modernizing-old-websites";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'website modernization, legacy website upgrade, website redesign, outdated website, responsive design, website facelift, modern website, website upgrade, site migration'
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
                        <h1>Website <span class="highlight">Modernization</span></h1>
                        <p class="lead">Transform your outdated website into a modern, responsive digital experience</p>
                        <div class="hero-buttons">
                            <a href="/pages/contact.php" class="btn btn-primary">Modernize Your Website</a>
                            <a href="/portfolio" class="btn btn-outline">View Our Work</a>
                        </div>
                    </div>
                    <div class="hero-image" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                        <div class="image-glow"></div>
                        <img src="/assets/images/services/website-modernization.svg" alt="Website Modernization" class="floating-image">
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
                    <h2>Breathe New Life Into Your Legacy Website</h2>
                    <p class="section-lead">Modernize without starting from scratch</p>
                </div>
                
                <div class="overview-grid">
                    <div class="overview-card primary-card" data-aos="fade-right" data-aos-duration="800">
                        <div class="card-decoration"></div>
                        <h3>Why Modernize Your Website?</h3>
                        <p>Websites that were cutting-edge just a few years ago can quickly become outdated in today's rapidly evolving digital landscape. An outdated website not only affects your brand perception but can also impact your search rankings, user engagement, and conversion rates.</p>
                        <p>Website modernization transforms your existing site into a contemporary digital experience without losing valuable content and SEO equity you've built over time. Our approach focuses on preserving what works while upgrading design, functionality, and performance to meet current standards and user expectations.</p>
                    </div>
                    
                    <div class="overview-card secondary-card" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                        <div class="card-decoration"></div>
                        <h3>Our Modernization Expertise</h3>
                        <p>Our team specializes in transforming outdated websites while preserving their valuable assets. We analyze your current site architecture, content, and performance metrics to develop a modernization strategy that addresses key pain points while building on existing strengths.</p>
                        <p>With extensive experience across various platforms and technologies, we can tackle modernization projects of any complexity—from refreshing visual design and implementing responsive layouts to migrating to modern content management systems and integrating new functionality. Our work results in websites that look contemporary, perform exceptionally, and provide intuitive user experiences.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section">
            <div class="container">
                <div class="section-header">
                    <div class="services-header" data-aos="fade-up">
                        <h2>Our Website Modernization Services</h2>
                        <p class="lead">Comprehensive solutions to revitalize your digital presence</p>
                    </div>
                </div>
                
                <div class="services-grid">
                    <div class="service-item" data-aos="fade-up">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-paint-brush"></i>
                            </div>
                            <h3>Visual Design Refresh</h3>
                            <p>Update your website's aesthetic with modern design elements while maintaining brand consistency.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Contemporary visual design</li>
                                <li><i class="fas fa-check"></i> Modern typography</li>
                                <li><i class="fas fa-check"></i> Updated color schemes</li>
                                <li><i class="fas fa-check"></i> Improved imagery</li>
                                <li><i class="fas fa-check"></i> Brand consistency</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <h3>Responsive Implementation</h3>
                            <p>Transform your desktop-only website into a fully responsive experience that works flawlessly across all devices.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Mobile-friendly layouts</li>
                                <li><i class="fas fa-check"></i> Touch-optimized interfaces</li>
                                <li><i class="fas fa-check"></i> Cross-device compatibility</li>
                                <li><i class="fas fa-check"></i> Adaptive content display</li>
                                <li><i class="fas fa-check"></i> Mobile performance optimization</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-exchange-alt"></i>
                            </div>
                            <h3>Platform Migration</h3>
                            <p>Migrate from legacy platforms to modern, secure content management systems without losing content or SEO value.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Content migration</li>
                                <li><i class="fas fa-check"></i> URL structure preservation</li>
                                <li><i class="fas fa-check"></i> SEO transition strategy</li>
                                <li><i class="fas fa-check"></i> Database restructuring</li>
                                <li><i class="fas fa-check"></i> Custom functionality transfer</li>
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
                    <h2>Our Website Modernization Process</h2>
                    <p class="section-lead">A methodical approach to transforming outdated websites</p>
                </div>
                
                <div class="process-timeline">
                    <!-- Timeline Line -->
                    <div class="timeline-line"></div>
                    
                    <div class="process-grid">
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800">
                            <div class="process-number">1</div>
                            <div class="process-card">
                                <h3>Comprehensive Audit</h3>
                                <p>We analyze your existing website to identify strengths, weaknesses, and opportunities for improvement.</p>
                                <ul class="process-list">
                                    <li>Design evaluation</li>
                                    <li>Technical assessment</li>
                                    <li>Content inventory</li>
                                    <li>Performance analysis</li>
                                    <li>SEO evaluation</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                            <div class="process-number">2</div>
                            <div class="process-card">
                                <h3>Strategic Planning</h3>
                                <p>We develop a detailed modernization strategy that addresses key issues while preserving valuable assets.</p>
                                <ul class="process-list">
                                    <li>Modernization roadmap</li>
                                    <li>Technology recommendations</li>
                                    <li>UX improvement plan</li>
                                    <li>Content migration strategy</li>
                                    <li>SEO preservation plan</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="process-number">3</div>
                            <div class="process-card">
                                <h3>Design & Development</h3>
                                <p>Our team implements the modernization strategy with careful attention to both aesthetics and functionality.</p>
                                <ul class="process-list">
                                    <li>Visual design refresh</li>
                                    <li>Responsive implementation</li>
                                    <li>Frontend development</li>
                                    <li>Backend modernization</li>
                                    <li>Content migration</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                            <div class="process-number">4</div>
                            <div class="process-card">
                                <h3>Testing & Launch</h3>
                                <p>We thoroughly test your modernized website before implementing a seamless transition strategy.</p>
                                <ul class="process-list">
                                    <li>Cross-browser testing</li>
                                    <li>Responsive testing</li>
                                    <li>Performance validation</li>
                                    <li>SEO verification</li>
                                    <li>Launch & post-launch support</li>
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
                        <h2>Modern Web Technologies</h2>
                        <p class="lead">Advanced technologies we implement in website modernization projects</p>
                    </div>
                </div>
                
                <div class="platforms-grid">
                    <div class="platform-item" data-aos="fade-up">
                        <div class="platform-card">
                            <h3>Frontend Technologies</h3>
                            <ul>
                                <li>HTML5</li>
                                <li>CSS3 & Advanced Animations</li>
                                <li>Modern JavaScript (ES6+)</li>
                                <li>React/Vue/Angular</li>
                                <li>Progressive Web Apps</li>
                                <li>Responsive Frameworks</li>
                                <li>WebP & Next-Gen Formats</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="platform-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="platform-card">
                            <h3>Modern CMS Platforms</h3>
                            <ul>
                                <li>WordPress (Latest)</li>
                                <li>Drupal 9/10</li>
                                <li>Headless CMS Options</li>
                                <li>Jamstack Architecture</li>
                                <li>Static Site Generators</li>
                                <li>E-commerce Platforms</li>
                                <li>Custom CMS Solutions</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="platform-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="platform-card">
                            <h3>Performance Technologies</h3>
                            <ul>
                                <li>CDN Integration</li>
                                <li>Advanced Caching</li>
                                <li>Lazy Loading</li>
                                <li>Modern Image Formats</li>
                                <li>Minification & Bundling</li>
                                <li>HTTP/2 & HTTP/3</li>
                                <li>Serverless Functions</li>
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
                    <h2>Benefits of Website Modernization</h2>
                    <p class="section-lead">Why modernizing your existing website is a smart business decision</p>
                </div>
                
                <div class="benefits-grid">
                    <div class="benefit-card-wrapper primary-benefit" data-aos="fade-right" data-aos-duration="800">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-search"></i>
                            </div>
                            <h3>Improved Search Rankings</h3>
                            <p>Modernization implements current SEO best practices while preserving existing search equity.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge">Retain domain authority</span>
                                <span class="stat-badge">Meet modern SEO requirements</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="benefit-card-wrapper secondary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                        <div class="benefit-card">
                            <div class="benefit-icon secondary-icon">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            <h3>Enhanced User Experience</h3>
                            <p>Modern interfaces and responsive design dramatically improve how users interact with your site.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge secondary-badge">40% improvement in navigation efficiency</span>
                                <span class="stat-badge secondary-badge">Reduced bounce rates by up to 35%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="benefit-card-wrapper tertiary-benefit" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                        <div class="benefit-card">
                            <div class="benefit-icon tertiary-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <h3>Mobile Compatibility</h3>
                            <p>Reach the growing majority of users who browse on smartphones and tablets.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge tertiary-badge">60%+ of web traffic comes from mobile devices</span>
                                <span class="stat-badge tertiary-badge">Google's mobile-first indexing</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="benefit-card-wrapper quaternary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">
                        <div class="benefit-card">
                            <div class="benefit-icon quaternary-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h3>Improved Security</h3>
                            <p>Upgrade to modern security standards to protect your site and your users' data.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge quaternary-badge">HTTPS implementation</span>
                                <span class="stat-badge quaternary-badge">Protection from common vulnerabilities</span>
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
                    <h2>Ready to Modernize Your Website?</h2>
                    <p class="lead">Let's transform your outdated site into a modern digital experience that impresses visitors and drives results.</p>
                    <a href="/pages/contact.php" class="cta-btn animate-pulse-slow">
                        Start Your Modernization Project
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
                        <p class="lead">Common questions about website modernization</p>
                    </div>
                </div>
                <div class="faq-container">
                    <div class="faq-item active">
                        <div class="faq-question">
                            <h3>How do I know if my website needs modernization?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Several indicators suggest your website may benefit from modernization:</p>
                            <ul>
                                <li><strong>Aging Design:</strong> If your website was designed more than 3-5 years ago, it likely doesn't reflect current design standards and user expectations.</li>
                                <li><strong>Poor Mobile Experience:</strong> If your site isn't fully responsive or delivers a subpar experience on mobile devices, modernization is critical given that most web traffic now comes from mobile users.</li>
                                <li><strong>Declining Performance Metrics:</strong> Increasing bounce rates, decreasing time on site, or declining conversion rates often indicate that users find your site frustrating or outdated.</li>
                                <li><strong>Slow Loading Speed:</strong> Modern websites should load in under 3 seconds. If yours takes longer, you're likely losing visitors and search ranking.</li>
                                <li><strong>Difficult Content Management:</strong> If updating content requires developer assistance or complex processes, a modern CMS implementation could significantly improve efficiency.</li>
                                <li><strong>Legacy Technology:</strong> Sites built with older technologies like Flash, outdated JavaScript libraries, or deprecated PHP versions pose security risks and compatibility issues.</li>
                            </ul>
                            <p>We offer a free website assessment that evaluates these factors and provides specific recommendations for modernization priorities based on your business goals and current website state.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Will modernization affect my website's SEO and search rankings?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>When done correctly, website modernization should positively impact your SEO and search rankings. Our approach prioritizes SEO preservation and enhancement:</p>
                            <ul>
                                <li><strong>URL Structure Preservation:</strong> We maintain your existing URL structure where possible or implement proper 301 redirects to preserve link equity when URLs must change.</li>
                                <li><strong>Content Migration:</strong> We carefully transfer and optimize your existing content, preserving valuable SEO elements like meta descriptions, alt tags, and heading structure.</li>
                                <li><strong>Technical SEO Improvements:</strong> Modernization includes implementing current technical SEO best practices, from proper semantic HTML5 structure to schema markup.</li>
                                <li><strong>Mobile Optimization:</strong> Modern responsive design improves your site's performance in Google's mobile-first indexing.</li>
                                <li><strong>Page Speed Enhancement:</strong> Faster loading times directly impact search rankings and user experience.</li>
                                <li><strong>Enhanced User Metrics:</strong> Improved usability leads to better user engagement metrics (reduced bounce rate, increased time on site), which search engines consider when ranking sites.</li>
                            </ul>
                            <p>We closely monitor search performance before, during, and after the modernization process to quickly address any potential issues. Most clients see gradual improvement in search visibility following modernization as search engines recognize the improved user experience and technical foundations.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How long does a website modernization project typically take?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>The timeline for website modernization varies based on several factors:</p>
                            <ul>
                                <li><strong>Website Size and Complexity:</strong> A small brochure site might be modernized in 4-6 weeks, while a large e-commerce site or complex web application could take 3-6 months.</li>
                                <li><strong>Scope of Changes:</strong> A visual refresh while keeping the same platform requires less time than a complete platform migration with extensive functional changes.</li>
                                <li><strong>Content Volume:</strong> Sites with hundreds or thousands of pages require more time for content migration and optimization.</li>
                                <li><strong>Integration Requirements:</strong> Connections to third-party systems, CRMs, payment processors, or other services add complexity and time.</li>
                                <li><strong>Approval Processes:</strong> The time needed for client reviews, feedback cycles, and stakeholder approvals affects the overall timeline.</li>
                            </ul>
                            <p>Our process begins with a thorough assessment that results in a detailed project timeline with key milestones. We typically work in phases, often starting with the most critical or visible sections of your site. This approach allows for partial launches when appropriate, bringing benefits sooner while work continues on other areas.</p>
                            <p>For businesses concerned about downtime, we develop your modernized site on a staging environment and only switch over when everything is tested and ready, minimizing disruption to your online presence.</p>
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
