<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';

// Page specific content
$pageTitle = "IoT & Embedded Systems | NeoWebX";
$pageDescription = "Connect physical devices to the digital world with smart, secure IoT solutions that drive innovation and operational efficiency.";
$serviceName = "IoT & Embedded Systems";
$serviceSlug = "iot-embedded-systems";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'IoT development, embedded systems, Internet of Things, IoT consulting, smart devices, connected devices, IoT architecture, edge computing, sensor networks, IoT security'
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
                <p class="lead"><?php echo $pageDescription; ?></p>
                <div class="hero-buttons">
                    <a href="/pages/contact.php" class="btn btn-primary">Start Your IoT Project</a>
                    <a href="/pages/portfolio.php" class="btn btn-outline">View Portfolio</a>
                </div>
                <div class="tech-stack">
                    <span>Technologies:</span>
                    <img src="/assets/images/tech/arduino.png" alt="Arduino" title="Arduino">
                    <img src="/assets/images/tech/raspberry-pi.png" alt="Raspberry Pi" title="Raspberry Pi">
                    <img src="/assets/images/tech/aws-iot.png" alt="AWS IoT" title="AWS IoT">
                    <img src="/assets/images/tech/azure-iot.png" alt="Azure IoT" title="Azure IoT">
                </div>
            </div>
            <div class="hero-image" data-aos="fade-left">
                <img src="/assets/images/services/iot-embedded.svg" alt="<?php echo $serviceName; ?>" class="floating-image">
            </div>
        </div>
    </div>
</section>

<!-- Service Overview -->
<section class="overview-section">
    <div class="container">
        <div class="section-header">
            <div class="overview-header" data-aos="fade-up">
                <h2>Connect the Physical & Digital Worlds</h2>
                <p class="section-lead">We develop cutting-edge IoT and embedded systems that transform standalone devices into smart, connected solutions that collect data, communicate with each other, and drive automation and insights across your organization.</p>
            </div>
        </div>
        
        <div class="overview-cards">
            <div class="overview-card primary-card" data-aos="fade-up">
                <div class="card-icon">
                    <i class="fas fa-microchip"></i>
                </div>
                <h3>Embedded Systems Development</h3>
                <p>Custom hardware and software solutions designed to meet specific requirements for performance, reliability, and efficiency in specialized applications.</p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Firmware & embedded software</li>
                    <li><i class="fas fa-check-circle"></i> Real-time operating systems</li>
                    <li><i class="fas fa-check-circle"></i> Hardware integration</li>
                </ul>
            </div>
            
            <div class="overview-card secondary-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-icon">
                    <i class="fas fa-network-wired"></i>
                </div>
                <h3>IoT Ecosystem Development</h3>
                <p>End-to-end IoT solutions that connect devices, gather data, and deliver actionable insights through secure, scalable cloud platforms and intuitive dashboards.</p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Sensor network design</li>
                    <li><i class="fas fa-check-circle"></i> Cloud connectivity</li>
                    <li><i class="fas fa-check-circle"></i> Data analytics & visualization</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Why Hire Us Section -->
