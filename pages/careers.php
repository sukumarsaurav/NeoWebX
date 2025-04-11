<?php
define('BASEPATH', true);
require_once '../includes/config.php';

// Initialize session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set variables for header
$pageTitle = 'Careers - NeoWebX';
$pageDescription = 'Join our team of passionate tech professionals. Explore career opportunities at NeoWebX and help shape the future of digital solutions.';
$pageKeywords = 'careers, jobs, tech jobs, web development jobs, software engineer, tech careers, job openings';

// SEO Data
$seo_data = [
    'description' => $pageDescription,
    'keywords' => $pageKeywords
];

// Include header
include_once '../components/header.php';

// Career Openings Data
$job_openings = [
    [
        'title' => 'Senior Full Stack Developer',
        'department' => 'Engineering',
        'location' => 'Remote (USA/Canada)',
        'type' => 'Full-time',
        'posted' => '2023-05-15',
        'description' => 'We\'re looking for an experienced Full Stack Developer to join our growing engineering team. You\'ll be responsible for developing and maintaining web applications, creating scalable microservices, and contributing to our core product architecture.',
        'responsibilities' => [
            'Design and develop high-quality code for our web applications',
            'Build efficient, testable, and reusable components',
            'Collaborate with cross-functional teams to define and implement new features',
            'Ensure the technical feasibility of UI/UX designs',
            'Optimize applications for maximum speed and scalability',
            'Write clean, maintainable code following our coding standards'
        ],
        'requirements' => [
            '5+ years of experience in full stack development',
            'Proficiency in JavaScript, TypeScript, React, and Node.js',
            'Experience with RESTful APIs and microservices architecture',
            'Familiarity with cloud services (AWS/Azure/GCP)',
            'Strong understanding of front-end technologies (HTML5, CSS3)',
            'Experience with database systems (SQL and NoSQL)',
            'Knowledge of version control systems (Git)',
            'Excellent problem-solving and communication skills'
        ]
    ],
    [
        'title' => 'UX/UI Designer',
        'department' => 'Design',
        'location' => 'Hybrid (New York)',
        'type' => 'Full-time',
        'posted' => '2023-05-18',
        'description' => 'We are seeking a talented UX/UI Designer to create exceptional user experiences for our digital products. You\'ll work closely with product managers, developers, and stakeholders to design intuitive interfaces that meet user needs while achieving business goals.',
        'responsibilities' => [
            'Create user flows, wireframes, prototypes, and high-fidelity designs',
            'Conduct user research and usability testing',
            'Develop and maintain design systems and style guides',
            'Collaborate with developers to ensure design quality in final product',
            'Present and defend design decisions to stakeholders',
            'Stay updated on latest design trends and best practices'
        ],
        'requirements' => [
            '3+ years of experience in UX/UI design for digital products',
            'Proficiency in design tools (Figma, Sketch, Adobe Creative Suite)',
            'Strong portfolio demonstrating user-centered design process',
            'Experience conducting user research and usability testing',
            'Knowledge of accessibility standards and responsive design',
            'Understanding of front-end development capabilities and constraints',
            'Excellent visual design skills with attention to detail',
            'Strong communication and collaboration abilities'
        ]
    ],
    [
        'title' => 'DevOps Engineer',
        'department' => 'Operations',
        'location' => 'Remote (Worldwide)',
        'type' => 'Full-time',
        'posted' => '2023-05-20',
        'description' => 'Join our DevOps team to build and maintain the infrastructure that powers our digital solutions. You\'ll be responsible for implementing CI/CD pipelines, automating deployment processes, and ensuring the reliability and security of our systems.',
        'responsibilities' => [
            'Design, implement, and maintain CI/CD pipelines',
            'Automate infrastructure provisioning and management',
            'Monitor system performance and troubleshoot issues',
            'Implement security best practices and compliance requirements',
            'Collaborate with development teams to improve deployment workflows',
            'Document infrastructure and operational procedures'
        ],
        'requirements' => [
            '3+ years of experience in DevOps or SRE roles',
            'Strong knowledge of cloud platforms (AWS/Azure/GCP)',
            'Experience with containerization (Docker, Kubernetes)',
            'Proficiency in infrastructure as code (Terraform, CloudFormation)',
            'Familiarity with monitoring and logging systems',
            'Strong scripting skills (Bash, Python)',
            'Knowledge of security best practices',
            'Excellent problem-solving and communication skills'
        ]
    ],
    [
        'title' => 'AI/ML Engineer',
        'department' => 'Research & Development',
        'location' => 'Remote (USA/Canada)',
        'type' => 'Full-time',
        'posted' => '2023-05-22',
        'description' => 'We\'re looking for an AI/ML Engineer to help us integrate artificial intelligence into our products. You\'ll work on developing and deploying machine learning models that drive innovation and provide value to our clients.',
        'responsibilities' => [
            'Develop and implement machine learning algorithms and models',
            'Process and analyze large datasets to extract insights',
            'Collaborate with product and engineering teams to integrate AI features',
            'Evaluate and improve model performance',
            'Stay updated on the latest AI/ML research and techniques',
            'Document methodologies and results'
        ],
        'requirements' => [
            '3+ years of experience in AI/ML development',
            'Strong knowledge of machine learning frameworks (TensorFlow, PyTorch)',
            'Proficiency in Python and data science libraries',
            'Experience with data preprocessing and feature engineering',
            'Familiarity with NLP, computer vision, or recommendation systems',
            'Understanding of model deployment and MLOps',
            'Strong mathematical and statistical skills',
            'Excellent problem-solving and communication abilities'
        ]
    ]
];

