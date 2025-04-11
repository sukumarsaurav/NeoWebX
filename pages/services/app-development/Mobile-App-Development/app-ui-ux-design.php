<?php
define('BASEPATH', true);
require_once '../../../../includes/config.php';

// SEO Data
$pageTitle = "Mobile App UI/UX Design Services | NeoWebX";
$pageDescription = "Create engaging and intuitive mobile app experiences with our expert UI/UX design services. We combine aesthetics with functionality to deliver user-centered mobile applications.";
$serviceName = "Mobile App UI/UX Design";
$serviceSlug = "app-ui-ux-design";

$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'mobile app design, ui design, ux design, user interface, user experience, app wireframes, mobile app prototypes, interaction design, visual design'
];

include_once '../../../../components/header.php';
?>

<main>
    <!-- Page Header -->
    <section class="hero-section">
        <div class="blob-1"></div>
        <div class="blob-2"></div>
        <div class="circle-1"></div>
        <div class="circle-2"></div>
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content" data-aos="fade-right">
                    <span class="service-category">Mobile App Development</span>
                    <h1><?php echo $serviceName; ?></h1>
                    <p class="lead"><?php echo $pageDescription; ?></p>
                    <div class="hero-buttons">
                        <a href="/pages/contact.php" class="btn btn-primary">Start Your Design Project</a>
                        <a href="/pages/portfolio.php" class="btn btn-outline">View Portfolio</a>
                    </div>
                    <div class="tech-stack">
                        <span>Design Tools:</span>
                        <img src="/assets/images/tech/figma.png" alt="Figma" title="Figma">
                        <img src="/assets/images/tech/sketch.png" alt="Sketch" title="Sketch">
                        <img src="/assets/images/tech/adobe-xd.png" alt="Adobe XD" title="Adobe XD">
                        <img src="/assets/images/tech/invision.png" alt="InVision" title="InVision">
                    </div>
                </div>
                <div class="hero-image" data-aos="fade-left">
                    <img src="/assets/images/services/app-design.svg" alt="Mobile App UI/UX Design" class="floating-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Service Overview -->
    <section class="overview-section">
        <div class="container">
            <div class="section-header">
                <div class="overview-header" data-aos="fade-up">
                    <h2>Expert Mobile App Design Services</h2>
                    <p class="section-lead">We create user-centered designs that combine aesthetics with functionality to deliver exceptional mobile experiences that users love and businesses value.</p>
                </div>
            </div>
            
            <div class="overview-cards">
                <div class="overview-card primary-card" data-aos="fade-up">
                    <div class="card-icon">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <h3>User-Centered Design</h3>
                    <p>Our design process focuses on understanding user needs, behaviors, and preferences to create intuitive and engaging mobile experiences that solve real problems.</p>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> User research & personas</li>
                        <li><i class="fas fa-check-circle"></i> Journey mapping</li>
                        <li><i class="fas fa-check-circle"></i> Usability testing</li>
                    </ul>
                </div>
                
                <div class="overview-card secondary-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Platform-Specific Excellence</h3>
                    <p>We follow platform-specific design guidelines while maintaining brand consistency across iOS and Android applications for a native feel on each platform.</p>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> iOS Human Interface Guidelines</li>
                        <li><i class="fas fa-check-circle"></i> Material Design principles</li>
                        <li><i class="fas fa-check-circle"></i> Cross-platform consistency</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="section-header">
                <div class="services-header" data-aos="fade-up">
                    <h2>Our UI/UX Design Services</h2>
                    <p class="section-lead">Comprehensive mobile app design solutions tailored to your needs</p>
                </div>
            </div>
            
            <div class="services-grid">
                <div class="service-item" data-aos="fade-up">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-pencil-ruler"></i>
                        </div>
                        <h3>User Interface Design</h3>
                        <p>Create visually appealing and intuitive interfaces that enhance user engagement and reflect your brand identity.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Visual design</li>
                            <li><i class="fas fa-check"></i> Interaction design</li>
                            <li><i class="fas fa-check"></i> Design systems</li>
                            <li><i class="fas fa-check"></i> Brand integration</li>
                        </ul>
                    </div>
                </div>
                
                <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3>User Experience Design</h3>
                        <p>Design seamless user journeys that maximize engagement, satisfaction, and conversion rates for your business goals.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> User research</li>
                            <li><i class="fas fa-check"></i> Information architecture</li>
                            <li><i class="fas fa-check"></i> User flows</li>
                            <li><i class="fas fa-check"></i> Usability testing</li>
                        </ul>
                    </div>
                </div>
                
                <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <h3>Prototyping & Testing</h3>
                        <p>Create interactive prototypes to validate design decisions before development, saving time and resources.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Wireframing</li>
                            <li><i class="fas fa-check"></i> Interactive prototypes</li>
                            <li><i class="fas fa-check"></i> User testing</li>
                            <li><i class="fas fa-check"></i> Design iteration</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <div class="section-header">
                <div class="process-header" data-aos="fade-up">
                    <h2>Our Design Process</h2>
                    <p class="section-lead">A systematic approach to creating exceptional mobile app experiences</p>
                </div>
            </div>
            
            <div class="process-timeline">
                <!-- Timeline Line -->
                <div class="timeline-line"></div>
                
                <div class="process-grid">
                    <div class="process-card-wrapper" data-aos="fade-up">
                        <div class="process-number">1</div>
                        <div class="process-card">
                            <h3>Research & Discovery</h3>
                            <p>We begin by understanding your business goals, user needs, and market context to lay the foundation for a successful design.</p>
                            <ul class="process-list">
                                <li>Stakeholder interviews</li>
                                <li>User research & persona development</li>
                                <li>Competitive analysis</li>
                                <li>Market trend identification</li>
                            </ul>
                        </div>
                    </div>

                    <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="100">
                        <div class="process-number">2</div>
                        <div class="process-card">
                            <h3>UX Strategy</h3>
                            <p>We develop a comprehensive UX strategy that aligns with your business objectives and user needs.</p>
                            <ul class="process-list">
                                <li>Information architecture</li>
                                <li>User flow mapping</li>
                                <li>Wireframing</li>
                                <li>Functionality planning</li>
                            </ul>
                        </div>
                    </div>

                    <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="200">
                        <div class="process-number">3</div>
                        <div class="process-card">
                            <h3>UI Design</h3>
                            <p>We create visually stunning interfaces that bring your brand to life while ensuring optimal usability and accessibility.</p>
                            <ul class="process-list">
                                <li>Visual design style exploration</li>
                                <li>UI component creation</li>
                                <li>Design system development</li>
                                <li>Responsive layout design</li>
                            </ul>
                        </div>
                    </div>

                    <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="300">
                        <div class="process-number">4</div>
                        <div class="process-card">
                            <h3>Testing & Refinement</h3>
                            <p>We validate designs through user testing and refine based on feedback to ensure the final product exceeds expectations.</p>
                            <ul class="process-list">
                                <li>Interactive prototype creation</li>
                                <li>Usability testing</li>
                                <li>Design iteration</li>
                                <li>Developer handoff preparation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section class="technologies-section">
        <div class="container">
            <div class="section-header">
                <div class="technologies-header" data-aos="fade-up">
                    <h2>Design Tools We Use</h2>
                    <p class="section-lead">Industry-standard tools for mobile app design</p>
                </div>
            </div>
            
            <div class="tech-grid">
                <div class="tech-item" data-aos="fade-up">
                    <div class="tech-card">
                        <div class="tech-icon">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h3>Design Tools</h3>
                        <ul>
                            <li>Figma</li>
                            <li>Sketch</li>
                            <li>Adobe XD</li>
                            <li>Illustrator</li>
                            <li>Photoshop</li>
                        </ul>
                    </div>
                </div>
                
                <div class="tech-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="tech-card">
                        <div class="tech-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3>Prototyping Tools</h3>
                        <ul>
                            <li>InVision</li>
                            <li>Principle</li>
                            <li>ProtoPie</li>
                            <li>Framer</li>
                            <li>Marvel</li>
                        </ul>
                    </div>
                </div>
                
                <div class="tech-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="tech-card">
                        <div class="tech-icon">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <h3>Collaboration Tools</h3>
                        <ul>
                            <li>Zeplin</li>
                            <li>Abstract</li>
                            <li>Miro</li>
                            <li>Notion</li>
                            <li>Slack</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Design Standards Section -->
    <section class="standards-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Our Design Standards</h2>
                <p class="section-lead">How we ensure exceptional mobile app experiences</p>
            </div>
            
            <div class="standards-grid">
                <div class="standard-item" data-aos="fade-up">
                    <div class="standard-icon">
                        <i class="fas fa-universal-access"></i>
                    </div>
                    <h3>Accessibility</h3>
                    <ul class="standard-list">
                        <li>WCAG 2.1 compliance</li>
                        <li>Color contrast optimization</li>
                        <li>Screen reader compatibility</li>
                        <li>Alternative input methods</li>
                    </ul>
                </div>
                
                <div class="standard-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="standard-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Performance</h3>
                    <ul class="standard-list">
                        <li>Optimized assets</li>
                        <li>Efficient UI rendering</li>
                        <li>Reduced animation complexity</li>
                        <li>Battery usage consideration</li>
                    </ul>
                </div>
                
                <div class="standard-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="standard-icon">
                        <i class="fas fa-th-large"></i>
                    </div>
                    <h3>Consistency</h3>
                    <ul class="standard-list">
                        <li>Design system implementation</li>
                        <li>Component reusability</li>
                        <li>Pattern libraries</li>
                        <li>Cross-platform coherence</li>
                    </ul>
                </div>
                
                <div class="standard-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="standard-icon">
                        <i class="fas fa-hand-pointer"></i>
                    </div>
                    <h3>Usability</h3>
                    <ul class="standard-list">
                        <li>Intuitive navigation</li>
                        <li>One-handed usage optimization</li>
                        <li>Error prevention</li>
                        <li>Clear feedback mechanisms</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits-section">
        <div class="container">
            <div class="section-header">
                <div class="benefits-header" data-aos="fade-up">
                    <h2>Why Choose Our Design Services</h2>
                    <p class="section-lead">The business impact of professional UI/UX design for your mobile app</p>
                </div>
            </div>
            
            <div class="benefits-grid">
                <div class="benefit-card-wrapper primary-benefit" data-aos="fade-right" data-aos-duration="800">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3>Enhanced User Satisfaction</h3>
                        <p>Create engaging experiences that keep users coming back to your app. Well-designed apps show up to 90% higher user retention rates and 88% increase in user satisfaction scores.</p>
                        <div class="benefit-stats">
                            <span class="stat-badge">90% higher retention</span>
                            <span class="stat-badge">88% better satisfaction</span>
                        </div>
                    </div>
                </div>
                
                <div class="benefit-card-wrapper secondary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
                    <div class="benefit-card">
                        <div class="benefit-icon secondary-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Increased Conversion</h3>
                        <p>Design intuitive flows that guide users toward desired actions. Apps with professional UI/UX design report 75% higher conversion rates and 35% lower cart abandonment in e-commerce applications.</p>
                        <div class="benefit-stats">
                            <span class="stat-badge secondary-badge">75% better conversion</span>
                            <span class="stat-badge secondary-badge">35% less abandonment</span>
                        </div>
                    </div>
                </div>
                
                <div class="benefit-card-wrapper tertiary-benefit" data-aos="fade-right" data-aos-duration="800" data-aos-delay="200">
                    <div class="benefit-card">
                        <div class="benefit-icon tertiary-icon">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h3>Brand Consistency</h3>
                        <p>Maintain consistent brand identity across all platforms and touchpoints. Brands with consistent UI/UX across digital products show 33% higher brand recognition and 23% increased customer loyalty.</p>
                        <div class="benefit-stats">
                            <span class="stat-badge tertiary-badge">33% better recognition</span>
                            <span class="stat-badge tertiary-badge">23% increased loyalty</span>
                        </div>
                    </div>
                </div>
                
                <div class="benefit-card-wrapper quaternary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                    <div class="benefit-card">
                        <div class="benefit-icon quaternary-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Development Efficiency</h3>
                        <p>Detailed design specifications and prototypes reduce development time and rework. Projects with comprehensive design documentation show 40% fewer development iterations and 30% faster time-to-market.</p>
                        <div class="benefit-stats">
                            <span class="stat-badge quaternary-badge">40% less rework</span>
                            <span class="stat-badge quaternary-badge">30% faster delivery</span>
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
                <h2>Ready to Design Your Mobile App?</h2>
                <p class="lead">Let's create an exceptional user experience that delights your users and drives business results.</p>
                <a href="/pages/contact.php" class="cta-btn animate-pulse-slow">
                    Schedule a Design Consultation
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
                    <p class="section-lead">Common questions about mobile app UI/UX design</p>
                </div>
            </div>
            <div class="faq-container">
                <div class="faq-item active">
                    <div class="faq-question">
                        <h3>What's the difference between UI and UX design?</h3>
                        <button class="toggle-btn">
                            <i class="fas fa-chevron-down"></i>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>UI (User Interface) design focuses on the visual elements and interactions of your app - how it looks and feels. UX (User Experience) design focuses on the overall experience, including how users navigate, interact, and accomplish their goals within the app. Both aspects work together to create a successful mobile application.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you ensure designs work across different devices?</h3>
                        <button class="toggle-btn">
                            <i class="fas fa-chevron-down"></i>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>We follow responsive design principles and create designs that adapt to different screen sizes and orientations. We test designs across various devices and platforms to ensure consistency and usability. Our process includes creating device-specific adjustments while maintaining the core user experience.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you incorporate user feedback in the design process?</h3>
                        <button class="toggle-btn">
                            <i class="fas fa-chevron-down"></i>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>We conduct user testing throughout the design process, gathering feedback through prototypes, usability tests, and user interviews. This feedback helps us identify pain points, validate design decisions, and make improvements. We iterate on designs based on user insights to create the best possible experience.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>What deliverables can I expect from the design process?</h3>
                        <button class="toggle-btn">
                            <i class="fas fa-chevron-down"></i>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>Our deliverables typically include user research findings, wireframes, visual designs, interactive prototypes, and design specifications for development. We also provide design systems and style guides to ensure consistency in implementation. All assets are organized and properly prepared for handoff to the development team.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include_once '../../../../components/footer.php';
?>

<script src="/assets/js/services.js"></script>
