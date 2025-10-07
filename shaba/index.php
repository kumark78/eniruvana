<?php
session_start();
require 'mydbconn.php';

$message = "";

// Handle Signup
if (isset($_POST['action']) && $_POST['action'] === 'signup') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $pass = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);

    try {
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $pass]);
        $message = "<div class='success'>Signup successful! Please login.</div>";
    } catch (PDOException $e) {
        $message = "<div class='error'>Email already exists.</div>";
    }
}

// Handle Login
if (isset($_POST['action']) && $_POST['action'] === 'login') {
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($pass, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['username'];
    } else {
        $message = "<div class='error'>Invalid credentials.</div>";
    }
}

// Handle Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login / Signup</title>
<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: url('bg.jpg') no-repeat center center/cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.card {
    background: rgba(255,255,255,0.95);
    padding: 30px;
    border-radius: 12px;
    width: 350px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.3);
    animation: fadeIn 0.5s ease-in-out;
}
.tabs {
    display: flex;
    margin-bottom: 20px;
}
.tab {
    flex: 1;
    padding: 10px;
    text-align: center;
    cursor: pointer;
    background: #eee;
    transition: 0.3s;
}
.tab.active {
    background: #333;
    color: white;
}
form {
    display: none;
    animation: fadeIn 0.4s ease-in-out;
}
form.active {
    display: block;
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
.success { color: green; margin-bottom: 10px; }
.error { color: red; margin-bottom: 10px; }
nav {
    background: #333;
    padding: 10px;
    text-align: center;
}
nav a {
    color: white;
    margin: 0 10px;
    text-decoration: none;
}
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>
<script>
function showTab(tabName) {
    document.querySelectorAll('form').forEach(f => f.classList.remove('active'));
    document.getElementById(tabName).classList.add('active');
    document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
    document.getElementById(tabName+'-tab').classList.add('active');
}
</script>
</head>
<body>
<div class="card">
<?php if (!isset($_SESSION['user_id'])): ?>
    <div class="tabs">
        <div id="login-tab" class="tab active" onclick="showTab('login')">Login</div>
        <div id="signup-tab" class="tab" onclick="showTab('signup')">Signup</div>
    </div>
    <?php echo $message; ?>
    <form id="login" class="active" method="POST">
        <input type="hidden" name="action" value="login">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    <form id="signup" method="POST">
        <input type="hidden" name="action" value="signup">
        <input type="text" name="username" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Signup</button>
    </form>
<?php else: ?>
    <nav>
        <a href="#">Home</a>
        <a href="#">Profile</a>
        <a href="index.php?logout=1">Logout</a>
    </nav>
    <h3>Welcome, <?php echo $_SESSION['user_name']; ?>!</h3>
    <p>This is your dashboard content.</p>
<?php endif; ?>
</div>
</body>
</html>
