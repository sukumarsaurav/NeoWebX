<?php
// Include utility functions
require_once __DIR__ . '/functions.php';

// If meta description is not set, create a unique one for this page
if (!isset($pageDescription) || empty($pageDescription)) {
    $pageTitle = isset($pageTitle) ? $pageTitle : 'NeoWebX';
    $pageDescription = getUniqueMetaDescription(
        'NeoWebX provides web design, app development, AI services and digital marketing solutions.',
        $pageTitle
    );
}

// Set default SEO data if not provided
if (!isset($seo_data)) {
    $seo_data = array(
        'description' => $pageDescription,
        'keywords' => 'web design, app development, AI services, digital marketing, SEO'
    );
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZJK3447HWY"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-ZJK3447HWY');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($seo_data['description']); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($seo_data['keywords']); ?>">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'NeoWebX'; ?></title>
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
    <meta property="og:title" content="<?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'NeoWebX'; ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($seo_data['description']); ?>">
    <meta property="og:image" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>/assets/images/neowebx-social-share.jpg">
    <meta property="og:site_name" content="NeoWebX">
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@NeoWebX">
    <meta name="twitter:title" content="<?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'NeoWebX'; ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($seo_data['description']); ?>">
    <meta name="twitter:image" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>/assets/images/neowebx-social-share.jpg">
    
    <!-- Site Verification -->
    <meta name="facebook-domain-verification" content="add-your-facebook-verification-code">
    <meta name="google-site-verification" content="add-your-google-verification-code">
    <meta name="pinterest-site-verification" content="add-your-pinterest-verification-code">
    
    <!-- Website info -->
    <link rel="canonical" href="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
    
    <!-- Social Profiles -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "NeoWebX",
      "url": "<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>",
      "logo": "<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]"; ?>/assets/images/logo.png",
      "sameAs": [
        "https://www.facebook.com/official.NeoWebX",
        "https://x.com/NeoWebX",
        "https://www.linkedin.com/in/neowebx/",
        "https://www.instagram.com/neowebx?igsh=MXM0NjN4eTgxN3RvMg==",
        "https://www.youtube.com/@NeoWebX"
      ]
    }
    </script>
    
    <!-- Core CSS -->
   
    <link rel="icon" type="image/png" href="/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="MyWebSite" />
    <link rel="manifest" href="/favicon/site.webmanifest" />
    <!-- Component-specific CSS -->
    <link rel="stylesheet" href="/assets/css/header.css">
    <link rel="stylesheet" href="/assets/css/footer.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/contact.css">
    <link rel="stylesheet" href="/assets/css/services.css">
    
    <!-- Add any additional CSS files needed for specific pages -->
    <?php if (isset($additionalCss) && is_array($additionalCss)): ?>
        <?php foreach ($additionalCss as $cssFile): ?>
            <link rel="stylesheet" href="<?php echo $cssFile; ?>">
        <?php endforeach; ?>
    <?php endif; ?>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    
    <!-- Header JavaScript -->
    <script src="/assets/js/header.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                easing: 'ease-out',
                once: false
            });
        });
    </script>
