<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';

// Page specific content
$pageTitle = "DevOps & CI/CD Solutions | NeoWebX";
$pageDescription = "Streamline your development and deployment processes with our comprehensive DevOps and CI/CD solutions. We help businesses automate workflows and improve delivery efficiency.";
$serviceName = "DevOps & CI/CD Solutions";
$serviceSlug = "devops-ci-cd";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'DevOps, CI/CD, continuous integration, continuous deployment, automation, infrastructure as code, containerization, Docker, Kubernetes, pipeline automation'
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
                <span class="service-category">Backend & Infrastructure</span>
                <h1><?php echo $pageTitle; ?></h1>
                <p class="lead"><?php echo $pageDescription; ?></p>
                <div class="hero-buttons">
                    <a href="/pages/contact.php" class="btn btn-primary">Transform Your Pipeline</a>
                    <a href="/pages/portfolio.php" class="btn btn-outline">View Portfolio</a>
                </div>
                <div class="tech-stack">
                    <span>Technologies:</span>
                    <img src="/assets/images/tech/jenkins.png" alt="Jenkins" title="Jenkins">
                    <img src="/assets/images/tech/docker.png" alt="Docker" title="Docker">
                    <img src="/assets/images/tech/kubernetes.png" alt="Kubernetes" title="Kubernetes">
                    <img src="/assets/images/tech/terraform.png" alt="Terraform" title="Terraform">
                </div>
            </div>
            <div class="hero-image" data-aos="fade-left">
                <img src="/assets/images/services/devops-cicd.svg" alt="<?php echo $serviceName; ?>" class="floating-image">
            </div>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="overview-section">
    <div class="container">
        <div class="section-header">
            <div class="overview-header" data-aos="fade-up">
                <h2>Transform Your Development Pipeline</h2>
                <p class="section-lead">Our DevOps and CI/CD solutions help organizations streamline their development processes, automate deployments, and deliver high-quality software faster. We implement modern practices and tools to enhance collaboration between development and operations teams.</p>
            </div>
        </div>
        
        <div class="overview-cards">
            <div class="overview-card primary-card" data-aos="fade-up">
                <div class="card-icon">
                    <i class="fas fa-sync-alt"></i>
                </div>
                <h3>Automated Delivery Pipelines</h3>
                <p>We build end-to-end automated pipelines that accelerate software delivery while maintaining rigorous quality standards throughout the development lifecycle.</p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Continuous integration automation</li>
                    <li><i class="fas fa-check-circle"></i> Automated testing frameworks</li>
                    <li><i class="fas fa-check-circle"></i> Deployment orchestration</li>
                </ul>
            </div>
            
            <div class="overview-card secondary-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-icon">
                    <i class="fas fa-cloud-upload-alt"></i>
                </div>
                <h3>Infrastructure Modernization</h3>
                <p>We transform traditional infrastructure into scalable, maintainable cloud-native environments using Infrastructure as Code and container orchestration.</p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Cloud-native architecture</li>
                    <li><i class="fas fa-check-circle"></i> Infrastructure automation</li>
                    <li><i class="fas fa-check-circle"></i> Containerization strategies</li>
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
                <h2>Our DevOps Services</h2>
                <p class="section-lead">Comprehensive DevOps and CI/CD solutions for modern software development</p>
            </div>
        </div>
        
        <div class="services-grid">
            <div class="service-item" data-aos="fade-up">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-code-branch"></i>
                    </div>
                    <h3>CI/CD Pipeline Implementation</h3>
                    <p>Automated continuous integration and deployment pipelines for faster and reliable software delivery.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Pipeline Design & Setup</li>
                        <li><i class="fas fa-check"></i> Automated Testing</li>
                        <li><i class="fas fa-check"></i> Deployment Automation</li>
                        <li><i class="fas fa-check"></i> Quality Gates</li>
                    </ul>
                </div>
            </div>

            <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cubes"></i>
                    </div>
                    <h3>Container Orchestration</h3>
                    <p>Containerization and orchestration solutions for scalable and portable applications.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Docker Implementation</li>
                        <li><i class="fas fa-check"></i> Kubernetes Setup</li>
                        <li><i class="fas fa-check"></i> Container Management</li>
                        <li><i class="fas fa-check"></i> Scaling Solutions</li>
                    </ul>
                </div>
            </div>

            <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3>Infrastructure as Code</h3>
                    <p>Automated infrastructure provisioning and management using code-based approaches.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Terraform Implementation</li>
                        <li><i class="fas fa-check"></i> CloudFormation</li>
                        <li><i class="fas fa-check"></i> Configuration Management</li>
                        <li><i class="fas fa-check"></i> Version Control</li>
                    </ul>
                </div>
            </div>

            <div class="service-item" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Monitoring & Logging</h3>
                    <p>Comprehensive monitoring and logging solutions for system observability.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Performance Monitoring</li>
                        <li><i class="fas fa-check"></i> Log Management</li>
                        <li><i class="fas fa-check"></i> Alert Configuration</li>
                        <li><i class="fas fa-check"></i> Metrics Collection</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Implementation Process -->
