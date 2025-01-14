<?php
// Database credentials
$host = 'localhost';
$dbname = 'chatapp'; // Must match the database name
$username = 'root'; // Default username for XAMPP
$password = ''; // Default password for XAMPP (usually empty)

try {
    // Connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Uncomment the following line for testing the connection
    // echo "Database connected successfully!";
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}
?>
