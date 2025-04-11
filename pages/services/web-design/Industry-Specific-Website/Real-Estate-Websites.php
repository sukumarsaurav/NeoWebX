<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../../../../includes/config.php';

// Page specific content
$pageTitle = "Real Estate Website Design Services | NeoWebX";
$pageDescription = "Create engaging, feature-rich real estate websites that showcase properties beautifully and convert visitors into clients. Custom website design for real estate agents, brokers, and property management firms.";
$serviceName = "Real Estate Website Design";
$serviceSlug = "real-estate-websites";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => 'real estate website design, property listing websites, real estate broker websites, idx integration, property search websites, real estate agent websites, mls integration, property management websites'
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
                        <h1>Real Estate Website <span class="highlight">Design</span></h1>
                        <p class="lead">Create engaging, feature-rich real estate websites that showcase properties beautifully and convert visitors into clients</p>
                        <div class="hero-buttons">
                            <a href="/pages/contact.php" class="btn btn-primary">Start Your Real Estate Project</a>
                            <a href="/portfolio" class="btn btn-outline">View Portfolio</a>
                        </div>
                    </div>
                    <div class="hero-image" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                        <div class="image-glow"></div>
                        <img src="/assets/images/services/real-estate-website-design.svg" alt="Real Estate Website Design" class="floating-image">
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
                    <h2>Expert Real Estate Website Design Services</h2>
                    <p class="section-lead">We create specialized websites for real estate professionals that combine stunning property presentation with powerful lead generation tools to grow your business.</p>
                </div>
                
                <div class="overview-grid">
                    <div class="overview-card primary-card" data-aos="fade-right" data-aos-duration="800">
                        <div class="card-decoration"></div>
                        <h3>Property-Focused Digital Excellence</h3>
                        <p>Our team specializes in developing websites for real estate agents, brokerages, and property management companies that showcase listings beautifully while generating qualified leads. We understand the unique challenges of real estate websites – from IDX integration to lead capture and conversion-oriented design.</p>
                        <p>Every real estate website we design is built with meticulous attention to property presentation, search functionality, and lead generation while incorporating the latest technologies for optimal performance and client engagement.</p>
                    </div>
                    
                    <div class="overview-card secondary-card" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                        <div class="card-decoration"></div>
                        <h3>Client-Focused Search Experience</h3>
                        <p>We create real estate websites with a focus on the home buyer and seller journey, developing user experiences that simplify property search, showcase listings effectively, and convert visitors into leads. Our client-first approach ensures visitors can easily find relevant properties and connect with your services.</p>
                        <p>By combining real estate expertise with UX best practices, we develop digital experiences that build trust, highlight your market knowledge, and ultimately convert qualified prospects into clients and closed transactions.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section">
            <div class="container">
                <div class="section-header">
                    <div class="services-header" data-aos="fade-up">
                        <h2>Our Real Estate Website Design Services</h2>
                        <p class="lead">Comprehensive web solutions tailored to the unique needs of real estate professionals</p>
                    </div>
                </div>
                
                <div class="services-grid">
                    <div class="service-item" data-aos="fade-up">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <h3>Agent & Broker Websites</h3>
                            <p>Custom websites for real estate professionals that establish credibility, showcase listings, and generate quality leads.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Professional agent profiles & credentials</li>
                                <li><i class="fas fa-check"></i> Featured listings showcase</li>
                                <li><i class="fas fa-check"></i> Testimonials & past sales</li>
                                <li><i class="fas fa-check"></i> Neighborhood guides & expertise</li>
                                <li><i class="fas fa-check"></i> Lead capture & contact forms</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-building"></i>
                            </div>
                            <h3>Property Listing Platforms</h3>
                            <p>Advanced property search websites with powerful filtering, map integration, and immersive viewing experiences.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> IDX/MLS integration</li>
                                <li><i class="fas fa-check"></i> Advanced search filters</li>
                                <li><i class="fas fa-check"></i> Interactive map search</li>
                                <li><i class="fas fa-check"></i> Virtual tours integration</li>
                                <li><i class="fas fa-check"></i> Property comparison tools</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-key"></i>
                            </div>
                            <h3>Property Management Sites</h3>
                            <p>Specialized websites for property management companies with tenant portals, maintenance requests, and owner dashboards.</p>
                            <ul class="service-features">
                                <li><i class="fas fa-check"></i> Tenant portal integration</li>
                                <li><i class="fas fa-check"></i> Maintenance request systems</li>
                                <li><i class="fas fa-check"></i> Rental applications</li>
                                <li><i class="fas fa-check"></i> Owner dashboards</li>
                                <li><i class="fas fa-check"></i> Payment processing</li>
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
                    <h2>Our Real Estate Website Design Process</h2>
                    <p class="section-lead">A strategic approach to creating property-focused, lead-generating real estate websites</p>
                </div>
                
                <div class="process-timeline">
                    <!-- Timeline Line -->
                    <div class="timeline-line"></div>
                    
                    <div class="process-grid">
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800">
                            <div class="process-number">1</div>
                            <div class="process-card">
                                <h3>Discovery & Market Analysis</h3>
                                <p>We begin with a thorough assessment of your real estate business, target audience, and competitive landscape.</p>
                                <ul class="process-list">
                                    <li>Real estate niche identification</li>
                                    <li>Target client persona development</li>
                                    <li>Competitor website analysis</li>
                                    <li>Property search requirements</li>
                                    <li>Lead generation strategy planning</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                            <div class="process-number">2</div>
                            <div class="process-card">
                                <h3>Property-Focused Design</h3>
                                <p>Our designers create intuitive interfaces that showcase properties beautifully and guide visitors toward inquiry.</p>
                                <ul class="process-list">
                                    <li>Property listing layout design</li>
                                    <li>Search interface optimization</li>
                                    <li>Agent profile presentation</li>
                                    <li>Lead capture form positioning</li>
                                    <li>Mobile-responsive property galleries</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                            <div class="process-number">3</div>
                            <div class="process-card">
                                <h3>Development & Listing Integration</h3>
                                <p>We build robust real estate websites with powerful property search, mapping, and lead generation capabilities.</p>
                                <ul class="process-list">
                                    <li>IDX/MLS integration</li>
                                    <li>Property search system development</li>
                                    <li>Interactive mapping features</li>
                                    <li>CRM integration for leads</li>
                                    <li>Virtual tour implementation</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="process-card-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                            <div class="process-number">4</div>
                            <div class="process-card">
                                <h3>Launch & Lead Optimization</h3>
                                <p>We ensure your real estate website generates quality leads and showcases properties effectively.</p>
                                <ul class="process-list">
                                    <li>Lead tracking system implementation</li>
                                    <li>Local real estate SEO</li>
                                    <li>Listing syndication setup</li>
                                    <li>Lead nurturing automation</li>
                                    <li>Analytics dashboards for performance</li>
                                </ul>
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
                        <h2>Essential Features for Real Estate Websites</h2>
                        <p class="lead">Key components that enhance property showcase and streamline client acquisition</p>
                    </div>
                </div>
                <div class="features-grid">
                    <div class="feature-item" data-aos="fade-up">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-search"></i>
                            </div>
                            <h3>Advanced Property Search</h3>
                            <p>Intuitive property search functionality with filtering by price, location, property type, amenities, and more. Includes map-based search, saved searches, and property alerts.</p>
                        </div>
                    </div>
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-camera"></i>
                            </div>
                            <h3>Immersive Property Galleries</h3>
                            <p>High-quality image galleries with virtual tours, 3D walkthroughs, and video integration to showcase properties comprehensively and attract serious buyers.</p>
                        </div>
                    </div>
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-calculator"></i>
                            </div>
                            <h3>Mortgage Calculators</h3>
                            <p>Interactive financial tools that help potential buyers calculate monthly payments, affordability, amortization schedules, and compare buying vs. renting.</p>
                        </div>
                    </div>
                    <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-map-marked-alt"></i>
                            </div>
                            <h3>Neighborhood Insights</h3>
                            <p>Detailed neighborhood information including school ratings, local amenities, walkability scores, demographics, and market trends to help buyers make informed decisions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section class="benefits-section">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2>Benefits of Professional Real Estate Website Design</h2>
                    <p class="section-lead">Why investing in a specialized real estate website matters</p>
                </div>
                
                <div class="benefits-grid">
                    <div class="benefit-card-wrapper primary-benefit" data-aos="fade-right" data-aos-duration="800">
                        <div class="benefit-card">
                            <div class="benefit-icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <h3>Enhanced Property Presentation</h3>
                            <p>Real estate websites with professional gallery systems and virtual tours generate 60% more listing views than basic property pages. High-quality property presentation extends viewing time by 3.5x and increases inquiries.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge">60% more views</span>
                                <span class="stat-badge">3.5x longer engagement</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="benefit-card-wrapper secondary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                        <div class="benefit-card">
                            <div class="benefit-icon secondary-icon">
                                <i class="fas fa-user-check"></i>
                            </div>
                            <h3>Increased Lead Generation</h3>
                            <p>Real estate websites with optimized search and property filters generate 43% more qualified leads than basic sites. Strategic placement of lead capture forms increases conversion by 37% for high-value properties.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge secondary-badge">43% more leads</span>
                                <span class="stat-badge secondary-badge">37% higher conversion</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="benefit-card-wrapper tertiary-benefit" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                        <div class="benefit-card">
                            <div class="benefit-icon tertiary-icon">
                                <i class="fas fa-arrows-alt"></i>
                            </div>
                            <h3>Market Differentiation</h3>
                            <p>Real estate agents with professional websites are perceived as 58% more professional than competitors with template sites. Custom real estate websites help agents win 46% more listing presentations.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge tertiary-badge">58% better perception</span>
                                <span class="stat-badge tertiary-badge">46% more listings</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="benefit-card-wrapper quaternary-benefit" data-aos="fade-left" data-aos-duration="800" data-aos-delay="400">
                        <div class="benefit-card">
                            <div class="benefit-icon quaternary-icon">
                                <i class="fas fa-search-location"></i>
                            </div>
                            <h3>Improved Search Visibility</h3>
                            <p>Real estate websites optimized for local SEO experience 72% higher organic traffic for property searches. This translates to 3.2x more unsolicited listing inquiries and buyer leads.</p>
                            <div class="benefit-stats">
                                <span class="stat-badge quaternary-badge">72% more traffic</span>
                                <span class="stat-badge quaternary-badge">3.2x inquiry increase</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technology Section -->
        <section class="technology-section">
            <div class="container">
                <div class="section-header">
                    <div class="technology-header" data-aos="fade-up">
                        <h2>Real Estate Technologies We Integrate</h2>
                        <p class="lead">Powerful tools and platforms that power modern real estate websites</p>
                    </div>
                </div>
                
                <div class="content-row">
                    <div class="content-col one-half margin-bottom-4" data-aos="fade-up">
                        <div class="technology-card height-100 padding-4 bg-white rounded box-shadow-sm">
                            <div class="technology-icon margin-bottom-3">
                                <i class="fas fa-database fa-2x color-primary"></i>
                            </div>
                            <h4>MLS & IDX Integration</h4>
                            <ul class="technology-list">
                                <li><i class="fas fa-check text-primary me-2"></i>RETS/RESO Web API connectivity</li>
                                <li><i class="fas fa-check text-primary me-2"></i>IDX Broker integration</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Diverse MLS board compliance</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Automated listing updates</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Custom search widgets</li>
                            </ul>
                        </div>
                    </div>
                    <div class="content-col one-half margin-bottom-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="technology-card height-100 padding-4 bg-white rounded box-shadow-sm">
                            <div class="technology-icon margin-bottom-3">
                                <i class="fas fa-vr-cardboard fa-2x color-primary"></i>
                            </div>
                            <h4>Virtual Tour Technologies</h4>
                            <ul class="technology-list">
                                <li><i class="fas fa-check text-primary me-2"></i>Matterport 3D tours</li>
                                <li><i class="fas fa-check text-primary me-2"></i>360° panoramic viewing</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Video tour integration</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Floor plan visualization</li>
                                <li><i class="fas fa-check text-primary me-2"></i>Virtual staging capabilities</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2>Ready to Create Your Real Estate Website?</h2>
                    <p class="lead">Let's build a property-focused digital experience that attracts clients and showcases your listings beautifully.</p>
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
                        <p class="lead">Common questions about real estate website design</p>
                    </div>
                </div>
                <div class="faq-container">
                    <div class="faq-item active">
                        <div class="faq-question">
                            <h3>How does MLS/IDX integration work, and what are the costs involved?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>MLS/IDX integration allows your website to display real-time property listings directly from your local Multiple Listing Service:</p>
                            <ul>
                                <li><strong>Integration Process:</strong> We connect your website to the MLS through either direct RETS feed access, API integration, or an IDX provider like IDX Broker, showcasing properties with your branding and lead capture tools.</li>
                                <li><strong>Costs Structure:</strong> There are typically three cost components: (1) One-time setup fee for the technical integration ($500-$1,500 depending on complexity), (2) Monthly/annual IDX provider fees ($50-$100/month on average), and (3) MLS fees, which vary by board and access level.</li>
                                <li><strong>Maintenance Requirements:</strong> MLS data connections require ongoing maintenance to accommodate changes in the MLS platform, rules updates, and field mapping modifications.</li>
                            </ul>
                            <p>We handle the complete integration process, including MLS board paperwork, technical setup, and search configuration, ensuring your website remains compliant with all MLS regulations and data usage policies.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What lead generation features should a real estate website include?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Effective real estate websites include strategic lead generation features throughout the property search experience:</p>
                            <ul>
                                <li><strong>Property Alerts & Saved Searches:</strong> Allow visitors to save search criteria and receive automated emails when matching properties are listed.</li>
                                <li><strong>Home Valuation Tools:</strong> Interactive calculators that provide estimated home values in exchange for contact information.</li>
                                <li><strong>Gated Content:</strong> Valuable resources like neighborhood guides, market reports, and buying/selling guides accessible after form submission.</li>
                                <li><strong>Intelligent Property Forms:</strong> Dynamic forms that appear based on user behavior, like time on property pages or multiple views of similar listings.</li>
                                <li><strong>Mortgage Calculators:</strong> Financial tools that capture leads while helping buyers understand affordability.</li>
                                <li><strong>Chatbots & Live Chat:</strong> Automated or live assistance to engage visitors and capture inquiries after hours.</li>
                                <li><strong>Exit Intent Popups:</strong> Targeted offers that appear when users are about to leave your website.</li>
                            </ul>
                            <p>We implement a strategic mix of these features based on your business model and target audience, ensuring they enhance the user experience rather than interrupting it, and connect to your CRM for seamless lead management.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do you optimize real estate websites for mobile users?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>With over 76% of home buyers using mobile devices during their property search, our mobile optimization approach includes:</p>
                            <ul>
                                <li><strong>Location-Based Search:</strong> Utilizing GPS to show nearby properties and open houses automatically.</li>
                                <li><strong>Simplified Property Filters:</strong> Touchscreen-friendly search filters with visual selectors for bedrooms, bathrooms, and price ranges.</li>
                                <li><strong>Optimized Gallery Experience:</strong> Easy-to-navigate property photos with swipe gestures and full-screen viewing.</li>
                                <li><strong>Map-Centric Interface:</strong> Interactive maps that work seamlessly on mobile with clustering for dense markets.</li>
                                <li><strong>One-Touch Contact:</strong> Click-to-call buttons, simplified contact forms, and message features optimized for mobile input.</li>
                                <li><strong>Progressive Loading:</strong> Technical optimizations that load essential content first, reducing wait times on mobile connections.</li>
                                <li><strong>App-Like Experience:</strong> For high-volume property portals, we can create PWA (Progressive Web App) functionality for offline browsing and saved properties.</li>
                            </ul>
                            <p>We test all real estate websites on multiple devices and screen sizes, ensuring that property search, viewing, and contact features work flawlessly across smartphones and tablets of all sizes.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Can you integrate virtual tours and 3D walkthroughs into real estate websites?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Yes, we specialize in integrating immersive property visualization technologies into real estate websites:</p>
                            <ul>
                                <li><strong>Matterport Integration:</strong> Full embedding of Matterport 3D tours with dollhouse views, floor plans, and measurement tools.</li>
                                <li><strong>360° Panoramic Tours:</strong> Integration of 360° panoramic photography with hotspots and room-to-room navigation.</li>
                                <li><strong>Video Tour Hosting:</strong> Optimized video embedding with branded overlays and call-to-action features.</li>
                                <li><strong>Virtual Staging:</strong> Implementation of before/after sliders to show empty rooms with virtual staging overlays.</li>
                                <li><strong>Interactive Floor Plans:</strong> Clickable floor plans that connect to relevant photos and room information.</li>
                                <li><strong>AR/VR Capabilities:</strong> For cutting-edge developers, we can integrate augmented reality features for visualization on vacant land or new developments.</li>
                            </ul>
                            <p>Properties with virtual tours receive 87% more views than those without, and we ensure these features load quickly and work across all devices. We can either integrate tours you've already created or connect you with professional virtual tour photographers in your area.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do real estate websites handle SEO and local search?</h3>
                            <button class="toggle-btn">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="faq-answer">
                            <p>Our real estate SEO approach is highly localized and property-focused:</p>
                            <ul>
                                <li><strong>Neighborhood Content Strategy:</strong> Creating dedicated pages for neighborhoods, communities, and developments with unique content that establishes local expertise.</li>
                                <li><strong>Property Listing Schema:</strong> Implementing structured data markup specifically for real estate to enhance property listings in search results with rich details.</li>
                                <li><strong>Google Business Profile Optimization:</strong> Setting up and optimizing your Google Business Profile with property categories, service areas, and regular updates.</li>
                                <li><strong>Hyperlocal Keywords:</strong> Targeting specific phrases like "downtown lofts with rooftop terraces" or "lakefront homes in [specific neighborhood]" that match searcher intent.</li>
                                <li><strong>Review Strategy:</strong> Building a system to collect and showcase client reviews both on your website and on third-party platforms.</li>
                                <li><strong>Dynamic Listing Pages:</strong> Creating SEO-friendly URLs and metadata for individual property listings that feed into search engines properly.</li>
                                <li><strong>Local Backlink Development:</strong> Strategies to earn links from local business directories, chambers of commerce, and community organizations.</li>
                            </ul>
                            <p>Our real estate websites are built with location-specific SEO from the ground up, helping you compete for valuable search terms in your service area. We also provide ongoing SEO guidance to help you continue building your local search presence after launch.</p>
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
