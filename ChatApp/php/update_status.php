<?php
session_start();
include_once "config.php";

if (isset($_SESSION['unique_id'])) {
    $unique_id = $_SESSION['unique_id'];
    $status = "Online";

    $update_status = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$unique_id}");
    if ($update_status) {
        echo "Status updated.";
    } else {
        echo "Failed to update status.";
    }
}
?>