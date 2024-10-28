<?php
$host = 'localhost';
$db = 'restoran';
$user = 'root'; // Adjust if necessary
$pass = ''; // Adjust if necessary

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    error_log($e->getMessage(), 3, 'path/to/your/logs/error.log'); // Change this to a valid log path
    die("Database connection failed: " . $e->getMessage()); // Output the error for debugging
}
?>
