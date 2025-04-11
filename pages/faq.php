<?php
define('BASEPATH', true);
require_once '../includes/config.php';

// Initialize session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set variables for header
$pageTitle = 'Frequently Asked Questions - NeoWebX';
$pageDescription = 'Find answers to common questions about our services, process, technology, and support options';
$pageKeywords = 'FAQ, frequently asked questions, web development questions, digital services FAQ, tech support';

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => $pageKeywords
];

// Include header
include_once '../components/header.php';

// FAQ Categories
$faq_categories = [
    'general' => 'General Questions',
    'services' => 'Our Services',
    'process' => 'Our Process',
    'technology' => 'Technology',
    'pricing' => 'Pricing & Payment',
    'support' => 'Support & Maintenance'
];

// FAQ Data
$faqs = [
    'general' => [
        [
            'question' => 'What is NeoWebX?',
            'answer' => 'NeoWebX is a full-service digital agency specializing in custom web development, mobile apps, e-commerce solutions, and emerging technologies like AI and IoT. We help businesses of all sizes transform their digital presence with innovative, scalable, and user-friendly solutions.'
        ],
        [
            'question' => 'How long has NeoWebX been in business?',
            'answer' => 'NeoWebX was founded in 2010 with a mission to provide cutting-edge digital solutions that drive real business results. Over the past decade, we\'ve grown from a small team of passionate developers to a comprehensive digital agency with expertise across various technologies and industries.'
        ],
        [
            'question' => 'What industries do you work with?',
            'answer' => 'We work with clients across diverse industries including e-commerce, healthcare, finance, education, real estate, hospitality, and technology. Our adaptable approach allows us to understand the unique challenges of each industry and deliver tailored solutions that address specific business needs.'
        ],
        [
            'question' => 'Where is NeoWebX located?',
            'answer' => 'Our headquarters is in New York City, but we operate with a global team of developers, designers, and digital strategists across North America, Europe, and Asia. This allows us to provide round-the-clock service and collaborate with clients worldwide.'
        ],
        [
            'question' => 'Do you work with small businesses or only large enterprises?',
            'answer' => 'We proudly serve businesses of all sizes. From startups and small businesses to medium-sized companies and large enterprises, our scalable approach allows us to tailor our services to match your specific needs and budget.'
        ]
    ],
    'services' => [
        [
            'question' => 'What services does NeoWebX offer?',
            'answer' => 'We offer a comprehensive range of digital services including:<ul><li>Custom Web Development</li><li>Mobile App Development</li><li>E-commerce Solutions</li><li>UI/UX Design</li><li>Digital Strategy</li><li>AI and Machine Learning Integration</li><li>IoT Solutions</li><li>Cloud Services</li><li>DevOps & Automation</li><li>Digital Marketing</li><li>Maintenance & Support</li></ul>Each service can be provided as a standalone offering or as part of an integrated digital solution.'
        ],
        [
            'question' => 'Do you offer website hosting services?',
            'answer' => 'Yes, we offer reliable and secure hosting solutions for websites and web applications we develop. Our hosting services include regular backups, security monitoring, performance optimization, and technical support. We can also help you migrate existing websites to more robust hosting environments.'
        ],
        [
            'question' => 'Can you redesign my existing website?',
            'answer' => 'Absolutely! Website redesign is one of our core services. We begin with a thorough analysis of your current website, identifying strengths to maintain and areas for improvement. Our redesign process focuses on enhancing user experience, implementing modern design principles, improving performance, and ensuring your site works flawlessly across all devices.'
        ],
        [
            'question' => 'Do you provide digital marketing services?',
            'answer' => 'Yes, we offer comprehensive digital marketing services to help promote your digital products and drive user engagement. Our marketing services include search engine optimization (SEO), content marketing, social media marketing, email campaigns, pay-per-click advertising, and conversion rate optimization. We focus on data-driven strategies that deliver measurable results.'
        ],
        [
            'question' => 'Can you integrate third-party systems with my website?',
            'answer' => 'Yes, we specialize in system integrations. Whether you need to connect your website with CRM systems, payment gateways, inventory management tools, marketing automation platforms, or custom APIs, our team can create seamless integrations that streamline your business processes and enhance functionality.'
        ]
    ],
    'process' => [
        [
            'question' => 'What is your development process?',
            'answer' => 'Our development process follows an agile methodology with six key phases:<ol><li><strong>Discovery:</strong> Understanding your business, goals, and requirements</li><li><strong>Planning:</strong> Creating project roadmap, technical specifications, and wireframes</li><li><strong>Design:</strong> Developing visual designs and user interfaces</li><li><strong>Development:</strong> Building the solution with regular sprints and client updates</li><li><strong>Testing:</strong> Comprehensive quality assurance across devices and browsers</li><li><strong>Deployment:</strong> Launch and post-launch support</li></ol>Throughout this process, we maintain transparent communication and encourage client feedback.'
        ],
        [
            'question' => 'How long does it take to complete a project?',
            'answer' => 'Project timelines vary depending on scope, complexity, and specific requirements. A simple website might take 4-6 weeks, while complex web applications or e-commerce platforms could take 3-6 months or more. During our initial consultation, we\'ll provide a realistic timeline based on your specific project needs and adjust as necessary throughout the development process.'
        ],
        [
            'question' => 'How do you handle project management and communication?',
            'answer' => 'We use a combination of tools and practices to ensure smooth project management and clear communication. Each client is assigned a dedicated project manager who serves as the main point of contact. We use project management software that gives you visibility into project progress, milestones, and tasks. Regular update meetings, progress reports, and collaborative tools ensure you\'re always informed and involved in the process.'
        ],
        [
            'question' => 'Will I be able to make changes to my website after it\'s launched?',
            'answer' => 'Yes! We build all our websites with user-friendly content management systems (CMS) that allow you to easily update content, add new pages, and make basic design changes without technical knowledge. For more complex changes, our support team is always available to help. We also provide training to ensure your team is comfortable managing the website.'
        ],
        [
            'question' => 'Do you provide training for my team?',
            'answer' => 'Absolutely. We offer comprehensive training sessions for your team to ensure they can effectively manage and utilize your new digital solution. Training can be customized to different user roles and technical expertise levels. We also provide detailed documentation and video tutorials for future reference.'
        ]
    ],
    'technology' => [
        [
            'question' => 'Which technologies do you use for development?',
            'answer' => 'We work with a wide range of technologies to deliver the best solution for each project\'s specific needs. Our technology stack includes:<ul><li><strong>Frontend:</strong> React, Angular, Vue.js, JavaScript/TypeScript, HTML5, CSS3/SASS</li><li><strong>Backend:</strong> Node.js, PHP, Python, Ruby on Rails, .NET</li><li><strong>Mobile:</strong> React Native, Flutter, Swift, Kotlin</li><li><strong>Databases:</strong> MySQL, PostgreSQL, MongoDB, Firebase</li><li><strong>CMS:</strong> WordPress, Drupal, Shopify, custom solutions</li><li><strong>Cloud:</strong> AWS, Google Cloud, Microsoft Azure</li></ul>We select technologies based on your project requirements, performance needs, and long-term maintenance considerations.'
        ],
        [
            'question' => 'Is my website going to be mobile-friendly?',
            'answer' => 'Absolutely! All websites we develop are fully responsive and mobile-friendly by default. We follow a mobile-first approach to ensure optimal performance and user experience across all devices, from smartphones and tablets to desktops. We test extensively on various device sizes and operating systems to guarantee compatibility.'
        ],
        [
            'question' => 'What about website security?',
            'answer' => 'Security is a top priority in all our development projects. We implement industry best practices for secure coding, data protection, and infrastructure security. This includes SSL encryption, secure authentication systems, regular security updates, protection against common vulnerabilities (OWASP Top 10), and compliance with relevant data protection regulations like GDPR. For e-commerce or sites handling sensitive information, we implement additional security measures.'
        ],
        [
            'question' => 'How do you ensure website performance?',
            'answer' => 'We focus on performance optimization throughout the development process. Our approach includes efficient code architecture, image and asset optimization, caching strategies, content delivery networks (CDNs), database query optimization, and server configuration tuning. We run performance tests before launch and provide recommendations for ongoing optimization to ensure your site loads quickly and operates smoothly.'
        ],
        [
            'question' => 'Do you build websites with SEO in mind?',
            'answer' => 'Yes, we build all websites with SEO best practices as a fundamental consideration. This includes semantic HTML markup, optimized site structure, clean URLs, mobile optimization, schema markup, XML sitemaps, optimized meta tags, fast loading times, and integration with analytics tools. We can also provide additional SEO services like keyword research, content optimization, and ongoing SEO campaigns.'
        ]
    ],
    'pricing' => [
        [
            'question' => 'How much does a website or application cost?',
            'answer' => 'Project costs vary based on complexity, features, design requirements, and timeline. A basic informational website might start at $5,000-$10,000, while complex e-commerce platforms or custom web applications can range from $25,000 to $100,000+. We provide detailed quotes after understanding your specific requirements during our initial consultation. We\'re transparent about costs and work to find solutions that align with your budget.'
        ],
        [
            'question' => 'Do you offer payment plans?',
            'answer' => 'Yes, we offer flexible payment structures for most projects. Typically, we require a deposit to begin work (usually 30-50% of the project total), followed by milestone-based payments throughout the development process. For larger projects, we can establish monthly payment schedules. We\'re open to discussing payment terms that work for your business\'s cash flow needs.'
        ],
        [
            'question' => 'Are there any ongoing costs after the website launches?',
            'answer' => 'There may be some ongoing costs to consider: <ul><li><strong>Hosting:</strong> Monthly or annual hosting fees</li><li><strong>Domain:</strong> Annual domain registration renewal</li><li><strong>Maintenance:</strong> Regular updates and technical support</li><li><strong>Third-party services:</strong> Any subscription-based tools or services integrated with your site</li></ul>We\'ll clearly explain all potential ongoing costs during our initial discussions so you can budget accordingly. We also offer maintenance packages to keep your site secure, updated, and performing optimally.'
        ],
        [
            'question' => 'Do you offer maintenance packages?',
            'answer' => 'Yes, we offer several maintenance packages to keep your digital products running smoothly after launch. Our maintenance services include security updates, performance monitoring, regular backups, bug fixes, minor content updates, and technical support. Packages can be customized to your specific needs and can be purchased on a monthly or annual basis. Many clients find that ongoing maintenance is essential for ensuring their digital investment continues to perform optimally.'
        ],
        [
            'question' => 'What if I need changes or additional features later?',
            'answer' => 'We\'re always available to implement changes or add new features to your website or application after launch. For minor updates, you can use your maintenance package hours if applicable. For more substantial changes or new features, we\'ll provide a quote for the additional work. We design our solutions with scalability in mind, making it easier to add functionality as your business grows.'
        ]
    ],
    'support' => [
        [
            'question' => 'What kind of support do you provide after launch?',
            'answer' => 'After launch, we provide ongoing support to ensure your digital solution continues to perform optimally. Our standard 30-day warranty covers bug fixes and issues related to the original scope of work. Beyond that, our maintenance packages include regular updates, security patches, performance monitoring, technical support, and assistance with content updates. We offer various support tiers to match different needs and budgets.'
        ],
        [
            'question' => 'How quickly do you respond to support requests?',
            'answer' => 'Our response time depends on the severity of the issue and your support package:<ul><li><strong>Critical issues</strong> (site down, security breach): Response within 1-2 hours, 24/7</li><li><strong>Major issues</strong> (functionality broken): Response within 4-8 business hours</li><li><strong>Minor issues</strong> (non-critical bugs): Response within 24-48 business hours</li><li><strong>General inquiries</strong>: Response within 48 business hours</li></ul>Our maintenance clients receive priority support with faster response times. We also offer emergency support services for critical situations.'
        ],
        [
            'question' => 'How do I request support or report issues?',
            'answer' => 'You can request support through multiple channels:<ul><li>Our dedicated client support portal</li><li>Email to our support team</li><li>Phone support during business hours</li><li>Emergency contact number for critical issues</li></ul>For maintenance clients, we assign a dedicated support specialist who becomes familiar with your specific solution and business needs.'
        ],
        [
            'question' => 'Do you offer website hosting and management?',
            'answer' => 'Yes, we offer comprehensive hosting and management services. Our hosting solutions include secure server environments, regular backups, uptime monitoring, performance optimization, and technical support. We handle server management, software updates, security patches, and troubleshooting, allowing you to focus on your business rather than technical infrastructure concerns.'
        ],
        [
            'question' => 'How often should my website be updated?',
            'answer' => 'We recommend several types of updates to keep your website secure, current, and performing well:<ul><li><strong>Security updates:</strong> Monthly or as needed when critical patches are released</li><li><strong>CMS and plugin updates:</strong> Quarterly, after testing compatibility</li><li><strong>Content updates:</strong> Regularly, based on your business needs (blogs, products, services)</li><li><strong>Design refreshes:</strong> Every 2-3 years to keep up with design trends and user expectations</li><li><strong>Major redesigns/rebuilds:</strong> Every 3-5 years, depending on technology changes and business evolution</li></ul>Our maintenance packages include regular updates to keep your site secure and functioning optimally.'
        ]
    ]
];
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content" data-aos="fade-right">
                <h1>Frequently Asked <span class="highlight">Questions</span></h1>
                <p class="lead">Find answers to common questions about our services, process, and support.</p>
            </div>
            <div class="hero-image" data-aos="fade-left">
                <img src="../assets/svg/faq-hero.svg" alt="FAQ" class="floating-image">
                <div class="image-glow"></div>
                <div class="decoration-circle-1"></div>
                <div class="decoration-circle-2"></div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Search Section -->