<section class="why-hire-us">
    <div class="container">
        <div class="section-header">
            <h2>Why Choose NeoWebX for IoT & Embedded Systems</h2>
            <p class="lead">What sets our IoT solutions apart</p>
        </div>
        <div class="features-grid">
            <div class="feature-item" data-aos="fade-up">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-network-wired"></i>
                    </div>
                    <h3>Innovative Connectivity</h3>
                    <p>We create IoT solutions that connect devices seamlessly and securely.</p>
                </div>
            </div>
            <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Robust Security</h3>
                    <p>Our IoT systems are designed with security as a top priority to protect your data.</p>
                </div>
            </div>
            <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Scalable Solutions</h3>
                    <p>We build scalable IoT systems that grow with your business needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Our IoT & Embedded Services</h2>
            <p class="section-lead">Comprehensive solutions for connecting devices and systems</p>
        </div>
        
        <div class="services-grid">
            <div class="service-item" data-aos="fade-up">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-sitemap"></i>
                    </div>
                    <h3>IoT Architecture Design</h3>
                    <p>Design scalable, secure IoT architectures tailored to your specific business needs and objectives.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Requirements analysis</li>
                        <li><i class="fas fa-check"></i> Architecture blueprint</li>
                        <li><i class="fas fa-check"></i> Technology selection</li>
                        <li><i class="fas fa-check"></i> Security planning</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Firmware Development</h3>
                    <p>Create reliable, optimized firmware for embedded devices that ensures functionality, security, and performance.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Embedded C/C++ development</li>
                        <li><i class="fas fa-check"></i> Real-time systems</li>
                        <li><i class="fas fa-check"></i> Low-power optimization</li>
                        <li><i class="fas fa-check"></i> Over-the-air updates</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3>IoT Cloud Platforms</h3>
                    <p>Develop secure, scalable cloud backends that manage device connectivity, data processing, and application integration.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Device management</li>
                        <li><i class="fas fa-check"></i> Data storage & processing</li>
                        <li><i class="fas fa-check"></i> API development</li>
                        <li><i class="fas fa-check"></i> Rules & event engines</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>IoT Analytics & Dashboards</h3>
                    <p>Build intuitive dashboards and analytics solutions that transform IoT data into actionable business insights.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Real-time monitoring</li>
                        <li><i class="fas fa-check"></i> Predictive analytics</li>
                        <li><i class="fas fa-check"></i> Custom dashboards</li>
                        <li><i class="fas fa-check"></i> Business intelligence</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="process-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Our IoT Development Process</h2>
            <p class="section-lead">A systematic approach to creating secure, scalable IoT solutions</p>
        </div>
        
        <div class="process-timeline">
            <!-- Timeline Line -->
            <div class="timeline-line"></div>
            
            <div class="process-grid">
                <div class="process-card-wrapper" data-aos="fade-up">
                    <div class="process-number">1</div>
                    <div class="process-card">
                        <h3>Discovery & Planning</h3>
                        <p>We start by understanding your business goals, use cases, and technical requirements to create a comprehensive project roadmap.</p>
                        <ul class="process-list">
                            <li>Business requirements gathering</li>
                            <li>Use case definition & prioritization</li>
                            <li>Technical feasibility assessment</li>
                            <li>Project roadmap development</li>
                        </ul>
                    </div>
                </div>

                <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-number">2</div>
                    <div class="process-card">
                        <h3>Architecture & Design</h3>
                        <p>We design a comprehensive IoT architecture that addresses connectivity, security, scalability, and integration requirements.</p>
                        <ul class="process-list">
                            <li>IoT architecture blueprint</li>
                            <li>Hardware & component selection</li>
                            <li>Communication protocols selection</li>
                            <li>Security architecture design</li>
                        </ul>
                    </div>
                </div>

                <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-number">3</div>
                    <div class="process-card">
                        <h3>Development & Integration</h3>
                        <p>Our engineers develop all components of your IoT solution, ensuring seamless integration between devices, cloud, and applications.</p>
                        <ul class="process-list">
                            <li>Firmware/embedded software development</li>
                            <li>IoT cloud platform configuration</li>
                            <li>Backend & API development</li>
                            <li>Application & dashboard creation</li>
                        </ul>
                    </div>
                </div>

                <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="300">
                    <div class="process-number">4</div>
                    <div class="process-card">
                        <h3>Testing & Deployment</h3>
                        <p>We rigorously test your IoT solution and deploy it to production with comprehensive monitoring and support.</p>
                        <ul class="process-list">
                            <li>Hardware & connectivity testing</li>
                            <li>Security & performance testing</li>
                            <li>Production deployment</li>
                            <li>Monitoring & maintenance setup</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technology Section -->
