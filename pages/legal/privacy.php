<?php
define('BASEPATH', true);
require_once '../../includes/config.php';

// Initialize session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set variables for header
$pageTitle = 'Privacy Policy - NeoWebX';
$pageDescription = 'Read our Privacy Policy to understand how NeoWebX collects, uses, and protects your personal information';
$pageKeywords = 'privacy policy, data protection, personal information, privacy practices, cookie policy';

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => $pageKeywords
];

// Include header
include_once '../../components/header.php';

// Last Updated Date
$lastUpdated = "January 1, 2023";
?>

<!-- Hero Section -->
<section class="hero-section hero-sm">
    <div class="container">
        <div class="hero-content text-center" data-aos="fade-up">
            <h1>Privacy <span class="highlight">Policy</span></h1>
            <p class="lead">Last Updated: <?php echo $lastUpdated; ?></p>
        </div>
    </div>
</section>

<!-- Legal Content Section -->
<section class="legal-content-section">
    <div class="container">
        <div class="legal-content" data-aos="fade-up">
            <div class="legal-intro">
                <p>At NeoWebX, we value your privacy and are committed to protecting your personal information. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website or use our services.</p>
                <p>Please read this Privacy Policy carefully. By accessing or using our website or services, you acknowledge that you have read, understood, and agree to be bound by all the terms outlined in this policy. If you do not agree with our policies and practices, please do not use our website or services.</p>
            </div>
            
            <div class="legal-section">
                <h2>1. Information We Collect</h2>
                <p>We may collect several types of information from and about users of our website and services, including:</p>
                
                <h3>1.1. Personal Information</h3>
                <p>This includes information that can be used to identify you personally, such as:</p>
                <ul>
                    <li>Name, email address, phone number, and mailing address</li>
                    <li>Company name and job title</li>
                    <li>Billing information and payment details</li>
                    <li>Any other information you provide when filling out forms on our website or communicating with us</li>
                </ul>
                
                <h3>1.2. Non-Personal Information</h3>
                <p>This includes information that does not directly identify you, such as:</p>
                <ul>
                    <li>Browser type and version</li>
                    <li>Operating system</li>
                    <li>IP address</li>
                    <li>Device information</li>
                    <li>Usage data about how you interact with our website</li>
                    <li>Referral source</li>
                </ul>
            </div>
            
            <div class="legal-section">
                <h2>2. How We Collect Information</h2>
                <p>We collect information through different methods, including:</p>
                
                <h3>2.1. Direct Collection</h3>
                <p>Information you provide when you:</p>
                <ul>
                    <li>Fill out forms on our website</li>
                    <li>Register for an account</li>
                    <li>Subscribe to our newsletter</li>
                    <li>Request information about our services</li>
                    <li>Participate in surveys or promotions</li>
                    <li>Contact us via email, phone, or other communication channels</li>
                    <li>Provide feedback or testimonials</li>
                </ul>
                
                <h3>2.2. Automated Collection</h3>
                <p>As you navigate through our website, we may use automatic data collection technologies such as:</p>
                <ul>
                    <li><strong>Cookies</strong>: Small data files stored on your device that help us improve our website and deliver a better, more personalized service</li>
                    <li><strong>Web Beacons</strong>: Small electronic files that allow us to count users who have visited certain pages and analyze website traffic</li>
                    <li><strong>Google Analytics</strong>: A web analytics service that tracks and reports website traffic</li>
                    <li><strong>Similar Technologies</strong>: Other tracking technologies that collect information about your browsing activities over time</li>
                </ul>
            </div>
            
            <div class="legal-section">
                <h2>3. How We Use Your Information</h2>
                <p>We may use the information we collect for various purposes, including to:</p>
                <ul>
                    <li>Provide, maintain, and improve our website and services</li>
                    <li>Process transactions and send related information</li>
                    <li>Send administrative information, such as updates, security alerts, and support messages</li>
                    <li>Respond to your comments, questions, and requests</li>
                    <li>Communicate with you about products, services, offers, and events</li>
                    <li>Personalize your experience on our website</li>
                    <li>Monitor and analyze trends, usage, and activities related to our website</li>
                    <li>Detect, prevent, and address technical issues or fraudulent transactions</li>
                    <li>Comply with legal obligations</li>
                </ul>
            </div>
            
            <div class="legal-section">
                <h2>4. Information Sharing and Disclosure</h2>
                <p>We may share your information in the following circumstances:</p>
                
                <h3>4.1. Service Providers</h3>
                <p>We may share your information with third-party vendors, service providers, contractors, or agents who perform functions on our behalf, such as hosting providers, payment processors, email service providers, and analytics providers.</p>
                
                <h3>4.2. Business Transfers</h3>
                <p>If we are involved in a merger, acquisition, financing, or sale of all or a portion of our assets, your information may be transferred as part of that transaction.</p>
                
                <h3>4.3. Legal Requirements</h3>
                <p>We may disclose your information if required to do so by law or in response to valid requests by public authorities (e.g., a court or government agency).</p>
                
                <h3>4.4. Protection of Rights</h3>
                <p>We may disclose your information to protect the rights, property, or safety of NeoWebX, our customers, or others.</p>
                
                <h3>4.5. With Your Consent</h3>
                <p>We may share your information with third parties when you have given us your consent to do so.</p>
                
                <p>We do not sell, rent, or trade your personal information to third parties for their marketing purposes.</p>
            </div>
            
            <div class="legal-section">
                <h2>5. Data Security</h2>
                <p>We implement appropriate technical and organizational measures to protect the security of your personal information. However, please be aware that no method of transmission over the Internet or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your information, we cannot guarantee its absolute security.</p>
                
                <p>We restrict access to your personal information to those employees, contractors, and third-party service providers who need to know that information to provide services to you. They are subject to confidentiality obligations and may be disciplined or terminated if they fail to meet these obligations.</p>
            </div>
            
            <div class="legal-section">
                <h2>6. Cookies and Similar Technologies</h2>
                <p>Our website uses cookies and similar tracking technologies to track activity on our website and hold certain information.</p>
                
                <h3>6.1. Types of Cookies We Use</h3>
                <ul>
                    <li><strong>Essential Cookies</strong>: Necessary for the website to function properly</li>
                    <li><strong>Functionality Cookies</strong>: Allow us to remember your preferences and provide enhanced features</li>
                    <li><strong>Analytics Cookies</strong>: Help us understand how visitors interact with our website</li>
                    <li><strong>Advertising Cookies</strong>: Used to deliver relevant advertisements and track ad campaign performance</li>
                </ul>
                
                <h3>6.2. Cookie Management</h3>
                <p>You can set your browser to refuse all or some browser cookies or to alert you when cookies are being sent. If you disable or refuse cookies, please note that some parts of the website may become inaccessible or not function properly.</p>
            </div>
            
            <div class="legal-section">
                <h2>7. Your Rights and Choices</h2>
                <p>Depending on your location, you may have certain rights regarding your personal information, including:</p>
                
                <h3>7.1. Access and Update</h3>
                <p>You can review and update your personal information by contacting us directly.</p>
                
                <h3>7.2. Marketing Communications</h3>
                <p>You can opt out of receiving marketing emails from us by following the unsubscribe instructions included in each email or by contacting us directly.</p>
                
                <h3>7.3. Data Subject Rights</h3>
                <p>Depending on your jurisdiction, you may have the right to:</p>
                <ul>
                    <li>Request access to your personal information</li>
                    <li>Request correction of inaccurate personal information</li>
                    <li>Request deletion of your personal information</li>
                    <li>Object to processing of your personal information</li>
                    <li>Request restriction of processing your personal information</li>
                    <li>Request transfer of your personal information</li>
                    <li>Withdraw consent</li>
                </ul>
                
                <p>To exercise these rights, please contact us using the information provided in the "Contact Us" section below.</p>
            </div>
            
            <div class="legal-section">
                <h2>8. Children's Privacy</h2>
                <p>Our website and services are not intended for children under 16 years of age. We do not knowingly collect personal information from children under 16. If you are a parent or guardian and believe that your child has provided us with personal information, please contact us, and we will delete such information from our records.</p>
            </div>
            
            <div class="legal-section">
                <h2>9. Third-Party Links</h2>
                <p>Our website may contain links to third-party websites and services that are not owned or controlled by NeoWebX. We have no control over, and assume no responsibility for, the content, privacy policies, or practices of any third-party websites or services. We encourage you to review the privacy policies of these third-party sites before providing any information to them.</p>
            </div>
            
            <div class="legal-section">
                <h2>10. Data Retention</h2>
                <p>We will retain your personal information for as long as necessary to fulfill the purposes outlined in this Privacy Policy, unless a longer retention period is required or permitted by law. When we no longer need your personal information, we will delete or anonymize it.</p>
            </div>
            
            <div class="legal-section">
                <h2>11. International Data Transfers</h2>
                <p>Your information may be transferred to and processed in countries other than the country in which you reside. These countries may have data protection laws that are different from the laws of your country.</p>
                
                <p>We take appropriate measures to ensure that your personal information remains protected in accordance with this Privacy Policy when transferred internationally.</p>
            </div>
            
            <div class="legal-section">
                <h2>12. Changes to This Privacy Policy</h2>
                <p>We may update our Privacy Policy from time to time. The updated version will be indicated by an updated "Last Updated" date and will be effective as soon as it is posted. We encourage you to review this Privacy Policy periodically to stay informed of how we are protecting your information.</p>
            </div>
            
            <div class="legal-section">
                <h2>13. Contact Us</h2>
                <p>If you have any questions or concerns about this Privacy Policy or our privacy practices, please contact us at:</p>
                <address>
                    NeoWebX<br>
                    New Delhi, India<br>
                    Email: info@neowebx.com<br>
                    Phone: +91-9991289245
                </address>
            </div>
        </div>
        
        <div class="legal-navigation" data-aos="fade-up">
            <a href="/pages/legal/terms.php" class="btn-outline">Terms of Service</a>
            <a href="/pages/contact.php" class="btn-primary">Contact Us</a>
        </div>
    </div>
