<?php
define('BASEPATH', true);
require_once '../includes/config.php';

// Initialize session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set variables for header
$pageTitle = 'Client Testimonials - NeoWebX';
$pageDescription = 'Discover what our clients say about working with NeoWebX and how our solutions have helped their businesses grow';
$pageKeywords = 'testimonials, client reviews, client feedback, success stories, tech solutions, digital transformation';

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => $pageKeywords
];

// Include header
include_once '../components/header.php';

// Testimonial Data
$testimonials = [
    [
        'quote' => 'NeoWebX transformed our outdated platform into a cutting-edge digital experience. Our conversion rates have increased by 75% since launch, and customer feedback has been overwhelmingly positive.',
        'author' => 'Sarah Johnson',
        'position' => 'CEO',
        'company' => 'TechVision Inc.',
        'image' => '../assets/images/testimonial-1.jpg',
        'rating' => 5
    ],
    [
        'quote' => 'The team at NeoWebX exceeded all our expectations. They didn\'t just deliver a website - they delivered a comprehensive digital solution that has revolutionized how we interact with our customers.',
        'author' => 'Michael Chen',
        'position' => 'Marketing Director',
        'company' => 'Global Systems',
        'image' => '../assets/images/testimonial-2.jpg',
        'rating' => 5
    ],
    [
        'quote' => 'Working with NeoWebX was seamless from start to finish. Their project management was impeccable, communication was clear, and the end result was exactly what we needed - delivered on time and within budget.',
        'author' => 'Jessica Martinez',
        'position' => 'Operations Manager',
        'company' => 'InnovateTech',
        'image' => '../assets/images/testimonial-3.jpg',
        'rating' => 5
    ],
    [
        'quote' => 'The custom e-commerce solution that NeoWebX built for us has been a game-changer. Our online sales have increased by 120% in just six months, and the backend management system has saved us countless hours of work.',
        'author' => 'David Wilson',
        'position' => 'E-commerce Director',
        'company' => 'Fashion Forward',
        'image' => '../assets/images/testimonial-4.jpg',
        'rating' => 5
    ],
    [
        'quote' => 'NeoWebX\'s AI integration with our customer service platform has reduced response times by 85% and improved satisfaction scores dramatically. Their technical expertise is truly impressive.',
        'author' => 'Amanda Roberts',
        'position' => 'Customer Experience Lead',
        'company' => 'ServicePro Solutions',
        'image' => '../assets/images/testimonial-5.jpg',
        'rating' => 5
    ],
    [
        'quote' => 'As a healthcare provider, security and compliance were our top priorities. NeoWebX delivered a patient portal that not only met all regulatory requirements but also provided an intuitive user experience our patients love.',
        'author' => 'Dr. Robert Thompson',
        'position' => 'Chief Medical Officer',
        'company' => 'MediHealth Partners',
        'image' => '../assets/images/testimonial-6.jpg',
        'rating' => 5
    ]
];

// Video Testimonials
$video_testimonials = [
    [
        'title' => 'How NeoWebX Helped TechVision Scale Their Business',
        'thumbnail' => '../assets/images/video-thumb-1.jpg',
        'video_id' => 'abc123', // YouTube or Vimeo ID
        'client' => 'TechVision Inc.',
        'duration' => '3:45'
    ],
    [
        'title' => 'Global Systems\' Digital Transformation Journey',
        'thumbnail' => '../assets/images/video-thumb-2.jpg',
        'video_id' => 'def456', // YouTube or Vimeo ID
        'client' => 'Global Systems',
        'duration' => '5:20'
    ],
    [
        'title' => 'Fashion Forward\'s E-commerce Success Story',
        'thumbnail' => '../assets/images/video-thumb-3.jpg',
        'video_id' => 'ghi789', // YouTube or Vimeo ID
        'client' => 'Fashion Forward',
        'duration' => '4:15'
    ]
];

