<?php
session_start();
require 'mydbconn.php';
$activeTab = "login"; // Default tab

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["signup"])) {
        $username = trim($_POST["username"]);
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        try {
            $stmt->execute([$username, $email, $hashed_password]);
            $_SESSION["success"] = "Registration successful! Please login.";
            $activeTab = "login";
        } catch (PDOException $e) {
            $_SESSION["error"] = "Username or Email already exists.";
            $activeTab = "signup";
        }

    } elseif (isset($_POST["login"])) {
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
            $activeTab = "login";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Auth</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?auto=format&fit=crop&w=1740&q=80') no-repeat center center fixed;
            background-size: cover;
        }
        .overlay {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0,0,0,0.5);
        }
        .auth-card {
            backdrop-filter: blur(10px);
            background: rgba(255,255,255,0.1);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.3);
            opacity: 0;
            transform: translateY(-20px);
            animation: fadeIn 0.8s ease forwards;
        }
        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .tab-pane {
            opacity: 0;
            transform: scale(0.98);
            transition: all 0.4s ease;
        }
        .tab-pane.show.active {
            opacity: 1;
            transform: scale(1);
        }
        .form-control {
            background-color: rgba(255,255,255,0.85);
        }
        .nav-tabs .nav-link.active {
            background-color: rgba(255,255,255,0.9);
            border-color: transparent;
            color: #000;
        }
        .nav-tabs .nav-link {
            color: #fff;
        }
    </style>
</head>
<body>
<div class="overlay"></div>
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="auth-card col-md-5">
        <h2 class="text-center text-white mb-4">User Authentication</h2>

        <?php if (!empty($_SESSION["error"])): ?>
            <div class="alert alert-danger"><?= $_SESSION["error"]; unset($_SESSION["error"]); ?></div>
        <?php endif; ?>
        <?php if (!empty($_SESSION["success"])): ?>
            <div class="alert alert-success"><?= $_SESSION["success"]; unset($_SESSION["success"]); ?></div>
        <?php endif; ?>

        <!-- Tabs -->
        <ul class="nav nav-tabs justify-content-center mb-3" id="authTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link <?= ($activeTab == 'login') ? 'active' : '' ?>" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab">Login</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link <?= ($activeTab == 'signup') ? 'active' : '' ?>" id="signup-tab" data-bs-toggle="tab" data-bs-target="#signup" type="button" role="tab">Sign Up</button>
            </li>
        </ul>

        <div class="tab-content">
            <!-- LOGIN FORM -->
            <div class="tab-pane fade <?= ($activeTab == 'login') ? 'show active' : '' ?>" id="login" role="tabpanel">
                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label text-white">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" name="login" class="btn btn-success w-100">Login</button>
                </form>
            </div>

            <!-- SIGNUP FORM -->
            <div class="tab-pane fade <?= ($activeTab == 'signup') ? 'show active' : '' ?>" id="signup" role="tabpanel">
                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label text-white">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" name="signup" class="btn btn-primary w-100">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
