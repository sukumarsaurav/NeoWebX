<?php
// Image dimensions
$width = 1200;
$height = 630;

// Create image
$image = imagecreatetruecolor($width, $height);

// Define colors
$bg_color = imagecolorallocate($image, 72, 86, 150); // yinmn-blue
$accent_color = imagecolorallocate($image, 252, 122, 30); // pumpkin
$white = imagecolorallocate($image, 255, 255, 255);
$light_blue = imagecolorallocate($image, 122, 136, 200);

// Background
imagefilledrectangle($image, 0, 0, $width, $height, $bg_color);

// Gradient effect (simple version)
for ($i = 0; $i < $height; $i++) {
    $line_color = imagecolorallocate($image, 
        72 + (($i / $height) * 180), 
        86 + (($i / $height) * 113), 
        150 + (($i / $height) * 70)
    );
    imageline($image, 0, $i, $width, $i, $line_color);
}

// Add decorative elements
// Circle 1
imagefilledellipse($image, $width * 0.85, $height * 0.2, 150, 150, $accent_color);

// Circle 2
imagefilledellipse($image, $width * 0.15, $height * 0.8, 120, 120, $light_blue);

// Add text
$title_font_size = 60;
$tagline_font_size = 30;

// Load fonts (use system font as fallback)
$font = 5; // built-in font

// Add company name
$company_name = "NeoWebX";
$title_x = $width / 2 - (strlen($company_name) * $title_font_size) / 3;
$title_y = $height / 2 - 50;
imagestring($image, $font, $title_x, $title_y, $company_name, $white);

// Add tagline
$tagline = "Complete Technology Partner for Modern Businesses";
$tagline_x = $width / 2 - (strlen($tagline) * $tagline_font_size) / 3;
$tagline_y = $height / 2 + 20;
imagestring($image, 3, $tagline_x, $tagline_y, $tagline, $white);

// Save image to file
$output_file = __DIR__ . '/neowebx-social-share.jpg';
imagejpeg($image, $output_file, 90);

echo "Image saved to: " . $output_file;

// Clean up
imagedestroy($image); 