<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';

// Page specific content
$pageTitle = "Healthcare Website Design Services | NeoWebX";
$pageDescription = "Create secure, compliant, and patient-centered healthcare websites that build trust and streamline care delivery. HIPAA-compliant web design for medical practices, hospitals, and healthcare organizations.";
$serviceName = "Healthcare Website Design";
$serviceSlug = "healthcare-websites";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'healthcare website design, medical website development, HIPAA compliant websites, hospital website design, patient portal development, telemedicine websites, healthcare UX design, medical practice websites, healthcare web solutions'
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
                        <h1>Healthcare Website <span class="highlight">Design</span></h1>
                        <p class="lead">Create secure, compliant, and patient-centered digital experiences that build trust and streamline healthcare delivery</p>
                        <div class="hero-buttons">
                            <a href="/pages/contact.php" class="btn btn-primary">Start Your Healthcare Project</a>
                            <a href="/portfolio" class="btn btn-outline">View Portfolio</a>
                        </div>
                    </div>
                    <div class="hero-image" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                        <div class="image-glow"></div>
                        <img src="/assets/images/healthcare-websites.jpg" alt="Healthcare Website Design" class="floating-image">
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
                    <h2>Expert Healthcare Website Design Services</h2>
                    <p class="section-lead">We create sophisticated healthcare websites that combine medical expertise with user-centered design, ensuring compliance while delivering exceptional patient experiences.</p>
                </div>
                
                <div class="overview-grid">
                    <div class="overview-card primary-card" data-aos="fade-right" data-aos-duration="800">
                        <div class="card-decoration"></div>
                        <h3>Medical Excellence &amp; Digital Innovation</h3>
                        <p>Our team specializes in developing websites for healthcare organizations that adhere to strict industry regulations while offering intuitive interfaces that enhance the patient journey. We understand the unique challenges healthcare providers face in the digital space – from regulatory compliance to patient confidentiality and accessibility requirements.</p>
                        <p>Every healthcare website we design is built with meticulous attention to HIPAA compliance, ADA accessibility, and medical industry best practices while incorporating the latest web technologies for optimal performance and security.</p>
                    </div>
                    
                    <div class="overview-card secondary-card" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                        <div class="card-decoration"></div>
                        <h3>Patient-Centered Design Philosophy</h3>
                        <p>We create healthcare websites with a focus on the patient experience, developing user journeys that reduce anxiety, improve information accessibility, and streamline care access. Our patient-first approach ensures that visitors can easily find the information they need, understand their care options, and take clear next steps.</p>
                        <p>By combining medical expertise with UX best practices, we develop digital experiences that build trust, reduce administrative burden, and ultimately improve care delivery and patient satisfaction.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section">
            <div class="container">
                <div class="section-header">
                    <div class="services-header" data-aos="fade-up">
                        <h2>Our Healthcare Website Design Services</h2>
                        <p class="lead">Comprehensive web solutions tailored to the unique needs of healthcare organizations</p>
                    </div>
                </div>
                
                <div class="services-grid">
                    <div class="service-item" data-aos="fade-up">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-hospital"></i>
                            </div>
                            <h3>Medical Practice Websites</h3>
                            <p>Custom websites for clinics, group practices, and specialty providers that establish credibility, educate patients, and streamline practice operations.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Physician/provider profiles &amp; credentials</li>
                                <li><i class="fas fa-check"></i> Service descriptions &amp; educational content</li>
                                <li><i class="fas fa-check"></i> Patient resources &amp; downloadable forms</li>
                                <li><i class="fas fa-check"></i> Insurance information integration</li>
                                <li><i class="fas fa-check"></i> Online appointment scheduling</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-user-md"></i>
                            </div>
                            <h3>Patient Portal Integration</h3>
                            <p>Secure patient portal solutions that enhance engagement, streamline communication, and improve care coordination.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Secure messaging systems</li>
                                <li><i class="fas fa-check"></i> Medical record access integration</li>
                                <li><i class="fas fa-check"></i> Appointment management</li>
                                <li><i class="fas fa-check"></i> Prescription refill requests</li>
                                <li><i class="fas fa-check"></i> Bill payment functionality</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-laptop-medical"></i>
                            </div>
                            <h3>Telemedicine Solutions</h3>
                            <p>Advanced telehealth platforms that connect patients with providers through secure, user-friendly virtual care experiences.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> HIPAA-compliant video consultation</li>
                                <li><i class="fas fa-check"></i> Virtual waiting rooms</li>
                                <li><i class="fas fa-check"></i> Digital intake forms</li>
                                <li><i class="fas fa-check"></i> Provider scheduling systems</li>
                                <li><i class="fas fa-check"></i> Post-visit summary &amp; follow-up</li>
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
                    <h2>Our Healthcare Website Design Process</h2>
                    <p class="section-lead">A strategic approach to creating compliant, patient-centered healthcare websites</p>
                </div>
                
                <div class="process-timeline">
                    <!-- Timeline Line -->
                    <div class="timeline-line"></div>
                    
                    <div class="process-grid">
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800">
                            <div class="process-number">1</div>
                            <div class="process-card">
                                <h3>Discovery & Compliance Planning</h3>
                                <p>We begin with a thorough assessment of your healthcare organization's needs, patient demographics, and regulatory requirements.</p>
                                <ul class="process-list">
                                    <li>HIPAA compliance assessment</li>
                                    <li>Patient journey mapping</li>
                                    <li>Healthcare service prioritization</li>
                                    <li>Provider credential documentation</li>
                                    <li>Competitive healthcare market research</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                            <div class="process-number">2</div>
                            <div class="process-card">
                                <h3>Patient-Centered Design</h3>
                                <p>Our designers create accessible interfaces that prioritize patient needs while maintaining medical professionalism.</p>
                                <ul class="process-list">
                                    <li>Accessible healthcare interface design</li>
                                    <li>Patient portal UX planning</li>
                                    <li>Medical service information architecture</li>
                                    <li>Healthcare-specific navigation patterns</li>
                                    <li>Mobile-responsive medical content design</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="process-number">3</div>
                            <div class="process-card">
                                <h3>Development & Integration</h3>
                                <p>We build secure healthcare websites with important integrations and patient-facing features.</p>
                                <ul class="process-list">
                                    <li>Secure form handling for patient information</li>
                                    <li>EHR/EMR system integration</li>
                                    <li>Online appointment scheduling tools</li>
                                    <li>Physician directory implementation</li>
                                    <li>Secure patient portal development</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                            <div class="process-number">4</div>
                            <div class="process-card">
                                <h3>Compliance Validation & Launch</h3>
                                <p>We ensure your healthcare website meets all requirements before going live.</p>
                                <ul class="process-list">
                                    <li>HIPAA compliance verification</li>
                                    <li>ADA accessibility testing</li>
                                    <li>Medical content accuracy review</li>
                                    <li>Cross-device testing for patient access</li>
                                    <li>Analytics implementation with PHI safeguards</li>
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
                        <h2>Healthcare Compliance Standards</h2>
                        <p class="lead">Our healthcare websites meet the strictest industry regulations and standards</p>
                    </div>
                </div>
                
                <div class="content-row">
                    <div class="content-col one-half margin-bottom-4" data-aos="fade-up">
                        <div class="compliance-card height-100 padding-4 bg-white rounded box-shadow-sm">
                            <div class="compliance-icon margin-bottom-3">
                                <i class="fas fa-shield-alt fa-2x color-primary"></i>
                            </div>
                            <h4>Privacy &amp; Security Compliance</h4>
                            <ul class="compliance-list">
                                <li><i class="fas fa-check text-primary me-2"></i>HIPAA Privacy Rule compliance</li>
                                <li><i class="fas fa-check text-primary me-2"></i>HIPAA Security Rule implementation</li>
                                <li><i class="fas fa-check text-primary me-2"></i>End-to-end data encryption (in transit and at rest)</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Secure forms with PHI protection measures</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Role-based access controls</li>
                            </ul>
                        </div>
                    </div>
                    <div class="content-col one-half margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="compliance-card height-100 padding-4 bg-white rounded box-shadow-sm">
                            <div class="compliance-icon margin-bottom-3">
                                <i class="fas fa-clipboard-check fa-2x color-primary"></i>
                            </div>
                            <h4>Content &amp; Advertising Standards</h4>
                            <ul class="compliance-list">
                                <li><i class="fas fa-check text-primary me-2"></i>FTC compliance for testimonials and reviews</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Clear distinction between medical advice and information</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Medical disclaimer implementation</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Compliance with medical advertising regulations</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Patient confidentiality in all imagery and content</li>
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
                    <h2>Benefits of Professional Healthcare Website Design</h2>
                    <p class="section-lead">Why investing in a specialized healthcare website matters</p>
                </div>
                
                <div class="benefits-grid">
                    <div class="benefit-card-wrapper primary-benefit" data-aos="fade-right" data-aos-duration="800">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <h3>Enhanced Patient Trust</h3>
                            <p>A professionally designed healthcare website establishes credibility and trust, critical factors for patients selecting healthcare providers. Studies show that 94% of healthcare patients judge provider credibility based on website design.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge">94% credibility impact</span>
                                <span class="stat-badge">75% higher trust ratings</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="benefit-card-wrapper secondary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                        <div class="benefit-card">
                            <div class="benefit-icon secondary-icon">
                                <i class="fas fa-user-md"></i>
                            </div>
                            <h3>Improved Patient Acquisition</h3>
                            <p>Healthcare organizations with optimized websites see 83% more new patient inquiries than those with outdated sites. Online appointment scheduling increases bookings by 34% while reducing administrative workload.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge secondary-badge">83% more inquiries</span>
                                <span class="stat-badge secondary-badge">34% more bookings</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="benefit-card-wrapper tertiary-benefit" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                        <div class="benefit-card">
                            <div class="benefit-icon tertiary-icon">
                                <i class="fas fa-universal-access"></i>
                            </div>
                            <h3>Enhanced Accessibility & Compliance</h3>
                            <p>HIPAA-compliant, accessible healthcare websites reduce legal and regulatory risks while serving all patients equitably. ADA-compliant websites expand your reach to the 61 million Americans with disabilities.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge tertiary-badge">61M accessible users</span>
                                <span class="stat-badge tertiary-badge">100% HIPAA alignment</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="benefit-card-wrapper quaternary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">
                        <div class="benefit-card">
                            <div class="benefit-icon quaternary-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3>Operational Efficiency</h3>
                            <p>Healthcare providers with well-designed websites report 47% fewer administrative calls as patients self-serve information online. Digital intake forms reduce paperwork processing time by 63% and improve data accuracy.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge quaternary-badge">47% fewer calls</span>
                                <span class="stat-badge quaternary-badge">63% less paperwork</span>
                            </div>
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
                        <h2>Essential Features for Healthcare Websites</h2>
                        <p class="lead">Key components that enhance the patient experience and streamline healthcare operations</p>
                    </div>
                </div>
                <div class="features-grid">
                    <div class="feature-item" data-aos="fade-up">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                            <h3>Appointment Scheduling</h3>
                            <p>Interactive calendars with real-time availability that integrate with your practice management system. Includes appointment reminders, confirmation emails, and cancellation management.</p>
                        </div>
                    </div>
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-file-medical"></i>
                            </div>
                            <h3>Secure Patient Forms</h3>
                            <p>HIPAA-compliant digital intake forms that patients can complete before appointments. Supports electronic signatures and secure data transmission to your EMR system.</p>
                        </div>
                    </div>
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-credit-card"></i>
                            </div>
                            <h3>Bill Payment Portal</h3>
                            <p>Secure payment processing integration that enables patients to view bills, make payments, and manage payment plans through a user-friendly interface.</p>
                        </div>
                    </div>
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-search-location"></i>
                            </div>
                            <h3>Provider Directory</h3>
                            <p>Searchable database of healthcare providers with filtering by specialty, insurance accepted, languages spoken, and availability. Includes detailed provider profiles with credentials and photos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2>Ready to Create Your Healthcare Website?</h2>
                    <p class="lead">Let's build a patient-centered, compliant digital experience that elevates your healthcare organization.</p>
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
                        <p class="lead">Common questions about healthcare website design</p>
                    </div>
                </div>
                <div class="faq-container">
                    <div class="faq-item active">
                        <div class="faq-question">
                            <h3>What makes healthcare website design different from other industries?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Healthcare website design involves several unique considerations:</p>
                            <ul>
                                <li><strong>Regulatory Compliance:</strong> Healthcare websites must adhere to strict regulations including HIPAA for data protection, ADA for accessibility, and various medical advertising guidelines.</li>
                                <li><strong>Emotional Sensitivity:</strong> Healthcare decisions often involve anxiety, fear, or vulnerability. The design must account for these emotional states with clear information, reassuring visuals, and a calm user experience.</li>
                                <li><strong>Information Complexity:</strong> Medical information is often complex and technical. Healthcare websites need to present this information in ways that are accurate yet comprehensible to patients with varying health literacy levels.</li>
                                <li><strong>System Integrations:</strong> Healthcare websites typically need to integrate with specialized systems like EMR/EHR platforms, practice management software, telemedicine solutions, and insurance verification tools.</li>
                                <li><strong>Trust Signaling:</strong> Healthcare websites require stronger trust signals through credentials, affiliations, certifications, and social proof that are specific to the medical field.</li>
                            </ul>
                            <p>Our specialized healthcare web design approach addresses these unique factors while maintaining an exceptional user experience for patients and stakeholders.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do you ensure HIPAA compliance in healthcare websites?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>We implement comprehensive HIPAA compliance measures throughout the website development process:</p>
                            <ul>
                                <li><strong>Secure Infrastructure:</strong> All healthcare websites are hosted on HIPAA-compliant servers with proper BAA (Business Associate Agreement) documentation.</li>
                                <li><strong>Data Encryption:</strong> Implementation of TLS/SSL encryption for all data in transit and AES-256 encryption for sensitive data at rest.</li>
                                <li><strong>Access Controls:</strong> Role-based access controls, multi-factor authentication, and session timeouts for any areas with protected health information (PHI).</li>
                                <li><strong>Form Security:</strong> HIPAA-compliant form processing with secure transmission and storage of any patient-provided information.</li>
                                <li><strong>Audit Logging:</strong> Comprehensive logging of all access to PHI with user identification, timestamps, and activity recording.</li>
                                <li><strong>Privacy Policies:</strong> Development of HIPAA-compliant privacy notices and terms of use specific to healthcare.</li>
                                <li><strong>Third-Party Validation:</strong> Security assessments and penetration testing by healthcare security specialists.</li>
                            </ul>
                            <p>We also provide documentation and training materials to help your staff maintain HIPAA compliance when managing website content and responding to patient communications through the site.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Can you integrate our healthcare website with our existing EMR/EHR system?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we specialize in healthcare system integrations and can connect your website with most major EMR/EHR platforms including:</p>
                            <ul>
                                <li><strong>Epic Integration:</strong> Patient portal connections, appointment scheduling, and MyChart functionality.</li>
                                <li><strong>Cerner:</strong> PowerChart and Millennium integration for patient data and scheduling.</li>
                                <li><strong>Allscripts:</strong> Professional EHR and Practice Management integration.</li>
                                <li><strong>NextGen:</strong> Patient portal and scheduling system connections.</li>
                                <li><strong>Athenahealth:</strong> athenaClinicals and athenaCollector integration.</li>
                                <li><strong>eClinicalWorks:</strong> Patient engagement and scheduling tools integration.</li>
                                <li><strong>Other Systems:</strong> We can work with virtually any EMR/EHR that offers API access or integration capabilities.</li>
                            </ul>
                            <p>Our integration approach uses secure API connections, HL7 interfaces where appropriate, and FHIR standards for modern healthcare data exchange. We implement these integrations with careful attention to data security, performance, and maintaining the integrity of your clinical workflows.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do you approach accessibility for healthcare websites?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Healthcare websites must be accessible to all users, including those with disabilities. Our accessibility approach includes:</p>
                            <ul>
                                <li><strong>WCAG 2.1 AA Compliance:</strong> We design and develop to meet or exceed Web Content Accessibility Guidelines at the AA level, which addresses most accessibility requirements.</li>
                                <li><strong>ADA Compliance:</strong> All healthcare websites are built to comply with Americans with Disabilities Act requirements for digital services.</li>
                                <li><strong>Section 508 Compliance:</strong> For healthcare organizations working with government agencies, we ensure Section 508 compliance.</li>
                                <li><strong>Assistive Technology Support:</strong> Full compatibility with screen readers (JAWS, NVDA, VoiceOver), voice recognition software, and other assistive technologies.</li>
                                <li><strong>Accessible Content Guidelines:</strong> Training and documentation for maintaining accessibility in content updates.</li>
                                <li><strong>Multiple Testing Methods:</strong> Combination of automated testing tools, manual testing, and testing with users who have disabilities.</li>
                            </ul>
                            <p>For healthcare in particular, we pay special attention to forms, medical information readability, and ensuring that critical patient pathways (like appointment scheduling) are fully accessible to users of all abilities.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What is your approach to healthcare SEO and content creation?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Healthcare SEO and content require specialized expertise that balances search optimization with medical accuracy and regulatory compliance:</p>
                            <ul>
                                <li><strong>E-A-T Focus:</strong> Emphasis on Google's Expertise, Authoritativeness, and Trustworthiness factors, which are heavily weighted for healthcare content.</li>
                                <li><strong>Medical Writer Collaboration:</strong> We partner with healthcare copywriters who understand both SEO and medical terminology.</li>
                                <li><strong>Provider Review Process:</strong> Structured workflows for clinician review and approval of medical content.</li>
                                <li><strong>Compliance-First Approach:</strong> All content strategies adhere to healthcare advertising regulations and avoid prohibited claims.</li>
                                <li><strong>Patient-Friendly Language:</strong> Translation of complex medical terms into approachable language while maintaining accuracy.</li>
                                <li><strong>Local SEO for Providers:</strong> Optimization for local search to capture patient searches in your service areas.</li>
                                <li><strong>Schema Markup:</strong> Implementation of healthcare-specific schema markup for enhanced search results.</li>
                            </ul>
                            <p>We also create comprehensive content strategies that address the full patient journey, from symptom research to provider selection and post-care support, ensuring your website becomes a valuable resource that builds trust with potential patients.</p>
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
