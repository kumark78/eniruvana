<?php
require 'mydbconn.php';
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["FIRSTname"]);
    $email = trim($_POST["email"]);
    $msg = trim($_POST["message"]);

    if (!empty($name) && !empty($email) && !empty($msg)) {
        $stmt = $conn->prepare("INSERT INTO contact_form (FIRSTname, email, message) VALUES (?, ?, ?)");
        if ($stmt->execute([$name, $email, $msg])) {
            $message = "<div style='color:green;'>Data saved successfully!</div>";
        } else {
            $message = "<div style='color:red;'>Error saving data.</div>";
        }
    } else {
        $message = "<div style='color:red;'>Please fill all fields.</div>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>
<h2>Contact Form</h2>
<?php echo $message; ?>
<form method="POST">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Message:</label><br>
    <textarea name="message" required></textarea><br><br>

    <button type="submit">Submit</button>
</form>
</body>
</html>