<section class="faq-search-section">
    <div class="container">
        <div class="faq-search-container" data-aos="fade-up">
            <div class="search-icon">
                <i class="fas fa-search"></i>
            </div>
            <input type="text" id="faq-search" placeholder="Search for questions..." class="faq-search-input">
        </div>
        <div id="search-results" class="search-results hidden">
            <h3>Search Results</h3>
            <div id="results-list"></div>
        </div>
    </div>
</section>

<!-- FAQ Category Navigation -->
<section class="faq-nav-section">
    <div class="container">
        <div class="faq-nav" data-aos="fade-up">
            <?php foreach ($faq_categories as $category_id => $category_name): ?>
            <a href="#<?php echo $category_id; ?>" class="faq-nav-item">
                <?php echo htmlspecialchars($category_name); ?>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- FAQ Content Section -->
<section class="faq-content-section">
    <div class="container">
        <?php foreach ($faq_categories as $category_id => $category_name): ?>
        <div id="<?php echo $category_id; ?>" class="faq-category" data-aos="fade-up">
            <h2><?php echo htmlspecialchars($category_name); ?></h2>
            
            <div class="faq-accordions">
                <?php foreach ($faqs[$category_id] as $index => $faq): ?>
                <div class="faq-accordion" data-aos="fade-up" data-aos-delay="<?php echo $index * 50; ?>">
                    <div class="faq-question">
                        <h3><?php echo htmlspecialchars($faq['question']); ?></h3>
                        <div class="accordion-icon">
                            <i class="fas fa-plus"></i>
                            <i class="fas fa-minus"></i>
                        </div>
                    </div>
                    <div class="faq-answer">
                        <div class="answer-content"><?php echo $faq['answer']; ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Not Finding Answer Section -->
