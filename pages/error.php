<?php
// Define the base path
define('BASEPATH', realpath(dirname(__FILE__) . '/..'));

// Include the configuration file
require_once BASEPATH . '/includes/config.php';

// Get the error code from the URL
$error_code = isset($_GET['code']) ? intval($_GET['code']) : 404;
$error_message = isset($_GET['message']) ? $_GET['message'] : '';

// Set default titles and messages based on error code
switch ($error_code) {
    case 400:
        $error_title = 'Bad Request';
        $default_message = 'The server cannot process the request due to a client error.';
        break;
    case 401:
        $error_title = 'Unauthorized';
        $default_message = 'You need to be authenticated to access this resource.';
        break;
    case 403:
        $error_title = 'Forbidden';
        $default_message = 'You don\'t have permission to access this resource.';
        break;
    case 404:
        $error_title = 'Page Not Found';
        $default_message = 'The page you are looking for might have been removed or is temporarily unavailable.';
        break;
    case 500:
    default:
        $error_code = 500; // Ensure valid error code
        $error_title = 'Server Error';
        $default_message = 'Something went wrong on our end. Our technical team has been notified.';
        break;
}

// If no custom message was provided, use the default
if (empty($error_message)) {
    $error_message = $default_message;
}

// Set page variables
$pageTitle = "Error {$error_code} - {$error_title} | NeoWebX";
$pageDescription = "Error {$error_code} - {$error_title}";
$pageKeywords = "error, {$error_code}, {$error_title}";

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => $pageKeywords
];

// Include the header
include_once BASEPATH . '/components/header.php';
?>

<!-- Hero Section -->
<section class="hero-section error-hero">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content" data-aos="fade-right">
                <h1>Error <span class="highlight"><?php echo $error_code; ?></span></h1>
                <p class="lead"><?php echo $error_title; ?></p>
                <div class="hero-buttons">
                    <button onclick="history.back()" class="btn btn-outline">
                        <i class="fas fa-arrow-left"></i> Go Back
                    </button>
                    <a href="/" class="btn btn-primary">
                        <i class="fas fa-home"></i> Return to Homepage
                    </a>
                </div>
            </div>
            <div class="hero-image" data-aos="fade-left">
                <img src="../assets/images/error-illustration.svg" alt="Error <?php echo $error_code; ?>" class="floating-image">
                <div class="image-glow"></div>
                <div class="decoration-circle-1"></div>
                <div class="decoration-circle-2"></div>
            </div>
        </div>
    </div>
</section>

<!-- Error Section -->
<section class="overview-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>What Happened?</h2>
            <p class="section-lead">Here's what might have gone wrong</p>
        </div>
        
        <div class="overview-grid">
            <div class="overview-card primary-card" data-aos="fade-up">
                <div class="card-decoration"></div>
                <h3>Error Details</h3>
                <p><?php echo htmlspecialchars($error_message); ?></p>
                <p class="error-note">Our technical team has been notified of this issue.</p>
            </div>
            
            <div class="overview-card secondary-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-decoration"></div>
                <h3>What You Can Do</h3>
                <ul class="error-suggestions">
                    <li>Check that the URL you entered is correct</li>
                    <li>Return to the previous page and try again</li>
                    <li>Go to our homepage and navigate from there</li>
                    <li>Contact us if the problem persists</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Need Help?</h2>
            <p class="lead">We're here to assist you with any questions or concerns</p>
            <a href="/pages/contact.php" class="cta-btn animate-pulse-slow">
                Contact Support
            </a>
        </div>
    </div>
</section>

<?php
// Include the footer
include_once BASEPATH . '/components/footer.php';
?> 