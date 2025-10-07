<?php
session_start();
require 'mydbconn.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

$message = "";

// Fetch user details
$stmt = $conn->prepare("SELECT username, email FROM users WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if (!empty($name) && !empty($email)) {
        if (!empty($password)) {
            $hashedPass = password_hash($password, PASSWORD_DEFAULT);
            $update = $conn->prepare("UPDATE users SET username = ?, email = ?, password = ? WHERE id = ?");
            $update->execute([$name, $email, $hashedPass, $_SESSION['user_id']]);
        } else {
            $update = $conn->prepare("UPDATE users SET username = ?, email = ? WHERE id = ?");
            $update->execute([$name, $email, $_SESSION['user_id']]);
        }
        $_SESSION['user_name'] = $name; // Update session name
        $message = "<div class='success'>Profile updated successfully!</div>";

        // Refresh user details
        $user["username"] = $name;
        $user["email"] = $email;
    } else {
        $message = "<div class='error'>Name and Email cannot be empty.</div>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: url('bg.jpg') no-repeat center center/cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.card {
    background: rgba(255,255,255,0.95);
    padding: 30px;
    border-radius: 12px;
    width: 350px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.3);
    animation: fadeIn 0.5s ease-in-out;
}
input {
    width: 100%;
    padding: 10px;
    margin-bottom: 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
}
button {
    width: 100%;
    padding: 10px;
    background: #333;
    color: white;
    border: none;
    border-radius: 6px;
    cursor: pointer;
}
button:hover {
    background: #555;
}
nav {
    text-align: center;
    margin-bottom: 20px;
}
nav a {
    margin: 0 10px;
    text-decoration: none;
    color: #333;
}
.success { color: green; margin-bottom: 10px; }
.error { color: red; margin-bottom: 10px; }
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>
</head>
<body>

<div class="card">
    <nav>
        <a href="dashboard.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="logout.php">Logout</a>
    </nav>

    <h3>Edit Profile</h3>
    <?php echo $message; ?>
    <form method="POST">
        <input type="text" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" required>
        <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
        <input type="password" name="password" placeholder="New Password (leave blank to keep same)">
        <button type="submit">Update Profile</button>
    </form>
</div>

</body>
</html>
