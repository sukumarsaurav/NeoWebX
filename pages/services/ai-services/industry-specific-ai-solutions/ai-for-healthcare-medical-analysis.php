<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';

// Page specific content
$pageTitle = "AI for Healthcare & Medical Analysis | NeoWebX";
$pageDescription = "Transform patient care with AI-powered healthcare solutions. From medical image analysis to predictive diagnostics and personalized treatment plans, our AI solutions enhance clinical decision-making and improve outcomes.";
$serviceName = "AI for Healthcare & Medical Analysis";
$serviceSlug = "ai-for-healthcare-medical-analysis";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'healthcare AI, medical AI, AI diagnostics, medical image analysis, predictive healthcare analytics, patient risk stratification, clinical decision support, healthcare machine learning, AI in radiology, healthcare data analytics'
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
                <p class="lead">Advanced AI solutions for improved patient outcomes and operational efficiency</p>
                <div class="hero-buttons">
                    <a href="/pages/contact.php" class="btn btn-primary">Elevate Healthcare with AI</a>
                    <a href="/pages/portfolio.php" class="btn btn-outline">View Healthcare Solutions</a>
                </div>
                <div class="tech-stack">
                    <span>Technologies:</span>
                    <img src="/assets/images/tech/tensorflow.png" alt="TensorFlow" title="TensorFlow">
                    <img src="/assets/images/tech/python.png" alt="Python" title="Python">
                    <img src="/assets/images/tech/aws.png" alt="AWS" title="AWS">
                    <img src="/assets/images/tech/azure.png" alt="Azure" title="Azure">
                </div>
            </div>
            <div class="hero-image" data-aos="fade-left">
                <img src="/assets/svg/AI-healthcare-medical-analysis-NeowebX.svg" alt="AI for Healthcare & Medical Analysis" class="floating-image">
                <div class="decoration-circle-1"></div>
                <div class="decoration-circle-2"></div>
            </div>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="overview-section">
    <div class="container">
        <div class="section-header">
            <div class="overview-header" data-aos="fade-up">
                <h2>Transforming Healthcare with Artificial Intelligence</h2>
                <p class="section-lead">Our AI solutions help healthcare providers deliver more accurate diagnoses, personalized treatments, and improved patient care.</p>
            </div>
        </div>
        
        <div class="overview-cards">
            <div class="overview-card primary-card" data-aos="fade-up">
                <div class="card-icon">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <h3>The Challenge</h3>
                <p>Healthcare professionals face overwhelming amounts of data and increasing pressure to improve outcomes while reducing costs.</p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Limited time for complex data analysis</li>
                    <li><i class="fas fa-check-circle"></i> Diagnostic delays and variability</li>
                    <li><i class="fas fa-check-circle"></i> Missed opportunities for early intervention</li>
                </ul>
            </div>
            
            <div class="overview-card secondary-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3>Our Solution</h3>
                <p>Our healthcare AI solutions harness machine learning, computer vision, and NLP to analyze medical data at scale.</p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Early disease detection algorithms</li>
                    <li><i class="fas fa-check-circle"></i> Personalized treatment recommendations</li>
                    <li><i class="fas fa-check-circle"></i> Optimized clinical workflows</li>
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
                <h2>Our Healthcare AI Solutions</h2>
                <p class="section-lead">Comprehensive AI applications for modern healthcare challenges</p>
            </div>
        </div>
        
        <div class="services-grid">
            <div class="service-item" data-aos="fade-up">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-x-ray"></i>
                    </div>
                    <h3>Medical Imaging Analysis</h3>
                    <p>AI-powered analysis of radiological images to enhance detection, diagnosis, and treatment planning.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> X-ray & CT scan analysis</li>
                        <li><i class="fas fa-check"></i> MRI interpretation & enhancement</li>
                        <li><i class="fas fa-check"></i> Abnormality detection</li>
                        <li><i class="fas fa-check"></i> Lesion characterization</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Predictive Analytics & Risk Stratification</h3>
                    <p>Advanced algorithms that predict patient risks, disease progression, and treatment responses.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Patient deterioration prediction</li>
                        <li><i class="fas fa-check"></i> Readmission risk assessment</li>
                        <li><i class="fas fa-check"></i> Disease progression modeling</li>
                        <li><i class="fas fa-check"></i> Population health risk analysis</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-stethoscope"></i>
                    </div>
                    <h3>Clinical Decision Support</h3>
                    <p>AI-powered tools that assist clinicians in diagnosis, treatment planning, and care management.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Diagnostic assistance</li>
                        <li><i class="fas fa-check"></i> Treatment recommendation</li>
                        <li><i class="fas fa-check"></i> Medication management</li>
                        <li><i class="fas fa-check"></i> Clinical pathway optimization</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-dna"></i>
                    </div>
                    <h3>Genomic Data Analysis</h3>
                    <p>Machine learning tools for analyzing genomic data to enable precision medicine and personalized treatments.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Variant interpretation</li>
                        <li><i class="fas fa-check"></i> Biomarker discovery</li>
                        <li><i class="fas fa-check"></i> Treatment response prediction</li>
                        <li><i class="fas fa-check"></i> Disease risk assessment</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-file-medical-alt"></i>
                    </div>
                    <h3>Electronic Health Record Analysis</h3>
                    <p>Natural language processing and data mining to extract insights from unstructured clinical notes and EHR data.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Clinical documentation analysis</li>
                        <li><i class="fas fa-check"></i> Automated coding assistance</li>
                        <li><i class="fas fa-check"></i> Quality measure extraction</li>
                        <li><i class="fas fa-check"></i> Historical data mining</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="500">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <h3>Operational Optimization</h3>
                    <p>AI solutions that improve hospital operations, resource allocation, and care delivery efficiency.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Patient flow optimization</li>
                        <li><i class="fas fa-check"></i> Staff scheduling & allocation</li>
                        <li><i class="fas fa-check"></i> Resource utilization prediction</li>
                        <li><i class="fas fa-check"></i> Capacity planning</li>
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
                <h2>Our Implementation Approach</h2>
                <p class="section-lead">A proven methodology to successfully deploy AI in healthcare environments</p>
            </div>
        </div>
        
        <div class="process-timeline">
            <!-- Timeline Line -->
            <div class="timeline-line"></div>
            
            <div class="process-grid">
                <div class="process-card-wrapper" data-aos="fade-up">
                    <div class="process-number">1</div>
                    <div class="process-card">
                        <h3>Clinical Needs Assessment</h3>
                        <p>We work with clinical stakeholders to identify high-impact areas where AI can improve outcomes and workflow efficiency.</p>
                        <ul class="process-list">
                            <li>Clinical workflow analysis</li>
                            <li>Pain point identification</li>
                            <li>Outcome improvement opportunities</li>
                            <li>ROI potential assessment</li>
                        </ul>
                    </div>
                </div>

                <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-number">2</div>
                    <div class="process-card">
                        <h3>Data Strategy & Governance</h3>
                        <p>We develop a comprehensive data strategy that ensures compliance, privacy, and high-quality data for AI model training.</p>
                        <ul class="process-list">
                            <li>Data availability assessment</li>
                            <li>Privacy & compliance framework</li>
                            <li>Data quality enhancement</li>
                            <li>Integration strategy</li>
                        </ul>
                    </div>
                </div>

                <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-number">3</div>
                    <div class="process-card">
                        <h3>AI Model Development</h3>
                        <p>We develop and validate healthcare-specific AI models with rigorous testing and clinical input.</p>
                        <ul class="process-list">
                            <li>Algorithm selection & customization</li>
                            <li>Model training & validation</li>
                            <li>Clinical validation protocols</li>
                            <li>Performance optimization</li>
                        </ul>
                    </div>
                </div>

                <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-number">4</div>
                    <div class="process-card">
                        <h3>Clinical Integration</h3>
                        <p>We seamlessly integrate AI solutions into existing clinical workflows and healthcare IT infrastructure.</p>
                        <ul class="process-list">
                            <li>EHR/PACS integration</li>
                            <li>Clinical workflow embedding</li>
                            <li>User interface design</li>
                            <li>Interoperability assurance</li>
                        </ul>
                    </div>
                </div>

                <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="400">
                    <div class="process-number">5</div>
                    <div class="process-card">
                        <h3>Validation & Continuous Improvement</h3>
                        <p>We implement rigorous monitoring and improvement protocols to ensure ongoing clinical value and safety.</p>
                        <ul class="process-list">
                            <li>Clinical outcome measurement</li>
                            <li>Model performance monitoring</li>
                            <li>Feedback integration systems</li>
                            <li>Continuous model refinement</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Case Studies Section -->
