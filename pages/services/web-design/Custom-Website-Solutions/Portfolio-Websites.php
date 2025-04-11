<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';

// Page specific content
$pageTitle = "Portfolio Website Design Services | NeoWebX";
$pageDescription = "Showcase your work with a stunning portfolio website designed to highlight your talent and attract clients. Custom portfolio sites for creatives, artists, designers, and professionals.";
$serviceName = "Portfolio Website Design";
$serviceSlug = "portfolio-websites";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'portfolio website design, creative portfolio, artist portfolio website, designer portfolio, photography portfolio site, professional portfolio, online portfolio, digital showcase'
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
                        <h1>Portfolio Website <span class="highlight">Design</span></h1>
                        <p class="lead">Showcase your work with a stunning digital portfolio that captures attention and converts viewers into clients</p>
                        <div class="hero-buttons">
                            <a href="/pages/contact.php" class="btn btn-primary">Start Your Portfolio Project</a>
                            <a href="/pages/portfolio.php" class="btn btn-outline">View Our Work</a>
                        </div>
                    </div>
                    <div class="hero-image" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                        <div class="image-glow"></div>
                        <img src="/assets/images/services/portfolio-website.svg" alt="Portfolio Website Design" class="floating-image">
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
                    <h2>Custom Portfolio Website Design</h2>
                    <p class="section-lead">Elevate your personal brand with a captivating online portfolio that showcases your unique talents and attracts ideal clients</p>
                </div>
                
                <div class="overview-grid">
                    <div class="overview-card primary-card" data-aos="fade-right" data-aos-duration="800">
                        <div class="card-decoration"></div>
                        <h3>Showcase Your Best Work</h3>
                        <p>Your portfolio website is more than just a collection of work samples—it's your digital first impression and the centerpiece of your personal brand. We design portfolio websites that strategically highlight your best work while creating a memorable experience that resonates with your target audience.</p>
                        <p>From sophisticated gallery systems and case study layouts to customized filtering and categorization, we create the perfect structure to showcase your unique talents, whether you're a photographer, designer, artist, writer, developer, or other creative professional.</p>
                    </div>
                    
                    <div class="overview-card secondary-card" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                        <div class="card-decoration"></div>
                        <h3>Turn Viewers Into Clients</h3>
                        <p>A great portfolio doesn't just display work—it generates opportunities. We design portfolio websites with strategic conversion paths that guide visitors from admiring your work to taking action, whether that's contacting you for a project, downloading your resume, or subscribing for updates.</p>
                        <p>Through thoughtful user experience design, compelling storytelling, and strategic placement of calls-to-action, we ensure your portfolio website works as hard as you do to attract and convert your ideal clients or employers.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section">
            <div class="container">
                <div class="section-header">
                    <div class="services-header" data-aos="fade-up">
                        <h2>Our Portfolio Website Design Services</h2>
                        <p class="lead">Tailored solutions for creatives and professionals of all disciplines</p>
                    </div>
                </div>
                
                <div class="services-grid">
                    <div class="service-item" data-aos="fade-up">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-paint-brush"></i>
                            </div>
                            <h3>Creative Professional Portfolios</h3>
                            <p>Eye-catching, innovative portfolio websites for designers, artists, photographers, and other creative professionals.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> High-impact visual galleries</li>
                                <li><i class="fas fa-check"></i> Interactive experience design</li>
                                <li><i class="fas fa-check"></i> Customized project showcases</li>
                                <li><i class="fas fa-check"></i> Brand-aligned aesthetics</li>
                                <li><i class="fas fa-check"></i> Creative navigation systems</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <h3>Professional Career Portfolios</h3>
                            <p>Sophisticated digital portfolios for executives, consultants, and industry professionals seeking to advance their careers.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Achievement-focused layouts</li>
                                <li><i class="fas fa-check"></i> Testimonial showcases</li>
                                <li><i class="fas fa-check"></i> Resume integration</li>
                                <li><i class="fas fa-check"></i> Professional branding</li>
                                <li><i class="fas fa-check"></i> LinkedIn & social integration</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-building"></i>
                            </div>
                            <h3>Agency & Studio Portfolios</h3>
                            <p>Comprehensive portfolio websites for creative agencies, studios, and small firms to showcase their collective work.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Team showcases</li>
                                <li><i class="fas fa-check"></i> Case study frameworks</li>
                                <li><i class="fas fa-check"></i> Service presentation</li>
                                <li><i class="fas fa-check"></i> Client testimonial systems</li>
                                <li><i class="fas fa-check"></i> Multi-project organization</li>
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
                    <h2>Our Portfolio Website Design Process</h2>
                    <p class="section-lead">A strategic approach to creating a portfolio that generates opportunities</p>
                </div>
                
                <div class="process-timeline">
                    <!-- Timeline Line -->
                    <div class="timeline-line"></div>
                    
                    <div class="process-grid">
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800">
                            <div class="process-number">1</div>
                            <div class="process-card">
                                <h3>Vision & Strategy</h3>
                                <p>We begin by understanding your unique style, target audience, and professional goals to develop a portfolio strategy.</p>
                                <ul class="process-list">
                                    <li>Portfolio goal definition</li>
                                    <li>Target audience analysis</li>
                                    <li>Personal brand exploration</li>
                                    <li>Competitive research</li>
                                    <li>Portfolio content planning</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                            <div class="process-number">2</div>
                            <div class="process-card">
                                <h3>Content & Curation</h3>
                                <p>We help you select and organize your best work, crafting compelling project presentations that tell your story.</p>
                                <ul class="process-list">
                                    <li>Project selection & curation</li>
                                    <li>Case study development</li>
                                    <li>Visual asset preparation</li>
                                    <li>Content creation</li>
                                    <li>Bio & about page development</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="process-number">3</div>
                            <div class="process-card">
                                <h3>Design & Development</h3>
                                <p>Our design and development team creates a custom portfolio website that perfectly showcases your work and personal brand.</p>
                                <ul class="process-list">
                                    <li>Information architecture</li>
                                    <li>UI/UX design</li>
                                    <li>Custom gallery systems</li>
                                    <li>Responsive implementation</li>
                                    <li>Filtering & categorization</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                            <div class="process-number">4</div>
                            <div class="process-card">
                                <h3>Launch & Optimization</h3>
                                <p>We launch your portfolio with technical optimization and provide tools for ongoing content updates and performance tracking.</p>
                                <ul class="process-list">
                                    <li>SEO optimization</li>
                                    <li>Performance testing</li>
                                    <li>Analytics integration</li>
                                    <li>Content management training</li>
                                    <li>Promotion strategy</li>
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
                        <h2>Portfolio Technologies & Features</h2>
                        <p class="lead">Advanced tools and features to showcase your work effectively</p>
                    </div>
                </div>
                
                <div class="platforms-grid">
                    <div class="platform-item" data-aos="fade-up">
                        <div class="platform-card">
                            <h3>Gallery & Showcase Systems</h3>
                            <ul>
                                <li>Masonry galleries</li>
                                <li>Fullscreen slideshows</li>
                                <li>Video integration</li>
                                <li>Interactive portfolios</li>
                                <li>Case study templates</li>
                                <li>Before/after comparisons</li>
                                <li>3D showcase capabilities</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="platform-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="platform-card">
                            <h3>Portfolio Platforms</h3>
                            <ul>
                                <li>WordPress</li>
                                <li>Webflow</li>
                                <li>Squarespace</li>
                                <li>Custom solutions</li>
                                <li>Headless CMS</li>
                                <li>React-based portfolios</li>
                                <li>Static site generators</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="platform-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="platform-card">
                            <h3>Advanced Features</h3>
                            <ul>
                                <li>Filterable portfolios</li>
                                <li>Password protection</li>
                                <li>Contact forms</li>
                                <li>Social proof integration</li>
                                <li>Animation & interactions</li>
                                <li>Analytics & tracking</li>
                                <li>PDF portfolio downloads</li>
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
                    <h2>Benefits of a Professional Portfolio Website</h2>
                    <p class="section-lead">How a strategic portfolio website transforms your career or business</p>
                </div>
                
                <div class="benefits-grid">
                    <div class="benefit-card-wrapper primary-benefit" data-aos="fade-right" data-aos-duration="800">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h3>Enhanced Professional Credibility</h3>
                            <p>A polished portfolio website establishes your professional credibility and positions you as a serious professional in your industry.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge">94% of first impressions are design-related</span>
                                <span class="stat-badge">85% of clients check portfolios before hiring</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="benefit-card-wrapper secondary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                        <div class="benefit-card">
                            <div class="benefit-icon secondary-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <h3>Increased Project Opportunities</h3>
                            <p>A strategic portfolio website actively generates inquiries and opportunities, attracting your ideal clients or employers.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge secondary-badge">67% higher inquiry rates with professional portfolios</span>
                                <span class="stat-badge secondary-badge">3x more likely to be shortlisted for opportunities</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="benefit-card-wrapper tertiary-benefit" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                        <div class="benefit-card">
                            <div class="benefit-icon tertiary-icon">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <h3>Higher Value Perception</h3>
                            <p>A quality portfolio elevates the perceived value of your work, allowing you to command higher rates for your services.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge tertiary-badge">Professionals with strategic portfolios earn 25-45% more</span>
                                <span class="stat-badge tertiary-badge">73% of clients associate quality design with premium services</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="benefit-card-wrapper quaternary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">
                        <div class="benefit-card">
                            <div class="benefit-icon quaternary-icon">
                                <i class="fas fa-globe"></i>
                            </div>
                            <h3>Global Reach & Opportunities</h3>
                            <p>A portfolio website breaks geographical barriers, making your work accessible to potential clients worldwide.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge quaternary-badge">78% of freelancers with portfolios secure international clients</span>
                                <span class="stat-badge quaternary-badge">24/7 promotion of your work while you focus elsewhere</span>
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
                    <h2>Ready to Showcase Your Talent?</h2>
                    <p class="lead">Let's create a portfolio website that attracts opportunities and advances your career.</p>
                    <a href="/pages/contact.php" class="cta-btn animate-pulse-slow">
                        Start Your Portfolio Project
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
                        <p class="lead">Common questions about portfolio website design</p>
                    </div>
                </div>
                <div class="faq-container">
                    <div class="faq-item active">
                        <div class="faq-question">
                            <h3>How many projects should I include in my portfolio website?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Quality always trumps quantity when it comes to portfolio websites. We typically recommend following these guidelines:</p>
                            <ul>
                                <li><strong>For most creatives:</strong> 8-12 high-quality projects that showcase range and expertise</li>
                                <li><strong>For specialists:</strong> 5-8 deep case studies in your specific niche</li>
                                <li><strong>For beginners:</strong> 4-6 strong projects (quality personal or conceptual projects are fine)</li>
                            </ul>
                            <p>The key is to showcase your best work that's relevant to the type of projects or jobs you want to attract. Each project should demonstrate different skills, solve various problems, or appeal to different client types. We'll help you curate your work strategically during our initial discovery phase, focusing on projects that tell a compelling story about your unique strengths and capabilities.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What's the difference between using a portfolio platform and having a custom portfolio website?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>While platforms like Behance, Dribbble, or industry-specific portfolio sites offer convenience, a custom portfolio website provides significant advantages:</p>
                            <ul>
                                <li><strong>Complete Brand Control:</strong> Your custom website reflects your unique brand without platform-imposed limitations or competing with other creators on the same platform.</li>
                                <li><strong>Professional Domain:</strong> A personalized domain name (yourname.com) enhances credibility and memorability compared to username.portfolioplatform.com addresses.</li>
                                <li><strong>Unique Experience Design:</strong> Custom websites allow for innovative layouts, interactions, and presentation methods that differentiate your work rather than forcing it into standardized templates.</li>
                                <li><strong>Flexibility in Presentation:</strong> Custom sites let you structure project presentations optimally for your work rather than conforming to platform constraints.</li>
                                <li><strong>Direct Client Communication:</strong> Custom contact forms, lead generation tools, and analytics provide direct client relationships without platform intermediaries.</li>
                                <li><strong>Additional Content Options:</strong> Include supplementary sections like blogs, services pages, or specialized content that wouldn't fit on portfolio platforms.</li>
                            </ul>
                            <p>The ideal approach is often a combination—maintaining presence on relevant portfolio platforms for discovery while directing serious prospects to your professional custom website for a comprehensive experience of your work and brand.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do you make portfolio websites generate actual client inquiries?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Transforming a portfolio from a passive showcase into a lead-generating asset requires strategic design and content approaches:</p>
                            <ul>
                                <li><strong>Audience-Focused Curation:</strong> We strategically select and organize projects that appeal to your target clients rather than just showcasing personal favorites.</li>
                                <li><strong>Problem-Solution Storytelling:</strong> For each project, we highlight the challenges solved and results achieved, demonstrating the tangible value you provide to clients.</li>
                                <li><strong>Strategic Calls-to-Action:</strong> We place clear, compelling calls-to-action throughout the site to guide visitors toward contacting you or taking the next step.</li>
                                <li><strong>Social Proof Integration:</strong> We incorporate testimonials, client logos, awards, or recognition alongside your work to build trust and credibility.</li>
                                <li><strong>Conversion-Optimized Contact:</strong> We design intuitive, frictionless contact options that make reaching out to you simple and appealing.</li>
                                <li><strong>SEO Strategy:</strong> We implement search optimization for your portfolio to attract potential clients actively searching for your services.</li>
                                <li><strong>Analytics Implementation:</strong> We set up tracking to monitor visitor behavior and continuously refine the site for better conversion rates.</li>
                            </ul>
                            <p>Our portfolio websites aren't just visual showcases—they're strategically designed business tools built to convert admirers into clients through a carefully crafted user journey.</p>
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

