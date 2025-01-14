<?php
// Database configuration
$host = 'localhost';  // Your database host (e.g., 'localhost' or your database server IP)
$username = 'root';    // Your database username (usually 'root' for local development)
$password = '';        // Your database password (leave empty for localhost)
$dbname = 'chatapp';  // The name of your database

// Create database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set the character encoding to UTF-8 (optional but recommended for handling special characters)
mysqli_set_charset($conn, "utf8");
?>