</section>

<style>
/* Legal Pages Specific Styles */
.hero-sm {
    padding: 3rem 0;
}

.legal-content-section {
    padding: 3rem 0 5rem;
}

.legal-content {
    max-width: 800px;
    margin: 0 auto;
    color: var(--text);
    line-height: 1.7;
}

.legal-intro {
    margin-bottom: 2rem;
    font-size: 1.1rem;
}

.legal-section {
    margin-bottom: 2.5rem;
}

.legal-section h2 {
    color: var(--yinmn-blue);
    font-size: 1.5rem;
    margin-bottom: 1rem;
    padding-bottom: 0.5rem;
    border-bottom: 1px solid var(--border);
}

.legal-section h3 {
    color: var(--pumpkin);
    font-size: 1.2rem;
    margin: 1.5rem 0 0.75rem;
}

.legal-section p {
    margin-bottom: 1rem;
}

.legal-section ul {
    margin-bottom: 1rem;
    padding-left: 1.5rem;
}

.legal-section li {
    margin-bottom: 0.5rem;
}

.legal-section strong {
    color: var(--text-dark);
}

.legal-section address {
    font-style: normal;
    line-height: 1.7;
}

.legal-navigation {
    display: flex;
    justify-content: center;
    gap: 1rem;
    margin-top: 3rem;
}
</style>

<?php
// Include footer
include_once '../../components/footer.php';
?> 