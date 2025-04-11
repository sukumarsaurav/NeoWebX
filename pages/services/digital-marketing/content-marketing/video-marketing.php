<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';

// Page specific content
$pageTitle = "Video Marketing Services | NeoWebX";
$pageDescription = "Engage your audience with compelling video content that drives brand awareness, engagement, and conversions";
$serviceName = "Video Marketing";
$serviceSlug = "video-marketing";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'video marketing, video production, video content, video strategy, promotional videos, explainer videos, product videos, social media videos, video ads, video SEO'
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
                <h1>Video <span class="highlight">Marketing</span></h1>
                <p class="lead">Captivate your audience with dynamic video content that drives engagement and delivers measurable results</p>
                <div class="hero-buttons">
                    <a href="/pages/contact.php" class="btn btn-primary">Start Your Video Strategy</a>
                    <a href="/pages/services/digital-marketing/content-marketing/" class="btn btn-outline">All Content Services</a>
                </div>
            </div>
            <div class="hero-image" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                <div class="image-glow"></div>
                <img src="/assets/svg/video-marketing.svg" alt="Video Marketing Services" class="floating-image">
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
            <h2>Harness the Power of Video</h2>
            <p class="section-lead">Strategic video content that engages viewers and drives measurable business results.</p>
        </div>
        
        <div class="overview-grid">
            <div class="overview-card primary-card" data-aos="fade-right" data-aos-duration="800">
                <div class="card-decoration"></div>
                <h3>Video: The Most Engaging Content Format</h3>
                <p>In today's digital landscape, video has emerged as the dominant content format, with users spending 88% more time on websites that feature video and social video generating 1200% more shares than text and images combined.</p>
                <p>Our video marketing services help you capitalize on this trend with strategic, high-quality video content designed to capture attention, convey your message effectively, and drive your audience to take action.</p>
            </div>
            
            <div class="overview-card secondary-card" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                <div class="card-decoration"></div>
                <h3>End-to-End Video Marketing</h3>
                <p>We offer comprehensive video marketing solutions that go beyond just production. Our team handles everything from strategy development and creative concepting to production, optimization, and distribution.</p>
                <p>Whether you're looking to explain complex products, showcase your brand story, or create engaging social content, we deliver high-impact video assets optimized for your specific goals and target platforms.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="container">
        <div class="section-header">
            <div class="services-header" data-aos="fade-up">
                <h2>Our Video Marketing Services</h2>
                <p class="lead">Comprehensive video solutions to engage your audience and drive results</p>
            </div>
        </div>
        
        <div class="services-grid">
            <div class="service-item" data-aos="fade-up">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Video Strategy Development</h3>
                    <p>Create a goal-oriented video content plan aligned with your marketing objectives.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Audience research & targeting</li>
                        <li><i class="fas fa-check"></i> Content planning & calendaring</li>
                        <li><i class="fas fa-check"></i> Platform optimization strategy</li>
                        <li><i class="fas fa-check"></i> Budget & resource planning</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h3>Video Production</h3>
                    <p>Professional video creation services from concept to final delivery.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Concept development & scripting</li>
                        <li><i class="fas fa-check"></i> Full-service filming</li>
                        <li><i class="fas fa-check"></i> Professional editing & post-production</li>
                        <li><i class="fas fa-check"></i> Animation & motion graphics</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3>Promotional Videos</h3>
                    <p>Compelling video content that showcases your products, services, and brand.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Brand videos & company stories</li>
                        <li><i class="fas fa-check"></i> Product demonstrations</li>
                        <li><i class="fas fa-check"></i> Customer testimonials</li>
                        <li><i class="fas fa-check"></i> Event highlights & recaps</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-comment-dots"></i>
                    </div>
                    <h3>Explainer & Educational Videos</h3>
                    <p>Clear, engaging videos that explain complex concepts and educate your audience.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Animated explainers</li>
                        <li><i class="fas fa-check"></i> How-to tutorials</li>
                        <li><i class="fas fa-check"></i> Product walkthroughs</li>
                        <li><i class="fas fa-check"></i> Educational series</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-share-alt"></i>
                    </div>
                    <h3>Social Media Videos</h3>
                    <p>Platform-optimized videos designed for maximum engagement and sharing.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Short-form social content</li>
                        <li><i class="fas fa-check"></i> Live video strategy & support</li>
                        <li><i class="fas fa-check"></i> Stories & reels production</li>
                        <li><i class="fas fa-check"></i> Platform-specific optimization</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="500">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Video Marketing Analytics</h3>
                    <p>Track and analyze video performance to continuously improve results.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Viewing metrics analysis</li>
                        <li><i class="fas fa-check"></i> Engagement tracking</li>
                        <li><i class="fas fa-check"></i> Conversion attribution</li>
                        <li><i class="fas fa-check"></i> ROI measurement & reporting</li>
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
            <h2>Our Video Marketing Process</h2>
            <p class="section-lead">A structured approach to creating high-performance video content</p>
        </div>
        
        <div class="process-timeline">
            <!-- Timeline Line -->
            <div class="timeline-line"></div>
            
            <div class="process-grid">
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800">
                    <div class="process-number">1</div>
                    <div class="process-card">
                        <h3>Strategy & Planning</h3>
                        <p>We develop a targeted video strategy aligned with your business goals and audience needs.</p>
                        <ul class="process-list">
                            <li>Goal definition & KPI setting</li>
                            <li>Audience research & targeting</li>
                            <li>Content concept development</li>
                            <li>Platform & distribution planning</li>
                            <li>Budget & timeline establishment</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="process-number">2</div>
                    <div class="process-card">
                        <h3>Pre-Production</h3>
                        <p>We lay the groundwork for successful video creation through thorough preparation.</p>
                        <ul class="process-list">
                            <li>Script & storyboard development</li>
                            <li>Talent & location selection</li>
                            <li>Visual style planning</li>
                            <li>Production scheduling</li>
                            <li>Technical requirements planning</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="process-number">3</div>
                    <div class="process-card">
                        <h3>Production & Post-Production</h3>
                        <p>We create and refine high-quality video assets that deliver your message effectively.</p>
                        <ul class="process-list">
                            <li>Professional filming or animation</li>
                            <li>Expert editing & assembly</li>
                            <li>Music & sound design</li>
                            <li>Visual effects & color grading</li>
                            <li>Branding integration</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div class="process-number">4</div>
                    <div class="process-card">
                        <h3>Optimization & Distribution</h3>
                        <p>We ensure your videos reach and impact your target audience effectively.</p>
                        <ul class="process-list">
                            <li>Platform-specific optimization</li>
                            <li>SEO & metadata enhancement</li>
                            <li>Strategic distribution planning</li>
                            <li>Performance monitoring</li>
                            <li>Continuous improvement</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<?php if (isset($why_hire_us) && !empty($why_hire_us)): ?>
