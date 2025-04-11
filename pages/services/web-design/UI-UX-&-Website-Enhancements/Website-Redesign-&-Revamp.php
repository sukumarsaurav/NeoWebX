<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';

// Page specific content
$pageTitle = "Website Redesign & Revamp Services | NeoWebX";
$pageDescription = "Transform your outdated website into a modern, high-performing digital asset. Our website redesign and revamp services refresh your online presence while improving user experience and conversion rates.";
$serviceName = "Website Redesign & Revamp";
$serviceSlug = "website-redesign-revamp";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'website redesign, website revamp, website refresh, website makeover, website modernization, website renovation, UX redesign, conversion optimization redesign'
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
                        <h1>Website Redesign & <span class="highlight">Revamp</span></h1>
                        <p class="lead">Transform your outdated site into a modern, conversion-focused digital experience</p>
                        <div class="hero-buttons">
                            <a href="/pages/contact.php" class="btn btn-primary">Discuss Your Redesign</a>
                            <a href="/portfolio" class="btn btn-outline">View Our Work</a>
                        </div>
                    </div>
                    <div class="hero-image" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                        <div class="image-glow"></div>
                        <img src="/assets/images/services/website-redesign.svg" alt="Website Redesign and Revamp" class="floating-image">
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
                    <h2>Breathe New Life Into Your Website</h2>
                    <p class="section-lead">Strategic website revamps that drive performance and results</p>
                </div>
                
                <div class="overview-grid">
                    <div class="overview-card primary-card" data-aos="fade-right" data-aos-duration="800">
                        <div class="card-decoration"></div>
                        <h3>When Is It Time For a Redesign?</h3>
                        <p>Websites age quickly in the digital era. If your site is more than 2-3 years old, you're likely falling behind in user expectations, technology, and design trends. Other warning signs include declining traffic, poor conversion rates, high bounce rates, and a design that doesn't reflect your current brand identity.</p>
                        <p>A comprehensive website redesign isn't just about aesthetics—it's a strategic business investment that can revitalize your digital presence, improve user experience, boost search engine performance, and drive better business results. Our redesign services address both the visible aspects users interact with and the underlying technical structure that affects performance and security.</p>
                    </div>
                    
                    <div class="overview-card secondary-card" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                        <div class="card-decoration"></div>
                        <h3>Our Strategic Redesign Approach</h3>
                        <p>We don't just make your website look better—we make it work better. Our comprehensive approach begins with thorough data analysis and user research to understand what's working and what isn't on your current site. We identify opportunities to enhance user experience, streamline paths to conversion, and better communicate your brand value.</p>
                        <p>With clear goals established, we develop a strategic redesign plan that aligns with your business objectives, preserves your SEO equity, and addresses both immediate improvements and long-term scalability. Our collaborative process ensures your team is involved throughout, while our technical expertise delivers a final product that exceeds expectations in both form and function.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section">
            <div class="container">
                <div class="section-header">
                    <div class="services-header" data-aos="fade-up">
                        <h2>Our Website Redesign Services</h2>
                        <p class="lead">Comprehensive solutions to transform your digital presence</p>
                    </div>
                </div>
                
                <div class="services-grid">
                    <div class="service-item" data-aos="fade-up">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3>Performance-Focused Redesign</h3>
                            <p>Data-driven website revamps that enhance user experience and drive higher conversion rates.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Conversion rate optimization</li>
                                <li><i class="fas fa-check"></i> User journey enhancement</li>
                                <li><i class="fas fa-check"></i> Analytics implementation</li>
                                <li><i class="fas fa-check"></i> A/B testing infrastructure</li>
                                <li><i class="fas fa-check"></i> Heat mapping integration</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-paint-brush"></i>
                            </div>
                            <h3>Visual Revitalization</h3>
                            <p>Modern, on-brand visual updates that create memorable impressions while improving usability.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Brand identity refresh</li>
                                <li><i class="fas fa-check"></i> UI modernization</li>
                                <li><i class="fas fa-check"></i> Typography enhancement</li>
                                <li><i class="fas fa-check"></i> Color scheme optimization</li>
                                <li><i class="fas fa-check"></i> Visual hierarchy improvements</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-code"></i>
                            </div>
                            <h3>Technical Overhaul</h3>
                            <p>Comprehensive technical updates that improve performance, security, and maintainability.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Code refactoring & cleanup</li>
                                <li><i class="fas fa-check"></i> Technology stack modernization</li>
                                <li><i class="fas fa-check"></i> Security enhancements</li>
                                <li><i class="fas fa-check"></i> Speed optimization</li>
                                <li><i class="fas fa-check"></i> Mobile responsiveness</li>
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
                    <h2>Our Website Redesign Process</h2>
                    <p class="section-lead">A methodical approach to transforming your digital presence</p>
                </div>
                
                <div class="process-timeline">
                    <!-- Timeline Line -->
                    <div class="timeline-line"></div>
                    
                    <div class="process-grid">
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800">
                            <div class="process-number">1</div>
                            <div class="process-card">
                                <h3>Analysis & Discovery</h3>
                                <p>We evaluate your current website's performance, identify pain points, and establish redesign objectives.</p>
                                <ul class="process-list">
                                    <li>Current site audit</li>
                                    <li>Analytics review</li>
                                    <li>User research</li>
                                    <li>Competitor analysis</li>
                                    <li>Goal identification</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                            <div class="process-number">2</div>
                            <div class="process-card">
                                <h3>Strategy & Planning</h3>
                                <p>We create a comprehensive roadmap for your redesign that aligns with your business objectives.</p>
                                <ul class="process-list">
                                    <li>Information architecture</li>
                                    <li>Content strategy</li>
                                    <li>User flow optimization</li>
                                    <li>SEO migration planning</li>
                                    <li>Technology selection</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="process-number">3</div>
                            <div class="process-card">
                                <h3>Design & Prototyping</h3>
                                <p>We create the visual and interactive elements of your new website, iterating based on feedback.</p>
                                <ul class="process-list">
                                    <li>Wireframing</li>
                                    <li>Visual design</li>
                                    <li>Responsive prototyping</li>
                                    <li>User testing</li>
                                    <li>Stakeholder reviews</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                            <div class="process-number">4</div>
                            <div class="process-card">
                                <h3>Development & Launch</h3>
                                <p>We build, test, and deploy your redesigned website with minimal disruption to your business.</p>
                                <ul class="process-list">
                                    <li>Frontend development</li>
                                    <li>Backend integration</li>
                                    <li>Quality assurance testing</li>
                                    <li>SEO preservation</li>
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
                        <h2>Technologies & Platforms</h2>
                        <p class="lead">Modern tools and technologies we leverage for website redesigns</p>
                    </div>
                </div>
                
                <div class="platforms-grid">
                    <div class="platform-item" data-aos="fade-up">
                        <div class="platform-card">
                            <h3>Design & UX Tools</h3>
                            <ul>
                                <li>Figma</li>
                                <li>Adobe XD</li>
                                <li>Sketch</li>
                                <li>InVision</li>
                                <li>Hotjar</li>
                                <li>UserTesting</li>
                                <li>Optimal Workshop</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="platform-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="platform-card">
                            <h3>Development Technologies</h3>
                            <ul>
                                <li>HTML5/CSS3</li>
                                <li>JavaScript/TypeScript</li>
                                <li>React/Vue/Angular</li>
                                <li>WordPress/PHP</li>
                                <li>Shopify/WooCommerce</li>
                                <li>Node.js</li>
                                <li>GraphQL/REST APIs</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="platform-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="platform-card">
                            <h3>Performance & Analytics</h3>
                            <ul>
                                <li>Google Analytics</li>
                                <li>Google Tag Manager</li>
                                <li>Lighthouse</li>
                                <li>GTmetrix</li>
                                <li>WebPageTest</li>
                                <li>SEMrush</li>
                                <li>Ahrefs</li>
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
                    <h2>Benefits of Website Redesign</h2>
                    <p class="section-lead">How a strategic redesign transforms your digital performance</p>
                </div>
                
                <div class="benefits-grid">
                    <div class="benefit-card-wrapper primary-benefit" data-aos="fade-right" data-aos-duration="800">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3>Improved Conversion Rate</h3>
                            <p>Strategic UX enhancements and optimized user journeys lead to more inquiries, sign-ups, and sales.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge">25-100% conversion rate increases</span>
                                <span class="stat-badge">Higher quality leads</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="benefit-card-wrapper secondary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                        <div class="benefit-card">
                            <div class="benefit-icon secondary-icon">
                                <i class="fas fa-search"></i>
                            </div>
                            <h3>Better Search Visibility</h3>
                            <p>Modern code, faster load times, and improved content structure boost your search engine rankings.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge secondary-badge">Higher organic traffic</span>
                                <span class="stat-badge secondary-badge">Improved keyword rankings</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="benefit-card-wrapper tertiary-benefit" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                        <div class="benefit-card">
                            <div class="benefit-icon tertiary-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <h3>Enhanced Mobile Experience</h3>
                            <p>Responsive, mobile-first design ensures excellent experiences across all devices and screen sizes.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge tertiary-badge">50%+ of web traffic is mobile</span>
                                <span class="stat-badge tertiary-badge">Lower mobile bounce rates</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="benefit-card-wrapper quaternary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">
                        <div class="benefit-card">
                            <div class="benefit-icon quaternary-icon">
                                <i class="fas fa-paint-brush"></i>
                            </div>
                            <h3>Stronger Brand Perception</h3>
                            <p>Modern design and improved functionality project professionalism and build trust with visitors.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge quaternary-badge">94% of first impressions are design-related</span>
                                <span class="stat-badge quaternary-badge">Increased customer trust</span>
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
                    <h2>Ready to Transform Your Website?</h2>
                    <p class="lead">Let's turn your outdated site into a powerful business asset that drives results.</p>
                    <a href="/pages/contact.php" class="cta-btn animate-pulse-slow">
                        Request Your Free Redesign Consultation
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
                        <p class="lead">Common questions about website redesign projects</p>
                    </div>
                </div>
                <div class="faq-container">
                    <div class="faq-item active">
                        <div class="faq-question">
                            <h3>How do I know if my website needs a redesign?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Several key indicators suggest it's time for a website redesign:</p>
                            <ul>
                                <li><strong>Declining performance metrics:</strong> If your site's traffic, conversions, or engagement metrics are consistently dropping, your current design may not be meeting user expectations.</li>
                                <li><strong>Outdated visual design:</strong> If your website looks visibly dated compared to competitors or doesn't reflect your current brand identity, it can harm credibility.</li>
                                <li><strong>Poor mobile experience:</strong> If your site isn't fully responsive or provides a subpar mobile experience, you're likely losing a significant portion of potential customers.</li>
                                <li><strong>Slow load times:</strong> Modern users expect pages to load in under 3 seconds. Older websites often suffer from performance issues that drive visitors away.</li>
                                <li><strong>Difficult content management:</strong> If updating your website is cumbersome or requires technical assistance for basic changes, a redesign can improve efficiency.</li>
                                <li><strong>Business evolution:</strong> If your business offerings, target audience, or strategic goals have changed, your website should evolve to match.</li>
                                <li><strong>Technical limitations:</strong> If you're unable to implement needed features or integrations due to your current platform's limitations.</li>
                            </ul>
                            <p>We offer a comprehensive website audit that can objectively assess your current site and identify specific areas that would benefit from a redesign. This analysis provides concrete data to inform your decision-making process.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How long does a website redesign typically take?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>The timeline for a website redesign varies based on the size and complexity of your site, as well as the scope of changes needed. However, here's a general framework:</p>
                            <ul>
                                <li><strong>Small business websites (5-10 pages):</strong> 4-8 weeks</li>
                                <li><strong>Medium-sized websites (10-25 pages):</strong> 8-12 weeks</li>
                                <li><strong>Large websites or e-commerce sites:</strong> 12-16+ weeks</li>
                            </ul>
                            <p>Each phase of the process requires different timeframes:</p>
                            <ul>
                                <li><strong>Discovery & Strategy:</strong> 1-3 weeks</li>
                                <li><strong>Design & Prototyping:</strong> 2-4 weeks</li>
                                <li><strong>Development:</strong> 2-8 weeks</li>
                                <li><strong>Content Migration:</strong> 1-3 weeks</li>
                                <li><strong>Testing & Refinement:</strong> 1-2 weeks</li>
                                <li><strong>Launch Preparation & Deployment:</strong> 1-2 weeks</li>
                            </ul>
                            <p>Factors that can impact the timeline include the amount of custom functionality needed, the state of your existing content, the number of stakeholders involved in approvals, and whether you're changing platforms or content management systems.</p>
                            <p>We work with you to establish a realistic timeline based on your specific needs and can often implement a phased approach if you need certain elements completed more urgently.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Will a redesign affect my SEO and current rankings?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Website redesigns can impact your SEO, but with proper planning and implementation, we can preserve your current rankings and even improve them. Here's how we ensure a smooth SEO transition:</p>
                            <ul>
                                <li><strong>Comprehensive SEO Audit:</strong> Before making any changes, we thoroughly analyze your current SEO performance, identifying valuable keywords, top-performing pages, and existing backlinks.</li>
                                <li><strong>URL Structure Preservation:</strong> Whenever possible, we maintain your existing URL structure to preserve link equity. If URLs must change, we implement a proper 301 redirect strategy to transfer ranking power to new pages.</li>
                                <li><strong>Content Optimization:</strong> We preserve and enhance your valuable content, ensuring important keywords and themes remain while improving readability and engagement factors.</li>
                                <li><strong>Technical SEO Improvements:</strong> Our redesigns typically enhance technical SEO elements like page speed, mobile-friendliness, schema markup, and crawlability—all factors that can positively impact rankings.</li>
                                <li><strong>Metadata Migration:</strong> We carefully transfer and optimize title tags, meta descriptions, and other crucial SEO elements.</li>
                                <li><strong>XML Sitemap Updates:</strong> We create and submit updated XML sitemaps to search engines to facilitate proper indexing of your new site.</li>
                                <li><strong>Analytics Continuity:</strong> We ensure that tracking is maintained throughout the transition to avoid data loss in your analytics platforms.</li>
                            </ul>
                            <p>While there may be some temporary fluctuations immediately following launch (which is normal as search engines reindex your site), a properly executed redesign should maintain your SEO equity and set the foundation for improved rankings moving forward. We monitor performance closely post-launch and make any necessary adjustments to ensure optimal search visibility.</p>
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
