<?php
session_start();
require 'mydbconn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    try {
        $stmt->execute([$username, $email, $hashed_password]);
        $_SESSION["success"] = "Registration successful! Please login.";
        header("Location: login.php");
        exit;
    } catch (PDOException $e) {
        $_SESSION["error"] = "Username or Email already exists.";
    }
}
?>

<?php include 'header.php'; ?>
<div class="card shadow-sm p-4">
    <h2 class="text-center mb-4">Sign Up</h2>
    <?php if (!empty($_SESSION["error"])): ?>
        <div class="alert alert-danger"><?= $_SESSION["error"]; unset($_SESSION["error"]); ?></div>
    <?php endif; ?>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Sign Up</button>
        <p class="mt-3 text-center">Already have an account? <a href="login.php">Login</a></p>
    </form>
</div>
</div>
</body>
</html>