<section class="process-section">
    <div class="container">
        <div class="section-header">
            <div class="process-header" data-aos="fade-up">
                <h2>Our Implementation Process</h2>
                <p class="section-lead">A systematic approach to DevOps transformation</p>
            </div>
        </div>
        
        <div class="process-timeline">
            <!-- Timeline Line -->
            <div class="timeline-line"></div>
            
            <div class="process-grid">
                <div class="process-card-wrapper" data-aos="fade-up">
                    <div class="process-number">1</div>
                    <div class="process-card">
                        <h3>Assessment & Discovery</h3>
                        <p>We conduct a comprehensive evaluation of your current development workflows, infrastructure, and deployment processes to identify bottlenecks and opportunities.</p>
                        <ul class="process-list">
                            <li>Current workflow and pipeline analysis</li>
                            <li>Pain point identification and prioritization</li>
                            <li>Infrastructure and technology stack assessment</li>
                            <li>Team capabilities and culture evaluation</li>
                        </ul>
                    </div>
                </div>

                <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-number">2</div>
                    <div class="process-card">
                        <h3>Strategy & Design</h3>
                        <p>Our experts create a tailored DevOps roadmap and architectural design that aligns with your business goals and technical requirements.</p>
                        <ul class="process-list">
                            <li>CI/CD pipeline architecture design</li>
                            <li>Tool selection and integration planning</li>
                            <li>Infrastructure as Code (IaC) strategy</li>
                            <li>Security and compliance integration</li>
                        </ul>
                    </div>
                </div>

                <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-number">3</div>
                    <div class="process-card">
                        <h3>Implementation & Integration</h3>
                        <p>We implement the DevOps toolchain and automation workflows, integrating them with your existing systems and training your team on best practices.</p>
                        <ul class="process-list">
                            <li>CI/CD pipeline configuration and testing</li>
                            <li>Containerization and orchestration setup</li>
                            <li>IaC implementation and version control</li>
                            <li>Monitoring and alerting system integration</li>
                        </ul>
                    </div>
                </div>

                <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-number">4</div>
                    <div class="process-card">
                        <h3>Optimization & Continuous Improvement</h3>
                        <p>We continuously monitor, analyze, and refine your DevOps processes to maximize efficiency and adapt to changing requirements.</p>
                        <ul class="process-list">
                            <li>Performance metrics tracking and analysis</li>
                            <li>Pipeline optimization and refinement</li>
                            <li>Scaling strategy implementation</li>
                            <li>Knowledge transfer and team enablement</li>
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
            <h2>Benefits of DevOps & CI/CD</h2>
            <p class="section-lead">How modern DevOps practices transform software delivery and business outcomes</p>
        </div>
        
        <div class="benefits-grid">
            <div class="benefit-card-wrapper primary-benefit" data-aos="fade-right" data-aos-duration="800">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Accelerated Delivery</h3>
                    <p>DevOps automation significantly reduces the time from code commit to production deployment. Organizations implementing CI/CD typically see a 70% reduction in deployment time and can release up to 200x more frequently.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge">70% faster deployments</span>
                        <span class="stat-badge">200x more releases</span>
                    </div>
                </div>
            </div>

            <div class="benefit-card-wrapper secondary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                <div class="benefit-card">
                    <div class="benefit-icon secondary-icon">
                        <i class="fas fa-bug"></i>
                    </div>
                    <h3>Higher Quality & Reliability</h3>
                    <p>Automated testing and deployment validation catch issues early in the development cycle. DevOps practices reduce deployment failures by 60% and cut recovery time by 90% when incidents do occur.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge secondary-badge">60% fewer failures</span>
                        <span class="stat-badge secondary-badge">90% faster recovery</span>
                    </div>
                </div>
            </div>

            <div class="benefit-card-wrapper tertiary-benefit" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                <div class="benefit-card">
                    <div class="benefit-icon tertiary-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost Efficiency</h3>
                    <p>Automation reduces manual work and infrastructure costs through optimization. Companies implementing DevOps practices see an average of 40% reduction in IT spending and 63% better resource utilization.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge tertiary-badge">40% IT cost reduction</span>
                        <span class="stat-badge tertiary-badge">63% better resource usage</span>
                    </div>
                </div>
            </div>

            <div class="benefit-card-wrapper quaternary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">
                <div class="benefit-card">
                    <div class="benefit-icon quaternary-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Team Collaboration</h3>
                    <p>DevOps breaks down silos between development and operations teams. Organizations with mature DevOps practices report 50% improvement in collaboration and 25% increase in employee productivity.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge quaternary-badge">50% better collaboration</span>
                        <span class="stat-badge quaternary-badge">25% higher productivity</span>
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
            <h2>Our DevOps Technical Standards</h2>
            <p class="section-lead">Best practices we implement in every DevOps transformation project</p>
        </div>
        
        <div class="standards-grid">
            <div class="standard-item" data-aos="fade-up">
                <div class="standard-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Security as Code</h3>
                <ul class="standard-list">
                    <li>Automated security scanning in pipelines</li>
                    <li>Infrastructure security compliance checks</li>
                    <li>Secret management automation</li>
                    <li>Continuous vulnerability assessment</li>
                </ul>
            </div>
            
            <div class="standard-item" data-aos="fade-up" data-aos-delay="100">
                <div class="standard-icon">
                    <i class="fas fa-code-branch"></i>
                </div>
                <h3>GitOps Workflow</h3>
                <ul class="standard-list">
                    <li>Git as single source of truth</li>
                    <li>Pull-based deployment models</li>
                    <li>Declarative infrastructure definition</li>
                    <li>Automated drift detection</li>
                </ul>
            </div>
            
            <div class="standard-item" data-aos="fade-up" data-aos-delay="200">
                <div class="standard-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Observability</h3>
                <ul class="standard-list">
                    <li>Comprehensive metrics collection</li>
                    <li>Distributed tracing implementation</li>
                    <li>Centralized logging architecture</li>
                    <li>Proactive alerting systems</li>
                </ul>
            </div>
            
            <div class="standard-item" data-aos="fade-up" data-aos-delay="300">
                <div class="standard-icon">
                    <i class="fas fa-robot"></i>
                </div>
                <h3>Automation First</h3>
                <ul class="standard-list">
                    <li>Infrastructure as Code for all components</li>
                    <li>Configuration as Code principles</li>
                    <li>Test automation at all levels</li>
                    <li>Self-healing system design</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Transform Your Delivery Pipeline?</h2>
            <p class="lead">Let's automate your development workflows and accelerate your time to market.</p>
            <a href="/pages/contact.php" class="cta-btn animate-pulse-slow">
                Schedule a DevOps Consultation
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
                <p class="section-lead">Common questions about DevOps and CI/CD implementation</p>
            </div>
        </div>
        <div class="faq-container">
            <div class="faq-item active">
                <div class="faq-question">
                    <h3>What tools do you use for CI/CD implementation?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>We work with a variety of CI/CD tools including Jenkins, GitLab CI, GitHub Actions, CircleCI, and others. The choice of tools depends on your specific requirements and existing technology stack.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How long does it take to implement a CI/CD pipeline?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>The implementation timeline varies depending on the complexity of your applications and requirements. Basic pipeline setup can be completed in 2-4 weeks, while more complex implementations may take 2-3 months.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How do you ensure security in the CI/CD pipeline?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>We implement multiple security measures including code scanning, vulnerability assessment, secure secrets management, and access controls. We also integrate security testing into the pipeline for continuous security validation.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>Can you integrate with our existing tools and processes?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>Yes, we design our DevOps solutions to integrate with your existing tools and processes. We can work with your current version control systems, testing frameworks, and deployment tools while introducing improvements where needed.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../../../../components/footer.php';
?>
 <script src="/assets/js/services.js"></script>
