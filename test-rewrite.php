<?php
/**
 * Test file to verify .htaccess rewrite rules are working
 * Access this file as: test-rewrite.asp
 * If rewrite is working, you should see this page
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Rewrite Test</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #f5f5f5;
        }
        .success {
            background: #4CAF50;
            color: white;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .info {
            background: white;
            padding: 20px;
            border-radius: 5px;
            border-left: 4px solid #2196F3;
        }
        .code {
            background: #f4f4f4;
            padding: 10px;
            border-radius: 3px;
            font-family: monospace;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="success">
        <h1>✓ SUCCESS!</h1>
        <p>The .htaccess rewrite rule is working correctly!</p>
        <p>You accessed: <strong>test-rewrite.asp</strong></p>
        <p>But this PHP file was served: <strong>test-rewrite.php</strong></p>
    </div>
    
    <div class="info">
        <h2>How It Works</h2>
        <p>The .htaccess file contains the following rewrite rule:</p>
        <div class="code">
            RewriteRule ^(.*)\.asp$ $1.php [L,QSA]
        </div>
        <p>This means:</p>
        <ul>
            <li>Any URL ending with <code>.asp</code> is rewritten to <code>.php</code></li>
            <li>Query strings are preserved (QSA flag)</li>
            <li>The rewrite happens internally, so the browser still shows <code>.asp</code></li>
        </ul>
        
        <h2>Your Files</h2>
        <p>These files should now work with .asp extension:</p>
        <ul>
            <li><a href="captcha.asp">captcha.asp</a> → captcha.php</li>
            <li><a href="captchaverify.asp?captchacode=test">captchaverify.asp?captchacode=test</a> → captchaverify.php</li>
        </ul>
        
        <h2>Test the CAPTCHA</h2>
        <p>Go to your <a href="contact-us.php">Contact Us page</a> to test the full functionality.</p>
    </div>
    
    <div class="info" style="margin-top: 20px;">
        <h3>Server Information</h3>
        <div class="code">
            Requested URI: <?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?><br>
            Script Name: <?php echo htmlspecialchars($_SERVER['SCRIPT_NAME']); ?><br>
            PHP Version: <?php echo phpversion(); ?><br>
            Server Software: <?php echo htmlspecialchars($_SERVER['SERVER_SOFTWARE']); ?>
        </div>
    </div>
</body>
</html>

