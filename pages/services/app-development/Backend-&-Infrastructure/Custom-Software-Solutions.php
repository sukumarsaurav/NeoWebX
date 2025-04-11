<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';

// Page specific content
$pageTitle = "Custom Software Solutions | NeoWebX";
$pageDescription = "Tailor-made software solutions designed to address your unique business challenges and requirements. Our custom software development services deliver scalable, secure, and innovative applications.";
$serviceName = "Custom Software Solutions";
$serviceSlug = "custom-software-solutions";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'custom software development, bespoke software solutions, enterprise software, business process automation, software consulting, custom application development, tailored software, legacy system modernization'
];

require_once '../../../../components/header.php';
?>

<!-- Page Header -->
<section class="hero-section">
    <div class="blob-1"></div>
    <div class="blob-2"></div>
    <div class="circle-1"></div>
    <div class="circle-2"></div>
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content" data-aos="fade-right">
                <h1><?php echo $serviceName; ?></h1>
                <p class="lead">Tailor-made software solutions designed specifically for your unique business challenges and requirements</p>
                <div class="hero-buttons">
                    <a href="/pages/contact.php" class="btn btn-primary">Start Your Custom Project</a>
                    <a href="/pages/portfolio.php" class="btn btn-outline">View Portfolio</a>
                </div>
                <div class="tech-stack">
                    <span>Technologies:</span>
                    <img src="/assets/images/tech/java.png" alt="Java" title="Java">
                    <img src="/assets/images/tech/python.png" alt="Python" title="Python">
                    <img src="/assets/images/tech/nodejs.png" alt="Node.js" title="Node.js">
                    <img src="/assets/images/tech/react.png" alt="React" title="React">
                </div>
            </div>
            <div class="hero-image" data-aos="fade-left">
                <img src="/assets/images/services/custom-software.svg" alt="<?php echo $serviceName; ?>" class="floating-image">
            </div>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="overview-section">
    <div class="container">
        <div class="section-header">
            <div class="overview-header" data-aos="fade-up">
                <h2>Software Tailored to Your Business Needs</h2>
                <p class="section-lead">Off-the-shelf software often comes with compromises, forcing your business to adapt to its limitations. Our custom software solutions are designed specifically for your unique workflows, processes, and goals, empowering your business with technology that works exactly how you need it to.</p>
            </div>
        </div>
        
        <div class="overview-cards">
            <div class="overview-card primary-card" data-aos="fade-up">
                <div class="card-icon">
                    <i class="fas fa-cogs"></i>
                </div>
                <h3>The Challenge</h3>
                <p>Businesses struggle with generic software that doesn't align with their unique processes, leading to inefficiencies, workarounds, and missed opportunities.</p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Inflexible off-the-shelf solutions</li>
                    <li><i class="fas fa-check-circle"></i> Disconnected systems and data silos</li>
                    <li><i class="fas fa-check-circle"></i> Inefficient manual processes</li>
                </ul>
            </div>
            
            <div class="overview-card secondary-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-icon">
                    <i class="fas fa-puzzle-piece"></i>
                </div>
                <h3>Our Solution</h3>
                <p>We create tailor-made software that perfectly adapts to your business requirements, streamlining operations and enabling growth through technology that works for you, not against you.</p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Purpose-built for your workflows</li>
                    <li><i class="fas fa-check-circle"></i> Seamless system integration</li>
                    <li><i class="fas fa-check-circle"></i> Scalable and future-proof architecture</li>
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
                <h2>Our Custom Software Services</h2>
                <p class="section-lead">Tailored development solutions for your unique business challenges</p>
            </div>
        </div>
        
        <div class="services-grid">
            <div class="service-item" data-aos="fade-up">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Enterprise Applications</h3>
                    <p>Comprehensive software solutions designed to integrate and optimize complex business processes across your organization.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> ERP System Development</li>
                        <li><i class="fas fa-check"></i> CRM Solutions</li>
                        <li><i class="fas fa-check"></i> Business Process Management</li>
                        <li><i class="fas fa-check"></i> Cross-Department Integration</li>
                    </ul>
                </div>
            </div>

            <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Business Process Automation</h3>
                    <p>Streamline operations and increase efficiency with intelligent automated workflows that reduce manual effort and minimize errors.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Workflow Automation</li>
                        <li><i class="fas fa-check"></i> Document Processing</li>
                        <li><i class="fas fa-check"></i> Approval Systems</li>
                        <li><i class="fas fa-check"></i> Task Management</li>
                    </ul>
                </div>
            </div>

            <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3>Legacy System Modernization</h3>
                    <p>Transform outdated systems into modern, efficient, and secure applications without losing critical business logic or data integrity.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> System Analysis</li>
                        <li><i class="fas fa-check"></i> Code Refactoring</li>
                        <li><i class="fas fa-check"></i> Platform Migration</li>
                        <li><i class="fas fa-check"></i> UI/UX Modernization</li>
                    </ul>
                </div>
            </div>

            <div class="service-item" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Industry-Specific Solutions</h3>
                    <p>Specialized software designed for the unique needs of your industry, incorporating domain expertise and best practices for your sector.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Healthcare Solutions</li>
                        <li><i class="fas fa-check"></i> Financial Software</li>
                        <li><i class="fas fa-check"></i> Manufacturing Systems</li>
                        <li><i class="fas fa-check"></i> Retail & Logistics</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Development Process -->
