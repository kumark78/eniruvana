<?php
session_start();

/**
 * Test CAPTCHA code against session value
 * 
 * @param string $sessionKey The session variable name
 * @param string $captchaCode The user-entered captcha code
 * @return bool True if valid, false otherwise
 */
function TestCaptcha($sessionKey, $captchaCode) {
    // Trim inputs
    $sessionKey = trim($sessionKey);
    $captchaCode = trim($captchaCode);
    
    // Check if either value is empty
    if (empty($sessionKey) || empty($captchaCode)) {
        return false;
    }
    
    // Get the session value
    $sessionValue = isset($_SESSION[$sessionKey]) ? trim($_SESSION[$sessionKey]) : '';
    
    // Clear the session variable immediately after retrieving
    $_SESSION[$sessionKey] = '';
    unset($_SESSION[$sessionKey]);
    
    // Check if session value is empty
    if (empty($sessionValue)) {
        return false;
    }
    
    // Replace lowercase 'i' with uppercase 'I' in user input (matching ASP behavior)
    $captchaCode = str_replace('i', 'I', $captchaCode);
    
    // Perform case-insensitive comparison
    if (strcasecmp($sessionValue, $captchaCode) === 0) {
        return true;
    } else {
        return false;
    }
}

// Get captcha code from query string
$captchaCode = isset($_GET['captchacode']) ? $_GET['captchacode'] : '';

// Verify the captcha
$verify = TestCaptcha("ASPCAPTCHA", $captchaCode);

// Output result (matching ASP behavior)
echo $verify ? 'true' : 'false';
?>