// Client Stats
$client_stats = [
    [
        'number' => '98%',
        'text' => 'Client Satisfaction'
    ],
    [
        'number' => '200+',
        'text' => 'Projects Completed'
    ],
    [
        'number' => '85%',
        'text' => 'Returning Clients'
    ],
    [
        'number' => '50+',
        'text' => 'Industry Awards'
    ]
];
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content" data-aos="fade-right">
                <h1>Client <span class="highlight">Testimonials</span></h1>
                <p class="lead">Don't just take our word for it. Hear what our clients have to say about working with NeoWebX.</p>
            </div>
            <div class="hero-image" data-aos="fade-left">
                <img src="../assets/svg/testimonials-hero.svg" alt="Client Testimonials" class="floating-image">
                <div class="image-glow"></div>
                <div class="decoration-circle-1"></div>
                <div class="decoration-circle-2"></div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <?php foreach ($client_stats as $stat): ?>
            <div class="stat-card" data-aos="fade-up">
                <div class="stat-number"><?php echo htmlspecialchars($stat['number']); ?></div>
                <div class="stat-text"><?php echo htmlspecialchars($stat['text']); ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section">
    <div class="container">
        <div class="section-header">
            <div class="features-header" data-aos="fade-up">
                <h2>What Our Clients Say</h2>
                <p class="lead">Success stories from businesses we've helped transform</p>
            </div>
        </div>
        
        <div class="testimonials-grid">
            <?php foreach ($testimonials as $index => $testimonial): ?>
            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                <div class="testimonial-rating">
                    <?php for ($i = 0; $i < $testimonial['rating']; $i++): ?>
                    <i class="fas fa-star"></i>
                    <?php endfor; ?>
                </div>
                
                <div class="testimonial-quote">
                    <i class="fas fa-quote-left"></i>
                    <p><?php echo htmlspecialchars($testimonial['quote']); ?></p>
                </div>
                
                <div class="testimonial-author">
                    <div class="author-image">
                        <img src="<?php echo htmlspecialchars($testimonial['image']); ?>" alt="<?php echo htmlspecialchars($testimonial['author']); ?>">
                    </div>
                    <div class="author-info">
                        <h4><?php echo htmlspecialchars($testimonial['author']); ?></h4>
                        <p><?php echo htmlspecialchars($testimonial['position']); ?>, <?php echo htmlspecialchars($testimonial['company']); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Video Testimonials Section -->
<section class="video-testimonials-section">
    <div class="container">
        <div class="section-header">
            <div class="features-header" data-aos="fade-up">
                <h2>Video Success Stories</h2>
                <p class="lead">Watch our clients share their experience working with NeoWebX</p>
            </div>
        </div>
        
        <div class="video-grid">
            <?php foreach ($video_testimonials as $index => $video): ?>
            <div class="video-card" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                <div class="video-thumbnail">
                    <img src="<?php echo htmlspecialchars($video['thumbnail']); ?>" alt="<?php echo htmlspecialchars($video['title']); ?>">
                    <div class="play-button" data-video-id="<?php echo htmlspecialchars($video['video_id']); ?>">
                        <i class="fas fa-play"></i>
                    </div>
                    <div class="video-duration"><?php echo htmlspecialchars($video['duration']); ?></div>
                </div>
                <div class="video-info">
                    <h3><?php echo htmlspecialchars($video['title']); ?></h3>
                    <p><?php echo htmlspecialchars($video['client']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Testimonial Form Section -->
<section class="testimonial-form-section">
    <div class="container">
        <div class="section-header">
            <div class="features-header" data-aos="fade-up">
                <h2>Share Your Experience</h2>
                <p class="lead">We value your feedback. Let us know about your experience working with NeoWebX.</p>
            </div>
        </div>
        
        <div class="form-container" data-aos="fade-up">
            <form id="testimonial-form" class="contact-form">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" id="company" name="company" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" id="position" name="position" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group full-width">
                        <label for="rating">Your Rating</label>
                        <div class="rating-select">
                            <input type="radio" id="star5" name="rating" value="5" checked><label for="star5"><i class="fas fa-star"></i></label>
                            <input type="radio" id="star4" name="rating" value="4"><label for="star4"><i class="fas fa-star"></i></label>
                            <input type="radio" id="star3" name="rating" value="3"><label for="star3"><i class="fas fa-star"></i></label>
                            <input type="radio" id="star2" name="rating" value="2"><label for="star2"><i class="fas fa-star"></i></label>
                            <input type="radio" id="star1" name="rating" value="1"><label for="star1"><i class="fas fa-star"></i></label>
                        </div>
                    </div>
                    
                    <div class="form-group full-width">
                        <label for="testimonial">Your Testimonial</label>
                        <textarea id="testimonial" name="testimonial" rows="5" required></textarea>
                    </div>
                    
                    <div class="form-group full-width">
                        <button type="submit" class="btn-primary">Submit Testimonial</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Create Your Own Success Story?</h2>
            <p class="lead">Join our satisfied clients and experience the NeoWebX difference for yourself.</p>
            <a href="/pages/contact.php" class="cta-btn animate-pulse-slow">Get Started Today</a>
        </div>
    </div>
</section>

<style>
/* Testimonials Specific Styles */
.testimonials-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 2rem;
    margin-top: 2rem;
}

