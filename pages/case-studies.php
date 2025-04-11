<?php
define('BASEPATH', true);
require_once '../includes/config.php';

// Initialize session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set variables for header
$pageTitle = 'Case Studies - NeoWebX';
$pageDescription = 'Explore our client success stories and discover how our solutions have driven real-world business results';
$pageKeywords = 'case studies, success stories, project portfolio, client results, business transformation, digital solutions';

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => $pageKeywords
];

// Include header
include_once '../components/header.php';

// Case Studies Data
$case_studies = [
    [
        'title' => 'E-commerce Revenue Boost for Fashion Retailer',
        'client' => 'StyleTrend',
        'category' => 'E-commerce Development',
        'image' => '../assets/images/healthcare-websites.jpg', // Replace with actual case study image
        'challenge' => 'StyleTrend was struggling with cart abandonment and low conversion rates on their existing website, resulting in stagnant online sales despite growing traffic.',
        'solution' => 'We redesigned their e-commerce platform with a focus on user experience, implementing AI-powered product recommendations, streamlined checkout, and mobile optimization.',
        'results' => [
            '52% increase in conversion rate',
            '37% reduction in cart abandonment',
            '125% growth in mobile sales',
            '$2.3M additional revenue in first year'
        ]
    ],
    [
        'title' => 'AI-Powered Customer Support for SaaS Platform',
        'client' => 'CloudFlow',
        'category' => 'AI Solutions',
        'image' => '../assets/images/healthcare-websites.jpg', // Replace with actual case study image
        'challenge' => 'CloudFlow was experiencing customer satisfaction issues due to long response times and inconsistent support quality as their user base rapidly expanded.',
        'solution' => 'We developed an AI-powered chatbot that could handle 80% of common inquiries, integrated it with their knowledge base, and implemented a smart escalation system for complex issues.',
        'results' => [
            '90% reduction in first-response time',
            '68% of inquiries resolved without human intervention',
            '42% decrease in support costs',
            '4.8/5 customer satisfaction score (up from 3.2/5)'
        ]
    ],
    [
        'title' => 'Digital Transformation for Healthcare Provider',
        'client' => 'MediCare Group',
        'category' => 'Healthcare Solutions',
        'image' => '../assets/images/healthcare-websites.jpg', // Replace with actual case study image
        'challenge' => 'MediCare Group was using outdated, disconnected systems for patient management, scheduling, and records, causing inefficiencies and limiting growth potential.',
        'solution' => 'We built a comprehensive digital ecosystem with integrated patient portal, secure records management, automated scheduling, and real-time analytics dashboard.',
        'results' => [
            '35% reduction in administrative work',
            '29% increase in appointment capacity',
            '98.5% data accuracy (up from 87%)',
            '$1.2M annual cost savings from operational efficiency'
        ]
    ]
];
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content" data-aos="fade-right">
                <h1>Our <span class="highlight">Success</span> Stories</h1>
                <p class="lead">Real results for real businesses. Discover how our solutions have helped organizations overcome challenges and achieve measurable growth.</p>
            </div>
            <div class="hero-image" data-aos="fade-left">
                <img src="../assets/svg/logo.svg" alt="Case Studies" class="floating-image">
                <div class="image-glow"></div>
                <div class="decoration-circle-1"></div>
                <div class="decoration-circle-2"></div>
            </div>
        </div>
    </div>
</section>

<!-- Case Studies Section -->
<section class="features-section">
    <div class="container">
        <div class="section-header">
            <div class="features-header" data-aos="fade-up">
                <h2>Client Success Stories</h2>
                <p class="lead">Explore our detailed case studies to see how we solve complex business challenges</p>
            </div>
        </div>
        
        <!-- Case Studies Grid -->
        <div class="case-studies-grid">
            <?php foreach ($case_studies as $index => $study): ?>
            <div class="case-study-card" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                <div class="case-study-image">
                    <img src="<?php echo htmlspecialchars($study['image']); ?>" alt="<?php echo htmlspecialchars($study['title']); ?>">
                    <div class="case-study-category"><?php echo htmlspecialchars($study['category']); ?></div>
                </div>
                <div class="case-study-content">
                    <h3 class="case-study-title"><?php echo htmlspecialchars($study['title']); ?></h3>
                    <p class="case-study-client"><strong>Client:</strong> <?php echo htmlspecialchars($study['client']); ?></p>
                    
                    <div class="case-study-section">
                        <h4>Challenge</h4>
                        <p><?php echo htmlspecialchars($study['challenge']); ?></p>
                    </div>
                    
                    <div class="case-study-section">
                        <h4>Solution</h4>
                        <p><?php echo htmlspecialchars($study['solution']); ?></p>
                    </div>
                    
                    <div class="case-study-section">
                        <h4>Results</h4>
                        <ul class="results-list">
                            <?php foreach ($study['results'] as $result): ?>
                            <li><i class="fas fa-chart-line"></i> <?php echo htmlspecialchars($result); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    
                    <a href="#" class="btn-outline">View Full Case Study</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Industry Success Section -->
