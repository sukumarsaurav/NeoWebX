<?php
define('BASEPATH', true);
require_once '../includes/config.php';

// Initialize session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set variables for header
$pageTitle = 'About Us - NeoWebX';
$pageDescription = 'Learn about NeoWebX - Your trusted technology partner for digital transformation';
$pageKeywords = 'about us, startup, technology partner, web development, AI solutions';

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => $pageKeywords
];

// Include header
include_once '../components/header.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content" data-aos="fade-right">
                <h1>About <span class="highlight">NeoWebX</span></h1>
                <p class="lead">Your trusted technology partner for digital transformation and growth</p>
            </div>
            <div class="hero-image" data-aos="fade-left">
                <img src="../assets/images/about-header.svg" alt="About Us" class="floating-image">
                <div class="image-glow"></div>
                <div class="decoration-circle-1"></div>
                <div class="decoration-circle-2"></div>
            </div>
        </div>
    </div>
</section>

<!-- Our Story -->
<section class="overview-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>Our Story</h2>
            <p class="section-lead">From vision to reality: how we came to be</p>
        </div>
        
        <div class="overview-grid">
            <div class="overview-card primary-card" data-aos="fade-right" data-aos-duration="800">
                <div class="card-decoration"></div>
                <h3>Our Mission & Vision</h3>
                <p>NeoWebX was founded with a vision to help startups and businesses leverage the power of technology to achieve their goals. We understand the challenges that startups face in today's competitive landscape.</p>
                <p>Our team of experts brings together years of experience in web development, AI solutions, and digital marketing to provide comprehensive solutions that drive growth and success.</p>
            </div>
            
            <div class="overview-card secondary-card" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">
                <div class="card-decoration"></div>
                <h3>Our Approach</h3>
                <p>We believe in a collaborative approach to technology. By working closely with our clients, we gain deep insights into their unique challenges and opportunities.</p>
                <p>This enables us to craft tailored solutions that not only solve immediate problems but also position businesses for long-term success in an ever-evolving digital landscape.</p>
            </div>
        </div>
    </div>
</section>

<!-- Our Values -->
<section class="features-section">
    <div class="container">
        <div class="section-header">
            <div class="features-header" data-aos="fade-up">
                <h2>Our Core Values</h2>
                <p class="lead">The principles that guide everything we do</p>
            </div>
        </div>
        <div class="features-grid">
            <div class="feature-item" data-aos="fade-up">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>We stay at the forefront of technology to deliver cutting-edge solutions that give our clients a competitive advantage in their industries.</p>
                </div>
            </div>
            <div class="feature-item" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>Partnership</h3>
                    <p>We work closely with our clients to ensure their success is our success, building long-term relationships based on trust and mutual growth.</p>
                </div>
            </div>
            <div class="feature-item" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Quality</h3>
                    <p>We maintain the highest standards in everything we deliver, ensuring that our solutions are robust, reliable, and built to last.</p>
                </div>
            </div>
            <div class="feature-item" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Collaboration</h3>
                    <p>We believe in the power of teamwork, both within our organization and with our clients, to create solutions that exceed expectations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="services-section">
    <div class="container">
        <div class="section-header">
            <div class="services-header" data-aos="fade-up">
                <h2>Meet Our Team</h2>
                <p class="lead">The experts behind our success stories</p>
            </div>
        </div>
        <div class="services-grid">
            <div class="service-item" data-aos="fade-up">
                <div class="service-card">
                    <img src="../assets/images/team1.jpg" alt="John Doe" class="team-image">
                    <h3>John Doe</h3>
                    <p>CEO & Founder</p>
                    <div class="social-links">
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <img src="../assets/images/team2.jpg" alt="Jane Smith" class="team-image">
                    <h3>Jane Smith</h3>
                    <p>AI Lead</p>
                    <div class="social-links">
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <img src="../assets/images/team3.jpg" alt="Mike Johnson" class="team-image">
                    <h3>Mike Johnson</h3>
                    <p>Tech Lead</p>
                    <div class="social-links">
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="#" aria-label="GitHub"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
            <div class="service-item" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <img src="../assets/images/team4.jpg" alt="Sarah Wilson" class="team-image">
                    <h3>Sarah Wilson</h3>
                    <p>Marketing Director</p>
                    <div class="social-links">
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
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
            <h2>Ready to Work With Us?</h2>
            <p class="lead">Let's build something amazing together</p>
            <a href="/pages/contact.php" class="cta-btn animate-pulse-slow">
                Get in Touch
            </a>
        </div>
    </div>
</section>

<?php
// Include footer
include_once '../components/footer.php';
?> 