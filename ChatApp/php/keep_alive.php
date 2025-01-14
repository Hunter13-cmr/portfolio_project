<?php
session_start();
include_once "config.php";

if (isset($_SESSION['unique_id'])) {
    $unique_id = $_SESSION['unique_id'];
    $status = "Online";

    $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$unique_id}");

    if (!$sql) {
        echo "Error: " . mysqli_error($conn);  // Debugging output
    }
} else {
    echo "No session found!";
}
?>