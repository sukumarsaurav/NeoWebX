<?php
define('BASEPATH', true);
require_once '../includes/config.php';

// Initialize session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set variables for header
$pageTitle = 'Our Portfolio - NeoWebX';
$pageDescription = 'Explore our portfolio of web development, AI solutions, and digital marketing projects';
$pageKeywords = 'portfolio, projects, web development, AI solutions, digital marketing, case studies';

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => $pageKeywords
];

// Include header
include_once '../components/header.php';

// Array of portfolio projects
$projects = [
    [
        'title' => 'E-commerce Platform',
        'category' => 'Web Development',
        'image' => '../assets/images/portfolio/ecommerce.jpg',
        'description' => 'A custom e-commerce platform built with React and Node.js, featuring payment integration and inventory management.',
        'technology' => 'React, Node.js, MongoDB, Stripe',
        'client' => 'Fashion Retailer'
    ],
    [
        'title' => 'AI Customer Support Chatbot',
        'category' => 'AI Solutions',
        'image' => '../assets/images/portfolio/chatbot.jpg',
        'description' => 'An intelligent chatbot that handles customer inquiries and provides real-time support with 24/7 availability.',
        'technology' => 'TensorFlow, Python, DialogFlow, Next.js',
        'client' => 'SaaS Company'
    ],
    [
        'title' => 'Real Estate Website',
        'category' => 'Web Development',
        'image' => '../assets/images/portfolio/realestate.jpg',
        'description' => 'A responsive real estate website with property listings, search functionality, and agent profiles.',
        'technology' => 'WordPress, Custom Theme, Google Maps API',
        'client' => 'Real Estate Agency'
    ],
    [
        'title' => 'SEO & Content Marketing',
        'category' => 'Digital Marketing',
        'image' => '../assets/images/portfolio/seo.jpg',
        'description' => 'Comprehensive SEO and content marketing campaign that increased organic traffic by 150% in 6 months.',
        'technology' => 'SEMrush, Google Analytics, Content Strategy',
        'client' => 'Educational Platform'
    ],
    [
        'title' => 'Voice Assistant Integration',
        'category' => 'AI Solutions',
        'image' => '../assets/images/portfolio/voice.jpg',
        'description' => 'Custom voice assistant integration for a smart home product, enabling voice-controlled operations.',
        'technology' => 'Amazon Alexa SDK, Google Assistant API, Node.js',
        'client' => 'Smart Home Manufacturer'
    ],
    [
        'title' => 'Mobile App Design',
        'category' => 'Web Design',
        'image' => '../assets/images/portfolio/mobileapp.jpg',
        'description' => 'UI/UX design for a fitness tracking mobile application with intuitive user interface and engaging experience.',
        'technology' => 'Figma, Adobe XD, Prototyping, User Testing',
        'client' => 'Fitness Startup'
    ]
];
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content" data-aos="fade-right">
                <h1>Our <span class="highlight">Portfolio</span></h1>
                <p class="lead">Showcasing our best work and successful projects</p>
            </div>
            <div class="hero-image" data-aos="fade-left">
                <img src="../assets/images/portfolio-header.svg" alt="Portfolio" class="floating-image">
                <div class="image-glow"></div>
                <div class="decoration-circle-1"></div>
                <div class="decoration-circle-2"></div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Filter -->
<section class="features-section">
    <div class="container">
        <div class="section-header">
            <div class="features-header" data-aos="fade-up">
                <h2>Our Work</h2>
                <p class="lead">Browse our projects by category</p>
            </div>
        </div>
        
        <div class="filter-container" data-aos="fade-up">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="Web Development">Web Development</button>
            <button class="filter-btn" data-filter="AI Solutions">AI Solutions</button>
            <button class="filter-btn" data-filter="Digital Marketing">Digital Marketing</button>
            <button class="filter-btn" data-filter="Web Design">Web Design</button>
        </div>
        
        <div class="portfolio-grid">
            <?php foreach ($projects as $project): ?>
            <div class="portfolio-item" data-category="<?php echo htmlspecialchars($project['category']); ?>" data-aos="fade-up">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="<?php echo htmlspecialchars($project['image']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>">
                    </div>
                    <div class="portfolio-content">
                        <span class="portfolio-category"><?php echo htmlspecialchars($project['category']); ?></span>
                        <h3 class="portfolio-title"><?php echo htmlspecialchars($project['title']); ?></h3>
                        <p class="portfolio-description"><?php echo htmlspecialchars($project['description']); ?></p>
                        <button class="view-details-btn" data-bs-toggle="modal" data-bs-target="#projectModal<?php echo $loop = isset($loop) ? $loop + 1 : 1; ?>">
                            View Details <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Project Modals -->
<?php $counter = 1; ?>
<?php foreach ($projects as $project): ?>
<div class="modal fade" id="projectModal<?php echo $counter; ?>" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title"><?php echo htmlspecialchars($project['title']); ?></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-grid">
                    <div class="modal-image">
                        <img src="<?php echo htmlspecialchars($project['image']); ?>" class="project-image" alt="<?php echo htmlspecialchars($project['title']); ?>">
                    </div>
                    <div class="modal-content">
                        <div class="project-detail">
                            <h4>Project Description</h4>
                            <p><?php echo htmlspecialchars($project['description']); ?></p>
                        </div>
                        
                        <div class="project-detail">
                            <h4>Technologies Used</h4>
                            <p><?php echo htmlspecialchars($project['technology']); ?></p>
                        </div>
                        
                        <div class="project-detail">
                            <h4>Client</h4>
                            <p><?php echo htmlspecialchars($project['client']); ?></p>
                        </div>
                        
                        <div class="project-actions">
                            <a href="#" class="btn-primary">Visit Project</a>
                            <button type="button" class="btn-outline" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $counter++; ?>
<?php endforeach; ?>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Start Your Project?</h2>
            <p class="lead">Let us help you create a custom solution tailored to your business needs.</p>
            <a href="/pages/contact.php" class="cta-btn animate-pulse-slow">Get in Touch</a>
        </div>
    </div>
</section>

<!-- Portfolio Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Portfolio filtering
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            
            // Add active class to clicked button
            this.classList.add('active');
            
            // Get filter value
            const filterValue = this.getAttribute('data-filter');
            
            // Filter items
            portfolioItems.forEach(item => {
                if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>

<?php
// Include footer
include_once '../components/footer.php';
?> 