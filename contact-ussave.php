<?php
// Contact Form Handler - PHP Version
// Converted from contact-ussave.asp

// Get form data
$postapply = isset($_POST['postapply']) ? $_POST['postapply'] : '';
$ser = isset($_POST['ser']) ? $_POST['ser'] : '';
$serv = isset($_POST['serv']) ? $_POST['serv'] : '';
$name = isset($_POST['nam']) ? $_POST['nam'] : '';
$cname = isset($_POST['cname']) ? $_POST['cname'] : '';
$email = isset($_POST['emailid']) ? $_POST['emailid'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$require = isset($_POST['requir']) ? $_POST['requir'] : '';

// Basic validation
if (empty($name) || empty($email) || empty($phone)) {
    die('Error: Required fields are missing.');
}

// Sanitize input data
$name = htmlspecialchars(trim($name), ENT_QUOTES, 'UTF-8');
$cname = htmlspecialchars(trim($cname), ENT_QUOTES, 'UTF-8');
$email = filter_var(trim($email), FILTER_SANITIZE_EMAIL);
$address = htmlspecialchars(trim($address), ENT_QUOTES, 'UTF-8');
$phone = htmlspecialchars(trim($phone), ENT_QUOTES, 'UTF-8');
$require = htmlspecialchars(trim($require), ENT_QUOTES, 'UTF-8');
$service = !empty($ser) ? htmlspecialchars(trim($ser), ENT_QUOTES, 'UTF-8') : htmlspecialchars(trim($serv), ENT_QUOTES, 'UTF-8');

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die('Error: Invalid email address.');
}

// Create email body
$bodystr = "<style>.scopy{font-family:arial;font-style: normal;font-size:12px;font-weight:normal;color: #2AB529;}</style>";
$bodystr .= "<table cellpadding='5' cellspacing='2' border='0' width='500' align='center' bgcolor='#67E164'>";
$bodystr .= "<tr bgcolor='#ffffff'><td colspan='2' class='scopy'><img src='http://www.eniruvana.com/newsite/images/enlogo.png' align='center'><br></td></tr>";
$bodystr .= "<tr bgcolor='#ffffff'><td class='scopy'><b>Enquired for the Service</b></td><td class='scopy'>" . $service . "</td></tr>";
$bodystr .= "<tr bgcolor='#ffffff'><td width='150' class='scopy'><b>Name</b></td><td width='350' class='scopy'>" . $name . "</td></tr>";
$bodystr .= "<tr bgcolor='#ffffff'><td class='scopy'><b>Company Name</b></td><td class='scopy'>" . $cname . "</td></tr>";
$bodystr .= "<tr bgcolor='#ffffff'><td class='scopy'><b>Email</b></td><td class='scopy'>" . $email . "</td></tr>";
$bodystr .= "<tr bgcolor='#ffffff'><td class='scopy'><b>Address</b></td><td class='scopy'>" . $address . "</td></tr>";
$bodystr .= "<tr bgcolor='#ffffff'><td class='scopy'><b>Phone</b></td><td class='scopy'>" . $phone . "</td></tr>";
$bodystr .= "<tr bgcolor='#ffffff'><td class='scopy'><b>Requirement</b></td><td class='scopy'>" . $require . "</td></tr>";
$bodystr .= "</table>";

// Email configuration
$to = "sales@eniruvana.com";
$subject = "eniruvana - Contact Us";
$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Send email
$mailSent = mail($to, $subject, $bodystr, $headers);

if ($mailSent) {
    // Success - redirect with success message
    echo "<script>
        alert('Thank you for your interest. One of our Representative will get in touch with you shortly. Thank you for your support');
        window.location.href = 'contact-us.php';
    </script>";
} else {
    // Error - redirect with error message
    echo "<script>
        alert('Sorry, there was an error sending your message. Please try again later.');
        window.location.href = 'contact-us.php';
    </script>";
}
?>
