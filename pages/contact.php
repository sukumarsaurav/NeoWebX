<?php
define('BASEPATH', true);
require_once '../includes/config.php';

// Initialize session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set variables for header
$pageTitle = 'Contact Us - NeoWebX';
$pageDescription = 'Get in touch with NeoWebX - Your technology partner for digital transformation and growth';
$pageKeywords = 'contact us, get in touch, startup, technology partner, web development, AI solutions';

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => $pageKeywords
];

// Form processing
$formSubmitted = false;
$formSuccess = false;
$formError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formSubmitted = true;
    
    // Get form data
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $company = isset($_POST['company']) ? trim($_POST['company']) : '';
    $service = isset($_POST['service']) ? trim($_POST['service']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    
    // Validate form data
    if (empty($name) || empty($email) || empty($message)) {
        $formError = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $formError = 'Please enter a valid email address.';
    } else {
        // Prepare email content
        $to = 'info@neowebx.com'; // Replace with your email
        $subject = 'New Contact Form Submission from ' . $name;
        $emailBody = "Name: $name\n";
        $emailBody .= "Email: $email\n";
        $emailBody .= "Phone: $phone\n";
        $emailBody .= "Company: $company\n";
        $emailBody .= "Service: $service\n\n";
        $emailBody .= "Message:\n$message";
        
        $headers = 'From: ' . $email . "\r\n" .
            'Reply-To: ' . $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        
        // Send email
        if (mail($to, $subject, $emailBody, $headers)) {
            $formSuccess = true;
        } else {
            $formError = 'An error occurred while sending your message. Please try again later.';
        }
    }
}

// Include header
include_once '../components/header.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content" data-aos="fade-right">
                <h1>Let's <span class="highlight">Connect</span></h1>
                <p class="lead">We're here to answer your questions and discuss how we can help your business grow.</p>
                <div class="hero-buttons">
                    <a href="#contact-form" class="btn btn-primary">Send a Message</a>
                    <a href="#contact-info" class="btn btn-outline">Our Details</a>
                </div>
            </div>
            <div class="hero-image" data-aos="fade-left">
                <img src="../assets/images/contact-us-neowebx.png" alt="Contact Us" class="floating-image">
                <div class="image-glow"></div>
                <div class="decoration-circle-1"></div>
                <div class="decoration-circle-2"></div>
            </div>
        </div>
    </div>
</section>

<!-- Form and Map Container -->
<div class="form-map-container container">
    <!-- Combined Contact Information Card (Now on the left) -->
    <section class="contact-info-card-section">
        <div class="contact-card" data-aos="fade-up">
            <div class="section-header">
                <h2>Contact Information</h2>
                <p class="section-lead">Connect with our team</p>
            </div>
            
            <div class="contact-details">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h4>Call Us</h4>
                        <p>Speak directly with our team</p>
                        <a href="tel:+91-9991289245" class="contact-link">+91-9991289245</a>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-text">
                        <h4>Email Us</h4>
                        <p>We'll respond within 24 hours</p>
                        <a href="mailto:info@neowebx.com" class="contact-link">info@neowebx.com</a>
                    </div>
                </div>