<section class="why-choose-us">
    <div class="container">
        <div class="section-header">
            <div class="why-choose-us-header" data-aos="fade-up">
                <h2>Why Choose NeoWebX for Video Marketing</h2>
                <p class="lead">What makes our video marketing services different</p>
            </div>
        </div>
        
        <div class="features-grid">
            <?php foreach ($why_hire_us as $item): ?>
            <div class="feature-item" data-aos="fade-up">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="<?php echo $item['icon']; ?>"></i>
                    </div>
                    <h3><?php echo $item['title']; ?></h3>
                    <p><?php echo $item['description']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content" data-aos="fade-up">
            <h2>Ready to Leverage Video Marketing?</h2>
            <p class="lead">Let's create compelling video content that engages your audience and drives business results.</p>
            <a href="/pages/contact.php" class="cta-btn">Start Your Video Strategy</a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <div class="faq-header" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p class="lead">Common questions about our video marketing services</p>
            </div>
        </div>
        
        <div class="faq-container">
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>What types of videos will benefit my business the most?</h3>
                    <button class="toggle-btn"><i class="fas fa-chevron-down"></i></button>
                </div>
                <div class="faq-answer">
                    <p>The most effective video types for your business depend on your specific goals, target audience, and stage in the marketing funnel. For building awareness, short social media videos and brand storytelling content typically perform well. For consideration stage, product demonstrations, explainer videos, and customer testimonials help educate prospects and build trust. For conversion, detailed product walkthroughs, comparison videos, and FAQ content can address objections and push prospects toward a decision. For customer retention, tutorial videos, product updates, and customer spotlight stories help maintain engagement. We recommend a strategic mix of video types that guide customers through their journey with your brand. During our discovery process, we'll analyze your specific business objectives, audience preferences, and competitive landscape to recommend the optimal video content mix for your particular situation.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>How much does video production typically cost?</h3>
                    <button class="toggle-btn"><i class="fas fa-chevron-down"></i></button>
                </div>
                <div class="faq-answer">
                    <p>Video production costs vary widely based on several factors including production type, complexity, length, location, talent needs, and equipment requirements. Basic animated explainer videos might start around $1,500-3,000, while professional live-action videos with full production teams typically range from $3,000-10,000+ per finished minute. More complex productions with multiple shooting locations, professional actors, or advanced special effects can range significantly higher. We offer scalable solutions to meet various budget requirements, from cost-effective approaches leveraging stock footage and simple animations to full-scale premium productions. Rather than offering one-size-fits-all pricing, we develop custom quotes based on your specific objectives and requirements. During our initial consultation, we'll discuss your goals and budget constraints to recommend the most effective approach that balances quality with cost-efficiency for your particular video marketing needs.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>How long should marketing videos be?</h3>
                    <button class="toggle-btn"><i class="fas fa-chevron-down"></i></button>
                </div>
                <div class="faq-answer">
                    <p>Optimal video length depends on your content purpose, platform, and where viewers are in their customer journey. Generally, shorter is better for top-of-funnel content, with social media videos performing best at 15-60 seconds, particularly on platforms like TikTok, Instagram, and Facebook. For YouTube, educational content typically performs well at 7-15 minutes if delivering valuable information throughout. Explainer videos are most effective at 60-90 seconds, focusing tightly on addressing a specific problem and solution. Webinars and in-depth product demonstrations can be longer (20-60 minutes) when targeting engaged, bottom-of-funnel prospects. Rather than adhering to strict time limits, we focus on creating content that maintains engagement throughout—whether that's 30 seconds or 10 minutes. During our strategy phase, we'll recommend optimal video lengths based on your specific objectives, audience preferences, platform requirements, and the complexity of your message.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>How do you measure video marketing success?</h3>
                    <button class="toggle-btn"><i class="fas fa-chevron-down"></i></button>
                </div>
                <div class="faq-answer">
                    <p>We measure video marketing success through a combination of engagement metrics and business outcomes tied to your specific goals. Engagement metrics include views, watch time, retention rate (what percentage of viewers watch to completion), click-through rates, shares, comments, and likes. These metrics help assess content quality and audience resonance. For business impact, we track conversion metrics like lead generation, email sign-ups, product purchases, or other actions viewers take after watching. We also analyze attribution data to understand how video content contributes to your overall marketing funnel and customer journey. Our reporting combines platform-native analytics (YouTube, Facebook, etc.) with your website analytics and CRM data to provide a comprehensive view of performance. For each campaign, we establish key performance indicators (KPIs) aligned with your specific objectives and provide regular reports with actionable insights for continuous optimization of your video strategy.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>How quickly can you produce videos?</h3>
                    <button class="toggle-btn"><i class="fas fa-chevron-down"></i></button>
                </div>
                <div class="faq-answer">
                    <p>Our video production timelines vary based on project complexity, with typical turnaround times ranging from 2-8 weeks from concept to final delivery. Simple animated explainer videos or social media content can often be completed in 2-3 weeks. Standard promotional videos involving filming generally require 3-4 weeks, accounting for pre-production, filming, and post-production phases. More complex productions with multiple locations, extensive talent, or advanced visual effects may take 6-8 weeks or longer. For clients with urgent needs, we offer expedited production options when possible, though these may involve additional costs to accommodate compressed timelines. Our process always includes clear project milestones with specified delivery dates, and we maintain regular communication throughout production to ensure alignment with your expectations. During our initial consultation, we'll discuss your timeline requirements and develop a realistic production schedule that balances quality considerations with your desired delivery date.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?>
<script src="/assets/js/services.js"></script>