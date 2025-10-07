<?php
session_start();

/**
 * PHP CAPTCHA Image Generator
 * Generates a secure CAPTCHA image with text
 */

// Configuration
$codeLength = 6;                    // Length of the captcha code
$imageWidth = 130;                  // Image width
$imageHeight = 40;                  // Image height
$fontSize = 18;                     // Font size
$sessionName = "ASPCAPTCHA";        // Session variable name
$fontPath = null;                   // Path to TTF font (optional)

/**
 * Generate random code
 * 
 * @param int $length Length of the code
 * @return string Generated code
 */
function generateCode($length) {
    // Use alphanumeric characters (similar to ASP version CodeType=1)
    $validChars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789'; // Removed confusing chars like I,1,O,0
    $code = '';
    $maxIndex = strlen($validChars) - 1;
    
    for ($i = 0; $i < $length; $i++) {
        $code .= $validChars[rand(0, $maxIndex)];
    }
    
    return $code;
}

// Generate the secure code
$secureCode = generateCode($codeLength);

// Store in session
$_SESSION[$sessionName] = $secureCode;

// Create image
$image = imagecreate($imageWidth, $imageHeight);

// Define colors
$bgColor = imagecolorallocate($image, 223, 254, 255);      // Light cyan background
$textColor = imagecolorallocate($image, 218, 100, 74);     // Dark red text
$lineColor = imagecolorallocate($image, 12, 133, 23);      // Green noise lines

// Fill background
imagefill($image, 0, 0, $bgColor);

// Add random noise lines (similar to ASP NoiseEffect)
$noiseLines = 7;
for ($i = 0; $i < $noiseLines; $i++) {
    $x1 = rand(0, $imageWidth);
    $y1 = rand(0, $imageHeight);
    $x2 = rand(0, $imageWidth);
    $y2 = rand(0, $imageHeight);
    imageline($image, $x1, $y1, $x2, $y2, $lineColor);
}

// Calculate starting position
$charSpacing = 3;
$totalTextWidth = $codeLength * $fontSize + ($codeLength - 1) * $charSpacing;
$startX = ($imageWidth - $totalTextWidth) / 2;
$baseY = ($imageHeight + $fontSize) / 2;

// Draw each character with random vertical offset
for ($i = 0; $i < $codeLength; $i++) {
    $char = substr($secureCode, $i, 1);
    
    // Random vertical offset for each character
    $yOffset = rand(-5, 5);
    $x = $startX + ($i * ($fontSize + $charSpacing));
    $y = $baseY + $yOffset;
    
    // Use TTF font if available, otherwise use built-in font
    if ($fontPath && file_exists($fontPath)) {
        imagettftext($image, $fontSize, 0, $x, $y, $textColor, $fontPath, $char);
    } else {
        // Use built-in font (5 is the largest built-in font)
        imagestring($image, 5, $x, $y - $fontSize, $char, $textColor);
    }
}

// Set headers to prevent caching
header('Content-Type: image/png');
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

// Output image
imagepng($image);

// Free memory
imagedestroy($image);
?>