<!--                 
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h4>Visit Us</h4>
                        <p>Our office location</p>
                        <address class="contact-address">
                            123 Innovation Drive<br>
                            Tech Park, Suite 101<br>
                            San Francisco, CA 94107
                        </address>
                    </div>
                </div>
                 -->
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="contact-text">
                        <h4>Business Hours</h4>
                        <p>When we're available</p>
                        <div class="hours">
                            <p>Monday - Friday: 9am - 6pm</p>
                            <p>Saturday - Sunday: Closed</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="social-links">
                <h4>Connect With Us</h4>
                <div class="social-icons">
                    <a href="https://www.facebook.com/profile.php?id=61574724826323" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://x.com/NeoWebX" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/in/neowebx/" target="_blank" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.instagram.com/neowebx?igsh=MXM0NjN4eTgxN3RvMg==" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form (Now on the right) -->
    <section id="contact-form" class="overview-section contact-form-section">
        <div class="section-header" data-aos="fade-up">
            <h2>Send Us a Message</h2>
            <p class="section-lead">We'd love to hear from you</p>
        </div>
        
        <?php if ($formSubmitted && $formSuccess): ?>
        <div class="form-success-message" data-aos="fade-up">
            <div class="success-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <h3>Thank You!</h3>
            <p>Your message has been received. We'll get back to you shortly.</p>
        </div>
        <?php else: ?>
        
        <?php if ($formError): ?>
        <div class="form-error-message" data-aos="fade-up">
            <p><i class="fas fa-exclamation-circle"></i> <?php echo $formError; ?></p>
        </div>
        <?php endif; ?>
        
        <div class="contact-form-container" data-aos="fade-up">
            <form method="post" action="#contact-form" class="contact-form">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="name">Full Name <span class="required">*</span></label>
                        <input type="text" id="name" name="name" required placeholder="Your full name" value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address <span class="required">*</span></label>
                        <input type="email" id="email" name="email" required placeholder="Your email address" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="Your phone number" value="<?php echo isset($phone) ? htmlspecialchars($phone) : ''; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="company">Company Name</label>
                        <input type="text" id="company" name="company" placeholder="Your company name" value="<?php echo isset($company) ? htmlspecialchars($company) : ''; ?>">
                    </div>
                    
                    <div class="form-group full-width">
                        <label for="service">Service You're Interested In</label>
                        <select id="service" name="service">
                            <option value="">Select a service</option>
                            <option value="Web Development" <?php echo (isset($service) && $service === 'Web Development') ? 'selected' : ''; ?>>Web Development</option>
                            <option value="Mobile App Development" <?php echo (isset($service) && $service === 'Mobile App Development') ? 'selected' : ''; ?>>Mobile App Development</option>
                            <option value="AI Solutions" <?php echo (isset($service) && $service === 'AI Solutions') ? 'selected' : ''; ?>>AI Solutions</option>
                            <option value="Digital Marketing" <?php echo (isset($service) && $service === 'Digital Marketing') ? 'selected' : ''; ?>>Digital Marketing</option>
                            <option value="Other" <?php echo (isset($service) && $service === 'Other') ? 'selected' : ''; ?>>Other</option>
                        </select>
                    </div>
                    
                    <div class="form-group full-width">
                        <label for="message">Your Message <span class="required">*</span></label>
                        <textarea id="message" name="message" rows="5" required placeholder="How can we help you?"><?php echo isset($message) ? htmlspecialchars($message) : ''; ?></textarea>
                    </div>
                </div>
                
                <div class="form-submit">
                    <button type="submit" class="submit-btn">Send Message</button>
                </div>
            </form>
        </div>
        <?php endif; ?>
    </section>
</div>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <div class="section-header">
            <div class="faq-header" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p class="lead">Common questions about working with us</p>
            </div>
        </div>
        <div class="faq-container">
            <div class="faq-item active" data-aos="fade-up">
                <div class="faq-question">
                    <h3>What information should I prepare before contacting you?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>To help us understand your needs better, it's helpful to have the following information ready:</p>
                    <ul>
                        <li>A brief description of your project or requirements</li>
                        <li>Your timeline and budget expectations</li>
                        <li>Any existing websites, apps, or systems you want to integrate with</li>
                        <li>Your business goals and what success looks like for this project</li>
                    </ul>
                    <p>Don't worry if you don't have all of these details yet – we can discuss them during our consultation.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>How soon will I hear back after submitting my inquiry?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>We make it a priority to respond to all inquiries within 24 business hours. In most cases, you'll hear from us much sooner. After your initial contact, we'll schedule a consultation call to discuss your project in more detail.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>Do you work with clients internationally?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>Yes, we work with clients globally! Our team is experienced in remote collaboration, and we use various tools to ensure smooth communication regardless of time zones. We've successfully completed projects for clients across North America, Europe, Asia, and Australia.</p>
                </div>
            </div>
            
            <div class="faq-item" data-aos="fade-up">
                <div class="faq-question">
                    <h3>What is your typical process after initial contact?</h3>
                    <button class="toggle-btn">
                        <i class="fas fa-chevron-down"></i>
                    </button>
                </div>
                <div class="faq-answer">
                    <p>Our typical process includes:</p>
                    <ol>
                        <li><strong>Initial Consultation:</strong> We discuss your project requirements, goals, and expectations.</li>
                        <li><strong>Proposal:</strong> We provide a detailed proposal outlining scope, timeline, and cost.</li>
                        <li><strong>Project Kickoff:</strong> Once you approve the proposal, we schedule a kickoff meeting to align on project details.</li>
                        <li><strong>Regular Updates:</strong> Throughout the project, we provide regular progress updates.</li>
                        <li><strong>Delivery & Support:</strong> After delivery, we provide ongoing support as needed.</li>
                    </ol>
                    <p>We emphasize open communication throughout the entire process.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Include footer
include_once '../components/footer.php';
?>
 <script src="/assets/js/services.js"></script>
