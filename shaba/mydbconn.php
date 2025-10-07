<?php
$host = "localhost";
$dbname = "shabadb";
$username = "sabhauser"; // change if needed
$password = "S@hb@Ns36";     // change if needed

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
