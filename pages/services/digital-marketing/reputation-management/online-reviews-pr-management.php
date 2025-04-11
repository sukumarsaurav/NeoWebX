<?php
// Define base path to allow direct script access
define('BASEPATH', true);

// Include the configuration file
require_once '../../../../includes/config.php';

// Page specific content
$pageTitle = "Online Reviews & PR Management | NeoWebX";
$pageDescription = "Build and maintain a positive online presence with our comprehensive review management and public relations services. Monitor, respond to, and leverage reviews to enhance your reputation.";
$serviceName = "Online Reviews & PR Management";
$serviceSlug = "online-reviews-pr-management";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'online review management, PR management, public relations, reputation management, review monitoring, review response, review generation, media relations, press releases, brand reputation, customer feedback'
];

// Include the header
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
                <h1>Online Reviews & <span class="highlight">PR Management</span></h1>
                <p class="lead">Proactively build and protect your brand's reputation across all channels</p>
                <div class="hero-buttons">
                    <a href="/pages/contact.php" class="btn btn-primary">Get Started</a>
                    <a href="/pages/services/digital-marketing/reputation-management/" class="btn btn-outline">All Reputation Services</a>
                </div>
            </div>
            <div class="hero-image" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                <div class="image-glow"></div>
                <img src="/assets/svg/online-reviews-pr.svg" alt="Online Reviews and PR Management Services" class="floating-image">
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
            <h2>Shape Your Brand's Narrative</h2>
            <p class="section-lead">Comprehensive review and PR management to build a stellar online reputation</p>
        </div>
        
        <div class="overview-grid">
            <div class="overview-card primary-card" data-aos="fade-right" data-aos-duration="800">
                <div class="card-decoration"></div>
                <h3>The Power of Reviews & Public Perception</h3>
                <p>In today's digital landscape, online reviews and public perception significantly influence purchasing decisions. Studies show that 93% of consumers say online reviews impact their buying choices, and 94% have avoided businesses with negative reviews.</p>
                <p>Our comprehensive review and PR management services help you harness the power of positive reviews while effectively managing your broader public image across all platforms and media channels.</p>
            </div>
            
            <div class="overview-card secondary-card" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                <div class="card-decoration"></div>
                <h3>Proactive Reputation Building</h3>
                <p>Rather than simply reacting to reputation issues, our approach focuses on proactively building a strong, positive brand presence. We implement strategies to generate authentic positive reviews, develop compelling public relations campaigns, and create consistent messaging that reinforces your brand values.</p>
                <p>Through strategic planning and continuous management, we help you establish credibility, build trust, and create a resilient brand reputation that can withstand challenges.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="container">
        <div class="section-header">
            <div class="services-header" data-aos="fade-up">
                <h2>Our Online Reviews & PR Management Services</h2>
                <p class="lead">Comprehensive solutions to build and maintain your online reputation</p>
            </div>
        </div>
        
        <div class="services-grid">
            <div class="service-item" data-aos="fade-up">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Review Monitoring</h3>
                    <p>Comprehensive tracking of reviews across all relevant platforms.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Multi-platform monitoring</li>
                        <li><i class="fas fa-check"></i> Real-time alerts</li>
                        <li><i class="fas fa-check"></i> Sentiment analysis</li>
                        <li><i class="fas fa-check"></i> Competitive benchmarking</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-reply"></i>
                    </div>
                    <h3>Review Response Management</h3>
                    <p>Strategic responses to all types of customer reviews.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Custom response strategies</li>
                        <li><i class="fas fa-check"></i> Dedicated response team</li>
                        <li><i class="fas fa-check"></i> Issue resolution tracking</li>
                        <li><i class="fas fa-check"></i> Response time optimization</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Review Generation Campaigns</h3>
                    <p>Ethical strategies to increase positive authentic reviews.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Customer feedback systems</li>
                        <li><i class="fas fa-check"></i> Review request optimization</li>
                        <li><i class="fas fa-check"></i> Platform-specific campaigns</li>
                        <li><i class="fas fa-check"></i> Customer satisfaction tracking</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <h3>Media Relations</h3>
                    <p>Strategic engagement with traditional and digital media outlets.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Media outreach</li>
                        <li><i class="fas fa-check"></i> Press release development</li>
                        <li><i class="fas fa-check"></i> Journalist relationship building</li>
                        <li><i class="fas fa-check"></i> Publication opportunity tracking</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3>Content PR Strategy</h3>
                    <p>Creating and distributing compelling brand content.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Thought leadership content</li>
                        <li><i class="fas fa-check"></i> Brand story development</li>
                        <li><i class="fas fa-check"></i> Content distribution strategy</li>
                        <li><i class="fas fa-check"></i> Press kit creation</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="500">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Reputation Analytics</h3>
                    <p>Comprehensive reporting on reputation performance.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Rating trend analysis</li>
                        <li><i class="fas fa-check"></i> Sentiment tracking</li>
                        <li><i class="fas fa-check"></i> Competitive benchmarking</li>
                        <li><i class="fas fa-check"></i> ROI measurement</li>
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
            <h2>Our Reputation Management Process</h2>
            <p class="section-lead">A strategic approach to building and maintaining your online presence</p>
        </div>
        
        <div class="process-timeline">
            <!-- Timeline Line -->
            <div class="timeline-line"></div>
            
            <div class="process-grid">
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800">
                    <div class="process-number">1</div>
                    <div class="process-card">
                        <h3>Reputation Audit</h3>
                        <p>We conduct a comprehensive assessment of your current online reputation.</p>
                        <ul class="process-list">
                            <li>Review profile analysis</li>
                            <li>Brand mention evaluation</li>
                            <li>Competitor benchmarking</li>
                            <li>Sentiment analysis</li>
                            <li>Opportunity identification</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="process-number">2</div>
                    <div class="process-card">
                        <h3>Strategy Development</h3>
                        <p>We create a tailored plan to improve and maintain your online reputation.</p>
                        <ul class="process-list">
                            <li>Platform prioritization</li>
                            <li>Response strategy formulation</li>
                            <li>Review generation planning</li>
                            <li>PR opportunity mapping</li>
                            <li>Crisis prevention protocols</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="process-number">3</div>
                    <div class="process-card">
                        <h3>Implementation</h3>
                        <p>We execute the strategies across all relevant platforms and channels.</p>
                        <ul class="process-list">
                            <li>Review response management</li>
                            <li>Review generation campaigns</li>
                            <li>Media outreach execution</li>
                            <li>Content distribution</li>
                            <li>Online presence optimization</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div class="process-number">4</div>
                    <div class="process-card">
                        <h3>Monitoring & Optimization</h3>
                        <p>We continuously track results and refine our approach for optimal outcomes.</p>
                        <ul class="process-list">
                            <li>Performance tracking</li>
                            <li>Strategy adjustment</li>
                            <li>Trend analysis</li>
                            <li>Ongoing reporting</li>
                            <li>Continuous improvement</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-us">
    <div class="container">
        <div class="section-header">
            <div class="why-choose-us-header" data-aos="fade-up">
                <h2>Why Choose NeoWebX for Online Reviews & PR Management</h2>
                <p class="lead">What sets our reputation management services apart</p>
            </div>
        </div>
        
        <div class="features-grid">
            <div class="feature-item" data-aos="fade-up">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3>Comprehensive Approach</h3>
                    <p>We manage all aspects of your online reputation, from review platforms to media coverage, ensuring consistent brand perception across all channels.</p>
                </div>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Responsive Service</h3>
                    <p>Our team monitors and responds to reviews and media opportunities in a timely manner, ensuring you never miss a chance to engage or address concerns.</p>
                </div>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Strategic Insight</h3>
                    <p>We don't just manage reviews—we analyze feedback patterns to help improve your products, services, and customer experience.</p>
                </div>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Experienced Team</h3>
                    <p>Our reputation specialists have managed reviews and PR for businesses across diverse industries, bringing proven expertise to your brand.</p>
                </div>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h3>Data-Driven Decisions</h3>
                    <p>We use advanced analytics to track reputation metrics and make informed strategic recommendations for ongoing improvement.</p>
                </div>
            </div>
            
            <div class="feature-item" data-aos="fade-up" data-aos-delay="500">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Ethical Practices</h3>
                    <p>We follow industry best practices and platform guidelines, focusing on generating authentic reviews and credible media coverage.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content" data-aos="fade-up">
            <h2>Ready to Build a Stellar Online Reputation?</h2>
            <p class="lead">Let's develop a strategy to showcase your brand in the best possible light.</p>
            <a href="/pages/contact.php" class="cta-btn">Get Started Today</a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <div class="faq-header" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p class="lead">Common questions about online reviews and PR management</p>
            </div>
        </div>
        <div class="faq-container">
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>How do you handle negative reviews?</h3>
                    <button class="toggle-btn"><i class="fas fa-chevron-down"></i></button>
                </div>
                <div class="faq-answer">
                    <p>We approach negative reviews with a strategic methodology that turns challenges into opportunities:</p>
                    <ul>
                        <li>Analyze each negative review to understand the root cause.</li>
                        <li>Craft personalized, empathetic responses that acknowledge concerns.</li>
                        <li>Coordinate with your team to address underlying problems.</li>
                        <li>Invite customers to update their reviews after positive resolutions.</li>
                    </ul>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>Is it ethical to ask customers for reviews?</h3>
                    <button class="toggle-btn"><i class="fas fa-chevron-down"></i></button>
                </div>
                <div class="faq-answer">
                    <p>Yes, asking customers for reviews is ethical when done properly:</p>
                    <ul>
                        <li>Request reviews from all customers, not just those likely to be positive.</li>
                        <li>Never offer incentives for positive reviews.</li>
                        <li>Make the process simple and convenient.</li>
                    </ul>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>Which review platforms should my business focus on?</h3>
                    <button class="toggle-btn"><i class="fas fa-chevron-down"></i></button>
                </div>
                <div class="faq-answer">
                    <p>Your business should prioritize review platforms based on industry and audience:</p>
                    <ul>
                        <li>Focus on Google Business Profile for visibility.</li>
                        <li>Consider industry-specific platforms like Yelp or TripAdvisor.</li>
                        <li>Implement a three-tiered approach for platform prioritization.</li>
                    </ul>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>How do you measure the success of review and PR management?</h3>
                    <button class="toggle-btn"><i class="fas fa-chevron-down"></i></button>
                </div>
                <div class="faq-answer">
                    <p>We measure success through various metrics:</p>
                    <ul>
                        <li>Track average star ratings and review volume growth.</li>
                        <li>Monitor media mention volume and publication quality.</li>
                        <li>Evaluate broader business impact metrics.</li>
                    </ul>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>Can you remove negative reviews from Google, Yelp, or other platforms?</h3>
                    <button class="toggle-btn"><i class="fas fa-chevron-down"></i></button>
                </div>
                <div class="faq-answer">
                    <p>Most platforms do not remove negative reviews unless they violate policies:</p>
                    <ul>
                        <li>We assist with reporting violations.</li>
                        <li>Implement strategic response management for legitimate reviews.</li>
                        <li>Focus on generating positive reviews to improve overall ratings.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?> 
?>  <script src="/assets/js/services.js"></script>