<section class="technologies-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>IoT & Embedded Technologies</h2>
            <p class="section-lead">Cutting-edge technologies for building connected solutions</p>
        </div>
        
        <div class="tech-grid">
            <div class="tech-item" data-aos="fade-up">
                <div class="tech-card">
                    <div class="tech-icon">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <h3>Hardware Platforms</h3>
                    <ul>
                        <li>Arduino</li>
                        <li>Raspberry Pi</li>
                        <li>ESP32/ESP8266</li>
                        <li>Custom PCB Design</li>
                        <li>ARM Cortex-M</li>
                    </ul>
                </div>
            </div>
            
            <div class="tech-item" data-aos="fade-up" data-aos-delay="100">
                <div class="tech-card">
                    <div class="tech-icon">
                        <i class="fas fa-broadcast-tower"></i>
                    </div>
                    <h3>Communication Protocols</h3>
                    <ul>
                        <li>Wi-Fi</li>
                        <li>Bluetooth/BLE</li>
                        <li>LoRaWAN</li>
                        <li>Zigbee/Z-Wave</li>
                        <li>Cellular (4G/5G/LTE-M/NB-IoT)</li>
                    </ul>
                </div>
            </div>
            
            <div class="tech-item" data-aos="fade-up" data-aos-delay="200">
                <div class="tech-card">
                    <div class="tech-icon">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <h3>Cloud Platforms</h3>
                    <ul>
                        <li>AWS IoT</li>
                        <li>Azure IoT</li>
                        <li>Google Cloud IoT</li>
                        <li>ThingsBoard</li>
                        <li>Custom IoT platforms</li>
                    </ul>
                </div>
            </div>
            
            <div class="tech-item" data-aos="fade-up" data-aos-delay="300">
                <div class="tech-card">
                    <div class="tech-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Development Tools</h3>
                    <ul>
                        <li>C/C++</li>
                        <li>Python</li>
                        <li>Node.js</li>
                        <li>MQTT</li>
                        <li>Docker/Kubernetes</li>
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
            <h2>Our IoT Standards & Best Practices</h2>
            <p class="section-lead">How we ensure secure, reliable, and maintainable IoT implementations</p>
        </div>
        
        <div class="standards-grid">
            <div class="standard-item" data-aos="fade-up">
                <div class="standard-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Security-First Design</h3>
                <ul class="standard-list">
                    <li>End-to-end encryption</li>
                    <li>Secure boot & firmware validation</li>
                    <li>Device authentication</li>
                    <li>Regular security audits</li>
                </ul>
            </div>
            
            <div class="standard-item" data-aos="fade-up" data-aos-delay="100">
                <div class="standard-icon">
                    <i class="fas fa-battery-full"></i>
                </div>
                <h3>Energy Efficiency</h3>
                <ul class="standard-list">
                    <li>Low-power design patterns</li>
                    <li>Sleep mode optimization</li>
                    <li>Efficient data transmission</li>
                    <li>Battery life maximization</li>
                </ul>
            </div>
            
            <div class="standard-item" data-aos="fade-up" data-aos-delay="200">
                <div class="standard-icon">
                    <i class="fas fa-expand-arrows-alt"></i>
                </div>
                <h3>Scalability</h3>
                <ul class="standard-list">
                    <li>Horizontal scaling architecture</li>
                    <li>Microservices approach</li>
                    <li>Load-balanced infrastructure</li>
                    <li>Elastic cloud resources</li>
                </ul>
            </div>
            
            <div class="standard-item" data-aos="fade-up" data-aos-delay="300">
                <div class="standard-icon">
                    <i class="fas fa-sync"></i>
                </div>
                <h3>Maintainability</h3>
                <ul class="standard-list">
                    <li>Over-the-air update capability</li>
                    <li>Remote monitoring</li>
                    <li>Modular design</li>
                    <li>Comprehensive documentation</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Benefits of IoT & Embedded Systems</h2>
            <p class="section-lead">How IoT solutions drive innovation and value across industries</p>
        </div>
        
        <div class="benefits-grid">
            <div class="benefit-card-wrapper primary-benefit" data-aos="fade-right" data-aos-duration="800">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Operational Efficiency</h3>
                    <p>Streamline operations through automated monitoring, predictive maintenance, and real-time insights. Organizations implementing IoT solutions report up to 25% reduction in operational costs and 30% improvement in equipment uptime.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge">25% cost reduction</span>
                        <span class="stat-badge">30% better uptime</span>
                    </div>
                </div>
            </div>
            
            <div class="benefit-card-wrapper secondary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
                <div class="benefit-card">
                    <div class="benefit-icon secondary-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Data-Driven Insights</h3>
                    <p>Gain valuable insights from connected devices to inform business decisions and identify improvement opportunities. Companies leveraging IoT analytics see 35% better decision-making speed and 40% increased accuracy in forecasting.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge secondary-badge">35% faster decisions</span>
                        <span class="stat-badge secondary-badge">40% forecast accuracy</span>
                    </div>
                </div>
            </div>
            
            <div class="benefit-card-wrapper tertiary-benefit" data-aos="fade-right" data-aos-duration="800" data-aos-delay="200">
                <div class="benefit-card">
                    <div class="benefit-icon tertiary-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Predictive Maintenance</h3>
                    <p>Prevent equipment failures and reduce downtime through real-time monitoring and predictive analytics. Industrial IoT implementations show 45% reduction in downtime and 60% decrease in unexpected failures.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge tertiary-badge">45% less downtime</span>
                        <span class="stat-badge tertiary-badge">60% fewer failures</span>
                    </div>
                </div>
            </div>
            
            <div class="benefit-card-wrapper quaternary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                <div class="benefit-card">
                    <div class="benefit-icon quaternary-icon">
                        <i class="fas fa-cubes"></i>
                    </div>
                    <h3>New Business Models</h3>
                    <p>Enable innovative business models such as product-as-a-service, subscription-based offerings, and outcome-based contracts. Organizations with connected products report 20% new revenue streams and 15% higher customer retention.</p>
                    <div class="benefit-stats">
                        <span class="stat-badge quaternary-badge">20% new revenue</span>
                        <span class="stat-badge quaternary-badge">15% better retention</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Use Cases Section -->