<section class="case-studies-section">
    <div class="container">
        <div class="section-header">
            <div class="case-studies-header" data-aos="fade-up">
                <h2>Healthcare AI Success Stories</h2>
                <p class="section-lead">Real-world results from our AI implementations in healthcare</p>
            </div>
        </div>
        
        <div class="case-studies-grid">
            <div class="case-study-item" data-aos="fade-up">
                <div class="case-study-card">
                    <div class="case-study-content">
                        <h3>Regional Hospital Reduces Readmissions by 32%</h3>
                        <p>A large regional hospital implemented our patient risk stratification platform, leading to a 32% reduction in 30-day readmissions for high-risk cardiac patients.</p>
                        <ul class="case-study-results">
                            <li><strong>32%</strong> reduction in readmissions</li>
                            <li><strong>$3.2M</strong> annual cost savings</li>
                            <li><strong>89%</strong> accuracy in identifying high-risk patients</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="case-study-item" data-aos="fade-up" data-aos-delay="100">
                <div class="case-study-card">
                    <div class="case-study-content">
                        <h3>Radiology Practice Improves Diagnostic Accuracy by 28%</h3>
                        <p>A multi-location radiology practice deployed our AI-powered image analysis solution, resulting in a 28% improvement in early cancer detection rates.</p>
                        <ul class="case-study-results">
                            <li><strong>28%</strong> improvement in early detection</li>
                            <li><strong>41%</strong> reduction in false negatives</li>
                            <li><strong>22%</strong> increase in radiologist productivity</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="case-study-item" data-aos="fade-up" data-aos-delay="200">
                <div class="case-study-card">
                    <div class="case-study-content">
                        <h3>Healthcare System Optimizes Resource Allocation</h3>
                        <p>A major healthcare system implemented our operational AI platform, optimizing staff scheduling and resource allocation to reduce wait times and improve utilization.</p>
                        <ul class="case-study-results">
                            <li><strong>24%</strong> reduction in emergency wait times</li>
                            <li><strong>18%</strong> improvement in resource utilization</li>
                            <li><strong>$4.5M</strong> annual operational savings</li>
                        </ul>
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
            <h2>Privacy, Security & Compliance</h2>
            <p class="section-lead">Our commitment to healthcare standards and patient data protection</p>
        </div>
        
        <div class="standards-grid">
            <div class="standard-item" data-aos="fade-up">
                <div class="standard-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>HIPAA Compliance</h3>
                <ul class="standard-list">
                    <li>End-to-end PHI protection</li>
                    <li>De-identification protocols</li>
                    <li>Access control systems</li>
                    <li>Audit trail implementation</li>
                </ul>
            </div>
            
            <div class="standard-item" data-aos="fade-up" data-aos-delay="100">
                <div class="standard-icon">
                    <i class="fas fa-lock"></i>
                </div>
                <h3>Enterprise-Grade Security</h3>
                <ul class="standard-list">
                    <li>End-to-end encryption</li>
                    <li>Advanced access controls</li>
                    <li>Secure cloud environments</li>
                    <li>Penetration testing protocols</li>
                </ul>
            </div>
            
            <div class="standard-item" data-aos="fade-up" data-aos-delay="200">
                <div class="standard-icon">
                    <i class="fas fa-clipboard-check"></i>
                </div>
                <h3>Regulatory Framework</h3>
                <ul class="standard-list">
                    <li>FDA guidance compliance</li>
                    <li>ISO 13485 medical device standards</li>
                    <li>Quality management systems</li>
                    <li>Regulatory documentation</li>
                </ul>
            </div>
            
            <div class="standard-item" data-aos="fade-up" data-aos-delay="300">
                <div class="standard-icon">
                    <i class="fas fa-eye-slash"></i>
                </div>
                <h3>Privacy by Design</h3>
                <ul class="standard-list">
                    <li>Data minimization practices</li>
                    <li>Privacy-preserving techniques</li>
                    <li>Differential privacy methods</li>
                    <li>Federated learning options</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Benefits of AI in Healthcare</h2>
            <p class="section-lead">Transforming healthcare delivery through intelligent technology</p>
        </div>
        
        <div class="benefits-grid">
            <div class="benefit-card-wrapper primary-benefit" data-aos="fade-right" data-aos-duration="800">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-heart-pulse"></i>
                    </div>
                    <h3>Improved Patient Outcomes</h3>
                    <p>Earlier disease detection, more accurate diagnoses, and personalized treatment plans lead to better clinical outcomes and reduced mortality rates.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge">35% earlier detection</span>
                        <span class="stat-badge">27% improved outcomes</span>
                    </div>
                </div>
            </div>

            <div class="benefit-card-wrapper secondary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                <div class="benefit-card">
                    <div class="benefit-icon secondary-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Reduced Healthcare Costs</h3>
                    <p>More efficient resource utilization, reduced readmissions, and prevention-focused care significantly lower overall healthcare expenditures.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge secondary-badge">30% lower readmissions</span>
                        <span class="stat-badge secondary-badge">$3.7M annual savings</span>
                    </div>
                </div>
            </div>

            <div class="benefit-card-wrapper tertiary-benefit" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                <div class="benefit-card">
                    <div class="benefit-icon tertiary-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3>Enhanced Clinical Productivity</h3>
                    <p>AI-assisted workflows reduce administrative burden and enable clinicians to focus more time on direct patient care and complex decision-making.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge tertiary-badge">45% less documentation time</span>
                        <span class="stat-badge tertiary-badge">22% more patient time</span>
                    </div>
                </div>
            </div>

            <div class="benefit-card-wrapper quaternary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">
                <div class="benefit-card">
                    <div class="benefit-icon quaternary-icon">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3>Accelerated Medical Research</h3>
                    <p>AI analysis of large datasets dramatically speeds discovery of new treatments, biomarkers, and clinical insights for better healthcare.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge quaternary-badge">5x faster discoveries</span>
                        <span class="stat-badge quaternary-badge">65% more insights found</span>
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
            <h2>Ready to Transform Healthcare with AI?</h2>
            <p class="lead">Let's discuss how our AI solutions can help you improve patient outcomes and operational efficiency.</p>
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
            <div class="faq-header" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p class="section-lead">Common questions about AI in healthcare</p>
            </div>
        </div>
        
        <div class="faq-container">
            <div class="faq-item active">
                <div class="faq-question">
                    <h3>How accurate are AI-based diagnostic systems?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>The accuracy of AI-based diagnostic systems varies by application, but modern healthcare AI has achieved impressive results in many areas. For example, our imaging AI solutions have demonstrated accuracy levels of 90-97% in specific diagnostic tasks, often matching or exceeding the performance of experienced specialists. However, we view AI as a clinical decision support tool rather than a replacement for clinician judgment. Our systems are designed to work alongside healthcare professionals, providing additional insights and analysis while leaving final diagnostic decisions to qualified medical personnel. All our diagnostic AI undergoes rigorous validation, including retrospective studies, prospective trials where appropriate, and continuous performance monitoring post-deployment.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>How do you ensure AI solutions integrate with our existing healthcare IT systems?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>We've designed our healthcare AI solutions with interoperability as a core principle. Our systems support standard healthcare integration protocols including HL7, FHIR, DICOM, and API-based connections, allowing seamless integration with EHR systems, PACS, RIS, laboratory information systems, and other healthcare IT infrastructure. During implementation, our technical team works closely with your IT department to develop a customized integration plan that minimizes disruption. We can deploy our solutions on-premises, in the cloud, or in hybrid environments depending on your infrastructure requirements. Our focus is on embedding AI capabilities directly into existing clinical workflows rather than creating separate systems that require additional steps for clinicians.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>What kind of data do you need to implement healthcare AI solutions?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>The specific data requirements depend on the AI application, but generally include: For diagnostic imaging AI: Anonymized medical images (X-rays, CT scans, MRIs, etc.) with associated clinical findings or pathology results. For predictive analytics: Patient demographic data, medical history, laboratory results, medication information, and outcome data. For clinical decision support: Treatment protocols, clinical guidelines, medical literature, and historical treatment outcomes. For operational optimization: Historical operational data, staffing information, patient flow records, and resource utilization metrics. While more data generally improves AI performance, we can often start with limited datasets and expand over time. We work with your team to identify available data sources, implement privacy-preserving techniques, and develop data governance frameworks that ensure compliance with healthcare regulations.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>How do you address bias and ensure equity in healthcare AI?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>Addressing bias and ensuring equity is central to our healthcare AI development process. We implement several strategies: Diverse training data: We work to ensure training datasets include diverse patient populations across demographics, conditions, and care settings. Bias detection: We employ specialized algorithms to detect potential biases in both training data and model outputs. Transparent development: Our models are developed with interpretability in mind, allowing clinicians to understand how recommendations are generated. Rigorous validation: We validate model performance across different patient subgroups to ensure consistent accuracy. Ongoing monitoring: After deployment, we continuously monitor for performance disparities across patient populations. Regular updates: We update models to address any identified biases or performance gaps. Our goal is to create AI solutions that help reduce healthcare disparities rather than reinforce them, and we consider fairness a fundamental requirement for responsible healthcare AI.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <div class="faq-question">
                    <h3>What ROI can healthcare organizations expect from AI implementation?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>ROI from healthcare AI varies by application, but we typically see returns in several areas: Clinical outcomes: Earlier disease detection, reduced complications, and improved treatment effectiveness translate to better patient outcomes and potential reimbursement advantages under value-based care models. Operational efficiency: AI-optimized resource allocation, scheduling, and workflow automation typically yield 15-25% efficiency improvements. Cost reduction: Predictive analytics for readmission prevention and early intervention can reduce costs by 20-30% for targeted conditions. Revenue optimization: AI-assisted coding and documentation can improve revenue capture by 5-10% through more accurate coding and reduced denials. Time savings: AI tools that automate routine tasks can save clinicians 1-2 hours per day, improving both productivity and satisfaction. Most of our healthcare clients achieve positive ROI within 12-18 months of implementation, with ongoing benefits accumulating over time. We work with each organization to establish clear KPIs and measurement frameworks to track both financial and clinical impact.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once '../../../../components/footer.php';
?>
<script src="/assets/js/services.js"></script>