<section class="not-finding-section">
    <div class="container">
        <div class="not-finding-content" data-aos="fade-up">
            <h2>Still Have Questions?</h2>
            <p>We're here to help. Contact our team for personalized assistance with your specific needs.</p>
            <div class="contact-options">
                <a href="/pages/contact.php" class="btn-primary">Contact Us</a>
                <div class="contact-method">
                    <i class="fas fa-phone"></i>
                    <span>+1 (555) 123-4567</span>
                </div>
                <div class="contact-method">
                    <i class="fas fa-envelope"></i>
                    <span>support@neowebx.com</span>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* FAQ Page Specific Styles */
.faq-search-section {
    padding: 2rem 0;
    background: var(--bg-light);
}

.faq-search-container {
    position: relative;
    max-width: 700px;
    margin: 0 auto;
}

.search-icon {
    position: absolute;
    left: 1rem;
    top: 50%;
    transform: translateY(-50%);
    color: var(--text-light);
    font-size: 1.2rem;
}

.faq-search-input {
    width: 100%;
    padding: 1rem 1rem 1rem 3rem;
    border: 1px solid var(--border);
    border-radius: var(--radius);
    font-size: 1rem;
    transition: all 0.3s ease;
}

.faq-search-input:focus {
    outline: none;
    border-color: var(--pumpkin);
    box-shadow: 0 0 0 3px rgba(255, 102, 0, 0.1);
}