</head>
<body>
    <!-- Drawer Overlay -->
    <div class="drawer-overlay"></div>
    
    <!-- Side Drawer -->
    <div class="side-drawer">
        <div class="drawer-header">
            <a href="/" class="drawer-logo">NeoWebX</a>
            <button class="drawer-close"><i class="fas fa-times"></i></button>
        </div>
        <div class="drawer-body">
            <nav class="drawer-nav">
              
                
                <!-- Web Design -->
                <a href="#" class="drawer-item dropdown-toggle">Web Design</a>
                <div class="drawer-submenu">
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Custom Website Solutions</h6>
                        <a href="/pages/services/web-design/Custom-Website-Solutions/Business-Websites.php">Business Websites</a>
                        <a href="/pages/services/web-design/Custom-Website-Solutions/Portfolio-Websites.php">Portfolio Websites</a>
                        <a href="/pages/services/web-design/Custom-Website-Solutions/Personal-Blogs.php">Personal Blogs</a>
                        <a href="/pages/services/web-design/Custom-Website-Solutions/Landing-Pages.php">Landing Pages</a>
                        <a href="/pages/services/web-design/Custom-Website-Solutions/E-commerce-Website-Design.php">E-commerce Website Design</a>
                        <a href="/pages/services/web-design/Custom-Website-Solutions/Appointment-Booking-Website.php">Appointment Booking Website </a>
                        <a href="/pages/services/web-design/Custom-Website-Solutions/website-template.php">website template </a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">E-commerce & CMS Solutions</h6>
                        <a href="/pages/services/web-design/E-commerce-&-CMS-Solutions/Shopify-Development.php">Shopify Development</a>
                        <a href="/pages/services/web-design/E-commerce-&-CMS-Solutions/WooCommerce-Development.php">WooCommerce Development</a>
                        <a href="/pages/services/web-design/E-commerce-&-CMS-Solutions/Custom-E-commerce-Solutions.php">Custom E-commerce</a>
                        <a href="/pages/services/web-design/E-commerce-&-CMS-Solutions/CMS-Based-Website-Development.php">CMS-Based Website Development</a>
                        <a href="/pages/services/web-design/E-commerce-&-CMS-Solutions/WordPress-Website-Design.php">WordPress Design</a>
                        <a href="/pages/services/web-design/E-commerce-&-CMS-Solutions/Webflow-Development.php">Webflow Development</a>
                        <a href="/pages/services/web-design/E-commerce-&-CMS-Solutions/Custom-CMS-Solutions.php">Custom CMS Solutions</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">UI/UX & Website Enhancements</h6>
                        <a href="/pages/services/web-design/UI-UX-&-Website-Enhancements/UI-UX-Design-&-Prototyping.php">UI/UX Design & Prototyping</a>
                        <a href="/pages/services/web-design/UI-UX-&-Website-Enhancements/ui-ux-services.php">Complete UI/UX Services</a>
                        <a href="/pages/services/web-design/UI-UX-&-Website-Enhancements/Website-Redesign-&-Revamp.php">Website Redesign & Revamp</a>
                        <a href="/pages/services/web-design/UI-UX-&-Website-Enhancements/Modernizing-Old-Websites.php">Modernizing Old Websites</a>
                        <a href="/pages/services/web-design/UI-UX-&-Website-Enhancements/Speed-&-Performance-Optimization.php">Speed & Performance Optimization</a>
                        <a href="/pages/services/web-design/UI-UX-&-Website-Enhancements/Mobile-First-Design.php">Mobile-First Design</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Industry-Specific Websites</h6>
                        <a href="/pages/services/web-design/Industry-Specific-Website/Healthcare-Websites.php">Healthcare Websites</a>
                        <a href="/pages/services/web-design/Industry-Specific-Website/Real-Estate-Websites.php">Real Estate Websites</a>
                        <a href="/pages/services/web-design/Industry-Specific-Website/Finance-Websites.php">Finance Websites</a>
                        <a href="/pages/services/web-design/Industry-Specific-Website/Education-Websites.php">Education Websites</a>
                        <a href="/pages/services/web-design/Industry-Specific-Website/Hospitality-Websites.php">Hospitality Websites</a>
                        <a href="/pages/services/web-design/Industry-Specific-Website/Legal-Websites.php">Legal Websites</a>
                        <a href="/pages/services/web-design/Industry-Specific-Website/SaaS-Websites.php">SaaS Websites</a>
                    </div>
                </div>
                
                <!-- App Development -->
                <a href="#" class="drawer-item dropdown-toggle">App Development</a>
                <div class="drawer-submenu">
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Web Application Development</h6>
                        <a href="/pages/services/app-development/Web-Application-Development/Custom-Web-Applications.php">Custom Web Applications</a>
                        <a href="/pages/services/app-development/Web-Application-Development/API-Development-Integration.php">API Development & Integration</a>
                        <a href="/pages/services/app-development/Web-Application-Development/Progressive-Web-Apps.php">Progressive Web Apps (PWAs)</a>
                        <a href="/pages/services/app-development/Web-Application-Development/E-commerce-Web-Solutions.php">E-commerce Web Solutions</a>
                        <a href="/pages/services/app-development/Web-Application-Development/SaaS-Platform-Development.php">SaaS Platform Development</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Backend & Infrastructure</h6>
                        <a href="/pages/services/app-development/Backend-&-Infrastructure/Backend-Development-APIs.php">Backend Development & APIs</a>
                        <a href="/pages/services/app-development/Backend-&-Infrastructure/Database-Design-&-Management.php">Database Design & Management</a>
                        <a href="/pages/services/app-development/Backend-&-Infrastructure/DevOps-&-CI-CD.php">DevOps & CI/CD Solutions</a>
                        <a href="/pages/services/app-development/Backend-&-Infrastructure/Serverless-Architecture.php">Serverless Architecture Development</a>
                        <a href="/pages/services/app-development/Backend-&-Infrastructure/Custom-Software-Solutions.php">Custom Software Solutions</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">AI & Advanced Tech Solutions</h6>
                        <a href="/pages/services/app-development/AI-&-Advanced-Tech/AI-Powered-Applications.php">AI-Powered Web Applications</a>
                        <a href="/pages/services/app-development/AI-&-Advanced-Tech/CRM-&-ERP-Solutions.php">CRM & ERP Software Solutions</a>
                        <a href="/pages/services/app-development/AI-&-Advanced-Tech/IoT-&-Embedded-Systems.php">IoT & Embedded Systems Development</a>
                        <a href="/pages/services/app-development/AI-&-Advanced-Tech/Chatbot-&-AI-Agent-Development.php">Chatbot & AI Agent Development</a>
                    </div>
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Mobile App Development</h6>
                        <a href="/pages/services/app-development/Mobile-App-Development/android-app-development.php">Android App Development</a>
                        <a href="/pages/services/app-development/Mobile-App-Development/ios-app-development.php">iOS App Development</a>
                        <a href="/pages/services/app-development/Mobile-App-Development/cross-platform-apps.php">Cross-Platform App Development</a>
                        <a href="/pages/services/app-development/Mobile-App-Development/app-ui-ux-design.php">App UI/UX Design & Prototyping</a>
                        <a href="/pages/services/app-development/Mobile-App-Development/app-maintenance-support.php">App Maintenance & Support Services</a>
                    </div>
                </div>
                
                <!-- AI Services -->
                <a href="#" class="drawer-item dropdown-toggle">AI Services</a>
                <div class="drawer-submenu">
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Conversational AI Solutions</h6>
                        <a href="/pages/services/ai-services/conversational-ai-solutions/chatbot-development-services.php">Chatbot Development Services</a>
                        <a href="/pages/services/ai-services/conversational-ai-solutions/virtual-assistant-development.php">Virtual Assistant Development</a>
                        <a href="/pages/services/ai-services/conversational-ai-solutions/conversational-ai-consulting.php">Conversational AI Consulting</a>
                        <a href="/pages/services/ai-services/conversational-ai-solutions/ai-virtual-assistants-for-businesses.php">AI Virtual Assistants for Businesses</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">AI-Powered Business Automation</h6>
                        <a href="/pages/services/ai-services/ai-powered-business-automation/ai-powered-workflow-automation.php">AI-Powered Workflow Automation</a>
                        <a href="/pages/services/ai-services/ai-powered-business-automation/smart-document-processing.php">Smart Document Processing</a>
                        <a href="/pages/services/ai-services/ai-powered-business-automation/ai-powered-customer-support-solutions.php">AI-Powered Customer Support Solutions</a>
                        <a href="/pages/services/ai-services/ai-powered-business-automation/ai-driven-sentiment-feedback-analysis.php">AI-Driven Sentiment & Feedback Analysis</a>
                        <a href="/pages/services/ai-services/ai-powered-business-automation/ai-powered-translation-localization-services.php">AI-Powered Translation & Localization Services</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Machine Learning & AI Development</h6>
                        <a href="/pages/services/ai-services/machine-learning-ai-development/custom-ai-model-development-training.php">Custom AI Model Development & Training</a>
                        <a href="/pages/services/ai-services/machine-learning-ai-development/ai-powered-recommendation-engines.php">AI-Powered Recommendation Engines</a>
                        <a href="/pages/services/ai-services/machine-learning-ai-development/ai-for-data-processing-analysis.php">AI for Data Processing & Analysis</a>
                        <a href="/pages/services/ai-services/machine-learning-ai-development/computer-vision-image-recognition-solutions.php">Computer Vision & Image Recognition Solutions</a>
                        <a href="/pages/services/ai-services/machine-learning-ai-development/ai-enhanced-speech-voice-recognition.php">AI-Enhanced Speech & Voice Recognition</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Industry-Specific AI Solutions</h6>
                        <a href="/pages/services/ai-services/industry-specific-ai-solutions/ai-solutions-for-e-commerce-retail.php">AI Solutions for E-commerce & Retail</a>
                        <a href="/pages/services/ai-services/industry-specific-ai-solutions/ai-driven-marketing-personalization.php">AI-Driven Marketing & Personalization</a>
                        <a href="/pages/services/ai-services/industry-specific-ai-solutions/ai-for-healthcare-medical-analysis.php">AI for Healthcare & Medical Analysis</a>
                        <a href="/pages/services/ai-services/industry-specific-ai-solutions/ai-for-finance-banking-risk-management.php">AI for Finance, Banking & Risk Management</a>
                        <a href="/pages/services/ai-services/industry-specific-ai-solutions/ai-compliance-legal-automation.php">AI Compliance & Legal Automation</a>
                    </div>
                </div>
                
                <!-- Digital Marketing -->
                <a href="#" class="drawer-item dropdown-toggle">Digital Marketing</a>
                <div class="drawer-submenu">
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">SEO Services</h6>
                        <a href="/pages/services/digital-marketing/seo/on-page-seo.php">On-Page SEO</a>
                        <a href="/pages/services/digital-marketing/seo/off-page-seo.php">Off-Page SEO</a>
                        <a href="/pages/services/digital-marketing/seo/technical-seo.php">Technical SEO</a>
                        <a href="/pages/services/digital-marketing/seo/local-seo.php">Local SEO</a>
                        <a href="/pages/services/digital-marketing/seo/ecommerce-seo.php">E-commerce SEO</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">PPC</h6>
                        <a href="/pages/services/digital-marketing/ppc/google-ads.php">Google ads</a>
                        <a href="/pages/services/digital-marketing/ppc/facebook-instagram-ads.php">Facebook Instagram ads</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Content Marketing</h6>
                        <a href="/pages/services/digital-marketing/content-marketing/content-strategy.php">Content Strategy</a>
                        <a href="/pages/services/digital-marketing/content-marketing/blogging-services.php">Blogging Services</a>
                        <a href="/pages/services/digital-marketing/content-marketing/copywriting.php">Copywriting</a>
                        <a href="/pages/services/digital-marketing/content-marketing/video-marketing.php">Video Marketing</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Email Marketing</h6>
                        <a href="/pages/services/digital-marketing/email-marketing/email-campaigns.php">Email Campaigns</a>
                        <a href="/pages/services/digital-marketing/email-marketing/newsletter-management.php">Newsletter Management</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Social Media Marketing</h6>
                        <a href="/pages/services/digital-marketing/social-media/social-media-management.php">Social Media Management</a>
                        <a href="/pages/services/digital-marketing/social-media/social-media-advertising.php">Social Media Advertising</a>
                        <a href="/pages/services/digital-marketing/social-media/influencer-marketing.php">Influencer Marketing</a>
                        <a href="/pages/services/digital-marketing/social-media/community-management.php">Community Management</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Conversion Optimization</h6>
                        <a href="/pages/services/digital-marketing/cro/ab-testing.php">A/B Testing</a>
                        <a href="/pages/services/digital-marketing/cro/landing-page-optimization.php">Landing Page Optimization</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Reputation Management</h6>
                        <a href="/pages/services/digital-marketing/reputation-management/online-reviews-pr-management.php">PR Management</a>
                        <a href="/pages/services/digital-marketing/reputation-management/brand-monitoring.php">Brand Monitoring</a>
                        <a href="/pages/services/digital-marketing/reputation-management/crisis-management.php">Crisis Management</a>
                    </div>
                    
                    <div class="drawer-submenu-group">
                        <h6 class="drawer-submenu-title">Industry Marketing</h6>
                        <a href="/pages/services/digital-marketing/industry-specific/healthcare-marketing.php">Healthcare Marketing</a>
                        <a href="/pages/services/digital-marketing/industry-specific/real-estate-marketing.php">Real Estate Marketing</a>
                        <a href="/pages/services/digital-marketing/industry-specific/ecommerce-marketing.php">E-commerce Marketing</a>
                    </div>
                </div>
                
                <a href="/pages/about.php" class="drawer-item">About Us</a>
                <a href="/pages/blog.php" class="drawer-item">Blog</a>
                <a href="/pages/contact.php" class="drawer-item">Contact</a>
            </nav>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="navbar-container">
            <button class="navbar-toggler" id="drawerToggle">
                <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand" href="/">
                <img src="/assets/svg/logo.svg" alt="NeoWebX Logo" style="height: 50px;">
            </a>
            <div class="navbar-collapse">
                <ul class="navbar-nav">
                    <!-- Web Design Dropdown -->
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#">Web Design</a>
                        <div class="mega-menu">
                            <div class="mega-menu-column">
                                <h6 class="dropdown-header">Custom Website Solutions</h6>
                                <a class="dropdown-item" href="/pages/services/web-design/Custom-Website-Solutions/Business-Websites.php">Business Websites</a>
                                <a class="dropdown-item" href="/pages/services/web-design/Custom-Website-Solutions/Portfolio-Websites.php">Portfolio Websites</a>
                                <a class="dropdown-item" href="/pages/services/web-design/Custom-Website-Solutions/Personal-Blogs.php">Personal Blogs</a>
                                <a class="dropdown-item" href="/pages/services/web-design/Custom-Website-Solutions/Landing-Pages.php">Landing Pages</a>
                                <a class="dropdown-item" href="/pages/services/web-design/Custom-Website-Solutions/E-commerce-Website-Design.php">E-commerce Website Design</a>
                                <a class="dropdown-item" href="/pages/services/web-design/Custom-Website-Solutions/Appointment-Booking-Website.php">Appointment Booking Website</a>
                                <a class="dropdown-item" href="/pages/services/web-design/Custom-Website-Solutions/website-template.php">website template </a>
                            </div>
                            <div class="mega-menu-column">
                                <h6 class="dropdown-header">E-commerce & CMS Solutions</h6>
                                <a class="dropdown-item" href="/pages/services/web-design/E-commerce-&-CMS-Solutions/Shopify-Development.php">Shopify Development</a>
                                <a class="dropdown-item" href="/pages/services/web-design/E-commerce-&-CMS-Solutions/WooCommerce-Development.php">WooCommerce Development</a>
                                <a class="dropdown-item" href="/pages/services/web-design/E-commerce-&-CMS-Solutions/Custom-E-commerce-Solutions.php">Custom E-commerce</a>
                                <a class="dropdown-item" href="/pages/services/web-design/E-commerce-&-CMS-Solutions/CMS-Based-Website-Development.php">CMS-Based Website Development</a>
                                <a class="dropdown-item" href="/pages/services/web-design/E-commerce-&-CMS-Solutions/WordPress-Website-Design.php">WordPress Design</a>
                                <a class="dropdown-item" href="/pages/services/web-design/E-commerce-&-CMS-Solutions/Webflow-Development.php">Webflow Development</a>
                                <a class="dropdown-item" href="/pages/services/web-design/E-commerce-&-CMS-Solutions/Custom-CMS-Solutions.php">Custom CMS Solutions</a>
                            </div>
                            <div class="mega-menu-column">
                                <h6 class="dropdown-header">UI/UX & Website Enhancements</h6>
                                <a class="dropdown-item" href="/pages/services/web-design/UI-UX-&-Website-Enhancements/UI-UX-Design-&-Prototyping.php">UI/UX Design & Prototyping</a>
                                <a class="dropdown-item" href="/pages/services/web-design/UI-UX-&-Website-Enhancements/ui-ux-services.php">Complete UI/UX Services</a>
                                <a class="dropdown-item" href="/pages/services/web-design/UI-UX-&-Website-Enhancements/Website-Redesign-&-Revamp.php">Website Redesign & Revamp</a>
                                <a class="dropdown-item" href="/pages/services/web-design/UI-UX-&-Website-Enhancements/Modernizing-Old-Websites.php">Modernizing Old Websites</a>
                                <a class="dropdown-item" href="/pages/services/web-design/UI-UX-&-Website-Enhancements/Speed-&-Performance-Optimization.php">Speed & Performance Optimization</a>
                                <a class="dropdown-item" href="/pages/services/web-design/UI-UX-&-Website-Enhancements/Mobile-First-Design.php">Mobile-First Design</a>
                            </div>
                            <div class="mega-menu-column">
                                <h6 class="dropdown-header">Industry-Specific Websites</h6>
                                <a class="dropdown-item" href="/pages/services/web-design/Industry-Specific-Website/Healthcare-Websites.php">Healthcare Websites</a>
                                <a class="dropdown-item" href="/pages/services/web-design/Industry-Specific-Website/Real-Estate-Websites.php">Real Estate Websites</a>
                                <a class="dropdown-item" href="/pages/services/web-design/Industry-Specific-Website/Finance-Websites.php">Finance Websites</a>
                                <a class="dropdown-item" href="/pages/services/web-design/Industry-Specific-Website/Education-Websites.php">Education Websites</a>
                                <a class="dropdown-item" href="/pages/services/web-design/Industry-Specific-Website/Hospitality-Websites.php">Hospitality Websites</a>
                                <a class="dropdown-item" href="/pages/services/web-design/Industry-Specific-Website/Legal-Websites.php">Legal Websites</a>
                                <a class="dropdown-item" href="/pages/services/web-design/Industry-Specific-Website/SaaS-Websites.php">SaaS Websites</a>
                            </div>
                        </div>
                    </li>
                    
                    <!-- App Development Dropdown -->
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#">App Development</a>
                        <div class="mega-menu">
                            <div class="mega-menu-column">
                                <h6 class="dropdown-header">Web Application Development</h6>
                                <a class="dropdown-item" href="/pages/services/app-development/Web-Application-Development/Custom-Web-Applications.php">Custom Web Applications</a>
                                <a class="dropdown-item" href="/pages/services/app-development/Web-Application-Development/API-Development-Integration.php">API Development & Integration</a>
                                <a class="dropdown-item" href="/pages/services/app-development/Web-Application-Development/Progressive-Web-Apps.php">Progressive Web Apps (PWAs)</a>
                                <a class="dropdown-item" href="/pages/services/app-development/Web-Application-Development/E-commerce-Web-Solutions.php">E-commerce Web Solutions</a>
                                <a class="dropdown-item" href="/pages/services/app-development/Web-Application-Development/SaaS-Platform-Development.php">SaaS Platform Development</a>
                            </div>
                            <div class="mega-menu-column">
                                <h6 class="dropdown-header">Backend & Infrastructure</h6>
                                <a class="dropdown-item" href="/pages/services/app-development/Backend-&-Infrastructure/Backend-Development-APIs.php">Backend Development & APIs</a>
                                <a class="dropdown-item" href="/pages/services/app-development/Backend-&-Infrastructure/Database-Design-&-Management.php">Database Design & Management</a>
                                <a class="dropdown-item" href="/pages/services/app-development/Backend-&-Infrastructure/DevOps-&-CI-CD.php">DevOps & CI/CD Solutions</a>
                                <a class="dropdown-item" href="/pages/services/app-development/Backend-&-Infrastructure/Serverless-Architecture.php">Serverless Architecture Development</a>
                                <a class="dropdown-item" href="/pages/services/app-development/Backend-&-Infrastructure/Custom-Software-Solutions.php">Custom Software Solutions</a>
                            </div>
                            <div class="mega-menu-column">
                                <h6 class="dropdown-header">AI & Advanced Tech Solutions</h6>
                                <a class="dropdown-item" href="/pages/services/app-development/AI-&-Advanced-Tech/AI-Powered-Applications.php">AI-Powered Web Applications</a>
                                <a class="dropdown-item" href="/pages/services/app-development/AI-&-Advanced-Tech/CRM-&-ERP-Solutions.php">CRM & ERP Software Solutions</a>
                                <a class="dropdown-item" href="/pages/services/app-development/AI-&-Advanced-Tech/IoT-&-Embedded-Systems.php">IoT & Embedded Systems Development</a>
                                <a class="dropdown-item" href="/pages/services/app-development/AI-&-Advanced-Tech/Chatbot-&-AI-Agent-Development.php">Chatbot & AI Agent Development</a>
                            </div>
                            <div class="mega-menu-column">
                                <h6 class="dropdown-header">Mobile App Development</h6>
                                <a class="dropdown-item" href="/pages/services/app-development/Mobile-App-Development/android-app-development.php">Android App Development</a>
                                <a class="dropdown-item" href="/pages/services/app-development/Mobile-App-Development/ios-app-development.php">iOS App Development</a>
                                <a class="dropdown-item" href="/pages/services/app-development/Mobile-App-Development/cross-platform-apps.php">Cross-Platform App Development</a>
                                <a class="dropdown-item" href="/pages/services/app-development/Mobile-App-Development/app-ui-ux-design.php">App UI/UX Design & Prototyping</a>
                                <a class="dropdown-item" href="/pages/services/app-development/Mobile-App-Development/app-maintenance-support.php">App Maintenance & Support Services</a>
                            </div>
                        </div>
                    </li>
                    
                    <!-- AI Services Dropdown -->
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#">AI Services</a>
                        <div class="mega-menu ">
                            <div class="mega-menu-column">
                                <h6 class="dropdown-header">Conversational AI Solutions</h6>
                                <a class="dropdown-item" href="/pages/services/ai-services/conversational-ai-solutions/chatbot-development-services.php">Chatbot Development Services</a>
                                <a class="dropdown-item" href="/pages/services/ai-services/conversational-ai-solutions/virtual-assistant-development.php">Virtual Assistant Development</a>
                                <a class="dropdown-item" href="/pages/services/ai-services/conversational-ai-solutions/conversational-ai-consulting.php">Conversational AI Consulting</a>
                                <a class="dropdown-item" href="/pages/services/ai-services/conversational-ai-solutions/ai-virtual-assistants-for-businesses.php">AI Virtual Assistants for Businesses</a>
                            </div>
                            <div class="mega-menu-column">
                                <h6 class="dropdown-header">AI-Powered Business Automation</h6>
                                <a class="dropdown-item" href="/pages/services/ai-services/ai-powered-business-automation/ai-powered-workflow-automation.php">AI-Powered Workflow Automation</a>
                                <a class="dropdown-item" href="/pages/services/ai-services/ai-powered-business-automation/smart-document-processing.php">Smart Document Processing</a>
                                <a class="dropdown-item" href="/pages/services/ai-services/ai-powered-business-automation/ai-powered-customer-support-solutions.php">AI-Powered Customer Support Solutions</a>
                                <a class="dropdown-item" href="/pages/services/ai-services/ai-powered-business-automation/ai-driven-sentiment-feedback-analysis.php">AI-Driven Sentiment & Feedback Analysis</a>
                                <a class="dropdown-item" href="/pages/services/ai-services/ai-powered-business-automation/ai-powered-translation-localization-services.php">AI-Powered Translation & Localization Services</a>
                            </div>
                            <div class="mega-menu-column">
                                <h6 class="dropdown-header">Machine Learning & AI Development</h6>
                                <a class="dropdown-item" href="/pages/services/ai-services/machine-learning-ai-development/custom-ai-model-development-training.php">Custom AI Model Development & Training</a>
                                <a class="dropdown-item" href="/pages/services/ai-services/machine-learning-ai-development/ai-powered-recommendation-engines.php">AI-Powered Recommendation Engines</a>
                                <a class="dropdown-item" href="/pages/services/ai-services/machine-learning-ai-development/ai-for-data-processing-analysis.php">AI for Data Processing & Analysis</a>
                                <a class="dropdown-item" href="/pages/services/ai-services/machine-learning-ai-development/computer-vision-image-recognition-solutions.php">Computer Vision & Image Recognition Solutions</a>
                                <a class="dropdown-item" href="/pages/services/ai-services/machine-learning-ai-development/ai-enhanced-speech-voice-recognition.php">AI-Enhanced Speech & Voice Recognition</a>
                            </div>
                            <div class="mega-menu-column">
                                <h6 class="dropdown-header">Industry-Specific AI Solutions</h6>
                                <a class="dropdown-item" href="/pages/services/ai-services/industry-specific-ai-solutions/ai-solutions-for-e-commerce-retail.php">AI Solutions for E-commerce & Retail</a>
                                <a class="dropdown-item" href="/pages/services/ai-services/industry-specific-ai-solutions/ai-driven-marketing-personalization.php">AI-Driven Marketing & Personalization</a>
                                <a class="dropdown-item" href="/pages/services/ai-services/industry-specific-ai-solutions/ai-for-healthcare-medical-analysis.php">AI for Healthcare & Medical Analysis</a>
                                <a class="dropdown-item" href="/pages/services/ai-services/industry-specific-ai-solutions/ai-for-finance-banking-risk-management.php">AI for Finance, Banking & Risk Management</a>
                                <a class="dropdown-item" href="/pages/services/ai-services/industry-specific-ai-solutions/ai-compliance-legal-automation.php">AI Compliance & Legal Automation</a>
                            </div>
                        </div>
                    </li>
                    
                    <!-- Digital Marketing Dropdown -->
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#">Digital Marketing</a>
                        <div class="mega-menu">
                            <div class="mega-menu-column">
                                <h6 class="dropdown-header">SEO Services</h6>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/seo/on-page-seo.php">On-Page SEO</a>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/seo/off-page-seo.php">Off-Page SEO</a>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/seo/technical-seo.php">Technical SEO</a>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/seo/local-seo.php">Local SEO</a>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/seo/ecommerce-seo.php">E-commerce SEO</a>
                                <h6 class="dropdown-header">PPC</h6>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/ppc/google-ads.php">Google ads</a>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/ppc/facebook-instagram-ads.php">Facebook Instagram ads</a>
                            </div>
                            <div class="mega-menu-column">
                                <h6 class="dropdown-header">Content Marketing</h6>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/content-marketing/content-strategy.php">Content Strategy</a>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/content-marketing/blogging-services.php">Blogging Services</a>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/content-marketing/copywriting.php">Copywriting</a>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/content-marketing/video-marketing.php">Video Marketing</a>
                                
                                <h6 class="dropdown-header">Email Marketing</h6>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/email-marketing/email-campaigns.php">Email Campaigns</a>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/email-marketing/newsletter-management.php">Newsletter Management</a>
                            </div>
                            <div class="mega-menu-column">
                                <h6 class="dropdown-header">Social Media Marketing</h6>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/social-media/social-media-management.php">Social Media Management</a>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/social-media/social-media-advertising.php">Social Media Advertising</a>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/social-media/influencer-marketing.php">Influencer Marketing</a>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/social-media/community-management.php">Community Management</a>
                                
                                <h6 class="dropdown-header">Conversion Optimization</h6>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/cro/ab-testing.php">A/B Testing</a>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/cro/landing-page-optimization.php">Landing Page Optimization</a>
                            </div>
                            <div class="mega-menu-column">
                                <h6 class="dropdown-header">Reputation Management</h6>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/reputation-management/online-reviews-pr-management.php">PR Management</a>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/reputation-management/brand-monitoring.php">Brand Monitoring</a>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/reputation-management/crisis-management.php">Crisis Management</a>
                                <h6 class="dropdown-header">Industry Marketing</h6>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/industry-specific/healthcare-marketing.php">Healthcare Marketing</a>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/industry-specific/real-estate-marketing.php">Real Estate Marketing</a>
                                <a class="dropdown-item" href="/pages/services/digital-marketing/industry-specific/ecommerce-marketing.php">E-commerce Marketing</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/pages/contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

</body>
</html>