// Benefits Data
$benefits = [
    [
        'icon' => 'fas fa-coins',
        'title' => 'Competitive Compensation',
        'description' => 'We offer above-market salaries, equity options, and bonuses based on performance and company success.'
    ],
    [
        'icon' => 'fas fa-heart',
        'title' => 'Comprehensive Health Coverage',
        'description' => 'We provide excellent medical, dental, and vision insurance for employees and their dependents.'
    ],
    [
        'icon' => 'fas fa-umbrella-beach',
        'title' => 'Generous Time Off',
        'description' => 'Enjoy unlimited PTO, paid holidays, and sabbaticals for long-term employees.'
    ],
    [
        'icon' => 'fas fa-laptop-house',
        'title' => 'Remote-First Culture',
        'description' => 'Work from anywhere with flexible hours. We focus on outcomes, not when or where you work.'
    ],
    [
        'icon' => 'fas fa-graduation-cap',
        'title' => 'Learning & Development',
        'description' => 'Access to online courses, conferences, workshops, and a dedicated budget for professional growth.'
    ],
    [
        'icon' => 'fas fa-piggy-bank',
        'title' => '401(k) Matching',
        'description' => 'We match 4% of your 401(k) contributions to help you save for retirement.'
    ],
    [
        'icon' => 'fas fa-baby',
        'title' => 'Parental Leave',
        'description' => '12 weeks of paid parental leave for all new parents, regardless of gender.'
    ],
    [
        'icon' => 'fas fa-dumbbell',
        'title' => 'Wellness Programs',
        'description' => 'Monthly wellness stipend, mental health resources, and fitness reimbursements.'
    ]
];

// Values Data
$values = [
    [
        'icon' => 'fas fa-lightbulb',
        'title' => 'Innovation',
        'description' => 'We embrace new ideas and technologies to solve complex problems and create exceptional solutions.'
    ],
    [
        'icon' => 'fas fa-users',
        'title' => 'Collaboration',
        'description' => 'We believe the best results come from diverse teams working together with open communication.'
    ],
    [
        'icon' => 'fas fa-star',
        'title' => 'Excellence',
        'description' => 'We strive for the highest quality in everything we do, from code to client relationships.'
    ],
    [
        'icon' => 'fas fa-heart',
        'title' => 'Compassion',
        'description' => 'We care deeply about our clients, our team members, and the communities we serve.'
    ],
    [
        'icon' => 'fas fa-globe',
        'title' => 'Inclusivity',
        'description' => 'We value and respect diverse perspectives, backgrounds, and experiences.'
    ],
    [
        'icon' => 'fas fa-shield-alt',
        'title' => 'Integrity',
        'description' => 'We maintain the highest ethical standards in all our dealings and honor our commitments.'
    ]
];
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content" data-aos="fade-right">
                <h1>Join Our <span class="highlight">Team</span></h1>
                <p class="lead">Build the future of digital experiences with a team of passionate technologists and creatives.</p>
                <a href="#openings" class="btn-primary">View Open Positions</a>
            </div>
            <div class="hero-image" data-aos="fade-left">
                <img src="../assets/svg/careers-hero.svg" alt="Careers at NeoWebX" class="floating-image">
                <div class="image-glow"></div>
                <div class="decoration-circle-1"></div>
                <div class="decoration-circle-2"></div>
            </div>
        </div>
    </div>
