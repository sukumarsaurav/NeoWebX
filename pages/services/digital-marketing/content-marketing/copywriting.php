<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';


// Page specific content
$pageTitle = "Professional Copywriting Services | NeoWebX";
$pageDescription = "Engage your audience and drive conversions with compelling, persuasive copy crafted by our expert copywriters";
$serviceName = "Copywriting";
$serviceSlug = "copywriting";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'copywriting services, professional copywriting, conversion copywriting, website copy, email copywriting, ad copy, product descriptions, sales copy, SEO copywriting, content writing'
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
                <h1>Persuasive <span class="highlight">Copywriting</span></h1>
                <p class="lead">Transform visitors into customers with compelling, conversion-focused copy that speaks directly to your audience</p>
                <div class="hero-buttons">
                    <a href="/pages/contact.php" class="btn btn-primary">Get in Touch</a>
                    <a href="/pages/services/digital-marketing/content-marketing/" class="btn btn-outline">All Content Services</a>
                </div>
            </div>
            <div class="hero-image" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                <div class="image-glow"></div>
                <img src="/assets/svg/copywriting.svg" alt="Professional Copywriting Services" class="floating-image">
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
            <h2>Convert Readers into Customers</h2>
            <p class="section-lead">Powerful copy that connects with your audience and drives them to take action.</p>
        </div>
        
        <div class="overview-grid">
            <div class="overview-card primary-card" data-aos="fade-right" data-aos-duration="800">
                <div class="card-decoration"></div>
                <h3>Words That Sell</h3>
                <p>In a crowded digital landscape, your words must cut through the noise and compel action. Generic copy doesn't convert—your message needs to speak directly to your audience's needs, desires, and pain points.</p>
                <p>Our experienced copywriters blend the art of persuasion with data-driven insights to create messaging that resonates with your target audience and motivates them to take the next step in their customer journey.</p>
            </div>
            
            <div class="overview-card secondary-card" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                <div class="card-decoration"></div>
                <h3>Strategic Approach</h3>
                <p>We don't just write pretty words. Our copywriting process begins with understanding your audience, analyzing your competition, and defining your unique value proposition.</p>
                <p>Every piece of copy we create is strategically crafted to support your business goals—whether that's generating leads, increasing sales, building brand awareness, or establishing your expertise in the industry.</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
    <div class="container">
        <div class="section-header">
            <div class="services-header" data-aos="fade-up">
                <h2>Our Copywriting Services</h2>
                <p class="lead">Professional copywriting solutions for all your marketing needs</p>
            </div>
        </div>
        
        <div class="services-grid">
            <div class="service-item" data-aos="fade-up">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h3>Website Copy</h3>
                    <p>Compelling, SEO-friendly copy that engages visitors and drives conversions.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Homepage messaging</li>
                        <li><i class="fas fa-check"></i> Service/product pages</li>
                        <li><i class="fas fa-check"></i> About us storytelling</li>
                        <li><i class="fas fa-check"></i> Landing pages</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email Copywriting</h3>
                    <p>Persuasive email campaigns that build relationships and drive action.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Nurture sequences</li>
                        <li><i class="fas fa-check"></i> Sales campaigns</li>
                        <li><i class="fas fa-check"></i> Welcome series</li>
                        <li><i class="fas fa-check"></i> Re-engagement emails</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-ad"></i>
                    </div>
                    <h3>Ad Copywriting</h3>
                    <p>Attention-grabbing ad copy that maximizes click-through and conversion rates.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> PPC ad copy</li>
                        <li><i class="fas fa-check"></i> Social media ads</li>
                        <li><i class="fas fa-check"></i> Display advertising</li>
                        <li><i class="fas fa-check"></i> Retargeting campaigns</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Product Descriptions</h3>
                    <p>Persuasive product copy that highlights benefits and drives purchase decisions.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> E-commerce product listings</li>
                        <li><i class="fas fa-check"></i> Feature-benefit translation</li>
                        <li><i class="fas fa-check"></i> Category descriptions</li>
                        <li><i class="fas fa-check"></i> Product comparisons</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h3>Sales Copy</h3>
                    <p>High-converting sales copy that addresses objections and motivates purchase.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Sales page copywriting</li>
                        <li><i class="fas fa-check"></i> Promotional offers</li>
                        <li><i class="fas fa-check"></i> Lead magnets</li>
                        <li><i class="fas fa-check"></i> Case studies</li>
                    </ul>
                </div>
            </div>
            
            <div class="service-item" data-aos="fade-up" data-aos-delay="500">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Brand Messaging</h3>
                    <p>Develop a consistent, compelling voice that differentiates your brand.</p>
                    <ul class="service-features">
                        <li><i class="fas fa-check"></i> Brand messaging frameworks</li>
                        <li><i class="fas fa-check"></i> Value proposition development</li>
                        <li><i class="fas fa-check"></i> Taglines & slogans</li>
                        <li><i class="fas fa-check"></i> Brand voice guidelines</li>
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
            <h2>Our Copywriting Process</h2>
            <p class="section-lead">A proven approach to creating copy that converts</p>
        </div>
        
        <div class="process-timeline">
            <!-- Timeline Line -->
            <div class="timeline-line"></div>
            
            <div class="process-grid">
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800">
                    <div class="process-number">1</div>
                    <div class="process-card">
                        <h3>Research & Discovery</h3>
                        <p>We dig deep to understand your audience, industry, and competitive landscape.</p>
                        <ul class="process-list">
                            <li>Target audience analysis</li>
                            <li>Competitor messaging review</li>
                            <li>Brand voice assessment</li>
                            <li>Key selling points identification</li>
                            <li>Conversion goal clarification</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="process-number">2</div>
                    <div class="process-card">
                        <h3>Strategy & Planning</h3>
                        <p>We develop a strategic approach tailored to your specific goals and audience.</p>
                        <ul class="process-list">
                            <li>Messaging strategy development</li>
                            <li>Key message hierarchy</li>
                            <li>Conversion path mapping</li>
                            <li>Call-to-action planning</li>
                            <li>Content structure outlining</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="process-number">3</div>
                    <div class="process-card">
                        <h3>Writing & Optimization</h3>
                        <p>Our expert copywriters craft persuasive copy designed to drive results.</p>
                        <ul class="process-list">
                            <li>Professional copywriting</li>
                            <li>SEO integration</li>
                            <li>Persuasive techniques application</li>
                            <li>Brand voice alignment</li>
                            <li>Readability optimization</li>
                        </ul>
                    </div>
                </div>
                
                <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <div class="process-number">4</div>
                    <div class="process-card">
                        <h3>Review & Refinement</h3>
                        <p>We perfect your copy through collaborative feedback and data-driven improvements.</p>
                        <ul class="process-list">
                            <li>Client review cycles</li>
                            <li>A/B testing recommendations</li>
                            <li>Performance analysis</li>
                            <li>Conversion optimization</li>
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
                <h2>Why Choose NeoWebX for Copywriting</h2>
                <p class="lead">What makes our copywriting services different</p>
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
            <h2>Ready for Copy That Converts?</h2>
            <p class="lead">Let's create persuasive messaging that resonates with your audience and drives results.</p>
            <a href="/pages/contact.php" class="cta-btn">Get in Touch</a>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <div class="faq-header" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p class="lead">Common questions about our copywriting services</p>
            </div>
        </div>
        
        <div class="faq-container">
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>What's the difference between copywriting and content writing?</h3>
                    <button class="toggle-btn"><i class="fas fa-chevron-down"></i></button>
                </div>
                <div class="faq-answer">
                    <p>Copywriting and content writing, while related, serve different primary purposes. Copywriting is persuasive writing specifically designed to prompt an immediate action—such as making a purchase, signing up for a newsletter, or requesting information. It's typically shorter, more direct, and focused on conversion. Examples include website sales pages, ads, email campaigns, and product descriptions. Content writing, meanwhile, primarily aims to inform, educate, or entertain the reader. It builds trust and authority over time rather than driving immediate action. Blog posts, articles, guides, and ebooks are common content writing formats. Our team excels at both disciplines and often blends elements of each to create compelling, value-driven copy that both engages readers and motivates them to take action. The best marketing strategies incorporate both types of writing at different stages of the customer journey.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>How do you capture our brand's voice in your copywriting?</h3>
                        <button class="toggle-btn"><i class="fas fa-chevron-down"></i></button>
                </div>
                <div class="faq-answer">
                    <p>Capturing your unique brand voice is central to our copywriting process. We begin with a comprehensive brand voice analysis that includes reviewing your existing marketing materials, interviewing key stakeholders about brand personality and values, analyzing competitor positioning, and understanding your audience's preferences. For clients without established voice guidelines, we can develop a custom brand voice guide that defines tone, style, vocabulary, and communication principles. Our copywriters then use this framework to ensure consistency across all materials. We incorporate client feedback throughout the process to refine and perfect the voice. For ongoing projects, we maintain a client-specific style guide that evolves as your brand does. This systematic approach ensures that whether we're writing website copy, emails, or ad campaigns, everything sounds authentically like your brand—just the most compelling version of it.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>How do you approach SEO in your copywriting?</h3>
                    <button class="toggle-btn"><i class="fas fa-chevron-down"></i></button>
                </div>
                <div class="faq-answer">
                    <p>Our approach to SEO copywriting balances search optimization with persuasive, reader-friendly content. We begin with comprehensive keyword research to identify valuable search terms with appropriate volume and competition levels. Rather than forcing keywords into existing copy, we build content around these terms naturally, integrating them into headlines, subheadings, and body copy in ways that enhance—rather than detract from—readability. We optimize meta titles, descriptions, URL structures, and image alt text while maintaining compelling messaging. Our copywriters are trained in both SEO best practices and conversion-focused writing, allowing them to create copy that satisfies search algorithms without sacrificing human engagement. We also consider search intent, ensuring content addresses what users are actually looking for when they enter specific search terms. This balanced approach results in copy that ranks well in search results while effectively engaging and converting the humans who click through.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>What information do you need from me to get started?</h3>
                    <button class="toggle-btn"><i class="fas fa-chevron-down"></i></button>
                </div>
                <div class="faq-answer">
                    <p>To create effective copy, we gather key information through our onboarding process, which typically includes: Background information about your company, products/services, and unique selling propositions; Target audience details including demographics, pain points, and motivations; Your goals for the specific copy (e.g., increase sales, generate leads, build awareness); Examples of existing marketing materials you like or dislike; Competitor information and how you differentiate; Brand voice guidelines or preferences; Technical specifications or features that need to be highlighted; and Customer testimonials or success stories. We make this process efficient through a combination of questionnaires and discovery calls. For clients with established brands, we can work with whatever materials you already have. For those needing more guidance, our strategists can help develop positioning and messaging foundations. The more information you provide, the more targeted your copy will be, but we've designed our process to accommodate various levels of client input while still delivering exceptional results.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>How do you measure the success of copywriting?</h3>
                    <button class="toggle-btn"><i class="fas fa-chevron-down"></i></button>
                </div>
                <div class="faq-answer">
                    <p>We measure copywriting success through both engagement metrics and business outcomes. For website copy, we track metrics like conversion rates, time on page, bounce rates, and click-through rates on calls to action. Email copy effectiveness is measured through open rates, click rates, response rates, and conversion metrics. For ad copy, we analyze click-through rates, conversion rates, and cost per acquisition. Beyond these channel-specific metrics, we also look at broader business results like lead generation, sales attribution, and ROI. Our approach to measurement is always tied to your specific goals—whether that's increasing brand awareness, generating leads, or driving direct sales. We can establish A/B testing protocols to compare different copy approaches and continuously refine messaging based on performance data. We provide regular reporting on these metrics, with insights and recommendations for ongoing optimization, ensuring that your copy not only sounds good but delivers tangible business results.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once '../../../../components/footer.php'; ?>
<script src="/assets/js/services.js"></script>