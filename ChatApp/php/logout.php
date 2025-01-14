<?php
session_start();
include_once "config.php";

if (isset($_SESSION['unique_id'])) {
    $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);

    if (isset($logout_id)) {
        // Update user status to "Offline"
        $status = "Offline";
        $update_status = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$logout_id}");

        if ($update_status) {
            session_unset();
            session_destroy();
            header("Location: ../login.php");
        } else {
            echo "Failed to update status.";
        }
    }
} else {
    header("Location: ../login.php");
}
?>