</section>

<!-- Company Culture Section -->
<section class="culture-section">
    <div class="container">
        <div class="section-header">
            <div class="features-header" data-aos="fade-up">
                <h2>Life at NeoWebX</h2>
                <p class="lead">We've built a company where passionate people can thrive and do their best work</p>
            </div>
        </div>
        
        <div class="culture-grid">
            <div class="culture-image" data-aos="fade-right">
                <img src="../assets/images/office-culture.jpg" alt="NeoWebX Company Culture">
            </div>
            <div class="culture-content" data-aos="fade-left">
                <p>At NeoWebX, we believe that great products start with great people. Our team is made up of talented individuals who are passionate about technology, design, and solving complex problems.</p>
                
                <p>We foster a culture of innovation, collaboration, and continuous learning. Everyone has a voice and is encouraged to share ideas, regardless of their role or experience level.</p>
                
                <p>While we embrace remote work and flexibility, we also value connection and community. We host regular virtual events, in-person meetups, and annual retreats to strengthen bonds across our global team.</p>
                
                <p>We're committed to diversity, equity, and inclusion. We believe that a diverse team leads to better decisions, more innovative solutions, and a stronger company overall.</p>
            </div>
        </div>
    </div>
</section>

<!-- Company Values Section -->
<section class="values-section">
    <div class="container">
        <div class="section-header">
            <div class="features-header" data-aos="fade-up">
                <h2>Our Values</h2>
                <p class="lead">The principles that guide how we work and make decisions</p>
            </div>
        </div>
        
        <div class="values-grid">
            <?php foreach ($values as $index => $value): ?>
            <div class="value-card" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>">
                <div class="value-icon">
                    <i class="<?php echo htmlspecialchars($value['icon']); ?>"></i>
                </div>
                <h3><?php echo htmlspecialchars($value['title']); ?></h3>
                <p><?php echo htmlspecialchars($value['description']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits-section">
    <div class="container">
        <div class="section-header">
            <div class="features-header" data-aos="fade-up">
                <h2>Employee Benefits</h2>
                <p class="lead">We take care of our team with comprehensive benefits and perks</p>
            </div>
        </div>
        
        <div class="benefits-grid">
            <?php foreach ($benefits as $index => $benefit): ?>
            <div class="benefit-card" data-aos="fade-up" data-aos-delay="<?php echo $index * 50; ?>">
                <div class="benefit-icon">
                    <i class="<?php echo htmlspecialchars($benefit['icon']); ?>"></i>
                </div>
                <h3><?php echo htmlspecialchars($benefit['title']); ?></h3>
                <p><?php echo htmlspecialchars($benefit['description']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Job Openings Section -->
<section id="openings" class="job-openings-section">
    <div class="container">
        <div class="section-header">
            <div class="features-header" data-aos="fade-up">
                <h2>Open Positions</h2>
                <p class="lead">Join our team and help us build exceptional digital experiences</p>
            </div>
        </div>
        
        <div class="job-filters" data-aos="fade-up">
            <div class="filter-group">
                <label for="department-filter">Department</label>
                <select id="department-filter">
                    <option value="all">All Departments</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Design">Design</option>
                    <option value="Operations">Operations</option>
                    <option value="Research & Development">Research & Development</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Sales">Sales</option>
                </select>
            </div>
            
            <div class="filter-group">
                <label for="location-filter">Location</label>
                <select id="location-filter">
                    <option value="all">All Locations</option>
                    <option value="Remote">Remote</option>
                    <option value="Hybrid">Hybrid</option>
                    <option value="New York">New York</option>
                </select>
            </div>
            
            <div class="filter-group">
                <label for="type-filter">Job Type</label>
                <select id="type-filter">
                    <option value="all">All Types</option>
                    <option value="Full-time">Full-time</option>
                    <option value="Part-time">Part-time</option>
                    <option value="Contract">Contract</option>
                    <option value="Internship">Internship</option>
                </select>
            </div>
        </div>
        
        <div class="job-listings">
            <?php foreach ($job_openings as $index => $job): ?>
            <div class="job-card" data-aos="fade-up" data-aos-delay="<?php echo $index * 100; ?>" 
                 data-department="<?php echo htmlspecialchars($job['department']); ?>"
                 data-location="<?php echo htmlspecialchars($job['location']); ?>"
                 data-type="<?php echo htmlspecialchars($job['type']); ?>">
                <div class="job-header">
                    <h3 class="job-title"><?php echo htmlspecialchars($job['title']); ?></h3>
                    <div class="job-meta">
                        <span class="job-department"><i class="fas fa-briefcase"></i> <?php echo htmlspecialchars($job['department']); ?></span>
                        <span class="job-location"><i class="fas fa-map-marker-alt"></i> <?php echo htmlspecialchars($job['location']); ?></span>
                        <span class="job-type"><i class="fas fa-clock"></i> <?php echo htmlspecialchars($job['type']); ?></span>
                        <span class="job-posted"><i class="fas fa-calendar-alt"></i> Posted: <?php echo date('M d, Y', strtotime($job['posted'])); ?></span>
                    </div>
                </div>
                
                <div class="job-description">
                    <p><?php echo htmlspecialchars($job['description']); ?></p>
                    
                    <div class="job-details">
                        <div class="job-section">
                            <h4>Responsibilities</h4>
                            <ul>
                                <?php foreach ($job['responsibilities'] as $responsibility): ?>
                                <li><?php echo htmlspecialchars($responsibility); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        
                        <div class="job-section">
                            <h4>Requirements</h4>
                            <ul>
                                <?php foreach ($job['requirements'] as $requirement): ?>
                                <li><?php echo htmlspecialchars($requirement); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="job-footer">
                    <a href="/pages/contact.php?job=<?php echo urlencode($job['title']); ?>" class="btn-primary">Apply Now</a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- No Results Message -->
<div id="no-results" class="no-results hidden">
    <div class="container">
        <div class="no-results-content" data-aos="fade-up">
            <i class="fas fa-search"></i>
            <h3>No positions match your filters</h3>
            <p>Try adjusting your search criteria or check back later for new openings.</p>
            <button id="reset-filters" class="btn-outline">Reset Filters</button>
        </div>
    </div>
</div>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Don't See a Position That Fits?</h2>
            <p class="lead">We're always looking for talented individuals to join our team. Send us your resume and let us know how you can contribute.</p>
            <a href="/pages/contact.php?subject=General Application" class="cta-btn animate-pulse-slow">Submit General Application</a>
        </div>
    </div>
</section>

<style>
/* Careers Specific Styles */
.culture-section {
    padding: 5rem 0;
}

.culture-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 2rem;
    margin-top: 2rem;
}

@media (min-width: 992px) {
    .culture-grid {
        grid-template-columns: 1fr 1fr;
        align-items: center;
    }
}

.culture-image img {
    width: 100%;
    height: auto;
    border-radius: var(--radius);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.culture-content p {
    margin-bottom: 1.5rem;
    color: var(--text);
    line-height: 1.6;
}

/* Values Section */
.values-section {
    background: var(--bg-light);
    padding: 5rem 0;
}

.values-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 2rem;
    margin-top: 2rem;
}

@media (min-width: 768px) {
    .values-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 1200px) {
    .values-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

.value-card {
    background: var(--white);
    border-radius: var(--radius);
    padding: 2rem;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    height: 100%;
}

.value-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.value-icon {
    width: 60px;
    height: 60px;
    background: var(--bg-light);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
}

.value-icon i {
    font-size: 1.5rem;
    color: var(--pumpkin);
}

.value-card h3 {
    font-size: 1.25rem;
    margin-bottom: 1rem;
    color: var(--yinmn-blue);
}

.value-card p {
    color: var(--text);
    line-height: 1.6;
}

/* Benefits Section */
.benefits-section {
    padding: 5rem 0;
}

.benefits-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
    margin-top: 2rem;
}

@media (min-width: 768px) {
    .benefits-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 1200px) {
    .benefits-grid {
        grid-template-columns: repeat(4, 1fr);
    }
}

.benefit-card {
    background: var(--white);
    border-radius: var(--radius);
    padding: 1.5rem;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    transition: all 0.3s ease;
    height: 100%;
}

.benefit-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

.benefit-icon {
    color: var(--pumpkin);
    font-size: 2rem;
    margin-bottom: 1rem;
}

.benefit-card h3 {
    font-size: 1.1rem;
    margin-bottom: 0.75rem;
    color: var(--yinmn-blue);
}

.benefit-card p {
    color: var(--text);
    font-size: 0.9rem;
    line-height: 1.6;
}

/* Job Openings Section */
.job-openings-section {
    background: var(--bg-light);
    padding: 5rem 0;
}

.job-filters {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1rem;
    margin-bottom: 2rem;
    background: var(--white);
    padding: 1.5rem;
    border-radius: var(--radius);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

@media (min-width: 768px) {
    .job-filters {
        grid-template-columns: repeat(3, 1fr);
    }
}

.filter-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 500;
    color: var(--text);
}

.filter-group select {
    width: 100%;
    padding: 0.5rem;
    border: 1px solid var(--border);
    border-radius: var(--radius-sm);
    background-color: var(--white);
    color: var(--text);
}

.job-listings {
    display: flex;
    flex-direction: column;
    gap: 2rem;
}

.job-card {
    background: var(--white);
    border-radius: var(--radius);
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.job-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.job-header {
    padding: 1.5rem;
    border-bottom: 1px solid var(--border);
}

.job-title {
    font-size: 1.25rem;
    color: var(--yinmn-blue);
    margin-bottom: 1rem;
}

.job-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
}

.job-meta span {
    display: flex;
    align-items: center;
    color: var(--text-light);
    font-size: 0.875rem;
}

.job-meta i {
    color: var(--pumpkin);
    margin-right: 0.5rem;
}

.job-description {
    padding: 1.5rem;
}

.job-description > p {
    color: var(--text);
    margin-bottom: 1.5rem;
    line-height: 1.6;
}

.job-details {
    display: grid;
    grid-template-columns: 1fr;
    gap: 1.5rem;
}

@media (min-width: 768px) {
    .job-details {
        grid-template-columns: repeat(2, 1fr);
    }
}

.job-section h4 {
    font-size: 1.1rem;
    color: var(--yinmn-blue);
    margin-bottom: 1rem;
}

.job-section ul {
    padding-left: 1.5rem;
}

.job-section li {
    color: var(--text);
    margin-bottom: 0.5rem;
    line-height: 1.6;
}

.job-footer {
    padding: 1.5rem;
    border-top: 1px solid var(--border);
    text-align: right;
}

/* No Results */
.no-results {
    padding: 3rem 0;
}

.no-results-content {
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
}

.no-results-content i {
    font-size: 3rem;
    color: var(--pumpkin);
    margin-bottom: 1rem;
}

.no-results-content h3 {
    font-size: 1.5rem;
    color: var(--yinmn-blue);
    margin-bottom: 1rem;
}

.no-results-content p {
    color: var(--text);
    margin-bottom: 1.5rem;
}

.hidden {
    display: none;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Job filtering functionality
    const departmentFilter = document.getElementById('department-filter');
    const locationFilter = document.getElementById('location-filter');
    const typeFilter = document.getElementById('type-filter');
    const resetFiltersBtn = document.getElementById('reset-filters');
    const jobCards = document.querySelectorAll('.job-card');
    const noResults = document.getElementById('no-results');
    
    function filterJobs() {
        const department = departmentFilter.value;
        const location = locationFilter.value;
        const type = typeFilter.value;
        
        let visibleCount = 0;
        
        jobCards.forEach(card => {
            const departmentMatch = department === 'all' || card.dataset.department.includes(department);
            const locationMatch = location === 'all' || card.dataset.location.includes(location);
            const typeMatch = type === 'all' || card.dataset.type === type;
            
            if (departmentMatch && locationMatch && typeMatch) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });
        
        // Toggle no results message
        if (visibleCount === 0) {
            noResults.classList.remove('hidden');
        } else {
            noResults.classList.add('hidden');
        }
    }
    
    // Add event listeners for filters
    departmentFilter.addEventListener('change', filterJobs);
    locationFilter.addEventListener('change', filterJobs);
    typeFilter.addEventListener('change', filterJobs);
    
    // Reset filters
    resetFiltersBtn.addEventListener('click', function() {
        departmentFilter.value = 'all';
        locationFilter.value = 'all';
        typeFilter.value = 'all';
        filterJobs();
    });
});
</script>

<?php
// Include footer
include_once '../components/footer.php';
?> 