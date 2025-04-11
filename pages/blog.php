<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../config/config.php';

// Initialize database connection
$database = new Database();
$db = $database->getConnection();
$blog = new Blog($db);

// Get current page number
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$per_page = 9;

// Get posts for current page
$posts = $blog->getAllPosts($page, $per_page);
$total_posts = $blog->getTotalPosts();
$total_pages = ceil($total_posts / $per_page);

// Get current category if set
$current_category = isset($_GET['category']) ? $_GET['category'] : null;
if ($current_category) {
    $posts = $blog->getPostsByCategory($current_category, $page, $per_page);
}

// SEO metadata for blog listing
$seo_data = [
    'title' => 'Blog - Latest Insights on Digital Marketing & Web Development | NeoWebX',
    'description' => 'Explore our latest articles on digital marketing, web development, AI, and business growth strategies. Expert insights to help your business succeed online.',
    'keywords' => 'digital marketing blog, web development articles, business growth tips, AI insights, NeoWebX blog'
];

require_once '../components/header.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content" data-aos="fade-right">
                <h1>Our <span class="highlight">Blog</span></h1>
                <p class="lead">Insights, tips, and strategies to help your business grow online</p>
            </div>
            <div class="hero-image" data-aos="fade-left">
                <img src="../assets/images/blog-header.svg" alt="Blog" class="floating-image">
                <div class="image-glow"></div>
                <div class="decoration-circle-1"></div>
                <div class="decoration-circle-2"></div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Categories -->
<section class="features-section">
    <div class="container">
        <div class="blog-categories" data-aos="fade-up">
            <a href="/blog" class="category-btn <?php echo !$current_category ? 'active' : ''; ?>">All</a>
            <?php
            $categories_query = "SELECT * FROM blog_categories ORDER BY name";
            $stmt = $db->prepare($categories_query);
            $stmt->execute();
            while ($category = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $active = $current_category === $category['slug'] ? 'active' : '';
                echo '<a href="/blog?category=' . $category['slug'] . '" class="category-btn ' . $active . '">' . $category['name'] . '</a>';
            }
            ?>
        </div>
    </div>
</section>

<!-- Blog Grid -->
<section class="services-section">
    <div class="container">
        <div class="section-header">
            <div class="services-header" data-aos="fade-up">
                <h2>Latest Articles</h2>
                <p class="lead">Expert insights to help your business succeed online</p>
            </div>
        </div>
        
        <div class="services-grid blog-posts-grid">
            <?php if (empty($posts)): ?>
                <div class="no-posts" data-aos="fade-up">
                    <p>No posts found. Please check back soon for new content!</p>
                </div>
            <?php else: ?>
                <?php foreach ($posts as $post): ?>
                    <div class="service-item blog-post-item" data-aos="fade-up">
                        <div class="service-card blog-post-card">
                            <?php if ($post['featured_image']): ?>
                                <div class="post-image">
                                    <img src="<?php echo htmlspecialchars($post['featured_image']); ?>" 
                                         alt="<?php echo htmlspecialchars($post['title']); ?>">
                                </div>
                            <?php endif; ?>
                            <div class="post-content">
                                <div class="post-meta">
                                    <span class="post-category"><?php echo htmlspecialchars($post['category']); ?></span>
                                    <span class="post-date">
                                        <i class="far fa-calendar-alt"></i> <?php echo date('M d, Y', strtotime($post['published_date'])); ?>
                                    </span>
                                </div>
                                <h3 class="post-title">
                                    <a href="/blog/<?php echo htmlspecialchars($post['slug']); ?>">
                                        <?php echo htmlspecialchars($post['title']); ?>
                                    </a>
                                </h3>
                                <p class="post-excerpt">
                                    <?php echo htmlspecialchars($post['excerpt']); ?>
                                </p>
                                <div class="post-footer">
                                    <div class="post-author">
                                        <i class="far fa-user"></i> By <?php echo htmlspecialchars($post['author']); ?>
                                    </div>
                                    <a href="/blog/<?php echo htmlspecialchars($post['slug']); ?>" 
                                       class="read-more-btn">
                                        Read More <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <?php if ($total_pages > 1): ?>
            <div class="pagination-container" data-aos="fade-up">
                <div class="pagination">
                    <?php if ($page > 1): ?>
                        <a href="?page=<?php echo $page - 1; ?><?php echo $current_category ? '&category=' . $current_category : ''; ?>" class="pagination-item prev">
                            <i class="fas fa-chevron-left"></i> Previous
                        </a>
                    <?php endif; ?>
                    
                    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                        <a href="?page=<?php echo $i; ?><?php echo $current_category ? '&category=' . $current_category : ''; ?>" class="pagination-item <?php echo $i === $page ? 'active' : ''; ?>">
                            <?php echo $i; ?>
                        </a>
                    <?php endfor; ?>
                    
                    <?php if ($page < $total_pages): ?>
                        <a href="?page=<?php echo $page + 1; ?><?php echo $current_category ? '&category=' . $current_category : ''; ?>" class="pagination-item next">
                            Next <i class="fas fa-chevron-right"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Want to Contribute?</h2>
            <p class="lead">Share your expertise with our community. We're always looking for guest writers.</p>
            <a href="/pages/contact.php" class="cta-btn animate-pulse-slow">
                Get in Touch
            </a>
        </div>
    </div>
</section>

<?php require_once '../components/footer.php'; ?> 