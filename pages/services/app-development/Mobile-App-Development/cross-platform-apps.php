<?php
define('BASEPATH', true);
require_once '../../../../includes/config.php';

// Initialize the database connection

// SEO Data
$pageTitle = "Cross-Platform App Development Services | NeoWebX";
$pageDescription = "Build efficient and cost-effective mobile applications that work seamlessly across multiple platforms. Our cross-platform development services help you reach wider audiences with a single codebase.";
$serviceName = "Cross-Platform App Development";
$serviceSlug = "cross-platform-apps";

$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'cross-platform development, react native, flutter, ionic, mobile app development, hybrid apps, multi-platform apps, cross-platform frameworks'
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
                        <a href="/pages/contact.php" class="btn btn-primary">Start Your Cross-Platform App</a>
                        <a href="/pages/portfolio.php" class="btn btn-outline">View Portfolio</a>
                    </div>
                    <div class="tech-stack">
                        <span>Technologies:</span>
                        <img src="/assets/images/tech/react-native.png" alt="React Native" title="React Native">
                        <img src="/assets/images/tech/flutter.png" alt="Flutter" title="Flutter">
                        <img src="/assets/images/tech/ionic.png" alt="Ionic" title="Ionic">
                        <img src="/assets/images/tech/xamarin.png" alt="Xamarin" title="Xamarin">
                    </div>
                </div>
                <div class="hero-image" data-aos="fade-left">
                    <img src="/assets/images/services/cross-platform-development.svg" alt="Cross-Platform App Development" class="floating-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Service Overview -->
    <section class="overview-section">
        <div class="container">
            <div class="section-header">
                <div class="overview-header" data-aos="fade-up">
                    <h2>Expert Cross-Platform Development Services</h2>
                    <p class="section-lead">We leverage modern cross-platform frameworks to build high-performance applications that provide native-like experiences across all platforms, helping you reach more users with less development time and cost.</p>
                </div>
            </div>
            
            <div class="overview-cards">
                <div class="overview-card primary-card" data-aos="fade-up">
                    <div class="card-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3>Code Once, Run Everywhere</h3>
                    <p>Our cross-platform approach allows you to maintain a single codebase while delivering consistent experiences across iOS, Android, and web platforms.</p>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Unified codebase</li>
                        <li><i class="fas fa-check-circle"></i> Consistent user experience</li>
                        <li><i class="fas fa-check-circle"></i> Simpler maintenance</li>
                    </ul>
                </div>
                
                <div class="overview-card secondary-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <h3>Cost-Effective Solutions</h3>
                    <p>Reduce development time and costs while maintaining high quality and performance with our efficient cross-platform development approach.</p>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Lower development costs</li>
                        <li><i class="fas fa-check-circle"></i> Faster time-to-market</li>
                        <li><i class="fas fa-check-circle"></i> Reduced maintenance expenses</li>
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
                    <h2>Our Cross-Platform Development Services</h2>
                    <p class="section-lead">Comprehensive cross-platform solutions tailored to your business needs</p>
                </div>
            </div>
            
            <div class="services-grid">
                <div class="service-item" data-aos="fade-up">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3>React Native Development</h3>
                        <p>Build native-like applications using React Native for optimal performance and user experience with JavaScript as the core language.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Native UI components</li>
                            <li><i class="fas fa-check"></i> Hot reloading</li>
                            <li><i class="fas fa-check"></i> Native APIs access</li>
                            <li><i class="fas fa-check"></i> Custom modules</li>
                        </ul>
                    </div>
                </div>
                
                <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h3>Flutter Development</h3>
                        <p>Create beautiful, natively compiled applications using Flutter's rich widget library and Dart programming language.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Material Design</li>
                            <li><i class="fas fa-check"></i> Custom animations</li>
                            <li><i class="fas fa-check"></i> Platform-specific styling</li>
                            <li><i class="fas fa-check"></i> High performance</li>
                        </ul>
                    </div>
                </div>
                
                <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-sync"></i>
                        </div>
                        <h3>Progressive Web Apps</h3>
                        <p>Develop web applications that provide app-like experiences across all platforms with offline capabilities and installation options.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Offline functionality</li>
                            <li><i class="fas fa-check"></i> Push notifications</li>
                            <li><i class="fas fa-check"></i> App-like interface</li>
                            <li><i class="fas fa-check"></i> Fast loading</li>
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
                    <h2>Our Development Process</h2>
                    <p class="section-lead">A systematic approach to delivering high-quality cross-platform applications</p>
                </div>
            </div>
            
            <div class="process-timeline">
                <!-- Timeline Line -->
                <div class="timeline-line"></div>
                
                <div class="process-grid">
                    <div class="process-card-wrapper" data-aos="fade-up">
                        <div class="process-number">1</div>
                        <div class="process-card">
                            <h3>Requirements Analysis</h3>
                            <p>We begin by understanding your business goals, target audience, and technical requirements to choose the optimal cross-platform framework.</p>
                            <ul class="process-list">
                                <li>Business goals assessment</li>
                                <li>User requirements gathering</li>
                                <li>Technical feasibility study</li>
                                <li>Framework selection</li>
                            </ul>
                        </div>
                    </div>

                    <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="100">
                        <div class="process-number">2</div>
                        <div class="process-card">
                            <h3>UI/UX Design</h3>
                            <p>We create platform-specific designs while maintaining consistency across devices to ensure optimal user experience on each platform.</p>
                            <ul class="process-list">
                                <li>Cross-platform UI/UX design</li>
                                <li>Platform-specific adaptations</li>
                                <li>Responsive layout creation</li>
                                <li>Interactive prototyping</li>
                            </ul>
                        </div>
                    </div>

                    <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="200">
                        <div class="process-number">3</div>
                        <div class="process-card">
                            <h3>Development & Testing</h3>
                            <p>Our engineers build and thoroughly test your app using the selected cross-platform framework, ensuring quality across all target platforms.</p>
                            <ul class="process-list">
                                <li>Shared codebase development</li>
                                <li>Platform-specific optimizations</li>
                                <li>Integration with native features</li>
                                <li>Cross-platform testing</li>
                            </ul>
                        </div>
                    </div>

                    <div class="process-card-wrapper" data-aos="fade-up" data-aos-delay="300">
                        <div class="process-number">4</div>
                        <div class="process-card">
                            <h3>Deployment & Support</h3>
                            <p>We handle the app store submission process for all platforms and provide ongoing maintenance and support after launch.</p>
                            <ul class="process-list">
                                <li>App store submission</li>
                                <li>CI/CD pipeline setup</li>
                                <li>Performance monitoring</li>
                                <li>Post-launch support</li>
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
                    <h2>Technologies We Use</h2>
                    <p class="section-lead">Latest cross-platform frameworks and tools</p>
                </div>
            </div>
            
            <div class="tech-grid">
                <div class="tech-item" data-aos="fade-up">
                    <div class="tech-card">
                        <div class="tech-icon">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <h3>Frameworks</h3>
                        <ul>
                            <li>React Native</li>
                            <li>Flutter</li>
                            <li>Ionic</li>
                            <li>Xamarin</li>
                            <li>Capacitor</li>
                        </ul>
                    </div>
                </div>
                
                <div class="tech-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="tech-card">
                        <div class="tech-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h3>Development Tools</h3>
                        <ul>
                            <li>VS Code</li>
                            <li>Android Studio</li>
                            <li>Xcode</li>
                            <li>Git</li>
                            <li>Firebase</li>
                        </ul>
                    </div>
                </div>
                
                <div class="tech-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="tech-card">
                        <div class="tech-icon">
                            <i class="fas fa-vial"></i>
                        </div>
                        <h3>Testing Tools</h3>
                        <ul>
                            <li>Jest</li>
                            <li>Detox</li>
                            <li>Flutter Test</li>
                            <li>Appium</li>
                            <li>TestFlight</li>
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
                <h2>Our Cross-Platform Standards</h2>
                <p class="section-lead">How we ensure quality and performance across all platforms</p>
            </div>
            
            <div class="standards-grid">
                <div class="standard-item" data-aos="fade-up">
                    <div class="standard-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Performance Optimization</h3>
                    <ul class="standard-list">
                        <li>Memory management best practices</li>
                        <li>UI rendering optimization</li>
                        <li>Network request efficiency</li>
                        <li>Battery usage minimization</li>
                    </ul>
                </div>
                
                <div class="standard-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="standard-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Security</h3>
                    <ul class="standard-list">
                        <li>Secure data storage</li>
                        <li>API security best practices</li>
                        <li>Network communication encryption</li>
                        <li>Authentication security</li>
                    </ul>
                </div>
                
                <div class="standard-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="standard-icon">
                        <i class="fas fa-code-branch"></i>
                    </div>
                    <h3>Code Quality</h3>
                    <ul class="standard-list">
                        <li>Strict typing</li>
                        <li>Linting and style enforcement</li>
                        <li>Component-based architecture</li>
                        <li>Automated testing</li>
                    </ul>
                </div>
                
                <div class="standard-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="standard-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Platform Integration</h3>
                    <ul class="standard-list">
                        <li>Native API access</li>
                        <li>Platform-specific UI components</li>
                        <li>Device feature optimization</li>
                        <li>Adaptive layouts</li>
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
                    <h2>Why Choose Cross-Platform Development</h2>
                    <p class="section-lead">The business advantages of cross-platform app development</p>
                </div>
            </div>
            
            <div class="benefits-grid">
                <div class="benefit-card-wrapper primary-benefit" data-aos="fade-right" data-aos-duration="800">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <h3>Cost-Effective</h3>
                        <p>Reduce development costs with a single codebase for multiple platforms. Cross-platform development typically costs 30-40% less than native development for multiple platforms.</p>
                        <div class="benefit-stats">
                            <span class="stat-badge">40% cost savings</span>
                            <span class="stat-badge">Single codebase</span>
                        </div>
                    </div>
                </div>
                
                <div class="benefit-card-wrapper secondary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
                    <div class="benefit-card">
                        <div class="benefit-icon secondary-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h3>Faster Time-to-Market</h3>
                        <p>Launch your app on multiple platforms simultaneously with shorter development cycles. Cross-platform apps typically launch 30-35% faster than parallel native app development.</p>
                        <div class="benefit-stats">
                            <span class="stat-badge secondary-badge">35% faster launch</span>
                            <span class="stat-badge secondary-badge">Simultaneous releases</span>
                        </div>
                    </div>
                </div>
                
                <div class="benefit-card-wrapper tertiary-benefit" data-aos="fade-right" data-aos-duration="800" data-aos-delay="200">
                    <div class="benefit-card">
                        <div class="benefit-icon tertiary-icon">
                            <i class="fas fa-sync"></i>
                        </div>
                        <h3>Easy Maintenance</h3>
                        <p>Maintain and update your app across all platforms from a single codebase, reducing long-term maintenance efforts by up to 60% compared to maintaining separate native codebases.</p>
                        <div class="benefit-stats">
                            <span class="stat-badge tertiary-badge">60% less maintenance</span>
                            <span class="stat-badge tertiary-badge">Simplified updates</span>
                        </div>
                    </div>
                </div>
                
                <div class="benefit-card-wrapper quaternary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                    <div class="benefit-card">
                        <div class="benefit-icon quaternary-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h3>Wider Market Reach</h3>
                        <p>Reach both iOS and Android users simultaneously, accessing over 99% of the global smartphone market. This can increase your potential user base by up to 65% compared to a single-platform approach.</p>
                        <div class="benefit-stats">
                            <span class="stat-badge quaternary-badge">99% market coverage</span>
                            <span class="stat-badge quaternary-badge">65% more users</span>
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
                <h2>Ready to Build Your Cross-Platform App?</h2>
                <p class="lead">Let's discuss how we can help you reach users across all platforms efficiently and cost-effectively.</p>
                <a href="/pages/contact.php" class="cta-btn animate-pulse-slow">
                    Schedule a Cross-Platform Consultation
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
                    <p class="section-lead">Common questions about cross-platform app development</p>
                </div>
            </div>
            <div class="faq-container">
                <div class="faq-item active">
                    <div class="faq-question">
                        <h3>What's the difference between native and cross-platform development?</h3>
                        <button class="toggle-btn">
                            <i class="fas fa-chevron-down"></i>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>Native development involves building separate apps for each platform using platform-specific languages and tools, while cross-platform development uses a single codebase to create apps that work on multiple platforms. Cross-platform development is generally more cost-effective and faster to market, though it may have some performance trade-offs compared to native apps.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Which cross-platform framework should I choose?</h3>
                        <button class="toggle-btn">
                            <i class="fas fa-chevron-down"></i>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>The choice of framework depends on your specific needs. React Native is great for apps requiring native functionality and has a large community. Flutter offers excellent performance and beautiful UIs. We'll help you choose the best framework based on your requirements, budget, and timeline.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>How do you ensure consistent performance across platforms?</h3>
                        <button class="toggle-btn">
                            <i class="fas fa-chevron-down"></i>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>We implement platform-specific optimizations, use efficient coding practices, and thoroughly test on multiple devices. Our development process includes performance monitoring, optimization techniques, and platform-specific adjustments to ensure smooth operation across all target platforms.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>Do you provide post-launch support for all platforms?</h3>
                        <button class="toggle-btn">
                            <i class="fas fa-chevron-down"></i>
                        </button>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we provide comprehensive post-launch support including bug fixes, performance optimization, and updates across all platforms. Our team monitors app performance, user feedback, and platform updates to ensure your app continues to work smoothly on all devices.</p>
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