@media (min-width: 768px) {
    .testimonials-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 1200px) {
    .testimonials-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

.testimonial-card {
    background: var(--white);
    border-radius: var(--radius);
    padding: 2rem;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.testimonial-rating {
    margin-bottom: 1.5rem;
}

.testimonial-rating i {
    color: var(--pumpkin);
    font-size: 1.2rem;
    margin-right: 0.25rem;
}

.testimonial-quote {
    flex: 1;
    margin-bottom: 1.5rem;
    position: relative;
}

.testimonial-quote i {
    color: var(--pumpkin);
    font-size: 1.5rem;
    opacity: 0.2;
    position: absolute;
    top: -10px;
    left: -5px;
}

.testimonial-quote p {
    position: relative;
    z-index: 1;
    font-style: italic;
    color: var(--text);
}

.testimonial-author {
    display: flex;
    align-items: center;
}

.author-image {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 1rem;
    flex-shrink: 0;
}

.author-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.author-info h4 {
    font-size: 1rem;
    margin-bottom: 0.25rem;
    color: var(--yinmn-blue);
}

.author-info p {
    font-size: 0.875rem;
    color: var(--text-light);
    margin: 0;
}

/* Video Testimonials */
.video-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 2rem;
    margin-top: 2rem;
}

@media (min-width: 768px) {
    .video-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 1200px) {
    .video-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

.video-card {
    background: var(--white);
    border-radius: var(--radius);
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.video-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.video-thumbnail {
    position: relative;
    height: 0;
    padding-bottom: 56.25%; /* 16:9 aspect ratio */
    overflow: hidden;
}

.video-thumbnail img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.play-button {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.9);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
}

.play-button i {
    color: var(--pumpkin);
    font-size: 1.5rem;
    margin-left: 5px; /* Optical centering */
}

.play-button:hover {
    background: var(--pumpkin);
}

.play-button:hover i {
    color: var(--white);
}

.video-duration {
    position: absolute;
    bottom: 10px;
    right: 10px;
    background: rgba(0, 0, 0, 0.7);
    color: var(--white);
    padding: 0.25rem 0.5rem;
    border-radius: 2px;
    font-size: 0.75rem;
}

.video-info {
    padding: 1.5rem;
}

.video-info h3 {
    font-size: 1.1rem;
    margin-bottom: 0.5rem;
    color: var(--yinmn-blue);
}

.video-info p {
    font-size: 0.875rem;
    color: var(--text-light);
    margin: 0;
}

/* Stats Section */
.stats-section {
    background: var(--white);
    padding: 3rem 0;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
}

@media (min-width: 992px) {
    .stats-grid {
        grid-template-columns: repeat(4, 1fr);
    }
}

.stat-card {
    text-align: center;
    padding: 1.5rem;
    background: var(--bg-light);
    border-radius: var(--radius);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
}

.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.stat-number {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--pumpkin);
    margin-bottom: 0.5rem;
}

.stat-text {
    font-size: 1rem;
    color: var(--text);
}

/* Testimonial Form */
.testimonial-form-section {
    background: var(--bg-light);
    padding: 5rem 0;
}

.form-container {
    max-width: 800px;
    margin: 0 auto;
    background: var(--white);
    border-radius: var(--radius);
    padding: 2rem;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.form-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
}

@media (min-width: 768px) {
    .form-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

.form-group.full-width {
    grid-column: 1 / -1;
}

.rating-select {
    display: flex;
    flex-direction: row-reverse;
    justify-content: flex-end;
}

.rating-select input {
    display: none;
}

.rating-select label {
    cursor: pointer;
    font-size: 1.5rem;
    color: #ccc;
    margin-right: 0.5rem;
}

.rating-select label:hover,
.rating-select label:hover ~ label,
.rating-select input:checked ~ label {
    color: var(--pumpkin);
}

.rating-select label:hover i,
.rating-select label:hover ~ label i,
.rating-select input:checked ~ label i {
    transform: scale(1.2);
}

.rating-select i {
    transition: all 0.2s ease;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Testimonial form handling
    const testimonialForm = document.getElementById('testimonial-form');
    if (testimonialForm) {
        testimonialForm.addEventListener('submit', function(e) {
            e.preventDefault();
            // Here you would normally send the data to your server
            alert('Thank you for your testimonial! After review, it will be added to our page.');
            testimonialForm.reset();
        });
    }
    
    // Video play button handling
    const playButtons = document.querySelectorAll('.play-button');
    playButtons.forEach(button => {
        button.addEventListener('click', function() {
            const videoId = this.getAttribute('data-video-id');
            // Here you would normally open a modal with the embedded video
            alert('Video player would open here with video ID: ' + videoId);
        });
    });
});
</script>

<?php
// Include footer
include_once '../components/footer.php';
?> 