<section class="use-cases-section section-light">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Industry Applications</h2>
            <p class="section-lead">How IoT transforms various industries</p>
        </div>
        
        <div class="use-cases-grid">
            <div class="use-case-item" data-aos="fade-up">
                <div class="use-case-card">
                    <div class="use-case-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h3>Industrial IoT</h3>
                    <p>Connected factory systems, equipment monitoring, predictive maintenance, and optimized production processes.</p>
                </div>
            </div>
            
            <div class="use-case-item" data-aos="fade-up" data-aos-delay="100">
                <div class="use-case-card">
                    <div class="use-case-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Smart Buildings</h3>
                    <p>Energy management, occupancy monitoring, environmental controls, and intelligent security systems.</p>
                </div>
            </div>
            
            <div class="use-case-item" data-aos="fade-up" data-aos-delay="200">
                <div class="use-case-card">
                    <div class="use-case-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Supply Chain & Logistics</h3>
                    <p>Asset tracking, fleet management, inventory optimization, and condition monitoring.</p>
                </div>
            </div>
            
            <div class="use-case-item" data-aos="fade-up" data-aos-delay="300">
                <div class="use-case-card">
                    <div class="use-case-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Healthcare IoT</h3>
                    <p>Remote patient monitoring, medical device connectivity, asset tracking, and facility management.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Build Your IoT Solution?</h2>
            <p class="lead">Let's connect your devices and transform your business with innovative IoT solutions.</p>
            <a href="/pages/contact.php" class="cta-btn animate-pulse-slow">
                Schedule an IoT Consultation
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
                <p class="section-lead">Common questions about IoT & embedded systems</p>
            </div>
        </div>
        <div class="faq-container">
            <div class="faq-item active">
                <div class="faq-question">
                    <h3>How do you ensure IoT security?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>We implement a multilayered security approach that includes secure hardware design, encrypted communications, secure boot processes, strong authentication and authorization mechanisms, and regular security updates. We also conduct thorough security assessments and penetration testing to identify and address vulnerabilities before deployment. Our IoT security framework follows industry best practices and standards such as OWASP IoT Top 10 and IEC 62443.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What's your approach to IoT data management?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>Our approach to IoT data management focuses on efficient collection, processing, storage, and analysis of device data. We design data pipelines that can handle the volume, velocity, and variety of IoT data while ensuring data quality and security. This includes edge computing for local processing when appropriate, data filtering to reduce bandwidth usage, time-series databases for efficient storage, and analytics tools to extract actionable insights. We also implement data governance policies to ensure compliance with relevant regulations and standards.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>How do you handle interoperability in IoT ecosystems?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>We address interoperability by using established standards and protocols whenever possible, such as MQTT, CoAP, and OPC UA. For integration with existing systems, we develop custom adapters and APIs that enable seamless communication. Our architecture design emphasizes modular components with well-defined interfaces, allowing for easier integration with various devices and platforms. We also stay current with industry consortiums like the Open Connectivity Foundation to ensure our solutions align with evolving standards.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <h3>What's the typical timeline for an IoT project?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>IoT project timelines vary based on complexity and scope. A proof of concept can typically be developed in 1-2 months. Small to medium-scale projects with limited custom hardware requirements usually take 3-6 months from conception to deployment. Large enterprise IoT initiatives or projects requiring custom hardware development may take 6-12 months or longer. We follow an agile development approach that allows for incremental deployment, enabling you to see value from your IoT investment sooner while we continue to expand functionality.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?>
<script src="/assets/js/services.js"></script>
