<?php
session_start();
require 'mydbconn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["user"] = $user["username"];
        header("Location: welcome.php");
        exit;
    } else {
        $_SESSION["error"] = "Invalid username or password.";
    }
}
?>

<?php include 'header.php'; ?>
<div class="card shadow-sm p-4">
    <h2 class="text-center mb-4">Login</h2>
    <?php if (!empty($_SESSION["error"])): ?>
        <div class="alert alert-danger"><?= $_SESSION["error"]; unset($_SESSION["error"]); ?></div>
    <?php endif; ?>
    <?php if (!empty($_SESSION["success"])): ?>
        <div class="alert alert-success"><?= $_SESSION["success"]; unset($_SESSION["success"]); ?></div>
    <?php endif; ?>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success w-100">Login</button>
        <p class="mt-3 text-center">Don’t have an account? <a href="signup.php">Sign Up</a></p>
    </form>
</div>
</div>
</body>
</html>
