<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
</head>
<body>
<nav>
    <a href="dashboard.php">Home</a>
    <a href="profile.php">Profile</a>
    <a href="logout.php">Logout</a>
</nav>
<h1>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h1>
</body>
</html>