<section class="process-section">
    <div class="container">
        <div class="section-header">
            <div class="process-header" data-aos="fade-up">
                <h2>Our Development Process</h2>
                <p class="section-lead">A methodical approach to creating custom software solutions</p>
            </div>
        </div>
        
        <div class="process-timeline">
            <!-- Timeline Line -->
            <div class="timeline-line"></div>
            
            <div class="process-grid">
                <div class="process-card-wrapper" data-aos="fade-up">
                    <div class="process-number">1</div>
                    <div class="process-card">
                        <h3>Discovery & Analysis</h3>
                        <p>Understanding your business processes, challenges, and goals through in-depth consultations.</p>
                        <ul class="process-list">
                            <li>Business process mapping</li>
                            <li>Stakeholder interviews</li>
                            <li>Requirements gathering</li>
                            <li>Competitive analysis</li>
                        </ul>
                    </div>
                </div>

                <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-number">2</div>
                    <div class="process-card">
                        <h3>Design & Planning</h3>
                        <p>Creating detailed architectural designs, wireframes, and project roadmaps tailored to your requirements.</p>
                        <ul class="process-list">
                            <li>System architecture design</li>
                            <li>UI/UX wireframing</li>
                            <li>Database schema modeling</li>
                            <li>Project milestone planning</li>
                        </ul>
                    </div>
                </div>

                <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-number">3</div>
                    <div class="process-card">
                        <h3>Development & Testing</h3>
                        <p>Building your custom solution using agile methodologies with continuous testing and quality assurance.</p>
                        <ul class="process-list">
                            <li>Iterative development cycles</li>
                            <li>Continuous integration</li>
                            <li>Automated testing</li>
                            <li>Regular progress reviews</li>
                        </ul>
                    </div>
                </div>

                <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-number">4</div>
                    <div class="process-card">
                        <h3>Deployment & Support</h3>
                        <p>Implementing your solution with comprehensive training, documentation, and ongoing maintenance.</p>
                        <ul class="process-list">
                            <li>Deployment planning</li>
                            <li>User training and documentation</li>
                            <li>Data migration</li>
                            <li>Post-launch support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technologies Section -->
<section class="services-section">
    <div class="container">
        <div class="section-header">
            <div class="services-header" data-aos="fade-up">
                <h2>Our Technology Stack</h2>
                <p class="section-lead">Modern technologies to build robust and scalable solutions</p>
            </div>
        </div>
        
        <div class="services-grid">
            <div class="service-item" data-aos="fade-up">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Frontend Technologies</h3>
                    <p>Modern and responsive user interfaces that provide exceptional user experiences.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> React.js / Vue.js</li>
                        <li><i class="fas fa-check"></i> Angular</li>
                        <li><i class="fas fa-check"></i> TypeScript</li>
                        <li><i class="fas fa-check"></i> Progressive Web Apps</li>
                    </ul>
                </div>
            </div>

            <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3>Backend Technologies</h3>
                    <p>Robust server-side solutions that ensure reliability, security, and performance.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Java / Spring Boot</li>
                        <li><i class="fas fa-check"></i> Node.js</li>
                        <li><i class="fas fa-check"></i> Python / Django</li>
                        <li><i class="fas fa-check"></i> .NET Core</li>
                    </ul>
                </div>
            </div>

            <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Database Technologies</h3>
                    <p>Efficient data storage solutions optimized for your specific usage patterns and requirements.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> SQL (MySQL, PostgreSQL)</li>
                        <li><i class="fas fa-check"></i> NoSQL (MongoDB, Cassandra)</li>
                        <li><i class="fas fa-check"></i> Graph Databases</li>
                        <li><i class="fas fa-check"></i> Data Warehousing</li>
                    </ul>
                </div>
            </div>

            <div class="service-item" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3>Cloud & DevOps</h3>
                    <p>Scalable and reliable infrastructure with continuous integration and deployment pipelines.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> AWS / Azure / GCP</li>
                        <li><i class="fas fa-check"></i> Docker & Kubernetes</li>
                        <li><i class="fas fa-check"></i> CI/CD Pipelines</li>
                        <li><i class="fas fa-check"></i> Microservices Architecture</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technical Standards Section -->
