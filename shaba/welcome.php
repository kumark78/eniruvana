<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}
?>

<?php include 'header.php'; ?>
<div class="card shadow-sm p-4 text-center">
    <h2 class="mb-4">Welcome, <?= $_SESSION["user"]; ?>!</h2>
    <a href="logout.php" class="btn btn-danger">Logout</a>
</div>
</div>
</body>
</html>