.search-results {
    max-width: 700px;
    margin: 1rem auto 0;
    background: var(--white);
    border-radius: var(--radius);
    padding: 1.5rem;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.search-results h3 {
    margin-bottom: 1rem;
    color: var(--yinmn-blue);
}

.search-result-item {
    padding: 1rem;
    border-bottom: 1px solid var(--border);
    cursor: pointer;
    transition: all 0.2s ease;
}

.search-result-item:last-child {
    border-bottom: none;
}

.search-result-item:hover {
    background: var(--bg-light);
}

.search-result-item h4 {
    color: var(--pumpkin);
    margin-bottom: 0.5rem;
}

.search-result-item p {
    color: var(--text-light);
    font-size: 0.9rem;
}

.hidden {
    display: none;
}

/* FAQ Navigation */
.faq-nav-section {
    padding: 1rem 0 2rem;
}

.faq-nav {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 0.5rem;
}

.faq-nav-item {
    padding: 0.75rem 1.5rem;
    background: var(--white);
    border-radius: var(--radius-sm);
    color: var(--text);
    font-weight: 500;
    transition: all 0.3s ease;
    text-decoration: none;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.faq-nav-item:hover, .faq-nav-item.active {
    background: var(--pumpkin);
    color: var(--white);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255, 102, 0, 0.2);
}

/* FAQ Content */
.faq-content-section {
    padding: 3rem 0;
}

.faq-category {
    margin-bottom: 3rem;
}

.faq-category:last-child {
    margin-bottom: 0;
}

.faq-category h2 {
    color: var(--yinmn-blue);
    margin-bottom: 2rem;
    padding-bottom: 0.5rem;
    border-bottom: 2px solid var(--pumpkin);
    display: inline-block;
}

.faq-accordions {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.faq-accordion {
    background: var(--white);
    border-radius: var(--radius);
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
}

.faq-accordion:hover {
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}

.faq-question {
    padding: 1.5rem;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.faq-question h3 {
    font-size: 1.1rem;
    color: var(--text);
    margin: 0;
    padding-right: 2rem;
}

.accordion-icon {
    color: var(--pumpkin);
    font-size: 1rem;
    transition: all 0.3s ease;
}

.accordion-icon .fa-minus {
    display: none;
}

.faq-answer {
    height: 0;
    overflow: hidden;
    transition: height 0.3s ease;
}

.answer-content {
    padding: 0 1.5rem 1.5rem;
    color: var(--text);
    line-height: 1.6;
}

.answer-content ul, .answer-content ol {
    padding-left: 1.5rem;
    margin: 1rem 0;
}

.answer-content li {
    margin-bottom: 0.5rem;
}

.faq-accordion.active {
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}

.faq-accordion.active .faq-question {
    border-bottom: 1px solid var(--border);
}

.faq-accordion.active .fa-plus {
    display: none;
}

.faq-accordion.active .fa-minus {
    display: inline-block;
}

/* Not Finding Answer Section */
.not-finding-section {
    background: var(--bg-light);
    padding: 4rem 0;
    text-align: center;
}

.not-finding-content {
    max-width: 700px;
    margin: 0 auto;
}

.not-finding-content h2 {
    color: var(--yinmn-blue);
    margin-bottom: 1rem;
}

.not-finding-content p {
    color: var(--text);
    margin-bottom: 2rem;
}

.contact-options {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1.5rem;
}

.contact-method {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.contact-method i {
    color: var(--pumpkin);
    font-size: 1.2rem;
}

.contact-method span {
    color: var(--text);
    font-weight: 500;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Accordion functionality
    const accordions = document.querySelectorAll('.faq-accordion');
    
    accordions.forEach(accordion => {
        const question = accordion.querySelector('.faq-question');
        const answer = accordion.querySelector('.faq-answer');
        const answerContent = accordion.querySelector('.answer-content');
        
        question.addEventListener('click', () => {
            const isActive = accordion.classList.contains('active');
            
            // Close all accordions
            accordions.forEach(acc => {
                acc.classList.remove('active');
                acc.querySelector('.faq-answer').style.height = '0';
            });
            
            // Open clicked accordion if it wasn't already open
            if (!isActive) {
                accordion.classList.add('active');
                answer.style.height = answerContent.offsetHeight + 'px';
            }
        });
    });
    
    // Smooth scroll to categories when nav links are clicked
    const navLinks = document.querySelectorAll('.faq-nav-item');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            window.scrollTo({
                top: targetElement.offsetTop - 100,
                behavior: 'smooth'
            });
            
            // Update active nav item
            navLinks.forEach(navLink => navLink.classList.remove('active'));
            this.classList.add('active');
        });
    });
    
    // Search functionality
    const searchInput = document.getElementById('faq-search');
    const searchResults = document.getElementById('search-results');
    const resultsList = document.getElementById('results-list');
    
    searchInput.addEventListener('input', function() {
        const query = this.value.toLowerCase().trim();
        
        if (query.length < 3) {
            searchResults.classList.add('hidden');
            return;
        }
        
        // Clear previous results
        resultsList.innerHTML = '';
        
        let results = [];
        
        // Search through all FAQs
        Object.keys(faqs).forEach(category => {
            faqs[category].forEach(faq => {
                const questionText = faq.question.toLowerCase();
                const answerText = faq.answer.toLowerCase();
                
                if (questionText.includes(query) || answerText.includes(query)) {
                    results.push({
                        category: category,
                        question: faq.question,
                        preview: faq.answer.substring(0, 100) + '...'
                    });
                }
            });
        });
        
        if (results.length > 0) {
            results.forEach(result => {
                const resultItem = document.createElement('div');
                resultItem.className = 'search-result-item';
                resultItem.innerHTML = `
                    <h4>${result.question}</h4>
                    <p>${result.preview}</p>
                `;
                
                resultItem.addEventListener('click', () => {
                    const categoryElement = document.getElementById(result.category);
                    window.scrollTo({
                        top: categoryElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                    
                    // Find and open the matching accordion
                    const allQuestions = categoryElement.querySelectorAll('.faq-question h3');
                    allQuestions.forEach(questionEl => {
                        if (questionEl.textContent === result.question) {
                            questionEl.closest('.faq-accordion').querySelector('.faq-question').click();
                        }
                    });
                    
                    // Clear search
                    searchInput.value = '';
                    searchResults.classList.add('hidden');
                });
                
                resultsList.appendChild(resultItem);
            });
            
            searchResults.classList.remove('hidden');
        } else {
            resultsList.innerHTML = '<p>No results found. Please try a different search term.</p>';
            searchResults.classList.remove('hidden');
        }
    });
    
    // Hide search results when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.faq-search-container') && !e.target.closest('.search-results')) {
            searchResults.classList.add('hidden');
        }
    });
    
    // Make the first nav item active by default
    if (navLinks.length > 0) {
        navLinks[0].classList.add('active');
    }
});
</script>

<?php
// Include footer
include_once '../components/footer.php';
?> 