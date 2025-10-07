# CAPTCHA ASP to PHP Migration Guide

## Files Created

### 1. **captcha.php**
- Generates CAPTCHA image
- Stores code in session variable `$_SESSION['ASPCAPTCHA']`
- Creates PNG image with random noise lines
- Prevents caching with proper headers

### 2. **captchaverify.php**
- Verifies user-entered captcha code
- Compares against session value
- Returns "true" or "false"
- Clears session after verification (one-time use)

### 3. **.htaccess**
- Rewrites `.asp` URLs to `.php` files
- Preserves query strings
- Blocks direct access to .asp files
- Sets cache control for captcha

### 4. **test-rewrite.php**
- Test file to verify rewrite rules work
- Access as `test-rewrite.asp` to test

## How It Works

```
User requests: captcha.asp
        ↓
Apache .htaccess rewrites to: captcha.php
        ↓
PHP executes and generates CAPTCHA
        ↓
Browser shows: captcha.asp (URL unchanged)
```

## Testing Instructions

### Step 1: Test Rewrite Rule
1. Open your browser
2. Navigate to: `http://yourdomain.com/test-rewrite.asp`
3. You should see a success message
4. If you get a 404 error, check that:
   - `mod_rewrite` is enabled in Apache
   - `.htaccess` files are allowed (AllowOverride All)

### Step 2: Test CAPTCHA Generation
1. Navigate to: `http://yourdomain.com/captcha.asp`
2. You should see a CAPTCHA image
3. Refresh the page - you should get a new image each time

### Step 3: Test CAPTCHA Verification
1. Open browser developer tools (F12)
2. Go to: `http://yourdomain.com/captchaverify.asp?captchacode=ABC123`
3. You should see "false" (because it won't match)

### Step 4: Test Contact Form
1. Navigate to: `http://yourdomain.com/contact-us.php`
2. Fill out the form
3. Enter the CAPTCHA code shown
4. Submit the form
5. Should verify and submit successfully

## Apache Requirements

### Required Modules
```bash
# Enable mod_rewrite
sudo a2enmod rewrite

# Restart Apache
sudo systemctl restart apache2
```

### Apache Configuration
Ensure your Apache config allows .htaccess:
```apache
<Directory /var/www/html>
    AllowOverride All
</Directory>
```

## PHP Requirements

### Required Extensions
- **GD Library** (for image generation)

Check if GD is installed:
```bash
php -m | grep -i gd
```

Install GD if needed:
```bash
# Ubuntu/Debian
sudo apt-get install php-gd

# CentOS/RHEL
sudo yum install php-gd

# Restart web server after installation
```

## Troubleshooting

### Issue: 500 Internal Server Error
**Solution:** Check Apache error log:
```bash
tail -f /var/log/apache2/error.log
```
- Ensure mod_rewrite is enabled
- Check .htaccess syntax

### Issue: CAPTCHA image not showing
**Solution:**
- Verify PHP GD library is installed: `php -m | grep GD`
- Check PHP error log
- Ensure session_start() is working

### Issue: Verification always fails
**Solution:**
- Check that sessions are working: `<?php session_start(); echo session_id(); ?>`
- Verify session.save_path is writable
- Clear browser cookies

### Issue: Rewrite not working (404 on .asp files)
**Solution:**
- Check Apache config: `AllowOverride All`
- Enable rewrite module: `sudo a2enmod rewrite`
- Check .htaccess file permissions

## Security Notes

1. **One-time use**: CAPTCHA code is cleared from session after verification
2. **No caching**: Headers prevent caching of CAPTCHA images
3. **Case-insensitive**: Comparison ignores case for better UX
4. **Character replacement**: Lowercase 'i' converted to 'I' (matching original ASP behavior)

## File Locations

```
/
├── .htaccess (rewrite rules)
├── captcha.php (image generator)
├── captchaverify.php (verification)
├── contact-us.php (contact form)
└── test-rewrite.php (test file)
```

## Optional Enhancements

### Use Custom Font
Edit `captcha.php`:
```php
$fontPath = './fonts/arial.ttf'; // Add TTF font path
```

### Adjust Difficulty
Edit `captcha.php`:
```php
$codeLength = 8;        // Longer code
$noiseLines = 15;       // More noise
```

### Add Audio CAPTCHA
Consider adding audio alternative for accessibility.

## Migration Notes

### What Changed from ASP
- **Session syntax**: `Session("name")` → `$_SESSION['name']`
- **Image format**: BMP → PNG (better compression, browser support)
- **Comparison**: `StrComp()` → `strcasecmp()`
- **Query string**: `Request.QueryString()` → `$_GET[]`

### Backward Compatibility
- All `.asp` URLs continue to work
- Same session variable name: `ASPCAPTCHA`
- Same verification logic
- Same response format: "true"/"false"

## Cleanup (Optional)

After confirming everything works, you can:
1. Delete `test-rewrite.php` and `test-rewrite.asp`
2. Remove old ASP files: `captcha.asp`, `captchaverify.asp`
3. Keep .htaccess for URL compatibility

## Support

If you encounter issues:
1. Check Apache error log
2. Check PHP error log
3. Verify all requirements are met
4. Test each step individually

---

**Created**: October 2025  
**Purpose**: ASP to PHP migration for CAPTCHA system  
**Compatibility**: Maintains backward compatibility with .asp URLs

