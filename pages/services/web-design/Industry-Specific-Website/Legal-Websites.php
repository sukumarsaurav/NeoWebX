<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';

// Page specific content
$pageTitle = "Legal Website Design Services | NeoWebX";
$pageDescription = "Create authoritative, client-focused law firm websites that establish credibility and generate qualified leads. Professional website design for attorneys, law firms, and legal service providers.";
$serviceName = "Legal Website Design";
$serviceSlug = "legal-websites";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'legal website design, law firm website development, attorney websites, lawyer website design, legal practice websites, law office web design, legal service websites, legal case management portals'
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
                        <h1>Legal Website <span class="highlight">Design</span></h1>
                        <p class="lead">Create authoritative, client-centered websites that establish credibility and convert visitors into clients</p>
                        <div class="hero-buttons">
                            <a href="/pages/contact.php" class="btn btn-primary">Start Your Legal Project</a>
                            <a href="/portfolio" class="btn btn-outline">View Portfolio</a>
                        </div>
                    </div>
                    <div class="hero-image" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                        <div class="image-glow"></div>
                        <img src="/assets/images/services/legal-website-design.svg" alt="Legal Website Design" class="floating-image">
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
                    <h2>Expert Legal Website Design Services</h2>
                    <p class="section-lead">We create sophisticated legal websites that combine professional credibility with user-focused design to attract qualified clients and grow your practice.</p>
                </div>
                
                <div class="overview-grid">
                    <div class="overview-card primary-card" data-aos="fade-right" data-aos-duration="800">
                        <div class="card-decoration"></div>
                        <h3>Professional Authority & Digital Excellence</h3>
                        <p>Our team specializes in developing websites for law firms and legal professionals that establish authority while offering intuitive experiences for potential clients. We understand the unique challenges of the legal industry – from strict ethical guidelines to clear communication of complex services and practice areas.</p>
                        <p>Every legal website we design is built with meticulous attention to professional presentation, credibility signals, and lead generation while incorporating the latest web technologies for optimal performance and client engagement.</p>
                    </div>
                    
                    <div class="overview-card secondary-card" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                        <div class="card-decoration"></div>
                        <h3>Client-Centered Design Philosophy</h3>
                        <p>We create legal websites with a focus on the client journey, developing user experiences that address anxieties, answer critical questions, and provide clear pathways to contact. Our client-first approach ensures that visitors can easily find practice areas, understand your expertise, and take confident next steps.</p>
                        <p>By combining legal industry understanding with UX best practices, we develop digital experiences that build trust, differentiate your practice, and ultimately convert qualified prospects into consultations and clients.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section">
            <div class="container">
                <div class="section-header">
                    <div class="services-header" data-aos="fade-up">
                        <h2>Our Legal Website Design Services</h2>
                        <p class="lead">Comprehensive web solutions tailored to the unique needs of legal professionals</p>
                    </div>
                </div>
                
                <div class="services-grid">
                    <div class="service-item" data-aos="fade-up">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <h3>Law Firm Websites</h3>
                            <p>Professional websites for law firms of all sizes that establish authority, showcase expertise, and generate qualified client inquiries.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Attorney profiles & credentials</li>
                                <li><i class="fas fa-check"></i> Practice area pages</li>
                                <li><i class="fas fa-check"></i> Case results & testimonials</li>
                                <li><i class="fas fa-check"></i> Content marketing strategy</li>
                                <li><i class="fas fa-check"></i> Lead capture optimization</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h3>Solo Practitioner Sites</h3>
                            <p>Personalized websites for individual attorneys that highlight unique expertise and facilitate direct client connections.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Personal branding</li>
                                <li><i class="fas fa-check"></i> Niche specialization highlight</li>
                                <li><i class="fas fa-check"></i> Reputation management</li>
                                <li><i class="fas fa-check"></i> Client scheduling integration</li>
                                <li><i class="fas fa-check"></i> Mobile-optimized design</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-gavel"></i>
                            </div>
                            <h3>Client Portal Integration</h3>
                            <p>Secure client communication and case management platforms that enhance service delivery and client satisfaction.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Secure messaging system</li>
                                <li><i class="fas fa-check"></i> Document sharing</li>
                                <li><i class="fas fa-check"></i> Case status tracking</li>
                                <li><i class="fas fa-check"></i> E-signature integration</li>
                                <li><i class="fas fa-check"></i> Billing & payment processing</li>
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
                    <h2>Our Legal Website Design Process</h2>
                    <p class="section-lead">A strategic approach to creating authoritative, high-converting legal websites</p>
                </div>
                
                <div class="process-timeline">
                    <!-- Timeline Line -->
                    <div class="timeline-line"></div>
                    
                    <div class="process-grid">
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800">
                            <div class="process-number">1</div>
                            <div class="process-card">
                                <h3>Discovery & Strategy</h3>
                                <p>We begin with a thorough assessment of your legal practice needs, target clients, and competitive landscape.</p>
                                <ul class="process-list">
                                    <li>Practice analysis and differentiator identification</li>
                                    <li>Target client persona development</li>
                                    <li>Competitive legal market research</li>
                                    <li>Practice area prioritization</li>
                                    <li>Ethical compliance planning</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                            <div class="process-number">2</div>
                            <div class="process-card">
                                <h3>Design & UX Planning</h3>
                                <p>Our designers create professional interfaces that establish authority and guide potential clients toward conversion.</p>
                                <ul class="process-list">
                                    <li>Information architecture for practice areas</li>
                                    <li>Attorney bio presentation strategy</li>
                                    <li>Visual design with professional legal aesthetics</li>
                                    <li>Client journey mapping and conversion paths</li>
                                    <li>Accessibility compliance for ADA standards</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="process-number">3</div>
                            <div class="process-card">
                                <h3>Development & Content</h3>
                                <p>We build feature-rich legal websites with persuasive content and client-focused functionality.</p>
                                <ul class="process-list">
                                    <li>Responsive development for all devices</li>
                                    <li>SEO-optimized content for practice areas</li>
                                    <li>Case result and testimonial presentation</li>
                                    <li>Lead capture form implementation</li>
                                    <li>Legal CRM and practice management integration</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                            <div class="process-number">4</div>
                            <div class="process-card">
                                <h3>Launch & Optimization</h3>
                                <p>We ensure your legal website performs optimally and drives client acquisition.</p>
                                <ul class="process-list">
                                    <li>Compliance with bar association guidelines</li>
                                    <li>Consultation request form testing</li>
                                    <li>Local SEO implementation</li>
                                    <li>Analytics and conversion tracking</li>
                                    <li>Content marketing strategy deployment</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Compliance Section -->
        <section class="compliance-section">
            <div class="container">
                <div class="section-header">
                    <div class="compliance-header" data-aos="fade-up">
                        <h2>Legal Ethics & Compliance</h2>
                        <p class="lead">Our legal websites adhere to professional standards and bar association requirements</p>
                    </div>
                </div>
                
                <div class="content-row">
                    <div class="content-col one-half margin-bottom-4" data-aos="fade-up">
                        <div class="compliance-card height-100 padding-4 bg-white rounded box-shadow-sm">
                            <div class="compliance-icon margin-bottom-3">
                                <i class="fas fa-gavel fa-2x color-primary"></i>
                            </div>
                            <h4>Advertising Rules Compliance</h4>
                            <ul class="compliance-list">
                                <li><i class="fas fa-check text-primary me-2"></i>State bar advertising guideline adherence</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Proper disclaimer implementation</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Ethical representation of case results</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Testimonial usage compliance</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Specialization claim governance</li>
                            </ul>
                        </div>
                    </div>
                    <div class="content-col one-half margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="compliance-card height-100 padding-4 bg-white rounded box-shadow-sm">
                            <div class="compliance-icon margin-bottom-3">
                                <i class="fas fa-shield-alt fa-2x color-primary"></i>
                            </div>
                            <h4>Client Confidentiality & Security</h4>
                            <ul class="compliance-list">
                                <li><i class="fas fa-check text-primary me-2"></i>Secure contact form implementation</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Client-attorney privilege preservation</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Data protection & encryption</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Secure client portal development</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Privacy policy customization</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="features-section">
            <div class="container">
                <div class="section-header">
                    <div class="features-header" data-aos="fade-up">
                        <h2>Essential Features for Legal Websites</h2>
                        <p class="lead">Key components that enhance credibility and streamline client acquisition</p>
                    </div>
                </div>
                <div class="features-grid">
                    <div class="feature-item" data-aos="fade-up">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-user-friends"></i>
                            </div>
                            <h3>Attorney Profiles</h3>
                            <p>Compelling attorney bios that highlight expertise, education, achievements, and personal approach to client representation. Includes professional photography and video introductions.</p>
                        </div>
                    </div>
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <h3>Case Results & Testimonials</h3>
                            <p>Ethically presented case outcomes and client testimonials that demonstrate track record and client satisfaction, with appropriate disclaimers and compliance with bar rules.</p>
                        </div>
                    </div>
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-file-signature"></i>
                            </div>
                            <h3>Client Intake Forms</h3>
                            <p>Secure, user-friendly intake forms that gather essential case information while establishing attorney-client relationship parameters and confidentiality.</p>
                        </div>
                    </div>
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-comments"></i>
                            </div>
                            <h3>Live Chat Integration</h3>
                            <p>Professional live chat functionality with ethical disclaimers that enables potential clients to ask questions and schedule consultations outside of office hours.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="benefits-section">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Benefits of Professional Legal Website Design</h2>
                    <p class="section-lead">Why investing in a specialized legal website matters</p>
                </div>
                
                <div class="benefits-grid">
                    <div class="benefit-card-wrapper primary-benefit" data-aos="fade-right" data-aos-duration="800">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <h3>Higher-Value Client Acquisition</h3>
                            <p>Law firms with professionally designed websites report generating 67% more qualified leads than those with generic or outdated sites. Effective practice area pages and strategic calls-to-action convert 3.5x more visitors into consultation requests.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge">67% more leads</span>
                                <span class="stat-badge">3.5x higher conversion</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="benefit-card-wrapper secondary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                        <div class="benefit-card">
                            <div class="benefit-icon secondary-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <h3>Enhanced Professional Credibility</h3>
                            <p>Studies show that 83% of potential legal clients judge a firm's expertise based on website quality. Attorneys with professional websites are perceived as 57% more credible than competitors with outdated sites.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge secondary-badge">83% better perception</span>
                                <span class="stat-badge secondary-badge">57% more credibility</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="benefit-card-wrapper tertiary-benefit" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                        <div class="benefit-card">
                            <div class="benefit-icon tertiary-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h3>Improved Client Experience</h3>
                            <p>Law firms using client portals and digital intake systems save an average of 8-12 hours per week on administrative tasks. Digital client resources reduce common questions by 35%.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge tertiary-badge">8-12 hours saved weekly</span>
                                <span class="stat-badge tertiary-badge">35% fewer questions</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="benefit-card-wrapper quaternary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">
                        <div class="benefit-card">
                            <div class="benefit-icon quaternary-icon">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <h3>Competitive Advantage in Legal Markets</h3>
                            <p>Law firms with modern, client-focused websites capture 43% more market share in their practice areas compared to competitors. Strategic content marketing generates 2.3x more organic traffic and positions attorneys as thought leaders.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge quaternary-badge">43% more market share</span>
                                <span class="stat-badge quaternary-badge">2.3x more organic traffic</span>
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
                    <h2>Ready to Create Your Legal Website?</h2>
                    <p class="lead">Let's build an authoritative digital presence that attracts clients and showcases your legal expertise.</p>
                    <a href="/pages/contact.php" class="cta-btn animate-pulse-slow">
                        Schedule a Consultation
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
                        <p class="lead">Common questions about legal website design</p>
                    </div>
                </div>
                <div class="faq-container">
                    <div class="faq-item active">
                        <div class="faq-question">
                            <h3>How do you handle compliance with various state bar advertising rules?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>We implement a comprehensive state-specific compliance approach for legal websites:</p>
                            <ul>
                                <li><strong>State-Specific Research:</strong> We research and document the advertising rules for each jurisdiction where you practice, creating a compliance checklist specific to your website.</li>
                                <li><strong>Strategic Disclaimer System:</strong> We develop a strategic system of disclaimers that appear contextually throughout the website, including practice area pages, case results, testimonials, and specialization claims.</li>
                                <li><strong>Content Review Process:</strong> We establish a review process for all website content to ensure compliance with ethical guidelines, including proper representation of services, avoidance of guarantees, and accurate credentials.</li>
                                <li><strong>Documentation:</strong> We provide documentation of compliance measures to help you demonstrate good faith adherence to bar rules in the event of questions.</li>
                            </ul>
                            <p>Our team stays updated on changing bar association rules and can implement necessary updates to keep your website compliant as regulations evolve. We balance ethical requirements with effective marketing strategies to create websites that generate business while adhering to professional standards.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What content performs best on legal websites for attracting clients?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>The most effective legal website content combines educational value with strategic conversion elements:</p>
                            <ul>
                                <li><strong>Comprehensive Practice Area Pages:</strong> Detailed, educational content about specific practice areas that demonstrates expertise and answers potential client questions. These pages should include case scenarios, legal processes, and clear next steps.</li>
                                <li><strong>FAQ-Based Content:</strong> Question-and-answer format content that directly addresses common client concerns ranks well in search and matches how people search for legal help (e.g., "How long do I have to file a personal injury claim in [state]?").</li>
                                <li><strong>Process Explanations:</strong> Step-by-step explanations of legal processes that reduce anxiety and set expectations (e.g., "What to Expect During Your Divorce Case").</li>
                                <li><strong>Value-Focused Case Results:</strong> Case studies that focus on client problems solved rather than just monetary outcomes. These demonstrate your approach and problem-solving abilities.</li>
                                <li><strong>Local Content:</strong> Content specific to local courts, procedures, and legal environments that demonstrates your familiarity with local practice.</li>
                                <li><strong>Video Content:</strong> Attorney profile videos and educational videos have particularly high engagement rates, with viewers being 64% more likely to contact a firm after watching an attorney video.</li>
                            </ul>
                            <p>We develop a content strategy for your website that balances immediate lead generation needs with long-term authority building, focusing on the specific content types that align with your practice areas and target clients.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Can you integrate legal practice management systems with our website?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we specialize in integrating legal websites with practice management systems to create efficient client acquisition workflows:</p>
                            <ul>
                                <li><strong>CRM/Practice Management Integration:</strong> We can connect your website forms and intake processes with major systems including Clio, MyCase, PracticePanther, Rocket Matter, LawRuler, and others.</li>
                                <li><strong>Intake Form Automation:</strong> Customized intake forms that automatically populate your practice management system, creating new contacts and matters without manual data entry.</li>
                                <li><strong>Calendar Integration:</strong> Appointment scheduling tools that sync with your practice calendar and automatically send reminders to reduce no-shows.</li>
                                <li><strong>Document Automation:</strong> Systems for clients to securely upload documents directly into your document management system.</li>
                                <li><strong>E-Signature Integration:</strong> Seamless connections with DocuSign, HelloSign, or similar platforms for engagement letters and other agreements.</li>
                                <li><strong>Payment Processing:</strong> Integration with LawPay or similar legal-specific payment processors for retainers and invoices.</li>
                            </ul>
                            <p>These integrations create a seamless experience from initial client contact through retention and case management, saving administrative time and reducing the risk of data entry errors. We configure all integrations with appropriate security measures to maintain client confidentiality.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do you approach SEO for competitive legal markets?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Our approach to legal SEO in competitive markets focuses on strategic differentiation and local relevance:</p>
                            <ul>
                                <li><strong>Practice Area Specialization:</strong> Developing deep, authoritative content in specific niches within your practice areas rather than competing for broad terms. This creates topical authority and targets less competitive terms with higher conversion potential.</li>
                                <li><strong>Geographical Targeting:</strong> Implementing advanced local SEO strategies including neighborhood/district-specific pages, county-level content, and local schema markup to dominate specific geographic segments.</li>
                                <li><strong>Local Business Schema:</strong> Implementing specialized legal business schema markup that highlights attorney credentials, practice areas, and location information for enhanced search visibility.</li>
                                <li><strong>E-A-T Signals Enhancement:</strong> Building expertise, authoritativeness, and trustworthiness signals through attorney authorship of content, credentials highlighting, and proper attribution of legal information.</li>
                                <li><strong>Strategic Link Building:</strong> Developing relationships with legal directories, local business associations, and relevant organizations to build authoritative backlinks.</li>
                                <li><strong>Content Publication Strategy:</strong> Creating a consistent publication calendar of informational content that targets specific client questions and problems within your practice areas.</li>
                            </ul>
                            <p>We conduct thorough competitive analysis of your specific market to identify gaps and opportunities, then develop a custom SEO strategy focused on areas where we can achieve meaningful visibility and qualified traffic, rather than pursuing overly competitive terms with low ROI potential.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What is the typical timeline for developing a legal website?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>The development timeline for a professional legal website typically follows this schedule:</p>
                            <ul>
                                <li><strong>Discovery & Planning (2-3 weeks):</strong> Practice analysis, competitor research, goal setting, and project planning. This phase includes several meetings with key stakeholders to understand your practice thoroughly.</li>
                                <li><strong>Design Phase (3-4 weeks):</strong> Creation of wireframes, visual design concepts, and UI/UX planning. This phase includes presentation of design concepts, feedback rounds, and refinement of the chosen direction.</li>
                                <li><strong>Content Development (4-6 weeks):</strong> Creation of practice area content, attorney profiles, and other key pages. This phase often runs concurrently with design and development and may be the most variable depending on your involvement in content creation and review.</li>
                                <li><strong>Development Phase (4-5 weeks):</strong> Building the website structure, functionality, and integrations. This includes responsive implementation, form creation, and CRM integration.</li>
                                <li><strong>Testing & Refinement (2 weeks):</strong> Quality assurance, browser testing, and content review for compliance and accuracy.</li>
                                <li><strong>Launch Preparation (1 week):</strong> Final reviews, analytics setup, and launch planning.</li>
                            </ul>
                            <p>In total, a comprehensive legal website typically takes 12-16 weeks from kickoff to launch, with the most variable factor being content development time. We can accommodate expedited timelines when necessary, and provide a detailed project schedule at the beginning of the process so all stakeholders understand the timeline and their responsibilities.</p>
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
