<?php
define('BASEPATH', true);
require_once '../../includes/config.php';

// Initialize session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set variables for header
$pageTitle = 'Terms of Service - NeoWebX';
$pageDescription = 'Read our Terms of Service to understand the terms and conditions that govern your use of NeoWebX services and website';
$pageKeywords = 'terms of service, terms and conditions, legal terms, user agreement, website terms';

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
            <h1>Terms of <span class="highlight">Service</span></h1>
            <p class="lead">Last Updated: <?php echo $lastUpdated; ?></p>
        </div>
    </div>
</section>

<!-- Legal Content Section -->
<section class="legal-content-section">
    <div class="container">
        <div class="legal-content" data-aos="fade-up">
            <div class="legal-intro">
                <p>Please read these Terms of Service ("Terms", "Terms of Service") carefully before using the NeoWebX website or any services offered by NeoWebX ("we", "us", "our", or "NeoWebX").</p>
                <p>By accessing or using our services, you agree to be bound by these Terms. If you disagree with any part of the terms, you may not access our services.</p>
            </div>
            
            <div class="legal-section">
                <h2>1. Service Agreement</h2>
                <p>NeoWebX provides digital services including but not limited to web development, mobile application development, e-commerce solutions, digital marketing, and related consulting services (collectively, the "Services"). By engaging our Services, you enter into a binding agreement with us governed by these Terms, any applicable Statement of Work (SOW), and/or other written agreements between you and NeoWebX.</p>
            </div>
            
            <div class="legal-section">
                <h2>2. Client Responsibilities</h2>
                <p>2.1. <strong>Timely Provision of Materials</strong>: You agree to provide all content, information, and feedback necessary for the completion of the Services in a timely manner.</p>
                <p>2.2. <strong>Accuracy of Information</strong>: You are responsible for ensuring the accuracy, legality, and ownership of all materials provided to us for use in providing the Services.</p>
                <p>2.3. <strong>Review and Approval</strong>: You are responsible for reviewing and approving all deliverables in a timely manner according to the agreed-upon timeline.</p>
                <p>2.4. <strong>Compliance with Laws</strong>: You are responsible for ensuring your use of our Services complies with all applicable laws and regulations.</p>
            </div>
            
            <div class="legal-section">
                <h2>3. Intellectual Property Rights</h2>
                <p>3.1. <strong>Client Content</strong>: You retain all ownership rights to content you provide to us for use in the Services. You grant us a limited license to use, reproduce, and modify this content solely for the purpose of providing the Services.</p>
                <p>3.2. <strong>NeoWebX Materials</strong>: We retain all rights to our proprietary tools, processes, techniques, and pre-existing materials used in providing the Services.</p>
                <p>3.3. <strong>Deliverables</strong>: Upon receipt of full payment, you will own all rights to the custom deliverables created specifically for you as part of the Services, excluding NeoWebX Materials, third-party materials, and open-source components.</p>
                <p>3.4. <strong>Portfolio Rights</strong>: Unless explicitly agreed otherwise in writing, we reserve the right to display and link to your completed project as part of our portfolio and to write about the project on websites, in magazine articles, and in books about web design.</p>
            </div>
            
            <div class="legal-section">
                <h2>4. Payment Terms</h2>
                <p>4.1. <strong>Fees and Expenses</strong>: You agree to pay all fees and expenses as outlined in the applicable project proposal, contract, or SOW.</p>
                <p>4.2. <strong>Payment Schedule</strong>: Unless otherwise specified in writing, payment is due according to the schedule outlined in your project agreement.</p>
                <p>4.3. <strong>Late Payments</strong>: Late payments may accrue interest at a rate of 1.5% per month or the maximum rate permitted by law, whichever is lower.</p>
                <p>4.4. <strong>Suspension of Services</strong>: We reserve the right to suspend Services if payments are not received according to the agreed schedule.</p>
            </div>
            
            <div class="legal-section">
                <h2>5. Confidentiality</h2>
                <p>5.1. <strong>Confidential Information</strong>: Both parties agree to maintain the confidentiality of any proprietary or sensitive information shared during the course of providing the Services.</p>
                <p>5.2. <strong>Exclusions</strong>: This confidentiality obligation does not apply to information that is publicly available, rightfully known prior to disclosure, independently developed, or disclosed with the other party's written permission.</p>
            </div>
            
            <div class="legal-section">
                <h2>6. Term and Termination</h2>
                <p>6.1. <strong>Term</strong>: These Terms remain in effect for the duration of the provision of Services and as specified in any applicable agreement.</p>
                <p>6.2. <strong>Termination by Client</strong>: You may terminate Services by providing written notice. You will be responsible for payment of all work completed through the termination date and any non-cancelable expenses incurred.</p>
                <p>6.3. <strong>Termination by NeoWebX</strong>: We may terminate Services if you breach these Terms and fail to cure such breach within 15 days of receiving notice, or immediately if the breach is not curable.</p>
                <p>6.4. <strong>Effect of Termination</strong>: Upon termination, you must pay all outstanding fees for Services rendered up to the termination date. Sections on Intellectual Property Rights, Confidentiality, Limitation of Liability, and Indemnification will survive termination.</p>
            </div>
            
            <div class="legal-section">
                <h2>7. Website Usage Terms</h2>
                <p>7.1. <strong>Account Registration</strong>: Some portions of our website may require registration. You agree to provide accurate information and to update it as necessary. You are responsible for maintaining the confidentiality of your account and password.</p>
                <p>7.2. <strong>Acceptable Use</strong>: You agree not to use our website for any unlawful purpose or in any way that might harm, damage, or overburden our systems.</p>
                <p>7.3. <strong>User Content</strong>: If you submit content to our website (comments, testimonials, etc.), you grant us a non-exclusive, worldwide, royalty-free license to use, reproduce, and publish that content.</p>
                <p>7.4. <strong>Third-Party Links</strong>: Our website may contain links to third-party websites. We are not responsible for the content or practices of these websites.</p>
            </div>
            
            <div class="legal-section">
                <h2>8. Warranties and Disclaimers</h2>
                <p>8.1. <strong>Service Warranty</strong>: We warrant that the Services will be performed in a professional and workmanlike manner in accordance with generally accepted industry standards.</p>
                <p>8.2. <strong>Disclaimer</strong>: EXCEPT AS EXPRESSLY PROVIDED HEREIN, THE SERVICES ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.</p>
                <p>8.3. <strong>No Guarantee</strong>: We do not guarantee that the Services will meet your requirements or expectations or that they will achieve any particular business results. We cannot guarantee continuous, uninterrupted, or secure access to our Services.</p>
            </div>
            
            <div class="legal-section">
                <h2>9. Limitation of Liability</h2>
                <p>9.1. <strong>Limitation of Damages</strong>: IN NO EVENT WILL NEOWEBX BE LIABLE FOR ANY INDIRECT, CONSEQUENTIAL, EXEMPLARY, INCIDENTAL, SPECIAL OR PUNITIVE DAMAGES, INCLUDING LOST PROFITS, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.</p>
                <p>9.2. <strong>Maximum Liability</strong>: NOTWITHSTANDING ANYTHING TO THE CONTRARY, OUR MAXIMUM AGGREGATE LIABILITY TO YOU FOR ANY CAUSE WHATSOEVER SHALL BE LIMITED TO THE TOTAL AMOUNT PAID BY YOU TO US FOR THE SERVICES AT ISSUE.</p>
            </div>
            
            <div class="legal-section">
                <h2>10. Indemnification</h2>
                <p>You agree to indemnify, defend, and hold harmless NeoWebX, its officers, directors, employees, and agents, from and against any claims, liabilities, damages, losses, and expenses, including without limitation reasonable attorney's fees and costs, arising out of or in any way connected with your access to or use of the Services or your violation of these Terms.</p>
            </div>
            
            <div class="legal-section">
                <h2>11. General Provisions</h2>
                <p>11.1. <strong>Governing Law</strong>: These Terms shall be governed by and construed in accordance with the laws of the State of New York, without regard to its conflict of law provisions.</p>
                <p>11.2. <strong>Dispute Resolution</strong>: Any dispute arising from or relating to these Terms shall first be addressed through good faith negotiation. If not resolved through negotiation, the dispute shall be submitted to binding arbitration in New York, New York in accordance with the rules of the American Arbitration Association.</p>
                <p>11.3. <strong>Severability</strong>: If any provision of these Terms is held to be invalid or unenforceable, such provision shall be struck and the remaining provisions shall be enforced.</p>
                <p>11.4. <strong>No Waiver</strong>: Our failure to enforce any right or provision of these Terms will not be considered a waiver of such right or provision.</p>
                <p>11.5. <strong>Assignment</strong>: You may not assign these Terms without our prior written consent, but we may assign these Terms without restriction.</p>
                <p>11.6. <strong>Entire Agreement</strong>: These Terms, together with any applicable SOW or other written agreement between you and NeoWebX, constitute the entire agreement between you and us regarding the Services.</p>
            </div>
            
            <div class="legal-section">
                <h2>12. Changes to Terms</h2>
                <p>We reserve the right to modify these Terms at any time. We will provide notice of significant changes by posting the updated Terms on our website and updating the "Last Updated" date. Your continued use of the Services after such changes constitutes your acceptance of the new Terms.</p>
            </div>
            
            <div class="legal-section">
                <h2>13. Contact Information</h2>
                <p>If you have any questions about these Terms, please contact us at:</p>
                <address>
                    NeoWebX<br>
                    New Delhi, India<br>
                    Email: info@neowebx.com<br>
                    Phone: +91-9991289245
                </address>
            </div>
        </div>
        
        <div class="legal-navigation" data-aos="fade-up">
            <a href="/pages/legal/privacy.php" class="btn-outline">Privacy Policy</a>
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

.legal-section p {
    margin-bottom: 1rem;
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