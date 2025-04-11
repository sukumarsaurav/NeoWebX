<?php
header('Content-Type: application/xml; charset=utf-8');

// Base URL of the site - change as needed
$baseURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

// Function to get all PHP files in a directory and subdirectories
function getPHPFiles($dir) {
    $result = [];
    $scan = scandir($dir);
    foreach($scan as $file) {
        if ($file === '.' || $file === '..') continue;
        
        $path = $dir . '/' . $file;
        
        if (is_dir($path)) {
            $result = array_merge($result, getPHPFiles($path));
        } else if (pathinfo($path, PATHINFO_EXTENSION) === 'php' && $file !== 'sitemap.php' && $file !== 'error.php') {
            // Remove the leading ./ if it exists
            $path = preg_replace('/^\.\//', '', $path);
            $result[] = $path;
        }
    }
    return $result;
}

// Date format for lastmod
$lastmod = date('Y-m-d');

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <!-- Home page -->
    <url>
        <loc><?php echo $baseURL; ?></loc>
        <lastmod><?php echo $lastmod; ?></lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>

<?php
// Get all PHP files excluding the sitemap itself
$files = getPHPFiles('.');

foreach ($files as $file) {
    // Skip any files in includes or components folders
    if (strpos($file, 'includes/') === 0 || strpos($file, 'components/') === 0) {
        continue;
    }
    
    // Format URL
    $url = $baseURL . '/' . $file;
    
    // Set priority based on depth
    $depth = substr_count($file, '/');
    $priority = max(0.2, 1 - ($depth * 0.2));
    
    // Determine change frequency
    $changefreq = 'monthly';
    if (strpos($file, 'blog') !== false) {
        $changefreq = 'weekly';
    }
    if ($file === 'index.php') {
        continue; // Skip as we already added the homepage
    }
    
    echo "    <url>\n";
    echo "        <loc>" . htmlspecialchars($url) . "</loc>\n";
    echo "        <lastmod>" . $lastmod . "</lastmod>\n";
    echo "        <changefreq>" . $changefreq . "</changefreq>\n";
    echo "        <priority>" . number_format($priority, 1) . "</priority>\n";
    echo "    </url>\n";
}
?>
</urlset> 