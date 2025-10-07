<?php
session_start();
require 'mydbconn.php';

header('Content-Type: application/json');

$action = $_POST['action'] ?? '';

if ($action === 'signup') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $pass = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);

    try {
        $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $pass]);
        echo json_encode(["status" => "success", "message" => "Signup successful! Please login."]);
    } catch (PDOException $e) {
        echo json_encode(["status" => "error", "message" => "Email already exists."]);
    }
    exit;
}

if ($action === 'login') {
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($pass, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        echo json_encode(["status" => "success", "name" => $user['name']]);
    } else {
        echo json_encode(["status" => "error", "message" => "Invalid credentials."]);
    }
    exit;
}

if ($action === 'logout') {
    session_destroy();
    echo json_encode(["status" => "success"]);
    exit;
}
