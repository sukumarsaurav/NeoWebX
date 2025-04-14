<?php
/**
 * NeoWebX Utility Functions
 * Contains helper functions for the site
 */

/**
 * Generates descriptive link text based on the page context
 * 
 * @param string $serviceName The name of the service
 * @param string $baseText The base text (e.g., "Learn More" or "Read More")
 * @return string The descriptive link text
 */
function getDescriptiveAnchorText($serviceName, $baseText = "Learn More") {
    if (empty($serviceName)) {
        return $baseText;
    }
    
    return $baseText . " about " . $serviceName;
}

/**
 * Generates the canonical URL for the current page
 * 
 * @return string The canonical URL
 */
function getCanonicalUrl() {
    $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https://" : "http://";
    $host = str_replace('www.', '', $_SERVER['HTTP_HOST']);
    $uri = $_SERVER['REQUEST_URI'];
    
    // Remove index.php from URI if present
    $uri = str_replace('index.php', '', $uri);
    
    // Ensure no trailing slash except for the root
    if (strlen($uri) > 1 && substr($uri, -1) === '/') {
        $uri = rtrim($uri, '/');
    }
    
    return $protocol . $host . $uri;
}

/**
 * Get a unique meta description for a page
 * 
 * @param string $defaultDescription The default meta description
 * @param string $pageSpecificText Additional text specific to the page
 * @return string The unique meta description
 */
function getUniqueMetaDescription($defaultDescription, $pageSpecificText = '') {
    if (empty($pageSpecificText)) {
        return $defaultDescription;
    }
    
    return $defaultDescription . ' ' . $pageSpecificText;
} 