<section class="overview-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Our Impact Across Industries</h2>
            <p class="section-lead">We've delivered transformative results across diverse sectors</p>
        </div>
        
        <div class="stats-grid" data-aos="fade-up">
            <div class="stat-card">
                <div class="stat-icon"><i class="fas fa-shopping-cart"></i></div>
                <div class="stat-number">35+</div>
                <div class="stat-title">E-commerce Projects</div>
                <div class="stat-text">Average revenue increase of 47%</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon"><i class="fas fa-heartbeat"></i></div>
                <div class="stat-number">20+</div>
                <div class="stat-title">Healthcare Solutions</div>
                <div class="stat-text">Improving patient care for 2M+ patients</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon"><i class="fas fa-robot"></i></div>
                <div class="stat-number">50+</div>
                <div class="stat-title">AI Implementations</div>
                <div class="stat-text">Saving 120,000+ work hours annually</div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon"><i class="fas fa-landmark"></i></div>
                <div class="stat-number">15+</div>
                <div class="stat-title">Finance Solutions</div>
                <div class="stat-text">Processing $500M+ in transactions</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Become Our Next Success Story?</h2>
            <p class="lead">Let's discuss how we can help you achieve measurable results for your business.</p>
            <a href="/pages/contact.php" class="cta-btn animate-pulse-slow">Start Your Project</a>
        </div>
    </div>
</section>

<style>
/* Case Studies Specific Styles */
.case-studies-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 2rem;
    margin-top: 2rem;
}

@media (min-width: 992px) {
    .case-studies-grid {
        grid-template-columns: 1fr;
    }
}

.case-study-card {
    background: var(--white);
    border-radius: var(--radius);
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    display: grid;
    grid-template-columns: 1fr;
    transition: all 0.3s ease;
}

@media (min-width: 768px) {
    .case-study-card {
        grid-template-columns: 1fr 2fr;
    }
}

.case-study-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.case-study-image {
    position: relative;
    height: 100%;
    min-height: 250px;
}

.case-study-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.case-study-category {
    position: absolute;
    top: 1rem;
    left: 1rem;
    background: var(--pumpkin);
    color: var(--white);
    padding: 0.5rem 1rem;
    border-radius: 2rem;
    font-size: 0.875rem;
    font-weight: 500;
}

.case-study-content {
    padding: 2rem;
}

.case-study-title {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
    color: var(--yinmn-blue);
}

.case-study-client {
    color: var(--text-light);
    margin-bottom: 1.5rem;
}

.case-study-section {
    margin-bottom: 1.5rem;
}

.case-study-section h4 {
    font-size: 1.1rem;
    margin-bottom: 0.5rem;
    color: var(--pumpkin);
}

.results-list {
    list-style: none;
    padding: 0;
}

.results-list li {
    padding: 0.5rem 0;
    display: flex;
    align-items: center;
}

.results-list li i {
    color: var(--pumpkin);
    margin-right: 0.75rem;
}

.stats-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
    margin-top: 3rem;
}

@media (min-width: 576px) {
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 992px) {
    .stats-grid {
        grid-template-columns: repeat(4, 1fr);
    }
}

.stat-card {
    background: var(--white);
    border-radius: var(--radius);
    padding: 2rem;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.stat-icon {
    font-size: 2rem;
    color: var(--pumpkin);
    margin-bottom: 1rem;
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--yinmn-blue);
    margin-bottom: 0.5rem;
}

.stat-title {
    font-size: 1.1rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.stat-text {
    color: var(--text-light);
    font-size: 0.9rem;
}
</style>

<?php
// Include footer
include_once '../components/footer.php';
?> 