<section class="standards-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Our Development Standards</h2>
            <p class="section-lead">The principles and practices that ensure quality, reliability, and maintainability in our custom solutions</p>
        </div>
        
        <div class="standards-grid">
            <div class="standard-item" data-aos="fade-up">
                <div class="standard-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Security By Design</h3>
                <ul class="standard-list">
                    <li>OWASP security principles implementation</li>
                    <li>Regular security code reviews</li>
                    <li>Vulnerability scanning automation</li>
                    <li>Data encryption at rest and in transit</li>
                </ul>
            </div>
            
            <div class="standard-item" data-aos="fade-up" data-aos-delay="100">
                <div class="standard-icon">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                <h3>Performance Optimization</h3>
                <ul class="standard-list">
                    <li>Efficient code architecture</li>
                    <li>Database query optimization</li>
                    <li>Caching strategies implementation</li>
                    <li>Load and performance testing</li>
                </ul>
            </div>
            
            <div class="standard-item" data-aos="fade-up" data-aos-delay="200">
                <div class="standard-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3>Code Quality</h3>
                <ul class="standard-list">
                    <li>Adherence to coding standards</li>
                    <li>Comprehensive documentation</li>
                    <li>Peer code reviews</li>
                    <li>Test-driven development</li>
                </ul>
            </div>
            
            <div class="standard-item" data-aos="fade-up" data-aos-delay="300">
                <div class="standard-icon">
                    <i class="fas fa-expand-arrows-alt"></i>
                </div>
                <h3>Scalability & Flexibility</h3>
                <ul class="standard-list">
                    <li>Modular architecture design</li>
                    <li>Horizontal and vertical scaling</li>
                    <li>Future-proof technology selection</li>
                    <li>Extensible API development</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Benefits of Custom Software</h2>
            <p class="section-lead">Why businesses choose custom-built solutions</p>
        </div>
        
        <div class="benefits-grid">
            <div class="benefit-card-wrapper primary-benefit" data-aos="fade-right" data-aos-duration="800">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-puzzle-piece"></i>
                    </div>
                    <h3>Perfect Fit for Your Business</h3>
                    <p>Custom software is designed specifically for your unique business processes and workflows, eliminating workarounds and inefficiencies. Businesses report 75% higher user adoption and 68% fewer workflow compromises with tailored solutions.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge">75% higher adoption</span>
                        <span class="stat-badge">68% fewer compromises</span>
                    </div>
                </div>
            </div>

            <div class="benefit-card-wrapper secondary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
                <div class="benefit-card">
                    <div class="benefit-icon secondary-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Scalability & Future-Proofing</h3>
                    <p>Custom solutions grow with your business, adapting to changing needs and increasing demand without costly replacements. Organizations with custom software report 58% lower long-term costs and 40% longer system lifespans.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge secondary-badge">58% lower long-term costs</span>
                        <span class="stat-badge secondary-badge">40% longer system lifespan</span>
                    </div>
                </div>
            </div>

            <div class="benefit-card-wrapper tertiary-benefit" data-aos="fade-right" data-aos-duration="800" data-aos-delay="200">
                <div class="benefit-card">
                    <div class="benefit-icon tertiary-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Enhanced Security & Compliance</h3>
                    <p>Custom software includes tailored security measures addressing your specific compliance and risk management needs. Companies with purpose-built solutions experience 70% fewer security incidents and 85% higher regulatory compliance rates.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge tertiary-badge">70% fewer security incidents</span>
                        <span class="stat-badge tertiary-badge">85% better compliance</span>
                    </div>
                </div>
            </div>

            <div class="benefit-card-wrapper quaternary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                <div class="benefit-card">
                    <div class="benefit-icon quaternary-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Increased Operational Efficiency</h3>
                    <p>Streamlined operations and automated processes designed for your specific workflows reduce manual effort and errors. Businesses implementing custom software solutions report 45% reduced processing time and 60% lower error rates.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge quaternary-badge">45% faster processing</span>
                        <span class="stat-badge quaternary-badge">60% fewer errors</span>
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
            <h2>Ready to Transform Your Business?</h2>
            <p class="lead">Let's discuss how custom software can solve your unique business challenges.</p>
            <a href="/pages/contact.php" class="cta-btn animate-pulse-slow">
                Schedule a Software Consultation
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
                <p class="section-lead">Common questions about custom software development</p>
            </div>
        </div>
        <div class="faq-container">
            <div class="faq-item active">
                <div class="faq-question">
                    <h3>How long does it take to develop custom software?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>The timeline for custom software development varies greatly depending on the complexity, scope, and requirements of your project. Simple applications might take 3-6 months, while enterprise-level solutions can take 9-18 months. During our initial consultation, we'll provide a more accurate timeline based on your specific needs.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What's the difference between custom software and off-the-shelf solutions?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>Off-the-shelf software is designed for general use across many businesses, offering standard features that may or may not fit your needs. Custom software is built specifically for your business processes, providing exactly the features you need without unnecessary complexity. While off-the-shelf solutions have a lower initial cost, custom software often provides better long-term value through increased efficiency, perfect fit for your workflows, and no recurring license fees.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How do you ensure the security of custom software?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>Security is integrated throughout our development process. We implement security by design principles, conduct regular code reviews and security testing, and adhere to industry best practices for secure development. We also incorporate specific security measures based on your industry regulations and compliance requirements. After deployment, we provide ongoing security updates and monitoring to protect against emerging threats.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What happens after the software is delivered?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>We provide comprehensive post-launch support, including user training, documentation, and ongoing maintenance. We offer various support packages to ensure your software continues to run smoothly and remains up-to-date. As your business evolves, we can also implement new features and enhancements to ensure your software continues to meet your changing needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../../../../components/footer.php';
?>
<script src="/assets/js/services.js"></script>