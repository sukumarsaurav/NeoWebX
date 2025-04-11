<?php
// Define base path to allow direct script access
define('BASEPATH', true);

require_once '../config/database.php';

// Initialize database connection
$database = new Database();
$db = $database->getConnection();
$blog = new Blog($db);

// Get the slug from the URL
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

// Get post data
$post = $blog->getPostBySlug($slug);

// If post not found, redirect to blog listing
if (!$post) {
    header('Location: /blog');
    exit();
}

// Set SEO data for the post
$seo_data = [
    'title' => $post['title'] . ' | NeoWebX Blog',
    'description' => $post['meta_description'],
    'keywords' => $post['meta_keywords']
];

require_once '../components/header.php';
?>

<!-- Hero Section -->
<section class="hero-section blog-post-hero">
    <div class="container">
        <div class="breadcrumb-nav" data-aos="fade-up">
            <ol class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
                <li class="breadcrumb-item">
                    <a href="/blog?category=<?php echo urlencode($post['category']); ?>">
                        <?php echo htmlspecialchars($post['category']); ?>
                    </a>
                </li>
                <li class="breadcrumb-item current">
                    <?php echo htmlspecialchars($post['title']); ?>
                </li>
            </ol>
        </div>
        
        <div class="blog-post-header" data-aos="fade-up">
            <h1><?php echo htmlspecialchars($post['title']); ?></h1>
            
            <div class="post-meta">
                <span class="post-category"><?php echo htmlspecialchars($post['category']); ?></span>
                <span class="post-date">
                    <i class="far fa-calendar-alt"></i>
                    <?php echo date('M d, Y', strtotime($post['published_date'])); ?>
                </span>
                <span class="post-author">
                    <i class="far fa-user"></i>
                    By <?php echo htmlspecialchars($post['author']); ?>
                </span>
            </div>
        </div>
    </div>
</section>

<!-- Featured Image -->
<?php if ($post['featured_image']): ?>
<section class="blog-featured-image">
    <div class="container">
        <div class="featured-image-container" data-aos="fade-up">
            <img src="<?php echo htmlspecialchars($post['featured_image']); ?>"
                 class="featured-post-image"
                 alt="<?php echo htmlspecialchars($post['title']); ?>">
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Blog Content -->
<section class="overview-section blog-content">
    <div class="container">
        <div class="blog-content-grid">
            <article class="post-content" data-aos="fade-up">
                <?php echo $post['content']; ?>
            </article>
            
            <!-- Social Share -->
            <div class="social-share-container" data-aos="fade-up">
                <h3 class="share-title">Share this article</h3>
                <div class="share-buttons">
                    <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>&text=<?php echo urlencode($post['title']); ?>"
                       class="share-button twitter"
                       target="_blank" rel="noopener noreferrer" aria-label="Share on Twitter">
                        <i class="fab fa-twitter"></i> Tweet
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>&title=<?php echo urlencode($post['title']); ?>"
                       class="share-button linkedin"
                       target="_blank" rel="noopener noreferrer" aria-label="Share on LinkedIn">
                        <i class="fab fa-linkedin"></i> Share
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>"
                       class="share-button facebook"
                       target="_blank" rel="noopener noreferrer" aria-label="Share on Facebook">
                        <i class="fab fa-facebook"></i> Share
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Posts -->
<section class="services-section related-posts">
    <div class="container">
        <div class="section-header">
            <div class="services-header" data-aos="fade-up">
                <h2>Related Articles</h2>
                <p class="lead">More insights you might find interesting</p>
            </div>
        </div>
        <div class="services-grid related-posts-grid">
            <?php
            $related_query = "SELECT id, title, slug, excerpt, featured_image, published_date 
                            FROM blog_posts 
                            WHERE category = :category 
                            AND id != :current_id 
                            AND status = 'published' 
                            ORDER BY published_date DESC 
                            LIMIT 3";
            $stmt = $db->prepare($related_query);
            $stmt->bindParam(':category', $post['category']);
            $stmt->bindParam(':current_id', $post['id']);
            $stmt->execute();
            
            $has_related = false;
            while ($related_post = $stmt->fetch(PDO::FETCH_ASSOC)):
                $has_related = true;
            ?>
                <div class="service-item related-post-item" data-aos="fade-up">
                    <div class="service-card related-post-card">
                        <?php if ($related_post['featured_image']): ?>
                            <div class="post-image">
                                <img src="<?php echo htmlspecialchars($related_post['featured_image']); ?>"
                                     alt="<?php echo htmlspecialchars($related_post['title']); ?>">
                            </div>
                        <?php endif; ?>
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="/blog/<?php echo htmlspecialchars($related_post['slug']); ?>">
                                    <?php echo htmlspecialchars($related_post['title']); ?>
                                </a>
                            </h3>
                            <p class="post-excerpt">
                                <?php echo htmlspecialchars($related_post['excerpt']); ?>
                            </p>
                            <a href="/blog/<?php echo htmlspecialchars($related_post['slug']); ?>"
                               class="read-more-btn">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            
            <?php if (!$has_related): ?>
                <div class="no-related-posts" data-aos="fade-up">
                    <p>No related posts found at this time.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Want to Learn More?</h2>
            <p class="lead">Explore our services or contact us for a personalized consultation</p>
            <div class="cta-buttons">
                <a href="/pages/services.php" class="cta-btn">Our Services</a>
                <a href="/pages/contact.php" class="cta-btn-outline">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<?php require_once '../components/footer.php'; ?> 